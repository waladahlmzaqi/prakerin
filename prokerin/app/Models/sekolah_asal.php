<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sekolah_asal extends Model
{
    protected $table = "sekolah_asal";
    protected $guarded = [];
    public function siswa()
    {
        return $this->hasOne(Siswa::class, 'id', 'id_siswa');
    }
}
