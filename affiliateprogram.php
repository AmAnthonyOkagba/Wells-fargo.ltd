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
		 <link rel="stylesheet" href="css/materialize.css">
	 <title>Wells-Fargo Ltd</title>
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
		   
			  <form action="#">
				<div class="row">
					<div class="col l6">
						<input type="text" style="border:rgb(83, 136, 216) solid 1px; border-radius: 10px; padding-left: 10px;" placeholder="First Name" class="validate" required>
					</div>
					<div class="col l6">
						<input type="text" style="border:rgb(83, 136, 216) solid 1px; border-radius: 10px; padding-left: 10px;" 
						placeholder="Last Name" class="validate" required>
					</div>
				</div>
				<div class="row">
					<div class="col l6">
						<input type="password" style="border:rgb(83, 136, 216) solid 1px; border-radius: 10px; padding-left: 10px;" placeholder="Password" class="validate" required>
					</div>
					<div class="col l6">
						<input type="password" style="border:rgb(83, 136, 216) solid 1px; border-radius: 10px; padding-left: 10px;" 
						placeholder="Re-Type Password" class="validate" required>
					</div>
				</div>
				<div class="row">
					<div class="col l6">
						<input type="text" style="border:rgb(83, 136, 216) solid 1px; border-radius: 10px; padding-left: 10px;" placeholder="Username" class="validate" required>
					</div>
					<div class="col l6">
						<input type="text" style="border:rgb(83, 136, 216) solid 1px; border-radius: 10px; padding-left: 10px;" 
						placeholder="Bitcoin Wallet Address" class="validate" required>
					</div>
				</div>
				<div class="row">
					<div class="col l6">
						<input type="text" style="border:rgb(83, 136, 216) solid 1px; border-radius: 10px; padding-left: 10px;" placeholder="Litecoin Wallet Address" class="validate" required>
					</div>
					<div class="col l6">
						<input type="text" style="border:rgb(83, 136, 216) solid 1px; border-radius: 10px; padding-left: 10px;" 
						placeholder="Ethereum Wallet Address" class="validate" required>
					</div>
				</div>
				<div class="row">
					<div class="col l6">
						<input type="email" style="border:rgb(83, 136, 216) solid 1px; border-radius: 10px; padding-left: 10px;" placeholder="E-mail Address" class="validate" required>
					</div>
					<div class="col l6">
						<input type="text" style="border:rgb(83, 136, 216) solid 1px; border-radius: 10px; padding-left: 10px;" 
						placeholder="Re-Type Email Address" class="validate" required>
					</div>
				</div>
				<div class="row">
					<div class="col l6">
						<input type="text" style="border:rgb(83, 136, 216) solid 1px; border-radius: 10px; padding-left: 10px;" placeholder="Secret Question" class="validate" required>
					</div>
					<div class="col l6">
						<input type="text" style="border:rgb(83, 136, 216) solid 1px; border-radius: 10px; padding-left: 10px;" 
						placeholder="Secret Answer" class="validate" required>
					</div>
				</div>
				<div class="row">
					<div class="col l6">
						<input type="text" style="border:rgb(83, 136, 216) solid 1px; border-radius: 10px; padding-left: 10px;" placeholder="Your Upline" class="validate" required>
					</div>
					<div class="col l6" style="margin-top: 10px;">
					  
						<label>
							<input type="checkbox" class="filled-in validate" required>
							<span>I agree with the <a href="#terms" style="text-decoration: underline;">Terms and conditions</a></span>
						</label>
					</div>
				</div>
			   
			   <div class="divider"></div>
			   <div class="modal-footer">
				<a href="#" >
				<input type="submit" class="btn" style="border-radius: 30px; color:lightcyan;
				 background-color:rgb(143, 178, 231); font-weight: bold;" value="Register">
				</a>
				</div>
			  </form>
			</div>
		   
	</div>
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
                  <a href="affiliateprogram.php" class="fer home">Affiliate Program</a>
               </li>
  
               <li class="nav-item " style="margin-left: 15px; margin-right: 15px;">
                  <a href="officialrepresentative.php" class="fer">Official Representatives</a>
               </li>
  
               <li class="nav-item " style="margin-left: 15px; margin-right: 15px;">
                  <a href="wheretobuy.php" class="fer">Where To Buy Bitcoin ?</a>
               </li>
			   </div>
            </ul>
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
				<h5 style="color:rgb(185, 213, 255); font-size: 38px; font-weight: bold; padding-bottom: 200px; margin-top: 120px;" class="plan">AFFILIATE PROGRAM</h5>
				
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

	<!-- affiliate program -->
	<section>
		<div class="container">
			<h5 style="font-weight: bolder;  color:rgb(143, 178, 231);">
				Affiliate Program
			</h5>
			<div class="divider"></div>
			<p class="" style="text-align: justify;">
				The company's growth is difficult to imagine without the help of numerous customers and partners. Many of them have been cooperated with us before and know about our capabilities, they helped us in shaping of business strategy and bringing the first investment in trust management. Today, any of our clients can be our partner and even earn through affiliate link. After registration each user receives a unique affiliate link (which contains his username). You can use this link for registration of new investors. Just send this link to your friend via email. Once your friend clicks a link and signs up, he becomes your referral.
			</p>
			<p style="border: dashed; text-align: center; border-width: 1px; padding: 10px; border-color: rgb(83, 136, 216);">
				<span class="center" style="font-size: 20px;">Every deposit of your referral will bring you a reward in the amount of 3%.</span>
			</p>
			<div>
				<div class="row plan">
					<div class="col l2 push-l4" style="font-weight: bold;"><h1>3%</h1></div>
					<div class="col s12 m6 l4 push-l3">
						<ul style="margin-top: 40px; margin-left: 15px;">
							<h4><li>AFFILIATE <br> COMMISSION</li></h4>
						</ul>
					</div>	
				</div>
			</div>
			<p class="">Affiliate commission is accrued automatically after addition of deposit. You can use this amount at your discretion - to withdraw it or use it for new deposit. To become an affiliate and start earning money, you don't even need to have your own active deposit. However, we remind you that the best evidence of successful investing is always a personal experience.</p>
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
 ?>
</body>
</html>