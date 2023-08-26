<header class="py-6 pt-2">
  <nav class="py-2.5">

    @if (Auth::check())
    <h1>Welcome {{ auth()->user()->name }}</h1>
    @endif
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
      <a href="rtr" class="flex items-center">
        <span class="self-center text-2xl whitespace-nowrap dark:text-white font-normal">AMPLIFY</span>
      </a>
      <div class="flex items-center gap-5">
        <button class="text-white rounded-lg text-sm px-4 py-2 font-medium bg-transparent hover:opacity-90 transition-colors openModalButton">Log
          in</button>
        <button class="text-blue-500 rounded-lg text-sm px-4 py-2 font-medium bg-white transition-colors hover:bg-transparent border-white border shadow-md hover:text-white openModalButton">Get
          started</button>
      </div>

    </div>
  </nav>
</header>