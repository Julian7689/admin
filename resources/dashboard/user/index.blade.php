@extends('layouts.user')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h1 class="text-2xl font-bold">Bienvenido, {{ Auth::user()->name }}</h1>
    <p class="mt-4">Este es tu panel de usuario personalizado.</p>
    <!-- Contenido adicional aquí -->
</div>
@endsection