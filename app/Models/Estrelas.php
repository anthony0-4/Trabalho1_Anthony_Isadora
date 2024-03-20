<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estrelas extends Model
{
    use HasFactory;
    protected $table = "estrelas";
    //app/Models/
    protected $fillable = [
        "estrelas",
    ];
}
