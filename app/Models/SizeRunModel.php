<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SizeRunModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_m_size_run';
    protected $primarykey = 'id';

    protected $fillable= [
        'Size Run',

    ];
}
