<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Helpers\cart\Cart;
use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dash');
    }

    public function dash(Request $request){

      if (  $request->input('category')){
          return $request->input('category');
      }
        $func= $pos=$request->pos;
       return $this->  $func($pos);
    }


    public function users(){
        $users=User::all();
        return response()->json([
            'body' => view('admin.menus.users', compact('users'))->render(),
//            '23' => '232',
        ]);
    }

    public function accounting(){
        $users=User::all();
        return response()->json([
            'body' => view('admin.menus.accounting', compact('users'))->render(),
//            'users' => $users,
        ]);
    }

    public function sms(){
        $users=User::all();
        return response()->json([
            'body' => view('admin.menus.sms', compact('users'))->render(),
//            'users' => $users,
        ]);
    }
    public function message(){
        $users=User::all();
        return response()->json([
            'body' => view('admin.menus.message', compact('users'))->render(),
//            'users' => $users,
        ]);
    }
    public function discount(){
        $users=User::all();
        $products=Product::where('show',1)->get();
        $categories=Category::paginate(2);
        return response()->json([
            'body' => view('admin.menus.offer', compact(['users','products']))->render(),
//            'users' => $users,
        ]);
    }
    public function staff(){
        $users=User::all();
        return response()->json([
            'body' => view('admin.menus.staff', compact('users'))->render(),
//            'users' => $users,
        ]);
    }
    public function income(){
        $users=User::all();
        return response()->json([
            'body' => view('admin.menus.income', compact('users'))->render(),
//            'users' => $users,
        ]);
    }

    public function comment(){
        $users=User::all();
        return response()->json([
//            'body' => view('admin.menus.income', compact('users'))->render(),
//            'users' => $users,
        ]);
    }

    public function product(){
        $products=Product::paginate(1);
        $categories=Category::all();
        return response()->json([
            'body' => view('admin.menus.product', compact(['products','categories']))->render(),
        ]);
    }
    public function category(){
        $users=User::all();
        $categories=Category::paginate(2);
        return response()->json([
            'body' => view('admin.menus.category', compact('users','categories'))->render(),
//            'users' => $users,
        ]);
    }
}
