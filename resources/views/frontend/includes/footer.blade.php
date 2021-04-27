
</main>
<div class="container-fluid">
    <div class="gegevens row pt-5 pl-4">
        <div class="col-12 col-lg-8 offset-lg-2">
            <div class="row">
                <div class="col-12 col-xl-3 mb-5">
                    <h3 class="text-uppercase mb-4">Silke Beirens</h3>
                    <p>Schepen Mens & Milieu</p>
                    <p>Silke.Beirens@oostende.be</p>
                    <p>T 059 25 84 59</p>
                    <p>Graag contact opnemen? Stuur ons een e-mail.</p>
                    <a href="mailto:Silke.Beirens@oostende.be"><button type="submit" class="button rounded">Email Us</button></a>
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
                            <div class="col-3 col-md-1 col-lg-3"><img class="img-fluid" src="{{asset('images/frontend/logo_footer_groen.jpg')}}" alt=""></div>
                            <a class="text-decoration-none text-dark col-9 col-md-11 col-lg-9" href="{{route('post', $post->slug)}}">
                                <p class="newsstyle text-uppercase">{{$post->title}}</p></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <hr class=" m-0">
    <p class="text-center py-2 m-0">Copyright &copy; 2021 | Silke Beirens</p>
</footer>
<script src="{{ asset('js/share.js') }}"></script>
<script src="{{asset('js/front-app.js')}}"></script>
</body>
</html>
