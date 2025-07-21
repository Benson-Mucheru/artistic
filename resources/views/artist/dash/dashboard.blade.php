<x-layouts.side-navigation :artistName="$artistData->name" :artistId="$artistData->id" :artistProfile="$artistData->profile_path">
    <div class="p-4">
        <h1 class="text-4xl pb-2">Dashboard</h1>
        <div class="grid grid-cols-2 gap-4">
            <div class="border-2 border-black rounded-2xl p-3 col-span-2">
                <h2 class="text-xl">Music</h2>
                <ul>
                    <li class="py-1">1. You Comfort Me <audio src="{{asset('storage/music/1.mp3')}}" controls class="w-full rounded-2xl"></audio></li>
                    <li class="py-1">2. Ante Up <audio src="{{asset('storage/music/2.mp3')}}" controls class="w-full rounded-2xl">You Comfort Me</audio></li>
                    <li class="py-1">3. Pini <audio src="{{asset('storage/music/3.mp3')}}" controls class="w-full rounded-2xl">You Comfort Me</audio></li>
                    <li class="py-1">4. Ujuelegba <audio src="{{asset('storage/music/4.mp3')}}" controls class="w-full rounded-2xl">You Comfort Me</audio></li>
                </ul>
            </div>

            <div class="border-2 border-black rounded-2xl p-3">
                <h2 class="text-xl">Fans</h2>
                <p>200 fans</p>
            </div>

            <div class="border-2 border-black rounded-2xl p-3">
                <h2 class="text-xl">Earnings</h2>
                <p>Kshs. 20,000/=</p>
            </div>
        </div>
    </div>
    
</x-layouts.side-navigation>

