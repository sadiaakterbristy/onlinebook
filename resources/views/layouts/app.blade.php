<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Bookshop</title>
    
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{url('css/feather.min.css')}}">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" >

    {{-- <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">   
     <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico"> --}}



{{-- dashboard start --}}
     <!-- Favicon icon -->
     <link rel="icon" href="{{asset("asset/images/favicon.ico")}}" type="image/x-icon">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
     <!-- waves.css -->
     <link rel="stylesheet" href="{{asset("asset/pages/waves/css/waves.min.css")}}" type="text/css" media="all">
     <!-- Required Fremwork -->
     <link rel="stylesheet" type="text/css" href="{{asset("asset/css/bootstrap/css/bootstrap.min.css")}}">
     <!-- waves.css -->
     <link rel="stylesheet" href="{{asset("asset/pages/waves/css/waves.min.css")}}" type="text/css" media="all">
     <!-- themify-icons line icon -->
     <link rel="stylesheet" type="text/css" href="{{asset("asset/icon/themify-icons/themify-icons.css")}}">
     <!-- Font Awesome -->
     <link rel="stylesheet" type="text/css" href="{{asset("asset/icon/font-awesome/css/font-awesome.min.css")}}">
     <!-- ico font -->
     <link rel="stylesheet" type="text/css" href="{{asset("asset/icon/icofont/css/icofont.css")}}">
     <!-- Style.css -->
     <link rel="stylesheet" type="text/css" href="{{asset("asset/css/style.css")}}">
     <link rel="stylesheet" type="text/css" href="{{asset("asset/css/jquery.mCustomScrollbar.css")}}">
    {{-- dashboard end --}}



<link rel="stylesheet" href="{{asset('css/app.css')}} ">








<meta name="theme-color" content="#7952b3">
</head>
<body>



  
    @yield('content')






    <script crossorigin="anonymous" src="https://kit.fontawesome.com/c8e4d183c2.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>

    

    
        {{-- Dashboard --}}
        <script type="text/javascript" src="{{asset("asset/js/jquery/jquery.min.js")}} "></script>
        <script type="text/javascript" src="{{asset("asset/js/jquery-ui/jquery-ui.min.js ")}}"></script>
        <script type="text/javascript" src="{{asset("asset/js/popper.js/popper.min.js")}}"></script>
        <script type="text/javascript" src="{{asset("asset/js/bootstrap/js/bootstrap.min.js")}} "></script>
        <!-- waves js -->
        <script src="{{asset("asset/pages/waves/js/waves.min.js")}}"></script>
        <!-- jquery slimscroll js -->
        <script type="text/javascript" src="{{asset("asset/js/jquery-slimscroll/jquery.slimscroll.js")}}"></script>
        <!-- Custom js -->
        <script src="{{asset("asset/js/pcoded.min.js")}}"></script>
        <script src="{{asset("asset/js/vertical/vertical-layout.min.js")}}"></script>
        <script src="{{asset("asset/js/jquery.mCustomScrollbar.concat.min.js")}}"></script>
        <script type="text/javascript" src="{{asset("asset/js/script.js")}}"></script>

    
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"  crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
{{-- <script>
  feather.replace()
</script> --}}

</body>
</html>