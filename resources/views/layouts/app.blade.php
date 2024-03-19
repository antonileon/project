<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.css')
</head>
<body class="ltr app sidebar-mini">
    <!-- GLOBAL-LOADER -->
	<div id="global-loader">
		<img src="{{ asset('assets/images/loader.svg') }}" class="loader-img" alt="Loader">
	</div>
	<!-- /GLOBAL-LOADER -->
	<!-- PAGE -->
	<div class="page">
		<div class="page-main">
			@include('layouts.header')

            @include('layouts.sidebar')

			<!--app-content open-->
            <!-- CONTAINER -->
			<div class="app-content main-content mt-0">
				<div class="side-app">					 
					<div class="main-container container-fluid">
                        @yield('content')
				    </div>
				</div>
			</div>
			<!-- CONTAINER END -->
		</div>
		@include('layouts.footer')
	</div>
	@include('layouts.scripts')	
</body>
</html>
