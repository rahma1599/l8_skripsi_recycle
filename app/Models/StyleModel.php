<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StyleModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_m_style';
    protected $primarykey = 'id';

    protected $fillable= [
        'style',

    ];
}
