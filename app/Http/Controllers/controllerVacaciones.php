<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelEmpleados;
use App\Models\modelVacaciones;

class controllerVacaciones extends Controller
{
    public function index()
    {
        // Obtener el año actual
        $currentYear = date('Y');

        // Obtener las vacaciones activas en el año actual
        $vacaciones = modelVacaciones::whereYear('fecha_inicio', $currentYear)
            ->orWhereYear('fecha_fin', $currentYear)
            ->with('empleado')
            ->get();
        // Obtener los empleados activos para el formulario
        $empleados = modelEmpleados::where('estado', 'activo')->get();

        // Pasar los datos a la vista
        return view('views_paneles.vacaciones', compact('vacaciones', 'empleados'));
    }



    public function showAgregarVacaciones(Request $request)
    {
        $empleadoId = $request->input('id_empleado');

        if (!$empleadoId) {
            return redirect()->route('vacaciones')->with('error', 'No se ha seleccionado ningún empleado.');
        }

        $empleado = modelEmpleados::find($empleadoId);

        if (!$empleado) {
            return redirect()->route('vacaciones')->with('error', 'Empleado no encontrado.');
        }
        $fechaHoy = date('Y-m-d'); 




        return view('views_paneles.agregar_vacaciones', compact('empleado', 'fechaHoy'));
    }




    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_empleado' => 'required|exists:model_empleados,id_empleado',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
            'comentarios' => 'nullable|string',
        ]);

        // Calcular los días solicitados
        $fechaInicio = \Carbon\Carbon::parse($validatedData['fecha_inicio']);
        $fechaFin = \Carbon\Carbon::parse($validatedData['fecha_fin']);
        $diasSolicitados = $fechaFin->diffInDays($fechaInicio) + 1; // +1 para incluir ambos días

        $vacacion = new modelVacaciones();
        $vacacion->id_empleado = $validatedData['id_empleado'];
        $vacacion->fecha_inicio = $validatedData['fecha_inicio'];
        $vacacion->fecha_fin = $validatedData['fecha_fin'];
        $vacacion->dias_solicitados = $diasSolicitados;
        $vacacion->comentarios = $request->input('comentarios');
        $vacacion->fecha_Aprobacion = $request->input('fecha_Aprobacion');
        $vacacion->save();

        return redirect()->route('vacaciones')->with('success', 'Vacaciones agregadas exitosamente.');
    }



    public function edit($id_vacaciones)
    {
        // Obtener la información de la vacación
        $vacacion = modelVacaciones::findOrFail($id_vacaciones);
        $empleado = $vacacion->empleado; // Relación con el empleado

        return view('views_paneles.editar_vac', compact('vacacion', 'empleado'));
    }

    public function update(Request $request, $id_vacaciones)
    {
        // Validar la solicitud
        $request->validate([
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'dias_solicitados' => 'required|integer|min:1',
            'comentarios' => 'nullable|string',
        ]);
    
        // Obtener la vacación para actualizar
        $vacacion = modelVacaciones::findOrFail($id_vacaciones);
    
        // Actualizar los campos
        $vacacion->fecha_inicio = $request->input('fecha_inicio');
        $vacacion->fecha_fin = $request->input('fecha_fin');
        $vacacion->dias_solicitados = $request->input('dias_solicitados');
        $vacacion->comentarios = $request->input('comentarios');
        $vacacion->save();
    
        // Redirigir con un mensaje de éxito
        return redirect()->route('vacaciones')->with('success', 'Vacación actualizada exitosamente.');
    }

    public function destroy($id_vacaciones)
    {
        // Buscar el registro de vacaciones por ID
        $vacacion = modelVacaciones::findOrFail($id_vacaciones);
    
        // Eliminar el registro
        $vacacion->delete();
    
        // Redirigir con un mensaje de éxito
        return redirect()->route('vacaciones')->with('success', 'Vacación eliminada exitosamente.');
    }
















}
