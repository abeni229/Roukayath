@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <h2>Bienvenue sur mon site</h2>
    <p>Je suis développeur web freelance, spécialisé en Laravel , PHP et Js.</p>
    
<br>

    <h3>Mes services</h3>
    <ul>
        <li>Développement de sites web sur mesure</li>
        <li>Création de sites vitrines et e-commerce</li>
        <li>Maintenance et optimisation de sites existants</li>
        <li>Consultation et accompagnement technique</li>
    </ul>

<br>
    <h3>Pourquoi me choisir ?</h3>
    <p>Je m'engage à fournir un travail de qualité, respectant les délais et les besoins de mes clients. Mon objectif est de vous aider à atteindre vos objectifs en ligne.</p><br>
    <a href="{{ url('/contact') }}" class="btn">Me contacter</a>
<br>
@endsection
