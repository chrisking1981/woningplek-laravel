<x-guest-layout>
    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between">
            <a href="{{ url('/') }}" class="text-white">{{ __('Home') }}</a>
            <div>
                <a href="{{ route('login') }}" class="text-white mr-4">{{ __('Login') }}</a>
                <a href="{{ route('register') }}" class="text-white">{{ __('Register') }}</a>
            </div>
        </div>
    </nav>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight mb-6">
                        {{ $ad->title }}
                    </h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">{{ $ad->description }}</p>
                    <p class="mt-4"><strong>{{ __('Location:') }}</strong> {{ $ad->location }}</p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
