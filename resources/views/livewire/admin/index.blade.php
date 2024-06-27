<div>
    {{-- The whole world belongs to you. --}}
    Dashboard
    <ul>
    <li>1. จำนวนคน
        {{$data->where('status',true)->count()}}/{{$data->count()}}
    </li>
    <li>2. เพศ ??</li>
    <li>3. ช่วงอายุ
        <ul class="pl-4">
            <li> under 10 : {{$data->wherebetween('age',[1,10])->count()}}</li>
            <li> 11 - 20 : {{$data->wherebetween('age',[11,20])->count()}}</li>
            <li> 21 - 30 : {{$data->wherebetween('age',[21,30])->count()}}</li>
            <li> 31 - 40 : {{$data->wherebetween('age',[31,40])->count()}}</li>
            <li> 41 - 50 : {{$data->wherebetween('age',[41,50])->count()}}</li>
            <li> 51 - 60 : {{$data->wherebetween('age',[51,60])->count()}}</li>
            <li> over 61 : {{$data->wherebetween('age',[61,99])->count()}}</li>
        </ul>
    </li>
    <li>4. คำตอบ</li>
    <li>5. ยอดรายวัน</li>
    <li>6. ข้อที่คนไม่เล่นต่อ (DropOff)
        {{$data->where('status',false)->count()}}
    </li>
    </ul>
</div>
