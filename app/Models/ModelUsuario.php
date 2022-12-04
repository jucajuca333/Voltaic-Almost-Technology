<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ModelUsuario extends Model
{
    protected $table = 'Usuario';
    protected $primaryKey = 'cd_usuario';
    protected $fillable = [
        'nm_email',
        'nm_senha',
        'nm_endereco'
    ];
}
