@extends('layout.master') @section('content')
    <form action="{{route('store')}}" method="post" class="m-auto">
        <div class="form-group d-flex flex-column justify-content-center text-center mt-5">
            <input type="hidden" name="_method" value="post" />
            {{csrf_field()}}
            <input class="form-control mr-3 " type="text" name="title" placeholder="Title" ><br>
            <input class="form-control mr-3" type="text" name="content" placeholder="Content" ><br>
            <input class="btn btn-success px-5 " type="submit" value="ADD">
        </div>



@endsection