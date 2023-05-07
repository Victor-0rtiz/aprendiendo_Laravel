<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;

class DatosController extends Controller
{
    public function index (){
        $users = usuario::All();
        foreach ($users as $user) {
           $user["tecnologias"]= explode(",", $user["tecnologias"]);
        }
       
        return view("welcome", ["usuarios"=> $users]);
    }
}
