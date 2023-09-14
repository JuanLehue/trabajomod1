<?php

namespace App\Controllers;

class Productos extends BaseController{
    public function index(){
        $db = \Config\Database::connect();
        $query = $db->query("SELECT nombre, precio, stock, codigo FROM productos");
        $resultado = $query->getResult();
        $data = ['titulo' => 'Catalogo de productos', 'productos' => $resultado];

        return view('welcome_message');
    }

    public function cat($id)
}
