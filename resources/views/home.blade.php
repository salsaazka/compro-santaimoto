@extends('layouts.app')

@section('title', 'Welcome to SantaiMoto')

@section('content')
    <div class="relative mx-5 mt-3 rounded-lg overflow-hidden text-center">
        <!-- Banner Image -->
        <img src="{{ asset('images/banner-home.png') }}" alt="Hero Image" class="w-full object-cover rounded-lg">

        <!-- Overlay Text -->
        <div class="absolute top-1/4 left-6 md:left-12 lg:left-16 text-left text-white">
            <h1 class="text-2xl md:text-4xl font-bold mb-4">
                Discover the Ultimate Convenience in <br>
                Motorcycle Maintenance with Santai
            </h1>
            <p class="text-sm md:text-base text-gray-200 max-w-lg">
                Experience seamless, on-demand motorcycle maintenance at your doorstep. Join millions of satisfied users today.
            </p>
        </div>
        <!-- Logo Section -->
        <div class="absolute bottom-6 left-0 right-0 flex justify-center space-x-8 md:space-x-8">
            <img src="{{ asset('images/airbnb.png') }}" alt="Airbnb Logo" class="h-3 md:h-5 object-contain">
            <img src="{{ asset('images/hubspot.png') }}" alt="HubSpot Logo" class="h-3 md:h-5 object-contain">
            <img src="{{ asset('images/google.png') }}" alt="Google Logo" class="h-3 md:h-5 object-contain">
            <img src="{{ asset('images/microsoft.png') }}" alt="Microsoft Logo" class="h-3 md:h-5 object-contain">
            <img src="{{ asset('images/walmart.png') }}" alt="Walmart Logo" class="h-3 md:h-5 object-contain">
            <img src="{{ asset('images/fedex.png') }}" alt="FedEx Logo" class="h-3 md:h-5 object-contain">
            <img src="{{ asset('images/Shopify.png') }}" alt="Shopify Logo" class="h-3 md:h-5 object-contain">
        </div>
    </div>

    <div class="bg-white py-16">
        <div class="container mx-auto px-2 text-center">
            <h2 class="text-3xl font-bold text-blue-500">Meet SantaiMoto</h2>
            <p class="text-gray-600">The app that brings trusted motorcycle mechanics and peace of mind directly to you.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-3">
                <div class="p-6 bg-gray-100 rounded-lg shadow-lg">
                    <div class="justify-center flex items-center">
                        <img src="{{ asset('images/Frame-1.png') }}" alt="" srcset="">
                    </div>
                    <h3 class="font-bold text-xl">Convenience</h3>
                    <p class="text-gray-600 mt-2">On-demand service that saves you time.</p>
                </div>
                <div class="p-6 bg-gray-100 rounded-lg shadow-lg">
                    <div class="justify-center flex items-center">
                        <img src="{{ asset('images/Frame-2.png') }}" alt="" srcset="">
                    </div>
                    <h3 class="font-bold text-xl">Reliability</h3>
                    <p class="text-gray-600 mt-2">Skilled mechanics and a service you can trust.</p>
                </div>
                <div class="p-6 bg-gray-100 rounded-lg shadow-lg">
                    <div class="justify-center flex items-center">
                        <img src="{{ asset('images/Frame-3.png') }}" alt="" srcset="">
                    </div>
                    <h3 class="font-bold text-xl">Transparency</h3>
                    <p class="text-gray-600 mt-2">Problem details, repair records, and complete visibility.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white py-16">
        <div class="container mx-auto px-6 md:px-12">
            <!-- Judul -->
            <div class="text-center">
                <h2 class="text-3xl font-bold text-gray-800">Unlock the Power of SantaiMoto</h2>
                <p class="text-gray-600 mt-4">Experience seamless bike management with features that save you time, money, and hassle.</p>
            </div>

            <div class="mt-10 flex flex-col md:flex-row items-center md:items-start">
                <!-- Kolom Fitur -->
                <div class="w-full md:w-1/2 space-y-4">
                    <!-- Item 1 -->
                    <div class="relative group bg-gradient-to-r from-blue-500 to-blue-700 text-white rounded-lg shadow-lg p-4">
                        <!-- Garis Samping -->
                        <div class="absolute top-0 -left-5 w-1 h-full bg-blue-800 group-hover:bg-white transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
                        <div class="ml-4">
                            <h3 class="text-white font-bold">Service History Tracking</h3>
                            <p class="text-white text-sm">One place to track every service, every part, every detail.</p>
                        </div>
                    </div>
                
                    <!-- Item 2 -->
                    <div class="relative group flex items-center p-4 rounded-md shadow-md cursor-pointer transition-all bg-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-700 focus-within:bg-gradient-to-r focus-within:from-blue-500 focus-within:to-blue-700">
                        <!-- Garis Samping -->
                        <div class="absolute top-0 -left-4 w-1 h-full bg-gray-300 group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
                        <div class="ml-4">
                            <h3 class="text-blue-800 font-bold group-hover:text-white">Flexible Payment Options</h3>
                            <p class="text-gray-600 text-sm group-hover:text-white">Pay your way—credit, buy now pay later, or FPX.</p>
                        </div>
                    </div>
                
                    <!-- Item 3 -->
                    <div class="relative group flex items-center p-4 rounded-md shadow-md cursor-pointer transition-all bg-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-700 focus-within:bg-gradient-to-r focus-within:from-blue-500 focus-within:to-blue-700">
                        <!-- Garis Samping -->
                        <div class="absolute top-0 -left-4 w-1 h-full bg-gray-300 group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
                        <div class="ml-4">
                            <h3 class="text-blue-800 font-bold group-hover:text-white">Catalog of Branded Parts</h3>
                            <p class="text-gray-600 text-sm group-hover:text-white">Only the best parts for your bike—choose from top brands.</p>
                        </div>
                    </div>
                
                    <!-- Item 4 -->
                    <div class="relative group flex items-center p-4 rounded-md shadow-md cursor-pointer transition-all bg-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-700 focus-within:bg-gradient-to-r focus-within:from-blue-500 focus-within:to-blue-700">
                        <!-- Garis Samping -->
                        <div class="absolute top-0 -left-4 w-1 h-full bg-gray-300 group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
                        <div class="ml-4">
                            <h3 class="text-blue-800 font-bold group-hover:text-white">Mechanic Profiles and Ratings</h3>
                            <p class="text-gray-600 text-sm group-hover:text-white">Know your mechanic—see ratings, reviews, and specialties.</p>
                        </div>
                    </div>
                
                    <!-- Item 5 -->
                    <div class="relative group flex items-center p-4 rounded-md shadow-md cursor-pointer transition-all bg-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-700 focus-within:bg-gradient-to-r focus-within:from-blue-500 focus-within:to-blue-700">
                        <!-- Garis Samping -->
                        <div class="absolute top-0 -left-4 w-1 h-full bg-gray-300 group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
                        <div class="ml-4">
                            <h3 class="text-blue-800 font-bold group-hover:text-white">Real-Time Service Updates</h3>
                            <p class="text-gray-600 text-sm group-hover:text-white">Stay updated on every job, from start to finish.</p>
                        </div>
                    </div>
                
                    <!-- Item 6 -->
                    <div class="relative group flex items-center p-4 rounded-md shadow-md cursor-pointer transition-all bg-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-700 focus-within:bg-gradient-to-r focus-within:from-blue-500 focus-within:to-blue-700">
                        <!-- Garis Samping -->
                        <div class="absolute top-0 -left-4 w-1 h-full bg-gray-300 group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
                        <div class="ml-4">
                            <h3 class="text-blue-800 font-bold group-hover:text-white">In-App Communication</h3>
                            <p class="text-gray-600 text-sm group-hover:text-white">Ask questions, clarify details, get real-time answers.</p>
                        </div>
                    </div>
                </div>
            
                <!-- Gambar -->
                <div class="w-full md:w-1/2 mt-10 md:mt-0 flex justify-center">
                    <img src="{{ asset('images/Image-1.png') }}" alt="Phone Mockup" class="max-w-xs md:max-w-sm shadow-lg rounded-lg">
                </div>
            </div>        
            
            
        </div>
    </div>

    <!-- Section AI Co-Pilot -->
    <div class="container mx-auto flex flex-col md:flex-row items-center md:space-x-10">
        <!-- Gambar Mockup -->
        <div class="flex justify-center md:w-1/2">
            <img src="{{ asset('images/copiliot-asset.png') }}" alt="AI Co-Pilot" class="max-w-md rounded-lg shadow-lg">
        </div>
        <!-- Konten -->
        <div class="md:w-1/2 text-center md:text-left mt-8 md:mt-0">
            <h2 class="text-3xl font-bold text-gray-800">Meet Your AI Co-Pilot</h2>
            <p class="text-gray-600 mt-4">
                Your bike’s smartest partner—an interactive assistant that’s always on your side.
            </p>
            <button class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow-md mt-6 hover:bg-blue-700">
                Learn More
            </button>
        </div>
    </div>

    <!-- Section Carousel -->
    <div class="mt-16 mb-8 w-full">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide flex justify-center items-center">
                    <img src="{{ asset('images/banner-2.png') }}" alt="Banner 1" class="w-full h-auto">
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide flex justify-center items-center">
                    <img src="{{ asset('images/banner-2.png') }}" alt="Banner 2" class="w-full h-auto">
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide flex justify-center items-center">
                    <img src="{{ asset('images/banner-2.png') }}" alt="Banner 3" class="w-full h-auto">
                </div>
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination absolute left-0 right-0 flex justify-center z-10"></div>
        </div>
    </div>

    <div class="relative w-full flex justify-center items-center bg-[#0D9BDE17] min-h-[250px] max-h-[250px] rounded-lg mt-8 mb-8 ">
        <!-- Gambar Mockup Handphone -->
        <div class="w-[40%] absolute left-10 bottom-0">
            <img src="{{ asset('images/MidIphone.png') }}" 
                alt="Mobile App Screenshot" 
                class="w-[200px]">
        </div>

        <div class="md:w-1/2 mt-8 md:mt-0 md:pl-12">
            <h2 class="text-4xl font-bold text-gray-800">
                Join over <span class="text-blue-600">5,000</span> users and a growing network of qualified mechanics
            </h2>
            <p class="text-gray-600 mt-4">
                Get the app now on your favorite platform and experience seamless bike management with SantaiMoto.
            </p>
            <div class="mt-6 flex space-x-4">
                <a href="https://play.google.com/store/apps/details?id=com.example" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('images/googleplay.png') }}" alt="Google Play" class="w-40">
                </a>
                <a href="https://apps.apple.com/us/app/example/id1234567890" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('images/appstore.png') }}" alt="App Store" class="w-40">
                </a>
            </div>
        </div>
        
        <div class="absolute right-3 bottom-4">
            <img src="{{ asset('images/vector-banner.png') }}" 
                alt="Background Logo" 
                class="w-[80px] md:w-[120px] lg:w-[150px] opacity-50 md:opacity-100">
        </div>

    </div>

    <!-- Testimonials -->
    <section class="py-16 relative">
        <div class="container mx-auto px-6 md:px-12">
            <!-- Bagian Judul -->
            <div class="text-center mb-12">
                <p class="bg-white inline-block px-4 py-1 rounded-full text-sm text-gray-600 shadow-lg">
                    TESTIMONIALS
                </p>
                <h2 class="text-3xl font-bold text-gray-800 mt-4">Trusted by Thousands</h2>
            </div>
    
            <!-- Grid Testimoni -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimoni 1 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg relative flex flex-col justify-between h-full hover:bg-white transition duration-300 group">
                    <p class="text-gray-600 mb-4">
                        “I had an issue with my engine while riding to work, and SantaiMoto helped me out fast. The process was seamless from start to finish, and the mechanic explained everything they were doing so I could understand. It’s such a relief to know I can count on them in emergencies! I’d highly recommend.”
                    </p>
                    <div class="flex items-center mt-auto">
                        <img src="{{ asset('images/Ellipse 1.png') }}" alt="Customer 1" class="h-12 w-12 rounded-full object-cover">
                        <div class="ml-4">
                            <p class="font-bold text-gray-800">Ronny J.</p>
                            <p class="text-gray-600 text-sm">Jakarta</p>
                            <div class="flex mt-1 text-yellow-500">★★★★★</div>
                        </div>
                    </div>
                    <img src="{{ asset('images/testi-element1.png') }}" alt="Icon Chat" class="absolute bottom-8 left-[-25px] w-16">
                </div>
    
                <!-- Testimoni 2 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg flex flex-col justify-between h-full hover:bg-white transition duration-300 group">
                    <p class="text-gray-600">
                        “The convenience is unmatched. Scheduling a tune-up through the app was so easy, and the mechanic was professional and thorough.”
                    </p>
                    <div class="flex items-center mt-6">
                        <img src="{{ asset('images/Ellipse 1.png') }}" alt="Customer 2" class="h-12 w-12 rounded-full object-cover">
                        <div class="ml-4">
                            <p class="font-bold text-gray-800">Rahmat B.</p>
                            <p class="text-gray-600 text-sm">Penang</p>
                            <div class="flex mt-1 text-yellow-500">★★★★★</div>
                        </div>
                    </div>
                </div>
    
                <!-- Testimoni 3 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg relative flex-col justify-between h-full hover:bg-white transition duration-300 group">
                    <p class="text-gray-600">
                        “SantaiMoto has completely changed how I handle bike maintenance. Scheduling a service is as simple as a few taps on my phone, and the mechanics are always punctual and well-prepared. The Co-Pilot’s real-time tracking gives me peace of mind because I always know when to expect help. Plus, the advice they offer keeps my bike in top shape. I’ve been recommending it to all my friends!”
                    </p>
                    <div class="flex items-center mt-6">
                        <img src="{{ asset('images/Ellipse 1.png') }}" alt="Customer 3" class="h-12 w-12 rounded-full object-cover">
                        <div class="ml-4">
                            <p class="font-bold text-gray-800">Rizal K.</p>
                            <p class="text-gray-600 text-sm">Melaka</p>
                            <div class="flex mt-1 text-yellow-500">★★★★★</div>
                        </div>
                    </div>
                    <img src="{{ asset('images/testi-elemen2.png') }}" alt="Box Red" class="absolute bottom-[-10px] right-[-40px] w-20">
                </div>
    
                <!-- Testimoni 4 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg flex flex-col justify-between h-full hover:bg-white transition duration-300 group">
                    <p class="text-gray-600">
                        “Super easy to schedule and the mechanic was on time and professional. I would highly recommend.”
                    </p>
                    <div class="flex items-center mt-6">
                        <img src="{{ asset('images/Ellipse 1.png') }}" alt="Customer 4" class="h-12 w-12 rounded-full object-cover">
                        <div class="ml-4">
                            <p class="font-bold text-gray-800">Isabella R.</p>
                            <p class="text-gray-600 text-sm">Semarang</p>
                            <div class="flex mt-1 text-yellow-500">★★★★★</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    

    <!-- FAQ -->
    <section class="py-16">
        <div class="container mx-auto px-6 md:px-12 flex flex-col md:flex-row items-center md:items-start">
            <!-- Judul -->
            <div class="w-full md:w-1/2 space-y-4 mx-3">
                <h2 class="text-4xl font-bold text-gray-800">Frequently Asked Questions</h2>
                <p class="text-gray-600 mt-4 max-w-3xl">
                    Got questions? We’ve got answers. Here’s everything you need to know about how we help brands connect with the right influences and drive results.
                </p>

                <button class="mt-6 bg-blue-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-700">
                    See All FAQs
                </button>
            </div>

            <!-- FAQ List -->
            <div class="w-full md:w-1/2">
                <!-- FAQ 1 -->
                <details class="p-4 border border-gray-300 rounded-lg mb-4">
                    <summary class="text-lg font-bold text-gray-800 flex justify-between items-center cursor-pointer">
                        What if I don’t know what service my bike needs?
                        <span class="text-xl font-bold">–</span>
                    </summary>
                    <p class="text-gray-600 mt-4">
                        Describe the issue or send a photo, and the AI Co-Pilot will recommend a service.
                    </p>
                </details>

                <!-- FAQ 2 -->
                <details class="p-4 border border-gray-300 rounded-lg mb-4">
                    <summary class="text-lg font-bold text-gray-800 flex justify-between items-center cursor-pointer">
                        How does the AI Co-Pilot diagnose issues?
                        <span class="text-xl font-bold">+</span>
                    </summary>
                    <p class="text-gray-600 mt-4">
                        The AI Co-Pilot uses advanced diagnostic tools to pinpoint issues based on your input.
                    </p>
                </details>

                <!-- FAQ 3 -->
                <details class="p-4 border border-gray-300 rounded-lg mb-4">
                    <summary class="text-lg font-bold text-gray-800 flex justify-between items-center cursor-pointer">
                        Do I need SantaiMoto hardware for the Co-Pilot?
                        <span class="text-xl font-bold">+</span>
                    </summary>
                    <p class="text-gray-600 mt-4">
                        No, the app works with your existing hardware for basic diagnostics and guidance.
                    </p>
                </details>

                <!-- FAQ 4 -->
                <details class="p-4 border border-gray-300 rounded-lg mb-4">
                    <summary class="text-lg font-bold text-gray-800 flex justify-between items-center cursor-pointer">
                        Can I choose my mechanic?
                        <span class="text-xl font-bold">+</span>
                    </summary>
                    <p class="text-gray-600 mt-4">
                        Yes, you can view mechanic profiles, ratings, and reviews before making a choice.
                    </p>
                </details>

                <!-- FAQ 5 -->
                <details class="p-4 border border-gray-300 rounded-lg mb-4">
                    <summary class="text-lg font-bold text-gray-800 flex justify-between items-center cursor-pointer">
                        Is there a service guarantee?
                        <span class="text-xl font-bold">+</span>
                    </summary>
                    <p class="text-gray-600 mt-4">
                        Yes, we offer a satisfaction guarantee on all services provided through SantaiMoto.
                    </p>
                </details>
            </div>
        </div>
    </section>

@endsection
