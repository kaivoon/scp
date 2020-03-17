</html>
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

                function isNumber(event){
                  var keycode=event.keyCode;
                  if(keycode>47 && keycode<59)
                  {
                    return true;
                  }
                  return false;
                }
          </script>
                
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Purchase</title>
    <style>
        body{
          margin:0;
          padding:0;
          background-image:url(photo/chgblack.jpg);
          background-size:200%;
          background-repeat: no-repeat;
        }
        
      </style>
  </head>
  <body>
    
    <!--title-->
    <nav class="navbar navbar-dark bg-dark">
            <span class="navbar-text">
                    Payment Info -> Confirm + Purchase
            </span>
        <a class="navbar-brand" href="{{('/index')}}">
            <img src="image/scplogo2.png" width="30" height="30" class="img-fluid rounded-circle" alt="">
                SÇP G@MΞ STØRΞ
        </a>
    </nav>
        <div class="container-fluid" style="margin-top:10px">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <div class="card border-0">
                        <div class="row p-3 mb-2 bg-dark text-white">
                          <form class="needs-validation" action="{{('/paymentcorrect')}}" novalidate>
                               <p class="font-weight-bold">Payment method</p>
                               <p>Please select a payment method</p>
                                <select class="form-control">
                                    <option>Choose</option>
                                    <option>Visa</option>
                                    <option>Master card</option>
                                </select>
                               <label>Card Number</label>
                               <input type="text" class="form-control" pattern="[0-9]*"/ id="validationCustom05" placeholder="4578539865407341" maxlength="16" value="" onkeypress="return isNumber(event)" required>
                               <div class="form-group">
                                    <label for="">Expiration date and security code</label>
                                    <div class="form-inline">
                                        <select class="form-control">
                                            <option>Month</option>
                                            <option value="1">01</option>
                                            <option value="2">02</option>
                                            <option value="3">03</option>
                                            <option value="4">04</option>
                                            <option value="5">05</option>
                                            <option value="6">06</option>
                                            <option value="7">07</option>
                                            <option value="8">08</option>
                                            <option value="9">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                        &nbsp;
                                        <select class="form-control">
                                                <option>Year</option>
                                                <option value="1">2020</option>
                                                <option value="2">2021</option>
                                                <option value="3">2022</option>
                                                <option value="4">2023</option>
                                                <option value="5">2024</option>
                                                <option value="6">2025</option>
                                                <option value="7">2026</option>
                                                <option value="8">2027</option>
                                                <option value="9">2028</option>
                                                <option value="10">2029</option>
                                                <option value="11">2030</option>
                                                <option value="12">2031</option>
                                            </select>
                                        &nbsp;
                                        <input type="text" class="form-control" pattern="[0-9]*"/ id="validationCustom05" placeholder="csv" maxlength="3" value="" onkeypress="return isNumber(event)" required>
                                    </div>
        
                                    &nbsp;
                                    <p class="font-weight-bold">Building information</p>
                                    
                                        <div class="form-row">
                                          <div class="col-md-4 mb-3">
                                            <label for="Firstname">First name</label>
                                            <input type="text" class="form-control" id="Firstname" placeholder="First name" value="" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid first name.
                                            </div>
                                          </div>
                                          <div class="col-md-4 mb-3">
                                            <label for="Lastname">Last name</label>
                                            <input type="text" class="form-control" id="Lastname" placeholder="Last name" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid last name.
                                            </div>
                                          </div>
                                          <div class="col-md-4 mb-3">
                                            <label for="Address">Address</label>
                                            <div class="input-group">
                                            <input type="text" class="form-control" id="Address" placeholder="Address" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid address.
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-row">
                                          <div class="col-md-6 mb-3">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control" id="city" placeholder="City" required>
                                            <div class="invalid-feedback">
                                              Please provide a valid city.
                                            </div>
                                          </div>
                                          <div class="col-md-3 mb-3">
                                            <label for="state">State</label>
                                            <input type="text" class="form-control" id="state" placeholder="State" required>
                                            <div class="invalid-feedback">
                                              Please provide a valid state.
                                            </div>
                                          </div>
                                          <div class="col-md-3 mb-3">
                                            <label for="zip">Zip</label>
                                            <input type="text" class="form-control" id="zip" placeholder="Zip" required>
                                            <div class="invalid-feedback">
                                              Please provide a valid zip.
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                            <label class="form-check-label" for="invalidCheck">
                                              Agree to terms and conditions
                                            </label>
                                            <div class="invalid-feedback">
                                              You must agree before submitting.
                                            </div>
                                          </div>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Continue</button>
                                      </form>
                                </div>
                               </div>
                           
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-3">
                  <div class="border border-dark p-3 mb-2 bg-dark text-white">
                  <span class="border-top-0">
                      <p class="font-weight-bold">&nbsp;Payment method</p>
                      <p>We accept the following secure payment methods:</p>
                      <img src="photo\visa.svg" alt="" class="img-fluid" width="20%">
                      <img src="photo\mc.jpg" alt="" class="img-fluid" width="20%">
                  </span>
                  </div>
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