<?php

namespace App\Http\Controllers;

use App\Models\ShoppingCart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function index()
    {
        $items = ShoppingCart::with('producto')->where('user_id', auth()->id())->get();
        return view('shopping.index', compact('items'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'cantidad' => 'required|integer|min:1'
        ]);

        $item = ShoppingCart::where('user_id', auth()->id())
            ->where('producto_id', $request->producto_id)
            ->first();

        if ($item) {
            $item->increment('cantidad', $request->cantidad);
        } else {
            ShoppingCart::create([
                'user_id' => auth()->id(),
                'producto_id' => $request->producto_id,
                'cantidad' => $request->cantidad
            ]);
        }

        $cartCount = ShoppingCart::where('user_id', auth()->id())->sum('cantidad');
        if($request->expectsJson()) {
            return response()->json([
                'cartCount' => $cartCount
            ]);
        }
        return redirect()->route('shopping.index');
    }
}
