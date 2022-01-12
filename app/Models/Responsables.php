<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsables extends Model
{
    use HasFactory;
    protected $table = 'Responsable';
    protected $primaryKey = 'IdResp';

    // indicate if the ID is auto-imcremating
    public $incrementang = false;

    protected $connection = 'mysql';
    
    protected $keytype = 'string';

}
