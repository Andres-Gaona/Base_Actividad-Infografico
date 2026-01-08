 

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Panel Infográfico</title>
<meta name="robots" content="noindex, nofollow">
<link rel="shortcut icon" href="../assets/icons/favicon.ico" />
<link rel="apple-touch-icon" href="../assets/icons/apple-touch-icon.png" />
<link rel="apple-touch-icon" sizes="72x72" href="../assets/icons/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="114x114" href="../assets/icons/apple-touch-icon-114x114.png" />
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800|Roboto+Slab:400,700" rel="stylesheet">
<link href="css/fonts.css" rel="stylesheet" type="text/css">
<link href="css/layout.css" rel="stylesheet" type="text/css">
<link href="../css/weather-icons.css" rel="stylesheet" type="text/css">
<link href="../css/preloader.css" rel="stylesheet" type="text/css">
    
    

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
      
       <script type="text/javascript" src="../js/relaod_page.js"></script>
    <script>
      window.onload = refreshAt(24,0,0);
    </script>   
      
    <script src="../js/jquery-1.11.3.min.js"></script>
      
      
     <script type="text/javascript">
        $(document).ready(function() { 
    
            setInterval(function() {

                var iddiv = "#reloadPage";

                $.ajax({
                        url:   '../_includes/reloadhour.php',
                        type:  'post',
                        beforeSend: function () {
                                                      
                        },
                        success:  function (response) {
                                $(iddiv).html("");                 
                                $(iddiv).html(response);                                                                                                                                                                             
                        }
                });

            },  1000 * 60 * 20);            
            
        }); //end DOCUMENT READY                    
    </script>
     

<script type="text/javascript">
        $(document).ready(function() { 
    
            setInterval(function() {

                var iddiv = "#reloadPage";
                var ses = "2";
                var dat = "2025-12-30 19:57:30";
				var galileo_id = "1738632024";
				
                
            	var parametros = {
                    "ses" : ses,
                    "dat" : dat,
					"galileo_id" : galileo_id
                };
                $.ajax({
                        data:  parametros,
                        url:   '../_includes/reloadPage.php',
                        type:  'post',
                        beforeSend: function () {
                                                      
                        },
                        success:  function (response) {
                                $(iddiv).html("");                 
                                $(iddiv).html(response);
                        }
                });

            }, 10000);            
            
        }); //end DOCUMENT READY                    
    </script>
    
<script type="text/javascript">
        
            $(window).on('load', function() { // makes sure the whole site is loaded 
                $('#status').delay(2500).fadeOut('slow'); // will first fade out the loading animation 
                $('#preloader').delay(3500).fadeOut('slow'); // will fade out the white DIV that covers the website. 
                $('body').delay(3500).css({'overflow':'visible'});
                $('.total_content').delay(3500).css({'visibility':'visible'});
                
                
                
                 jQuery(document).ready(function() {

        	jQuery(".modern-ticker").modernTicker({
                 effect: "scroll",
                scrollType: "continuous",
                scrollStart: "inside",
                scrollInterval: 70,
                transitionTime: 800,
                linksEnabled: false,
                pauseOnHover: false,
                autoplay: true
            });
        	
        });
                
                
            })
       
    </script>  
 
  
    <link rel="stylesheet" href="../js/owl/docs/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../js/owl/docs/assets/owlcarousel/assets/owl.theme.default.min.css">
    <script src="../js/owl/docs/assets/owlcarousel/owl.carousel.js"></script>
    <script src="../js/carousellite/lib/jquery.easing-1.3.js"></script>
    <script src="../js/carousellite/lib/jquery.easing.compatibility.js"></script>
    <script src="../js/carousellite/lib/jquery.mousewheel-3.1.12.js"></script>
    <script src="../js/carousellite/src/jquery.jcarousellite.js"></script>

    <link href="../css/animate.css" rel="stylesheet" type="text/css">

  <link href="../js/ticker/Main/modern-ticker/css/modern-ticker.css" type="text/css" rel="stylesheet">
    <link href="../js/ticker/Main/modern-ticker/themes/theme1.css" type="text/css" rel="stylesheet">
    <link href="../css/weather-icons.css" rel="stylesheet" type="text/css">
    <script src="../js/ticker/Main/modern-ticker/js/jquery.modern-ticker.min.js" type="text/javascript"></script> 
    
     <script type="text/javascript" src="js/clock.js"></script>
</head>

<body style="background-color: #021d30">  
 
    <div id="preloader">
	    <div id="status"></div>
    </div>
    
    <div id="reloadPage"></div>

<div class="total_content">
     
  <div class="header_box">
    
    <div class="header_top">
				
      <div class="logo_box" style="background-color: #191c1e">
		  <div class="logo_container">
        	<div>	<img src="../assets/logos/hotel_2.png"/></div>
		  </div>
      </div>
      <div class="time_box">
        
        
        <span id="MexicoCity" class="real_current_time"></span>
        
         <div> Hora Local <span class="text_yellow">/ Local Time</span></div>
        </div>
      <div class="center_box">
          
          <div class="shadow_top"></div>
        <div class="content_center_box">
          
          <div class="weather_3_col flags_col">
            
            <div class="ocean_conditions_tittle">Océano Hoy <span class="text_yellow">/ Ocean Conditions</span></div>
<div class="flag_tide yellow_flag" >
              <img src="img/layout/flag_back.png" width="58" height="42" alt=""/> </div>
             <div class="inline_block tide_content">
               <div>Prohibido nadar</div>
                 <div class="text_yellow">Caution to Swim</div>
                 
             </div>
              
          </div>
            
            <div class="weather_3_col">
              <div class="date_esp">

            martes, 30	de diciembre<br/>                  
                  
                </div>
              <div class="date_eng">
                
            Tuesday, December 30<span class="date_apos">th</span>                  
                  
                
                  
                </div>    
            </div>
             
            
          <div class="weather_3_col weather_content">
            <div class="ocean_conditions_tittle temperature_tittle">Temperatura <span class="text_yellow">/ Temperature</span></div>
            <div class="weather_col weather_temp">29° C</div>
              <div class="weather_col weather_icon"><i class="wi wi-day-sunny-overcast"></i></div>
             <div class="weather_col weather_temp text_yellow">84° F</div>

          </div>
        </div>
      </div>
      <div class="time_world_box">
        <div class="time_individual">
          
            
            <span id="Vancouver" class="time_real"></span><br>
            Vancouver
          
          </div>
          
          <div class="time_individual" >
         
            <span id="NewYork" class="time_real"></span><br>
              New York
          </div>
          
          <div class="time_individual">
          <span id="Madrid" class="time_real"></span><br>
           Madrid
            
          
          </div>
      </div>
        
      <div class="no_smoke_box"><img src="img/layout/no_smoke.png" width="54" height="53" alt=""/></div>
    </div>
    <div class="header_down">
      <div class="shadow_top"></div>
      <div class="news_box">
        <div class="news_content">
          <div class="sign_box">
            <img src="img/layout/admiration.png" width="46" height="45" alt=""/> </div>
             
          <div class="news_ticker">
            
                <div class="modern-ticker mt-round">
        <div class="mt-body">
            <div class="mt-news">
                <ul>
                                    	  <li><a href="#" target="_self">Les sugerimos el uso de chaleco salvavidas en cualquier deporte acuático.</a></li>
                	  <li><a href="#" target="_self">The use of live vest is recommended for aquatic activities.</a></li>
                	                  	  <li><a href="#" target="_self">Por favor evite reservar camastros en la alberca y en la playa.</a></li>
                	  <li><a href="#" target="_self">Please avoid reserving lounge chairs at the pool and beach.</a></li>
                	                  	  <li><a href="#" target="_self">Es indispensable el uso de pañales especiales para bebés al nadar en la alberca.</a></li>
                	  <li><a href="#" target="_self">Babies must wear swimming diapers in pool areas.</a></li>
                	                  	  <li><a href="#" target="_self">Por favor no alimente a los peces o animales de la región.</a></li>
                	  <li><a href="#" target="_self">Please avoid feeding marine life or other animals.</a></li>
                	                  </ul>
            </div>
        </div>
    </div>
            
            
        
            </div>
        </div>
      </div>
      <div class="phones_number">
        
        <div class="phones_content">
          <div class="sign_box">
            <img src="img/layout/i_sign.png" width="46" height="45" alt=""/> </div>

