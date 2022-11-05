<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="w-screen">
    <nav class="w-full h-16 py-6 px-12 flex items-center justify-between fixed z-20 top-0 left-0 bg-white border-b-[1px] border-primary">
        <div class="title font-bold text-xl opacity-0 transition-all">LIBERUS</div>
        <div class="link flex space-x-6">
            <a href="#main">Home</a>
            <a href="#about-us">About Us</a>
            <a href="">Contact</a>
        </div>
        <div class="sign">
            <a href="">Sign In</a>
        </div>
    </nav>
    <section class="main w-full h-screen" id="main">
        <div class="img-wrapper relative w-full h-full z-0">
            <img src="{{ asset('assets/images/main-bg.jpg') }}" alt="" class="w-full h-full object-cover opacity-50 absolute">
            <div class="absolute bg-primary h-full w-full opacity-70"></div>
        </div>
        <div class="absolute top-0 left-0 w-full h-full flex items-center px-12">
            <div class="title w-1/2 text-white font-bold z-30">LIBERUS</div>
            <div class="w-1/2 pl-24 border-l-2">
                <p class="w-2/3 text text-white text-left text-2xl ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse ipsa debitis amet rem. Itaque nemo ipsum, molestiae repudiandae fuga velit nulla quaerat quasi commodi maxime fugit dolorum iusto dolores minus.Dolor nesciunt repellat eius molestiae quidem voluptate quaerat laboriosam at dolorem tenetur possimus cum quis architecto similique, saepe nostrum, reiciendis amet officia vitae dolorum eos? Aperiam molestias fugiat quasi maiores.</p>
                <button class="text-3xl px-10 p-5 border-2 text-white rounded-full mt-10 font-semibold hover:bg-white hover:text-secondary">Baca Selengkapnya</button>
            </div>
        </div>
    </section>
    <section class="about-us w-full h-screen flex items-center justify-center space-x-20" id="about-us">
        {{-- <div class="w-1/3 h-1/3"> --}}
            <img src="{{ asset('assets/images/about-us.jpg') }}" alt="" class="h-3/4">
        {{-- </div> --}}
        <div class="w-1/3">
            <h1 class="text-6xl font-bold mb-5">ABOUT US</h1>
            <p class="text-2xl">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus ratione nihil quas iste praesentium? Hic quibusdam temporibus accusantium, modi repudiandae delectus assumenda iure, labore aspernatur, mollitia eveniet debitis molestiae velit?Recusandae in, ut fugiat cumque eum a. Velit, quidem sequi quo illo repellat animi saepe unde provident distinctio quibusdam. Sapiente enim a corrupti earum at explicabo molestiae quo accusamus dolorem.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus ratione nihil quas iste praesentium? Hic quibusdam temporibus accusantium, modi repudiandae delectus assumenda iure, labore aspernatur, mollitia eveniet debitis molestiae velit?Recusandae in, ut fugiat cumque eum a. Velit, quidem sequi quo illo repellat animi saepe unde provident distinctio quibusdam. Sapiente enim a corrupti earum at explicabo molestiae quo accusamus dolorem.
            </p>
        </div>
    </section>
    <section class="about-us w-full h-[30vh] flex items-center justify-center bg-primary" id="contact">
        <div class="border-b-2 pb-4 px-8">
            <h1 class="text-white font-bold text-4xl mb-8">CONTACT</h1>
            <h2 class="text-white text-2xl">hello@liberus.id</h2>
            <h2 class="text-white text-2xl">+62-8123-456-8</h2>
        </div>
    </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        
        var titleScale = 1
        var titleInit = 0
        $(document).ready(function(){
            
            var navTop     = $('section.main').offset().top,
                elementOffset = $('section.main .title').offset().top,
                titleInit      = (elementOffset - navTop);
                console.log(titleInit)

            function onScroll(){
                var scrollTop     = $(window).scrollTop(),
                elementOffset = $('section.main .title').offset().top,
                titleScale      = (elementOffset - scrollTop);
                var font_size = ((titleScale / titleInit ) * 128) + 20
                if(font_size <= 20){
                    $('section.main .title').css('font-size', 20)
                    $('nav .title').addClass('opacity-100')
                    $('nav .title').removeClass('opacity-0')
                }else if(font_size >128){
                    $('section.main .title').css('font-size', 128)
                    $('nav .title').addClass('opacity-0')
                    $('nav .title').removeClass('opacity-100')
                }else{
                    $('section.main .title').css('font-size', font_size)
                    $('nav .title').addClass('opacity-0')
                    $('nav .title').removeClass('opacity-100')
                }
            }
            window.addEventListener('scroll', onScroll)
            onScroll()
            // init()
        })
    </script>
</body>
</html>