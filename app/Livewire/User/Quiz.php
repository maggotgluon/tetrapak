<?php

namespace App\Livewire\User;

use Livewire\Component;

class Quiz extends Component
{
    public $score;
    public $current;
    public $answer=[];

    public function mount(){
        $this->current=1;
    }
    public function render()
    {
        return view('livewire.user.quiz');
    }

    public function result(){
        $this->dispatch('postAdded',1);
    }

    public function ansScore($quiz, $ans,$score){
        $this->score+=$score;
        $this->current=$quiz+1;
        $this->answer[$quiz]=$ans;
        if($quiz == 4){
            // dd($this->score,$this->answer);
            switch (true) {
                case $this->score <= 3:
                    $this->answer['type']='A';
                    // dd("0-3 คะแนน คนช่างเลือกแบบ 'เลือกอะไรก็ได้'");
                    break;
                case $this->score >= 4 && $this->score <= 6 :
                    $this->answer['type']='B';
                    // dd("4-6 คะแนน คนช่างเลือกแบบ 'เลือกพอเป็นพิธี'");
                    break;
                case $this->score >= 7 && $this->score <= 9 :
                    $this->answer['type']='C';
                    // dd("7-9 คะแนน คนช่างเลือกแบบ 'เลือกแล้วเลือกอีก'");
                    break;
                case $this->score >= 10 && $this->score <= 12 :
                    $this->answer['type']='D';
                    // dd("10-12 คะแนน คนช่ างเลื อกแบบ 'พิถีพิถัน ตัวมัมระดับเป๊ะ'");
                    break;
                
                default:
                    # code...
                    break;
            }
        } elseif($quiz == 5){
            // dd($ans);
            switch ($ans) {
                case 'b':
                    // dd("choose B or D");
                    $this->answer['group']=1;;
                    break;
                case 'd':
                    // dd("choose B or D");
                    $this->answer['group']=1;;
                    break;
                
                case 'a':
                    // dd("choose A or C");
                    $this->answer['group']=2;
                    break;
                case 'c':
                    // dd("choose A or C");
                    $this->answer['group']=2;
                    break;
                default:
                    # code...
                    break;
            }
            // dd($this->answer['group']);
        } elseif($quiz == 7 ){
            dd("2-1-"&$this->answer['type']);
            if($this->answer['group']==1){
                switch (true) {
                    case ($this->answer[6]=='a' || $this->answer[6]=='c') && ($this->answer[7]=='a' || $this->answer[7]=='c') :
                        # code...
                        $this->answer['milk']='almond';
                        return redirect(route('ClientResult',['result'=>"2-1-"&$this->answer['type']]));
                        dd("2 คะแนน ไปเลือกแบรนด์นมอัลมอนด์ในข้อถัดไป");
                        // 2
                        break;
                    
                    default:
                        # code...
                        $this->answer['milk']='macadamia';
                        return redirect(route('ClientResult',['result'=>"1-" & $this->answer['type'] ] ) );
                        dd("0-1 คะแนน 'นมแมคคาเดเมีย'");
                        // 1
                        break;
                }
            }else{
                switch (true) {
                    case ($this->answer[6]=='a' || $this->answer[6]=='c') && ($this->answer[7]=='c' || $this->answer[7]=='d') :
                        # code...
                        $this->answer['milk']='oat';
                        return redirect(route('ClientResult',['result'=>"4-1-"&$this->answer['type']]));
                        dd("2 คะแนน ไปชุดคําถาม 'นมโอ๊ต'");
                        // 4
                        break;
                    
                    default:
                        # code...
                        $this->answer['milk']='pistachio';
                        return redirect(route('ClientResult',['result'=>"3-1-"&$this->answer['type']]));
                        dd("0-1 คะแนน ไปชุดคําถาม 'นมพิสตาชิโอ'");  
                        // 3
                        break;
                }

            }

        }
    }
}
