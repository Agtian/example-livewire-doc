<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $name = 'Agtian Ricky';
    public $load = false;
    public $greeting = 'Hello';
    public $hobby = [false];

    public function render()
    {
        return view('livewire.counter');
    }
}
