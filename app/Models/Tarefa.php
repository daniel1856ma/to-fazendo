<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'descricao',
        'projeto_id',
        'colaborador_id',
        'estado_id',
    ];


}
