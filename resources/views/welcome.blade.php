<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Wasatch Firearms</title>
        <link rel="stylesheet" href="/css/app.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@500;600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Merriweather:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Domine:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
         <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        


        <!-- Styles -->
       
    </head>
 
    <body>
 
    <div class="app-layout">
    
        <div class="first">
            <div id="top-ad-section">Need help posting an ad?
                <span class="click-text">Click Here.</span>
            </div>     
            <div class="contacts-container">
                <div class="mail-icon-row" >
                     <i class="fa fa-envelope"  aria-hidden="true"></i>
                     <span style="margin-left: 20px; "> wasatchfirearmnetwork@gmail.com</span>
                </div>
                <div class="phone-icon-row" >
                      <i class='fa fa-phone' ></i>
                      <span style="margin-left: 20px; ">888-272-5338</span>
                </div>    
            </div>
             <section id="logo-listing-container" style="">
                <img  src="/img/WasatchMedium.png">
         
               
             {{-- <div id="nav-links"  >
                    <a href="#"  >Home</a>
                    <a href="#">Utah Gun Classifieds</a>
                    <span>
                        <a class="dropdown" href="#">Categories 
                            <i class="fa fa-caret-down"></i> 
                        </a>
                        <ul class="type" >
                            <nav style="  background: white; position:relative; display: flex; flex-direction: column; height: 50px;">
                                <a href="/account">account</a>
                                <a href="/logout">logout</a>
                            </nav> 
                        </ul>
                        
                   </span>
                    <a href="#">Add Listing</a>
                    <a href="#">Manage Listing</a>
                    <a href="#" >Contact Us</a>
                </div> --}}
            <a href="#" class="login">Login
            </a>
            <a href="#" class="burger"><i class="fa fa-bars"></i>
            </a>
            
            </section>



              <section id="bigstuff" style="">
                <div class="background-img" >
                   <img src="/img/darkened.png" style="width: 100vw;"  >        
                 </div>
             </section> 
             
               <span class="bigtext" >Proud</span>
                <span class="bigtext"> Patriotic </span>
                <span class="bigtext">Responsible</span>
                <span class="buy">Buy, sell, and trade firearms in Utah.</span>
             
                <button class="button">
                    <h3 class="gun-classifieds-btn"  >
                    Utah Gun Classifieds </h3>
                </button> 
                
             
              

           
           
        </div>
         
       
    </div>
    
    

      
  
   
    <section id="lower-content" >
    <section id="promotional-wrapper">
           
            <div class="promotional-text-left">
                <div class="content-left">
                <span class="inside" style="color: #A63C3C; font-family: 'EB Garamond', serif; font-size: 3.4rem; margin-bottom: 20px;  ">YOU ARE ENTERED TO WIN A FREE</span>
                <span class="inside" style="color:#363973;font-size: 2.4rem " >Good Times Targets AR 500 Target</span>
                <span class="inside" style="color:#363973; ">Or A</span>
                <span class="inside" style="color:#363973; font-size: 2.4rem ">Victory Operational Works Holster</span>
                <span class="inside" style="color:#A63C3C; ">EVERY TIME YOU POST WITH US!</span>
                <span class="inside" style="color:#363973; ">
                    The winner will have a choice of the Targets or holsters offered, or can upgrade and pay the difference for other items.</span>
                </div>         
            </div> 
            <div class="promotional-section-right ">
            {{-- <img src="/img/good-times-square-ad.png"> --}}
            </div> 
        </section>
    </section>
     <section id="footer-wrapper">
     <div id="footer"> © 2019 Wasatch Firearm Network. <br> Utah Web Design and Utah SEO by Ranksey</div></section>
  
    </section>
    </body>
</html>
