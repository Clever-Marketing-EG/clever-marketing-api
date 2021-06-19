<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

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
}
