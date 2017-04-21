<?php
session_start();
if (isset($_SESSION['usern'])) {
    header('Location: /w/n/index.php');
}

$error = 0; // Error:
$usern = "";  //  1
$passwd = "";  // 	2
$email = "";   //	4
$found = false;
$dateI  = "01-01-1997";
//8 : already signed up
//11: username is unavailable


if (isset($_POST['submit'])) {
    

    include_once 'cleansql.php';
    include_once 'db.php';
    if (isset($_POST['usern'])) {
        $usern = clean(strtolower($_POST['usern']));
        if (empty($usern)) {
            $error += 1;
        }
    }

    // Sanitizing email value
    if (isset($_POST['email'])) {
        
        $_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $_POST['email'] = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $email = $_POST['email'];
	
	
        if ($email == "") {
            $error += 4;
        }
    }

    if (isset($_POST['passwd']) && isset($_POST['passwd1']) && $_POST['passwd1'] == $_POST['passwd']) {
        if (!preg_match("/^(?=.*\d)(?=.*[a-zA-Z]).{8,}$/", $_POST['passwd'])) {
            $error += 2;
        } else {
            $passwd = password_hash($_POST['passwd'], PASSWORD_DEFAULT);
        }
    }
    

    if ($error == 0) {
        
        $email = strtolower(clean($email));
       	mysqli_query($connection,"DELETE FROM `user` WHERE `email`='$email' AND STATUS=0");
        //Check is already signed up
        
        $result1 = mysqli_query($connection,"SELECT * FROM `user` WHERE usern = '$usern' AND NOT STATUS=0 LIMIT 1");
        if ($result1) {
            $num1 = mysqli_num_rows($result1);
            if ($num1 > 0) {
                $found = true;
                $error = 11;
            }
        }
        
        $result2 = mysqli_query($connection,"SELECT * FROM `user` WHERE email = '$email' AND NOT STATUS=0 LIMIT 1");
        if ($result2) {
            $num2 = mysqli_num_rows($result2);
            if ($num2 > 0) {
                $found = true;
                $error = 8;
            }
        }


        if (!$found){
            $token = clean(md5(uniqid(rand(), true)));
            $result = mysqli_query($connection,"INSERT INTO `user` (`name` , `email`, `password`) "
                    . "VALUES ('$usern', '$email','$passwd')");

            if ($result) {
                header('Location: index.php?loginMsg=3');
            } else {
                header('Location: register.php?loginMsg=12');
            }
        }
        mysqli_close($connection);
    } 
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
        <title>Register | Visual Bloggers' Club</title>
        
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
            input{
                padding-right: 25px;
            }
            input:invalid{
                background: url(../assets/img/1486945250_Delete.png);
                background-repeat:no-repeat;
                background-size: 23px;
                background-position: right; 
            }
        </style>
        
    </head>

    <body>
        <!-- Navigation -->
        <?php    include_once '../navigation.php'; ?>
            
        

        <div class="container" >                
           <br>
            <div class="col-lg-offset-3 col-lg-6 blogCard">
                <br>
                <h1 style="text-align:center"><i class="fa  fa-link"></i> Register</h1><br>
                <hr>
                <?php
                if ($error != 0){
                   ?>
                    <br>
                    <div class="alert alert-danger" role="alert">
                        <h4><i class="fa  fa-warning"></i>   Invalid.   
                        Fill all the fields properly.";
                        </h4>
                        </div>
                        <?php
                    }
                    ?>        
                    
                    <form action="register.php" method="post" >
                        <br>

                        <div class="form-group">
                            <label for="title"><i class="fa fa-user"></i> &nbsp;Name</label>
                            <input type="text" class="form-control" name="usern"  value="<?php echo $usern; ?>">
                        </div>   

  

                        <div class="form-group">
                            <label for="title"><i class="fa fa-envelope"></i> &nbsp;Email</label>
                            <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
                        </div>

                        <br>
                        <div class="form-group">
                            <label for="title"><i class="fa fa-key"></i>  &nbsp;Password</label>
                            <input type="password" class="form-control" name="passwd" pattern="(?=.*\d)(?=.*[a-zA-Z]).{8,}">
                            <small> *Password should be longer than 8 character and should contain at least one number and alpahabet</small>
                        </div>

                        <div class="form-group">
                            <label for="title"> Repeat Password</label>
                            <input type="password" class="form-control" name="passwd1" pattern="(?=.*\d)(?=.*[a-zA-Z]).{8,}">
                        </div>
                        
                        <br>
                        
                        <div class="form-group  text-center"> 
                            <input type="submit" class="btn btn-info" name="submit" value="Register">
                        </div>
                    
                    <br>

                    </form>
                    

                </div>
           
            </div>
            <br><br>
            <!-- Footer -->
            <?php    include_once '../footer.php'; ?>
            
            <!-- Bootstrap Core JavaScript -->
            <script src="../js/bootstrap.min.js"></script>
            <script src="../js/jquery.js"></script>
            <script src="../js/datepicker.js"></script>

            
            
    </body>
</html>