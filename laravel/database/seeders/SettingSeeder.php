<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'website_name'=>"Tammin",
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. In ullam perspiciatis ex ipsam iusto, incidunt accusantium quae iure totam? Nulla?',
            'logo'=>'logo.svg',
            'footer_desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. In ullam perspiciatis ex ipsam iusto, incidunt accusantium quae iure totam? Nulla?',
            'seo_desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. In ullam perspiciatis ex ipsam iusto, incidunt accusantium quae iure totam? Nulla?',
            'seo_title'=>'seo keywords'
        ]);
    }
}


