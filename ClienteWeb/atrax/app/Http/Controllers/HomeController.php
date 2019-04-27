<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Taller;
use App\Cliente;

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
        $clientes = Cliente::all();
        $users = User::all();
        return view('tiquetes', compact(['clientes','users']));
    }
    public function tiqueteDetalle()
    {
        return view('tiquete-detalle');
    }
    public function talleres()
    {
        $talleres = Taller::all();
        return view('talleres', compact('talleres'));
    }
    public function usuarios()
    {
        if(Auth()->user()->rol === "tecnico") {
            return redirect('/home')->with('status', 'Solo los administradores pueden acceder al modulo usuarios.');
        }
        $users = User::all();
        $talleres = Taller::all();
        return view('usuarios', compact(['users','talleres']));
    }
    public function clientes()
    {
        $clientes = Cliente::all();
        return view('clientes', compact('clientes'));
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
        return redirect('/home')->with('status', 'Foto actualizada con exito.');
    }
    public function crearUsuario(Request $request)
    {
        $user = new User();
        $user->password = bcrypt('1234');
        $user->email = $request->email;
        $user->name = $request->name;
        $user->rol = 'tecnico';
        $user->save();
        $user->talleres()->attach($request->taller);
        return redirect('/usuarios')->with('status', 'Usuario creado.');
    }
    public function crearTaller(Request $request)
    {
        $taller = new Taller();
        $taller->nombre = $request->name;
        $taller->descripcion = $request->description;
        $taller->save();
        return redirect('/talleres')->with('status', 'Taller creado.');
    }
    public function crearCliente(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nombre = $request->nombre;
        $cliente->correo = $request->correo;
        $cliente->telefono = $request->telefono;
        $cliente->direccion = $request->direccion;
        $cliente->save();
        return redirect('/clientes')->with('status', 'Cliente creado.');
    }
}
