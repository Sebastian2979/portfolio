<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
        'image' => '/images/homepage.png',
        'title' => 'Portfolio Website',
        'description' => 'Meine persönliche Website mit Laravel, Tailwind CSS und Live Deployment auf Railway.',
        'features'=> [],
        'stack'=> ['Laravel 12', 'Tailwind CSS', 'AlpineJS', 'Railway'],
        'link' => 'https://pumo.digital',
    ]);

    Project::create([
        'image' => '/images/todo-app.png',
        'title' => 'Todo-App',
        'description' => 'Diese minimalistische Aufgabenverwaltung bietet die Möglichkeit, Todos zu erstellen, anzuzeigen und zu löschen. Die App nutzt die Komponenten von Laravel Breeze für Authentifizierung und Routing sowie Tailwind CSS für ein klares, responsives UI-Design.',
        'features'=> [],
        'stack'=> ['Laravel 12', 'Tailwind CSS', 'AlpineJS', 'Laravel Cloud'],
        'link' => 'https://todo-app-main-lkjbsb.laravel.cloud/',
    ]);

    Project::create([
        'image' => '/images/blog.png',
        'title' => 'Blog System',
        'features'=> [],
        'stack'=> ['Laravel 12', 'Tailwind CSS', 'AlpineJS'],
        'description' => 'Ein modernes Blogsystem auf Basis von Laravel 12 mit Benutzerregistrierung, Adminbereich und Kommentarfunktion. Registrierte Nutzer können Beiträge und Kommentare verfassen, Gäste dürfen kommentieren. Beiträge lassen sich nach Kategorien und Schlagwörtern filtern. Das Frontend wird mit Tailwind CSS gestaltet, für dynamische UI-Effekte kommt Alpine.js zum Einsatz.',
        'link' => 'https://pumo.digital',
    ]);
    }
}
