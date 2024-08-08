<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelEmpleados;
use App\Models\modelNominas;
use App\Mail\nominaCreado;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

use PDF;


class controllerNominas extends Controller
{
    
 
    public function index(Request $request)
    {
        $empleados = modelEmpleados::where('estado', 'activo')->get();
        $empleadoSeleccionado = null;

        if ($request->has('id_empleado')) {
            $empleadoSeleccionado = modelEmpleados::find($request->input('id_empleado'));
        }

        return view('views_paneles.nominas', compact('empleados', 'empleadoSeleccionado'));
    }

    public function indexListadoNominas(Request $request)
    {
        $empleados = modelEmpleados::where('estado', 'activo')->get();
        $empleadoSeleccionado = null;
        $nominas = [];


        if ($request->has('id_empleado')) {
            $empleadoSeleccionado = modelEmpleados::find($request->input('id_empleado'));
            $nominas = modelNominas::where('id_empleado', $empleadoSeleccionado->id_empleado)->get();
        }



        return view('views_paneles.lista_nominas', compact('empleados', 'empleadoSeleccionado','nominas'));
    }
 


    public function guardar(Request $request)
    {
        $request->validate([
            'id_empleado' => 'required|exists:model_empleados,id_empleado',
            'fecha_pago' => 'required|date',
            'correo' => 'required|email',
            'sueldo_bruto' => 'required|numeric',
            'sueldo_neto' => 'required|numeric',
            'deduccion_isr' => 'required|numeric',
            'deduccion_imss' => 'required|numeric',
            'concepto_deduccion' => 'nullable|string',
            'deducciones' => 'nullable|numeric',
            'concepto_bono' => 'nullable|string',
            'bonos' => 'nullable|numeric',
        ]);
    
        $nomina = modelNominas::create([
            'id_empleado' => $request->id_empleado,
            'fecha_pago' => $request->fecha_pago,
            'correo' => $request->correo,
            'sueldo_bruto' => $request->sueldo_bruto,
            'sueldo_neto' => $request->sueldo_neto,
            'deduccion_isr' => $request->deduccion_isr,
            'deduccion_imss' => $request->deduccion_imss,
            'concepto_deduccion' => $request->concepto_deduccion,
            'deducciones' => $request->deducciones,
            'concepto_bono' => $request->concepto_bono,
            'bonos' => $request->bonos,
            'estado_nomina' => 'pendiente',
        ]);
    
        $empleado = modelEmpleados::find($request->id_empleado);
        $pdf = PDF::loadView('pdf.nomina', compact('empleado', 'nomina'));
    
        $fileName = $nomina->id .$empleado->nombre. '_nomina.pdf';
        $filePath = storage_path('app/public/pdfs/nominas/' . $fileName);
    
         $pdf->save($filePath);
    
         $nomina->archivo_pdf = 'pdfs/nominas/' . $fileName;
        $nomina->save();
    
         Mail::to($request->correo)->send(new NominaCreado($empleado, $pdf));
    
         return response()->download($filePath);
    }
    
    


    public function generarNominaPdf(Request $request)
    {
        $empleado = Empleado::find($request->input('id_empleado'));
        $datosNomina = $request->all();

        $pdf = PDF::loadView('pdf.nomina', compact('empleado', 'datosNomina'));
        return $pdf->download('nomina.pdf');
    }



    public function verListadoNominas($empleadoId)
    {
        $nominas = Nomina::where('id_empleado', $empleadoId)->get();
    
        return view('views_paneles.lista_nominas', compact('nominas'));
    }



    
}
