<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // Show the form to create a new product
    public function create()
    {
        return view('products.create'); // Show the create product form
    }

    // Store a newly created product and its images
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'images' => 'required|array', // Ensure images are provided
            'images.*' => 'image|mimes:jpeg,png,jpg,gif', // Validate image types
            'alt_text' => 'nullable|array', // Ensure alt_text is passed as an array
            'alt_text.*' => 'nullable|string', // Validate each alt text
        ]);

        // Create the product
        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        // Loop through the uploaded images and store them
        foreach ($request->images as $index => $image) {
            $path = $image->store('product_images', 'public'); // Store the image

            // Get the alt_text for the current image (if provided)
            $altText = isset($request->alt_text[$index]) ? $request->alt_text[$index] : null;

            // Create image records in the images table
            Image::create([
                'product_id' => $product->id,
                'image_path' => $path,
                'alt_text' => $altText, // Use the alt text from the request
            ]);
        }

        return redirect()->route('products.index');
    }


    // List all products
    public function index()
    {
        $products = Product::all(); // Fetch all products
        return view('products.index', compact('products')); // Pass products to the view
    }

    // Show a single product with its images
    public function show($id)
    {
        $product = Product::with('images')->findOrFail($id); // Fetch the product along with its images
        return view('products.show', compact('product')); // Pass product to the view
    }
}
