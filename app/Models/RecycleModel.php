<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecycleModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_tr_recycle';
    protected $primary_key = 'id';
    public $timestamps = false;

    protected $fillable = [
    'id_recycle',
    'tanggal',
    'id_barang',
    'style',
    'plant',
    'shift_group',
    'size',
    'jumlah',
    'status',
    'keterangan',
    ];
}
