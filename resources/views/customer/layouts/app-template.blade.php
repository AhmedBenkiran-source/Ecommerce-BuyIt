<!DOCTYPE html>
						<html>
							<head>
								<meta charset="utf-8">
								<meta http-equiv="X-UA-Compatible" content="IE=edge">
								<meta name="viewport" content="width=device-width, initial-scale=1">

								<title>Buy it </title>

								<!-- Google font -->
								<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

								<!-- Bootstrap -->
								<link type="text/css" rel="stylesheet" href="{{asset('customer/css/bootstrap.min.css')}}"/>

								<!-- Slick -->
								<link type="text/css" rel="stylesheet" href="{{asset('customer/css/slick.css')}}"/>
								<link type="text/css" rel="stylesheet" href="{{asset('customer/css/slick-theme.css')}}"/>

								<!-- nouislider -->
								<link type="text/css" rel="stylesheet" href="{{asset('customer/css/nouislider.min.css')}}"/>

								<!-- Font Awesome Icon -->
								<link rel="stylesheet" href="{{asset('customer/css/font-awesome.min.css')}}">

								<!-- Custom stlylesheet -->
								<link type="text/css" rel="stylesheet" href="{{asset('customer/css/style.css')}}"/>
								<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
							</head>

						<body>
                                <div class="wrapper">
                                        <!-- Main Header -->
                                        @include('customer.layouts.header')
										<!-- nav -->
										@yield('content')

                                        <!-- /.content-wrapper -->
                                        <!-- Footer -->
                                        @include('customer.layouts.footer')
                                       <!-- jQuery Plugins -->
                                       

<script src="{{asset('customer/js/jquery.min.js')}}"></script>
<script src="{{asset('customer/js/bootstrap.min.js')}}"></script>
<script src="{{asset('customer/js/slick.min.js')}}"></script>
<script src="{{asset('customer/js/nouislider.min.js')}}"></script>
<script src="{{asset('customer/js/jquery.zoom.min.js')}}"></script>
<script src="{{asset('customer/js/main.js')}}"></script>


<!-- jQuery Plugins -->

 
		
</body>
</html>