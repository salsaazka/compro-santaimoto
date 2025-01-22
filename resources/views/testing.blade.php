@extends('layouts.app')
@section('content')
<div class="bg-white py-16">
  <div class="container mx-auto px-6 md:px-12">
    <div class="text-center">
      <h2 class="md:text-[44px] text-[24px] font-bold text-gray-800">Unlock the Power of SantaiMoto</h2>
      <p class="text-[#818898] text-[20px] mt-4">Experience seamless bike management with features that save you time, money, and hassle.</p>
    </div>
    <div class="mt-10 flex gap-12 flex-col md:flex-row items-center md:items-start">
      <div class="w-full md:w-1/2 space-y-4">
        <div data-aos="fade-right" class="relative group bg-gradient-to-r from-[#3ABFF7] to-[#005289] text-white rounded-2xl shadow-lg p-4" onclick="changeImage(0)">
          <div class="absolute top-0 -left-5 w-1 h-full bg-blue-800 group-hover:bg-white transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
          <div class="ml-4">
            <h3 class="text-white text-[20px]  md:text-[24px] font-bold">Service History Tracking</h3>
            <p class="text-white text-[12px]">One place to track every service, every part, every detail.</p>
          </div>
        </div>
        <div data-aos="fade-right" data-aos-delay="500" class="relative group flex items-center p-4  rounded-2xl shadow-md cursor-pointer transition-all bg-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-400 focus-within:bg-gradient-to-r focus-within:from-blue-500 focus-within:to-blue-700" onclick="changeImage(1)">
          <div class="absolute top-0 -left-4 w-1 h-full bg-gray-300 group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
          <div class="ml-4">
            <h3 class="bg-gradient-to-r from-[#4499db] text-[20px]  md:text-[24px]  to-[#004370] bg-clip-text text-transparent font-bold group-hover:text-white">Flexible Payment Options</h3>
            <p class="text-gray-600 text-sm group-hover:text-white">Pay your way—credit, buy now pay later, or FPX.</p>
          </div>
        </div>
        <div  data-aos="fade-right" data-aos-delay="1000" class="relative group flex items-center p-4  rounded-2xl shadow-md cursor-pointer transition-all bg-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-400 focus-within:bg-gradient-to-r focus-within:from-blue-500 focus-within:to-blue-700" onclick="changeImage(2)">
          <div class="absolute top-0 -left-4 w-1 h-full bg-gray-300 group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
          <div class="ml-4">
            <h3 class="bg-gradient-to-r from-[#4499db] text-[20px]  md:text-[24px]   to-[#004370] bg-clip-text text-transparent font-bold group-hover:text-white">Catalog of Branded Parts</h3>
            <p class="text-gray-600 text-sm group-hover:text-white">Only the best parts for your bike—choose from top brands.</p>
          </div>
        </div>
        <div  data-aos="fade-right" data-aos-delay="1500" class="relative group flex items-center p-4  rounded-2xl shadow-md cursor-pointer transition-all bg-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-400 focus-within:bg-gradient-to-r focus-within:from-blue-500 focus-within:to-blue-700" onclick="changeImage(3)">
          <div class="absolute top-0 -left-4 w-1 h-full bg-gray-300 group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
          <div class="ml-4">
            <h3 class="bg-gradient-to-r from-[#4499db] text-[20px]  md:text-[24px]  to-[#004370] bg-clip-text text-transparent font-bold group-hover:text-white">Mechanic Profiles and Ratings</h3>
            <p class="text-gray-600 text-sm group-hover:text-white">Know your mechanic—see ratings, reviews, and specialties.</p>
          </div>
        </div>
        <div  data-aos="fade-right" data-aos-delay="2000" class="relative group flex items-center p-4  rounded-2xl shadow-md cursor-pointer transition-all bg-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-400 focus-within:bg-gradient-to-r focus-within:from-blue-500 focus-within:to-blue-700" onclick="changeImage(4)">
          <div class="absolute top-0 -left-4 w-1 h-full bg-gray-300 group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
          <div class="ml-4">
            <h3 class="bg-gradient-to-r from-[#4499db] text-[20px]  md:text-[24px]   to-[#004370] bg-clip-text text-transparent font-bold group-hover:text-white">Real-Time Service Updates</h3>
            <p class="text-gray-600 text-sm group-hover:text-white">Stay updated on every job, from start to finish.</p>
          </div>
        </div>
        <div  data-aos="fade-right" data-aos-delay="2500" class="relative group flex items-center p-4  rounded-2xl shadow-md cursor-pointer transition-all bg-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-400 focus-within:bg-gradient-to-r focus-within:from-blue-500 focus-within:to-blue-700" onclick="changeImage(5)">
          <div class="absolute top-0 -left-4 w-1 h-full bg-gray-300 group-hover:bg-blue-800 transition-all duration-300 rounded-tl-lg rounded-bl-lg"></div>
          <div class="ml-4">
            <h3 class="bg-gradient-to-r from-[#4499db] text-[20px]  md:text-[24px]   to-[#004370] bg-clip-text text-transparent font-bold group-hover:text-white">In-App Communication</h3>
            <p class="text-gray-600 text-sm group-hover:text-white">Ask questions, clarify details, get real-time answers.</p>
          </div>
        </div>
      </div>
      <div class="mt-10 md:mt-0 flex justify-center">
        <img data-aos="fade-left" src="{{ asset('images/s-1.png') }}" alt="Phone Mockup" class="main-image rounded-lg">
      </div>
    </div>
  </div>
</div>
<script>
  const images = [
      "{{ asset('images/s-1.png') }}",
      "{{ asset('images/s-2.png') }}",
      "{{ asset('images/s-3.png') }}",
      "{{ asset('images/s-4.png') }}",
      "{{ asset('images/s-5.png') }}",
      "{{ asset('images/s-6.png') }}",
      "{{ asset('images/s-7.png') }}",
      "{{ asset('images/s-8.png') }}",
      "{{ asset('images/s-9.png') }}",
    
  ]; 
  function changeImage(index) {
      const imgElement = document.querySelector('.main-image');
      imgElement.style.opacity = 0;
      setTimeout(() => {
          imgElement.src = images[index];
          imgElement.style.opacity = 1;
      }, 300);
  }
</script>
@endsection
