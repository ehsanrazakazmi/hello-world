{{-- @extends('layouts.technician')

@section('content')

<div>
    <h1 class="page-title">Show</h1>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4 p-3">
                <div class="card-header pb-0">

                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                    Name: {{Auth::user()->name}}
                    Email: {{Auth::user()->email}}
                </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

@extends('layouts.technician')
@section('title', 'confirmed')
@section('content')
<h1 class="page-title">Technician Profile</h1>
<div class="container">
    <div class="text-end mb-5">
    </div>
    <div class="col">
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    <h5>Details</h5>
                </div>
                <div class="card-body"  style="background-color: rgb(137, 100, 162)">
                    <p style="color: rgb(32, 38, 212)">Name: {{Auth::user()->name}}</p>
                    <p style="color: rgb(32, 38, 212)">Email: {{Auth::user()->email}}</p>
                    <p style="color: rgb(32, 38, 212)">Phone Number: {{Auth::user()->ph_no}}</p>
                    <img src="{{ asset('storage/'.Auth::user()->profile_photo_path) }}" alt="..." class="w-100 border-radius-lg shadow-sm" style="border-radius: 60%;">

                    <div class="d-flex mt-2" >
                        <a href="{{route('technicianpanel.pages.profile')}}"><button class="btn btn-primary" >Edit Profile</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection