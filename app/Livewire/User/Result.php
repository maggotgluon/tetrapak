<?php

namespace App\Livewire\User;

use Livewire\Component;

class Result extends Component
{
    public $result;
    public function mount($result=2, $name=null){
        dd($result,$name);
    }
    public function render()
    {
        return view('livewire.user.result');
    }
}
