<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblSuratmasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_suratmasuk', function (Blueprint $table) {
             $table->increments('id');
            $table->date('tanggalregistrasi');
            $table->date('tanggalnaskah');
            $table->string('asalnaskah');
            $table->string('nomornaskah');
            $table->string('perihalnaskah');
            $table->string('namakegiatan');
            $table->date('tanggalawal');
            $table->date('tanggalakhir');
            $table->string('tempatkegiatan');
            $table->text('arahan', 65535)->nullable();
            $table->bigInteger('users_id')->unsigned()->index('fk__suratmasuk_users_idx');

$table->integer('disposisi_id')->unsigned()->index('fk__disposisi_berita1_idx');
$table->integer('kepada_id')->unsigned()->index('fk__kepada_berita1_idx');

$table->integer('kategori_id')->unsigned()->index('fk__kategori_berita1_idx');

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
        Schema::dropIfExists('tbl_suratmasuk');
    }
}
