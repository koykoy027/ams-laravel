@extends('public.layouts.master')
@section('title', '| login')
@section('content')

<div class="container">
    <div class="row mb-3">
        <div class="text-center">
            <h3>Find Your <span class="text-primary">Dream Job</span> Today</h3>
            <p>Jobs, Employment & Future Career Opportunities</p>
        </div>        

        <div class="p-0">
            <div class="card-header bg-white">
                <a class="btn" id="btnFindJob" onclick="findJob()">Find Job</a>
                <a class="btn" id="btnFindEmployee" onclick="findEmployee()">Find Employee</a>
            </div>

            {{-- FIND JOB --}}
            @include('public.FindJob')

            {{-- FIND EMPLOYEE --}}
            @include('public.FindEmployee')
            
        </div>



    </div>
</div>
    
@endsection
