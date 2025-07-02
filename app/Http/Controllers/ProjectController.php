<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::get();
        Log::info("Projectcontroller: View (Index) für alle Projekte aufgerufen");
        return view('projects.index', compact('projects'));
    }

    public function show(Project $project){
        return view('projects.project', compact('project'));
    }
}
