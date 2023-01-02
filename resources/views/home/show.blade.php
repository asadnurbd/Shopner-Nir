@extends('master')

@section('header')
<header>
    <div class="row">
        <div class="col-4">
            <a href="/">
            <div class="inline ">
                <img width="140" height="140" src="{{asset('assets/images/logo/logo.jpg')}}" alt="">
           </div>
           </a>
        </div>
        <div class="col">
        <div class="pt-4 text-center inline header-section">
                <h2 class="header-title text-center">স্বপ্নের নীড় আবাসন প্রকল্প-২০৩০</h2>
                <p>
                    ১ নং সেগুনবাগিচা ,ঢাকা-১০০০
                </p>
                <p>
                    প্রকল্প শুরুর তারিখ:০১-০৭-২০২১ খ্রি:
                </p>
                <span class="hr">
                    সদস্য পদ প্রাপ্তির আবেদন ফর্ম:
                    
                
                </span>

        </div>
        </div>
    </div>
   
   
</header>


@endsection



@section('main_container')
<div class="page-wrapper view-wrapper">
    <div class="wrapper wrapper--w900">
        <div class="card card-6">
            <div class="card-heading pb-2">
                <h5 class="title pl-4 pt-4">বরাবর,</h5>
                <div class="ml-5">
                    <span>সভাপতি</span>
                    <p>আবাসন প্রকল্প-২০৩০</p>

                    <p>
                        ১ নং সেগুনবাগিচা ,ঢাকা-১০০০
                    </p>
                </div>

            </div>
            @foreach ($user_info as $user_information)
            <div class="card-body" style="padding: 10px 0;;">
                <form method="POST">
               
                   
                    <div class="form-row " style=" padding: 7px 55px;">
                        <div class="name">সদস্যের নাম-(বাংলায় ) :</div>
                        <div class="value output">
                            <span>{{$user_information->bangla_name}} </span>
                            {{-- <input class="input--style-6" type="text" name="bangla_name"> --}}
                        </div>
                    </div>
                    <div class="form-row" style=" padding: 7px 55px;">
                        <div class="name">(ইংরেজি ) :</div>
                        <div class="value output">
                            <span>{{$user_information->english_name}} </span>
                        </div>
                    </div>
                    <div class="form-row" style=" padding: 7px 55px;">
                        <div class="name">পদবি ও কর্মস্থল:</div>
                        <div class="value output">
                            <span>{{$user_information->Surname_or_workplace}}  </span>
                        </div>
                    </div>
                    <div class="form-row" style=" padding: 7px 55px;">
                        <div class="name">পিতা /স্বামীর নাম :</div>
                        <div class="value output">
                            <span>{{$user_information->father_or_husband_name}}  </span>
                        </div>
                    </div>
                    <div class="form-row" style=" padding: 7px 55px;">
                        <div class="name">মাতার নাম :</div>
                        <div class="value output">
                            <span>{{$user_information->mother_name}} </span>
                        </div>
                    </div>

                    <div class="form-row" style=" padding: 7px 55px;">
                        <div class="name">স্থায়ী ঠিকানা :</div>
                        <div class="value output">
                             <span>{{$user_information->Permanent_address}} </span>
                        </div>
                    </div>
                    <div class="form-row" style=" padding: 7px 55px;">
                        <div class="name"> বর্তমান ঠিকানা :</div>
                        <div class="value output">
                            <span>{{$user_information->Present_address}} </span>
                        </div>
                    </div>

                    {{-- <div class="form-row upload-picture" style=" padding: 0px 55px;">
                        <div class="col-md-12  col-lg-6 form-row">
                            <div class="name">মোবাইল নাম্বার :</div>
                            <div class="value output">
                                <span>{{$user_information->Phone_no}} </span>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 form-row  ml-lg-2" >
                            <div class="name">জাতীয় পরিচয় পত্রের নাম্বার:</div>
                            <div class="value output">
                                <span>{{$user_information->national_id_no}} </span>
                            </div>
                        </div>
                    </div>
                     --}}
                    <div class="form-row" style=" padding: 7px 55px;">
                        <div class="name">মোবাইল নাম্বার :</div>
                        <div class="value output">
                             <span>{{$user_information->Phone_no}} </span>
                        </div>
                    </div>
                    <div class="form-row" style=" padding: 7px 55px;">
                        <div class="name"> জাতীয় পরিচয় পত্রের নাম্বার:</div>
                        <div class="value output">
                            <span>{{$user_information->national_id_no}} </span>
                        </div>
                    </div>

                    {{-- <div class="form-row upload-picture" style=" padding: 0px 55px;">
                        <div class="col-md-12  col-lg-6 form-row" >
                            <div class="name">সর্বশেষ শিক্ষাগত যোগ্যতা:</div>
                            <div class="value output">
                                <span>{{$user_information->edu_qualification}} </span>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 form-row  ml-lg-2">
                            <div class="name">ই-মেইল ও ফেসবুক আইডি:</div>
                            <div class="value output">
                                <span>{{$user_information->email_or_fb_link}} </span>
                            </div>
                        </div>
                    </div> --}}
                    <div class="form-row" style=" padding: 7px 55px;">
                        <div class="name">সর্বশেষ শিক্ষাগত যোগ্যতা :</div>
                        <div class="value output">
                             <span>{{$user_information->edu_qualification}} </span>
                        </div>
                    </div>
                    <div class="form-row" style=" padding: 7px 55px;">
                        <div class="name">ই-মেইল ও ফেসবুক আইডি :</div>
                        <div class="value output">
                            <span>{{$user_information->email_or_fb_link}} </span>
                        </div>
                    </div>


               

                    <div class="form-row upload-picture" style=" padding: 0px 55px;">
                        <div class="col-12 col-md-6 col-lg-6 form-row">
                            <div class="name">নমিনির নাম :</div>
                            <div class="value output">
                                <span>{{$user_information->nominee_name}} </span>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-5 col-lg-6 form-row ml-md-2 ml-lg-2">
                            <div class="name">নমিনির স্বাক্ষর :</div>
                            <div class="file-upload">
                                <div class="file-upload">
                                    <img  width="150" height="100" src="/{{$user_information->nominee_signature}}" class="rounded " alt="...">
                                </div>
                            </div>
                        </div>


                    </div>
           

                    {{-- <div class="form-row upload-picture" style=" padding: 0px 55px;">
                        <div class="col-md-12  col-lg-6 form-row">
                            <div class="name">নমিনির মোবাইল নাম্বার :</div>
                            <div class="value output">
                                <span>{{$user_information->nominee_phone_no}}</span>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 form-row  ml-lg-2" >
                            <div class="name">নমিনির জাতীয় পরিচয় পত্র / জন্ম সনদ নম্বর:</div>
                            <div class="value output">
                                <span>{{$user_information->nominee_national_no}} </span>
                            </div>
                        </div>
                    </div> --}}

                 
               
                    <div class="form-row" style=" padding: 7px 55px;">
                        <div class="name">নমিনির মোবাইল নাম্বার :</div>
                        <div class="value output">
                            <span>{{$user_information->nominee_phone_no}} </span>
                        </div>
                    </div>
                    <div class="form-row" style=" padding: 7px 55px;">
                        <div class="name">নমিনির জাতীয় পরিচয় পত্র / জন্ম সনদ নম্বর:</div>
                        <div class="value output">
                            <span>{{$user_information->nominee_national_no}} </span>
                        </div>
                    </div>
                    <div class="form-row" style=" padding: 7px 55px;">
                        <div class="name">নমিনির সাথে আবেদনকারীর সম্পর্ক:</div>
                        <div class="value output">
                            <span>{{$user_information->nominee_relationship}} </span>
                        </div>
                    </div>


                    <div class="form-row upload-picture" style=" padding: 0px 55px;">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 form-row">
                            <div class="name">সদস্যের ছবি :</div>
                            <div class="file-upload">
                                <img  width="150" height="100" src="/{{$user_information->user_photo}}" class="rounded " alt="...">
                              
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 form-row ml-md-2 ml-lg-2">
                            <div class="name">নমিনির ছবি :</div>
                            <div class="file-upload">
                                <img  width="150" height="100" src="/{{$user_information->nominee_photo}}" class="rounded " alt="...">
                            </div>
                        </div>


                    </div>

                    <div class=" pt-2 warning-text">
                        <p>
                            এই মর্মে ঘোষণা দিচ্ছে যে,আমি স্বজ্ঞানে ,স্বইচ্ছায় কারো প্ররোচনা ছাড়াই/ স্বপ্নের নীড় আবাসন প্রকল্প-২০৩০ এর সদস্য পদ পেতে ইচ্ছুক এবং আমি প্রকল্পের সকল নিয়মনীতি মেনে চলতে বাধ্য থাকিব |
                        </p>
                    </div>


                    <div class="form-row upload-picture" style=" padding: 0px 55px;margin-top: -2%;">
                        <div class="col-6 form-row">

                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6  form-row ml-md-2 ">
                            <div class="name">আবেদনকারীর স্বাক্ষর :</div>
                            <div class="file-upload">
                                <img width="150" height="100" src="/{{$user_information->signature_photo}}" class="rounded " alt="...">
                            </div>

                        </div>

                    </div>

                  
                </form>

            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
