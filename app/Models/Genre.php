<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    
    //GenreのShopsを取得
    public function shops()
    {
        return $this->hasMany(Shops::class,'genre_id' ,'genre_id');
    }
    
    //Genreのreviewsを取得
    public function reviews()
    {
        return $this->hasMany(Reviews::class,'genre_id' ,'genre_id');
    }
}
