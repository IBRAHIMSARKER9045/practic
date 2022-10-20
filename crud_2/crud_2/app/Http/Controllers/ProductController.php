<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function products()
    {
        return view('products');
    }
    //add product
    public function addProduct(Request $request)
    {
    $request->validate(
        [
        'name' => 'required',
        'description' => 'required',
        'price' => 'required',

        ],
    [
    'name.required' => 'Name is required',
    'description.required' => 'Description is required',
    'price.required' => 'Price is required',

    ] );
    $product = new Product();
    $product->name = $request->name;
    $product->description = $request->description;
    $product->price = $request->price;
    $product->save();
    return response()->json([
        'status' => 'success',
        ]);

    }
    }
    ?>



