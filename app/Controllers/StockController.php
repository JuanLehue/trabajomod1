<?php

namespace App\Controllers;

use App\Models\ProductosModel;

class StockController extends BaseController
{
    public function index()
    {
        $productosModel = new ProductosModel();
        $productos = $productosModel->findAll();

        return view('stock/index', ['productos' => $productos]);
    }

    public function verDetalle($productoId){
        $productosModel = new ProductosModel();
        $producto = $productosModel ->find($productoId);

        return view('stock/detalle', ['producto' => $producto]);
    }
}

