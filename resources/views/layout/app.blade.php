<!DOCTYPE html>
<html lang="en" data-theme="cmyk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class=" text-slate-100">

        {{-- navbar --}}
        <div class="bg-blue-500 px-32 h-14 flex  w-full sticky top-0 z-10">
            <div class="flex-1 self-center">
                <span class="font-span text-xl font-light"><b>Nova Aditya</b></span>
            </div>
            <ul class="flex">
                <li class=" hover:bg-blue-700 hover:text-white flex items-center px-4"><a href="#tentang-saya">Tentang Saya</a></li>
                <li class=" hover:bg-blue-700 hover:text-white flex items-center px-4"><a href="#portfolio">Portfolio</a></li>
                <li class=" hover:bg-blue-700 hover:text-white flex items-center px-4"><a href="#kontak">Kontak</a></li>
            </ul>
        </div>

        <div class="bg-white text-black mx-32 p-10 relative">
            {{-- tentang saya --}}
            <div id="tentang-saya" class=" py-6">
                <div class="flex justify-around">
                    <img src="{{ asset('img/profil.svg') }}" class="h-96 w-96">
                    <h1><span class="font-['Shadows_Into_Light_Two'] text-5xl font-medium">Nova Aditya Pratama</span></h1>
                </div>
                
            </div>

            {{-- portfolio --}}
            <div id="portfolio" class="h-96">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum corporis porro excepturi nulla vel
                    esse iure repellendus dicta, nostrum eaque?</p>
            </div>

            {{-- kontak --}}
            <div id="kontak" class="h-96">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet voluptatibus vitae dolore ullam
                    tenetur. Vel reprehenderit dolorem modi asperiores incidunt.</p>
            </div>
        </div>

    </div>

</body>

</html>