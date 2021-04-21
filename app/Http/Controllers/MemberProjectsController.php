<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Project;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MemberProjectsController extends ResourcesController
{
    /**
     * Create a relationship between a Member and some projects
     *
     * @param Request $request
     * @param Member $member
     * @return JsonResponse
     */
    public function store(Request $request, Member $member): JsonResponse
    {
        $validated = $request->validate([
            'projects' => 'required|array|min:1',
            'projects.*' => 'required|integer|exists:projects,id'
        ]);

        $member->projects()->detach();

        foreach ($validated['projects'] as $project_id)
        {
            $project = Project::find($project_id);
            $member->projects()->save($project);
        }

        return response()->json([
            'success' => true,
            'data' => $member->load('projects')
        ], 201);
    }


    /**
     * Removes all the Member projects
     *
     * @param Member $member
     * @return JsonResponse
     */
    public function destroy(Member $member): JsonResponse
    {
        $member->projects()->detach();

        return response()->json([
            'success' => true,
            'data' => $member->load('projects')
        ]);
    }
}
