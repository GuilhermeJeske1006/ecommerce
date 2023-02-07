<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Index(){
        $carrinho = session('cart', []);

        return view('contact.index', [
            'carrinho' => $carrinho
        ]);
    }
}
