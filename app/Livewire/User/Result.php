<?php

namespace App\Livewire\User;

use Livewire\Component;
use WireUi\Traits\Actions;

class Result extends Component
{
    use Actions;
    public $result,$name;
    public function mount($result=2, $name=null){
        // dd($result,$name);
    }
    public function render()
    {
        return view('livewire.user.result');
    }
    public function saveImages(){
        $this->dispatchBrowserEvent('save-updated');
        dd("yo");
        return response()->download('images/result/Result-'.$this->path.'-'.$this->result.'.png');
        
        // return Storage::download(asset('result/Result-1-1.png'));
    }
    public function share(){
        dd("share");
    }
}
