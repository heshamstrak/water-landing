
<!doctype html>
<html lang="zxx">
    
    @include('layouts.frontend._header')

    <body data-bs-spy="scroll" data-bs-offset="70">
        <!-- Start Preloader Area -->
		{{-- <div class="preloader">
			<div class="loader"></div>
		</div>
        <!-- End Preloader Area --> --}}

        <!-- Start Navbar Area -->
        @include('layouts.frontend._navbar') 
        <!-- End Navbar Area -->

        @yield('content')

        @include('layouts.frontend._footer')
    </body>
</html>