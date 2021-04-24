<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Field extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;


    /**
     * Relationship with projects
     *
     * @return HasMany
     */
    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }

    /**
     * Relates to Clients
     *
     * @return HasMany
     */
    public function clients(): HasMany
    {
        return $this->hasMany(Client::class);
    }

    /**
     * Validates Field
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
            'icon_url' => 'required|url'
        ]);
    }

    /**
     * Load Locale version of the Field
     *
     * @return mixed
     */
    public function loadLocale()
    {
        if (App::getLocale() === 'ar') {
            return $this->where('id', $this['id'])->first([
                'id', 'title_ar as title', 'description_ar as description', 'icon_url'
            ]);
        } else {
            return $this->where('id', $this['id'])->first([
                'id', 'title', 'description', 'icon_url'
            ]);
        }
    }

    public static function loadEnglish() {
        return Field::select('id', 'title', 'description', 'icon_url')
            ->get()
            ->toArray();
    }

    public static function loadArabic() {
        return Field::select('id', 'title_ar as title', 'description_ar as description', 'icon_url')
            ->get()
            ->toArray();
    }
}
