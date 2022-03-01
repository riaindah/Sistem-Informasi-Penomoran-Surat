<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCashFlowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashFlow', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jenisSpp');
            $table->string('kodeSpp');
            $table->bigInteger('jumlah');
            $table->string('tanggal');
            $table->string('transfer');
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
        Schema::dropIfExists('cashFlow');
    }
}
