<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class jam_kerja_model extends Model
{
    protected $table = 'jam_kerja';

    public function anggotas()
    {
        return $this->belongsTo('App\Model\anggota_model');
    }
}
