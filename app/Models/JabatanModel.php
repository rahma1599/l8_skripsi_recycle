<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JabatanModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_m_jabatan';
    protected $primarykey = 'id';
    public $timestamps = false;

    protected $fillable= [
        'id_jabatan',
        'jabatan',
    ];
}
