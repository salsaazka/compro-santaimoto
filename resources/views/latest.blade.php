@extends('layouts.app')

@section('title', 'Latest')

@section('content')
<div class="bg-[#F8F9FB]">
  <div class="relative">
    <img src="{{ asset('images/box-3.png') }}" alt="Box 3" class="absolute top-0 right-1/4 transform -translate-y-1/2 -translate-x-1/2 z-0">
    <img src="{{ asset('images/box-1.png') }}" alt="Box 1" class="absolute bottom-0 right-0 transform translate-x-[-50%] mt-8 z-0">
    <div class="relative z-20 md:p-[4rem] p-[1rem]">
      <h1 data-aos="fade-up" class=" text-[36px] text-start bg-gradient-to-r from-[#3e65b5]  to-[#004370] bg-clip-text text-transparent"><b>Welcome to SantaiMoto’s news hub! </b> <br>
      </h1>
      <h1 data-aos="fade-up" data-aos-delay="500" class="text-[36px] md:w-[50rem] text-start bg-gradient-to-r from-[#3e65b5]  to-[#004370] bg-clip-text text-transparent"> Stay informed with the latest updates, tips, and industry insights, all in one place.</h1>
    </div>
  </div>
  <div class="md:mx-[6rem] mx-[1rem] ">
    <section>
      <button class="bg-white text-gray-800 font-semibold py-2 px-4 rounded-full border border-gray-300 shadow-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-300 transition duration-300">
        RECENT UPLOADS
      </button>

      <div class="flex md:flex-row flex-col mt-12 gap-5 items-center">
        <div class=" p-2 bg-white border border-gray-200 rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300">
          <img class="w-full rounded-t-lg" src="{{asset('images/blog-1.jpg')}}" alt="Card Image">
          <div class="p-3">
            <div class="flex items-center mb-2 text-sm text-blue-500">
              <div class="flex gap-2">
                <img src="{{asset('images/star.svg')}}" alt="">
                <span class="font-semibold text-[#1978A6]"> Facebook Post</span>
              </div>
              <span class="mx-2 font-semibold text-[#1978A6]">•</span>
              <span class="font-semibold text-[#1978A6]">Jan 19, 2024</span>
            </div>
            <h5 class="text-xl text-start font-semibold text-gray-800 mb-2">Riding in Style: Brian Ahmad Talks Bike Customization</h5>
            <p class="text-gray-600 text-sm">
              This is a brief description of the card content. It's concise and informative.
            </p>
          </div>
        </div>
        <div>
          <div class="bg-white border mb-3 border-gray-200 rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300">
            <div class="flex md:flex-row flex-col align-items-center p-2">
              <img class="md:w-[214px] md:h-[128px] w-full h-[200px] aspect-square object-cover rounded-l-lg" src="{{asset('images/blog-2.png')}}" alt="Card Image">
              <div class="p-3 md:w-2/3">
                <div class="flex items-center text-sm text-blue-500">
                  <div class="flex gap-2">
                    <img src="{{asset('images/facebook.svg')}}" alt="">
                    <span class="font-semibold text-[#1978A6]"> Facebook Post</span>
                  </div>
                  <span class="mx-2 font-semibold text-[#1978A6]">•</span>
                  <span class="font-semibold text-[#1978A6]">Jan 19, 2024</span>
                </div>
                <h5 class="text-[18px] font-semibold text-gray-800 mt-2 mb-2">Behind the Handlebar: Our Latest Ride Review</h5>
                <p class="text-gray-600 text-[14px]">
                  Ready for your next adventure? Our latest review breaks down the best routes in Malaysia for motorcyclists.
                </p>
              </div>
            </div>
          </div>
          <div class="bg-white border border-gray-200 mb-3 rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300">
            <div class="flex md:flex-row flex-col align-items-center p-2">
              <img class="md:w-[214px] md:h-[128px] w-full h-[200px] aspect-square object-cover rounded-l-lg" src="{{asset('images/blog-3.jpg')}}" alt="Card Image">
              <div class="p-3 md:w-2/3">
                <div class="flex items-center text-sm text-blue-500">
                  <div class="flex gap-2">
                    <img src="{{asset('images/facebook.svg')}}" alt="">
                    <span class="font-semibold text-[#1978A6]"> Facebook Post</span>
                  </div>
                  <span class="mx-2 font-semibold text-[#1978A6]">•</span>
                  <span class="font-semibold text-[#1978A6]">Jan 19, 2024</span>
                </div>
                <h5 class="text-[18px] font-semibold text-gray-800 mt-2 mb-2">Behind the Handlebar: Our Latest Ride Review</h5>
                <p class="text-gray-600 text-[14px]">
                  Ready for your next adventure? Our latest review breaks down the best routes in Malaysia for motorcyclists.
                </p>
              </div>
            </div>
          </div>
          <div class="bg-white border border-gray-200 rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300">
            <div class="flex md:flex-row flex-col align-items-center p-2">
              <img class="md:w-[214px] md:h-[128px] w-full h-[200px] aspect-square object-cover rounded-l-lg" src="{{asset('images/blog-4.jpg')}}" alt="Card Image">
              <div class="p-3 md:w-2/3">
                <div class="flex items-center text-sm text-blue-500">
                  <div class="flex gap-2">
                    <img src="{{asset('images/facebook.svg')}}" alt="">
                    <span class="font-semibold text-[#1978A6]"> Facebook Post</span>
                  </div>
                  <span class="mx-2 font-semibold text-[#1978A6]">•</span>
                  <span class="font-semibold text-[#1978A6]">Jan 19, 2024</span>
                </div>
                <h5 class="text-[18px] font-semibold text-gray-800 mt-2 mb-2">Behind the Handlebar: Our Latest Ride Review</h5>
                <p class="text-gray-600 text-[14px]">
                  Ready for your next adventure? Our latest review breaks down the best routes in Malaysia for motorcyclists.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="flex md:flex-row flex-col items-center mt-12 gap-3 justify-between">
        <img src="{{asset('images/vid-1.png')}}" alt="">
        <img src="{{asset('images/vid-2.png')}}" alt="">
        <img src="{{asset('images/vid-3.png')}}" alt="">
        <img src="{{asset('images/vid-4.png')}}" alt="">
      </div>
    </section>

    <section class="md:mt-[8rem] mt-[4rem]">
      <button class="bg-white mt-5 text-gray-800 font-semibold py-2 px-4 rounded-full border border-gray-300 shadow-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-300 transition duration-300">
        ALL POSTS
      </button>

      <div class="flex md:flex-row flex-col mt-5 items-center gap-3">
        <div class="p-2 bg-white border border-gray-200 rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300 max-w-sm mx-auto">
          <img class="rounded-t-lg w-full" src="{{asset('images/upload-1.png')}}" alt="Card Image">
          <div class="p-4">
            <div class="flex items-center mb-2 text-sm text-blue-500">
              <div class="flex gap-2">
                <img src="{{asset('images/star.svg')}}" alt="">
                <span class="font-semibold text-[#1978A6]"> Facebook Post</span>
              </div>
              <span class="mx-2 font-semibold text-[#1978A6]">•</span>
              <span class="font-semibold text-[#1978A6]">Jan 19, 2024</span>
            </div>
            <h5 class="text-xl text-start font-semibold text-gray-800 mb-2 text-center">
              Riding in Style: Brian Ahmad Talks Bike Customization
            </h5>
            <p class="text-gray-600 text-sm text-justify">
              This is a brief description of the card content. It's concise and informative.
            </p>

          </div>
        </div>
        <div class="p-2 bg-white border border-gray-200 rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300 max-w-sm mx-auto">
          <!-- Gambar -->
          <img class="rounded-t-lg w-full" src="{{asset('images/upload-1.png')}}" alt="Card Image">

          <!-- Konten -->
          <div class="p-4">
            <div class="flex items-center mb-2 text-sm text-blue-500">
              <div class="flex gap-2">
                <img src="{{asset('images/star.svg')}}" alt="">
                <span class="font-semibold text-[#1978A6]"> Facebook Post</span>
              </div>
              <span class="mx-2 font-semibold text-[#1978A6]">•</span>
              <span class="font-semibold text-[#1978A6]">Jan 19, 2024</span>
            </div>
            <h5 class="text-[18px] text-start font-semibold text-gray-800 mb-2 text-center">
              Riding in Style: Brian Ahmad Talks Bike Customization
            </h5>
            <p class="text-gray-600 text-sm text-justify">
              This is a brief description of the card content. It's concise and informative.
            </p>
          </div>
        </div>
        <div class="p-2 bg-white border border-gray-200 rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300 max-w-sm mx-auto">
          <!-- Gambar -->
          <img class="rounded-t-lg w-full" src="{{asset('images/upload-1.png')}}" alt="Card Image">

          <!-- Konten -->
          <div class="p-4">
            <div class="flex items-center mb-2 text-sm text-blue-500">
              <div class="flex gap-2">
                <img src="{{asset('images/star.svg')}}" alt="">
                <span class="font-semibold text-[#1978A6]"> Facebook Post</span>
              </div>
              <span class="mx-2 font-semibold text-[#1978A6]">•</span>
              <span class="font-semibold text-[#1978A6]">Jan 19, 2024</span>
            </div>
            <h5 class="text-[18px] text-start font-semibold text-gray-800 mb-2 text-center">
              Riding in Style: Brian Ahmad Talks Bike Customization
            </h5>
            <p class="text-gray-600 text-sm text-justify">
              This is a brief description of the card content. It's concise and informative.
            </p>
          </div>
        </div>
        <img src="{{asset('images/post.png')}}" class="" alt="">
      </div>
      <div class="flex md:flex-row flex-col items-center mt-5 gap-3">
        <div class="p-2 bg-white border border-gray-200 rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300 max-w-sm mx-auto">
          <!-- Gambar -->
          <img class="rounded-t-lg w-full" src="{{asset('images/upload-1.png')}}" alt="Card Image">

          <!-- Konten -->
          <div class="p-4">
            <div class="flex items-center mb-2 text-sm text-blue-500">
              <div class="flex gap-2">
                <img src="{{asset('images/star.svg')}}" alt="">
                <span class="font-semibold text-[#1978A6]"> Facebook Post</span>
              </div>
              <span class="mx-2 font-semibold text-[#1978A6]">•</span>
              <span class="font-semibold text-[#1978A6]">Jan 19, 2024</span>
            </div>
            <h5 class="text-[18px] text-start font-semibold text-gray-800 mb-2 text-center">
              Riding in Style: Brian Ahmad Talks Bike Customization
            </h5>
            <p class="text-gray-600 text-sm text-justify">
              This is a brief description of the card content. It's concise and informative.
            </p>
          </div>
        </div>
        <div class="p-2 bg-white border border-gray-200 rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300 max-w-sm mx-auto">
          <!-- Gambar -->
          <img class="rounded-t-lg w-full" src="{{asset('images/upload-1.png')}}" alt="Card Image">

          <!-- Konten -->
          <div class="p-4">
            <div class="flex items-center mb-2 text-sm text-blue-500">
              <div class="flex gap-2">
                <img src="{{asset('images/star.svg')}}" alt="">
                <span class="font-semibold text-[#1978A6]"> Facebook Post</span>
              </div>
              <span class="mx-2 font-semibold text-[#1978A6]">•</span>
              <span class="font-semibold text-[#1978A6]">Jan 19, 2024</span>
            </div>
            <h5 class="text-[18px] text-start  font-semibold text-gray-800 mb-2 text-center">
              Riding in Style: Brian Ahmad Talks Bike Customization
            </h5>
            <p class="text-gray-600 text-sm text-justify">
              This is a brief description of the card content. It's concise and informative.
            </p>
          </div>
        </div>
        <div class="p-2 bg-white border border-gray-200 rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300 max-w-sm mx-auto">
          <!-- Gambar -->
          <img class="rounded-t-lg w-full" src="{{asset('images/upload-1.png')}}" alt="Card Image">

          <!-- Konten -->
          <div class="p-4">
            <div class="flex items-center mb-2 text-sm text-blue-500">
              <div class="flex gap-2">
                <img src="{{asset('images/star.svg')}}" alt="">
                <span class="font-semibold text-[#1978A6]"> Facebook Post</span>
              </div>
              <span class="mx-2 font-semibold text-[#1978A6]">•</span>
              <span class="font-semibold text-[#1978A6]">Jan 19, 2024</span>
            </div>
            <h5 class="text-[18px] text-start font-semibold text-gray-800 mb-2 text-center">
              Riding in Style: Brian Ahmad Talks Bike Customization
            </h5>
            <p class="text-gray-600 text-sm text-justify">
              This is a brief description of the card content. It's concise and informative.
            </p>
          </div>
        </div>
        <img src="{{asset('images/post-2.png')}}" class="" alt="">

      </div>
    </section>

    <div class="flex items-center  justify-center space-x-2 md:pb-[10rem] pb-[5rem] mt-[5rem]">
      <!-- Tombol "Previous" -->
      <button class="px-4 py-2  text-gray-600 rounded-lg hover:bg-gray-300 disabled:opacity-50 disabled:cursor-not-allowed" disabled>
        <img src="{{asset('images/left.svg')}}" alt="">
      </button>

      <!-- Nomor Halaman -->
      <button class="px-4 py-2 bg-white rounded-full ">
        1
      </button>
      <button class="px-4 py-2  text-gray-600 rounded-lg hover:bg-gray-300">
        2
      </button>
      <button class="px-4 py-2  text-gray-600 rounded-lg hover:bg-gray-300">
        3
      </button>
      <span class="px-4 py-2 text-gray-600">...</span>
      <button class="px-4 py-2  text-gray-600 rounded-lg hover:bg-gray-300">
        10
      </button>

      <!-- Tombol "Next" -->
      <button class="px-4 py-2  text-gray-600 rounded-lg hover:bg-gray-300">
        <img src="{{asset('images/right.svg')}}" alt="">
      </button>
    </div>


  </div>
</div>
@endsection
