<x-layout>
    <div class="flex flex-col items-center my-8">
        <!-- Main Section with Image and Product Details -->
        <div class="w-full max-w-4xl flex flex-col md:flex-row space-x-6 bg-white bg-opacity-60 rounded-lg shadow-lg p-6">
            <!-- Product Image Section -->
            <div class="w-full md:w-1/2">
                <div class="relative">
                    <!-- Display the main product image -->
                    @if($product->images->isNotEmpty())
                    <img src="{{ asset('storage/' . $product->images[0]->image_path) }}" alt="Main Image" id="mainImage" class="main-image w-full h-80 object-cover rounded-lg shadow-lg">
                    @else
                    <img src="{{ asset('images/default-product.jpg') }}" alt="Default Image" class="main-image w-full h-80 object-cover rounded-lg shadow-lg">
                    @endif

                    <!-- Navigation Buttons -->
                    <div class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-3 rounded-full cursor-pointer" id="prevButton">
                        &#10094; <!-- Left Arrow -->
                    </div>
                    <div class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-3 rounded-full cursor-pointer" id="nextButton">
                        &#10095; <!-- Right Arrow -->
                    </div>
                </div>

                <!-- Product Image Thumbnails Below Main Image -->
                <div class="flex justify-center mt-4 space-x-4">
                    @foreach ($product->images as $index => $image)
                    <div class="thumbnail-container relative">
                        <img src="{{ asset('storage/' . $image->image_path) }}" alt="Thumbnail {{ $index+1 }}" class="thumbnail w-24 h-16 object-cover rounded-md border-2 border-gray-300 hover:scale-105 transition-all duration-300" data-index="{{ $index }}">
                        <div class="thumbnail-overlay absolute top-0 left-0 w-full h-full bg-black opacity-0 transition-opacity"></div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Product Details Section -->
            <div class="mt-6 flex flex-col justify-center">
                <h1 class="text-3xl font-bold text-gray-800">{{ $product->name }}</h1>
                <p class="text-red-600 text-2xl font-semibold">{{ number_format($product->price, 0) }} EGP</p>

                <!-- Description Section with Transparent Background -->
                <div class="bg-white bg-opacity-70 p-4 mt-4 rounded-lg shadow-md">
                    <p class="text-gray-700 leading-relaxed">{{ $product->description }}</p>
                </div>

                <!-- WhatsApp Button -->
                <a href="https://wa.me/+201020803613?text=I%20am%20interested%20in%20{{ urlencode($product->name) }}%20for%20{{ number_format($product->price, 0) }}%20EGP"
                    target="_blank"
                    class="bg-green-600 hover:bg-green-700 text-white py-3 px-6 rounded-lg mt-4 text-center w-full md:w-auto">
                    What's App
                </a>
            </div>

        </div>
    </div>

    <!-- Custom JavaScript for Image Navigation -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const images = @json($product->images->map(fn($image) => asset('storage/'.$image->image_path))); // Create an array of image URLs
            let currentIndex = 0; // To track the current image

            const mainImage = document.getElementById('mainImage');
            const prevButton = document.getElementById('prevButton');
            const nextButton = document.getElementById('nextButton');
            const thumbnailContainers = document.querySelectorAll('.thumbnail-container');
            const thumbnails = document.querySelectorAll('.thumbnail');
            const overlayDivs = document.querySelectorAll('.thumbnail-overlay');

            // Update main image based on the current index
            function updateMainImage() {
                mainImage.src = images[currentIndex];
                updateThumbnails();
            }

            // Highlight the active thumbnail by darkening others
            function updateThumbnails() {
                thumbnailContainers.forEach((container, index) => {
                    if (index === currentIndex) {
                        overlayDivs[index].style.opacity = '0.6'; // Darken the current thumbnail
                    } else {
                        overlayDivs[index].style.opacity = '0'; // Reset opacity for non-active thumbnails
                    }
                });
            }

            // Click event for previous button
            prevButton.addEventListener('click', function() {
                currentIndex = (currentIndex === 0) ? images.length - 1 : currentIndex - 1;
                updateMainImage();
            });

            // Click event for next button
            nextButton.addEventListener('click', function() {
                currentIndex = (currentIndex === images.length - 1) ? 0 : currentIndex + 1;
                updateMainImage();
            });

            // Click event for thumbnail images
            thumbnails.forEach((thumbnail, index) => {
                thumbnail.addEventListener('click', function() {
                    currentIndex = index;
                    updateMainImage();
                });
            });

            // Initial setup
            updateMainImage();
        });
    </script>

    <!-- Custom CSS -->
    <style>
        .main-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .thumbnail {
            width: 96px;
            height: 64px;
            object-fit: cover;
            border-radius: 8px;
            border: 2px solid transparent;
            transition: transform 0.3s ease;
        }

        .thumbnail:hover {
            transform: scale(1.05);
        }

        .thumbnail-container {
            position: relative;
        }

        .thumbnail-overlay {
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .thumbnail-container:hover .thumbnail-overlay {
            opacity: 0.5;
        }

        .bg-opacity-70 {
            background-color: rgba(255, 255, 255, 0.7);
        }
    </style>
</x-layout>