@extends('layouts.app')

@section('title', 'How It Works')

@section('content')
<div class="py-16 mb-5">
  <div class="container mx-auto px-6 md:px-12">
    <!-- Header Section -->
    <div class="text-center bg-grey-50 mb-16 relative">
      <!-- Judul Utama -->
      <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-800" data-aos="fade-up">
        Getting Started
      </h1>
    
      <!-- Paragraf -->
      <p class="text-base sm:text-lg md:text-[20px] text-gray-600 mt-4 mx-4 sm:mx-8 md:mx-16 lg:mx-auto max-w-4xl leading-relaxed" 
          data-aos="fade-right"
      >
        Getting your bike serviced has never been this easy! SantaiMoto is designed to make motorcycle
        maintenance simple, convenient, and reliable. Follow these quick steps to start using SantaiMoto and
        experience hassle-free service wherever you are.
      </p>
    
      <!-- Gambar -->
      <img src="{{ asset('images/box-1.png') }}" 
           alt="Box 1" 
           class="absolute top-0 right-0 hidden md:block transform translate-x-[-50%] mt-10 z-0" 
           data-aos="fade-down-left" 
           data-aos-delay="500">
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center px-6 md:px-12 mt-16 mb-8">
      <!-- Steps List -->
      <div class="space-y-4">
        <!-- Step 1 -->
        <div data-aos="fade-right" class="relative group bg-gradient-to-r from-[#3ABFF7] to-[#005289] text-white rounded-lg shadow-lg p-4">
          <!-- Garis Samping -->
          <div class="absolute top-0 -left-5 w-1 h-full bg-white group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
          <h3 class="text-lg sm:text-base md:text-[20px] font-semibold leading-snug">
            Download the App & Create an Account
          </h3>
          <p class="text-base sm:text-sm md:text-[18px] leading-relaxed mt-2">
            Download SantaiMoto from the Google Play or Apple App Store, and create an account to get started.
          </p>

        </div>
    
        <!-- Steps 2-8 -->
        <div data-aos="fade-right" data-aos-delay="300" class="relative group bg-white rounded-lg shadow-md p-4 hover:bg-gradient-to-r hover:from-blue-400 hover:to-blue-500 hover:text-white transition duration-300">
          <div class="absolute top-0 -left-5 w-1 h-full bg-white group-hover:bg-blue-200 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
          <h3 class="text-lg sm:text-base md:text-[20px] font-semibold text-[#0D0D12] group-hover:text-white">Register Your Motorcycle</h3>
        </div>
    
        <div data-aos="fade-right" data-aos-delay="600" class="relative group bg-white rounded-lg shadow-md p-4 hover:bg-gradient-to-r hover:from-blue-400 hover:to-blue-500 hover:text-white transition duration-300">
          <div class="absolute top-0 -left-5 w-1 h-full bg-white group-hover:bg-blue-200 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
          <h3 class="text-lg sm:text-base md:text-[20px] font-semibold text-[#0D0D12] group-hover:text-white">Select a Service</h3>
        </div>
    
        <div data-aos="fade-right" data-aos-delay="900" class="relative group bg-white rounded-lg shadow-md p-4 hover:bg-gradient-to-r hover:from-blue-400 hover:to-blue-500 hover:text-white transition duration-300">
          <div class="absolute top-0 -left-5 w-1 h-full bg-white group-hover:bg-blue-200 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
          <h3 class="text-lg sm:text-base md:text-[20px] font-semibold text-[#0D0D12] group-hover:text-white">Make a Payment</h3>
        </div>
    
        <div data-aos="fade-right" data-aos-delay="1200" class="relative group bg-white rounded-lg shadow-md p-4 hover:bg-gradient-to-r hover:from-blue-400 hover:to-blue-500 hover:text-white transition duration-300">
          <div class="absolute top-0 -left-5 w-1 h-full bg-white group-hover:bg-blue-200 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
          <h3 class="text-lg sm:text-base md:text-[20px] font-semibold text-[#0D0D12] group-hover:text-white">Get Matched with a Mechanic</h3>
        </div>
    
        <div data-aos="fade-right" data-aos-delay="1500" class="relative group bg-white rounded-lg shadow-md p-4 hover:bg-gradient-to-r hover:from-blue-400 hover:to-blue-500 hover:text-white transition duration-300">
          <div class="absolute top-0 -left-5 w-1 h-full bg-white group-hover:bg-blue-200 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
          <h3 class="text-lg sm:text-base md:text-[20px] font-semibold text-[#0D0D12] group-hover:text-white">Wait for Mechanic Arrival</h3>
        </div>
    
        <div data-aos="fade-right" data-aos-delay="1800" class="relative group bg-white rounded-lg shadow-md p-4 hover:bg-gradient-to-r hover:from-blue-400 hover:to-blue-500 hover:text-white transition duration-300">
          <div class="absolute top-0 -left-5 w-1 h-full bg-white group-hover:bg-blue-200 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
          <h3 class="text-lg sm:text-base md:text-[20px] font-semibold text-[#0D0D12] group-hover:text-white">Mechanic Arrival & Check-In</h3>
        </div>
    
        <div data-aos="fade-right" data-aos-delay="2100" class="relative group bg-white rounded-lg shadow-md p-4 hover:bg-gradient-to-r hover:from-blue-400 hover:to-blue-500 hover:text-white transition duration-300">
          <div class="absolute top-0 -left-5 w-1 h-full bg-white group-hover:bg-blue-200 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
          <h3 class="text-lg sm:text-base md:text-[20px] font-semibold text-[#0D0D12] group-hover:text-white">Track Service Progress</h3>
        </div>
      </div>
    
      <!-- Mockup Image -->
      <div class="flex justify-center items-start mt-[-8px]">
        <img src="{{ asset('images/image.png') }}" data-aos="fade-left" alt="Mockup Image" class="w-full max-w-lg rounded-lg">
      </div>
    </div>

  </div>
