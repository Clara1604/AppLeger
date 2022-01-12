<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casernes extends Model
{
    use HasFactory;
    protected $table = 'casernes';
    protected $primaryKey = 'NumCaserne';

    public $inscrementing = false;
    
    protected $connection = 'mysql';

    public function Pompier(){
        return $this->hasMany(Pompiers::class, 'NumCaserne', 'NumCaserne');
    }
}
