<div class="grid gap-2 pt-4">
    <x-card title="Dashboard">
        <div class="grid grid-cols-2 gap-2">
            <x-input
                label="Report From"
                placeholder="date from"
                min="" type="date"/>
            <x-input
                label="Report To"
                placeholder="Select one status"
                min="" type="date"/>
            <x-button class="col-span-2" label="Download"/>
        </div>
    </x-card>
    <hr class="my-4"/>
        <div class="grid gap-2 grid-cols-2">
        <x-card title="เข้าร่วมทั้งหมด">
            <h3 class="text-3xl"> {{$data->where('status',true)->count()}}/{{$data->count()}} </h3>
        </x-card>

        <x-card title="ข้อที่คนไม่เล่นต่อ">
            <h3 class="text-3xl"> {{$data->where('status',false)->count()}}</h3>
        </x-card>
        </div>

        <x-card title="ช่วงอายุ">    
            <ul class="pl-4">
                <li> under 10 : {{$data->wherebetween('age',[1,10])->count()}}</li>
                <li> 11 - 20 : {{$data->wherebetween('age',[11,20])->count()}}</li>
                <li> 21 - 30 : {{$data->wherebetween('age',[21,30])->count()}}</li>
                <li> 31 - 40 : {{$data->wherebetween('age',[31,40])->count()}}</li>
                <li> 41 - 50 : {{$data->wherebetween('age',[41,50])->count()}}</li>
                <li> 51 - 60 : {{$data->wherebetween('age',[51,60])->count()}}</li>
                <li> over 61 : {{$data->wherebetween('age',[61,99])->count()}}</li>
            </ul>
        </x-card>

        <x-card title="ยอดรายวัน">
            <div class="h-52 bg-pink-300 overflow-y-auto overflow-x-clip p-2">
                <ul class="pl-4">
                    @foreach ($data->unique(date('created_at')) as $cc_date)
                    <li>
                        {{$cc_date->created_at->toDateString() }} : 
                        Total : {{$data->whereBetween('created_at',[$cc_date->created_at->toDateString(),$cc_date->created_at->addDay(1)->toDateString()])->count()}}
                        | Finished : {{$data->whereBetween('created_at',[$cc_date->created_at->toDateString(),$cc_date->created_at->addDay(1)->toDateString()])->where('status',true)->count()}}
                        | Dropoff : {{$data->whereBetween('created_at',[$cc_date->created_at->toDateString(),$cc_date->created_at->addDay(1)->toDateString()])->where('status',false)->count()}}
                        
                    </li>
                    @endforeach
                </ul>
            </div>
        </x-card>
</div>

