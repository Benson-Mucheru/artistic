<x-layouts.navigation />
    <div class="max-w-3/4 mx-auto border-1 border-black grid grid-cols-[200px_1fr] gap-3">
        <div class="border-1 border-orange-900 text-center">
            <img src="{{asset('storage/images/profile-image.webp')}}" class="rounded-full max-w-3/4 mx-auto my-2" alt="profile picture">
            <p class="text-center text-desertblue">{{$artistName}}</p>
            <ul class="mx-4">
                <x-nav.nav-list >
                    <x-nav.nav-link href="/artist/{{$artistId}}/dashboard/">Dashboard</x-nav.nav-link>    
                </x-nav.nav-list>

                <x-nav.nav-list>
                    <x-nav.nav-link href="/artist/{{$artistId}}/music">Music</x-nav.nav-link>
                </x-nav.nav-list>

                <x-nav.nav-list>
                    <x-nav.nav-link href="/dashboard/{id}/fans">Fans</x-nav.nav-link>
                </x-nav.nav-list>

                <x-nav.nav-list>
                    <x-nav.nav-link href="/dashboard/{id}/earning">Earnings</x-nav.nav-link>
                </x-nav.nav-list>
            </ul>
        </div>
        
        <div>
            {{$slot}}
        </div>
    </div>
    
