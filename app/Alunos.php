<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    protected $fillable= [
        'name',
        'data',
        'cidade',
        'bairro',
        'rua',
        'numero',
        'complemento'
    ];
}