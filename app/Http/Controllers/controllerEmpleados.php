<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\modelEmpleados;
use Illuminate\Support\Carbon;


class controllerEmpleados extends Controller
{
    public function index(){
        return view ('views_paneles.empleados');
    }
 

    public function getEmpleados(Request $request){
        $query = modelEmpleados::query();
    
        if ($request->has('nombre')) {
            $nombre = $request->input('nombre');
            $query->where('nombre', $nombre);
        }
    
        $estado = $request->input('estado', 'activo');
        $empleados = $query->where('estado', $estado)->get();
        
        return view('views_paneles.empleados')->with('empleados', $empleados);
    }



    public function filtrarEmpleados(Request $request){
        $estado = $request->input('estado', 'activo');
        return $this->getEmpleados($request);
    }


    public function actualizarEstado($id_empleado)
    {
        $empleado = modelEmpleados::find($id_empleado);
        $empleado->estado = 'Inactivo';
        $empleado->fecha_baja  = now();

        $empleado->save();
        
        return redirect()->route('empleados')->with('success', 'Empleado actualizado correctamente.');
    }
    
    public function reactivarEmp($id_empleado)
    {
        $empleado = modelEmpleados::find($id_empleado);
        $empleado->estado = 'Activo';
        $empleado->fecha_baja = null;
        $empleado->save();
        
        return redirect()->route('empleados')->with('success', 'Empleado reactivado correctamente.');
    }

     public function save(Request $request){

        $validado = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido_pat' => 'required|string|max:255',
            'apellido_mat' => 'required|string|max:255',
            'genero' => 'required|string|in:Masculino,Femenino,Otro',
            'fecha_nacimiento' => 'required|date|before_or_equal:' . Carbon::now()->subYears(18)->format('Y-m-d'),
            'fecha_ingreso' => 'required|date|after_or_equal:' . Carbon::now()->format('Y-m-d'),
            'puesto' => 'required|string|max:255',
            'salario' => 'required|numeric|min:0',
            'telefono' => 'required|digits:10',
            'curp' => 'required|string|max:18',  
            'nss' => 'required|string|max:11',  
            'estado_civil' => 'required|in:soltero,casado,divorciado,viudo',  
            'calle' => 'required|string|max:255',
            'num_exterior' => 'required|string|max:255', 
            'num_interior' => 'nullable|string|max:255',  
            'colonia' => 'required|string|max:255',
            'codigo_postal' => 'required|string|max:5', 
            'ciudad' => 'required|string|max:255',
        ]);


        $empleado = new modelEmpleados;

        $empleado->nombre = $request->input('nombre');
        $empleado->apellido_pat = $request->input('apellido_pat');
        $empleado->apellido_mat = $request->input('apellido_mat');
        $empleado->genero = $request->input('genero');
        $empleado->fecha_nacimiento = $request->input('fecha_nacimiento');
        $empleado->fecha_ingreso = $request->input('fecha_ingreso');
        $empleado->puesto = $request->input('puesto');
        $empleado->salario= $request->input('salario');
        $empleado->estado= 'Activo';
        $empleado->telefono = $request->input('telefono');
        
        $empleado->telefono = $request->input('telefono');
        $empleado->curp = $request->input('curp');
        $empleado->nss = $request->input('nss');
        $empleado->estado_civil = $request->input('estado_civil');
        $empleado->calle = $request->input('calle');
        $empleado->num_exterior = $request->input('num_exterior');
        $empleado->num_interior = $request->input('num_interior');
        $empleado->colonia = $request->input('colonia');
        $empleado->codigo_postal = $request->input('codigo_postal');
        $empleado->ciudad = $request->input('ciudad');
  
        $empleado->save();
        return redirect('/');
    }


    public function edit($id_empleado){
        $empleado = modelEmpleados::find($id_empleado);
        return view('views_paneles.editar_emp', compact('empleado'));
    }    
     
    public function update(Request $request, $id_empleado)
    {
        $empleado = modelEmpleados::find($id_empleado);
        
        $validado = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido_pat' => 'required|string|max:255',
            'apellido_mat' => 'required|string|max:255',

            'telefono' => 'required|digits:10',
            'puesto' => 'required|string|max:255',
            'salario' => 'required|numeric|min:0',
            'estado_civil' => 'required|in:soltero,casado,divorciado,viudo',  
             
        ]);
    
        $empleado->nombre = $request->input('nombre');
        $empleado->apellido_pat = $request->input('apellido_pat');
        $empleado->apellido_mat = $request->input('apellido_mat');
        $empleado->telefono = $request->input('telefono');
        $empleado->puesto = $request->input('puesto');
        $empleado->salario = $request->input('salario');
        $empleado->estado_civil = $request->input('estado_civil');
         


        $empleado->save();
    
        return redirect()->route('empleados')->with('success', 'Empleado actualizado correctamente.');
    }
 
}
