<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turmas extends Model
{
    protected $fillable= [
        'descricao',
        'vagas',
        'professor',
    ];
}