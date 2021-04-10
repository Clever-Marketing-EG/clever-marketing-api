<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',
        'name',
        'content',
        'content_ar',
        'type',
        'page'
    ];

    public $timestamps = false;


    /**
     * Load English Meta from the database
     *
     * @return mixed
     */
    public static function loadEnglishMeta()
    {
        return Meta::select('position', 'name', 'content', 'type', 'page')
            ->get()
            ->mapWithKeys(function ($item) {
                return array(
                    $item['name'] => [
                        'position' => $item['position'],
                        'content' => $item['content'],
                        'page' => $item['page'],
                        'type' => $item['type'],
                    ]
                );
            })
            ->toArray();
    }


    /**
     * Load Arabic Meta from the database
     *
     * @return mixed
     */
    public static function loadArabicMeta()
    {
        return Meta::select('position', 'name', 'content_ar', 'type', 'page')
            ->get()
            ->mapWithKeys(function ($item) {
                return array(
                    $item['name'] => [
                        'position' => $item['position'],
                        'content' => $item['content_ar'],
                        'page' => $item['page'],
                        'type' => $item['type'],
                    ]
                );
            })
            ->toArray();
    }
}
