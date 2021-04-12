<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\ResourcesController;
use Illuminate\Http\JsonResponse;


class MetaController extends ResourcesController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => trans('meta')
        ]);
    }

}
