<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni607 extends Model
{
    protected $table = 'alumni607';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'nim',
        'namalengkap',
        'angkatan',
        'email',
        'no_telp',
        'alamat',
        'linkedin',
        'foto',
        'company',
        'job_title'
    ];
}
