<?php

namespace App\Http\Controllers\Shop;
use Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add()
    {
        Cart::add(array(
            'id' => 456, // inique row ID
            'name' => 'Sample Item',
            'price' => 67.99,
            'quantity' => 4,
            'attributes' => array()
        ));
    }
}
