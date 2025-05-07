<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-lg">
            <div class="flex justify-center mb-4">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-16">
            </div>
            <h2 class="text-2xl font-bold text-center mb-6 text-purple-700">Créer un compte</h2>
            
            
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Nom -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
                    <input id="name" type="text" name="name" required autofocus
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500">
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" type="email" name="email" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500">
                </div>

                <!-- Mot de passe -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                    <input id="password" type="password" name="password" required autocomplete="new-password"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500">
                </div>

                <!-- Confirmer mot de passe -->
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmer le mot de passe</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500">
                </div>

                <button type="submit"
                    class="w-full bg-purple-600 text-white py-2 rounded-md hover:bg-purple-700 transition">
                    S'inscrire
                </button>

                <p class="mt-4 text-center text-sm text-gray-600">
                    Déjà inscrit ?
                    <a href="{{ route('login') }}" class="text-purple-600 hover:underline">Se connecter</a>
                </p>
            </form>
        </div>
    </div>
</x-guest-layout>
