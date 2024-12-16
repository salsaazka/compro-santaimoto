@extends('layouts.app')

@section('title', 'Latest')

@section('content')
<div class="relative">

  <img src="{{ asset('images/box-3.png') }}" alt="Box 3" class="absolute top-0 right-1/4 transform -translate-y-1/2 -translate-x-1/2 z-0">
  <img src="{{ asset('images/box-1.png') }}" alt="Box 1" class="absolute bottom-0 right-0 transform translate-x-[-50%] mt-8 z-0">
  <div class="relative z-20 p-[4rem]">
    <h1 class=" text-[2rem] text-start"><b>Welcome to SantaiMoto’s news hub! </b> <br>
      Stay informed with the latest updates, tips, and industry insights, all in one place.</h1>
  </div>
</div>
<div class="mx-12">
  <section>
    <button class="bg-white text-gray-800 font-semibold py-2 px-4 rounded-full border border-gray-300 shadow-md hover:shadow-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-300 transition duration-300">
      RECENT UPLOADS
    </button>
    <div class="flex mt-12 align-items-center gap-5">
      <div class=" p-2 bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
        <img class="w-full rounded-t-lg" src="{{asset('images/blog-1.jpg')}}" alt="Card Image">
        <div class="p-6">
          <h5 class="text-xl font-semibold text-gray-800 mb-2">Riding in Style: Brian Ahmad Talks Bike Customization</h5>
          <p class="text-gray-600 text-sm mb-4">
            This is a brief description of the card content. It's concise and informative.
          </p>
        
        </div>
      </div>
     <div>
      <div class="bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
        <div class="flex align-items-center p-2">
          <img class="w-1/3 rounded-l-lg" src="{{asset('images/blog-2.png')}}" alt="Card Image">
          <div class="p-4 w-2/3">
            <div class="flex items-center text-sm text-blue-500">
              <span class="mr-2">
                <i class="fab fa-facebook"></i> <!-- Optional: Add Facebook icon if you want -->
              </span>
              <span>Facebook Post</span>
              <span class="mx-2">•</span>
              <span>Jan 19, 2024</span>
            </div>
            <h5 class="text-2xl font-semibold text-gray-800 mt-2 mb-2">Behind the Handlebar: Our Latest Ride Review</h5>
            <p class="text-gray-600 text-sm mb-4">
              Ready for your next adventure? Our latest review breaks down the best routes in Malaysia for motorcyclists.
            </p>
          </div>
        </div>
      </div>
      <div class="bg-white border mt-2 border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
        <div class="flex align-items-center p-2">
          <img class="w-1/3 rounded-l-lg" src="{{asset('images/blog-3.jpg')}}" alt="Card Image">
          <div class="p-4 w-2/3">
            <div class="flex items-center text-sm text-blue-500">
              <span class="mr-2">
                <i class="fab fa-facebook"></i> <!-- Optional: Add Facebook icon if you want -->
              </span>
              <span>Facebook Post</span>
              <span class="mx-2">•</span>
              <span>Jan 19, 2024</span>
            </div>
            <h5 class="text-2xl font-semibold text-gray-800 mt-2 mb-2">Behind the Handlebar: Our Latest Ride Review</h5>
            <p class="text-gray-600 text-sm mb-4">
              Ready for your next adventure? Our latest review breaks down the best routes in Malaysia for motorcyclists.
            </p>
          </div>
        </div>
      </div>
      <div class="bg-white border mt-2 border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
        <div class="flex align-items-center p-2">
          <img class="w-1/3 rounded-l-lg" src="{{asset('images/blog-4.jpg')}}" alt="Card Image">
          <div class="p-4 w-2/3">
            <div class="flex items-center text-sm text-blue-500">
              <span class="mr-2">
                <i class="fab fa-facebook"></i> <!-- Optional: Add Facebook icon if you want -->
              </span>
              <span>Facebook Post</span>
              <span class="mx-2">•</span>
              <span>Jan 19, 2024</span>
            </div>
            <h5 class="text-2xl font-semibold text-gray-800 mt-2 mb-2">Behind the Handlebar: Our Latest Ride Review</h5>
            <p class="text-gray-600 text-sm mb-4">
              Ready for your next adventure? Our latest review breaks down the best routes in Malaysia for motorcyclists.
            </p>
          </div>
        </div>
      </div>
     </div>
    </div>
  </section>
</div>
@endsection
