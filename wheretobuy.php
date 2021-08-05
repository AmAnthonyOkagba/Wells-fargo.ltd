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
        .main-body{
            background-image:url(img/7.jpg);
            width: 100%;
            background-color: whitesmoke;
            padding-bottom: 20px;
        }
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
 
 
<!-- header / top / intro -->
<section class="main-body">
<div class="nav-header">
    <div> 
     <?php
        include('nav.php');
     ?>
      <nav class="transparent z-depth-0">
        <div class="container">       
            <ul>
              <li class="center">
                <img src="img/wellsfargo.png" width="25%" style="border-radius: 6px; margin-top: 10px;" alt="">
              </li>
              
            </ul>
         </div>
        </nav>
        
      <header>         
          <div class="nav hide-on-med-and-down">
          <div class="center">
          <ul>
              <div style="display: inline-flex;text-align: center;">
              <li class="nav-item" style="margin-left:15px; margin-right: 15px;">
                  <a style="color: rgb();" href="index.php"  class="fer">Home</a>
              </li>
          
              <li class="nav-item" style="margin-left: 15px;margin-right: 15px;"> 
                 <a href="getstarted.php" class="fer">Get Started</a>
              </li>
          
              <li class="nav-item" style = "margin-left: 15px;margin-right: 15px;">
                 <a href="aboutus.php" class="fer">About Us</a>
              </li>
          
              <li class="nav-item" style="margin-left: 15px;margin-right: 15px;">
                <a href="investmentoffer.php" class="fer">Investment Offer</a>
              </li>
          
              <li class="nav-item" style="margin-left: 15px; margin-right: 15px;">  
                 <a href="videooffice.php" class="fer">Video Office</a>
              </li>
          
              <li class="nav-item" style="margin-left: 15px; margin-right: 15px;">
                  <a href="affiliateprogram.php" class="fer">Affiliate Program</a>
               </li>
  
               <li class="nav-item " style="margin-left: 15px; margin-right: 15px;">
                  <a href="officialrepresentative.php" class="fer">Official Representatives</a>
               </li>
  
               <li class="nav-item " style="margin-left: 15px; margin-right: 15px;">
                  <a href="wheretobuy.php" class="fer home">Where To Buy Bitcoin ?</a>
               </li>
          
            </ul>
            </div>
          </div>
          </div>
      </div>
      </div>
    </header>
    
          
          <!--Navigation For Small and Medium Screen-->
          <header>
          <nav class=" hide-on-large-only hide-on-extra-large-only transparent z-depth-0">
              <div class="container">
                  <span>         
                  <a href="#mobilemenu" class="sidenav-trigger">                   
                      <i class="material-icons" class="white">menu</i>
                  </a>
              </span>
                  <ul class="hide-on-large-only sidenav" style="background-color:rgb(143, 178, 231);" id="mobilemenu">
                  <div class="divider"></div>
                     <li class="hide-on-large-only"><a href="#" class="white-text"><span> Home</span></a></li>
                   <li class="hide-on-large-only"><a href="#" class="white-text"><span >Get Started</span></a></li>  
                    <li class="hide-on-large-only"><a href="#" class="white-text"><span >About Us</span></a></li>
                    <li class="hide-on-large-only"><a href="#" class="white-text"><span >Investment Offer</span></a></li>
                     <li class="hide-on-large-only"><a href="#" class="white-text" ><span >Video Office</span></a></li>
                     <li class="hide-on-large-only"><a href="#" class="white-text" ><span >Affiliate Program</span></a></li>
                     <li class="hide-on-large-only"><a href="#" class="white-text" > Official Representatives</a></li> 
                     <li class="hide-on-large-only"><a href="#" class="white-text" > Where To Buy Bitcoin ?</a></li> 
                  </ul>
              </div>
          </nav>
        </header>
   </div>
   <!-- intro -->
   <div class="container">
        <div class="center">
            <h4 style="color:rgb(185, 213, 255); font-size: 38px; font-weight: bold; padding-bottom: 200px; margin-top: 120px;" class="plan">WHERE TO BUY ?</h4>
            
        </div>
   </div>
</section>

<!-- investment plan -->
<section style="background-color: whitesmoke; padding: 20px;">
    <div class="container center">
        <h4 class="center" style="font-weight: bold; color:rgb(83, 136, 216);">OUR INVESTMENT PLAN</h4>
        <?php
            include('plans.php');
        ?>
    </div>
  </section>
  
   <!-- where to buy-->
   <section style="margin-top: 10px; padding: 20px;">
    <div class="container">
      <div class="row">
        <h5  style="color:rgb(143, 178, 231); font-weight: bold;">Where to buy Bitcoin?</h5>
        <div class="divider"></div>
        <p style="text-align: justify;">If you are already a Bitcoin user and ready to invest, it's time to refill your address balance. On the Internet there are many websites where you can find information about your nearest cryptocurrency seller. You will find a lot of exchange points where you can buy Bitcoin using any convenient method of payment, and even your local currency. Below you will find a list of websites with a high degree of confidence:</p>
      </div>
    </div>
