@extends('layouts.master')

@section('content')

<!-- hero content -->
<div class="hero-content bg-gradient-to-r from-blue-600 to-blue-800 px-20">
  @include('partials.header')
  <div class="py-2.5 pb-6">
    <div class="flex flex-wrap justify-between items-center max-w-screen-xl mx-auto">

      <div class="w-full md:w-1/2 pr-4">
        <h1 class="text-8xl text-white font-black leading-tight	 m-0 p-0">Sony WH-1000 XM3</h1>
        <p class="max-w-lg text-white my-8 text-sm">
          The Sony WH-1000XM4 Wireless are the best wireless headphones that we've tested. Although they're the previous generation of the Sony WH-1000XM5 Wireless
        </p>

        <button class="uppercase border border-white text-white rounded-full p-3 px-5 transition-colors hover:bg-white hover:text-blue-500">Buy Now</button>

      </div>

      <div class="w-full md:w-1/2 md:order-none -order-1">
        <img src="https://templatekit.jegtheme.com/noiz/wp-content/uploads/sites/36/2021/02/noiz-hero-bg@2x.png" alt="" class="w-full">
      </div>

    </div>
  </div>
</div>

<!-- Products grid -->
<div class="flex flex-wrap justify-center my-20 gap-5">

  <div class="w-full md:w-1/4">
    <div class="bg-white shadow-lg rounded-xl p-3 hover:shadow-none hover:border-gray-100 border border-transparent transition-all">
      <div class="h-80 w-full mb-4">
        <img src="{{url('/images/product1.png')}}" alt="Image" class="w-full h-full object-cover" />
      </div>
      <div class="details p-3 text-center">
        <h2 class="font-semibold">Sony MX-30 headphones </h2>
        <div class="flex gap-2 justify-center my-4">
          <span class="text-gray-400 line-through">$420.00</span>
          <span class="text-blue-600">$1320.00</span>
        </div>

        <button class="uppercase border border-blue-600 text-blue-600 rounded-full p-1 shadow-sm px-5 transition-colors hover:bg-blue-600 hover:text-white">Buy Now</button>

      </div>
    </div>
  </div>

  <div class="w-full md:w-1/4">
    <div class="bg-white shadow-lg rounded-xl p-3 hover:shadow-none hover:border-gray-100 border border-transparent transition-all">
      <div class="h-80 w-full mb-4">
        <img src="{{url('/images/product2.png')}}" alt="Image" class="w-full h-full object-cover" />
      </div>
      <div class="details p-3 text-center">
        <h2 class="font-semibold">Bowers & Wilkins PX8</h2>
        <div class="flex gap-2 justify-center my-4">
          <span class="text-gray-400 line-through">$420.00</span>
          <span class="text-blue-600">$1320.00</span>
        </div>

        <button class="uppercase border border-blue-600 text-blue-600 rounded-full p-1 shadow-sm px-5 transition-colors hover:bg-blue-600 hover:text-white">Buy Now</button>

      </div>
    </div>
  </div>

  <div class="w-full md:w-1/4">
    <div class="bg-white shadow-lg rounded-xl p-3 hover:shadow-none hover:border-gray-100 border border-transparent transition-all">
      <div class="h-80 w-full mb-4">
        <img src="{{url('/images/product4.png')}}" alt="Image" class="w-full h-full object-cover" />
      </div>
      <div class="details p-3 text-center">
        <h2 class="font-semibold">Sennheiser Momentum 4 Wireless </h2>
        <div class="flex gap-2 justify-center my-4">
          <span class="text-gray-400 line-through">$420.00</span>
          <span class="text-blue-600">$1320.00</span>
        </div>

        <button class="uppercase border border-blue-600 text-blue-600 rounded-full p-1 shadow-sm px-5 transition-colors hover:bg-blue-600 hover:text-white">Buy Now</button>

      </div>
    </div>
  </div>

</div>

@endsection