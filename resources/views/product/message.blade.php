@extends('layouts.app')

@section('title', 'Confirmación de Producto')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mensaje del Producto</div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <p>Este es un mensaje de confirmación que indica que los datos del producto han sido validados correctamente.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
