<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengalaman extends Model
{
    protected $table = 'pengalaman';
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id');
    }
}
