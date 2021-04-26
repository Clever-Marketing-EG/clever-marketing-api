<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    /**
     * Search articles by search term
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function articles(Request $request): JsonResponse
    {
        $articles = Article::query()
            ->where('title', 'LIKE', "%{$request['searchTerm']}%")
            ->orWhere('title_ar', 'LIKE', "%{$request['searchTerm']}%")
            ->orWhere('content', 'LIKE', "%{$request['searchTerm']}%")
            ->orWhere('content_ar', 'LIKE', "%{$request['searchTerm']}%")
            ->paginate(5);

        return response()->json($articles);
    }
}
