<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
Route::post('/admin/login_submit', [AdminController::class, 'AdminLoginSubmit'])->name('admin.login_submit');
Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');



Route::middleware('admin')->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');

});

Route::get('/studio', function () {
    return view('frontend.photographie.daemonstudio');
});



Route::get('/ecole/digital', [App\Http\Controllers\EcoleController::class, 'IndexEcole'])->name('ecole.index');
Route::get('/form', [App\Http\Controllers\EcoleController::class, 'Form'])->name('ecole.form');

use App\Http\Controllers\ContactController;

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/merci', [ContactController::class, 'merci'])->name('contact.merci');

use App\Http\Controllers\BriefController;

Route::get('/brief/merci', [BriefController::class, 'merci'])->name('brief.merci');
Route::post('/brief/submit', [BriefController::class, 'submit'])->name('brief.submit');

Route::get('/diarama/enseignants', [BriefController::class, 'Diarama'])->name('diarama.enseignants');


use App\Http\Controllers\EvaluationController;
// ✅ CORRECTION: Routes simplifiées
Route::get('/evaluation', [EvaluationController::class, 'show'])->name('evaluation.form');
Route::post('/evaluation/submit', [EvaluationController::class, 'submit'])->name('evaluation.submit');

// ✅ Route de test optionnelle (à supprimer en production)
// Route::get('/test-email-debug', function () {
//     try {
//         // Vérification de la configuration
//         $configs = [
//             'MAIL_FROM_ADDRESS' => config('mail.from.address'),
//             'MAIL_ADMIN_EMAIL' => config('mail.admin_email'),
//             'MAIL_MAILER' => config('mail.default'),
//             'MAIL_HOST' => config('mail.mailers.smtp.host'),
//         ];
        
//         foreach ($configs as $key => $value) {
//             if (empty($value)) {
//                 return "❌ Configuration manquante: {$key}";
//             }
//         }
        
//         // Test d'envoi
//         $testData = [
//             'nom' => 'Utilisateur Test',
//             'email' => 'test@example.com',
//             'etablissement' => 'École Test',
//             'matiere' => 'Test',
//             'experience' => '3-5 ans',
//             'frequence_utilisation' => 'Quotidiennement',
//             'niveau_general' => 'Intermédiaire',
//             'logiciels' => ['Microsoft Word'],
//             'competences' => [
//                 'word' => '4 - Bon niveau',
//                 'excel' => '3 - Niveau moyen',
//                 'presentation' => '3 - Niveau moyen',
//                 'internet' => '4 - Bon niveau'
//             ],
//             'difficultes' => ['Test'],
//             'perfectionnement' => ['Test'],
//             'format_formation' => 'Mixte',
//             'duree_session' => '2 heures',
//             'disponibilite' => 'Flexible',
//             'accompagnement' => ['Support technique'],
//             'objectifs_specifiques' => 'Test',
//             'commentaires' => 'Test',
//             'date_soumission' => now()->format('d/m/Y à H:i')
//         ];
        
//         Mail::to(config('mail.admin_email'))->send(new App\Mail\EvaluationFormMail($testData, false));
        
//         return '✅ Email de test envoyé avec succès !';
        
//     } catch (\Exception $e) {
//         return '❌ Erreur: ' . $e->getMessage();
//     }
// });