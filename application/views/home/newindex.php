<html>
<head>
    <title>Schematics 2016</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo base_url()?>assets/img/favicon.png">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/schematics.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/schematicshome.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.theme.default.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery.countdown.css" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

    <script src="<?php echo base_url()?>assets/js/scrollreveal.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/schematicshome.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.particleground.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.plugin.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.countdown.js"></script>
    <script>
        window.onload = function () {
        document.getElementById('video-container').style.opacity = "1";
        document.getElementById('video').play();
        document.getElementById('audio').play();
        var loading = document.getElementById('loading');
        loading.parentNode.removeChild(loading);
    }
    </script>
    <script>
    $(function () {
        var regisDate = new Date();
        regisDate = new Date(regisDate.getFullYear(), 7 - 1, 1,7,0,0);
        $('#countdown').countdown({until: regisDate});
    });
    </script>
</head>
<body>
    <div id="dim"></div>
    <div id="loading">
        <img src="<?php echo base_url()?>assets/img/ui/load.gif" style="margin-top: calc(50vh - 150px)">
    </div>
    <div id="content">
        <button class="btn anim nofade" type="button" id="mute" style="background-color:transparent"><span class="glyphicon glyphicon-volume-up"></span></button>
        <button class="btn anim nofade" type="button" id="unmute" style="background-color:transparent"><span class="glyphicon glyphicon-volume-off"></span></button>
        <button class="btn anim nofade" type="button" id="skip" style="background-color:transparent; left: 5em">SKIP</button>
        <div id="video-container">
            <video loop id="video">
                <source src="<?php echo base_url();?>assets/vid/entrance.mp4" type="video/mp4">
            </video>
            <audio loop id="audio">
                <source src="<?php echo base_url();?>assets/music/jingle.mp3" type="audio/mp3">
            </audio>
        </div>
        <div id="main">
            <div id="main-content">
                <img src="<?php echo base_url();?>assets/img/logo_lg.png" id="logo-lg">
                <div id="countdown"></div>
                <div style="margin-top:4em">
                    <a parent="#main-content" href="#story" class="scroll">
                        <b style="padding:0.5em; border: solid 3px #404040; font-size:1.5em">Who are we?</b>
                    </a>
                </div>
            </div>
        </div>
        <div id="story" style="text-align:center;" >
                <div id="story-head" style="text-align:center; padding:0.5em"><span id="story-title" style="font-size:40px; font-weight:bold;">We are Schematics</span></div>
                <div id="story-content">
                    
                        <a class="scroll" href="#npc"><img class="mascot" id="mascotNPC" src="<?php echo base_url();?>assets/img/mascot/npc.png"></a>
                
                        <a class="scroll" href="#nlc"><img class="mascot" id="mascotNLC" src="<?php echo base_url();?>assets/img/mascot/nlc.png"></a>
                    
                        <a class="scroll" href="#nst"><img class="mascot" id="mascotNST" src="<?php echo base_url();?>assets/img/mascot/nst.png"></a>
                        <a class="scroll" href="#reeva"><img class="mascot" id="mascotREEVA" src="<?php echo base_url();?>assets/img/mascot/reeva.png"></a>
                </div>
                <div id="story-footer" style="margin-top:-10px">
                    <a parent="#story" class="scroll" href="#main-content" style="bottom:0px;">Back to Home</a>
                </div>
        </div>
        <div class="event-NLC">
            <div class="vNav">
               <ul class="vNav">
                    <li>
                        <a class="link" href="#deskripsi">
                        </a>
                    </li>
                    <li>
                        <a class="link" href="#gallery">
                        </a>
                    </li>
                    <li>
                        <a class="link" href="#timeline">
                        </a>
                    </li>
             </ul>
            </div>
            <div class="container-event container event-desc">
                  <div class="row" id="deskripsi" style="margin-top: 0em" class="reveal par">
                        <button parent=".event-NLC" class="close-event btn"><img src="<?php echo base_url();?>assets/img/ui/cross-black.png" style="width:32px;"></button>
                        <div class="col-sm-3 col-sm-offset-3">
                            <div class="event-heading-title"><b>NLC</b></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="event-heading-title-desc" ><b>national<br>logic<br>competition</b></div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 3em" class="reveal">
                        <div class="col-sm-6 mascot-event">
                            <img class="mascot-event-photo" src="<?php echo base_url();?>assets/img/mascot/nlc.png">
                        </div>
                        <div class="col-sm-6">
                            <div style="background-color: #f7a63f; color: white; padding: 1.5em; height:22em">
                                <p><b>National Logic Competition</b> merupakan kompetisi logika bertaraf nasional untuk siswa SMA/SMK/sederajat yang akan menguji kemampuan logika dan teamwork peserta dengan soal dan tantangan yang logis dan imajinatif. Setiap tim akan dihadapkan dengan tantangan yang bervariasi, mulai dari soal tulis hingga permainan yang mengasah otak.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-event container" style="margin-bottom:0.3em">
                  <div class="row" id="gallery" style="margin-top: 0em" class="reveal par">
                        <div class="col-sm-3 col-sm-offset-3">
                            <div class="event-heading-title"><b>NLC</b></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="event-heading-title-desc"><b>Gallery</b></div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 2em" class="reveal">
                        <div class="col-sm-12" style="text-align:center">
                            <div class="owl-carousel" style="margin:0 auto; text-align:center">
                                <div class="owl-item">
                                    <div class="carousel-container container">
                                        <img class="img-slider" src="<?php echo base_url();?>assets/img/soon/nlc1.JPG" >
                                        <p class="photo-caption">
                                            Para peserta NLC sedang mengerjakan test kemampuan logika mereka,
                                            pada saat babak final NLC 2015 di Teknik Informatika ITS.
                                        </p>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div  class="carousel-container container">
                                        <img class="img-slider" src="<?php echo base_url();?>assets/img/soon/nlc2.JPG" >
                                        <p class="photo-caption">
                                            Para peserta NLC sedang mengerjakan test kemampuan logika mereka,
                                            pada saat babak final NLC 2015 di Teknik Informatika ITS.
                                        </p>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="carousel-container container">
                                        <img class="img-slider" src="<?php echo base_url();?>assets/img/soon/nlc3.JPG" >
                                        <p class="photo-caption">
                                            Para peserta NLC sedang mengerjakan test kemampuan logika mereka,
                                            pada saat babak final NLC 2015 di Teknik Informatika ITS.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-event container ">
                  <div class="row" id="timeline" style="margin-top: 0em" class="reveal par">
                        <div class="col-sm-3 col-sm-offset-3">
                            <div class="event-heading-title"><b>NLC</b></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="event-heading-title-desc"><b>Timeline</b></div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 2em" class="reveal">
                        <div class="col-sm-12" style="text-align:center">
                            <div class="owl-carousel" style=" margin:0 auto; text-align:center">
                                <div class="owl-item">
                                    <div class="carousel-container container">
                                        <img class="img-slider" src="<?php echo base_url();?>assets/img/soon/nlc1.JPG" >
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="carousel-container container">
                                        <img class="img-slider" src="<?php echo base_url();?>assets/img/soon/nlc2.JPG" >
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div  class="carousel-container container">
                                        <img class="img-slider" src="<?php echo base_url();?>assets/img/soon/nlc3.JPG" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="event-NPC">
            <div class="vNav">
               <ul class="vNav">
                    <li>
                        <a class="link" href="#deskripsi">
                        </a>
                    </li>
                    <li>
                        <a class="link" href="#gallery">
                        </a>
                    </li>
                    <li>
                        <a class="link" href="#timeline">
                        </a>
                    </li>
             </ul>
            </div>
            <div class="container-event container event-desc">
                  <div class="row" id="deskripsi" style="margin-top: 0em" class="reveal par">
                        <button parent=".event-NPC" class="close-event btn"><img src="<?php echo base_url();?>assets/img/ui/cross-black.png" style="width:32px;"></button>
                        <div class="col-sm-3 col-sm-offset-3">
                            <div class="event-heading-title"><b>NPC</b></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="event-heading-title-desc" ><b>national<br>programming<br>competition</b></div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 3em" class="reveal">
                        <div class="col-sm-6 mascot-event">
                            <img class="mascot-event-photo" src="<?php echo base_url();?>assets/img/mascot/npc.png">
                        </div>
                        <div class="col-sm-6">
                            <div style="background-color: #f7a63f; color: white; padding: 1.5em; height:22em">
                                <p><b>National Logic Competition</b> merupakan kompetisi logika bertaraf nasional untuk siswa SMA/SMK/sederajat yang akan menguji kemampuan logika dan teamwork peserta dengan soal dan tantangan yang logis dan imajinatif. Setiap tim akan dihadapkan dengan tantangan yang bervariasi, mulai dari soal tulis hingga permainan yang mengasah otak.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-event container" style="margin-bottom:0.3em">
                  <div class="row" id="gallery" style="margin-top: 0em" class="reveal par">
                        <div class="col-sm-3 col-sm-offset-3">
                            <div class="event-heading-title"><b>NLC</b></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="event-heading-title-desc"><b>Gallery</b></div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 2em" class="reveal">
                        <div class="col-sm-12" style="text-align:center">
                            <div class="owl-carousel" style="margin:0 auto; text-align:center">
                                <div class="owl-item">
                                    <div class="carousel-container container">
                                        <img class="img-slider" src="<?php echo base_url();?>assets/img/soon/nlc1.JPG" >
                                        <p class="photo-caption">
                                            Para peserta NLC sedang mengerjakan test kemampuan logika mereka,
                                            pada saat babak final NLC 2015 di Teknik Informatika ITS.
                                        </p>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div  class="carousel-container container">
                                        <img class="img-slider" src="<?php echo base_url();?>assets/img/soon/nlc2.JPG" >
                                        <p class="photo-caption">
                                            Para peserta NLC sedang mengerjakan test kemampuan logika mereka,
                                            pada saat babak final NLC 2015 di Teknik Informatika ITS.
                                        </p>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="carousel-container container">
                                        <img class="img-slider" src="<?php echo base_url();?>assets/img/soon/nlc3.JPG" >
                                        <p class="photo-caption">
                                            Para peserta NLC sedang mengerjakan test kemampuan logika mereka,
                                            pada saat babak final NLC 2015 di Teknik Informatika ITS.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-event container ">
                  <div class="row" id="timeline" style="margin-top: 0em" class="reveal par">
                        <div class="col-sm-3 col-sm-offset-3">
                            <div class="event-heading-title"><b>NLC</b></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="event-heading-title-desc"><b>Timeline</b></div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 2em" class="reveal">
                        <div class="col-sm-12" style="text-align:center">
                            <div class="owl-carousel" style=" margin:0 auto; text-align:center">
                                <div class="owl-item">
                                    <div class="carousel-container container">
                                        <img class="img-slider" src="<?php echo base_url();?>assets/img/soon/nlc1.JPG" >
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="carousel-container container">
                                        <img class="img-slider" src="<?php echo base_url();?>assets/img/soon/nlc2.JPG" >
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div  class="carousel-container container">
                                        <img class="img-slider" src="<?php echo base_url();?>assets/img/soon/nlc3.JPG" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
        <footer>
            <div id="footer-info">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6 col-sm-3 footer-item" style="margin-bottom:1em;">
                            <b style="line-height:5; border-bottom: solid 3px white; padding-bottom: 0.5em; font-size: 1.2em;">schematics</b><br>
                            <a style="line-height: 1.8em" href="#">About Us</a><br>
                            <a style="line-height: 1.8em" href="#">NLC</a><br>
                            <a style="line-height: 1.8em" href="#">NPC</a><br>
                            <a style="line-height: 1.8em" href="#">NST</a><br>
                            <a style="line-height: 1.8em" href="#">REEVA</a><br>
                        </div>
                        <div class="col-xs-6 col-sm-3 footer-item" style="margin-bottom:1em;">
                            <b style="line-height:5; border-bottom: solid 3px white; padding-bottom: 0.5em; font-size: 1.2em;">info center</b><br>
                            <a style="line-height: 1.8em" href="#">Tutorial</a><br>
                            <a style="line-height: 1.8em" href="#">Terms & Conditions</a><br>
                            <a style="line-height: 1.8em" href="#">FAQs</a><br>
                            <a style="line-height: 1.8em" href="#">Disclaimer</a><br>
                        </div>
                        <div class="col-xs-6 col-sm-3 footer-item" style="margin-bottom:1em;">
                            <b style="line-height:5; border-bottom: solid 3px white; padding-bottom: 0.5em; font-size: 1.2em;">social media</b><br>
                            <div>
                                <a href="https://www.facebook.com/schematicsits" target="_blank"><img class="socmeds" src="<?php echo base_url()?>assets/img/socmeds/fb.png"></a>
                                <a href="https://www.instagram.com/schematics.its" target="_blank"><img class="socmeds" src="<?php echo base_url()?>assets/img/socmeds/ig.png"></a>
                                <a href="https://twitter.com/schematics_its" target="_blank"><img class="socmeds" src="<?php echo base_url()?>assets/img/socmeds/twitter.png"></a>
                            </div>
                            <div style="margin-top:0.5em">
