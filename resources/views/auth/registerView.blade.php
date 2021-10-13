@extends('dashboard')

@section('content')
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Registro de usuario</h3>
                    <div class="card-body">

                        <form action="{{ route('register.custom') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="names">Nombres</label>
                                <input type="text" placeholder="Nombres" id="names" class="form-control" name="names"
                                    required autofocus>
                                @if ($errors->has('names'))
                                <span class="text-danger">{{ $errors->first('names') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                            <label for="names">Apellidos</label>
                                <input type="text" placeholder="Apellidos" id="lastnames" class="form-control" name="lastnames"
                                    required autofocus>
                                @if ($errors->has('lastnames'))
                                <span class="text-danger">{{ $errors->first('lastnames') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label for="document">Documento</label>
                                <input type="text" placeholder="Documento" id="document" class="form-control" name="document"
                                    required autofocus>
                                @if ($errors->has('document'))
                                <span class="text-danger">{{ $errors->first('document') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label for="email_address">Correo</label>
                                <input type="text" placeholder="Correo" id="email_address" class="form-control" name="email_address" required autofocus>
                                @if ($errors->has('email_address'))
                                <span class="text-danger">{{ $errors->first('email_address') }}</span>
                                @endif
                            </div>
                            <!-- PREGUNTAS DE SEGURIDAD -->
                            <div class="form-group mb-3">
                                <label for="q1">Primer nombre de su madre</label>
                                <input type="text" placeholder="Respuesta" id="q1" class="form-control" name="q1" required autofocus>
                            </div>

                            <div class="form-group mb-3">
                                <label for="q2">Donde nacio tu padre</label>
                                <input type="text" placeholder="Respuesta" id="q2" class="form-control" name="q2" required autofocus>
                            </div>

                            <div class="form-group mb-3">
                                <label for="q3">Nombre de primera mascota</label>
                                <input type="text" placeholder="Respuesta" id="q3" class="form-control" name="q3" required autofocus>
                            </div>

                            <div class="form-group mb-3">
                                <label for="q4">Pelicula favorita</label>
                                <input type="text" placeholder="Respuesta" id="q4" class="form-control" name="q4" required autofocus>
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Registrarse</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
