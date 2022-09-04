<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_m_status';
    protected $primarykey = 'id';

    protected $fillable= [
        'Status',
    ];
}
