<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View; 
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    public static $products = [
        ["id"=>"1", "name"=>"TV", "description"=>"Best TV", "price"=>5000],
        ["id"=>"2", "name"=>"iPhone", "description"=>"Best iPhone", "price"=>510],
        ["id"=>"3", "name"=>"Chromecast", "description"=>"Best Chromecast", "price"=>52],
        ["id"=>"4", "name"=>"Glasses", "description"=>"Best Glasses", "price"=>100]
    ];

    public function index(): View
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] =  "List of products";
        $viewData["price"] = "Price";
        $viewData["products"] = ProductController::$products;
        return view('product.index')->with("viewData", $viewData);
    }

    public function show(string $id) : View|RedirectResponse
    {
        $product = collect(ProductController::$products)->firstWhere('id', $id);
        if (!$product) {
            // Si el producto no existe, redirige al usuario a la página de inicio
            return redirect()->route('home.index');
        }
        
        $viewData = [];
        $viewData["title"] = $product["name"]." - Online Store";
        $viewData["subtitle"] =  $product["name"]." - Product information";
        $viewData["product"] = $product;
        $viewData["price"]= $product["price"]."- Price";
        return view('product.show')->with("viewData", $viewData);
    }
    public function create(): View
    {
        $viewData = []; //to be sent to the view
        $viewData["title"] = "Create product";

        return view('product.create')->with("viewData",$viewData);
    }

    public function save(Request $request)
    {
        $request->validate([
            "name" => "required",
            "price" =>'required|numeric|min:0.01'
        ]);
        return redirect()->route('product.message')->with('success', 'Producto validado con éxito. Aún no guardado en la base de datos.');
        dd($request->all());
        //here will be the code to call the model and save it to the database
       
    }
 
}

