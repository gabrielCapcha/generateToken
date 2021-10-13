@extends('dashboard')

@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Felicidades</h3>
                    <div class="card-body">

                        <div class="form-group mb-3">
                            <h2>Su token es correcto</h2><br>
                            <h4>Informacion de usuario</h4>
                            <label for="names">Nombres y apellidos: {{ $names }} {{ $lastnames }}</label> <br>
                            <label for="document">Documento: {{ $document }}</label> <br>
                            <label for="email">Correo: {{ $email }}</label> <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
