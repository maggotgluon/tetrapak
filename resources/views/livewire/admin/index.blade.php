<div>
    {{-- The whole world belongs to you. --}}
    Dashboard
    <ul>
    <li>1. จำนวนคน

        {{$data->where('status',true)->count()}}
    </li>
    <li>2. เพศ ??</li>
    <li>3. ช่วงอายุ</li>
    <li>4. คำตอบ</li>
    <li>5. ยอดรายวัน</li>
    <li>6. ข้อที่คนไม่เล่นต่อ (DropOff)

        {{$data->where('status',false)->count()}}
    </li>
    </ul>
</div>
