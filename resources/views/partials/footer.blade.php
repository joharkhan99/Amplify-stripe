<footer class="py-6" style="background: rgb(240, 244, 247)">

  <div class="lg:px-20 px-5 max-w-screen-xl">

    <div class="flex flex-wrap justify-between flex-row">

      <div>
        <h3 class="text-md text-gray-600 font-normal">AMPLIFY</h3>
      </div>

      <p class="m-0 p-0 text-center text-gray-600 text-sm md:order-none order-3">Copyright © <?php echo date("Y") ?> Amplify Inc.</p>

      <div>
        <div class="flex gap-10 items-center">

          @if (Auth::check())
          <a href="{{ route('logout') }}" class="text-gray-600 text-sm hover:text-gray-900">Log out</a>
          @else
          <button class="text-gray-600 text-sm hover:text-gray-900 openModalButton">Log in</button>
          <button class="text-gray-600 text-sm hover:text-gray-900 openModalButton">Get started</button>
          @endif
        </div>
      </div>

    </div>


  </div>

</footer>