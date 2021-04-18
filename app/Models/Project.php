<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'created_at' => 'datetime:M Y',
        'updated_at' => 'datetime:M Y'
    ];


    /**
     * Validate Project instance
     *
     * @param Request $request
     * @return array
     */
    public static function validate(Request $request): array
    {
        return $request->validate([
            'title' => 'required|string|min:3',
            'title_ar' => 'required|string|min:3',
            'description' => 'required|string|min:3',
            'description_ar' => 'required|string|min:3',
            'image_url' => 'required|url',
            'additional_images_1' => 'required|url',
            'additional_images_2' => 'required|url',
            'type' => 'required|in:web,branding,graphics'
        ]);
    }


    /**
     * Relates to processes
     *
     * @return HasMany
     */
    public function processes(): HasMany
    {
        return $this->hasMany(Process::class);
    }
}
