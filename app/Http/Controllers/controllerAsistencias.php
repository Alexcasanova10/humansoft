<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelAsistencias;
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

        return view('views_paneles.asistencias', compact('empleados', 'asistencias', 'fecha'));
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
}
