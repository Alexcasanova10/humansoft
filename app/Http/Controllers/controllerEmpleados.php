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

    public function getEmpleados(){
        $empleados = modelEmpleados::all();
        return view('views_paneles.empleados')->with('empleados', $empleados);
    }

    public function actualizarEstado($id_empleado)
    {
        $empleado = modelEmpleados::find($id_empleado);
        $empleado->estado = 'Inactivo';
        $empleado->save();

        return redirect()->route('empleados')->with('success', 'Empleado actualizado correctamente.');
    }

    // public function indexEdit(){
    //     return view ('views_paneles.editar_emp');
    // }

    public function getEmpleadosEdit(){
        $modelEmpleados = modelEmpleados::all();
        
        return view('views_paneles.editar_emp', ['modelEmpleados',$modelEmpleados]);
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
        
        $empleado->save();
        return redirect('/');
        
        
    }
    
    public function update(Request $request, $id_empleado){
        $empleado = modelEmpleados::find($id_empleado);
        $input = $request->all();
        $empleado->fill($input)->save();

        return redirect('/');
     }











}
