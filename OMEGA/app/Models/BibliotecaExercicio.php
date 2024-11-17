<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BibliotecaExercicio extends Model
{
    use HasFactory;

    // Nome da tabela no banco de dados
    protected $table = 'BibliotecaExercicio';

    // Nome da chave primária (se não for 'id')
    protected $primaryKey = 'Id_Exerc';

    // Indica que a tabela não possui timestamps
    public $timestamps = false;

    // Permite inserção em massa de campos específicos
    protected $fillable = [
        'NomeExercicio',
        'Tipo_Exerc',
        'CodigoAdm'
    ];
}
