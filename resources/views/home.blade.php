@extends('layouts.app')

@section('title', 'Welcome to SantaiMoto')

@section('content')
<div class="relative mx-5 mt-3 rounded-lg overflow-hidden text-center">
  <!-- Banner Image -->
  <img src="{{ asset('images/banner-home.png') }}" alt="Hero Image" class="w-full object-cover rounded-lg">

  <!-- Overlay Text -->
  <div class="absolute  top-4 md:top-1/4 left-2 md:left-12 lg:left-16 text-left text-white">
    <h1 data-aos="fade-up" data-aos-duration="800" class="text-[20px] md:text-[40px] leading-5 md:leading-[3rem] font-semibold md:px-0 px-3 md:font-bold mb-4">
      Discover the Ultimate Convenience in <br>
      Motorcycle Maintenance with Santai
    </h1>
    <p data-aos="zoom-in" data-aos-delay="500" class="text-[12px] px-3 md:px-0 md:text-[20px] leading-4 md:leading-[2rem] text-gray-200">
      Experience seamless, on-demand motorcycle maintenance at your <br> doorstep. Join millions of satisfied users today.
    </p>
  </div>
  <!-- Logo Section -->
  <div class="absolute bottom-[3rem] left-0 right-0 md:flex hidden justify-center align-end space-x-8 md:space-x-[4rem]">
    <img data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" src="{{ asset('images/l-1.png') }}" alt="Airbnb Logo" class="h-3 md:h-12 object-contain">
    <img data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000" src="{{ asset('images/l-2.png') }}" alt="HubSpot Logo" class="h-3 md:h-12 object-contain">
    <img data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1000" src="{{ asset('images/l-3.png') }}" alt="Google Logo" class="h-3 md:h-[4rem] object-contain">
    <img data-aos="fade-up" data-aos-delay="1500" data-aos-duration="1000" src="{{ asset('images/l-4.png') }}" alt="Microsoft Logo" class="h-3 md:h-12 object-contain">
    <img data-aos="fade-up" data-aos-delay="2000" data-aos-duration="1000" src="{{ asset('images/l-5.png') }}" alt="Walmart Logo" class="h-3 md:h-10 object-contain">
    <img data-aos="fade-up" data-aos-delay="2500" data-aos-duration="1000" src="{{ asset('images/l-6.png') }}" alt="FedEx Logo" class="h-3 md:h-10 object-contain">
  </div>

</div>