</section>

<!-- btc price/network/wallets -->
<section style="background-color: whitesmoke; padding: 20px; margin-top: 40px; ">
    <div class="container">
        <div class="row">
            <div class="col l1 center pull-l1" style="margin-top: 35px;">
               <span class="fa fa-bitcoin fa-3x" style="border: solid 1px rgb(83, 136, 216); padding: 20px; border-radius: 30px;"></span>
            </div>
            <!-- btc price -->
            <div class="col s12 l3 m12">
                <h5 style="margin-left: 30px; font-weight: bold;" class="plan">BTC PRICE</h5>
                <ol style="list-style-type: disc;">
                    <li><span style="color:rgb(83, 136, 216);">BitFinex</span><span style="margin-left: 30px;" class="black-text">$608.56</span>
                    </li>
                    <li ><span style="color:rgb(83, 136, 216);">BitStamp</span><span style="margin-left: 20px;" class="black-text">$603.77</span>
                    </li>
                    <li><span style="color:rgb(83, 136, 216);">ItBit</span><span style="margin-left:60px;" class="black-text">$605.36</span>
                    </li>
                    <li><span style="color:rgb(83, 136, 216);">BTC-e</span><span style="margin-left: 47px;" class="black-text">$604</span>
                    </li> 
                </ol>
            </div>
            <!-- btc network -->
            <div class="col s12 l5 m12 push-l1">
                <div>
                    <h5  style="margin-left: 30px; font-weight: bold;" class="plan">BTC NETWORK</h5>
                <ol style="list-style-type: disc;">
                    <li>
                        <span style="color:rgb(83, 136, 216);">Market Cap</span>
                        <span style="margin-left: 36px"class="black-text">9623829991<span>
                    </li>
                    <li>
                        <span style="color:rgb(83, 136, 216);">Hashrate</span>
                        <span style="margin-left: 54px;" class="black-text">1613153851.6365</span>
                    </li>
                    <li>
                        <span style="color:rgb(83, 136, 216);">Difficulty</span>
                        <span style="margin-left:54px;" class="black-text">220755908330</span>
                    </li>
                    <li><span style="color:rgb(83, 136, 216);">Total Blocks</span>
                        <span style="margin-left: 35px;" class="black-text">428442</span>
                    </li> 
                    <li><span style="color: rgb(83, 136, 216);">Network Speed</span>
                        <span style="margin-left: 8px;" class="black-text">107.77 PH/S</span>
                    </li> 
                </ol>
                </div>
            </div>
            <!-- btc wallet -->
            <div class="col s12 l3 m12 push-l1">
                <h5 style="margin-left: 30px; font-weight: bold;" class="plan">BTC Wallets</h5>
                <ol style="list-style-type: disc;">
                    <li><a href="https://blockchain.info">BlockChain</a></li>
                    <li><a href="https://xapo.com">Xapo</a></li>
                    <li><a href="https://www.coinbase.com">CoinBase</a></li>
                    <li><a href="https://block.io">Block</a></li> 
                    <li><a href="https://airbitz.co">Airbitz</a></li> 
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- commission/protections -->
<section style="padding: 20px;">
    <div class="container">
        <div class="row center">
            <div class="col l2"><h4>3%</h4></div>
            <div class="col s12 m6 l4 pull-l1 tada">
                <ul>
                    <h5><li>AFFILIATE <br> COMMISSION</li></h5>
                </ul>
            </div>
            <div>
                <div class="col l2"><h4>6%</h4></div>
            <div class="col s12 m6 l4 pull-l1 tada">
                <ul>
                    <h5><li>REPRESENTATIVES COMMISSION</li></h5>
                </ul>
            </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col l2 push-l1">
                <img src="img/user-shield.png" class="responsive-img" alt="">
            </div>
            <div class="col l10 center">
                <ul>
                    
                    <li>
                        <!-- <i class="fa fa-shield fa-3x"></i> -->
                        <span style="color:rgb(83, 136, 216);">DDOS PROTECTION : </span><span> ON</span>
                        <span style="color:rgb(83, 136, 216); margin-left: 30px;">HACK PROTECTION : </span><span> ON</span>
                        <span style="color:rgb(83, 136, 216); margin-left: 30px;">INSTANT WITHDRAWALS : </span><span >ON</span>
                    </li>
                </ul>
                <h5 style="font-weight: bold;" class="plan"> DAYS ONLINE: <span style="font-weight: lighter;">0037</span></h5>
            </div>
        </div>
    </div>
</section>


   <!-- footer -->
 <?php
    include('footer.php');
    include('signin.php');
    include('register.php');
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