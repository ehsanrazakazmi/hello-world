@extends('layouts.technician')
@section('title', 'confirmed')
@section('content')
<h1 class="page-title">Show Confirmed orders</h1>
<div class="container">
    <div class="text-end mb-5">
    </div>
    <div class="col">
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    <h5>Confirmed Orders</h5>
                </div>
                <div class="card-body">
                    <table class="table table-stripped"  style="background-color: rgb(74, 48, 92)">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Status</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($orderconfirm as $orderconfirm)
                            <tr>
                                <td>{{$orderconfirm->id}}</td>
                                <td>{{$orderconfirm->status}}</td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection