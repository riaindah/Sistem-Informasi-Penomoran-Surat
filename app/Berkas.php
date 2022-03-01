<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    protected $table = 'berkas';

    protected $fillable = [
        'namaPeserta','notas','spp_id','tanggal','keterangan'
    ];

    public function sumberSpp(){
        return $this->belongsTo(Spp::class,'spp_id');
    }

    public function jenisLayanan(){
        return $this->belongsToMany(JenisLayanan::class,'jenisLayanan_berkas_relation',
            'berkas_id','jenisLayanan_id')->withTimestamps();
    }
}
