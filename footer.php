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
        footer{
            margin-bottom: 0px;
        }
        .fers:hover{
            color:rgb(83, 136, 216);
        }
        .fers{
            color: black;
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
    <!-- footer -->
 <footer class="blue-grey lighten-4" style="padding-bottom: 20px;">
        <div class="container">          
            <div class="row">
                <div class="col l3 m4 s12 ">                  
                    <p><a href="index.php" class="fers">Home</a></p>
                    <p><a href="aboutus.php" class="fers">About Wells-Fargo LTD</a></p>
                    <p><a href="wheretobuy.php" class="fers">Where To Buy Bitcoin?</a></p>
                    <p><a href="terms.php" class="fers">Terms</a></p>
                </div>
                <div class="col l2 m3 s12">               
                    <p><a href="getstarted.php" class="fers">Get Started</a></p>
                    <p><a href="#signin" class="fers modal-trigger">Sign In</a></p>
                    <p><a href="#register" class="fers modal-trigger">Register</a></p>
                    <p><a href="faq.php" class="fers">FAQ,s</a></p>
                </div>
                <div class="col l4 m4 s12">
                    
                    <p><a href="investmentoffer.php" class="fers">Investment Offer</a></p>
                    <p><a href="officialrepresentative.php" class="fers">Official Representatives</a></p>
                    <p><a href="affiliateprogram.php" class="fers">Affiliate Program</a></p>
                    <p><a href="videooffice.php" class="fers">Video Office</a></p>
                    <p><a href="support.php" class="fers">Support</a></p>
                </div>
                <div class="col l3" style="margin-top: 50px;">
                        <a href="https://bitcoin.org" target="_blank"> <img src="img/NicePng_bitcoin-png_157378.png" class="responsive-img tada" alt=""></a>
                </div>
            </div>
            <div style="text-align: justify;">
                <p><span style="font-weight: bold; color:rgb(83, 136, 216);">Disclaimer: </span>Wells-Fargo ltd offers a relatively safe investment and guarantees the high quality of its services. We offer financial services to everyone; we do not require identification of company clients about their gender, age or country of residence. The company is in no way affects the development of cryptocurrency market, does not control the processes within the Bitcoin network, and is not responsible for the trend of cryptocurrency exchange rate, as well as losses associated with this. By registering an account on wells-fargo ltd website and investing with the company at his own risk, client should be aware that previous financial results do not guarantee similar returns in the future. You transfer your deposit of management of the company and agree that these funds will be used at the discretion of well-fargo management. The company is not responsible for any losses incurred by investor as a result of use of this site, and has right to suspend the fulfillment of obligations to clients in case of force majeure factors, as well as of a negative scenario in the markets of electronic money and cryptocurrency.</p>
              
            </div>
        </div>
    </footer>
<footer class="blue-grey" style="padding: 10px; top: 0px;">
    <div class="footer center">
        <span class="white-text"> 
            <span style="color:rgb(185, 213, 255);">&copy;</span> 2021 Wells-Fargo lTD | <span>All Right Reserved.</span>
        </span>
    </div>
</footer>

<?php
    include('register.php');
    include('signin.php');
?>



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