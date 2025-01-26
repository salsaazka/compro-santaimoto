@extends('layouts.app')

@section('title', 'AI Copilot')

@section('content')
<div class="bg-[#F8F9FB]">
  <!-- Header -->
  <header class="flex flex-col  md:flex-row justify-between items-center px-6 md:px-[6rem] py-12  w-full">
    <!-- Teks di Sebelah Kiri -->
    <div class="md:w-1/2 text-center flex flex-col items-center">
      <h1 data-aos="fade-up" class="text-2xl md:text-[48px] text-center font-semibold  bg-gradient-to-r from-[#4499db]  to-[#004370] bg-clip-text text-transparent leading-snug">
        Meet Your AI Co-Pilot —<br>Your bike’s smartest partner.
      </h1>
      {{-- <div class="mt-6" data-aos="fade-up"> --}}
      <button class="bg-[#004370] text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300">
        Get Started
      </button>
      {{-- </div> --}}
    </div>

    <!-- Gambar Elemen Melayang -->
    <div class="relative md:w-1/2 mt-12 md:mt-0">
      <!-- Gambar utama yang berisi elemen melayang -->
      <img src="{{ asset('images/Group 135.png') }}" alt="Floating Elements" class="w-full max-w-md mx-auto" data-aos="zoom-in">
    </div>
  </header>

  <!-- Core Features -->
  <section class="text-center px-[4rem] py-12">
    <h2 data-aos="fade-up" data-aos-delay="500" class="text-[44px] font-bold text-gray-800 mb-8">Core Features</h2>
    <div class="container mx-auto text-left grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 px-4">
      <!-- Feature 1 -->
      <div class="bg-white rounded-2xl shadow-lg border p-6" data-aos="fade-up" data-aos-delay="500">
        <h3 class="font-bold text-gray-800 text-[20px] mb-2">Diagnostics and Troubleshooting</h3>
        <p class="text-gray-600 text-[16px]">Users can describe issues or upload photos for real-time analysis.
        </p>
      </div>
      <!-- Feature 2 -->
      <div class="bg-white rounded-2xl shadow-lg border p-6" data-aos="fade-up" data-aos-delay="1000">
        <h3 class="font-bold text-gray-800 text-[20px] mb-2">Proactive Maintenance Reminders</h3>
        <p class="text-gray-600 text-[16px]">Co-Pilot tracks usage patterns and service history to prompt timely
          care.</p>
      </div>
      <!-- Feature 3 -->
      <div class="bg-white rounded-2xl shadow-lg border p-6" data-aos="fade-up" data-aos-delay="1500">
        <h3 class="font-bold text-gray-800 text-[20px] mb-2">Personalized Recommendations</h3>
        <p class="text-gray-600 text-[16px]">Based on riding habits, Co-Pilot offers tailored maintenance tips.
        </p>
      </div>
      <!-- Feature 4 -->
      <div class="bg-white rounded-2xl shadow-lg border p-6" data-aos="fade-up" data-aos-delay="2000">
        <h3 class="font-bold text-gray-800 text-[20px] mb-2">Real-Time Alerts and Safety Checks</h3>
        <p class="text-gray-600 text-[16px]">Automatic alerts if an issue is detected during rides.</p>
      </div>
    </div>
  </section>

  <!-- Banner -->
  <section class="py-12 bg-blue-50 mx-[6rem] border rounded-2xl">
    <div class="container mx-auto text-center">
      <div class="inline-block p-4">
        <a href="#" class="js-modal-btn" data-video-id="MrUvVFEnmBw">
          <img src="{{ asset('images/logoh.png') }}" alt="Logo Placeholder" data-aos="fade-down">
        </a>
      </div>
      <h2 class="text-lg md:text-2xl font-bold mt-[-2rem] bg-gradient-to-r from-[#4499db] to-[#004370] bg-clip-text text-transparent" data-aos="fade-right">Learn more about how Co-Pilot can make every ride safer.</h2>
      <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=MrUvVFEnmBw">
        <button class="bg-[#004370] text-white px-8 py-3 mt-5 rounded-lg hover:bg-blue-700">
          Get Started
        </button>
      </a>
    </div>
  </section>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/modal-video/js/jquery-modal-video.min.js"></script>

  <script>
    $(document).ready(function() {
      $(".js-modal-btn").modalVideo();
    });

  </script>


</div>
@endsection
