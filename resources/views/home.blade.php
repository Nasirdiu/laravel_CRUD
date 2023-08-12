@extends('layouts')
@section('content')
    <div class="mycontent">
        <div class="myapp">
            <h2 class="text-center">Insert Your Record <a href="" class="btn btn-sm btn-primary">View All Record</a></h2>
            <form action="">
                <div class="form-group mb-2">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group mb-2">
                    <label for="" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group mb-2">
                    <label for="" class="form-label">Reg Number</label>
                    <input type="number" name="reg" class="form-control">
                </div>
                <input type="submit" value="Submit Your Information" class="btn btn-primary w-100" >
            </form>
        </div>
    </div>
@endsection
