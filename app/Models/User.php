<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
