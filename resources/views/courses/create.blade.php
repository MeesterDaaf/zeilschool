@extends('layouts.app')


@section('content')
<h1>Maak een cursus aan</h1>


<form action="{{route('courses.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Cursus Naam</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp">
                <small id="nameHelp" class="form-text text-muted">Vul een mooie naam in.</small>
            </div>
            <button type="submit" class="btn btn-success" name="submit">Maak aan!</button>
</form>


@endsection