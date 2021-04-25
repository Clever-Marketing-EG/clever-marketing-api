<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProjectController extends ResourcesController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $projects = Project::select('id', 'title', 'image_url', 'type')->latest()->paginate(15)->toArray();

        return response()->json(array_merge(
            ['success' => true],
            $projects
        ));
    }


    /**
     * Filters Projects by type
     *
     * @param $type
     * @return JsonResponse
     */
    public function filter($type): JsonResponse
    {
        $projects = Project::select('id', 'title', 'image_url', 'type')->where('type', $type)->latest()->paginate(15)->toArray();

        return response()->json(array_merge(
            ['success' => true],
            $projects
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $validated = Project::validate($request);
        $project = Project::create($validated);

        return response()->json([
            'success' => true,
            'data' => $project
        ], 201);
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
            'data' => $project->loadLocale()
        ]);
    }


    /**
     * Shows the full version of the project
     *
     * @param Project $project
     * @return JsonResponse
     */
    public function showFull(Project $project): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Project $project
     * @return JsonResponse
     */
    public function update(Request $request, Project $project): JsonResponse
    {
        $validated = Project::validate($request);
        $project->update($validated);

        return response()->json([
            'success' => true,
            'data' => $project
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Project $project
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(Project $project): JsonResponse
    {
        $project->delete();

        return response()->json([
            'success' => true,
            'data' => $project
        ]);
    }
}
