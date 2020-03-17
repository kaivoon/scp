<!doctype html>
<html lang="en">
        <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function() {
                  'use strict';
                  window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                      form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                          event.preventDefault();
                          event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                      }, false);
                    });
                  }, false);
                })();
        </script>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Shopping cart</title>

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
            color:white;
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
              <img src="image\scplogo2.png" width="30" height="30" class="img-fluid rounded-circle" alt="">
                  SÇP G@MΞ STØRΞ
          </a>
          <form class="form-inline my-2 my-lg-0">
                <a class="one" href="{{('/gift')}}">Eng</a>
                &nbsp;
                <a class="one" href="{{('/giftchn')}}">中文</a>
            </form>
      </nav>
      <div class="container-fluid" style="padding-top:2% ">
          <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            <h1>现在送出：</h1>
              <div class="col-md-10 bg-dark text-white">
                  &nbsp;
                  <p>选择接收您的礼物的好友。</p>
                  <p>注意：此选项还会发送电子邮件消息，以便确保您的好友能及时看到您发送的礼物。</p>
                  <div class="col-md-1"></div>
                  <div class="col-md-8 bg-secondary text-white">
                      <table>
                          <tr>
                              <td>
                                    接收人名字
                              </td>
                          </tr>
                          <tr>
                                <td> <input type="checkbox" name="name" value=""></td>
                                <td>User1</td>
                          </tr>
                          <tr>
                                <td> <input type="checkbox" name="name" value=""></td>
                                <td>User2</td>
                          </tr>
                          <tr>
                                <td> <input type="checkbox" name="name" value=""></td>
                                <td>User3</td>
                          </tr>
                          <tr>
                                <td> <input type="checkbox" name="name" value=""></td>
                                <td>User4</td>
                          </tr>
                          <tr>
                                <td> <input type="checkbox" name="name" value=""></td>
                                <td>User5</td>
                          </tr>
                        </table>
                    </div>
                    <h1>礼物信息</h1>
                        <form action="{{('/payment')}}" class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01">名字</label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="名字" required>
                                 </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-10 mb-3">
                                    <label for="validationCustom01">礼物信息</label>
                                    <div>
                                        <textarea id="validationCustom02" cols="50" rows="10" class="form-control" placeholder="信息" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-danger">继续</button>
                        </form>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>