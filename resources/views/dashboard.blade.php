<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-[#F5EFE7] leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#ffffff] overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-[#3a3a3a]">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
