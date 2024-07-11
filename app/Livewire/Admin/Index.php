<?php

namespace App\Livewire\Admin;

use App\Models\answers;
use Carbon\Carbon;
use Livewire\Component;

class Index extends Component
{
    public $data;
    public $filter;
    public $dateFrom,$dateTo;

    public function mount(){
        $data = answers::orderBy('created_at','desc')->get();
        $this->filter['dateMax'] = $data->first()->created_at;
        $this->filter['dateMin'] = $data->last()->created_at;

        $this->dateFrom = $this->filter['dateMin']->toDateString();
        $this->dateTo = $this->filter['dateMax']->toDateString();
        // dd($this->filter['dateMax'],$this->filter['dateMin']);
    }
    public function render()
    {
        $this->data = answers::whereBetween('created_at',[$this->dateFrom,(new Carbon($this->dateTo))->addDay(1)])->orderBy('created_at','desc')->get();
        return view('livewire.admin.index')->extends('layouts/app');
    }
}
