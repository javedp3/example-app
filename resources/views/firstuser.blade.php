@extends('html')

@section('content')
<div class="container">
  <div class=" text-center m-2"><h1> first user pages.....updated...controller...</h1>
  
  </div>
<table class="table table-striped border-1">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        
        <th scope="col">View</th>
        
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
                
                <td><a href="{{route('first',$first->id)}}" class="btn btn-outline-danger btn-sm">Back</a></td>               
            
              </tr>       
        @endforeach
        
    </tbody>
</table>
</div>
@endsection