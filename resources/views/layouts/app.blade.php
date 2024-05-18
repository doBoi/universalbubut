<!DOCTYPE html>
<html data-theme="coffee">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Styles -->
  @vite('resources/css/app.css')

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

  <title>Universal Teknik Mandiri</title>

</head>

<body>

  {{-- Start Navbar --}}
  <div class="navbar bg-base-300 bg-transparent sticky top-0">
    <div class="navbar-start">
      <div class="dropdown">
        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden ">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
          </svg>
        </div>
        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
          <li><a>Home</a></li>
          <li><a>Project</a></li>
          <li><a>Contact</a></li>
        </ul>
      </div>
      <a class="btn btn-ghost text-xl tracking-wider">UTM</a>
    </div>
    <div class="navbar-center hidden lg:flex">
      <ul class="menu menu-horizontal px-1">
        <li><a>Home</a></li>
        <li><a>Project</a></li>
        <li><a>Contact</a></li>
      </ul>
    </div>
    <div class="navbar-end">
      {{-- <a class="btn">Button</a> --}}
    </div>
  </div>
  {{-- End Navbar --}}

  {{-- Content --}}

  {{-- Start Hero --}}
  <div class="-mt-20">
    <div class="hero min-h-screen " style="background-image: url( {{ asset('images/hero.jpg') }})">
      <div class="hero-overlay bg-opacity-60"></div>
      <div class="hero-content text-center text-neutral-content">
        <div class="max-w-md">
          <h1 class="mb-5 text-5xl font-bold">Universal Teknik Mandiri</h1>
          <p class="mb-5">Selamat Datang, Kami siap memberikan layanan terbaik untuk kebutuhan Anda.
            Ayo mulai
            proyek Anda bersama kami!</p>
          <button class="btn btn-primary">Explore</button>
        </div>
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
        <p class="py-6">Mesin-mesin yang terbaik dipadukan dengan keterampilan para ahli di bengkel ini, memberikan
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

  {{-- <div class="grid justify-items-center grid-cols-1 sm:grid-flow-col-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
    <div class="card w-64 border bg-base-100 shadow-xl">
      <figure class="px-10 pt-10">
        <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes"
          class="rounded-xl" />
      </figure>
      <div class="card-body items-center text-center">
        <h2 class="card-title">Shoes!</h2>
        <p>If a dog chews shoes whose shoes does he choose?</p>
        <div class="card-actions">
          <button class="btn btn-primary">Buy Now</button>
        </div>
      </div>
    </div>


    <div class="card w-64 border bg-base-100 shadow-xl">
      <figure class="px-10 pt-10">
        <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes"
          class="rounded-xl" />
      </figure>
      <div class="card-body items-center text-center">
        <h2 class="card-title">Shoes!</h2>
        <p>If a dog chews shoes whose shoes does he choose?</p>
        <div class="card-actions">
          <button class="btn btn-primary">Buy Now</button>
        </div>
      </div>
    </div>
    <div class="card w-64 border bg-base-100 shadow-xl">
      <figure class="px-10 pt-10">
        <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes"
          class="rounded-xl" />
      </figure>
      <div class="card-body items-center text-center">
        <h2 class="card-title">Shoes!</h2>
        <p>If a dog chews shoes whose shoes does he choose?</p>
        <div class="card-actions">
          <button class="btn btn-primary">Buy Now</button>
        </div>
      </div>
    </div>
    <div class="card w-64 border bg-base-100 shadow-xl">
      <figure class="px-10 pt-10">
        <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes"
          class="rounded-xl" />
      </figure>
      <div class="card-body items-center text-center">
        <h2 class="card-title">Shoes!</h2>
        <p>If a dog chews shoes whose shoes does he choose?</p>
        <div class="card-actions">
          <button class="btn btn-primary">Buy Now</button>
        </div>
      </div>
    </div>
    <div class="card w-64 border bg-base-100 shadow-xl">
      <figure class="px-10 pt-10">
        <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes"
          class="rounded-xl" />
      </figure>
      <div class="card-body items-center text-center">
        <h2 class="card-title">Shoes!</h2>
        <p>If a dog chews shoes whose shoes does he choose?</p>
        <div class="card-actions">
          <button class="btn btn-primary">Buy Now</button>
        </div>
      </div>
    </div>
  </div> --}}

  {{-- End Project --}}

  {{-- Content --}}


  {{-- Start Footer--}}

  <footer class="footer justify-center -mt-2 p-3 bg-neutral text-neutral-content">
    <p class="">Copyright © 2024 - All right reserved</p>
  </footer>

  {{-- End Footer --}}
</body>

</html>
