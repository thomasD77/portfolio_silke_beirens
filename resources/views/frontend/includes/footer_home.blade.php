<div class="gegevens row pt-5">
    <div class="col-12 col-lg-8 offset-lg-2">
        <div class="row">
            <div class="col-12 col-xl-3 mb-5">
                <h2 class="text-uppercase mb-4">Silke Beirens</h2>
                <p>Email: info@silkebeirens.be</p>
                <p>Phone:  +948 256 347 968</p>
                <p>Graag contact opnemen? Stuur ons een e-mail.</p>
                <a href="mailto:info@divemaster.be"><button type="submit" class="button rounded">Email Us</button></a>
            </div>
            <div class="col-12 col-xl-3">
                <h3 class="mb-4">About Us</h3>
                <a class="text-decoration-none text-dark" href="{{route('about', ["#wie"])}}"><p>Wie is Silke Beirens?</p></a>
                <a class="text-decoration-none text-dark" href="{{route('about', ["#waarom"])}}"><p>Waarom in de politiek?</p></a>
                <a class="text-decoration-none text-dark" href="{{route('about', ["#bevoegdheden"])}}"><p>Wat zijn Silke haar bevoegdheden?</p></a>
            </div>
            <div class="col-12 col-xl-3">
                <h3 class="mb-4">Contact Us</h3>
                <a class="text-decoration-none text-dark" href="{{route('contact', ["#credits"])}}"><p>Contact informatie</p></a>
                <a class="text-decoration-none text-dark" href="{{route('contact', ["#contactforumlier_anchor"])}}"><p>Contact formulier</p></a>
                <a class="text-decoration-none text-dark" href="{{route('contact', ["#FAQ"])}}"><p>FAQ</p></a>
            </div>
            <div class="col-12 col-xl-3">
                <h3 class="mb-4">Blog</h3>
                @foreach($footer_posts as $post)
                    <div class="row">
                        <div class="col-3"><img class="img-fluid" src="{{asset('images/frontend/logo_footer_groen.jpg')}}" alt=""></div>
                        <a class="text-decoration-none text-dark col-9" href="{{route('post', $post->slug)}}">
                            <p class="newsstyle text-uppercase">{{$post->title}}</p></a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</main>
<button class="d-none d-md-block" onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-double-up mx-2 "></i></button>
<footer class="container-fluid">
    <div class="row">
        <hr>
        <div class="col-12 col-lg-8 offset-lg-2">
            <div class="row d-lg-flex align-items-lg-center justify-content-center">
                <div class="col-12 col-lg-5">
                    <p class="text-center">Copyright &copy; 2021 | Silke Beirens</p>
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