<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CardController extends Controller
{
    public function cartloadbyajax()
    {
        if (isset($_COOKIE['tovar'])) {
            foreach ($_COOKIE['tovar'] as $l) {
                $pr = Product::find($l);
                $xammasi = Product::where('id', $l)->sum('price');
                $data[] = [
                    'product_id' => $pr->id,
                    'product_name' => $pr->name,
                    'product_price' => $pr->price,
                    'product_photos' => $pr->photos,
                ];
            }
            return view('components.cardproducts', compact('data', 'xammasi'));
        } else {
            return '<div class="empty__section-block">
                <img src="/images/cart-empty.svg" alt="empty">
                <p class="empty__section-bold">Savatchada xech narsa yoq</p>
            </div>';
        }
    }

    public function addtocart(Request $request)
    {
        $prod_id = $request->input('product_id');
        if (isset($_COOKIE['tovar'][$prod_id])) {
            setcookie('tovar['.$prod_id.']', "", time() - 3600);
        } else {
            setcookie('tovar['.$prod_id.']', $prod_id);
        }
    }

    public function cardlistall()
    {
        if (isset($_COOKIE['tovar'])) {
            foreach ($_COOKIE['tovar'] as $l) {
                $pr = Product::find($l);

                $data[] = [
                    'product_id' => $pr->id,
                    'product_name' => $pr->name,
                    'product_price' => $pr->price,
                    'product_photos' => $pr->photos,
                ];
            }
            return view('components.pages.cardlistall', compact('data'));
        } else {
            return '<div class="empty__section-block">
                <img src="/images/cart-empty.svg" alt="empty">
                <p class="empty__section-bold">Savatchada xech narsa yoq</p>
            </div>';
        }

    }

    public function delcart($id)
    {
        setcookie('tovar['.$id.']', "", time() - 60, "/", "", 0);
        return redirect()->back();
    }
}
