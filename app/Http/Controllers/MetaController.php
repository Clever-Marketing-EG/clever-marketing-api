<?php

namespace App\Http\Controllers;

use App\Models\Meta;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MetaController extends ResourcesController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $meta = Meta::all();
        return response()->json([
            'success' => true,
            'data' => $meta
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function fullIndex(): JsonResponse
    {
        $meta = new Meta();
        return response()->json([
            'success' => true,
            'data' => $meta->dashboard()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Meta $metum
     * @return JsonResponse
     */
    public function show(Meta $metum): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $metum
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Meta $metum
     * @return JsonResponse
     */
    public function update(Request $request, Meta $metum): JsonResponse
    {
        $validated = Meta::validate($request);

        $metum->update($validated);

        return response()->json([
            'success' => true,
            'data' => $metum
        ]);
    }
}
