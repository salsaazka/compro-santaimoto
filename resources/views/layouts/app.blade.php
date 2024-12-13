<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Company Profile')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100 text-gray-900">
    {{-- Navbar --}}
    <nav class="bg-white shadow">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="text-2xl font-bold text-blue-600">
                <img src="{{ asset('images/Logo.png') }}" alt="" srcset="">
            </div>
            <ul class="flex space-x-6 text-gray-600">
                <li><a href="{{ url('/') }}" class="hover:text-blue-500">Home</a></li>
                <li><a href="#about" class="hover:text-blue-500">About</a></li>
                <li><a href="#services" class="hover:text-blue-500">Services</a></li>
                <li><a href="#contact" class="hover:text-blue-500">Contact</a></li>
                <li><a href="#faq" class="hover:text-blue-500">FAQ</a></li>
            </ul>
            <div>
                <a href="{{ url('/login') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Login</a>
            </div>
        </div>
    </nav>

    {{-- Content --}}
    <div>
        @yield('content')
    </div>
    <!-- Swiper.js Script -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Swiper Inisialisasi -->
    <script>
        const swiper = new Swiper('.mySwiper', {
            loop: true, // Carousel berulang
            autoplay: {
                delay: 3000, // Delay 3 detik
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
    
    {{-- Footer --}}
    
    <footer class="bg-gray-100 py-10">
        <div class="container mx-auto px-6 md:px-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Contact Section -->
                <div>
                    <h3 class="text-lg font-bold text-gray-800">Contact</h3>
                    <ul class="mt-4 space-y-2 text-gray-600">
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M9 21V3m0 0H5a2 2 0 00-2 2v2m4-2h4m0 0V3m4 2v14m2 2a2 2 0 01-2 2h-4a2 2 0 01-2-2v-2" />
                            </svg>
                            123 456 7890
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12v3m-4-3v8m-4-8v3m4-12v2M2 7v9m20-9v9m-2 0H4m16 0a2 2 0 002-2V9a2 2 0 00-2-2H4a2 2 0 00-2 2v4a2 2 0 002 2" />
                            </svg>
                            support@santaimoto.com
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12V8a4 4 0 00-8 0v4m12 4v4m-2 0v4m-12-4v-4" />
                            </svg>
                            ABC Tower 3, Jl. Jend. Sudirman Kav. 86, Jakarta Pusat 10297
                        </li>
                    </ul>
                </div>
    
                <!-- Social Media Section -->
                <div>
                    <h3 class="text-lg font-bold text-gray-800">Find Us On</h3>
                    <div class="mt-4 flex space-x-4 text-blue-600">
                        <a href="#" aria-label="Twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.919 4.919 0 002.163-2.723 10.075 10.075 0 01-3.127 1.184 4.92 4.92 0 00-8.38 4.482A13.993 13.993 0 011.671 3.149 4.822 4.822 0 003.1 9.725a4.902 4.902 0 01-2.229-.616v.061a4.919 4.919 0 003.946 4.827 4.963 4.963 0 01-2.212.085 4.923 4.923 0 004.604 3.42A9.86 9.86 0 010 19.54a13.94 13.94 0 007.548 2.209c9.051 0 13.998-7.496 13.998-13.998 0-.21 0-.42-.016-.63a9.935 9.935 0 002.437-2.548l-.047-.02z" />
                            </svg>
                        </a>
                        <a href="#" aria-label="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.004 0C5.374 0 0 5.374 0 12c0 5.64 4.243 10.315 9.744 11.693v-8.262H7.081V12h2.664V9.884c0-2.633 1.594-4.07 3.935-4.07 1.117 0 2.086.083 2.364.12v2.742h-1.623c-1.275 0-1.521.607-1.521 1.496V12h3.043l-.486 3.431h-2.557v8.262C19.76 22.315 24 17.64 24 12c0-6.626-5.374-12-11.996-12z" />
                            </svg>
                        </a>
                        <a href="#" aria-label="LinkedIn">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.23 0H1.77A1.77 1.77 0 000 1.77v20.46C0 23.4.6 24 1.77 24h20.46C23.4 24 24 23.4 24 22.23V1.77C24 .6 23.4 0 22.23 0zM7.05 20.45H3.6v-9.99h3.45v9.99zM5.325 8.89a2.07 2.07 0 11-.004-4.14 2.07 2.07 0 01.004 4.14zm14.28 11.56h-3.45v-4.99c0-1.19-.025-2.72-1.655-2.72-1.656 0-1.91 1.296-1.91 2.636v5.074H9.134v-9.99h3.32v1.364h.05c.463-.87 1.596-1.785 3.285-1.785 3.51 0 4.15 2.31 4.15 5.316v5.096z" />
                            </svg>
                        </a>
                        <a href="#" aria-label="YouTube">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19.615 3.184c-1.231-.48-6.17-.5-6.17-.5s-4.94.02-6.17.5C5.1 3.668 3.728 4.943 3.513 6.188 3.174 8.111 3 10.05 3 12.001c0 1.952.175 3.89.513 5.812.214 1.244 1.586 2.52 3.762 3.004 1.23.48 6.17.5 6.17.5s4.94-.02 6.17-.5c1.231-.484 2.605-1.76 2.82-3.005.338-1.922.513-3.86.513-5.812 0-1.952-.175-3.89-.513-5.812-.215-1.244-1.586-2.52-2.82-3.004zM9.71 15.214v-6.43l5.252 3.21-5.252 3.22z" />
                            </svg>
                        </a>
                    </div>
                </div>
    
                <!-- Newsletter Section -->
                <div>
                    <h3 class="text-lg font-bold text-gray-800">Stay Connected</h3>
                    <p class="mt-4 text-gray-600">
                        Want to keep up with SantaiMoto’s journey, latest insights, and future developments? Join our Founder’s Newsletter to stay in the loop with exclusive updates from the team.
                    </p>
                    <form class="mt-6 flex flex-col md:flex-row items-center">
                        <input type="text" placeholder="Your name" class="p-3 rounded-lg border border-gray-300 focus:ring focus:ring-blue-500 focus:outline-none w-full md:w-auto md:mr-4 mb-4 md:mb-0">
                        <input type="email" placeholder="Your email address" class="p-3 rounded-lg border border-gray-300 focus:ring focus:ring-blue-500 focus:outline-none w-full md:w-auto md:mr-4 mb-4 md:mb-0">
                        <button class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-700 w-full md:w-auto">
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
                    <img src="path-to-paypal-logo.png" alt="PayPal" class="h-6">
                    <img src="path-to-visa-logo.png" alt="Visa" class="h-6">
                    <img src="path-to-mastercard-logo.png" alt="MasterCard" class="h-6">
                    <img src="path-to-paypass-logo.png" alt="PayPass" class="h-6">
                    <img src="path-to-maestro-logo.png" alt="Maestro" class="h-6">
                </div>
            </div>
        </div>
    </footer>
    
    
</body>
</html>
