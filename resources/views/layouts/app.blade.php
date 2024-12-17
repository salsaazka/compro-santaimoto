<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Company Profile')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Saira:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="font-saira text-gray-900 overflow-x-hidden">

  <!-- Navbar -->
  <!-- Sticky Navbar with Transition -->
  <nav id="navbar" class="bg-white shadow px-12 transition-all duration-300 ease-in-out sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center py-4">
      <!-- Logo -->
      <div class="text-2xl font-bold text-blue-600">
        <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="h-8">
      </div>
  
      <!-- Hamburger Icon for Mobile -->
      <div class="lg:hidden flex items-center">
        <button id="menu-toggle" class="text-gray-600 focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
  
      <!-- Menu Links -->
      <ul id="menu" class="hidden lg:flex space-x-6">
        <li class="relative group">
          <a href="#services" class="hover:text-blue-500 font-semibold flex items-center">
            About Us
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1 group-hover:text-blue-500 transition-transform duration-300 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </a>
          <ul class="absolute hidden group-hover:block bg-white shadow-lg rounded-lg w-48 -mt-1">
            <li><a href="#service1" class="block px-4 py-2 hover:bg-blue-100">Service 1</a></li>
            <li><a href="#service2" class="block px-4 py-2 hover:bg-blue-100">Service 2</a></li>
          </ul>
        </li>
        <li><a href="#how-it-works" class="hover:text-blue-500 font-semibold">How it Works</a></li>
        <li><a href="{{ url('/career') }}" class="hover:text-blue-500 font-semibold">Careers</a></li>
        <li><a href="{{ url('/latest') }}" class="hover:text-blue-500 font-semibold">Latest</a></li>
      </ul>
  
      <!-- Mobile Menu -->
      <ul id="mobile-menu" class="lg:hidden hidden bg-white shadow-lg rounded-lg absolute top-16 left-0 right-0 space-y-4 p-6">
        <li><a href="#services" class="block hover:text-blue-500 font-semibold">About Us</a></li>
        <li><a href="#how-it-works" class="block hover:text-blue-500 font-semibold">How it Works</a></li>
        <li><a href="{{ url('/career') }}" class="block hover:text-blue-500 font-semibold">Careers</a></li>
        <li><a href="{{ url('/latest') }}" class="block hover:text-blue-500 font-semibold">Latest</a></li>
      </ul>
    </div>
  </nav>
  
  <!-- JavaScript for Menu Toggle -->
  <script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
  
    menuToggle.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
  

  <!-- JavaScript untuk Menambahkan Efek Scroll -->


  <!-- Content -->
  {{-- <main class="container mx-auto px-6 md:px-12 py-8"> --}}
  @yield('content')
  {{-- </main> --}}

  <!-- Footer -->
  <footer class="bg-gray-100">
    <div class="container mx-auto px-6 md:px-12 py-5">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Contact Section -->
        <div>
          <h3 class="text-lg font-bold text-gray-800">Contact</h3>
          <ul class="mt-4 space-y-2 text-gray-600">
            <li class="flex items-center">
              <img src="{{ asset('images/telfon.png') }}" alt="Phone Icon" class="h-6 mr-3">
              123 456 7890
            </li>
            <li class="flex items-center">
              <img src="{{ asset('images/email.png') }}" alt="Email Icon" class="h-6 mr-3">
              support@santaimoto.com
            </li>
            <li class="flex items-center">
              <img src="{{ asset('images/lokasi.png') }}" alt="Location Icon" class="h-6 mr-3">
              ABC Tower 3, Jl. Jend. Sudirman Kav. 86, Jakarta Pusat 10297
            </li>
          </ul>
        </div>

        <!-- Social Media Section -->
        <div>
          <h3 class="text-lg font-bold text-gray-800">Find Us On</h3>
          <div class="mt-4 flex space-x-4 text-blue-600">
            <a href="#" aria-label="Twitter">
              <img src="{{ asset('images/Logo twitter.png') }}" alt="Twitter" class="h-6">
            </a>
            <a href="#" aria-label="Facebook">
              <img src="{{ asset('images/facebook.png') }}" alt="Facebook" class="h-6">
            </a>
            <a href="#" aria-label="LinkedIn">
              <img src="{{ asset('images/Logo linkedin.png') }}" alt="LinkedIn" class="h-6">
            </a>
            <a href="#" aria-label="YouTube">
              <img src="{{ asset('images/Logo youtube.png') }}" alt="YouTube" class="h-6">
            </a>
          </div>
        </div>

        <!-- Newsletter Section -->
        <div>
          <h3 class="text-lg font-bold text-gray-800 mb-4">Stay Connected</h3>
          <p class="text-gray-600 mb-4">Join our Founder’s Newsletter to stay in the loop with exclusive updates.</p>
          <form class="flex flex-col space-y-4 flex justify-between">
            <input type="text" placeholder="Your name" class="p-3 rounded-lg border border-gray-300">
            <input type="email" placeholder="Your email address" class="p-3 rounded-lg border border-gray-300">
            <button class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
              Join Now
            </button>
          </form>
        </div>
      </div>

      <hr class="my-8 border-gray-300">

      <!-- Footer Bottom -->
      <div class="flex flex-col md:flex-row items-center justify-between text-sm text-gray-600">
        <p>© 2024 Brand, Inc. • <a href="#" class="hover:underline">Privacy</a> • <a href="#" class="hover:underline">Terms</a> • <a href="#" class="hover:underline">Sitemap</a></p>
        <div class="flex space-x-4 mt-4 md:mt-0">
          <img src="{{ asset('images/paypal.png') }}" alt="PayPal" class="h-4">
          <img src="{{ asset('images/visa.png') }}" alt="Visa" class="h-4">
          <img src="{{ asset('images/master card.png') }}" alt="MasterCard" class="h-4">
          <img src="{{ asset('images/paypass.png') }}" alt="PayPass" class="h-4">
          <img src="{{ asset('images/maestro.png') }}" alt="Maestro" class="h-4">
        </div>
      </div>
    </div>
  </footer>


  <!-- Swiper.js Script -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    const swiper = new Swiper('.mySwiper', {
      loop: true
      , autoplay: {
        delay: 3000
      }
      , pagination: {
        el: '.swiper-pagination'
        , clickable: true
      }
    , });

    const navbar = document.getElementById('navbar');

    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        navbar.classList.add('shadow-lg');

      } else {
        navbar.classList.remove('shadow-lg');

      }
    });

  </script>
</body>
</html>
