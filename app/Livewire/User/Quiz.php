<?php

namespace App\Livewire\User;

use App\Models\answers;
use Livewire\Component;

use Livewire\Attributes\Url;

class Quiz extends Component
{
    public $score;
    public $current;
    public $page=1;
    public $answer=[];
    
    public answers $client_answer;

    public function mount(answers $client_answer=null){
        if($client_answer){
            if($client_answer->status == 1){
                return redirect(route('ClientResult',['result'=>$this->client_answer->group,
                        "name"=>$this->client_answer->name]));
            }
            // $this->client_answer = answers::find($client_answer);
            // $this->id=$client_answer->id->uuid;
            $this->score=$client_answer->score;
            $this->answer=$client_answer->answer;
            $this->current=$client_answer->current==0?$client_answer->current-1:$client_answer->current;

        }else{
            $this->current=1;
        }
        // $this->client_answer = $client_answer;
        // dd($client_answer,$this->current);
    }
    public function render()
    {
        // update color name
        
        return view('livewire.user.quiz');
    }

    public function result(){
        $this->dispatch('postAdded',1);
    }

    public function ansScore($quiz, $ans,$score){
        $this->page+=1;
        $this->score+=$score;
        $this->current=$quiz+1;
        $this->answer[$quiz]=$ans;

        $this->client_answer->current = $this->current;
        $this->client_answer->answer =  $this->answer;
        $this->client_answer->score =  $this->score;
        $this->client_answer->save();

        if($quiz == 4){
            // dd($this->score,$this->answer,$this->score <= 3);
            switch (true) {
                case $this->score <= 3:
                    $this->answer['type']='A';
                    $this->client_answer->type =  $this->answer['type'];
                    $this->client_answer->save();
                    // dd("0-3 คะแนน คนช่างเลือกแบบ 'เลือกอะไรก็ได้'");
                    break;
                case $this->score >= 4 && $this->score <= 6 :
                    $this->answer['type']='B';
                    $this->client_answer->type =  $this->answer['type'];
                    $this->client_answer->save();
                    // dd("4-6 คะแนน คนช่างเลือกแบบ 'เลือกพอเป็นพิธี'");
                    break;
                case $this->score >= 7 && $this->score <= 9 :
                    $this->answer['type']='C';
                    $this->client_answer->type =  $this->answer['type'];
                    $this->client_answer->save();
                    // dd("7-9 คะแนน คนช่างเลือกแบบ 'เลือกแล้วเลือกอีก'");
                    break;
                case $this->score >= 10 && $this->score <= 12 :
                    $this->answer['type']='D';
                    $this->client_answer->type =  $this->answer['type'];
                    $this->client_answer->save();
                    // dd("10-12 คะแนน คนช่ างเลื อกแบบ 'พิถีพิถัน ตัวมัมระดับเป๊ะ'");
                    break;
                
                default:
                    # code...
                    dd('what');
                    break;
            }
        }elseif($quiz == 5){
            // dd($ans);
            switch ($ans) {
                case 'b':
                    // dd("choose B or D");
                    $this->answer['group']=1;
                    $this->client_answer->group =  $this->answer['group'];
                    $this->client_answer->save();
                    break;
                case 'd':
                    // dd("choose B or D");
                    $this->answer['group']=1;
                    $this->client_answer->group =  $this->answer['group'];
                    $this->client_answer->save();
                    break;
                
                case 'a':
                    // dd("choose A or C");
                    $this->answer['group']=2;
                    $this->client_answer->group =  $this->answer['group'];
                    $this->client_answer->save();
                    break;
                case 'c':
                    // dd("choose A or C");
                    $this->answer['group']=2;
                    $this->client_answer->group =  $this->answer['group'];
                    $this->client_answer->save();
                    break;
                default:
                    # code...
                    break;
            }
            $this->client_answer->group =  $this->answer['group'];
            $this->client_answer->save();
            // dd($this->answer['group']);
        } elseif($quiz == 7 ){
            if($this->answer['group']==1){
                switch (true) {
                    case (($this->answer[6]=='a' || $this->answer[6]=='c') 
                        && ($this->answer[7]=='a' || $this->answer[7]=='c')) :
                        # code...
                        $this->answer['milk']='almond';
                        $this->client_answer->milk =  $this->answer['milk'];
                        // $this->client_answer->group = "2-".$this->answer['score']."-".$this->answer['type'];
                        // $this->client_answer->status = TRUE;
                        $this->client_answer->save();

                        // return redirect(route('ClientResult',[
                        //     'result'=>"2-".$this->answer['score']."-".$this->answer['type'],
                        //     "name"=>$this->client_answer->name
                        // ]));
                        // dd("2 คะแนน ไปเลือกแบรนด์นมอัลมอนด์ในข้อถัดไป");
                        // 2
                        break;
                    
                    default:
                        # code...
                        $this->answer['milk']='macadamia';
                        
                        $this->client_answer->milk =  $this->answer['milk'];
                        $this->client_answer->status = TRUE;
                        $this->client_answer->group = "1-".$this->answer['type'];
                        $this->client_answer->save();
                        return redirect(route('ClientResult',['result'=>$this->client_answer->group,
                        "name"=>$this->client_answer->name ] ) );
                        dd("0-1 คะแนน 'นมแมคคาเดเมีย'");
                        // 1
                        break;
                }
            }else{
                switch (true) {
                    case ($this->answer[6]=='a' || $this->answer[6]=='c') && ($this->answer[7]=='c' || $this->answer[7]=='d') :
                        # code...
                        $this->answer['milk']='oat';
                        $this->client_answer->milk =  $this->answer['milk'];
                        // $this->client_answer->status = TRUE;
                        // $this->client_answer->group = "4-".$this->answer['score']."-".$this->answer['type'];
                        $this->client_answer->save();
                        // return redirect(route('ClientResult',['result'=>$this->client_answer->group,
                        // "name"=>$this->client_answer->name]));
                        // dd("2 คะแนน ไปชุดคําถาม 'นมโอ๊ต'");
                        // 4
                        break;
                    
                    default:
                        # code...
                        $this->answer['milk']='pistachio';
                        
                        $this->client_answer->milk =  $this->answer['milk'];
                        $this->client_answer->save();
                        // return redirect(route('ClientResult',['result'=>"3-1-".$this->answer['type'],
                        // "name"=>$this->client_answer->name]));
                        // dd("0-1 คะแนน ไปชุดคําถาม 'นมพิสตาชิโอ'");  
                        // 3
                        break;
                }

            }

        } elseif($quiz == 8 ){
            

            switch ($this->answer['milk']) {
                case ('almond') :
                    $this->client_answer->status = TRUE;
                    $this->client_answer->group = "2-".$score."-".$this->answer['type'];
                    $this->client_answer->save();
                    return redirect(route('ClientResult',['result'=>$this->client_answer->group,
                        "name"=>$this->client_answer->name]));
                break;
                case ('oat') :
                        $this->client_answer->status = TRUE;
                        $this->client_answer->group = "4-".$score."-".$this->answer['type'];
                        $this->client_answer->save();
                        return redirect(route('ClientResult',['result'=>$this->client_answer->group,
                            "name"=>$this->client_answer->name]));
                break;
                case ('pistachio') :
                        $this->client_answer->status = TRUE;
                        $this->client_answer->group = "3-".$score."-".$this->answer['type'];
                        $this->client_answer->save();
                        return redirect(route('ClientResult',['result'=>$this->client_answer->group,
                            "name"=>$this->client_answer->name]));
                break;
                default:
                break;
                }

        }
    }
}
