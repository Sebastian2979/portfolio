@props(['project'])

<div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
    <img src="{{ asset($project->image) }}" alt="{{ $project->title }}" class="w-full h-[200px] object-cover object-top">

    <div class="p-6 flex flex-col">
        <h3 class="text-xl font-semibold mb-2">{{ $project->title }}</h3>
        <p class="text-gray-700 text-sm mb-4 flex-grow">{{ \Illuminate\Support\Str::words($project->description, 15, '...') }}</p>
        <a href="{{ route('show.project', $project) }}" class="text-blue-600 hover:underline">
            Details ansehen
        </a>
    </div>
</div>