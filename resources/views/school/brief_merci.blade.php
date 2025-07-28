<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Demande envoyée – Merci !</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 flex items-center justify-center min-h-screen">
  <div class="bg-white max-w-2xl p-8 rounded-xl shadow-lg text-center">
    <div class="text-green-500 text-5xl mb-4">✅</div>
    <h1 class="text-2xl font-bold text-gray-800 mb-2">Merci pour votre brief !</h1>
    <p class="text-gray-600 mb-4">
      Nous avons bien reçu votre demande. Un membre de notre équipe vous contactera très prochainement pour affiner ensemble votre plan de communication.
    </p>

    <div class="bg-gray-100 p-4 rounded-lg text-left text-sm text-gray-700 mb-6">
      <p><strong>École :</strong> {{ $brief->ecole }}</p>
      <p><strong>Responsable :</strong> {{ $brief->responsable }}</p>
      <p><strong>Email :</strong> {{ $brief->email }}</p>
      <p><strong>Téléphone :</strong> {{ $brief->telephone }}</p>
      <p><strong>Objectif :</strong> {{ $brief->objectif }}</p>
      <p><strong>Besoins :</strong> {{ $brief->besoins }}</p>
      @if($brief->historique)
      <p><strong>Historique :</strong> {{ $brief->historique }}</p>
      @endif
      @if($brief->delai)
      <p><strong>Délai :</strong> {{ $brief->delai }}</p>
      @endif
    </div>

    <p class="italic text-sm text-gray-500">« Un objectif bien défini est à moitié atteint. » 💡</p>

    <a href="{{ route('ecole.index') }}"
      class="inline-block mt-6 bg-indigo-600 text-white px-6 py-2 rounded hover:bg-indigo-700 transition">
      Retour à l'accueil
    </a>
  </div>
</body>

</html>
