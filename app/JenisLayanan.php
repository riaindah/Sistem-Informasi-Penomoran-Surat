<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisLayanan extends Model
{
    protected $table = 'jenisLayanan';

    protected $fillable = [
        'nama_jenis_layanan','kode'
    ];

    public function berkas(){
        return $this->belongsToMany(Berkas::class,'jenisLayanan_berkas_relation',
            'jenisLayanan_id','berkas_id');
    }
}
