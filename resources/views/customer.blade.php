<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style>
        body {
            background-color: rgba(0,123,255,.25);
        }
    </style>
<div class="container-fluid bg-dark">
        <div class="container">
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
        </div>
    </div>
    <form action="{{url('/')}}/customer" method="post" style="margin-top:100px;">
    {{-- <form action="{{$url}}" method="post" style="margin-top:100px;"> --}}
        @csrf
        <div class="container mt-4 card p-3 bg-white">
            <h3 class="text-center text-primary">
                {{$title}}
            </h3>
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="">Name:</label>
                    <input type="text" class="form-control" name="name" id="" value="{{$customer->name}}" />
                    <span class="text-danger">
                        @error('name')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Email:</label>
                    <input type="text" class="form-control" name="email" id="" value="{{$customer->email}}" />
                    <span class="text-danger">
                        @error('email')
                            {{$message}}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="">Password:</label>
                    <input type="Password" class="form-control" name="password" id="" />
                    <span class="text-danger">
                        @error('password')
                            {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Date of birth </label>
                    <input type="date" class="form-control" name="dob" id="" value="{{$customer->dob}}"/>
                    <span class="text-danger">
                        @error('dob')
                            {{$message}}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="">State:</label>
                    <input type="text" class="form-control" name="state" id="" value="{{$customer->state}}" />
                    <span class="text-danger">
                        @error('state')
                            {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">country</label>
                    <input type="text" class="form-control" name="country" id="" value="{{$customer->country}}" />
                    <span class="text-danger">
                        @error('country')
                            {{$message}}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">address:-</label>
                <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3" >{{$customer->address}}</textarea>
                <span class="text-danger">
                    @error('address')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <label>GENDER</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="male" value="M" 
                {{$customer->gender == "M" ? "checked" : ""}}
                />
                <label class="form-check-label " for="flexRadioDefault1">
                    Male
                </label>
                <input class="form-check-input mx-2" type="radio" name="gender" id="female" value="F"
                {{$customer->gender == "F" ? "checked" : ""}}
                />
                <label class="form-check-label mx-4" for="flexRadioDefault2">
                    Female
                </label>
                <input class="form-check-input mx-2" type="radio" name="gender" id="other" value="O"
                {{$customer->gender == "O" ? "checked" : ""}}
                />
                <label class="form-check-label mx-4" for="flexRadioDefault2">
                    OTHERS
                </label>
            </div>
            <button class="btn btn-primary my-3">Sign In/</button>
        </div>
    </form>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</body>

</html>