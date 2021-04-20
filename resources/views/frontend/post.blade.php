@include('frontend.includes.head')
@include('frontend.includes.nav-bar')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="row">
                    <div class="entry col-12 my-5">
                        <div class="grid-inner">
                            <div class="entry-image mb-3">
                                <img class="rounded" height="62" width="62" src="{{$post->photo ? asset('images/posts') . $post->photo->file : 'http://placehold.it/62x62'}}" alt="{{$post->name}}">
                            </div>
                            <div class="entry-title">
                                <h2><a class="text-decoration-none text-dark" href="">{{$post->title}}</a></h2>
                            </div>
                            <div class="entry-meta d-flex w-75 justify-content-between my-3">
                                <div><i class="far fa-calendar-alt me-2"></i>{{$post->created_at->diffForHumans()}}</div>
                                <div><i class="fas fa-user me-2"></i> {{$post->user->name}}</div>
                                <div><i class="far fa-folder me-2"></i>{{$post->postcategory->name}}</div>
                                <div><i class="far fa-comment me-2"></i> 13 Comments</div>
                            </div>
                            <div class="entry-content">
                                <p>{{$post->body}}</p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="row">
        @auth
        <div class="col-md-8 offset-md-2">
            <div class="row">
                <div id="disqus_thread"></div>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                <script id="dsq-count-scr" src="//divemaster-1.disqus.com/count.js" async></script>
            </div>
        </div>
        @endauth
    </div>

</div>

@include('frontend.includes.footer')
