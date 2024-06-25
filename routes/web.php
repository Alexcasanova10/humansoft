<?php

use App\Http\Controllers\controllerEmpleados;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/login', function () {
//     return view('auth.login');
// });

Route::get('/',function(){
    return view('auth.login');
});
 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/empleados', function () {
    return view('views_paneles.empleados');
})->name('empleados');

Route::get('/', 'controllerEmpleados@index');
Route::get('/', 'controllerEmpleados@getEmpleados');
Route::post('/save', 'controllerEmpleados@save');

// Route::get('/', 'controllerEmpleados@getEmpleados');
// Route::get('/', 'controllerEmpleados@index');


 // Route::get('/empleados', [controllerEmpleados::class, 'getEmpleados'])->name('empleado.index');

Route::patch('/empleados/{id_empleado}/status', [controllerEmpleados::class, 'actualizarEstado'])->name('empleado.actualizarEstado');


Route::patch('/update/{id_empleado}',['as' => 'empleado.update', 'uses' => 'controllerEmpleados@update']);

Route::get('/empleados', [controllerEmpleados::class, 'getEmpleados'])->name('empleados');  
Route::get('/editar_emp', [controllerEmpleados::class, 'getEmpleadosEdit'])->name('empleados');
  





Route::get('/asistencias', function () {
    return view('views_paneles.asistencias');
})->name('asistencias');

Route::get('/nominas', function () {
    return view('views_paneles.nominas');
})->name('nominas');
 
Route::get('/vacaciones', function () {
    return view('views_paneles.vacaciones');
})->name('vacaciones');

Route::get('/agregar_emp', function () {
    return view('views_paneles.agregar_emp');
})->name('agregar_emp');

// Route::get('/modal_edit', function () {
//     return view('views_paneles.modal_edit');
// })->name('modal_edit');
 


Route::get('/editar_emp', function () {
    return view('views_paneles.editar_emp');
})->name('editar_emp');
 






Route::get('/configuracion', function () {
    return view('configuraciones.configuracion');
})->name('configuracion');





Route::get('/perfil', function () {
    return view('configuraciones.perfil');
})->name('perfil');
 


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
