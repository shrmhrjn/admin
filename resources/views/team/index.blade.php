@extends('index')
@section('content')

<button class="btn btn-md btn-warning">
    <a href="{{ route('team.create') }}">Add Team</a>
</button>
<table>
    <thead>
        <th>Name</th>
        <th>Post</th>
        <th>Image</th>
    </thead>


    <tbody>
        @foreach($teams as $team)
        <tr>
            <td>{{ $team->name }}</td>
            <td>{{ $team->post}}</td>
            <td><img src="{{ asset('backend/team/'.$team->image)}}"></td>
            <td><button class="btn btn-md btn-warning"><a href="{{ url('team/'.$team->id.'/edit') }}">Edit</a></button></td>
            <td> <form action="{{ url('team/'.$team->id) }}" method="post">
                @csrf
                @method('delete')
                    <button class="btn btn-md btn-danger">delete</button>
            </form></td>
        </tr>
        @endforeach
    </tbody>


</table>
@endsection
