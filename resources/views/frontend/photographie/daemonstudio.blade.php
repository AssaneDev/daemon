@extends('frontend.main_master')
@section('main')

<!-- Tailwind CSS CDN (si pas déjà inclus dans le layout) -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<!-- AOS CSS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<!-- Ajout de classes utilitaires pour rendre les sections plus imposantes -->
<!-- Style responsive global -->
<style>
  h1, h2, h3, h4 {
    letter-spacing: -0.02em;
  }
  html {
    scroll-behavior: smooth;
  }
  #hero h1 {
    font-size: 2rem;
  }
  #hero p {
    font-size: 1rem;
  }
  @media(min-width: 640px) {
    #hero h1 {
      font-size: 3rem;
    }
    #hero p {
      font-size: 1.25rem;
    }
  }
  @media(min-width: 768px) {
    #hero h1 {
      font-size: 4rem;
    }
    #hero p {
      font-size: 1.5rem;
    }
    #services h3, #about h2, #team h2, #media h2, #contact h2 {
      font-size: 2rem;
      line-height: 2.5rem;
    }
    #services p, #about p, #team p, #contact p {
      font-size: 1.125rem;
    }
  }
  @media(min-width: 1024px) {
    #hero h1 {
      font-size: 5rem;
    }
    #hero p {
      font-size: 1.75rem;
    }
    #services h3 {
      font-size: 1.5rem;
    }
  }
  #services .p-6 {
    padding: 2.5rem;
  }
  #services h3 {
    white-space: normal;
    overflow-wrap: break-word;
  }
  section {
    padding-top: 6rem;
    padding-bottom: 6rem;
  }
  #contact form input,
  #contact form textarea {
    font-size: 1rem;
  }
  /* Images & vidéos responsives */
  img,
  video {
    max-width: 100%;
    height: auto;
  }
  /* Fix container for small devices */
  .container {
    padding-left: 1rem;
    padding-right: 1rem;
  }
  /* Grid correction */
  .grid {
    display: grid;
  }
</style>


<!-- Navbar Sticky -->
<header class="fixed top-0 left-0 right-0 z-50 bg-white shadow-md text-gray-800">
  <div class="container mx-auto px-4 py-4 flex justify-between items-center">
    <a href="#hero" class="text-xl font-bold text-orange-500">Daemon Studio</a>
    <nav class="hidden md:flex space-x-6 text-sm font-medium text-gray-800">
      <a href="#about" class="hover:text-orange-500">À propos</a>
      <a href="#services" class="hover:text-orange-500">Services</a>
      <a href="#media" class="hover:text-orange-500">Galerie</a>
      <a href="#testimonials" class="hover:text-orange-500">Avis</a>
      <a href="#contact" class="hover:text-orange-500">Contact</a>
    </nav>
    <div class="md:hidden">
      <button id="menuToggle" class="text-orange-500 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
  </div>
  <!-- Mobile Menu -->
  <div id="mobileMenu" class="hidden md:hidden bg-white px-4 pb-4 text-gray-800">
    <a href="#about" class="block py-2 text-sm hover:text-orange-500">À propos</a>
    <a href="#services" class="block py-2 text-sm hover:text-orange-500">Services</a>
    <a href="#media" class="block py-2 text-sm hover:text-orange-500">Galerie</a>
    <a href="#testimonials" class="block py-2 text-sm hover:text-orange-500">Avis</a>
    <a href="#contact" class="block py-2 text-sm hover:text-orange-500">Contact</a>
  </div>
</header>

<!-- Spacer for sticky header -->
<div class="h-20"></div>

<!-- Hero Section -->
<!-- Hero Section -->
<section id="hero" class="relative h-screen bg-cover bg-center" style="background-image: url('{{ asset('frontend/assets/img/photographie/hero.jpeg') }}'); background-position: top right;">
  <div class="absolute inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center text-center text-white px-4">
    <div>
      <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight leading-tight font-serif text-white">Votre histoire mérite d’être capturée avec émotion.</h1>
      <p class="mt-6 text-xl md:text-2xl font-medium text-white">Photographe & vidéaste – Sénégal | Mariages, événements, entreprises</p>
      <a href="#services" style="background-color: brown" class="mt-6 inline-block bg-orange-600 hover:bg-orange-700 px-8 py-4 text-white text-lg font-semibold rounded-full shadow-lg transition transform hover:scale-105">Découvrir nos services</a>
    </div>
  </div>
</section>

