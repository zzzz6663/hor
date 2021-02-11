<?php

namespace App\Http\Controllers\Profile;
use App\Comment;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class RoleController extends Controller
{
   public function valid_questionnaire(Request $request){
        $this->step($request,$request->step);
   }
    public function step(Request $request,$step){
        $data='';
       switch ($step){
           case 0:
               $data=$request->validate([
                   'day'=>'required',
                   'month'=>'required',
                   'year'=>'required',
                   'step'=>'required',
                   'gender'=>'required',
               ]);
               break;

       }
       return $data;
   }

}
