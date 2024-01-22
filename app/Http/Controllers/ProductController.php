<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productos = [
        [
            'id' => 1,
            'nombre' => 'TV',
            'descripcion' => 'Descripción del Producto 1',
            'precio' => 19.99,
            'img' => "/img/game.png"
        ],
        [
            'id' => 2,
            'nombre' => 'Iphone',
            'descripcion' => 'Descripción del Producto 2',
            'precio' => 29.99,
            'img' => "/img/safe.png"
        ],
        [
            'id' => 3,
            'nombre' => 'Chromecast',
            'descripcion' => 'Descripción del Producto 3',
            'precio' => 39.99,
            'img' => "/img/submarine.png"
        ],
        [
            'id' => 4,
            'nombre' => 'Xbox',
            'descripcion' => 'Descripción del Producto 4',
            'precio' => 49.99,
            'img' => "/img/game.png"
        ],
        [
            'id' => 5,
            'nombre' => 'Playstation',
            'descripcion' => 'Descripción del Producto 5',
            'precio' => 59.99,
            'img' => "/img/safe.png"
        ],
        [
            'id' => 6,
            'nombre' => 'Nintendo',
            'descripcion' => 'Descripción del Producto 6',
            'precio' => 69.99,
            'img' => "/img/submarine.png"
        ],
        [
            'id' => 7,
            'nombre' => 'Laptop',
            'descripcion' => 'Descripción del Producto 7',
            'precio' => 79.99,
            'img' => "/img/safe.png"
        ],
        [
            'id' => 8,
            'nombre' => 'Monitor',
            'descripcion' => 'Descripción del Producto 8',
            'precio' => 89.99,
            'img' => "/img/game.png"
        ],
        [
            'id' => 9,
            'nombre' => 'Mouse',
            'descripcion' => 'Descripción del Producto 9',
            'precio' => 99.99,
            'img' => "/img/submarine.png"
        ],
    ];

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Productos - Tienda online";
        $viewData["productos"] = $this->productos;
        return view("products.index")->with("viewData", $viewData);
    }

    public function edit($id)
    {
        $viewData = [];
        $viewData["title"] = "Productos - Tienda online";
        $viewData["producto"] = $this->productos[$id - 1];
        return view("products.edit")->with("viewData", $viewData);
    }
}
