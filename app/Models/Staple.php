<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staple extends Model
{
    use HasFactory;
    
    //StapleのShopsを取得
    public function shops()
    {
        return $this->hasMany(Shops::class,'staple_id' ,'staple_id');
    }
    
    //Stapleのreviewsを取得
    public function reviews()
    {
        return $this->hasMany(Reviews::class,'staple_id' ,'staple_id');
    }
}
