<?php

namespace App\Livewire;

use App\Models\Setting;
use Livewire\Attributes\On;
use Livewire\Component;

class ThemeToggle extends Component
{
    public $theme = 'light';

    public function mount()
    {
        $this->theme = Setting::get('theme', 'light');
    }

    public function toggle()
    {
        $this->theme = $this->theme === 'light' ? 'dark' : 'light';
        Setting::set('theme', $this->theme);
        $this->dispatch('theme-updated', theme: $this->theme);
    }

    #[On('theme-updated')]
    public function syncTheme($theme)
    {
        $this->theme = $theme;
    }

    public function render()
    {
        return view('livewire.theme-toggle');
    }
}
