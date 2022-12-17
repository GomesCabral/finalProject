@extends('template')

@section('title', 'Your Admin Profile')

@section('content')

@if (session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif

@if (session('error'))
<div class="alert alert-error">
    {{ session('error') }}
</div>
@endif

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <h3>Users Table</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Avatar</th>
                <th scope="col">First name</th>
                <th scope="col">Last Name</th>
                <th scope="col">email</th>
                <th scope="col">daily_hours_electricity_use</th>
                <th scope="col">isAdmin</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->avatar}}</td>
                <td>{{$user->firstname}}</td>
                <td>{{$user->lastname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->daily_hours_electricity_use}}</td>
                <td>{{$user->isAdmin == 0 ? "No" : "Yes"}}</td>
                <td scope="col"><a href="/edit-user">edit</a>/<a href="/delete-user">delete</a></td>
            </tr>

            @endforeach


        </tbody>
    </table>

    <h3>Gadgets Table</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">watt</th>
                <th scope="col">picture</th>
                <th scope="col">price</th>
                <th scope="col">seller_id</th>
                <th scope="col">rating</th>
                <th scope="col">serialnumber</th>
                <th scope="col">category</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach($tools as $tool)
            <tr>

                <td>{{$tool->id}}</td>
                <td>{{$tool->name}}</td>
                <td>{{$tool->watt}}</td>
                <td>{{$tool->picture}}</td>
                <td>{{$tool->price}}</td>
                <td scope="col">{{$tool->seller_id}}</td>
                <td scope="col">{{$tool->rating}}</td>
                <td scope="col">{{$tool->serialnumber}}</td>
                <td scope="col">{{$tool->category}}</td>
                <td scope="col"><a href="/edit-tool">edit</a>/<a href="/delete-tool">delete</a></td>
            </tr>

            @endforeach

        </tbody>
    </table>
    <div class="row">
        <div class="col-sm-12">
            <a class="btn btn-info btn-secondary " href="/edit-admin-profile">Edit Profile</a>
        </div>
    </div>
</body>

</html>

@endsection