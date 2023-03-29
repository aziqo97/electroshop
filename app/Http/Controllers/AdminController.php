<?php

namespace App\Http\Controllers;

use App\Models\PodCategory;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->role_id == '1') {
            return view('admin.admin');
        } elseif (auth()->user()->role_id == '2') {
            return view('admin.sotuvchi');
        } else {
            return abort(404, "page not found");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminlist()
    {
        if (auth()->user()->role_id == '1') {
            $admins = User::where("role_id",">",0)->get();
            return view('admin.adminlist', compact('admins'));
        }
    }
    public function addcategory()
    {
        if (auth()->user()->role_id == '1') {
            $categories = Category::all();
            return view('admin.addcategory', compact('categories'));
        }
    }
    public function postaddcategory(Request $request)
    {
        if (auth()->user()->role_id == '1') {
 $fileName = time() . '.png';
    $validated = $request->validate([
        'name' => 'required|max:25',
        'file' => 'image|mimes:jpeg,png,jpg|max:5000',
    ]);
    if($request->hasFile('photo')){
        $request->photo->move(public_path('category-photos'), $fileName);
    }
        if (isset($request->category)) {
            $category = Category::create([
                'name' => $request->name,
                'photo' => $fileName,
                'category' => $request->category,
            ]);
        } else {
            $category = Category::create([
                'name' => $request->name,
            ]);
        }
        return redirect('/admin/addcategory');
        }
    }
    public function addproduct()
    {


             $categories = Category::all();
            return view('admin.addproduct', compact('categories'));

    }
    public function postaddproduct(request $request)
    {
        if (auth()->user()->role_id == '1') {
        $cat = explode("_",$request->category);
            $validated = $request->validate([
                'name' => 'required|max:250',
                'price' => 'required|max:25',
                'category' => 'required|max:25',
                'file' => 'image|mimes:jpeg,png,jpg|max:50000',
            ]);
//$files = [];

            if ($request->file('photo')){

                foreach($request->file('photo') as $key => $file)

                {

                    $fileName = ''.time().rand(1,9999999).'.png';

                    $file->move(public_path('product-photos'), $fileName);

                    $files[] = $fileName;

                }

            }

            $a = json_encode($files);
            print_r($files);
            $product = Product::create([
                'name' => $request->name,
                'price' => $request->price,
                'comment' => $request->comment,
                'photos' => $a,
                'category' => $cat[0],
                'podkategory' => $cat[0],
            ]);
            return redirect('admin/addproduct');
        }
    }

    public function productslist()
    {
        $products = Product::orderBy('id')->paginate(50);
         return view('admin.productslist', compact('products'));
    }

    public function editslider()
    {
        return view('admin.editslider');
    }

    public function edittop3slide()
    {
         return view('admin.edittop3slide');
    }

    public function editbottom2()
    {
        return view('admin.editbottom2');
    }

}
