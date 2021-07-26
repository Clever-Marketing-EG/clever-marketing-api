<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Member extends Model
{
    use HasFactory;

    public $timestamps = false;


    protected $guarded = [];


    /**
     * Relationship with projects
     *
     * @return BelongsToMany
     */
    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class);
    }


    /**
     * Load Member by language
     */
    public function loadLocale()
    {
        if(App::getLocale() === 'ar') {
            return $this->where('id', $this['id'])->first([
                'id', 'name_ar as name', 'job_ar as job', 'profile_ar as profile', 'facebook', 'linkedin', 'image_url'
            ])->load(['projects' => function($query) {
                $query->select('title_ar as title', 'description_ar as description', 'image_url');
            }]);
        } else {
            return $this->where('id', $this['id'])->first([
                'id', 'name', 'job', 'profile', 'facebook', 'linkedin', 'image_url'
            ])->load(['projects' => function($query) {
                $query->select('title', 'description', 'image_url');
            }]);
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
            'profile' => 'nullable|string|min:3',
            'profile_ar' => 'nullable|string|min:3',
            'facebook' => 'required|string|url|min:3',
            'linkedin' => 'required|string|url|min:3',
            'image_url' => 'required|url',
            'type' => 'required|in:tech,marketing,designers,leader'
        ]);
    }


    public static function loadEnglish()
    {
        return Member::select('id', 'name', 'job', 'profile', 'facebook', 'linkedin', 'image_url', 'type')
            ->get()
            ->toArray();
    }


    public static function loadArabic()
    {
        return Member::select('id', 'name_ar as name', 'job_ar as job', 'profile_ar as profile', 'facebook', 'linkedin', 'image_url' , 'type')
            ->get()
            ->toArray();
    }
}
