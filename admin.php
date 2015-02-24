<?php
error_reporting(0);
session_start();

?>



<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>KSABangla:.</title>

        <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
        <link href="css/bootstrap_2_3_2.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/admin.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/freelancer.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body id="page-top" class="index">

        
        <?php
//echo phpinfo();
//echo time() . '<br>'; 
//print_r($_SESSION);
        if (isset($_POST['submit'])):
            //print_r($_POST);     
            $user_basic = $_POST['user_basic'];
            $serialize_data = implode('|=|', $user_basic);

            $fp = fopen("formdata.txt", "w");
            fwrite($fp, $serialize_data);
            fclose($fp);
            ?>
            <div role="alert" class="alert alert-success">
                <strong>Well done!</strong> Data has been updated successfully.
            </div>


        <?php
        endif;
        ?>
        
      
        
        <?php 
            if(isset($_POST['login']) && $_POST['login'] == 'Submit') { 
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                
                if($user == 'admin' && $pass == 'Digicon2014') { 
                    $_SESSION['logged_in'] = true;
                } else {
                     $_SESSION['logged_in'] = false;
                }
                
                //header('Location: ' . basename($_SERVER['PHP_SELF']));
                //print_r($_POST); die;
                
            }
        ?>



        <?php
        $file_data = file_get_contents('formdata.txt', FILE_USE_INCLUDE_PATH);
        $file_data_array = explode("|=|", $file_data); //create array separate by new line
//print_r($file_data_array); die;
        ?>


        <?php 
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
              
                include_once 'update-data-form.php';
            } else {
                include_once 'login-form.php';
            }
        ?>
        
        

        <!-- jQuery Version 1.11.0 -->
        <script src="js/jquery-1.11.0.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
<!--        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="js/classie.js"></script>
        <script src="js/cbpAnimatedHeader.js"></script>-->

        <!-- Contact Form JavaScript -->
<!--        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>-->

        <!-- Custom Theme JavaScript -->
        <!--<script src="js/freelancer.js"></script>-->

    </body>

</html>



