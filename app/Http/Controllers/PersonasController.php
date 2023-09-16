<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function index()
    {
        //pagina de inicio
        //$datos = Personas::all();
        //$datos = Personas::orderBy('id', 'desc')->paginate(3);
        $datos = Personas::orderBy('id', 'asc')->paginate(25);
        return view('profesor/inicio', compact('datos'));

    }

    public function create()
    {
        //el formulario donde nosotros agregamos datos

        return view('profesor/agregar');
    }

    public function store(Request $request)
    {
        //Sirve para guardar datos en la base de datos
        $personas = new Personas();
        $personas->id = $request->post('id');
        $personas->nombre = $request->post('nombre');
        $personas->edad = $request->post('edad');
        $personas->materia = $request->post('materia');
        $personas->anos_experiencia = $request->post('anos_experiencia');
        $personas->curso_codigo = $request->post('curso_codigo');
        $personas->save();

        return redirect()->route("personas.index")->with("success", "Agregado con exito!");
    }

    public function show($id)
    {
        //Servira para obtener un registro de nuestra tabla
        $personas = Personas::find($id);
        return view("profesor/eliminar", compact('personas'));
    }

    public function edit($id)
    {
        //Este método nos sirve para traer los datos que se van a editar
        //y los coloca en un formulario"
        $personas = Personas::find($id);
        return view("profesor/actualizar", compact('personas'));
        //echo $id;
    }

    public function update(Request $request, $id)
    {
        //Este método actualiza los datos en la base de datos
        $personas = Personas::find($id);
        $personas->id = $request->post('id');
        $personas->nombre = $request->post('nombre');
        $personas->edad = $request->post('edad');
        $personas->materia = $request->post('materia');
        $personas->anos_experiencia = $request->post('anos_experiencia');
        $personas->curso_codigo = $request->post('curso_codigo');
        $personas->save();

        return redirect()->route("personas.index")->with("success", "Actualizado con exito!");
    }

    public function destroy($id)
    {
        //Elimina un registro
       $personas = Personas::find($id);
       $personas->delete();
        return redirect()->route("personas.index")->with("success", "Eliminado con exito!");

    }
}
