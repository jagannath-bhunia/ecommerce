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
            $table->integer('cat_id')->unsigned();
            
            $table->string('name');
            $table->string('about');

            $table->string('Quantity');
            $table->string('price');
            $table->string('image');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('cat_id')
            ->references('id')
            ->on('catagories')
            ->onDelete('cascade');
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
