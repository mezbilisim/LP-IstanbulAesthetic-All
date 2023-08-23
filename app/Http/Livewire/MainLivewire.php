<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MainLivewire extends Component
{
    public $data;

    public function syncValues($formPosition, $data)
    {
        $this->data = $data;
        $this->data['formPosition'] = $formPosition;
    }
}
