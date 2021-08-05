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
    </style>
</head>
<body style="font-family: 'Montserrat', sans-serif;">

<!-- Register-modal  -->
<div class="modal" id="register">
    <div class="modal-content">
        <div class="row">
            <ul>
                <li>
                    <span style="font-weight: bold; color: rgb(143, 178, 231);">REGISTER</span>
                    <i class="fa fa-close fa-2x modal-close" style="color: rgb(143, 178, 231); margin-left: 700px;"></i>     
                </li>
                <div class="divider" style="margin-top: 20px;"></div>
                <p style="text-align: justify;">To start using Bitcoin Financial investment program you should have own personal account. Just fill in registration form below which requires a minimum of information. Please note that you can only change your password , your username and email are not subject to any further changes or corrections.</p>
            </ul>
        </div>
        <div class="divider" style="margin-bottom: 30px;"></div>

          <form action="reglog.php" method="POST">
            <div class="row">
                <div class="col l6">
                    <input type="text" name="fname" style="border:rgb(83, 136, 216) solid 1px; border-radius: 10px; padding-left: 10px;" placeholder="First Name" class="validate" required>
                    <span style="color:red; font-size:12px; padding:0;" >
                </div>
                <div class="col l6">
                    <input type="text" name="lname" style="border:rgb(83, 136, 216) solid 1px; border-radius: 10px; padding-left: 10px;" 
                    placeholder="Last Name" class="validate" required>
                </div>
            </div>
            <div class="row">
                <div class="col l6">
                    <input type="password" name="password" style="border:rgb(83, 136, 216) solid 1px; border-radius: 10px; padding-left: 10px;" placeholder="Password" class="validate" required>
                </div>
                <div class="col l6">
                    <input type="password" name="cpassword" style="border:rgb(83, 136, 216) solid 1px; border-radius: 10px; padding-left: 10px;" 
                    placeholder="Re-Type Password" minlength="6" maxlength="10" class="validate" required>
                </div>
            </div>
            <div class="row">
                <div class="col l6">
                    <input type="text" name="username" style="border:rgb(83, 136, 216) solid 1px; border-radius: 10px; padding-left: 10px;" placeholder="Username" class="validate" minlength="6" maxlength="10" required>
                </div>
                <div class="col l6">
                    <input type="text" name="btcaddress" style="border:rgb(83, 136, 216) solid 1px; border-radius: 10px; padding-left: 10px;" 
                    placeholder="Bitcoin Wallet Address" class="validate" required>
                </div>
            </div>
            <div class="row">
                <div class="col l6">
                    <input type="text" name="ltcaddress" style="border:rgb(83, 136, 216) solid 1px; border-radius: 10px; padding-left: 10px;" placeholder="Litecoin Wallet Address" class="validate" required>
                </div>
                <div class="col l6">
                    <input type="text" name="ethaddress" style="border:rgb(83, 136, 216) solid 1px; border-radius: 10px; padding-left: 10px;" 
                    placeholder="Ethereum Wallet Address" class="validate" required>
                </div>
            </div>
            <div class="row">
                <div class="col l6">
                    <input type="email" name="email" style="border:rgb(83, 136, 216) solid 1px; border-radius: 10px; padding-left: 10px;" placeholder="E-mail Address" class="validate" required>
                </div>
                <div class="col l6">
                    <input type="text" style="border:rgb(83, 136, 216) solid 1px; border-radius: 10px; padding-left: 10px;" 
                    placeholder="Re-Type Email Address" class="validate" required>
                </div>
            </div>
            <div class="row">
                <div class="col l6">
                    <input type="text" name="secretquestion" style="border:rgb(83, 136, 216) solid 1px; border-radius: 10px; padding-left: 10px;" placeholder="Secret Question" class="validate" required>
                </div>
                <div class="col l6">
                    <input type="text" name="secretanswer" style="border:rgb(83, 136, 216) solid 1px; border-radius: 10px; padding-left: 10px;" 
                    placeholder="Secret Answer" class="validate" required>
                </div>
            </div>
            <div class="row">
                <div class="col l6">
                    <input type="text" read only style="border:rgb(83, 136, 216) solid 1px; border-radius: 10px; padding-left: 10px;" placeholder="Your Upline">
                </div>
                <div class="col l6" style="margin-top: 10px;">
                  
                    <label>
                        <input type="checkbox" class="filled-in validate" required>
                        <span>I agree with the <a href="terms.php" style="text-decoration: underline;">Terms and conditions</a></span>
                    </label>
                </div>
            </div>
           
           <div class="divider"></div>
           <div class="modal-footer">
            <a href="#" >
            <input type="submit" name="regsub" class="btn" style="border-radius: 30px; color:lightcyan;
             background-color:rgb(143, 178, 231); font-weight: bold;" value="Register">
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
</html>