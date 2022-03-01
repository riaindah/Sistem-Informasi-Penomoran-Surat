<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBerkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berkas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namaPeserta');
            $table->string('notas');
            $table->date('tanggal');
            $table->text('keterangan')->nullable();
            $table->integer('spp_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('spp_id')
                ->references('id')
                ->on('spp')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berkas');
    }
}
