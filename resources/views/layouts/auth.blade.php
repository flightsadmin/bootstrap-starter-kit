<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="{{ app('settings')['theme'] ?? 'light' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
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

<body>
    <div class="min-vh-100 d-flex align-items-center py-4 bg-body-tertiary">
        <main class="w-100">
            @if (isset($status))
                <div class="container mb-4">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="alert alert-success">
                                {{ $status }}
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            {{ $slot }}
        </main>
    </div>
</body>

</html>