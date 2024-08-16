@extends('layout')

@section('title', 'Cliente | ' . $cliente->nombres)

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h2 class="mb-0">{{ $cliente->nombres }}</h2>
            <div>
                <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-outline-light mr-2">
                    <i class="fas fa-edit"></i> Editar
                </a>
                <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger" onclick="return confirm('¿Estás seguro de querer eliminar este cliente?')">
                        <i class="fas fa-trash-alt"></i> Eliminar
                    </button>
                </form>
            </div>
        </div>
        <div class="card-body bg-light">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Dirección:</strong> {{ $cliente->direccion }}</p>
                    @if($cliente->email)
                        <p><strong>Email:</strong> {{ $cliente->email }}</p>
                    @endif
                    @if($cliente->fono)
                        <p><strong>Teléfono:</strong> {{ $cliente->fono }}</p>
                    @endif
                </div>
                <div class="col-md-6">
                    <p><strong>Cliente desde:</strong> {{ $cliente->created_at->format('d/m/Y') }}</p>
                    <p><strong>Última actualización:</strong> {{ $cliente->created_at->diffForHumans() }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .card-header {
        background-color: #343a40 !important;
        border-bottom: 1px solid #dee2e6;
    }
    .btn-outline-light {
        border-color: #f8f9fa;
        color: #f8f9fa;
    }
    .btn-outline-light:hover {
        background-color: #f8f9fa;
        color: #343a40;
    }
    .btn-outline-danger {
        border-color: #dc3545;
        color: #dc3545;
    }
    .btn-outline-danger:hover {
        background-color: #dc3545;
        color: #fff;
    }
    .card-body.bg-light {
        background-color: #f8f9fa !important;
    }
</style>
@endpush

@push('scripts')
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
@endpush
