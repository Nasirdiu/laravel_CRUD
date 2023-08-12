@extends('layouts')
@section('content')
    <div class="mycontent">

        <div class="myapp">
            <a class="btn btn-sm btn-primary" href="admin">Admin Visit</a>
            <h2 class="text-center">Insert Your Record <a href="{{route('display.info')}}" class="btn btn-sm btn-primary">View All Record</a></h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('store.info')}}" method="POST">
                @csrf
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
