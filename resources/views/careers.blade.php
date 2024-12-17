@extends('layouts.app')

@section('title', 'Careers')

@section('content')
<div class="relative">
  <!-- Background Transparan -->
  <img src="{{ asset('images/bg-trans.png') }}" alt="Background Transparan" class="absolute inset-0 w-full h-auto mt-[-10rem] object-cover z-10">

  <!-- Box 3 -->
  <img src="{{ asset('images/box-3.png') }}" alt="Box 3" class="absolute top-[-7rem] left-1/4 transform -translate-y-1/2 -translate-x-1/2 z-0">

  <!-- Box 2 -->
  <img src="{{ asset('images/box-2.png') }}" alt="Box 2" class="absolute top-[5rem] left-[4rem] transform -translate-x-1/2 z-10">

  <!-- Box 1 -->
  <img src="{{ asset('images/box-1.png') }}" alt="Box 1" class="absolute bottom-[-10rem] right-[4rem] transform translate-x-[-50%] mt-8 z-10">

  <!-- Text Section -->
  <div class="relative z-20 mt-[8rem]">
    <h1 class="font-semibold	 text-[4rem] text-center bg-gradient-to-r from-[#4499db]  to-[#004370] bg-clip-text text-transparent">
      Shape the Future with Us
    </h1>
    <p class="text-center lg:px-[25rem] sm:px-[1rem] text-[#0D0D12]">
      Be part of something transformative. At SantaiMoto, we’re redefining motorcycle maintenance by merging technology with passion. If you’re ready to make a meaningful impact, we’d love to hear from you!
    </p>
  </div>
</div>