<!-- About Section -->
<section id="about" class="py-16 bg-black text-white">
  <div class="container mx-auto px-4 max-w-6xl">
    <h2 style="color: aliceblue" class="text-3xl font-bold text-orange-500 mb-12 text-center">À propos</h2>
    <div class="grid md:grid-cols-2 gap-12 items-center">
      <div data-aos="fade-right">
        <p style="color: aliceblue" class="text-lg leading-relaxed">
          📸 Nous sommes une équipe de passionnés de l’image, spécialisée dans la photographie et la vidéo professionnelle. Basés au Sénégal, nous capturons vos moments forts avec créativité et authenticité.<br><br>
          💍 Mariages, 🎉 anniversaires, 🏢 événements privés ou corporate : nous racontons votre histoire à travers des images puissantes et sincères.<br><br>
          🚁 Et pour des prises de vue encore plus spectaculaires, nous proposons également des services de drones professionnels.
        </p>
      </div>
      <div data-aos="fade-left">
        <div class="relative overflow-hidden rounded-xl shadow-2xl border-4 border-orange-500">
  <video class="w-full h-full object-cover aspect-[9/16]" controls poster="{{ asset('frontend/assets/img/photographie/cover.jpeg') }}">
    <source src="{{ asset('frontend/assets/img/photographie/apropos.mp4') }}" type="video/mp4">
    Votre navigateur ne supporte pas la lecture vidéo.
  </video>
</div>
          <source src="{{ asset('frontend/assets/img/photographie/apropos1.mp4') }}" type="video/mp4">
         
        </video>
      </div>
    </div>
  </div>
</section>

<!-- Services Section -->
<section id="services" class="py-16 bg-black">
  <div class="container mx-auto px-4 max-w-6xl">
    <h2 style="color: aliceblue" class="text-3xl font-bold text-center text-orange-500 mb-12">Nos Services</h2>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transform transition duration-300 cursor-pointer border-t-4 border-orange-500" data-aos="zoom-in">
        <h3 class="text-xl font-semibold mb-2">💍 Mariage</h3>
        <p>Immortalisez le plus beau jour de votre vie avec élégance et émotion.</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transform transition duration-300 cursor-pointer border-t-4 border-orange-500" data-aos="zoom-in">
        <h3 class="text-xl font-semibold mb-2">🎉 Anniversaire & Événement</h3>
        <p>Des souvenirs vivants, pleins d’énergie et de spontanéité.</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transform transition duration-300 cursor-pointer border-t-4 border-orange-500" data-aos="zoom-in">
        <h3 class="text-xl font-semibold mb-2">📦 Shooting produit</h3>
        <p>Mettez vos produits en valeur avec des visuels professionnels.</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transform transition duration-300 cursor-pointer border-t-4 border-orange-500" data-aos="zoom-in">
        <h3 class="text-xl font-semibold mb-2">🏢 Publicité entreprise</h3>
        <p>Créez de l’impact avec des vidéos et photos corporate de qualité.</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transform transition duration-300 cursor-pointer border-t-4 border-orange-500" data-aos="zoom-in">
        <h3 class="text-xl font-semibold mb-2">🚁 Drone</h3>
        <p>Des vues aériennes spectaculaires pour sublimer vos projets personnels ou professionnels.</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transform transition duration-300 cursor-pointer border-t-4 border-orange-500" data-aos="zoom-in">
        <h3 class="text-xl font-semibold mb-2">🏡 Villa & Résidence</h3>
        <p>Photos et vidéos de propriétés pour les agences, locations ou ventes immobilières.</p>
      </div>
    </div>
      
  </div>
</section>

<!-- Team Section -->
<!-- Team Section -->
<section id="team" class="py-24 bg-black">
  <div class="container mx-auto px-4 max-w-6xl">
    <h2 style="color: aliceblue" class="text-4xl font-bold text-orange-500 mb-16 text-center">Notre Équipe</h2>
    <div class="grid md:grid-cols-2 gap-16">
      <div class="flex items-center space-x-8" data-aos="fade-up">
        <img src="{{asset('frontend/assets/img/photographie/dady.jpeg')}}" alt="Dady Blaise" class="w-40 h-40 object-cover rounded-full shadow-xl border-4 border-orange-400">
        <div>
          <h3 style="color: aliceblue" class="text-2xl font-bold text-gray-800 mb-2">📸 Dady Blaise</h3>
          <p style="color: aliceblue" class="text-gray-600 text-lg">Photographe professionnel passionné, Dady capture les émotions avec justesse et style.</p>
        </div>
      </div>
      <div class="flex items-center space-x-8" data-aos="fade-up" data-aos-delay="100">
        <img src="https://images.unsplash.com/photo-1573496529574-be85d6a60704?auto=format&fit=crop&w=500&q=80" alt="Aeron" class="w-40 h-40 object-cover rounded-full shadow-xl border-4 border-orange-400">
        <div>
          <h3 style="color: aliceblue" class="text-2xl font-bold text-gray-800 mb-2">🚁 Aeron</h3>
          <p style="color: aliceblue" class="text-gray-600 text-lg">Pilote de drone et vidéaste, Aeron sublime les paysages et les scènes d’en haut.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Media Section -->
