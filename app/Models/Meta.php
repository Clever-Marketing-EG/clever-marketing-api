<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Meta extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;


    /**
     *
     *
     * @param Request $request
     * @return array
     */
    public static function validate(Request $request): array
    {
        return $request->validate([
            // 'position' => 'required|string|min:3',
            // 'name' => 'required|string|min:3',
            'content' => 'required|string|min:3',
            'content_ar' => 'required|string|min:3',
            // 'type' => 'required|string|min:3|in:text,image',
            // 'page' => 'required|string|min:3'
        ]);

    }
    /**
     * Load English Meta from the database
     *
     * @return mixed
     */
    public static function loadEnglish()
    {
        return Meta::select('id', 'position', 'name', 'content', 'type', 'page')
            ->get()
            ->toArray();
    }


    /**
     * Load Arabic Meta from the database
     *
     * @return mixed
     */
    public static function loadArabic()
    {
        return Meta::select('id', 'position', 'name', 'content_ar', 'type', 'page')
            ->get()
            ->toArray();
    }
}
