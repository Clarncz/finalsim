<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <!-- Full-Screen Background Image -->
    <div class="bg-cover bg-center bg-fixed min-h-screen" 
         style="background-image: url('https://wallpapers.com/images/featured/profile-background-b5vedq7mz8mjvslu.jpg');">
        
        <!-- Content Container -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Update Profile Information Form -->
            <div class="p-6 bg-white/80 dark:bg-gray-800/80 shadow-xl rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Update Password Form -->
            <div class="p-6 bg-white/80 dark:bg-gray-800/80 shadow-xl rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Delete User Form -->
            <div class="p-6 bg-white/80 dark:bg-gray-800/80 shadow-xl rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
