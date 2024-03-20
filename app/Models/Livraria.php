<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livraria extends Model
{
    use HasFactory;

    protected $table = "livrarias";
    protected $fillable = [
        "nome",
        "endereco",
        "cnpj",
        "cidade",
        "estados_id",
    ];
    protected $cast = [
        'estados_id'
    ];
    public function estados(){
        return $this->belongsTo(Estados::class,'estados_id');
    }
}
