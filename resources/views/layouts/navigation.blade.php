<nav class="fixed left-0 top-0 h-screen w-64 bg-white dark:bg-gray-800 border-r border-gray-100 dark:border-gray-700 flex flex-col">

    <!-- Logo -->
    <div class="p-6">
        <h1 class="text-xl font-bold text-gray-700 dark:text-gray-300">Admin Panel</h1>
    </div>

    <!-- Navigation Links -->
    <div class="flex flex-col flex-grow space-y-4 p-4">
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="py-3">
            {{ __('Dashboard') }}
        </x-nav-link>
        <x-nav-link :href="route('dashboard')" class="py-3">
            {{ __('Users') }}
        </x-nav-link>
        <x-nav-link :href="route('dashboard')" class="py-3">
            {{ __('Orders') }}
        </x-nav-link>
        <x-nav-link :href="route('dashboard')" class="py-3">
            {{ __('Products') }}
        </x-nav-link>
        <x-nav-link :href="route('dashboard')" class="py-3">
            {{ __('Reports') }}
        </x-nav-link>
        <x-nav-link :href="route('dashboard')" class="py-3">
            {{ __('Settings') }}
        </x-nav-link>
    </div>

    <!-- Settings Dropdown -->
    <div class="relative p-4">
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button class="w-full flex justify-between items-center px-4 py-3 border border-transparent text-sm font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300">
                    <div>{{ Auth::user()->name }}</div>
                    <svg class="fill-current h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </x-slot>

            <x-slot name="content">
                <x-dropdown-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-dropdown-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>
    </div>
</nav>