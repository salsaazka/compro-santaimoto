@extends('layouts.app')

@section('title', 'About Us')

@section('content')

    <!-- Hero Section -->
    <section class="container mx-auto px-6 md:px-12 py-12 md:py-24">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="md:w-1/2">
                <span class="inline-block bg-gray-200 text-gray-600 px-4 py-2 rounded-md text-sm mb-4">OUR STORY</span>
                <h1 class="text-3xl md:text-4xl font-bold leading-tight text-gray-900 mb-6">
                    SantaiMoto started with a simple idea: to make caring for your motorcycle easy and stress-free.
                </h1>
            </div>
            <div class="md:w-1/2 mt-6 md:mt-0 text-gray-600 leading-relaxed">
                <p>
                    Fadzle Ismail, a skilled mechanic, saw how much time riders lost going to workshops for repairs. So, he and his friend Irwan decided to bring the repairs to the riders instead.
                </p>
                <p class="mt-4">
                    They began by doing on-demand repairs, saving people time and effort. But as they grew, they saw more riders looking for faster, more reliable options. They teamed up with Eris, a tech expert, to build SantaiMoto, an app that brings all things motorcycle into one place.
                </p>
                <p class="mt-4">
                    Now, with over 5,000 users, SantaiMoto offers real-time tracking, smart reminders, and easy access to trusted mechanics, making it simple to keep every bike in top shape—one service at a time.”
                </p>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="container mx-auto px-6 md:px-12 py-12 grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Our Mission -->
        <div class="p-6 bg-white rounded-lg shadow-md">
            <h3 class="text-lg font-bold mb-4">Our Mission</h3>
            <p class="text-gray-600">
                To empower motorcycle owners with an easy, reliable, and complete solution for maintaining their bikes.
            </p>
        </div>
        <!-- Our Vision -->
        <div class="p-6 bg-white rounded-lg shadow-md">
            <h3 class="text-lg font-bold mb-4">Our Vision</h3>
            <p class="text-gray-600">
                To be the go-to app for everything motorcycles—a place where riders can find trusted service, parts reviews, specs, and even their next bike.
            </p>
        </div>
    </section>

    <!-- Core Values -->
    <section class="container mx-auto px-6 md:px-12 py-12">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 text-start mb-8">Core Values</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-start">
            <div>
                <div class="justify-start flex items-start">
                    <img src="{{ asset('images/innovation.png') }}" alt="" srcset="">
                </div>
                <h4 class="font-bold text-lg">Innovation</h4>
                <p class="text-gray-600 mt-2">We push boundaries to make motorcycle care smarter and simpler.</p>
            </div>
            <div>
                <div class="justify-start flex items-start">
                    <img src="{{ asset('images/transparency.png') }}" alt="" srcset="">
                </div>
                <h4 class="font-bold text-lg">Transparency</h4>
                <p class="text-gray-600 mt-2">Honest pricing, genuine parts, and clear communication.</p>
            </div>
            <div>
                <div class="justify-start flex items-start">
                    <img src="{{ asset('images/quality.png') }}" alt="" srcset="">
                </div>
                <h4 class="font-bold text-lg">Quality</h4>
                <p class="text-gray-600 mt-2">Certified mechanics and trusted parts for every job.</p>
            </div>
            <div>
                <div class="justify-start flex items-start">
                    <img src="{{ asset('images/community.png') }}" alt="" srcset="">
                </div>
                <h4 class="font-bold text-lg">Community</h4>
                <p class="text-gray-600 mt-2">Building a network that connects riders and mechanics.</p>
            </div>
            <div>
                <div class="justify-start flex items-start">
                    <img src="{{ asset('images/simplicity.png') }}" alt="" srcset="">
                </div>
                <h4 class="font-bold text-lg">Simplicity</h4>
                <p class="text-gray-600 mt-2">Making maintenance easy and stress-free for every rider.</p>
            </div>
        </div>
    </section>

    <!-- Meet Our Team -->
   <!-- Meet Our Team Section -->
    <section class="container mx-auto px-6 md:px-12 py-12">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 text-center mb-8">Meet Our Team</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Team Member 1 -->
            <div class="relative text-center p-4 bg-white rounded-lg shadow-md">
                <img src="{{asset('images/Frame 106.png')}}" alt="Team Member" class="w-full rounded-lg mb-4">
                <h3 class="font-bold text-lg text-gray-800">Fadzle Ismail</h3>
                <p class="text-blue-600 font-semibold">Founder & CEO</p>
                <p class="text-gray-600 mt-2 text-sm leading-relaxed">
                    A former motorcycle mechanic with a lifelong love for bikes, Fadzle started working on motorcycles as a teenager.
                </p>
                <!-- Icons -->
                <div class="absolute bottom-4 right-4 flex space-x-2">
                    <a href="mailto:someone@example.com" target="_blank" aria-label="Email">
                        <img src="{{ asset('images/w-email.png') }}" alt="Email Icon" class="h-6 w-6">
                    </a>
                    <a href="" target="_blank" aria-label="LinkedIn">
                        <img src="{{ asset('images/w-linkedin.png') }}" alt="LinkedIn Icon" class="h-6 w-6">
                    </a>
                </div>
            </div>
            
            <!-- Team Member 2 -->
            <div class="relative text-center p-4 bg-white rounded-lg shadow-md">
                <img src="{{asset('images/Frame 106.png')}}" alt="Team Member" class="w-full rounded-lg mb-4">
                <h3 class="font-bold text-lg text-gray-800">Fadzle Ismail</h3>
                <p class="text-blue-600 font-semibold">Chief Technology Officer</p>
                <p class="text-gray-600 mt-2 text-sm leading-relaxed">
                    Eris brings deep expertise in predictive maintenance from his work with leading automotive companies.
                </p>
                <!-- Icons -->
                <div class="absolute bottom-4 right-4 flex space-x-2">
                    <a href="mailto:someone@example.com" target="_blank" aria-label="Email">
                        <img src="{{ asset('images/w-email.png') }}" alt="Email Icon" class="h-6 w-6">
                    </a>
                    <a href="" target="_blank" aria-label="LinkedIn">
                        <img src="{{ asset('images/w-linkedin.png') }}" alt="LinkedIn Icon" class="h-6 w-6">
                    </a>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="relative text-center p-4 bg-white rounded-lg shadow-md">
                <img src="{{asset('images/Frame 106.png')}}" alt="Team Member" class="w-full rounded-lg mb-4">
                <h3 class="font-bold text-lg text-gray-800">Fadzle Ismail</h3>
                <p class="text-blue-600 font-semibold">Co-Founder & Operations Lead</p>
                <p class="text-gray-600 mt-2 text-sm leading-relaxed">
                    Irwan ensures that every service runs smoothly, coordinating logistics and connecting mechanics effectively.
                </p>
                <!-- Icons -->
                <div class="absolute bottom-4 right-4 flex space-x-2">
                    <a href="mailto:someone@example.com" target="_blank" aria-label="Email">
                        <img src="{{ asset('images/w-email.png') }}" alt="Email Icon" class="h-6 w-6">
                    </a>
                    <a href="" target="_blank" aria-label="LinkedIn">
                        <img src="{{ asset('images/w-linkedin.png') }}" alt="LinkedIn Icon" class="h-6 w-6">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Looking Forward -->
    <section class="container mx-auto px-6 md:px-12 py-12">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">Looking Forward</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <!-- Image -->
            <div>
                <img src="https://via.placeholder.com/400x300" alt="Looking Forward" class="rounded-lg shadow-md">
            </div>
            <!-- Content -->
            <div class="text-gray-600">
                <p class="leading-relaxed mb-4">
                    At SantaiMoto, we’re building more than an app—we’re creating a future where motorcycle care is simpler, smarter, and fully accessible to riders everywhere.
                </p>
                <p class="leading-relaxed mb-4">
                    Our journey is just beginning, and as we expand, we’re excited about the potential to reach even more riders and reshape the motorcycle industry.
                </p>
                <p class="leading-relaxed">
                    For those who share our vision and see the opportunity in this growing field, SantaiMoto offers a unique chance to drive meaningful change and make an impact. Join us in building something extraordinary.
                </p>
            </div>
        </div>
    </section>

@endsection