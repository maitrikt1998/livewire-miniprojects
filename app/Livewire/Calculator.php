<?php

namespace App\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $result = '';

    public function calculate($value)
    {
        // Append the clicked button value to the result
        $this->result .= $value;
    }

    public function clear()
    {
        // Clear the result
        $this->result = '';
    }

    public function evaluate()
    {
        try {
            // Use PHP's eval function to evaluate the expression
            $this->result = eval('return ' . $this->result . ';');
        } catch (\Throwable $th) {
            // Handle any errors
            $this->result = 'Error';
        }
    }

    public function render()
    {
        return view('livewire.calculator');
    }
}
