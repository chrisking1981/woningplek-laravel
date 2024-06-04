<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Woningruil Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        @media (min-width: 768px) {
            #nav-links { display: flex !important; }
        }
        .clickable-row {
            display: block;
            width: 100%;
            color: inherit;
            text-decoration: none;
        }
        .clickable-row:hover {
            background-color: #f9f9f9;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-gray-100 font-sans">

<!-- Header -->
<header class="bg-blue-800 text-white">
    <div class="container mx-auto px-4 py-2 flex justify-between items-center">
        <div class="flex items-center space-x-2">
            <img src="https://placehold.co/50x50" alt="Logo" class="h-10 w-10">
            <h1 class="text-xl font-bold">Laravel</h1>
        </div>
        <div class="flex space-x-4">
            <a href="#" class="hover:underline">Inloggen</a>
            <a href="#" class="hover:underline">Account maken</a>
            <a href="#" class="bg-orange-500 text-white py-2 px-4 rounded hover:bg-orange-600">Plaats advertentie</a>
        </div>
    </div>
</header>

<!-- Navbar -->
<nav class="bg-blue-700 text-white">
    <div class="container mx-auto px-4 py-2 flex justify-between items-center">
        <div class="flex space-x-4">
            <a href="#" class="flex items-center space-x-1 hover:underline">
                <i class="fas fa-home"></i><span>Home</span>
            </a>
            <a href="#" class="flex items-center space-x-1 hover:underline">
                <i class="fas fa-clock"></i><span>Recente advertenties</span>
            </a>
            <a href="#" class="flex items-center space-x-1 hover:underline">
                <i class="fas fa-plus"></i><span>Advertentie plaatsen</span>
            </a>
            <a href="#" class="flex items-center space-x-1 hover:underline">
                <i class="fas fa-star"></i><span>Extra opvallen</span>
            </a>
            <a href="#" class="flex items-center space-x-1 hover:underline">
                <i class="fas fa-user"></i><span>Mijn account</span>
            </a>
        </div>
        <div class="flex items-center space-x-2">
            <input type="text" placeholder="Zoek..." class="p-2 rounded">
            <button class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Zoek</button>
        </div>
    </div>
</nav>

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

<!-- Footer -->
<footer class="bg-gray-800 py-8">
    <div class="container mx-auto px-4 text-white">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div>
                <h3 class="font-bold mb-2">Huisruilen</h3>
                <ul>
                    <li><a href="#" class="text-gray-300 hover:text-white">Home</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">Contact</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">Voorwaarden</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">Privacybeleid</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold mb-2">Handige Links</h3>
                <ul>
                    <li><a href="#" class="text-gray-300 hover:text-white">FAQ</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">Support</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold mb-2">Social Media</h3>
                <ul class="flex space-x-4">
                    <li><a href="#" class="text-gray-300 hover:text-white">Facebook</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">Twitter</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">Instagram</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold mb-2">Contact Informatie</h3>
                <p class="text-gray-300">123 Woningstraat, 1000 AB Amsterdam</p>
                <p class="text-gray-300">Email: info@huisruilen.nl</p>
                <p class="text-gray-300">Tel: 020-1234567</p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
