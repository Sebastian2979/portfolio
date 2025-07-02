@extends('layout')

@php($title = $project->title)

@section('content')
    <div class="flex items-center justify-center bg-gradient-to-r from-gray-200 via-blue-300 to-white 
                                             animate-gradient p-4">
        <section class="max-w-3xl mx-auto bg-white rounded-lg">

            <img src="{{ asset($project->image) }}" alt="{{ $project->title }}"
                class="sm:w-[800px] sm:h-[400px] object-cover object-top rounded-t-lg" />
            <div class="p-4">
                <h1 class="text-3xl font-bold mb-4">{{ $project->title }}</h1>
                <p class="text-gray-700 text-lg mb-6">{{ $project->description }}</p>
                @if ($project->features)
                    <ul class="flex flex-col gap-2 text-lg text-gray-800 mt-2 mb-4">
                        @foreach ($project->features as $feature)
                            <li class="px-2 py-1 rounded">- {{ $feature }}</li>
                        @endforeach
                    </ul>
                @endif

                @if ($project->stack)
                    <ul class="flex flex-wrap gap-2 text-lg text-gray-600 mt-2 mb-4">
                        @foreach ($project->stack as $stack)
                            <li class="bg-gray-100 px-2 py-1 rounded">{{ $stack }}</li>
                        @endforeach
                    </ul>
                @endif

                @if ($project->link)
                    <a href="{{ $project->link }}" target="_blank"
                        class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Projekt ansehen
                    </a>
                @endif
            </div>
        </section>
    </div>
@endsection