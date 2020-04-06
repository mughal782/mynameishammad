<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body onload="onloading()">
        
        <div class="container-fluid p-0 m-0" style="overflow: hidden;">
            <div class="container1">
                <div class="row justify-content-between c3">
                    <div class="col-lg-2 col-xl-2 col-md-2 col-sm-12 col-12">
                        <img src="logo-main.png" id="main" width="150px" height="130px" class="m-auto">
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
                        <div class="flex">
                            <div class="flex1">
                                <div>
                                    <div style="background-color: transparent; color:white; cursor: pointer; border: none;"  onclick="select()">
                                       <span id="select1"><img src="unitedstates.png" id="img"> ENGLISH </span><span id="icon"></span>
                                    </div>  
                                        <div id="select">
                                        <div id='option' onclick="selectopt(this.innerHTML);"><img src="unitedstates.png" id="img"> English</div>
                                        <div id='option2' onclick="selectopt(this.innerHTML);"><img src="Russian.png" id="img"> Russian</div>
                                        <div id='option3' onclick="selectopt(this.innerHTML);"><img src="germany.png" id="img"> Germany</div>
                                        <div id="option4" onclick="selectopt(this.innerHTML);"><img src="Turkey.png" id="img"> Turkish</div>
                                  
                                </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a href="#"><img src="Log-in.png" id="icon2" width="40px" height="40px"><span style="margin: 0px 0px;">Log in</span></a>
                                    <p style="position: relative; top: 7px;">/</p>
                                    <a href="#"><img src="signup.png" id="icon2" width="40px" height="40px" ><span style="margin: 0px 0px;">Create Account</span></a>
                                </div>
                            </div>
                           <div style="margin-left: auto;" class="mt-3">
                            <nav class="navbar navbar-expand-md pr-0 m-auto rens" style="background-color: transparent!important;">                                
                                <button class="navbar-toggler" id='buttonnav' data-toggle="collapse" data-target="#collapse" >
                                    <div id="navicon"></div>
                                    <div id='navicon'></div>
                                    <div id='navicon'></div>
                                </button>
                                <div class="collapse navbar-collapse new" id="collapse">
                                    <div class="flexnav">
                                        <ul class="navbar-nav">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">About Us</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Investments</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Affliates</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Rules</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Tesmonial</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Support</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                           </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar">
                <a href="#">PAID OUT</a>
            </div>
            <div class="container2 ">
                <div class="row justify-content-center">
                <div class="formcontainer col-xl-5 col-lg-6 col-md-8 col-sm-10 col-12 p-0">
                    <form class="forminputcontainer " name="registor">
                        <div class="form-caption">REGISTRATION</div>
                        <input type="text" class="form-control" id="formindex1" value='' placeholder="Name" onfocus="this.placeholder=''" onblur="this.placeholder='Name'" required>
                        <input type="text" class="form-control" id="formindex2" value="" placeholder="Username" onfocus="this.placeholder=''" onblur="this.placeholder='Username'" >
                        <input type="email" class="form-control" id="formindex3" value="" placeholder="E-mail" onfocus="this.placeholder=''" onblur="this.placeholder='E-mail'" >
                        <input type="email" class="form-control" id="formindex4" value="" placeholder="Re-type E-mail" onfocus="this.placeholder=''" onblur="this.placeholder='Re-type E-mail'" required>
                        <input type="password" class="form-control" id="formindex5" value="" placeholder="Password" onfocus="this.placeholder=''" onblur="this.placeholder='Password'">
                        <input type="password" class="form-control" id="formindex6" value="" placeholder="Re-type Password" onfocus="this.placeholder=''" onblur="this.placeholder='Re-type Password'" required>
                        <input type="number" class="form-control" min="6" max="6" id="formindex7" value="" pattern=".{6}" placeholder="Financial Code (6-digits" onfocus="this.placeholder=''" required onblur="this.placeholder='Financial Code (6-digits)'">
                        <input type="number" class="form-control" min="6" max="6" id="formindex8" pattern=".{6}" value="" placeholder="Re-type Financial Code (6-digits" onfocus="this.placeholder=''" requiredonblur="this.placeholder='Re-type Financial Code (6-digits)'">
                        <input type="tel" class="form-control" id="formindex9" value="" placeholder="Phone Number" onfocus="this.placeholder=''" onblur="this.placeholder='Phone Number'" required>
                        <input type="text" class="form-control" id="formindex10" value="Your Upline: N/A " placeholder="Your Upline" readonly>        
                        <label class="form-check-label"><input type="checkbox" class="form-check-input" id="formindex11" checked> I agree with <a href="#"><u>Terms & Conditions</u></a></label> 
                    <button type="submit" class="btn btn-primary form-control" id="button" onclick="validate();"  >Submit</button>
                    </form>
                </div>
            </div>
                
              <div class="container2-1">
                  <ul class="list">
                      <li><img src="bitcoin.png"></li>
                      <li><img src="payeer.png"></li>
                      <li><img src="perfectmoney.png"></li>
                      <li><img src="litecoin.png"></li>
                      <li><img src="dash.png"></li>
                      <li><img src="ethereum.png"></li>
                      <li><img src="bitcoincash.png"></li>                     
                  </ul>
              </div>  
            </div>
            <div class="footer px-0">
                <div class="row justify-content-center text p-0">
                    <div class="col-lg-2 col-xl-2 col-md-6 col-sm-6 align-self-center" style="text-align: center;">
                        <img src="logo-main.png" width="150px" height="130px"><br>
                        <a href="#"><img src='googlestore.png' width="150px" height="70px"></a>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">
                        <div class="flex" id="flexfooter">
                            <div class="mt-3 down">
                                <nav class="navbar navbar-expand-sm pr-0" style="background-color: transparent!important;">
                                        <div class="flexnav1">
                                            <ul class="navbar-nav">
                                                <li class="nav-item round" >
                                                    <a href="#" class="nav-link round">HOME</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">ABOUT US</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">INVESTSMENTS</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">AFFLIATES</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">RULES</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">TESMONIAL</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">SUPPORT</a>
                                                </li>
                                            </ul>
                                        </div>
                                    
                                </nav>
                               </div> 
                           <div class="mt-3 down">
                            <nav class="navbar navbar-expand-sm pr-0" style="background-color: transparent!important;">
                                    <div class="flexnav1">
                                        <ul class="navbar-nav">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link round">HOME</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">ABOUT US</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">INVESTSMENTS</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">AFFLIATES</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">RULES</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">TESMONIAL</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">SUPPORT</a>
                                            </li>
                                        </ul>
                                    </div>
                                
                            </nav>
                           </div> <br>
                           
                           <div class="row mt-3 justify-content-between prd">
                               <div class="col-lg-3 col-xl-3 col-md-5 col-sm-4 col-12 ">
                                   <h6>Company Address</h6>
                                   <address>NEW LONDON HOUSE WTC 1 C.V. 6 LONDON STREET, THE CITY, ENGLAND, EC3R 7AD, UNITED KINGDOM</address>
                               </div>
                               <div class="col-lg-3 col-xl-3 col-md-4 col-sm-5 col-12 ">
                                <h6>Technical Address</h6>
                                <address>support@alphatrade.group
                                    </address>
                            </div>
                            <div class="col-lg-2 col-xl-2 col-md-3 col-sm-3 col-12 ">
                                <h6>Phone</h6>
                                <address>+447520626553</address>
                            </div>
                            <div class="col-lg-3 col-xl-3">
                                <div class="d-flex justify-content-between" style="width: 100px; margin: auto!important;">
                                    <img src='youtube.png' height="30px" width="30px">
                                    <img src="facebook.png" height="30px" width="30px">
                                    <img src="twitter.png" height="30px" width="30px">
                                </div>
                            </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="jquery.slim.min.js"></script> 
    <script src="Untitled-1.js"></script>
    <script src="bootstrap.min.js"></script>
      
  <!--  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" type="text/javascript" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
  -->
    </html>