<div id="total_phones_rotator" class="owl-carousel">
      <div class="item">
      <div class="phones_rotator">
        <div class="name_place_rotator">Estética y Spa<br>
          <span class="text_yellow">Beauty Shop & Spa</span></div>
        
        
                
        <div class="hour_place_rotator">
          8:00 AM<br>
          
          8:00 PM<br>
          </div>
        
        
          
        
        
        
        
        
                
        <div class="ext_place_rotator">
          
          <span class="icon icon-phone-call icon_rotator_place"></span>
          Ext. 794          
          </div>  
        
                
        
        </div>
    </div>
        <div class="item">
      <div class="phones_rotator">
        <div class="name_place_rotator">Lobby Bar<br>
          <span class="text_yellow">Lobby Bar</span></div>
        
        
                
        <div class="hour_place_rotator">
          5:00 PM<br>
          
          12:00 AM<br>
          </div>
        
        
          
        
        
        
        
        
                
        
        </div>
    </div>
        <div class="item">
      <div class="phones_rotator">
        <div class="name_place_rotator">Bar en Alberca<br>
          <span class="text_yellow">Pool Bar</span></div>
        
        
                
        <div class="hour_place_rotator">
          10:00 AM<br>
          
          6:00 PM<br>
          </div>
           
        
        </div>
    </div>
        <div class="item">
      <div class="phones_rotator">
        <div class="name_place_rotator">Bar Teatro<br>
          <span class="text_yellow">Theater Bar</span></div>
        
        
                
        <div class="hour_place_rotator">
          9:30 PM<br>
          
          10:30 PM<br>
          </div>
           
                
        
        </div>
    </div>
        <div class="item">
      <div class="phones_rotator">
        <div class="name_place_rotator">Recepción<br>
          <span class="text_yellow">Front Desk</span></div>
        
        
        
        <div class="hour_place_rotator hours_24">
          24 hrs
          </div>
          
                
        <div class="ext_place_rotator">
          
          <span class="icon icon-phone-call icon_rotator_place"></span>
          Ext. 725          
          </div>  
        
                
        
        </div>
    </div>
        <div class="item">
      <div class="phones_rotator">
        <div class="name_place_rotator">Toallero<br>
          <span class="text_yellow">Towel</span></div>
        
        
                
        <div class="hour_place_rotator">
          7:00 AM<br>
          
          9:00 PM<br>
          </div>
        
          
        
                
        <div class="ext_place_rotator">
          
          <span class="icon icon-phone-call icon_rotator_place"></span>
          Ext. 867          
          </div>  
               
        
        </div>
    </div>
        <div class="item">
      <div class="phones_rotator">
        <div class="name_place_rotator">Tienda de recuerdos<br>
          <span class="text_yellow">Gift Shop</span></div>
        
        
                
        <div class="hour_place_rotator">
          7:00 AM<br>
          
          11:00 PM<br>
          </div>
        
        
          
                
        <div class="ext_place_rotator">
          
          <span class="icon icon-phone-call icon_rotator_place"></span>
          Ext. 783          
          </div>  
        
                
        
        </div>
    </div>
        <div class="item">
      <div class="phones_rotator">
        <div class="name_place_rotator">Aventuras<br>
          <span class="text_yellow">Tours</span></div>
        
        
                
        <div class="hour_place_rotator">
          9:00 AM<br>
          
          5:00 PM<br>
          </div>
        
        
                
        <div class="ext_place_rotator">
          
          <span class="icon icon-phone-call icon_rotator_place"></span>
          Ext. 789          
          </div>  
        
                
        
        </div>
    </div>
        <div class="item">
      <div class="phones_rotator">
        <div class="name_place_rotator">Bar Jorongo<br>
          <span class="text_yellow">Jorongo Bar</span></div>
        
        
                
        <div class="hour_place_rotator">
          10:00 PM<br>
          
          2:00 AM<br>
          </div>
        
         
                
        
        </div>
    </div>
        <div class="item">
      <div class="phones_rotator">
        <div class="name_place_rotator">Deportes Acuáticos<br>
          <span class="text_yellow">Watersports</span></div>
        
        
                
        <div class="hour_place_rotator">
          9:00 AM<br>
          
          5:00 PM<br>
          </div>
        
        
                
        
        </div>
    </div>
        <div class="item">
      <div class="phones_rotator">
        <div class="name_place_rotator">Gimnasio<br>
          <span class="text_yellow">Gym</span></div>
        
        
                
        <div class="hour_place_rotator">
          7:00 AM<br>
          
          9:00 PM<br>
          </div>
        
         
        
                
        <div class="ext_place_rotator">
          
          <span class="icon icon-phone-call icon_rotator_place"></span>
          Ext. 794          
          </div>  
        
                
        
        </div>
    </div>
              </div>
            
              
            
        </div>
      </div>
    </div>
  </div>
  <div class="side_box">
    <div id="promo_rotator" class="show_rotator_box owl-carousel">
        
               
        <div class="item">
            <iframe scrolling="no" frameborder="0" src="\A+O\Infografico\shows.php\shows.php lunes\v2\shows.php" style="width: 478px; height: 640px"></iframe>
        
        </div>
                 
        <div class="item">
            <iframe scrolling="no" frameborder="0" src="\A+O\Infografico\shows.php\shows.php martes\v2\shows.php" style="width: 478px; height: 640px"></iframe>
        
        </div>
                 
        <div class="item">
            <iframe scrolling="no" frameborder="0" src="\A+O\Infografico\shows.php\shows.php miercoles\v2\shows.php" style="width: 478px; height: 640px"></iframe>
        
        </div>
                 
        <div class="item">
            <iframe scrolling="no" frameborder="0" src="\A+O\Infografico\shows.php\shows.php jueves\v2\shows.php" style="width: 478px; height: 640px"></iframe>
        
        </div>
                 
        <div class="item">
            <iframe scrolling="no" frameborder="0" src="\A+O\Infografico\shows.php\shows.php viernes\v2\shows.php" style="width: 478px; height: 640px"></iframe>
        
        </div>
                 
        <div class="item">
            <iframe scrolling="no" frameborder="0" src="\A+O\Infografico\shows.php\shows.php sabado\v2\shows.php" style="width: 478px; height: 640px"></iframe>
        
        </div>
                 
        <div class="item">
            <iframe scrolling="no" frameborder="0" src="\A+O\Infografico\shows.php\shows.php domingo\v2\shows.php" style="width: 478px; height: 640px"></iframe>
        
        </div>
                     
                
    </div>
    <div class="video_box">
       <div class="shadow_top_video"></div>
        <div class="video_shadow_right"></div>
      <iframe class="video_frame" src="video-v9.php" scrolling="no" frameborder="0"></iframe>

      
      </div>
  </div>
  <div class="content_box">
    <div class="rotator_activities">
        
        
        
        
        <div id="activity_rotator" class="owl-carousel">
            
         
                           
                            
              
                            
              <div class="item"> 
                  
                  
                  
                  <div class="restaurant_box" style="background-color: #fbac18">
        
          <div class="restaurant_top top_break">
            <div class="back_restaurant break_back">
              <div class="activites_shadow_top"></div>
              
                
                
                                               
              <div class="restaurant_name">Doña Rosa</div>
              <div class="restaurant_name_type">Buffet / Buffet</div>
              </div>
          
        
             
            </div>
            
          <div class="relative">
            
            <div class="circle_restaurant">
              
              <span class="icon icon-fork"></span>
              
              </div>
          </div>
            
          <div class="restaurant_info">
            <div class="rest_clas_es">DESAYUNO</div>
              <div class="rest_clas_en text_brown">BREAKFAST</div>
              <div class="hour_restaurant"><span class="icon icon-clock text_brown"></span>7:00 AM</div>
              <div class="dress_restaurant"><span class="icon icon-person text_brown"></span>Casual</div>
          </div>
        </div>
                              
          </div> 
              
                                
              <div class="item">
                  
                          <div class="activitie_box" style="background-image: url(../assets/activities/3ef815416f775098fe977004015c6193.jpg)">
                <div class="activites_shadow_top"></div>
                <div class="shadow_content"></div>



                  <div class="content_activity">
        <div class="name_activity">
                      Gimnasio                        <div class="orange_text">Gym</div>
        </div>
        <div class="show_info">
                     
          <div class="place_show">
                 <span class="icon icon-pointer"></span>
                 <div>Spa</div>
                 <div class="show_place_en"></div>
             </div>
            
            
            
            
            <div class="hour_show"><span class="icon icon-clock"></span> 7:00 AM</div>

            <div class="type_show">
              <span class="icon icon-person"></span> <span class="orange_text">Adultos</span> - <span class="gray_text">Adults</span>
            </div>
         </div>

                </div>

              </div>
                  
                  
    
          </div>
              
                                 
              <div class="item"> 
                  
                  
                  
                  <div class="restaurant_box" style="background-color: #fbac18">
        
          <div class="restaurant_top top_break">
            <div class="back_restaurant break_back">
              <div class="activites_shadow_top"></div>
              
                
                
                                               
              <div class="restaurant_name">El Agave</div>
              <div class="restaurant_name_type">Buffet / Buffet</div>
              </div>
          
        
             
            </div>
            
          <div class="relative">
            
            <div class="circle_restaurant">
              
              <span class="icon icon-fork"></span>
              
              </div>
          </div>
            
          <div class="restaurant_info">
            <div class="rest_clas_es">DESAYUNO</div>
              <div class="rest_clas_en text_brown">BREAKFAST</div>
              <div class="hour_restaurant"><span class="icon icon-clock text_brown"></span>8:00 AM</div>
              <div class="dress_restaurant"><span class="icon icon-person text_brown"></span>Casual</div>
          </div>
        </div>
                  
                                
          </div> 
              
                          
                            
              <div class="item"> 
                  
                  
                  
                  <div class="restaurant_box" style="background-color: #fbac18">
        
          <div class="restaurant_top top_break">
            <div class="back_restaurant break_back">
              <div class="activites_shadow_top"></div>
              
                
                
                                               
              <div class="restaurant_name">La Tortuga</div>
              <div class="restaurant_name_type">Buffet / Buffet</div>
              </div>
          
        
             
            </div>
            
          <div class="relative">
            
            <div class="circle_restaurant">
              
              <span class="icon icon-fork"></span>
              
              </div>
          </div>
            
          <div class="restaurant_info">
            <div class="rest_clas_es">DESAYUNO</div>
              <div class="rest_clas_en text_brown">BREAKFAST</div>
              <div class="hour_restaurant"><span class="icon icon-clock text_brown"></span>8:00 AM</div>
              <div class="dress_restaurant"><span class="icon icon-person text_brown"></span>Casual</div>
          </div>
        </div>
                  
                        
          </div> 
              
                              
              <div class="item">
                  
                          <div class="activitie_box" style="background-image: url(../assets/activities/ec5aa0b7846082a2415f0902f0da88f2.jpg)">
                <div class="activites_shadow_top"></div>
                <div class="shadow_content"></div>



                  <div class="content_activity">
        <div class="name_activity">
                      Baloncesto                        <div class="orange_text">Basketball</div>
        </div>
        <div class="show_info">
                     
          <div class="place_show">
                 <span class="icon icon-pointer"></span>
                 <div>Canchas de Tenis</div>
                 <div class="show_place_en">Tennis Courts</div>
             </div>
            
            
            
            
            <div class="hour_show"><span class="icon icon-clock"></span> 10:00 AM</div>

            <div class="type_show">
              <span class="icon icon-person"></span> <span class="orange_text">Familiar</span> - <span class="gray_text">Family</span>
            </div>
         </div>

                </div>

              </div>
                  
                  
    
          </div>
              
            
                            
                              
                            
              <div class="item">
                  
                          <div class="activitie_box" style="background-image: url(../assets/activities/abea47ba24142ed16b7d8fbf2c740e0d.jpg)">
                <div class="activites_shadow_top"></div>
                <div class="shadow_content"></div>



                  <div class="content_activity">
        <div class="name_activity">
                      Juegos en Barcy                        <div class="orange_text">Games in Barcy</div>
        </div>
        <div class="show_info">
                     
          <div class="place_show">
                 <span class="icon icon-pointer"></span>
                 <div>Barcy Club</div>
                 <div class="show_place_en">Barcy Club</div>
             </div>
            
            
            
            
            <div class="hour_show"><span class="icon icon-clock"></span> 10:00 AM</div>

            <div class="type_show">
              <span class="icon icon-person"></span> <span class="orange_text">Niños</span> - <span class="gray_text">Kids</span>
            </div>
         </div>

                </div>

              </div>
                  
                  
    
          </div>
              
            
                            
                              
                            
              <div class="item">
                  
                          <div class="activitie_box" style="background-image: url(../assets/activities/23fc4cba066f390a8cc729c7592b6ee8.jpg)">
                <div class="activites_shadow_top"></div>
                <div class="shadow_content"></div>



                  <div class="content_activity">
        <div class="name_activity">
                      Cornhole                        <div class="orange_text">Cornhole</div>
        </div>
        <div class="show_info">
                     
          <div class="place_show">
                 <span class="icon icon-pointer"></span>
                 <div>Jardín</div>
                 <div class="show_place_en">Garden</div>
             </div>
            
            
            
            
            <div class="hour_show"><span class="icon icon-clock"></span> 11:00 AM</div>

            <div class="type_show">
              <span class="icon icon-person"></span> <span class="orange_text">Familiar</span> - <span class="gray_text">Family</span>
            </div>
         </div>

                </div>

              </div>
                  
                  
    
          </div>
              
            
                            
                              
                            
              <div class="item">
                  
                          <div class="activitie_box" style="background-image: url(../assets/activities/1ff8a7b5dc7a7d1f0ed65aaa29c04b1e.jpg)">
                <div class="activites_shadow_top"></div>
                <div class="shadow_content"></div>



                  <div class="content_activity">
        <div class="name_activity">
                      Manualidad                        <div class="orange_text">Handcraft</div>
        </div>
        <div class="show_info">
                     
          <div class="place_show">
                 <span class="icon icon-pointer"></span>
                 <div>Barcy Club</div>
                 <div class="show_place_en">Barcy Club</div>
             </div>
            
            
            
            
            <div class="hour_show"><span class="icon icon-clock"></span> 11:00 AM</div>

            <div class="type_show">
              <span class="icon icon-person"></span> <span class="orange_text">Niños</span> - <span class="gray_text">Kids</span>
            </div>
         </div>

                </div>

              </div>
                  
                  
    
          </div>
                           
              <div class="item">
                  
                          <div class="activitie_box" style="background-image: url(../assets/activities/9407c826d8e3c07ad37cb2d13d1cb641.jpg)">
                <div class="activites_shadow_top"></div>
                <div class="shadow_content"></div>



                  <div class="content_activity">
        <div class="name_activity">
                      Crazy ball                        <div class="orange_text">Crazy ball</div>
        </div>
        <div class="show_info">
                     
          <div class="place_show">
                 <span class="icon icon-pointer"></span>
                 <div>Alberca</div>
                 <div class="show_place_en">Pool</div>
             </div>
            
            
            
            
            <div class="hour_show"><span class="icon icon-clock"></span> 11:00 AM</div>

            <div class="type_show">
              <span class="icon icon-person"></span> <span class="orange_text">Familiar</span> - <span class="gray_text">Family</span>
            </div>
         </div>

                </div>

              </div>
                  
                  
    
          </div>
              
            
                            
                              
                            
              <div class="item">
                  
                          <div class="activitie_box" style="background-image: url(../assets/activities/9b04d152845ec0a378394003c96da594.jpg)">
                <div class="activites_shadow_top"></div>
                <div class="shadow_content"></div>



                  <div class="content_activity">
        <div class="name_activity">
                      Clases de coctelería                        <div class="orange_text">Cocktail lessons</div>
        </div>
        <div class="show_info">
                     
          <div class="place_show">
                 <span class="icon icon-pointer"></span>
                 <div>Alberca</div>
                 <div class="show_place_en">Pool</div>
             </div>
            
            
            
            
            <div class="hour_show"><span class="icon icon-clock"></span> 11:30 AM</div>

            <div class="type_show">
              <span class="icon icon-person"></span> <span class="orange_text">Adultos</span> - <span class="gray_text">Adults</span>
            </div>
         </div>

                </div>

              </div>
                  
                  
    
          </div>
              
                    
            <div class="item">         
                        
                
                <div class="restaurant_box" style="background-color: #14bdc3">
        
          <div class="restaurant_top top_meal">
            <div class="back_restaurant meal_back">
              <div class="activites_shadow_top"></div>
              
              
                               
              <div class="restaurant_name">La Tortuga</div>
              <div class="restaurant_name_type">Buffet / Buffet</div>
            </div>
          
        
            
            </div>
            
          <div class="relative">
            
            <div class="circle_restaurant">
              
              <span class="icon icon-fork"></span>
              
              </div>
          </div>
            
          <div class="restaurant_info">
            <div class="rest_clas_es">COMIDA</div>
              <div class="rest_clas_en blue_text">MEAL</div>
              <div class="hour_restaurant"><span class="icon icon-clock blue_text"></span>12:00 PM</div>
              <div class="dress_restaurant"><span class="icon icon-person blue_text"></span>Casual</div>
                  </div>
        </div>
                
                
                
                
                
          </div> 
            
              
              
              
                                        
                              
                            
              <div class="item">
                  
                          <div class="activitie_box" style="background-image: url(../assets/activities/6512bd43d9caa6e02c990b0a82652dca.jpg)">
                <div class="activites_shadow_top"></div>
                <div class="shadow_content"></div>



                  <div class="content_activity">
        <div class="name_activity">
                      Aquaerobics                        <div class="orange_text">Aquaerobics</div>
        </div>
        <div class="show_info">
                     
          <div class="place_show">
                 <span class="icon icon-pointer"></span>
                 <div>Alberca</div>
                 <div class="show_place_en">Pool</div>
             </div>
            
            
            
            
            <div class="hour_show"><span class="icon icon-clock"></span> 12:00 PM</div>

            <div class="type_show">
              <span class="icon icon-person"></span> <span class="orange_text">Familiar</span> - <span class="gray_text">Family</span>
            </div>
         </div>

                </div>

              </div>
                  
                  
    
          </div>
              
            
                            
                              
                            
              <div class="item">
                  
                          <div class="activitie_box" style="background-image: url(../assets/activities/e2a2dcc36a08a345332c751b2f2e476c.jpg)">
                <div class="activites_shadow_top"></div>
                <div class="shadow_content"></div>



                  <div class="content_activity">
        <div class="name_activity">
                      Manos a la obra                        <div class="orange_text">Let's do it</div>
        </div>
        <div class="show_info">
                     
          <div class="place_show">
                 <span class="icon icon-pointer"></span>
                 <div>Barcy Club</div>
                 <div class="show_place_en">Barcy Club</div>
             </div>
            
            
            
            
            <div class="hour_show"><span class="icon icon-clock"></span> 12:00 PM</div>

            <div class="type_show">
              <span class="icon icon-person"></span> <span class="orange_text">Niños</span> - <span class="gray_text">Kids</span>
            </div>
         </div>

                </div>

              </div>
                  
                  
    
          </div>
              
            
                            
                              
                            
              <div class="item">
                  
                          <div class="activitie_box" style="background-image: url(../assets/activities/eeb69a3cb92300456b6a5f4162093851.jpg)">
                <div class="activites_shadow_top"></div>
                <div class="shadow_content"></div>



                  <div class="content_activity">
        <div class="name_activity">
                      Trivia                        <div class="orange_text">Trivia</div>
        </div>
        <div class="show_info">
                     
          <div class="place_show">
                 <span class="icon icon-pointer"></span>
                 <div>Alberca</div>
                 <div class="show_place_en">Pool</div>
             </div>
            
            
            
            
            <div class="hour_show"><span class="icon icon-clock"></span> 1:00 PM</div>

            <div class="type_show">
              <span class="icon icon-person"></span> <span class="orange_text">Familiar</span> - <span class="gray_text">Family</span>
            </div>
         </div>

                </div>

              </div>
                  
                  
    
          </div>
              
            
                            
                              
                            
              
                            
              
            <div class="item">         
                        
                
                <div class="restaurant_box" style="background-color: #14bdc3">
        
          <div class="restaurant_top top_meal">
            <div class="back_restaurant meal_back">
              <div class="activites_shadow_top"></div>
              
              
                               
              <div class="restaurant_name">Doña Rosa</div>
              <div class="restaurant_name_type">Buffet / Buffet</div>
            </div>
          
        
            
            </div>
            
          <div class="relative">
            
            <div class="circle_restaurant">
              
              <span class="icon icon-fork"></span>
              
              </div>
          </div>
            
          <div class="restaurant_info">
            <div class="rest_clas_es">COMIDA</div>
              <div class="rest_clas_en blue_text">MEAL</div>
              <div class="hour_restaurant"><span class="icon icon-clock blue_text"></span>2:00 PM</div>
              <div class="dress_restaurant"><span class="icon icon-person blue_text"></span>Casual</div>
                  </div>
        </div>
                
                
                
                
                
          </div> 
            
              
              
              
                                        
                              
                            
              <div class="item">
                  
                          <div class="activitie_box" style="background-image: url(../assets/activities/6f4922f45568161a8cdf4ad2299f6d23.jpg)">
                <div class="activites_shadow_top"></div>
                <div class="shadow_content"></div>



                  <div class="content_activity">
        <div class="name_activity">
                      Volleyball acuático                        <div class="orange_text">Water Volleyball</div>
        </div>
        <div class="show_info">
                     
          <div class="place_show">
                 <span class="icon icon-pointer"></span>
                 <div>Alberca</div>
                 <div class="show_place_en">Pool</div>
             </div>
            
            
            
            
            <div class="hour_show"><span class="icon icon-clock"></span> 2:00 PM</div>

            <div class="type_show">
              <span class="icon icon-person"></span> <span class="orange_text">Familiar</span> - <span class="gray_text">Family</span>
            </div>
         </div>

                </div>

              </div>
                  
                  
    
          </div>
              
            
                            
                              
                            
              <div class="item">
                  
                          <div class="activitie_box" style="background-image: url(../assets/activities/9afefc52942cb83c7c1f14b2139b09ba.jpg)">
                <div class="activites_shadow_top"></div>
                <div class="shadow_content"></div>



                  <div class="content_activity">
        <div class="name_activity">
                      Rally                        <div class="orange_text">Rally</div>
        </div>
        <div class="show_info">
                     
          <div class="place_show">
                 <span class="icon icon-pointer"></span>
                 <div>Jardín</div>
                 <div class="show_place_en">Garden</div>
             </div>
            
            
            
            
            <div class="hour_show"><span class="icon icon-clock"></span> 2:00 PM</div>

            <div class="type_show">
              <span class="icon icon-person"></span> <span class="orange_text">Niños</span> - <span class="gray_text">Kids</span>
            </div>
         </div>

                </div>

              </div>
                  
                  
    
          </div>
              
            
                            
                              
                            
              <div class="item">
                  
                          <div class="activitie_box" style="background-image: url(../assets/activities/1091660f3dff84fd648efe31391c55241.jpg)">
                <div class="activites_shadow_top"></div>
                <div class="shadow_content"></div>



                  <div class="content_activity">
        <div class="name_activity">
                      Xbox                        <div class="orange_text"></div>
        </div>
        <div class="show_info">
                     
          <div class="place_show">
                 <span class="icon icon-pointer"></span>
                 <div>Barcy Club</div>
                 <div class="show_place_en">Barcy Club</div>
             </div>
            
            
            
            
            <div class="hour_show"><span class="icon icon-clock"></span> 3:00 PM</div>

            <div class="type_show">
              <span class="icon icon-person"></span> <span class="orange_text">Niños</span> - <span class="gray_text">Kids</span>
            </div>
         </div>

                </div>

              </div>
                  
                  
    
          </div>
              
            
                            
                              
                            
              <div class="item">
                  
                          <div class="activitie_box" style="background-image: url(../assets/activities/26588e932c7ccfa1df309280702fe1b5.jpg)">
                <div class="activites_shadow_top"></div>
                <div class="shadow_content"></div>



                  <div class="content_activity">
        <div class="name_activity">
                      Black Jack                        <div class="orange_text">Black Jack</div>
        </div>
        <div class="show_info">
                     
          <div class="place_show">
                 <span class="icon icon-pointer"></span>
                 <div>Alberca Adultos</div>
                 <div class="show_place_en">Adult Pool</div>
             </div>
            
            
            
            
            <div class="hour_show"><span class="icon icon-clock"></span> 3:00 PM</div>

            <div class="type_show">
              <span class="icon icon-person"></span> <span class="orange_text">Adultos</span> - <span class="gray_text">Adults</span>
            </div>
         </div>

                </div>

              </div>
                  
                  
    
          </div>
              
            
                            
                              
                            
              <div class="item">
                  
                          <div class="activitie_box" style="background-image: url(../assets/activities/cb70ab375662576bd1ac5aaf16b3fca4.jpg)">
                <div class="activites_shadow_top"></div>
                <div class="shadow_content"></div>



                  <div class="content_activity">
        <div class="name_activity">
                      Fútbol de Playa                        <div class="orange_text">Beach Soccer</div>
        </div>
        <div class="show_info">
                     
          <div class="place_show">
                 <span class="icon icon-pointer"></span>
                 <div>Playa</div>
                 <div class="show_place_en">Beach</div>
             </div>
            
            
            
            
            <div class="hour_show"><span class="icon icon-clock"></span> 3:00 PM</div>

            <div class="type_show">
              <span class="icon icon-person"></span> <span class="orange_text">Familiar</span> - <span class="gray_text">Family</span>
            </div>
         </div>

                </div>

              </div>
                  
                  
    
          </div>
              
            
                            
                              
                            
              <div class="item">
                  
                          <div class="activitie_box" style="background-image: url(../assets/activities/c6f798b844366ccd65d99bc7f31e0e02.jpg)">
                <div class="activites_shadow_top"></div>
                <div class="shadow_content"></div>



                  <div class="content_activity">
        <div class="name_activity">
                      Mural de los deseos                         <div class="orange_text">Wish Mural</div>
        </div>
        <div class="show_info">
                     
          <div class="place_show">
                 <span class="icon icon-pointer"></span>
                 <div>Alberca</div>
                 <div class="show_place_en">Pool</div>
             </div>
            
            
            
            
            <div class="hour_show"><span class="icon icon-clock"></span> 4:00 PM</div>

            <div class="type_show">
              <span class="icon icon-person"></span> <span class="orange_text">Niños</span> - <span class="gray_text">Kids</span>
            </div>
         </div>

                </div>

              </div>
                  
                  
    
          </div>
              
            
                            
                              
                            
              <div class="item">
                  
                          <div class="activitie_box" style="background-image: url(../assets/activities/8a0e1141fd37fa5b98d5bb769ba1a7cc.jpg)">
                <div class="activites_shadow_top"></div>
                <div class="shadow_content"></div>



                  <div class="content_activity">
        <div class="name_activity">
                      Zumba                        <div class="orange_text">Zumba</div>
        </div>
        <div class="show_info">
                     
          <div class="place_show">
                 <span class="icon icon-pointer"></span>
                 <div>Alberca</div>
                 <div class="show_place_en">Pool</div>
             </div>
            
            
            
            
            <div class="hour_show"><span class="icon icon-clock"></span> 4:30 PM</div>

            <div class="type_show">
              <span class="icon icon-person"></span> <span class="orange_text">Familiar</span> - <span class="gray_text">Family</span>
            </div>
         </div>

                </div>

              </div>
                  
                  
    
          </div>
              
            
                            
                              
                            
              
                          
            <div class="item">         
                
                 <div class="restaurant_box" style="background-color: #0a3959">
        
          <div class="restaurant_top">
            <div class="back_restaurant">
              <div class="activites_shadow_top"></div>
              
              < 
                           <div class="reserve_flag">Reserve</div>
                                        
              <div class="restaurant_name">Kyoto</div>
              <div class="restaurant_name_type">Sushi Bar / Sushi Bar</div>
            </div>
          
        
            
            </div>
            
          <div class="relative">
            
            <div class="circle_restaurant">
              
              <span class="icon icon-fork"></span>
              
              </div>
          </div>
            
         <div class="restaurant_info">
            <div class="rest_clas_es">CENA</div>
              <div class="rest_clas_en">DINNER</div>
              <div class="hour_restaurant"><span class="icon icon-clock"></span>6:00 PM</div>
              <div class="dress_restaurant"><span class="icon icon-person"></span>Formal</div>
            </div>
        </div>
                
                
                
                
                
          </div>
            
            
            
            
                                        
                              
                            
              
                          
            <div class="item">         
                
                 <div class="restaurant_box" style="background-color: #0a3959">
        
          <div class="restaurant_top">
            <div class="back_restaurant">
              <div class="activites_shadow_top"></div>
              
              < 
                           <div class="reserve_flag">Reserve</div>
                                        
              <div class="restaurant_name">La Fontana</div>
              <div class="restaurant_name_type">Italiano / Italian</div>
            </div>
          
        
            
            </div>
            
          <div class="relative">
            
            <div class="circle_restaurant">
              
              <span class="icon icon-fork"></span>
              
              </div>
          </div>
            
         <div class="restaurant_info">
            <div class="rest_clas_es">CENA</div>
              <div class="rest_clas_en">DINNER</div>
              <div class="hour_restaurant"><span class="icon icon-clock"></span>6:00 PM</div>
              <div class="dress_restaurant"><span class="icon icon-person"></span>Formal</div>
            </div>
        </div>
                
                
                
                
                
          </div>
            
            
            
            
                                        
                              
                            
              
                          
            <div class="item">         
                
                 <div class="restaurant_box" style="background-color: #0a3959">
        
          <div class="restaurant_top">
            <div class="back_restaurant">
              <div class="activites_shadow_top"></div>
              
              < 
                           <div class="reserve_flag">Reserve</div>
                                        
              <div class="restaurant_name">El Agave</div>
              <div class="restaurant_name_type">Mexicano / Mexican</div>
            </div>
          
        
            
            </div>
            
          <div class="relative">
            
            <div class="circle_restaurant">
              
              <span class="icon icon-fork"></span>
              
              </div>
          </div>
            
         <div class="restaurant_info">
            <div class="rest_clas_es">CENA</div>
              <div class="rest_clas_en">DINNER</div>
              <div class="hour_restaurant"><span class="icon icon-clock"></span>6:00 PM</div>
              <div class="dress_restaurant"><span class="icon icon-person"></span>Formal</div>
            </div>
        </div>
                
                
                
                
                
          </div>
            
            
            
            
                                        
                              
                            
              
                          
            <div class="item">         
                
                 <div class="restaurant_box" style="background-color: #0a3959">
        
          <div class="restaurant_top">
            <div class="back_restaurant">
              <div class="activites_shadow_top"></div>
              
              <              
              <div class="restaurant_name">Doña Rosa</div>
              <div class="restaurant_name_type">Buffet / Buffet</div>
            </div>
          
        
            
            </div>
            
          <div class="relative">
            
            <div class="circle_restaurant">
              
              <span class="icon icon-fork"></span>
              
              </div>
          </div>
            
         <div class="restaurant_info">
            <div class="rest_clas_es">CENA</div>
              <div class="rest_clas_en">DINNER</div>
              <div class="hour_restaurant"><span class="icon icon-clock"></span>6:30 PM</div>
              <div class="dress_restaurant"><span class="icon icon-person"></span>Casual</div>
            </div>
        </div>
                
                
                
                
                
          </div>
            
            
            
            
                                        
                              
                            
              <div class="item">
                  
                          <div class="activitie_box" style="background-image: url(../assets/activities/b6f0479ae87d244975439c6124592772.jpg)">
                <div class="activites_shadow_top"></div>
                <div class="shadow_content"></div>



                  <div class="content_activity">
        <div class="name_activity">
                      Música en Vivo                        <div class="orange_text">Live Music</div>
        </div>
        <div class="show_info">
                     
          <div class="place_show">
                 <span class="icon icon-pointer"></span>
                 <div>Lobby</div>
                 <div class="show_place_en">Lobby</div>
             </div>
            
            
            
            
            <div class="hour_show"><span class="icon icon-clock"></span> 6:30 PM</div>

            <div class="type_show">
              <span class="icon icon-person"></span> <span class="orange_text">Familiar</span> - <span class="gray_text">Family</span>
            </div>
         </div>

                </div>

              </div>
                  
                  
    
          </div>
              
            
                            
                              
                            
              
                          
            <div class="item">         
                
                 <div class="restaurant_box" style="background-color: #0a3959">
        
          <div class="restaurant_top">
            <div class="back_restaurant">
              <div class="activites_shadow_top"></div>
              
              < 
                           <div class="reserve_flag">Reserve</div>
                                        
              <div class="restaurant_name">Sea food</div>
              <div class="restaurant_name_type">Carnes y Mariscos / Meat cuts and Seafood</div>
            </div>
          
        
            
            </div>
            
          <div class="relative">
            
            <div class="circle_restaurant">
              
              <span class="icon icon-fork"></span>
              
              </div>
          </div>
            
         <div class="restaurant_info">
            <div class="rest_clas_es">CENA</div>
              <div class="rest_clas_en">DINNER</div>
              <div class="hour_restaurant"><span class="icon icon-clock"></span>7:30 PM</div>
              <div class="dress_restaurant"><span class="icon icon-person"></span>Casual</div>
            </div>
        </div>
                
                
                
                
                
          </div>
            
            
            
            
                                        
                              
                            
              <div class="item">
                  
                          <div class="activitie_box" style="background-image: url(../assets/activities/aa169b49b583a2b5af89203c2b78c67c.jpg)">
                <div class="activites_shadow_top"></div>
                <div class="shadow_content"></div>



                  <div class="content_activity">
        <div class="name_activity">
                      Torneo de Billar                        <div class="orange_text">Billiard Tournament</div>
        </div>
        <div class="show_info">
                     
          <div class="place_show">
                 <span class="icon icon-pointer"></span>
                 <div>Salón de Juegos</div>
                 <div class="show_place_en">Entertainment center</div>
             </div>
            
            
            
            
            <div class="hour_show"><span class="icon icon-clock"></span> 8:00 PM</div>

            <div class="type_show">
              <span class="icon icon-person"></span> <span class="orange_text">Adultos</span> - <span class="gray_text">Adults</span>
            </div>
         </div>

                </div>

              </div>
                  
                  
    
          </div>
              
            
                            
                              
                            
              <div class="item">
                  
                          <div class="activitie_box" style="background-image: url(../assets/activities/2d3acd3e240c61820625fff66a19938f.jpg)">
                <div class="activites_shadow_top"></div>
                <div class="shadow_content"></div>



                  <div class="content_activity">
        <div class="name_activity">
                      Muxical Show                        <div class="orange_text"></div>
        </div>
        <div class="show_info">
                     
          <div class="place_show">
                 <span class="icon icon-pointer"></span>
                 <div>Teatro Oaxaca </div>
                 <div class="show_place_en">Oaxaca Theater</div>
             </div>
            
            
            
            
            <div class="hour_show"><span class="icon icon-clock"></span> 9:00 PM</div>

            <div class="type_show">
              <span class="icon icon-person"></span> <span class="orange_text">Familiar</span> - <span class="gray_text">Family</span>
            </div>
         </div>

                </div>

              </div>
                  
                  
    
          </div>
              
            
                            
                              
            
            
            
            
            
            
            
        
            

            
            
            
            
            
            
            
            
            

            
            </div>
        
        
        

 
    
        


    </div>
    <div class="foot_content">
        
        
