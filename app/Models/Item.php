<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'item_id',
        'item_name',
        'detail',
        'price',
        'image',
        'ctg_id',
    ];
}
