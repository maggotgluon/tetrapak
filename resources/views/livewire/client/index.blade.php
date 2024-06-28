<div class="absolute w-full min-h-[100svh] max-h-[100svh]" style="background: url({{asset('image/center-bg.jpg')}}) center;
            background-repeat: no-repeat; 
            background-attachment: fixed; 
            background-size: cover; ">
    
    <img class="tetrapak_logo" src="{{asset('image/tetrapak_logo.png')}}" alt="">
    <div class="absolute w-full h-auto z-50">
        <h1 class=" text-center text-3xl pt-24 text-[#8B4D36] ">คุณเป็น <b>‘คนช่างเลือก’</b> <br>แบบไหน ?</h1>
    </div>
    <div class="absolute bottom-[12%] w-full h-auto ">
        <img class="object-contain  w-auto m-auto height-800" src="{{asset('image/main.png')}}" alt="">
    </div>
    <div class="absolute bottom-[25%] w-full text-center z-50">
        <x-button flat rounded class="!bg-gradient-to-b from-primary-100 to-primary-200 !p-1 
        hover:from-primary-300 hover:to-primary-400 w-60" 
            :href="route('pdpa')">
            <div class="bg-gradient-to-b from-primary-200 to-primary-100 
            hover:from-primary-400 hover:to-primary-300 w-full h-full rounded-full py-3 px-5 
            text-white text-2xl">
                คลิก
            </div>
        </x-button>
    </div>
    <div class="absolute bottom-0 w-full max-h-36 py-2" style="background: url({{asset('image/foot-bg.png')}})">
        <img class="object-contain m-auto pt-16 pb-2" src="{{asset('image/foot-logo.png')}}" alt="">
    </div>


    <style>
        .tetrapak_logo{
            width: 10%;
            height: auto;
            position: absolute;
            top: 5%;
            right: 5%;
            z-index: 120;
        }

        .center-div
        {
            margin: 0 auto;
            max-width: 700px;
            height: 100px;
            background-color: #ccc;
            border-radius: 3px;
        }

        .image-container {
            position: absolute; 
            width: 100%;
        }

        .image-container img {
            display: block; /* Makes image behave like a block-level element */
            width: 100%; /* Image fills container width */
            position: absolute; /* Positions image within container */
            bottom: 0; /* Anchors bottom of image to bottom of container */
            object-fit: contain;
        }
        .footbg{
            /* background-image: url(image/foot-bg.png); */
            background-repeat: repeat-x;
        }
        .bottom-0 {
            bottom: 0;
        }

        .bottom-12 {
            bottom: 12%;
        }
        .height-200{
            max-height: 150px;
            padding: 50px 0 0 0;
        }
        .height-800{
            max-height: 800px;
        }
    </style>
</div>