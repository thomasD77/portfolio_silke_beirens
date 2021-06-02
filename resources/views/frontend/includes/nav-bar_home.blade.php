<body class="pt-0">
<header class="container-fluid">
    <div class="row">
        <nav class="navbar navbar-expand-lg pe-0 fixed-top pb-0 pb-lg-2">
            <div class="col-12 col-lg-10 offset-lg-1 d-md-flex align-items-center px-0">
                <div class="navbar-header d-flex justify-content-between align-items-center justify-content-lg-start">
                    <div class="d-none d-lg-block w-15">
                        <img class="img-fluid" src="{{asset('images/frontend/Avatar_groen.png')}}" alt="logo_groen"></div>
                    <a class="navbar-brand ps-0 ps-lg-3 me-4 py-0 text-uppercase" id="logotitle">Silke Beirens</a>
                    <button class="navbar-toggler mr-4 d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse ms-3 ms-md-0 d-lg-flex justify-content-lg-center" id="navbarSupportedContent">
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
                <div class="col-12 col-lg-3 my-lg-2 d-none d-lg-block">
                    <div id="social" class="d-flex">
                        <a class="d-flex justify-content-center align-items-center"
                           href="https://www.facebook.com/silbeirens" target="_blank"><i
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





