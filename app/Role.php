<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    CONST ADMIN = 1; // Definicion de las constantes que llevaran el valor, para identificar el rol de cada usuario.
    CONST TEACHER = 2;
    CONST STUDENT = 3;
}
