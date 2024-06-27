<div class=" h-full bg-[#FFF2DC] px-4 xs:px-1">
    @switch($page)
        @case(1)
            <div class="pt-4">
                <div class="w-full bg-gradient-to-b from-slate-200 to-white rounded-full overflow-clip p-1">
                    <div class="h-2 bg-primary-{{ $current }}00 rounded-full" style="width: {{ ($current / 8) * 100 }}%">
                    </div>
                </div>
                <p class="text-2xs"><span class="text-primary-{{ $current }}00"> {{ $current }} </span>/ 8 </p>
            </div>
            <div class="h-full min-h-svh flex flex-col relative">
                <img src="{{ asset('img/Q1-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
                <div class="p-6 pt-12 w-11/12 m-auto flex-grow"
                    style="background: url({{ asset('img/frame.png') }}) center top; 
                background-size:contain; background-repeat: no-repeat;">

                    <h2 class="text-main text-3xl text-center">เมื่อคุณจะไป<b>เที่ยวทะเล</b><br> คุณจะเลือก<b>แต่งตัว</b>แบบไหน
                    </h2>
                    <span class="block text-center text-sm my-5">ตอบเพียง 1 ข้อเท่านั้น</span>

                    <ul class="grid gap-4">
                        <li>
                            <x-button rounded class="bg-primary-100 text-white hover:!bg-primary-100/90 w-full"
                                wire:click="ansScore('1','a',2)">
                                <span class="hidden">A.</span>
                                เสื้อคู่ที่แมทช์กับแฟน เดินไปไหนก็รู้ว่าเราน่ะคู่กัน
                                <span class="hidden"></span>
                            </x-button>
                        </li>
                        <li>
                            <x-button rounded class="bg-primary-100 text-white hover:!bg-primary-100/90 w-full"
                                wire:click="ansScore('1','b',3)">
                                <span class="hidden">B.</span>
                                เดรสยาวสุดปังกับหมวกปีกกว้าง จะถ่ายรูปมุมไหนก็สวยเป๊ะ
                                <span class="hidden"></span>
                            </x-button>
                        </li>
                        <li>
                            <x-button rounded class="bg-primary-100 text-white hover:!bg-primary-100/90 w-full"
                                wire:click="ansScore('1','c',1)">
                                <span class="hidden">C.</span>
                                เน้นความสบาย ขอกางเกงขาสั้นกับเสื้อยืด
                                <span class="hidden"</span>
                            </x-button>
                        </li>
                        <li>
                            <x-button rounded class="bg-primary-100 text-white hover:!bg-primary-100/90 w-full"
                                wire:click="ansScore('1','d',0)">
                                <span class="hidden">D.</span>
                                ไหน ๆ ก็ต้องเล่นน้ำอยู่แล้ว ใส่ชุดว่ายน้ำไปเลยละกัน
                                <span class="hidden"</span>
                            </x-button>
                        </li>
                    </ul>

                </div>
                <img src="{{ asset('img/Q1-bottom.png') }}" class="h-1/4 absolute bottom-0" />
            </div>
        @break

        @case(2)
            <div class="pt-4">
                <div class="w-full bg-gradient-to-b from-slate-200 to-white rounded-full overflow-clip p-1">
                    <div class="h-2 bg-primary-{{ $current }}00 rounded-full" style="width: {{ ($current / 8) * 100 }}%">
                    </div>
                </div>
                <p class="text-2xs"><span class="text-primary-{{ $current }}00"> {{ $current }} </span>/ 8 </p>
            </div>
            <div class="h-full min-h-svh flex flex-col relative">
                <img src="{{ asset('img/Q2-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
                <div class="p-6 pt-12 w-11/12 m-auto flex-grow"
                    style="background: url({{ asset('img/frame.png') }}) center top; 
                background-size:contain; background-repeat: no-repeat;">

                    <h2 class="text-main text-3xl text-center"><b>โรงแรม</b>แบบไหนที่คุณจะเลือกพัก<br>
                        ในทริป<b>เที่ยวทะเล</b>ครั้งนี้</h2>
                    <span class="block text-center text-sm my-5">ตอบเพียง 1 ข้อเท่านั้น</span>

                    <ul class="grid gap-4">
                        <li>
                            <x-button rounded class="bg-primary-200 text-white hover:!bg-primary-200/90 w-full"
                                label="โรงแรมไหนก็ไม่สำคัญ ขอได้ส่วนลดเยอะไว้ก่อน" wire:click="ansScore('2','a',0)" />
                        </li>
                        <li>
                            <x-button rounded class="bg-primary-200 text-white hover:!bg-primary-200/90 w-full"
                                label="เลือกโรงแรมจากรีวิว ที่ต้องได้คะแนน 3-4 ดาวขึ้นไป " wire:click="ansScore('2','b',2)" />
                        </li>
                        <li>
                            <x-button rounded class="bg-primary-200 text-white hover:!bg-primary-200/90 w-full"
                                label="เน้นเรื่องบริการและความเป็นส่วนตัว ขอเป็นโรงแรมระดับ 5 ดาว ที่ห้องมองเห็นวิวทะเล"
                                wire:click="ansScore('2','c',3)" />
                        </li>
                        <li>
                            <x-button rounded class="bg-primary-200 text-white hover:!bg-primary-200/90 w-full"
                                label="ขอโรงแรมไหนก็ได้ แต่ไม่เอาห้องน้ำที่เป็นกระจก" wire:click="ansScore('2','d',1)" />
                        </li>
                    </ul>

                </div>
                <img src="{{ asset('img/Q2-bottom.png') }}" class="h-1/4 absolute bottom-0" />
            </div>
        @break

        @case(3)
            <div class="pt-4">
                <div class="w-full bg-gradient-to-b from-slate-200 to-white rounded-full overflow-clip p-1">
                    <div class="h-2 bg-primary-{{ $current }}00 rounded-full" style="width: {{ ($current / 8) * 100 }}%">
                    </div>
                </div>
                <p class="text-2xs"><span class="text-primary-{{ $current }}00"> {{ $current }} </span>/ 8 </p>
            </div>
            <div class="h-full min-h-svh flex flex-col relative">
                <img src="{{ asset('img/Q3-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
                <div class="p-6 pt-12 w-11/12 m-auto flex-grow"
                    style="background: url({{ asset('img/frame.png') }}) center top; 
                background-size:contain; background-repeat: no-repeat;">

                    <h2 class="text-main text-3xl text-center">คุณเลือกจะ<b>กิน</b>อะไร<br> ใน<b>ทริปเที่ยว</b>ครั้งนี้</h2>
                    <span class="block text-center text-sm my-5">ตอบเพียง 1 ข้อเท่านั้น</span>

                    <ul class="grid gap-4">
                        <li>
                            <x-button rounded class="bg-primary-300 text-white hover:!bg-primary-300/90 w-full"
                                label="อาหารที่ดีที่สุดและต้องสดที่สุด ขอไปเลือกมาทำกินเองดีกว่า"
                                wire:click="ansScore('3','a',3)" />
                        </li>
                        <li>
                            <x-button rounded class="bg-primary-300 text-white hover:!bg-primary-300/90 w-full"
                                label="เลือกร้านมาก่อนและดูรีวิวจากเพจชื่อดัง " wire:click="ansScore('3','b',2)" />
                        </li>
                        <li>
                            <x-button rounded class="bg-primary-300 text-white hover:!bg-primary-300/90 w-full"
                                label="เดี๋ยวเข้าไปเสิร์ชง่าย ๆ ใน Google ‘ร้านอาหารใกล้ฉัน’"
                                wire:click="ansScore('3','c',1)" />
                        </li>
                        <li>
                            <x-button rounded class="bg-primary-300 text-white hover:!bg-primary-300/90 w-full"
                                label="คิดไม่ออก กินกระเพราไก่ไข่ดาวละกัน อร่อยชัวร์" wire:click="ansScore('3','d',0)" />
                        </li>
                    </ul>

                </div>
                <img src="{{ asset('img/Q3-bottom.png') }}" class="h-1/4 absolute bottom-0" />
            </div>
        @break

        @case(4)
            <div class="pt-4">
                <div class="w-full bg-gradient-to-b from-slate-200 to-white rounded-full overflow-clip p-1">
                    <div class="h-2 bg-primary-{{ $current }}00 rounded-full" style="width: {{ ($current / 8) * 100 }}%">
                    </div>
                </div>
                <p class="text-2xs"><span class="text-primary-{{ $current }}00"> {{ $current }} </span>/ 8 </p>
            </div>
            <div class="h-full min-h-svh flex flex-col relative">
                <img src="{{ asset('img/Q4-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
                <div class="p-6 pt-12 w-11/12 m-auto flex-grow"
                    style="background: url({{ asset('img/frame.png') }}) center top; 
                background-size:contain; background-repeat: no-repeat;">

                    <h2 class="text-main text-3xl text-center">คุณเลือก<b>เครื่องดื่ม</b>อะไร ในทริป<b>เที่ยวทะเล</b>ครั้งนี้
                    </h2>
                    <span class="block text-center text-sm my-5">ตอบเพียง 1 ข้อเท่านั้น</span>

                    <ul class="grid gap-4">
                        <li>
                            <x-button rounded class="bg-primary-400 text-white hover:!bg-primary-400/90 w-full"
                                label="ต้องการเป็นกาแฟที่ใช้เมล็ดจากเอธิโอเปีย ดริปด้วยน้ำอุณหภูมิ 95 องศา"
                                wire:click="ansScore('4','a',3)" />
                        </li>
                        <li>
                            <x-button rounded class="bg-primary-400 text-white hover:!bg-primary-400/90 w-full"
                                label="ขอเป็นกาแฟหวานน้อย ที่เพิ่มความหวานจากหญ้าหวานเท่านั้น"
                                wire:click="ansScore('4','b',2)" />
                        </li>
                        <li>
                            <x-button rounded class="bg-primary-400 text-white hover:!bg-primary-400/90 w-full"
                                label="มาร้านใหม่ทั้งทีขอลองเมนูพิเศษของร้านสักหน่อย" wire:click="ansScore('4','c',1)" />
                        </li>
                        <li>
                            <x-button rounded class="bg-primary-400 text-white hover:!bg-primary-400/90 w-full"
                                label="อะไรที่เร็วที่สุด เอามาเลย 1 แก้ว" wire:click="ansScore('4','d',0)" />
                        </li>
                    </ul>

                </div>
                <img src="{{ asset('img/Q4-bottom.png') }}" class="h-1/4 absolute bottom-0" />
            </div>
        @break

        @case(5)
            <div class="h-full min-h-svh flex flex-col relative"
                style="background: url({{ asset('img/story3.jpg') }}) center bottom; 
                    background-size:contain; background-repeat: no-repeat;">
                <div class="p-6 pt-12 w-11/12 m-auto flex-grow">

                    <h2 class="text-main text-3xl text-center"><b>เจอเพื่อนๆ ทั้งที</b> <br>แชร์เรื่องราวดีๆ ให้เพื่อนๆ ฟัง
                    </h2>

                    <div class="absolute bottom-[25%] left-0 px-[5%] w-full text-center">

                        <x-button flat rounded
                            class="!bg-gradient-to-b from-[#A87C4D] to-[#BF9768] !p-1 
                            hover:to-[#A87C4D] hover:from-[#BF9768] transition-all w-full h-16"
                            wire:click="ansScore('0','',0)">
                            <div
                                class="bg-gradient-to-b from-[#C3996B] to-[#AA7E51] 
                                hover:from-[#AA7E51] hover:to-[#AA7E51] transition-all w-full h-full rounded-full py-3 px-5 
                                text-white text-2xl grid place-content-center">
                                TRICK ดูแลตัวเองแบบคนช่างเลือก
                            </div>

                        </x-button>
                    </div>
                </div>
            </div>
        @break

        @case(6)
            <div class="pt-4">
                <div class="w-full bg-gradient-to-b from-slate-200 to-white rounded-full overflow-clip p-1">
                    <div class="h-2 bg-primary-{{ $current }}00 rounded-full"
                        style="width: {{ ($current / 8) * 100 }}%">
                    </div>
                </div>
                <p class="text-2xs"><span class="text-primary-{{ $current }}00"> {{ $current }} </span>/ 8 </p>
            </div>
            <div class="h-full min-h-svh flex flex-col relative">
                <img src="{{ asset('img/Q5-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
                <div class="p-6 pt-12 w-11/12 m-auto flex-grow"
                    style="background: url({{ asset('img/frame.png') }}) center top; 
                background-size:contain; background-repeat: no-repeat;">

                    <h2 class="text-main text-3xl text-center">คุณเลือกที่จะ<br> <b>ดูแลตัวเอง</b>ด้วยวิธีไหน </h2>
                    <span class="block text-center text-sm my-5">ตอบเพียง 1 ข้อเท่านั้น</span>

                    <ul class="grid gap-4">
                        <li>
                            <x-button rounded class="bg-primary-500 text-white hover:!bg-primary-500/90 w-full"
                                label="ออกกําลังกายแบบเบิร์นแอนด์บิ้วท์" wire:click="ansScore('5','a',0)" />
                        </li>
                        <li>
                            <x-button rounded class="bg-primary-500 text-white hover:!bg-primary-500/90 w-full"
                                label="ดูแลผิวแบบครบสเต็ป งานผิวหน้าเด็กต้องมา" wire:click="ansScore('5','b',0)" />
                        </li>
                        <li>
                            <x-button rounded class="bg-primary-500 text-white hover:!bg-primary-500/90 w-full"
                                label="ควบคุมอาหารอย่างเคร่ง เพื่อเร่งเบิร์น" wire:click="ansScore('5','c',0)" />
                        </li>
                        <li>
                            <x-button rounded class="bg-primary-500 text-white hover:!bg-primary-500/90 w-full"
                                label="นอนลดโทรม 6-8 ชั่วโมง ทุกวัน" wire:click="ansScore('5','d',0)" />
                        </li>
                    </ul>

                </div>
                <img src="{{ asset('img/Q5-bottom.png') }}" class="h-1/4 absolute bottom-0" />
            </div>
        @break

        @default
    @endswitch

    @isset($answer['group'])
        @switch($answer['group'])
            @case(1)
                @switch($page)
                    @case(7)
                        <div class="pt-4">
                            <div class="w-full bg-gradient-to-b from-slate-200 to-white rounded-full overflow-clip p-1">
                                <div class="h-2 text-variantsA-100 rounded-full" style="width: {{ ($current / 8) * 100 }}%">
                                </div>
                            </div>
                            <p class="text-2xs"><span class="text-variantsA-100"> {{ $current }} </span>/ 8 </p>
                        </div>
                        <div class="h-full min-h-svh flex flex-col relative">
                            <img src="{{ asset('img/Q6-1-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
                            <div class="p-6 pt-12 w-11/12 m-auto flex-grow"
                                style="background: url({{ asset('img/frame.png') }}) center top; 
                                background-size:contain; background-repeat: no-repeat;">

                                <h2 class="text-main text-3xl text-center">สิ่งที่คุณเลือกทำ <br>ประจำ<br>ก่อนนอน</b>คือ... </h2>
                                <span class="block text-center text-sm my-5">ตอบเพียง 1 ข้อเท่านั้น</span>

                                <ul class="grid gap-4">
                                    <li>
                                        <x-button rounded class="bg-variantsA-100 text-white hover:!bg-variantsA-100/90 w-full"
                                            label="โยคะใบหน้า" wire:click="ansScore('6','a',1)" />
                                    </li>
                                    <li>
                                        <x-button rounded class="bg-variantsA-100 text-white hover:!bg-variantsA-100/90 w-full"
                                            label="ฝึกสมาธิคลายเครียด" wire:click="ansScore('6','b',0)" />
                                    </li>
                                    <li>
                                        <x-button rounded class="bg-variantsA-100 text-white hover:!bg-variantsA-100/90 w-full"
                                            label="มาส์กหน้า" wire:click="ansScore('6','c',1)" />
                                    </li>
                                    <li>
                                        <x-button rounded class="bg-variantsA-100 text-white hover:!bg-variantsA-100/90 w-full"
                                            label="ทาโลชันบำรุงผิว" wire:click="ansScore('6','d',0)" />
                                    </li>
                                </ul>

                            </div>
                            <img src="{{ asset('img/Q6-1-bottom.png') }}" class="h-1/4 absolute bottom-0" />
                        </div>
                    @break

                    @case(8)
                        <div class="pt-4">
                            <div class="w-full bg-gradient-to-b from-slate-200 to-white rounded-full overflow-clip p-1">
                                <div class="h-2 text-variantsA-200 rounded-full" style="width: {{ ($current / 8) * 100 }}%">
                                </div>
                            </div>
                            <p class="text-2xs"><span class="text-variantsA-200"> {{ $current }} </span>/ 8 </p>
                        </div>
                        <div class="h-full min-h-svh flex flex-col relative">
                            <img src="{{ asset('img/Q7-1-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
                            <div class="p-6 pt-12 w-11/12 m-auto flex-grow"
                                style="background: url({{ asset('img/frame.png') }}) center top; 
                                background-size:contain; background-repeat: no-repeat;">

                                <h2 class="text-main text-3xl text-center">ให้คุณเลือก 1 ข้อ<br> ที่จะทำให้คุณ<b>มั่นใจ</b></h2>
                                <span class="block text-center text-sm my-5">ตอบเพียง 1 ข้อเท่านั้น</span>

                                <ul class="grid gap-4">
                                    <li>
                                        <x-button rounded class="bg-variantsA-200 text-white hover:!bg-variantsA-200/90 w-full"
                                            label="ผิวอิ่มฟู ดูชุ่มชื้น" wire:click="ansScore('7','a',1)" />
                                    </li>
                                    <li>
                                        <x-button rounded class="bg-variantsA-200 text-white hover:!bg-variantsA-200/90 w-full"
                                            label="ยิ้มสวยมั่นใจไร้ริ้วรอย" wire:click="ansScore('7','b',0)" />
                                    </li>
                                    <li>
                                        <x-button rounded class="bg-variantsA-200 text-white hover:!bg-variantsA-200/90 w-full"
                                            label="ผิวฉ่ำใสไม่มีดรอป" wire:click="ansScore('7','c',1)" />
                                    </li>
                                    <li>
                                        <x-button rounded class="bg-variantsA-200 text-white hover:!bg-variantsA-200/90 w-full"
                                            label="หน้าเด็กดูอ่อนกว่าวัย" wire:click="ansScore('7','d',0)" />
                                    </li>
                                </ul>

                            </div>
                            <img src="{{ asset('img/Q7-1-bottom.png') }}" class="h-1/4 absolute bottom-0" />
                        </div>
                    @break

                    @case(9)
                        <div class="pt-4">
                            <div class="w-full bg-gradient-to-b from-slate-200 to-white rounded-full overflow-clip p-1">
                                <div class="h-2 text-variantsA-300 rounded-full" style="width: {{ ($current / 8) * 100 }}%">
                                </div>
                            </div>
                            <p class="text-2xs"><span class="text-variantsA-300"> {{ $current }} </span>/ 8 </p>
                        </div>
                        <div class="h-full min-h-svh flex flex-col relative">
                            <img src="{{ asset('img/Q8-1-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
                            <div class="p-6 pt-12 w-11/12 m-auto flex-grow"
                                style="background: url({{ asset('img/frame.png') }}) center top; 
                                background-size:contain; background-repeat: no-repeat;">

                                <h2 class="text-main text-3xl text-center">ให้คุณเลือก 1 ข้อ <br>ที่<b>ตรงกับตัวคุณ</b>มากที่สุด</h2>
                                <span class="block text-center text-sm my-5">ตอบเพียง 1 ข้อเท่านั้น</span>

                                <ul class="grid gap-4">
                                    <li>
                                        <x-button rounded class="bg-variantsA-300 text-white hover:!bg-variantsA-300/90 w-full"
                                            label="สายนับแคล แคลยิ่งต่ำเรายิ่งแฮปปี้" wire:click="ansScore('8','a',1)" />
                                    </li>
                                    <li>
                                        <x-button rounded class="bg-variantsA-300 text-white hover:!bg-variantsA-300/90 w-full"
                                            label="สายวิตามิน กินอาหารดี ๆ ที่ได้วิตามินเน้น ๆ " wire:click="ansScore('8','b',2)" />
                                    </li>
                                    <li>
                                        <x-button rounded class="bg-variantsA-300 text-white hover:!bg-variantsA-300/90 w-full"
                                            label="สายคลีน ขออาหารสุขภาพจากวัตถุดิบธรรมชาติ" wire:click="ansScore('8','c',3)" />
                                    </li>
                                </ul>

                            </div>
                            <img src="{{ asset('img/Q8-1-bottom.png') }}" class="h-1/4 absolute bottom-0" />
                        </div>
                    @break

                    @default
                @endswitch
            @break

            @case(2)
                @switch($page)
                    @case(7)
                        <div class="pt-4">
                            <div class="w-full bg-gradient-to-b from-slate-200 to-white rounded-full overflow-clip p-1">
                                <div class="h-2 text-variantsB-100 rounded-full" style="width: {{ ($current / 8) * 100 }}%">
                                </div>
                            </div>
                            <p class="text-2xs"><span class="text-variantsB-100"> {{ $current }} </span>/ 8 </p>
                        </div>
                        <div class="h-full min-h-svh flex flex-col relative">
                            <img src="{{ asset('img/Q6-2-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
                            <div class="p-6 pt-12 w-11/12 m-auto flex-grow"
                                style="background: url({{ asset('img/frame.png') }}) center top; 
                                background-size:contain; background-repeat: no-repeat;">

                                <h2 class="text-main text-3xl text-center">สิ่งที่คุณเลือกทำ<br> ประจำ<b>หลังตื่นนอน...</b></h2>
                                <span class="block text-center text-sm my-5">ตอบเพียง 1 ข้อเท่านั้น</span>

                                <ul class="grid gap-4">
                                    <li>
                                        <x-button rounded class="bg-variantsB-100 text-white hover:!bg-variantsB-100/90 w-full"
                                            label="ดื่มน้ําเปล่า 1 แก้ว" wire:click="ansScore('6','a',1)" />
                                    </li>
                                    <li>
                                        <x-button rounded class="bg-variantsB-100 text-white hover:!bg-variantsB-100/90 w-full"
                                            label="เช็ก E-mail วางแผนการทํางาน" wire:click="ansScore('6','b',0)" />
                                    </li>
                                    <li>
                                        <x-button rounded class="bg-variantsB-100 text-white hover:!bg-variantsB-100/90 w-full"
                                            label="ส่องกระจกสํารวจดูร่างกาย" wire:click="ansScore('6','c',1)" />
                                    </li>
                                    <li>
                                        <x-button rounded class="bg-variantsB-100 text-white hover:!bg-variantsB-100/90 w-full"
                                            label="เปิดข่าว ตามเทรนด์บนโซเชียล" wire:click="ansScore('6','d',0)" />
                                    </li>
                                </ul>

                            </div>
                            <img src="{{ asset('img/Q6-2-bottom.png') }}" class="h-1/4 absolute bottom-0" />
                        </div>
                    @break

                    @case(8)
                        <div class="pt-4">
                            <div class="w-full bg-gradient-to-b from-slate-200 to-white rounded-full overflow-clip p-1">
                                <div class="h-2 text-variantsB-200 rounded-full" style="width: {{ ($current / 8) * 100 }}%">
                                </div>
                            </div>
                            <p class="text-2xs"><span class="text-variantsB-200"> {{ $current }} </span>/ 8 </p>
                        </div>
                        <div class="h-full min-h-svh flex flex-col relative">
                            <img src="{{ asset('img/Q7-2-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
                            <div class="p-6 pt-12 w-11/12 m-auto flex-grow"
                                style="background: url({{ asset('img/frame.png') }}) center top; 
                                background-size:contain; background-repeat: no-repeat;">

                                <h2 class="text-main text-3xl text-center">คุณเลือกที่จะ <br><b>ออกกำลังกา</b>ยแบบ...</h2>
                                <span class="block text-center text-sm my-5">ตอบเพียง 1 ข้อเท่านั้น</span>

                                <ul class="grid gap-4">
                                    <li>
                                        <x-button rounded class="bg-variantsB-200 text-white hover:!bg-variantsB-200/90 w-full"
                                            label="ต่อยมวยให้สุดหมัด" wire:click="ansScore('7','a',0)" />
                                    </li>
                                    <li>
                                        <x-button rounded class="bg-variantsB-200 text-white hover:!bg-variantsB-200/90 w-full"
                                            label="วิ่งกลางแจ้งกับแสงแดดจ้า" wire:click="ansScore('7','b',0)" />
                                    </li>
                                    <li>
                                        <x-button rounded class="bg-variantsB-200 text-white hover:!bg-variantsB-200/90 w-full"
                                            label="เร่งเบิร์น เดินชัน" wire:click="ansScore('7','c',1)" />
                                    </li>
                                    <li>
                                        <x-button rounded class="bg-variantsB-200 text-white hover:!bg-variantsB-200/90 w-full"
                                            label="โยคะเผาผลาญ บาลานซ์สัดส่วน" wire:click="ansScore('7','b',1)" />
                                    </li>
                                </ul>

                            </div>
                            <img src="{{ asset('img/Q7-2-bottom.png') }}" class="h-1/4 absolute bottom-0" />
                        </div>
                    @break

                    @case(9)
                        @isset($answer['milk'])
                            @switch($answer['milk'])
                                @case('oat')
                                    <div class="pt-4">
                                        <div class="w-full bg-gradient-to-b from-slate-200 to-white rounded-full overflow-clip p-1">
                                            <div class="h-2 text-variantsB-400 rounded-full" style="width: {{ ($current / 8) * 100 }}%">
                                            </div>
                                        </div>
                                        <p class="text-2xs"><span class="text-variantsB-400"> oat {{ $current }} </span>/ 8 </p>
                                    </div>
                                    <div class="h-full min-h-svh flex flex-col relative">
                                        <img src="{{ asset('img/Q8-2-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
                                        <div class="p-6 pt-12 w-11/12 m-auto flex-grow"
                                            style="background: url({{ asset('img/frame.png') }}) center top; 
                                background-size:contain; background-repeat: no-repeat;">

                                            <h2 class="text-main text-3xl text-center">ให้คุณเลือก 1 ข้อ <br>ท่ี<b>ตรงกับตัวคุณ</b>มากที่สุด</h2>
                                            <span class="block text-center text-sm my-5">ตอบเพียง 1 ข้อเท่านั้น</span>

                                            <ul class="grid gap-4">
                                                <li>
                                                    <x-button rounded class="bg-variantsB-400 text-white hover:!bg-variantsB-400/90 w-full"
                                                        label="มองหาสิ่งดี ๆ ในทุก ๆ วัน" wire:click="ansScore('8','a',1)" />
                                                </li>
                                                <li>
                                                    <x-button rounded class="bg-variantsB-400 text-white hover:!bg-variantsB-400/90 w-full"
                                                        label="การเป็นตัวเองนั่นแหละ คือเวอร์ชันที่ดีที่สุดแล้ว" wire:click="ansScore('8','b',2)" />
                                                </li>
                                                <li>
                                                    <x-button rounded class="bg-variantsB-400 text-white hover:!bg-variantsB-400/90 w-full"
                                                        label="สายหวาน นุ่มนวล ยิ้มรับทุกสถานการณ์" wire:click="ansScore('8','b',3)" />
                                                </li>
                                            </ul>

                                        </div>
                                        <img src="{{ asset('img/Q8-2-bottom.png') }}" class="h-1/4 absolute bottom-0" />
                                    </div>
                                @break

                                @case('pistachio')
                                    <div class="pt-4">
                                        <div class="w-full bg-gradient-to-b from-slate-200 to-white rounded-full overflow-clip p-1">
                                            <div class="h-2 text-variantsB-400 rounded-full" style="width: {{ ($current / 8) * 100 }}%">
                                            </div>
                                        </div>

                                        <p class="text-2xs"><span class="text-variantsB-400"> pistachio {{ $current }} </span>/ 8 </p>
                                    </div>
                                    <div class="h-full min-h-svh flex flex-col relative">
                                        <img src="{{ asset('img/Q8-2-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
                                        <div class="p-6 pt-12 w-11/12 m-auto flex-grow"
                                            style="background: url({{ asset('img/frame.png') }}) center top; 
                                background-size:contain; background-repeat: no-repeat;">

                                            <h2 class="text-main text-3xl text-center">ให้คุณเลือก 1 ข้อ <br>ท่ี<b>ตรงกับตัวคุณ</b>มากที่สุด</h2>
                                            <span class="block text-center text-sm my-5">ตอบเพียง 1 ข้อเท่านั้น</span>

                                            <ul class="grid gap-4">
                                                <li>
                                                    <x-button rounded class="bg-variantsB-300 text-white hover:!bg-variantsB-300/90 w-full"
                                                        label="มีความสุขกับการอกกกำลังกายทุกวัน" wire:click="ansScore('8','a',1)" />
                                                </li>
                                                <li>
                                                    <x-button rounded class="bg-variantsB-300 text-white hover:!bg-variantsB-300/90 w-full"
                                                        label="มีความสุขกับการได้กินอาหารดีๆ มีประโยชน์" wire:click="ansScore('8','b',2)" />
                                                </li>
                                                
                                            </ul>

                                        </div>
                                        <img src="{{ asset('img/Q8-2-bottom.png') }}" class="h-1/4 absolute bottom-0" />
                                    </div>
                                @break

                                @default
                            @endswitch
                        @endisset
                    @break

                    @default
                @endswitch
            @break

            @default
        @endswitch
    @endisset
</div>
