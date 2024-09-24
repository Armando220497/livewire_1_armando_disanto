<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{



    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function incrementBy($x)
    {
        $this->count += $x;
    }

    public function decrementBy($x)
    {
        $this->count -= $x;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
