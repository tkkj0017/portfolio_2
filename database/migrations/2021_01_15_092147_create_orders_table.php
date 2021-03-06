<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order_key');
            $table->integer('item_id');
            $table->integer('quantity');
            $table->integer('subtotal');
            $table->integer('user_id');
            $table->string('email');
            $table->string('address');
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
        Schema::dropIfExists('orders');
    }
}
