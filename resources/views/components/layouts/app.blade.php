<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="{{ app('settings')['theme']}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    <script>
        const getPreferredTheme = (theme) => {
            if (theme === 'system') {
                return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
            }
            return theme;
        }

        const applyTheme = (theme) => {
            document.documentElement.setAttribute('data-bs-theme', getPreferredTheme(theme));
            document.documentElement.setAttribute('data-theme-preference', theme);
        }

        applyTheme('{{ app('settings')['theme'] ?? 'light' }}');

        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
            const currentPref = document.documentElement.getAttribute('data-theme-preference');
            if (currentPref === 'system') {
                applyTheme('system');
            }
        });

        document.addEventListener('livewire:initialized', () => {
            Livewire.on('theme-updated', (event) => {
                applyTheme(event.theme);
            });
        });
    </script>
</head>

<body class="min-vh-100">
    <!-- Sidebar -->
    <div class="d-flex min-vh-100">
        <div class="sidebar border-end position-fixed h-100 d-none d-lg-block" style="width: 260px">
            {{ $sidebar ?? '' }}
        </div>
        <div class="sidebar-mobile position-fixed h-100 bg-light border-end collapse d-lg-none"
            style="width: 260px; z-index: 1045" id="sidebar">
            {{ $sidebar ?? '' }}
        </div>

        <!-- Main Content -->
        <div class="flex-grow-1">
            <div class="ps-lg-260px">
                <nav class="navbar d-lg-none">
                    <div class="container-fluid d-flex justify-content-between">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar"
                            aria-expanded="false">
                            <i class="bi bi-list"></i>
                        </button>
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>
                </nav>

                <main class="container-fluid py-2">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </div>
    <!-- Toast Container -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3" style="z-index: 1080;">
        <div x-data="{ toasts: [] }"
             x-on:notify.window="
                let toast = { id: Date.now(), message: $event.detail.message, type: $event.detail.type || 'success' };
                toasts.push(toast);
                setTimeout(() => { toasts = toasts.filter(t => t.id !== toast.id) }, 3000);
             ">
            <template x-for="toast in toasts" :key="toast.id">
                <div class="toast align-items-center border-0 show mb-2" 
                     :class="toast.type === 'success' ? 'text-bg-success' : 'text-bg-primary'"
                     role="alert" aria-live="assertive" aria-atomic="true"
                     x-transition.opacity.duration.300ms>
                    <div class="d-flex">
                        <div class="toast-body fw-medium" x-text="toast.message"></div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" @click="toasts = toasts.filter(t => t.id !== toast.id)" aria-label="Close"></button>
                    </div>
                </div>
            </template>
        </div>
    </div>
</body>

</html>