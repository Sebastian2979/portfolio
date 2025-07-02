@extends('layout')

@php($title = 'Home')

@section('content')
    <header class="flex items-center justify-center text-white mt-8">
        <!-- Wrapper -->
        <div class="grid grid-cols-1 md:grid-cols-2 w-[85%]">
            <!-- Bild (oben auf Mobil) -->
            <div class="order-1 md:order-2 flex justify-center items-start md:items-center pt-2 md:pt-0 pb-4">
                <div class="relative w-72 h-72 sm:w-80 sm:h-80 md:w-[400px] md:h-[400px] lg:w-[500px] lg:h-[500px] xl:w-[600px] xl:h-[600px] flex items-center justify-center">
                    <div class="absolute inset-0 bg-gray-900/50 rounded-full"></div>
                    <!-- Bild -->
                    <img src="/images/masked-sebastian.png" alt="Sebastian" class="relative w-[100%] h-[100%] object-cover rounded-full z-10">
                </div>
            </div>
            <!-- Text (darunter auf Mobil, links ab md) -->
            <div class="order-2 md:order-1 flex items-center justify-center text-center px-6 py-6 md:py-12 md:min-h-screen">
                <div class="text-white max-w-xl w-full">
                    <p class="text-xl md:text-2xl lg:text-3xl" style="text-shadow: 2px 2px 8px rgba(0,0,0,0.9);">
                        Hi, ich bin
                    </p>
                    <h1 class="text-5xl md:text-6xl lg:text-8xl xl:text-[7rem] font-extrabold mb-4 leading-tight" style="text-shadow: 2px 2px 8px rgba(0,0,0,0.9);">
                        Sebastian
                    </h1>
                    <p class="text-xl md:text-2xl lg:text-3xl mb-6" style="text-shadow: 2px 2px 8px rgba(0,0,0,0.9);">
                        Junior Laravel Entwickler
                    </p>
                    <a href="{{ route('about') }}" class="inline-block px-6 py-3 bg-gray-900 text-white font-semibold rounded-lg shadow-lg hover:bg-gray-800 transition">
                        Erfahre mehr
                    </a>
                </div>
            </div>
        </div>
    </header>
@endsection