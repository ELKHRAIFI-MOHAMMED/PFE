<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consigne extends Model
{
    protected $table='consigne';
    protected $primaryKey='id_consigne';
    protected $fillable=['description','id_malade'];
   
    public $timestamps=true;

    public function malade(){
        $this->belongsTo(Malade::class,'id_malade','id_malade');
    }
    use HasFactory;
}
