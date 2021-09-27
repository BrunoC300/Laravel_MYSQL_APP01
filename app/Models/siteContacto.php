<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siteContacto extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'telefone', 'email', 'motivos_id', 'mensagem'];
}
