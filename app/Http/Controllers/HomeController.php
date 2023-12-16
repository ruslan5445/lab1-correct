<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public $links;
    public $var1 = "Краткое описание сюда";
    public function __construct()
    {
            $this->links = ['home' => "Главная",'home1' => "О нас", 'home2' => "Контактные страницы"];
    }
    public function index()
    {
        return view ('home',['LINKS' => $this->links]);
    }

    public function about()
    {
        return view ('about',['VAR1'=>$this->var1]);
    }

    public function contact()
    {
        return view ('contact');
    }

    public function telephon(Request $request)
    {
        $var2=$request->input("phone");
        $var2 = str_replace("+", "", $var2);
        $var2 = str_replace("-", "", $var2);

        $var3=$request->input("text");
        $var3 = substr($var3, 0, 160);

        return view ('home',['VAR2'=>$var2,'VAR3'=>$var3, 'LINKS' => $this->links]);
    }
}