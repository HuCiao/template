<!DOCTYPE html>
<html lang="en">
	<head>
		<title>@yield('title','Poultry Farm')</title>
		<meta charset="UTF-8">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="@yield('keywords', 'Professional farm website')">
        <meta name="description" content="@yield('description', 'Professional farm website')">

        @include('layouts.public.styles')
	</head>

	<body>
        @include('layouts.header')

        <div class="container" >
            @yield('content')
        </div>

        @include('layouts.footer')

		<!-- scrollToTop start here -->
		<a  class="scrollToTop"><i class="icofont-swoosh-up"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
		<!-- scrollToTop ending here -->

        @include('layouts.public.script')
        @yield('scriptsAfterJs')
	</body>
</html>
