<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="login.css"/>
  <link rel="stylesheet" type="text/css" href="Content.css"/>  <style>
      .col-sm-2 ul
      {
          margin: 20px auto 20px auto;         
      }
      .col-sm-2 ul li 
      {
          list-style-type: none;
          border: 0.5px solid black;
          padding: 10px 30px;
      }
      .col-sm-2 ul li a 
      {
          color:black;
      }
      .col-sm-2 ul li a:hover
      {
          text-decoration: none;
          color: #3333ff;
      }
      .col-sm-2 ul li:hover
      {
          background: #cccccc;
      }
  </style>
    </head>
    <body>
       <!--Header-->
        <div class="container-fluid" id="nav">            
                <div class="navbar navbar-inverse" id="navbar">
                    <div class="navbar-header">
                <button type="button" class="navbar-toggle">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
                    <div class="collapse navbar-collapse" id="myNav" data-spy="affix" data-offset-top="197">
                <ul class="nav navbar-nav navbar-right" id="right">
                    <li><a href="">Thông báo</a></li>
                    <li><a href="">Trợ giúp</a></li>
                    <li><a href="">Đổi trả hàng</a></li>
                    <li><a onclick="document.getElementById('Jasmine').style.display='block'"/>Đăng nhập</a></li>
                </ul>
                    </div>
            </div>
            
            <div id="Jasmine" class="modal">
                
                <span onclick="document.getElementById('Jasmine').style.display='none'" class="close">&times;</span>
                <div class="container">
                    
                <form class="modal-content animate"> 
                    <table align='center'>
                        <tr>
                            <td><label for="uname">User name: </label></td>
                            <td><input type="text" name="uname" placeholder="Enter Username" required="UserName is required"/></td>
                    </tr>
                    <tr>
                        <td> <label for="pwd">Password: </label></td>
                        <td><input type="password" name="pws" placeholder="Enter Password" required="Password is required"/></td>
                    </tr>
                    <tr>
                        <td colspan='2'><button type="submit">Login</button></td>
                    </tr>
                    <tr>
                        <td><label>
                                <input type="checkbox" name="chk" checked="checked"/>Remember me
                            </label></td>
                    </tr>
                    <tr>
                        <td colspan='2'> <button type="submit" onclick="document.getElementById('Jasmine').style.display='none'">Cancel</button> </td>
                    </tr>
                    <tr>
                        <td colspan='2'>  <span class="pwd">Forgot <a href="#" id="pwd">Password?</a></span></td>
                    </tr>
                    <tr>
                        <td colspan='2'> <span>Dont have an account? <a href="#" id="pwd">Register</a></span></td>
                    </tr>
                    </table>
                </form>
                </div>
            </div>   
            
            <!--Header-->
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-2 container-fluid">
                    <a href="index.php"> <img src="logo.png" width="50%" height="50%"/></a>
                </div>
            <div class="header col-sm-9 container-fluid" style="margin-bottom:50px;">
                <form class="form-inline" style="margin-top: 30px;">
                    <div class="input-group">
                    <input type="text" class="form-control" placeholder="Brands, Products, etc..." size="80" required/>
                <div class="input-group-btn">
                    <button class="btn btn-danger" type="button">Search</button>
                </div>
                </div>
            </form>
            </div>
            </div>
        </div>
       
       <!--Content-->
           <div id="MyCarousel" class="slide carousel" data-ride="carousel">
               <ol class="carousel-indicators">
                   <li data-target="#MyCarousel" data-slide-to="0" class="active"></li>
                   <li data-target="#MyCarousel" data-slide-to="1"></li>
                   <li data-target="#MyCarousel" data-slide-to="2"></li>
                   <li data-target="#MyCarousel" data-slide-to="3"></li>
               </ol>
               
               <div class="carousel-inner" role="listbox">
                   <div class="item active">
                       <img src="images/slide1.jpg">
                   </div>
                   
                   <div class="item">
                       <img src="images/slide2.jpg">
                   </div>
                   
                   <div class="item">
                       <img src="images/slide3.jpg">
                   </div>
                   
                   <div class="item">
                       <img src="images/slide4.jpg">
                   </div>
               </div>
               
               <a class="left carousel-control" href="#MyCarousel" role="button" data-slide="prev" style="background-image: none;color: black;">
                   <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                   <span class="sr-only">Previous</span>
               </a>
               
               <a class="right carousel-control" href="#MyCarousel" role="button" data-slide="next" style="background-image: none;color: black;" >
                   <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                   <span class="sr-only">Next</span>
               </a>
           </div>
     
       <div class="container-fluid">
           <div class="row">
               <div class="col-sm-2">
                   <ul>
                       <li><a href="#">Pants</a></li>
                       <li><a href="">Shirt</a></li>
                       <li><a href="">Underwear</a></li>
                       <li><a href="">Skirt</a></li>
                       <li><a href="">Shoes</a></li>
                   </ul>
               </div>
               <div class="col-sm-10">
                   
               </div>
           </div>
       </div>
       
       <!--Footer-->
       <div class="container-fluid bg-grey" style="color:#3333ff;">
            <h4 class="text-center"><strong>Contact us</strong></h4>
            <div class="row">
                <div class="col-sm-5">
                    <p>Contact us and we'll get back to you within 24 hours.</p>
                    <p><span class="glyphicon glyphicon-map-marker"></span> Nguyen Thi Thap, Viet Nam </p>
                    <p><span class="glyphicon glyphicon-phone"></span> +84 868958827</p>
                    <p><span class="glyphicon glyphicon-envelope"></span> tbtrungdvhn@gmail.com</p> 
                </div>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" placeholder="Name" type="text" required/>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" placeholder="Email" type="email" required/>
                        </div>
                    </div>
                    <textarea class="form-control" placeholder="Comments..." rows="5"></textarea><br>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <button class="btn btn-primary pull-right" type="button">Send</button>
                        </div>
                    </div>
                </div>
            </div>
              <div class="container-fluid">
           <img src="Untitled.jpg" width="100%" height="200px"/>
       </div>
        </div>   
    </body>
</html>
