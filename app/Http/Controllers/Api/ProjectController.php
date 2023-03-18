<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Type;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::get();

        foreach ($projects as $project) {
            if ($project->image) $project->image = url('storage/' . $project->image);
        }

        return response()->json($projects);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $project = Project::where('slug', $slug)->first();
        if ($project->image) $project->image = url('storage/' . $project->image);
        return response()->json($project);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function CategoryProjects(string $id)
    {
        $category = Type::find($id);
        if (!$category) return response(null, 404);

        $projects = $category->projects;
        foreach ($projects as $project) {
            if ($project->image) $project->image = url('storage/' . $project->image);
        }

        return response()->json($projects);
    }
}
