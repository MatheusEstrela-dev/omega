<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BibliotecaExercicio extends Model
{
    protected $table = 'BibliotecaExercicio'; // Nome da tabela
    protected $primaryKey = 'Id_Exerc'; // Define o campo primário da tabela
    public $incrementing = true; // Define se o campo primário é auto-incrementado
    protected $keyType = 'int'; // Tipo do campo primário

    // Desativa o controle de timestamps
    public $timestamps = false;

    // Campos que podem ser preenchidos em massa
    protected $fillable = ['NomeExercicio', 'Tipo_Exerc', 'CodigoAdm'];
}
