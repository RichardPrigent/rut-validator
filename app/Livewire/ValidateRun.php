<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\RunService;

class ValidateRun extends Component
{
    public $run;
    public $validatedRun;
    public $loading = false;

    protected $rules = ['run' => 'required|string',];
    public function validateRun()
    {
        $this->loading = true; // inicia el estado de carga
        $this->validate();
        $runService = app(RunService::class);
        $this->validatedRun = $runService->validateAndFormat($this->run);
        $this->loading = false; // finaliza el estado de carga
    }

    public function render()
    {
        return view('livewire.validate-run');
    }
}
