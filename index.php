<?php 
session_start();

function prob($x, $max, $min){
   
    return ( ( ( ( (3145 - $x) / 3145 ) * $max) - $min)  / ($max - $min) ) * 100;
   
}

if(isset($_POST['login'])){
    $post = "regNo=".$_POST['regno']."&psswd=".$_POST['passwd'];
            
    $ch = curl_init('http://myffcs.in:8080/campus/vellore/login');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

    // execute!
    $response = curl_exec($ch);
    echo $response;
    
    $json = json_decode($response);
    echo $json["status"];
    if($json["status"]["code"] == 0){
        echo "1";
    }else{
        $error = 1;
    }
    
    curl_close($ch); 
    exit();
}else if(isset($_POST['submit3'])){
    include_once './group3.php';
}else if(isset($_POST['submit2'])){
    include_once './group2.php';
}else if(isset($_POST['submit1'])){
    include_once './group1.php';
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title> Room Availability Predictor </title>
        <link rel="icon" type="image/gif" href="favicon.png" />

        <!-- Bootstrap Core CSS -->
        <link href="css/bp.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <!--<link href="css/bloghome.css" rel="stylesheet">-->

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:600" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,500' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto:600,400,300'    rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
        
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <style>
            img {
                object-fit: cover;
            }
            .img-thumbnail {
                height: 250px;
                width: 250px;
            }
            .topBarContainer{

                color: #fff;
                margin: 0px;
                background-color:  #3f51b5;
                text-align: center;

            }
            
            .btn-info,  .btn-info:focus, .btn-info.focus, .btn-info:active, .btn-info.active, .open > .btn-info.dropdown-toggle {
                background-color:  #3f51b5;
            }
            .btn-info:hover{
                background-color: rgb(38, 59, 181);
            }

            .container .fa{
                color:  #3f51b5;
            }
            .topBarText{
                padding-top: 40px;
                padding-bottom: 20px;
                font-family: 'Oswald', sans-serif;
                //padding-left: 100px;
                vertical-align: middle;
                height: 100%;
                font-size: 40px;

            }
            .topBarText a, .topBarText a:hover, .topBarText a:focus, .topBarText a:visited{
                color: #fff;
            }
            .topBarElement{
            }

            .topBarContainer .fa {
                color: #9C27B0;
            }
            body{
                background-color: #f5f5f5;
            }
            .card{
                border: 1px rgba(0, 0, 0, 0.15) solid;
                padding-top: 30px;
                box-shadow: 2px 3px 3px rgba(0, 0, 0, 0.25);
            }
            .navbar-toggle {
                border: none;
                background: transparent !important;
              }
              .navbar-toggle:hover {
                background: transparent !important;
              }
              .navbar-toggle .icon-bar {
                width: 22px;
                transition: all 0.2s;
              }
              .navbar-toggle .top-bar {
                transform: rotate(45deg);
                transform-origin: 10% 10%;
              }
              .navbar-toggle .middle-bar {
                opacity: 0;
              }
              .navbar-toggle .bottom-bar {
                transform: rotate(-45deg);
                transform-origin: 10% 90%;
              }
              .navbar-toggle.collapsed .top-bar {
                transform: rotate(0);
              }
              .navbar-toggle.collapsed .middle-bar {
                opacity: 1;
              }
              .navbar-toggle.collapsed .bottom-bar {
                transform: rotate(0);
              }


              .navbar-inverse .navbar-nav > .open > a, .navbar-inverse .navbar-nav > .open > a:hover, .navbar-inverse .navbar-nav > .open > a:focus {
                  background-color: rgba(78, 78, 78, 0.1);
                  color: #fff;
              }
              .container .fa{
                  font-size: 30px; padding: 10px;
              }

        </style>
        
    </head>

    <body>
    	
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=173496979681010";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        	
        

        <div class="topBarContainer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="topBarText topBarElement " style="text-align: center;"> <a href="/">Room Availability Predictor</a>
                            <span class="topBarText topBarElement" style="text-align: center; color:rgba(0,0,0,0.5); font-size: 25px;"> <a href="/">www.findroom.ml</a></span></div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-inverse " role="navigation" style="border-top: 0px; background-color: rgba(0,0,0,0)">

                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar top-bar"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav pull-right navbar-nav" >
                            <li style="background-color: rgba(0,0,0,0.25); margin:1px;">
                                <a href="http://139.59.24.111/index.php?upload=1">Upload Room Status (Photo) </a>
                            </li>
                            <li style="background-color: rgba(0,0,0,0.25); margin:1px;">
                                <a href="http://139.59.24.111/Methodology.pdf">Methodology </a>
                            </li >
                            <li style="background-color: rgba(0,0,0,0.25); margin:1px;">
                                <a href="http://139.59.24.111/index.php?about=1">About Us </a>
                            </li>
                            
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>
        </div>   
        
       
        
        
        <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 " >
                <?php
                if(isset($_POST['submit1']) ||isset($_POST['submit2']) ){
                ?>
                <a href="https://docs.google.com/forms/d/1gQYe7SawIWZ0FiV2alX7UrbjsLqm-1hOUC9ecwfe2DE/viewform?edit_requested=true" class="btn btn-info" role="button">
                        Help us by giving your valuable feedback preferences  </a>
                
                 &nbsp; &nbsp; &nbsp;<span  class="fb-like pull-right" data-href="https://www.facebook.com/vitupdates/" data-layout="standard" data-action="like" data-size="large" data-show-faces="false" data-share="true"></span>
                <br>    
        
                <?php
                
                }
                
                
                if(isset($_REQUEST['upload'])){ ?> 
                    <div class="row text-center " id="userList">
                        <h3 class="message hidden text-center col-lg-12 "> <b> Uploaded Successfully </b></h3><br><br>
                    </div>
                    <iframe class="col-lg-offset-3 col-lg-6" style="border:0px; height:500px" src="./uploadImg/viewUpload.html" scrollbar="0"></frame>
                    
                <?php
                }
                else if(isset($_REQUEST['about'])){ ?>
                <h1>About Us</h1>
                <hr>
                <div class="row text-center" id="userList">

                    <h3 class="text-center col-lg-12 "> <b> Algorithm Designer </b></h3><br><br>
                      <div class="col-lg-6"> <a href="">
                          <img src="http://139.59.24.111/img/1.jpg" class="img-thumbnail img-responsive img-circle"><br>

                          <strong> Shreejit Verma </strong><br> </a>
                            <a href="https://www.facebook.com/shreejit.verma" target="_blank">
                            <i class="fa fa-facebook" aria-hidden="true" ></i>
                          </a>
                          <a href="https://www.linkedin.com/in/shreejitverma" target="_blank">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                          </a>
                          <a href="https://www.github.com/shreejitverma" target="_blank">
                            <i class="fa fa-github" aria-hidden="true"></i>
                          </a>
                      </div>
                       <br><br>

                      <div class="col-lg-6"> <a href="">
                          <img src="http://139.59.24.111/img/3.jpg" class="img-thumbnail img-responsive img-circle"><br>

                          <strong> Divyanshu Bhati </strong><br></a>
<!--                          <a href="">
                              <i class="fa fa-tumblr-square" aria-hidden="true"></i>
                          </a>
                          <a href="">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                          </a>
                          <a href="">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                          </a>
                          <a href="">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                          </a>
                          <a href="">
                            <i class="fa fa-github" aria-hidden="true"></i>
                          </a>-->
                      </div>
                      <br><br>
                      <br><br>

                      <h3 class="text-center col-lg-12"><b>Website Designer</b></h3 >
                      <div class="col-lg-6"> <a href="">
                          <img src="http://139.59.24.111/img/2.jpg" class="img-thumbnail img-responsive img-circle"><br>

                          <strong> Devendra Parhate </strong><br> </a>                       
                          
                          <a href="https://www.facebook.com/devendraparhate" target="_blank">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                          </a>

                          <a href="https://www.linkedin.com/in/devendra-parhate-48655322/" target="_blank">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                          </a>
                          <a href="https://github.com/devendraap/" target="_blank">
                            <i class="fa fa-github" aria-hidden="true"></i>
                          </a>

                      </div>
                       <br><br>

                      <div class="col-lg-6"> <a href="">
                          <img src="http://139.59.24.111/img/1.jpg" class="img-thumbnail img-responsive img-circle"><br>

                          <strong> Shreejit Veerma </strong><br> </a>
                            <a href="https://www.facebook.com/shreejit.verma" target="_blank">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                          </a>
                          <a href="https://www.linkedin.com/in/shreejitverma" target="_blank">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                          </a>
                          <a href="https://www.github.com/shreejitverma" target="_blank">
                            <i class="fa fa-github" aria-hidden="true"></i>
                          </a>
                          
                      </div>
                      <br><br>
                      <br><br>
                      <br><br>
                      
                      <h3 class="text-center col-lg-12"><b> Writer</b> </h3 >
                    <br>
                    <div class="col-lg-12"> <a href="">
                        <img src="http://139.59.24.111/img/5.jpg" class="img-thumbnail img-responsive img-circle"><br>
                        <strong> Shubham Jain<br> </strong><br></a>


                          <a href="https://bit.ly/bitlink" target="_blank">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                          </a>
                          <a href="https://bit.ly/shubhgit" target="_blank">
                            <i class="fa fa-github" aria-hidden="true"></i>
                          </a>
                          <a href="https://bit.ly/bittumb" target="_blank">
                              <i class="fa fa-tumblr-square" aria-hidden="true"></i>
                          </a>

                          <a href="https://bit.ly/bitinsta" target="_blank">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                          </a>
                    </div> 
                    <br><br>
                      <br><br>

                    <h3 class="text-center col-lg-12"><b>Desginer </b></h3 >
                    
                    <br>
                    <div class="col-lg-12"> <a href="">
                        <img src="http://139.59.24.111/img/4.jpg" class="img-thumbnail img-responsive img-circle"><br>
                        <strong> Mayank Bansal<br> </strong><br></a>
                                              </div> 
                    <br><br>
                      <br><br>


                      

              </div>    
                    
                
                <?php }
                else if (0 & isset($_SESSION['loggedin'])) { ?>
                
                <div class="col-lg-6 col-lg-offset-3 panel card">
                    
                    <h1 style="text-align:center;" class="blog">Sign In <i class="fa fa fa-sign-in"> </i> </h1>
                    <div class="text-center" style="color:#777;">(Enter FFCS login details) </div>
                    <hr>
                    
                    <form action="" method="post" >
                        <br> 
                        <div class="form-group">
                            <label for="title"><i class="fa fa-drivers-license"></i>&nbsp;Registration Number:</label>
                            <input type="text" class="form-control" name="regno" placeholder="e.g: 14BCE0546">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="title">  &nbsp;Password</label>
                            <input type="password" class="form-control" name="passwd">
                        </div>
                        <div class="form-group"> 
                            <br>
                            <input type="submit" class="btn btn-info btn-block btn-success" name="login" value="Login">
                        </div>
                    </form>
                    
                    <br>
                </div>
                
                <?php   
                } else if(isset($_POST['submit1'])){ 
                    include_once './g1view.php'; 
                    
                } else if(isset($_POST['submit2'])){ 
                    include_once './g2view.php'; 
                    
                } else if(isset($_POST['submit3'])){ 
                    include_once './g3view.php'; 
                    
                }else if(!isset($error)){ ?>
                <div class="col-lg-6 col-lg-offset-3 panel card">
                    <h1 style="text-align:center;"> <i class="fa fa fa-certificate"> </i> Enter your NCGPA rank:  </h1>
                    <p style="text-align:center;" > <i class="fa fa fa-certificate"> </i> (Now available  only for Group 1, Group 2 and Group 3)   </p>
                    <p style="text-align:center;" >Last updated at 10:18:00 AM on Friday, 21 Mar 2017 (IST) </p>

                    <hr>
                    
                    <form action="" method="post" >
                        <br><b>
                        For Group 1: </b>
                        <br><br>
                        <div class="form-group">
                            <input type="text" class="form-control" name="rank" placeholder="NCGPA rank">
                        </div>
                        <br>
                        <div class="form-group"> 
                            <input type="submit" class="btn btn-info btn-block btn-success" name="submit1" value="Submit">
                        </div>
                    </form>
                    <hr>
                    <form action="" method="post" >
                        <br><b>
                            For Group 2: </b>
                        <br><br>
                        <div class="form-group">
                            <input type="text" class="form-control" name="rank" placeholder="NCGPA rank">
                        </div>
                        <br>
                        <div class="form-group"> 
                            <input type="submit" class="btn btn-info btn-block btn-success" name="submit2" value="Submit">
                        </div>
                    </form>
                    <hr>
                    <form action="" method="post" >
                        <br><b>
                            For Group 3: </b>
                        <br><br>
                        <div class="form-group">
                            <input type="text" class="form-control" name="rank" placeholder="NCGPA rank">
                        </div>
                        <br>
                        <div class="form-group"> 
                            <input type="submit" class="btn btn-info btn-block btn-success" name="submit3" value="Submit">
                        </div>
                    </form>
                </div>
                <?php 
                
                }                 
                
                
                ?>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer style="background-color:#f5f5f5; margin: -15px; padding-bottom: 40px; font-weight: 100;" class="col-lg-12 text-center">
        <br>

        <div class="fb-like" data-href="https://www.facebook.com/vitupdates/" data-layout="standard" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
        <br>    
        <br>    
        <p> 
        <div class="fb-comments" data-href="http://139.59.24.111/index.php" data-numposts="10" data-order-by="reverse_time"></div>
        <hr>
        <br>
        <p>
            Room Availability Predictor  &copy; 2017
        </p>
    </footer>

        
        
        <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
        
    </body>
</html>