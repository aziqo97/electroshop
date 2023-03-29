<?php

namespace App\Http\Controllers;


use App\Models\PodCategory;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ForAllController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $engyangi = Product::orderBy('created_at')->take(6)->get();
        $category = Category::all();
        $cat = PodCategory::all();
        foreach ($category as $category) {

            $products = Product::where('category', $category->id)->get();

            $data[] = [
                'category' => $category,
                'products' => $products
            ];

        }
        return view('welcome', compact('data', 'cat', 'engyangi'));
    }

    public function single($id)
    {
        $prod = Product::where("id", "=", $id)->get();
        return view('components.pages.single', compact('prod'));
    }

    public function cat($id)
    {
        $products = Product::where('category' , $id)->paginate(12);
        $productlist = Product::where('category' , $id)->paginate(12);
        return view('components.pages.cat', compact('products', 'productlist'));
    }
    public function podcat($id)
    {
        $products = Product::where('podkategory' , $id)->paginate(12);
        $productlist = Product::where('podkategory' , $id)->paginate(12);
        return view('components.pages.podcat', compact('products', 'productlist'));
    }

    public function search()
    {
        $keyword = request()->query('keyword');
        $products= product::where('name','LIKE','%'.$keyword.'%')->paginate(12);
        $productlist = product::where('name','LIKE','%'.$keyword.'%')->paginate(12);
        return view('components.pages.search', compact('products', 'productlist'));
    }
    public function todayselled()
    {
        $todayselled = Product::whereDay('created_at', date('d'))->get();
        return view('components.pages.todayselled', compact('todayselled'));
    }
    public function mostselled()
    {
        $mostselled = Product::orderBy('selled')->take(20)->get();
        return view('components.pages.mostselled', compact('mostselled'));
    }
}
