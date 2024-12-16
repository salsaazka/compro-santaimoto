@extends('layouts.app')

@section('title', 'Enterprise')

@section('content')
<div>
  <section class="flex flex-col items-center justify-center my-[6rem] text-center">
    <button class="bg-white text-gray-800 text-center font-semibold py-2 px-4 rounded-full border border-gray-300 shadow-md hover:shadow-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-300 transition duration-300 mb-4">
      ENTERPRISE
    </button>
    <h1 class="text-[3rem] font-bold">
      The Smart Solution for Your Motorcycle Fleet.
    </h1>
  </section>

  <section class="grid grid-cols-1 mx-[5rem] sm:grid-cols-2 md:grid-cols-2 gap-6 p-6">
    <!-- Card 1 -->
    <div class="bg-white border border-gray-200 rounded-[1.2rem] shadow-md hover:shadow-lg transition-shadow duration-300">
      <img 
        class="w-full rounded-t-[1.2rem]" 
        src="{{asset('images/e-1.png')}}" 
        alt="Card Image"
      >
      <div class="p-6">
        <h5 class="text-xl font-semibold text-gray-800 mb-2">Card Title</h5>
        <p class="text-gray-600 text-sm mb-4">
          This is a brief description of the card content. It's concise and informative.
        </p>
      </div>
    </div>
    <div class="bg-white border border-gray-200 rounded-[1.2rem] shadow-md hover:shadow-lg transition-shadow duration-300">
      <img 
        class="w-full rounded-t-[1.2rem]" 
        src="{{asset('images/e-1.png')}}" 
        alt="Card Image"
      >
      <div class="p-6">
        <h5 class="text-xl font-semibold text-gray-800 mb-2">Card Title</h5>
        <p class="text-gray-600 text-sm mb-4">
          This is a brief description of the card content. It's concise and informative.
        </p>
      </div>
    </div>
 
  </section>
  <section class="grid grid-cols-1 mx-[5rem] sm:grid-cols-3 mt-4 md:grid-cols-3 gap-6 p-6">
    <!-- Card 1 -->
    <div class="bg-white border border-gray-200 rounded-[1.2rem] shadow-md hover:shadow-lg transition-shadow duration-300">
      <img 
        class="w-full rounded-t-[1.2rem]" 
        src="{{asset('images/e-1.png')}}" 
        alt="Card Image"
      >
      <div class="p-6">
        <h5 class="text-xl font-semibold text-gray-800 mb-2">Card Title</h5>
        <p class="text-gray-600 text-sm mb-4">
          This is a brief description of the card content. It's concise and informative.
        </p>
      </div>
    </div>
    <div class="bg-white border border-gray-200 rounded-[1.2rem] shadow-md hover:shadow-lg transition-shadow duration-300">
      <img 
        class="w-full rounded-t-[1.2rem]" 
        src="{{asset('images/e-1.png')}}" 
        alt="Card Image"
      >
      <div class="p-6">
        <h5 class="text-xl font-semibold text-gray-800 mb-2">Card Title</h5>
        <p class="text-gray-600 text-sm mb-4">
          This is a brief description of the card content. It's concise and informative.
        </p>
      </div>
    </div>
    <div class="bg-white border border-gray-200 rounded-[1.2rem] shadow-md hover:shadow-lg transition-shadow duration-300">
      <img 
        class="w-full rounded-t-[1.2rem]" 
        src="{{asset('images/e-1.png')}}" 
        alt="Card Image"
      >
      <div class="p-6">
        <h5 class="text-xl font-semibold text-gray-800 mb-2">Card Title</h5>
        <p class="text-gray-600 text-sm mb-4">
          This is a brief description of the card content. It's concise and informative.
        </p>
      </div>
    </div>
 
  </section>
  <section class="grid grid-cols-1 mx-[5rem] sm:grid-cols-2 md:grid-cols-2 gap-6 p-6">
    <!-- Card 1 -->
    <div class="bg-white border border-gray-200 rounded-[1.2rem] shadow-md hover:shadow-lg transition-shadow duration-300">
      <img 
        class="w-full rounded-t-[1.2rem]" 
        src="{{asset('images/e-1.png')}}" 
        alt="Card Image"
      >
      <div class="p-6">
        <h5 class="text-xl font-semibold text-gray-800 mb-2">Card Title</h5>
        <p class="text-gray-600 text-sm mb-4">
          This is a brief description of the card content. It's concise and informative.
        </p>
      </div>
    </div>
    <div class="bg-white border border-gray-200 rounded-[1.2rem] shadow-md hover:shadow-lg transition-shadow duration-300">
      <img 
        class="w-full rounded-t-[1.2rem]" 
        src="{{asset('images/e-1.png')}}" 
        alt="Card Image"
      >
      <div class="p-6">
        <h5 class="text-xl font-semibold text-gray-800 mb-2">Card Title</h5>
        <p class="text-gray-600 text-sm mb-4">
          This is a brief description of the card content. It's concise and informative.
        </p>
      </div>
    </div>
 
  </section>
</div>
@endsection