@extends('layouts.app')

@section('title', 'About Us')

@section('content')

    <!-- Hero Section -->
    <section class="container mx-12 px-6 md:px-12 py-12 md:py-24">
        <button class="bg-white text-sm  text-gray-800 font-semibold py-[0.3rem] px-4 rounded-full border border-gray-300 shadow-md hover:shadow-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-300 transition duration-300">
            OUR STORY
          </button>
        <img src="{{ asset('images/box-2.png') }}" alt="Box 1" data-aos="fade-down-left" data-aos-delay="500" class="absolute top-0 right-0 transform translate-x-[-50%] mt-10 z-0">
        <div class="flex gap-[5rem]  flex-col md:flex-row items-start mt-12 justify-between pr-12">
            <div class="md:w-1/2">
                <h1 class="text-3xl md:text-4xl font-bold  text-gray-900 mb-6" data-aos="fade-right" data-aos-delay="500">
                    SantaiMoto started with a simple idea: to make caring for your motorcycle easy and stress-free.
                </h1>
            </div>
            <div class="md:w-1/2 mt-6 md:mt-0 text-gray-600 leading-relaxed">
                <p class="text-[18px]" data-aos="fade-left" data-aos-delay="500">
                    Fadzle Ismail, a skilled mechanic, saw how much time riders lost going to workshops for repairs. So, he and his friend Irwan decided to bring the repairs to the riders instead.
                </p>
                <p class="mt-4 text-[18px]" data-aos="fade-left" data-aos-delay="1000">
                    They began by doing on-demand repairs, saving people time and effort. But as they grew, they saw more riders looking for faster, more reliable options. They teamed up with Eris, a tech expert, to build SantaiMoto, an app that brings all things motorcycle into one place.
                </p>
                <p class="mt-4 text-[18px]" data-aos="fade-left" data-aos-delay="1500">
                    Now, with over 5,000 users, SantaiMoto offers real-time tracking, smart reminders, and easy access to trusted mechanics, making it simple to keep every bike in top shape—one service at a time.”
                </p>
            </div>
            <img src="{{ asset('images/box-2.png') }}" alt="Box 1" data-aos="fade-up-right" data-aos-delay="500" class="absolute bottom-0 left-3 transform translate-x-[-50%] z-0">
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="container px-[6rem] py-12 grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Our Mission -->
        <div class=" p-6 bg-white rounded-2xl border shadow-lg" data-aos="fade-down">
            <h3 class="text-[20px] font-bold mb-4" data-aos="fade-down">Our Mission</h3>
            <img src="{{ asset('images/element-mission.png') }}" 
                 alt="Mission Icon" 
                 class="w-[8rem] ml-[-4rem]">
            <p class="text-gray-600 text-base sm:text-lg md:text-[22px]">
                To empower motorcycle owners with an easy, reliable, and complete solution for maintaining their bikes.
            </p>
            <!-- Icon Mission -->
        </div>
    
        <!-- Our Vision -->
        <div class="relative p-6 bg-white rounded-2xl border shadow-lg" data-aos="fade-down">
            <h3 class="text-lg font-bold mb-4">Our Vision</h3>
            <p class="text-gray-600 mt-[8rem] text-base sm:text-lg md:text-[22px]">
                To be the go-to app for everything motorcycles—a place where riders can find trusted service, parts reviews, specs, and even their next bike.
            </p>
            <!-- Icon Vision -->
            <img src="{{ asset('images/element-vission.png') }}" 
                 alt="Vision Icon" 
                 class="absolute bottom-[-6rem] -right-6 w-[8rem]">
        </div>
    </section>
    
    
    <!-- Core Values -->
    <section class="container mx-auto px-4 sm:px-6 md:px-12 py-6 sm:py-12">
        <!-- Judul Core Values -->
        <h1 class="text-4xl sm:text-3xl md:text-5xl font-bold text-gray-900 text-start mb-8" data-aos="fade-up">
            Core Values
        </h1>
    
        <!-- Grid Core Values -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-start">
            <!-- Innovation -->
            <div data-aos="fade-right">
                <div class="justify-start flex items-start">
                    <img src="{{ asset('images/innovation.png') }}" alt="Innovation Icon">
                </div>
                <p class="font-bold text-[24px] md:text-[20px]">Innovation</p>
                <p class="text-gray-600 mt-2 text-[16px]">
                    We push boundaries to make motorcycle care smarter and simpler.
                </p>
            </div>
    
            <!-- Transparency -->
            <div data-aos="fade-right">
                <div class="justify-start flex items-start">
                    <img src="{{ asset('images/transparency.png') }}" alt="Transparency Icon">
                </div>
                <p class="font-bold text-2xl md:text-xl">Transparency</p>
                <p class="text-gray-600 mt-2 text-base">
                    Honest pricing, genuine parts, and clear communication.
                </p>
            </div>
    
            <!-- Quality -->
            <div data-aos="fade-right">
                <div class="justify-start flex items-start">
                    <img src="{{ asset('images/quality.png') }}" alt="Quality Icon">
                </div>
                <p class="font-bold text-2xl md:text-xl">Quality</p>
                <p class="text-gray-600 mt-2 text-base">
                    Certified mechanics and trusted parts for every job.
                </p>
            </div>
    
            <!-- Community -->
            <div data-aos="fade-right">
                <div class="justify-start flex items-start">
                    <img src="{{ asset('images/community.png') }}" alt="Community Icon">
                </div>
                <p class="font-bold text-2xl md:text-xl">Community</p>
                <p class="text-gray-600 mt-2 text-base">
                    Building a network that connects riders and mechanics.
                </p>
            </div>
    
            <!-- Simplicity -->
            <div data-aos="fade-right">
                <div class="justify-start flex items-start">
                    <img src="{{ asset('images/simplicity.png') }}" alt="Simplicity Icon">
                </div>
                <p class="font-bold text-2xl md:text-xl">Simplicity</p>
                <p class="text-gray-600 mt-2 text-base">
                    Making maintenance easy and stress-free for every rider.
                </p>
            </div>
        </div>
    </section>

   <!-- Meet Our Team Section -->
    <section class="container px-[6rem] py-12">
        <h1 class="text-4xl sm:text-3xl md:text-5xl font-bold text-gray-900 text-center mb-8" data-aos="fade-up">Meet Our Team</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Team Member 1 -->
            <div class="relative text-start  overflow-hidden" data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000">
                <!-- Gambar sampai atas -->
                <div class="w-full ">
                    <img src="{{ asset('images/Frame 103.png') }}" 
                         alt="Team Member" 
                         class="w-full h-full object-cover">
                </div>
                <!-- Konten -->
                <div class="p-4">
                    <div class="flex justify-between items-center mb-2">
                        <div>
                            <h3 class="font-bold text-[28px] text-gray-800">Fadzle Ismail</h3>
                            <p class="text-blue-600 text-[20px] font-semibold">Founder & CEO</p>
                        </div>
                        <!-- Icons -->
                        <div class="flex space-x-2">
                            <a href="mailto:someone@example.com" target="_blank" aria-label="Email">
                                <img src="{{ asset('images/w-email.png') }}" alt="Email Icon" class="h-12 w-12">
                            </a>
                            <a href="" target="_blank" aria-label="LinkedIn">
                                <img src="{{ asset('images/w-linkedin.png') }}" alt="LinkedIn Icon" class="h-12 w-12">
                            </a>
                        </div>
                    </div>
                    <!-- Deskripsi -->
                    <p class="text-[#818898] text-[16px] leading-relaxed">
                        A former motorcycle mechanic with a lifelong love for bikes, Fazli started working on motorcycles as a teenager. After years in the industry, he saw the need for a more convenient, tech-driven approach to maintenance. Combining his passion with his experience, Fadzle leads SantaiMoto with a vision to change motorcycle care for everyone.                    </p>
                </div>
            </div>
            
            <!-- Team Member 2 -->
            <div class="relative text-start overflow-hidden" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                <!-- Gambar sampai atas -->
                <div class="w-full">
                    <img src="{{ asset('images/Frame 103.png') }}" 
                         alt="Team Member" 
                         class="w-full h-full object-cover">
                </div>
                <!-- Konten -->
                <div class="p-4">
                    <div class="flex justify-between items-center mb-2">
                        <div>
                            <h3 class="font-bold text-[28px] text-gray-800">Fadzle Ismail</h3>
                            <p class="text-blue-600 text-[20px] font-semibold">Founder & CEO</p>
                        </div>
                        <!-- Icons -->
                        <div class="flex space-x-2">
                            <a href="mailto:someone@example.com" target="_blank" aria-label="Email">
                                <img src="{{ asset('images/w-email.png') }}" alt="Email Icon" class="h-12 w-12">
                            </a>
                            <a href="" target="_blank" aria-label="LinkedIn">
                                <img src="{{ asset('images/w-linkedin.png') }}" alt="LinkedIn Icon" class="h-12 w-12">
                            </a>
                        </div>
                    </div>
                    <!-- Deskripsi -->
                    <p class="text-[#818898] text-[16px] leading-relaxed">
                        Eris brings deep expertise in predictive maintenance from his work with leading automotive companies like Denso. His passion for tech and innovation has made him the perfect partner to drive SantaiMoto’s technology, ensuring that the app is reliable, intelligent, and easy to use.                    </p>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="relative text-start overflow-hidden" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1000">
                <!-- Gambar sampai atas -->
                <div class="w-full">
                    <img src="{{ asset('images/Frame 103.png') }}" 
                         alt="Team Member" 
                         class="w-full h-full object-cover">
                </div>
                <!-- Konten -->
                <div class="p-4">
                    <div class="flex justify-between items-center mb-2">
                        <div>
                            <h3 class="font-bold text-[28px] text-gray-800">Fadzle Ismail</h3>
                            <p class="text-blue-600 text-[20px] font-semibold">Founder & CEO</p>
                        </div>
                        <!-- Icons -->
                        <div class="flex space-x-2">
                            <a href="mailto:someone@example.com" target="_blank" aria-label="Email">
                                <img src="{{ asset('images/w-email.png') }}" alt="Email Icon" class="h-12 w-12">
                            </a>
                            <a href="" target="_blank" aria-label="LinkedIn">
                                <img src="{{ asset('images/w-linkedin.png') }}" alt="LinkedIn Icon" class="h-12 w-12">
                            </a>
                        </div>
                    </div>
                    <!-- Deskripsi -->
                    <p class="text-[#818898] text-[16px] leading-relaxed">
                        Irwan’s journey started as a motorcycle enthusiast, helping friends with repairs before joining Fazli to create SantaiMoto. With a keen understanding of operations, Irwan ensures that every service runs smoothly, coordinating the logistics of getting certified mechanics to customers wherever they are.                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Looking Forward Section -->
    <section class="container px-6 sm:px-8 md:px-[6rem] py-12">
        <!-- Heading -->
        <div class="mb-6 relative">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900" data-aos="fade-right" data-aos-delay="500">
                Looking Forward
            </h1>
            <div class="w-16 sm:w-[7rem] h-0.5 bg-gray-400 mt-4 sm:mt-12" data-aos="flip-right" data-aos-delay="500"></div>
            <div class="absolute top-[-20px] left-[16rem] sm:left-[24rem] md:left-[30rem] w-12 sm:w-20 h-12 sm:h-20">
                <img src="{{ asset('images/curve-text.png') }}" 
                     alt="Circular Icon" 
                     class="w-full h-full object-contain"
                     data-aos="fade-down"
                     data-aos-delay="500">
            </div>
        </div>
    
        <!-- Grid Layout -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <!-- Image Section -->
            <div class="relative">
                <img src="{{ asset('images/Frame 106.png') }}" 
                     alt="Looking Forward" 
                     class="rounded-xl">
            </div>
    
            <!-- Text Section -->
            <div class="bg-gray-50 rounded-xl p-4 sm:p-6 border">
                <p class="text-gray-900 text-base sm:text-lg md:text-[22px] leading-relaxed mb-4">
                    At SantaiMoto, we’re building more than an app—we’re creating a future where motorcycle care is simpler, smarter, and fully accessible to riders everywhere. 
                    Our journey is just beginning, and as we expand, we’re excited about the potential to reach even more riders and reshape the motorcycle industry.
                </p>
                <p class="text-gray-900 text-base sm:text-lg md:text-[22px] leading-relaxed mb-4">
                    For those who share our vision and see the opportunity in this growing field, SantaiMoto offers a unique chance to drive meaningful change and make an impact. 
                    Join us in building something extraordinary.
                </p>
            </div>
        </div>
    </section>
    

@endsection