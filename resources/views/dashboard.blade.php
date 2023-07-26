<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    <p class="mt-5">Lets start talk and chat with everyone who online in here!. Click link below</p>
                    <a href="{{ route('chatme') }}" class="btn btn-primary">Start Chat</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
