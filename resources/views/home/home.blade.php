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
<div class="page-wrapper">
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
            <div class="card-body">
                <form method="POST" action="/submission"  enctype="multipart/form-data">
                    @csrf
                    {{-- <input class="input--style-6" type="hidden" name="id"> --}}
                    {{-- <input id="id" name="invisible" type="hidden" value="secret"> --}}
                    <div class="form-row">
                        <div class="name">সদস্যের নাম-(বাংলায় ) :</div>
                        <div class="value">
                            <input class="input--style-6" type="text" name="bangla_name" value="{{old('bangla_name')}}">
                        <div class="text-center pt-1">
                            <span class="text-danger " role="alert" >
                                @error('bangla_name')
                                  {{ $message }}
                                  
                                @enderror
                           </span>
                        </div>
                          
                        </div>
                       
                    </div>
                    <div class="form-row">
                        <div class="name">(ইংরেজি ) :</div>
                        <div class="value">
                            <input class="input--style-6" type="text" name="english_name" value="{{old('bangla_name')}}">

                            <div class="text-center pt-1">
                                <span class="text-danger " role="alert" >
                                    @error('english_name')
                                      {{ $message }}
                                      
                                    @enderror
                               </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">পদবি ও কর্মস্থল:</div>
                        <div class="value">
                            <input class="input--style-6" type="text" name="Surname_or_workplace" value="{{old('Surname_or_workplace')}}">
                            <div class="text-center pt-1">
                                <span class="text-danger " role="alert" >
                                    @error('Surname_or_workplace')
                                      {{ $message }}
                                      
                                    @enderror
                               </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">পিতা /স্বামীর নাম :</div>
                        <div class="value">
                            <input class="input--style-6" type="text" name="father_or_husband_name" value="{{old('father_or_husband_name')}}">

                            <div class="text-center pt-1">
                                <span class="text-danger " role="alert" >
                                    @error('father_or_husband_name')
                                      {{ $message }}
                                      
                                    @enderror
                               </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">মাতার নাম :</div>
                        <div class="value">
                            <input class="input--style-6" type="text" name="mother_name" value="{{old('mother_name')}}">
                            <div class="text-center pt-1">
                                <span class="text-danger " role="alert" >
                                    @error('mother_name')
                                      {{ $message }}
                                      
                                    @enderror
                               </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="name">স্থায়ী ঠিকানা :</div>
                        <div class="value">
                            <div class="input-group">
                                <textarea class="textarea--style-6" name="Permanent_address" value="{{old('Permanent_address')}}" placeholder=""></textarea>
                                <div class="text-center pt-1">
                                    <span class="text-danger " role="alert" >
                                        @error('Permanent_address')
                                          {{ $message }}
                                          
                                        @enderror
                                   </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name"> বর্তমান ঠিকানা :</div>
                        <div class="value">
                            <div class="input-group">
                                <textarea class="textarea--style-6" name="Present_address" value="{{old('Present_address')}}" placeholder=""></textarea>
                                <div class="text-center pt-1">
                                    <span class="text-danger " role="alert" >
                                        @error('Permanent_address')
                                          {{ $message }}
                                          
                                        @enderror
                                   </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row upload-picture">
                        <div class="col-md-12  col-lg-6 form-row">
                            <div class="name">মোবাইল নাম্বার :</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="Phone_no" value="{{old('Phone_no')}}">
                                <div class="text-center pt-1">
                                    <span class="text-danger " role="alert" >
                                        @error('Phone_no')
                                          {{ $message }}
                                          
                                        @enderror
                                   </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 form-row  ml-lg-2">
                            <div class="name">জাতীয় পরিচয় পত্রের নাম্বার:</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="national_id_no" value="{{old('national_id_no')}}">
                                <div class="text-center pt-1">
                                    <span class="text-danger " role="alert" >
                                        @error('national_id_no')
                                          {{ $message }}
                                          
                                        @enderror
                                   </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row upload-picture">
                        <div class="col-md-12  col-lg-6 form-row">
                            <div class="name">সর্বশেষ শিক্ষাগত যোগ্যতা:</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="edu_qualification" value="{{old('edu_qualification')}}">
                                <div class="text-center pt-1">
                                    <span class="text-danger " role="alert" >
                                        @error('edu_qualification')
                                          {{ $message }}
                                          
                                        @enderror
                                   </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 form-row  ml-lg-2">
                            <div class="name">ই-মেইল ও ফেসবুক আইডি:</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="email_or_fb_link"  value="{{old('email_or_fb_link')}}">
                                <div class="text-center pt-1">
                                    <span class="text-danger " role="alert" >
                                        @error('email_or_fb_link')
                                          {{ $message }}
                                          
                                        @enderror
                                   </span>
                                </div>
                            </div>
                        </div>
                    </div>


               

                    <div class="form-row upload-picture">
                        <div class="col-12 col-sm-12 col-md-9 col-lg-6 form-row nominee-name">
                            <div class="name">নমিনির নাম :</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="nominee_name" value="{{old('nominee_name')}}">
                                <div class="text-center pt-1">
                                    <span class="text-danger " role="alert" >
                                        @error('nominee_name')
                                          {{ $message }}
                                          
                                        @enderror
                                   </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5 form-row  ml-lg-4 pl-lg-5">
                            <div class="name">নমিনির স্বাক্ষর :</div>
                            <div class="file-upload">
                                <div class="file-select">
                                    <div class="file-select-button" id="fileName">Choose File</div>
                                    <div class="file-select-name" id="noFile_4">No file chosen...</div>
                                    <input type="file" name="nominee_signature" id="chooseFile_4"  value="{{old('nominee_signature')}}" required>
                                    <div class="text-center pt-1">
                                        <span class="text-danger " role="alert" >
                                            @error('nominee_signature')
                                              {{ $message }}
                                              
                                            @enderror
                                       </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


                    <div class="form-row">
                        <div class="name">নমিনির মোবাইল নাম্বার:</div>
                        <div class="value">
                            <input class="input--style-6" type="text" name="nominee_phone_no"  value="{{old('nominee_phone_no')}}">
                            <div class="text-center pt-1">
                                <span class="text-danger " role="alert" >
                                    @error('nominee_phone_no')
                                      {{ $message }}
                                      
                                    @enderror
                               </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">নমিনির জাতীয় পরিচয় পত্র / জন্ম সনদ নম্বর:</div>
                        <div class="value">
                            <input class="input--style-6" type="text" name="nominee_national_no" value="{{old('nominee_national_no')}}">
                            <div class="text-center pt-1">
                                <span class="text-danger " role="alert" >
                                    @error('nominee_national_no')
                                      {{ $message }}
                                      
                                    @enderror
                               </span>
                            </div>
                       
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">নমিনির সাথে আবেদনকারীর সম্পর্ক:</div>
                        <div class="value">
                            <input class="input--style-6" type="text" name="nominee_relationship" value="{{old('nominee_relationship')}}">
                            <div class="text-center pt-1">
                                <span class="text-danger " role="alert" >
                                    @error('nominee_relationship')
                                      {{ $message }}
                                      
                                    @enderror
                               </span>
                            </div>
                        </div>
                    </div>


                    <div class="form-row upload-picture   upload-picture2">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 form-row  user-photo ">
                            <div class="name">সদস্যের ছবি :</div>
                            <div class="file-upload">
                                <div class="file-select">
                                    <div class="file-select-button" id="fileName">Choose File</div>
                                    <div class="file-select-name" id="noFile_1">No file chosen...</div>
                                    <input type="file" name="user_photo" id="chooseFile_1" value="{{old('user_photo')}}" required>
                                    <div class="text-center pt-1">
                                        <span class="text-danger " role="alert" >
                                            @error('user_photo')
                                              {{ $message }}
                                              
                                            @enderror
                                       </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 form-row ml-md-2 ml-lg-2">
                            <label class="name">নমিনির ছবি :</label>
                            <div class="file-upload">
                                <div class="file-select">
                                    <div class="file-select-button" id="fileName">Choose File</div>
                                    <div class="file-select-name" id="noFile_2">No file chosen...</div>
                                    <input type="file" name="nominee_photo" id="chooseFile_2" value="{{old('nominee_photo')}}" required>
                                    <div class="text-center pt-1">
                                        <span class="text-danger " role="alert" >
                                            @error('nominee_photo')
                                              {{ $message }}
                                              
                                            @enderror
                                       </span>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="container pt-2 warning-text">
                        <p>
                            এই মর্মে ঘোষণা দিচ্ছে যে,আমি স্বজ্ঞানে ,স্বইচ্ছায় কারো প্ররোচনা ছাড়াই/ স্বপ্নের নীড় আবাসন প্রকল্প-২০৩০ এর সদস্য পদ পেতে ইচ্ছুক এবং আমি প্রকল্পের সকল নিয়মনীতি মেনে চলতে বাধ্য থাকিব |
                        </p>
                    </div>


                    <div class="form-row upload-picture">
                        <div class="col-6 form-row">

                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6  form-row ml-md-2">
                            <div class="name">আবেদনকারীর স্বাক্ষর :</div>
                            <div class="file-upload">
                                <div class="file-select">
                                    <div class="file-select-button" id="fileName">Choose File</div>
                                    <div class="file-select-name" id="noFile_3">No file chosen...</div>
                                    <input type="file" name="signature_photo" id="chooseFile_3" value="{{old('signature_photo')}}" required >

                                    <div class="text-center pt-1">
                                        <span class="text-danger " role="alert" >
                                            @error('signature_photo')
                                              {{ $message }}
                                              
                                            @enderror
                                       </span>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="card-footer ">
                        <button class="btn btn--radius-2 btn--blue-2 " type=" ">আপলোড করুন</button>
                    </div>
                </form>

            </div>
          
        </div>
    </div>
</div>

@endsection
