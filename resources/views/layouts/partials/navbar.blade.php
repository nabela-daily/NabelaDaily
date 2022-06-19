 <nav id="scrollspy" class="navbar page-navbar navbar-light navbar-expand-md fixed-top" data-spy="affix" data-offset-top="20">
    <div class="container">
        <a class="navbar-brand" href="#"><strong class="text-primary">Nabela</strong> <span class="text-dark">Daily</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
               
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">New</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="collection">Collection</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog">Blog</a>
                </li>
                <li class="nav-item ml-md-4">
                    @if (Route::has('login'))
                    <div class="hidden fixed sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="nav-link btn btn-primary">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="nav-link btn btn-primary">Log in</a>
        
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                </li>
            </ul>
        </div>
    </div>
</nav><!-- End of Page Navbar -->  