<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.app')]
class Dashboard extends Component
{
    public $filter = 'This week';

    public function share()
    {
        sleep(1);
    }

    public function export()
    {
        sleep(1);
    }

    public function setFilter($filter)
    {
        sleep(1);
        $this->filter = $filter;
    }

    public function viewAll()
    {
        sleep(1);
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
