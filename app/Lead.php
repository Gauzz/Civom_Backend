<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $table = 'leads';
    public $timestamps = false;
    protected $fillable = ['assets','email','mobile_no'];
}
