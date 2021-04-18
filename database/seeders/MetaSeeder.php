<?php

namespace Database\Seeders;

use App\Models\Meta;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Meta::factory(50)->create();
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
                'content' => 'Alexandria,Egypt',
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
