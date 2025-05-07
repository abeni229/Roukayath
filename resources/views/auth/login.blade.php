<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-lg">
            <div class="flex justify-center mb-4">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-16">
            </div>
            <h2 class="text-2xl font-bold text-center mb-6 text-purple-700">Connexion</h2>
           
            
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" type="email" name="email" required autofocus
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500">
                </div>

                <!-- Mot de passe -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                    <input id="password" type="password" name="password" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500">
                </div>

                <!-- Se souvenir -->
                <div class="mb-4 flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember" class="text-sm text-gray-600">Se souvenir de moi</label>
                </div>

                <button type="submit"
                    class="w-full bg-purple-600 text-white py-2 rounded-md hover:bg-purple-700 transition">
                    Se connecter
                </button>

                <p class="mt-4 text-center text-sm text-gray-600">
                    Pas encore inscrit ?
                    <a href="{{ route('register') }}" class="text-purple-600 hover:underline">Créer un compte</a>
                </p>
            </form>
        </div>
    </div>
</x-guest-layout>
