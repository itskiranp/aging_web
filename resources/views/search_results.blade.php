<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('content')
<div class="container mt-5 mb-5">
    <h1>Search Results</h1>

    {{-- Show Investigators Only If Found --}}
    @if($investigators->isNotEmpty())
        <h2>Investigators</h2>
        <table class="table table-bordered mb-5">
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
                @foreach($investigators as $investigator)
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

    {{-- Show Staffs Only If Found --}}
    @if($staffs->isNotEmpty())
        <h2>Staff </h2>
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
                @foreach($staffs as $staff)
                    <tr>
                        <td>{{ $staff->name }}</td>
                        <td>{{ $staff->position }}</td>
                        <td>{{ $staff->email }}</td>
                        <td>{{ $staff->phone }}</td>
                        <td>{{ $staff->bio }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    {{-- If no results at all --}}
    @if($investigators->isEmpty() && $staffs->isEmpty())
        <p>No Results. Please try searching for something else.</p>
    @endif
</div>
@endsection
