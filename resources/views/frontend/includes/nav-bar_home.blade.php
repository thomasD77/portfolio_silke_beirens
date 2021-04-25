<body class="pt-0">
<header class="container-fluid">
    <div class="row">
        <nav class="navbar fixed-top navbar-expand-lg pe-0">
            <div class="col-12 col-lg-10 offset-lg-1 d-md-flex align-items-center px-0">
                <img class="img-fluid w-5" src="{{asset('images/frontend/Avatar_groen.png')}}" alt="logo_groen">
                <a class="navbar-brand ps-0 ps-lg-3 me-4 py-0 text-uppercase" id="logotitle">Silke Beirens</a>
                @auth()
                    <a class="d-none d-sm-block" href="{{route('admin.home')}}">
                        <span class="badge badge-dark  shadow my-2 tools p-2 justify-content-end">
                            <i class="fas fa-door-open"></i></span></a>
                @endauth
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ms-3 ms-lg-0 d-lg-flex justify-content-lg-center" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a aria-current="page" class="nav-link active mx-2 pb-1" href="{{route('home')}}">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pb-1 mx-2" href="{{route('about')}}">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pb-1 mx-2" href="{{route('contact')}}">CONTACT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pb-1 mx-2" href="{{route('blog')}}">BLOG</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-3 my-lg-2 d-none d-md-block">
                    <div id="social" class="d-flex justify-content-around ">
                        <a class="d-flex justify-content-center align-items-center"
                           href="https://www.facebook.com/silke.beirens/" target="_blank"><i
                                class="fab fa-facebook-f" id="facebook"></i></a>
                        <a class="d-flex justify-content-center align-items-center"
                           href="https://twitter.com/silkebeirens" target="_blank"><i
                                class="fab fa-twitter"></i></a>
                        <a class="d-flex justify-content-center align-items-center"
                           href="https://www.instagram.com/silkebeirensoostende/" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
<div id="app"></div>
</header>
