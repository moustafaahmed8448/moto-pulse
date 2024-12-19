<x-layout>
    <h1 class="text-3xl font-bold text-center my-8">Contact Us</h1>
    <form action="/contact/submit" method="POST" class="max-w-lg mx-auto">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-lg font-bold mb-2">Name</label>
            <input type="text" id="name" name="name" class="w-full border rounded p-2" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-lg font-bold mb-2">Email</label>
            <input type="email" id="email" name="email" class="w-full border rounded p-2" required>
        </div>
        <div class="mb-4">
            <label for="message" class="block text-lg font-bold mb-2">Message</label>
            <textarea id="message" name="message" rows="4" class="w-full border rounded p-2" required></textarea>
        </div>
        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded">Send</button>
    </form>
</x-layout>