<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\ResourcesController;
use App\Models\Member;
use Illuminate\Http\JsonResponse;


class MemberController extends ResourcesController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $members = trans('members');

        return response()->json([
            'success' => true,
            'data' => $members,
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param Member $member
     * @return JsonResponse
     */
    public function show(Member $member): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $member->loadLocale()
        ]);
    }

}
