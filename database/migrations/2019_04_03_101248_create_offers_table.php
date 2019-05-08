<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->bigIncrements('id_offer');
            $table->integer('id_us')->unsigned();
            $table->foreign('id_us')->references('id')->on('users');
            $table->integer('id_pr')->unsigned();
            $table->foreign('id_pr')->references('id_p')->on('product');
            $table->integer('price');
            $table->string('country',30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('offers', function (Blueprint $table) 
            {
            $table->dropForeign('offers_users_id_foreign');
            $table->dropForeign('offers_users_id_p_foreign');
            $table->dropColumn('id');
            });
    }
}
