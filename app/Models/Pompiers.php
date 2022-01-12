<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pompiers extends Model
{
    use HasFactory;
    protected $table = 'pompiers';
    protected $primaryKey = 'Matricule';

    // indicate if the ID is auto-imcremating
    public $incrementang = false;

    protected $connection = 'mysql';
    
    protected $keytype = 'string';

    public function Caserne(){
        return $this->hasOne(Casernes::class, 'NumCaserne', 'NumCaserne');
    }
}
