<?php
    session_start();
    include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- imported animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- imported material-icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- font awesome link -->
    <!-- <link rel="stylesheet" href="fontawesome-free-5.15.2-web/css/fontawesome.min.css"> -->
    <!-- imported google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;800&display=swap" rel="stylesheet">
     <!--Import Font Awesome Icons-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Wells-Fargo Ltd</title>
    <link rel="stylesheet" href="css/materialize.css">
    <style>
        .tada:hover {
      animation: tada !important;
      animation-duration: 2s !important;
      animation-iteration-count: infinite !important;
    }
        img.filter:hover{
            animation: pulse !important;
            animation-duration: 1s !important;
            animation-iteration-count: infinite !important;
            /* filter: drop-shadow(2px 2px 4px grey) !important; */
        }
        /* img.filter {
      filter: drop-shadow(2px 2px 2px grey) !important;
        } */
        .ber{
            margin-left: 10px;
            margin-right: 10px;
        }
        footer{
            margin-bottom: 0px;
        }
        .fers:hover{
            color:rgb(83, 136, 216);
        }
        .fers{
            color: black;
        }
        .fer:hover{color:rgb(143, 178, 231);
        }
            .fer{
                margin-left: 10px;
                margin-right: 10px;
            }
     .fer:active{
            color:rgb(143, 178, 231);
     }   
     .fer{
            color:lightcyan;
            font-weight: bold;
     }
     .home{
            color:rgb(143, 178, 231);
            font-weight: bold;
     }
     .nav-item{
        text-decoration: none;
     }
    .btns{
         background-color:lightcyan;
         color:rgb(143, 178, 231);
         font-weight: bold;
     }
    .btns:hover{
         color:lightcyan;
         background-color:rgb(143, 178, 231);
         font-weight: bold;
     }
     .plan:hover {
      animation: headShake !important;
      animation-duration: 1.5s !important;
      cursor: pointer;
    }
    /* .hov:hover{
        background-color: rgb(83, 136, 216);
        color: whitesmoke;
    } */
    /* section.comment{
        background-image: url(img/7.jpg);
    } */
    </style>

</head>

<body style="font-family: 'Montserrat', sans-serif;">
<nav class="blue-grey">
          <ul class="container">
            <li>
                <a href="mailto:admin@wells-fargo.ltd" class="white-text">
                  <span ><i class="fa fa-envelope-o" style="color:rgb(185, 213, 255);"></i> admin@wells-fargo.ltd</span>
                </a>
            </li> 
              <li>
                  <a href="tel:+17724008799" class="white-text"><span ><i class="fa fa-phone" style="color:rgb(185, 213, 255);"></i> +17724008799</span></a>
            </li> 
          
          <ul class="right hide-on-med-and-down">
              <li>
                <a href="faq.php" class="white-text">
                  <span ><i class="fa fa-question-circle-o" style="color:rgb(185, 213, 255);"></i> FAQ ?</span>
                </a>
            </li> 
              <li>
                <a href="support.php" class="white-text">
                  <span style="text-decoration: underline;"><i class="fa fa-support" style="color:rgb(185, 213, 255);"></i> SUPPORT</span>
                </a>
            </li> 
            <li class="hide-on-med-and-down">
                <a href="#signin" class="btn btns modal-trigger" style="border-radius: 40px;"><span class="fa fa-lock"></span> SIGN IN</a>
            </li>
            <li class="hide-on-med-and-down">
                <a href="#register" class="btn btns modal-trigger" style="border-radius: 40px;"><span class="fa fa-user-circle"></span> REGISTER</a>
            </li>
          </ul> 
  
          </ul> 
      </nav>



    <script src="js/jquery.js"></script>
    <script src="js/materialize.js"></script>
    <script>
        $(document).ready(function(){
        $('.slider').slider({
           height: 800,
           duration: 500,
        //    indicators: false,
        });
        $('.collapsible').collapsible();
        $('.materialboxed').materialbox();
        $('.parallax').parallax();
        $('.carousel').carousel();
        $('.datepicker').datepicker();
        $('.timepicker').timepicker();
        $('select').formSelect();
        $('.modal').modal();
        $('.scrollspy').scrollSpy();
        });
    </script>
</body>


<?php
    include('register.php');
    include('signin.php');
?>
</html>