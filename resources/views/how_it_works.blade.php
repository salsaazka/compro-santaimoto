@extends('layouts.app')

@section('title', 'How It Works')

@section('content')
    <div class="py-16 mb-5">
        <div class="container mx-auto px-6 md:px-12">
            <!-- Header Section -->
            <div class="text-center bg-grey-50 mb-16">
                <h1 class="text-4xl font-bold text-gray-800">Getting Started</h1>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">
                    Getting your bike serviced has never been this easy! SantaiMoto is designed to make motorcycle
                    maintenance simple, convenient, and reliable. Follow these quick steps to start using SantaiMoto and
                    experience hassle-free service wherever you are.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center px-6 md:px-12 mt-16 mb-8">
                <!-- Steps List -->
                <div class="space-y-4">
                    <!-- Step 1 -->
                    <div class="relative group bg-gradient-to-r from-blue-500 to-blue-700 text-white rounded-lg shadow-lg p-4">
                        <!-- Garis Samping -->
                        <div class="absolute top-0 -left-5 w-1 h-full bg-white group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
                        <h3 class="text-lg font-bold">Download the App & Create an Account</h3>
                        <p class="text-sm mt-2">
                            Download SantaiMoto from the Google Play or Apple App Store, and create an account to get started.
                        </p>
                    </div>
            
                    <!-- Steps 2-8 -->
                    <div class="relative group bg-white rounded-lg shadow-md p-4 hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-700 hover:text-white transition duration-300">
                        <!-- Garis Samping -->
                        <div class="absolute top-0 -left-5 w-1 h-full bg-white group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
                        <h3 class="text-lg font-bold group-hover:text-white">Register Your Motorcycle</h3>
                    </div>
            
                    <div class="relative group bg-white rounded-lg shadow-md p-4 hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-700 hover:text-white transition duration-300">
                        <div class="absolute top-0 -left-5 w-1 h-full bg-white group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
                        <h3 class="text-lg font-bold group-hover:text-white">Select a Service</h3>
                    </div>
            
                    <div class="relative group bg-white rounded-lg shadow-md p-4 hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-700 hover:text-white transition duration-300">
                        <div class="absolute top-0 -left-5 w-1 h-full bg-white group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
                        <h3 class="text-lg font-bold group-hover:text-white">Make a Payment</h3>
                    </div>
            
                    <div class="relative group bg-white rounded-lg shadow-md p-4 hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-700 hover:text-white transition duration-300">
                        <div class="absolute top-0 -left-5 w-1 h-full bg-white group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
                        <h3 class="text-lg font-bold group-hover:text-white">Get Matched with a Mechanic</h3>
                    </div>
            
                    <div class="relative group bg-white rounded-lg shadow-md p-4 hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-700 hover:text-white transition duration-300">
                        <div class="absolute top-0 -left-5 w-1 h-full bg-white group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
                        <h3 class="text-lg font-bold group-hover:text-white">Wait for Mechanic Arrival</h3>
                    </div>
            
                    <div class="relative group bg-white rounded-lg shadow-md p-4 hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-700 hover:text-white transition duration-300">
                        <div class="absolute top-0 -left-5 w-1 h-full bg-white group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
                        <h3 class="text-lg font-bold group-hover:text-white">Mechanic Arrival & Check-In</h3>
                    </div>
            
                    <div class="relative group bg-white rounded-lg shadow-md p-4 hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-700 hover:text-white transition duration-300">
                        <div class="absolute top-0 -left-5 w-1 h-full bg-white group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
                        <h3 class="text-lg font-bold group-hover:text-white">Track Service Progress</h3>
                    </div>
                </div>
            
                <!-- Mockup Image -->
                <div class="flex justify-center items-start mt-[-8px]">
                    <img src="{{ asset('images/image.png') }}" 
                         alt="Mockup Image" 
                         class="w-full max-w-lg rounded-lg">
                </div>
            </div>            
            
        </div>
    </div>
    
    <div class="relative w-full flex justify-center items-center bg-[#0D9BDE17] min-h-[250px] max-h-[250px] rounded-lg mt-8 mb-16">
        <!-- Gambar Mockup Handphone -->
        <div class="w-[40%] absolute left-10 bottom-0">
            <img src="{{ asset('images/MidIphone.png') }}" 
                alt="Mobile App Screenshot" 
                class="w-[200px]">
        </div>

        <!-- Konten Teks -->
        <div class="ml-[280px] md:ml-[320px] lg:ml-[350px] pr-6">
            <h2 class="text-xl md:text-2xl lg:text-3xl font-bold text-[#003459] mb-2">
                Ready to experience hassle-free motorcycle maintenance?
            </h2>
            <p class="text-sm md:text-base text-[#006DAA] mb-4">
                Download SantaiMoto now and enjoy an RM 20 discount as a new user!
            </p>
            <!-- Tombol -->
            <a href="#"
            class="inline-block bg-[#004E89] text-white text-sm font-semibold px-6 py-2 rounded-lg hover:bg-[#003459] transition duration-300">
                Download Now and Save RM 20
            </a>
        </div>

        <!-- Logo Dekorasi Kanan Bawah -->
        <div class="absolute right-3 bottom-4">
            <img src="{{ asset('images/vector-banner.png') }}" 
                alt="Background Logo" 
                class="w-[80px] md:w-[120px] lg:w-[150px] opacity-50 md:opacity-100">
        </div>

    </div>
@endsection
