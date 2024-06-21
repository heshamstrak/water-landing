<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{Storage::url('public/uploads/settings/'.setting('logo_image'))}}" alt="logo" style="width: 180px">
            <img src="{{Storage::url('public/uploads/settings/'.setting('logo_image'))}}" alt="logo" style="width: 180px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{Route::is('home') ? '#home' : route('home').'#home'}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{Route::is('home') ? '#about' : route('home').'#about'}}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{Route::is('home') ? '#services' : route('home').'#services'}}">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="{{Route::is('home') ? '#portfolio' : route('home').'#portfolio'}}">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link" href="{{Route::is('home') ? '#testimonial' : route('home').'#testimonial'}}">Testimonial</a></li>
                <li class="nav-item"><a class="nav-link" href="{{Route::is('home') ? '#blog' : route('home').'#blog'}}">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="{{Route::is('home') ? '#contact' : route('home').'#contact'}}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>