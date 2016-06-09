<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Schematics 2016</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo base_url()?>assets/img/favicon.png">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/schematics.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/schematicshome.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.theme.default.min.css" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    
    <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/schematicshome.js"></script>
    <script src="<?php echo base_url()?>assets/js/scrollreveal.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.particleground.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
    <script>
        window.onload = function () {
        document.getElementById('video-container').style.opacity = "1";
        document.getElementById('video').play();
        document.getElementById('audio').play();
        var loading = document.getElementById('loading');
        loading.parentNode.removeChild(loading);
    }
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
            <video style="height: 100%" id="video">
                <source src="<?php echo base_url();?>assets/vid/entrance.mp4" type="video/mp4">
            </video>
            <audio loop id="audio">
                <source src="<?php echo base_url();?>assets/music/jingle.mp3" type="audio/mp3">
            </audio>
        </div>
        <div id="main">
            <div id="main-content">
                <img src="<?php echo base_url();?>assets/img/logo_lg.png" id="logo-lg">
                <!-- <div style="margin-top:4em">
                    <b style="padding:0.5em; border: solid 3px #404040; font-size:1.5em">12 DAYS TO GO</b>
                </div> -->
            </div>
            
            <div id="event-nlc">
                <div class="container">
                    <img class="mascot" src="<?php //echo base_url();?>assets/img/mascot/nlccrop.png">
                    <div class="row" style="margin-top: 4em" class="reveal">
                        <div class="col-sm-3 col-sm-offset-3">
                            <div style="font-size: 9em; line-height: 0.9em; margin-left: -10px"><b>NLC</b></div>
                        </div>
                        <div class="col-sm-6">
                            <div style="font-weight:300; font-size: 2.3em; line-height:1em; margin-top: 0.4em"><b>national<br>logic<br>competition</b></div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 2em" class="reveal">
                        <div class="col-sm-3 col-sm-offset-3">
                            <div style="background-color: #f7a63f; color: white; padding: 1.5em; height:22em">
                                <p><b>National Logic Competition</b> merupakan kompetisi logika bertaraf nasional untuk siswa SMA/SMK/sederajat yang akan menguji kemampuan logika dan teamwork peserta dengan soal dan tantangan yang logis dan imajinatif. Setiap tim akan dihadapkan dengan tantangan yang bervariasi, mulai dari soal tulis hingga permainan yang mengasah otak.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <button class="close-event btn"><img src="<?php echo base_url();?>assets/img/ui/cross-black.png" style="width:32px"></button>
                            <div class="owl-carousel">
                                <div class="owl-item">
                                    <div class="carousel-container">
                                        <img src="<?php echo base_url();?>assets/img/soon/nlc1.JPG" style="width:100%">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="carousel-container">
                                        <img src="<?php echo base_url();?>assets/img/soon/nlc2.JPG" style="width:100%">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="carousel-container">
                                        <img src="<?php echo base_url();?>assets/img/soon/nlc3.JPG" style="width:100%">
                                    </div>
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
            <div id="bottom-footer" class="bottom-footer" style="position:fixed; bottom:0; width:100%; z-index:5">
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
