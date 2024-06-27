<?php

namespace App\Livewire\User;

use App\Models\answers;
use Illuminate\Auth\Events\Validated;
use Livewire\Component;

class Profile extends Component
{
    public $state=null;
    public $page = 1;
    public $name,$age;
    public $answer;

    public function mount(){
        $this->answer = new answers();
    }
    public function render()
    {
        $this->answer->name = $this->name;
        $this->answer->age = $this->age;
        return view('livewire.user.profile');
    }
    public function nextPage($p=null){
        $validated = $this->validate([
            "name"=>"required|string|max:20",
            "age"=>"required|min:10|max:99|numeric"
        ]);
        $this->answer->name = $this->name;
        $this->answer->age = $this->age;
        // dd($this->answer);
        $this->answer->save();
        if($p){
            $this->page=$p;
        }else{
            $this->page+=1;
        }
    }

    public function goQuiz(){
        // $ans = answers::create([
        //     "name"=>$this->name,
        //     "age"=>$this->age
        // ]);

        // $ans = new answers();
        // $ans->name = $this->name;
        // $ans->age = $this->age;
        // dd($this->answer); 
        // return redirect()->route('ClientQuiz',$validated);
        return redirect()->route('ClientQuiz',$this->answer);
        // return redirect()->route('ClientQuiz', ["client_answer"=>answers::create([
        //         "name"=>$this->name,
        //         "age"=>$this->age
        //     ])]
        // );
        
        // $this->state='quiz';
    }

    // #[On('postAdded')]
    // public function goResult($result = null){
    //     dd($result);
    //     $this->state='result';
    // }
}
