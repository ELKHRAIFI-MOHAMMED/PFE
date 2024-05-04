<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medcin extends Model
{  
    protected $table='medcin';
    protected $primaryKey='id_medcin';
    protected $fillable=['nom_prenom','bio','id_specialite'];

    public function specialite(){
        $this->belongsTo(Specialite::class,'id_specialite','id_specialite');
    }
    use HasFactory;
}
