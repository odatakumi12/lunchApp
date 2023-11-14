<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    
    // レビューを所有している店舗を取得
    public function shop()
    {
        return $this->belongsTo(Shop::class,'shop_id' ,'shop_id' );
    }
    
    // レビューを所有しているユーザーを取得
    public function user()
    {
        return $this->belongsTo(User::class,'user_id' ,'user_id');
    }
    
}
