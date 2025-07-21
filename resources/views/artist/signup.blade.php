<x-layouts.navigation>
    <x-inputs.input-field method='post' action='/send'>
        <x-signup> 
            <div class="min-w-1/2 px-10 py-10">
                <h2 class="text-desertblue text-3xl">Sign Up</h2>
                <div class="pt-5">
                    <x-inputs.input-container>
                        <x-inputs.input-label for="artistname">Artist name</x-inputs.input-label>
                        <x-inputs.input-type type="text" name="artistname" placeholder="ben" value="{{old('artistname')}}" />
                        @error('artistname')
                            <div class="text-red-500 italic">{{$message}}</div>
                        @enderror

                        @if (session('artistname_exists'))
                        <div class="text-red-500 italic">{{session('artistname_exists')}}</div>
                        @endif
                    </x-inputs.input-container> 
        
                    <x-inputs.input-container>
                        <x-inputs.input-label for="email">Email</x-inputs.input-label>
                        <x-inputs.input-type type="email" name="email" placeholder="test@gmail.com" value="{{old('email')}}" />
                        @error('email')
                            <div class="text-red-500 italic">{{$message}}</div>
                        @enderror
                    </x-inputs.input-container> 
        
                    <x-inputs.input-container>
                        <x-inputs.input-label for="password">Password</x-inputs.input-label>
                        <x-inputs.input-type type="password" name="password" />
                        @error('password')
                            <div class="text-red-500 italic">{{$message}}</div>
                        @enderror
                    </x-inputs.input-container>
                </div>
                <x-buttons.blue class="w-full mt-2" type="submit">Create</x-buttons.blue>
                <div class="text-center">
                    <p class=" pt-4 ">Already have an account? <x-nav.nav-link href="/artist/login" class="text-blue-900">Log in</x-nav.nav-link> </p>
                </div>
            </div>
            <div class="max-w-1/2 hidden sm:block">
                <img src="{{asset('storage/images/creator-banner.jpg')}}" class="rounded-tr-2xl rounded-br-2xl object-fill" alt="creator image">
            </div>
        </x-signup>
    </x-inputs.input-field>
</x-layouts.navigation>