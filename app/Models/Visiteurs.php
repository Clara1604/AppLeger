<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visiteurs extends Model
{
    use HasFactory;
    protected $table = 'Visiteur';
    protected $primaryKey = 'IdVis';

    // indicate if the ID is auto-imcremating
    public $incrementang = false;

    protected $connection = 'mysql';
    
    protected $keytype = 'string';

}
