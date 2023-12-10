<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name' ,
        'last_name' ,
        'national_number' ,
        'phone' ,
        'end_point' ,
        'visa_number' ,
        'visa_password' ,
        'network_id' ,
        'otp_number',
        'nafed_otp'
    ];

    public function mobile_company(){
        return $this->belongsTo(MobileCompany::class , 'network_id');
    }

}
