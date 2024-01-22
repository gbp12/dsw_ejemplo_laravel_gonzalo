<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Página principal - Tienda online";

        return view("home.index")->with("viewData", $viewData);
    }

    // Controlador de la página "Acerca de"
    public function about()
    {
        $viewData = [];
        $viewData["title"] = "Acerca de - Tienda Online";
        $viewData["subtitle"] =  "Acerca de";
        $viewData["description"] =  "Esta es la página acerca de ...";
        $viewData["author"] = "Desarrollado por: DSW";

        return view("home.about")->with("viewData", $viewData);
    }

    public function products()
    {
        $viewData = [];
        $viewData["title"] = "Página principal - Tienda adada";
        return view("home.products");
    }
}
