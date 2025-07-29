<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Confirmation Évaluation</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <h1 style="color: #27ae60;">✅ Confirmation de votre Évaluation</h1>
        
        <p>Bonjour <strong>{{ $data['nom'] }}</strong>,</p>
        
        <p>Nous avons bien reçu votre évaluation de niveau en informatique soumise le {{ $data['date_soumission'] }}.</p>
        
        <div style="background-color: #e8f5e8; padding: 20px; border-radius: 5px; margin: 20px 0;">
            <h3>📋 Récapitulatif</h3>
            <p><strong>Établissement :</strong> {{ $data['etablissement'] }}</p>
            <p><strong>Niveau général :</strong> {{ $data['niveau_general'] }}</p>
            <p><strong>Format préféré :</strong> {{ $data['format_formation'] }}</p>
        </div>
        
        <h3>🚀 Prochaines étapes</h3>
        <ol>
            <li><strong>Analyse</strong> - Notre équipe va analyser votre profil</li>
            <li><strong>Programme personnalisé</strong> - Nous préparerons un programme adapté</li>
            <li><strong>Contact sous 48h</strong> - Vous recevrez les détails de votre formation</li>
        </ol>
        
        <p>Merci pour votre participation !</p>
        
        <p><strong>L'équipe Formation Informatique</strong></p>
    </div>
</body>
</html>