<div id="rotator_especial" class="owl-carousel">
        <div class="item">
      <div class="promo_box">
        
        
        <div class="promo_total_content">
          
          <div class="promo_content blue_content">
            <div class="promo_tittle blue_tittle">
              <div class="shadow_top_promo"></div>
              <div class="promo_tittle_content">
                
                
                <div class="tittle_promo_es">Barceló Huatulco</div>
                <div class="tittle_promo_en">Código de Conducta Nacional</div> 
                </div>
              </div>
            
            
            <div class="promo_info_box">
              <div class="info_promo_es">Comprometidos con la protección de niñas, niños y adolescentes</div>
              <div class="info_promo_en">atencionccn@sectur.gob.mx</div>
              </div>
            </div>
          <div class="promo_picture">
            <div class="promo_shadow_right"></div>
									<img src="../promos/cache/promos/crop/QR%20CCN_Barceló%20Huatulco_w360_h258/QR%20CCN_Barceló%20Huatulco_08260737.jpg" width="360" height="258" alt="" >

										  
			  
			  
			  
            
            
            </div>    
          </div>
        </div>  
    </div>
        <div class="item">
      <div class="promo_box">
        
        
        <div class="promo_total_content">
          
          <div class="promo_content blue_content">
            <div class="promo_tittle blue_tittle">
              <div class="shadow_top_promo"></div>
              <div class="promo_tittle_content">
                
                
                <div class="tittle_promo_es">Barceló</div>
                <div class="tittle_promo_en">Huatulco</div> 
                </div>
              </div>
            
            
            <div class="promo_info_box">
              <div class="info_promo_es">Accede a nuestra App</div>
              <div class="info_promo_en">For information, please scan the QR code</div>
              </div>
            </div>
          <div class="promo_picture">
            <div class="promo_shadow_right"></div>
									<img src="../promos/cache/promos/crop/App%20Barceló%20Huatulco_3_w360_h258/App%20Barceló%20Huatulco_3_07181101.jpg" width="360" height="258" alt="" >

										  
			  
			  
			  
            
            
            </div>    
          </div>
        </div>  
    </div>
        <div class="item">
      <div class="promo_box">
        
        
        <div class="promo_total_content">
          
          <div class="promo_content red_content">
            <div class="promo_tittle red_tittle">
              <div class="shadow_top_promo"></div>
              <div class="promo_tittle_content">
                
                
                <div class="tittle_promo_es">Barceló</div>
                <div class="tittle_promo_en">Huatulco</div> 
                </div>
              </div>
            
            
            <div class="promo_info_box">
              <div class="info_promo_es">Consulte nuestro Programa de Fin de Año</div>
              <div class="info_promo_en">New Year's Eve Program</div>
              </div>
            </div>
          <div class="promo_picture">
            <div class="promo_shadow_right"></div>
									<img src="../promos/cache/promos/crop/modificar_1_w360_h258/modificar_1_12190152.jpg" width="360" height="258" alt="" >

										  
			  
			  
			  
            
            
            </div>    
          </div>
        </div>  
    </div>
        <div class="item">
      <div class="promo_box">
        
        
        <div class="promo_total_content">
          
          <div class="promo_content red_content">
            <div class="promo_tittle red_tittle">
              <div class="shadow_top_promo"></div>
              <div class="promo_tittle_content">
                
                
                <div class="tittle_promo_es">Barceló</div>
                <div class="tittle_promo_en">Huatulco</div> 
                </div>
              </div>
            
            
            <div class="promo_info_box">
              <div class="info_promo_es">Consulte nuestro Programa de Fin de Año</div>
              <div class="info_promo_en">New Year's Eve Program</div>
              </div>
            </div>
          <div class="promo_picture">
            <div class="promo_shadow_right"></div>
									<img src="../promos/cache/promos/crop/modificar_2_w360_h258/modificar_2_12190154.jpg" width="360" height="258" alt="" >

										  
			  
			  
			  
            
            
            </div>    
          </div>
        </div>  
    </div>
       
      
    
    
    
    
    
    
    
    
 
    
  
  
  
        
    
