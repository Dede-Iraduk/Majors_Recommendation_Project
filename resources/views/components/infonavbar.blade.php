<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Gaia - Bootstrap Template | Free Demo</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    {{-- <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/gaia.css" rel="stylesheet"/> --}}
    <link rel="stylesheet" href = "{{asset('css/bootstrap.css') }}"> 
    <link rel="stylesheet" href = "{{asset('css/gaia.css') }}"> 

    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    {{-- <link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href = "{{asset('css/fonts/pe-icon-7-stroke.css') }}"> 
    

</head>

<body>

    <nav class="navbar navbar-default navbar-transparent navbar-fixed-top" color-on-scroll="200">
        <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
        <div class="container">
            <div class="navbar-header">
                <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <a href="http://www.creative-tim.com" class="navbar-brand">
                    Gaia - Free Demo
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right navbar-uppercase">
                    <li>
                        <a href="http://www.creative-tim.com/product/gaia-bootstrap-template-pro" target="_blank">Get PRO Version</a>
                    </li>
                    <li class="dropdown">
                        <a href="#gaia" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-share-alt"></i> Share
                        </a>
                        <ul class="dropdown-menu dropdown-danger">
                            <li>
                                <a href="#"><i class="fa fa-facebook-square"></i> Facebook</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i> Instagram</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="http://www.creative-tim.com/product/gaia-bootstrap-template" class="btn btn-danger btn-fill">Free Download</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>j