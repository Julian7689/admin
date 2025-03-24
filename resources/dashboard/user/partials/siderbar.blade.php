<aside 
    x-show="sidebarOpen" 
    @click.away="sidebarOpen = false"
    class="fixed inset-y-0 left-0 w-64 bg-white shadow-lg z-20"
>
    <div class="p-4">
        <h2 class="text-xl font-semibold">Menú Usuario</h2>
        <nav class="mt-4 space-y-2">
            <a href="{{ route('user.dashboard') }}" class="block p-2 hover:bg-gray-100 rounded">Inicio</a>
            <a href="#" class="block p-2 hover:bg-gray-100 rounded">Perfil</a>
        </nav>
    </div>
</aside>