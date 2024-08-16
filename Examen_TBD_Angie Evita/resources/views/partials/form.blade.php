<div class="container mt-4">
    <h3 class="text-center">{{ isset($cliente->id) ? 'Editar Cliente' : 'Crear Cliente' }}</h3>
    <form action="{{ isset($cliente->id) ? route('clientes.update', $cliente) : route('clientes.store') }}" method="POST" class="mt-3">
        @csrf
        @if(isset($cliente->id))
            @method('PATCH')
        @endif

        <div class="row mb-3">
            <div class="col-md-6">
                <input type="text" class="form-control @error('nombres') is-invalid @enderror" placeholder="Nombres" id="nombres" name="nombres" value="{{ old('nombres', $cliente->nombres) }}" required maxlength="100">
                <div class="invalid-feedback">
                    @error('nombres')
                        {{ $message }}
                    @else
                        El nombre es requerido y no debe exceder los 100 caracteres.
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" id="email" name="email" value="{{ old('email', $cliente->email) }}" maxlength="35">
                <div class="invalid-feedback">
                    @error('email')
                        {{ $message }}
                    @else
                        El formato del correo electrónico no es válido o excede los 35 caracteres.
                    @enderror
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <input type="text" class="form-control @error('direccion') is-invalid @enderror" placeholder="Dirección" id="direccion" name="direccion" value="{{ old('direccion', $cliente->direccion) }}" required maxlength="50">
                <div class="invalid-feedback">
                    @error('direccion')
                        {{ $message }}
                    @else
                        La dirección es requerida y no debe exceder los 50 caracteres.
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <input type="tel" class="form-control @error('fono') is-invalid @enderror" placeholder="Teléfono" id="fono" name="fono" value="{{ old('fono', $cliente->fono) }}" maxlength="15">
                <div class="invalid-feedback">
                    @error('fono')
                        {{ $message }}
                    @else
                        El número de teléfono no debe exceder los 15 caracteres.
                    @enderror
                </div>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">{{ $btnText }}</button>
        </div>
    </form>
</div>
