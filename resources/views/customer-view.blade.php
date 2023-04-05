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
  <body style="padding-top: 8695px">
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
<div class="container my-5">
    <a href="{{route('customer.create')}}">
        {{-- <button class="btn btn-primary d-inline-block m-2 float-right">Add</button> --}}
        <!-- HTML !-->
        <button > 
          ADD NEW USER
                </button>
        <style>
          @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap');

                {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                }
                body{
                    display: flex;  
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    background: rgba(0,123,255,.25);
                    font-family: 'Raleway', sans-serif;
                }

                .danger{
                  padding: 10px 15px;
                  background-color: #050801;
                  color: #03e9f4;
                  font-weight: bold;
                  border: none;
                  border-radius: 2px;
                  letter-spacing: 1px;
                  overflow: hidden;
                  transition: 0.5s;
                  cursor: pointer;
                  border-radius: 5px;
                }

                .danger:hover{
                    background: #03e9f4;
                    color: #050801;
                    box-shadow: 0 0 5px #03e9f4,
                                0 0 25px #03e9f4,
                                0 0 50px #03e9f4,
                                0 0 200px #03e9f4;
                     -webkit-box-reflect:below 1px linear-gradient(transparent, #0005);
                }

                button{
                  padding: 15px 20px;
                  background-color: #050801;
                  color: #03e9f4;
                  font-weight: bold;
                  border: none;
                  border-radius: 3px;
                  letter-spacing: 2px;
                  overflow: hidden;
                  transition: 0.5s;
                  cursor: pointer;
                }

                button:hover{
                    background: #03e9f4;
                    color: #050801;
                    box-shadow: 0 0 5px #03e9f4,
                                0 0 25px #03e9f4,
                                0 0 50px #03e9f4,
                                0 0 200px #03e9f4;
                     -webkit-box-reflect:below 1px linear-gradient(transparent, #0005);
                }
        </style>
    </a>
         <table class="table">
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>GENDER</th>
                    <th>DOB</th>
                    <th>ADDRESS</th>
                    <th>STATE</th>   
                    <th>COUNTRY</th>   
                    <th>STATUS</th>   
                    <th>ACTION</th>   
                </tr>
            </thead>
            <tbody>
                @foreach ($customer as $customer)
                <tr>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>
                        @if($customer->gender == "M")
                        MALE
                        @elseif($customer->gender == "F")
                        FEMALE
                        @elseif($customer->gender == "O")
                        OTHERS
                        @endif
                    </td>
                    <td>{{$customer->dob}}</td>
                    <td>{{$customer->address}}</td>
                    <td>{{$customer->state}}</td>
                    <td>{{$customer->country}}</td>
                    <td>
                        @if($customer->status == "1")
                        <a href="">
                          <span class="badge badge-success">Active</span>
                        </a>
                        @else
                        <a href="">
                          <span class="badge badge-danger">INACTIVE</span>
                        </a>
                        @endif
                    </td>
                    <td>
                        {{-- <button class="delete">DELETE</button> --}}
                        <a href="{{ url('/customer/remove/')}}/{{$customer->customer_id}}"><input class="danger" type="submit" name="remove" value="remove"></a>
                        <a href="{{route('customer.edit', ['id' => $customer->customer_id])}}"><button class="danger" type="submit" name="edit">EDIT</button></a>
                    </td> 
                </tr>
                @endforeach
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
         </table>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>
</html>