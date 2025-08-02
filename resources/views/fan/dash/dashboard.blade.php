<x-layouts.navigation>
    <div class="max-w-3/4 mx-auto">
        <h1>Welcome, {{$data->name}}</h1>
        <div class="flex gap-4">
            @foreach ($artists as $artist)
            <a href="/music/{{$artist->id}}">
                <div class="text-center border-1 border-black rounded-3xl p-4">
                    <img src="{{asset($artist->profile_path)}}" alt="profile picture" class="w-50 h-50 rounded-full">
                    <p class="text-desertblue text-[1rem] pt-2">{{$artist->name}}</p>
                </div>
            </a>
            
        @endforeach
        </div>
    </div>
</x-layouts.navigation>