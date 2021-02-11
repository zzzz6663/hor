<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function root (){
        $products=Product::where('show','1');
        dd($products->count());
//        Cart::add('293ad', 'Product 1', 1, 9.99, ['size' => 'large']);
//        Cart::tax( );
//        468399581342505c47f4615b81bedaa9
//        $cart=Cart::content();
//        $rowId = $cart->search(function ($cartItem, $rowId) {
//            return $cartItem->id === 12;
//        });
//        return ;
//        Cart::destroy( );
//        Cart::add([
//            ['id' => '293ad', 'name' => 'Product 1', 'qty' => 1, 'price' => 10.00,'tax'=>0],
//            ['id' => '4832k', 'name' => 'Product 2', 'qty' => 1, 'price' => 10.00, 'options' => ['size' => 'large']]
//        ]);
//
////        return Cart::count();;
//        return Cart::content() ;


        return 'ssss';
    }
    public function index(){
        return view('user.files.user_intro');
    }

    public function register(){
        return view('user.files.user_register');
    }
    public function login(){
        auth()->loginUsingId(1);
        return view('user.files.user_login');
    }



        public function user_create(Request $request){



        $data=$request->validate(
            [
                'name'=>'required|string|max:255',
                'mobile'=>'required_if:email,null|numeric|unique:users',
                'email'=>'required_if:mobile,null|string|email|max:255|unique:users'
            ]
        );




//        if ($request->mobile){
//             $data=$request->validate(
//                [
//                    'name'=>['required','string','max:255'],
//                    'mobile'=>['required','int' ,'unique:users']
//                ]
//            );
//        }
        $user=User::create($data);
        auth()->loginUsingId($user->id);
        return response()->json([
            'status'=>'suo',
            'ok'=>'ok'
        ]);

    }
}
