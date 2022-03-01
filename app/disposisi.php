<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class disposisi extends Model
{
    //

      protected $table = 'disposisi';

    protected $fillable = [
        'disposisi','users_id'
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

