<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    protected $table = 'spp';

    protected $fillable = [
        'spp_name','singkatan'
    ];

    public function berkas(){
        return $this->hasOne(Berkas::class, 'spp_id');
    }
}