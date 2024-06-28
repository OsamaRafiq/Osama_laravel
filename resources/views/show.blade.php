@extends('layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($message=Session::get('success'))
        <div role="alert">
            {{$message}}
        </div>
    @endif
    <table class="table table-bordered">
<thead class="thead-dark">
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Age</th>
    <th>Image</th>
    <th>Action</th>
</tr>
</thead>
<tbody>
   
    @foreach ($abc as $hello )
     <tr>
      
        <td>{{$hello->id}}</td>
        <td>{{$hello->name}}</td>
        <td>{{$hello->email}}</td>
        <td>{{$hello->age}}</td>
        <td><img src="{{asset('images/'.$hello->image_path)}}" alt="{{$hello->name}}"></td>
        <td><a href="/prefix/ {{$hello->id}}/edit" class="btn btn-primary">Edit</a>
            <a href="" class="btn btn-danger">Delete</a></td>

    </tr>
    @endforeach
</tbody>
</table>
 
<br>

<div class="col lg-2">
<a href="/create" class="btn btn-primary btn-sm" role="button">Add Record</a>
</div>

</body>
</html>

@endsection