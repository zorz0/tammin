<?php

namespace Database\Seeders;

use App\Models\MobileCompany;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MobileCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = [
            ['name' => 'Zain'] , ['name' => 'Mobily'] ,  ['name' => 'STC'] ,  ['name' => 'Salam'] ,
            ['name' => 'Virgin'] , ['name' => 'Redbull']
        ];
        MobileCompany::insert($companies);
    }
}
