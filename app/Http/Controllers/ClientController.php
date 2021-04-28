<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ClientController extends ResourcesController
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
            trans('clients')
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
        $validated = Client::validate($request);
        $client = Client::create($validated);

        return response()->json([
            'success' => true,
            'data' => $client
        ], 201);
    }


    /**
     * Display the specified resource.
     *
     * @param Client $client
     * @return JsonResponse
     */
    public function show(Client $client): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $client->loadLocale()
        ]);
    }


    /**
     * Shows the full version of the client for dashboard display
     *
     * @param Client $client
     * @return JsonResponse
     */
    public function showFull(Client $client): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $client
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Client $client
     * @return JsonResponse
     */
    public function update(Request $request, Client $client): JsonResponse
    {
        $validated = Client::validate($request);
        $client->update($validated);

        return response()->json([
            'success' => true,
            'data' => $client
        ]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param Client $client
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(Client $client): JsonResponse
    {
        $client->delete();

        return response()->json([
            'success' => true,
            'data' => $client
        ]);
    }
}
