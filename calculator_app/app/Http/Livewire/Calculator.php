<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{


    public $material = 'aa';
    public $length = 24;
    public $width = 48;
    public $thickness = .25;


    public function render()
    {
        return view('livewire.calculator');
    }
}
