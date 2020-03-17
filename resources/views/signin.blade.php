<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Signin</title>
   
  
    
    <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }
    
    * {
      box-sizing: border-box;
    }
    
    /* style the container */
    .container {
      position: relative;
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px 0 30px 0;
    } 
    
    /* style inputs and link buttons */
    input,
    .btn {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 4px;
      margin: 5px 0;
      opacity: 0.85;
      display: inline-block;
      font-size: 17px;
      line-height: 20px;
      text-decoration: none; /* remove underline from anchors */
    }
    
    input:hover,
    .btn:hover {
      opacity: 1;
    }
    
    /* add appropriate colors to fb, twitter and google buttons */
    .fb {
      background-color: #3B5998;
      color: white;
    }
    
    .google {
      background-color: #dd4b39;
      color: white;
    }
    
    /* style the submit button */
    input[type=submit] {
      background-color: #4CAF50;
      color: white;
      cursor: pointer;
    }
    
    input[type=submit]:hover {
      background-color: #45a049;
    }
    
    /* Two-column layout */
    .col {
      float: left;
      width: 50%;
      margin: auto;
      padding: 0 50px;
      margin-top: 6px;
    }
    
    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    
    /* vertical line */
    .vl {
      position: absolute;
      left: 50%;
      transform: translate(-50%);
      border: 2px solid #ddd;
      height: 175px;
    }
    
    /* text inside the vertical line */
    .vl-innertext {
      position: absolute;
      top: 50%;
      transform: translate(-50%, -50%);
      background-color: #f1f1f1;
      border: 1px solid #ccc;
      border-radius: 50%;
      padding: 8px 10px;
    }
    
    /* hide some text on medium and large screens */
    .hide-md-lg {
      display: none;
    }
    
    /* bottom container */
    .bottom-container {
      text-align: center;
      background-color: #666;
      border-radius: 0px 0px 4px 4px;
    }
    
    /* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 650px) {
      .col {
        width: 100%;
        margin-top: 0;
      }
      /* hide the vertical line */
      .vl {
        display: none;
      }
      /* show the hidden text on small screens */
      .hide-md-lg {
        display: block;
        text-align: center;
      }
      a.one {
          border-style: solid;
          border-width: medium;
          border-color: red;
          color:white;
          background-color: red;
        }
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
                         

                            <li class="nav-item">
                              <a class="nav-link" href="{{('/contact')}}">contact</a>
                            </li>
                          </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <a class="one" href="{{('/signin')}}">Eng</a>
                            &nbsp;
                            <a class="one" href="{{('/signinchn')}}">中文</a>
                        </form>
                        
                    </nav>

    <div class="container" style="margin-top: 7%">
      <form action="/action_page.php">
        <div class="row">
          <div class="vl">
            <span class="vl-innertext">or</span>
          </div>
    
          <div class="col">
            <a href="https://www.facebook.com/" class="fb btn">
              <i class="fa fa-facebook fa-fw"></i> Login with Facebook
             </a>
            
            <a href="https://accounts.google.com/AccountChooser" class="google btn"><i class="fa fa-google fa-fw">
              </i> Login with Google+
            </a>
          </div>
    
          <div class="col">
            <div class="hide-md-lg">
              <p>Or sign in manually:</p>
            </div>
    
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
          </div>
          
        </div>
      </form>
    </div>
    
    <div class="bottom-container">
      <div class="row">
        <div class="col">
          <a href="#" style="color:white" class="btn">Sign up</a>
        </div>
        <div class="col">
          <a href="#" style="color:white" class="btn">Forgot password?</a>
        </div>
      
    </div>
    

</div>
<div style="margin-top: 2%">
<div class="row">
  <footer style="background-color: rgba(13, 13, 17, 0.959);"class="container-fluid"> 
    <div style="float: left; width:80%">

      <h2 style="font-size: 1em; color:rgb(247, 243, 243); padding-left: 2%; margin-top: 1% ;">               
        <P> <img src="image/scplogo2.png" class="img-fluid rounded-circle" alt="" width="3%"> SCP &nbsp;   © 2019 SCP Corporation. All rights reserved. </P></h2>
      <h5 style="font-size: 1em; color:rgb(247, 243, 243); padding-left: 2%">
          <P>All trademarks are property of their respective owners in the US and other countries. 
          VAT included in all prices where applicable.</P> </h5> </div>
     <div style="float: left; width:20%"> 
  <img src="image/scplogo2.png" alt=" "width="35%";margin-top=0>
  <div style="color: cornsilk;"><P>SÇP G@MΞ STØRΞ</P></div>
</div>
    </div>
    <div style="height:50px;background-color: rgba(13, 13, 17, 0.959);" class="container-fluid"></div>

             
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
  </body>
</html>