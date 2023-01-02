<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_info;
use \Input as Input;
class HomeController extends Controller
{
    public function index(){

        return view('home.home');
    }
    public function index2(Request $request){

        return view('home.home');
    }

    public function submit(Request $request){


        $request->validate( [
            'bangla_name' => ['required', 'string', 'max:255'],
            'english_name' => ['required', 'string', 'max:255'],
            'Surname_or_workplace' => ['required', 'string','max:255'],
            'father_or_husband_name' => ['required','string','max:255'],
            'mother_name' => ['required','string','max:255'],
            'Permanent_address' => ['required'],
            'Present_address' => ['required'],
            'Phone_no' => ['required','unique:user_infos'],
            'national_id_no' => ['required','unique:user_infos'],
            'edu_qualification' => ['required'],
            'email_or_fb_link' => ['required', 'string', 'max:255','unique:user_infos'],
            'nominee_name' => ['required'],
            'nominee_phone_no' => ['required','unique:user_infos'],
            'nominee_national_no' => ['required','unique:user_infos'],
            'nominee_relationship' => ['required'],
            'user_photo' => ['required','image'],
            'nominee_photo' => ['required','image'],
            'nominee_signature' => ['required','image'],
            'signature_photo' => ['required'],'image',
          
        ]);


        if ($request->hasFile('user_photo')) {
            $image = $request->file('user_photo');
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='assets/images/user_photo/';
            $success=$image->move($upload_path,$image_full_name);
            $user_photo=$upload_path.$image_full_name;
            }
        if ($request->hasFile('nominee_photo')) {
            $image = $request->file('nominee_photo');
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='assets/images/nominee_photo/';
            $success=$image->move($upload_path,$image_full_name);
            $nominee_photo=$upload_path.$image_full_name;
            }
        if ($request->hasFile('nominee_signature')) {
            $image = $request->file('nominee_signature');
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='assets/images/nominee_signature/';
            $success=$image->move($upload_path,$image_full_name);
            $nominee_signature=$upload_path.$image_full_name;
            }
        if ($request->hasFile('signature_photo')) {
            $image = $request->file('signature_photo');
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='assets/images/signature_photo/';
            $success=$image->move($upload_path,$image_full_name);
            $signature_photo=$upload_path.$image_full_name;
            }


        $store= User_info::create([
            'bangla_name' => $request['bangla_name'],
            'english_name' => $request['english_name'],
            'Surname_or_workplace' => $request['Surname_or_workplace'],
            'father_or_husband_name' => $request['father_or_husband_name'],
            'mother_name' => $request['mother_name'],
            'Permanent_address' => $request['Permanent_address'],
            'Present_address' => $request['Present_address'],
            'Phone_no' => $request['Phone_no'],
            'national_id_no' => $request['national_id_no'],
            'edu_qualification' => $request['edu_qualification'],
            'email_or_fb_link' => $request['email_or_fb_link'],
            'nominee_name' => $request['nominee_name'],
            'nominee_phone_no' => $request['nominee_phone_no'],
            'nominee_national_no' => $request['nominee_national_no'],
            'nominee_relationship' => $request['nominee_relationship'],
            'user_photo' => $user_photo,
            'nominee_photo' => $nominee_photo,
            'nominee_signature' => $nominee_signature,
            'signature_photo' => $signature_photo,
           
            
        ]);

       
     
        if($store){
            return view('auth.success')->with('success_message','Thank you for filling out your information. we will get back to you soon!');
        }else{
             return view('home.error')->with('error_message','Something went wrong ');
        }
    }


    public function uploaded(Request $id){
           $user_info=User_info::where('id',$id->id)->get();
          return view('home.show')->with('user_info',$user_info);
     }
    public function view(){
           $user_info=User_info::all();
          return view('home.view-submission')->with('user_info',$user_info);
     }
}
