<x-layouts.navigation :artistName="$artist->name">
    <div class="max-w-3/4 mx-auto">
        <div class="flex items-center gap-4">
            <img src="{{asset($artist->profile_path)}}" alt="profile picture" class="w-50 h-50 rounded-full">
            <p class="text-desertblue text-6xl font-bold">{{$artist->name}}</p>
        </div>
        <div>
            @props(['number' => 0])
            @foreach ($songs as $song)
                <p>{{$number += 1}}. {{$song->title}}</p>
                <audio src="{{asset($song->path)}}" controls></audio>
            @endforeach
        </div>
    </div>
</x-layouts.navigation>