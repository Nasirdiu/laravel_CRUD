@extends('layouts')
@section('content')
    <div class="mycontent">
        <div class="myapp">
            <h2 class="text-center">All Our Record <a href="{{route('home')}}" class="btn btn-sm btn-primary">Insert Your</a></h2>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{session()->get('message')}}
                </div>

            @endif
            <ul>
                @foreach($students as $student)
                <li>
                    Name-{{$student->name}}
                    <br>
                    Email-{{$student->email}}
                    <br>
                    Reg Number-{{$student->reg}}
                    <br>
                    <a href="{{route('edit.info',$student->id)}}" class="btn btn-sm btn-danger">Edit</a>
                    <form action="{{route('delete.info')}}" method="POST" class="d-inline">
                        @csrf
                        <input type="hidden" value="{{$student->id}}" name="id">
                        <input type="submit" value="delete" class="btn btn-sm btn-warning">

                    </form>
                </li>
                @endforeach
            </ul>

        </div>
    </div>
@endsection
