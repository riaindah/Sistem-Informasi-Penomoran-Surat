<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kepada extends Model
{
    //
     protected $table = 'kepada';

    protected $fillable = [
        'kepada','users_id'
    ];



public function surat()
    {
        return $this->belongsTo(surat::class);
    }

public function kepada()
    {
        return $this->belongsTo(kepada::class);
    }

public function disposisi()
    {
        return $this->belongsTo(disposisi::class);
    }


public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }




}
