@extends('layouts.master')
@section('title', 'Cart')
@section('content')
    <header class="page-header">
        <h1>Cart</h1>
        <h3 class="cart-amount"></h3>
    </header>
    @if(session()->has('success'))
    <section class="pop-up">
       <div class="pop-up-box">
           <div class="pop-up-title">
           {{session()->get('addedToCart')}}
       </div>
       <div class="pop-up-actions">
           <a href="{{route('cart')}}" class="btn btn-outlined">Browse More Services...</a>
           <a href="{{route('cart')}}" class="btn btn-primary">Place order !</a>
       </div>
   </div>
    </section>
@endif
    <main class="cart-page">
        <div class="container">
            <div class="cart-table">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Servicess</th>
                            <th>Time (slected)</th>
                            <th>Charges (Approx)</th>
                            <th>Number of Tasks</th>
                            <th>Total</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @if (session()->has('cart') && count(session()->get('cart')) > 0)
                        @foreach (session()->get('cart') as $key => $item)
                            <tr>
                                <td>
                                    <a href="{{route('product', $item['product']['id'])}}" class="cart-item-title">
                                        <img src="{{asset('storage/'. $item['product']['image'])}}" alt="">
                                        <p>{{ $item['product']['title']}}</p>
                                    </a>
                                </td>
                                <td>{{ $item['color']['name']}}</td>
                                <td>${{ $item['product']['price'] / 100}}</td>
                                <td>{{ $item['quantity']}}</td>
                                <td>${{ $item['product']['price'] / 100}}</td>
                                <td>
                                    <form action="{{route('removeFromCart', $key)}}" method="post">
                                        @csrf
                                        <button class="btn btn-primary">Delete</button>
                                    </form>
                                </td>

                            </tr>
                            
                            <tr class="cart-total">
                                <td colspan="4" style="text-align:right">Total</td>
                                <td>${{ $item['product']['price'] / 100}}</td>
                            </tr>
                        @endforeach
                            
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="cart-actions">
                <a href="{{route('checkout')}}" class="btn btn-primary">Place order</a>
            </div>
        </div>
    </main>



@endsection