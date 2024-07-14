@extends('template')
<title>Asistencias </title>

@section('contenido_gral')
    @section('titulo')
        Asistencias
	@endsection
    <main class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-xxl-9 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body">
                        <div class="d-flex justify-content-between mb-4">
             </div>
            


            <form class="row gy-2 gx-3 align-items-center p-4">
                <div class="col-3">
                    <label class="h6" for="autoSizingSelect">Nombre de Empleado</label>
                    <select class="form-select" id="autoSizingSelect">
                        <option selected>Empleado...</option>
                        <option value="1">Persona</option>
                        <option value="2">Persona</option>
                        <option value="3">Persona</option>
                        <option value="4">Persona</option>
                        <option value="5">Persona</option>
                        <option value="6">Persona</option>
                        <option value="7">Persona</option>
                        <option value="8">Persona</option>
                        <option value="9">Persona</option>
                        <option value="10">Persona</option>
                        <option value="11">Persona</option>
                        <option value="12">Persona</option>
                        <option value="13">Persona</option>
                        <option value="14">Persona</option>
                        <option value="15">Persona</option>
                        <option value="16">Persona</option>
                        <option value="17">Persona</option>
                        <option value="18">Persona</option>
                    </select>
                </div>
                <div class="col-3">
                    <label class="h6"
                        for="autoSizingSelect">Seleccionar Mes</label>
                    <select class="form-select" id="autoSizingSelect">
                        <option selected>Mes...</option>
                        <option value="1">Enero</option>
                        <option value="2">Febrero</option>
                        <option value="3">Marzo</option>
                        <option value="4">Abril</option>
                        <option value="5">Mayo</option>
                        <option value="6">Junio</option>
                        <option value="7">Julio</option>
                        <option value="8">Agosto</option>
                        <option value="9">Septiembre</option>
                        <option value="10">Octubre</option>
                        <option value="11">Noviembre</option>
                        <option value="12">Diciembre</option>
                    </select>
                </div>
                <div class="col-3">
                    <label class="h6" for="autoSizingSelect">Seleccionar Año</label>
                    <select class="form-select" id="autoSizingSelect">
                        <option selected>Año...</option>
                        <option value="1">1999</option>
                        <option value="2">2000</option>
                        <option value="3">2001</option>
                        <option value="4">2002</option>
                        <option value="5">2003</option>
                        <option value="6">2004</option>
                        <option value="7">2005</option>
                        <option value="8">2006</option>
                        <option value="9">2007</option>
                        <option value="10">2008</option>
                        <option value="11">2009</option>
                        <option value="12">2010</option>
                        <option value="13">2011</option>
                        <option value="14">2012</option>
                        <option value="15">2013</option>
                        <option value="16">2014</option>
                        <option value="17">2015</option>
                        <option value="18">2016</option>
                        <option value="19">2017</option>
                        <option value="20">2018</option>
                        <option value="21">2019</option>
                        <option value="22">2020</option>
                        <option value="23">2021</option>
                        <option value="24">2022</option>
                        <option value="25">2023</option>
                        <option value="26">2024</option>
                        <option value="27">2025</option>
                        <option value="28">2026</option>
                    </select>
                </div>
                
                <div class="col-3">
                    <button type="submit" class="btn mt-4 align-self-center form-control btn-primary">Buscar</button>
                </div>
            </form>
            <div class="container mt-2 table-responsive">
                <h2 class="h2 text-center text-white bg-primary rounded">MES: </h2>
                <table class="table table-bordered">
                    <thead>
                        <!--Esta columna hace referencia a los días del mes-->
                        <tr>
                            <th>Empleado</th>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                            <th>7</th>
                            <th>8</th>
                            <th>9</th>
                            <th>10</th>
                            <th>11</th>
                            <th>12</th>
                            <th>13</th>
                            <th>14</th>
                            <th>15</th>
                            <th>16</th>
                            <th>17</th>
                            <th>18</th>
                            <th>19</th>
                            <th>20</th>
                            <th>21</th>
                            <th>22</th>
                            <th>23</th>
                            <th>24</th>
                            <th>25</th>
                            <th>26</th>
                            <th>27</th>
                            <th>28</th>
                            <th>29</th>
                            <th>30</th>
                            <th>31</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td>Juan Pérez</td> 
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                        </tr>
                        <!--Esta columna hace referencia al segundo empleado-->
                        <tr>
                            <td>Mauricio Núñez</td><!-- Nombre de los empleados -->
                            <td><!-- Lista de asistencia por dia -->
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                        </tr>
                        <!--Esta columna hace referencia al tercer empleado-->
                        <tr>
                            <td>Juan Plazola</td><!-- Nombre de los empleados -->
                            <td><!-- Lista de asistencia por dia -->
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control">
                                    <option disabled
                                        selected>--Selecciona--</option>
                                    <option
                                        value="asistencia">Asistencia</option>
                                    <option value="falta">Falta</option>
                                    <option
                                        value="justificacion">Justificación</option>
                                </select>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>

                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('justi_Asista') }}">vista justificar falta></a>


        </div>
    </main>

@endsection