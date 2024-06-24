<section>
@switch($state)
    @case('quiz')
        @livewire('user.quiz')
        
        @break
    @case('result')
        @livewire('user.quiz')
        
        @break

    @default
    <div class="grid gap-2 min-h-svh h-full bg-purple-50">
        <form wire:submit.prevent="goQuiz" class="grid gap-2 min-h-svh h-full">
        <x-input label="name" wire:model="name" type="text" min="1" max="20"/>
        <x-input label="age" wire:model="age" type="number" min="1" max="99"/>
        <x-button type="submit" label="let go" wire:click="goQuiz"/>
        <a href="{{route('ClientProfile')}}" 
            class="bg-yellow-600 rounded-full shadow-inner px-10 py-4 text-center w-min m-auto"> 
            เริ่มกันเลย 
        </a>
        </form>
        {{-- Nothing in the world is as soft and yielding as water. --}}
    </div>
        
@endswitch

</section>