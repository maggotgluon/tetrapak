<div class="overflow-scroll h-full bg-[#FFF2DC] px-4 xs:px-1">
    <div class="fixed">
        score : {{$score}}<br>
        {{var_dump($answer)}}
    </div>
    <div class="pt-4">
        <div class="w-full bg-gradient-to-b from-slate-200 to-white rounded-full overflow-clip p-1">
            <div class="h-2 bg-primary-{{ $current }}00 rounded-full" style="width: {{ ($current / 8) * 100 }}%">
            </div>
        </div>
        <p class="text-xs"><span class="text-primary-{{ $current }}00"> {{ $current }} </span>/ 8 </p>

    </div>
    <div class="h-full min-h-svh 
    {{ isset($answer[1]) ? ' hidden pointer-events-none' : ' block' }} 
     flex flex-col relative">
        <img src="{{ asset('img/Q1-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
        <div style="background: url({{ asset('img/frame.png') }}) center top; background-size:contain; background-repeat: no-repeat;"
            class="p-6 pt-12 w-11/12 m-auto flex-grow">
            <h2 class="text-main text-3xl text-center">เมื่อคุณจะไปเที่ยวทะเล
                คุณจะเลือกแต่งตัวแบบไหน</h2>
            <span class="block text-center text-sm my-5">ตอบเพียง 1 ข้อเท่านั้น</span>
            <ul class="grid gap-4">
                <li><x-button class="bg-primary-100 text-white hover:!bg-primary-100 w-full" rounded
                        label="A. เสื้อคู่ที่แมทช์กับแฟน เดินไปไหนก็รู้ว่าเราน่ะคู่กัน (2 คะแนน)"
                        wire:click="ansScore('1','a',2)" /></li>
                <li><x-button class="bg-primary-100 text-white hover:!bg-primary-100 w-full" rounded
                        label="B. เดรสยาวสุดปังกับหมวกปีกกว้าง จะถ่ายรูปมุมไหนก็สวยเป๊ะ (3 คะแนน)"
                        wire:click="ansScore('1','b',3)" /></li>
                <li><x-button class="bg-primary-100 text-white hover:!bg-primary-100 w-full" rounded
                        label="C. เน้นความสบาย ขอกางเกงขาสั้นกับเสื้อยืด (1 คะแนน) " wire:click="ansScore('1','c',1)" />
                </li>
                <li><x-button class="bg-primary-100 text-white hover:!bg-primary-100 w-full" rounded
                        label="D. ไหน ๆ ก็ต้องเล่นน้ำอยู่แล้ว ใส่ชุดว่ายน้ำไปเลยละกัน (0 คะแนน)"
                        wire:click="ansScore('1','d',0)" /></li>
            </ul>
        </div>
        <img src="{{ asset('img/Q1-bottom.png') }}" class="w-2/6 absolute bottom-10" />
    </div>


    <div class="h-full min-h-svh 
    {{ isset($answer[2]) ? ' hidden pointer-events-none' : ' block' }} 
     flex flex-col relative">

        <img src="{{ asset('img/Q2-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
        <div style="background: url({{ asset('img/frame.png') }}) center top; background-size:contain; background-repeat: no-repeat;"
            class="p-6 pt-12 w-11/12 m-auto flex-grow">
            <h2 class="text-main text-3xl text-center">โรงแรมแบบไหนที่คุณจะเลือกพัก
                ในทริปเที่ยวทะเลครั้งนี้</h2>
            <span class="block text-center text-sm my-5">ตอบเพียง 1 ข้อเท่านั้น</span>
            <ul class="grid gap-4">
                <li><x-button class="bg-primary-200 text-white hover:!bg-primary-200 w-full" rounded
                        label="A. โรงแรมไหนก็ไม่สำคัญ ขอได้ส่วนลดเยอะไว้ก่อน (0 คะแนน)"
                        wire:click="ansScore('2','a',0)" /></li>
                <li><x-button class="bg-primary-200 text-white hover:!bg-primary-200 w-full" rounded
                        label="B. เลือกโรงแรมจากรีวิว ที่ต้องได้คะแนน 3-4 ดาวขึ้นไป (2 คะแนน)"
                        wire:click="ansScore('2','b',2)" /></li>
                <li><x-button class="bg-primary-200 text-white hover:!bg-primary-200 w-full" rounded
                        label="C. เน้นเรื่องบริการและความเป็นส่วนตัว ขอเป็นโรงแรมระดับ 5 ดาว ที่ห้องมองเห็นวิวทะเล (3คะแนน)"
                        wire:click="ansScore('2','c',3)" /></li>
                <li><x-button class="bg-primary-200 text-white hover:!bg-primary-200 w-full" rounded
                        label="D. ขอโรงแรมไหนก็ได้ แต่ไม่เอาห้องน้ำที่เป็นกระจก (1 คะแนน)"
                        wire:click="ansScore('2','d',1)" /></li>
            </ul>
        </div>
        <img src="{{ asset('img/Q2-bottom.png') }}" class="w-2/6 absolute bottom-10" />
    </div>


    <div class="h-full min-h-svh 
    {{ isset($answer[3]) ? ' hidden pointer-events-none' : ' block' }} 
     flex flex-col relative">

        <img src="{{ asset('img/Q3-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
        <div style="background: url({{ asset('img/frame.png') }}) center top; background-size:contain; background-repeat: no-repeat;"
            class="p-6 pt-12 w-11/12 m-auto flex-grow">
            <h2 class="text-main text-3xl text-center">คุณเลือกจะกินอะไร
                ในทริปเที่ยวครั้งนี้
            </h2>
            <span class="block text-center text-sm my-5">ตอบเพียง 1 ข้อเท่านั้น</span>
            <ul class="grid gap-4">
                <li><x-button class="bg-primary-300 text-white hover:!bg-primary-300 w-full" rounded
                        label="A. อาหารที่ดีที่สุดและต้องสดที่สุด ขอไปเลือกมาทำกินเองดีกว่า (3 คะแนน)"
                        wire:click="ansScore('3','a',3)" /></li>
                <li><x-button class="bg-primary-300 text-white hover:!bg-primary-300 w-full" rounded
                        label="B. เลือกร้านมาก่อนและดูรีวิวจากเพจชื่อดัง (2 คะแนน)" wire:click="ansScore('3','b',2)" />
                </li>
                <li><x-button class="bg-primary-300 text-white hover:!bg-primary-300 w-full" rounded
                        label="C. เดี๋ยวเข้าไปเสิร์ชง่าย ๆ ใน Google ‘ร้านอาหารใกล้ฉัน’ (1คะแนน)"
                        wire:click="ansScore('3','c',1)" /></li>
                <li><x-button class="bg-primary-300 text-white hover:!bg-primary-300 w-full" rounded
                        label="D. คิดไม่ออก กินกระเพราไก่ไข่ดาวละกัน อร่อยชัวร์ (0 คะแนน)"
                        wire:click="ansScore('3','d',0)" /></li>
            </ul>
        </div>
        <img src="{{ asset('img/Q3-bottom.png') }}" class="w-2/6 absolute bottom-10" />
    </div>


    <div class="h-full min-h-svh 
    {{ isset($answer[4]) ? ' hidden pointer-events-none' : ' block' }} 
     flex flex-col relative">

        <img src="{{ asset('img/Q4-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
        <div style="background: url({{ asset('img/frame.png') }}) center top; background-size:contain; background-repeat: no-repeat;"
            class="p-6 pt-12 w-11/12 m-auto flex-grow">
            <h2 class="text-main text-3xl text-center">คุณเลือกเครื่องดื่มอะไร
                ในทริปเที่ยวทะเลครั้งนี้</h2>
            <span class="block text-center text-sm my-5">ตอบเพียง 1 ข้อเท่านั้น</span>
            <ul class="grid gap-4">
                <li><x-button class="bg-primary-400 text-white hover:!bg-primary-400 w-full" rounded
                        label="A. ต้องการเป็นกาแฟที่ใช้เมล็ดจากเอธิโอเปีย ดริปด้วยน้ำอุณหภูมิ 95 องศา (3 คะแนน)"
                        wire:click="ansScore('4','a',3)" /></li>
                <li><x-button class="bg-primary-400 text-white hover:!bg-primary-400 w-full" rounded
                        label="B. ขอเป็นกาแฟหวานน้อย ที่เพิ่มความหวานจากหญ้าหวานเท่านั้น (2 คะแนน)"
                        wire:click="ansScore('4','b',2)" /></li>
                <li><x-button class="bg-primary-400 text-white hover:!bg-primary-400 w-full" rounded
                        label="C. มาร้านใหม่ทั้งทีขอลองเมนูพิเศษของร้านสักหน่อย (1คะแนน) "
                        wire:click="ansScore('4','c',1)" /></li>
                <li><x-button class="bg-primary-400 text-white hover:!bg-primary-400 w-full" rounded
                        label="D. อะไรที่เร็วที่สุด เอามาเลย 1 แก้ว (0 คะแนน)" wire:click="ansScore('4','d',0)" /></li>
            </ul>
        </div>
        <img src="{{ asset('img/Q4-bottom.png') }}" class="w-2/6 absolute bottom-10" />
    </div>


    <div class="h-full min-h-svh 
    {{ isset($answer[5]) ? ' hidden pointer-events-none' : ' block' }} 
     flex flex-col relative">

        <img src="{{ asset('img/Q5-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
        <div style="background: url({{ asset('img/frame.png') }}) center top; background-size:contain; background-repeat: no-repeat;"
            class="p-6 pt-12 w-11/12 m-auto flex-grow">
            <h2 class="text-main text-3xl text-center">คุณเลือกที่จะ
                ดูแลตัวเองด้วยวิธีไหน
            </h2>
            <span class="block text-center text-sm my-5">ตอบเพียง 1 ข้อเท่านั้น</span>
            <ul class="grid gap-4">
                <li><x-button class="bg-primary-500 text-white hover:!bg-primary-100 w-full" rounded
                        label="A. ออกกําลังกายแบบเบิร์นแอนด์บิ้วท์" wire:click="ansScore('5','a',0)" /></li>
                <li><x-button class="bg-primary-500 text-white hover:!bg-primary-100 w-full" rounded
                        label="B. ดูแลผิวแบบครบสเต็ป งานผิวหน้าเด็กต้องมา" wire:click="ansScore('5','b',0)" /></li>
                <li><x-button class="bg-primary-500 text-white hover:!bg-primary-100 w-full" rounded
                        label="C. ควบคุมอาหารอย่างเคร่ง เพื่อเร่งเบิร์น" wire:click="ansScore('5','c',0)" /></li>
                <li><x-button class="bg-primary-500 text-white hover:!bg-primary-100 w-full" rounded
                        label="D. นอนลดโทรม 6-8 ชั่วโมง ทุกวัน" wire:click="ansScore('5','d',0)" /></li>
            </ul>
        </div>
        <img src="{{ asset('img/Q5-bottom.png') }}" class="w-2/6 absolute bottom-10" />
    </div>
    @isset($answer['group'])
        @switch($answer['group'])
            @case(1)
                <div class="h-full min-h-svh 
                {{ isset($answer[6]) ? ' hidden pointer-events-none' : ' block' }} 
                flex flex-col relative">
                    6
                    <img src="{{ asset('img/Q6-1-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
                    <div style="background: url({{ asset('img/frame.png') }}) center top; background-size:contain; background-repeat: no-repeat;"
            class="p-6 pt-12 w-11/12 m-auto flex-grow">
                    <h2 class="text-main text-3xl text-center">สิ่งที่คุณเลือกทำ
                        ประจำก่อนนอนคือ... </h2>
                    <ul class="grid gap-4">
                        <li><x-button class="bg-variantsA-100 text-white hover:!bg-primary-100/5 w-full" rounded
                                label="A. โยคะใบหน้า (1 คะแนน)" wire:click="ansScore('6','a',1)" /></li>
                        <li><x-button class="bg-variantsA-100 text-white hover:!bg-primary-100/5 w-full" rounded
                                label="B. ฝึกสมาธิคลายเครียด (0 คะแนน)" wire:click="ansScore('6','b',0)" /></li>
                        <li><x-button class="bg-variantsA-100 text-white hover:!bg-primary-100/5 w-full" rounded
                                label="C. มาส์กหน้า (1 คะแนน)" wire:click="ansScore('6','c',1)" /></li>
                        <li><x-button class="bg-variantsA-100 text-white hover:!bg-primary-100/5 w-full" rounded
                                label="D. ทาโลชันบำรุงผิว (0 คะแนน)" wire:click="ansScore('6','d',0)" /></li>
                    </ul>
                </div>

                    <img src="{{ asset('img/Q1-bottom.png') }}" class="w-2/6 absolute bottom-10" />
                </div>


                <div class="h-full min-h-svh 
                {{ isset($answer[7]) ? ' hidden pointer-events-none' : ' block' }} 
                flex flex-col relative">
                    7
                    <img src="{{ asset('img/Q7-1-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
                    <div style="background: url({{ asset('img/frame.png') }}) center top; background-size:contain; background-repeat: no-repeat;"
            class="p-6 pt-12 w-11/12 m-auto flex-grow">
                    <h2 class="text-main text-3xl text-center">ให้คุณเลือก 1 ข้อ ที่จะทําให้คุณมีมั่นใจ</h2>
                    <ul class="grid gap-4">
                        <li><x-button class="bg-variantsA-200 text-white hover:!bg-primary-100/5 w-full" rounded
                                label="A. ผิวอิ่มฟู ดูชุ่มชื้น (1 คะแนน)" wire:click="ansScore('7','a',1)" /></li>
                        <li><x-button class="bg-variantsA-200 text-white hover:!bg-primary-100/5 w-full" rounded
                                label="B. ยิ้มสวยมั่นใจไร้ริ้วรอย (0 คะแนน)" wire:click="ansScore('7','b',0)" /></li>
                        <li><x-button class="bg-variantsA-200 text-white hover:!bg-primary-100/5 w-full" rounded
                                label="C. ผิวฉ่ำใสไม่มีดรอป (1 คะแนน)" wire:click="ansScore('7','c',1)" /></li>
                        <li><x-button class="bg-variantsA-200 text-white hover:!bg-primary-100/5 w-full" rounded
                                label="D. หน้าเด็กดูอ่อนกว่าวัย (0 คะแนน)" wire:click="ansScore('7','d',0)" /></li>
                    </ul>
                </div>

                    <img src="{{ asset('img/Q1-bottom.png') }}" class="w-2/6 absolute bottom-10" />
                </div>


                <div class="h-full min-h-svh 
                {{ isset($answer[8]) ? ' hidden pointer-events-none' : ' block' }} 
                flex flex-col relative">
                    8
                    <img src="{{ asset('img/Q8-1-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
                    <div style="background: url({{ asset('img/frame.png') }}) center top; background-size:contain; background-repeat: no-repeat;"
            class="p-6 pt-12 w-11/12 m-auto flex-grow">
                    <h2 class="text-main text-3xl text-center">ให้คุณเลือก 1 ข้อ
                        ท่ีตรงกับตัวคุณมากที่สุด
                    </h2>
                    <ul class="grid gap-4">
                        <li><x-button class="bg-variantsA-300 text-white hover:!bg-primary-100/5 w-full" rounded
                                label="A. สายนับแคล แคลยิ่งต่ำเรายิ่งแฮปปี่" wire:click="ansScore('8','a',1)" /></li>
                        <li><x-button class="bg-variantsA-300 text-white hover:!bg-primary-100/5 w-full" rounded
                                label="B. สายวิตามิน กินอาหารดี ๆ ที่ได้วิตามินเน้น ๆ " wire:click="ansScore('8','b',2)" /></li>
                        <li><x-button class="bg-variantsA-300 text-white hover:!bg-primary-100/5 w-full" rounded
                                label="C. สายคลีน ขออาหารสุขภาพจากวัตถุดิบธรรมชาติ" wire:click="ansScore('8','c',3)" /></li>
                    </ul>
                </div>

                    <img src="{{ asset('img/Q1-bottom.png') }}" class="w-2/6 absolute bottom-10" />
                </div>
            @break

            @case(2)
                <hr>group 2


                <div class="h-full min-h-svh 
                {{ isset($answer[6]) ? ' hidden pointer-events-none' : ' block' }} 
                flex flex-col relative">
                    6
                    <img src="{{ asset('img/Q6-2-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
                    <div style="background: url({{ asset('img/frame.png') }}) center top; background-size:contain; background-repeat: no-repeat;"
            class="p-6 pt-12 w-11/12 m-auto flex-grow">
                    <h2 class="text-main text-3xl text-center">สิ่งที่คุณเลือกทำ
                        ประจำหลังตื่นนอน...
                    </h2>
                    <ul class="grid gap-4">
                        <li><x-button class="bg-variantsB-100 text-white hover:!bg-primary-100/5 w-full" rounded
                                label="A. ดื่มน้ําเปล่า 1 แก้ว (1 คะแนน)" wire:click="ansScore('6','a',1)" /></li>
                        <li><x-button class="bg-variantsB-100 text-white hover:!bg-primary-100/5 w-full" rounded
                                label="B. เช็ก E-mail วางแผนการทํางาน (0 คะแนน)" wire:click="ansScore('6','b',0)" /></li>
                        <li><x-button class="bg-variantsB-100 text-white hover:!bg-primary-100/5 w-full" rounded
                                label="C. ส่องกระจกสํารวจดูร่างกาย (1คะแนน)" wire:click="ansScore('6','c',1)" /></li>
                        <li><x-button class="bg-variantsB-100 text-white hover:!bg-primary-100/5 w-full" rounded
                                label="D. เปิดข่าว ตามเทรนด์บนโซเชียล (0 คะแนน)" wire:click="ansScore('6','d',0)" /></li>
                    </ul>
                </div>

                    <img src="{{ asset('img/Q1-bottom.png') }}" class="w-2/6 absolute bottom-10" />
                </div>


                <div class="h-full min-h-svh 
                {{ isset($answer[7]) ? ' hidden pointer-events-none' : ' block' }} 
                flex flex-col relative">
                    7
                    <img src="{{ asset('img/Q7-2-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
                    <div style="background: url({{ asset('img/frame.png') }}) center top; background-size:contain; background-repeat: no-repeat;"
            class="p-6 pt-12 w-11/12 m-auto flex-grow">
                    <h2 class="text-main text-3xl text-center">คุณเลือกที่จะ
                        ออกกำลังกายแบบ...
                    </h2>
                    <ul class="grid gap-4">
                        <li><x-button class="bg-variantsB-200 text-white hover:!bg-primary-100/5 w-full" rounded
                                label="A. ต่อยมวยให้สุดหมัด (0 คะแนน)" wire:click="ansScore('7','a',0)" /></li>
                        <li><x-button class="bg-variantsB-200 text-white hover:!bg-primary-100/5 w-full" rounded
                                label="B. วิ่งกลางแจ้งกับแสงแดดจ้า (0คะแนน)" wire:click="ansScore('7','b',0)" /></li>
                        <li><x-button class="bg-variantsB-200 text-white hover:!bg-primary-100/5 w-full" rounded
                                label="C. เร่งเบิร์น เดินชัน (1คะแนน)" wire:click="ansScore('7','c',1)" /></li>
                        <li><x-button class="bg-variantsB-200 text-white hover:!bg-primary-100/5 w-full" rounded
                                label="D. โยคะเผาผลาญ บาลานซ์สัดส่วน (1 คะแนน)" wire:click="ansScore('7','b',1)" /></li>
                    </ul>
                </div>

                    <img src="{{ asset('img/Q1-bottom.png') }}" class="w-2/6 absolute bottom-10" />
                </div>


                <div class="h-full min-h-svh 
                {{ isset($answer[8]) ? ' hidden pointer-events-none' : ' block' }} 
                flex flex-col relative">
                    8 (นมพิสตาชิโอ) 0-1 คะแนน
                    <img src="{{ asset('img/Q8-2-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
                    <div style="background: url({{ asset('img/frame.png') }}) center top; background-size:contain; background-repeat: no-repeat;"
            class="p-6 pt-12 w-11/12 m-auto flex-grow">
                    <h2 class="text-main text-3xl text-center">ให้คุณเลือก 1 ข้อ
                        ท่ีตรงกับตัวคุณมากที่สุด</h2>
                    <ul class="grid gap-4">
                        <li><x-button class="bg-variantsB-300 text-white hover:!bg-primary-100/5 w-full" rounded
                                label="A. มีความสุขกับการออกกำลังกายทุกวัน" wire:click="ansScore('8','a',1)" /></li>
                        <li><x-button class="bg-variantsB-300 text-white hover:!bg-primary-100/5 w-full" rounded
                                label="B. มีความสุขกับการได้กินอาหารดี ๆ มีประโยชน์" wire:click="ansScore('8','b',1)" /></li>
                    </ul>
                </div>

                    <img src="{{ asset('img/Q1-bottom.png') }}" class="w-2/6 absolute bottom-10" />
                </div>


                <div class="h-full min-h-svh 
                {{ isset($answer[8]) ? ' hidden pointer-events-none' : ' block' }} 
                flex flex-col relative">
                    8 (นมโอ๊ต) 2 คะแนน
                    <img src="{{ asset('img/Q8-2-top.png') }}" class="w-11/12 -mb-12 -mt-8 z-10" />
                    <div style="background: url({{ asset('img/frame.png') }}) center top; background-size:contain; background-repeat: no-repeat;"
            class="p-6 pt-12 w-11/12 m-auto flex-grow">
                    <h2 class="text-main text-3xl text-center">ให้คุณเลือก 1 ข้อ
                        ท่ีตรงกับตัวคุณมากที่สุด</h2>
                    <ul class="grid gap-4">
                        <li><x-button class="bg-variantsB-400 text-white hover:!bg-primary-100/5 w-full" rounded
                                label="A. มองหาสิ่งดี ๆ ในทุก ๆ วัน" wire:click="ansScore('8','a',1)" /></li>
                        <li><x-button class="bg-variantsB-400 text-white hover:!bg-primary-100/5 w-full" rounded
                                label="B. การเป็นตัวเองนั่นแหละ คือเวอร์ชันที่ดีที่สุดแล้ว" wire:click="ansScore('8','b',1)" />
                        </li>
                        <li><x-button class="bg-variantsB-400 text-white hover:!bg-primary-100/5 w-full" rounded
                                label="C. สายหวาน นุ่มนวล ยิ้มรับทุกสถานการณ์" wire:click="ansScore('8','b',1)" /></li>
                    </ul>
                </div>

                    <img src="{{ asset('img/Q1-bottom.png') }}" class="w-2/6 absolute bottom-10" />
                </div>
            @break

            @default
        @endswitch
    @endisset

    {{-- <x-button label="reqult" wire:click="result" /> --}}
</div>
