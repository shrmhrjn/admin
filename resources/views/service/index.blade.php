@extends('index')
@section('content')

<button class="btn btn-md btn-warning">
    <a href="{{ route('service.create') }}">Add Service</a>
</button>
<table>
    <thead>
        <th>Title</th>
        <th>Image</th>
        <th>Description</th>
    </thead>


    <tbody>
        @foreach($services as $service)
        <tr>
            <td>{{ $service->title }}</td>
            <td><img src="{{ asset('backend/service/'.$service->image)}}"></td>
            <td>{{ $service->description}}</td>
            <td><button class="btn btn-md btn-warning"><a href="{{ url('service/'.$service->id.'/edit') }}">Edit</a></button></td>
            <td> <form action="{{ url('service/'.$service->id) }}" method="post">
                @csrf
                @method('delete')
                    <button class="btn btn-md btn-danger">delete</button>
            </form></td>
        </tr>
        @endforeach
    </tbody>


</table>
@endsection
