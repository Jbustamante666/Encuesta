<?php

namespace App\Http\Livewire\Statistics;

use Livewire\Component;

class Survey extends Component
{
    public $option = 1;
    protected $queryString = ['option'];

    public function render()
    {
        return view('livewire.statistics.survey');
    }

    public function change($option)
    {
        $this->option = $option;
    }
}
