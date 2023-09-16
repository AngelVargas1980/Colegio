<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Sede;
use Illuminate\Http\Request;

use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redirect;


class AlumnoController extends Controller
{

    protected $connection = 'alumnos';

    public function indexa()
    {
        //pagina de inicio
        //$datos = Personas::all();
        //$datos = Personas::orderBy('id', 'desc')->paginate(3);
        $datos = Alumno::orderBy('id', 'asc')->paginate(25);
        return view('alumno/inicio-alumno', compact('datos'));
    }

    public function createa()
    {
        //el formulario donde nosotros agregamos datos
        return view('alumno/agregar-alumno');
    }

    public function storea(Request $request)
    {



        try {
            $validateData = validator::make($request->all(), [
                'id' => 'required|integer',
                'nombre' => 'required|string',
                'edad' => 'required|integer ',
                'grado' => 'required|string',
                'promedio' => 'required|integer',
                'direccion' => 'required|string ',
                'telefono' => 'required|integer ',
                'correo' => 'required|string ',
                'sede_codigo' => 'required|integer',

            ])->safe()->all();


            //Sirve para guardar datos en la base de datos
            $alumnos = new Alumno();
            $alumnos->id = $validateData['id'];
            $alumnos->nombre = $validateData['nombre'];
            $alumnos->edad = $validateData['edad'];
            $alumnos->grado = $validateData['grado'];
            $alumnos->promedio = $validateData['promedio'];
            $alumnos->direccion = $validateData['direccion'];
            $alumnos->telefono = $validateData['telefono'];
            $alumnos->correo = $validateData['correo'];
            $alumnos->sede_codigo = $validateData['sede_codigo'];
            $alumnos->save();

            return redirect()->back()->with('success', ' creada correctamente');
        } catch (QueryException $e) {
            if ($e->getCode() === '22003') {
                // Error 22003: Valor numérico fuera de rango
                return redirect()->back()->with('error', 'Error al crear alumnos: Valor de sede fuera de rango');
            } else {
                // Otro error de clave foránea o error de base de datos
                return redirect()->back()->with('error', 'error de base de datos, SIIII escribiste una sede que no estaba : ' . $e->getMessage());
            }
        } catch (\Exception $e) {
            // Capturar excepción general
            // Manejar cualquier otro tipo de excepción que pueda ocurrir
            return redirect()->back()->with('error', 'Error de otro tipo fuera del crud publicación: ' . $e->getMessage());
        }
    }



    public function showa($id)
    {
        //Servira para obtener un registro de nuestra tabla
        $alumnos = Alumno::find($id);
        return view("alumno/eliminar-alumno", compact('alumnos'));
    }

    public function edita($id)
    {
        //Este método nos sirve para traer los datos que se van a editar
        //y los coloca en un formulario"
        $alumnos = Alumno::find($id);
        return view("alumno/actualizar-alumno", compact('alumnos'));
        //echo $id;
    }

    public function updatea(Request $request, $id)
    {
        //Este método actualiza los datos en la base de datos, esta en la vista actualizar
        $alumnos = Alumno::find($id);
        $alumnos->id = $request->post('id');
        $alumnos->nombre = $request->post('nombre');
        $alumnos->edad = $request->post('edad');
        $alumnos->grado = $request->post('grado');
        $alumnos->promedio = $request->post('promedio');
        $alumnos->direccion = $request->post('direccion');
        $alumnos->telefono = $request->post('telefono');
        $alumnos->correo = $request->post('correo');
        $alumnos->sede_codigo = $request->post('sede_codigo');
        $alumnos->save();

        return redirect()->route("alumnos.indexa")->with("success", "Actualizado con exito!");
    }

    public function destroya($id)


    {
//        Elimina un registro, se encuentra en la vista eliminar
        $alumnos = Alumno::find($id);
        $alumnos->delete();
        return redirect()->route("alumnos.indexa")->with("success", "Eliminado con exito!");
    }

}

