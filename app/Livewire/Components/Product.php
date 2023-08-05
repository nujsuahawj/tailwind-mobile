<?php

namespace App\Livewire\Components;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Product extends Component
{
    public $_no=1;
    #[Layout('livewire.components.layouts.app')]
    public function render()
    {
        return view('livewire.components.product');
    }
}