<div class="md:mx-[6rem] mx-[1rem]">
  <div class="bg-white py-16">
    <div class="container mx-auto px-2 text-center">
      <h2 class="md:text-[32px] text-[20px] md:mx-[5rem] mx-[1rem] text-[#818898]"><b class="bg-gradient-to-r from-[#4499db]  to-[#004370] bg-clip-text text-transparent">Meet SantaiMoto</b>, the app that brings trusted motorcycle mechanics and peace of mind directly to you.</h2>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-[4rem]">
        <div data-aos="fade-down" data-aos-delay="500" class="p-4 bg-gray-100 rounded-2xl ">
          <div class="justify-center mt-[-4rem] flex items-center">
            <img src="{{ asset('images/Frame-1.png') }}" alt="" srcset="">
          </div>
          <h3 class="font-bold text-[24px]">Convenience</h3>
          <p class=" font-semibold mx-12 text-[#818898] text-[18px] mt-2">On-demand service that saves you time.</p>
        </div>
        <div data-aos="fade-down" data-aos-delay="1000" class="p-4 bg-gray-100 rounded-2xl ">
          <div class="justify-center mt-[-4rem] flex items-center">
            <img src="{{ asset('images/Frame-2.png') }}" alt="" srcset="">
          </div>
          <h3 class="font-bold text-[24px]">Reliability</h3>
          <p class=" font-semibold mx-12 text-[#818898] text-[18px] mt-2">Skilled mechanics and a service you can trust.</p>
        </div>
        <div data-aos="fade-down" data-aos-delay="1500" class="p-4 bg-gray-100 rounded-2xl ">
          <div class="justify-center mt-[-4rem] flex items-center">
            <img src="{{ asset('images/Frame-3.png') }}" alt="" srcset="">
          </div>
          <h3 class="font-bold text-[24px]">Transparency</h3>
          <p class=" font-semibold mx-12 text-[#818898] text-[18px] mt-2">Problem details, repair records, and complete visibility.</p>
        </div>
      </div>
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
            <h3 class="bg-gradient-to-r from-[#4499db] text-[20px]  md:text-[24px]  to-[#004370] bg-clip-text text-transparent font-bold group-hover:text-white">Service History Tracking</h3>
            <p class="text-gray-600 text-sm group-hover:text-white">One place to track every service, every part, every detail.</p>
          </div>
        </div>
        <div data-aos="fade-right" class="relative group item flex items-center p-4  rounded-2xl shadow-md cursor-pointer transition-all bg-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-400" onclick="changeImage(1)">
          <div class="absolute top-0 -left-4 w-1 h-full bg-gray-300 group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
          <div class="ml-4">
            <h3 class="bg-gradient-to-r from-[#4499db] text-[20px]  md:text-[24px]  to-[#004370] bg-clip-text text-transparent font-bold group-hover:text-white">Flexible Payment Options</h3>
            <p class="text-gray-600 text-sm group-hover:text-white">Pay your way—credit, buy now pay later, or FPX.</p>
          </div>
        </div>
        <div data-aos="fade-right" class="relative group item flex items-center p-4  rounded-2xl shadow-md cursor-pointer transition-all bg-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-400" onclick="changeImage(2)">
          <div class="absolute top-0 -left-4 w-1 h-full bg-gray-300 group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
          <div class="ml-4">
            <h3 class="bg-gradient-to-r from-[#4499db] text-[20px]  md:text-[24px]   to-[#004370] bg-clip-text text-transparent font-bold group-hover:text-white">Catalog of Branded Parts</h3>
            <p class="text-gray-600 text-sm group-hover:text-white">Only the best parts for your bike—choose from top brands.</p>
          </div>
        </div>
        <div data-aos="fade-right" class="relative group item flex items-center p-4  rounded-2xl shadow-md cursor-pointer transition-all bg-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-400" onclick="changeImage(3)">
          <div class="absolute top-0 -left-4 w-1 h-full bg-gray-300 group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
          <div class="ml-4">
            <h3 class="bg-gradient-to-r from-[#4499db] text-[20px]  md:text-[24px]  to-[#004370] bg-clip-text text-transparent font-bold group-hover:text-white">Mechanic Profiles and Ratings</h3>
            <p class="text-gray-600 text-sm group-hover:text-white">Know your mechanic—see ratings, reviews, and specialties.</p>
          </div>
        </div>
        <div data-aos="fade-right" class="relative group item flex items-center p-4  rounded-2xl shadow-md cursor-pointer transition-all bg-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-400" onclick="changeImage(4)">
          <div class="absolute top-0 -left-4 w-1 h-full bg-gray-300 group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
          <div class="ml-4">
            <h3 class="bg-gradient-to-r from-[#4499db] text-[20px]  md:text-[24px]   to-[#004370] bg-clip-text text-transparent font-bold group-hover:text-white">Real-Time Service Updates</h3>
            <p class="text-gray-600 text-sm group-hover:text-white">Stay updated on every job, from start to finish.</p>
          </div>
        </div>
        <div data-aos="fade-right" class="relative group item flex items-center p-4  rounded-2xl shadow-md cursor-pointer transition-all bg-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-400" onclick="changeImage(5)">
          <div class="absolute top-0 -left-4 w-1 h-full bg-gray-300 group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
          <div class="ml-4">
            <h3 class="bg-gradient-to-r from-[#4499db] text-[20px]  md:text-[24px]   to-[#004370] bg-clip-text text-transparent font-bold group-hover:text-white">In-App Communication</h3>
            <p class="text-gray-600 text-sm group-hover:text-white">Ask questions, clarify details, get real-time answers.</p>
          </div>
        </div>


      </div>
      <div class="mt-10 md:mt-0 flex justify-center">
        <img data-aos="fade-left" src="{{ asset('images/de-1.png') }}" alt="Phone Mockup" class="main-image rounded-lg">
      </div>
    </div>
  </div>
