<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ServiceController extends ResourcesController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {

        return response()->json(array_merge(
            ['success' => true],
            trans('services')
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
        $validated = Service::validate($request);
        $service = Service::create($validated);
        return response()->json([
            'success' => true,
            'data' => $service
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param Service $service
     * @return JsonResponse
     */
    public function show(Service $service): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $service->loadLocale()
        ]);
    }


    /**
     * Show full data of the resource
     *
     * @param Service $service
     * @return JsonResponse
     */
    public function showFull(Service $service): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $service
        ]);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Service $service
     * @return JsonResponse
     */
    public function update(Request $request, Service $service): JsonResponse
    {
        $validated = Service::validate($request);
        $service->update($validated);

        return response()->json([
            'success' => true,
            'data' => $service
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Service $service
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(Service $service): JsonResponse
    {
        $service->delete();

        return response()->json([
            'success' => true,
            'data' => $service,
        ]);
    }
}
