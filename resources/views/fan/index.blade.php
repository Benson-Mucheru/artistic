<x-layouts.navigation>
    
    <x-signup> 
        <div class="min-w-1/2 pt-10 px-10">
            <h2 class="text-desertblue text-3xl">Sign Up</h2>
            <div class="pt-5">
                <x-inputs.input-container>
                    <x-inputs.input-label for="username">Username</x-inputs.input-label>
                    <x-inputs.input-type type="text" name="username" placeholder="ben" />
                </x-inputs.input-container> 
    
                <x-inputs.input-container>
                    <x-inputs.input-label for="email">Email</x-inputs.input-label>
                    <x-inputs.input-type type="email" name="email" placeholder="test@gmail.com" />
                </x-inputs.input-container> 
    
                <x-inputs.input-container>
                    <x-inputs.input-label for="password">Password</x-inputs.input-label>
                    <x-inputs.input-type type="password" name="password" />
                </x-inputs.input-container>
            </div>
            <x-buttons.blue type="button">Create</x-buttons.blue>
        </div>
        <div class="max-w-1/2">
            <img src="{{asset('storage/images/fan-banner.jpg')}}" class="rounded-tr-2xl rounded-br-2xl object-fill" alt="creator image">
        </div>
    </x-signup>
    
</x-layouts.navigation>