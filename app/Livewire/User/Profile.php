<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\Attributes\On; 

class Profile extends Component
{
    public $state=null;

    public function render()
    {
        return view('livewire.user.profile');
    }
    public function goQuiz(){
        $this->state='quiz';
    }

    #[On('postAdded')]
    public function goResult($result = null){
        dd($result);
        $this->state='result';
    }
}
