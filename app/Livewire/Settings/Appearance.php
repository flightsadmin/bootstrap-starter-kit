<?php

namespace App\Livewire\Settings;

use App\Models\Setting;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Appearance extends Component
{
    public $theme = 'light';

    public function mount()
    {
        $this->theme = Setting::get('theme', 'light');
    }

    public function updatedTheme($value)
    {
        Setting::set('theme', $value);
        $this->dispatch('settings-saved');
        $this->dispatch('theme-updated', theme: $value);
    }

    public function saveAppearance()
    {
        Setting::set('theme', $this->theme);
        $this->dispatch('settings-saved');
    }
}
