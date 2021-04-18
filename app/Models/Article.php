<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Article extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'created_at' => 'datetime:d M Y',
        'updated_at' => 'datetime:d M Y'
    ];

    /*Load Articles by language */
    public function loadLocale()
    {
        if (App::getLocale() === 'ar') {
            return $this->get([
                'id', 'title_ar as title', 'content_ar as content', 'note_ar as note', 'image_url', 'created_at'
            ]);
        } else {
            return $this->get([
                'id', 'title', 'content', 'note', 'image_url', 'created_at'
            ]);
        }
    }


    /**
     * Validate Article instance
     * @param Request $request
     * @return array
     */
    public static function validate(Request $request): array
    {
        return $request->validate([
            'title' => 'required|string|min:3',
            'title_ar' => 'required|string|min:3',
            'content' => 'required|string|min:3',
            'content_ar' => 'required|string|min:3',
            'note' => 'string|min:3|nullable',
            'note_ar' => 'string|min:3|nullable',
            'image_url' => 'required|url'
        ]);
    }

    public static function loadEnglish(){
        return Article::select('id', 'title', 'content', 'note', 'image_url', 'created_at')
        ->latest()
        ->paginate(5)
        ->toArray();

    }


    public static function loadArabic(){
        return Article::select('id', 'title_ar as title', 'content_ar as content', 'note_ar as note', 'image_url', 'created_at')
        ->latest()
        ->paginate(5)
        ->toArray();
    }

}
