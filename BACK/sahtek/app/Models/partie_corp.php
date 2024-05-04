<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partie_corp extends Model
{
    protected $table='parties_corp';
    protected $primaryKey='id_parties_corps';
    protected $fillable=['nom','description','photo'];

    public $timestamps=true;

    public function malade(){
        $this->hasMany(Malade::class,'id_parties_corps','id_parties_corps');
    }

    use HasFactory;
}
