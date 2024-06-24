<?php

namespace App\Livewire\Admin;

use App\Models\answers;
use Livewire\Component;

class Index extends Component
{
    public $data;
    public function mount(){
    }
    public function render()
    {
        $this->data = answers::all();
        return view('livewire.admin.index');
    }
}
