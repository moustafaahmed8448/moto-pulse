<x-layout>
    <div class="max-w-md mx-auto my-8 bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold text-black mb-4">Login</h1>

        <form method="POST" action="{{ route('login') }}">
            @csrf

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

            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember" class="text-sm text-gray-600">Remember Me</label>
                </div>

                <a href="{{ route('password.request') }}" class="text-sm text-blue-500 hover:text-blue-700">Forgot Password?</a>
            </div>

            <div class="mt-6">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded w-full">
                    Login
                </button>
            </div>
        </form>
    </div>
</x-layout>