<!DOCTYPE html>
<html lang="{{App::getLocale()}}">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<title>@yield('head_title','FlyingBee')</title>

	@if(Route::current()->uri()=='/')
	<!--FB Open Graph tags for main page-->
	<meta property="og:title" content="캠스콘" />
	<meta property="og:site_name" content="CAMSCON" />
	<meta property="og:url" content="http://camscon.kr" />
	<meta property="og:image" content="http://cdn.camscon.kr/front-assets/layouts/fb_og.jpg" />
	<meta property="og:description" content="Share your inspiration!" />
	<meta property="fb:app_id" content="562009567255774" />
	<meta property="og:locale" content="ko_KR" />
	@endif

	<!-- Bootstrap -->
	<link href="{{asset('packages/bootstrap-3.2.0/css/bootstrap.min.css')}}" rel="stylesheet" />

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!--Google Web Fonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

	<!--Admin Layout styles-->
	<link href="{{asset('assets/master/style.css')}}" rel="stylesheet" />

	@yield('head')
	</head>
<body>
	@yield('content')

	<!-- jQuery 1.11.1 -->
	<script src="{{asset('packages/jquery-1.11.1/jquery-1.11.1.min.js')}}"></script>
	
	<!-- Bootstrap 3.2.0 -->
	<script src="{{asset('packages/bootstrap-3.2.0/js/bootstrap.min.js')}}"></script>

	<!--Verge.js-->
	<script src="{{asset('packages/verge/verge.min.js')}}"></script>
	<script type="text/javascript">jQuery.extend(verge);</script>

	<!--Admin Layout-->
	<script src="{{asset('assets/master/layout-engine.js')}}"></script>
	@yield('body')
</body>
</html>