<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Brief Communication – École</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 font-sans">
    <div class="max-w-3xl mx-auto mt-12 p-8 bg-white shadow-xl rounded-xl">
        <h1 class="text-2xl font-bold mb-6 text-center text-indigo-600">Brief de Communication</h1>

        <!-- Timeline -->
        <div class="flex justify-between items-center mb-10 px-2 space-x-2 sm:space-x-6 md:space-x-10">
            <div class="flex flex-col items-center">
                <div id="dot-1"
                    class="w-10 h-10 rounded-full bg-indigo-600 text-white flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M3 11l1-2m0 0l8-4 8 4M4 9v10a1 1 0 001 1h3m10-11l1 2m-1-2v10a1 1 0 01-1 1h-3" />
                    </svg>
                </div>
                <p class="text-sm mt-1 text-center">École</p>
            </div>
            <div class="w-full h-1 bg-gray-300 mx-2 rounded relative">
                <div id="bar" class="absolute top-0 left-0 h-1 bg-indigo-600 rounded transition-all duration-300"
                    style="width: 0%;"></div>
            </div>
            <div class="flex flex-col items-center">
                <div id="dot-2" class="w-10 h-10 rounded-full bg-gray-300 text-white flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M16 12a4 4 0 01-8 0V8a4 4 0 018 0v4z" />
                        <path d="M12 16v4m-6 0h12" />
                    </svg>
                </div>
                <p class="text-sm mt-1 text-center">Contact</p>
            </div>
            <div class="flex flex-col items-center">
                <div id="dot-3" class="w-10 h-10 rounded-full bg-gray-300 text-white flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M9 17v-2h6v2m-6-4V9a3 3 0 116 0v4" />
                    </svg>
                </div>
                <p class="text-sm mt-1 text-center">Objectif</p>
            </div>
            <div class="flex flex-col items-center">
                <div id="dot-4" class="w-10 h-10 rounded-full bg-gray-300 text-white flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <p class="text-sm mt-1 text-center">Finalisation</p>
            </div>
        </div>

        <!-- Formulaire ici -->
        <div id="form-placeholder"></div>
        <!-- Formulaire -->
        <form id="multiStepForm" action="{{ route('brief.submit') }}" method="POST" >
            @csrf
            <div class="step" id="step-1">
                <div class="mb-4">
                    <label class="block text-gray-700">Nom de l’établissement *</label>
                    <input type="text" name="ecole" required class="w-full border p-2 rounded mt-1" />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Nom du responsable *</label>
                    <input type="text" name="responsable" required class="w-full border p-2 rounded mt-1" />
                </div>
                <button type="button"
                    class="next bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2 rounded">Suivant</button>
            </div>

            <div class="step hidden" id="step-2">
                <div class="mb-4">
                    <label class="block text-gray-700">Téléphone *</label>
                    <input type="tel" name="telephone" required class="w-full border p-2 rounded mt-1" />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Email *</label>
                    <input type="email" name="email" required class="w-full border p-2 rounded mt-1" />
                </div>
                <div class="flex justify-between mt-4">
                    <button type="button" class="prev bg-gray-200 hover:bg-gray-300 px-6 py-2 rounded">Retour</button>
                    <button type="button"
                        class="next bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2 rounded">Suivant</button>
                </div>
            </div>

            <div class="step hidden" id="step-3">
                <div class="mb-4">
                    <label class="block text-gray-700">Objectif principal *</label>
                    <select name="objectif" required class="w-full border p-2 rounded mt-1">
                        <option value="" disabled selected>Sélectionnez un objectif</option>
                        <option value="inscriptions">Augmenter les inscriptions</option>
                        <option value="visibilite">Améliorer la visibilité</option>
                        <option value="reputation">Renforcer l’image de marque</option>
                        <option value="reseaux">Gérer les réseaux sociaux</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Actions déjà entreprises ?</label>
                    <textarea name="historique" rows="3" class="w-full border p-2 rounded mt-1"></textarea>
                </div>
                <div class="flex justify-between mt-4">
                    <button type="button" class="prev bg-gray-200 hover:bg-gray-300 px-6 py-2 rounded">Retour</button>
                    <button type="button"
                        class="next bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2 rounded">Suivant</button>
                </div>
            </div>

            <div class="step hidden" id="step-4">
                <div class="mb-4">
                    <label class="block text-gray-700">Décrivez vos besoins *</label>
                    <textarea name="besoins" rows="4" required class="w-full border p-2 rounded mt-1"></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Délai souhaité</label>
                    <select name="delai" class="w-full border p-2 rounded mt-1">
                        <option value="" disabled selected>Choisissez un délai</option>
                        <option value="urgent">Le plus tôt possible</option>
                        <option value="mois">Dans les prochaines semaines</option>
                        <option value="long_terme">Projet à long terme</option>
                    </select>
                </div>
                <div class="flex justify-between mt-4">
                    <button type="button" class="prev bg-gray-200 hover:bg-gray-300 px-6 py-2 rounded">Retour</button>
                    <button type="submit"
                        class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded">Envoyer</button>
                </div>
            </div>
        </form> <br><br>

        <hr>

        <!-- Illustrations thématiques -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-10">
            <div class="flex items-center space-x-4">
                <img src="https://img.icons8.com/ios-filled/50/4b5563/classroom.png" alt="Icône école"
                    class="w-12 h-12">
                <div>
                    <h3 class="text-sm font-semibold text-gray-700">Communication scolaire</h3>
                    <p class="text-sm text-gray-500">Identité visuelle, brochures, affiches, uniformes, etc.</p>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <img src=" {{asset('ecole/assets/img/icon/digital_14998289.png')}} " alt="Icône réseaux sociaux" class="w-12 h-12">
                <div>
                    <h3 class="text-sm font-semibold text-gray-700">Réseaux sociaux</h3>
                    <p class="text-sm text-gray-500">Publications régulières, animation de communauté, événements.</p>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <img src=" {{asset('ecole/assets/img/icon/campaign_8407656.png')}} " alt="Icône marketing" class="w-12 h-12">
                <div>
                    <h3 class="text-sm font-semibold text-gray-700">Marketing digital</h3>
                    <p class="text-sm text-gray-500">Campagnes ciblées, SEO, landing pages, analytics.</p>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <img src="https://img.icons8.com/ios-filled/50/4b5563/online-support.png" alt="Icône accompagnement"
                    class="w-12 h-12">
                <div>
                    <h3 class="text-sm font-semibold text-gray-700">Accompagnement personnalisé</h3>
                    <p class="text-sm text-gray-500">Diagnostic, plan stratégique, suivi mensuel.</p>
                </div>
            </div>
        </div>


    </div>

    <script>
        const steps = document.querySelectorAll('.step');
        const nextBtns = document.querySelectorAll('.next');
        const prevBtns = document.querySelectorAll('.prev');
        const dots = [1, 2, 3, 4].map(i => document.getElementById(`dot-${i}`));
        const bar = document.getElementById("bar");
        let currentStep = 0;

        function showStep(index) {
            steps.forEach((step, i) => step.classList.toggle('hidden', i !== index));
            dots.forEach((dot, i) => {
                dot.classList.remove("bg-indigo-600", "bg-gray-300");
                dot.classList.add(i <= index ? "bg-indigo-600" : "bg-gray-300");
            });
            bar.style.width = `${(index / (steps.length - 1)) * 100}%`;
        }

        nextBtns.forEach(btn => btn.addEventListener('click', () => {
            if (currentStep < steps.length - 1) {
                currentStep++;
                showStep(currentStep);
            }
        }));

        prevBtns.forEach(btn => btn.addEventListener('click', () => {
            if (currentStep > 0) {
                currentStep--;
                showStep(currentStep);
            }
        }));

        showStep(currentStep);
    </script>
</body>

</html>