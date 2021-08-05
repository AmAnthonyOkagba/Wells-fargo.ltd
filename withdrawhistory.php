<?php
    include('config.php');
    include('nav.php');
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <style>
         .main-body{
            background-image:url(img/2.jpg);
            padding-bottom: 20px;
        }
    </style>
</head>
<body  style="font-family: 'Montserrat', sans-serif;">
       <!-- header / top / intro -->
  <section class="main-body">
    <div class="nav-header">
        <div> 
          
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
           <div class="row" style="margin-top:70px">
                <h4 style="color:lightcyan; font-weight:bold;">Withdrawal history</h4>
                <div class="divider white" style="margin-bottom:40px"></div>
                <div class="col l8 m6 s12" style="margin-top:50px;">
                    <table border="1" class="table" style="color:lightcyan; border-bottom-right-radius:40px; padding:180px">
                        <thead class="blue-grey darken-3" style="border-bottom-right-radius:40px">
                             <tr>
                                <th>Type</th>
                                <th style="text-align:right">Amount Withdrawn</th>
                                <th style="text-align:right">Date</th>
                                <th style="text-align:right">Status</th>
                             </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <div class="divider"></div><div class="divider"></div>
                            <tr>
                                
                                <td>Total:</td>
                                <td style="text-align:right">$0.00</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="divider"></div>
                    
                     



                </div>
                <div class="col l4 m6 s12" style="padding-left:120px">
                    <a href="home.php" class="btn btns blue-grey darken-3" style="padding-right:78px; font-weight:lighter">YOUR ACCOUNT</a><br><br>
                    <a href="deposit.php" class="btn btns blue-grey darken-3" style="padding-right:84px; font-weight:lighter">MAKE DEPOSIT</a><br><br>
                    <a href="desposithistory.php" class="btn btns blue-grey darken-3" style="padding-right:98px; font-weight:lighter">DEPOSIT LIST</a><br><br>
                    <a href="withdraw.php" class="btn btns blue-grey darken-3" style="padding-right:34px; font-weight:lighter">WITHDRAWAL FUNDS</a><br><br>
                    <a href="investment.php" class="btn btns blue-grey darken-3" style="padding-right:102px; font-weight:lighter">INVESTMENT</a><br><br>
                    <a href="rollover.php" class="btn btns blue-grey darken-3" style="padding-right:120px; font-weight:lighter">ROLLOVER</a><br><br>
                    <a href="withdrawhistory.php" class="btn btns blue-grey darken-3" style="padding-right:16px; font-weight:lighter">WITHDRAWALS HISTORY</a><br><br>
                    <a href="referrallink.php" class="btn btns blue-grey darken-3" style="padding-right:50px; font-weight:lighter">PROMO-MATERIALS</a><br><br>
                    <a href="editaccount.php" class="btn btns blue-grey darken-3" style="padding-right:46px; font-weight:lighter">ACCOUNT SETTINGS</a><br><br>
                    <a href="" class="btn btns blue-grey darken-3" style="padding-right:135px; font-weight:lighter">LOGOUT</a><br><br>
                </div>
            </div>
       </div>
  </section>

 


<!-- footer -->
<?php
    include('referralfooter.php');
    include('footer.php');
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