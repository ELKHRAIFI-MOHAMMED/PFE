<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Malade extends Model
{
    protected $table='malade';
    protected $primaryKey='id_malade';
    protected $fillable=['nom','description','id_genre','id_specialite','id_parties_corps'];

    public $timestamps=true;

    public function parties_corp(){
        $this->belongsTo(Partie_corp::class,'id_parties_corps','id_parties_corps');
    }
    public function consigne(){
        $this->hasMany(Consigne::class,'id_consigne','id_consigne');
    }
    use HasFactory;
}
