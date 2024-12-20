@extends('layouts.app')

@section('title', 'Enterprise')

@section('content')
<div>
  <section class="flex flex-col items-center justify-center my-[6rem] text-center">

    <button class="bg-white text-sm  text-gray-800 font-semibold py-[0.3rem] px-4 rounded-full border border-gray-300 shadow-sm hover:shadow-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-300 transition duration-300">
      ENTERPRISE
    </button>
    <h1 class="font-semibold px-[20rem] lg:text-[3rem] text-[1rem] text-center bg-gradient-to-r from-[#4499db]  to-[#004370] bg-clip-text text-transparent">
      The Smart Solution for Your Motorcycle Fleet.
    </h1>
  </section>

  <section class="grid grid-cols-1 mx-[5rem] sm:grid-cols-2 md:grid-cols-2 gap-6 p-6">
    <!-- Card 1 -->
    <div class="bg-white border border-gray-200 rounded-[1.2rem] shadow-sm hover:shadow-lg transition-shadow duration-300">
      <img class="w-full rounded-t-[1.2rem]" src="{{asset('images/e-1.png')}}" alt="Card Image">
      <div class="p-6">
        <h5 class="text-xl font-semibold text-gray-800 mb-2">Centralized Maintenance</h5>
        <p class="text-gray-600 text-sm mb-4">
          Manage all bikes in one platform.
        </p>
      </div>
    </div>
    <div class="bg-white border border-gray-200 rounded-[1.2rem] shadow-sm hover:shadow-lg transition-shadow duration-300">
      <img class="w-full rounded-t-[1.2rem]" src="{{asset('images/e-2.png')}}" alt="Card Image">
      <div class="p-6">
        <h5 class="text-xl font-semibold text-gray-800 mb-2">Scheduled Service Windows</h5>
        <p class="text-gray-600 text-sm mb-4">
          Night and early morning slots for minimal downtime.
        </p>
      </div>
    </div>

  </section>
  <section class="grid grid-cols-1 mx-[5rem] sm:grid-cols-3 mt-4 md:grid-cols-3 gap-6 p-6">
    <!-- Card 1 -->
    <div class="bg-white border border-gray-200 rounded-[1.2rem] shadow-sm hover:shadow-lg transition-shadow duration-300">
      <img class="w-full rounded-t-[1.2rem]" src="{{asset('images/e-3.png')}}" alt="Card Image">
      <div class="p-6">
        <h5 class="text-xl font-semibold text-gray-800 mb-2">Real-Time Data</h5>
        <p class="text-gray-600 text-sm mb-4">
          Track mileage, usage, and service needs with data logger integration.
        </p>
      </div>
    </div>
    <div class="bg-white border border-gray-200 rounded-[1.2rem] shadow-sm hover:shadow-lg transition-shadow duration-300">
      <img class="w-full rounded-t-[1.2rem]" src="{{asset('images/e-4.png')}}" alt="Card Image">
      <div class="p-6">
        <h5 class="text-xl font-semibold text-gray-800 mb-2">Cost-Efficient Packagese</h5>
        <p class="text-gray-600 text-sm mb-4">
          Customized options for small to large fleets.
        </p>
      </div>
    </div>
    <div class="bg-white border border-gray-200 rounded-[1.2rem] shadow-sm hover:shadow-lg transition-shadow duration-300">
      <img class="w-full rounded-t-[1.2rem]" src="{{asset('images/e-5.png')}}" alt="Card Image">
      <div class="p-6">
        <h5 class="text-xl font-semibold text-gray-800 mb-2">Depot-Based Scheduling:</h5>
        <p class="text-gray-600 text-sm mb-4">
          On-site services at your depot, minimizing disruptions.
        </p>
      </div>
    </div>

  </section>
  <section class="grid grid-cols-1 mx-[5rem] sm:grid-cols-2 md:grid-cols-2 gap-6 p-6">
    <!-- Card 1 -->
    <div class="bg-white border border-gray-200 rounded-[1.2rem] shadow-sm hover:shadow-lg transition-shadow duration-300">
      <img class="w-full rounded-t-[1.2rem]" src="{{asset('images/e-6.png')}}" alt="Card Image">
      <div class="p-6">
        <h5 class="text-xl font-semibold text-gray-800 mb-2">Centralized Records</h5>
        <p class="text-gray-600 text-sm mb-4">
          Access all records in one location for streamlined management.
        </p>
      </div>
    </div>
    <div class="bg-white border border-gray-200 rounded-[1.2rem] shadow-sm hover:shadow-lg transition-shadow duration-300">
      <img class="w-full rounded-t-[1.2rem]" src="{{asset('images/e-7.png')}}" alt="Card Image">
      <div class="p-6">
        <h5 class="text-xl font-semibold text-gray-800 mb-2">Predictive Maintenance</h5>
        <p class="text-gray-600 text-sm mb-4">
          AI-driven insights to prevent breakdowns.
        </p>
      </div>
    </div>

  </section>
  <section class="px-[6rem]">
    <div class="flex justify-between p-[5rem] align-middle">
      <div class="">
        <h1 class="text-[44px] font-semibold">Meet Your AI Co-Pilot</h1>
        <p class="text-[20px]">Your bike’s smartest partner—an interactive assistant
          that’s always on your side</p>
        <button class="bg-[#004370] text-white px-6 py-3 rounded-lg shadow-md mt-6 hover:bg-blue-700">
          Learn More
        </button>
      </div>
      <div class="relative">
        <img src="{{asset('images/status-1.png')}}" alt="">
        <img src="{{asset('images/status-2.png')}}" class="absolute top-[10rem] left-[-5rem]" alt="">
        <img src="{{asset('images/status-3.png')}}" class="absolute bottom-[0] left-[-10rem]" alt="">
        <img src="{{asset('images/status-4.png')}}" class="absolute top-[14rem] right-[-5rem]" alt="">
        <img src="{{asset('images/status-5.png')}}" class="absolute bottom-[-5rem] right-[-3rem]" alt="">
      </div>
    </div>

  </section>

  <section class="px-[6rem]">
    <h1 class="text-[44px] font-semibold text-center">Client Success Stories</h1>
    <div class="flex gap-3 justify-center mt-5">
      <img src="{{asset('images/testi-1.png')}}" alt="">
      <img src="{{asset('images/testi-2.png')}}" alt="">
      <img src="{{asset('images/testi-3.png')}}" alt="">
    </div>
  </section>
  <section class="px-[6rem]">
    <h1 class="text-[44px] font-semibold text-center">Enterprise Packages</h1>
    <div class="flex gap-5 items-center justify-center mt-5">
      <div class=" mx-auto bg-[#FAFAFA] rounded-xl border p-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Silver Package</h3>
        <div class="text-md text-[#818898] mb-4">
          Monthly base fee:
        </div>
        <h1 class="text-[32px] font-semibold">RM 1,200</h1>
        <ul class="space-y-3 text-gray-700">
          <li class="flex gap-2 items-start">
            <img src="{{asset('images/check.svg')}}" alt="">
            <span><b>Fleet size</b>: Up to 10 motorcycles</span>
          </li>
          <li class="flex gap-2 items-start">
            <img src="{{asset('images/check.svg')}}" alt="">
            <span><b>Data Logger Device (Optional):</b> RM500 - RM800 per bike (one-time fee)</span>
          </li>
          <li class="flex gap-2 items-start">
            <img src="{{asset('images/check.svg')}}" alt="">
            <span><b>Emergency Callouts: </b>Up to 5 per month (additional at RM100 each)</span>
          </li>
          <li class="flex gap-2 items-start">
            <img src="{{asset('images/check.svg')}}" alt="">
            <span><b>Towing Services:</b> 2 per month (additional at RM150 each)</span>
          </li>
        </ul>

        <!-- Button -->
        <button class="mt-6 w-full py-2 bg-[#004370] text-white font-semibold rounded-lg hover:bg-blue-700">
          Get Started
        </button>
      </div>
      <div class=" mx-auto py-12 bg-gradient-to-r from-[#3ABFF7]  to-[#005289] rounded-xl shadow-2xl border p-6">
        <h3 class="text-xl font-semibold text-white mb-4">Gold Package</h3>
        <div class="text-md text-white mb-4">
          Monthly base fee:
        </div>
        <h1 class="text-[32px] font-semibold text-white">RM 1,200</h1>
        <ul class="space-y-3 text-white">
          <li class="flex gap-2 items-start">
            <img src="{{asset('images/check-w.svg')}}" alt="">
            <span><b>Fleet size</b>: Up to 10 motorcycles</span>
          </li>
          <li class="flex gap-2 items-start">
            <img src="{{asset('images/check-w.svg')}}" alt="">
            <span><b>Data Logger Device (Optional):</b> RM500 - RM800 per bike (one-time fee)</span>
          </li>
          <li class="flex gap-2 items-start">
            <img src="{{asset('images/check-w.svg')}}" alt="">
            <span><b>Emergency Callouts: </b>Up to 5 per month (additional at RM100 each)</span>
          </li>
          <li class="flex gap-2 items-start">
            <img src="{{asset('images/check-w.svg')}}" alt="">
            <span><b>Towing Services:</b> 2 per month (additional at RM150 each)</span>
          </li>
        </ul>

        <!-- Button -->
        <button class="mt-6 w-full py-2 bg-white text-[#004370] font-semibold rounded-lg hover:bg-blue-700">
          Get Started
        </button>
      </div>
      <div class=" mx-auto bg-[#FAFAFA] rounded-xl border p-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Silver Package</h3>
        <div class="text-md text-[#818898] mb-4">
          Monthly base fee:
        </div>
        <h1 class="text-[32px] font-semibold">RM 1,200</h1>
        <ul class="space-y-3 text-gray-700">
          <li class="flex gap-2 items-start">
            <img src="{{asset('images/check.svg')}}" alt="">
            <span><b>Fleet size</b>: Up to 10 motorcycles</span>
          </li>
          <li class="flex gap-2 items-start">
            <img src="{{asset('images/check.svg')}}" alt="">
            <span><b>Data Logger Device (Optional):</b> RM500 - RM800 per bike (one-time fee)</span>
          </li>
          <li class="flex gap-2 items-start">
            <img src="{{asset('images/check.svg')}}" alt="">
            <span><b>Emergency Callouts: </b>Up to 5 per month (additional at RM100 each)</span>
          </li>
          <li class="flex gap-2 items-start">
            <img src="{{asset('images/check.svg')}}" alt="">
            <span><b>Towing Services:</b> 2 per month (additional at RM150 each)</span>
          </li>
        </ul>

        <!-- Button -->
        <button class="mt-6 w-full py-2 bg-[#004370] text-white font-semibold rounded-lg hover:bg-blue-700">
          Get Started
        </button>
      </div>
    </div>
  </section>
  <section>
    <div class="container text-center bg-[#0D9BDE]">
      <img src="{{asset('images/logoh.png')}}" alt="">
      <h1 class="text-[32px] font-semibold">Get Started with SantaiMoto Enterprise Co-Pilot.</h1>
      <p class="text-[24px]">Contact us to select the best package for your fleet and discover how SantaiMoto’s data-driven approach can enhance your maintenance management.</p>

        <button class="mt-6 px-3   py-2 bg-[#004370] text-white font-semibold rounded-lg hover:bg-blue-700">
          Get Started
        </button>
    </div>
  </section>
</div>
@endsection
