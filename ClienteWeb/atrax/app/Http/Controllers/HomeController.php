<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
        if(Auth()->user()->rol === "tecnico") {
            return redirect('/home')->with('status', 'Solo los administradores pueden acceder al modulo usuarios.');;
        }
        $users = User::all();
        return view('usuarios', compact('users'));
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
    public function subirFoto(Request $request)
    {
        if ($request->hasFile('photo')) {
            if($request->file('photo')->isValid()) {
                try {
                    $file = $request->file('photo');
                    $name = time() . '.' . $file->getClientOriginalExtension();
                    $user = auth()->user();
                    $user->foto = 'storage/'.$name;
                    $request->file('photo')->move("storage", $name);
                    $user->save();
                } catch (Illuminate\Filesystem\FileNotFoundException $e) {

                }
            }
        }
        return redirect('/home');
    }
    public function crearUsuario(Request $request)
    {
        $user = new User();
        $user->password = bcrypt('1234');
        $user->email = $request->email;
        $user->name = $request->name;
        $user->rol = 'tecnico';
        $user->save();
        return redirect('/usuarios');
    }
}
