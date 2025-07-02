@extends('layout')

@php($title = 'Über mich')

@section('content')
<div class="flex items-center justify-center text-white p-4">
    <div class="max-w-6xl mx-auto bg-gray-900/85 rounded-xl p-8 space-y-4 text-lg leading-relaxed">
        <h1 class="text-3xl md:text-4xl font-bold">Über mich</h1>

        <p>Ich bin Sebastian Kitschke - gebürtiger Berliner, Fachinformatiker für Anwendungsentwicklung und jemand, der gerne anpackt, Verantwortung übernimmt und sich in neue Themen reinfuchst.</p>

        <p>Mein Berufsleben wurde ab 2012 richtig spannend: Als Assistent der Geschäftsführung im Pflegedienst meiner Mutter kümmerte ich mich um Buchhaltung, Dienstpläne und die komplette EDV - von Netzwerk bis Server. Dabei habe ich gelernt, wie wichtig Struktur, Zuverlässigkeit und technisches Verständnis im Alltag sind.</p>

        <p>2015 erfüllte ich mir einen Traum und eröffnete eine eigene Espressobar in Charlottenburg, nahe der Deutschen Oper. Zwei intensive Jahre Selbstständigkeit haben mir viel über Organisation, Kundenkontakt und das echte Leben beigebracht.</p>

        <p>2018 entschied ich mich für einen beruflichen Neustart in der IT und absolvierte eine Umschulung zum Fachinformatiker für Anwendungsentwicklung. Danach war ich als Software-Entwickler tätig - unter anderem mit <strong>WordPress</strong>, <strong>APIs</strong>, <strong>Low-Code</strong> und <strong>Shop-Systemen</strong>. Mein strukturiertes Arbeiten, meine schnelle Auffassungsgabe und Zuverlässigkeit wurden dabei besonders geschätzt.</p>

        <p>Seit 2022 arbeite ich als Busfahrer bei der <strong>BVG</strong>. Technik, Verantwortung und der tägliche Umgang mit Menschen machen den Job spannender, als man denkt. Und meine IT-Affinität lebe ich weiterhin in meiner Freizeit aus - mit Webprojekten, neuen Tools und jeder Menge Code.</p>

        <p>Ich bin jemand, der sich gerne weiterentwickelt, Herausforderungen annimmt und immer nach durchdachten Lösungen sucht - ob im Code, im Büro oder im Berliner Straßenverkehr.</p>

        <a href="{{ route('contact') }}">
            <p class="font-semibold mt-4 text-blue-500">Neugierig? Dann klick dich durch oder schreib mir einfach - ich freu mich!</p>
        </a>
    </div>
</div>
@endsection