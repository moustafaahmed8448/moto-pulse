<x-layout>
    <div class="max-w-md mx-auto my-8 bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold text-black mb-4">Register</h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-black">Name</label>
                <input type="text" name="name" id="name" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm text-black">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-black">Email</label>
                <input type="email" name="email" id="email" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm text-black">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-black">Password</label>
                <input type="password" name="password" id="password" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm text-black">
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm font-medium text-black">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm text-black">
            </div>

            <div class="mt-6">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded w-full">
                    Register
                </button>
            </div>
        </form>
    </div>
</x-layout>