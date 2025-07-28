<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Merci pour votre message</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-tr from-indigo-50 to-blue-100 min-h-screen flex items-center justify-center p-6">
    <div class="bg-white shadow-xl rounded-xl max-w-2xl w-full p-8 text-center">
        <div class="text-5xl mb-4">🎉</div>
        <h1 class="text-2xl font-bold text-indigo-600 mb-2">Merci {{ $data->prenom }} !</h1>
        <p class="text-gray-700 mb-4">Nous avons bien reçu votre demande. Un membre de notre équipe vous contactera sous peu. 🤝</p>

        <blockquote class="italic text-sm text-gray-500 mb-6">
            « Seul on va plus vite, ensemble on va plus loin. » – 🌍
        </blockquote>

        <div class="bg-indigo-50 border-l-4 border-indigo-400 text-left p-4 rounded mb-6">
            <h2 class="font-semibold mb-2 text-indigo-700">📋 Récapitulatif de votre message :</h2>
            <ul class="text-sm text-gray-700 space-y-1">
                <li><strong>👤 Nom :</strong> {{ $data->prenom }} {{ $data->nom }}</li>
                <li><strong>📧 Email :</strong> {{ $data->email }}</li>
                <li><strong>📱 Téléphone :</strong> {{ $data->telephone ?? 'Non renseigné' }}</li>
                <li><strong>💼 Offre choisie :</strong> {{ $data->offre }}</li>
                <li><strong>📝 Message :</strong> {{ $data->message ?? 'Aucun message.' }}</li>
            </ul>
        </div>

        <a href="{{ route('ecole.index') }}" class="inline-block mt-4 px-6 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition">Retour à l'accueil</a>
    </div>
</body>
</html>
