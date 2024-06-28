<div class="relative font-db_heaventrounded">
    <div id="result" >
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
    
    <canvas id="myCanvas" class="w-full hidden"></canvas>
    <script>
        let loadImageOnCanvasAndResizeCanvasToFitImage = async(canvas, imageUrl,text) => {
            // Get the 2D Context from the canvas
            let ctx = canvas.getContext("2d");

            // Create a new Image
            let img = new Image();

            // Setting up a function with the code to run after the image is loaded
            img.onload = async() => {
                // Once the image is loaded, we will get the width & height of the image
                let loadedImageWidth = img.width;
                let loadedImageHeight = img.height;

                // Set the canvas to the same size as the image.
                canvas.width = loadedImageWidth;
                canvas.height = loadedImageHeight;
				console.log("load canvas");
				
                //let font = new FontFace('myFont',"url('//fonts/DB\ HeaventRounded\ Bd\ v3.2.1.ttf')")
                //await font.load()
                //document.fonts.add(font)
				console.log("load font");
                ctx.font = "220px DB_HeaventRounded"
                ctx.fillStyle = "#8b4d36";
                ctx.textAlign = "center";
                ctx.textBaseline = "top";
                // Draw the image on to the canvas.
                ctx.drawImage(img, 0, 0);
                ctx.fillText('{{$name??"-"}}', 1450, 500);
				return ctx
            };
			
  			//const win = window.open(dataUrl, '_blank');
            
			// Now that we have set up the image "onload" handeler, we can assign
            // an image URL to the image.
            img.src = imageUrl;
            // var a = document.createElement('a');
            // a.href = imageUrl;
            // a.download = 'result.jpg';
             // console.log('create element'+'a')
            // a.click(); 
			
        };

        // Run code after the page is loaded
        document.addEventListener("DOMContentLoaded", () => {
        // Setting up the canvas
            let theCanvas = document.getElementById("myCanvas");

            // Some image URL..
            let imageUrl ="{{asset('img/result/'.$result.'.jpg')}}";

            // Load image on the canvas & re-size the canvas based on the image size
            loadImageOnCanvasAndResizeCanvasToFitImage(theCanvas, imageUrl,"{{$name??"-"}}");
        
        });

        
        function saveImg(){
            let theCanvas = document.getElementById("myCanvas");
            // Some image URL..
			theCanvas.classList.remove("hidden")
			let myWindows = window.open('',"_blank")
			myWindows.document.body.appendChild(theCanvas)
			theCanvas.classList.add("hidden")
        }

    </script>
</div>
