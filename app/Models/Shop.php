<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    
    //ShopのReivewsを取得
    public function reviews()
    {
        return $this->hasMany(Reviews::class,'shop_id' ,'shop_id');
    }
    
    // 店舗を所有しているジャンルを取得
    public function genre()
    {
        return $this->belongsTo(Genre::class,'genre_id' ,'genre_id' );
    }
    
    // 店舗を所有している主食を取得
    public function staple()
    {
        return $this->belongsTo(Staple::class,'staple_id' ,'staple_id');
    }

}
