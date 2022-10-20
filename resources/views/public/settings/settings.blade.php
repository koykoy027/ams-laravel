@extends('public.layouts.master')
@section('title', '| settings')
@section('content')

<div class="container">
    <div class="card">
        {{-- <div class="card-header">
            <h4>ACCOUNT SETTINGS</h4>
        </div> --}}

        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <a class="btn btn-secondary mb-3 w-100" id="btnSettingsGeneral" onclick="btnSettingsGeneral()">
                    General information
                    </a>

                    <a class="btn mb-3 w-100" id="btnSettingsPassword" onclick="btnSettingsPassword()">
                    Change password
                    </a>
                </div>

                <div class="col-md-9">
                    <div class="container">
                        @include('public.settings.general')
                        @include('public.settings.password')
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
