<div class="grid gap-2 pt-4">
    <x-card title="Dashboard">
        <div class="grid grid-cols-2 gap-2">
            <x-input
                label="Report From"
                wire:model.live="dateFrom"
                placeholder="{{now()->toDateString()}}"
                min="{{$filter['dateMin']->toDateString()}}" 
                max="{{$filter['dateMax']->toDateString()}}" 
                type="date"/>
            <x-input
                label="Report To"
                wire:model.live="dateTo"
                placeholder="{{now()->toDateString()}}"
                min="{{$filter['dateMin']->toDateString()}}" 
                max="{{$filter['dateMax']->toDateString()}}" 
                type="date"/>
            <x-button class="col-span-2" label="Download" :href="route('download',['dateFrom'=>$dateFrom,'dateTo'=>$dateTo])"/>
        </div>
    </x-card>
    <hr class="my-4"/>
        <div class="grid gap-2 grid-cols-2">
            <span>{{$dateFrom}}</span>
            <span>{{$dateTo}}</span>
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
            <div class="h-52 overflow-y-auto overflow-x-clip p-2">
                <ul class="pl-4">
                    @foreach ($data->unique('created_at') as $cc_date)
                    <li>
                        {{$cc_date->created_at->toDateString() }} > 
                        Total : {{$data->whereBetween('created_at',[$cc_date->created_at->toDateString(),$cc_date->created_at->addDay(1)->toDateString()])->count()}}
                        | Finished : {{$data->whereBetween('created_at',[$cc_date->created_at->toDateString(),$cc_date->created_at->addDay(1)->toDateString()])->where('status',true)->count()}}
                        | Dropoff : {{$data->whereBetween('created_at',[$cc_date->created_at->toDateString(),$cc_date->created_at->addDay(1)->toDateString()])->where('status',false)->count()}}
                        
                    </li>
                    @endforeach
                </ul>
            </div>
        </x-card>

        <x-card title="Result">
            <div class="grid grid-cols-5 gap-1">
                macadamia
                <div class="relative">
                        {{-- <img src="{{asset('img/result/1-A.jpg')}}"/> --}}
                        เลือกอะไรก็ได้
                        {{-- <span class="absolute top-[15%] right-[5%]">  --}}
                            user : {{$data->where('status',true)->where('group','1-A')->count()}}
                        {{-- </span> --}}
                    </div>
                    <div class="relative">
                        {{-- <img src="{{asset('img/result/1-B.jpg')}}"/> --}}
                        เลือกพอเป็นพิธี
                        {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                            user : {{$data->where('status',true)->where('group','1-B')->count()}}
                        {{-- </span> --}}
                    </div>
                    <div class="relative">
                        {{-- <img src="{{asset('img/result/1-C.jpg')}}"/> --}}
                        เลือกแล้วเลือกอีก
                        {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                            user : {{$data->where('status',true)->where('group','1-C')->count()}}
                        {{-- </span> --}}
                    </div>
                    <div class="relative">
                        {{-- <img src="{{asset('img/result/1-D.jpg')}}"/> --}}
                        พิถีพิถัน ตัวมัมระดับเป๊ะ
                        {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                            user : {{$data->where('status',true)->where('group','1-D')->count()}}
                        {{-- </span> --}}
                </div>

                {{-- 2-1 --}}
                almond 1
                <div class="relative">
                        {{-- <img src="{{asset('img/result/2-1-A.jpg')}}"/> --}}
                        เลือกอะไรก็ได้
                        {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                        user : {{$data->where('status',true)->where('group','2-1-A')->count()}}
                    {{-- </span> --}}
                    </div>
                    <div class="relative">
                        {{-- <img src="{{asset('img/result/2-1-B.jpg')}}"/> --}}
                        เลือกพอเป็นพิธี
                        {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                            user : {{$data->where('status',true)->where('group','2-1-B')->count()}}
                        {{-- </span> --}}
                    </div>
                    <div class="relative">
                        {{-- <img src="{{asset('img/result/2-1-C.jpg')}}"/> --}}
                        เลือกแล้วเลือกอีก
                        {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                            user : {{$data->where('status',true)->where('group','2-1-C')->count()}}
                        {{-- </span> --}}
                    </div>
                    <div class="relative">
                        {{-- <img src="{{asset('img/result/2-1-D.jpg')}}"/> --}}
                        พิถีพิถัน ตัวมัมระดับเป๊ะ
                        {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                            user : {{$data->where('status',true)->where('group','2-1-D')->count()}}
                        {{-- </span> --}}
                </div>

                almond 2
                {{-- 2-2 --}}
                <div class="relative">
                        {{-- <img src="{{asset('img/result/2-2-A.jpg')}}"/> --}}
                        เลือกอะไรก็ได้
                        {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                        user : {{$data->where('status',true)->where('group','2-2-A')->count()}}
                    {{-- </span> --}}
                    </div>
                    <div class="relative">
                        {{-- <img src="{{asset('img/result/2-2-B.jpg')}}"/> --}}
                        เลือกพอเป็นพิธี
                        {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                            user : {{$data->where('status',true)->where('group','2-2-B')->count()}}
                        {{-- </span> --}}
                    </div>
                    <div class="relative">
                        {{-- <img src="{{asset('img/result/2-2-C.jpg')}}"/> --}}
                        เลือกแล้วเลือกอีก
                        {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                            user : {{$data->where('status',true)->where('group','2-2-C')->count()}}
                        {{-- </span> --}}
                    </div>
                    <div class="relative">
                        {{-- <img src="{{asset('img/result/2-2-D.jpg')}}"/> --}}
                        พิถีพิถัน ตัวมัมระดับเป๊ะ
                        {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                            user : {{$data->where('status',true)->where('group','2-2-D')->count()}}
                        {{-- </span> --}}
                </div>

                almond 3
                {{-- 2-3 --}}
                <div class="relative" > 
                        {{-- <img src="{{asset('img/result/2-3-A.jpg')}}"/> --}}
                        เลือกอะไรก็ได้
                        {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                        user : {{$data->where('status',true)->where('group','2-3-A')->count()}}
                    {{-- </span> --}}
                    </div>
                    <div class="relative">
                        {{-- <img src="{{asset('img/result/2-3-B.jpg')}}"/> --}}
                        เลือกพอเป็นพิธี
                        {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                            user : {{$data->where('status',true)->where('group','2-3-B')->count()}}
                        {{-- </span> --}}
                    </div>
                    <div class="relative">
                        {{-- <img src="{{asset('img/result/2-3-C.jpg')}}"/> --}}
                        เลือกแล้วเลือกอีก
                        {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                            user : {{$data->where('status',true)->where('group','2-3-C')->count()}}
                        {{-- </span> --}}
                    </div>
                    <div class="relative">
                        {{-- <img src="{{asset('img/result/2-3-D.jpg')}}"/> --}}
                        พิถีพิถัน ตัวมัมระดับเป๊ะ
                        {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                            user : {{$data->where('status',true)->where('group','2-3-D')->count()}}
                        {{-- </span> --}}
                </div>


            {{-- 3-1 --}}
            pistachio 1
            <div class="relative">
                    {{-- <img src="{{asset('img/result/3-1-A.jpg')}}"/> --}}
                    เลือกอะไรก็ได้
                    {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                        user : {{$data->where('status',true)->where('group','3-1-A')->count()}}
                    {{-- </span> --}}
                </div>
                <div class="relative">
                    {{-- <img src="{{asset('img/result/3-1-B.jpg')}}"/> --}}
                    เลือกพอเป็นพิธี
                    {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                        user : {{$data->where('status',true)->where('group','3-1-B')->count()}}
                    {{-- </span> --}}
                </div>
                <div class="relative">
                    {{-- <img src="{{asset('img/result/3-1-C.jpg')}}"/> --}}
                    เลือกแล้วเลือกอีก
                    {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                        user : {{$data->where('status',true)->where('group','3-1-C')->count()}}
                    {{-- </span> --}}
                </div>
                <div class="relative">
                    {{-- <img src="{{asset('img/result/3-1-D.jpg')}}"/> --}}
                    พิถีพิถัน ตัวมัมระดับเป๊ะ
                    {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                        user : {{$data->where('status',true)->where('group','3-1-D')->count()}}
                    {{-- </span> --}}
            </div>

            {{-- 3-2 --}}
            pistachio 2
            <div class="relative">
                    {{-- <img src="{{asset('img/result/3-2-A.jpg')}}"/> --}}
                    เลือกอะไรก็ได้
                    {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                    user : {{$data->where('status',true)->where('group','3-2-A')->count()}}
                {{-- </span> --}}
                </div>
                <div class="relative">
                    {{-- <img src="{{asset('img/result/3-2-B.jpg')}}"/> --}}
                    เลือกพอเป็นพิธี
                    {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                        user : {{$data->where('status',true)->where('group','3-2-B')->count()}}
                    {{-- </span> --}}
                </div>
                <div class="relative">
                    {{-- <img src="{{asset('img/result/3-2-C.jpg')}}"/> --}}
                    เลือกแล้วเลือกอีก
                    {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                        user : {{$data->where('status',true)->where('group','3-2-C')->count()}}
                    {{-- </span> --}}
                </div>
                <div class="relative">
                    {{-- <img src="{{asset('img/result/3-2-D.jpg')}}"/> --}}
                    พิถีพิถัน ตัวมัมระดับเป๊ะ
                    {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                        user : {{$data->where('status',true)->where('group','3-2-D')->count()}}
                    {{-- </span> --}}
            </div>



            {{-- 4-1 --}}
            oat 1
            <div class="relative">
                    {{-- <img src="{{asset('img/result/4-1-A.jpg')}}"/> --}}
                    เลือกอะไรก็ได้
                    {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                    user : {{$data->where('status',true)->where('group','4-1-A')->count()}}
                {{-- </span> --}}
                </div>
                <div class="relative">
                    {{-- <img src="{{asset('img/result/4-1-B.jpg')}}"/> --}}
                    เลือกพอเป็นพิธี
                    {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                        user : {{$data->where('status',true)->where('group','4-1-B')->count()}}
                    {{-- </span> --}}
                </div>
                <div class="relative">
                    {{-- <img src="{{asset('img/result/4-1-C.jpg')}}"/> --}}
                    เลือกแล้วเลือกอีก
                    {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                        user : {{$data->where('status',true)->where('group','4-1-C')->count()}}
                    {{-- </span> --}}
                </div>
                <div class="relative">
                    {{-- <img src="{{asset('img/result/4-1-D.jpg')}}"/> --}}
                    พิถีพิถัน ตัวมัมระดับเป๊ะ
                    {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                        user : {{$data->where('status',true)->where('group','4-1-D')->count()}}
                    {{-- </span> --}}
            </div>

            {{-- 4-2 --}}
            oat 2
            <div class="relative">
                    {{-- <img src="{{asset('img/result/4-2-A.jpg')}}"/> --}}
                    เลือกอะไรก็ได้
                    {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                    user : {{$data->where('status',true)->where('group','4-2-A')->count()}}
                {{-- </span> --}}
                </div>
                <div class="relative">
                    {{-- <img src="{{asset('img/result/4-2-B.jpg')}}"/> --}}
                    เลือกพอเป็นพิธี
                    {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                        user : {{$data->where('status',true)->where('group','4-2-B')->count()}}
                    {{-- </span> --}}
                </div>
                <div class="relative">
                    {{-- <img src="{{asset('img/result/4-2-C.jpg')}}"/> --}}
                    เลือกแล้วเลือกอีก
                    {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                        user : {{$data->where('status',true)->where('group','4-2-C')->count()}}
                    {{-- </span> --}}
                </div>
                <div class="relative">
                    {{-- <img src="{{asset('img/result/4-2-D.jpg')}}"/> --}}
                    พิถีพิถัน ตัวมัมระดับเป๊ะ
                    {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                        user : {{$data->where('status',true)->where('group','4-2-D')->count()}}
                    {{-- </span> --}}
            </div>

            {{-- 4-3 --}}
            oat 3
            <div class="relative">  
                    {{-- <img src="{{asset('img/result/4-3-A.jpg')}}"/> --}}
                    เลือกอะไรก็ได้
                    {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                    user : {{$data->where('status',true)->where('group','4-3-A')->count()}}
                {{-- </span> --}}
                </div>
                <div class="relative">
                    {{-- <img src="{{asset('img/result/4-3-B.jpg')}}"/> --}}
                    เลือกพอเป็นพิธี
                    {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                        user : {{$data->where('status',true)->where('group','4-3-B')->count()}}
                    {{-- </span> --}}
                </div>
                <div class="relative">
                    {{-- <img src="{{asset('img/result/4-3-C.jpg')}}"/> --}}
                    เลือกแล้วเลือกอีก
                    {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                        user : {{$data->where('status',true)->where('group','4-3-C')->count()}}
                    {{-- </span> --}}
                </div>
                <div class="relative">
                    {{-- <img src="{{asset('img/result/4-3-D.jpg')}}"/> --}}
                    พิถีพิถัน ตัวมัมระดับเป๊ะ
                    {{-- <span class="absolute top-[15%] right-[5%]"> --}}
                        user : {{$data->where('status',true)->where('group','4-3-D')->count()}}
                    {{-- </span> --}}
            </div>

            </div>
        </x-card>


        <x-card title="Drop off">
            Drop off at question number
            <ul class="pl-4">
                <li>Complete 90%  : {{$data->where('status',false)->where('current','>=',9)->count()}}</li>
                <li>Complete 80% : {{$data->where('status',false)->where('current',8)->count()}}</li>
                <li>Complete 70% : {{$data->where('status',false)->where('current',7)->count()}}</li>
                <li>Complete 60% : {{$data->where('status',false)->where('current',6)->count()}}</li>
                <li>Complete 50% : {{$data->where('status',false)->where('current',5)->count()}}</li>
                <li>Complete 40% : {{$data->where('status',false)->where('current',4)->count()}}</li>
                <li>Complete 30% : {{$data->where('status',false)->where('current',3)->count()}}</li>
                <li>Complete 20% : {{$data->where('status',false)->where('current',2)->count()}}</li>
                <li>Complete 10% : {{$data->where('status',false)->where('current',1)->count()}}</li>
                <li>Complete 0% : {{$data->where('status',false)->where('current','<=',0)->count()}}</li>
            </ul>
        </x-card>
</div>

