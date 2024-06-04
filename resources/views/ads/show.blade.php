@include('layouts.header')
@include('layouts.navbar')

<section class="py-8">
    <div class="container mx-auto px-4">
        <div class="bg-white p-6 rounded shadow">
            <img src="https://placehold.co/600x400" alt="Huis" class="w-full h-48 object-cover rounded mb-4">
            <div class="text-gray-700">
                <h3 class="text-lg font-bold">{{ $ad->title }}</h3>
                <p class="mt-2 text-gray-600">{{ $ad->description }}</p>
                <p class="mt-4"><strong>{{ __('Location:') }}</strong> {{ $ad->location }}</p>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')
