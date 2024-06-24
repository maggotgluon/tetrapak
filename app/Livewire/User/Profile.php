<?php

namespace App\Livewire\User;

use App\Models\answers;
use Illuminate\Auth\Events\Validated;
use Livewire\Component;
use Livewire\Attributes\On; 

class Profile extends Component
{
    public $state=null;
    public $name,$age;

    public function render()
    {
        return view('livewire.user.profile');
    }
    public function goQuiz(){
        $validated = $this->validate([
            "name"=>"required|string|max:20",
            "age"=>"required|numeric"
        ]);
        $ans = answers::create([
            "name"=>$this->name,
            "age"=>$this->age
        ]);
        // dd($ans); 
        // return redirect()->route('ClientQuiz',$validated);
        return redirect()->route('ClientQuiz',$ans);
        // return redirect()->route('ClientQuiz', ["client_answer"=>answers::create([
        //         "name"=>$this->name,
        //         "age"=>$this->age
        //     ])]
        // );
        
        // $this->state='quiz';
    }

    #[On('postAdded')]
    public function goResult($result = null){
        dd($result);
        $this->state='result';
    }
}
