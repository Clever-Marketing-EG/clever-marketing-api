<?php

namespace App\Http\Controllers;

use App\Models\Field;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FieldController extends ResourcesController
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
            trans('fields')
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
        $validated = Field::validate($request);
        $field = Field::create($validated);

        return response()->json([
            'success' => true,
            'data' => $field
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param Field $field
     * @return JsonResponse
     */
    public function show(Field $field): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $field->loadLocale()
        ]);
    }

    public function showFull(Field $field): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $field
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Field $field
     * @return JsonResponse
     */
    public function update(Request $request, Field $field): JsonResponse
    {
        $validated = Field::validate($request);
        $field->update($validated);

        return response()->json([
            'success' => true,
            'data' => $field
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Field $field
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(Field $field): JsonResponse
    {
        $field->delete();

        return response()->json([
            'success' => true,
            'data' => $field
        ]);
    }
}
