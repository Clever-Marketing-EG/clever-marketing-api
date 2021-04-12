<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\ResourcesController;
use App\Models\Job;
use Illuminate\Http\JsonResponse;


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
}