</div>
<div class="restaurat_box"> 
        <div class="rest_shadow_left"></div>
        <div class="rest_shadow_right"></div>
          
        <div class="header_restaurants">
          
          <span class="r_icon">R</span>
            
          <div class="tittle_rest_r"><span class="orange_text">REQUIERE RESERVACIÓN</span> / RESERVATION NEEDED</div>
            
            <div class="tittle_drees_code"> <span class="orange_text">ROPA</span> / DRESS CODE</div>
            
        </div>

    
            
          
          <div id="rest_rotator" class="total_box_rest">
          
          
              <ul>
              

                  
                                 
                 <li><div class="rest_row">
            <div class="rest_tittle">
              <div class="rest_tittle_content">DESAYUNO / BREAKFAST</div>
            </div>
          </div></li>
                    
                                
                  
                  
                 <li>
 
                  <div class="rest_row">
        <div class="inline_block no_reserve" ></div><div class="inline_block rest_text rest_name_list">Doña Rosa</div><div class="inline_block rest_text type_rest_line" style="">Buffet / Buffet</div>
    
    <div class="inline_block rest_text rest_clock_line"><span class="rest_hour inline_block">7:00 AM</span> <span class="icon icon-clock orange_text"></span> <span class="rest_hour inline_block">12:00 PM</span>  </div>

    
    <div class="dress_code_box inline_block">Casual</div>
 </div>
                </li>  
                  

       
                                  
                  
                  
                 <li>
 
                  <div class="rest_row">
        <div class="inline_block no_reserve" ></div><div class="inline_block rest_text rest_name_list">El Agave</div><div class="inline_block rest_text type_rest_line" style="">Buffet / Buffet</div>
    
    <div class="inline_block rest_text rest_clock_line"><span class="rest_hour inline_block">8:00 AM</span> <span class="icon icon-clock orange_text"></span> <span class="rest_hour inline_block">10:00 AM</span>  </div>

    
    <div class="dress_code_box inline_block">Casual</div>
 </div>
                </li>  
                  

       
                                  
                  
                  
                 <li>
 
                  <div class="rest_row">
        <div class="inline_block no_reserve" ></div><div class="inline_block rest_text rest_name_list">La Tortuga</div><div class="inline_block rest_text type_rest_line" style="">Buffet / Buffet</div>
    
    <div class="inline_block rest_text rest_clock_line"><span class="rest_hour inline_block">8:00 AM</span> <span class="icon icon-clock orange_text"></span> <span class="rest_hour inline_block">11:00 AM</span>  </div>

    
    <div class="dress_code_box inline_block">Casual</div>
 </div>
                </li>  
                  

       
                              
                  
                  
              
                  
                           
		<li>		  
        <div class="rest_row">
          <div class="rest_tittle" style="background-color: #15a0a0">
              <div class="rest_tittle_content" style="background-color: #14bdc3">COMIDA / MEAL</div>
            </div>
        </div>
		</li>	
				  
                    
                  
