<x-slot:sidebar>
    <x-layouts.sidebar />
</x-slot:sidebar>

<div class="container-fluid">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h3 class="fw-semibold">Dashboard</h3>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-primary" wire:click="share" wire:loading.class="opacity-50" wire:target="share">
                    <i class="bi bi-share me-1" wire:loading.class="d-none" wire:target="share"></i>
                    <span wire:loading wire:target="share" class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>
                    Share
                </button>
                <button type="button" class="btn btn-sm btn-outline-primary" wire:click="export" wire:loading.class="opacity-50" wire:target="export">
                    <i class="bi bi-download me-1" wire:loading.class="d-none" wire:target="export"></i>
                    <span wire:loading wire:target="export" class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>
                    Export
                </button>
            </div>
            <div class="dropdown">
                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                    data-bs-toggle="dropdown" wire:loading.class="opacity-50" wire:target="setFilter">
                    <i class="bi bi-calendar3 me-1" wire:loading.class="d-none" wire:target="setFilter"></i>
                    <span wire:loading wire:target="setFilter" class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>
                    {{ $filter }}
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><button type="button" class="dropdown-item bi bi-calendar-day" wire:click="setFilter('Today')"> Today</button></li>
                    <li><button type="button" class="dropdown-item bi bi-calendar-week" wire:click="setFilter('This week')"> This week</button></li>
                    <li><button type="button" class="dropdown-item bi bi-calendar-month" wire:click="setFilter('This month')"> This month</button></li>
                    <li><button type="button" class="dropdown-item bi bi-calendar3" wire:click="setFilter('This year')"> This year</button></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="row g-3 mb-4">
        <div class="col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div>
                            <h6 class="card-title mb-2">Total Users</h6>
                            <h2 class="mb-1 fw-bold">2.6K</h2>
                            <p class="mb-0 text-success small">
                                <i class="bi bi-arrow-up me-1"></i>12.5% increase
                            </p>
                        </div>
                        <div class="p-2 bg-primary bg-opacity-10 rounded-3">
                            <i class="bi bi-people fs-5 text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div>
                            <h6 class="card-title mb-2">Revenue</h6>
                            <h2 class="mb-1 fw-bold">$32.5K</h2>
                            <p class="mb-0 text-danger small">
                                <i class="bi bi-arrow-down me-1"></i>2.1% decrease
                            </p>
                        </div>
                        <div class="p-2 bg-success bg-opacity-10 rounded-3">
                            <i class="bi bi-currency-dollar fs-5 text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div>
                            <h6 class="card-title mb-2">Orders</h6>
                            <h2 class="mb-1 fw-bold">1.2K</h2>
                            <p class="mb-0 text-success small">
                                <i class="bi bi-arrow-up me-1"></i>5.7% increase
                            </p>
                        </div>
                        <div class="p-2 bg-warning bg-opacity-10 rounded-3">
                            <i class="bi bi-cart fs-5 text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div>
                            <h6 class="card-title mb-2">Visitors</h6>
                            <h2 class="mb-1 fw-bold">4.8K</h2>
                            <p class="mb-0 text-success small">
                                <i class="bi bi-arrow-up me-1"></i>15.2% increase
                            </p>
                        </div>
                        <div class="p-2 bg-info bg-opacity-10 rounded-3">
                            <i class="bi bi-graph-up fs-5 text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-3">
        <!-- Recent Activity -->
        <div class="col-12 col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-transparent border-0">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Recent Activity</h5>
                        <button type="button" class="btn btn-sm text-decoration-none" wire:click="viewAll" wire:loading.class="opacity-50" wire:target="viewAll">
                            <span wire:loading.remove wire:target="viewAll">View All</span>
                            <span wire:loading wire:target="viewAll" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                        @foreach(['success', 'danger', 'warning', 'info', 'primary'] as $color)
                            <div class="list-group-item border-0">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="p-2 bg-{{ $color }} bg-opacity-10 rounded-3">
                                            <i class="bi bi-bell fs-5 text-{{ $color }}"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="mb-0">New order placed</h6>
                                            <small class="text-muted">2 hours ago</small>
                                        </div>
                                        <p class="text-muted small mb-0">John Doe placed a new order worth $150</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="col-12 col-lg-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-transparent border-0">
                    <h5 class="mb-0">Quick Actions</h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="{{ route('dashboard') }}" wire:navigate class="btn btn-outline-primary d-flex align-items-center justify-content-between text-decoration-none">
                            <span><i class="bi bi-plus-circle me-2"></i>New Project</span>
                            <i class="bi bi-chevron-right"></i>
                        </a>
                        <a href="{{ route('dashboard') }}" wire:navigate class="btn btn-outline-primary d-flex align-items-center justify-content-between text-decoration-none">
                            <span><i class="bi bi-people me-2"></i>Invite Team</span>
                            <i class="bi bi-chevron-right"></i>
                        </a>
                        <a href="{{ route('settings.profile') }}" wire:navigate class="btn btn-outline-primary d-flex align-items-center justify-content-between text-decoration-none">
                            <span><i class="bi bi-gear me-2"></i>Settings</span>
                            <i class="bi bi-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>