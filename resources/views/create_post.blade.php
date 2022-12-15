@extends('template')

@section('title', 'Create Post')

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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Add New Post</p>
      
                      <form method="POST" class="mx-1 mx-md-4">
                        @csrf
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input name="title" type="text" id="form3Example1c" class="form-control" placeholder="Title of your Post (optional)"/>
                          
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <textarea name="text" id="form3Example3c" class="form-control" placeholder="your text here"></textarea>
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input name="nameoftool" type="text" id="form3Example4c" class="form-control" placeholder="Name of the Tool"/>
                           </div>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input name="linktotool" type="text" id="form3Example4c" class="form-control" placeholder="Link to the Tool"/>
                           </div>
                        </div>

                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <input type="submit" class="btn btn-primary btn-lg" value="Post"></button>
                        </div>
      
                      </form>
      
                    </div>

                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                        class="img-fluid" alt="Sample image">
                        <img src="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>
<!--
<form method="POST">
    @csrf
    <label for="name">Name of Tool</label><br>
    <input name="name" value="ashavhasvhs" /><br>
    <label for="watt">Watt</label><br>
    <input name="watt" value="1000"><br>
    <label for="picture">picture</label><br>
    <input name="picture" value="tool.jpg"><br>
    <label for="price">price</label><br>
    <input name="price" value="10"><br>
    <label for="seller">seller id</label><br>
    <input name="seller" value="1"><br>
    <label for="rating">rating</label><br>
    <input name="rating" value="5"><br>
    <label for="serialnumber">serialnumber</label><br>
    <input name="serialnumber" value="1"><br>
    <input type="submit" value="insert tool" />
</form>
-->

@endsection