</div>

<!-- Section AI Co-Pilot -->
<div class="container flex flex-col md:flex-row items-center md:space-x-10">
  <!-- Gambar Mockup -->
  <div class="flex justify-center md:w-1/2">
    <img data-aos="fade-right" data-aos-delay="500" src="{{ asset('images/copiliot-asset.png') }}" alt="AI Co-Pilot" class=" rounded-lg">
  </div>
  <!-- Konten -->
  <div class="md:w-1/2 text-center md:text-left mt-8 md:mt-0">
    <h2 data-aos="fade-up" data-aos-delay="500" class="md:text-[44px] text-[24px] font-bold text-gray-800">Meet Your AI Co-Pilot</h2>
    <p data-aos="fade-up" data-aos-delay="1000" class="text-gray-600 mt-4 md:mr-12 md:text-[20px]  text-[18px]">
      Your bike’s smartest partner—an interactive assistant that’s always on your side.
    </p>
    <a href="{{url('copilot')}}">
      <button data-aos="fade-up" data-aos-delay="1500" class="bg-[#004370] text-white px-6 py-3 rounded-lg shadow-md mt-6 hover:bg-[#003f70]">
        Learn More
      </button>
    </a>
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
    <div class="swiper-pagination absolute left-0 right-0 flex justify-center z-10"></div>
  </div>
</div>
</div>
<div class="mx-8 relative md:mt-[20rem] mt-[1rem]">
  <div class="bg-[#0d9cde2e] h-[25rem] rounded-2xl"></div>
  <div class="w-full flex gap-[4rem] md:gap-0 flex-col-reverse absolute top-[-11rem] md:flex-row items-center rounded-lg mt-8 mb-8">
    <div class="w-1/3 md:px-12 md:w-1/3 relative z-0 mt-[-50px] md:mt-[4rem]">
      <img src="{{ asset('images/MidIphone.png') }}" alt="Mobile App Screenshot" class="">
    </div>
    <div class="w-full md:w-1/2 text-center md:mt- md:text-left px-6 md:px-12 md:pt-[10rem] pt-[2rem] md:mt-0 mt-[14rem] z-10">
      <h2 data-aos="fade-up" data-aos-delay="500" class="text-2xl md:text-4xl font-bold text-gray-800 leading-snug">
        Join over <span class="text-blue-600">5,000</span> users and a growing network of qualified mechanics
      </h2>
      <p data-aos="fade-up" data-aos-delay="1000" class="text-gray-600 mt-4 text-sm md:text-base">
        Get the app now on your favorite platform and experience seamless bike management with SantaiMoto.
      </p>
      <!-- Tombol Platform -->
      <div class="md:mt-6 md:flex hidden justify-center md:justify-start space-x-4">
        <a href="#">
          <img src="{{ asset('images/googleplay.png') }}" data-aos="zoom-in" data-aos-delay="1500" alt="Google Play" class="w-[4rem] md:w-40">
        </a>
        <a href="#">
          <img src="{{ asset('images/appstore.png') }}" data-aos="zoom-in" data-aos-delay="2000" alt="App Store" class="w-[4rem] md:w-40">
        </a>
      </div>
    </div>
    <div class="absolute right-4 bottom-4 hidden md:block">
      <img src="{{ asset('images/vector-banner.png') }}" alt="Background Logo" class="w-[80px] md:w-[120px] lg:w-[150px]">
    </div>
  </div>
</div>


