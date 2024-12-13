@extends('layouts.app')

@section('title', 'Welcome to SantaiMoto')

@section('content')
    <div class="bg-white mx-auto px-2 text-center">
        <div class="flex justify-center mt-6">
            <img src="{{ asset('images/banner-1.png') }}" alt="Hero Image" class="rounded-lg">
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
                <div
                    class="flex items-center p-4 rounded-md shadow-md cursor-pointer transition-all bg-gradient-to-r from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-800 focus-within:from-blue-600 focus-within:to-blue-800">
                    <!-- Garis Samping -->
                    <div class="w-1 bg-blue-500 rounded transition-all"></div>
                    <div class="ml-4">
                        <h3 class="text-white font-bold">Service History Tracking</h3>
                        <p class="text-white text-sm">
                            One place to track every service, every part, every detail.
                        </p>
                    </div>
                </div>
        
                <!-- Item 2 -->
                <div class="w-1 h-full bg-gray-300 rounded transition-all hover:bg-blue-800 focus:bg-blue-800">|</div>
                <div
                    class="flex items-center p-4 rounded-md shadow-md cursor-pointer transition-all bg-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-700 focus-within:bg-gradient-to-r focus-within:from-blue-500 focus-within:to-blue-700">
                    
                    <div class="ml-4">
                        <h3 class="text-blue-800 font-bold hover:text-white focus:text-white">
                            Flexible Payment Options
                        </h3>
                        <p class="text-gray-600 text-sm hover:text-white focus:text-white">
                            Pay your way—credit, buy now pay later, or FPX.
                        </p>
                    </div>
                </div>
        
                <!-- Item 3 -->
                <div
                    class="flex items-center p-4 rounded-md shadow-md cursor-pointer transition-all bg-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-700 focus-within:bg-gradient-to-r focus-within:from-blue-500 focus-within:to-blue-700">
                    <!-- Garis Samping -->
                    <div class="w-1 bg-gray-300 rounded transition-all hover:bg-blue-800 focus:bg-blue-800"></div>
                    <div class="ml-4">
                        <h3 class="text-blue-800 font-bold hover:text-white focus:text-white">
                            Catalog of Branded Parts
                        </h3>
                        <p class="text-gray-600 text-sm hover:text-white focus:text-white">
                            Only the best parts for your bike—choose from top brands.
                        </p>
                    </div>
                </div>

                <div
                    class="flex items-center p-4 rounded-md shadow-md cursor-pointer transition-all bg-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-700 focus-within:bg-gradient-to-r focus-within:from-blue-500 focus-within:to-blue-700">
                    <!-- Garis Samping -->
                    <div class="w-1 bg-gray-300 rounded transition-all hover:bg-blue-800 focus:bg-blue-800"></div>
                    <div class="ml-4">
                        <h3 class="text-blue-800 font-bold hover:text-white focus:text-white">
                            Mechanic Profiles and Ratings:
                        </h3>
                        <p class="text-gray-600 text-sm hover:text-white focus:text-white">
                            Know your mechanic—see ratings, reviews, and specialties.
                        </p>
                    </div>
                </div>

                <div
                    class="flex items-center p-4 rounded-md shadow-md cursor-pointer transition-all bg-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-700 focus-within:bg-gradient-to-r focus-within:from-blue-500 focus-within:to-blue-700">
                    <!-- Garis Samping -->
                    <div class="w-1 bg-gray-300 rounded transition-all hover:bg-blue-800 focus:bg-blue-800"></div>
                    <div class="ml-4">
                        <h3 class="text-blue-800 font-bold hover:text-white focus:text-white">
                            Real-Time Service Updates
                        </h3>
                        <p class="text-gray-600 text-sm hover:text-white focus:text-white">
                            Stay updated on every job, from start to finish.
                        </p>
                    </div>
                </div>

                <div
                    class="flex items-center p-4 rounded-md shadow-md cursor-pointer transition-all bg-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-700 focus-within:bg-gradient-to-r focus-within:from-blue-500 focus-within:to-blue-700">
                    <!-- Garis Samping -->
                    <div class="w-1 bg-gray-300 rounded transition-all hover:bg-blue-800 focus:bg-blue-800"></div>
                    <div class="ml-4">
                        <h3 class="text-blue-800 font-bold hover:text-white focus:text-white">
                            In-App Communication
                        </h3>
                        <p class="text-gray-600 text-sm hover:text-white focus:text-white">
                            Ask questions, clarify details, get real-time answers.
                        </p>
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

<div class="bg-gray-50 py-16">
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
    <div class="mt-16 w-full">
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
            <div class="swiper-pagination"></div>
        </div>
    </div>
    
    <div class="bg-white mx-auto px-2 text-center">
        <div class="flex justify-center mt-6">
            <img src="{{ asset('images/image.png') }}" alt="Hero Image" class="rounded-lg">
        </div>
    </div>
</div>

@endsection
