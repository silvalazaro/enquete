<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpcaoEnquete extends Model
{
    use HasFactory;

    public function enquete(){
        return $this->belongsTo(Enquete::class);
    }

    public function resposta_enquetes(){
        return $this->hasMany(RespostaEnquete::class);
    }
}
