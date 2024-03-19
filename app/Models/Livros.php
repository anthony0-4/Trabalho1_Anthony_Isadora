<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livros extends Model
{
    use HasFactory;

    protected $table = "livros";
    protected $fillable = [
        "titulo",
        "autor",
        "paginas",
        "estrelas_id",
    ];
    protected $cast = [
        'estrelas_id'
    ];
    public function estrelas(){
        return $this->belongsTo(Estrelas::class,'estrelas_id');
    }
}
