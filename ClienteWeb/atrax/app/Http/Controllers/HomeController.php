<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }
    public function tiquetes()
    {
        return view('tiquetes');
    }
    public function tiqueteDetalle()
    {
        return view('tiquete-detalle');
    }
    public function talleres()
    {
        return view('talleres');
    }
    public function usuarios()
    {
        return view('usuarios');
    }
    public function clientes()
    {
        return view('clientes');
    }
    public function facturas()
    {
        return view('facturas');
    }
    public function facturaDetalle()
    {
        return view('factura-detalle');
    }
    public function reportes()
    {
        return view('reportes');
    }
}
