<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $table = 'usuario';

    protected $nombre;
    protected $apellido;
    protected $numero;
    protected $url;
    protected $tecnologias;
    use HasFactory;
}
