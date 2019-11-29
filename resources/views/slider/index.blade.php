@extends('index')
@section('content')

<button class="btn btn-md btn-warning">
    <a href="{{ route('slider.create') }}">Add Slide</a>
</button>
<table>
    <thead>
        <th>Id</th>
        <th>Image</th>
    </thead>


    <tbody>
        @foreach($slides as $slide)
        <tr>
            <td>{{ $slide->id }}</td>
            <td><img src="{{ asset('backend/slider/'.$slide->image)}}"></td>
            <td><button class="btn btn-md btn-warning"><a href="{{ url('slider/'.$slide->id.'/edit') }}">Edit</a></button></td>
            <td> <form action="{{ url('slider/'.$slide->id) }}" method="post">
                @csrf
                @method('delete')
                    <button class="btn btn-md btn-danger">delete</button>
            </form></td>
        </tr>
        @endforeach
    </tbody>


</table>
@endsection
