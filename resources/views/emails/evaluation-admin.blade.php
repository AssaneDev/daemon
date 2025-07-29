<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nouvelle Évaluation</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 800px; margin: 0 auto; padding: 20px;">
        <h1 style="color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 10px;">
            📋 Nouvelle Évaluation de Niveau - Formation Informatique
        </h1>
        
        <p><strong>Date de soumission :</strong> {{ $data['date_soumission'] }}</p>
        
        <h2 style="color: #34495e; margin-top: 30px;">👤 Informations Personnelles</h2>
        <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
            <tr style="background-color: #f8f9fa;">
                <td style="padding: 10px; border: 1px solid #dee2e6; font-weight: bold;">Nom</td>
                <td style="padding: 10px; border: 1px solid #dee2e6;">{{ $data['nom'] }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #dee2e6; font-weight: bold;">Email</td>
                <td style="padding: 10px; border: 1px solid #dee2e6;">{{ $data['email'] }}</td>
            </tr>
            <tr style="background-color: #f8f9fa;">
                <td style="padding: 10px; border: 1px solid #dee2e6; font-weight: bold;">Établissement</td>
                <td style="padding: 10px; border: 1px solid #dee2e6;">{{ $data['etablissement'] }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #dee2e6; font-weight: bold;">Matière</td>
                <td style="padding: 10px; border: 1px solid #dee2e6;">{{ $data['matiere'] }}</td>
            </tr>
            <tr style="background-color: #f8f9fa;">
                <td style="padding: 10px; border: 1px solid #dee2e6; font-weight: bold;">Expérience</td>
                <td style="padding: 10px; border: 1px solid #dee2e6;">{{ $data['experience'] }}</td>
            </tr>
        </table>

        <h2 style="color: #34495e; margin-top: 30px;">💻 Utilisation Actuelle</h2>
        <p><strong>Fréquence :</strong> {{ $data['frequence_utilisation'] }}</p>
        <p><strong>Niveau général :</strong> {{ $data['niveau_general'] }}</p>
        
        <p><strong>Logiciels utilisés :</strong></p>
        <ul>
            @if(!empty($data['logiciels']))
                @foreach($data['logiciels'] as $logiciel)
                    <li>{{ $logiciel }}</li>
                @endforeach
            @else
                <li><em>Aucun logiciel spécifié</em></li>
            @endif
        </ul>

        <h2 style="color: #34495e; margin-top: 30px;">🎯 Compétences Techniques</h2>
        <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
            <tr style="background-color: #f8f9fa;">
                <td style="padding: 10px; border: 1px solid #dee2e6; font-weight: bold;">Traitement de texte</td>
                <td style="padding: 10px; border: 1px solid #dee2e6;">{{ $data['competences']['word'] }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #dee2e6; font-weight: bold;">Tableur</td>
                <td style="padding: 10px; border: 1px solid #dee2e6;">{{ $data['competences']['excel'] }}</td>
            </tr>
            <tr style="background-color: #f8f9fa;">
                <td style="padding: 10px; border: 1px solid #dee2e6; font-weight: bold;">Présentation</td>
                <td style="padding: 10px; border: 1px solid #dee2e6;">{{ $data['competences']['presentation'] }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #dee2e6; font-weight: bold;">Internet</td>
                <td style="padding: 10px; border: 1px solid #dee2e6;">{{ $data['competences']['internet'] }}</td>
            </tr>
        </table>

        <h2 style="color: #34495e; margin-top: 30px;">⚠️ Difficultés</h2>
        <ul>
            @if(!empty($data['difficultes']))
                @foreach($data['difficultes'] as $difficulte)
                    <li>{{ $difficulte }}</li>
                @endforeach
            @else
                <li><em>Aucune difficulté spécifiée</em></li>
            @endif
        </ul>

        <h2 style="color: #34495e; margin-top: 30px;">📈 Perfectionnement Souhaité</h2>
        <ul>
            @if(!empty($data['perfectionnement']))
                @foreach($data['perfectionnement'] as $domaine)
                    <li>{{ $domaine }}</li>
                @endforeach
            @else
                <li><em>Aucun domaine spécifié</em></li>
            @endif
        </ul>

        <h2 style="color: #34495e; margin-top: 30px;">🎓 Préférences de Formation</h2>
        <p><strong>Format :</strong> {{ $data['format_formation'] }}</p>
        <p><strong>Durée par session :</strong> {{ $data['duree_session'] }}</p>
        <p><strong>Disponibilité :</strong> {{ $data['disponibilite'] }}</p>

        @if(!empty($data['objectifs_specifiques']))
            <h2 style="color: #34495e; margin-top: 30px;">📝 Objectifs Spécifiques</h2>
            <div style="background-color: #f8f9fa; padding: 15px; border-left: 4px solid #3498db; margin: 10px 0;">
                {{ $data['objectifs_specifiques'] }}
            </div>
        @endif

        @if(!empty($data['commentaires']))
            <h2 style="color: #34495e; margin-top: 30px;">💬 Commentaires</h2>
            <div style="background-color: #f8f9fa; padding: 15px; border-left: 4px solid #3498db; margin: 10px 0;">
                {{ $data['commentaires'] }}
            </div>
        @endif

        <hr style="margin: 30px 0; border: none; border-top: 2px solid #eee;">
        <p style="color: #7f8c8d; font-size: 14px;">
            <em>Cette évaluation a été générée automatiquement depuis le formulaire en ligne.</em>
        </p>
    </div>
</body>
</html>
