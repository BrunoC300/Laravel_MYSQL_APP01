<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class fornecedor extends Model
{
    use HasFactory;
    protected $table = "fornecedores";
    //Trait - extensão 
    use SoftDeletes;
    protected $fillable = ['nome', 'site', 'email', 'pais'];
}
