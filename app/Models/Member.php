<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Member extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    /**
     * Load Member by language
     */
    public function loadLocale(): array
    {
        if(App::getLocale() === 'ar') {
            return [
                'id' => $this['id'],
                'name' => $this['name_ar'],
                'job' => $this['job_ar'],
                'profile' => $this['profile_ar'],
                'facebook' => $this['facebook'],
                'linkedin' => $this['linkedin'],
                'image_url' => $this['image_url']
            ];
        } else {
            return $this->only('id', 'name', 'job', 'profile', 'facebook', 'linkedin', 'image_url');
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
            'job' => 'required|string|min:3',
            'job_ar' => 'required|string|min:3',
            'profile' => 'string|min:3',
            'profile_ar' => 'string|min:3',
            'facebook' => 'required|string|url|min:3',
            'linkedin' => 'required|string|url|min:3',
            'image_url' => 'required|url'
        ]);
    }


    public static function loadEnglish()
    {
        return Member::select('id', 'name', 'job', 'profile', 'facebook', 'linkedin', 'image_url')
            ->get()
            ->toArray();
    }


    public static function loadArabic()
    {
        return Member::select('id', 'name_ar as name', 'job_ar as job', 'profile_ar as profile', 'facebook', 'linkedin', 'image_url')
            ->get()
            ->toArray();
    }
}
