<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Symptome extends Model
{
    protected $table='symptome';
    protected $primaryKey='id_symptome';
    protected $fillable=['description','id_malade'];
   
    public $timestamps=true;

    public function malade(){
        $this->belongsTo(Malade::class,'id_malade','id_malade');
    }
    use HasFactory;
}