<li>
 
                  <div class="rest_row">
        <div class="inline_block no_reserve" ></div><div class="inline_block rest_text rest_name_list">La Tortuga</div><div class="inline_block rest_text type_rest_line" style="">Buffet / Buffet</div>
    
    <div class="inline_block rest_text rest_clock_line"><span class="rest_hour inline_block">12:00 PM</span> <span class="icon icon-clock orange_text"></span> <span class="rest_hour inline_block">6:30 PM</span>  </div>

    
    <div class="dress_code_box inline_block">Casual</div>
 </div>
                </li>  
                      
                  
<li>
 
                  <div class="rest_row">
        <div class="inline_block no_reserve" ></div><div class="inline_block rest_text rest_name_list">Doña Rosa</div><div class="inline_block rest_text type_rest_line" style="">Buffet / Buffet</div>
    
    <div class="inline_block rest_text rest_clock_line"><span class="rest_hour inline_block">2:00 PM</span> <span class="icon icon-clock orange_text"></span> <span class="rest_hour inline_block">4:30 PM</span>  </div>

    
    <div class="dress_code_box inline_block">Casual</div>
 </div>
                </li>  
                  
                  
            
        
                              
                              
                  <li> 
                 <div class="rest_row">
          <div class="rest_tittle" style="background-color: #195072">
              <div class="rest_tittle_content" style="background-color: #0a3959">CENA / DINNER</div>
            </div>
          </div>
                      
                 </li>    
                          <li>
 
                  <div class="rest_row">
    <div class="inline_block rest_text reserve_line" style="background-color: #F15A2A; width: 32px;">R</div>
                      
                                            <div class="inline_block rest_text rest_name_list">Kyoto</div><div class="inline_block rest_text type_rest_line" style="">Sushi Bar / Sushi Bar</div>
    
    <div class="inline_block rest_text rest_clock_line"><span class="rest_hour inline_block">6:00 PM</span> <span class="icon icon-clock orange_text"></span> <span class="rest_hour inline_block">9:00 PM</span>  </div>

    
    <div class="dress_code_box inline_block">Formal</div>
 </div>
                </li> 
                            <li>
 
                  <div class="rest_row">
    <div class="inline_block rest_text reserve_line" style="background-color: #F15A2A; width: 32px;">R</div>
                      
                                            <div class="inline_block rest_text rest_name_list">El Agave</div><div class="inline_block rest_text type_rest_line" style="">Mexicano / Mexican</div>
    
    <div class="inline_block rest_text rest_clock_line"><span class="rest_hour inline_block">6:00 PM</span> <span class="icon icon-clock orange_text"></span> <span class="rest_hour inline_block">9:30 PM</span>  </div>

    
    <div class="dress_code_box inline_block">Formal</div>
 </div>
                </li> 
                            <li>
 
                  <div class="rest_row">
    <div class="inline_block rest_text reserve_line" style="background-color: #F15A2A; width: 32px;">R</div>
                      
                                            <div class="inline_block rest_text rest_name_list">La Fontana</div><div class="inline_block rest_text type_rest_line" style="">Italiano / Italian</div>
    
    <div class="inline_block rest_text rest_clock_line"><span class="rest_hour inline_block">6:00 PM</span> <span class="icon icon-clock orange_text"></span> <span class="rest_hour inline_block">9:30 PM</span>  </div>

    
    <div class="dress_code_box inline_block">Formal</div>
 </div>
                </li> 
                            <li>
 
                  <div class="rest_row">
        <div class="inline_block no_reserve" ></div><div class="inline_block rest_text rest_name_list">Doña Rosa</div><div class="inline_block rest_text type_rest_line" style="">Buffet / Buffet</div>
    
    <div class="inline_block rest_text rest_clock_line"><span class="rest_hour inline_block">6:30 PM</span> <span class="icon icon-clock orange_text"></span> <span class="rest_hour inline_block">10:30 PM</span>  </div>

    
    <div class="dress_code_box inline_block">Casual</div>
 </div>
                </li> 
                            <li>
 
                  <div class="rest_row">
    <div class="inline_block rest_text reserve_line" style="background-color: #F15A2A; width: 32px;">R</div>
                      
                                            <div class="inline_block rest_text rest_name_list">Sea food</div><div class="inline_block rest_text type_rest_line" style="">Carnes y Mariscos / Meat cuts and Seafood</div>
    
    <div class="inline_block rest_text rest_clock_line"><span class="rest_hour inline_block">7:30 PM</span> <span class="icon icon-clock orange_text"></span> <span class="rest_hour inline_block">9:30 PM</span>  </div>

    
    <div class="dress_code_box inline_block">Casual</div>
 </div>
                </li> 
                                            
          
				  
				  
				  
			                    
              <li> 
                 <div class="rest_row">
          <div class="rest_tittle" style="background-color: #531C51">
              <div class="rest_tittle_content" style="background-color: #3C143A">BARES / BARS</div>
            </div>
          </div>
                      
                 </li>    
 
				  
				  
                              <li>
                      
                      <div class="rest_row">
                                                <div class="inline_block no_reserve" ></div><div class="inline_block rest_text rest_name_list">Lobby Bar </div><div class="inline_block rest_text type_rest_line" style=""></div>
                        
                        <div class="inline_block rest_text rest_clock_line"><span class="rest_hour inline_block">5:00 PM</span> <span class="icon icon-clock orange_text"></span> <span class="rest_hour inline_block">12:00 AM</span>  </div>
                        
                        
                        <div class="dress_code_box inline_block">Casual</div>
                    </div>
                    </li>
                                    <li>
                      
                      <div class="rest_row">
                                                <div class="inline_block no_reserve" ></div><div class="inline_block rest_text rest_name_list">Pool Bar</div><div class="inline_block rest_text type_rest_line" style=""></div>
                        
                        <div class="inline_block rest_text rest_clock_line"><span class="rest_hour inline_block">10:00 AM</span> <span class="icon icon-clock orange_text"></span> <span class="rest_hour inline_block">6:00 PM</span>  </div>
                        
                        
                        <div class="dress_code_box inline_block">Casual</div>
                    </div>
                    </li>
                                    <li>
                      
                      <div class="rest_row">
                                                <div class="inline_block no_reserve" ></div><div class="inline_block rest_text rest_name_list">Bar Jorongo</div><div class="inline_block rest_text type_rest_line" style=""></div>
                        
                        <div class="inline_block rest_text rest_clock_line"><span class="rest_hour inline_block">10:00 PM</span> <span class="icon icon-clock orange_text"></span> <span class="rest_hour inline_block">2:00 AM</span>  </div>
                        
                        
                        <div class="dress_code_box inline_block">Casual</div>
                    </div>
                    </li>
                                    <li>
                      
                      <div class="rest_row">
                                                <div class="inline_block no_reserve" ></div><div class="inline_block rest_text rest_name_list">Bar Teatro</div><div class="inline_block rest_text type_rest_line" style=""></div>
                        
                        <div class="inline_block rest_text rest_clock_line"><span class="rest_hour inline_block">9:00 PM</span> <span class="icon icon-clock orange_text"></span> <span class="rest_hour inline_block">10:30 PM</span>  </div>
                        
                        
                        <div class="dress_code_box inline_block">Casual</div>
                    </div>
                    </li>
                    	  
                 
				  
				  
				  
				  
				  
				  
				  
                  
                  
                  
                  
          
          </ul>
        
          
          </div>  
          
          
        
          
        
          
        
          
          

       
      </div>
    </div>
  </div> 
