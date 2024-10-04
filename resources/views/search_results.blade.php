<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('content')
<div class="container mt-5 mb-5">
    <h1>Search Results</h1>

    @if($results->isEmpty())
        <p>No Results. Please try searching for something else.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Bio</th>
                </tr>
            </thead>
            <tbody>
                @foreach($results as $investigator)
                    <tr>
                        <td>{{ $investigator->name }}</td>
                        <td>{{ $investigator->position }}</td>
                        <td>{{ $investigator->email }}</td>
                        <td>{{ $investigator->phone }}</td>
                        <td>{{ $investigator->bio }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
