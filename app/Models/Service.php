<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Service extends Model
{
    use HasFactory;
    protected $guarded = [];


    protected $casts = [
        'points' => 'array',
        'points_ar' => 'array'
    ];

    public $timestamps = false;

    /**
     * Load Service by language
     */
    public function loadLocale(): array
    {
        if (App::getLocale() === 'ar') {
            return [
                'id' => $this['id'],
                'name' => $this['name_ar'],
                'description' => $this['description_ar'],
                'points' => $this['points_ar'],
                'icon_url' => $this['icon_url'],
                'image_url_1' => $this['image_url_1'],
                'image_url_2' => $this['image_url_2'],
            ];
        } else {
            return $this->only('id', 'name', 'description', 'points', 'icon_url', 'image_url_1', 'image_url_2');
        }
    }

    /**
     * Validate Service instance
     * @param Request $request
     * @return array
     */
    public static function validate(Request $request): array
    {
        return $request->validate([
            'name' => 'required|string|min:3',
            'name_ar' => 'required|string|min:3',
            'description' => 'required|string|min:3',
            'description_ar' => 'required|string|min:3',
            'points' => 'required|array|min:1',
            'points.*' => ['required', 'string', 'distinct', 'min:3'],
            'points_ar' => 'required|array|min:1',
            'points_ar.*' => ['required', 'string', 'distinct', 'min:3'],
            'icon_url' => 'required|url',
            'image_url_1' => 'required|url',
            'image_url_2' => 'required|url'
        ]);
    }

    public static function loadEnglish()
    {
        return Service::select('id', 'name', 'description', 'points', 'icon_url', 'image_url_1', 'image_url_2')
            ->get()
            ->toArray();
    }

    public static function loadArabic()
    {
        return Service::select('id', 'name_ar as name', 'description_ar as description', 'points_ar as points', 'icon_url', 'image_url_1', 'image_url_2')
            ->get()
            ->toArray();
    }
}
