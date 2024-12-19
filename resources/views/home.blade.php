<x-layout>
    <!-- Hero Section -->
    <section class="relative bg-cover bg-center h-96 rounded-lg" style="background-image: url('/images/layoutbg.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-0"></div>
        <div class="relative z-10 flex justify-center items-center h-full text-center text-white">
            <div>
                <h1 class="text-4xl font-bold mb-4">The Ultimate Riding Experience</h1>
                <p class="text-xl mb-8">Explore our range of premium race bikes</p>
                <a href="/products" class="bg-red-600 hover:bg-red-700 text-white py-3 px-6 rounded-lg text-xl">Shop Now</a>
            </div>
        </div>
    </section>





    <section class="py-12 mt-6 bg-white bg-opacity-60 rounded-lg shadow-lg backdrop-blur-md" data-aos="fade-up">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-extrabold text-center mb-12 text-gray-800">Bikes for Sale</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                <!-- Bike Card 1 -->
                <div class=" bg-opacity-60 rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition-all duration-300" data-aos="fade-up">
                    <div class="w-full h-64 flex items-center justify-center overflow-hidden rounded-t-lg bg-gray-100 relative">
                        <img src="{{ asset('images/sbike1.jpg') }}" alt="Bike 1" class="w-full h-full object-cover brightness-75">
                        <!-- Dark Overlay -->
                        <div class="absolute inset-0 bg-black opacity-30"></div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="font-semibold text-2xl text-gray-700">Suzuki gxsr 1000 2007</h3>
                        <p class="text-gray-500 text-lg mt-2">High Performance and Stylish</p>
                        <p class="text-red-600 text-xl font-bold mt-2">420,000 EGP</p>
                        <a href="#" class="mt-4 bg-blue-600 hover:bg-blue-700 text-white py-2 px-6 rounded-full inline-block transition-transform duration-200 hover:translate-y-1 shadow-md">View Details</a>
                    </div>
                </div>
                <!-- Bike Card 2 -->
                <div class=" bg-opacity-60 rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition-all duration-300" data-aos="fade-up">
                    <div class="w-full h-64 flex items-center justify-center overflow-hidden rounded-t-lg bg-gray-100 relative">
                        <img src="{{ asset('images/sbike2.jpg') }}" alt="Bike 2" class="w-full h-full object-cover brightness-75">
                        <!-- Dark Overlay -->
                        <div class="absolute inset-0 bg-black opacity-30"></div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="font-semibold text-2xl text-gray-700">Suzuki gxsr 1000 2007</h3>
                        <p class="text-gray-500 text-lg mt-2">Powerful Engine and Sleek Design</p>
                        <p class="text-red-600 text-xl font-bold mt-2">420,000 EGP</p>
                        <a href="#" class="mt-4 bg-blue-600 hover:bg-blue-700 text-white py-2 px-6 rounded-full inline-block transition-transform duration-200 hover:translate-y-1 shadow-md">View Details</a>
                    </div>
                </div>
                <!-- Bike Card 3 -->
                <div class=" bg-opacity-60 rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition-all duration-300" data-aos="fade-up">
                    <div class="w-full h-64 flex items-center justify-center overflow-hidden rounded-t-lg bg-gray-100 relative">
                        <img src="{{ asset('images/sbike3.jpg') }}" alt="Bike 3" class="w-full h-full object-cover brightness-75">
                        <!-- Dark Overlay -->
                        <div class="absolute inset-0 bg-black opacity-30"></div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="font-semibold text-2xl text-gray-700">Suzuki gxsr 1000 2007</h3>
                        <p class="text-gray-500 text-lg mt-2">Lightweight and Aerodynamic</p>
                        <p class="text-red-600 text-xl font-bold mt-2">420,000 EGP</p>
                        <a href="#" class="mt-4 bg-blue-600 hover:bg-blue-700 text-white py-2 px-6 rounded-full inline-block transition-transform duration-200 hover:translate-y-1 shadow-md">View Details</a>
                    </div>
                </div>
                <!-- Bike Card 4 -->
                <div class=" bg-opacity-60 rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition-all duration-300" data-aos="fade-up">
                    <div class="w-full h-64 flex items-center justify-center overflow-hidden rounded-t-lg bg-gray-100 relative">
                        <img src="{{ asset('images/sbike4.jpg') }}" alt="Bike 4" class="w-full h-full object-cover brightness-75">
                        <!-- Dark Overlay -->
                        <div class="absolute inset-0 bg-black opacity-30"></div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="font-semibold text-2xl text-gray-700">Suzuki gxsr 1000 2007</h3>
                        <p class="text-gray-500 text-lg mt-2">Cutting-Edge Technology</p>
                        <p class="text-red-600 text-xl font-bold mt-2">420,000 EGP</p>
                        <a href="#" class="mt-4 bg-blue-600 hover:bg-blue-700 text-white py-2 px-6 rounded-full inline-block transition-transform duration-200 hover:translate-y-1 shadow-md">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Add the following CSS to ensure full-width images -->
    <style>
        .swiper-container {
            overflow: hidden;
            /* Ensure images don't overflow the container */
        }

        .swiper-slide {
            overflow: hidden;
            /* Ensure image doesn't overflow the slide */
        }

        .swiper-slide img {
            object-fit: cover;
            /* Ensure image covers the full area without distortion */
            width: 100%;
            /* Make image width stretch fully to container width */
            height: 100%;
            /* Ensure image fills the height of the slide */
        }
    </style>


    <section class="py-12 mt-6 bg-white bg-opacity-60 rounded-lg shadow-lg backdrop-blur-md" data-aos="fade-up">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-extrabold text-center mb-12 text-gray-800">Mask Products</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                <!-- Product Card 1 -->
                <div class="bg-white bg-opacity-60 rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition-all duration-300" data-aos="fade-up">
                    <div class="w-full h-64 flex items-center justify-center overflow-hidden rounded-t-lg bg-gray-100 relative">
                        <img src="{{ asset('images/mask1.jpg') }}" alt="Mask" class="w-full h-full object-contain brightness-75">
                        <!-- Dark Overlay -->
                        <div class="absolute inset-0 bg-black opacity-30"></div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="font-semibold text-2xl text-gray-700">Mask</h3>
                        <p class="text-gray-500 text-lg mt-2">Protective and Stylish</p>
                        <p class="text-red-600 text-xl font-bold mt-2">120 EGP</p>
                        <a href="#" class="mt-4 bg-blue-600 hover:bg-blue-700 text-white py-2 px-6 rounded-full inline-block transition-transform duration-200 hover:translate-y-1 shadow-md">View Details</a>
                    </div>
                </div>
                <!-- Repeat Cards with similar structure -->
                <div class="bg-white bg-opacity-60 rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition-all duration-300" data-aos="fade-up">
                    <div class="w-full h-64 flex items-center justify-center overflow-hidden rounded-t-lg bg-gray-100 relative">
                        <img src="{{ asset('images/mask2.jpg') }}" alt="Mask" class="w-full h-full object-contain brightness-75">
                        <!-- Dark Overlay -->
                        <div class="absolute inset-0 bg-black opacity-30"></div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="font-semibold text-2xl text-gray-700">Mask</h3>
                        <p class="text-gray-500 text-lg mt-2">Breathable and Comfortable</p>
                        <p class="text-red-600 text-xl font-bold mt-2">120 EGP</p>
                        <a href="#" class="mt-4 bg-blue-600 hover:bg-blue-700 text-white py-2 px-6 rounded-full inline-block transition-transform duration-200 hover:translate-y-1 shadow-md">View Details</a>
                    </div>
                </div>
                <div class="bg-white bg-opacity-60 rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition-all duration-300" data-aos="fade-up">
                    <div class="w-full h-64 flex items-center justify-center overflow-hidden rounded-t-lg bg-gray-100 relative">
                        <img src="{{ asset('images/mask3.jpg') }}" alt="Mask" class="w-full h-full object-contain brightness-75">
                        <!-- Dark Overlay -->
                        <div class="absolute inset-0 bg-black opacity-30"></div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="font-semibold text-2xl text-gray-700">Mask</h3>
                        <p class="text-gray-500 text-lg mt-2">Premium Quality Material</p>
                        <p class="text-red-600 text-xl font-bold mt-2">120 EGP</p>
                        <a href="#" class="mt-4 bg-blue-600 hover:bg-blue-700 text-white py-2 px-6 rounded-full inline-block transition-transform duration-200 hover:translate-y-1 shadow-md">View Details</a>
                    </div>
                </div>
                <div class="bg-white bg-opacity-60 rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition-all duration-300" data-aos="fade-up">
                    <div class="w-full h-64 flex items-center justify-center overflow-hidden rounded-t-lg bg-gray-100 relative">
                        <img src="{{ asset('images/mask4.jpg') }}" alt="Mask" class="w-full h-full object-contain brightness-75">
                        <!-- Dark Overlay -->
                        <div class="absolute inset-0 bg-black opacity-30"></div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="font-semibold text-2xl text-gray-700">Mask</h3>
                        <p class="text-gray-500 text-lg mt-2">Lightweight and Durable</p>
                        <p class="text-red-600 text-xl font-bold mt-2">120 EGP</p>
                        <a href="#" class="mt-4 bg-blue-600 hover:bg-blue-700 text-white py-2 px-6 rounded-full inline-block transition-transform duration-200 hover:translate-y-1 shadow-md">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 mt-6 bg-white bg-opacity-60 rounded-lg shadow-lg backdrop-blur-md" data-aos="fade-up">
        <h2 class="text-4xl font-bold text-center mb-8 text-gray-800">Bike Accessories</h2>

        <!-- Container for accessories with flexbox -->
        <div class="flex flex-wrap justify-center gap-8 mx-auto max-w-7xl">

            <!-- Accessory 1 -->
            <div class="bg-white bg-opacity-60 rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition-all duration-300 w-64">
                <img src="{{ asset('images/greeno.jpg') }}" alt="Helmet" class="w-full h-64 object-contain">
                <div class="p-6 text-center">
                    <h3 class="font-semibold text-2xl text-gray-700">Green</h3>
                    <p class="text-gray-500 text-lg mt-2">Safety and Comfort</p>
                    <p class="text-red-600 text-xl font-bold mt-2">130 EGP</p>
                    <a href="#" class="mt-4 bg-blue-600 hover:bg-blue-700 text-white py-2 px-6 rounded-full inline-block">View Details</a>
                </div>
            </div>

            <!-- Accessory 2 -->
            <div class="bg-white bg-opacity-60 rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition-all duration-300 w-64">
                <img src="{{ asset('images/green.jpg') }}" alt="Gloves" class="w-full h-64 object-contain">
                <div class="p-6 text-center">
                    <h3 class="font-semibold text-2xl text-gray-700">Green</h3>
                    <p class="text-gray-500 text-lg mt-2">Enhanced Grip and Comfort</p>
                    <p class="text-red-600 text-xl font-bold mt-2">130 EGP</p>
                    <a href="#" class="mt-4 bg-blue-600 hover:bg-blue-700 text-white py-2 px-6 rounded-full inline-block">View Details</a>
                </div>
            </div>

            <!-- Accessory 3 -->
            <div class="bg-white bg-opacity-60 rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition-all duration-300 w-64">
                <img src="{{ asset('images/red.jpg') }}" alt="Knee Pads" class="w-full h-64 object-contain">
                <div class="p-6 text-center">
                    <h3 class="font-semibold text-2xl text-gray-700">Red</h3>
                    <p class="text-gray-500 text-lg mt-2">Protection for Every Ride</p>
                    <p class="text-red-600 text-xl font-bold mt-2">130 EGP</p>
                    <a href="#" class="mt-4 bg-blue-600 hover:bg-blue-700 text-white py-2 px-6 rounded-full inline-block">View Details</a>
                </div>
            </div>

        </div>
    </section>






    <!-- Product Reviews Section -->
    <section class="py-12 mt-6 bg-white bg-opacity-60 rounded-lg shadow-lg backdrop-blur-md" data-aos="fade-up">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12 text-gray-800">Customer Reviews</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Review Card -->
                <div class="bg-white rounded-lg p-6 shadow-lg">
                    <div class="flex items-center space-x-2">
                        <span class="text-yellow-500">★★★★☆</span>
                        <p class="text-gray-600">"Great product, very comfortable!"</p>
                    </div>
                </div>
                <!-- Repeat for more reviews -->
            </div>
        </div>
    </section>

    <section class="py-12 mt-6 bg-white bg-opacity-60 rounded-lg shadow-lg backdrop-blur-md" data-aos="fade-up">
        <div class="container mx-auto flex flex-col lg:flex-row items-center gap-8 justify-between">
            <!-- CEO Picture -->
            <div class="lg:w-1/2 flex flex-col items-center space-y-4 text-center">
                <img src="{{ asset('images/seif.jpg') }}" alt="Saif - CEO & Founder"
                    class="w-80 h-80 object-cover rounded-lg shadow-lg">
                <div>
                    <h2 class="text-4xl font-bold text-gray-800">Seif Shereen</h2>
                    <h3 class="text-2xl text-gray-600">CEO & Founder</h3>
                </div>
            </div>

            <!-- CEO Info -->
            <div class="lg:w-1/2 text-left space-y-6">
                <p class="text-lg text-gray-700 leading-relaxed">
                    Seif Moto Bikes Store is your ultimate destination for high-performance motorcycles and accessories. Whether you're an experienced rider or just starting your journey, we offer a wide range of premium, reliable bikes designed for adventure and speed. Our collection features powerful, precision-engineered motorcycles that are both rugged and customizable to fit your unique style. At Seif Moto, we are passionate about delivering top-quality products and providing expert advice to ensure your biking experience is second to none. With a focus on durability and innovation, Seif Moto is the go-to place for motorcycling enthusiasts seeking performance, reliability, and adventure.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Under Saif's guidance, Moto Pulse continues to thrive by offering the finest products and exceptional customer service.
                    He believes in empowering the team to deliver top-notch solutions and create lasting experiences for customers.
                </p>
            </div>
        </div>
    </section>












    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.swiper-container', {
                slidesPerView: 1,
                spaceBetween: 10,
                loop: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 3,
                    },
                    1024: {
                        slidesPerView: 4,
                    },
                }
            });
        });
    </script>









</x-layout>