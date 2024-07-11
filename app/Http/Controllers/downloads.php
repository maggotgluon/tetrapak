<?php

namespace App\Http\Controllers;

use App\Models\answers;
use Carbon\Carbon;
use Illuminate\Http\Request;

class downloads extends Controller
{
    // public $dateFrom,$dateTo;
    public function result( $dateFrom=null, $dateTo=null){
        // first = new
        $result=answers::when($dateFrom,function($q,$dateFrom){
            $result = $q->where( 'created_at','>=',$dateFrom);
            return $result;

        })->when($dateTo,function($q,$dateTo){
            $result = $q->where( 'created_at','<=',(new Carbon($dateTo))->addday(1));
            return $result;
        })->get();

        $dateTo=$result->first()->created_at->addday(1);
        $dateFrom=$result->last()->created_at;

        // dd($result,$dateTo,$dateFrom);
        $now = Carbon::now()->toDateTimeString();
        $fileName = $now.' answer ('.$dateFrom->toDateString().' - '.$dateTo->toDateString().').csv';
        
        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );
    
        $columns = array('id', 'name', 'age', 'answer', 'score', 'type','milk', 'finish' ,'last screen', 'created at');

        $callback = function() use($result, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);
    
            foreach ($result as $r) {
                $row['id'] = $r->id;
                $row['name'] = $r->name;
                $row['age'] = $r->age;

                $ans[1]=$r->answer["1"]??null;
                $ans[2]=$r->answer["2"]??null;
                $ans[3]=$r->answer["3"]??null;
                $ans[4]=$r->answer["4"]??null;
                $ans[5]=$r->answer["5"]??null;
                $ans[6]=$r->answer["6"]??null;
                $ans[7]=$r->answer["7"]??null;

                $row['answer'] = json_encode($ans);

                $row['score'] = $r->score;

                switch ($r->type) {
                    case 'A':
                        $type='เลือกอะไรก็ได้';
                        break;
                    
                    case 'B':
                        $type='เลือกพอเป็นพิธี';
                        break;
                    
                    case 'C':
                        $type='เลือกแล้วเลือกอีก';
                        break;
                    
                    case 'D':
                        $type='พิถีพิถัน ตัวมัมระดับเป๊ะ';
                        break;
                    
                    default:
                        $type=null;
                        break;
                }
                $row['type'] = $type;
                $row['milk'] = $r->milk;
                if($r->finish){
                    $row['finish'] = 'true';
                    $row['last screen'] = 'finished';
                }else{
                    $row['finish'] = 'false';
                    $row['last screen'] = $r->current<=0?0: $r->current - 1;
                }
                $row['created at'] = $r->created_at;
                fputcsv($file, array($row['id'], $row['name'], $row['age'], $row['answer'], $row['score'], $row['type'], $row['milk'], $row['finish'], $row['last screen'],$row['created at']));
            }
    
            fclose($file);
        };
        // dd(response()->stream($callback, 200, $headers));
        $x = response()->stream($callback, 200, $headers);
        return $x;
    
    }
}
