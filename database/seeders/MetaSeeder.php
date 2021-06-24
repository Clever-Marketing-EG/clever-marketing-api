<?php

namespace Database\Seeders;

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
                'content_en' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name'=> 'intro_content',
                'content_en' => 'content_en !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name' => 'image_1',
                'content_en' => 'https://norwegianscitechnews.com/wp-content_en/uploads/2020/03/istock-geber86.jpg',
                'content_ar' => 'https://norwegianscitechnews.com/wp-content_en/uploads/2020/03/istock-geber86.jpg',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name' => 'image_2',
                'content_en' => 'https://norwegianscitechnews.com/wp-content_en/uploads/2020/03/istock-geber86.jpg',
                'content_ar' => 'https://norwegianscitechnews.com/wp-content_en/uploads/2020/03/istock-geber86.jpg',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name' => 'image_3',
                'content_en' => 'https://norwegianscitechnews.com/wp-content_en/uploads/2020/03/istock-geber86.jpg',
                'content_ar' => 'https://norwegianscitechnews.com/wp-content_en/uploads/2020/03/istock-geber86.jpg',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name' => 'image_4',
                'content_en' => 'https://norwegianscitechnews.com/wp-content_en/uploads/2020/03/istock-geber86.jpg',
                'content_ar' => 'https://norwegianscitechnews.com/wp-content_en/uploads/2020/03/istock-geber86.jpg',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name'=> 'about_header',
                'content_en' => 'Header !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name'=> 'about_content',
                'content_en' => 'content_en !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name' => 'about_image',
                'content_en' => 'https://norwegianscitechnews.com/wp-content_en/uploads/2020/03/istock-geber86.jpg',
                'content_ar' => 'https://norwegianscitechnews.com/wp-content_en/uploads/2020/03/istock-geber86.jpg',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name'=> 'service_title',
                'content_en' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name'=> 'fields_title',
                'content_en' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name'=> 'fields_content',
                'content_en' => 'content_en !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name'=> 'projects_title',
                'content_en' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],

            [
                'position' => 'Home Page',
                'name'=> 'team_title',
                'content_en' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name'=> 'team_content',
                'content_en' => 'content_en !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name' => 'team_image_1',
                'content_en' => 'https://norwegianscitechnews.com/wp-content_en/uploads/2020/03/istock-geber86.jpg',
                'content_ar' => 'https://norwegianscitechnews.com/wp-content_en/uploads/2020/03/istock-geber86.jpg',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name' => 'team_image_2',
                'content_en' => 'https://norwegianscitechnews.com/wp-content_en/uploads/2020/03/istock-geber86.jpg',
                'content_ar' => 'https://norwegianscitechnews.com/wp-content_en/uploads/2020/03/istock-geber86.jpg',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name' => 'team_image_3',
                'content_en' => 'https://norwegianscitechnews.com/wp-content_en/uploads/2020/03/istock-geber86.jpg',
                'content_ar' => 'https://norwegianscitechnews.com/wp-content_en/uploads/2020/03/istock-geber86.jpg',
                'type' => 'image',
                'page' => 'home'
            ],
            [
                'position' => 'Home Page',
                'name'=> 'news_title',
                'content_en' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'home'
            ],
        );
        $aboutData = array(
            [
                'position' => 'About Page',
                'name'=> 'about_title_1',
                'content_en' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'about_content_1',
                'content_en' => 'content_en !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'about_image_1',
                'content_en' => 'https://norwegianscitechnews.com/wp-content_en/uploads/2020/03/istock-geber86.jpg',
                'content_ar' => 'https://norwegianscitechnews.com/wp-content_en/uploads/2020/03/istock-geber86.jpg',
                'type' => 'image',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'about_title_2',
                'content_en' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'about_content_2',
                'content_en' => 'content_en !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'about_image_2',
                'content_en' => 'https://norwegianscitechnews.com/wp-content_en/uploads/2020/03/istock-geber86.jpg',
                'content_ar' => 'https://norwegianscitechnews.com/wp-content_en/uploads/2020/03/istock-geber86.jpg',
                'type' => 'image',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'about_title_3',
                'content_en' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'about_content_3',
                'content_en' => 'content_en !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'about_image_3',
                'content_en' => 'https://norwegianscitechnews.com/wp-content_en/uploads/2020/03/istock-geber86.jpg',
                'content_ar' => 'https://norwegianscitechnews.com/wp-content_en/uploads/2020/03/istock-geber86.jpg',
                'type' => 'image',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'about_title_4',
                'content_en' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'about_content_4',
                'content_en' => 'content_en !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'about_image_4',
                'content_en' => 'https://norwegianscitechnews.com/wp-content_en/uploads/2020/03/istock-geber86.jpg',
                'content_ar' => 'https://norwegianscitechnews.com/wp-content_en/uploads/2020/03/istock-geber86.jpg',
                'type' => 'image',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'values_title',
                'content_en' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'values_title_1',
                'content_en' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'values_content_1',
                'content_en' => 'content_en !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'values_title_2',
                'content_en' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'values_content_2',
                'content_en' => 'content_en !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'values_title_3',
                'content_en' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'values_content_3',
                'content_en' => 'content_en !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
            [
                'position' => 'About Page',
                'name'=> 'experts_title',
                'content_en' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'about'
            ],
        );
        $contactData = array(
            [   'position' => 'Contact Page' ,
                'name' => 'contact_phone',
                'content_en' => 'Phone',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'contact'
            ],
            [
                'position' => 'Contact Page' ,
                'name' => 'contact_number',
                'content_en' => '+20123456789',
                'content_ar' => '+20123456789',
                'type' => 'text',
                'page' => 'contact'
            ],
            [
                'position' => 'Contact Page' ,
                'name' => 'contact_email',
                'content_en' => 'Email',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'contact'
            ],
            [
                'position' => 'Contact Page' ,
                'name' => 'contact_mail',
                'content_en' => 'example@example.com',
                'content_ar' => 'example@example.com',
                'type' => 'text',
                'page' => 'contact'
            ],
            [
                'position' => 'Contact Page' ,
                'name' => 'contact_address',
                'content_en' => 'Address',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'contact'
            ],
            [
                'position' => 'Contact Page' ,
                'name' => 'contact_location',
                'content_en' => 'Alexandria,Egypt',
                'content_ar' => 'مصر',
                'type' => 'text',
                'page' => 'contact'
            ]
        );
        $footerData = array(
            [
                'position' => 'Footer' ,
                'name' => 'content_en',
                'content_en' => 'Footer content_en !',
                'content_ar' => 'محتوي',
                'type' => 'text',
                'page' => 'footer'
            ],

        );
        $serviceData = array(

            [
                'position' => 'Service Page',
                'name'=> 'service_title',
                'content_en' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'service'
            ],
            [
                'position' => 'Service Page',
                'name'=> 'service_name_1',
                'content_en' => 'Service !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'service'
            ],
            [
                'position' => 'Service Page',
                'name'=> 'service_percentage_1',
                'content_en' => '100 %',
                'content_ar' => '100%',
                'type' => 'text',
                'page' => 'service'
            ],
            [
                'position' => 'Service Page',
                'name'=> 'service_name_2',
                'content_en' => 'Service !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'service'
            ],
            [
                'position' => 'Service Page',
                'name'=> 'service_percentage_2',
                'content_en' => '100 %',
                'content_ar' => '100%',
                'type' => 'text',
                'page' => 'service'
            ],
            [
                'position' => 'Service Page',
                'name'=> 'service_name_3',
                'content_en' => 'Service !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'service'
            ],
            [
                'position' => 'Service Page',
                'name'=> 'service_percentage_3',
                'content_en' => '100 %',
                'content_ar' => '100%',
                'type' => 'text',
                'page' => 'service'
            ],
            [
                'position' => 'Service Page',
                'name'=> 'service_name_4',
                'content_en' => 'Service !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'service'
            ],
            [
                'position' => 'Service Page',
                'name'=> 'service_percentage_4',
                'content_en' => '100 %',
                'content_ar' => '100%',
                'type' => 'text',
                'page' => 'service'
            ],
            [
                'position' => 'Service Page',
                'name'=> 'service_name_5',
                'content_en' => 'Service !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'service'
            ],
            [
                'position' => 'Service Page',
                'name'=> 'service_percentage_5',
                'content_en' => '100 %',
                'content_ar' => '100%',
                'type' => 'text',
                'page' => 'service'
            ],
            [
                'position' => 'Service Page',
                'name'=> 'service_name_6',
                'content_en' => 'Service !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'service'
            ],
            [
                'position' => 'Service Page',
                'name'=> 'service_percentage_6',
                'content_en' => '100 %',
                'content_ar' => '100%',
                'type' => 'text',
                'page' => 'service'
            ],
            [
                'position' => 'Service Page',
                'name'=> 'service_image',
                'content_en' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'content_ar' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/about_us_1616949002.jpg',
                'type' => 'image',
                'page' => 'service'
            ],
        );
        $teamData = array(
            [
                'position' => 'Team Page',
                'name'=> 'team_title',
                'content_en' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'team'
            ],

        );
        $fieldsData = array(
            [
                'position' => 'Fields Page',
                'name'=> 'fields_title',
                'content_en' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'fields'
            ],

        );
        $projectsData = array(
            [
                'position' => 'Projects Page',
                'name'=> 'projects_title',
                'content_en' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'projects'
            ],
            [
                'position' => 'Projects Page',
                'name'=> 'clients_title',
                'content_en' => 'Title !',
                'content_ar' => 'محتوى',
                'type' => 'text',
                'page' => 'projects'
            ],

        );
        $data = array_merge($contactData, $footerData, $homeData, $aboutData, $serviceData, $teamData, $fieldsData, $projectsData);

        DB::table('metas')->insert($data);
    }
}
