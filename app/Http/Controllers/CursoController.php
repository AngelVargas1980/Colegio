<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{

    public function indexm()
    {
        $datos = Curso::orderBy('nombre', 'asc')->paginate(3);
        return view('curso/inicio-curso', compact('datos'));
    }


    public function createm()
    {
        return view('curso/agregar-curso');
    }


    public function storem(Request $request)
    {
        //Sirve para guardar datos en la base de datos
        $cursos = new Curso();
        $cursos->codigo = $request->post('codigo');
        $cursos->nombre = $request->post('nombre');
        $cursos->credito = $request->post('credito');
        $cursos->requisito = $request->post('credito');

        $cursos->save();

        return redirect()->route("cursos.indexm")->with("success", "Agregado con exito!");

    }


    public function showm($id)
    {
        //Servira para obtener un registro de nuestra tabla
        $cursos = Curso::find($id);
        return view("curso/eliminar-curso", compact('cursos'));
    }


    public function editm($id)
    {
        //Este método nos sirve para traer los datos que se van a editar
        //y los coloca en un formulario"
        $cursos = Curso::find($id);
        return view("curso/actualizar-curso", compact('cursos'));
        //echo $id;
    }


    public function updatem(Request $request, $id)
    {
        //Este método actualiza los datos en la base de datos
        $cursos = Curso::find($id);
        $cursos->codigo = $request->post('codigo');
        $cursos->nombre = $request->post('nombre');
        $cursos->credito = $request->post('credito');
        $cursos->requisito = $request->post('requisito');
//        $mercancias->fecha = $request->post('fecha');
        $cursos->save();

        return redirect()->route("cursos.indexm")->with("success", "Actualizado con exito!");

    }


    public function destroym($id)
    {
        //Elimina un registro
        $cursos = Curso::find($id);
        $cursos->delete();
        return redirect()->route("cursos.indexm")->with("success", "Eliminado con exito!");

    }
}
