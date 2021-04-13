<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ArticleController extends ResourcesController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $articles = trans('articles');

        return response()->json([
            'success' => true,
            'data' => $articles
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $validated = Article::validate($request);
        $article = Article::create($validated);

        return response()->json([
            'success' => true,
            'data' => $article
        ], 201);
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

    /**
     * Show full data of the resource
     *
     * @param Article $article
     * @return JsonResponse
     */
    public function showFull(Article $article): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $article
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Article  $article
     * @return JsonResponse
     */
    public function update(Request $request, Article $article): JsonResponse
    {
        $validated = Article::validate($request);
        $article->update($validated);

        return response()->json([
            'success' => true,
            'data' => $article
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Article $article
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(Article $article): JsonResponse
    {
        $article->delete();

        return response()->json([
            'success' => true,
            'data' => $article,
        ]);
    }
}
