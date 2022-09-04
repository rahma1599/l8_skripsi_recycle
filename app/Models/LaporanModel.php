<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_tr_recycle';

    protected $fillable= [
        'Tanggal',
        'Kode_Barang',
        'Style',
        'Plant',
        'Shift/Group',
        'Size',
        'Size_Run',
        'Keterangan',
        'Jumlah',
        'Status',
    ];
}
