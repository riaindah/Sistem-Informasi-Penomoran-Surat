<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKategori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('kategori', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namakategori');
             $table->bigInteger('users_id')->unsigned()->index('fk__kategori_users_idx');
           
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
         Schema::dropIfExists('kategori');
    }
}
