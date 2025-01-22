@extends('layouts.app')

@section('title', 'Enterprise')

@section('content')
<div>
  <section class="flex flex-col items-center justify-center md:my-[6rem] my-[3rem] text-center">

    <button data-aos="zoom-in" class="bg-white text-sm shadow-lg  mb-5 text-gray-800 font-semibold py-[0.3rem] px-4 rounded-full border border-gray-300 hover:shadow-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-300 transition duration-300">
      ENTERPRISE
    </button>
    <h1 data-aos="fade-up" data-aos-delay="600" class="font-semibold md:px-[20rem] px-[1rem] lg:text-[3rem] text-[1rem] text-center bg-gradient-to-r from-[#4499db]  to-[#004370] bg-clip-text text-transparent">
      The Smart Solution for Your Motorcycle Fleet.
    </h1>
  </section>

  <section class="grid grid-cols-1 md:mx-[5rem] mx-[1rem] sm:grid-cols-2 md:grid-cols-2 gap-6 p-6">
    <!-- Card 1 -->
    <div data-aos="zoom-in" data-aos-delay="1000" class="bg-white border border-gray-200 rounded-[1.2rem] shadow-sm hover:shadow-lg transition-shadow duration-300">
      <img class="w-full rounded-t-[1.2rem]" src="{{asset('images/e-1.png')}}" alt="Card Image">
      <div class="p-6">
        <h5 class="text-xl font-semibold text-gray-800 mb-2">Centralized Maintenance</h5>
        <p class="text-gray-600 text-sm mb-4">
          Manage all bikes in one platform.
        </p>
      </div>
    </div>
    <div data-aos="zoom-in" data-aos-delay="1500" class="bg-white border border-gray-200 rounded-[1.2rem] shadow-sm hover:shadow-lg transition-shadow duration-300">
      <img class="w-full rounded-t-[1.2rem]" src="{{asset('images/e-2.png')}}" alt="Card Image">
      <div class="p-6">
        <h5 class="text-xl font-semibold text-gray-800 mb-2">Scheduled Service Windows</h5>
        <p class="text-gray-600 text-sm mb-4">
          Night and early morning slots for minimal downtime.
        </p>
      </div>
    </div>

  </section>
  <section class="grid grid-cols-1 md:mx-[5rem] mx-[1rem] sm:grid-cols-3 mt-4 md:grid-cols-3 gap-6 p-6">
    <!-- Card 1 -->
    <div data-aos="zoom-in" data-aos-delay="500" class="bg-white border border-gray-200 rounded-[1.2rem] shadow-sm hover:shadow-lg transition-shadow duration-300">
      <img class="w-full rounded-t-[1.2rem]" src="{{asset('images/e-3.png')}}" alt="Card Image">
      <div class="p-6">
        <h5 class="text-xl font-semibold text-gray-800 mb-2">Real-Time Data</h5>
        <p class="text-gray-600 text-sm mb-4">
          Track mileage, usage, and service needs with data logger integration.
        </p>
      </div>
    </div>
    <div data-aos="zoom-in" data-aos-delay="1000" class="bg-white border border-gray-200 rounded-[1.2rem] shadow-sm hover:shadow-lg transition-shadow duration-300">
      <img class="w-full rounded-t-[1.2rem]" src="{{asset('images/e-4.png')}}" alt="Card Image">
      <div class="p-6">
        <h5 class="text-xl font-semibold text-gray-800 mb-2">Cost-Efficient Packagese</h5>
        <p class="text-gray-600 text-sm mb-4">
          Customized options for small to large fleets.
        </p>
      </div>
    </div>
    <div data-aos="zoom-in" data-aos-delay="1500" class="bg-white border border-gray-200 rounded-[1.2rem] shadow-sm hover:shadow-lg transition-shadow duration-300">
      <img class="w-full rounded-t-[1.2rem]" src="{{asset('images/e-5.png')}}" alt="Card Image">
      <div class="p-6">
        <h5 class="text-xl font-semibold text-gray-800 mb-2">Depot-Based Scheduling:</h5>
        <p class="text-gray-600 text-sm mb-4">
          On-site services at your depot, minimizing disruptions.
        </p>
      </div>
    </div>

  </section>
  <section class="grid grid-cols-1 md:mx-[5rem] mx-[1rem] sm:grid-cols-2 md:grid-cols-2 gap-6 p-6">
    <!-- Card 1 -->
    <div data-aos="zoom-in" data-aos-delay="2000" class="bg-white border border-gray-200 rounded-[1.2rem] shadow-sm hover:shadow-lg transition-shadow duration-300">
      <img class="w-full rounded-t-[1.2rem]" src="{{asset('images/e-6.png')}}" alt="Card Image">
      <div class="p-6">
        <h5 class="text-xl font-semibold text-gray-800 mb-2">Centralized Records</h5>
        <p class="text-gray-600 text-sm mb-4">
          Access all records in one location for streamlined management.
        </p>
      </div>
    </div>
    <div data-aos="zoom-in" data-aos-delay="2500" class="bg-white border border-gray-200 rounded-[1.2rem] shadow-sm hover:shadow-lg transition-shadow duration-300">
      <img class="w-full rounded-t-[1.2rem]" src="{{asset('images/e-7.png')}}" alt="Card Image">
      <div class="p-6">
        <h5 class="text-xl font-semibold text-gray-800 mb-2">Predictive Maintenance</h5>
        <p class="text-gray-600 text-sm mb-4">
          AI-driven insights to prevent breakdowns.
        </p>
      </div>
    </div>

  </section>
  <section class="md:px-[6rem] px-[1rem]">
    <div class="flex md:flex-row flex-col justify-between md:p-[5rem] p-[1rem] align-middle">
      <div class="">
        <h1 data-aos="fade-up" data-aos-delay="3000" class="text-[44px] font-semibold">Meet Your AI Co-Pilot</h1>
        <p data-aos="fade-up" data-aos-delay="3500" class="text-[20px] max-w-md my-5">Your bike’s smartest partner—an interactive assistant
          that’s always on your side</p>
        <button data-aos="zoom-in" data-aos-delay="4000" class="bg-[#004370] text-white px-6 py-3 rounded-lg shadow-md mt-6 hover:bg-blue-700">
          Learn More
        </button>
      </div>
      <div class="relative">
        <img src="{{asset('images/status-1.png')}}" alt="">
        <img src="{{asset('images/status-2.png')}}" class="absolute top-[10rem] left-[-5rem] md:w-[40%]" alt="">
        <img src="{{asset('images/status-3.png')}}" class="absolute md:bottom-0 bottom-[-3rem] left-[-10rem] md:w-[40%]" alt="">
        <img src="{{asset('images/status-4.png')}}" class="absolute md:top-[14rem] top-[5rem] right-[-2rem] md:right-[-5rem] md:w-[40%]" alt="">
        <img src="{{asset('images/status-5.png')}}" class="absolute bottom-[-5rem] right-[-3rem]" alt="">
      </div>
    </div>

  </section>

  <section class="md:px-[6rem] px-[2rem]">
    <h1 class="text-[44px] font-semibold text-center">Client Success Stories</h1>
    <div class="flex md:flex-row flex-col gap-6 justify-center mt-5">
      <div class="relative group" style="min-width: 450px; min-height: 400px;">
        <!-- Tambahkan overlay -->
        <div class="absolute inset-0 bg-black opacity-50 group-hover:opacity-70 transition duration-300 ease-in-out"></div>
        
        <img src="{{asset('images/mbsa.jpeg')}}" alt="" class="transition duration-300 ease-in-out group-hover:scale-105 group-hover:opacity-80 w-full h-full object-cover">
        <img src="{{asset('images/kutip.svg')}}" class="absolute bottom-[16rem] left-0" alt="">
      
        <div class="absolute bottom-[2rem] left-[1rem]">
          <h1 class="mt-3 font-bold text-white text-[20px]">MBSA (Majlis Bandaraya Shah Alam)</h1>
          <p class="text-white font-semibold pr-5">SantaiMoto has simplified our fleet management by maintaining our enforcement motorcycles during off-duty hours. This keeps our bikes in excellent condition, reduces downtime, and streamlines overall operations.</p>
          <h1 class="mt-3 font-semibold text-white text-[20px]">– Ts. Abdul Manaf, Deputy Director.</h1>
          <p class="text-white text-[20px]">Location: Shah Alam, Selangor</p>
        </div>
      </div>
      
    
      <div class="relative group" style="min-width: 400px; min-height: 400px;">
        <div class="absolute inset-0 bg-black opacity-50 group-hover:opacity-70 transition duration-300 ease-in-out"></div>
        <img src="{{asset('images/ebidmoto.jpeg')}}" class="transition duration-300 ease-in-out group-hover:scale-105 group-hover:opacity-80 w-full h-full object-cover" alt="">
        <img src="{{asset('images/kutip.svg')}}" class="absolute bottom-[16rem] left-0" alt="">
        <div class="absolute bottom-[2rem] left-[1rem]">
          <h1 class="mt-3 font-bold text-white text-[20px]">EBIDMOTO.COM</h1>
          <p class="text-white font-semibold pr-5">With customers across Malaysia, providing consistent after-sales service is challenging. SantaiMoto bridges this gap by offering reliable maintenance in remote areas, ensuring all customers receive excellent service everywhere.</p>
          <h1 class="mt-3 font-semibold text-white text-[20]">– Ricky Chea, General Manager.</h1>
          <p class="text-white text-[20]">Location: Ampang, Selangor</p>
        </div>
      </div>
    
      <div class="relative group" style="min-width: 400px; min-height: 400px;">
        <div class="absolute inset-0 bg-black opacity-50 group-hover:opacity-70 transition duration-300 ease-in-out"></div>
        <img src="{{asset('images/superbike.jpeg')}}" class="transition duration-300 ease-in-out group-hover:scale-105 group-hover:opacity-80 w-full h-full object-cover" alt="">
        <img src="{{asset('images/kutip.svg')}}" class="absolute bottom-[16rem] left-0" alt="">
        <div class="absolute bottom-[2rem] left-[1rem]">
          <h1 class="mt-3 font-bold text-white text-[20px]">Superbike & Kapchai Wash</h1>
          <p class="text-white font-semibold pr-5">Our customers expect spotless bikes, but water issues can sometimes cause malfunctions after a wash. SantaiMoto has been a lifesaver, quickly resolving these problems and ensuring customers leave with clean, fully functional bikes.</p>
          <h1 class="mt-3 font-semibold text-white text-[20]">– Yussof Sahib, Owner.</h1>
          <p class="text-white text-[20]">Location: Gombak, Kuala Lumpur Manager</p>
        </div>
      </div>
    </div>
    

  </section>
  <section id="enterprise-pricing" class="md:px-[6rem] px-[1rem] pt-[5rem]">
    <h1 class="text-[44px] font-semibold text-center">Enterprise Packages</h1>
    <div class="flex md:flex-row flex-col gap-5 items-center justify-center mt-5">
      <div class="mx-auto bg-[#FAFAFA] rounded-xl border p-6 transform transition duration-300 hover:scale-105 ">
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
          <li class="flex gap-2 items-start">
            <img src="{{asset('images/check.svg')}}" alt="">
            <span><b>Mechanic Fees:</b> 30% discount on services</span>
          </li>
        </ul>

        <!-- Button -->
        <button class="mt-6 w-full py-2 bg-[#004370] text-white font-semibold rounded-lg hover:bg-blue-700">
          Get Started
        </button>
      </div>
      <div class=" mx-auto py-12 bg-gradient-to-r from-[#3ABFF7]  to-[#005289] rounded-xl shadow-2xl transform transition duration-300 hover:scale-105  border p-6">
        <h3 class="text-xl font-semibold text-white mb-4">Gold Package</h3>
        <div class="text-md text-white mb-4">
          Monthly base fee:
        </div>
        <h1 class="text-[32px] font-semibold text-white">RM 2,000</h1>
        <ul class="space-y-3 text-white">
          <li class="flex gap-2 items-start">
            <img src="{{asset('images/check-w.svg')}}" alt="">
            <span><b>Fleet size</b>: Up to 50 motorcycles</span>
          </li>
          <li class="flex gap-2 items-start">
            <img src="{{asset('images/check-w.svg')}}" alt="">
            <span><b>Data Logger Device (Optional):</b> RM500 - RM800 per bike (one-time fee)</span>
          </li>
          <li class="flex gap-2 items-start">
            <img src="{{asset('images/check-w.svg')}}" alt="">
            <span><b>Emergency Callouts: </b>Up to 20 per month (additional at RM100 each)</span>
          </li>
          <li class="flex gap-2 items-start">
            <img src="{{asset('images/check-w.svg')}}" alt="">
            <span><b>Towing Services:</b> 10 per month (additional at RM150 each)</span>
          </li>
          <li class="flex gap-2 items-start">
            <img src="{{asset('images/check-w.svg')}}" alt="">
            <span><b>Mechanic Fees:</b> 50% discount on services</span>
          </li>
        </ul>

        <!-- Button -->
        <button class="mt-6 w-full py-2 bg-white text-[#004370] font-semibold rounded-lg hover:bg-blue-700">
          Get Started
        </button>
      </div>
      <div class=" mx-auto bg-[#FAFAFA] rounded-xl border p-6 transform transition duration-300 hover:scale-105 hover:shadow-lg">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Silver Package</h3>
        {{-- <div class="text-md text-[#818898] mb-4">
          Monthly base fee:
        </div> --}}
        <h2 class="text-[18px] font-semibold">For custom solutions, contact SantaiMoto for a tailored quote.</h2>
        {{-- <ul class="space-y-3 text-gray-700">
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
        </ul> --}}

        <!-- Button -->
        <button class="mt-6 w-full py-2 bg-[#004370] text-white font-semibold rounded-lg hover:bg-blue-700">
          Get Started
        </button>
      </div>
    </div>
  </section>


  <section class="py-12 bg-blue-50 md:mt-[5rem] mt-[2rem] mb-12 md:mx-[6rem] mx-[1rem] border rounded-2xl">
    <div class="container mx-auto text-center">
      <div class=" inline-block p-4">
        <img src="{{ asset('images/logoh.png') }}" alt="Logo Placeholder">
      </div>
      <h2 class="text-lg md:text-[32px] font-semibold mt-[-2rem]  bg-gradient-to-r from-[#4499db]  to-[#004370] bg-clip-text text-transparent">Get Started with SantaiMoto Enterprise Co-Pilot.</h2>
      <h2 class="text-lg md:text-[24px] px-12 font-normal mt-8 bg-gradient-to-r from-[#4499db]  to-[#004370] bg-clip-text text-transparent">Contact us to select the best package for your fleet and discover how SantaiMoto’s data-driven approach can enhance your maintenance management.</h2>
      <button class="bg-[#004370] text-white px-8 py-3 mt-5 rounded-lg hover:bg-blue-700">
        Get Started
      </button>
    </div>
  </section>
</div>
@endsection
