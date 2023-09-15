@extends('html') 

@section('content')

<div class="container">
<table class="table table-striped">
  <div class=" text-center m-2"><h1> first pages</h1>

  </div>
<div class="float-right">
  <a href="/newuser" class="btn btn-outline-primary btn-lg ">Add new User</a>
</div>
  <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Age</th>
        <th scope="col">Address</th>
        <th scope="col">View</th>
        <th scope="col">update</th>
        <th scope="col">delete</th>
        
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $id => $first )
            
            <tr>
                <td>{{$first->id}}</td>
                <td>{{$first->name}}</td>
                <td> {{$first->email}}</td>
                <td>{{$first->age}}</td>
                <td> {{$first->address}}</td>
              
                <td><a href="{{route('firstuser',$first->id)}}" class="btn btn-outline-dark btn-sm">View</a></td>               
                <td><a href="{{route('updatefirst',$first->id)}}" class="btn btn-outline-info btn-sm">Update</a></td>               
                <td><a href="{{route('deletefirstuser',$first->id)}}" class="btn btn-outline-success btn-sm">Delete</a></td>               
            </tr>       
        @endforeach
        
    </tbody>
</div>
  </table>
@endsection