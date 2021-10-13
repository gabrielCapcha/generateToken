@extends('dashboard')

@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Generador de Token</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login.custom') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="q1">Correo</label>
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <!-- PREGUNTAS DE SEGURIDAD -->
                            <div class="form-group mb-3">
                                <label for="q1">Primer nombre de su madre</label>
                                <input type="text" placeholder="Respuesta" id="q1" class="form-control" name="q1" autofocus>
                            </div>

                            <div class="form-group mb-3">
                                <label for="q2">Donde nacio tu padre</label>
                                <input type="text" placeholder="Respuesta" id="q2" class="form-control" name="q2" autofocus>
                            </div>

                            <div class="form-group mb-3">
                                <label for="q3">Nombre de primera mascota</label>
                                <input type="text" placeholder="Respuesta" id="q3" class="form-control" name="q3" autofocus>
                            </div>

                            <div class="form-group mb-3">
                                <label for="q4">Pelicula favorita</label>
                                <input type="text" placeholder="Respuesta" id="q4" class="form-control" name="q4" autofocus>
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Generar Token</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
