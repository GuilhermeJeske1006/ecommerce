<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PayModal extends Component
{
    public $teste = "ola meu nome é guilherme";

    public function render()
    {
        return view('livewire.pay-modal');
    }
}
