<?php
//declaracion de librerias
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News;
use App\Categories;
use App\Images;
//creamos la clase heredada del controlador
class HomeController extends Controller{
    //funcion del index
    public function index()
    {
        

       //$cultura = \DB::table('news__news')->select('title','source','date_p','content')->where('id_category','1')->get();

       //dd($cultura);


        //return View('mostrar')->with('cultura',$cultura);
        $category = Categories::all();
        
         $news = News::all();

         $image = Images::all();


        return View('mostrar')->with('news',$news)->with('category',$category)->with('image',$image);
        
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
    public function noticiaid($id)
    {
      $news = News::find($id);
      $news->Category;
      dd($news);
    }
    public function noticias()
    {
        $news = News::all();
        return View('noticias',['news' => $news->toArray()]);
    }
    public function show($id)//($id)
    {
         $news = News::find($id);
         $image = Image::find($id);
         //$news = News::with('news')->get();
         $news->category;
         $news->titule;    
         $news->content;
         $news->date;
         $news->source;

         $image->news;

         //dd($news);
         //return View::make('noticiaid')->with('news',$news);
    if(!is_null($news) && !is_null($image))
      return View('noticiaid', ['news' => $news, 'image' => $image]);
    else
       return response('no encontrado', 404);
    }
    public function biblioteca()
    {
        return View('biblioteca');
    }
    public function verNoticias($id)
    {
         $noticia = News::find($id);

         return View('verNoticias', array('noticia' => $noticia));
    }
}
?>

    


