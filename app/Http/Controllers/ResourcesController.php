<?php

namespace App\Http\Controllers;

class ResourcesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->only(['store', 'update', 'destroy']);
    }
}