<section id="media" class="py-20 bg-black">
  <div class="container mx-auto px-4 max-w-6xl">
    <h2  style="color: aliceblue" class="text-4xl font-bold text-orange-500 mb-12 text-center">Nos Réalisations</h2>
    <div class="grid md:grid-cols-3 gap-8">
      <!-- Réalisation 1 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:scale-105 cursor-pointer" onclick="openModal('realisation1')">
        <img src="{{asset('frontend/assets/img/photographie/proje1.jpg')}}" alt="Mariage" class="w-full h-60 object-cover">
        <div class="p-4">
          <h3 class="text-xl font-bold text-gray-800">Mariage à Saly</h3>
          <p class="text-gray-600">Un mariage en bord de mer immortalisé avec douceur et émotion.</p>
        </div>
      </div>

      <!-- Réalisation 2 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:scale-105 cursor-pointer" onclick="openModal('realisation2')">
        <img src="{{asset('frontend/assets/img/photographie/proje3.jpg')}}" alt="Villa" class="w-full h-60 object-cover">
        <div class="p-4">
          <h3 class="text-xl font-bold text-gray-800">Tournage Résidentiel</h3>
          <p class="text-gray-600">Vidéo immobilière d'une villa de luxe à Ngaparou.</p>
        </div>
      </div>

      <!-- Réalisation 3 -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:scale-105 cursor-pointer" onclick="openModal('realisation3')">
        <img src="{{asset('frontend/assets/img/photographie/proje2.jpg')}}" alt="Drone" class="w-full h-60 object-cover">
        <div class="p-4">
          <h3 class="text-xl font-bold text-gray-800">Vue Aérienne</h3>
          <p class="text-gray-600">Séquence drone panoramique sur la lagune du Sine Saloum.</p>
        </div>
      </div>
    </div>

    <!-- Modals for Réalisations -->
    <div id="realisation1" class="modal hidden fixed inset-0 bg-black/60 flex items-center justify-center z-50">
      <div class="bg-white rounded-lg p-8 max-w-xl shadow-xl">
        <h3 class="text-2xl font-bold text-orange-500 mb-4">💍 Mariage à Saly</h3>
        <p class="text-gray-700 mb-4">Une journée magique captée depuis les préparatifs jusqu’à la cérémonie au coucher du soleil. Une lumière naturelle sublimée par notre approche cinématographique.</p>
        <video controls class="w-full rounded shadow">
          <source src="{{ asset('frontend/realisations/mariage-saly.mp4') }}" type="video/mp4">
        </video>
        <button onclick="closeModal('realisation1')" class="mt-6 bg-orange-500 text-white px-4 py-2 rounded">Fermer</button>
      </div>
    </div>

    <div id="realisation2" class="modal hidden fixed inset-0 bg-black/60 flex items-center justify-center z-50">
      <div class="bg-white rounded-lg p-8 max-w-xl shadow-xl">
        <h3 class="text-2xl font-bold text-orange-500 mb-4">🏡 Villa de Ngaparou</h3>
        <p class="text-gray-700 mb-4">Nous avons mis en scène les espaces de cette villa moderne avec une narration fluide et des plans fluides au drone et en travelling intérieur.</p>
        <video controls class="w-full rounded shadow">
          <source src="{{ asset('frontend/realisations/villa-ngaparou.mp4') }}" type="video/mp4">
        </video>
        <button onclick="closeModal('realisation2')" class="mt-6 bg-orange-500 text-white px-4 py-2 rounded">Fermer</button>
      </div>
    </div>

    <div id="realisation3" class="modal hidden fixed inset-0 bg-black/60 flex items-center justify-center z-50">
      <div class="bg-white rounded-lg p-8 max-w-xl shadow-xl">
        <h3 class="text-2xl font-bold text-orange-500 mb-4">🚁 Vue aérienne au Sine Saloum</h3>
        <p class="text-gray-700 mb-4">Des prises de vue en drone à basse altitude mettant en valeur la beauté sauvage du delta, avec effets de travelling et transitions douces.</p>
        <video controls class="w-full rounded shadow">
          <source src="{{ asset('frontend/realisations/drone-saloum.mp4') }}" type="video/mp4">
        </video>
        <button onclick="closeModal('realisation3')" class="mt-6 bg-orange-500 text-white px-4 py-2 rounded">Fermer</button>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials Section -->
{{-- <section id="testimonials" class="bg-gray-100 py-16">
  <div class="container mx-auto px-4 max-w-4xl">
    <h2 class="text-3xl font-bold text-orange-500 mb-8 text-center">Ce que disent nos clients</h2>
    <blockquote class="italic text-center text-lg text-gray-700">
      « Un souvenir inoubliable grâce à leur professionnalisme et leur sens de l’instant. »
    </blockquote>
    <p class="text-center mt-2 text-sm text-gray-500">&mdash; Aissatou & Mamadou</p>
  </div>
</section> --}}

