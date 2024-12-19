<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Seif Online Store' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-cover bg-center bg-no-repeat text-gray-900 flex flex-col min-h-screen"
    style="background-image: url('{{ asset('images/layoutbg2.jpg') }}');">
    <!-- Overlay Wrapper -->
    <div class="bg-black bg-opacity-60 flex flex-col flex-grow">
        <!-- Navbar -->
        <header class="bg-black text-white bg-opacity-80">
            <div class="container mx-auto flex justify-between items-center py-4 px-6">
                <a href="/" class="text-2xl font-bold">Seif Online Store</a>
                <nav>
                    <a href="/" class="px-4 hover:underline">Home</a>
                    <a href="/products" class="px-4 hover:underline">Products</a>
                    <a href="/about" class="px-4 hover:underline">About</a>
                    <a href="/contact" class="px-4 hover:underline">Contact</a>
                </nav>
            </div>
        </header>

        <!-- Main Content -->
        <main class="container mx-auto my-8 flex-grow text-white">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <x-footer />
    </div>
</body>

</html>