<?php

namespace App\Livewire;

use Livewire\Component;

class CurrencyCard extends Component
{
    public $currency = 'USD';
    public $value = '$1.23';
    public $change = '+0.5%';

    public function render()
    {
        return view('livewire.currency-card', [
            'currency' => $this->currency,
            'value' => $this->value,
            'change' => $this->change,
        ]);
    }
}
