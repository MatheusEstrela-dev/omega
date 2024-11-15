<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $table = 'Aluno';

    protected $primaryKey = 'id_aluno';

    public $timestamps = false;

    // Campos permitidos para preenchimento em massa
    protected $fillable = [
        'nome',
        'email',
        'senha',
        'cpf',
    ];

    // Definindo os tipos de campo
    protected $casts = [
        'nome' => 'string',
        'email' => 'string',
        'senha' => 'string',
        'cpf' => 'string',
    ];
}


