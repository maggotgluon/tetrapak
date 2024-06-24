<?php

namespace App\Livewire\User;

use Livewire\Component;

class Result extends Component
{
    public $result,$name;
    public function mount($result=2, $name=null){
        // dd($result,$name);
    }
    public function render()
    {
        return view('livewire.user.result');
    }
    public function saveImages(){
        dd("save");
    }
    public function share(){
        dd("share");
    }
}
