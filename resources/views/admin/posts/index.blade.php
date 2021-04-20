@extends('layouts.admin_template')
@section('content')

    <h1><span class="badge badge-info display-1 shadow"><i class="fas fa-blog"></i>Posts</span></h1>
    @can('edit_posts')
    <h3><span class="badge badge-success display-1 shadow my-2">
            <i class="fas fa-plus"></i>
            <a class="text-white text-decoration-none" href="{{route('posts.create')}}">Add New</a></span>
    </h3>
    @endcan

    @if(Session::has('post_message'))
        <p class="alert alert-info my-3">{{session('post_message')}}</p>
    @endif
    <p>Displaying {{$posts->count()}} of {{ $posts->total() }} post(s).</p>


    <table class="table table-striped">

        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Photo</th>
            <th scope="col">Owner</th>
            <th scope="col">Category</th>
            <th scope="col">Body</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
            @can('edit_posts')
            <th scope="col">Booked</th>
            <th scope="col">DateForPost</th>
            <th scope="col">Deleted</th>
            <th scope="col">Action</th>
            @endcan

        </tr>
        </thead>

        <tbody>
        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td><a href="{{route('posts.edit', $post->id)}}">{{$post->title}}</a></td>
                    <td>
                        <img class="rounded" height="62" width="62" src="{{$post->photo ? asset('images/posts') . $post->photo->file : 'http://placehold.it/62x62'}}" alt="{{$post->name}}">
                    </td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->postcategory->name}}</td>
                    <td>{{Str::limit($post->body,100)}}</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                    <td>{{$post->book}}</td>
                    @can('edit_posts')
                    <td>
                            <form action="{{action('App\Http\Controllers\AdminPostsController@datePost')}}"
                                  method="post">
                                @csrf
                                <div class="d-flex flex-column">
                                    <input class="" type="date" name="datePost">
                                    <input type="hidden" name="post_id" value="{{$post->id}}">
                                </div>
                                <div class="d-flex">
                                <button type="submit" class="btn btn-warning mt-2 w-75 ">Book<i
                                        class="fa fa-angle-right ml-2"></i></button>
                                    <form action="{{action('App\Http\Controllers\AdminPostsController@deleteBooking')}}"
                                          method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger mt-2 w-25 "><i class="far fa-trash-alt"></i>
                                        </button>
                                        <input type="hidden" name="post_id" value="{{$post->id}}">
                                    </form>
                                </div>
                            </form>
                    @if($post->book <= $timeNow && $post->book != null)
                        <div class="d-flex">
                            <button  class="btn btn-success mt-2 w-75 ">Online<i class="ml-2 fas fa-thumbs-up"></i></button>
                            <a class="btn btn-success mt-2 w-25 " href="{{route('Post', $post->id)}}"><i class="fas fa-eye"></i></a>
                        </div>
                        @elseif($post->book <= $timeNow && $post->book == null)
                            <form action="{{action('App\Http\Controllers\AdminPostsController@publishPost')}}" method="post">
                                @csrf
                                <div class="d-flex flex-column">
                                    <input type="hidden" name="post_id" value="{{$post->id}}">
                                </div>
                                <button type="submit"  class="btn btn-dark mt-2 w-100 ">Publish Now<i class="ml-2 fas fa-upload"></i></button>
                            </form>
                        @endif
                    </td>
                    <td>{{$post->deleted_at}}</td>
                    <td>
                        @if($post->deleted_at != null)
                            <a class="btn btn-warning" href="{{route('admin.postsRestore', $post->id)}}">Restore</a>
                        @else
                            {!! Form::open(['method'=>'DELETE',
                            'action'=>['App\Http\Controllers\AdminPostsController@destroy', $post->id]]) !!}
                            <div class="form-group">
                                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                            </div>
                            {!! Form::close() !!}
                        @endif
                    </td>
                    @endcan
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    {{$posts->links()}}
@stop




