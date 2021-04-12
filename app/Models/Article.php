<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Article extends Model
{
    use HasFactory;
    protected $gaurded = [];
    protected $casts = [
        'created_at' => 'datetime:d M Y'
    ];
    /*Load Articles by language */
    public function loadLocale(): array
    {
        if (App::getLocale() === 'ar') {
            return [
                'id' => $this['id'],
                'title' => $this['title_ar'],
                'content' => $this['content_ar'],
                'note' => $this['note_ar'],
                'image_url' => $this['image_url']
            ];
        } else {
            return $this->only('id', 'title', 'content', 'note', 'image_url');
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
            'note' => 'nullable|string|min:3',
            'note_ar' => 'nullable|string|min:3',
            'image_url' => 'required|url'
        ]);
    }

    public static function loadEnglish(){
        return Article::select('id', 'title', 'content', 'note', 'image_url')
        ->get()
        ->toArray();

    }
    public static function loadArabic(){
        return Article::select('id', 'title_ar as title', 'content_ar as content', 'note_ar as note', 'image_url')
        ->get()
        ->toArray();
    }
}
