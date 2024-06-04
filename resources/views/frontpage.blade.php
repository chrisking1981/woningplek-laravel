@include('layouts.header')
@include('layouts.navbar')

<!-- Zoeksectie -->
<section class="bg-gray-200 py-8">
    <div class="container mx-auto px-4">
        <div class="bg-white p-6 rounded shadow">
            <div class="flex space-x-4">
                <input type="text" placeholder="Locatie" class="w-full border border-blue-500 p-2 rounded focus:border-orange-500 focus:ring-orange-500">
                <input type="text" placeholder="Woningtype" class="w-full border border-blue-500 p-2 rounded focus:border-orange-500 focus:ring-orange-500">
                <input type="number" placeholder="Aantal kamers" class="w-full border border-blue-500 p-2 rounded focus:border-orange-500 focus:ring-orange-500">
                <input type="number" placeholder="Huurprijs" class="w-full border border-blue-500 p-2 rounded focus:border-orange-500 focus:ring-orange-500">
                <button class="bg-orange-500 text-white py-2 px-4 rounded hover:bg-orange-600">Zoeken</button>
            </div>
        </div>
    </div>
</section>

<!-- Uitgelichte Huizen -->
<section class="py-8">
    <div class="container mx-auto px-4">
        <h2 class="text-blue-600 text-2xl font-bold mb-4">Uitgelichte Huizen</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Herhaal dit blok voor elke woning -->
            @for ($i = 0; $i < 6; $i++)
            <div class="bg-white p-4 rounded shadow">
                <img src="https://placehold.co/600x400" alt="Huis" class="w-full h-48 object-cover rounded mb-4">
                <div class="text-gray-700">
                    <h3 class="text-lg font-bold">€{{ rand(500, 1000) }}</h3>
                    <p>Locatie: Stad {{ $i + 1 }}</p>
                    <p>Type: Appartement</p>
                    <p>Aantal kamers: {{ rand(1, 5) }}</p>
                </div>
            </div>
            @endfor
            <!-- Einde herhaalblok -->
        </div>
    </div>
</section>

<!-- Provincies Sectie -->
<section class="bg-gray-200 py-8">
    <div class="container mx-auto px-4">
        <h2 class="text-blue-600 text-2xl font-bold mb-4">Provincies</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Herhaal dit blok voor elke provincie -->
            @for ($i = 0; $i < 8; $i++)
            <div class="bg-white p-4 rounded shadow text-center">
                <img src="https://placehold.co/300x200" alt="Provincie" class="w-full h-32 object-cover rounded mb-4">
                <a href="#" class="bg-orange-500 text-white py-2 px-4 rounded inline-block hover:bg-orange-600">Bekijk woningen</a>
            </div>
            @endfor
            <!-- Einde herhaalblok -->
        </div>
    </div>
</section>

<!-- Nieuw op Huisruilen.nl -->
<section class="py-8">
    <div class="container mx-auto px-4">
        <h2 class="text-blue-600 text-2xl font-bold mb-4">Nieuw op Huisruilen.nl</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Herhaal dit blok voor elke nieuwe woning -->
            @for ($i = 0; $i < 6; $i++)
            <div class="bg-white p-4 rounded shadow relative">
                <span class="absolute top-0 right-0 bg-green-500 text-white text-xs font-bold py-1 px-2 rounded-bl">Nieuw</span>
                <img src="https://placehold.co/600x400" alt="Nieuw Huis" class="w-full h-48 object-cover rounded mb-4">
                <div class="text-gray-700">
                    <h3 class="text-lg font-bold">€{{ rand(500, 1000) }}</h3>
                    <p>Locatie: Stad {{ $i + 1 }}</p>
                    <p>Type: Appartement</p>
                    <p>Aantal kamers: {{ rand(1, 5) }}</p>
                </div>
            </div>
            @endfor
            <!-- Einde herhaalblok -->
        </div>
    </div>
</section>

<!-- Hoe werkt het -->
<section class="bg-gray-200 py-8">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-blue-600 text-2xl font-bold mb-4">Hoe werkt het</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white p-6 rounded shadow">
                <div class="text-blue-600 text-4xl mb-4">📘</div>
                <h3 class="text-lg font-bold mb-2 text-orange-500">Zoek naar een woning</h3>
                <p class="text-gray-700">Gebruik onze zoekfunctie om een woning te vinden die aan uw wensen voldoet.</p>
            </div>
            <div class="bg-white p-6 rounded shadow">
                <div class="text-blue-600 text-4xl mb-4">📞</div>
                <h3 class="text-lg font-bold mb-2 text-orange-500">Neem contact op</h3>
                <p class="text-gray-700">Neem contact op met de verhuurder om een afspraak te maken.</p>
            </div>
            <div class="bg-white p-6 rounded shadow">
                <div class="text-blue-600 text-4xl mb-4">🚚</div>
                <h3 class="text-lg font-bold mb-2 text-orange-500">Verhuis naar uw nieuwe woning</h3>
                <p class="text-gray-700">Maak de verhuizing rond en geniet van uw nieuwe woning.</p>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')
