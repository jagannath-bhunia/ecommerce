<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'book_id','user_id','country','f_name','l_name','address','city','state','zip','email','phone','payment','total'
    ];
}
