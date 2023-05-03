<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $arreglo_usuarios = [
        [
            "img" => "https://th.bing.com/th/id/R.33bc35b2ce3bd42eeba9631ec0bd4583?rik=ldsLql9XPlRuUw&riu=http%3a%2f%2fwww.sintetia.com%2fwp-content%2fuploads%2f2012%2f05%2fFoto-perfil.jpg&ehk=Jdx%2bkW9YkW3ibyCHbcO9yjdF5e9wEdcDbzzPdeFPjzk%3d&risl=&pid=ImgRaw&r=0",
            "nombre" => "Juan",
            "apellido" => "Perez",
            "descripcion" => "Programador senior con 5 años de experienca en Java y .net, apasionado por la tecnologia",
            "url" => "https://www.linkedin.com/in/vneros/",
            "tecnologias"=>["java", "javascript", "php", "css"]
        ],
        [
            "img" => "https://th.bing.com/th/id/OIP.7nZJ1BGBTi8x0PXcM3XfiAHaJF?pid=ImgDet&rs=1",
            "nombre" => "Alicia",
            "apellido" => "Diaz",
            "descripcion" => "Programadora senior con 4 años de experienca en JavaScript y .net, apasionada por la tecnologia",
            "url" => "https://www.linkedin.com/in/vneros/",
            "tecnologias"=>["java", "javascript", "php", "css"]
        ],
        [
            "img" => "https://th.bing.com/th/id/OIP.R17MRgKKOu8ISJS4XO3YqwHaKP?pid=ImgDet&rs=1",
            "nombre" => "Pedro",
            "apellido" => "Pascal",
            "descripcion" => "Programadora senior con 4 años de experienca en JavaScript y .net, apasionada por la tecnologia",
            "url" => "https://www.linkedin.com/in/vneros/",
            "tecnologias"=>["java", "javascript", "php", "css"]
        ],
    ];
    return view('welcome', ["usuarios" => $arreglo_usuarios]);
});
