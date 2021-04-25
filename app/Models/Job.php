<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Job extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'description' => 'array',
        'requirements' => 'array',
        'created_at' => 'datetime:d M Y',
        'updated_at' => 'datetime:d M Y'
    ];


    /**
     * Validate Job instance
     *
     * @param Request $request
     * @return array
     */
    public static function validate(Request $request): array
    {
        return $request->validate([
            'title' => 'required|string|min:3',
            'description' => 'required|array|min:1',
            'description.*' => 'required|string|distinct|min:3',
            'requirements' => 'required|array|min:1',
            'requirements.*' => 'required|string|distinct|min:3',
            'content' => 'required|string|min:3',
            'image_url' => 'required|url'
        ]);
    }
}