<!--                                <a href="http://youtube.com" target="_blank"><img class="socmeds" src="<?php echo base_url()?>assets/img/socmeds/youtbe.png"></a>-->
                                <a href="https://ask.fm/schematics_its" target="_blank"><img class="socmeds" src="<?php echo base_url()?>assets/img/socmeds/ask.png"></a>
                                <a href="#" target="_blank"><img class="socmeds" src="<?php echo base_url()?>assets/img/socmeds/line.png"></a>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3 footer-item" style="margin-bottom:1em;">
                            <b style="line-height:5; border-bottom: solid 3px white; padding-bottom: 0.5em; font-size: 1.2em;">contact us</b><br>
                            <span class="glyphicon glyphicon-phone" style="line-height: 1.8em"></span> (+62) 878 8706 1221<br>
                            <span class="glyphicon glyphicon-phone-alt" style="line-height: 1.8em"></span> (+62) 21 547 9232<br>
                            <span class="glyphicon glyphicon-envelope" style="line-height: 1.8em"></span> schematics@gmail.com<br>
                        </div>
                    </div>
                </div>
            </div>
            <div id="bottom-footer" class="bottom-footer" style="position:fixed; bottom:0; width:100%; z-index:7">
                <div class="container">
                    <b id="footer-toggle">schematics.its.ac.id</b> | 2016
    <!--                <a href="#" class="pull-right">more info</a>-->
                </div>
            </div>
        </footer>
    </div>
    
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:0,
            nav:false,
            items:1
        })
    </script>
</body>
</html>
