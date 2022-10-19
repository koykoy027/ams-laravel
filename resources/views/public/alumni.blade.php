@extends('public.layouts.master-home')
@section('title', '| Alumni')
@section('content')


<header class="masthead">
    <div class="masthead-heading text-uppercase">
        What is Alumni<span class="text-primary"> Lists ?</span>
    </div>
    <div class="masthead-subheading fs-6">
        Alumn lists is a Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus blanditiis vero porro minima eligendi animi quos optio dolores
    </div>
    <a class="btn btn-primary btn-xl text-uppercase" href="#alumni">Show Alumni</a>
</header>

<div class="container my-5">
    <table class="table table-hover" id="alumni">
        <thead>
            <tr>                
                <th>Fullname</th>
                <th>Course</th>
                <th>Year Graduate</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ( $records as $record )
                <tr>                        
                    <td>{{$record['lastname']}}, {{$record['firstname']}} {{$record['middlename']}}</td>
                    <td>{{$record['course']}}</td>
                    <td>{{$record['year-graduate']}}</td>                        
                </tr>
            @endforeach
            
        </tbody>
        
    </table>
    
</div>

    
@endsection
