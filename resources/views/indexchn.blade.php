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
                background-image: url(image/SCPbackg1.jpg);
                background-size: 150%;
                background-repeat: no-repeat;
                }
            a.one {
                border-style: solid;
                border-width: medium;
                border-color: red;
                color:white;
                background-color: red;
                }
                html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
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
              <a class="nav-link" href="{{('/indexchn')}}">首页 <span class="sr-only">(current)</span></a>
            </li>
           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                类别
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{url('/actions')}}">动作</a>
                <a class="dropdown-item" href="{{url('/simulations')}}">模拟</a>
                <a class="dropdown-item" href="{{url('/horrors')}}">恐怖</a>
                <a class="dropdown-item" href="{{url('/survivals')}}">生存</a>
                <a class="dropdown-item" href="{{url('/openworlds')}}">开放世界</a>

              <li class="nav-item">
                <a class="nav-link" href="{{url('/contactchn')}}">客服</a>
              </li>
            </li>
          </ul>

          <form class="form-inline my-2 my-lg-0">
              <img src="image/signin1.png" class="img-fluid rounded-circle" alt="" width="3%" style="margin-left: 60%;">
              <a class="nav-link" href="signin.html" style="color: white;">登陆 </a>
              <a class="one" href="{{url('/index')}}">Eng</a>
              &nbsp;
              <a class="one" href="{{url('/indexchn')}}">中文</a>
          </form>
        </div>
      </nav>
      
      <div class="container-fluid" style="margin-top: 10px">
        <div class="row">
          <div class="col-md-2">
           
            
          </div>
          
          <div class="col-md-8">
            
       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                
              </ol>

              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="image/mhw-hd-wallpapers-33394-3058683.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="image/death_stranding.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="image/wallpapersden.com_no-mans-sky.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="image/gta-v-wallpaper-9.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/friday 13th.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="image/Farm simulator.jpg" class="d-block w-100" alt="...">
              </div>
               
              </div>
              

              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            </div>
            
            <div class="col-md-2"></div>
          </div>
          <div>&nbsp;</div>

          <img src="image/banner.jpg" alt=" "width="100%";margin-top=0>

      </div>

      <div style="height:50px;background-color:black" class="container-fluid"></div>
      <div style="height:50px;background-color: rgb(46, 72, 85);color: white;" class="container-fluid">   
      <h2>Top Sales</h2>
      
      <div class="row" class="container-fluid" style="background-color: grey;color: #000; margin-top: 0%;">
        <div class="column">
          <div class="card">
            <img src="Action/sekiro/sekiro2.jpg" alt="Jane" style="width:100%">
            <div class="container">
              <h2>隻狼：暗影雙死</h2>
              <p class="title">FormSoftware</p>
              <p>MYR 219.00</p>
             <p><form action="{{url('/sekiro')}}"><button type="submit"class="button">更多</button></form></p>
            </div>
          </div>
        </div>
      
        <div class="column">
          <div class="card">
            <img src="Action/mhw/mhw2.jpg" alt="Mike" style="width:100%">
            <div class="container">
               <h2>怪物猎人 世界</h2>
               <p class="title">CAPCOM Co., Ltd.</p>
               <p>MYR 139.00</p>
              <p><form action="{{url('/mhw')}}"><button type="submit"class="button">更多</button></form></p>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="Action/death/death.jpg" alt="John" style="width:100%">
            <div class="container">
               <h2>死亡搁浅 </h2>
               <p class="title">Kojima Productions</p>
               <p>MYR 239.00</p>
              <p><form action="{{url('/death')}}"><button type="submit"class="button">更多</button></form></p>
            </div>
          </div>
        </div>

     <div style="height:50px;background-color:black" class="container-fluid"></div>
          

          <div style="height:240px;background-color:black" class="container-fluid" style="margin-top: 10px">
          <div class="row">
            <div class="col-md-1">
              <ul class="list-group">
                  
              </ul>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-8">
              <div class="card border-0">
                <div class="row">
                  <div class="col-md-6"><img src="image/gta-v-wallpaper-9.jpg" alt="" class="img-fluid"></div>
                
                  <div class="col-md-6">
                      <h4 class="card-tittle">侠盗猎车手 V</h4>
                      <p> PC 版Grand Theft Auto V 能够以超越 4K 的最高分辨率和 60 帧每秒的帧率，为您呈现屡获殊荣、令人痴迷的游戏世界 .....</p>
                      
                      <div style="height: 50px">
                      <form action="{{url('/gta')}}"><button type="submit"style="float:right" class="btn btn-danger btn-xs">更多</button></form>

                    </div>
                  </div>
                                
              </div>
             </div>
            
            </div>
            <div class="col-md-1"></div>

          

          <div style="height:50px;background-color:black" class="container-fluid"></div>
            <div style="height:10px;background-color:rgb(202, 199, 199)" class="container-fluid"></div>

          <div style="height:240px;background-color:rgb(202, 199, 199)" class="container-fluid" style="margin-top: 10px">
          <div class="row">
            <div class="col-md-1">
              <ul class="list-group">
                  
              </ul>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-8">
              <div class="card border-0">
                <div class="row">
                  <div class="col-md-6"><img src="image/death_stranding.jpg" alt="" class="img-fluid"></div>
                
                  <div class="col-md-6">
                      <h4 class="card-tittle">死亡搁浅</h4>
                      <p> 传奇游戏制作人小岛秀夫带来颠覆传统游戏题材的全新体验 .....</p>
                      
                      <div style="height: 50px">
                        <form action="{{url('/death')}}"><button type="submit"style="float:right" class="btn btn-danger btn-xs">更多</button></form>
                    </div>
                    
                  </div>
                  
                  <div style="height:10px;background-color:rgb(202, 199, 199)" class="container-fluid"></div> 
              </div>
              
             </div>
            
            </div>
            <div class="col-md-1"></div>
          

            <div style="height:50px;background-color:black" class="container-fluid" style="margin-top: 10px"></div>


          <div style="height:240px;background-color:black" class="container-fluid" style="margin-top: 10px">
          <div class="row">
            <div class="col-md-1">
              <ul class="list-group">
                  
              </ul>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-8">
              <div class="card border-0">
                <div class="row">
                  <div class="col-md-6"><img src="image/Farm simulator.jpg" alt="" class="img-fluid"></div>
                
                  <div class="col-md-6">
                      <h4 class="card-tittle">模拟农场19</h4>
                      <p> 前所未有的农耕体验！

                        百万销量的品牌在2018迈出了重大的一步——终极 Farming Simulator （模拟农场）将以全新图形引擎回归，让人着迷的游戏玩法以及身临其境的视效，邀请您体验有史以来最大型的农耕模拟游戏 ......</p>
                      
                      <div style="height: 50px">
                        <form action="{{url('/farming')}}"><button type="submit"style="float:right" class="btn btn-danger btn-xs">更多</button></form>

                    </div>
                  </div>
                                
              </div>
             </div>
            
            </div>
            <div class="col-md-1"></div>


         <div style="height:50px;background-color:black" class="container-fluid" style="margin-top: 10px"></div>
         <div style="height:10px;background-color:rgb(202, 199, 199)" class="container-fluid"></div>

          <div style="height:240px;background-color:rgb(202, 199, 199)" class="container-fluid" style="margin-top: 10px">
          <div class="row">
            <div class="col-md-1">
              <ul class="list-group">
                  
              </ul>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-8">
              <div class="card border-0">
                <div class="row">
                  <div class="col-md-6"><img src="image/friday 13th.jpg" alt="" class="img-fluid"></div>
                
                  <div class="col-md-6">
                      <h4 class="card-tittle">十三号星期五</h4>
                      <p> 13日星期五：游戏是第三人称恐怖的生存游戏，玩家可以扮演青少年辅导员的角色，或者是有史以来第一次担任Jason Voorhees的角色。 您和其他六个不幸的灵魂将竭尽所能逃脱和生存，同时世界上最著名的杀手将您追踪并残酷地屠杀您.....</p>
                      
                      <div style="height: 50px">
                        <form action="{{url('/friday')}}"><button type="submit"style="float:right" class="btn btn-danger btn-xs">更多</button></form>

                    </div>
                    
                  </div>
                  
                  <div style="height:10px;background-color:rgb(202, 199, 199)" class="container-fluid"></div> 
              </div>
              
             </div>
            
            </div>
            <div class="col-md-1"></div>
            
            
          </div>
          
          </div>
          

          <div style="height:10px;background-color:rgb(202, 199, 199)" class="container-fluid"></div>
          <div style="height:50px;background-color:black" class="container-fluid"></div>

          <div style="height:240px;background-color:black" class="container-fluid" style="margin-top: 10px">
            <div class="row">
              <div class="col-md-1">
                <ul class="list-group">
                    
                </ul>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-8">
                <div class="card border-0">
                  <div class="row">
                    <div class="col-md-6"><img src="image/mhw-hd-wallpapers-33394-3058683.jpg" alt="" class="img-fluid"></div>
                  
                    <div class="col-md-6">
                        <h4 class="card-tittle">怪物猎人 世界</h4>
                        <p> 新的生命之地。狩猎, 就是本能! 在系列最新作品「Monster Hunter: World」里, 地形和环境生物, 甚至魔物的生态系统都能被利用, 用一切手段挑战巨大的魔物。在新建构的「Monster Hunter: World」中, 可以体验到你一直期盼的极致猎人生活 .....</p>
                        
                        <div style="height: 50px">
                          <form action="{{url('/mhw')}}"><button type="submit"style="float:right" class="btn btn-danger btn-xs">More</button></form>
  
                      </div>
                    </div>
                                  
                </div>
               </div>
              
              </div>
              <div class="col-md-1"></div>
  
            
  
            <div style="height:50px;background-color:black" class="container-fluid"></div>
          

         
            <footer style="background-color: rgba(13, 13, 17, 0.959);"class="container-fluid"> 
              <div style="float: left; width:80%">
    
                <h2 style="font-size: 1em; color:rgb(247, 243, 243); padding-left: 2%; margin-top: 1% ;">               
                  <P> <img src="image/scplogo2.png" class="img-fluid rounded-circle" alt="" width="3%"> SCP &nbsp;   © 2019 SCP Corporation。 保留所有权利。 </P></h2>
                <h5 style="font-size: 1em; color:rgb(247, 243, 243); padding-left: 2%">
                    <P>所有商标均为其在美国及其它国家/地区的各自持有者所有。所有的价格均已包含增值税（如适用）。</P> </h5> </div>
               <div style="float: left; width:20%"> 
            <img src="image/scplogo2.png" alt=" "width="35%";margin-top=0 style="margin-left: 6%;">
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
  
    </footer>
  </body>
</html>