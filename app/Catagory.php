<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    protected $fillable = [
        'id', 'cat_name'
    ];
}
