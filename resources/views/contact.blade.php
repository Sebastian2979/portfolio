@extends('layout')

@php($title = 'Kontakt')

@section('content')
    <div class="flex justify-center items-center text-white p-4">
        <div class="bg-gray-900/85 rounded-lg p-8 w-[600px]">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Kontakt</h2>

            @if (session('success'))
                <div class="mb-4 text-green-400 font-semibold">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label for="name" class="block mb-2 text-left">Name</label>
                    <input type="text" name="name" id="name" required
                        class="w-full px-4 py-3 bg-gray-800 rounded-lg text-white border border-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500">
                </div>

                <div>
                    <label for="email" class="block mb-2 text-left">E-Mail</label>
                    <input type="email" name="email" id="email" required
                        class="w-full px-4 py-3 bg-gray-800 rounded-lg text-white border border-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500">
                </div>

                <div>
                    <label for="message" class="block mb-2 text-left">Nachricht</label>
                    <textarea name="message" id="message" rows="5" required
                        class="w-full px-4 py-3 bg-gray-800 rounded-lg text-white border border-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500"></textarea>
                </div>

                {{-- Datenschutz Checkbox --}}
                <div class="flex items-start">
                    <input type="checkbox" name="privacy" id="privacy" required
                        class="mt-1 mr-2 bg-gray-800 border-gray-700 text-blue-500 focus:ring-blue-500 rounded">
                    <label for="privacy" class="text-sm leading-relaxed">
                        Ich habe die
                        <a href="{{ route('privacy') }}" class="underline text-blue-400 hover:text-blue-300">
                            Datenschutzerklärung
                        </a>
                        gelesen und stimme zu.
                    </label>
                </div>

                <div>
                    <button type="submit"
                        class="px-6 py-3 bg-gray-700 hover:bg-blue-500 rounded-lg font-semibold shadow-md transition w-full">
                        Nachricht senden
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection