<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title name="header">Anasayfa</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                padding-top: 4.5rem;
            }
            .btn-primary{
                color: #fff;
                
                background-color: #C70039 !important;
                border-color: #C70039 !important; 
                font-size:35px !important;
                font-weight: 600 !important;
                padding: 10px 20px !important;
            }
            .btn-primary:hover {
                color: #fff;
                
                background-color: #185ADB !important;
                border-color: #185ADB !important; 
            }
            * {box-sizing: border-box;}

            .img-comp-container {
                position: relative;
                height: 450px; 
                margin-right:0;
            }

            .img-comp-img {
                position: absolute;
                width: auto;
                height: auto;
                overflow: hidden;
            }

            .img-comp-img img {
                display: block;
                vertical-align: middle;
            }

            .img-comp-slider {
                position: absolute;
                z-index: 9;
                cursor: ew-resize;
                /*set the appearance of the slider:*/
                width: 40px;
                height: 40px;
                background-color: #2196F3;
                opacity: 0.7;
                border-radius: 50%;
            }
            .introduction{
                color:#000; 
                font-size:20px; 
                text-align: left; 
            }
            .title{
                text-align: left; 
                font-size:60px; 
                font-weight:600; 
                color:#000;
            }

            .myform{
                background-color:white;
                border-color:#C70039;
                margin-top:30px;
            }

            .fa {
                padding: 10px;
                font-size: 20px;
                width: 40px;
                height: 40px;
                text-align: center;
                align-items:center;
                text-decoration: none;
                border-radius: 50%;
            }

            .fa:hover {
                opacity: 0.7;
            }

            .fa-facebook {
                background: #3B5998;
                color: white;
            }

            .fa-instagram {
                background: #962fbf;
                color: white;
            }

            .fa-pinterest {
                background: #cb2027;
                color: white;
            }

            .scname{
                color:#000;
                font-size:20px;
                font-weight:600; 
            }

            .smicon{
                display:flex;
                flex-direction:row;
                text-align:center;
                align-items:center;
                margin-bottom:20px;
            }   

            .smiconback{
                padding-top:10px;
                width:60px;
                height:60px;
                border-radius:5%;
            }

            .smname{
                font-size:20px;
                font-weight:600;
                margin-left:20px;
            }

        
        </style>
        <script>
        function initComparisons() {
            var x, i;
            /* Find all elements with an "overlay" class: */
            x = document.getElementsByClassName("img-comp-overlay");
            for (i = 0; i < x.length; i++) {
                /* Once for each "overlay" element:
                pass the "overlay" element as a parameter when executing the compareImages function: */
                compareImages(x[i]);
            }
            function compareImages(img) {
                var slider, img, clicked = 0, w, h;
                /* Get the width and height of the img element */
                w = img.offsetWidth;
                h = img.offsetHeight;
                /* Set the width of the img element to 50%: */
                img.style.width = (w / 2) + "px";
                /* Create slider: */
                slider = document.createElement("DIV");
                slider.setAttribute("class", "img-comp-slider");
                /* Insert slider */
                img.parentElement.insertBefore(slider, img);
                /* Position the slider in the middle: */
                slider.style.top = (h / 2) - (slider.offsetHeight / 2) + "px";
                slider.style.left = (w / 2) - (slider.offsetWidth / 2) + "px";
                /* Execute a function when the mouse button is pressed: */
                slider.addEventListener("mousedown", slideReady);
                /* And another function when the mouse button is released: */
                window.addEventListener("mouseup", slideFinish);
                /* Or touched (for touch screens: */
                slider.addEventListener("touchstart", slideReady);
                /* And released (for touch screens: */
                window.addEventListener("touchend", slideFinish);
                function slideReady(e) {
                /* Prevent any other actions that may occur when moving over the image: */
                e.preventDefault();
                /* The slider is now clicked and ready to move: */
                clicked = 1;
                /* Execute a function when the slider is moved: */
                window.addEventListener("mousemove", slideMove);
                window.addEventListener("touchmove", slideMove);
                }
                function slideFinish() {
                /* The slider is no longer clicked: */
                clicked = 0;
                }
                function slideMove(e) {
                var pos;
                /* If the slider is no longer clicked, exit this function: */
                if (clicked == 0) return false;
                /* Get the cursor's x position: */
                pos = getCursorPos(e)
                /* Prevent the slider from being positioned outside the image: */
                if (pos < 0) pos = 0;
                if (pos > w) pos = w;
                /* Execute a function that will resize the overlay image according to the cursor: */
                slide(pos);
                }
                function getCursorPos(e) {
                var a, x = 0;
                e = (e.changedTouches) ? e.changedTouches[0] : e;
                /* Get the x positions of the image: */
                a = img.getBoundingClientRect();
                /* Calculate the cursor's x coordinate, relative to the image: */
                x = e.pageX - a.left;
                /* Consider any page scrolling: */
                x = x - window.pageXOffset;
                return x;
                }
                function slide(x) {
                /* Resize the image: */
                img.style.width = x + "px";
                /* Position the slider: */
                slider.style.left = img.offsetWidth - (slider.offsetWidth / 2) + "px";
                }
            }
            }
    </script>

@vite(['resources/js/app.js'])

</head>
<body class="antialiased">


    @include('layouts.header')
    <div class="content" style="width:100%; padding:30px 0px; background-color:#ffff;">
    
        <div class="row" style="padding-left:4rem; padding-right:4rem;">
            <div class="col-sm-6" style="align-items:center;  width:50%;">
                <h1 class="title">Gerçek Lego parçalarından yapılmış fotoğrafınız</h1>

                <div class="introduction">
                    <p>Herhangi bir fotoğrafı veya portreyi üç basit adımda bir lego tabloya dönüştürün. Tüm parçalar ve yapı planı kutuya dahildir.</p>
                    </div>
                    <div class="row" style="text-align: left; margin-top:50px;">
                        <div class="col-xs-6 col-sm-12">
                            <a href="{{ url('/start') }}" class="btn btn-lg btn-primary"> <span>BAŞLA</span> </a>
                        </div>
                    </div>
                </div>
            <div class="col-sm-6">
                
                    <img src="storage/images/LEGO.png" height="90%" alt="">
                
            </div>
        </div>

        <div id="howitworks" class="row" style="margin-top:6rem;padding:4rem 4rem;background-color:#F9F9F9;">
            <div class="col-sm-6" style="align-items:center; margin:auto; width:50%;">
                <h1 class="title">Nasıl Çalışır</h1>

                <div class="introduction">
                    <p>Kendi kişiselleştirilmiş Lego tarzı tablonuzu ücretsiz olarak tasarlamak için TransLego web uygulamasını kullanın!  Takip etmesi kolay talimatlarla birlikte tablonuzu sipariş edin.</p>
                    <ul>
                        <li>Fotoğrafınızı yükleyin</li>
                        <li>Lego tablosuna dönüştürülen fotoğrafınızı düzenleyin</li>
                        <li>Sipariş oluşturun</li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-6" style="padding-left:100px;align-items:center; margin:auto; width:50%">
                <div class="img-comp-container">
                    <div class="img-comp-img">
                        <img src="storage/images/legoimage.png" width="500" height="400">
                    </div>
                    <div class="img-comp-img img-comp-overlay">
                        <img src="storage/images/notlego2.jpeg" width="500" height="400">
                    </div>
                </div>
            </div>
        </div>

        <div id="pricing" class="row" style="width:100%; margin-top:6rem;padding:4rem 4rem;background-color:#fff;">
            <div class="col-sm-6" style="align-items:left; text-align:left; margin:auto; width:50%;">
                <h1 class="title" style="margin-top:20px;">Fiyatlandırma</h1>

                <div class="introduction">
                    <p>Kaliteli lego parçalarından oluşan paketlerimizin fiyatlandırılmasını seçtiğiniz boyutlara göre yapmaktayız</p>
                    <p>Küçük, orta ve büyük boylardaki seçimlerinize göre tablonuzun kalitesi de değişmektedir.</p>
                </div>
            </div>

            <div class="col-sm-6" style="padding-left:100px;align-items:center; margin:auto; width:50%">
                <img src="/storage/images/credit.png"  alt="">
            </div>
        </div>

        <div id="communication" class="row" style="width:100%; margin-top:6rem;padding:4rem 4rem;background-color:#fff;">
            
            <img src="/storage/images/legos1.png" style="position:absolute; width:250px; right:5%;">
            <h1 class="title" style="margin-bottom:30px;">Bizimle İletişime Geç</h1>
            
            <div class="col-sm-6" style="align-items:center; margin:auto; width:50%;">
                <form style="width:80%">
                    <input class="form-control myform" type="text" placeholder="Adınız">
                
                    <input type="email" class="form-control myform" id="exampleFormControlInput1" placeholder="name@example.com">
                
                    <textarea class="form-control myform" id="exampleFormControlTextarea1" rows="3" placeholder="Mesajınız"></textarea>

                    <button type="submit" class="btn btn-primary myform" style="padding:5px 10px !important; font-size:20px !important;">Gönder</button>
                </form>
            </div>

            <div class="col-sm-6" style="padding-left:100px; padding-top:30px; width:50%">
                <div class="smicon">
                    <div class="smiconback" style="background-color:#2b4375;">
                        <a href="#" class="fa fa-facebook"></a>
                    </div>
                    <span class="smname" style="color:#2b4375;">TransLego</span>
                </div>
                <div class="smicon" >
                    <div class="smiconback" style="background-color:#7b279d;">
                        <a href="#" class="fa fa-instagram"></a>
                    </div>
                    <span class="smname" style="color:#7b279d;">TransLego</span>
                </div>
                <div class="smicon" >
                    <div class="smiconback"  style="background-color:#9c1b20;">
                        <a href="#" class="fa fa-pinterest"></a>
                    </div>
                    <span class="smname" style="color:#9c1b20;">TransLego</span>
                </div>
            </div>
        </div>
    </div>
<script>
initComparisons();
</script>
    
</body>
</html>
