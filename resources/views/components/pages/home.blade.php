<x-layouts.layout>

    {{-- Start Hero --}}
    <div class="hero min-h-screen " style="background-image: url( {{ asset('images/hero.jpg') }})">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-center text-neutral-content">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">Universal Teknik Mandiri</h1>
                <p class="mb-5">Selamat Datang, Kami siap memberikan layanan terbaik untuk kebutuhan Anda.
                    Ayo mulai
                    proyek Anda bersama kami!</p>
                <a href="{{ route('project') }}" class="btn btn-primary">Our Project</a>
            </div>
        </div>
    </div>
    {{-- End Hero --}}

    {{-- Start Machine --}}
    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content md:w-5/6  flex-col lg:flex-row">
            <img src="{{ asset('images/Machine.jpg') }}" class="max-w-sm  max-h-96  rounded-lg shadow-2xl" />
            <div>
                <h1 class="text-5xl font-bold">Mesin Handal</h1>
                <p class="py-6">Mesin-mesin yang terbaik dipadukan dengan keterampilan para ahli di bengkel ini,
                    memberikan
                    jaminan kualitas dan presisi
                    yang tak tertandingi dalam pembuatan dan perbaikan berbagai komponen.</p>
            </div>
        </div>
    </div>
    {{-- End Machine --}}

    {{-- Start Project --}}
    <div class="carousel h-screen">
        <div id="slide1" class="carousel-item relative w-full">
            <img src="{{ asset('images/hero.jpg') }}" class="w-full" />
            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                <a href="#slide4" class="btn btn-circle">❮</a>
                <a href="#slide2" class="btn btn-circle">❯</a>
            </div>
        </div>
        <div id="slide2" class="carousel-item relative w-full">
            <img src="{{ asset('images/Machine.jpg') }}" class="w-full" />
            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                <a href="#slide1" class="btn btn-circle">❮</a>
                <a href="#slide3" class="btn btn-circle">❯</a>
            </div>
        </div>
        <div id="slide3" class="carousel-item relative w-full">
            <img src="{{ asset('images/blacklight.jpg') }}" class="w-full" />
            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                <a href="#slide2" class="btn btn-circle">❮</a>
                <a href="#slide4" class="btn btn-circle">❯</a>
            </div>
        </div>
        <div id="slide4" class="carousel-item relative w-full">
            <img src="{{ asset('images/banner.jpg') }}" class="w-full" />
            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                <a href="#slide3" class="btn btn-circle">❮</a>
                <a href="#slide1" class="btn btn-circle">❯</a>
            </div>
        </div>
    </div>
    {{-- End Project --}}

</x-layouts.layout>
