<x-layouts.navigation>
    <x-signup class="flex gap-4 max-w-3/4 mx-auto text-center">
        <div class="min-w-1/2">
            <h1 class="text-9xl ">Welcome to Artistik</h1>
            <p>Sign in as </p>
            <x-nav.nav-link href="/artist/signup">
                <button class="bg-desertblue border-1 border-desertblue p-2 rounded-full text-desertorange">Artist</button>
            </x-nav.nav-link>
            <x-nav.nav-link href="/fan">
                <button class="p-2 rounded-full border-1 border-desertblue text-desertblue">Fan</button>
            </x-nav.nav-link>
        </div>
        <div class="max-w-1/2">
            <img src="{{asset('storage/images/home-banner.jpg')}}" class="rounded-tr-2xl rounded-br-2xl object-fill" alt="banner image">
        </div>
    
    </x-layouts.navigation>  
</x-nav-bar-layout>