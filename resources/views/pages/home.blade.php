@extends('layouts.master')

@section('content')

<!-- hero content -->
<div class="hero-content bg-gradient-to-r from-blue-600 to-blue-800 lg:px-20 px-7">
  @include('partials.header')
  <div class="py-2.5 pb-6">
    <div class="flex flex-wrap justify-between items-center max-w-screen-xl mx-auto">

      <div class="w-full md:w-1/2">
        <h1 class="lg:text-8xl text-5xl text-white font-black leading-tight m-0 p-0">Sony WH-1000 XM3</h1>
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
@include('partials.products')

<!-- product details -->
<div class="showcase bg-black bg-opacity-90">
  <div class="lg:flex lg:justify-between lg:items-center max-w-screen-xl lg:p-0 p-5 py-10">
    <div>
      <img src="{{ url('/images/product5.png') }}" alt="" class="-mt-16">
    </div>

    <div>
      <h5 class="text-white text-5xl font-bold">Galaxy Buds2 Pro</h5>
      <p class="text-xl my-6 text-white font-thin opacity-50"> Starting from $120</p>
      <p class="text-white">
        Samsung Galaxy Buds2 Pro - The ultimate Hi-Fi sound now wirelessly. Crystal clear audio, seamless connectivity, and comfortable fit.
      </p>
    </div>

  </div>
</div>

<!-- Auth Modal -->
@include('partials.auth')

<!-- Purchased Products Modal -->
@include('partials.purchased')

@endsection