<?php
session_start();
if (isset($_SESSION['usern'])) {
    header('Location: //www.vbcvit.com/blogpage.php');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        
        
    
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Visual Bloggers">
        <meta name="author" content="Created by Devendra Parhate and Subham Sahay">
        <title>Login | Visual Bloggers' Club</title>
        
        <link rel="icon" type="image/png" href="../assets/img/vlog.png">

        <!-- Bootstrap Core CSS -->
        <link href="../css/bp.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/bloghome.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
        
        <style>

            #popup{
		<?php 
			if (isset($_GET['loginMsg'])) {
                		echo 'margin-top:  60px;';
                	}else{
                		echo 'margin-top:  20px;';
                	
                	} ?>
                	
                		
                width: 100%;
                height: 100%;
                position: relative;
                margin-bottom:  30px;
            }




        </style>
    </head>

    <body>

        <!-- Navigation -->
        <?php    include_once '../navigation.php'; ?>
        


        <div class="container" >
            <!--Alert Box at top-->


            

                <?php if (isset($_GET['limit'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <h4><i class="fa  fa-warning"></i>   Limit Reached! </h4>
                    </div>
                    <?php
                }

                if (isset($_GET['loginMsg'])) {
                    ?>

                    <div class="alert alert-danger" role="alert"> 
                        <h4>
                            <?php   if ($_GET['loginMsg'] == 1) {
                                echo '<i class="fa  fa-warning"></i> Accout is created!';
                            }   ?>
                        </h4>
                    </div>
    <?php
}
?>    



                <div class="col-lg-12" style="padding:30px">
                    <div class="col-lg-5 panel blogCard">
                    
                    <h1 style="text-align:center;" class="blog">Sign In <i class="fa fa fa-sign-in"> </i> </h1>
                    <hr>
                    <form action="signin.php" method="post" >
                        <br>
                        <div class="form-group">
                            <label for="title"><i class="fa fa-envelope"></i>&nbsp;Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="title"><i class="fa fa-key"></i>  &nbsp;Password</label>
                            <input type="password" class="form-control" name="passwd">
                        </div>
                        <div class="form-group"> 
                            <br>
                            <input type="submit" class="btn btn-info btn-block btn-success" name="submit" value="Login">
                        </div>
                    </form>
                    
                        <br>
                </div>
                
                <div class="col-lg-offset-1 col-lg-6  blogCard text-center" >
                    <h1 >Join us<br> </h1>
                    <hr>
                    
                    <h3 style="padding:40px 40px; text-shadow: 2px 3px 3px rgba(183, 184, 184, 0.56); font-family: 'Times New Roman' " >
                        "Quick and easy parking reservation!!!" 
                    </h3>
                    <a href="./register.php">
                        <button type="submit" class="btn btn-info btn-block " name="Register" value="Register">Register</button>
                    </a>
                    <br>
                </div>
                <br>
            </div>
        </div> 
        <!-- Footer -->
        <?php    include_once '../footer.php'; ?>


        <!-- jQuery -->
        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.js"></script>
        <script src="../js/datepicker.js"></script>


            
    </body>
</html>