<x-layout>
    <div class="container mx-auto p-6 bg-white bg-opacity-60 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center mb-6">Add New Product</h2>

        <!-- Display errors if any -->
        @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded mb-6">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Product Title -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Product Title</label>
                <input type="text" id="name" name="name" class="w-full p-2 mt-2 border rounded text-black @error('name') border-red-500 @enderror" value="{{ old('name') }}" required>
                @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Product Description -->
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Product Description</label>
                <textarea id="description" name="description" class="w-full p-2 mt-2 border rounded text-black @error('description') border-red-500 @enderror" rows="4" required>{{ old('description') }}</textarea>
                @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Product Price -->
            <div class="mb-4">
                <label for="price" class="block text-gray-700">Product Price (EGP)</label>
                <input type="number" id="price" name="price" class="w-full p-2 mt-2 border rounded text-black @error('price') border-red-500 @enderror" step="0.01" value="{{ old('price') }}" required>
                @error('price')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Product Images -->
            <div class="mb-4">
                <label for="images" class="block text-gray-700">Product Images</label>
                <input type="file" id="images" name="images[]" class="w-full p-2 mt-2 border rounded @error('images') border-red-500 @enderror" multiple required>
                @error('images')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Alt Text for Images (Optional) -->
            <div class="mb-4">
                <label for="alt_text" class="block text-gray-700">Alt Text for Images (Optional)</label>
                <input type="text" name="alt_text[]" class="w-full p-2 mt-2 border rounded text-black" placeholder="Alt text for image 1">
                <input type="text" name="alt_text[]" class="w-full p-2 mt-2 border rounded text-black mt-2" placeholder="Alt text for image 2">
                <input type="text" name="alt_text[]" class="w-full p-2 mt-2 border rounded text-black mt-2" placeholder="Alt text for image 3">
                <!-- Add more fields dynamically using JavaScript if needed -->
            </div>

            <!-- Submit Button -->
            <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded w-full hover:bg-blue-700 transition duration-200">
                Add Product
            </button>
        </form>
    </div>

    <!-- Optional JavaScript to add dynamic Alt Text fields or preview images -->
    <script>
        // Optional: Dynamically add more alt text fields or previews
        document.getElementById('images').addEventListener('change', function(event) {
            const previewContainer = document.getElementById('imagePreview');
            previewContainer.innerHTML = ''; // Clear previous previews
            Array.from(event.target.files).forEach(file => {
                const img = document.createElement('img');
                img.src = URL.createObjectURL(file);
                img.classList.add('w-32', 'h-32', 'object-cover', 'rounded-md', 'mr-2', 'mb-2');
                previewContainer.appendChild(img);
            });
        });
    </script>

    <!-- Preview uploaded images (optional) -->
    <div id="imagePreview" class="mt-4 flex"></div>
</x-layout>