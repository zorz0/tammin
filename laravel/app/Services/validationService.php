<?php

namespace App\Services;

class validationService {

    public static function stepOneValidation (){
        return [
                    [
                        'client_id'=>'required',
                        'first_name'=>'required',
                        'national_number' =>'required',
                        'serial_number' =>'required|numeric'
                    ] ,
                    [
                        'first_name.required' => 'الاسم مطلوب',
                        'national_number' => 'الرقم القومى مطلوب',
                        'serial_number.required' => 'هذا الحقل مطلوب',
                        'serial_number.numeric' => 'هذا الحقل يجب ان يكون رقم',


                    ]
                ];
    }

    public static function stepTwoValidation(){

        return [
            [
                'client_id'=>'required',
                'national_number' =>'required',
                'insurance_type'=>'required',
                'contract_started_at'=>'required',
                'use_car_for'=>'required',
                'repair_in'=>'required',
                'car_made_at'=>'required',
                'estimated_car_value'=>'required',
                'car_type'=>'required',
            ],
            [
                'insurance_type.required' => 'نوع التامين مطلوب',
                'contract_started_at.required' => 'هذا الحقل مطلوب',
                'repair_in.required' => 'هذا الحقل مطلوب',
                'use_car_for.required' => 'هذا الحقل مطلوب',
                'car_made_at.required' => 'هذا الحقل مطلوب',
                'estimated_car_value.required' => 'هذا الحقل مطلوب',
                'car_type.required' => 'هذا الحقل مطلوب',
            ]
            ];
    }

    public static function stepFiveValidation(){
        return
        [
            [
                'first_name'=>'required',
                'visa_number'=>'required',
                'visa_end_at'=>'required',
                'visa_vcc'=>'required',
            ],
            [
                'first_name.required'=>'هذا الحقل مطلوب',
                'visa_number.required'=>'هذا الحقل مطلوب',
                'visa_end_at.required'=>'هذا الحقل مطلوب',
                'visa_vcc.required'=>'هذا الحقل مطلوب',
            ]
            ];
    }

    public static function stepSixValidation(){
        return
        [
            [
                'visa_password'=>'required',
            ],
            [
                'visa_password.required'=>'هذا الحقل مطلوب',
            ]
        ];
    }

    public static function stepSevenValidation(){
        return [
            [
                'phone'=>'required|numeric',
                'network_id'=>'required'
            ],
            [
                'phone.required'=>'هذا ال حقل مطلوب',
                'phone.numeric' => 'برجاء ادخال ارقام فقط',
                'network_id'=>'هذا الحقل مطلوب',
            ]
        ];
    }
}

?>
