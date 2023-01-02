<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_info extends Model
{
    use HasFactory;
    protected $fillable = [
        'bangla_name',
        'english_name',
        'Surname_or_workplace',
        'father_or_husband_name',
        'mother_name',
        'Permanent_address',
        'Present_address',
        'Phone_no',
        'national_id_no',
        'edu_qualification',
        'email_or_fb_link',
        'nominee_name',
        'nominee_signature',
        'nominee_phone_no',
        'nominee_national_no',
        'nominee_relationship',
        'user_photo',
        'nominee_photo',
        'signature_photo',
      
    ];
}
