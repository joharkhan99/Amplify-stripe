<!-- Products grid -->
<div class="flex flex-wrap justify-center my-28 mb-32 gap-5">
  @foreach($products as $product)
  <div class="w-full md:w-1/4 mb-6 lg:mb-0">
    <div class="bg-white shadow-lg rounded-xl p-3 hover:shadow-none hover:border-gray-100 border border-transparent transition-all">
      <div class="h-80 w-full mb-4">
        <img src="{{ $product['images'][0] }}" alt="{{ $product['name'] }}" class="w-full h-full object-cover" />
      </div>
      <div class="details p-3 text-center">
        <h2 class="font-semibold">{{ $product['name'] }}</h2>
        <div class="flex gap-2 justify-center my-4">
          @if(isset($product['default_price']))
          <span class="text-gray-400 line-through">$150</span>
          @endif
          <span class="text-blue-600">{{ $product['formatted_price'] }}</span>
        </div>
        <a href="{{ route('checkout', ['product_id' => $product['id'], 'price_id'=>$product['default_price']]) }}" class="uppercase border border-blue-600 text-blue-600 rounded-full p-1 shadow-sm px-5 transition-colors hover:bg-blue-600 hover:text-white">Buy Now</a>
      </div>
    </div>
  </div>
  @endforeach
</div>