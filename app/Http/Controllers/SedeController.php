<?php

namespace App\Http\Controllers;

use App\Models\Sede;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class SedeController extends Controller
{
    protected $connection = 'alumnos';

    public function indexs()
    {
        $datos = Sede::orderBy('id', 'asc')->paginate(25);
        return view('sede/inicio-sede', compact('datos'));
    }

        public function creates()
    {
        return view('sede/agregar-sede');
    }

       public function stores(Request $request)
    {
        //Sirve para guardar datos en la base de datos
        $sedes = new Sede();
        $sedes->id = $request->post('id');
        $sedes->nombre = $request->post('nombre');
        $sedes->direccion = $request->post('direccion');
        $sedes->telefono = $request->post('telefono');
        $sedes->correo = $request->post('correo');
//        $sedes->fecha = $request->post('fecha');
           $sedes->save();

        return redirect()->route("sedes.indexs")->with("success", "Agregado con exito!");
    }

    public function shows($id)
    {
        $sedes = Sede::find($id);
        return view("sede/eliminar-sede", compact('sedes'));
    }

    public function edits($id)
    {
        //Este método nos sirve para traer los datos que se van a editar
        //y los coloca en un formulario"
        $sedes = Sede::find($id);
        return view("sede/actualizar-sede", compact('sedes'));
        //echo $id;
    }

    public function updates(Request $request, $id)
    {
        //Este método actualiza los datos en la base de datos
        $sedes = Sede::find($id);
        $sedes->id = $request->post('id');
        $sedes->nombre = $request->post('nombre');
        $sedes->direccion = $request->post('direccion');
        $sedes->telefono = $request->post('telefono');
        $sedes->correo = $request->post('correo');
//        $sedes->fecha = $request->post('fecha');
        $sedes->save();

        return redirect()->route("sedes.indexs")->with("success", "Actualizado con exito!");
    }

    public function destroys($id)
    {
//        //Elimina un registro
//        $transportes = Sede::find($id);
//        $transportes->delete();
//        return redirect()->route("transportes.indext")->with("success", "Eliminado con exito!");
//


        try {
            $sedes = Sede::findOrFail($id);
            $sedes->delete();
            return redirect()->route('sedes.indexs')->with('success', 'El post ha sido eliminado exitosamente.');
        } catch (QueryException $e) {
            if ($e->getCode() === '23000') {
                return redirect()->route('sede/sedes.indexs')->with('error', 'No se puede eliminar el post debido a una violación de clave foránea.');
            } else {
                return redirect()->route('sede/sedes.indexs')->with('error', 'Ocurrió un error al eliminar el post.');
            }
        }




    }
}
