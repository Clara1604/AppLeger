<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delegues extends Model
{
    use HasFactory;
    protected $table = 'Delegue';
    protected $primaryKey = 'IdDel';

    // indicate if the ID is auto-imcremating
    public $incrementang = false;

    protected $connection = 'mysql';
    
    protected $keytype = 'string';

}