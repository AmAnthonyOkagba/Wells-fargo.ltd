<?php
    include('config.php');
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
                  <a href="wheretobuy.php" class="fer">Where To Buy Bitcoin ?</a>
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
            <h4 style="color:rgb(185, 213, 255); font-size: 38px; font-weight: bold; padding-bottom: 200px; margin-top: 120px;" class="plan">TERMS AND CONDITIONS</h4>
            
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

   <!-- terms-->
   <section style="margin-top: 10px; padding: 20px;">
    <div class="container">
      <div class="row">
        <h5  style="color:rgb(143, 178, 231); font-weight: bold;">Terms</h5>
          <div class="col l3" style="margin-top: 70px;">
            <img src="img/terms-and-conditions.png" class="responsive-img filter" alt="">
          </div>
          <div class="col l9 push-l1">
            <h6  style="color:rgb(143, 178, 231); font-weight: bold;">1. Basic provisions</h6>
              <p>1.1. wells-fargo.ltd is officially registered in London and operating under the laws of the United Kingdom. Interaction with the company assumes the financial investment, the result of which is a fixed hourly profit depending on the chosen investment plan.</p>

              <p>1.2. wells-fargo.ltd only operates online through this site: <a href="https://wells-fargo.ltd" target="_blank">wells-fargo.ltd.</a></p>

              <p>1.3. wells-fargo.ltd is not a public company and does not publish regular financial reports or statements.</p>
         
              <p>1.4. wells-fargo.ltd offers long-term investment service, which is of indefinite duration.</p>
              
              <p>1.5. By registering on this website Client agrees that he has read these regulations and agrees to adhere to them in cooperation with wells-fargo.ltd.</p>

            <h6  style="color:rgb(143, 178, 231); font-weight: bold;">2. The rights and obligations of wells-fargo.ltd</h6>
              <p>2.1. Forex Financial website has the maximum protection against any interference in its work to fraud or theft of personal information. Database and content management system (CMS) are on a dedicated server, resistant to hacking and DDoS attacks. All personal data of Client passes through an encrypted channel that is provided by 256-bit Extended Validation (EV) Comodo SSL certificate.</p>

              <p>2.2. wells-fargo.ltd has a policy of confidentiality of Client�s personal information. We never disclose information about your activities within this website (your personal and contact information, information about deposits and withdrawals) to third parties except exception cases.</p>

              <p>
                2.3. wells-fargo.ltd can provide user data to a third party in the following exception cases: <br>

               <p> - If we receive the court's decision about granting the necessary information about our Client.</p>
                
              <p>  - In case of violation by Client of these rules or suspecting him in fraudulent activity on his part.</p>
                
                - In case of receipt of this requirement directly from Client.
              </p>
         
              <p>2.4. wells-fargo.ltd provides investment services only to persons who have read and agree with these rules and have an active account on the company website.</p>
              
              <p>2.5. wells-fargo.ltd accrues income only in accordance with the terms of the investment proposal. wells-fargo.ltd reserves the right to accrue additional rewards at their discretion as a bonus once or on a regular basis.</p>

              <p>2.6. wells-fargo.ltd makes all payments instantly and in automatic mode. Any delays of payouts can be linked to maintenance work in Bitcoin network or on the company website. wells-fargo.ltd notifies Clients about temporary absence of access in the �News� section or by email.</p>

              <p>2.7. In case Client made decision to stop cooperation, wells-fargo.ltd makes a refund of initial deposit of Client regardless of the investment plan with no fee.</p>

              <p>2.8. The company has the right to refuse cooperation without further explanation for this decision.</p>

              <h6  style="color:rgb(143, 178, 231); font-weight: bold;">3. The rights and obligations of Clients</h6>
              <p>3.1. Citizen of any country that has reached the age of majority can be a Client of wells-fargo.ltd, if it does not violate the existing law of the country where he is a resident.</p>

              <p>3.2. Client should read and agree to these rules before the start of his cooperation with wells-fargo.ltd.</p>

              <p>3.3. Client can register and use only one account there he can act as an investor or attract funds to get additional earnings as referral commission.</p>

                <p>3.4. Client has the right to receive income according to the chosen investment strategy and have few deposits at the same time.</p>

                <p>3.5. Client has the right to participate in the affiliate program of wells-fargo.ltd, attract new investors and obtain referral rewards. It is strictly prohibited to use referral link in mass emailing (spam). Violation of this rule can be a reason of blocking Client's account and his deposit without guarantees of return.</p>

                <p>3.6. Client can become official representative of wells-fargo.ltd in the country of residence and earn additional commission of 6% instead regular 3% reward.</p>

                <h6  style="color:rgb(143, 178, 231); font-weight: bold;">4. Final provision</h6>
              <p>4.1. Taking the decision to cooperate with wells-fargo.ltd and making a deposit, you agree that past financial results are not an absolute guarantee of future profits. Use the rules of proper investment in cooperation with wells-fargo.ltd.</p>
          </div>
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