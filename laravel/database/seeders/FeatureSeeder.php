<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
  $features=[
    ['name'=>'المساعده علي الطريق'],
    ['name'=>'تغطية الحوادث الشخصيه للسائق والركاب'],
    ['name'=>'الاضرار الجسديه بما في ذالك الدبات والمصاريف الطبيه']
  ];
foreach($features as $feature){
    Feature::create(['name'=>$feature['name']]);
}

    }
}
