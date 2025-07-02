@extends('layout')

@php($title = 'Meine Projekte')

@section('content')
    <div class="flex justify-center p-4">
        <div class="max-w-full mx-auto space-y-4 bg-gray-900/85 rounded-lg p-8">
            <h1 class="text-3xl md:text-4xl font-bold text-white">Meine Projekte</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                @foreach($projects as $project)
                    <x-project-card :project="$project" />
                @endforeach
            </div>
        </div>
    </div>
@endsection