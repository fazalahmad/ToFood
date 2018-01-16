<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class anggota_model extends Model
{
    protected $table = 'petugas';

    protected $fillable = [
        'nama', 'kelamin', 'alamat',
        'no_hp', 'foto',
    ];

    public function kerja()
    {
        return $this->hasMany('App\Model\jam_kerja_model','id_petugas','id_petugas');
    }
}
