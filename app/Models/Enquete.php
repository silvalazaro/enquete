<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquete extends Model
{
    use HasFactory;
    
    public function opcoes_enquetes(){
        return $this->hasMany(OpcaoEnquete::class);
    }
}
