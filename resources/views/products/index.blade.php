<x-layout>
    <h1 class="text-3xl font-bold text-center my-8">Our Products</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Loop Through Products -->
        @foreach ($products as $product)
        <div class="bg-white rounded-lg shadow hover:shadow-2xl hover:scale-105 transform transition-all duration-300">
            <!-- Image Section -->
            @if ($product->images->isNotEmpty())
            <img src="{{ asset('storage/' . $product->images->first()->image_path) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover rounded-t">
            @else
            <img src="{{ asset('images/default-product.jpg') }}" alt="Default Image" class="w-full h-48 object-cover rounded-t"> <!-- Default Image -->
            @endif
            <!-- Product Details -->
            <div class="p-4 group">
                <h3 class="font-bold text-lg text-gray-800 group-hover:text-blue-600 transition-colors duration-300">{{ $product->name }}</h3>
                <p class="text-red-600 font-semibold mt-2 group-hover:text-red-800 transition-colors duration-300">{{ number_format($product->price, 0) }} EGP</p>
                <a href="/products/{{ $product->id }}"
                    class="mt-4 inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded text-center w-full transition-colors duration-300">
                    View Details
                </a>
            </div>
        </div>
        @endforeach
    </div>
</x-layout>