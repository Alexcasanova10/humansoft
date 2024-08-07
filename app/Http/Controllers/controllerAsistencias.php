<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelAsistencias;
use App\Models\modelVacaciones;
use App\Models\modelEmpleados;
use Carbon\Carbon;

class controllerAsistencias extends Controller
{
    public function getEmpleadosAsist(Request $request)
    {
        $fecha = $request->input('fecha', Carbon::now()->toDateString());

        if (Carbon::parse($fecha)->greaterThan(Carbon::now())) {
            return redirect()->back()->withErrors(['fecha' => 'No se puede seleccionar una fecha futura']);
        }

        $empleados = modelEmpleados::where('estado', 'activo')->get();
        $asistencias = modelAsistencias::where('fecha', $fecha)->get()->keyBy('id_empleado');


        $vacaciones = modelVacaciones::where('fecha_inicio', '<=', $fecha)
            ->where('fecha_fin', '>=', $fecha)
            ->get()
            ->keyBy('id_empleado');


        return view('views_paneles.asistencias', compact('empleados', 'asistencias', 'fecha','vacaciones'));
    }

    public function storeAsistencias(Request $request)
    {
        $fecha = $request->input('fecha');
        $asistencias = $request->input('asistencia', []);

        foreach ($asistencias as $id_empleado => $estado_asistencia) {
            modelAsistencias::updateOrCreate(
                ['id_empleado' => $id_empleado, 'fecha' => $fecha],
                ['estado_asistencia' => $estado_asistencia]
            );
        }

        if (in_array('Justificación', $asistencias)) {
            return redirect()->route('justi_Asista');
        }

        return redirect()->route('asistencias', ['fecha' => $fecha]);
    }

    public function justificarAsistencia(Request $request)
    {
        $nombre = $request->input('nombre');
        $id_empleado = $request->input('id');
        $puesto = $request->input('puesto');
        $fecha = $request->input('fecha');
    
        return view('views_paneles.justi_Asista', compact('nombre', 'id_empleado', 'puesto', 'fecha'));
    }
    
 
    public function guardarJustificacion(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'id_empleado' => 'required|exists:model_empleados,id_empleado',
            'fecha_empleado' => 'required|date',
            'tipo_falta' => 'required|string',
            'motivo_falta' => 'required|string',
            'documentacion.*' => 'required|mimes:pdf'
        ]);
    
        // Obtener o crear el registro de asistencia
        $asistencia = modelAsistencias::updateOrCreate(
            [
                'id_empleado' => $request->id_empleado,
                'fecha' => $request->fecha_empleado,
            ],
            [
                'estado_asistencia' => 'Justificación',
                'tipo_falta_justi' => $request->tipo_falta,
                'motivo_justi' => $request->motivo_falta
            ]
        );
    
        // Verificar si se ha subido algún archivo
        if ($request->hasFile('documentacion')) {
            $filePaths = [];
            foreach ($request->file('documentacion') as $file) {
                $filePath = $file->store('justificaciones', 'public');
                $filePaths[] = $filePath;
            }
            $asistencia->justificante = json_encode($filePaths);
            $asistencia->save();
        }
    
        // Redirigir a la vista de asistencias
        return redirect()->route('asistencias', ['fecha' => $request->fecha_empleado]);
    }

    public function contarAsistencia(){
        $hoy = Carbon::today()->toDateString();
        $asistenciaHoy = modelAsistencias::where('estado_asistencia','asistencia')->whereDate('fecha',$hoy)->count();
        return view('dashboard', compact('asistenciaHoy'));



    }
    
    



    
}
