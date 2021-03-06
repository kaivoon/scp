<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        ul.topnav{
          list-style-type: none;
          margin: 0;
          padding: 0;
          width: 200px;
          background-color: #f1f1f1;
        }
        
        li.b a{
          display: block;
          color: #000;
          padding: 8px 16px;
          text-decoration: none;
          font-style: oblique;
        }
        
        li.b a.active {
          background-color: #4CAF50;
          color: white;
        }
        
        li.b a:hover:not(.active) {
          background-color: #500;
          color: red;
        }
        </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <img src="image/scplogo2.png" class="img-fluid rounded-circle" alt="" width="4%">&nbsp;
        <a class="navbar-brand" href="#">SÇP G@MΞ STØRΞ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{('/index')}}">Home <span class="sr-only">(current)</span></a>
            </li>
           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Category
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{url('/actions')}}">Action</a>
                <a class="dropdown-item" href="{{url('/simulations')}}">Simulator</a>
                <a class="dropdown-item" href="{{url('/horrors')}}">Horror</a>
                <a class="dropdown-item" href="{{url('/survivals')}}">Survival</a>
                <a class="dropdown-item" href="{{url('/openworlds')}}">Open World</a>

              <li class="nav-item">
                <a class="nav-link" href="{{url('/contact')}}">contact</a>
              </li>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" method="post" action="{{ route('search.product') }} ">
          {{ csrf_field() }}
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="searchProduct">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>        

      <div class="container-fluid" style="margin-top: 10px" >
        <div class="row">
            <div class="col-md-2">
                <ul class="list-group">
                    <li class="list-group-item">Action</li>
                    <li class="list-group-item">Simulation</li>
                    <li class="list-group-item">Horror</li>
                    <li class="list-group-item">Survival</li>
                    <li class="list-group-item">OpenWorld</li>
                </ul>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-8">
                <div class="card border-0">
                    <div class="row">
@yield('content')

                    </div>

                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>




 
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>