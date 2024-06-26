<div class="relative">
    <div id="result">
        <img src="{{asset('img/result/'.$result.'.jpg')}}">
        <h2 class="absolute top-[13%] left-[45%] w-1/2 text-center text-3xl text-primary-100">{{$name??""}}</h2>
    </div>
    <div id="btn" class="absolute bottom-[6%] left-[60%] w-[30%] h-[12%] grid gap-6">
        <img class="cursor-pointer" src="{{asset('img/result_btn/button_Ans-A_Save-01.png')}}" onclick="saveImg()">
        <a rel="nofollow noopener noreferrer"
            target="_blank" 
            href="{!!Share::page(route('home'), 
                'มาเล่น Quiz ที่จะบอกว่าคุณเป็นคนช่างเลือกแบบไหนกัน')->facebook()->getRawLinks()!!}">
            <img src="{{asset('img/result_btn/button_Ans-A_Share-01.png')}}">
        </a>

        {{-- <x-button label="restart" href="{{route('ClientProfile')}}" /> --}}
        
    </div>

    <script>
        async function saveImg(){
            console.log("click");
            const img = document.getElementById('result')
            
                html2canvas(document.getElementById('result'), {
                    onrendered: function(canvas) {
                        var imgData = canvas.toDataURL('image/jpg').replace("image/jpg",
                        "image/octet-stream");
                        console.log('load canvas'+'imgData');

                        var a = document.createElement('a');
                        a.href = imgData;
                        a.download = 'result.jpg';
                        document.body.appendChild(a);
                        console.log('create element'+'a')
                        a.click(); 
                        console.log('click on a to download')
                        
                    }
                })
            return true
        }

    </script>
</div>
