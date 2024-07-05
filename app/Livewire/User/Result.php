<?php

namespace App\Livewire\User;

use Livewire\Component;
use WireUi\Traits\Actions;

class Result extends Component
{
    use Actions;
    public $result,$name;
    public function mount($result=2, $name=null){
        // dd($result,$name);
    }
    public function render()
    {

        // $fontFile = realpath("arial.ttf");//replace with your font
        // $fontSize = 24;
        // $fontColor = imagecolorallocate($img, 255, 255, 255);
        // $black = imagecolorallocate($img, 0, 0, 0);
        // $angle = 0;

        // $iWidth = imagesx($img);
        // $iHeight = imagesy($img);

        // $tSize = imagettfbbox($fontSize, $angle, $fontFile, $txt);
        // $tWidth = max([$tSize[2], $tSize[4]]) - min([$tSize[0], $tSize[6]]);
        // $tHeight = max([$tSize[5], $tSize[7]]) - min([$tSize[1], $tSize[3]]);

        // // text is placed in center you can change it by changing $centerX, $centerY values
        // $centerX = CEIL(($iWidth - $tWidth) / 2);
        // $centerX = $centerX<0 ? 0 : $centerX;
        // $centerY = CEIL(($iHeight - $tHeight) / 2);
        // $centerY = $centerY<0 ? 0 : $centerY;

        // imagettftext($img, $fontSize, $angle, $centerX, $centerY, $black, $fontFile, $txt);
        // imagejpeg($img,"my-certificate.jpg");//save image
        // imagedestroy($img);
        
        // dd($img);
        
        $text=$this->name;
        $img=asset('img/result/'.$this->result.'.jpg');

        // simple image to display URL (cut off)
        // $im = imagecreate(255, 170);

        // // white background and blue text
        // $bg = imagecolorallocate($im, 255, 255, 255);
        // $textcolor = imagecolorallocate($im, 0, 0, 255);

        // // write the string at the top left
        // imagestring($im, 5, 0, 0, $text, $textcolor);

        // // Output the image
        // header('Content-type: image/png');

        // ob_start();
        // imagepng($im);
        // $image_bin = ob_get_contents();
        // ob_end_clean();

        // imagedestroy($im);

        // echo $image_bin;
        // $image = imagecreatefromjpeg($img);
        // $color = imagecolorallocate($image,0,0,0);

        // imagettftext($image,90,0,200,200,$color,'tahoma',$text);

        // // header('Content-type: image/jpeg');
        // $imstr = imagejpeg($image);



        // $string = $text;
        // $font   = 90;
        // $width  = ImageFontWidth($font*0.75) * strlen($string);
        // $height = ImageFontHeight($font);
        // $im = @imagecreate ($width,$height);
        // $background_color = imagecolorallocate ($im, 252, 245, 237); //white background
        // $text_color = imagecolorallocate ($im, 139, 77,54);//black text
        // imagestring ($im, $font, 0, 0, $string, $text_color);
        // ob_start();
        // imagepng($im);
        // $imstr = base64_encode(ob_get_clean());
        // imagedestroy($im);

        return view('livewire.user.result'
        // ,array('data'=>$imstr)
    );
    }
    public function saveImages(){
        $this->dispatchBrowserEvent('save-updated');
        dd("yo");
        return response()->download('images/result/Result-'.$this->path.'-'.$this->result.'.png');
        
        // return Storage::download(asset('result/Result-1-1.png'));
    }
    
    public function share(){
        dd("share");
    }
    public function resultImg(){

        $string = 'asd';
        $font   = 90;
        $width  = ImageFontWidth($font*0.75) * strlen($string);
        $height = ImageFontHeight($font);
        $im = @imagecreate ($width,$height);
        $background_color = imagecolorallocate ($im, 252, 245, 237); //white background
        $text_color = imagecolorallocate ($im, 139, 77,54);//black text
        imagestring ($im, $font, 0, 0, $string, $text_color);
        ob_start();
        imagepng($im);
        $imstr = base64_encode(ob_get_clean());
        imagedestroy($im);

        return $imstr;
    }
}
