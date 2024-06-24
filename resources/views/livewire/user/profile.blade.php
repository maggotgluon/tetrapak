<section>
@switch($state)
    @case('quiz')
        @livewire('user.quiz')
        
        @break
    @case('result')
        @livewire('user.quiz')
        
        @break

    @default
    <div class="grid gap-2 min-h-svh h-full">
        <div style="background: url({{ asset('img/Q0-2.png') }}) center bottom; background-size:contain; background-repeat: no-repeat;" 
    class="relative">
        <form wire:submit.prevent="goQuiz" class="grid gap-2 min-h-svh h-full">
        <div class="absolute top-[50%] w-full px-[20%]">
            <x-input label="name" wire:model="name" type="text" min="1" max="20"/>
        </div>
        <div class="absolute top-[62%] w-full px-[20%]">
            <x-input label="age" wire:model="age" type="number" min="1" max="99"/>
        </div>
        <div class="absolute top-[78%] w-full px-[20%] text-center">
        <x-button class="m-auto" type="submit" label="let go" wire:click="goQuiz"/>
        </div>
        {{-- <a wire:click="goQuiz"
            class="bg-yellow-600 rounded-full shadow-inner px-10 py-4 text-center w-min m-auto"> 
            เริ่มกันเลย 
        </a> --}}
        </form>

        </div>
        {{-- Nothing in the world is as soft and yielding as water. --}}
    </div>
        
@endswitch

</section>