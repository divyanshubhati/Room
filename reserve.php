<?php

session_start();
if (isset($_SESSION['LAST_ACTIVITY'])) {
    if (time() - $_SESSION['LAST_ACTIVITY'] > 1800) {

        session_unset();
        session_destroy();
    }
}


if (isset($_POST['submit'])) {
    

    include_once './login/cleansql.php';
    include_once './login/db.php';
    if (isset($_POST['stime']) && isset($_POST['ttime'])) {
        $stime = date(DATE_W3C, strtotime($_POST['stime']));
        $ttime = date(DATE_W3C, strtotime($_POST['ttime']));
        if( $ttime  - $stime  >= 10*60*60){
            $query = "SELECT * FROM `area` WHERE 1";
            $result = mysqli_query($conn, $query);
            $found = 0;
            $area_id = 1;
            while($row = mysqli_fetch_assoc($result) && $found == 0){
                $area_id    = $row['id'];
                $query1     = "SELECT area_id FROM reservation WHERE (stime <= '$stime' AND  '$stime' <= ttime ) OR (stime <= '$ttime' AND  '$ttime' <= ttime )";
                $result1    = mysqli_query($conn, $query1);
                if(!mysqli_num_rows($result1) == 0) $found = 1;
            }
            $uid = $_SESSION['id'];
            if($found == 1){
                $query = "INSERT INTO `reservation` (`user_id`, `stime`, `ttime`, `area_id`) VALUES ('$uid', '$stime', '$ttime', '$area_id')";
                $result = mysqli_query($conn, $query);
            }

        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        
        <!-- Bootstrap Core CSS -->
        <link href="css/bp.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/bloghome.css" rel="stylesheet">

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
    </head>

    <body>
    	
	
        <!--googleoff: index-->
        <!-- Navigation -->
        <?php    include_once './navigation.php'; ?>
        <!--googleon: index-->
        
        <!-- Page Content -->
        <div class="container">

            <div class="row">
                
                <h1> Make Reservation</h1>
                <form action="reserve.php" method="post" >
                        <br>

                        <div class="form-group">
                            <label for="title"><i class="fa fa-clock-o"></i> &nbsp;From</label>
                            <input type="datetime-local" class="form-control" name="stime" >
                        </div>   

                        <br>
                        
                        
                        <div class="form-group">
                            <label for="title"><i class="fa fa-clock-o"></i> &nbsp;Till</label>
                            <input type="datetime-local" class="form-control" name="ttime" >
                        </div>   
  
                        <div class="form-group  text-center"> 
                            <input type="submit" class="btn btn-info" name="submit" value="Register">
                        </div>
                    
                    <br>

                    </form>
            </div>
            
        </div>
        
        <?php    include_once './footer.php'; ?>

        
        
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        
    </body>
</html>