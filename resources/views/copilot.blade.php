@extends('layouts.app')

@section('title', 'AI Copilot')

@section('content')

    <!-- Header -->
    <header class="flex flex-col md:flex-row justify-between items-center px-6 md:px-12 py-12 bg-gray-50 w-full">
        <!-- Teks di Sebelah Kiri -->
        <div class="md:w-1/2 text-center md:text-left">
            <h1 class="text-2xl md:text-4xl font-bold text-blue-700 leading-snug">
                Meet Your AI Co-Pilot —<br>Your bike’s smartest partner.
            </h1>
            <div class="mt-6">
                <button class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300">
                    Get Started
                </button>
            </div>
        </div>
    
        <!-- Gambar Elemen Melayang -->
        <div class="relative md:w-1/2 mt-12 md:mt-0">
            <!-- Gambar utama yang berisi elemen melayang -->
            <img src="{{ asset('images/Group 135.png') }}" alt="Floating Elements" class="w-full max-w-md mx-auto">
        </div>
    </header>

    <!-- Core Features -->
    <section class="text-center py-12">
        <h2 class="text-2xl font-bold text-gray-800 mb-8">Core Features</h2>
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 px-4">
            <!-- Feature 1 -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="font-bold text-gray-800 mb-2">Diagnostics and Troubleshooting</h3>
                <p class="text-gray-600 text-sm">Users can describe issues or upload photos for real-time analysis.</p>
            </div>
            <!-- Feature 2 -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="font-bold text-gray-800 mb-2">Proactive Maintenance Reminders</h3>
                <p class="text-gray-600 text-sm">Co-Pilot tracks usage patterns and service history to prompt timely care.</p>
            </div>
            <!-- Feature 3 -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="font-bold text-gray-800 mb-2">Personalized Recommendations</h3>
                <p class="text-gray-600 text-sm">Based on riding habits, Co-Pilot offers tailored maintenance tips.</p>
            </div>
            <!-- Feature 4 -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="font-bold text-gray-800 mb-2">Real-Time Alerts and Safety Checks</h3>
                <p class="text-gray-600 text-sm">Automatic alerts if an issue is detected during rides.</p>
            </div>
        </div>
    </section>

    <!-- Banner -->
    <section class="py-12 bg-blue-50">
        <div class="container mx-auto text-center">
            <div class=" inline-block mb-4 p-4">
                <img src="{{ asset('images/graphic-element.png') }}" alt="Logo Placeholder">
            </div>
            <h2 class="text-lg md:text-2xl font-bold text-blue-700 mb-4">Learn more about how Co-Pilot can make every ride safer.</h2>
            <button class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700">
                Get Started
            </button>
        </div>
    </section>

@endsection
