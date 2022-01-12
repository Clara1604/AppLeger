<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secteurs extends Model
{
    use HasFactory;
    protected $table = 'Secteur';
    protected $primaryKey = 'SectCode';

    // indicate if the ID is auto-imcremating
    public $incrementang = false;

    protected $connection = 'mysql';
    
    protected $keytype = 'string';

}
