<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>Artistik</title>
    </head>
</head>
<body class="bg-desertorange">
    <nav class="flex justify-between items-center px-1 py-1 mx-4 my-3 rounded-full bg-desertblue text-white md:max-w-3/4 md:mx-auto sticky top-2">
        <x-nav.nav-link href="/">
            <div class="bg-desertorange text-desertblue text-xl rounded-full px-1 py-[9px]"><h1>Arti <span class="bg-desertblue text-desertorange rounded-full p-2">stik</span></h1></div>
        </x-nav.nav-link>
        <div class="flex gap-2">
            <ul class="hidden md:flex gap-3 items-center text-desertorange">
                @guest('artist')
                <x-nav.nav-list>
                    <x-nav.nav-link href="/artist/signup">
                        Artist
                    </x-nav.nav-link>
                 </x-nav.nav-list>

                 <x-nav.nav-list>
                    <x-nav.nav-link href="/fan">
                        Fan
                    </x-nav.nav-link>
                 </x-nav.nav-list>

                 <x-inputs.input-field>
                    <x-buttons.light type="submit" class="font-semibold ">Log In</x-buttons.light>
                </x-inputs.input-field>    
                @endguest
                 
                @auth('artist')
                <x-inputs.input-field method="post" action="/artist/logout">
                    <x-buttons.light type="submit" class="font-semibold ">Log Out</x-buttons.light>
                </x-inputs.input-field>
                @endauth  
            </ul>
            <div class="md:hidden bg-white text-black rounded-full px-3 py-2">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    </nav>
    {{$slot}}
</body>
</html>