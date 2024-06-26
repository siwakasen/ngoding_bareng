@extends('navbarAdmin')
@section('content')
    <style>
        .section-footer {
            position: absolute;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .dashboard {
            text-align: left;
            padding: 20px;
        }

        .box-container {
            display: flex;
            justify-content: space-between;
            margin: 20px 0;
        }

        .box {
            width: 30%;
            height: 100px;
            border: 1px solid #0000002c;
            padding: 10px;
            text-align: center;
            color: rgb(255, 255, 255);
            margin: 0 10px;
            border-radius: 7px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .users {
            text-align: left;
            margin-top: 20px;
        }

        tr td {
            max-width: 200px;
        }

        @media(min-width:1000px) {
            tr td {
                min-width: 150px;
            }
        }
    </style>
    <div class="dashboard">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="d-inline">Dashboard</h1>
            <a type="button" href="{{ route('bracketDetails') }}" class="btn btn-primary ml-auto">Transactions</a>
        </div>
        <hr>
        <div class="box-container">
            <div class="box" style="background-image: linear-gradient(to right, #037ae9 , #0160b9);">
                <h2>{{ $online_users }}</h2>
                <p>Users Online</p>
            </div>
            <div class="box" style="background-image: linear-gradient(to right, #0160b9 , #003668);">
                <h2>{{ $logged_users }}</h2>
                <p>Logged User</p>
            </div>
            <div class="box b" style="background-image: linear-gradient(to right, #003668 , #00172c);">
                <h2>@php
                    echo count($users);
                @endphp</h2>
                <p>Registered Users</p>
            </div>
        </div>
        <hr>
        <h2 class="title">Users</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th></th>
                    <th scope="col">Login time</th>
                    <th scope="col">Logout time</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td scope="row">{{ $user['name'] }}</td>
                        <td>{{ $user['username'] }}</td>
                        <td></td>
                        <td>{{ $user['last_login'] }}</td>
                        <td>{{ $user['last_logout'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
