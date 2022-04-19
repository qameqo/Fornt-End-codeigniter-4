<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?=base_url('assets/img/just-media.png')?>" type="image/gif">
    <title>JUST MEDIA</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../assets/css/owl.carousel.min.css"> -->
    <link href="<?php echo base_url('assets/css/owl.carousel.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/owl.theme.default.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css" />

</head>

<body id="body">
    <nav class="navbar navbar-expand-lg p-0 pt-3" id="nav2" style="color:#fff;">
        <div class="container-fluid" id="conflu">
            <p> © Copyright 2018 Just Media Co., Ltd.
            </p>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#lte"
                aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="lte">
                <ul class="navbar-nav" id="naav">
                    <li class="nav-item">
                        <a class="" href="https://www.facebook.com/Justcarthailand/" style="" target="_blank">
                            <img src="https://img.icons8.com/color/50/000000/facebook.png" style="height:30px;"
                                alt="Facebook">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="https://bit.ly/2M1U3kO" style=" padding-left:0;" target="_blank">
                            <img src="https://img.icons8.com/color/48/000000/line-me.png" style="height:30px;"
                                alt="Line">
                    </li>
                    <li class="nav-item">
                        <a class="" href="https://www.instagram.com/justcarthailand/?hl=en" style=" padding-left:0;"
                            target="_blank">
                            <img src="https://img.icons8.com/fluent/48/000000/instagram-new.png" style="height:30px;"
                                alt="Instragram">
                    </li>
                    <li class="nav-item">
                        <a class="" href="https://www.youtube.com/channel/UC6H4jZhw7ZfJRSBsjqDIwGA"
                            style=" padding-left:0;" target="_blank">
                            <img src="https://img.icons8.com/color/50/000000/youtube-play.png" style="height:30px;"
                                alt="Youtube">
                        </a>
                    </li>
                    <li class="nav-item ">
                        <p>
                            &nbsp;&nbsp;<i class="fa fa-phone ph" aria-hidden="true"></i>&nbsp;&nbsp;02-821-5700
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- <div class="contop container-fluid header-firstnav" id="headcontact" style="background-color:#486D87; color:white;">
        <div class="row justify-content-start" style="padding-bottom:0px; padding-left:100px;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ltd"
                aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="ltd" style="background-color:#486D87;">
                <div class="col-sm" style="margin-bottom:10;margin-top:8px;">
                  
                </div>
                <div class="col-sm" style="margin-bottom:10;margin-top:8px;" align="end">
                    <p>
                       
                       
                        </a>
                      
                        </a>
                       
                        &nbsp;
                    </p>
                </div>
            </div>
        </div>
    </div> -->
    <nav class="navbar navbar-expand-lg sticky-top p-0" id="nav">
        <div class="container-fluid" id="conflu">
            <a class="navbar-brand" href="<?php echo base_url('Pages') ?>"><img
                    src="<?php echo base_url('assets/img/just-media.png') ?>" id="imgheader"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsEx"
                aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarsEx" style="background-color:#fff;">
                <ul class="navbar-nav" id="naav">
                    <li class="nav-item">
                        <a class="nav-link statictext textnavactive" id="home" href="<?php echo base_url('Pages') ?>">
                            HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link statictext " id="services" href="#">SERVICES </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link statictext " id="products" href="#">PRODUCTS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link statictext" id="about" href="<?php echo base_url('About') ?>">ABOUT
                        </a>
                        <div class="dropdown-menu dropitem" aria-labelledby="navbarDropdown">
                            <div class=""><a class="dropdown-item bgdropitem" href="<?php echo base_url('About') ?>"><b>ABOUT</b> </a></div>
                            <div class=""><a class="dropdown-item bgdropitem" href="<?php echo base_url('Newabout') ?>"><b>NEW</b> </a></div>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link statictext " id="contact"
                            href="<?php echo base_url('Contact') ?>">CONTACT</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->

                </ul>
            </div>
        </div>
    </nav>