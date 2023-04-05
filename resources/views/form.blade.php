<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <style>
      body {
          background-color: rgba(0,123,255,.25);
      }
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">LaLiga</a>
          <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/register')}}">Register <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/customer')}}">Customer <span class="sr-only">(current)</span></a>
              </li>
            </ul>
              <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="text" placeholder="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
          </div>
    </nav>
    
    <form action="{{url('/register')}}" method="post" style="margin-top:100px;">
        @csrf
        <div class = "container">   
            <x-input type="text" name="name" label="Name" placeholder="Name"/>
            <x-input type="email" name="email" label="Email" placeholder="Email"/>
            <x-input type="password" name="password" label="Password" placeholder="Password"/>
            <button class="btn btn-primary" type="submit">Submit</button>
            <!-- <small id = "helpId" class = "form-text text-muted">Help text</small> -->
        </div>
      </form>
    </div>
  </body>
</html>