</div>

<div class="mx-8 relative md:mt-[20rem] mt-4">
  <div class="bg-[#0d9cde2e] h-[25rem] rounded-2xl"></div>
  <div class="w-full flex gap-[4rem] md:gap-0 flex-col-reverse absolute top-[-16rem] md:flex-row items-center rounded-lg mt-8 mb-8">
    <!-- Mockup Image -->
    <div data-aos="zoom-in" class="w-1/3 md:px-12 md:w-1/3 relative z-0 mt-[-50px] md:mt-[4rem]">
      <img src="{{ asset('images/MidIphone.png') }}" alt="Mobile App Screenshot" class="w-[200px] sm:w-[250px] md:w-auto">
    </div>

    <!-- Text Content -->
    <div class="w-full md:w-1/2 text-center md:text-left px-6 md:px-12 md:pt-[10rem] pt-[2rem] md:mt-0 mt-[14rem] z-10">
      <h2 
        data-aos="fade-up" 
        data-aos-delay="500" 
        class="text-xl sm:text-2xl md:text-[32px] font-bold text-[#003459] leading-snug mb-3"
      >
        Ready to experience hassle-free motorcycle maintenance?
      </h2>
      <p 
        data-aos="fade-down" 
        data-aos-delay="1000" 
        class="text-sm sm:text-base md:text-[24px] text-[#006DAA] mb-3"
      >
        Download SantaiMoto now and enjoy an RM 20 discount as a new user!
      </p>
      <!-- Button -->
      <a 
        href="#" 
        data-aos="fade-up" 
        data-aos-delay="1500" 
        class="inline-block bg-[#004E89] text-white text-xs sm:text-sm md:text-[16px] font-semibold px-6 py-2 rounded-lg hover:bg-[#003459] transition duration-300"
      >
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