<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Client extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;


    /**
     * Validates Client entity
     *
     * @param Request $request
     * @return array
     */
    public static function validate(Request $request): array
    {
        return $request->validate([
            'name' => 'required|string|min:3',
            'name_ar' => 'required|string|min:3',
            'icon_url' => 'required|url',
            'field_id' => 'required|integer|exists:fields,id'
        ]);
    }


    /**
     * Loads local version of the client
     *
     * @return mixed
     */
    public function loadLocale()
    {
        if (App::getLocale() === 'ar') {
            return $this->where('id', $this['id'])->first([
                'id', 'name_ar as name', 'icon_url'
            ]);
        } else {
            return $this->where('id', $this['id'])->first([
                'id', 'name', 'icon_url'
            ]);
        }
    }


    /**
     * Load arabic version of the clients
     *
     * @return mixed
     */
    public static function loadArabic()
    {
        return Client::select('id', 'name_ar as name', 'icon_url')
            ->get()
            ->toArray();
    }


    /**
     * Load english version of the clients
     * @return mixed
     */
    public static function loadEnglish()
    {
        return Client::select('id', 'name', 'icon_url')
            ->get()
            ->toArray();
    }
}
