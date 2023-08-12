@extends('layouts')
@section('content')
    <div class="mycontent">
        <div class="myapp">
            <h2 class="text-center">All Our Record <a href="{{route('home')}}" class="btn btn-sm btn-primary">Insert Your</a></h2>
            <ul>
                @foreach($students as $student)
                <li>
                    Name-{{$student->name}}
                    <br>
                    Email-{{$student->email}}
                    <br>
                    Reg Number-{{$student->reg}}
                </li>
                @endforeach
            </ul>

        </div>
    </div>
@endsection
