<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ATG extends Model
{

	protected $fillable = ['name','email','pincode'];
    public $timestamps = false; 
}
