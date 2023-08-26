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
              <input type="email" id="login_email" placeholder="johndoe@example.com"
                class="w-full border border-gray-200 p-3 rounded-md text-black text-sm outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-1 focus:border-blue-400">
            </div>
            <div class="mb-2">
              <label for="" class="text-sm text-gray-600 mb-1">Password</label>
              <input type="password" id="login_password" placeholder="********"
                class="w-full border border-gray-200 p-3 rounded-md text-black text-sm outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-1 focus:border-blue-400">
            </div>

            <div class="login_errors bg-red-100 p-2 rounded hidden"></div>

            <div class="mt-6">
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