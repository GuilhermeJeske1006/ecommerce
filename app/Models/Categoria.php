<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends RModel
{
    protected $table = "categorias";
    protected $fillable = ["Categoria"];
}