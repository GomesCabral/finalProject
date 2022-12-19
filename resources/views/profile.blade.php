@extends('template')

@section('title', 'Your Profile')

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
    <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body style="background-image: url()";>
    <div class="container">
        <div class="main-body">


            <!-- /Breadcrumb -->

            <div class="row gutters-sm align-items-center flex-column ">
                <div class="col-md-4 mb-3 ">
                    <div class="card " style="background-color: #f8faf6">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                    class="rounded-circle" width="150">

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">First Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$user->firstname}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Last Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                {{$user->lastname}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                {{$user->email}}
                                </div>
                            </div>
                            <hr>


                            <div class="row">
                                <div class="col-sm-12">
                                    <a class="btn btn-info" href="/edit-profile" style="background-color: #7DB748">Edit Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>

@endsection