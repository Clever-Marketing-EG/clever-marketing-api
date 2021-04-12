<?php

namespace App\Http\Controllers\Main;


use App\Http\Controllers\ResourcesController;
use App\Models\Project;
use Illuminate\Http\JsonResponse;


class ProjectController extends ResourcesController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $projects = Project::all();

        return response()->json([
            'success' => true,
            'data' => $projects
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Project $project
     * @return JsonResponse
     */
    public function show(Project $project): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $project
        ]);
    }

}
