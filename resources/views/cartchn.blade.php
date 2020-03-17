<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>购物车</title>

    <script>
     function myFunction(){ //add this to bottom to perform the fucntion of click
    var cboxes=document.getElementsByName('item[]');
    var len=cboxes.length;//get number of items
    var price=document.getElementsByName('price[]');
    var quantity=document.getElementsByName('quantity[]');
    var subamount=document.getElementsByName('subamount[]');
    //apply for loop
    for (var i=0;i<len;i++){
      document.getElementsByName('subamount[]')[i].value=parseFloat(price[i].value)
      *parseFloat(quantity[i].value);console.log(len);
      }
    }
    
    function cal(){
      var subamount = document.getElementsByName('subamount[]'); //get all subamount
      var price=document.getElementsByName('price[]'); //add on
      var quantity=document.getElementsByName('quantity[]'); //add on
      var subtotal=0; //define all require calculate items
      var tax=0;
      var total=0;

      var cboxes = document.getElementsByName('item[]');
      var len = cboxes.length;
      for(var i=0;i<len;i++){ //addon recalculate subtotal
        document.getElementsByName('subamount[]')[i].value=parseFloat(price[i].value)*parseFloat(quantity[i].value);
        
      }
      for(var i=0; i<len; i++){
        if(cboxes[i].checked) { //Calculate if checked
          subtotal=parseFloat(subamount[i].value)+parseFloat(subtotal);
        }
      }
      tax=subtotal*0.005; //0.1=10%
      total=subtotal+tax;

      if(document.getElementById("discount").value=="5%"){
        total=total*0.95;}
      document.getElementById('subtotal').value=subtotal.toFixed(2); // 2=decimal place
      document.getElementById('tax').value=tax.toFixed(2);
      document.getElementById('Total').value=total.toFixed(2);
    }

    function checkdiscount(){
      var promocode=document.getElementById("promocode").value;
      if(promocode=="steam"){
        document.getElementById("discount").value="5%";
      }
      else{
        document.getElementById("discount").value="Invalid Code";
      }
    }

    function toggle(source){
      var checkbox=document.querySelectorAll('input[type="checkbox"');
      for(var i=0;i<checkbox.length;i++){
        if(checkbox[i]!=source){
          checkbox[i].checked=source.checked
        }
      }
    }

    </script>
    <style>
        h1{
            font-size: 40px;
        }
        p{
          color:orange;
        }
        body{
          margin:0;
          padding:0;
          background-image:url(photo/chgblack.jpg);
          background-size:200%;
          background-repeat: no-repeat;
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
            <a class="one" href="{{('/cart')}}">Eng</a>
            &nbsp;
            <a class="one" href="{{('/cartchn')}}">中文</a>
        </form>
      </nav>
      <div class="container-fluid" style="padding-top:2% ">
          <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
              <div class="col-md-10 bg-dark text-white">
                  <h1>您的购物车</h1>
              <table>
                    <tr>
                        <td> <input type="checkbox" onclick="toggle(this);"></td>
                        <td >所以游戏</td>
                        <td >价钱</td>
                        <td >数量</td>
                        <td >小计</td>
                    </tr>
                    <tr>
                        <td> <input type="checkbox" name="item[]" value=""></td>
                        <td> <img src="photo\mhw.jpg" alt="" width="30%"> 怪物猎人 世界&nbsp;&nbsp;&nbsp;</td>
                        <td> RM139.00  <input type="hidden" name="price[]" id="price[]" value="139.00"></td>
                        <td> <input type="number" value="1" min="1" max="1" size="4" name="quantity[]" id="quantity[]"> </td>
                        <td> <input type="text" name="subamount[]" size="7" id="subamount[]"> </td>
                    </tr>
                    <tr>
                        <td> <input type="checkbox" name="item[]" value=""></td>
                        <td><img src="photo/nms.jpg" alt="" width="30%">无人深空&nbsp;&nbsp;&nbsp;</td>
                        <td> RM105.00 <input type="hidden" name="price[]" id="price[]" value="105.00"> </td> 
                        <td> <input type="number" value="1" min="1" max="1" size="4" name="quantity[]"  id="quantity[]"></td>
                        <td> <input type="text" name="subamount[]" size="7" id="subamount[]"> </td>
                    </tr>
                    <tr>
                        <td> <input type="checkbox" name="item[]" value=""></td>
                        <td><img src="photo/fs.jpg" alt="" width="30%">模拟农场19&nbsp;&nbsp;&nbsp;</td>
                        <td> RM59.00 <input type="hidden" name="price[]" id="price[]" value="59.00"> </td> 
                        <td> <input type="number" value="1" min="1" max="1" size="4" name="quantity[]"  id="quantity[]"></td>
                        <td> <input type="text" name="subamount[]" size="7" id="subamount[]"> </td>
                    </tr>
                    <tr>
                        <td> <input type="checkbox" name="item[]" value=""></td>
                        <td><img src="photo/13th.jpg" alt="" width="30%">十三号星期五&nbsp;&nbsp;&nbsp;</td>
                        <td> RM39.00 <input type="hidden" name="price[]" id="price[]" value="39.00"> </td> 
                        <td> <input type="number" value="1" min="1" max="1" size="4" name="quantity[]"  id="quantity[]"></td>
                        <td> <input type="text" name="subamount[]" size="7" id="subamount[]"> </td>
                    </tr>
                    <tr>
                        <td> <input type="checkbox" name="item[]" value=""></td>
                        <td><img src="photo/pz.jpg" alt="" width="30%">动物园之星&nbsp;&nbsp;&nbsp;</td>
                        <td> RM129.00 <input type="hidden" name="price[]" id="price[]" value="129.00"> </td> 
                        <td> <input type="number" value="1" min="1" max="1" size="4" name="quantity[]"  id="quantity[]"></td>
                        <td> <input type="text" name="subamount[]" size="7" id="subamount[]"> </td>
                    </tr>
                    <tr>
                        <td> <input type="checkbox" name="item[]" value=""></td>
                        <td><img src="photo/ol.jpg" width="30%">逃生&nbsp;&nbsp;&nbsp;</td>
                        <td> RM39.00 <input type="hidden" name="price[]" id="price[]" value="39.00"> </td> 
                        <td> <input type="number" value="1" min="1" max="1" size="4" name="quantity[]"  id="quantity[]"></td>
                        <td> <input type="text" name="subamount[]" size="7" id="subamount[]"> </td>
                    </tr>
                    <tr>
                        <td> <input type="checkbox" name="item[]" value=""></td>
                        <td><img src="photo/re2.jpg" alt="" width="30%">生化危机2 重制版&nbsp;&nbsp;&nbsp;</td>
                        <td> RM139.00 <input type="hidden" name="price[]" id="price[]" value="139.00"> </td> 
                        <td> <input type="number" value="1" min="1" max="1" size="4" name="quantity[]"  id="quantity[]"></td>
                        <td> <input type="text" name="subamount[]" size="7" id="subamount[]"> </td>
                    </tr>
                    <tr>
                        <td> <input type="checkbox" name="item[]" value=""></td>
                        <td><img src="photo/dont.jpg" alt="" width="30%">饑荒&nbsp;&nbsp;&nbsp;</td>
                        <td> RM23.50 <input type="hidden" name="price[]" id="price[]" value="23.50"> </td> 
                        <td> <input type="number" value="1" min="1" max="1" size="4" name="quantity[]"  id="quantity[]"></td>
                        <td> <input type="text" name="subamount[]" size="7" id="subamount[]"> </td>
                    </tr>
                    <tr>
                        <td> <input type="checkbox" name="item[]" value=""></td>
                        <td><img src="photo/gtav.jpg" alt="" width="30%">侠盗猎车手 V&nbsp;&nbsp;&nbsp;</td>
                        <td> RM119.00 <input type="hidden" name="price[]" id="price[]" value="119.00"> </td> 
                        <td> <input type="number" value="1" min="1" max="1" size="4" name="quantity[]"  id="quantity[]"></td>
                        <td> <input type="text" name="subamount[]" size="7" id="subamount[]"> </td>
                    </tr>
                    <tr>
                      <td> <input type="checkbox" name="item[]" value=""></td>
                      <td><img src="photo/ds.png" alt="" width="30%">死亡搁浅&nbsp;&nbsp;&nbsp;</td>
                      <td> RM239.00 <input type="hidden" name="price[]" id="price[]" value="239.00"> </td> 
                      <td> <input type="number" value="1" min="1" max="1" size="4" name="quantity[]"  id="quantity[]"></td>
                      <td> <input type="text" name="subamount[]" size="7" id="subamount[]"> </td>
                  </tr>
                    <tr>
                        <td colspan="5" style="text-align: right"><input type="text" name="subtotal" id="subtotal" size="8" placeholder="Subtotal"> </td>
                    </tr>
                    <tr>
                        <td colspan="5" style="text-align: right"><input type="text" name="tax" id="tax" size="8" placeholder="Tax 5%"> </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align: right;">促销代码</td>
                        <td> <input type="text" name="promocode" id="promocode" size="7" onchange="checkdiscount()" placeholder="steAm"></td>
                        <td> <input type="text" name="discount" id="discount"  placeholder="Discount" size="8" readonly></td>
                    </tr>
                    <tr>
                      <td colspan="2" style="text-align: right"><p>为自己购买还是作为礼物购买？ 选择一项以继续付款。</p></td>
                    </tr>
                    <tr>
                      <td colspan="2" style="text-align: right"><p>请按计算按钮以显示总计</p></tdcolspan>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align: right"> 总计</td>
                        <td> <input type="text" name="Total" id="Total" size="7"> </td>
                    </tr>
                    <tr>
                        <form>
                            <td colspan="5" style="text-align: right"> 
                            <button type="button" class="btn btn-primary btn-xs" onclick="cal()"> 计算</button>
                        </form>
                        <from>
                          <button type="submit" onclick="window.location.href='{{('/payment')}}'" class="btn btn-danger btn-xs">为自己购买</button>
                          <button type="submit" onclick="window.location.href='{{('/giftchn')}}'" class="btn btn-danger btn-xs">作为礼物购买</button>
                        </from>
                    </td>    
                </tr>
            </table>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>