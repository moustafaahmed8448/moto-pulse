<x-layout>
    <div class="min-h-screen flex flex-col">
        <!-- Main Content Wrapper -->
        <div class="container mx-auto px-4 py-8 flex-grow">
            <h1 class="text-3xl font-bold mb-6 text-center">Shipping & Returns</h1>

            <!-- Shipping Fees Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full border-collapse border border-gray-300">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border border-gray-300 px-4 py-2 text-left text-gray-700 font-medium">Location</th>
                            <th class="border border-gray-300 px-4 py-2 text-left text-gray-700 font-medium">Fees</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">Cairo</td>
                            <td class="border border-gray-300 px-4 py-2">50 EGP</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">Other Cities</td>
                            <td class="border border-gray-300 px-4 py-2">65 EGP</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Return Policy Section -->
            <div class="mt-8 bg-gray-50 p-6 rounded-lg shadow-md bg-opacity-60">
                <h2 class="text-2xl font-semibold mb-4">Return Policy</h2>
                <p class="text-gray-700 mb-4">
                    At Moto Pulse, we are committed to ensuring your satisfaction. If you wish to return a product, please note the following:
                </p>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>Returns are accepted within 14 days of receiving your order.</li>
                    <li>The item must be in its original condition, unused, and with all tags intact.</li>
                    <li>Return shipping costs are the responsibility of the customer unless the item is defective.</li>
                    <li>Refunds will be processed within 7 business days of receiving the returned item.</li>
                </ul>
            </div>
        </div>

    </div>
</x-layout>