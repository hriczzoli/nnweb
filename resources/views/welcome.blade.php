<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="description" content="Nam Noodles serverer asiatisk soulfood med afsæt i det asiatiske streetfood køkken. Vi serverer nudelsupper med inspiration fra Japansk Ramen og fra de Vietnamesiske supper, I hjertet af Aalborg." />

        <title>Nam Noodles | The place to slurp - Restaurant og Take Away i Aalborg</title>

        <script
  src="https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



        <!-- <script src="../js/jquery.min.js"></script>
        <script src="{{asset('js/app.js')}}"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js" ></script>
        <!-- Styles -->
        <style>
            
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                /* perspective: 1px;
                transform-style: preserve-3d;
                overflow-x:hidden;
                overflow-y:auto; */
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            /* .title {
                font-size: 84px;
            } */

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .mainMenu {
                position: absolute;
                z-index: 5;
                background-color:transparent !important;
                padding-top:30px;
            }
            .mainMenu ul li{
                list-style: none !important;
                display: inline-block;
                padding-right:20px;
            }
            .mainMenu ul li a {
                color: #fff !important;
                font-size:25px;
                font-family: 'Limelight', cursive;
                -webkit-transition: color 1.2s; /* For Safari 3.0 to 6.0 */
                transition: color 1.2s; /* For modern browsers */
            }
            .mainMenu ul li a:hover {
                color:#fff;background-color:transparent;text-shadow:3px 3px grey
            }
            a:link {
                text-decoration: none;
            }

            @media screen and (max-width:990px) {
                .mainMenu ul li {
                    display:block;
                    margin-top:10px;
                }
                .mainMenu ul {
                    background-color: rgba(0, 0, 0, 1)!important;
                    border-radius:5px;
                    margin-top:10px;
                }
                .navbar-toggler {
                    color: #ddd !important;
                    border-color: #ddd !important;
                    background-color:lightgrey;
                }
                .caption-container {
                    margin-top: 0px !important;
                }
            }
            .main-nav {
                justify-self:center;
            }

            .header {
                display:flex;
                width:100vw;
                height:100vh;
                position:relative;
                top:0px !important;
                justify-content: center;
                align-items: center;
            }
        
            .overlay {
                position:absolute;
                top:0px;
                width:100%;
                height:100%;
                background-color:rgba(0, 0, 0, 0.2); 
                overflow: hidden;
            }

            .caption-container {
                margin-top:auto;
            }

            .caption {
                display:flex;
                flex-direction:column;
                align-items:center;
                justify-content:center;
            }

            .test:hover {
                cursor:pointer;
            }

            .scroll {
                color:#fff;
            }
            .bounce {
                -moz-animation:bounce 3s infinite;
                -webkit-animation:bounce 3s infinite;
                animation:bounce 3s infinite
            }
            @-moz-keyframes bounce{0%,100%,20%,50%,80%{
                -moz-transform:translateY(0);
                transform:translateY(0)}
                40%{
                    -moz-transform:translateY(-30px);
                    transform:translateY(-30px)
                }
                60%{
                    -moz-transform:translateY(-15px);
                    transform:translateY(-15px)
                }
            }
            @-webkit-keyframes bounce{0%,100%,20%,50%,80%{
                -webkit-transform:translateY(0);
                transform:translateY(0)}
                40%{
                    -webkit-transform:translateY(-30px);
                    transform:translateY(-30px)
                }
                60%{
                    -webkit-transform:translateY(-15px);
                    transform:translateY(-15px)
                }
            }
            @keyframes bounce{0%,100%,20%,50%,80%{
                -moz-transform:translateY(0);
                -ms-transform:translateY(0);
                -webkit-transform:translateY(0);
                transform:translateY(0)}
                40%{
                    -moz-transform:translateY(-30px);
                    -ms-transform:translateY(-30px);
                    -webkit-transform:translateY(-30px);
                    transform:translateY(-30px)
                }
                60%{
                    -moz-transform:translateY(-15px);
                    -ms-transform:translateY(-15px);
                    -webkit-transform:translateY(-15px);
                    transform:translateY(-15px)
                }
            }

            .about-container {
                padding-top:150px;
                padding-bottom:150px;
            }

            .about-text-block h2 {
                font-family: 'Limelight', cursive;
                color:black;
                align-self:center;
            }

            .about-text-block p {
                padding-left: 15%;
                padding-right: 15%;
            }

            .about-text-block {
                display: flex !important;
                flex-direction: column;
            }

            #social-icon {
                justify-self:center;
                align-self: center;
            }
            #social-icon a i {
                color:black;
            }
            .about-img-block {
                display:flex !important;
                flex-direction:column;
                align-items: center;
                justify-content: center;
            }
            .about-img-block img{
                margin:0.5%;
                /* margin-left:1%; */
                box-shadow: 10px 10px 5px #888;
            }
            .about-img-first-row {
                max-width:100%;
            }

            /* menu section */
            .menu {
                width:100vw;
                margin:auto;
                background-color:#000;
                padding-top:50px;
                font-family: 'Limelight', cursive;
                border-style: dotted;
                border-color:white;
            }

            .menu-item-row {
                justify-content:center;
            }

            .title {
                text-align:center;
                color:white;
                min-height: 70px;
                max-height: 70px;
                padding-top: 15px;
            }
            .description {
                text-align:center;
                font-family: 'Nunito', sans-serif;
            }
            nav a {
                color: white !important;;
            }
            .nav-tabs .nav-link.active {
                color:#495057 !important;
            }

            @media screen and (max-width:420px) {
                .nav-item {
                    width: 40vw;
                }
            }

            .menu-title {
                text-align:center;
                margin:auto;
                padding: 50px;
                font-size: 80px;
                color:white;
            }

            .menu-items {
                padding-bottom:30px;
            }
            

            .popup-container {
            top:50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%) scale(0.0001);
            transition: 150ms;
            height: 900px;
            visibility: hidden;
            z-index:2000;
            position: fixed;
        }
        iframe {
            margin-top: 170px;
            width: 90vw;
            height: 80vh;
            border-style: none;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.9), 0 6px 20px 0 rgba(0, 0, 0, 0.9);
        }
        .backdrop{
            background-color: rgba(0,0,0, 0.9);
            width: 100%;
            height: 100%;
            position:fixed;
            top:0;
            left: 0;
            visibility: hidden;
            transition: linear 0.3s;
            z-index:10;
        }
        .active2 {
            visibility: visible !important;
            transition: linear 0.6s;
            transform: translate(-50%, -50%) scale(1);
        }

        .active2 ~ .backdrop {
            opacity: 0.5;
            visibility: visible;
        }
        .fa-times {
            color: white;
            right: 5px;
            position: absolute;
            top: 131px;

        }
        @media screen and (min-width: 320px) and (max-width: 370px) {
            .iphone5 {
                max-width: 216px;
            }
            .fa-times {
                top: 205px;
            }
            iframe {
                margin-top: 250px;
            }
        }

        @media screen and (min-width: 765px) and (max-width: 1000px) {
            iframe {
                margin-top: 80px;
            }
            .fa-times {
                top: 30px;
            }
        }

        
        #para-container {
            width: 100vw;
        }
        /* .parallax::before {
            content:"";
            top:0;
            left:0;
            position:absolute;
            z-index:-1;
            transform:translateZ(-1px) scale(2);
        } */
        .parallax {
            background-repeat:no-repeat;
            background-size: cover;
            overflow:hidden;
            width:100vw;
            background-attachment: fixed;
            background-position: center;
        }


        .takeaway-container {
            padding-top: 400px;
            padding-bottom: 100px;
        }

        #instafeed {
            padding: 0;
        }

        #insta-arrow{color:grey;margin-top:15px!important}
        #social-icon{margin:auto auto 30px;text-align:center;color:#000;text-rendering:optimizeLegibility;padding-left:1%}#social-icon2,#social-icon2 a,.list-group-item,.paymentInfo{color:#fff}.rest-menu{width:80%;margin:auto auto 40px;padding-top:70px}#ttl{background-color:#404040!important}.list-group-item{background-color:#262626!important}.take-btn2,.take-btn2:hover{background-color:transparent}strong{font-size:17px}#take-away-title{margin-top:40px}#take-away{text-align:center;min-height:350px}#take-away2{padding-top:50px;padding-bottom:40px;min-height:550px!important;text-align:center!important}#take-away2 p{margin-left:19%;margin-right:19%;top:100px;font-family:'Alegreya Sans',sans-serif}.first-group2 img,.first-group3 img{display:inline-block!important;margin:auto;padding-top:5px;box-shadow:10px 10px 5px #888;list-style:none}#footer-menu,#instagram-feed{width:100%;background-color:#000}#instafeed a {display:inline-block;width:12.5%!important}#instafeed a img {width:100%;}#instafeed{overflow:hidden;width:100%}#instafeed img:hover{-moz-transform:scale(1.1);-webkit-transform:scale(1.1);transform:scale(1.1);-moz-transition:all .3s;-webkit-transition:all .3s;transition:all .3s}#footer-menu{padding-left:10%;padding-right:10%;text-align:center;color:grey}#footer-menu h4{font-size:20px}.paymentInfo:hover{color:#fff;list-style:none}.paymentText{padding-top:40px}#contact-link{color:#FFF}#social-icon2{margin:auto;text-align:center}#faceb-footer{width:31px;height:31px}#insta-footer{width:40px;height:40px}#footer-elements{padding-top:25px;padding-bottom:25px}
        #footer-elements a{color:#fff!important}

        /*notification container */
        .notification-container {
            text-align: center;
            width: 80vw;
            background-color: black;
            color: white;
            /* font-size: 24px; */
            position: absolute;
            top: 20%;
            left: 10%;
            margin-right: -50%;
            border-radius: 30px;
            height: 70vh;
            z-index: 50;
            display: flex;
            border-style: dotted;
            border-color:white;
        }
        .fa-cross {
            top: 5px;
            right:20px;
            z-index: 50;
        }
        .hide-popup {
            visibility: hidden;
        }
        #instafeed{max-height:180px; display:flex;}
        #instafeed img {display:inline-block;width:12.5%!important}#instafeed img {}#instafeed{overflow:hidden;width:100vw}#instafeed img:hover{-moz-transform:scale(1.1);-webkit-transform:scale(1.1);transform:scale(1.1);-moz-transition:all .3s;-webkit-transition:all .3s;transition:all .3s}
        </style>
        
    </head>
    <div id="app">
    <body>
    <?php $page = TCG\Voyager\Models\Page::first();?>

    <header>

        <nav class="navbar navbar-expand-lg navbar-light bg-light mainMenu">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse main-nav" id="navbarSupportedContent">
            {!! menu('main-nav')!!}
            </div>
        </nav>

        

        <div class="header" style="background-image:url({{ $page->image }});background-size:cover;overflow:hidden;">
            <div class="overlay"></div>
            <div class="container-fluid caption-container">
                <div class="row justify-content-center">
                    <div class="d-lg-block d-md-block d-none">
                        <div class="caption">
                            <img src="{{ $page->header_logo }}" width="330px" height="330px"/>
                            </br>
                            </br>
                            <!-- <a href="" style="z-index:10;"><div class="take-away-btn" id="take-away-btn" style="background-image:url({{ $page->take_away_bg }});background-size:cover;overflow:hidden;width:170px;height: 70px;z-index:7;"></div></a> -->
                            <div class="test" style="background-image:url({{ $page->take_away_bg }});background-size:cover;overflow:hidden;width:170px;height: 70px;z-index:7;"></div>
                            <br />
                            <a href="#about"><i class="fa fa-angle-double-down fa-3x scroll bounce" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="d-xs-block d-sm-block d-md-none">
                        <div class="caption">
                            <img src="{{ $page->header_logo }}" width="230px" height="230px"/>
                            </br>
                            </br>
                            <a href="" style="z-index:10;"><div class="take-away-btn" style="background-image:url({{ $page->take_away_bg }});background-size:cover;overflow:hidden;width:170px;height: 70px;z-index:7;"></div>
                            
                            <br />
                            <a href="#about"><i class="fa fa-angle-double-down fa-3x scroll bounce" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    

                    <div class="popup-container" id="pop-container">
                    <i class="fa fa-times fa-2x"></i>
                            <iframe src="http://www.crunchittaw.com/Namnoodles/#/" frameborder="0" width="90%" height="80%"></iframe>
                    </div>
                    <div class="backdrop"></div>


                </div>
            </div>
        </div>
    </header>

    <!-- Notification popup -->
    @if (!empty($notifications))
        <div class="notification-container container-fluid">
            <div class="row">
            <i class="fa fa-times fa-2x fa-cross" styl="top: 0;z-index: 50;"></i>
                @foreach($notifications as $notification)
                    <h1 style="margin:auto;">{{ $notification->title }}</h1>
                    <p>{{ $notification->body }}</p>
                @endforeach
            </div>
        </div>
    @endif
    
    <!-- about section -->
    <div class="container about-container" id="about">
        <div class="row">
            <div class="col-lg-6 d-sm-block d-sm-block d-xs-block about-text-block">
                <h2 style="padding-top:50px;">{{ $page->about_title }}</h2>
                <p>{{ $page->about_text }}</p>
                <div id="social-icon">
                    <a href="https://www.facebook.com/namnoodles/?ref=br_rs" target="_blank"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a>
                    
                    <a href="https://www.instagram.com/_namnoodles/" target="_blank"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-lg-6 d-sm-block d-sm-block d-xs-block about-img-block">
                <div class="about-img-first-row">
                    <img src="{{ $page->about_image_1 }}" width="48%" />
                    <img src="{{ $page->about_image_2 }}" width="48%" />
                </div>
                <div>
                    <img src="{{ $page->about_image_3 }}" width="48%" />
                    <img src="{{ $page->about_image_4 }}" width="48%" />
                </div>
            </div>
        </div>
    </div>

    <!-- Divider 1 -->
    <div class="container-fluid d-lg-block d-md-block d-sm-block d-xs-block" id="para-container">
      <div class="row">
        <div class="img-responsive">
          <div style="background-image: url({{ $page->divider_1 }}); height: 300px;" class="parallax img-responsive center-block" alt="noodles"></div>
        </div>
      </div>
    </div>

    <!-- MENU section -->
    <div class="menu">
        <h1 class="menu-title">MENU</h1>
        <nav style="width:80vw; margin:auto;">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-soup" role="tab" aria-controls="nav-home" aria-selected="true">Soup Time</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-salad" role="tab" aria-controls="nav-profile" aria-selected="false">Salad Time</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-rice" role="tab" aria-controls="nav-contact" aria-selected="false">Rice Time</a>
            <a class="nav-item nav-link" id="nav-bread-tab" data-toggle="tab" href="#nav-bread" role="tab" aria-controls="nav-contact" aria-selected="false">Bread Time</a>
            <a class="nav-item nav-link" id="nav-snack-tab" data-toggle="tab" href="#nav-snack" role="tab" aria-controls="nav-contact" aria-selected="false">Snack Time</a>
            <a class="nav-item nav-link" id="nav-drink-tab" data-toggle="tab" href="#nav-drink" role="tab" aria-controls="nav-contact" aria-selected="false">Drikkeværer</a>
        </div>
        </nav>
        <div class="tab-content" id="nav-tabContent" style="padding-bottom: 150px;">
            <!-- Soups menu items -->
            <div class="tab-pane fade show active" id="nav-soup" role="tabpanel" aria-labelledby="nav-home-tab">
            
                <div class="container">
                <br><br>
                    <div class="row menu-item-row">
                    @foreach($Soups as $soup)
                        <div class="col-md-3 menu-items">
                            <!-- <a href="/soup/{{ $soup->slug }}"> -->
                                <img src="{{ Voyager::image( $soup->image ) }}" style="width:100%">
                                <h3 class="title">{{ $soup->title }}</h3>
                                <div class="description">
                                    <div>{{ $soup->description }}</div>
                                </div>
                            <!-- </a> -->
                        </div>
                    @endforeach
                    </div>

                </div>          
            </div>
        
        <!-- Salads menu items -->
        <div class="tab-pane fade" id="nav-salad" role="tabpanel" aria-labelledby="nav-profile-tab">
        
            <div class="container">
                <br><br>
                    <div class="row menu-item-row">
                    @foreach($salads as $salad)
                        <div class="col-md-3 menu-items">
                            <!-- <a href="/salad/{{ $salad->slug }}"> -->
                                <img src="{{ Voyager::image( $salad->image ) }}" style="width:100%">
                                <h3 class="title">{{ $salad->title }}</h3>
                                <div class="description">
                                    <div>{{ $salad->description }}</div>
                                </div>
                            <!-- </a> -->
                        </div>
                    @endforeach
                    </div>
            </div>
        </div>

        <!-- Rice menu items -->
        <div class="tab-pane fade" id="nav-rice" role="tabpanel" aria-labelledby="nav-contact-tab">
        
        <div class="container">
		<br><br>
            <div class="row menu-item-row">
            @foreach($rices as $rice)
                <div class="col-md-3 menu-items">
                    <!-- <a href="/rice/{{ $rice->slug }}"> -->
                        <img src="{{ Voyager::image( $rice->image ) }}" style="width:100%">
                        <h3 class="title">{{ $rice->title }}</h3>
                        <div class="description">
                            <div>{{ $rice->description }}</div>
                        </div>
                    <!-- </a> -->
                </div>
            @endforeach
            </div>
	    </div>          
        </div>

        <!-- Breads menu items -->
        <div class="tab-pane fade" id="nav-bread" role="tabpanel" aria-labelledby="nav-bread-tab">
        
        <div class="container">
		<br><br>
            <div class="row menu-item-row">
            @foreach($breads as $bread)
                <div class="col-md-3 menu-items">
                    <!-- <a href="/bread/{{ $bread->slug }}"> -->
                        <img src="{{ Voyager::image( $bread->image ) }}" style="width:100%">
                        <h3 class="title">{{ $bread->title }}</h3>
                        <div class="description">
                            <div>{{ $bread->description }}</div>
                        </div>
                    <!-- </a> -->
                </div>
            @endforeach
            </div>
	    </div>          
        </div>


        <!-- Snacks menu items -->
        <div class="tab-pane fade" id="nav-snack" role="tabpanel" aria-labelledby="nav-snack-tab">
        
        <div class="container">
		<br><br>
            <div class="row menu-item-row">
            @foreach($snacks as $snack)
                <div class="col-md-3 menu-items">
                    <!-- <a href="/snack/{{ $snack->slug }}"> -->
                        <img src="{{ Voyager::image( $snack->image ) }}" style="width:100%">
                        <h3 class="title">{{ $snack->title }}</h3>
                        <div class="description">
                            <div>{{ $snack->description }}</div>
                        </div>
                    <!-- </a> -->
                </div>
            @endforeach
            </div>
	    </div>          
        </div>


        <!-- Drinks menu items -->
        <div class="tab-pane fade" id="nav-drink" role="tabpanel" aria-labelledby="nav-drink-tab">
        
        <div class="container">
		<br><br>
            <div class="row menu-item-row">
            @foreach($drinks as $drink)
                <div class="col-md-3 menu-items">
                    <!-- <a href="/drink/{{ $drink->slug }}"> -->
                        <img src="{{ Voyager::image( $drink->image ) }}" style="width:100%;">
                        <h3 class="title">{{ $drink->title }}</h3>
                        <div class="description">
                            <div>{{ $drink->description }}</div>
                        </div>
                    <!-- </a> -->
                </div>
            @endforeach
            </div>
	    </div>          
        </div>

        
        
    </div> 
    </div> 


    <!-- Divider 2 -->
    <div class="container-fluid d-lg-block d-md-block d-sm-block d-xs-block" id="para-container" style="left: 0px !important; position:absolute;">
      <div class="row">
        <div class="img-responsive">
          <div style="background-image: url({{ $page->divider_2 }}); height: 300px;" class="parallax img-responsive center-block" alt="noodles"></div>
        </div>
      </div>
    </div>


    <!-- take away section -->
    <div class="container takeaway-container">
        <div class="row">
            <div class="col-lg-6 d-sm-block d-sm-block d-xs-block about-img-block">
                <div class="about-img-first-row">
                    <img src="{{ $page->takeaway_image_1 }}" width="48%" />
                    <img src="{{ $page->takeaway_image_2 }}" width="48%" />
                </div>
                <div>
                    <img src="{{ $page->takeaway_image_3 }}" width="48%" />
                    <img src="{{ $page->takeaway_image_4 }}" width="48%" />
                </div>
            </div>
            <div class="col-lg-6 d-sm-block d-sm-block d-xs-block about-text-block">
                <h2 style="padding-top:50px;">{{ $page->takeaway_title }}</h2>
                <p>{{ $page->takeaway_text }}</p>
                <!-- <a href="" style="z-index:10;"><div class="take-away-btn" id="take-away-btn" style="background-image:url({{ $page->takeaway_bg_dark }});background-size:cover;overflow:hidden;width:170px;height: 70px;z-index:7;margin:auto;margin-top:100px;"></div></a> -->
                <div onclick="window.scrollTo({ top: 0, behavior: 'smooth' });" class="test" style="background-image:url({{ $page->takeaway_bg_dark }});background-size:cover;overflow:hidden;width:170px;height: 70px;z-index:7;margin:auto;margin-top:100px;"></div>
            </div>
        </div>
    </div>


    <!-- Instagram feed -->
    
    <div class="container-fluid" id="instagram-feed">
      <div class="row">
        <instagram></instagram>
        <script>
        var userFeed = new Instafeed({
                        get: 'user',
                        userId: '5841564157',
                        clientId: 'd24a2484eaa64121bb55c4a7cf89d017',
                        accessToken: '5841564157.1677ed0.c858607209ae403fb7ff504fbc475f75',
                        // resolution: 'standard_resolution',
                        
                        orientation: 'square',
                        resolution: 'standard_resolution',
                        target: 'instafeed',
                        sortBy: 'most-recent',
                        limit: 8,
                        links: false
                    });
            
                    userFeed.run();
        </script>
      </div>
    </div>


    <!-- Contact section -->
    <div class="container-fluid" id="footer-menu">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
          <a href="https://www.instagram.com/_namnoodles/" target="_blank"><i class="fa fa-arrow-circle-up fa-2x" aria-hidden="true" id="insta-arrow"></i></a>
          <h3 class="follow-text">Follow Us On Instagram</h3>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3" id="footer-elements">
          <h4>ADRESSE</h4>
          <a href="https://www.google.dk/maps/place/Nam+Noodles/@57.0499749,9.9144563,17z/data=!4m13!1m7!3m6!1s0x4649328b731ef46f:0xbb81a63f8470cab2!2sVesterbro+74,+9000+Aalborg!3b1!8m2!3d57.049972!4d9.916645!3m4!1s0x4649328b731ef46f:0x661e0213fefa847!8m2!3d57.0498319!4d9.916602?hl=en" target="_blank"><p>Vesterbro 74 <br> 9000 Aalborg</p></a>
          <a href="handelsbetingelser.html" class="paymentInfo">Handelsbetingelser</a>
        </div>
        <div class=" col-xs-6 col-sm-6 col-md-3 col-lg-3" id="footer-elements">
          <h4>KONTAKT OS</h4>
          <p>Tlf.:<a href="tel:{{ $page->phone_nr }}" id="contact-link">{{ $page->phone_nr }} </a><br> Email: <a href="mailto:{{ $page->email }}?Subject=Question%20about%20the%20restaurant" target="_top" id="contact-link">{{ $page->email }}</a></p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3" id="footer-elements">
          <h4>ÅBNINGSTIDER</h4>
          <p>Søndag-Mandag: Lukket <br> Tirsdag-Fredag: 17:00-21:00 <br> Lørdag: 11:30-21:00</p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3" id="footer-elements" class="socialIcons">
          <h4>SOCIAL MEDIA</h4>
              <div id="social-icon2">
                <a href="https://www.facebook.com/namnoodles/?ref=br_rs" target="_blank"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
                
                <a href="https://www.instagram.com/_namnoodles/" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>

                <!-- tripadvisor -->
                <a href="https://www.tripadvisor.co.uk/Restaurant_Review-g189529-d13009893-Reviews-Nam_Noodles-Aalborg_North_Jutland_Jutland.html" target="_blank"><i class="fa fa-tripadvisor fa-2x" aria-hidden="true"></i></a>        
              </div>
        </div>
      </div>
    </div>

    </div>
    
        <!-- pop-up window scripts -->
        <script>
            $(document).ready(function () {
                $('.test').click(function(event) {
                    event.preventDefault();
                    $('.popup-container').addClass('active2');
                    $("body").animate({scrollTop:0}, 1000);
                });

                $('.backdrop').click(function() {
                    $('.popup-container').removeClass('active2');
                });

                $('.fa').click(function() {
                    $('.popup-container').removeClass('active2');
                });

                $('.fa-cross').click(function() {
                    $('.notification-container').addClass('hide-popup');
                });
            });
        </script>

        <script src="{{ mix('js/bootstrap.js') }}"></script>
        <script src="{{ mix('js/app.js') }}"></script>
        <script src="{{ mix('js/instafeed.min.js') }}"></script>
        

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        
        <script src="https://use.fontawesome.com/93e2187904.js"></script>
        
    </body>
    
</html>