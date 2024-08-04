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


    public function index()
    {
        // Obtener el valor del nombre del sitio
        $nombreSitio = DB::table('configuracion')
            ->where('key', 'nombre_sitio')
            ->value('value'); // Obtener el valor de la columna 'value'

        // Establecer un nombre predeterminado si no se encuentra ningún valor
        $nombreSitio = $nombreSitio ?? 'Inicio Materiales El Inge';
        Log::info('Nombre del sitio: ' . $nombreSitio); // Agrega esta línea para depurar

        // Pasar el nombre del sitio a la vista
        return view('dashboard', [
            'nombreSitio' => $nombreSitio
        ]);    
    }

   /*metodo anterior public function mostrarDashboard()
    {
        $conteoEmpleadosActivos = modelEmpleados::where('estado', 'activo')->count();

        $hoy = Carbon::today()->toDateString();
        $asistenciaHoy = modelAsistencias::where('estado_asistencia', 'asistencia')
                                          ->whereDate('fecha', $hoy)
                                          ->count();

        $pendientes = modelPendientes::where('estado_task', 'pendiente')->get();

        return view('dashboard', compact('conteoEmpleadosActivos', 'asistenciaHoy', 'pendientes'));
    }*/
    public function mostrarDashboard()
    {
        $conteoEmpleadosActivos = modelEmpleados::where('estado', 'activo')->count();
    
        $hoy = Carbon::today();
        $asistenciaHoy = modelAsistencias::where('estado_asistencia', 'asistencia')
                                          ->whereDate('fecha', $hoy)
                                          ->count();
    
        // Ajuste para la consulta de vacaciones activas
        $conteoEmpleadosVacaciones = modelVacaciones::where('fecha_inicio', '<=', $hoy)
                                                     ->where('fecha_fin', '>=', $hoy)
                                                     ->count();
    
        $pendientes = modelPendientes::where('estado_task', 'pendiente')->get();
    
        // Obtener todos los eventos
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
        // Validar el request
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
