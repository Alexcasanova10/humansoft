<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{ asset('multimedia/logoIco.ico') }}" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	


	<title></title>
  
	
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/propioCss.css')}}">
	
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

	<style>
		#sideBarTop, .side-nav, .sidebar-itemv, .sidebar-link{
			background-color: #D99748 !important;
		}

		.sidebar-item{
			font-size: 16px;
 		} 
		.sidebar-link:hover{
			border-left-color: #D94E41 !important;
			color: #fff;
 		}
		 .sidebar-item.active .sidebar-link {
    background: linear-gradient(90deg, rgba(59, 125, 221, .1), rgba(59, 125, 221, .088) 50%, transparent);
    border-left-color: #BF5A1F !important;
    color: #fff;
}

		.sidebar-item.active .sidebar-link:hover, .sidebar-item.active>.sidebar-link {
			background: linear-gradient(90deg, rgba(59, 125, 221, .1), rgba(59, 125, 221, .088) 50%, transparent);
			border-left-color: #BF5A1F !important; 
		}
 		
	</style>
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div id="sideBarTop" class="sidebar-content js-simplebar">
			    <a class="sidebar-brand" href="{{ route('dashboard') }}">
					<img class="mb-4 img-fluid" id="logoImage" src="{{ asset('storage/multimedia/logoGral.jpg') }}" alt="logoGral" width="350px" height="60">

                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Páginas
                    </li>

                    <li class="sidebar-item {{ Route::is('dashboard') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('dashboard') }}">
							<!-- //antes ruta name era dashboard, si hay error, mover name a dashboard -->
						<i class="fa-solid fa-house"></i><span class="align-middle">Inicio</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ Route::is('empleados') ? 'active' : '' }}">
                        <a class="sidebar-link"  href="{{ route('empleados') }}">
							<i class="fa-solid fa-user"></i> <span class="align-middle">Empleado</span>
                    	</a>
                    </li>

                    <li class="sidebar-item">
						<div id="calendar"></div>
                    </li>


                    <li class="sidebar-item {{ Route::is('asistencias') ? 'active' : '' }}">
                        <a class="sidebar-link"  href="{{ route('asistencias') }}">
 						<i class="fa-solid fa-users"></i>
						<span class="align-middle">Asistencias</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ Route::is('vacaciones') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('vacaciones') }}">
						<i class="fa-solid fa-plane"></i><span class="align-middle">Vacaciones</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ Route::is('nominas') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('nominas') }}">
						<i class="fa-solid fa-money-bill"></i> <span class="align-middle">Nóminas</span>
                        </a>
                    </li>
               

					<li class="sidebar-item {{ Route::is('calendar.index') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('calendar.index') }}">
						<i class="fa-solid fa-money-bill"></i> <span class="align-middle">Calendario</span>
                        </a>
                    </li>
                
               


                     

                    <li class="sidebar-header">
                     </li>

                    <li class="sidebar-item {{ Route::is('configuracion') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('configuracion') }}">
                        <i class="fa-solid fa-gear"></i> <span class="align-middle">Configuración</span>
                        </a>
                    </li>


                    <li class="sidebar-item {{ Route::is('profile.edit') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('profile.edit') }}">
                        <i class="fa-solid fa-address-card"></i> <span class="align-middle">Perfil</span>
                        </a>
                    </li>


                </ul>

		 
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

				<h1 class="h1">
					@yield('titulo')
				</h1>
           
            <div class="navbar-collapse collapse">
                        <ul class="navbar-nav navbar-align">
                            <li class="nav-item dropdown">
                                <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                                    <div class="position-relative">
                                        <i class="align-middle" data-feather="bell"></i>
                                        <span class="indicator">{{ $eventCount }}</span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
                                    <div class="dropdown-menu-header">
                                        Nueva Notificación
                                    </div>
									
                                    <div class="list-group">
									@foreach ($events as $event)
                                        <a href="{{ route('calendar.index') }}" class="list-group-item">
                                            <div class="row g-0 align-items-center">
                                                <div class="col-2">
                                                    <i class="text-danger" data-feather="alert-circle"></i>
                                                </div>
                                                <div class="col-10">
                                                    <div class="text-dark">{{ $event->event }}</div>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                    </div>
                                    <div class="dropdown-menu-footer">
                                        <a href="#" class="text-muted">Ver Todo</a>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="settings"></i>
                </a>

                                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
								<i class="fa-solid fa-user"></i> 
								<span class="text-dark">
								Hola {{ Auth::check() ? Auth::user()->name : 'UsuarioEjemploFalse' }}

									
								</span>


                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="{{ route('profile.edit') }}"><i class="align-middle me-1" data-feather="user"></i> Perfil</a>
                                     <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('configuracion') }}"><i class="align-middle me-1" data-feather="settings"></i> Configuración</a>
                                    <div class="dropdown-divider"></div>
									<form method="POST" action="{{ route('logout') }}">
											@csrf
											<a href="route('logout')"
											onclick="event.preventDefault();this.closest('form').submit();"class="dropdown-item">											<i class="fa-solid fa-right-from-bracket"> </i> Cerrar Sesión</a>
									</form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>


                @yield('contenido_gral')
        
            </div>
			
	</div>


    <script src="{{asset('assets/js/app.js')}}"></script>

	 
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: ["Chrome", "Firefox", "IE"],
					datasets: [{
						data: [4306, 3801, 1689],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger
						],
						borderWidth: 5
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 75
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: "bar",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "This year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
						barPercentage: .75,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script> 
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
			var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span title=\"Previous month\">&laquo;</span>",
				nextArrow: "<span title=\"Next month\">&raquo;</span>",
				defaultDate: defaultDate
			});
		});
	</script>


	<script src="https://kit.fontawesome.com/008a89072c.js" crossorigin="anonymous"></script>    


</body>

</html>