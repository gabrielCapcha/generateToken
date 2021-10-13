
@extends('dashboard')

@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Validacion de Token</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('validate.token') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="tittle">Ingrese Correo</label>
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label for="tittle">Ingrese Token</label>
                                <input type="text" class="form-control" id="token" name="token">
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Validar Token</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
