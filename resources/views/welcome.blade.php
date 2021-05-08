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
                    <span><a href="#">Categories <i class="fa fa-caret-down"></i> </a></span>
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
                   <img src="/img/darkened.png"  >        
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
    
       


  {{-- <div className={`dropdown ${this.state.dropdown ? 'active' : ''}`}>
              <ul>
                <nav>
                  <a href="/account">account</a>
                  <a href="/logout">logout</a>
                </nav>
              </ul>
            </div> --}}


        {{-- <div id="top-container">      
            <div id="top-ad-section">Need help posting an ad?
                <span class="click-text">Click Here.</span>
            </div>      
        <section id="navsection">
            <div class="icon-hold">
                <div class="row"> 
                    <i class="fa fa-envelope" style=" " aria-hidden="true"> 
                        <span class="icontext" style="position:absolute; left: 35px; ">
                wasatchfirearmnetwork@gmail.com
                        </span>
                    </i> 
                </div>
                <div class="row"> 
                    <i class="fa fa-envelope" style=" " aria-hidden="true"> 
                        <span class="icontext" style="position:absolute; left: 35px; ">wasatchfirearmnetwork@gmail.com
                        </span>
                    </i> 
                </div>   
            </div>         
        </section> 
        <img id="background-img"> --}}
        </div>
  
   
    <section style="background: green; transform: translate3d(0, 400px, 0); "></section>
    
    </body>
</html>
