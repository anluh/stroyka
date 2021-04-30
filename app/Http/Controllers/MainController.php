<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;

class MainController extends Controller {

    public function index() {
        $products = Product::all()->take(7);
        return view('index', [
            'products' => $products,
        ]);
    }

    public function shop(Request $request) {
        $categoryObject = Category::all();
        $productsQuery = Product::query();
        $maxPrice = Product::max('price');

        $productsQuery->where('name', 'like', '%' . $request->search . '%');

        if ($request->filled('price_from')) {
            $productsQuery->where('price', '>=', $request->price_from);
        }
        if ($request->filled('price_to')) {
            $productsQuery->where('price', '<=', $request->price_to);
        }

        if ($request->filled('categories')) {
            $productsQuery->where(function ($query) use ($request) {
                foreach ($request->categories as $category) {
                    $query->orWhere('category_id', $category);
                }
            });
        }

        $products = $productsQuery->paginate(20)->withPath("?" . $request->getQueryString());
        return view('shop',
            [
                'products' => $products,
                'maxPrice' => $maxPrice,
                'queries' => $request->all(),
            ]);
    }

    public function product($id) {
        $product = Product::where('id', $id)->first();
        $related = Product::where('category_id', $product->category_id)->get()->take(4);

        return view('product', [
            'product' => $product,
            'related' => $related,
        ]);
    }

    public function service($id) {
        $service = Service::where('id', $id)->first();

        return view('service', [
            'service' => $service,
        ]);
    }
}
