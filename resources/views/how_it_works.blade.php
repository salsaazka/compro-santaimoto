@extends('layouts.app')

@section('title', 'How It Works')

@section('content')
<div class="py-16 mb-5">
  <div class="container mx-auto px-6 md:px-12">
    <!-- Header Section -->
    <div class="text-center bg-grey-50 mb-16">
      <h1 class="text-[48px] font-bold text-gray-800" data-aos="fade-up">Getting Started</h1>
      <p class="text-gray-600 mt-4 mx-[20rem] text-[20px] " data-aos="fade-right">
        Getting your bike serviced has never been this easy! SantaiMoto is designed to make motorcycle
        maintenance simple, convenient, and reliable. Follow these quick steps to start using SantaiMoto and
        experience hassle-free service wherever you are.
      </p>
      <img src="{{ asset('images/box-1.png') }}" alt="Box 1" class="absolute top-0 right-0 transform translate-x-[-50%] mt-10 z-0" data-aos="fade-down-left" data-aos-delay="500">

    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center px-6 md:px-12 mt-16 mb-8">
      <!-- Steps List -->
      <div class="space-y-4">
        <!-- Step 1 -->
        <div data-aos="fade-right" class="relative group bg-gradient-to-r from-[#3ABFF7] to-[#005289] text-white rounded-lg shadow-lg p-4">
          <!-- Garis Samping -->
          <div class="absolute top-0 -left-5 w-1 h-full bg-white group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
          <h3 class="text-[20px] font-semibold">Download the App & Create an Account</h3>
          <p class="text-[18px] mt-2">
            Download SantaiMoto from the Google Play or Apple App Store, and create an account to get started.
          </p>
        </div>

        <!-- Steps 2-8 --> 
        <div data-aos="fade-right" data-aos-delay="300" class="relative group bg-white rounded-lg shadow-md p-4 hover:bg-gradient-to-r hover:from-blue-400 hover:to-blue-500 hover:text-white transition duration-300">
          <!-- Garis Samping -->
          <div class="absolute top-0 -left-5 w-1 h-full bg-white group-hover:bg-blue-200 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
          <h3 class="text-[20px] font-semibold text-[#0D0D12] group-hover:text-white">Register Your Motorcycle</h3>
        </div>

        <div data-aos="fade-right" data-aos-delay="600" class="relative group bg-white rounded-lg shadow-md p-4 hover:bg-gradient-to-r hover:from-blue-400 hover:to-blue-500 hover:text-white transition duration-300">
          <div class="absolute top-0 -left-5 w-1 h-full bg-white group-hover:bg-blue-200 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
          <h3 class="text-[20px] font-semibold text-[#0D0D12] group-hover:text-white">Select a Service</h3>
        </div>

        <div data-aos="fade-right" data-aos-delay="900" class="relative group bg-white rounded-lg shadow-md p-4 hover:bg-gradient-to-r hover:from-blue-400 hover:to-blue-500 hover:text-white transition duration-300">
          <div class="absolute top-0 -left-5 w-1 h-full bg-white group-hover:bg-blue-200 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
          <h3 class="text-[20px] font-semibold text-[#0D0D12] group-hover:text-white">Make a Payment</h3>
        </div>

        <div data-aos="fade-right" data-aos-delay="1200" class="relative group bg-white rounded-lg shadow-md p-4 hover:bg-gradient-to-r hover:from-blue-400 hover:to-blue-500 hover:text-white transition duration-300">
          <div class="absolute top-0 -left-5 w-1 h-full bg-white group-hover:bg-blue-200 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
          <h3 class="text-[20px] font-semibold text-[#0D0D12] group-hover:text-white">Get Matched with a Mechanic</h3>
        </div>

        <div data-aos="fade-right" data-aos-delay="1500" class="relative group bg-white rounded-lg shadow-md p-4 hover:bg-gradient-to-r hover:from-blue-400 hover:to-blue-500 hover:text-white transition duration-300">
          <div class="absolute top-0 -left-5 w-1 h-full bg-white group-hover:bg-blue-200 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
          <h3 class="text-[20px] font-semibold text-[#0D0D12] group-hover:text-white">Wait for Mechanic Arrival</h3>
        </div>

        <div data-aos="fade-right" data-aos-delay="1800" class="relative group bg-white rounded-lg shadow-md p-4 hover:bg-gradient-to-r hover:from-blue-400 hover:to-blue-500 hover:text-white transition duration-300">
          <div class="absolute top-0 -left-5 w-1 h-full bg-white group-hover:bg-blue-200 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
          <h3 class="text-[20px] font-semibold text-[#0D0D12] group-hover:text-white">Mechanic Arrival & Check-In</h3>
        </div>

        <div data-aos="fade-right" data-aos-delay="2100" class="relative group bg-white rounded-lg shadow-md p-4 hover:bg-gradient-to-r hover:from-blue-400 hover:to-blue-500 hover:text-white transition duration-300">
          <div class="absolute top-0 -left-5 w-1 h-full bg-white group-hover:bg-blue-200 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
          <h3 class="text-[20px] font-semibold text-[#0D0D12] group-hover:text-white">Track Service Progress</h3>
        </div>
      </div>

      <!-- Mockup Image -->
      <div class="flex justify-center items-start mt-[-8px]">
        <img src="{{ asset('images/image.png') }}" data-aos="fade-left" alt="Mockup Image" class="w-full max-w-lg rounded-lg">
      </div>
    </div>

  </div>
</div>

<div class="relative mt-[12rem] mb-[8rem]">
    <div class="bg-[#0d9cde2e] h-[25rem] rounded-2xl"></div>
    <div class="w-full mx-[9rem] flex flex-col-reverse absolute top-[-12rem] md:flex-row items-center rounded-lg mt-8 mb-8">
      <div data-aos="zoom-in" class="w-1/2 px-12 md:w-1/3 relative z-0 mt-[-50px] md:mt-0">
        <img src="{{ asset('images/MidIphone.png') }}" alt="Mobile App Screenshot" class="">
      </div>
      <div class="w-[50rem] mt-12">
        <h2 data-aos="fade-up" data-aos-delay="500" class="text-xl md:text-2xl lg:text-3xl font-bold text-[#003459] mb-2">
          Ready to experience hassle-free motorcycle maintenance?
        </h2>
        <p data-aos="fade-down"  data-aos-delay="1000" class="text-sm md:text-base text-[#006DAA] mb-4">
          Download SantaiMoto now and enjoy an RM 20 discount as a new user!
        </p>
        <!-- Tombol -->
        <a href="#" data-aos="fade-up" data-aos-delay="1500" class="inline-block bg-[#004E89] text-white text-sm font-semibold px-6 py-2 rounded-lg hover:bg-[#003459] transition duration-300">
          Download Now and Save RM 20
        </a>
      </div>
  
      <!-- Logo Background -->
      <div class="absolute right-4 bottom-4 hidden md:block">
        <img src="{{ asset('images/vector-banner.png') }}" alt="Background Logo" class="w-[80px] md:w-[120px] lg:w-[150px]">
      </div>
    </div>
  </div>

@endsection
