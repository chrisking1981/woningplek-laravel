<x-app-layout>
    @auth
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Frontpage') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Home Exchange Ads') }}
                    </h3>
                    @foreach ($ads as $ad)
                        <div class="mt-4">
                            <h4 class="font-medium text-md text-gray-700 dark:text-gray-300">{{ $ad->title }}</h4>
                            <p>{{ $ad->description }}</p>
                            <p><strong>{{ __('Location:') }}</strong> {{ $ad->location }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endauth
</x-app-layout>
