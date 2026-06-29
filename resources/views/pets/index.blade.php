@extends('layouts.app')
@section('title', 'Listado de Mascotas')
@section('content')
<div class="card">
    <h2>Directorio de Mascotas</h2>

    @if(session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    <div class="actions">
        <a href="{{ route('pets.create') }}" class="btn">
            <i class="fa-solid fa-plus"></i> Registrar Nueva Mascota
        </a>
    </div>

    {{-- Buscador --}}
    <div style="background:white; border-radius:12px; padding:15px; margin-bottom:20px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
        <form method="GET" action="{{ route('pets.index') }}" style="display:flex; gap:10px; align-items:center;">
            <label style="font-weight:bold;">Filtrar:</label>
            <input
                type="text"
                name="buscar"
                placeholder="Especie (Ej. Gato)"
                value="{{ request('buscar') }}"
                style="flex:1; padding:8px 12px; border:1px solid #ccc; border-radius:8px;"
            >
            <button type="submit" class="btn">Buscar</button>
            <a href="{{ route('pets.index') }}" class="btn btn-secondary">Limpiar</a>
        </form>
    </div>

    {{-- Tabla --}}
    <div style="border-radius:12px; overflow:hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Especie</th>
                    <th>Edad</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pets as $pet)
                <tr>
                    <td>{{ $pet->id }}</td>
                    <td>{{ $pet->name }}</td>
                    <td>{{ $pet->species }}</td>
                    <td>{{ $pet->age }} años</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div style="margin-top: 20px;">
        {{ $pets->links() }}
    </div>
</div>
@endsection