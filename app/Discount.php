<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
   protected $fillable=['name','info_discount',
       'info_sale','code','type','sound','image','show',
       'remember','expired_at','count','final_price','percent','user'];


}
