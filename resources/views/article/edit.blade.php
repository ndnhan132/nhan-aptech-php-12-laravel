@extends('layout.master') @section('content')
    <form action="{{route('update', $article->id)}}" method="post" class="m-auto">
        <div class="form-group d-flex flex-column justify-content-center text-center mt-5">
            <input type="hidden" name="_method" value="put" />
            {{csrf_field()}}
            <input class="form-control " type="text" name="title" placeholder="Title"  value="{{$article->title}}"><br>
            <input class="form-control " type="text" name="content" placeholder="Content"  value="{{$article->content}}"><br>
            <input class="btn btn-success px-5 " type="submit" value="UPDATE">
        </div>
    </form>
@endsection