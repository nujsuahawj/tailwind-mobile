<?php

namespace App\Livewire\Components;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Dashboard extends Component
{
    #[Layout('livewire.components.layouts.app')]
    public function render()
    {
        return view('livewire.components.dashboard');
    }
}
