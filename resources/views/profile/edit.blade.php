@extends('template')
<title>Editar Perfil de Usuario</title>

@section('contenido_gral')
@section('titulo')
        Editar Perfil
@endsection
        <main class="content">
            <div class="container-fluid">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    @include('profile.partials.update-profile-information-form')
                                </div>
                                <div class="col-6">
                                    @include('profile.partials.update-password-form')
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center" >
                                <div class="col-10">
                                    @include('profile.partials.delete-user-form')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection  
    
 
    


 