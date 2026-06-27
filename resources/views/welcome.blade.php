<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="{{ app('settings')['theme'] ?? 'light' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center fs-4" href="{{ url('/') }}">
                <i class="bi bi-boxes text-primary me-2"></i>
                <span class="fw-semibold">{{ config('app.name') }}</span>
            </a>
            <div class="d-flex gap-2">
                @auth
                    <a href="{{ route('dashboard') }}" class="btn btn-sm btn-primary">
                        <i class="bi bi-grid me-2"></i>Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-sm btn-outline-primary">Sign in</a>
                    <a href="{{ route('register') }}" class="btn btn-sm btn-primary">Get started</a>
                @endauth
            </div>
        </div>
    </nav>

    <main class="flex-shrink-0">
        <div class="px-4 py-5 text-center">
            <div class="col-lg-6 mx-auto">
                <h1 class="display-5 fw-bold text-body-emphasis mb-3">Bootstrap Starter Kit</h1>
                <p class="lead mb-4">
                    A simple and modern starter kit built with Laravel and Bootstrap 5. Everything you need to start
                    your next project.
                </p>
                <div class="d-flex justify-content-center gap-2">
                    <a href="{{ route('register') }}" class="btn btn-sm btn-primary px-4">
                        <i class="bi bi-rocket me-2"></i>Get Started
                    </a>
                    <a href="https://github.com/flightsadmin/bootstrap-starter-kit"
                        class="btn btn-sm btn-outline-secondary px-4" target="_blank">
                        <i class="bi bi-github me-2"></i>Source Code
                    </a>
                </div>
            </div>
        </div>

        <div class="container py-5">
            <div class="row g-4 row-cols-1 row-cols-md-3 text-center">
                <div class="col">
                    <i class="bi bi-lightning-charge fs-2 text-primary mb-3"></i>
                    <h3>Fast</h3>
                    <p class="text-muted">Built for speed and performance</p>
                </div>
                <div class="col">
                    <i class="bi bi-shield-check fs-2 text-primary mb-3"></i>
                    <h3>Secure</h3>
                    <p class="text-muted">Security features built-in</p>
                </div>
                <div class="col">
                    <i class="bi bi-gear fs-2 text-primary mb-3"></i>
                    <h3>Flexible</h3>
                    <p class="text-muted">Easy to customize</p>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer mt-auto py-2 border-top">
        <div class="container text-center">
            <span class="text-muted">&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</span>
        </div>
    </footer>
</body>

</html>