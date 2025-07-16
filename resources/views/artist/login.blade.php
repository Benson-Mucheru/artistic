<x-layouts.navigation>
    <x-inputs.input-field method='post' action='/artist/login'>
        <x-signup> 
            <div class="min-w-1/2 px-10 py-10">
                <h2 class="text-desertblue text-3xl">Log in</h2>
                <div class="pt-5">
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
                <x-buttons.blue type="submit">Login</x-buttons.blue>
                @error('login-error')
                    <div class="text-red-600 italic">{{$message}}</div>
                @enderror
                <div class="text-center pt-4">
                    <x-nav.nav-link href="/artist/login" class="text-blue-900">Forgot your password?</x-nav.nav-link> 
                </div>
            </div>
            
            <div class="max-w-1/2 hidden sm:block">
                <img src="{{asset('storage/images/creator-banner.jpg')}}" class="rounded-tr-2xl rounded-br-2xl object-fill" alt="creator image">
            </div>
        </x-signup>
    </x-inputs.input-field>
</x-layouts.navigation>