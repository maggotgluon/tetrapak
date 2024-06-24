<section>
    <div class="fixed top-1 left-1 max-w-sm z-10">
        {{-- {{var_dump($answer)}} --}}
    </div>
    <div class="grid gap-2 min-h-svh h-full">
        @switch($page)
            @case(1)
                <div style="background: url({{ asset('img/Q0-2.jpg') }}) center bottom; background-size:contain; background-repeat: no-repeat;" 
            class="relative">
                {{-- <form wire:submit.prevent="goQuiz" class="grid gap-2 min-h-svh h-full"> --}}
                <div class="absolute top-[50%] w-full px-[20%]">
                    <x-input label="name" wire:model.live="name" type="text" min="1" max="20"/>
                </div>
                <div class="absolute top-[62%] w-full px-[20%]">
                    <x-input label="age" wire:model.live="age" type="number" min="1" max="99"/>
                </div>
                <div class="absolute top-[75%] w-full px-[5%] text-center">
                    <x-button flat rounded type="submit" wire:click="nextPage" class="w-full h-14">
                        <div class="min-w-full min-h-10 p-3 text-2xl">
                            let go
                        </div>
                    </x-button>
                </div>
                {{-- <a wire:click="goQuiz"
                    class="bg-yellow-600 rounded-full shadow-inner px-10 py-4 text-center w-min m-auto"> 
                    เริ่มกันเลย 
                </a> --}}
                {{-- </form> --}}
        
                </div>
                @break
            @case(2)
                <div style="background: url({{ asset('img/story1.jpg') }}) center top; background-size:contain; background-repeat: no-repeat;" 
                    class="relative bg-[#A2FAFF]">
                    
                    <div class="absolute top-[75%] w-full px-[20%] text-center">
                        <x-button flat rounded class="!p-0 !m-auto" wire:click="nextPage">
                                <p class="text-3xl">ต่อไป</p>
                        </x-button>
                    </div>
                </div>
                
                @break
            @case(3)
                <div style="background: url({{ asset('img/story2.jpg') }}) center top; background-size:contain; background-repeat: no-repeat;" 
                    class="relative">
                    
                    <div class="absolute top-[75%] w-full px-[20%] text-center">
                        <x-button flat rounded class="!p-0 !m-auto" wire:click="goQuiz">
                            <p class="text-3xl">พร้อมแล้วไปกันเลย</p>
                        </x-button>
                    </div>
                </div>
                
                @break
        
            @default
                
        @endswitch

        {{-- Nothing in the world is as soft and yielding as water. --}}
    </div>
</section>