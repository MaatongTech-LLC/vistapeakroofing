<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::published()
            ->completed()
            ->latest()
            ->paginate(12);

        $featuredProjects = Project::published()
            ->featured()
            ->completed()
            ->latest()
            ->take(3)
            ->get();

        return view('projects.index', compact('projects', 'featuredProjects'));
    }
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }
}
