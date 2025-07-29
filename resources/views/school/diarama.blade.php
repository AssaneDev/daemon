<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Évaluation du Niveau en Informatique</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .form-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 800px;
            overflow: hidden;
            position: relative;
        }

        .progress-bar {
            height: 6px;
            background: #e3f2fd;
            position: relative;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #4facfe 0%, #00f2fe 100%);
            width: 0%;
            transition: width 0.5s ease;
        }

        .form-header {
            padding: 30px 40px 20px;
            text-align: center;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }

        .form-header h2 {
            color: #2c3e50;
            margin-bottom: 10px;
            font-size: 28px;
            font-weight: 700;
        }

        .form-header p {
            color: #7f8c8d;
            font-size: 16px;
        }

        .step-indicator {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px 0;
            gap: 20px;
        }

        .step {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #ecf0f1;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #95a5a6;
            transition: all 0.3s ease;
            position: relative;
        }

        .step.active {
            background: #3498db;
            color: white;
            transform: scale(1.1);
        }

        .step.completed {
            background: #27ae60;
            color: white;
        }

        .step-line {
            width: 50px;
            height: 2px;
            background: #ecf0f1;
            transition: background 0.3s ease;
        }

        .step-line.completed {
            background: #27ae60;
        }

        .form-content {
            padding: 40px;
        }

        .step-content {
            display: none;
            animation: fadeIn 0.5s ease;
        }

        .step-content.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .step-title {
            font-size: 24px;
            color: #2c3e50;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #34495e;
            font-weight: 500;
            font-size: 16px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e3f2fd;
            border-radius: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: #fafafa;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #3498db;
            background: white;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
        }

        .radio-group {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-top: 15px;
        }

        .radio-option {
            position: relative;
            cursor: pointer;
        }

        .radio-option input {
            position: absolute;
            opacity: 0;
        }

        .radio-option label {
            display: block;
            padding: 15px 20px;
            background: #f8f9fa;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
            font-weight: 500;
        }

        .radio-option input:checked + label {
            background: #e3f2fd;
            border-color: #3498db;
            color: #2980b9;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(52, 152, 219, 0.2);
        }

        .checkbox-group {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 12px;
            margin-top: 15px;
        }

        .checkbox-option {
            position: relative;
        }

        .checkbox-option input {
            position: absolute;
            opacity: 0;
        }

        .checkbox-option label {
            display: block;
            padding: 12px 16px;
            background: #f8f9fa;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .checkbox-option input:checked + label {
            background: #e8f5e8;
            border-color: #27ae60;
            color: #27ae60;
        }

        .form-navigation {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 40px;
            padding-top: 30px;
            border-top: 1px solid #ecf0f1;
        }

        .btn {
            padding: 12px 30px;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-prev {
            background: #95a5a6;
            color: white;
        }

        .btn-prev:hover {
            background: #7f8c8d;
            transform: translateY(-2px);
        }

        .btn-next {
            background: linear-gradient(45deg, #3498db, #2980b9);
            color: white;
        }

        .btn-next:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(52, 152, 219, 0.3);
        }

        .btn-submit {
            background: linear-gradient(45deg, #27ae60, #2ecc71);
            color: white;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(39, 174, 96, 0.3);
        }

        .btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none !important;
        }

        .skill-level {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 10px;
            margin-top: 10px;
        }

        .skill-level-item {
            text-align: center;
            padding: 10px 5px;
            background: #f8f9fa;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 14px;
        }

        .skill-level-item input {
            display: none;
        }

        .skill-level-item:hover {
            background: #e3f2fd;
        }

        .skill-level-item input:checked + label {
            background: #3498db;
            color: white;
            border-color: #2980b9;
        }

        .completion-message {
            text-align: center;
            padding: 40px 20px;
        }

        .completion-message h3 {
            color: #27ae60;
            font-size: 28px;
            margin-bottom: 15px;
        }

        .completion-message p {
            color: #7f8c8d;
            font-size: 18px;
            line-height: 1.6;
        }

        .success-icon {
            font-size: 80px;
            color: #27ae60;
            margin-bottom: 20px;
        }

        @media (max-width: 768px) {
            .form-container {
                margin: 10px;
            }
            
            .form-content {
                padding: 20px;
            }
            
            .form-header {
                padding: 20px;
            }
            
            .step-indicator {
                gap: 10px;
            }
            
            .step {
                width: 30px;
                height: 30px;
                font-size: 14px;
            }
            
            .step-line {
                width: 30px;
            }
            
            .radio-group,
            .checkbox-group {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="progress-bar">
            <div class="progress-fill" id="progressFill"></div>
        </div>
        
        <div class="form-header">
            <h2>Évaluation du Niveau en Informatique</h2>
            <p>Aidez-nous à concevoir un programme de formation adapté à vos besoins</p>
            
            <div class="step-indicator">
                <div class="step active" id="step1">1</div>
                <div class="step-line" id="line1"></div>
                <div class="step" id="step2">2</div>
                <div class="step-line" id="line2"></div>
                <div class="step" id="step3">3</div>
                <div class="step-line" id="line3"></div>
                <div class="step" id="step4">4</div>
                <div class="step-line" id="line4"></div>
                <div class="step" id="step5">5</div>
            </div>
        </div>

        <form id="evaluationForm" class="form-content">
            <!-- Étape 1: Informations personnelles -->
            <div class="step-content active" id="content1">
                <h3 class="step-title">Informations Personnelles</h3>
                
                <div class="form-group">
                    <label for="nom">Nom complet *</label>
                    <input type="text" id="nom" name="nom" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Adresse e-mail *</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="etablissement">Établissement scolaire *</label>
                    <input type="text" id="etablissement" name="etablissement" required>
                </div>
                
                <div class="form-group">
                    <label for="matiere">Matière principale enseignée</label>
                    <select id="matiere" name="matiere">
                        <option value="">Sélectionnez une matière</option>
                        <option value="mathematiques">Mathématiques</option>
                        <option value="sciences">Sciences</option>
                        <option value="francais">Français</option>
                        <option value="histoire-geo">Histoire-Géographie</option>
                        <option value="langues">Langues étrangères</option>
                        <option value="eps">EPS</option>
                        <option value="arts">Arts</option>
                        <option value="informatique">Informatique</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="experience">Années d'expérience dans l'enseignement</label>
                    <div class="radio-group">
                        <div class="radio-option">
                            <input type="radio" id="exp1" name="experience" value="0-2">
                            <label for="exp1">0-2 ans</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="exp2" name="experience" value="3-5">
                            <label for="exp2">3-5 ans</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="exp3" name="experience" value="6-10">
                            <label for="exp3">6-10 ans</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="exp4" name="experience" value="10+">
                            <label for="exp4">Plus de 10 ans</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Étape 2: Utilisation actuelle de l'informatique -->
            <div class="step-content" id="content2">
                <h3 class="step-title">Utilisation Actuelle de l'Informatique</h3>
                
                <div class="form-group">
                    <label>À quelle fréquence utilisez-vous un ordinateur dans votre travail ?</label>
                    <div class="radio-group">
                        <div class="radio-option">
                            <input type="radio" id="freq1" name="frequence_utilisation" value="quotidienne">
                            <label for="freq1">Quotidiennement</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="freq2" name="frequence_utilisation" value="hebdomadaire">
                            <label for="freq2">Plusieurs fois par semaine</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="freq3" name="frequence_utilisation" value="occasionnelle">
                            <label for="freq3">Occasionnellement</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="freq4" name="frequence_utilisation" value="rarement">
                            <label for="freq4">Rarement</label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Quels logiciels utilisez-vous régulièrement ? (plusieurs choix possibles)</label>
                    <div class="checkbox-group">
                        <div class="checkbox-option">
                            <input type="checkbox" id="word" name="logiciels[]" value="word">
                            <label for="word">Microsoft Word</label>
                        </div>
                        <div class="checkbox-option">
                            <input type="checkbox" id="excel" name="logiciels[]" value="excel">
                            <label for="excel">Microsoft Excel</label>
                        </div>
                        <div class="checkbox-option">
                            <input type="checkbox" id="powerpoint" name="logiciels[]" value="powerpoint">
                            <label for="powerpoint">PowerPoint</label>
                        </div>
                        <div class="checkbox-option">
                            <input type="checkbox" id="google_docs" name="logiciels[]" value="google_docs">
                            <label for="google_docs">Google Docs/Sheets</label>
                        </div>
                        <div class="checkbox-option">
                            <input type="checkbox" id="ent" name="logiciels[]" value="ent">
                            <label for="ent">ENT (Espace Numérique de Travail)</label>
                        </div>
                        <div class="checkbox-option">
                            <input type="checkbox" id="logiciels_educatifs" name="logiciels[]" value="logiciels_educatifs">
                            <label for="logiciels_educatifs">Logiciels éducatifs spécialisés</label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Comment évaluez-vous votre niveau général en informatique ?</label>
                    <div class="radio-group">
                        <div class="radio-option">
                            <input type="radio" id="niveau1" name="niveau_general" value="debutant">
                            <label for="niveau1">Débutant</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="niveau2" name="niveau_general" value="intermediaire">
                            <label for="niveau2">Intermédiaire</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="niveau3" name="niveau_general" value="avance">
                            <label for="niveau3">Avancé</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="niveau4" name="niveau_general" value="expert">
                            <label for="niveau4">Expert</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Étape 3: Compétences techniques spécifiques -->
            <div class="step-content" id="content3">
                <h3 class="step-title">Compétences Techniques Spécifiques</h3>
                
                <div class="form-group">
                    <label>Évaluez votre niveau pour chaque compétence (1 = Aucune connaissance, 5 = Expert)</label>
                    
                    <div style="margin-bottom: 20px;">
                        <p><strong>Traitement de texte (Word, Google Docs)</strong></p>
                        <div class="skill-level">
                            <div class="skill-level-item">
                                <input type="radio" id="word_1" name="competence_word" value="1">
                                <label for="word_1">1<br>Aucune</label>
                            </div>
                            <div class="skill-level-item">
                                <input type="radio" id="word_2" name="competence_word" value="2">
                                <label for="word_2">2<br>Basique</label>
                            </div>
                            <div class="skill-level-item">
                                <input type="radio" id="word_3" name="competence_word" value="3">
                                <label for="word_3">3<br>Moyen</label>
                            </div>
                            <div class="skill-level-item">
                                <input type="radio" id="word_4" name="competence_word" value="4">
                                <label for="word_4">4<br>Bon</label>
                            </div>
                            <div class="skill-level-item">
                                <input type="radio" id="word_5" name="competence_word" value="5">
                                <label for="word_5">5<br>Expert</label>
                            </div>
                        </div>
                    </div>
                    
                    <div style="margin-bottom: 20px;">
                        <p><strong>Tableur (Excel, Google Sheets)</strong></p>
                        <div class="skill-level">
                            <div class="skill-level-item">
                                <input type="radio" id="excel_1" name="competence_excel" value="1">
                                <label for="excel_1">1<br>Aucune</label>
                            </div>
                            <div class="skill-level-item">
                                <input type="radio" id="excel_2" name="competence_excel" value="2">
                                <label for="excel_2">2<br>Basique</label>
                            </div>
                            <div class="skill-level-item">
                                <input type="radio" id="excel_3" name="competence_excel" value="3">
                                <label for="excel_3">3<br>Moyen</label>
                            </div>
                            <div class="skill-level-item">
                                <input type="radio" id="excel_4" name="competence_excel" value="4">
                                <label for="excel_4">4<br>Bon</label>
                            </div>
                            <div class="skill-level-item">
                                <input type="radio" id="excel_5" name="competence_excel" value="5">
                                <label for="excel_5">5<br>Expert</label>
                            </div>
                        </div>
                    </div>
                    
                    <div style="margin-bottom: 20px;">
                        <p><strong>Présentation (PowerPoint, Google Slides)</strong></p>
                        <div class="skill-level">
                            <div class="skill-level-item">
                                <input type="radio" id="ppt_1" name="competence_presentation" value="1">
                                <label for="ppt_1">1<br>Aucune</label>
                            </div>
                            <div class="skill-level-item">
                                <input type="radio" id="ppt_2" name="competence_presentation" value="2">
                                <label for="ppt_2">2<br>Basique</label>
                            </div>
                            <div class="skill-level-item">
                                <input type="radio" id="ppt_3" name="competence_presentation" value="3">
                                <label for="ppt_3">3<br>Moyen</label>
                            </div>
                            <div class="skill-level-item">
                                <input type="radio" id="ppt_4" name="competence_presentation" value="4">
                                <label for="ppt_4">4<br>Bon</label>
                            </div>
                            <div class="skill-level-item">
                                <input type="radio" id="ppt_5" name="competence_presentation" value="5">
                                <label for="ppt_5">5<br>Expert</label>
                            </div>
                        </div>
                    </div>
                    
                    <div style="margin-bottom: 20px;">
                        <p><strong>Internet et recherche en ligne</strong></p>
                        <div class="skill-level">
                            <div class="skill-level-item">
                                <input type="radio" id="internet_1" name="competence_internet" value="1">
                                <label for="internet_1">1<br>Aucune</label>
                            </div>
                            <div class="skill-level-item">
                                <input type="radio" id="internet_2" name="competence_internet" value="2">
                                <label for="internet_2">2<br>Basique</label>
                            </div>
                            <div class="skill-level-item">
                                <input type="radio" id="internet_3" name="competence_internet" value="3">
                                <label for="internet_3">3<br>Moyen</label>
                            </div>
                            <div class="skill-level-item">
                                <input type="radio" id="internet_4" name="competence_internet" value="4">
                                <label for="internet_4">4<br>Bon</label>
                            </div>
                            <div class="skill-level-item">
                                <input type="radio" id="internet_5" name="competence_internet" value="5">
                                <label for="internet_5">5<br>Expert</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Étape 4: Besoins et difficultés -->
            <div class="step-content" id="content4">
                <h3 class="step-title">Besoins et Difficultés</h3>
                
                <div class="form-group">
                    <label>Quelles sont vos principales difficultés avec l'informatique ? (plusieurs choix possibles)</label>
                    <div class="checkbox-group">
                        <div class="checkbox-option">
                            <input type="checkbox" id="diff1" name="difficultes[]" value="lenteur">
                            <label for="diff1">Lenteur d'exécution</label>
                        </div>
                        <div class="checkbox-option">
                            <input type="checkbox" id="diff2" name="difficultes[]" value="peur_erreur">
                            <label for="diff2">Peur de faire des erreurs</label>
                        </div>
                        <div class="checkbox-option">
                            <input type="checkbox" id="diff3" name="difficultes[]" value="vocabulaire">
                            <label for="diff3">Vocabulaire technique</label>
                        </div>
                        <div class="checkbox-option">
                            <input type="checkbox" id="diff4" name="difficultes[]" value="fonctions_avancees">
                            <label for="diff4">Fonctions avancées des logiciels</label>
                        </div>
                        <div class="checkbox-option">
                            <input type="checkbox" id="diff5" name="difficultes[]" value="installation">
                            <label for="diff5">Installation de logiciels</label>
                        </div>
                        <div class="checkbox-option">
                            <input type="checkbox" id="diff6" name="difficultes[]" value="maintenance">
                            <label for="diff6">Maintenance et dépannage</label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Dans quels domaines souhaiteriez-vous vous perfectionner ? (plusieurs choix possibles)</label>
                    <div class="checkbox-group">
                        <div class="checkbox-option">
                            <input type="checkbox" id="perf1" name="perfectionnement[]" value="bureautique">
                            <label for="perf1">Bureautique avancée</label>
                        </div>
                        <div class="checkbox-option">
                            <input type="checkbox" id="perf2" name="perfectionnement[]" value="internet_pedagogique">
                            <label for="perf2">Utilisation pédagogique d'Internet</label>
                        </div>
                        <div class="checkbox-option">
                            <input type="checkbox" id="perf3" name="perfectionnement[]" value="multimedia">
                            <label for="perf3">Création multimédia</label>
                        </div>
                        <div class="checkbox-option">
                            <input type="checkbox" id="perf4" name="perfectionnement[]" value="tableur_avance">
                            <label for="perf4">Tableur avancé (formules, graphiques)</label>
                        </div>
                        <div class="checkbox-option">
                            <input type="checkbox" id="perf5" name="perfectionnement[]" value="presentation_interactive">
                            <label for="perf5">Présentations interactives</label>
                        </div>
                        <div class="checkbox-option">
                            <input type="checkbox" id="perf6" name="perfectionnement[]" value="outils_collaboratifs">
                            <label for="perf6">Outils collaboratifs en ligne</label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="disponibilite">Quelle est votre disponibilité pour une formation ?</label>
                    <div class="radio-group">
                        <div class="radio-option">
                            <input type="radio" id="disp1" name="disponibilite" value="soir_semaine">
                            <label for="disp1">Soirs de semaine</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="disp2" name="disponibilite" value="weekend">
                            <label for="disp2">Week-ends</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="disp3" name="disponibilite" value="vacances">
                            <label for="disp3">Vacances scolaires</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="disp4" name="disponibilite" value="flexible">
                            <label for="disp4">Flexible</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Étape 5: Préférences de formation -->
            <div class="step-content" id="content5">
                <h3 class="step-title">Préférences de Formation</h3>
                
                <div class="form-group">
                    <label>Quel format de formation préférez-vous ?</label>
                    <div class="radio-group">
                        <div class="radio-option">
                            <input type="radio" id="format1" name="format_formation" value="presentiel">
                            <label for="format1">Présentiel</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="format2" name="format_formation" value="en_ligne">
                            <label for="format2">En ligne</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="format3" name="format_formation" value="mixte">
                            <label for="format3">Mixte (présentiel + en ligne)</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="format4" name="format_formation" value="auto_formation">
                            <label for="format4">Auto-formation guidée</label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Quelle durée idéale pour une session de formation ?</label>
                    <div class="radio-group">
                        <div class="radio-option">
                            <input type="radio" id="duree1" name="duree_session" value="1h">
                            <label for="duree1">1 heure</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="duree2" name="duree_session" value="2h">
                            <label for="duree2">2 heures</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="duree3" name="duree_session" value="demi_journee">
                            <label for="duree3">Demi-journée</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="duree4" name="duree_session" value="journee_complete">
                            <label for="duree4">Journée complète</label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Quel type d'accompagnement souhaitez-vous ? (plusieurs choix possibles)</label>
                    <div class="checkbox-group">
                        <div class="checkbox-option">
                            <input type="checkbox" id="acc1" name="accompagnement[]" value="support_technique">
                            <label for="acc1">Support technique</label>
                        </div>
                        <div class="checkbox-option">
                            <input type="checkbox" id="acc2" name="accompagnement[]" value="tutoriel_video">
                            <label for="acc2">Tutoriels vidéo</label>
                        </div>
                        <div class="checkbox-option">
                            <input type="checkbox" id="acc3" name="accompagnement[]" value="documentation">
                            <label for="acc3">Documentation écrite</label>
                        </div>
                        <div class="checkbox-option">
                            <input type="checkbox" id="acc4" name="accompagnement[]" value="forum_entraide">
                            <label for="acc4">Forum d'entraide</label>
                        </div>
                        <div class="checkbox-option">
                            <input type="checkbox" id="acc5" name="accompagnement[]" value="mentoring">
                            <label for="acc5">Mentoring personnalisé</label>
                        </div>
                        <div class="checkbox-option">
                            <input type="checkbox" id="acc6" name="accompagnement[]" value="exercices_pratiques">
                            <label for="acc6">Exercices pratiques</label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="objectifs_specifiques">Avez-vous des objectifs spécifiques ou des projets particuliers en tête ?</label>
                    <textarea id="objectifs_specifiques" name="objectifs_specifiques" rows="4" placeholder="Décrivez vos objectifs, projets ou besoins particuliers..."></textarea>
                </div>
                
                <div class="form-group">
                    <label for="commentaires">Commentaires ou suggestions additionnels</label>
                    <textarea id="commentaires" name="commentaires" rows="3" placeholder="Partagez tout autre information qui pourrait nous aider à personnaliser votre formation..."></textarea>
                </div>
            </div>

            <!-- Message de confirmation -->
            <div class="step-content" id="completion">
                <div class="completion-message">
                    <div class="success-icon">✓</div>
                    <h3>Évaluation Terminée !</h3>
                    <p>Merci d'avoir pris le temps de répondre à ce questionnaire.</p>
                    <p>Vos réponses nous aideront à concevoir un programme de formation parfaitement adapté à vos besoins et à votre niveau.</p>
                    <p>Vous recevrez bientôt des informations sur le programme de formation personnalisé.</p>
                </div>
            </div>

            <div class="form-navigation">
                <button type="button" class="btn btn-prev" id="prevBtn" onclick="changeStep(-1)" style="display: none;">Précédent</button>
                <div></div>
                <button type="button" class="btn btn-next" id="nextBtn" onclick="changeStep(1)">Suivant</button>
                <button type="submit" class="btn btn-submit" id="submitBtn" style="display: none;">Terminer l'évaluation</button>
            </div>
        </form>
    </div>

    <script>
        let currentStep = 1;
        const totalSteps = 5;

        function updateProgress() {
            const progress = (currentStep / totalSteps) * 100;
            document.getElementById('progressFill').style.width = progress + '%';
        }

        function updateStepIndicator() {
            for (let i = 1; i <= totalSteps; i++) {
                const step = document.getElementById('step' + i);
                const line = document.getElementById('line' + i);
                
                if (i < currentStep) {
                    step.classList.remove('active');
                    step.classList.add('completed');
                    if (line) line.classList.add('completed');
                } else if (i === currentStep) {
                    step.classList.remove('completed');
                    step.classList.add('active');
                    if (line) line.classList.remove('completed');
                } else {
                    step.classList.remove('active', 'completed');
                    if (line) line.classList.remove('completed');
                }
            }
        }

        function showStep(step) {
            // Masquer tous les contenus
            const contents = document.querySelectorAll('.step-content');
            contents.forEach(content => {
                content.classList.remove('active');
            });
            
            // Afficher le contenu actuel
            if (step <= totalSteps) {
                document.getElementById('content' + step).classList.add('active');
            } else {
                document.getElementById('completion').classList.add('active');
            }
            
            // Gérer les boutons
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const submitBtn = document.getElementById('submitBtn');
            
            prevBtn.style.display = step > 1 ? 'block' : 'none';
            
            if (step < totalSteps) {
                nextBtn.style.display = 'block';
                submitBtn.style.display = 'none';
            } else if (step === totalSteps) {
                nextBtn.style.display = 'none';
                submitBtn.style.display = 'block';
            } else {
                nextBtn.style.display = 'none';
                submitBtn.style.display = 'none';
            }
        }

        function validateStep(step) {
            const currentContent = document.getElementById('content' + step);
            const requiredFields = currentContent.querySelectorAll('input[required], select[required]');
            
            for (let field of requiredFields) {
                if (!field.value.trim()) {
                    field.focus();
                    alert('Veuillez remplir tous les champs obligatoires.');
                    return false;
                }
            }
            
            return true;
        }

        function changeStep(direction) {
            if (direction === 1 && currentStep < totalSteps) {
                // Validation avant de passer à l'étape suivante
                if (!validateStep(currentStep)) {
                    return;
                }
                currentStep++;
            } else if (direction === -1 && currentStep > 1) {
                currentStep--;
            }
            
            updateProgress();
            updateStepIndicator();
            showStep(currentStep);
        }

        // Gestion de la soumission du formulaire
        document.getElementById('evaluationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validation de la dernière étape
            if (!validateStep(currentStep)) {
                return;
            }
            
            // Collecter toutes les données du formulaire
            const formData = new FormData(this);
            const data = {};
            
            // Convertir FormData en objet JavaScript
            for (let [key, value] of formData.entries()) {
                if (data[key]) {
                    // Si la clé existe déjà, créer un tableau
                    if (Array.isArray(data[key])) {
                        data[key].push(value);
                    } else {
                        data[key] = [data[key], value];
                    }
                } else {
                    data[key] = value;
                }
            }
            
            // Ici vous pouvez envoyer les données à votre backend Laravel
            console.log('Données du formulaire:', data);
            
            // ✅ CORRECTION: Récupération sécurisée du token CSRF
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') 
                           || document.querySelector('input[name="_token"]')?.value 
                           || '';
            
            if (!csrfToken) {
                alert('Erreur: Token CSRF manquant. Veuillez recharger la page.');
                return;
            }
            
            // ✅ ACTIVATION: Envoi AJAX vers Laravel
            fetch('/evaluation/submit', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(response => {
                console.log('Statut de la réponse:', response.status);
                if (!response.ok) {
                    throw new Error('Erreur réseau: ' + response.status);
                }
                return response.json();
            })
            .then(result => {
                console.log('Succès:', result);
                if (result.success) {
                    // Afficher le message de confirmation seulement si l'envoi réussit
                    currentStep = totalSteps + 1;
                    updateProgress();
                    updateStepIndicator();
                    showStep(currentStep);
                } else {
                    alert('Erreur: ' + (result.message || 'Erreur inconnue'));
                }
            })
            .catch(error => {
                console.error('Erreur complète:', error);
                alert('Erreur lors de l\'envoi: ' + error.message);
            });
        });

        // Amélioration de l'interface utilisateur pour les niveaux de compétences
        document.querySelectorAll('.skill-level-item').forEach(item => {
            item.addEventListener('click', function() {
                const input = this.querySelector('input');
                if (input) {
                    input.checked = true;
                    
                    // Retirer la classe active des autres éléments du même groupe
                    const groupName = input.name;
                    document.querySelectorAll(`input[name="${groupName}"]`).forEach(otherInput => {
                        otherInput.closest('.skill-level-item').classList.remove('active');
                    });
                    
                    // Ajouter la classe active à l'élément sélectionné
                    this.classList.add('active');
                }
            });
        });

        // Animation d'entrée
        document.addEventListener('DOMContentLoaded', function() {
            updateProgress();
            updateStepIndicator();
            showStep(1);
        });
    </script>
</body>
</html>