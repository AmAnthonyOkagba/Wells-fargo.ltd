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
                 <a href="getstarted.php" class="fer home">Get Started</a>
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
        <div class="center">
            <h4 style="color:rgb(185, 213, 255); font-size: 38px; font-weight: bold; padding-bottom: 200px; margin-top: 120px;" class="plan">GET STARTED
            </h4> 
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
<!-- getstarted -->
<section>
    <div class="container">
        <h5 style="font-weight: bold; color:rgb(83, 136, 216);">Get Started</h5>
        <!-- <div class="divider"></div> -->
        <p style="text-align: justify;">Investing with wells-fargo.ltd is a fairly simple and straightforward process. To facilitate your understanding of the necessary steps, we have developed a short instruction for all beginners investors of cryptocurrency.</p>
        <div class="divider"></div>
        <div class="row" style="margin-top: 30px;">
            <div class="col l2 m2 s12" style="margin-top: 20px;">
               <img src="img/bitcon2.png" class="responsive-img filter" alt="">
            </div>
            <div class="col l10 m2 s12 push-l1" style="margin-top: 0px;">
                <h5 style="color:rgb(143, 178, 231); font-weight: bold;">1. Get a personal Bitcoin address</h5>
             <p style="text-align: justify;">
                Many users have already heard about the existence of Bitcoin, but still don't have their own wallet. There are many providers that offer free registration of cryptocurrency addresses. We recommend you to choose the most popular websites where you can become a holder of required wallet:
             </p>
             <p style="text-align: justify;">
                If you have already registered an address before with another website, don't worry: we work with any type of wallets that allow you to send and receive Bitcoin payments. Please note that during account registration you will need to set your Bitcoin account - this is your unique Bitcoin address.
             </p>
             <p style="text-align: justify;">
                A Bitcoin address is an identifier of 26-35 alphanumeric characters, beginning with the number 1 or 3, that represents a possible destination for a Bitcoin payment.
             </p>
            </div>
        </div>

        <div class="row" style="margin-top: 40px;">
            <div class="col l10 m2 s12" style="margin-top: 0px;">
                <h5 style="color:rgb(143, 178, 231); font-weight: bold;">2. Sign up For Wells-Fargo.ltd website</h5>
             <p style="text-align: justify;">
                To become well-fargo.ltd user go to the <a href="#register" class="modal-trigger" style="text-decoration: underline;">registration</a> page and enter your username (any word or combination of letters and numbers, it will be used to log into your account), and email. Set a strong password and your Bitcoin account where you will get payments. After filling out the form to your email will be sent a letter with login information for your account in case if you forget and/or lose password. You can always find it there and use
             </p>
            </div>
            <div class="col l2 m2 s12 push-l1" style="margin-top: 10px;">
                <img src="img/access.png" class="responsive-img filter" alt="">
             </div>
        </div>

        <div class="row" style="margin-top: 40px;">
            <div class="col l2 m2 s12" style="margin-top: 10px;">
                <img src="img/safe.png" class="responsive-img filter" alt="">
             </div>

            <div class="col l10 m2 s12 push-l1" style="margin-top: 0px;">
                <h5 style="color:rgb(143, 178, 231); font-weight: bold;">3. Make a deposit</h5>
             <p style="text-align: justify;">
                Once you have registered, login to your account and go to <a href="#register" class="modal-trigger" style="text-decoration: underline;"> �Make Deposit�</a> section. All you need is to enter amount of your deposit, not less than $200. Depending on this amount the system will automatically select the appropriate plan. Select radio button �Direct BTC transfer� and click �Make Deposit�. Now the system offers to send deposit amount to Bitcoin address of the company. You can send any amount (but not less than $200). You should make this payment from your wallet. To do this, copy the address and use it for sending.
             </p>
            </div>
           
        </div>

        <div class="row" style="margin-top: 60px;">
            <div class="col l10 m2 s12" style="margin-top: 0px;">
                <h5 style="color:rgb(143, 178, 231); font-weight: bold;">4. Wait for adding of your deposits</h5>
             <p style="text-align: justify;">
                A feature of Bitcoin network is system of confirmations. Normally, your payment must have at least 3 network confirmations before it will be added as deposit. It may take from one to two hours. In rare cases, you may be faced with the expectation of up to 24 hours. We have no influence on the speed of this process, and can only recommend to wait a little after sending. In any case, your deposit will be added sooner or later.
             </p>
            </div>
            <div class="col l2 m2 s12 push-l1" style="margin-top: 10px;">
                <img src="img/vault.png" class="responsive-img filter" alt="">
             </div>
        </div>

        <div class="row" style="margin-top: 50px;">
            <div class="col l2 m2 s12" style="margin-top: 10px;">
                <img src="img/bitcoins.png" class="responsive-img filter" alt="">
             </div>

            <div class="col l10 m2 s12 push-l1" style="margin-top: 0px;">
                <h5 style="color:rgb(143, 178, 231); font-weight: bold;">5. Get accural every hour</h5>
             <p style="text-align: justify;">
                Wells-Fargo ltd uniqueness lies in the fact that profit is accrued every 60 minutes after the addition of your deposit. This process is endless, and you can stay company's investor as long as possible. Deposit is working on an ongoing basis, and brings profit every day. Please also note that the company's server works in GMT zone. The exact server time you can check the top of the page.
             </p>
            </div>
           
        </div>

        <div class="row" style="margin-top: 60px;">
            <div class="col l10 m2 s12" style="margin-top: 0px;">
                <h5 style="color:rgb(143, 178, 231); font-weight: bold;">6. Withdraw your profits.</h5>
             <p style="text-align: justify;">
                To get payout, you have to make appropriate request in your account. Go to <a href="#register" class="modal-trigger" style="text-decoration: underline;">�Withdraw funds�</a> section and enter payout amount that you want to withdraw. The minimum amount you can withdraw is $200. Once your request is made, the system will process it instantly.
             </p>
            </div>
            <div class="col l2 m2 s12 push-l1" style="margin-top: 10px;">
                <img src="img/bitcoinhand.png" class="responsive-img filter" alt="">
             </div>
        </div>

        <div class="row" style="margin-top: 45px;">
            <div class="col l2 m2 s12" style="margin-top: 10px;">
                <img src="img/bitcoinhouse.png" class="responsive-img filter" alt="">
             </div>

            <div class="col l10 m2 s12 push-l1" style="margin-top: 0px;">
                <h5 style="color:rgb(143, 178, 231); font-weight: bold;">7. Get your deposit back</h5>
             <p style="text-align: justify;">
                If you decided to stop working as an investor, you can get your deposit back. This feature will be available in the "<a href="#register" class="modal-trigger" style="text-decoration: underline;">Deposits list</a> " of your account after full 24 hours since addition your deposit. To get back a principal, click [Release] next to your deposit amount in your account. The deposit will be reflected on your account balance instantly and without any fee. Then you can make a new deposit or withdraw this amount.
             </p>
            </div>
           
        </div>
    </div>
</section>

<!-- btc price/network/wallets -->
<section style="background-color: whitesmoke; padding: 20px; margin-top: 40px;">
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
    include('register.php')
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