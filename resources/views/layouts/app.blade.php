<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }" x-init="$watch('darkMode', val => localStorage.setItem('darkMode', val))"
    x-bind:class="{ 'dark': darkMode }">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900">
    <div x-data="{ sidebarOpen: false }" class="min-h-screen">
        @include('layouts.sidebar')

        <div class="flex-1 flex flex-col min-h-screen transition-all duration-300 ease-in-out"
            :class="{ 'lg:ml-64': sidebarOpen, 'lg:ml-0': !sidebarOpen }">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="flex-grow">
                {{ $slot }}
            </main>
        </div>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </div>
    <script src="../path/to/flowbite/dist/flow.min.js"></script>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('darkModeToggle', () => ({
                darkMode: localStorage.getItem('darkMode') === 'true',
                init() {
                    this.$watch('darkMode', val => {
                        document.documentElement.classList.toggle('dark', val);
                    });
                    this.$nextTick(() => {
                        document.documentElement.classList.toggle('dark', this.darkMode);
                    });
                }
            }));
        });

        window.addEventListener('dark-mode-toggle', (event) => {
            document.documentElement.classList.toggle('dark', event.detail);
        });
    </script>

</body>

</html>
