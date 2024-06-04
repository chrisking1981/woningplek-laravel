@include('layouts.header')
@include('layouts.navbar')

<section class="py-8">
    <div class="container mx-auto px-4">
        <div class="bg-white p-6 rounded shadow">
            <h2 class="text-2xl font-bold mb-4">Inloggen</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email:</label>
                    <input type="email" id="email" name="email" class="w-full border border-gray-300 p-2 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Wachtwoord:</label>
                    <input type="password" id="password" name="password" class="w-full border border-gray-300 p-2 rounded" required>
                </div>
                <div class="mb-4">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember" class="text-gray-700">Onthoud mij</label>
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Inloggen</button>
                </div>
            </form>
        </div>
    </div>
</section>

@include('layouts.footer')
