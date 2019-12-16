@extends('layouts.app')


@section('content')
<h1>Alle cursussen op een rij</h1>
<div class="row mb-2 mt-2">
    <div class="col">
        <a href="{{route('courses.create')}}" class="btn btn-success">Maak nieuwe Cursus</a>
    </div>
</div>
<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>price</th>
            <th>controls</th>
        </tr>
    </thead>
    <tbody>
        @foreach($courses as $course)
        <tr>
            <td>{{$course->id}}}</td>
            <td>{{$course->name}}</td>
            <td>{{$course->price}}</td>
            <td>
                <a href="{{route('courses.edit', $course)}}" class="btn btn-warning">Wijzig</a>
                <a href="{{route('courses.delete', $course)}}" class="btn btn-danger">Verwijder</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection