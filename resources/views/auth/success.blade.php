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
<div class="page-wrapper success-wrapper">
    <div class="wrapper wrapper--w900  ">
      
      
           
            <div class="card-body pt-5">
                <div class="card text-center">
                    {{-- <div class="card-header"><img src="/assets/images/success.png" alt=""></div> --}}
                    <div class="card-body">
                     
                      <p class="success-card-text">
                       {{$success_message}}
                      </p>
                     
                    </div>
                    <div class="card-footer text-muted" > <a  class="btn btn-primary " style="color: #fff">Thank you</a></div>
                  </div>

            </div>
       
        </div>
    </div>
</div>

@endsection
