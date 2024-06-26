@extends('navbar')
@section('content')
    <style>
        .container-all {
            min-height: 100vh;
        }

        .card-text {
            font-size: 16px;
        }

        .container-fluid {
            margin-top: 10px;
            width: 98%;
        }

        .card-float {
            position: relative;
            margin-top: 20px;
        }

        .card:hover {
            transform: none;
        }

        .total-section {
            width: 80%;
            border-radius: 5px;
            padding: 20px;
        }

        .btn-checkout {
            width: 100%;
            border-radius: 0;
            height: 50px;
        }

        li {
            list-style-type: none;
            padding: 0;
        }

        li a {
            text-decoration: none;
            color: #0057a8;
        }

        li a:hover {
            color: #024788;
        }

        /* carousel */
        .card-wrapper {
            padding: 10px 20px;
        }

        .item-card {
            display: inline-block;
            transition: 0.5s;
        }

        .card-wrapper .card:hover {
            transform: scale(105%);
        }



        .card-title {
            margin: 0;
            font-size: 20px;
            font-weight: 500;
        }

        @media(max-width:800px) {
            .header {
                display: none;
            }

            .col-5 {
                width: 100%;
                position: absolute;
                margin-top: 0;
            }

            .col-7 {
                width: 100%;
                position: relative;
                margin-top: 160px;
            }

            .total-section {
                width: 100%;
                padding: 0;
            }
        }
    </style>
    <div class="container-all">

        <div class="header">
            <h1>Shopping Cart</h1>
        </div>
        <div class="content row">
            <div class="course-cart col-7 mb-2">
                <p class="m-0">@php
                    echo count($transactions);
                @endphp Courses in Cart</p>
                <hr class="m-0">
                @foreach ($transactions as $trans)
                    <div class="card rounded-2 shadow mt-3 p-0">
                        <div class="card-body p-0">
                            <div class="row mb-0">
                                <div class="col-auto pe-0">
                                    <img src="{{ asset($trans->course->thumbnail) }}" style="width: 170px; height: 100%;"
                                        class="objectfit-cover rounded-start-2" alt="">
                                </div>
                                <div class="col pe-0">
                                    <h6 class="mt-2 fw-bold">{{ $trans->course->title }}</h6>
                                    <p style="font-size: 13px;">{{ $trans->course->category->name }}</p>
                                    <h6 class="fw-bold">IDR {{ number_format($trans->course->price, 0, ',', '.') }}</h6>
                                </div>
                                <div class="col text-end p-1 pe-4">
                                    <ul>
                                        <li><a href={{ route('deleteCartItem', ['id' => $trans->id]) }}>Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-5">
                <div class="total-section">
                    <div class="total-wrapper">
                        <h4>Total:</h4>
                        <h3 class="m-0 fs-1 fw-bold" style="width: 100%">IDR
                            {{ number_format($bracket->total_price ?? 0, 0, ',') }}</h3>
                    </div>
                    <hr class="mt-2">
                    <p style="font-size: 12px; color: rgb(97, 97, 97)">By completing your purchase you agree to these Terms
                        of Services</p>
                    <div class="button-wrapper">
                        @if (!$bracket)
                            <button type="submit" class="btn btn-primary btn-checkout" disabled>Checkout</button>
                        @else
                            <form action={{ route('checkout') }} method="post">
                                @csrf
                                <input type="hidden" name="id_bracket" value={{ $bracket->id ?? -1 }}>
                                <input type="hidden" name="name">
                                <input type="hidden" name="username">
                                <input type="hidden" name="email">
                                @if ($user->phone_number != null)
                                    <input type="hidden" name="phone_number" value={{ $user->phone_number }}>
                                @endif
                                <button id="checkout" type="submit" class="btn btn-primary btn-checkout">Checkout</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <h3 class="fw-bold fs-4 mt-5" style="width: 100%;">You might also like</h3>
        @include('carousel')
    </div>
@endsection
