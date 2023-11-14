<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Staple;
use App\Models\Review;
use App\Models\Shop;

class ShopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     // getでshops/にアクセスされた場合の「一覧表示処理」
       public function indexByGenre($genre_id)
    {
         $data = [];
         $shops = Shop::where('genre_id', $genre_id)->orderBy('average_rate', 'desc')->paginate(10);
         $data = [
                'shops' => $shops
                ];
    
    return view('shops.shop_list',$data);
}
        public function indexByStaple($staple_id)
    {
         $data = [];
         $shops = Shop::where('staple_id', $staple_id)->orderBy('average_rate', 'desc')->paginate(10);
         $data = [
                'shops' => $shops
                ];
    
    return view('shops.shop_list',$data);
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     // postでmessages/にアクセスされた場合の「新規登録処理」
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     // getでshops/（任意のid）にアクセスされた場合の「取得表示処理」
    public function show($shop_id)
    {
      $data = [];
         $shops = shops::where('shop_id', $shop_id);
         $data = [
             'shops' => $shops
             ];
    
    return view('shops.shop_detail',$data);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     // putまたはpatchでmessages/（任意のid）にアクセスされた場合の「更新処理」
    public function update(Request $request, $id)
    {
        //
    }

}
