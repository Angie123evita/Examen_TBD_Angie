@extends('layout')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Clientes</h2>
        <a href="{{ route('clientes.create') }}" class="btn btn-dark">
            <i class="fas fa-user-plus"></i> Nuevo Cliente
        </a>
    </div>

    @if ($clientes->isNotEmpty())
        <div class="row">
            @foreach ($clientes as $cliente)
                <div class="col-md-4 mb-4">
                    <div class="card bg-light shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title text-primary">
                                <a href="{{ route('clientes.show', $cliente->id) }}" class="text-decoration-none text-primary">
                                    {{ $cliente->nombres }}
                                </a>
                            </h5>
                            <p class="card-text">
                                <strong>ID:</strong> {{ $cliente->id }}<br>
                                <strong>Email:</strong> {{ $cliente->email ?? 'N/A' }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-4">
            {{ $clientes->links('pagination::bootstrap-4') }}
        </div>
    @else
        <div class="alert alert-warning text-center" role="alert">
            No existe ningún cliente que mostrar.
        </div>
    @endif
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
@endpush
