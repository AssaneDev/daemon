<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\EvaluationFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class EvaluationController extends Controller
{
    public function show()
    {
        return view('evaluation.form');
    }

    public function submit(Request $request)
    {
        Log::info('🔍 Début de soumission du formulaire', ['data' => $request->all()]);

        // Validation des données
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'etablissement' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            Log::error('❌ Validation échouée', ['errors' => $validator->errors()]);
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Nettoyer et structurer les données
            $formData = $this->cleanFormData($request->all());
            Log::info('✅ Données nettoyées', ['clean_data' => $formData]);
            
            // ✅ CORRECTION: Vérification stricte de l'email admin
            $adminEmail = config('mail.admin_email') ?? env('MAIL_ADMIN_EMAIL');
            
            Log::info('📧 Configuration email', [
                'admin_email' => $adminEmail,
                'from_address' => config('mail.from.address'),
                'mailer' => config('mail.default')
            ]);
            
            // ✅ CORRECTION: Validation stricte de l'email admin
            if (empty($adminEmail) || !filter_var($adminEmail, FILTER_VALIDATE_EMAIL)) {
                throw new \Exception('Email administrateur non configuré ou invalide: ' . $adminEmail);
            }

            // ✅ CORRECTION: Validation de la configuration email
            $this->validateMailConfiguration();

            // ✅ CORRECTION: Envoi avec gestion d'erreur améliorée
            Log::info('📤 Tentative d\'envoi à l\'admin: ' . $adminEmail);
            
            try {
                Mail::to($adminEmail)->send(new EvaluationFormMail($formData, false));
                Log::info('✅ Email admin envoyé avec succès');
            } catch (\Exception $mailError) {
                Log::error('❌ Erreur envoi email admin', [
                    'error' => $mailError->getMessage(),
                    'admin_email' => $adminEmail
                ]);
                throw new \Exception('Échec envoi email admin: ' . $mailError->getMessage());
            }

            // ✅ CORRECTION: Email de confirmation avec validation
            if (!empty($formData['email']) && filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) {
                Log::info('📤 Tentative d\'envoi de confirmation à: ' . $formData['email']);
                try {
                    Mail::to($formData['email'])->send(new EvaluationFormMail($formData, true));
                    Log::info('✅ Email de confirmation envoyé');
                } catch (\Exception $confirmError) {
                    Log::warning('⚠️ Échec envoi confirmation (non critique)', [
                        'error' => $confirmError->getMessage(),
                        'participant_email' => $formData['email']
                    ]);
                    // Ne pas faire échouer la requête si seule la confirmation échoue
                }
            }

            return response()->json([
                'success' => true,
                'message' => 'Évaluation soumise avec succès!',
                'debug' => [
                    'admin_email' => $adminEmail,
                    'participant_email' => $formData['email'],
                    'timestamp' => now()->toDateTimeString()
                ]
            ]);

        } catch (\Exception $e) {
            Log::error('❌ Erreur lors de l\'envoi', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'line' => $e->getLine(),
                'file' => $e->getFile()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Erreur lors de l\'envoi: ' . $e->getMessage(),
                'debug' => [
                    'error_line' => $e->getLine(),
                    'error_file' => basename($e->getFile())
                ]
            ], 500);
        }
    }

    /**
     * ✅ NOUVELLE MÉTHODE: Validation complète de la configuration email
     */
    private function validateMailConfiguration()
    {
        $requiredConfigs = [
            'mail.default' => config('mail.default'),
            'mail.from.address' => config('mail.from.address'),
            'mail.from.name' => config('mail.from.name'),
        ];

        foreach ($requiredConfigs as $key => $value) {
            if (empty($value)) {
                throw new \Exception("Configuration manquante: {$key}");
            }
        }

        // Vérification spécifique pour SMTP
        if (config('mail.default') === 'smtp') {
            $smtpConfigs = [
                'mail.mailers.smtp.host' => config('mail.mailers.smtp.host'),
                'mail.mailers.smtp.port' => config('mail.mailers.smtp.port'),
                'mail.mailers.smtp.username' => config('mail.mailers.smtp.username'),
                'mail.mailers.smtp.password' => config('mail.mailers.smtp.password'),
            ];

            foreach ($smtpConfigs as $key => $value) {
                if (empty($value)) {
                    throw new \Exception("Configuration SMTP manquante: {$key}");
                }
            }
        }

        Log::info('✅ Configuration email validée');
    }


     private function cleanFormData($data)
    {
        $cleanData = [];
        
        $cleanData['nom'] = $data['nom'] ?? '';
        $cleanData['email'] = $data['email'] ?? '';
        $cleanData['etablissement'] = $data['etablissement'] ?? '';
        $cleanData['matiere'] = $data['matiere'] ?? 'Non spécifiée';
        $cleanData['experience'] = $this->formatExperience($data['experience'] ?? '');
        $cleanData['frequence_utilisation'] = $this->formatFrequence($data['frequence_utilisation'] ?? '');
        $cleanData['logiciels'] = $this->formatArray($data['logiciels'] ?? []);
        $cleanData['niveau_general'] = $this->formatNiveau($data['niveau_general'] ?? '');
        
        $cleanData['competences'] = [
            'word' => $this->formatCompetenceLevel($data['competence_word'] ?? ''),
            'excel' => $this->formatCompetenceLevel($data['competence_excel'] ?? ''),
            'presentation' => $this->formatCompetenceLevel($data['competence_presentation'] ?? ''),
            'internet' => $this->formatCompetenceLevel($data['competence_internet'] ?? '')
        ];
        
        $cleanData['difficultes'] = $this->formatArray($data['difficultes'] ?? []);
        $cleanData['perfectionnement'] = $this->formatArray($data['perfectionnement'] ?? []);
        $cleanData['disponibilite'] = $this->formatDisponibilite($data['disponibilite'] ?? '');
        $cleanData['format_formation'] = $this->formatFormatFormation($data['format_formation'] ?? '');
        $cleanData['duree_session'] = $this->formatDureeSession($data['duree_session'] ?? '');
        $cleanData['accompagnement'] = $this->formatArray($data['accompagnement'] ?? []);
        $cleanData['objectifs_specifiques'] = $data['objectifs_specifiques'] ?? '';
        $cleanData['commentaires'] = $data['commentaires'] ?? '';
        $cleanData['date_soumission'] = now()->format('d/m/Y à H:i');
        
        return $cleanData;
    }

    private function formatExperience($experience) {
        $experiences = ['0-2' => '0-2 ans', '3-5' => '3-5 ans', '6-10' => '6-10 ans', '10+' => 'Plus de 10 ans'];
        return $experiences[$experience] ?? 'Non spécifiée';
    }

    private function formatFrequence($frequence) {
        $frequences = ['quotidienne' => 'Quotidiennement', 'hebdomadaire' => 'Plusieurs fois par semaine', 'occasionnelle' => 'Occasionnellement', 'rarement' => 'Rarement'];
        return $frequences[$frequence] ?? 'Non spécifiée';
    }

    private function formatNiveau($niveau) {
        $niveaux = ['debutant' => 'Débutant', 'intermediaire' => 'Intermédiaire', 'avance' => 'Avancé', 'expert' => 'Expert'];
        return $niveaux[$niveau] ?? 'Non évalué';
    }

    private function formatCompetenceLevel($level) {
        $levels = ['1' => '1 - Aucune connaissance', '2' => '2 - Niveau basique', '3' => '3 - Niveau moyen', '4' => '4 - Bon niveau', '5' => '5 - Expert'];
        return $levels[$level] ?? 'Non évalué';
    }

    private function formatFormatFormation($format) {
        $formats = ['presentiel' => 'Présentiel', 'en_ligne' => 'En ligne', 'mixte' => 'Mixte', 'auto_formation' => 'Auto-formation guidée'];
        return $formats[$format] ?? 'Non spécifié';
    }

    private function formatDureeSession($duree) {
        $durees = ['1h' => '1 heure', '2h' => '2 heures', 'demi_journee' => 'Demi-journée', 'journee_complete' => 'Journée complète'];
        return $durees[$duree] ?? 'Non spécifiée';
    }

    private function formatDisponibilite($disponibilite) {
        $disponibilites = ['soir_semaine' => 'Soirs de semaine', 'weekend' => 'Week-ends', 'vacances' => 'Vacances scolaires', 'flexible' => 'Flexible'];
        return $disponibilites[$disponibilite] ?? 'Non spécifiée';
    }

    private function formatArray($array) {
        if (!is_array($array) || empty($array)) return [];
        
        $mappings = [
            'word' => 'Microsoft Word', 'excel' => 'Microsoft Excel', 'powerpoint' => 'PowerPoint',
            'google_docs' => 'Google Docs/Sheets', 'ent' => 'ENT', 'logiciels_educatifs' => 'Logiciels éducatifs',
            'lenteur' => 'Lenteur d\'exécution', 'peur_erreur' => 'Peur de faire des erreurs',
            'vocabulaire' => 'Vocabulaire technique', 'fonctions_avancees' => 'Fonctions avancées',
            'installation' => 'Installation de logiciels', 'maintenance' => 'Maintenance et dépannage',
            'bureautique' => 'Bureautique avancée', 'internet_pedagogique' => 'Utilisation pédagogique d\'Internet',
            'multimedia' => 'Création multimédia', 'tableur_avance' => 'Tableur avancé',
            'presentation_interactive' => 'Présentations interactives', 'outils_collaboratifs' => 'Outils collaboratifs',
            'support_technique' => 'Support technique', 'tutoriel_video' => 'Tutoriels vidéo',
            'documentation' => 'Documentation écrite', 'forum_entraide' => 'Forum d\'entraide',
            'mentoring' => 'Mentoring personnalisé', 'exercices_pratiques' => 'Exercices pratiques'
        ];
        
        return array_map(function($item) use ($mappings) {
            return $mappings[$item] ?? $item;
        }, $array);
    }
}