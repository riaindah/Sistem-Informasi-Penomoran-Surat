<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cashflow extends Model
{
    protected $table = 'cashFlow';

    protected $fillable = [
      'jenisSpp','kodeSpp','tanggal','jumlah','transfer'
    ];

    public function jenisSpp(){
        return $this->belongsTo(JenisSpp::class,'jenisSpp');
    }

    public function kodeSpp(){
        return $this->belongsTo(JenisLayanan::class,'kodeSpp');
    }

    public function transfer(){
        return $this->belongsTo(JenisTransfer::class,'transfer');
    }
}
