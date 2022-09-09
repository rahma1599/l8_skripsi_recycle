<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_m_barang';
    protected $primarykey = 'id';
    public $timestamps = false;

    protected $fillable= [
        'id_barang',
        'style',
    ];
}
