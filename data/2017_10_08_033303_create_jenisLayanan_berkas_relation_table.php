<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJenisLayananBerkasRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenisLayanan_berkas_relation', function (Blueprint $table) {
            $table->integer('berkas_id')->unsigned()->index();
            $table->integer('jenisLayanan_id')->unsigned()->index();
            $table->timestamps();

            $table->primary(['berkas_id','jenisLayanan_id']);

            $table->foreign('berkas_id')
                ->references('id')
                ->on('berkas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('jenisLayanan_id')
                ->references('id')
                ->on('jenisLayanan')
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
        Schema::dropIfExists('jenisLayanan_berkas_relation');
    }
}
