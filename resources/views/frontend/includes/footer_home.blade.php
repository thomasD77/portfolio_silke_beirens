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
                    <a href="mailto:info@divemaster.be"><button type="submit" class="button rounded">Email Us</button></a>
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
