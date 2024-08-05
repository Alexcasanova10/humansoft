<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelEmpleados;
use App\Models\modelAsistencias;
use App\Models\modelPendientes;
use App\Models\modelVacaciones;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class controllerDashboard extends Controller
{




    public function mostrarDashboard()
    {
        $conteoEmpleadosActivos = modelEmpleados::where('estado', 'activo')->count();
    
        $hoy = Carbon::today();
        $asistenciaHoy = modelAsistencias::where('estado_asistencia', 'asistencia')
                                          ->whereDate('fecha', $hoy)
                                          ->count();
    
        $conteoEmpleadosVacaciones = modelVacaciones::where('fecha_inicio', '<=', $hoy)
                                                     ->where('fecha_fin', '>=', $hoy)
                                                     ->count();
    
        $pendientes = modelPendientes::where('estado_task', 'pendiente')->get();
    
        $events = Event::all()->map(function($event) {
            return [
                'title' => $event->event,
                'start' => $event->start_date,
                'end' => $event->end_date
            ];
        });
    
        return view('dashboard', compact('conteoEmpleadosActivos', 'asistenciaHoy', 'conteoEmpleadosVacaciones', 'pendientes', 'events'));
    }
    
  
    
    public function storePendiente(Request $request)
    {
    
        $request->validate([
            'texto' => 'required|string|max:255',
        ]);

        // Crear el pendiente
        $pendiente = modelPendientes::create([
            'texto' => $request->input('texto'),
            'estado_task' => 'pendiente'
        ]);

        // Retornar la respuesta en JSON
        return response()->json($pendiente);
    }

    public function updatePendiente(Request $request, $id)
    {
        $pendiente = modelPendientes::findOrFail($id);
        $pendiente->estado_task = 'completado';
        $pendiente->save();

        return response()->json($pendiente);
    }

    public function deletePendiente($id)
    {
        $pendiente = modelPendientes::findOrFail($id);
        $pendiente->delete();

        return response()->json(['message' => 'Pendiente eliminado']);
    }
}
