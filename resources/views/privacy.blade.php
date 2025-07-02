@extends('layout')

@php($title = 'Datenschutzerklärung')

@section('content')
<div class="min-h-screen flex items-center justify-center text-white p-4">
    <div class="max-w-4xl mx-auto bg-gray-900/85 rounded-xl p-8 space-y-4 text-lg leading-relaxed">
        <h2 class="text-2xl font-bold">Datenschutzerklärung</h2>

        <p><strong>1. Allgemeine Hinweise</strong><br>
        Diese Datenschutzerklärung informiert Sie über die Art, den Umfang und den Zweck der Verarbeitung personenbezogener Daten auf dieser Website gemäß der Datenschutz-Grundverordnung (DSGVO).</p>

        <p><strong>2. Verantwortlicher</strong><br>
        Sebastian Kitschke<br>
        Seegefelder Straße 71<br>
        13583 Berlin<br>
        E-Mail: info@pumo.digital</p>

        <p><strong>3. Zugriffsdaten</strong><br>
        Beim Besuch dieser Website erhebt der Hostinganbieter automatisch Daten (sogenannte Server-Logfiles), darunter:<br>
        - Browsertyp und -version<br>
        - verwendetes Betriebssystem<br>
        - Referrer-URL<br>
        - Hostname des zugreifenden Rechners<br>
        - Uhrzeit der Serveranfrage<br>
        - IP-Adresse<br>
        Diese Daten sind nicht bestimmten Personen zuordenbar und werden nicht mit anderen Datenquellen zusammengeführt.</p>

        <p><strong>4. Cookies</strong><br>
        Diese Website verwendet keine Cookies, außer technisch notwendigen.</p>

        <p><strong>5. Kontaktaufnahme</strong><br>
        Wenn Sie mich per E-Mail kontaktieren, werden Ihre Angaben zwecks Bearbeitung der Anfrage sowie für den Fall von Anschlussfragen gespeichert. Diese Daten werden ohne Ihre Einwilligung nicht weitergegeben.</p>

        <p><strong>6. Rechte der betroffenen Personen</strong><br>
        Sie haben das Recht auf:<br>
        - Auskunft über Ihre gespeicherten Daten<br>
        - Berichtigung unrichtiger Daten<br>
        - Löschung Ihrer Daten (sofern keine gesetzliche Aufbewahrungspflicht besteht)<br>
        - Einschränkung der Verarbeitung<br>
        - Widerspruch gegen die Verarbeitung<br>
        - Datenübertragbarkeit</p>

        <p><strong>7. Beschwerderecht</strong><br>
        Sie haben das Recht, sich bei einer Aufsichtsbehörde zu beschweren, z. B. bei der Berliner Beauftragten für Datenschutz:  
        <a href="https://www.datenschutz-berlin.de" class="text-blue-400 underline" target="_blank">www.datenschutz-berlin.de</a></p>

        <p><strong>8. Änderungen dieser Datenschutzerklärung</strong><br>
        Ich behalte mir vor, diese Datenschutzerklärung anzupassen, damit sie stets den aktuellen rechtlichen Anforderungen entspricht.</p>

        <p class="text-sm text-gray-400">Stand: 01.06.2025</p>
    </div>
</div>
@endsection
