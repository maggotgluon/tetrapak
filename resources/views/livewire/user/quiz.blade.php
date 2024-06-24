<div class=" h-full bg-[#FFF2DC] px-4 xs:px-1">
    <div class="fixed top-1 left-1 max-w-sm z-10">
        score : {{ $score }}<br>
        {{ var_dump($answer) }}
        1234
    </div>
    <div class="pt-4">
        <div class="w-full bg-gradient-to-b from-slate-200 to-white rounded-full overflow-clip p-1">
            <div class="h-2 bg-primary-{{ $current }}00 rounded-full" style="width: {{ ($current / 8) * 100 }}%">
            </div>
        </div>
        <p class="text-2xs"><span class="text-primary-{{ $current }}00"> {{ $current }} </span>/ 8 </p>
    </div>
    @switch($page)
        @case(1)
            <div class="h-full min-h-svh flex flex-col relative">
                <img src="{{ asset('img/Q1-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
                <div class="p-6 pt-12 w-11/12 m-auto flex-grow"
                    style="background: url({{ asset('img/frame.png') }}) center top; 
                background-size:contain; background-repeat: no-repeat;">

                    <h2 class="text-main text-3xl text-center">เมื่อคุณจะไปเที่ยวทะเล คุณจะเลือกแต่งตัวแบบไหน</h2>
                    <span class="block text-center text-sm my-5">ตอบเพียง 1 ข้อเท่านั้น</span>

                    <ul class="grid gap-4">
                        <li>
                            <x-button rounded class="bg-primary-100 text-white hover:!bg-primary-100 w-full"
                                label="A. เสื้อคู่ที่แมทช์กับแฟน เดินไปไหนก็รู้ว่าเราน่ะคู่กัน (2 คะแนน)"
                                wire:click="ansScore('1','a',2)" />
                        </li>
                        <li>
                            <x-button rounded class="bg-primary-100 text-white hover:!bg-primary-100 w-full"
                                label="B. เดรสยาวสุดปังกับหมวกปีกกว้าง จะถ่ายรูปมุมไหนก็สวยเป๊ะ (3 คะแนน)"
                                wire:click="ansScore('1','b',3)" />
                        </li>
                        <li>
                            <x-button rounded class="bg-primary-100 text-white hover:!bg-primary-100 w-full"
                                label="C. เน้นความสบาย ขอกางเกงขาสั้นกับเสื้อยืด (1 คะแนน) " wire:click="ansScore('1','c',1)" />
                        </li>
                        <li>
                            <x-button rounded class="bg-primary-100 text-white hover:!bg-primary-100 w-full"
                                label="D. ไหน ๆ ก็ต้องเล่นน้ำอยู่แล้ว ใส่ชุดว่ายน้ำไปเลยละกัน (0 คะแนน)"
                                wire:click="ansScore('1','d',0)" />
                        </li>
                    </ul>

                </div>
                <img src="{{ asset('img/Q1-bottom.png') }}" class="w-2/6 absolute bottom-10" />
            </div>
        @break

        @case(2)
            <div class="h-full min-h-svh flex flex-col relative">
                <img src="{{ asset('img/Q2-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
                <div class="p-6 pt-12 w-11/12 m-auto flex-grow"
                    style="background: url({{ asset('img/frame.png') }}) center top; 
                background-size:contain; background-repeat: no-repeat;">

                    <h2 class="text-main text-3xl text-center">โรงแรมแบบไหนที่คุณจะเลือกพัก ในทริปเที่ยวทะเลครั้งนี้</h2>
                    <span class="block text-center text-sm my-5">ตอบเพียง 1 ข้อเท่านั้น</span>

                    <ul class="grid gap-4">
                        <li>
                            <x-button rounded class="bg-primary-200 text-white hover:!bg-primary-200 w-full"
                                label="A. โรงแรมไหนก็ไม่สำคัญ ขอได้ส่วนลดเยอะไว้ก่อน (0 คะแนน)"
                                wire:click="ansScore('2','a',0)" />
                        </li>
                        <li>
                            <x-button rounded class="bg-primary-200 text-white hover:!bg-primary-200 w-full"
                                label="B. เลือกโรงแรมจากรีวิว ที่ต้องได้คะแนน 3-4 ดาวขึ้นไป (2 คะแนน)"
                                wire:click="ansScore('2','b',2)" />
                        </li>
                        <li>
                            <x-button rounded class="bg-primary-200 text-white hover:!bg-primary-200 w-full"
                                label="C. เน้นเรื่องบริการและความเป็นส่วนตัว ขอเป็นโรงแรมระดับ 5 ดาว ที่ห้องมองเห็นวิวทะเล (3คะแนน)"
                                wire:click="ansScore('2','c',3)" />
                        </li>
                        <li>
                            <x-button rounded class="bg-primary-200 text-white hover:!bg-primary-200 w-full"
                                label="D. ขอโรงแรมไหนก็ได้ แต่ไม่เอาห้องน้ำที่เป็นกระจก (1 คะแนน)"
                                wire:click="ansScore('2','d',1)" />
                        </li>
                    </ul>

                </div>
                <img src="{{ asset('img/Q2-bottom.png') }}" class="w-2/6 absolute bottom-10" />
            </div>
        @break

        @case(3)
            <div class="h-full min-h-svh flex flex-col relative">
                <img src="{{ asset('img/Q3-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
                <div class="p-6 pt-12 w-11/12 m-auto flex-grow"
                    style="background: url({{ asset('img/frame.png') }}) center top; 
                background-size:contain; background-repeat: no-repeat;">

                    <h2 class="text-main text-3xl text-center">คุณเลือกจะกินอะไร ในทริปเที่ยวครั้งนี้</h2>
                    <span class="block text-center text-sm my-5">ตอบเพียง 1 ข้อเท่านั้น</span>

                    <ul class="grid gap-4">
                        <li>
                            <x-button rounded class="bg-primary-300 text-white hover:!bg-primary-300 w-full"
                                label="A. อาหารที่ดีที่สุดและต้องสดที่สุด ขอไปเลือกมาทำกินเองดีกว่า (3 คะแนน)"
                                wire:click="ansScore('3','a',3)" />
                        </li>
                        <li>
                            <x-button rounded class="bg-primary-300 text-white hover:!bg-primary-300 w-full"
                                label="B. เลือกร้านมาก่อนและดูรีวิวจากเพจชื่อดัง (2 คะแนน)" wire:click="ansScore('3','b',2)" />
                        </li>
                        <li>
                            <x-button rounded class="bg-primary-300 text-white hover:!bg-primary-300 w-full"
                                label="C. เดี๋ยวเข้าไปเสิร์ชง่าย ๆ ใน Google ‘ร้านอาหารใกล้ฉัน’ (1คะแนน)"
                                wire:click="ansScore('3','c',1)" />
                        </li>
                        <li>
                            <x-button rounded class="bg-primary-300 text-white hover:!bg-primary-300 w-full"
                                label="D. คิดไม่ออก กินกระเพราไก่ไข่ดาวละกัน อร่อยชัวร์ (0 คะแนน)"
                                wire:click="ansScore('3','d',0)" />
                        </li>
                    </ul>

                </div>
                <img src="{{ asset('img/Q3-bottom.png') }}" class="w-2/6 absolute bottom-10" />
            </div>
        @break

        @case(4)
            <div class="h-full min-h-svh flex flex-col relative"
                style="background: url({{ asset('img/story3.jpg') }}) center top; 
                    background-size:contain; background-repeat: no-repeat;">
                <div class="p-6 pt-12 w-11/12 m-auto flex-grow">

                    <h2 class="text-main text-3xl text-center">เจอเพื่อนๆ ทั้งที แชร์เรื่องราวดีๆ ให้เพื่อนๆ ฟัง</h2>
                    
                    <div class="absolute top-[75%] w-full text-center">
                        <x-button flat rounded class="" wire:click="ansScore('0','',0)" >
                        <p class="text-3xl">ต่อไป</p>
                        </x-button>
                    </div>
                </div>
            </div>
        @break 

        @case(5)
            <div class="h-full min-h-svh flex flex-col relative">
                <img src="{{ asset('img/Q4-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
                <div class="p-6 pt-12 w-11/12 m-auto flex-grow"
                    style="background: url({{ asset('img/frame.png') }}) center top; 
                background-size:contain; background-repeat: no-repeat;">

                    <h2 class="text-main text-3xl text-center">คุณเลือกเครื่องดื่มอะไร ในทริปเที่ยวทะเลครั้งนี้</h2>
                    <span class="block text-center text-sm my-5">ตอบเพียง 1 ข้อเท่านั้น</span>

                    <ul class="grid gap-4">
                        <li>
                            <x-button rounded class="bg-primary-400 text-white hover:!bg-primary-400 w-full"
                                label="A. ต้องการเป็นกาแฟที่ใช้เมล็ดจากเอธิโอเปีย ดริปด้วยน้ำอุณหภูมิ 95 องศา (3 คะแนน)"
                                wire:click="ansScore('4','a',3)" />
                        </li>
                        <li>
                            <x-button rounded class="bg-primary-400 text-white hover:!bg-primary-400 w-full"
                                label="B. ขอเป็นกาแฟหวานน้อย ที่เพิ่มความหวานจากหญ้าหวานเท่านั้น (2 คะแนน)"
                                wire:click="ansScore('4','b',2)" />
                        </li>
                        <li>
                            <x-button rounded class="bg-primary-400 text-white hover:!bg-primary-400 w-full"
                                label="C. มาร้านใหม่ทั้งทีขอลองเมนูพิเศษของร้านสักหน่อย (1คะแนน) "
                                wire:click="ansScore('4','c',1)" />
                        </li>
                        <li>
                            <x-button rounded class="bg-primary-400 text-white hover:!bg-primary-400 w-full"
                                label="D. อะไรที่เร็วที่สุด เอามาเลย 1 แก้ว (0 คะแนน)" wire:click="ansScore('4','d',0)" />
                        </li>
                    </ul>

                </div>
                <img src="{{ asset('img/Q4-bottom.png') }}" class="w-2/6 absolute bottom-10" />
            </div>
        @break

        @case(6)
            <div class="h-full min-h-svh flex flex-col relative">
                <img src="{{ asset('img/Q5-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
                <div class="p-6 pt-12 w-11/12 m-auto flex-grow"
                    style="background: url({{ asset('img/frame.png') }}) center top; 
                background-size:contain; background-repeat: no-repeat;">

                    <h2 class="text-main text-3xl text-center">คุณเลือกที่จะ ดูแลตัวเองด้วยวิธีไหน </h2>
                    <span class="block text-center text-sm my-5">ตอบเพียง 1 ข้อเท่านั้น</span>

                    <ul class="grid gap-4">
                        <li>
                            <x-button rounded class="bg-primary-500 text-white hover:!bg-primary-100 w-full"
                                label="A. ออกกําลังกายแบบเบิร์นแอนด์บิ้วท์" wire:click="ansScore('5','a',0)" />
                        </li>
                        <li>
                            <x-button rounded class="bg-primary-500 text-white hover:!bg-primary-100 w-full"
                                label="B. ดูแลผิวแบบครบสเต็ป งานผิวหน้าเด็กต้องมา" wire:click="ansScore('5','b',0)" />
                        </li>
                        <li>
                            <x-button rounded class="bg-primary-500 text-white hover:!bg-primary-100 w-full"
                                label="C. ควบคุมอาหารอย่างเคร่ง เพื่อเร่งเบิร์น" wire:click="ansScore('5','c',0)" />
                        </li>
                        <li>
                            <x-button rounded class="bg-primary-500 text-white hover:!bg-primary-100 w-full"
                                label="D. นอนลดโทรม 6-8 ชั่วโมง ทุกวัน" wire:click="ansScore('5','d',0)" />
                        </li>
                    </ul>

                </div>
                <img src="{{ asset('img/Q5-bottom.png') }}" class="w-2/6 absolute bottom-10" />
            </div>
        @break

        @default
        
    @endswitch
    
    @isset($group)
        @switch($group)
            @case(1)
                @switch($page)
                    @case(7)
                        <div class="h-full min-h-svh flex flex-col relative">
                            <img src="{{ asset('img/Q6-1-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
                            <div class="p-6 pt-12 w-11/12 m-auto flex-grow"
                                style="background: url({{ asset('img/frame.png') }}) center top; 
                                background-size:contain; background-repeat: no-repeat;">

                                <h2 class="text-main text-3xl text-center">สิ่งที่คุณเลือกทำ ประจำก่อนนอนคือ... </h2>
                                <span class="block text-center text-sm my-5">ตอบเพียง 1 ข้อเท่านั้น</span>

                                <ul class="grid gap-4">
                                    <li>
                                        <x-button rounded class="bg-variantsA-100 text-white hover:!bg-primary-100/5 w-full"
                                            label="A. โยคะใบหน้า (1 คะแนน)" wire:click="ansScore('6','a',1)" />
                                    </li>
                                    <li>
                                        <x-button rounded class="bg-variantsA-100 text-white hover:!bg-primary-100/5 w-full"
                                            label="B. ฝึกสมาธิคลายเครียด (0 คะแนน)" wire:click="ansScore('6','b',0)" />
                                    </li>
                                    <li>
                                        <x-button rounded class="bg-variantsA-100 text-white hover:!bg-primary-100/5 w-full"
                                            label="C. มาส์กหน้า (1 คะแนน)" wire:click="ansScore('6','c',1)" />
                                    </li>
                                    <li>
                                        <x-button rounded class="bg-variantsA-100 text-white hover:!bg-primary-100/5 w-full"
                                            label="D. ทาโลชันบำรุงผิว (0 คะแนน)" wire:click="ansScore('6','d',0)" />
                                    </li>
                                </ul>

                            </div>
                            <img src="{{ asset('img/Q6-1-bottom.png') }}" class="w-2/6 absolute bottom-10" />
                        </div>
                    @break

                    @case(8)
                        <div class="h-full min-h-svh flex flex-col relative">
                            <img src="{{ asset('img/Q8-1-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
                            <div class="p-6 pt-12 w-11/12 m-auto flex-grow"
                                style="background: url({{ asset('img/frame.png') }}) center top; 
                                background-size:contain; background-repeat: no-repeat;">

                                <h2 class="text-main text-3xl text-center">ให้คุณเลือก 1 ข้อ ท่ีตรงกับตัวคุณมากที่สุด</h2>
                                <span class="block text-center text-sm my-5">ตอบเพียง 1 ข้อเท่านั้น</span>

                                <ul class="grid gap-4">
                                    <li>
                                        <x-button rounded class="bg-variantsA-300 text-white hover:!bg-primary-100/5 w-full"
                                            label="A. สายนับแคล แคลยิ่งต่ำเรายิ่งแฮปปี่" wire:click="ansScore('8','a',1)" />
                                    </li>
                                    <li>
                                        <x-button rounded class="bg-variantsA-300 text-white hover:!bg-primary-100/5 w-full"
                                            label="B. สายวิตามิน กินอาหารดี ๆ ที่ได้วิตามินเน้น ๆ " wire:click="ansScore('8','b',2)" />
                                    </li>
                                    <li>
                                        <x-button rounded class="bg-variantsA-300 text-white hover:!bg-primary-100/5 w-full"
                                            label="C. สายคลีน ขออาหารสุขภาพจากวัตถุดิบธรรมชาติ" wire:click="ansScore('8','c',3)" />
                                    </li>
                                </ul>

                            </div>
                            <img src="{{ asset('img/Q8-1-bottom.png') }}" class="w-2/6 absolute bottom-10" />
                        </div>
                    @break

                    @case(9)
                        <div class="h-full min-h-svh flex flex-col relative">
                            <img src="{{ asset('img/Q8-1-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
                            <div class="p-6 pt-12 w-11/12 m-auto flex-grow"
                                style="background: url({{ asset('img/frame.png') }}) center top; 
                                background-size:contain; background-repeat: no-repeat;">

                                <h2 class="text-main text-3xl text-center">ให้คุณเลือก 1 ข้อ ท่ีตรงกับตัวคุณมากที่สุด</h2>
                                <span class="block text-center text-sm my-5">ตอบเพียง 1 ข้อเท่านั้น</span>

                                <ul class="grid gap-4">
                                    <li>
                                        <x-button rounded class="bg-variantsA-300 text-white hover:!bg-primary-100/5 w-full"
                                            label="A. สายนับแคล แคลยิ่งต่ำเรายิ่งแฮปปี่" wire:click="ansScore('8','a',1)" />
                                    </li>
                                    <li>
                                        <x-button rounded class="bg-variantsA-300 text-white hover:!bg-primary-100/5 w-full"
                                            label="B. สายวิตามิน กินอาหารดี ๆ ที่ได้วิตามินเน้น ๆ " wire:click="ansScore('8','b',2)" />
                                    </li>
                                    <li>
                                        <x-button rounded class="bg-variantsA-300 text-white hover:!bg-primary-100/5 w-full"
                                            label="C. สายคลีน ขออาหารสุขภาพจากวัตถุดิบธรรมชาติ" wire:click="ansScore('8','c',3)" />
                                    </li>
                                </ul>

                            </div>
                            <img src="{{ asset('img/Q8-1-bottom.png') }}" class="w-2/6 absolute bottom-10" />
                        </div>
                    @break

                    @default
                @endswitch
            @break

            @case(2)
                @switch($page)
                    @case(7)
                        <div class="h-full min-h-svh flex flex-col relative">
                            <img src="{{ asset('img/Q6-2-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
                            <div class="p-6 pt-12 w-11/12 m-auto flex-grow"
                                style="background: url({{ asset('img/frame.png') }}) center top; 
                                background-size:contain; background-repeat: no-repeat;">

                                <h2 class="text-main text-3xl text-center">สิ่งที่คุณเลือกทำ ประจำหลังตื่นนอน...</h2>
                                <span class="block text-center text-sm my-5">ตอบเพียง 1 ข้อเท่านั้น</span>

                                <ul class="grid gap-4">
                                    <li>
                                        <x-button rounded class="bg-variantsB-100 text-white hover:!bg-primary-100/5 w-full"
                                            label="A. ดื่มน้ําเปล่า 1 แก้ว (1 คะแนน)" wire:click="ansScore('6','a',1)" />
                                    </li>
                                    <li>
                                        <x-button rounded class="bg-variantsB-100 text-white hover:!bg-primary-100/5 w-full"
                                            label="B. เช็ก E-mail วางแผนการทํางาน (0 คะแนน)" wire:click="ansScore('6','b',0)" />
                                    </li>
                                    <li>
                                        <x-button rounded class="bg-variantsB-100 text-white hover:!bg-primary-100/5 w-full"
                                            label="C. ส่องกระจกสํารวจดูร่างกาย (1คะแนน)" wire:click="ansScore('6','c',1)" />
                                    </li>
                                    <li>
                                        <x-button rounded class="bg-variantsB-100 text-white hover:!bg-primary-100/5 w-full"
                                            label="D. เปิดข่าว ตามเทรนด์บนโซเชียล (0 คะแนน)" wire:click="ansScore('6','d',0)" />
                                    </li>
                                </ul>

                            </div>
                            <img src="{{ asset('img/Q6-2-bottom.png') }}" class="w-2/6 absolute bottom-10" />
                        </div>
                    @break

                    @case(8)
                        <div class="h-full min-h-svh flex flex-col relative">
                            <img src="{{ asset('img/Q7-2-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
                            <div class="p-6 pt-12 w-11/12 m-auto flex-grow"
                                style="background: url({{ asset('img/frame.png') }}) center top; 
                                background-size:contain; background-repeat: no-repeat;">

                                <h2 class="text-main text-3xl text-center">คุณเลือกที่จะ ออกกำลังกายแบบ...</h2>
                                <span class="block text-center text-sm my-5">ตอบเพียง 1 ข้อเท่านั้น</span>

                                <ul class="grid gap-4">
                                    <li>
                                        <x-button rounded class="bg-variantsB-200 text-white hover:!bg-primary-100/5 w-full"
                                            label="A. ต่อยมวยให้สุดหมัด (0 คะแนน)" wire:click="ansScore('7','a',0)" />
                                    </li>
                                    <li>
                                        <x-button rounded class="bg-variantsB-200 text-white hover:!bg-primary-100/5 w-full"
                                            label="B. วิ่งกลางแจ้งกับแสงแดดจ้า (0คะแนน)" wire:click="ansScore('7','b',0)" />
                                    </li>
                                    <li>
                                        <x-button rounded class="bg-variantsB-200 text-white hover:!bg-primary-100/5 w-full"
                                            label="C. เร่งเบิร์น เดินชัน (1คะแนน)" wire:click="ansScore('7','c',1)" />
                                    </li>
                                    <li>
                                        <x-button rounded class="bg-variantsB-200 text-white hover:!bg-primary-100/5 w-full"
                                            label="D. โยคะเผาผลาญ บาลานซ์สัดส่วน (1 คะแนน)" wire:click="ansScore('7','b',1)" />
                                    </li>
                                </ul>

                            </div>
                            <img src="{{ asset('img/Q7-2-bottom.png') }}" class="w-2/6 absolute bottom-10" />
                        </div>
                    @break

                    @case(9)
                        <div class="h-full min-h-svh flex flex-col relative">
                            <img src="{{ asset('img/Q8-2-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
                            <div class="p-6 pt-12 w-11/12 m-auto flex-grow"
                                style="background: url({{ asset('img/frame.png') }}) center top; 
                                background-size:contain; background-repeat: no-repeat;">

                                <h2 class="text-main text-3xl text-center">ให้คุณเลือก 1 ข้อ ท่ีตรงกับตัวคุณมากที่สุด</h2>
                                <span class="block text-center text-sm my-5">ตอบเพียง 1 ข้อเท่านั้น</span>

                                <ul class="grid gap-4">
                                    <li>
                                        <x-button rounded class="bg-variantsB-400 text-white hover:!bg-primary-100/5 w-full"
                                            label="A. มองหาสิ่งดี ๆ ในทุก ๆ วัน" wire:click="ansScore('8','a',1)" />
                                    </li>
                                    <li>
                                        <x-button rounded class="bg-variantsB-400 text-white hover:!bg-primary-100/5 w-full"
                                            label="B. การเป็นตัวเองนั่นแหละ คือเวอร์ชันที่ดีที่สุดแล้ว"
                                            wire:click="ansScore('8','b',1)" />
                                    </li>
                                    <li>
                                        <x-button rounded class="bg-variantsB-400 text-white hover:!bg-primary-100/5 w-full"
                                            label="C. สายหวาน นุ่มนวล ยิ้มรับทุกสถานการณ์" wire:click="ansScore('8','b',1)" />
                                    </li>
                                </ul>

                            </div>
                            <img src="{{ asset('img/Q8-2-bottom.png') }}" class="w-2/6 absolute bottom-10" />
                        </div>
                    @break

                    @default
                @endswitch
            @break

            @default
        @endswitch
    @endisset
</div>
