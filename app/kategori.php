<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
     protected $table = 'kategori';

    protected $fillable = [
        'namakategori','users_id'
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



}
