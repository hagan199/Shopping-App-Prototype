<?php
namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return  $products;
    }

    public function store(Request $request)
{
    // Handle product creation logic here
}
    public function show(Product $product)
    {
        return response()->json(
            [
                "success" => true,
                "message" => "Product found",
                "data" => $product,
            ],
            Response::HTTP_OK
        );
    }

}
