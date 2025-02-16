<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
   protected $fillable = ['destination' , 'price' ,'duration' , 'img_path'];
}
