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
    <nav class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-blue-600">
                <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="h-8">
            </div>
            <ul class="flex space-x-6 text-gray-600">
                <li><a href="{{ url('/') }}" class="hover:text-blue-500">Home</a></li>
                <li><a href="{{ url('/about') }}" class="hover:text-blue-500">About</a></li>
                <li><a href="#services" class="hover:text-blue-500">Services</a></li>
                <li><a href="#contact" class="hover:text-blue-500">Contact</a></li>
                <li><a href="{{url('/career')}}" class="hover:text-blue-500">Careers</a></li>
                <li><a href="{{url('/latest')}}" class="hover:text-blue-500">Latest</a></li>
                <li><a href="#faq" class="hover:text-blue-500">FAQ</a></li>
            </ul>
            <div>
                <a href="{{ url('/login') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Login</a>
            </div>
        </div>
    </nav>

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
            loop: true,
            autoplay: { delay: 3000 },
            pagination: { el: '.swiper-pagination', clickable: true },
        });
    </script>
</body>
</html>
