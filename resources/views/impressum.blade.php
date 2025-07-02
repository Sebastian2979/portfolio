@extends('layout')

@php($title = 'Impressum')

@section('content')
<div class="flex items-center justify-center text-white p-4">
    <div class="max-w-4xl mx-auto bg-gray-900/85 rounded-xl p-8 space-y-4 text-lg leading-relaxed">
        <h1 class="text-3xl md:text-4xl font-bold">Impressum</h1>

        <p><strong>Angaben gemäß § 5 TMG:</strong><br>
        Sebastian Kitschke<br>
        Seegefelder Straße 71<br>
        13583 Berlin</p>

        <p><strong>Kontakt:</strong><br>
        E-Mail: <a href="mailto:info@pumo.digital" class="text-blue-400 underline">info@pumo.digital</a><br>
        Website: <a href="https://www.pumo.digital" class="text-blue-400 underline" target="_blank">www.pumo.digital</a></p>

        <p><strong>Verantwortlich für den Inhalt nach § 55 Abs. 2 RStV:</strong><br>
        Sebastian Kitschke<br>
        [Adresse wie oben]</p>

        <p><strong>Haftungsausschluss:</strong><br>
        Trotz sorgfältiger inhaltlicher Kontrolle übernehme ich keine Haftung für die Inhalte externer Links. Für den Inhalt der verlinkten Seiten sind ausschließlich deren Betreiber verantwortlich.</p>

        <p class="text-sm text-gray-400">Stand: 01.06.2025</p>
    </div>
</div>
@endsection
