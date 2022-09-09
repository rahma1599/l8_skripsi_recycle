<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SizeModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_m_size';
    protected $primarykey = 'id';

    protected $fillable= [
        'size',

    ];
}
