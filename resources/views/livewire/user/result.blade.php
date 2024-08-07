<div class="relative font-db_heaventrounded">
    
    <div id="result" >
        <img id="resultImg" src="{{asset('img/result/'.$result.'.jpg')}}">
        <h2 id="resultTex" class="absolute top-[13%] left-[45%] w-1/2 text-center text-3xl text-primary-100">{{$name??""}}</h2>
    </div>

    <div id="btn" class="absolute bottom-[5%] left-[60%] w-[30%] grid gap-6 hidden">
        {{-- <img class="cursor-pointer" src="{{asset('img/result_btn/button_Ans-A_Save-01.png')}}" onclick="saveImg()"> --}}
        {{-- <a rel="nofollow noopener noreferrer"
            target="_blank" 
            href="{!!Share::page(route('home'), 
                'มาเล่น Quiz ที่จะบอกว่าคุณเป็นคนช่างเลือกแบบไหนกัน')->facebook()->getRawLinks()!!}">
            <img src="{{asset('img/result_btn/button_Ans-A_Share-01.png')}}">
        </a> --}}

        <x-button.circle flat class="!p-0 !w-auto !h-auto" onclick="share()" >
            <img src="{{asset('img/result_btn/tetrapka-save-btn.png')}}">
        </x-button>
        
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

                // let i = document.getElementById('resultImg');
                let i = document.getElementById('resultImg');
                let t = document.getElementById('resultTex');
                t.classList.add('hidden')
                i.src=canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");
                data = canvas.toDataURL("image/png").replace(/^data:image\/(png|jpg);base64,/, "");
                console.log(data)
				
				document.getElementById('btn').classList.remove('hidden')
                // document.body.appendChild(i)
				return ctx
            };
			//open images on new windows
  			//const win = window.open(dataUrl, '_blank');
            
			// Now that we have set up the image "onload" handeler, we can assign
            // an image URL to the image.
            img.src = imageUrl;
            // console.log(img)
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
			const a = document.createElement("a")
			document.body.appendChild(a)
			a.href = theCanvas.toDataURL('images/jpeg')
			a.download = "result.jpg"
			a.click()
			// document.body.removeChild(a)
        }

        const share = async()=>  {
            if (!('share' in navigator)) {
                alert("Your browser doesn't support the Web Share API.")
            return
            }
            // `element` is the HTML element you want to share.
            // `backgroundColor` is the desired background color.
            const canvas = document.getElementById('myCanvas')
            canvas.toBlob(async (blob) => {
                // Even if you want to share just one file you need to
                // send them as an array of files.
                const files = [new File([blob], 'result.png', { type: blob.type })]
                const shareData = {
                    text: 'AlternativeMilk4U',
                    title: 'มาเล่น Quiz ที่จะบอกว่าคุณเป็นคนช่างเลือกแบบไหนกัน',
                    files,
                }
                if (navigator.canShare(shareData)) {
                    try {
                        await navigator.share(shareData)
                    } catch (err) {
                        if (err.name !== 'AbortError') {
                            console.error(err.name, err.message)
                        }
                    }
                } else {
                    const shareData = {
                        text: 'AlternativeMilk4U',
                        title: 'มาเล่น Quiz ที่จะบอกว่าคุณเป็นคนช่างเลือกแบบไหนกัน',
                        url: '{{route('home')}}',
                    }
                    console.warn('Sharing not supported', shareData)
                }
            })
        }
        
    </script>
</div>
