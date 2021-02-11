<?php

namespace App\Http\Controllers\Profile;
use App\Category;
use App\Comment;
use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
   public function index(){
       $user=auth()->user();
       return view('user.profile.dashboard',compact('user'));
   }
   public function shop(){
       $user=auth()->user();
       $categories=Category:: orderBy('id', 'DESC')->get() ;
       $products=Product::wherer('show','1') ;
       return view('user.profile.shop',compact(['user','categories','products']));
   }
   public function product(Product $product){

       $user=auth()->user();

       return view('user.profile.product',compact(['user' ,'product']));
   }
   public function pro_questionnaire(){
       $user=auth()->user();
       return view('user.profile.pro_questionnaire',compact('user'));
   }
   public function mails(){
       return view('user.profile.mails');
   }
   public function insert_user_comment(Request $request){
      $data= $request->validate([
           'comment'=>'required|min:10'
       ]);
    $user=auth()->user();
       $user->comments()->create([
           'comment'=>$data['comment'],
           'user_id'=>auth()->user()->id
       ]);
//     Comment::create([
//
//     ]);

       return response()->json([
           'status'=>'ok',
           'ok'=>'ok'
       ]);

   }
   public function select_questionnaire(){
       $user=auth()->user();
       return view('user.profile.questionnaire',compact('user'));

   }
   public function income(){
       $user=auth()->user();
       return view('user.profile.income',compact('user'));

   }
    public function logout(Request $request) {
        Auth::logout();
        return redirect(route('user.login'));
    }
   public function update_password(Request $request){
      $data= $request->validate([
           'password'=>'required|min:4|max:4'
       ]);
       $data['password']=User::encrypt_pass($data['password']);
       $request->user()->update([
           'password'=>$data['password']
       ]);

       return response()->json([
           'status'=>'suo',
           'ok'=>'ok'
       ]);

   }
}
