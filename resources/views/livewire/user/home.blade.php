<div class="grid gap-2 min-h-svh overflow-clip h-full bg-[#FFF2DC] px-4 xs:px-1">
    <div style="background: url({{ asset('img/Q0-1.png') }}) center bottom; background-size:contain; background-repeat: no-repeat;" 
    class="relative">
        <h1 class="text-center text-2xl pt-24">คุณเป็น <b>‘คนช่างเลือก’</b> <br>แบบไหน ?</h1>
        {{-- <x-button label="next" :href="route('ClientProfile')"/> --}}
        <div class="absolute bottom-28 w-full text-center">
            <x-button flat rounded class="!p-0 !m-auto" href="{{route('ClientProfile')}}" >
                <div class="min-w-64 min-h-10 p-3 text-xl" style="background: url('{{asset('img/Button.png')}}') top center no-repeat; background-size:contain">
                    คลิก 
                </div>
            </x-button>
        </div>
    </div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
</div>
