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
           
            
            <div class="card-body table-responsive">
                <table class="table align-middle">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Member Name</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col" class="pl-lg-4">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                 @foreach ($user_info as $user_information)
                      <tr>
                        <th scope="row">{{$user_information->id}}</th>
                        <td>{{$user_information->bangla_name}}</td>
                        <td>{{$user_information->Phone_no}}</td>
                       
                        <td>
                          <button type="button" class="btn view-button  btn-success btn-sm px-3 pl-lg-2">
                            <span> <a href="/submission/id={{$user_information->id}}">View / Print</a></span> 
                          </button>
                        </td>
                      </tr>
                  @endforeach
                
                    </tbody>
                  </table>

            </div>
           
        </div>
    </div>
</div>


</div>

@endsection




