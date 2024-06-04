<!-- Header -->
<header class="bg-blue-800 text-white">
    <div class="container mx-auto px-4 py-2 flex justify-between items-center">
        <div class="flex items-center space-x-2">
            <img src="https://placehold.co/50x50" alt="Logo" class="h-10 w-10">
            <h1 class="text-xl font-bold">Woningplek</h1>
        </div>
        <div class="flex space-x-4">
            <a href="{{ route('login') }}" class="hover:underline">Inloggen</a>
            <a href="{{ route('register') }}" class="hover:underline">Account maken</a>
            <a href="#" class="bg-orange-500 text-white py-2 px-4 rounded hover:bg-orange-600">Plaats advertentie</a>
        </div>
    </div>
</header>

<!-- Navbar -->
<nav class="bg-blue-700 text-white">
    <div class="container mx-auto px-4 py-2 flex justify-between items-center">
        <div class="flex space-x-4">
            <a href="{{ route('frontpage') }}" class="flex items-center space-x-1 hover:underline">
                <i class="fas fa-home"></i><span>Home</span>
            </a>
            <a href="{{ route('ads.show', 1) }}" class="flex items-center space-x-1 hover:underline">
                <i class="fas fa-clock"></i><span>Recente advertenties</span>
            </a>
            <a href="{{ route('ads.store') }}" class="flex items-center space-x-1 hover:underline">
                <i class="fas fa-plus"></i><span>Advertentie plaatsen</span>
            </a>
            <a href="#" class="flex items-center space-x-1 hover:underline">
                <i class="fas fa-star"></i><span>Extra opvallen</span>
            </a>
            <a href="{{ route('profile') }}" class="flex items-center space-x-1 hover:underline">
                <i class="fas fa-user"></i><span>Mijn account</span>
            </a>
        </div>
        <div class="flex items-center space-x-2">
            <input type="text" placeholder="Zoek..." class="p-2 rounded">
            <button class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Zoek</button>
        </div>
    </div>
</nav>
