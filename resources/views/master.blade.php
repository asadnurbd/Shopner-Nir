@include('inc.header')
<body>
    <main class="bg-color">


   

        @yield('header')
        @yield('main_container')
       

    </main>


    <!-- Bootstrap core JavaScript==================================================-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js " crossorigin="anonymous "></script>
    <script src="assets/js/bootstrap.min.js " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
   
     @include('scripts.file-upload-script')
 

    </body>

</html>