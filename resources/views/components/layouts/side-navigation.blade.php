<x-layouts.navigation />
    <div class="max-w-3/4 mx-auto border-1 border-black grid grid-cols-[200px_1fr]">
        <div class="border-1 border-orange-900 text-center">
            <img src="{{asset($artistProfile)}}" class="rounded-full max-w-3/4 mx-auto my-2 cursor-pointer " alt="profile picture">
            <p class="text-center text-desertblue">{{$artistName}}</p>
            <ul class="mx-4">
                <x-nav.nav-list >
                    <x-nav.nav-link href="/artist/{{$artistId}}/dashboard/">Dashboard</x-nav.nav-link>    
                </x-nav.nav-list>

                <x-nav.nav-list>
                    <x-nav.nav-link href="/artist/{{$artistId}}/music">Music</x-nav.nav-link>
                </x-nav.nav-list>

                <x-nav.nav-list>
                    <x-nav.nav-link href="/artist/{{$artistId}}/fans">Fans</x-nav.nav-link>
                </x-nav.nav-list>

                <x-nav.nav-list>
                    <x-nav.nav-link href="/artist/{{$artistId}}/earning">Earnings</x-nav.nav-link>
                </x-nav.nav-list>

                <x-nav.nav-list>
                    <x-nav.nav-link href="/artist/{{$artistId}}/edit">Edit Profile</x-nav.nav-link>
                </x-nav.nav-list>
            </ul>
        </div>
        
        <div>
            {{$slot}}
        </div>
    </div>
    
