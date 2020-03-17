<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Contact</title>
    <style>
      a.one {
          border-style: solid;
          border-width: medium;
          border-color: red;
          color:white;
          background-color: red;
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
              <a class="nav-link" href="{{url('/indexchn')}}">首页 <span class="sr-only">(current)</span></a>
            </li>
              
              <li class="nav-item">
                <a class="nav-link" href="{{url('/contactchn')}}">客服</a>
              </li>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <a class="one" href="{{url('/contact')}}">Eng</a>
            &nbsp;
            <a class="one" href="{{url('/contactchn')}}">中文</a>
        </form>
        </div>
      </nav>
        
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-6">
                  <h3>SÇP G@MΞ STØRΞ 客服</h3>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="text" class="form-control" placeholder="用户名" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                    <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">@</span>
                    </div>
                    <input type="text" class="form-control" placeholder="电子邮件" aria-label="Username" aria-describedby="basic-addon1">
                </div>
             <div class="input-group mb-3">
                    <div class="input-group-prepend">
                   <span class="input-group-text" id="basic-addon1">@</span>
                    </div>
                    <input type="text" class="form-control" placeholder="联络号码" aria-label="Username" aria-describedby="basic-addon1">
                
                </div>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01">Reason</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                          <option selected>选择...</option>
                          <option value="1">付款问题</option>
                          <option value="2">其他</option>
                        </select>
                      </div>
                      <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">内容</span>
                            </div>
                            <textarea class="form-control" aria-label="Leave your message"></textarea>
                          </div>
                          <form action="{{url('/contactcorrect')}}"><button style="margin: 10px 0px" class="btn btn-xs btn-primary">OK</button>     
            </div>
          
    
      <div class="col-md-6" style="margin-top: 15px; text-align: center;" >
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.814344154008!2d153.10171741506107!3d-27.66121518281098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b914726dfabcb97%3A0x9ff794ae99671e92!2sSCP%20Foundation!5e0!3m2!1szh-CN!2smy!4v1575439569669!5m2!1szh-CN!2smy" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
      </div>
      <div>&nbsp;</div>
      <div class="row">
        <footer style="background-color: rgba(13, 13, 17, 0.959);"class="container-fluid"> 
          <div style="float: left; width:80%">

            <h2 style="font-size: 1em; color:rgb(247, 243, 243); padding-left: 2%; margin-top: 1% ;">               
              <P> <img src="image/scplogo2.png" class="img-fluid rounded-circle" alt="" width="3%"> SCP &nbsp;   © 2019 SCP Corporation。保留所有权利。 </P></h2>
            <h5 style="font-size: 1em; color:rgb(247, 243, 243); padding-left: 2%">
                <P>所有商标均为其在美国及其它国家/地区的各自持有者所有。所有的价格均已包含增值税（如适用）。</P> </h5> </div>
           <div style="float: left; width:20%"> 
        <img src="image/scplogo2.png" alt=" "width="35%";margin-top=0>
        <div style="color: cornsilk;"><P>SÇP G@MΞ STØRΞ</P></div>
      </div>
          </div>
      </div>
    </div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>