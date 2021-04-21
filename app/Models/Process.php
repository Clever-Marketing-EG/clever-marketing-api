<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Process extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    public static function validate(Request $request): array
    {
        return $request->validate([
            'title' => 'required|string|min:3',
            'title_ar' => 'required|string|min:3',
            'description' => 'required|string|min:3',
            'description_ar' => 'required|string|min:3',
            'image_url' => 'required|url',
            'project_id' => 'required|integer|exists:projects,id'
        ]);
    }
}
