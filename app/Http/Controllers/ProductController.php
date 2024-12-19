<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Image;

class ProductController extends Controller
{
    // Display all products
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');  // Ensure this view exists
    }


    public function store(Request $request)
    {
        // Validate incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Create the product
        $product = Product::create($request->only('name', 'description', 'price'));

        // Check if images are uploaded
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                // Store the image in the 'products' folder under the 'public' disk
                $path = $file->store('products', 'public');

                // Ensure alt_text is a string, or null if not provided
                $altText = is_array($request->alt_text) ? implode(' ', $request->alt_text) : $request->alt_text;

                // Store the image record in the 'images' table
                Image::create([
                    'product_id' => $product->id,
                    'image_path' => $path, // This should be a string path
                    'alt_text' => $altText ?? null,  // Ensure it's a string or null
                ]);
            }
        }

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }



    // Show a product
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    // Show the form to edit a product
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // Update a product
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update product details (name, price, description)
        $product->update($request->only('name', 'price', 'description'));

        // Handle new images (if any)
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                // Store each uploaded image
                $path = $file->store('product_images', 'public');

                // Create a new image record in the 'images' table
                Image::create([
                    'product_id' => $product->id,
                    'image_path' => $path,
                    'alt_text' => $request->alt_text ?? null,  // Optional alt_text
                ]);
            }
        }

        // Redirect to the product details page after successful update
        return redirect()->route('products.show', $product->id)->with('success', 'Product updated successfully!');
    }



    // Delete an image from a product
    public function deleteImage(Product $product, $index)
    {
        // Get the product images (it's a Collection, not an array)
        $images = $product->images;

        if ($images->has($index)) {
            // Get the image to be deleted
            $imageToDelete = $images[$index];

            // Delete the image from storage
            if (\Storage::exists('public/' . $imageToDelete->image_path)) {
                \Storage::delete('public/' . $imageToDelete->image_path);
            }

            // Delete the image record from the database
            $imageToDelete->delete();

            return back()->with('success', 'Image deleted successfully.');
        }

        return back()->withErrors(['error' => 'Image not found.']);
    }
    // Delete a product and its images
    public function destroy(Product $product)
    {
        // Delete associated images from storage
        foreach ($product->images as $image) {
            if (\Storage::exists('public/' . $image->image_path)) {
                \Storage::delete('public/' . $image->image_path);
            }
            $image->delete();  // Delete image record from the database
        }

        // Delete the product itself
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product and its images deleted successfully!');
    }
}
