@extends('master')
@section('content')
    <form action="{{route('newAnime')}}" method="post" style="width: 50%">
        @csrf
        <x-alert/>

        <label for="name" class="form-label">Name Of The Anime</label>
        <input type="text" name="name" placeholder="Name of The Anime" id="name" class="form-control" required autocomplete="off">
        <br>
        <label for="author" class="form-label">Author Of The Anime</label>
        <input type="text" name="author" placeholder="Author of The Anime" id="author" class="form-control" required autocomplete="off">
        <br>
        <label for="animator" class="form-label">Animator Of The Anime</label>
        <input type="text" name="animator" placeholder="Animator of The Anime" id="animator" class="form-control" required autocomplete="off">
        <br>
        <label for="genre" class="form-label">Genre Of The Anime</label>
        <input type="text" name="genre" placeholder="Genre of The Anime" id="genre" class="form-control" required autocomplete="off">
        <br>

        <div class="container d-flex justify-content-evenly">
            <input type="radio" class="btn-check" name="status" value="ongoing" id="ongoing" autocomplete="off">
            <label class="btn btn-outline-success" for="ongoing">Ongoing</label>

            <input type="radio" class="btn-check" name="status" value="completed" id="completed" autocomplete="off">
            <label class="btn btn-outline-warning" for="completed">Completed</label>
        </div>

        <br>
        <input type="submit" class="form-control btn-outline-primary">
        <br>
        <a href="{{route('home')}}" class="form-control btn btn-outline-info">Go Back</a>
    </form>
@endsection
