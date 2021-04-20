@include('frontend.includes.head')
@include('frontend.includes.nav-bar')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="row">
                @foreach($posts as $post)
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
                            <p>{{Str::limit($post->body, 200)}}</p>
                            <a href="{{route('post', $post->id)}}" class="btn btn-dark">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center ">
                {{$posts->links()}}
            </div>
        </div>
    </div>


</div>

@include('frontend.includes.footer')
