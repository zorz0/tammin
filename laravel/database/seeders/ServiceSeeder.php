<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $services = [
            ['name' => 'الاتحاد للتأمين', 'price' => 808,'image'=>'TUCI.png'],
            ['name' => 'تأمين المركبات ضد الغير-العربيه التعاونيه', 'price'=>975 ,'image'=>'AICC.png'],
            ['name' => 'تأمين المركبات ضد الغير - بروج للتأمين', 'price'=>710 ,'image'=>'Buruj.png'],
            ['name' => 'تأمين المركبات ضد الغير - ملاذ للتأمين', 'price'=>640 ,'image'=>'Malath.png'],
            ['name' => 'تأمين المركبات ضد الغير - سلامه للتأمين', 'price'=>234 ,'image'=>'Salama.png'],
            ['name' => 'تأمين المركبات ضد الغير - اتحاد الخليج الاهليه', 'price'=>1420 ,'image'=>'ACIG.png'],
            ['name' => 'تأمين المركبات ضد الغير - المجموعه المتحده', 'price'=>870 ,'image'=>'GulfUnion.png'],
            ['name' => 'تأمين المركبات ضد الغير - الراجحي تكافل', 'price'=>760 ,'image'=>'ART.png']
            
        ];

         $features=Feature::take(3)->pluck('id');

        foreach($services as $service){
            DB::transaction(function () use ($service,$features): void {
                $model=Service::create([
                     'name' => $service['name'],
                     'price' => $service['price'],
                     'image' => $service['image']
                 ]);
              
                $model->features()->sync($features);
               
             });
        }
    }
}
