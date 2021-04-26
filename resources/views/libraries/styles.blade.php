 <!-- Bootstrap Css -->
 <link id="bootstrap-style" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
 <!-- Icons Css -->
 <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
 <!-- App Css-->
 <link href="{{ asset('css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
 <!-- Boxicons Css-->
 <link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
     integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
 <link rel="stylesheet" href="{{ asset('css/appa.css') }}">
 <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
 @stack('css')

 <style>
     [type='file'] {
         border-width: 1px !important;
     }

     .card {
         border: 0 solid #f6f6f6 !important;
     }


     .container:before {
         background: url("{{ asset("images/images.jpg") }}") center / cover !important;
         content: '';
         position: absolute;
         left: 0;
         right: 0;
         top: 0;
         bottom: 0;
         opacity: 0.7 !important;
     }

     h2 {
         font-size: 48px !important;
         font-weight: bold;
         color: #ffffff;
     }

     .addons-section .nb-btn.active {
         background-color: #2ea906 !important;
         color: #ffffff !important;
         border-radius: 18px !important;
     }

     .addons-section .nb-btn {
         background-color: #fff !important;
         color: #000 !important;
         border-radius: 18px !important;
     }

     .addons-section .nbs-btn.active {
         background-color: #347f80 !important;
         color: #fff !important;
     }

     .addons-section .nbs-btn {
         background-color: #fff !important;
         color: #000 !important;
     }

     .addons-section .nbc-btn.active {
         background-color: #9e7fd8 !important;
         color: #fff !important;
     }

     .addons-section .nbc-btn {
         background-color: #fff !important;
         color: #000 !important;
     }

 </style>
