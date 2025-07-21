<x-layouts.side-navigation :artistName="$artistData->name" :artistId="$artistData->id" :artistProfile="$artistData->profile_path">
    <div class="p-4">
        <div class="flex justify-between items-center">
            <h1 class="text-4xl pb-2">Music</h1>
            <x-nav.nav-link href="/artist/{{$artistData->id}}/music-add">
                <x-buttons.blue class="px-2">Add Music</x-buttons.blue>
            </x-nav.nav-link>
        </div>
        
        <div>
            <div class="border-2 border-black rounded-2xl p-3">
                <h2 class="text-xl">Music List</h2>
                <ul>
                    @if ($artistSongs == null)
                        <div>No Songs</div>
                    @else
                        <li class="py-1">1. {{$artistSongs->title}} <audio src="{{asset($artistSongs->path)}}" controls class="w-full rounded-2xl"></audio></li>
                    <li class="py-1">2. Ante Up <audio src="{{asset('storage/music/2.mp3')}}" controls class="w-full rounded-2xl">You Comfort Me</audio></li>
                    <li class="py-1">3. Pini <audio src="{{asset('storage/music/3.mp3')}}" controls class="w-full rounded-2xl">You Comfort Me</audio></li>
                    <li class="py-1">4. Ujuelegba <audio src="{{asset('storage/music/4.mp3')}}" controls class="w-full rounded-2xl">You Comfort Me</audio></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</x-layouts.side-navigation>

