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
}
