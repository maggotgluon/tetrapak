<div class="relative">
    <img src="{{asset('img/result/'.$result.'.jpg')}}">
    <h2 class="absolute top-[13%] left-[45%] w-1/2 text-center text-7xl text-primary-100">{{$name??""}}</h2>
    <div class="absolute bottom-[6%] left-[60%] w-[30%] h-[12%] grid gap-6">
        <x-button label="SAVE"/>
        <x-button label="SHARE QUIZ"/>
    </div>
</div>
