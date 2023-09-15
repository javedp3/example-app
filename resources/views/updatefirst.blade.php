
@extends('html')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1>uppppppdate user data</h1>
            <form action="{{route('userfirst',$data->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label >Name</label>
                    <input type="text" value="{{$data->name}}" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label >Email</label>
                    <input type="text" value="{{$data->email}}" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label >Age</label>
                    <input type="text" value="{{$data->age}}" name="age" class="form-control">
                </div>
                <div class="form-group">
                    <label >Address</label>
                    <input type="text" value="{{$data->address}}" name="address" class="form-control">
                </div>
                
                 <button type="submit"  class="btn btn-outline-danger btn-sm m-2 ">updated</button>              
            
            </form>
        </div>
    </div>

</div>

@endsection

