<div class="d-flex flex-column h-100">
    <div class="p-4 border-bottom">
        <a href="{{ route('home') }}" class="text-decoration-none">
            <span class="fs-4 fw-semibold text-primary">{{ config('app.name') }} App</span>
        </a>
    </div>

    <div class="p-3 flex-grow-1 sidebar">
        <ul class="nav flex-column gap-1">
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                    wire:navigate href="{{ route('dashboard') }}">
                    <i class="bi bi-grid me-2"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('settings.*') ? 'active' : '' }}"
                    wire:navigate href="{{ route('settings.profile') }}">
                    <i class="bi bi-sliders me-2"></i> Settings
                </a>
            </li>
        </ul>
    </div>

    <div class="p-3 border-top">
        <div class="dropdown">
            <button class="btn btn-light d-flex align-items-center gap-2 w-100 border" type="button"
                data-bs-toggle="dropdown">
                <i class="bi bi-person-circle fs-5"></i>
                <div class="border p-1" style="border-radius: 20px">{{ auth()->user()->initials() }}</div>
                <div class="flex-grow-1 text-start text-truncate">{{ auth()->user()->name }}</div>
                <i class="bi bi-chevron-down opacity-50"></i>
            </button>
            <ul class="dropdown-menu w-100 shadow-sm">
                <li><a class="dropdown-item d-flex align-items-center" href="{{ route('settings.profile') }}">
                        <i class="bi bi-person me-2 opacity-50"></i> Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item d-flex align-items-center text-danger">
                            <i class="bi bi-box-arrow-right me-2 opacity-50"></i> Log Out
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>