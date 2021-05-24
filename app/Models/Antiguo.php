<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antiguo extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class)->with('ficha');
    }
    public function ficha(){
        return $this->belongsTo(Ficha::class);
    }
}
