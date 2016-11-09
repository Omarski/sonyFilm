
<!--JASON ADDED-->
<?php include("../path-settings.php"); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"  lang="br">  <!--<![endif]-->

<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">    
  
  <meta name="description" content="Meryl Streep takes on a whole new gig – a hard-rocking singer/guitarist – for Oscar®-winning director Jonathan Demme and Academy Award®-winning screenwriter Diablo Cody in Ricki and the Flash. " />
  <meta name="keywords" content="Sony Pictures, Meryl Streep, Jonathan Demme, Diablo Cody, Ricki and the Flash, Ricki and the Flash Movie, Poster Creator, Rock Your Mom, Mother's Day, Moms Who Rock" />
  <meta property="og:title" content="Ricki And The Flash | Sony Pictures"/>
  <meta property="og:url" content="http://www.rickiandtheflashmovie.com"/>
  <meta property="og:site_name" content="Ricki And The Flash"/>
  <meta property="og:type" content="website"/>
  <meta property="og:description" content="Meryl Streep takes on a whole new gig – a hard-rocking singer/guitarist – for Oscar®-winning director Jonathan Demme and Academy Award®-winning screenwriter Diablo Cody in Ricki and the Flash. "/>
  <meta property="og:image" content="http://www.rickiandtheflashmovie.com/images/fb.jpg"/>

  <link rel="shortcut icon" type="image/gif" href="../images/sonypictures_favicon.ico" />
  
  <link rel="stylesheet" href="../lib/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="../lib/css/jquery.fancybox.css">
  <link rel="stylesheet" href="../css/loaderAnim.css" />
  <link rel="stylesheet" href="../css/main.css" />
  
  <link href='http://fonts.googleapis.com/css?family=Squada+One' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="../js/cardgenerator/css/cardGenerator.css">
  
  <!--JASON ADDED -->
  <script type="text/javascript">
     var _root = "<?php echo $root ?>";
     var lang = "br";
     var relativeAssetPath = "../js/cardgenerator/";
     var uploadURL = "<?php echo $uploadURL; ?>";
     var uploadServerPath = "<?php echo $uploadServerPath; ?>";  
  </script>
  
  <script src="../lib/js/jquery-2.1.3.min.js"></script>
  <script src="../lib/js/bootstrap.min.js"></script>
  <script src="../lib/jquery.fancybox.js"></script>
  <script src="../lib/VideoOverlay.js"></script>
  <script src="../lib/jquery.mobile.custom.min.js"></script>
  <script src="../lib/js/preloadjs-min.js"></script>
  <script src="../js/canvasManager.js"></script>
  <script src="../js/communicator.js"></script>
  <script src="../js/popupManager.js"></script>
  <script src="../js/wallManager.js"></script>
  <script src="../js/loader.js"></script>
  <script src="../js/buttons.js"></script>
  <script src="../js/langJSON.js"></script>
  <script src="../js/languages.js"></script>
  <script src="../js/main.js"></script>

 <!--  cardmaker -->
  <script src="../js/cardgenerator/cardGenerator.js"></script>

 </head>

  <body>
      
       <script>
          window.fbAsyncInit = function() {
          FB.init({
          appId      : '1582796575316395',
          xfbml      : true,
          version    : 'v2.3'
           });
       };

       (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       js.src = "//connect.facebook.net/en_US/sdk.js";
       fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
     </script>
     
      <div id='orientationWrapper'>

      <script> 
      var _lang = "brazil";
      var _imgPath = "../images/";
      var _userAssetPath="../images/urls/"; 
      </script>

      <!-- audio -->
      <!--
     <audio class="appAudio" preload="none"> 
       <source src="audio/test.mp3" type="audio/mpeg">
       <source src="audio/test.ogg" type="audio/ogg">
     </audio>
      -->

     <div class="container">
       <div id="loaderCont"></div>
       <div id="videoCont"></div>
       <div id="viewerCont"></div>
     </div>

     <header class ="container-fluid">
      <div class="row">
        <div class="col-xs-12 no-padding">
          
          <img src="../images/sky.png" alt="Sky" id="skyNLogo" class="full-image">
          
          <div class="inTheatresCont"> 
            <img src ="../images/inTheatres_brazil.png"  alt="In theatres" class="inTheatresLocation" id="inTheatresLocation">
          </div>

           <div class="headerCtaCont">  
            <div class="headerCtaText" id="headerCtaText">For International Release</div>
            <div class="headerCtaBtn" id="headerCtaBtn">click here</div>
          </div>

          <div class="redBtnCont">
            <div class="headerRedButtons headerWatchTrailer" id="watchTrailerBtn">WATCH TRAILER</div>
            <div class="headerRedButtons headerIntroVid" id="watchIntroVidBtn">INTRO VIDEO</div>
            <a href="https://www.facebook.com/RickiMovie" target="_blank" id="outerFb"><img src="../images/icon_fb.png" alt="facecook icon" class="icon_fb"></a>
            <a href="http://www.twitter.com/RickiMovie" target="_blank" id="outerTw"><img src="../images/icon_twitter.png" alt="twitter icon" class="icon_twitter"></a>
            <img src="../images/icon_audio_on.png" alt="audio icon" class="icon_audio" id="audioIcon">
          </div>

        </div>
      </div>
    </header>

      <main class ="container-fluid">
        <div class="row">
            <div class="no-padding col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div id="sliderContainer"></div>
            </div>
        </div>
      </main>

      <footer class ="container-fluid">
        
        <div class="row footerBg">
          
          <div class="col-xs-12 no-padding" >
            
             <img src="../images/footer_bg.png" alt="footer asphalt" class="full-image">

             <div class="ratingCont">
                 <img src="../images/rating_en.png" alt="ratings icon" class="ratingImg">
             </div>

            <div class="flagsCont">
                <img src="../images/icon_fl_am.png" alt="American flag." class="icon_fl_am">
                <img src="../images/icon_fl_fr.png" alt="French flag." class="icon_fl_fr">
                <img src="../images/icon_fl_ge.png" alt="German flag." class="icon_fl_de">
                <img src="../images/icon_fl_it.png" alt="Italian flag." class="icon_fl_it">
                <img src="../images/icon_fl_ja.png" alt="Japanese flag." class="icon_fl_jp">
                <img src="../images/icon_fl_ko.png" alt="Korean flag." class="icon_fl_ko">

                <img src="../images/icon_fl_me.png" alt="Mexican flag." class="icon_fl_es-la">
                <img src="../images/icon_fl_po.png" alt="Portuguese flag." class="icon_fl_pt">
                <img src="../images/icon_fl_sp.png" alt="Spanish flag." class="icon_fl_es-ca">
                <img src="../images/icon_fl_ho.png" alt="Netherlands flag." class="icon_fl_nl">
                <img src="../images/icon_fl_au.png" alt="Australian flag." class="icon_fl_au">
                <img src="../images/icon_fl_sw.png" alt="Swedish flag." class="icon_fl_sv">
                <img src="../images/icon_fl_br.png" alt="Brazilian flag." class="icon_fl_br">
              </div>

               <div class="footer_disc_cont">
                 <p class='footerCR'>&copy;SONY PICTURES DIGITAL PRODUCTIONS INC.
                  ALL RIGHTS RESERVED.<br>FOR RATING REASONS GO TO FILMRATINGS.COM |
                  MPAA ORG <br> PRIVACY POLICY TERM OF USE</p>
               </div>

          </div>
        </div>
      </footer>
    </div><!-- orientationWrapper -->
     <!-- analytics -->
    <div id="omniturecode"></div>
     <!-- analytics -->
    <div id="omniturecode"></div>
    <script type="text/javascript" src="http://www.sonypictures.net/global/scripts/s_code.js"></script>
    <script type="text/javascript"> 
    s.pageName="net:movies:rickiandtheflash:index.html";
    s.channel=s.eVar3="net:movies";
    s.prop3=s.eVar23="net:movies:rickiandtheflash";
    s.prop4=s.eVar4="net:rickiandtheflash";
    s.prop5=s.eVar5="net:movies:home";
    s.prop11="net";
    /************* DO NOT ALTER ANYTHING BELOW THIS LINE ! **************/ 
    var s_code_session = s.t();
    if (s_code_session) {
   document.write(s_code_session); }
    </script>
  </body>
</html>