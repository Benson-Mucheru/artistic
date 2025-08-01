<x-layouts.navigation>
    
    <x-signup> 
        <div class="min-w-1/2 pt-10 px-10">
            <h2 class="text-desertblue text-3xl">Sign Up</h2>
            <x-inputs.input-field method="post" action="/fan/signup">
                <div class="pt-5">
                    <x-inputs.input-container>
                        <x-inputs.input-label for="name">Username</x-inputs.input-label>
                        <x-inputs.input-type type="text" name="name" placeholder="ben" value="{{old('name')}}" />
                        @error('name')
                            <x-error.error-message>{{$message}}</x-error.error-message>
                        @enderror

                        @error('user_exists')
                            <x-error.error-message>{{$message}}</x-error.error-message>
                        @enderror
                    </x-inputs.input-container> 
        
                    <x-inputs.input-container>
                        <x-inputs.input-label for="email">Email</x-inputs.input-label>
                        <x-inputs.input-type type="email" name="email" placeholder="test@gmail.com" :value="old('email')" />
                        @error('email')
                            <x-error.error-message>{{$message}}</x-error.error-message>
                        @enderror
                    </x-inputs.input-container> 
        
                    <x-inputs.input-container>
                        <x-inputs.input-label for="password">Password</x-inputs.input-label>
                        <x-inputs.input-type type="password" name="password" />
                        @error('password')
                            <x-error.error-message>{{$message}}</x-error.error-message>
                        @enderror
                    </x-inputs.input-container>
                </div>
                <x-buttons.blue type="submit" class="w-full mt-2">Create</x-buttons.blue>
                <div class="text-center">
                    <p class=" pt-4 ">Already have an account? <x-nav.nav-link href="/fan/login" class="text-blue-900">Log in</x-nav.nav-link> </p>
                </div>
            </x-inputs.input-field>
        </div>
        
        <div class="max-w-1/2">
            <img src="{{asset('storage/images/fan-banner.jpg')}}" class="rounded-tr-2xl rounded-br-2xl object-fill" alt="creator image">
        </div>
    </x-signup>
    
</x-layouts.navigation>