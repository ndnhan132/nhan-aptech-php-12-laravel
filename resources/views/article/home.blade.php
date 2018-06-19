@extends('layout.master') @section('content')
    <div class="container">
        <table class="table table-hover table-bordered mt-3">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($articles as $art)
                <tr class="text-center">
                    <th scope="row">{{$art->id}}</th>
                    <td>{{$art->title}}</td>
                    <td>{{$art->content}}</td>
                    <td class="d-flex flex-row justify-content-center">
                        <form action="{{route('delete', $art->id)}}" method="post">
                            <input type="hidden" name="_method" value="delete" />
                            {{csrf_field()}}
                            <input type="submit" value="delete" class="btn  btn-danger btn-sm">
                        </form>
                        <form action="{{route('edit', $art->id)}}" method="get" class="mx-5">
                            <input type="submit" value="edit" class="btn  btn-primary btn-sm">
                        </form>
                        <form action="{{route('show' , $art->id)}}" method="get">
                            <input type="submit" value="show" class="btn  btn-success btn-sm">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            <form action="{{route('add')}}" method="get">
                <button class="btn btn-success mb-5 mt-2">
                    Create New Articles
                </button>
            </form>
        </div>
    </div>

@endsection