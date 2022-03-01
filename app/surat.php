<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class surat extends Model
{
    //
     //
     protected $table = 'tbl_suratmasuk';

    protected $fillable = [
        'tanggalregistrasi','tanggalnaskah','asalnaskah','nomornaskah','perihalnaskah',
        'namakegiatan','tanggalawal','tanggalakhir','tempatkegiatan','arahan','users_id','disposisi_id'
        ,'kategori_id','kepada_id'
    ];


public function disposisi()
    {
        return $this->belongsTo(disposisi::class);
    }

public function kepada()
    {
        return $this->belongsTo(kepada::class);
    }

public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }


}
