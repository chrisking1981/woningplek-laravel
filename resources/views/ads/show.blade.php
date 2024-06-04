@include('layouts.header')
@include('layouts.navbar')

<!-- Hoofdsectie -->
<section class="py-8">
    <div class="container mx-auto px-4 flex space-x-4">
        <!-- Linkerkolom -->
        <div class="w-full md:w-3/4 bg-white p-6 rounded shadow">
            <h2 class="text-2xl font-bold mb-2">Rotterdam</h2>
            <p class="text-gray-600 mb-4">Lombardijen, Spinozaweg 387</p>
            <p class="text-lg font-bold mb-2">€ 605 p/m</p>
            
            <div class="border-t border-gray-300 mt-4 pt-4">
                <h3 class="text-xl font-bold mb-2">Aangeboden woning</h3>
                <p class="text-gray-700 mb-4">
                    Lombardijen 3 slaapkamer, 4 verdieping flat. De woning ligt op een zeer goede locatie, met een
                    prachtig uitzicht, dichtbij alle winkels en tegenover de bus- en tramhaltes. De reden voor
                    overschrijving is een iets grotere woning willen.
                </p>
                <div class="flex space-x-4 mb-4">
                    <div class="flex flex-col items-center">
                        <i class="fas fa-home text-2xl"></i>
                        <p class="text-sm">Galerij flat</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <i class="fas fa-bed text-2xl"></i>
                        <p class="text-sm">4 kamers</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <i class="fas fa-expand text-2xl"></i>
                        <p class="text-sm">Oppervlakte: 90m²</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <i class="fas fa-building text-2xl"></i>
                        <p class="text-sm">4e verdieping</p>
                    </div>
                </div>

                <h3 class="text-xl font-bold mb-2">Kenmerken</h3>
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <span class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Badkamer</span>
                    <span class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> CV</span>
                    <span class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Balkon</span>
                    <span class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Douche</span>
                    <span class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Lift</span>
                </div>

                <h3 class="text-xl font-bold mb-2">Voorzieningen</h3>
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <span class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Parkeerplek</span>
                    <span class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Kindvriendelijk</span>
                    <span class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Bus-/tramverbinding</span>
                    <span class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Scholen</span>
                    <span class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Winkel</span>
                    <span class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Treinstation</span>
                </div>

                <h3 class="text-xl font-bold mb-2">Galerij</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <img src="https://placehold.co/400x300" alt="Galerij afbeelding" class="w-full h-full object-cover rounded">
                    <img src="https://placehold.co/400x300" alt="Galerij afbeelding" class="w-full h-full object-cover rounded">
                </div>

                <h3 class="text-xl font-bold mb-2">Gezochte woning</h3>
                <p class="text-gray-700 mb-4">
                    De aanbieder van deze woning is opzoek naar een woning in Zuid-Holland, Rotterdam, met 3 slaapkamers, 
                    een oppervlakte van 90m² en een huurprijs tot € 700 p/m.
                </p>

                <div class="text-center">
                    <a href="#" class="bg-orange-500 text-white py-2 px-4 rounded hover:bg-orange-600">Inloggen om te reageren</a>
                </div>
            </div>
        </div>

        <!-- Rechterkolom -->
        <div class="w-full md:w-1/4">
            <div class="bg-white p-4 rounded shadow mb-4">
                <h3 class="text-lg font-bold">Aangeboden door</h3>
                <p class="text-gray-700">N Alothman</p>
                <p class="text-gray-700">Lid sinds: 1 dag</p>
                <a href="#" class="bg-orange-500 text-white py-2 px-4 rounded block text-center mt-4 hover:bg-orange-600">Stuur bericht</a>
            </div>
            <div class="bg-white p-4 rounded shadow mb-4">
                <h3 class="text-lg font-bold">Delen</h3>
                <div class="flex space-x-2">
                    <a href="#" class="text-blue-500"><i class="fas fa-share-alt"></i> Share</a>
                    <a href="#" class="text-blue-500"><i class="fas fa-thumbs-up"></i> Like</a>
                </div>
            </div>
            <div class="bg-white p-4 rounded shadow mb-4">
                <h3 class="text-lg font-bold">Laatste 10 woningen</h3>
                <div class="space-y-4">
                    @for ($i = 0; $i < 10; $i++)
                    <div class="flex items-center space-x-4">
                        <img src="https://placehold.co/100x100" alt="Woning" class="w-20 h-20 object-cover rounded">
                        <div>
                            <p class="text-lg font-bold">€{{ rand(500, 1000) }}</p>
                            <p class="text-gray-700">Locatie: Stad {{ $i + 1 }}</p>
                            <p class="text-gray-500 text-sm">Aantal kamers: {{ rand(1, 5) }}</p>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')
