<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\ResourcesController;
use App\Models\Service;
use Illuminate\Http\JsonResponse;

class ServiceController extends ResourcesController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $services = trans('services');

        return response()->json([
            'success' => true,
            'data' => $services
        ]);
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

}
