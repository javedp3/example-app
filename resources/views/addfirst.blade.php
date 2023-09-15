
@extends('html')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-4">
            <h1>Add New Users</h1>
            <form action="{{route('addfirst')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label >Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label >Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label >Age</label>
                    <input type="text" name="age" class="form-control">
                </div>
                <div class="form-group">
                    <label >Address</label>
                    <input type="text" name="address" class="form-control">
                </div>
                <div class="form-group">
                    <label >PhoneNumber</label>
                    <input type="text" name="number " class="form-control">
                </div>
                 <button type="submit"  class="btn btn-outline-danger btn-sm m-2 ">Sumbit</button>              
            
            </form>
        </div>
    </div>

</div>

@endsection