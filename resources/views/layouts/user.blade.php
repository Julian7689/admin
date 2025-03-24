@extends('layouts.app') {{-- Hereda de Breeze --}}

@section('content')
<div x-data="{ sidebarOpen: false }" class="min-h-screen bg-gray-100">
    <!-- Sidebar (usando Alpine.js) -->
    @include('dashboard.user.partials.sidebar')

    <!-- Contenido dinámico -->
    <div :class="{ 'ml-64': sidebarOpen }" class="transition-all duration-300">
        <!-- Navbar -->
        @include('dashboard.user.partials.navbar')
        
        <!-- Aquí irá el contenido específico de cada página -->
        <main class="p-6">
            {{ $slot }}
        </main>
    </div>
</div>
@endsection