<!-- Contact Section -->
<!-- Contact Section -->
<section id="contact" class="py-24 bg-black">
  <div class="container mx-auto px-4 max-w-6xl">
    <h2 class="text-4xl font-bold text-orange-500 mb-12 text-center">Nous contacter</h2>
    <div class="grid md:grid-cols-2 gap-12">
      <!-- Formulaire de contact -->
      <div>
        <form class="space-y-6 bg-gradient-to-br from-orange-50 via-white to-orange-100 p-10 rounded-2xl shadow-xl border border-orange-200">
          <div>
            <label style="color: aliceblue" class="block text-sm font-semibold mb-1 text-gray-700">Nom complet</label>
            <input type="text" placeholder="Votre nom" class="w-full text-gray-800 bg-white border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-orange-500 shadow-sm">
          </div>
          <div>
            <label style="color: aliceblue" style="color: aliceblue" style="color: aliceblue" class="block text-sm font-semibold mb-1 text-gray-700">Adresse e-mail</label>
            <input type="email" placeholder="Votre adresse email" class="w-full text-gray-800 bg-white border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-orange-500 shadow-sm">
          </div>
          <div>
            <label style="color: aliceblue" class="block text-sm font-semibold mb-1 text-gray-700">Projet</label>
            <input type="text" placeholder="Sujet du projet (ex : mariage, vidéo promo...)" class="w-full text-gray-800 bg-white border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-orange-500 shadow-sm">
          </div>
          <div>
            <label style="color: aliceblue" class="block text-sm font-semibold mb-1 text-gray-700">Message</label>
            <textarea rows="5" placeholder="Décrivez votre besoin ou votre idée..." class="w-full text-gray-800 bg-white border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-orange-500 shadow-sm"></textarea>
          </div>
          <div>
            <button type="submit" style="background-color: brown" class="bg-orange-600 hover:bg-orange-700 text-white px-8 py-4 rounded-full font-semibold shadow-lg transition-all duration-300 hover:scale-105">Envoyer le message</button>
          </div>
        </form>
      </div>

      <!-- Coordonnées & Réseaux -->
        <div class="bg-gradient-to-br from-white to-orange-50 p-8 rounded-xl shadow-lg text-base font-semibold text-gray-800">
        <h3 class="text-2xl font-extrabold text-orange-500 mb-4 tracking-wide uppercase">📞 Nos coordonnées</h3>
        <p class="mb-6 leading-relaxed">
          <span class="block mb-2"><strong>Adresse :</strong> Ngaparou, Sénégal</span>
          <span class="block mb-2"><strong>Téléphone :</strong> <a href="tel:+221771234567" class="text-orange-600 hover:underline">+221 77 123 45 67</a></span>
          <span class="block"><strong>Email :</strong> <a href="mailto:contact@monstudio.com" class="text-orange-600 hover:underline">contact@monstudio.com</a></span>
        </p>
        <h4 class="text-xl font-bold text-gray-900 mb-3">🌍 Suivez-nous</h4>
        <div class="flex space-x-4">
          <a href="#" class="text-gray-700 hover:text-orange-500 text-2xl"><i class="fab fa-facebook"></i></a>
          <a href="#" class="text-gray-700 hover:text-orange-500 text-2xl"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-gray-700 hover:text-orange-500 text-2xl"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- AOS & JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();

  // Burger menu
  document.getElementById('menuToggle').addEventListener('click', function () {
    const menu = document.getElementById('mobileMenu');
    menu.classList.toggle('hidden');
  });
</script>
<!-- AOS & JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();

  // Modal Logic
  function openModal(id) {
    document.getElementById(id).classList.remove('hidden');
  }
  function closeModal(id) {
    document.getElementById(id).classList.add('hidden');
  }

  // Burger menu
  document.getElementById('menuToggle').addEventListener('click', function () {
    const menu = document.getElementById('mobileMenu');
    menu.classList.toggle('hidden');
  });
</script>

@endsection