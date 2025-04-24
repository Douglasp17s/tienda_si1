<?php

namespace App\Http\Controllers;

use App\Models\Producto;

class ProductoController extends Controller
{

    public function index()
    {
        // Obtener los productos activos y agruparlos por su categoría
        $productosPorCategoria = Producto::with('categoria')
            ->where('ESTADO', true)
            ->get()
            ->groupBy(fn($producto) => $producto->categoria?->CATEGORIA); // 👈 importante


        return view('welcome', compact('productosPorCategoria'));
    }




}

