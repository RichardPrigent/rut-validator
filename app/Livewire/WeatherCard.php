<?php

namespace App\Livewire;

use Livewire\Component;

class WeatherCard extends Component
{
    public $temperature = '24°C';
    public $condition = 'Sunny';

    public function render()
    {
        return view('livewire.weather-card', ['temperature' => $this->temperature, 'condition' => $this->condition,]);
    }
}
