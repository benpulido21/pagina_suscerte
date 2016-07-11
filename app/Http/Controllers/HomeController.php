<?php
//declaracion de librerias
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//creamos la clase heredada del controlador
class HomeController extends Controller{
    //funcion del index
    public function index()
    {
        return View('index');
    }
    public function acreditacion()
    {
    	return View('acreditacion');
    }
    public function registro()
    {
    	return View('registro');
    }
    public function estampado()
    {
    	return View('estampado');
    }
    public function forense()
    {
    	return View('forense');
    }
}
?>


