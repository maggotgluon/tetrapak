<div class="grid gap-2 min-h-svh overflow-scroll h-full bg-[#FFF2DC] px-4 xs:px-1">
    <div style="background: url({{ asset('img/Q0-1.png') }}) center bottom; background-size:contain; background-repeat: no-repeat;" 
    class="relative">
        <h1 class="text-center text-2xl pt-24">คุณเป็น <b>‘คนช่างเลือก’</b> <br>แบบไหน ?</h1>
        {{-- <x-button label="next" :href="route('ClientProfile')"/> --}}
        <div class="absolute bottom-28 w-full">
        <a href="{{route('ClientProfile')}}" 
            class="bg-yellow-600 rounded-full block m-auto shadow-inner px-10 py-4 text-center w-min m-auto"> 
            คลิก 
        </a>
        </div>
    </div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
</div>