<!-- Testimonials -->
<section class="py-16 mt-[10rem] relative">
  <div class="container md:mx-12 px-6 md:px-12">
    <div class="text-center mb-12">
      <button class="bg-white text-sm  text-gray-800 font-semibold py-[0.3rem] px-4 rounded-full border border-gray-300 shadow-md hover:shadow-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-300 transition duration-300">
        TESTIMONIALS
      </button>
      <h2 data-aos="fade-up" class="md:text-[52px] text-[30px] font-semibold text-gray-800 mt-4">Trusted by Thousands</h2>
    </div>
    <div class="flex md:flex-row flex-col h-auto gap-5 md:mr-12 align-items-center">
      <div data-aos="zoom-in" data-aos-delay="1000" class="bg-white p-6 rounded-2xl border shadow-2xl relative flex flex-col justify-between h-full hover:bg-white transition duration-300 group">
        <p class="text-gray-600 text-[18px] mb-4">
          “I had an issue with my engine while riding to work, and SantaiMoto helped me out fast. The process was seamless from start to finish, and the mechanic explained everything they were doing so I could understand. It’s such a relief to know I can count on them in emergencies! I’d highly recommend.”
        </p>
        <img src="{{ asset('images/testi-element1.png') }}" alt="Icon Chat" class="md:w-[10rem] w-[5rem] md:ml-[-4rem] ml-[-1rem]">
        <div class="flex items-center mt-[2rem]">
          <img src="{{ asset('images/Ellipse 1.png') }}" alt="Customer 1" class="h-12 w-12 rounded-full object-cover">
          <div class="ml-4">
            <p class="font-bold text-gray-800">Ronny J.</p>
            <p class="text-gray-600 text-sm">Jakarta</p>
            <div class="flex mt-1 text-yellow-500">★★★★★</div>
          </div>
        </div>
      </div>

      <div class="">
        <div data-aos="zoom-in" data-aos-delay="1500" class="bg-[#F8F9FB] p-6 rounded-2xl border w-[22rem] mb-3 relative flex flex-col justify-between  hover:bg-white transition duration-300 group">
          <p class="text-gray-600 text-[18px] mb-4">
            “The convenience is unmatched. Scheduling a tune-up through the app was so easy, and the mechanic was professional and thorough.”
          </p>
          <div class="flex items-center">
            <img src="{{ asset('images/Ellipse 1.png') }}" alt="Customer 1" class="h-12 w-12 rounded-full object-cover">
            <div class="ml-4">
              <p class="font-bold text-gray-800">Ronny J.</p>
              <p class="text-gray-600 text-sm">Jakarta</p>
              <div class="flex mt-1 text-yellow-500">★★★★★</div>
            </div>
          </div>
        </div>
        <div data-aos="zoom-in" data-aos-delay="2000" class="bg-[#F8F9FB] p-6 rounded-2xl border relative flex flex-col justify-between hover:bg-white transition duration-300 group">
          <p class="text-gray-600 text-[18px] mb-4">
            “Super easy to schedule and the mechanic was on time and professional. I would highly recommend.”
          </p>
          <div class="flex items-center">
            <img src="{{ asset('images/Ellipse 1.png') }}" alt="Customer 1" class="h-12 w-12 rounded-full object-cover">
            <div class="ml-4">
              <p class="font-bold text-gray-800">Ronny J.</p>
              <p class="text-gray-600 text-sm">Jakarta</p>
              <div class="flex mt-1 text-yellow-500">★★★★★</div>
            </div>
          </div>
        </div>
      </div>

      <div data-aos="zoom-in" data-aos-delay="2500" class="bg-[#F8F9FB] p-6 rounded-2xl border relative flex flex-col justify-between h-full hover:bg-white transition duration-300 group">
        <div class="relative">
          <p class="text-gray-600 text-[18px] mb-4">
            “SantaiMoto has completely changed how I handle bike maintenance. Scheduling a service is as simple as a few taps on my phone, and the mechanics are always punctual and well-prepared. The Co-Pilot’s real-time tracking gives me peace of mind because I always know when to expect help. Plus, the advice they offer keeps my bike in top shape. I’ve been recommending it to all my friends!”
            <img src="{{asset('images/graphic-element-2.png')}}" class="absolute bottom-[-7rem] w-[6rem] md:w-auto md:top-[10rem] right-[-2rem] md:right-[-7rem]" alt="">
          </p>
        </div>
        <div class="flex items-center mt-[11rem]">
          <img src="{{ asset('images/Ellipse 1.png') }}" alt="Customer 1" class="h-12 w-12 rounded-full object-cover">
          <div class="ml-4">
            <p class="font-bold text-gray-800">Ronny J.</p>
            <p class="text-gray-600 text-sm">Jakarta</p>
            <div class="flex mt-1 text-yellow-500">★★★★★</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="py-16 md:mx-12 mx-2">
  <div class="container mx-auto px-6 md:px-12 flex flex-col md:flex-row items-center md:items-start">
    <!-- Judul -->
    <div class="w-full md:w-1/3 space-y-4 mx-3">
      <h2 class="md:text-[52px] text-[30px] font-semibold text-gray-800">Frequently Asked Questions</h2>
      <p class="text-gray-600 text-[16px]">
        Got questions? We’ve got answers. Here’s everything you need to know about how we help brands connect with the right influences and drive results.
      </p>
      <button class="mt-6 bg-[#004370] text-white px-6 py-3 rounded-lg shadow-md hover:bg-[#003870]">
        See All FAQs
      </button>
    </div>

    <!-- FAQ List -->
    <div class="w-full md:w-1/2 md:ml-[6rem] ">
      <!-- FAQ 1 -->
      <details class="p-4 border-b-2 border-gray-300 mb-4">
        <summary class="text-lg font-bold text-gray-800 flex justify-between items-center cursor-pointer">
          What if I don’t know what service my bike needs?
          <span class="text-xl font-bold">–</span>
        </summary>
        <p class="text-[#0D0D12] mt-4">
          Describe the issue or send a photo, and the AI Co-Pilot will recommend a service.
        </p>
      </details>

      <!-- FAQ 2 -->
      <details class="p-4 border-b-2 border-gray-300 mb-4">
        <summary class="text-lg font-bold text-gray-800 flex justify-between items-center cursor-pointer">
          How does the AI Co-Pilot diagnose issues?
          <span class="text-xl font-bold">+</span>
        </summary>
        <p class="text-[#0D0D12] mt-4">
          The AI Co-Pilot uses advanced diagnostic tools to pinpoint issues based on your input.
        </p>
      </details>

      <!-- FAQ 3 -->
      <details class="p-4 border-b-2 border-gray-300 mb-4">
        <summary class="text-lg font-bold text-gray-800 flex justify-between items-center cursor-pointer">
          Do I need SantaiMoto hardware for the Co-Pilot?
          <span class="text-xl font-bold">+</span>
        </summary>
        <p class="text-[#0D0D12] mt-4">
          No, the app works with your existing hardware for basic diagnostics and guidance.
        </p>
      </details>

      <!-- FAQ 4 -->
      <details class="p-4 border-b-2 border-gray-300 mb-4">
        <summary class="text-lg font-bold text-gray-800 flex justify-between items-center cursor-pointer">
          Can I choose my mechanic?
          <span class="text-xl font-bold">+</span>
        </summary>
        <p class="text-[#0D0D12] mt-4">
          Yes, you can view mechanic profiles, ratings, and reviews before making a choice.
        </p>
      </details>

      <!-- FAQ 5 -->
      <details class="p-4 border-b-2 border-gray-300 mb-4">
        <summary class="text-lg font-bold text-gray-800 flex justify-between items-center cursor-pointer">
          Is there a service guarantee?
          <span class="text-xl font-bold">+</span>
        </summary>
        <p class="text-[#0D0D12] mt-4">
          Yes, we offer a satisfaction guarantee on all services provided through SantaiMoto.
        </p>
      </details>
    </div>
  </div>
</section>



<script>
  const images = [
    "{{ asset('images/de-1.png') }}"
    , "{{ asset('images/de-2.png') }}"
    , "{{ asset('images/de-3.png') }}"
    , "{{ asset('images/de-4.png') }}"
    , "{{ asset('images/de-5.png') }}"
    , "{{ asset('images/de-6.png') }}"
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
