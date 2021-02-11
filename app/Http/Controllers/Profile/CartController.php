<?php

namespace App\Http\Controllers\Profile;
use App\Http\Controllers\Controller;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Product  $product){
        if ($this->get($product)){
            return response()->json([
                'status'=>'added',
            ]);
        }
        Cart::add(
            ['id' => $product->id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price ]
        );
        return response()->json([
            'status'=>'ok',
            'ok'=>'ok'
        ]);
    }

    public function remove(   $rowId){
        Cart::remove($rowId);
    }
    public function get(   $id){

        $cart=Cart::content();
        $rowId = $cart->search(function ($cartItem, $rowId) {
            return $cartItem->id === 5;
        });
     return   Cart::get($rowId);
    }
    public function content(    ){
        Cart::content();
    }
    public function destroy(    ){
        Cart::destroy();
    }
    public function total(    ){
        Cart::total();
    }
}
