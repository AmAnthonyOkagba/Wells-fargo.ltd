<?php
include('config.php');

if(isset($_POST['regsub']))
{
    $_SESSION["fname"] = $fname = isset( $_POST[ "fname" ] ) ? trim( $_POST[ "fname" ] ) : "";
    $_SESSION["lname"] = $lname = isset( $_POST[ "lname" ] ) ? trim( $_POST[ "lname" ] ) : "";
    $_SESSION["email"] = $email = isset( $_POST[ "email" ] ) ? trim( $_POST[ "email" ] ) : "";
    $_SESSION["password"] = $password = isset( $_POST[ "password" ] ) ? trim( $_POST[ "password" ] ) : "";
    $_SESSION["cpassword"] = $cpassword = isset( $_POST[ "cpassword" ] ) ? trim( $_POST[ "cpassword" ] ) : "";
    $fname = ucwords( $fname );
    $lname = ucwords( $lname );
    $email = strtolower( $email );
    
    function isEmail($email) {
        return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));
    }

    if( empty( $fname ) or empty( $lname ) or empty( $email )
    or empty( $number ) or empty( $password ) or empty( $cpassword ) ) {
    echo "<div class='alert alert-danger'>";
    echo "<i class='fa fa-exclamation-triange'></i>";
    echo "All fields are requred!";
    echo "</div>";
    } else {
    //Sanitize all inputs
    //For name
    if( preg_match( "/([^a-z0-9\s]+)/i", $fname ) ) {
        $errors = "First Name cannot contain special characters.";
        echo $errors;
    }  else
    
    if( preg_match( "/([^a-z0-9\s]+)/i", $lname ) ) {
        $errors = "Last Name cannot contain special characters.";
        echo $errors;
    }  else

    //Email
    if( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
        $errors = "Invalid email address entered";
        echo $errors;
    } else

    //For number
    if( strlen( $number ) > 11 ) {
        $errors = "Number should not be more than 11.";
        echo $errors;
    } else {


    if(trim($fname) == '') {
        $_SESSION['status'] = "Enter your First Name";
        header('location: register'); 
        exit();
    } else if(trim($lname) == '') {
        $_SESSION['status'] = "Enter your  Last Name";
        header('location: register'); 
        exit();
    } else if(trim($password) == '') {
        $_SESSION['status'] = "Enter your Password.";
        header('location: register'); 
        exit();
    } else if(trim($cpassword) == '') {
        $_SESSION['status'] = "Enter your Password.";
        header('location: register'); 
        exit();
    }  else if(trim($email) == '') {
        $_SESSION['status'] = "Enter a valid Email Address.";
        header('location: register'); 
        exit();
    } else if(!isEmail($email)) {
        $_SESSION['status'] = "You have enter an invalid E-mail Address, try again.";
        header('location: register'); 
        exit();
    }


    $email_query = "SELECT * FROM users WHERE email='$email'";
    $email_query_run = mysqli_query($con, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email already Taken";
        header('location: register');
    }
    else
    {

        if ($password === $cpassword)
        {
            $query = "INSERT INTO users (fname,lname,email,password) 
            VALUE ('$fname','$lname','$email','$password')";
            $query_run = mysqli_query($con,$query);
        
            if($query_run)
            {
                $_SESSION['email'] = $email;
                $_SESSION['success'] = "Profile Added";
                header('location: index');
            }
            else 
            {
                $_SESSION['status'] = "Profile Not Added";
                header('location: register');
            }    
        }
        else
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            header('location: register');
        }
    }
}
}



?>





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
       
          <form action="register.php" method="POST">
            <div class="row">
                <div class="col l6">
                    <input type="text" name="fname" style="border:rgb(83, 136, 216) solid 1px; border-radius: 10px; padding-left: 10px;" placeholder="First Name" class="validate" required>
                    <span style="color:red; font-size:12px; padding:0;" ><?php echo $errors ?></span>
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
                    <input type="password"  style="border:rgb(83, 136, 216) solid 1px; border-radius: 10px; padding-left: 10px;" 
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
                    <input type="text" readonly style="border:rgb(83, 136, 216) solid 1px; border-radius: 10px; padding-left: 10px;" placeholder="Your Upline">
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
<?php }?>


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