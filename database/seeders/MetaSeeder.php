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
        $homeData = array (
            [
                'position' => 'Home Page',
                'name'=> 'intro_header',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name'=> 'intro_content',
                'content' => 'Content !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name' => 'image_1',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name' => 'image_2',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name' => 'image_3',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name' => 'image_4',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name'=> 'about_header',
                'content' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name'=> 'about_content',
                'content' => 'Content !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name' => 'about_image',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name'=> 'service_title',
                'content' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name'=> 'fields_title',
                'content' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name'=> 'fields_content',
                'content' => 'Content !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name'=> 'projects_title',
                'content' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name'=> 'team_content',
                'content' => 'Content !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name'=> 'team_title',
                'content' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name'=> 'team_content',
                'content' => 'Content !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name' => 'team_image_1',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name' => 'team_image_2',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name' => 'team_image_3',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name'=> 'news_title',
                'content' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
        );
        $aboutData = array(
            [
                'position' => 'About Page',
                'name'=> 'about_title_1',
                'content' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'about_content_1',
                'content' => 'Content !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'about_image_1',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'type' => 'image',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'about_title_2',
                'content' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'about_content_2',
                'content' => 'Content !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'about_image_2',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'type' => 'image',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'about_title_3',
                'content' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'about_content_3',
                'content' => 'Content !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'about_image_3',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'type' => 'image',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'about_title_4',
                'content' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'about_content_4',
                'content' => 'Content !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'about_image_4',
                'content' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'type' => 'image',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'values_title',
                'content' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'values_title_1',
                'content' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'values_content_1',
                'content' => 'Content !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'values_title_2',
                'content' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'values_content_2',
                'content' => 'Content !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'values_title_3',
                'content' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'values_content_3',
                'content' => 'Content !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'experts_title',
                'content' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
        );
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

        $data = array_merge($contactData, $footerData, $homeData);

        DB::table('metas')->insert($data);
    }
}
