@extends('layouts.app')

@section('title', 'How It Works')

@section('content')
    <div class="py-16">
        <div class="container mx-auto px-6 md:px-12">
            <!-- Header Section -->
            <div class="text-center mb-12 bg-grey-50">
                <h1 class="text-4xl font-bold text-gray-800">Getting Started</h1>
                <p class="text-gray-600 mt-4 max-w-3xl mx-auto">
                    Getting your bike serviced has never been this easy! SantaiMoto is designed to make motorcycle
                    maintenance simple, convenient, and reliable. Follow these quick steps to start using SantaiMoto and
                    experience hassle-free service wherever you are.
                </p>
            </div>

           <!-- Steps Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <!-- Steps List -->
                <div>
                    <div class="space-y-6">
                        <div class="p-6 bg-gradient-to-r from-blue-500 to-blue-700 text-white rounded-lg shadow-md">
                            <h3 class="text-lg font-bold">Download the App & Create an Account</h3>
                            <p class="mt-2">Download SantaiMoto from the Google Play or Apple App Store, and create an
                                account to get started.</p>
                        </div>
                        <div class="p-6 bg-white rounded-lg shadow-md hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-700 hover:text-white transition duration-300">
                            <h3 class="text-lg font-bold">Register Your Motorcycle</h3>
                        </div>
                        <div class="p-6 bg-white rounded-lg shadow-md hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-700 hover:text-white transition duration-300">
                            <h3 class="text-lg font-bold">Select a Service</h3>
                        </div>
                        <div class="p-6 bg-white rounded-lg shadow-md hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-700 hover:text-white transition duration-300">
                            <h3 class="text-lg font-bold">Make a Payment</h3>
                        </div>
                        <div class="p-6 bg-white rounded-lg shadow-md hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-700 hover:text-white transition duration-300">
                            <h3 class="text-lg font-bold">Get Matched with a Mechanic</h3>
                        </div>
                        <div class="p-6 bg-white rounded-lg shadow-md hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-700 hover:text-white transition duration-300">
                            <h3 class="text-lg font-bold">Wait for Mechanic Arrival</h3>
                        </div>
                        <div class="p-6 bg-white rounded-lg shadow-md hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-700 hover:text-white transition duration-300">
                            <h3 class="text-lg font-bold">Mechanic Arrival & Check-In</h3>
                        </div>
                        <div class="p-6 bg-white rounded-lg shadow-md hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-700 hover:text-white transition duration-300">
                            <h3 class="text-lg font-bold">Track Service Progress</h3>
                        </div>
                    </div>
                </div>

                <!-- Mockup Image -->
                <div class="flex justify-center">
                    <img src="{{ asset('images/Image.png') }}" alt="Mockup Image" class="max-w-sm rounded-lg shadow-lg">
                </div>
            </div>

        </div>
    </div>

    {{-- <div class="relative bg-cover bg-center bg-no-repeat rounded-lg shadow-lg w-full md:w-5/6 lg:w-3/4 h-72 md:h-96 py-16" style="background-image: url('{{ asset('images/banner-home.png') }}');">
    <div class="container mx-auto px-6 md:px-12 flex justify-center">
        <div class="absolute inset-0 flex flex-col justify-center items-between p-8 md:p-12">
            <h2 class="text-2xl md:text-3xl font-bold text-blue-800 leading-snug z-10">
                Ready to experience hassle-free motorcycle maintenance?
            </h2>
            <p class="mt-4 text-gray-700 z-10">
                Download SantaiMoto now and enjoy an RM 20 discount as a new user!
            </p>
            <button class="mt-6 bg-blue-600 text-white px-8 py-3 rounded-lg shadow-md hover:bg-blue-700 z-10">
                Download Now and Save RM 20
            </button>
        </div>
    </div>
    </div> --}}

    <div class="relative w-full flex items-center bg-[#0D9BDE17] max-h-[250px] min-h-[250px]">
        <div class="w-[30%] absolute bottom-0 right-0">
            <img src="{{ asset('images/MidIphone.png') }}" alt="" class="w-[200px]">
        </div>
        {{-- <div class="w-[70%]">
            aaaa
        </div> --}}
    </div>


    </div>


@endsection
