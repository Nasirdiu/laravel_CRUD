@extends('layouts')
@section('content')
    <div class="mycontent">
        <div class="myapp">
            <h2 class="text-center">Edit Your Record <a href="{{route('display.info')}}" class="btn btn-sm btn-primary">View All Record</a></h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('update.info')}}" method="POST">
                @csrf
                <input type="hidden" value="{{$student->id}}" name="id">
                <div class="form-group mb-2">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{$student->name}}">
                </div>
                <div class="form-group mb-2">
                    <label for="" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{$student->email}}">
                </div>
                <div class="form-group mb-2">
                    <label for="" class="form-label">Reg Number</label>
                    <input type="number" name="reg" class="form-control" value="{{$student->reg}}">
                </div>
                <input type="submit" value="Submit Your Information" class="btn btn-primary w-100" >
            </form>
        </div>
    </div>
@endsection
