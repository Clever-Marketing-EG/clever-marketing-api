<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\ResourcesController;
use App\Models\Article;
use Illuminate\Http\JsonResponse;


class ArticleController extends ResourcesController
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
            'data' => trans('articles')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  Article  $article
     * @return JsonResponse
     */
    public function show(Article $article): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $article->loadLocale()
        ]);
    }
}
