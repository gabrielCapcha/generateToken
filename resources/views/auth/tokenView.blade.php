@extends('dashboard')

@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Token generado</h3>
                    <div class="card-body">

                        <div class="form-group mb-3">
                            <h2>Su token es:</h2><br>
                            <h3>{{ $token }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
