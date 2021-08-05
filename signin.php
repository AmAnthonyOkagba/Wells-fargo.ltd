<!DOCTYPE html>
<html lang="en">
<head>
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
    </style>
</head>
<body style="font-family: 'Montserrat', sans-serif;">

<!-- SignIn-modal -->
<div class="modal" id="signin">
    <div class="modal-content">
        <div class="row">    
            <ul>
                <li>
                    <span style="font-weight: bold; color: rgb(143, 178, 231);">SIGN IN</span>         
                    <i class="fa fa-close fa-2x modal-close" style="color: rgb(143, 178, 231); margin-left: 720px;"></i>     
                </li>
            </ul>
        </div>
        <div class="divider" style="margin-bottom: 30px;"></div>
       
          <form action="#">
            <div class="row">
                <div class="col l6">
                    <input type="text" style="border:rgb(83, 136, 216) solid 1px; border-radius: 10px; padding-left: 10px;" placeholder="Username" class="validate" required>
                </div>
                <div class="col l6">
                    <input type="password" style="border:rgb(83, 136, 216) solid 1px; border-radius: 10px; padding-left: 10px;" placeholder="Password" class="validate" required>
                </div>
            </div>
           
           <div class="divider"></div>
           <div class="modal-footer">
            <a href="#" >
            <input type="submit" class="btn" style="border-radius: 30px; color:lightcyan;
             background-color:rgb(143, 178, 231); font-weight: bold;" value="LOGIN">
            </a>
            </div>
          </form>
        </div>
       
</div>


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