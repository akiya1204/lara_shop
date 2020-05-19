<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    // $fillable : ホワイトリスト形式

    protected $fillable = [
        'crt_id',
        'customer_id',
        'item_id',
        'num',
        'delete_flg',
    ];
}
