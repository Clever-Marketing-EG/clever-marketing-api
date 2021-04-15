<?php

namespace Database\Factories;

use App\Models\Meta;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;


class MetaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Meta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
            $contactData = array(
                [   'position' => 'Contact Page' ,
                    'name' => 'contact_phone',
                    'content' => 'Phone',
                    'content_ar' => 'محتوى',
                    'type' => 'text',
                    'page' => 'contact'
                ],
                [
                    'position' => 'Contact Page' ,
                    'name' => 'contact_number',
                    'content' => '+20123456789',
                    'content_ar' => '+20123456789',
                    'type' => 'text',
                    'page' => 'contact'
                ],
                [
                    'position' => 'Contact Page' ,
                    'name' => 'contact_email',
                    'content' => 'Email',
                    'content_ar' => 'محتوى',
                    'type' => 'text',
                    'page' => 'contact'
                ],
                [
                    'position' => 'Contact Page' ,
                    'name' => 'contact_mail',
                    'content' => 'Email',
                    'content_ar' => 'example@example.com',
                    'type' => 'text',
                    'page' => 'contact'
                ],
                [
                    'position' => 'Contact Page' ,
                    'name' => 'contact_address',
                    'content' => 'Address',
                    'content_ar' => 'محتوى',
                    'type' => 'text',
                    'page' => 'contact'
                ],
                [
                    'position' => 'Contact Page' ,
                    'name' => 'contact_location',
                    'content' => 'Cairo,Egypt',
                    'content_ar' => 'مصر',
                    'type' => 'text',
                    'page' => 'contact'
                ]
            );
            $footerData = array(
                [
                    'position' => 'Footer' ,
                    'name' => 'content',
                    'content' => 'Footer Content !',
                    'content_ar' => 'محتوي',
                    'type' => 'text',
                    'page' => 'footer'
                ],
            );

            $data = array_merge($contactData, $footerData);

            DB::table('metas')->insert($data);

    }
}
