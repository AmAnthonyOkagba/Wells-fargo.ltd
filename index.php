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
    <title>Wells Fargo Ltd</title>
    <link rel="stylesheet" href="css/materialize.css">
    <style>
        .main-body{
            background-image:url(img/7.jpg);
        }
        .tada:hover {
      animation: tada !important;
      animation-duration: 2s !important;
      animation-iteration-count: infinite !important;
    }
        img.filter:hover{
            animation: pulse !important;
            animation-duration: 2s !important;
            animation-iteration-count: infinite !important;
            filter: drop-shadow(2px 2px 4px grey) !important;
        }
        img.filter {
      filter: drop-shadow(2px 2px 2px grey) !important;
        }
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
                  <a style="color: rgb();" href="index.php"  class="fer home">Home</a>
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
       <div class="container">
            <div class="row center">
                <div class="col s12 m12 l6" style="margin-top: 9rem;">
                    <h4 class="tada" style="color:rgb(185, 213, 255); font-size: 38px; font-weight: bold;">
                        Welcome to Wells-Fargo LTD
                    </h4>
                    <h5 class="white-text">
                        Best secure investment plan, We develop effective plans to move your customers behaviour. customer can be always his profit.
                    </h5>
                   <ul style="display: inline;">
                    <li class=""><br>
                        <a href="https://www.youtube.com/watch?v=eGx4FWS7zE4&feature=emb_rel_end" target="_blank" class="" style="color:lightcyan; font-size: 20px; font-weight: bold;">
                          <span ><i class="fa fa-youtube-play" style="color:rgb(185, 213, 255);"></i> Watch Video</span>
                        </a>
                    </li> 
                   </ul>
                </div>
                <div class="col s12 m12 l6 push-l1 hide-on-med-and-down">
                    <img src="img/banner-thumb.png" class="responsive-img filter" alt="">
                </div>
            </div>
       </div>
  </section>

  <!-- investment plan -->
  <section>
    <div class="container center">
        <h4 class="center" style="font-weight: bold; color:rgb(83, 136, 216);">OUR INVESTMENT PLAN</h4>
        <?php
            include('plans.php');
        ?>
    </div>
  </section><br><br><br>

 <!-- why wells fargo -->
  <section style="background-color:whitesmoke">
    <div class="container">
      <div class="row">
        <div class="col m6 l6 s12">
           <div class="plan">
            <h5 style="font-weight: bold; color:rgb(140, 174, 224);">Why did we lauch Wells-Fargo ltd Investment project ?</h5><br>
           </div>
           <ol style="list-style-type:disc">
                <li>To promote the use of cryptocurrency to pay for goods and services online;</li><br>
                <li>To expand the business geography of wells-fargo.ltd outside the UK;</li><br>
                <li>To form and develop our own network of mining ASIC equipment;</li><br>
                <li>To reduce the costs of mining due to the involvement of the assets;</li><br>
                <li>To look for business partners and company representatives in regions;</li><br>
                <li>To help novice investors who are in search of safe investments;</li><br>
                <li>To increase financial turnover and preparing to IPO and issuing of shares.</li><br>
            </ol>
        </div>
        <div class="col m6 l6 s12 push-l1">
           <div class="plan">
            <h5 style="font-weight: bold; color:rgb(140, 174, 224);" class="plan">Why Wells-Fargo ltd ?</h5><br>
           </div>
            <ol style="list-style-type:disc;">
            <li>Wells-Fargo.ltd is officially registered company;</li><br>
            <li>Wells-Fargo.ltd investment platform is operating in automatic mode;</li><br>
            <li>The company only takes in trusted cryptocurrency;</li><br>
            <li>Our investment project accrues profits every day;</li><br>
            <li>Wells-Fargo.ltd ensures flawless instant processing of withdrawals;</li><br>
            <li>Wells-Fargo.ltd site is under constant protection against all external threats;</li><br>
            <li>Customer and technical support work around the clock.</li>
            </ol>
        </div>
      </div>
    </div>
</section>

<!-- customers comments -->
<section>
    <div class="container">
        <h6 class="center" style="font-weight: bold; color: rgb(41, 41, 41);">CUSTOMERS REVIEW...</h6>
       <div class="row hoverable" style="border-radius: 40px;">
           <div class="col l2">
           <img src="img/investor1.png" class="responsive-img circle" style="border:rgb(83, 136, 216) 4px solid;" alt="">
               <span>- Sophia Anderson</span>
           </div>
           <div class="col l10" style="margin-top: 45px;">
              <em class="grey-text text-darken-4">"I haven’t seen an investment platform more legitimate than WELLSFARGO INVESTMENT. I’m forever grateful."</em>
           </div>
       </div>
       <div class="row hoverable" style="border-radius: 40px;">
           <div class="col l2">
               <img src="img/investor3.png" class="responsive-img circle"  style="border:rgb(83, 136, 216) 4px solid;" alt="">
               <span>- Frank Gabrielson</span>
           </div>
           <div class="col l10" style="margin-top: 45px;">
              <em class="grey-text text-darken-4">" I traded with WELLSFARGO INVESTMENT and I have never regretted any moment of it."</em>
           </div>
       </div>
       <div class="row hoverable" style="border-radius: 40px;">
           <div class="col l2">
               <img src="img/investor2.png" class="responsive-img circle"  style="border:rgb(83, 136, 216) 4px solid;" alt="">
               <span>- Becca James</span>
           </div>
           <div class="col l10" style="margin-top: 45px;">
              <em class="grey-text text-darken-4">"WELLSFARGO INVESTMENT makes it easier to trade.."</em>
           </div>
       </div>
       <div class="row hoverable" style="border-radius: 40px;"  >
           <div class="col l2">
               <img src="img/investor4.png" class="responsive-img circle"  style="border:rgb(83, 136, 216) 4px solid;" alt="">
               <span>- Tunner Philips</span>
           </div>
           <div class="col l10" style="margin-top: 45px;">
              <em class="grey-text text-darken-4">"WELLSFARGO INVESTMENT still remains the best investment platform."</em>
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