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
        Schema::create('shops', function (Blueprint $table) {
            $table->id('shop_id');
            $table->string('shop_name');
            $table->string('url')->unique(); // urlの重複を許さない 
            $table->decimal('average_rate',5,2);
            $table->decimal('average_price',8,2);
            $table->unsignedBigInteger('genre_id');
            $table->unsignedBigInteger('staple_id');
            $table->timestamps();
            
            // 外部キー制約
            $table->foreign('genre_id')->references('genre_id')->on('genres')->onDelete('restrict');
            $table->foreign('staple_id')->references('staple_id')->on('staples')->onDelete('restrict');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
};
