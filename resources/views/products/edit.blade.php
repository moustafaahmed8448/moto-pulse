<x-layout>
    <div class="max-w-4xl mx-auto my-8 bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold text-black mb-4">Edit Product</h1>

        <!-- Form to Edit Product -->
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Product Name -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-black">Product Name</label>
                <input type="text" name="name" id="name" value="{{ $product->name }}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm text-black">
                @error('name')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Product Price -->
            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-black">Price (EGP)</label>
                <input type="number" name="price" id="price" value="{{ $product->price }}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm text-black">
                @error('price')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Product Description -->
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-black">Description</label>
                <textarea name="description" id="description" rows="4"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm text-black">{{ $product->description }}</textarea>
                @error('description')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Product Images -->
            <div class="mb-4">
                <label for="images" class="block text-sm font-medium text-black">Upload New Images</label>
                <input type="file" name="images[]" id="images" multiple
                    class="mt-1 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50">
                <p class="text-sm text-gray-500 mt-1">You can upload multiple images.</p>
                @error('images.*')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Existing Images -->
            <div class="mb-4">
                <h3 class="font-semibold text-black">Existing Images:</h3>
                <div class="flex flex-wrap gap-4 mt-2">
                    @foreach ($product->images as $index => $image)
                    <div class="relative">
                        <img src="{{ asset('storage/'.$image->image_path) }}" alt="Product Image"
                            class="w-32 h-32 object-cover rounded-md border border-gray-300">
                        <a href="{{ route('products.deleteImage', ['product' => $product->id, 'index' => $index]) }}"
                            class="absolute top-0 right-0 bg-red-600 text-white text-xs px-2 py-1 rounded-full"
                            onclick="return confirm('Are you sure you want to delete this image?')">×</a>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Submit Button -->
            <div class="mt-6">
                <button type="submit"
                    class="bg-black-500 hover:bg-black-600 text-black font-bold py-2 px-4 rounded">
                    Update Product
                </button>
            </div>
        </form>

        <!-- Form to Delete Product -->
        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="mt-6">
            @csrf
            @method('DELETE')
            <button type="submit"
                class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                onclick="return confirm('Are you sure you want to delete this product and its images?')">
                Delete Product
            </button>
        </form>
    </div>
</x-layout>