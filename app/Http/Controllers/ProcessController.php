<?php

namespace App\Http\Controllers;

use App\Models\Process;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProcessController extends ResourcesController {

    /**
    * Display a listing of the resource.
    *
    * @return JsonResponse
    */

    public function index(): JsonResponse
    {
        $process = Process::all();
        return response()->json([
            'success' => true,
            'data' => $process
        ]);
    }

    /**
    * Display the specified resource.
    *
    * @param Process $process
    * @return JsonResponse
    */

    public function show( Process $process ): JsonResponse {
        return response()->json( [
            'success' => true,
            'data' => $process
        ] );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param Request $request
    * @return JsonResponse
    */

    public function store( Request $request ): JsonResponse {
        $validated = Process::validate( $request );
        $process = Process::create( $validated );

        return response()->json( [
            'success' => true,
            'data' => $process
        ], 201 );
    }

    /**
    * Update the specified resource in storage.
    *
    * @param Request $request
    * @param Process $process
    * @return JsonResponse
    */

    public function update( Request $request, Process $process ): JsonResponse {
        $validated = Process::validate( $request );
        $process->update( $validated );

        return response()->json( [
            'success' => true,
            'data' => $process
        ] );

    }

    /**
    * Remove the specified resource from storage.
    *
    * @param Process $process
    * @return JsonResponse
    * @throws Exception
    */

    public function destroy( Process $process ): JsonResponse {
        $process->delete();

        return response()->json( [
            'success' => true,
            'data' => $process
        ] );
    }
}
