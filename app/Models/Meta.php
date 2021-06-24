<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

/**
 * @method static page(mixed $page)
 */
class Meta extends LocalizableModel
{
    use HasFactory;

    protected $guarded = [];

    protected $localizable = ['content'];

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
            'content' => 'required|string|min:3',
            'content_ar' => 'required|string|min:3'
        ]);
    }

    public function scopePage($query, $page) {
        return $page ? $query->where('page', $page) : $query;
    }
}
