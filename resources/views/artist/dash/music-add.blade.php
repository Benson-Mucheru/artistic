<x-layouts.side-navigation :artistName="$artistData->name" :artistId="$artistData->id" :artistProfile="$artistData->profile_path">
    <div class="p-4">
        <h1 class="text-4xl pb-2">Add Music To Your List</h1>
        <div>
            <x-inputs.input-field method="post" action="/artist/{{$artistData->id}}/music-upload" enctype="multipart/form-data">
                <x-inputs.input-container>
                    <x-inputs.input-label>Title</x-inputs.input-label>
                    <x-inputs.input-type type="text" name="title" />
                    @error('title')
                        <p class="text-red-500">{{$message}}</p>
                     @enderror
                </x-inputs.input-container>
                
                <x-inputs.input-container>
                    <x-inputs.input-label>Choose your music</x-inputs.input-label>
                    <x-inputs.input-type type="file" name="audio" />
                    @error('audio')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                </x-inputs.input-container>
        </div>

            <div class="flex justify-end gap-2 my-2">
                <x-buttons.light class="px-2 border-2 border-desertblue">Cancel</x-buttons.light>
                <x-buttons.blue class="px-2">Upload</x-buttons.blue>
            </div>
         </x-inputs.input-field>
         
    </div>
</x-layouts.side-navigation>

