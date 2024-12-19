<!-- Main Layout -->

<body class="bg-gray-100 text-gray-900">
    <!-- Navbar -->
    <header class="bg-black text-white">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <a href="/" class="text-2xl font-bold">Moto Pulse</a>
            <nav>
                <a href="/products" class="px-4 hover:underline">Products</a>
                <a href="/about" class="px-4 hover:underline">About</a>
                <a href="/contact" class="px-4 hover:underline">Contact</a>
                <a href="/login" class="px-4 bg-red-600 rounded hover:bg-red-700 py-2">Login</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto my-8">
        {{ $slot }}
    </main>

    <!-- Include Footer Component -->
    <x-footer />
</body>