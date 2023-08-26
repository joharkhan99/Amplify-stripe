<!-- Purchased Products Modal -->
<div class="hidden fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 items-center justify-center" id="productsModal">

  <div class="flex justify-center items-center h-full">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-lg">

      <!-- Tab Content -->
      <div class="tab-content active" id="tab1">
        <div class="w-full p-10 pt-5">

          <h4 class="font-semibold text-xl mb-2">My Products</h4>
          <p class="text-sm text-gray-500">Your Purchased Items</p>

          <div class="products mt-6 mb-8">

            @foreach($purchased as $product)

            <div class="flex items-center gap-2 mb-5 border-b pb-3">
              <img src="{{ $product['image'] }}" alt="" class="w-20 h-20 object-cover rounded-md">
              <div>
                <p class="font-semibold">{{ $product['title'] }}</p>
                <span class="text-sm">{{ $product['price'] }}</span>
              </div>
            </div>

            @endforeach

          </div>

          <button type="button" class="bg-gray-200 w-full p-3 text-gray-900 text-sm rounded-md closeProducts">Close</button>

        </div>
      </div>

    </div>
  </div>

</div>