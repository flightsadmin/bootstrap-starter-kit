<button wire:click="toggle" class="btn btn-link nav-link p-0 text-decoration-none" title="Toggle Theme">
    @if($theme === 'light')
        <i class="bi bi-moon-stars-fill fs-5 text-secondary"></i>
    @else
        <i class="bi bi-sun-fill fs-5 text-warning"></i>
    @endif
</button>
