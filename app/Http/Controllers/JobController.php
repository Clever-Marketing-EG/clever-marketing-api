<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class JobController extends ResourcesController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $jobs = Job::all();

        return response()->json([
            'success' => true,
            'data' => $jobs
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $validated = Job::validate($request);
        $job = Job::create($validated);

        return response()->json([
            'success' => true,
            'data' => $job,
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param Job $job
     * @return JsonResponse
     */
    public function show(Job $job): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $job
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Job $job
     * @return JsonResponse
     */
    public function update(Request $request, Job $job): JsonResponse
    {
        $validated = Job::validate($request);
        $job->update($validated);

        return response()->json([
            'success' => true,
            'data' => $job
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Job $job
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(Job $job): JsonResponse
    {
        $job->delete();

        return response()->json([
            'success' => true,
            'data' => $job
        ]);
    }
}
