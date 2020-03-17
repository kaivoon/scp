<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>SCP Games Shop</title>
     <style>
     
       
            body{
                margin: 0;
                padding: 0;
                background-color:#353131;
                background-size: 100%;
                background-repeat: no-repeat;
                }
            .button {
                height:420px;
                background-color: rgba(233, 229, 229, 0.877);
                color: black;
                border: 2px solid #e7e7e7;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;

              }
                             
              * {
                box-sizing: border-box;
              }

              /* Position the image container (needed to position the left and right arrows) */
              .container {
                position: relative;
              }

              /* Hide the images by default */
              .mySlides {
                display: none;
              }

              /* Add a pointer when hovering over the thumbnail images */
              .cursor {
                cursor: pointer;
              }

              /* Next & previous buttons */
              .prev,
              .next {
                cursor: pointer;
                position: absolute;
                top: 40%;
                width: auto;
                padding: 16px;
                margin-top: -50px;
                color: white;
                font-weight: bold;
                font-size: 20px;
                border-radius: 0 3px 3px 0;
                user-select: none;
                -webkit-user-select: none;
              }

              /* Position the "next button" to the right */
              .next {
                right: 0;
                border-radius: 3px 0 0 3px;
              }

              /* On hover, add a black background color with a little bit see-through */
              .prev:hover,
              .next:hover {
                background-color: rgba(0, 0, 0, 0.8);
              }

              /* Number text (1/3 etc) */
              .numbertext {
                color: #f2f2f2;
                font-size: 12px;
                padding: 8px 12px;
                position: absolute;
                top: 0;
              }

              /* Container for image text */
              .caption-container {
                text-align: center;
                background-color: #222;
                padding: 2px 16px;
                color: white;
              }

              .row:after {
                content: "";
                display: table;
                clear: both;
              }

              /* Six columns side by side */
              .column {
                float: left;
                width: 16.66%;
              }

              /* Add a transparency effect for thumnbail images */
              .demo {
                opacity: 0.6;
              }

              .active,
              .demo:hover {
                opacity: 1;
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
                <a class="nav-link" href="{{('/contact')}}">contact</a>
              </li>
            </li>
          </ul>

          <form class="form-inline my-2 my-lg-0">
              <img src="image/signinp.png" class="img-fluid rounded-circle" alt="" width="4%" style="margin-left: 30%;">
              <a class="nav-link" href="signin.html" style="color: white;">Sign in </a>
              <a class="one" href="{{('/index')}}">Eng</a>
              &nbsp;
              <a class="one" href="{{('/indexchn')}}">中文</a>
          </form>
        </div>
      </nav>
      
      <a href="{{('/index')}}" style="color: black; font-size: small;">&#8918 back to store </a>

           
            <div class="container-fluid" style="margin-top:1%"></div>
                <div class="row">
            <div class="col-md-2"></div>

        <!--slideshow--> 
        
            <div class="col-md-8">
              <strong><h3 style= "text-align: center; font-size: xx-large; color: whitesmoke; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">~ OpenWorld Games ~</h3></strong>
              <h6 style="font-size: small; color: #969797; text-align: center;">Browse the newest, top selling and discounted OpenWorld products on SCP Games Shop</h6>

              <!-- Container for the image gallery -->
              <div class="container">

                  <!-- Full-width images with number text -->
                  <div class="mySlides">
                    <div class="numbertext">1 / 3</div>
                    <a href="{{('/farming')}}">
                      <img src="Openworld/farming/farming1.jpg" style="width:100%">
                    </a>
                  </div>
                
                  <div class="mySlides">
                    <div class="numbertext">2 / 3</div>
                    <a href="{{('/gta')}}">
                      <img src="Openworld/gta5/gta1.jpg" style="width:100%">
                    </a>
                  </div>
                
                  <div class="mySlides">
                    <div class="numbertext">3 / 3</div>
                    <a href="{{('/mhw')}}">
                      <img src="Openworld/mhw/mhw1.jpg" style="width:100%">
                    </a>
                  </div>
                
                  <!-- Next and previous buttons -->
                  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                  <a class="next" onclick="plusSlides(1)">&#10095;</a>
                
                  <!-- Image text -->
                  <div class="caption-container">
                    <p id="caption"></p>
                  </div>
                
                  <!-- Thumbnail images -->
                  <div style="margin-left: 33%;" >
                    <div class="column">
                      <img class="demo cursor" src="Openworld/farming/farming1.jpg  " style="width:100%" onclick="currentSlide(1)" alt="FARMING SIMULATOR">
                    </div>
                    <div class="column">
                      <img class="demo cursor" src="Openworld/gta5/gta1.jpg" style="width:100%" onclick="currentSlide(2)" alt="GRAND THEFT AUTO v">
                    </div>
                    <div class="column">
                      <img class="demo cursor" src="Openworld/mhw/mhw1.jpg" style="width:100%" onclick="currentSlide(3)" alt="MOSTER HUNTER WORLD">
                    </div>
                  </div>
                </div>
              
          </div> 
          
          <script>
              var slideIndex = 1;
                  showSlides(slideIndex);

                  // Next/previous controls
                  function plusSlides(n) {
                    showSlides(slideIndex += n);
                  }

                  // Thumbnail image controls
                  function currentSlide(n) {
                    showSlides(slideIndex = n);
                  }

                  function showSlides(n) {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("demo");
                    var captionText = document.getElementById("caption");
                    if (n > slides.length) {slideIndex = 1}
                    if (n < 1) {slideIndex = slides.length}
                    for (i = 0; i < slides.length; i++) {
                      slides[i].style.display = "none";
                    }
                    for (i = 0; i < dots.length; i++) {
                      dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex-1].style.display = "block";
                    dots[slideIndex-1].className += " active";
                    captionText.innerHTML = dots[slideIndex-1].alt;
                  }
          </script>

            <div class="col-md-2"></div>

           

            <!--part1-->
            <div class="col-md-2"></div>

            <div class="col-md-3">
                <p style="color: white; font-size: small; font-weight: 1000;">Games List</p>
                <div class="border border-dark" style="background-color: #353131;">
                      <img src="Openworld/farming/farming1.jpg" style="width:300px">
                  </div>  
                
            </div>
            
            <div class="col-md-4">
              <div class="card" style="background-color: #353131; margin-top: 35px;" >&nbsp;
              <p style="color: blanchedalmond; font-weight: 800;">Farming Simulator 19</p>
              <p> <h6 style="font-size: small; color: #969797;"> OpenWorld, Multiplayer, Survival</h6></p>
              <a href="{{('/farming')}}">
              <button style="background-color: #8FB4F4; font-weight: 800; margin-left: 60%; margin-top: 5%; font-size: small; width: 40%;">MORE</button>
              </a>
            </div>
          </div>
            <div class="col-md-3"></div>
          <!--end-->

          <!--part2-->
            <div class="col-md-2"></div>

            <div class="col-md-3">
                <div class="border border-dark" style="background-color: #353131; margin-top: 35px;">
                      <img src="Openworld/gta5/gta1.jpg" style="width:300px">
                  </div>  
                
            </div>
            
            <div class="col-md-4">
              <div class="card" style="background-color: #353131; margin-top: 35px;" >&nbsp;
              <p style="color: blanchedalmond; font-weight: 800;">Grand Theft Auto V</p>
              <p> <h6 style="font-size: small; color: #969797;"> OpenWorld, Multiplayer, Survival</h6></p>
              <a href="{{('/gta')}}">
              <button style="background-color: #8FB4F4; font-weight: 800; margin-left: 60%; margin-top: 5%; font-size: small; width: 40%;">MORE</button>
              </a>
            </div>
          </div>
            <div class="col-md-3"></div>
            <!--end-->

            <!--part3-->
            <div class="col-md-2"></div>

            <div class="col-md-3">
                <div class="border border-dark" style="background-color: #353131; margin-top: 35px;">
                      <img src="Openworld/mhw/mhw2.jpg" style="width:300px">
                  </div>  
                
            </div>
            
            <div class="col-md-4">
              <div class="card" style="background-color: #353131; margin-top: 35px;" >&nbsp;
              <p style="color: blanchedalmond; font-weight: 800;">Monster Hunter World</p>
              <p> <h6 style="font-size: small; color: #969797;"> OpenWorld, Multiplayer, Survival</h6></p>
              <a href="{{('/mhw')}}">
              <button style="background-color: #8FB4F4; font-weight: 800; margin-left: 60%; margin-top: 5%; font-size: small; width: 40%;">MORE</button>
              </a>
            </div>
          </div>
            <div class="col-md-3"></div>

            <!--end-->


            &nbsp;<footer style="background-color: rgba(13, 13, 17, 0.959);"class="container-fluid"> 
                <div style="float: left; width:80%">
            
                  <h2 style="font-size: 1em; color:rgb(247, 243, 243); padding-left: 2%; margin-top: 1% ;">               
                    <P> <img src="image/scplogo2.png" class="img-fluid rounded-circle" alt="" width="3%"> SCP &nbsp;   © 2019 SCP Corporation. All rights reserved. </P></h2>
                  <h5 style="font-size: 1em; color:rgb(247, 243, 243); padding-left: 2%">
                      <P>All trademarks are property of their respective owners in the US and other countries. 
                      VAT included in all prices where applicable.</P> </h5> </div>
                      <div style="float: left; width:20%"> 
                        <img src="image/scplogo2.png" alt=" "width="30%";margin-top=0 style="margin-left: 6%;">
                        <div style="color: cornsilk;"><P>SÇP G@MΞ STØRΞ</P></div>
                      </div>
        
              </footer>



      
      
    
      
 
           
             
            
                          
                               
                    

    
                  
                  
                      


             
  
       




       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>