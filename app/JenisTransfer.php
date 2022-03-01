<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisTransfer extends Model
{
    protected $table = 'jenisTransferPrioritas';

    protected $fillable = [
        'jenisTransfer'
    ];
}
