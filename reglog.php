<?php
include('config.php');

if(isset($_POST['regsub']))
{
    $_SESSION["fname"] = $fname = isset( $_POST[ "fname" ] ) ? trim( $_POST[ "fname" ] ) : "";
    $_SESSION["lname"] = $lname = isset( $_POST[ "lname" ] ) ? trim( $_POST[ "lname" ] ) : "";
    $_SESSION["username"] = $username = isset( $_POST[ "username" ] ) ? trim( $_POST[ "username" ] ) : "";
    $_SESSION["email"] = $email = isset( $_POST[ "email" ] ) ? trim( $_POST[ "email" ] ) : "";
    $_SESSION["password"] = $password = isset( $_POST[ "password" ] ) ? trim( $_POST[ "password" ] ) : "";
    $_SESSION["cpassword"] = $cpassword = isset( $_POST[ "cpassword" ] ) ? trim( $_POST[ "cpassword" ] ) : "";
    $fname = ucwords( $fname );
    $lname = ucwords( $lname );
    $username = ucwords( $username );
    $email = strtolower( $email );
    
    function isEmail($email) {
        return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));
    }

    if( empty( $fname ) or empty( $lname ) or empty( $username ) or empty( $email )
    or empty( $password ) or empty( $cpassword ) ) {
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
        if( preg_match( "/([^a-z0-9\s]+)/i", $username ) ) {
            $errors = "Username cannot contain special characters.";
            echo $errors;
        }  else

        //Email
        if( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
            $errors = "Invalid email address entered";
            echo $errors;
        } else

        //For number
        if( strlen( $password ) > 11 ) {
            $errors = "password should not be more than 11.";
            echo $errors;
        } else {

            if(trim($fname) == '') {
                $_SESSION['status'] = "Enter your First Name";
                header('location: register.php'); 
                exit();
            } else if(trim($lname) == '') {
                $_SESSION['status'] = "Enter your  Last Name";
                header('location: register.php'); 
                exit();
            } else if(trim($password) == '') {
                $_SESSION['status'] = "Enter your Password.";
                header('location: register.php'); 
                exit();
            } else if(trim($cpassword) == '') {
                $_SESSION['status'] = "Enter your Password.";
                header('location: register.php'); 
                exit();
            }  else if(trim($email) == '') {
                $_SESSION['status'] = "Enter a valid Email Address.";
                header('location: register.php'); 
                exit();
            } else if(!isEmail($email)) {
                $_SESSION['status'] = "You have enter an invalid E-mail Address, try again.";
                header('location: register.php'); 
                exit();
            }


            $email_query = "SELECT * FROM users WHERE email='$email'";
            $email_query_run = mysqli_query($conn, $email_query);
            if(mysqli_num_rows($email_query_run) > 0)
            {
                $_SESSION['status'] = "Email already Taken";
                header('location: register.php');
            }
            else
            {

                if ($password === $cpassword)
                {
                    $query = "INSERT INTO users (fname,lname,email,password) 
                    VALUE ('$fname','$lname','$email','$password')";
                    $query_run = mysqli_query($conn,$query);
                
                    if($query_run)
                    {
                        $_SESSION['email'] = $email;
                        $_SESSION['success'] = "Profile Added";
                        header('location: index.php');
                    }
                    else 
                    {
                        $_SESSION['status'] = "Profile Not Added";
                        header('location: register.php');
                    }    
                }
                else
                {
                    $_SESSION['status'] = "Password and Confirm Password Does Not Match";
                    header('location: register.php');
                }
            }
        }
    }
}


if(isset($_POST['login_btn']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username' AND password = '$password' ";
    $query_run = mysqli_query($conn, $query);

    if(mysqli_fetch_array($query_run))
    {
        echo $username;
        // echo $_SESSION['user_name'];
        // $_SESSION['success'] = "WElcome";
        header('location: editaccount.php');
    }
    else
    {
        echo "Username / Password is Invalid";
        header('location: login.php');
    }
}