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
      <p class="text-base sm:text-lg md:text-[20px] text-gray-600 mt-4 mx-4 sm:mx-8 md:mx-16 lg:mx-auto max-w-4xl leading-relaxed" data-aos="fade-right">
        Getting your bike serviced has never been this easy! SantaiMoto is designed to make motorcycle
        maintenance simple, convenient, and reliable. Follow these quick steps to start using SantaiMoto and
        experience hassle-free service wherever you are.
      </p>

      <!-- Gambar -->
      <img src="{{ asset('images/box-1.png') }}" alt="Box 1" class="absolute top-0 right-0 hidden md:block transform translate-x-[-50%] mt-10 z-0" data-aos="fade-down-left" data-aos-delay="500">
    </div>

    <div class="bg-white py-16">
      <div class="container mx-auto px-6 md:px-12">
        <div class="text-center">
          <h2 class="md:text-[44px] text-[24px] font-bold text-gray-800">Unlock the Power of SantaiMoto</h2>
          <p class="text-[#818898] text-[20px] mt-4">Experience seamless bike management with features that save you time, money, and hassle.</p>
        </div>
        <div class="mt-10 flex gap-12 flex-col md:flex-row items-center md:items-start">
          <div class="w-full md:w-1/2 space-y-4">


            <div data-aos="fade-right" class="relative group item flex items-center p-4  rounded-2xl shadow-md cursor-pointer transition-all bg-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-400 active" onclick="changeImage(0)">
              <div class="absolute top-0 -left-4 w-1 h-full bg-gray-300 group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
              <div class="ml-4">
                <h3 class="bg-gradient-to-r from-[#4499db] text-[20px]  md:text-[24px]  to-[#004370] bg-clip-text text-transparent font-bold group-hover:text-white">Download the App & Create an Account</h3>
                <p class="text-gray-600 text-sm group-hover:text-white">Download SantaiMoto from the Google Play or Apple App Store, and create an account to get started.</p>
              </div>
            </div>
            <div data-aos="fade-right" class="relative group item flex items-center p-4  rounded-2xl shadow-md cursor-pointer transition-all bg-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-400" onclick="changeImage(1)">
              <div class="absolute top-0 -left-4 w-1 h-full bg-gray-300 group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
              <div class="ml-4">
                <h3 class="bg-gradient-to-r from-[#4499db] text-[20px]  md:text-[24px]  to-[#004370] bg-clip-text text-transparent font-bold group-hover:text-white">Register Your Motorcycle</h3>
              </div>
            </div>
            <div data-aos="fade-right" class="relative group item flex items-center p-4  rounded-2xl shadow-md cursor-pointer transition-all bg-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-400" onclick="changeImage(2)">
              <div class="absolute top-0 -left-4 w-1 h-full bg-gray-300 group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
              <div class="ml-4">
                <h3 class="bg-gradient-to-r from-[#4499db] text-[20px]  md:text-[24px]   to-[#004370] bg-clip-text text-transparent font-bold group-hover:text-white">Select a Service</h3>
              </div>
            </div>
            <div data-aos="fade-right" class="relative group item flex items-center p-4  rounded-2xl shadow-md cursor-pointer transition-all bg-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-400" onclick="changeImage(3)">
              <div class="absolute top-0 -left-4 w-1 h-full bg-gray-300 group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
              <div class="ml-4">
                <h3 class="bg-gradient-to-r from-[#4499db] text-[20px]  md:text-[24px]  to-[#004370] bg-clip-text text-transparent font-bold group-hover:text-white">Make a Payment</h3>
              </div>
            </div>
            <div data-aos="fade-right" class="relative group item flex items-center p-4  rounded-2xl shadow-md cursor-pointer transition-all bg-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-400" onclick="changeImage(4)">
              <div class="absolute top-0 -left-4 w-1 h-full bg-gray-300 group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
              <div class="ml-4">
                <h3 class="bg-gradient-to-r from-[#4499db] text-[20px]  md:text-[24px]   to-[#004370] bg-clip-text text-transparent font-bold group-hover:text-white">Get Matched with a Mechanic</h3>
              </div>
            </div>
            <div data-aos="fade-right" class="relative group item flex items-center p-4  rounded-2xl shadow-md cursor-pointer transition-all bg-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-400" onclick="changeImage(5)">
              <div class="absolute top-0 -left-4 w-1 h-full bg-gray-300 group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
              <div class="ml-4">
                <h3 class="bg-gradient-to-r from-[#4499db] text-[20px]  md:text-[24px]   to-[#004370] bg-clip-text text-transparent font-bold group-hover:text-white">Wait for Mechanic Arrival</h3>
              </div>
            </div>
            <div data-aos="fade-right" class="relative group item flex items-center p-4  rounded-2xl shadow-md cursor-pointer transition-all bg-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-400" onclick="changeImage(6)">
              <div class="absolute top-0 -left-4 w-1 h-full bg-gray-300 group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
              <div class="ml-4">
                <h3 class="bg-gradient-to-r from-[#4499db] text-[20px]  md:text-[24px]   to-[#004370] bg-clip-text text-transparent font-bold group-hover:text-white">Mechanic Arrival & Check-In</h3>
              </div>
            </div>
            <div data-aos="fade-right" class="relative group item flex items-center p-4  rounded-2xl shadow-md cursor-pointer transition-all bg-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-400" onclick="changeImage(7)">
              <div class="absolute top-0 -left-4 w-1 h-full bg-gray-300 group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
              <div class="ml-4">
                <h3 class="bg-gradient-to-r from-[#4499db] text-[20px]  md:text-[24px]   to-[#004370] bg-clip-text text-transparent font-bold group-hover:text-white">Track Service Progress</h3>
              </div>
            </div>


          </div>
          <div class="mt-10 md:mt-0 flex justify-center">
            <img data-aos="fade-left" src="{{ asset('images/be-1.png') }}" alt="Phone Mockup" class="main-image rounded-lg">
          </div>
        </div>
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
      <h2 data-aos="fade-up" data-aos-delay="500" class="text-xl sm:text-2xl md:text-[32px] font-bold text-[#003459] leading-snug mb-3">
        Ready to experience hassle-free motorcycle maintenance?
      </h2>
      <p data-aos="fade-down" data-aos-delay="1000" class="text-sm sm:text-base md:text-[24px] text-[#006DAA] mb-3">
        Download SantaiMoto now and enjoy an RM 20 discount as a new user!
      </p>
      <!-- Button -->
      <a href="#" data-aos="fade-up" data-aos-delay="1500" class="inline-block bg-[#004E89] text-white text-xs sm:text-sm md:text-[16px] font-semibold px-6 py-2 rounded-lg hover:bg-[#003459] transition duration-300">
        Download Now and Save RM 20
      </a>
    </div>


    <!-- Logo Background -->
    <div class="absolute right-4 bottom-4 hidden md:block">
      <img src="{{ asset('images/vector-banner.png') }}" alt="Background Logo" class="w-[80px] md:w-[120px] lg:w-[150px]">
    </div>
  </div>
</div>

<script>
  const images = [
    "{{ asset('images/be-1.png') }}"
    , "{{ asset('images/be-2.png') }}"
    , "{{ asset('images/be-3.png') }}"
    , "{{ asset('images/be-4.png') }}"
    , "{{ asset('images/be-5.png') }}"
    , "{{ asset('images/be-6.png') }}"
    , "{{ asset('images/be-7.png') }}"
    , "{{ asset('images/be-8.png') }}"
    , "{{ asset('images/be-9.png') }}"
  ];

  function changeImage(index) {
    const imgElement = document.querySelector('.main-image');
    const items = document.querySelectorAll('.item');

    items.forEach(item => item.classList.remove('active'));
    items[index].classList.add('active');

    imgElement.style.opacity = 0;
    setTimeout(() => {
      imgElement.src = images[index];
      imgElement.style.opacity = 1;
    }, 300);
  }

</script>
@endsection
