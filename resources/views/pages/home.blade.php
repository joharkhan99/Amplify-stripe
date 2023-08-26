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

<!-- Auth Modal -->
<div class="hidden fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 items-center justify-center" id="authModal">

  <div class="flex justify-center items-center h-full">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-lg">

      <!-- Tab Content -->
      <div class="tab-content active" id="tab1">
        <div class="w-full p-10 pt-5">

          <h4 class="font-semibold text-xl mb-2">Log in</h4>
          <p class="text-sm text-gray-500">Enter your credentials</p>

          <form id="loginForm" class="mt-10">
            @csrf
            <div class="mb-4">
              <label for="" class="text-sm text-gray-600 mb-1">Email</label>
              <input type="email" placeholder="johndoe@example.com"
                class="w-full border border-gray-200 p-3 rounded-md text-black text-sm outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-1 focus:border-blue-400">
            </div>
            <div class="mb-6">
              <label for="" class="text-sm text-gray-600 mb-1">Password</label>
              <input type="password" placeholder="********"
                class="w-full border border-gray-200 p-3 rounded-md text-black text-sm outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-1 focus:border-blue-400">
            </div>
            <div>
              <button type="submit" class="bg-blue-600 w-full p-3 text-white text-sm rounded-md mb-2 focus:ring-2 focus:ring-blue-600 focus:ring-offset-2">Login</button>
              <button type="button" class="bg-gray-200 w-full p-3 text-gray-900 text-sm rounded-md closeModalButton">Cancel</button>
            </div>

          </form>

          <div class="flex gap-2 justify-center text-sm mt-8">
            <span class="text-gray-500">Don't have an account?</span>
            <button class="text-blue-600 tab-button" data-tab="tab2">Sign Up</button>
          </div>

        </div>
      </div>

      <div class="tab-content" id="tab2">
        <div class="w-full p-10 pt-5">

          <h4 class="font-semibold text-xl mb-2">Get started</h4>
          <p class="text-sm text-gray-500">Create your account now</p>

          <form id="signUpForm" class="mt-10">
            @csrf
            <div class="mb-4">
              <label for="" class="text-sm text-gray-600 mb-1">Full name</label>
              <input type="text" id="signup_name" placeholder="John Doe"
                class="w-full border border-gray-200 p-3 rounded-md text-black text-sm outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-1 focus:border-blue-400">
            </div>
            <div class="mb-4">
              <label for="" class="text-sm text-gray-600 mb-1">Email</label>
              <input type="email" id="signup_email" placeholder="johndoe@example.com"
                class="w-full border border-gray-200 p-3 rounded-md text-black text-sm outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-1 focus:border-blue-400">
            </div>
            <div class="mb-2">
              <label for="" class="text-sm text-gray-600 mb-1">Password</label>
              <input type="password" id="signup_password" placeholder="********"
                class="w-full border border-gray-200 p-3 rounded-md text-black text-sm outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-1 focus:border-blue-400">
            </div>

            <div class="signup_errors bg-red-100 p-2 rounded hidden"></div>


            <div class="mt-6">
              <button type="submit" class="bg-blue-600 w-full p-3 text-white text-sm rounded-md mb-2 focus:ring-2 focus:ring-blue-600 focus:ring-offset-2">Sign Up</button>
              <button type="button" class="bg-gray-200 w-full p-3 text-gray-900 text-sm rounded-md closeModalButton">Cancel</button>
            </div>

          </form>



          <div class="flex gap-2 justify-center text-sm mt-8">
            <span class="text-gray-500">Have an account?</span>
            <button class="text-blue-600 tab-button" data-tab="tab1">Login</button>
          </div>

        </div>
      </div>

    </div>
  </div>

</div>



@endsection