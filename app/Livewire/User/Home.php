<?php

namespace App\Livewire\User;

use Livewire\Component;

class Home extends Component
{
    public $page=1;

    public function render()
    {
        return view('livewire.user.home');
    }
    public function nextPage(){
        $this->page+=1;
    }
}
