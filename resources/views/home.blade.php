@extends('master')
@section('content')
    <div class="container d-flex flex-column center">
        <a href="{{route('createPage')}}" class="btn btn-primary my-4">Add new anime</a>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Author</th>
                <th scope="col">Animator</th>
                <th scope="col">Genre</th>
                <th scope="col">Status</th>
                <th scope="col" colspan="2">Operations</th>
            </tr>
            </thead>
            <tbody>
            @foreach($allAnime as $anime)
            <tr>
                <th>{{$anime['id']}}</th>
                <td>{{$anime['name']}}</td>
                <td>{{$anime['author']}}</td>
                <td>{{$anime['animator']}}</td>
                <td>{{$anime['genre']}}</td>
                <td>{{$anime['status']}}</td>
                <td>
                    <form action="{{route('updatePage', $anime->id)}}" method="get">
                        @csrf
                        <input type="submit" class="btn btn-info btn-sm" value="Update">
                    </form>
                </td>
                <td>
                    <form action="{{route('deleteAnime', $anime->id)}}" method="post">
                        @csrf
                        @method('patch')
                        <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                    </form>
                </td>

            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
