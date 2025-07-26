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
                <h2 class="text-xl">Music Library</h2>
                <ul>
                    @if ($artistSongs == null)
                        <div>No Songs</div>
                    @else
                        @props(['number' => 0])
                        @foreach ($artistSongs as $song)
                            <li class="py-1">{{$number += 1}}. {{$song->title}} <audio src="{{asset($song->path)}}" controls class="w-full rounded-2xl"></audio></li> 
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>
</x-layouts.side-navigation>

