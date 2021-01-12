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
            $table->bigIncrements('id')->autoIncrement();
            $table->string('item_name');
            $table->text('detail');
            $table->integer('price');
            $table->string('image');
            $table->integer('stock');
            $table->tinyInteger('ctg_id');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->tinyInteger('delete_flg');
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
