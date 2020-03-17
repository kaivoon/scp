<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Thank you</title>
    <style>
        h1{
            font-size: 40px;
            color:white;
        }
        p{
          color:orange;
        }
        body{
          margin:0;
          padding:0;
          background-size:200%;
          background-repeat: no-repeat;
          background-image: url(photo/chgblack.jpg);
        }
        a{
            font-size:20px;
        }
        a.one {
          border-style: solid;
          border-width: medium;
          border-color: red;
          color:white;
          background-color: red;
        }
    </style>
  </head>
  <body onload="myFunction()"> <!--logo-->
      <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="{{('/indexchn')}}">
              <img src="image/scplogo2.png" width="30" height="30" class="img-fluid rounded-circle" alt="">
                  SÇP G@MΞ STØRΞ
        </a>
        <form class="form-inline my-2 my-lg-0">
                <a class="one" href="{{('/paymentcorrect')}}">Eng</a>
                &nbsp;
                <a class="one" href="{{('/paymentcorrectchn')}}">中文</a>
            </form>
    </nav>
    <div class="container-fluid" style="padding-top:2% ">
        <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="border border-dark p-3 mb-2 bg-dark text-white">
                    <span class="border-top-0">
                        <h6>感谢您的购买</h6>
                        <h6>购买成功</h6>
                        <h6>这是您的收据代码： stEAM1784174</h6>
                        <p>*如果购买有问题，可以在询问客户支持时输入此代码</p>
                    </span>
            </div>
        </div>
        </div>     
    </div>
        <footer> 
                <div style="float: left; width:80%">
                    <h2 style="font-size: 1em; color:rgb(247, 243, 243); padding-left: 2%; margin-top: 1% ;">           
                        <P> <img src="image/scplogo2.png" class="img-fluid rounded-circle" alt="" width="3%"> SCP &nbsp;   © 2019 SCP Corporation。保留所有权利。 </P>
                    </h2>
                    <h5 style="font-size: 1em; color:rgb(247, 243, 243); padding-left: 2%">
                        <P>
                                所有商标均为其在美国及其它国家/地区的各自持有者所有。
                                所有的价格均已包含增值税（如适用）。
                        </P> 
                    </h5> 
                </div>
        </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>