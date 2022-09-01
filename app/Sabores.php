<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sabores extends Model
{
    protected $table = 'sabores';
    public $timestamps = false;

    protected $fillable = ['nome', 'descricao'];
}
