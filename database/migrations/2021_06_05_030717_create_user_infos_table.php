<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->id();
            $table->string('bangla_name');
            $table->string('english_name');
            $table->string('Surname_or_workplace');
            $table->string('father_or_husband_name');
            $table->string('mother_name');
            $table->string('Permanent_address');
            $table->string('Present_address');
            $table->string('Phone_no')->unique();
            $table->string('national_id_no')->unique();
            $table->string('edu_qualification');
            $table->string('email_or_fb_link')->unique();
            $table->string('nominee_name');
            $table->string('nominee_signature');
            $table->string('nominee_phone_no')->unique();
            $table->string('nominee_national_no')->unique();
            $table->string('nominee_relationship');
            $table->string('user_photo');
            $table->string('nominee_photo');
            $table->string('signature_photo');
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_infos');
    }
}
