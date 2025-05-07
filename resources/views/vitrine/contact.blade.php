@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <h2>Contactez-moi</h2>
    <p>Vous avez un projet ou une question ? N'hésitez pas à m'envoyer un message.</p>

    @if(session('success'))
        <div style="background-color: #d1fae5; color: #065f46; padding: 1rem; border-radius: 8px; margin-bottom: 1rem;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ url('/contact') }}" method="POST" style="max-width: 600px;">
        @csrf
        <div style="margin-bottom: 1rem;">
            <label for="nom">Nom</label><br>
            <input type="text" id="nom" name="nom" required style="width: 100%; padding: 0.5rem;">
        </div>
        <div style="margin-bottom: 1rem;">
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email" required style="width: 100%; padding: 0.5rem;">
        </div>
        <div style="margin-bottom: 1rem;">
            <label for="message">Message</label><br>
            <textarea id="message" name="message" rows="5" required style="width: 100%; padding: 0.5rem;"></textarea>
        </div>
        <button type="submit" class="btn">Envoyer</button>
    </form>
@endsection
