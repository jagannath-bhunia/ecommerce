<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'book_id','user_id','order_id','status','transaction_id','total','country','f_name','l_name','address','city','state','zip','email','phone','payment'
    ];
}
