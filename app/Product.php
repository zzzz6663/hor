<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable=['name','txt_after','color','img','txt_before','info','price','show','sound','day_p'];



  public function categoreis(){
        return $this->belongsToMany(Category::Class);
  }



  public function comments(){
      return  $this->morphMany(Comment::class,'commentable');
  }










}
