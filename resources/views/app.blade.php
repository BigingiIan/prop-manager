<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>EstateFlow | Property Management Dashboard</title>

        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <script>
            tailwind.config = {
                darkmode: "class",,
                theme: {
                    extend: {
                        colors: @json(config('tailwind.theme.extend.colors')),
                        fontFamily: @json(config('tailwind.theme.extend.fontFamily')),
                        borderRadius: @json(config('tailwind.theme.extend.borderRadius')),
                    }
                }
            }
        </script>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/ss2?family=Manrope:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

        <!-- Material Symbols and Maybe Icons -->
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
        
        <style>
            .material-symbols-outlined {
                font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
                display: inline-block;
                vertical-align: middle;
            }
            body {
                background-color: #f7fafc;
                color: #283439;
                -webkit-font-smoothing: antialiased;
            }
            .glass-nav {
                backdrop-filter: blur(12px);
                -webkit-backdrop-filter: blur(12px);
            }
        </style>

        <!-- If Not Using Vite -->
        <!-- 
        @routes
        @viteReactRefresh
        @vite(['resources/js/app.jsx', "resources/js/Pages/{$page['component']}.jsx"])
        @inertiaHead -->
    </head>
    <body class="font-body selection:bg-primary-container selection:text-on-primary-container">
    <!-- @inertia -->

    <!-- Fixed Top Navigation -->
        <nav class="fixed top-0 w-full z-50 bg-slate-50/85 dark:bg-slate-900/85 backdrop-blur-md shadow-sm dark:shadow-none">
            <div class="flex justify-between items-center px-6 py-3 max-w-full">
                <div class="flex items-center gap-8">
                    <span class="text-xl font-bold text-slate-800 dark:text-slate-100 tracking-tighter font-headline">EstateFlow</span>
                    <div class="hidden md:flex gap-6 items-center">
                        <a class="font-manrope text-sm font-semibold tracking-tight text-slate-900 dark:text-white border-b-2 border-slate-900 dark:border-white" href="{{ route('dashboard') }}">Home</a>
                        <a class="font-manrope text-sm font-medium tracking-tight text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors px-2 py-1 rounded" href="#">Properties</a>
                        <a class="font-manrope text-sm font-medium tracking-tight text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors px-2 py-1 rounded" href="#">Tenants</a>
                        <a class="font-manrope text-sm font-medium tracking-tight text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors px-2 py-1 rounded" href="#">Reports</a>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <button class="bg-primary hover:bg-primary-dim text-on-primary px-4 py-2 rounded-xl flex items-center gap-2 text-sm font-semibold active:scale-95 duration-200 shadow-sm transition-all">
                        <span class="material-symbols-outlined text-[20px]">add</span>
                        <span class="hidden sm:inline">Add Property</span>
                    </button>
                </div>
            </div>
            <div class="bg-slate-200/50 dark:bg-slate-800/50 h-[1px] w-full absolute bottom-0"></div>
        </nav>

        <!-- Main Content -->
        <main class="pt-24 pb-32 px-4 md:px-12 max-w-7xl mx-auto">
            @yield('content')
        </main>

        <!-- Bottom Navigation (Mobile) -->
        <nav class="md:hidden fixed bottom-0 left-0 w-full bg-white/85 dark:bg-slate-950/85 backdrop-blur-lg flex justify-around items-center pt-3 pb-6 px-4 z-50 rounded-t-2xl shadow-[0_-4px_12px_rgba(0,0,0,0.04)]">
            <a class="flex flex-col items-center justify-center text-slate-900 dark:text-white after:content-[''] after:w-1 after:h-1 after:bg-slate-900 dark:after:bg-white after:rounded-full after:mt-1 transition-all duration-300 ease-out" href="{{ route('dashboard') }}">
                <span class="material-symbols-outlined">home</span>
                <span class="font-inter text-[10px] font-medium uppercase tracking-widest mt-1">Home</span>
            </a>
            <a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 hover:text-slate-700 dark:hover:text-slate-300 transition-all duration-300 ease-out" href="#">
                <span class="material-symbols-outlined">domain</span>
                <span class="font-inter text-[10px] font-medium uppercase tracking-widest mt-1">Properties</span>
            </a>
            <a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 hover:text-slate-700 dark:hover:text-slate-300 transition-all duration-300 ease-out" href="#">
                <span class="material-symbols-outlined">group</span>
                <span class="font-inter text-[10px] font-medium uppercase tracking-widest mt-1">Tenants</span>
            </a>
            <a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 hover:text-slate-700 dark:hover:text-slate-300 transition-all duration-300 ease-out" href="#">
                <span class="material-symbols-outlined">analytics</span>
                <span class="font-inter text-[10px] font-medium uppercase tracking-widest mt-1">Reports</span>
            </a>
        </nav>

        <!-- Mobile FAB -->
        <div class="md:hidden fixed bottom-24 right-6 z-40">
            <button class="bg-primary shadow-lg w-14 h-14 rounded-full flex items-center justify-center text-on-primary active:scale-90 transition-transform">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">add</span>
            </button>
        </div>

    </body>
</html>
