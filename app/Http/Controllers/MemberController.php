<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

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
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $validated = Member::validate($request);
        $member = Member::create($validated);

        return response()->json([
            'success' => true,
            'data' => $member,
        ], 201);
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


    /**
     * Show full data of the resource
     *
     * @param Member $member
     * @return JsonResponse
     */
    public function showFull(Member $member): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $member->load('projects')
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Member $member
     * @return JsonResponse
     */
    public function update(Request $request, Member $member): JsonResponse
    {
        $validated = Member::validate($request);
        $member->update($validated);

        return response()->json([
            'success' => true,
            'data' => $member
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Member $member
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(Member $member): JsonResponse
    {
        $member->delete();

        return response()->json([
            'success' => true,
            'data' => $member,
        ]);
    }
}
