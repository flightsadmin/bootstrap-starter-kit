<x-slot:sidebar>
    <x-sidebar />
</x-slot:sidebar>

<div class="container-fluid">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-2 border-bottom">
        <h3 class="fw-semibold">Settings</h3>
        <h6 class="border fw-semibold p-1" style="border-radius: 50px">{{ auth()->user()->initials() }}</h6>
    </div>

    <div class="row">
        <div class="col-12">
            <ul class="nav nav-tabs mb-4">
                <li class="nav-item">
                    <a class="nav-link" wire:navigate wire:current="active"
                        href="{{ route('settings.profile') }}">
                        <i class="bi bi-person me-2"></i> Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" wire:navigate wire:current="active"
                        href="{{ route('settings.password') }}">
                        <i class="bi bi-key me-2"></i> Password
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" wire:navigate wire:current="active"
                        href="{{ route('settings.appearance') }}">
                        <i class="bi bi-palette me-2"></i> Appearance
                    </a>
                </li>
            </ul>
            {{ $slot }}
        </div>
    </div>
</div>