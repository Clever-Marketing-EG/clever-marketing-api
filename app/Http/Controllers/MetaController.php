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
        $meta = trans('meta');
        $arr = [];

        foreach ($meta as $metum) {
            if(!array_key_exists($metum['page'], $arr)) {
                $arr[$metum['page']] = [];
            }
            array_push($arr[$metum['page']], $metum);
        }

        return response()->json([
            'success' => true,
            'data' => $arr
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function fullIndex(): JsonResponse
    {
        $meta = Meta::all();
        return response()->json([
            'success' => true,
            'data' => $meta
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
