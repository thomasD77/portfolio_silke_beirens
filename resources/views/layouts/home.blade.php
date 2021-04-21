<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta content="Demeulenaere Thomas" name="author">
    <meta content="Divemaster shop with bootstrap" name="description">
    <meta content="HTML5, CSS3, html, flexbox, bootstrap" name="keywords">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Divemaster shop</title>

    <!-- Styles -->
    <link href="{{ asset('css/front-app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/magnific-popup.min.css" integrity="sha512-nIm/JGUwrzblLex/meoxJSPdAKQOe2bLhnrZ81g5Jbh519z8GFJIWu87WAhBH+RAyGbM4+U3S2h+kL5JoV6/wA==" crossorigin="anonymous" />
</head>
<body>

<header class="container-fluid">
    <div class="row">
        <nav class="navbar navbar-expand-lg bg-white pe-0">
            <div class="col-lg-10 offset-lg-1 d-lg-flex align-items-center px-0">
                <a class="navbar-brand ps-0 ps-lg-2 me-0 py-0" id="logotitle">DIVEMASTER</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ms-3 ms-lg-0 d-lg-flex justify-content-lg-center"
                     id="navbarSupportedContent">
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

    <div class="row">
        <div class="col-12 d-flex flex-column">
            <div id="imagediving" class="row img-fluid  mx-0">
                <img src="{{asset('images/frontend/header2.jpg')}}" alt="">
            </div>
        </div>
    </div>

</header>



<main class="container-fluid">
    <div id="bereikbaar" class="row mt-md-5 py-5">
        <div class="col-lg-8 offset-lg-2 d-lg-flex justify-content-lg-around align-items-center">
            <div>
                <h2 class="text-uppercase">Stay Connected</h2>
                <p>Subscribe to our newsleter and stay up to date with <br>
                    latest offers and upcoming trends</p>
                <p> @include('admin.includes.form_error')</p>
            </div>
                <div id="form" class="input-group mb-3 d-flex justify-content-center">
                    <form class="d-flex flex-column" action="{{action('App\Http\Controllers\AdminReadersController@store')}}" method="post">
                        @csrf
                        <label id="label"><input id="inputmail" name="newsletter" type="email" class="form-control ps-4 rounded-pill" placeholder="E-mail...">
                            <button class="my-lg-0 py-1 rounded-pill btn-dark" type="submit" id="btnnewsletter">Send</button>
                        </label>
                        @if(Session::has('readers_message'))
                            <div class="alert alert-dark alert-dismissible fade show mt-5" role="alert">
                                <p class="mb-0 alert-dark">{{session('readers_message')}}</p>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidde="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </form>
                </div>
        </div>
    </div>

    <div class="gegevens row pt-5">
        <div class="col-12 col-lg-8 offset-lg-2">
            <div class="row">
                <div class="col-12 col-xl-3 mb-5">
                    <h2 class="text-uppercase mb-4">DIVESHOP</h2>
                    <p>Email: info@divemaster.be</p>
                    <p>Phone:  +948 256 347 968</p>
                    <p>Subscribe to our newsleter and stay
                        up to date with latest offers and
                        upcoming trends.</p>
                    <a class="btn btn-secondary" href="mailto:info@divemaster.be">Send Email</a>
                </div>
                <div class="col-12 col-xl-3">
                    <h3 class="mb-4">About Us</h3>
                    <p>Our Outlets</p>
                    <p>Sales and Retails</p>
                    <p>Areas we serve</p>
                    <p>Career at Divemaster</p>
                    <p>Contact us</p>
                </div>
                <div class="col-12 col-xl-3">
                    <h3 class="mb-4">Help and Support</h3>
                    <p>Track my order</p>
                    <p>Our top products</p>
                    <p>My cart</p>
                    <p>Sign in</p>
                    <p>Shipping Calculator</p>
                </div>
                <div class="col-12 col-xl-3">
                    <h3 class="mb-4">Pages & Resources</h3>
                    <p>About us</p>
                    <p>Shop Page</p>
                    <p>Category page</p>
                    <p>Sign in page</p>
                    <p>404 page</p>
                </div>
            </div>
        </div>
    </div>

    <div id="socials" class="container my-5">
        <div id="instafeed-container" class="row gallery"></div>
    </div>

</main>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-double-up mx-2"></i></button>

<footer class="container-fluid">
    <div class="row">
        <hr>
        <div class="col-12 col-lg-8 offset-lg-2">
            <div class="row d-lg-flex align-items-lg-center">
                <div class="col-12 col-lg-5">
                    <p class="text-center">Copyright &copy; 2020 | Designed by Wpsmashe</p>
                </div>
                <div class="col-12 col-lg-3 my-lg-2">
                    <div id="social" class="d-flex justify-content-between ">
                        <a class="d-flex justify-content-center align-items-center"
                           href="http://www.facebook.com" target="_blank"><i
                                class="fab fa-facebook-f" id="facebook"></i></a>
                        <a class="d-flex justify-content-center align-items-center"
                           href="http://www.twitter.com" target="_blank"><i
                                class="fab fa-twitter"></i></a>
                        <a class="d-flex justify-content-center align-items-center"
                           href="http://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a class="d-flex justify-content-center align-items-center"
                           href="http://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-12 col-lg-4 d-flex justify-content-center justify-content-lg-end my-3 my-lg-0">
                    <p class="pe-3">Terms of Use</p>
                    <p>|</p>
                    <p class="ps-3">Privacy Policy</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js"></script>
<script src="{{asset('js/front-app.js')}}"></script>
<script>
    //Get the button:
    mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
</script>



</body>
</html>

