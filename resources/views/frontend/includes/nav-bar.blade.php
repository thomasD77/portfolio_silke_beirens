<body>
<header class="container-fluid">
    <div class="row">
        <nav class="navbar navbar-expand-lg pe-0">
            <div class="col-12 col-lg-10 offset-lg-1 d-lg-flex align-items-center px-0">
                <a class="navbar-brand ps-0 ps-lg-3 me-4 py-0" id="logotitle">DIVEMASTER</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ms-3 ms-lg-0 d-lg-flex justify-content-lg-center" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a aria-current="page" class="nav-link active pb-1" href="{{route('home')}}">HOME</a>
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


                <div id="tools" class="d-flex justify-content-center">
                    <a class="d-none d-sm-block" href="{{route('admin.home')}}"><span
                            class="badge badge-dark  shadow my-2 tools p-2 justify-content-end"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-back" viewBox="0 0 16 16">
  <path
      d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z"/>
</svg></span></a>
                </div>

            </div>
        </nav>
    </div>
    <div class="row my-3 my-lg-5 pb-3 pb-lg-5">
        <div class="col-12 col-lg-8 offset-lg-2">
            <h1><span class="text-uppercase me-2">{{Route::currentRouteName()}}</span></h1>
            <div class="d-flex">
                <p><a class="atags pe-2" href="{{route('home')}}">Home</a></p>
                <p>|</p>
                <p><a class="atags ps-2" href=""></a> {{$name = Route::currentRouteName()}}</p>
            </div>
        </div>
    </div>

<div id="app"></div>
</header>
