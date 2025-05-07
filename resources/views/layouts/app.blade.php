<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Site Vitrine')</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Style principal -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
                #menu-btn {
            display: none; /* par défaut caché sur desktop */
        }

        #nav-links {
            display: flex; /* par défaut affiché en ligne */
            gap: 1.5rem;
            list-style: none;
            margin: 0;
            padding: 0;
        }
        @media (max-width: 768px) {
    #menu-btn {
        display: block; /* s'affiche en mobile */
        background-color: transparent;
        border: none;
        color: white;
        font-size: 2rem;  /* Plus grand pour plus de visibilité */
    }

    #nav-links {
        display: none; /* caché en mobile */
        flex-direction: column;
        margin-top: 1rem;
    }

    #nav-links.show {
        display: flex; /* affiché si menu ouvert */
    }
}

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background: #f9f9f9;
            color: #333;
        }

        header {
            background-color: #1a1a1a;
            color: white;
            padding: 1rem 0;
        }

        .nav-container {
            max-width: 1200px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 1rem;
        }

        nav a {
            color: white;
            margin-left: 1rem;
            text-decoration: none;
            font-weight: 500;
        }

        nav a:hover {
            color: #a855f7; /* Violet */
        }

        main {
            max-width: 1200px;
            margin: auto;
            padding: 2rem 1rem;
        }

        footer {
            background-color: #1a1a1a;
            color: white;
            text-align: center;
            padding: 1rem;
            margin-top: 2rem;
        }

        .btn {
            background-color: #a855f7;
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: background 0.3s;
        }

        .btn:hover {
            background-color: #9333ea;
        }
    </style>
</head>


<body>
    <header>
        <nav style="background-color: #111827; padding: 1rem; color: white;">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div class="logo" style="font-weight: bold;">ROUKY</div>
                <button id="menu-btn" style="background: none; border: none; color: white; font-size: 1.5rem;">
                    ☰
                </button>
                <ul id="nav-links">
                    <li><a href="/" style="color: white;">Accueil</a></li>
                    <li><a href="/a-propos" style="color: white;">À propos</a></li>
                    <li><a href="/contact" style="color: white;">Contact</a></li>
                </ul>
            </div>
        </nav>
        
        
    </header>

    <main>
        @yield('content')
    </main>

    <footer style="background-color: #111827; color: #f3f4f6; padding: 2rem 1rem; text-align: center;">
        <div style="max-width: 1200px; margin: auto; display: flex; flex-wrap: wrap; justify-content: space-between; gap: 2rem;">
            <!-- Contact -->
            <div style="flex: 1; min-width: 200px; text-align: left;">
                <h4 style="margin-bottom: 0.5rem;">Contact</h4>
                <p>Email : <a href="mailto:gazaliouroukayath@gmail.com" style="color: #a5b4fc;">gazaliouroukayath@gmail.com</a></p>
                <p>Téléphone : +229 01 64 25 69 52/ <br>
                              +229 01 50 43 47 10</p>
            </div>
    
            <!-- Liens rapides -->
            <div style="flex: 1; min-width: 200px; text-align: left;">
                <h4 style="margin-bottom: 0.5rem;">Navigation</h4>
                <ul style="list-style: none; padding: 0;">
                    <li><a href="{{ url('/') }}" style="color: #a5b4fc;">Accueil</a></li>
                    <li><a href="{{ url('/a-propos') }}" style="color: #a5b4fc;">À propos</a></li>
                    <li><a href="{{ url('/contact') }}" style="color: #a5b4fc;">Contact</a></li>
                </ul>
            </div>
    
            <!-- Réseaux sociaux -->
            <div style="flex: 1; min-width: 200px; text-align: left;">
                <h4 style="margin-bottom: 0.5rem;">Suivez-moi</h4>
                <p>
                    <a href="https://linkedin.com/in/RoukayathGazaliou" target="_blank" style="color: #a5b4fc;">LinkedIn</a><br>
                    <a href="https://github.com/abeni229" target="_blank" style="color: #a5b4fc;">GitHub</a>
                </p>
            </div>
        </div>
    
        <hr style="margin: 2rem auto; border-color: #374151; max-width: 90%;">
    
        <p style="font-size: 0.9rem;">&copy; {{ date('Y') }} Gazaliou Roukayath. Tous droits réservés.</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuBtn = document.getElementById('menu-btn');
            const navLinks = document.getElementById('nav-links');
    
            menuBtn.addEventListener('click', function () {
                navLinks.classList.toggle('show');
            });
        });
    </script>
    
</body>
</html>
