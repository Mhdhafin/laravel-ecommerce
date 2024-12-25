<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ChartController extends Controller
{

    public function index()
    {


        return view('cart', [
            'title' => 'Cart'
        ]);
    }
    public function addproduct($id)
    {
        $products = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->get('cart', $cart);
            return redirect()->back();
        } else {
            $cart[$id] = [
                "name" => $products->name,
                "quantity" => $products->quantity,
                "price" => $products->price,
                "discount" => $products->discount,
                "image" => $products->image,
                "category" => $products->category
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('status', 'berhasil menambahkan ke keranjang');
    }


    public function addproductsnack($id)
    {
        $products = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back();
        } else {
            $cart[$id] = [
                "name" => $products->name,
                "quantity" => $products->quantity,
                "price" => $products->price,
                "discount" => $products->discount,
                "image" => $products->image,
                "category" => $products->category
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('status', 'berhasil menambahkan ke keranjang');
    }

    public function deleteproduct(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);

                session()->flash('success', 'Product Successfully Delete');
            }
        }
    }
    // public function jumlahPrice()
    // {
    //     $product = Product::all();

    //     $totalPrice = $product->sum('price');

    //     return view('cart', compact('totalPrice'), [
    //         'title' => 'Cart'
    //     ]);
    // }
}
