<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id('review_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('shop_id');
            $table->integer('rate');
            $table->string('manu');
            $table->integer('price');
            $table->text('review');
            $table->unsignedBigInteger('genre_id');
            $table->unsignedBigInteger('staple_id');
            $table->timestamps();
            
            // 外部キー制約
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('no action');
            $table->foreign('shop_id')->references('shop_id')->on('shops')->onDelete('no action');
            $table->foreign('genre_id')->references('genre_id')->on('genres')->onDelete('restrict');
            $table->foreign('staple_id')->references('staple_id')->on('staples')->onDelete('restrict');
            
            //重複制約　ユーザー名　店、reviewが重複したらだめ
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
};
