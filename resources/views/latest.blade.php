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

    <div class="max-w-sm mx-auto bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
      <img 
        class="w-full rounded-t-lg" 
        src="https://via.placeholder.com/300x200" 
        alt="Card Image"
      >
      <div class="p-6">
        <h5 class="text-xl font-semibold text-gray-800 mb-2">Card Title</h5>
        <p class="text-gray-600 text-sm mb-4">
          This is a brief description of the card content. It's concise and informative.
        </p>
        <button class="bg-blue-500 text-white px-4 py-2 rounded-lg font-medium hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
          Learn More
        </button>
      </div>
    </div>

    
  </section>
</div>
@endsection
