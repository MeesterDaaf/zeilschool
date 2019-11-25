@extends('layouts.app')

@extends('layouts.menu')

@section('content')

<h1>Cursus Index</h1>

{{$courses}}

<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th></th>
            <th>prijs</th>
            <th>beschrijving</th>
        </tr>
    </thead>
    <tbody>

        @foreach($courses as $course)
        <tr>
            <td>{{$course->id}}</td>
            <td>{{$course->price}}</td>
            <td>{{$course->description}}</td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection