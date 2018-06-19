@extends('layout.master') @section('content')
    <table class="table table-hover table-bordered mt-4">
        <thead class="">
        <tr class="text-center">
            <th scope="col" class="">ID</th>
            <th scope="col" class="w-25">Title</th>
            <th scope="col" class="w-25">Content</th>
            <th scope="col" class="w-25">Created Date</th>
            <th scope="col" class="w-25">Updated Date</th>
            <th scope="col" class="w-25">Action</th>

        </tr>
        </thead>
        <tbody>
        <tr class="text-center">
            <th scope="row">{{$article->id}}</th>
            <td>{{$article->title}}</td>
            <td>{{$article->content}}</td>
            <td>{{$article->created_at}}</td>
            <td>{{$article->updated_at}}</td>
            <td class="d-flex flex-row justify-content-center">
                <form action="{{route('edit',$article->id)}}" method="get">
                    <button class="btn btn-sm btn-warning mx-2">
                        Edit
                    </button>
                </form>
                <form action="{{route('delete',$article->id)}}" method="post">
                    <input type="hidden" name="_method" value="delete" /> {{csrf_field()}}
                    <button class="btn btn-sm btn-danger mx-2">
                        Delete
                    </button>
                </form>
            </td>
        </tr>

        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <form action="{{route('add')}}" method="get">
            <button class="btn btn-success mb-5 mt-2">
                Create New Articles
            </button>
        </form>
    </div>


@endsection