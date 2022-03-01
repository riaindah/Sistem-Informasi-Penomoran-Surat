<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisLayananBerkasRelation extends Model
{
    protected $table = 'jenis_layanan_berkas_relation';

    protected $fillable = [
        'berkas_id','jenisLayanan_id'
    ];
}
