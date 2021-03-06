<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perusahaan extends Model
{
    protected $table = 'perusahaan';
    protected $guarded = [];
    public function data_prakerin()
    {
                                                      // foreign, owner key
        return $this->hasMany(data_prakerin::class, 'id_perusahaan', 'id');
    }
    public function jurnal_prakerin()
    {
                                                      // foreign, owner key
        return $this->hasMany(jurnal_prakerin::class, 'id_perusahaan', 'id');
    }
    public function jurnal_harian()
    {
                                                      // foreign, owner key
        return $this->hasMany(jurnal_harian::class, 'id_perusahaan', 'id');
    }

}
