<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    //
   protected $table='assets';
   protected $fillable=['name','description','dae','fbx','texture','thumbnail'];
}