<div class="px-[5rem] my-12 mt-[12rem] ">
  <section>
    <button class="bg-white text-sm  text-gray-800 font-semibold py-[0.3rem] px-4 rounded-full border border-gray-300 shadow-md hover:shadow-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-300 transition duration-300">
      MISSION
    </button>
    <div class="flex">
      <div>
        <h1 class="text-[2rem] font-bold mt-8">OUR FUTURE</h1>
        <p class="text-[20px]">Imagine a world where SantaiMoto is the trusted name in every rider’s journey. Our app aims to go beyond basic maintenance—it’s a comprehensive hub where riders can find honest reviews on parts, the latest specs, expert insights, and even options to buy their next bike. Our goal is to become the go-to platform for everything motorcycle-related, making life simpler, safer, and more exciting for riders everywhere. We’re excited to build this vision together, and we need talented people to help make it a reality.</p>

      </div>
      <img src="{{asset('images/future.png')}}" alt="">
    </div>
  </section>
  <section>
    <h1 class="text-[3rem] font-semibold mb-12 text-center">Why Work with SantaiMoto?</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <div class="w-full mx-auto bg-white border border-gray-200 rounded-[1rem] shadow-md hover:shadow-lg transition-shadow duration-300">
        <div class="p-8">
          <img src="{{ asset('images/card-icon-5.png') }}" alt="Card Image">
          <h5 class="text-xl font-semibold text-gray-800 my-2">Innovative Culture</h5>
          <p class="text-gray-600 text-[16px] mb-4">
            We’re a company of pioneers who aren’t afraid to explore new ideas. At SantaiMoto, your creativity and insights will drive the future of motorcycle tech.
          </p>
        </div>
      </div>
      <div class="w-full mx-auto bg-white border border-gray-200 rounded-[1rem] shadow-md hover:shadow-lg transition-shadow duration-300">
        <div class="p-8">
          <img src="{{ asset('images/card-icon-1.png') }}" alt="Card Image">
          <h5 class="text-xl font-semibold text-gray-800 my-3">Community-Driven Team</h5>
          <p class="text-gray-600 text-[16px] mb-4">
            Join a team of dedicated professionals who love motorcycles as much as they love pushing boundaries. We’re passionate about what we do, and that energy drives everything here </p>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-3">
      <div class="w-full mx-auto bg-white border border-gray-200 rounded-[1rem] shadow-md hover:shadow-lg transition-shadow duration-300">
        <div class="p-8">
          <img src="{{ asset('images/card-icon-4.png') }}" alt="Card Image">
          <h5 class="text-xl font-semibold text-gray-800 my-3">Growth Opportunities</h5>
          <p class="text-gray-600 text-[16px] mb-4">
            We value learning and development, offering opportunities to sharpen your skills and advance your career.
        </div>
      </div>
      <div class="w-full mx-auto bg-white border border-gray-200 rounded-[1rem] shadow-md hover:shadow-lg transition-shadow duration-300">
        <div class="p-8">
          <img src="{{ asset('images/card-icon-5.png') }}" alt="Card Image">
          <h5 class="text-xl font-semibold text-gray-800 my-3">Flexible Work Environment</h5>
          <p class="text-gray-600 text-[16px] mb-4">
            Life moves fast, and we know flexibility matters. We support work-life balance to help our team thrive
        </div>
      </div>
      <div class="w-full mx-auto bg-white border border-gray-200 rounded-[1rem] shadow-md hover:shadow-lg transition-shadow duration-300">
        <div class="p-8">
          <img src="{{ asset('images/card-icon-2.png') }}" alt="Card Image">
          <h5 class="text-xl font-semibold text-gray-800 my-3">Bonus & Reward</h5>
          <p class="text-gray-600 text-[16px] mb-4">
            We appreciate our team’s hard work and dedication, offering ownership, bonuses, and rewards that let you share in SantaiMoto’s success.
        </div>
      </div>

    </div>


  </section>
  <section>
    <h1 class="text-[3rem] font-semibold mt-[6rem] mb-6">Life at SantaiMoto</h1>
    <div>
      <div class="flex gap-8  mb-8 justify-content-center align-items-center">
        <img src="{{asset('images/life-1.png')}}"  class="w-full h-auto" alt="">
        <img src="{{asset('images/life-2.png')}}" class="w-full h-auto" alt="">
      </div>
      <div class="flex gap-8 justify-content-center align-items-center">
        <div class="relative">
          <img src="{{ asset('images/life-3.png') }}" alt="Life 3" class="w-full rounded-md">
          <div class="absolute inset-0 flex items-center justify-center">
            <p class="text-white text-center text-lg font-semibol p-4 rounded-md">
              Working with us is about more than a job—it’s about being part of a community that values innovation, collaboration, and purpose.
            </p>
          </div>
        </div>
        <img src="{{asset('images/life-4.png')}}" class="w-full h-auto"  alt="">
      </div>
      <div class="flex gap-5 mt-5">
        <img src="{{asset('images/life-5.png')}}" alt="">
        <div class="bg-[#F8F9FB] border-2 border-[#EAEAEA] border-dashed text-[22px] p-[5rem] rounded-xl">
          Whether we’re brainstorming new features, solving challenges, or celebrating milestones, every day at SantaiMoto is an adventure. Together, we’re building something meaningful.
        </div>
      </div>
    </div>
  </section>

  <section class="mt-12">
    <div class="bg-[#F8F9FB] p-12">
      <div class="flex gap-12 align-items-center">
        <div class="relative">
          <h1 class="text-[3rem] font-semibold mt-12">Submit Your Resume</h1>
          <p class="text-[20px] pr-[12rem]">Ready to help shape the future of motorcycle technology? Send us your resume, and let’s talk about how you can be part of the SantaiMoto journey.</p>
          <img src="{{asset('images/submit.png')}}" class="absolute bottom-0 left-0" alt="">
        </div>
        <div class="bg-white shadow-sm rounded-lg p-8  w-full">
          <form action="#" method="POST" enctype="multipart/form-data">
            <div class="mb-5">
              <label for="name" class="block  font-medium mb-2">Name*</label>
              <input type="text" id="name" name="name" placeholder="Enter your name" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-5">
              <label for="email" class="block  font-medium mb-2">Email*</label>
              <input type="email" id="email" name="email" placeholder="Enter your email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-6 border-2 border-dashed border-gray-300 rounded-lg p-6 flex flex-col items-center justify-center">
              <img src="{{asset('images/ic.svg')}}" alt="">
              <p class=" font-medium mb-1">Upload your resume*</p>
              <p class="text-sm text-gray-500">Maximum file size: 10 MB</p>
              <p class="text-sm text-gray-500 mb-2">Supported format: PDF, PNG, JPG</p>
              <input type="file" id="resume" name="resume" class="hidden" required>
            </div>
            <button type="submit" class="block mx-auto bg-[#004370] hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300">
              Submit Application
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>
</div>

@endsection
