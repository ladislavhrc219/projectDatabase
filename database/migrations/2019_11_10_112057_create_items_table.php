<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('item_name', 200);
            $table->float('price_per_item', 8, 2);
            $table->longText('description');
            $table->decimal('in_stock', 8, 2);

            $table->timestamps();
        });



        Schema::table('items', function (Blueprint $table) {
            $table->unsignedBigInteger('charity_id');

            $table->foreign('charity_id')->references('id')->on('charities');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
