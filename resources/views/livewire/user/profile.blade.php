<section>
    <div class="fixed top-1 left-1 max-w-sm z-10">
        {{-- {{var_dump($answer)}} --}}
    </div>
    <div class="grid gap-2 min-h-svh h-full">
        @switch($page)
            @case(1)
                <div style="background: url({{ asset('img/Q0-2.jpg') }}) center center; background-size:contain; background-repeat: no-repeat;" 
            class="relative">
                {{-- <form wire:submit.prevent="goQuiz" class="grid gap-2 min-h-svh h-full"> --}}
                <div class="absolute top-[50%] w-full px-[16%]">
                    <input class="bg-gradient-to-br from-slate-300 to-slate-50 rounded-full w-full text-3xl border-0 text-center"
                        wire:model.live="name" type="text" min="1" max="20" placeholder="ชื่อ"/>
                </div>
                <div class="absolute top-[62%] w-full px-[16%]">
                    <input class="bg-gradient-to-br from-slate-300 to-slate-50 rounded-full w-full text-3xl border-0 text-center"
                        wire:model.live="age" type="number" min="1" max="99" placeholder="อายุ"/>
                </div>
                
                <div class="absolute top-[75%] w-full px-[5%] text-center">


                    <x-button flat rounded class="!bg-gradient-to-b from-[#A87C4D] to-[#BF9768] !p-1 
                        hover:to-[#A87C4D] hover:from-[#BF9768] transition-all w-full h-16" 
                        wire:click="nextPage">
                            <div class="bg-gradient-to-b from-[#C3996B] to-[#AA7E51] 
                            hover:from-[#AA7E51] hover:to-[#AA7E51] transition-all w-full h-full rounded-full py-3 px-5 
                            text-white text-2xl grid place-content-center">
                            let's go
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
                <div style="background: url({{ asset('img/story1.jpg') }}) center bottom, #B5F8FF; background-size:contain; background-repeat: no-repeat;" 
                    class="relative ">
                    <h2 class="text-main text-3xl text-center pt-14">วันพักผ่อนของเรา เริ่มขึ้น...</h2>
                    <div class="absolute top-[73%] w-full px-[5%] text-center">

                        <x-button flat rounded class="!bg-gradient-to-b from-[#A87C4D] to-[#BF9768] !p-1 
                            hover:to-[#A87C4D] hover:from-[#BF9768] transition-all w-full h-16" 
                            wire:click="nextPage">
                                <div class="bg-gradient-to-b from-[#C3996B] to-[#AA7E51] 
                                hover:from-[#AA7E51] hover:to-[#AA7E51] transition-all w-full h-full rounded-full py-3 px-5 
                                text-white text-3xl grid place-content-center">
                                ต่อไป
                                </div>
                        </x-button>
                    </div>
                </div>
                
                @break
            @case(3)
                <div style="background: url({{ asset('img/story2.jpg') }}) center top,#EDCD83; background-size:contain; background-repeat: no-repeat;" 
                    class="relative ">
                    
                    <h2 class="text-white text-3xl text-center pt-14"><b>เติมพลังสักหน่อย</b><br> ก่อนออกไปรับลม ชมทะเล</h2>
                    <div class="absolute top-[73%] w-full px-[5%] text-center">

                        <x-button flat rounded class="!bg-gradient-to-b from-[#A87C4D] to-[#423f3d] !p-1 
                            hover:to-[#A87C4D] hover:from-[#BF9768] transition-all w-full h-16" 
                            wire:click="goQuiz">
                                <div class="bg-gradient-to-b from-[#C3996B] to-[#AA7E51] 
                                hover:from-[#AA7E51] hover:to-[#AA7E51] transition-all w-full h-full rounded-full py-3 px-5 
                                text-white text-3xl grid place-content-center">
                                พร้อมแล้วไปกันเลย
                                </div>
                        </x-button>
                    </div>
                </div>
                
                @break
        
            @default
                
        @endswitch

        {{-- Nothing in the world is as soft and yielding as water. --}}
    </div>
</section>