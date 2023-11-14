<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Staple;
use App\Models\Shop;
use App\Models\User;
use App\Models\Review;
use Illuminate\Support\Facades\DB;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
          // getでreviews/にアクセスされた場合の「店舗に応じたレビュー一覧表示処理」
    public function indexByShop($shop_id)
    {
        // ソートキーとソート順をクエリパラメータから取得
        $sortKey = request('sort_key', 'created_at');
        $sortOrder = request('sort_order', 'desc');
        
        // ページネーションのためのクエリパラメータからページ数を取得
        $page = request('page', 1);
        
         $data = [];
         $reviewsWithUsers = DB::table('reviews')
         ->join('users','reviews.user_id','=','users.user_id')
         ->select('reviews.*','users.user_name')
         ->where('reviews.shop_id','=',$shop_id)
         ->orderBy($sortKey, $sortOrder)
         ->paginate(10, ['*'], 'page', $page);
    
    return view('reviews.review_list',['reviewsWithUsers' => $reviewsWithUsers]);
    }
         // getでreviews/にアクセスされた場合の「ユーザーに応じた一覧表示処理」
    public function indexByUser($user_id)
    {
         $data = [];
         $reviews = Review::where('user_id', $user_id)->orderBy('updated_at', 'desc')->paginate(10);
         $user = User::where('user_id', $user_id);
         $data = [
                'reviews' => $reviews,
                'user' => $user
                ];
    
    return view('reviews.review_list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
