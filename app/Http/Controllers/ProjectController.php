<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        return view('dashboard-magang', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'    => 'required|string|max:255',
            'company'  => 'required|string|max:255',
            'progress' => 'required|integer|min:0|max:100',
            'deadline' => 'required|date',
        ]);

        Project::create([
            'title'    => $validated['title'],
            'company'  => $validated['company'],
            'progress' => $validated['progress'],
            'deadline' => $validated['deadline'],
            'members'  => 1,
        ]);

        return redirect()->route('dashboard.magang')
            ->with('success', 'Proyek berhasil ditambahkan');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title'    => 'required',
            'company'  => 'required',
            'progress' => 'required|integer|min:0|max:100',
            'deadline' => 'required|date',
        ]);

        $project->update($validated);

        return redirect()->route('dashboard.magang')
            ->with('success', 'Proyek berhasil diperbarui');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('dashboard.magang')
            ->with('success', 'Proyek berhasil dihapus');
    }
}
