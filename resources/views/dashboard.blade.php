<x-app-layout>
    <div class="flex min-h-screen bg-gray-100">
        <!-- Sidebar -->
        <aside class="w-64 bg-black text-white flex flex-col p-6">
            <div class="mb-8">
                <img src="https://cdn-icons-png.flaticon.com/512/5968/5968778.png" alt="Logo" class="h-12 mx-auto mb-4">
                <h1 class="text-center text-xl font-bold">Mon Tableau de Bord</h1>
            </div>

            <nav class="space-y-4">
                <a href="#" class="flex items-center text-gray-200 hover:text-violet-400">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M13 5v14" />
                    </svg>
                    Accueil
                </a>
                <a href="#" class="flex items-center text-gray-200 hover:text-violet-400">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Statistiques
                </a>
                <a href="#" class="flex items-center text-gray-200 hover:text-violet-400">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                    Paramètres
                </a>
            </nav>
        </aside>

        <!-- Main content -->
        <main class="flex-1 p-10">
            <h2 class="text-3xl font-bold text-violet-700 mb-6">Bienvenue, {{ Auth::user()->name }} !</h2>
            <p class="text-gray-700 mb-4">Voici votre tableau de bord personnalisé. Vous pouvez gérer vos informations ici.</p>

           <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

    <!-- Profil de l'utilisateur -->
    <div class="p-6 bg-white rounded-lg shadow text-black flex items-center space-x-4">
        <img 
            src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=7e22ce&color=fff" 
            alt="Avatar" 
            class="w-16 h-16 rounded-full"
        >
        <div>
            <h3 class="text-lg font-bold">{{ Auth::user()->name }}</h3>
            <p class="text-sm text-gray-600">{{ Auth::user()->email }}</p>
        </div>
    </div>

    <!-- Autre section (existant déjà) -->
    <div class="p-6 bg-white rounded-lg shadow text-black">
        <h3 class="text-xl font-semibold mb-2">Section 2</h3>
        <p>Contenu de la section 2.</p>
    </div>

</div>

                <div class="p-6 bg-white rounded-lg shadow text-black">
                    <h3 class="text-xl font-semibold mb-2">Section 1</h3>
                    <p>Contenu de la section 1.</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow text-black">
                    <h3 class="text-xl font-semibold mb-2">Section 2</h3>
                    <p>Contenu de la section 2.</p>
                </div>
            </div>
        </main>
    </div>
</x-app-layout>