</div>
    
    
   
    
    <script type="text/javascript">
        jQuery(document).ready(function() {

        	jQuery(".modern-ticker").modernTicker({
                effect: "scroll",
                scrollType: "continuous",
                scrollStart: "inside",
                scrollInterval: 50,
                transitionTime: 500,
                linksEnabled: false,
                pauseOnHover: false,
                autoplay: true
            });
        	
        });
    </script>

     <script>
        $( document ).ready( function () {
            var owl = $( '#activity_rotator' );
            owl.owlCarousel( {
                autoplay: true,
                autoplayTimeout: 12000,
                margin: 0,
                nav: false,
                loop: true,
                items: 4,
                smartSpeed: 2000,
                mouseDrag: true,
                pullDrag: true,
                touchDrag: true,
                autoplayHoverPause: false,
                autoWidth:true,

            } )

    

            var owl = $( '#total_phones_rotator' );
            owl.owlCarousel( {
                autoplay: true,
                autoplayTimeout: 12000,
                margin: 0,
                nav: false,
                loop: true,
                items: 1,
                smartSpeed: 2000,
                animateOut: 'slideOutDown',
                animateIn: 'flipInX',
                autoplayHoverPause: false,
                mouseDrag: true,
                pullDrag: true,
                touchDrag: true,
            } )
            
            
             var owl = $( '#promo_rotator' );
            owl.owlCarousel( {
                autoplay: true,
                autoplayTimeout: 15000,
                margin: 0,
                nav: false,
                loop: true,
                items: 1,
                smartSpeed: 2000,
                animateOut: 'slideOutLeft',
                animateIn: 'flipInY',
                autoplayHoverPause: false,
                mouseDrag: true,
                pullDrag: true,
                touchDrag: true,
            } )
            
            
            var owl = $( '#rotator_especial' );
            owl.owlCarousel( {
                autoplay: true,
                autoplayTimeout: 12000,
                margin: 0,
                nav: false,
                loop: true,
                items: 1,
                smartSpeed: 2000,
                animateOut: 'slideOutDown',
                animateIn: 'flipInX',
                autoplayHoverPause: false,
                mouseDrag: true,
                pullDrag: true,
                touchDrag: true,
            } )


            
            
            
            

        } )
    </script>
    
    
  
      
       <script type="text/javascript">
           
           
         setTimeout(function () {
   
             
           $( "#rest_rotator" ).jCarouselLite( {

            vertical: true,
            auto: 6000,
            start: 0,
            scroll: 1,
            speed: 4000,
            visible: 8
        } );
             
             
         }, 4000);
           
           
           
        
           
           
    </script>
      
    

    
</body>
</html>