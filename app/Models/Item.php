<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'id', 'cat_id','name', 'about','Quantity', 'price','image'
    ];
}
