<!DOCTYPE html>
<html>

<head>
    <!--Start Night theme-->
    <style>
        .night-theme-background.active-color{
            background: #ffffff!important; /*менять цвет бэкграунда тут*/
        }
        .night-theme-background.active-color .text{
            color: #000000!important; /*менять цвет текста тут*/
        }
        .switcher{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 15px;
        }
        .switcher .switcher-item{
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            margin-right: 15px;
        }
        .switcher .switcher-item:hover{
            transition: 0.7s;
            opacity: 0.7;
        }
        .switcher .switcher-item input{
            margin-right: 5px;
            cursor: pointer;
        }
        .img-svg-area svg{
            width: 35px;
            min-width: 35px;
            height: 35px;
            margin-right: 16px;
        }
        .night-theme-background.active-color .img-svg-area svg path{
            fill: #000000;
        }
    </style>
    <!--End Night theme--> 

    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--metatextblock-->
    <title>Ikra-shopping - Магазин</title>
    <meta name="description" content="Найнижча ціна на червону і чорну ікру в Україні!" />
    <meta property="og:url" content="/" />
    <meta property="og:title" content=Ikra-shopping - Магазин" />
    <meta property="og:description" content="Найнижча ціна на червону і чорну ікру в Україні!" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="img/106.png" />
    
    <link rel="canonical" href="/">
    <!--/metatextblock-->
    <meta property="fb:app_id" content="257953674358265" />
    <meta name="format-detection" content="telephone=yes" />
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <link rel="shortcut icon" href="img/__28.ico" type="image/x-icon" />
    <!-- img -->
    <link rel="stylesheet" href="css/tilda-grid-3.0.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/tilda-blocks-2.12.css?t=1580492763" type="text/css" media="all" />
    <link rel="stylesheet" href="css/tilda-animation-1.0.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/tilda-menusub-1.0.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/tilda-popup-1.1.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/tilda-slds-1.4.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/tilda-zoom-2.0.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/tilda-catalog-1.1.min.css" type="text/css" media="all" />
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/tilda-scripts-2.8.min.js"></script>
    <script src="js/tilda-blocks-2.7.js?t=1580492763"></script>
    <script src="js/lazyload-1.3.min.js" charset="utf-8"></script>
    <script src="js/tilda-animation-1.0.min.js" charset="utf-8"></script>
    <script src="js/tilda-menusub-1.0.min.js" charset="utf-8"></script>
    <script src="js/tilda-forms-1.0.min.js" charset="utf-8"></script>
    <script src="js/hammer.min.js" charset="utf-8"></script>
    <script src="js/tilda-slds-1.4.min.js" charset="utf-8"></script>
    <script src="js/tilda-products-1.0.min.js" charset="utf-8"></script>
    <script src="js/tilda-zoom-2.0.min.js" charset="utf-8"></script>
    <script src="js/tilda-catalog-1.1.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/js/jquery.maskedinput.min.js"></script>
    <script src="/js/myscripts.js?v=1004"></script>
    <script type="text/javascript">
        window.dataLayer = window.dataLayer || [];
    </script>
    <script type="text/javascript">
        if ((/bot|google|yandex|baidu|bing|msn|duckduckbot|teoma|slurp|crawler|spider|robot|crawling|facebook/i.test(navigator.userAgent)) === false && typeof(sessionStorage) != 'undefined' && sessionStorage.getItem('visited') !== 'y') {
            var style = document.createElement('style');
            style.type = 'text/css';
            style.innerHTML = '@media screen and (min-width: 980px) {.t-records {opacity: 0;}.t-records_animated {-webkit-transition: opacity ease-in-out .2s;-moz-transition: opacity ease-in-out .2s;-o-transition: opacity ease-in-out .2s;transition: opacity ease-in-out .2s;}.t-records.t-records_visible {opacity: 1;}}';
            document.getElementsByTagName('head')[0].appendChild(style);
            $(document).ready(function() {
                $('.t-records').addClass('t-records_animated');
                setTimeout(function() {
                    $('.t-records').addClass('t-records_visible');
                    sessionStorage.setItem('visited', 'y');
                }, 400);
            });
        }
    </script>
</head>
<style>




    .personal-checkbox{
        display: flex;
        margin: 15px 0;
        font-family: 'Roboto',Arial,sans-serif;
        font-weight: 300;
        color: #ffffff;
        font-size: 20px;
    }
    .personal-checkbox.error {
        color: red;
        background: white;
        padding: 10px;
    }
    .personal-checkbox .checkbox {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .personal-checkbox .checkbox .checkbox-check{
        width: 20px;
        height: 20px;
        margin-right: 5px;
    }
    .t-submit:disabled{
        opacity: 0.65;
    }

    .t228__list_item.t-active a{
        color: #ff1500 !important;
    }
    #order .t-menu__link-item.t-active::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0%;
        opacity: 0;
        width: 100%;
        height: 100%;
        -webkit-box-shadow: inset 0px -px 0px 0px;
        -moz-box-shadow: inset 0px -px 0px 0px;
        box-shadow: inset 0px -px 0px 0px;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    #rec158760584 .t228__list_item.t-active .t-menu__link-item::after {
        opacity: 1;
        bottom: -0px;
        border-bottom: 0px solid #0000FF;
        -webkit-box-shadow: inset 0px -1px 0px 0px #0000FF;
        -moz-box-shadow: inset 0px -1px 0px 0px #0000FF;
        box-shadow: inset 0px -1px 0px 0px #0000FF;
    }
    .buttons-lang{
        display: flex;
        flex-direction: column;
        margin-right: 20px;
        align-items: center;
        justify-content: center;
        height: 100%;
    }
    .buttons-lang .lang-button {
        color: #ffffff !important;
        font-size: 20px;
        font-weight: 600;
        text-transform: uppercase;
    }
    .buttons-lang .lang-button.current {
        color: rgb(255, 68, 0) !important;
    }
    #allrecords .t228 .tel-item{
        margin-top: 5px;
        color:#ffffff;
        font-size:16px;
        font-weight:600;
        text-transform:uppercase;
        padding-left: 0;
        margin-right: 14px;
    }
    #allrecords .t228 .tel-item a{
        color:#ffffff;
        font-size:16px;
        font-weight:600;
        text-transform:uppercase;
    }
    #nav158760584 a:hover{
        transition: 0.7s;
        opacity: 0.7;
    }
    .mob-menu{
        display: none;
    }
    .body-mob-munu{
        display: none;
    }
    .t228__maincontainer{
        display: table;
    }
    .body-mob-menu{
        display: none;
    }
    @media (max-width: 980px) {
        .mob-menu{
            width: 100%;
            display: flex;
            position: fixed;
            justify-content: space-around;
            align-items: center;
            z-index: 1001;
            background: rgba( 0, 0, 0, 0.75);
        }
        .burger-menu{

        }
        .burger-menu svg{
            width: 30px;
            height: 30px;
        }
        .body-mob-menu {
            background: rgba( 0, 0, 0, 0.75);
            display: none;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: fixed;
            z-index: 999;
            width: 100vw;
            height: 100vh;
        }
        .body-mob-menu.active{
            display: flex;
        }
        .buttons-lang {
            margin-right: 0;
            height: auto;
        }
        .t228__maincontainer{
            display: none;
        }
        .body-mob-menu .close-button{
            position: absolute;
            top: 15%;
            right: 10%;
        }
        .body-mob-menu .close-button svg{
            width: 20px;
            height: 20px;
        }
    }
    .t-form__submit{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }
</style>
<body class="t-body" style="margin:0;"> 

    <!--allrecords-->
    <div id="allrecords" class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="2022808" data-tilda-page-id="9210055" data-tilda-formskey="778648ca3e60e50876a9c9f9bc0d6cba">
        <div id="rec158760584" class="r t-rec" style=" " data-animationappear="off" data-record-type="257">
            <!-- T228 -->
            <div id="nav158760584marker"></div>
            <div id="nav158760584" class="t228 t228__positionfixed "  style="background-color: rgba(0,0,0,0.30); height:100px; d " data-bgcolor-hex="#000000" data-bgcolor-rgba="rgba(0,0,0,0.30)" data-navmarker="nav158760584marker" data-appearoffset="" data-bgopacity-two="" data-menushadow="" data-bgopacity="0.30" data-menu-items-align="center" data-menu="yes">
                <div class="mob-menu">
                    <div class="mob-logo">
                        <img src="img/233.png" class="t228__imglogo " alt=" IKRA-SHOP ">
                          <a style="color:#ffffff";> Для отримання консутьтації телефонуйте:</a>
                          <a  style="color:#ffffff"; href="tel:+380985484793"><strong><h2>+38 (098) 548-47-93</h2></a></strong>
                    </div>
                    <div class="burger-menu">
                        <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.62793 2.87494L20.3711 2.87494C20.716 2.87494 20.9957 2.45491 20.9955 1.93747C20.9953 1.41995 20.7152 1 20.3703 1L1.6272 1C1.28231 1 1.0026 1.42003 1.00281 1.93747C1.00301 2.45491 1.28309 2.87494 1.62793 2.87494Z" fill="#FF4400" stroke="white" stroke-width="0.2"/>
                            <path d="M20.3703 7.5625L1.6272 7.5625C1.28231 7.5625 1.0026 7.98253 1.00281 8.49997C1.00301 9.0174 1.28309 9.43743 1.62793 9.43743L20.3711 9.43743C20.716 9.43743 20.9957 9.01741 20.9955 8.49997C20.9953 7.98253 20.7152 7.5625 20.3703 7.5625Z" fill="#FF4400" stroke="white" stroke-width="0.2"/>
                            <path d="M20.3705 14.125L7.87523 14.125C7.53035 14.125 7.25064 14.545 7.25083 15.0625C7.25102 15.58 7.53109 15.9999 7.87592 15.9999L20.3712 15.9999C20.716 15.9999 20.9958 15.5799 20.9956 15.0625C20.9954 14.545 20.7154 14.125 20.3705 14.125Z" fill="#FF4400" stroke="white" stroke-width="0.2"/>
                        </svg>
                    </div>
                </div>

                <div class="t228__maincontainer " style="height:100px;">
                    <div class="t228__padding40px"></div>
                    <div class="t228__leftside">
                        <div class="t228__leftcontainer">
                            <div style="color:#ffffff; "><img src="img/233.png" class="t228__imglogo " alt=" IKRA-SHOP "></div>
                        </div>
                    </div>
                    <div class="t228__centerside ">
                        <div class="t228__centercontainer">
                            <ul class="t228__list t228__list_hidden">
                                <li class="t228__list_item"><a class="t-menu__link-item" href="#offer" data-menu-submenu-hook="" style="color:#ffffff;font-size:20px;font-weight:600;text-transform:uppercase;" data-menu-item-number="1">КАТАЛОГ</a> </li>
                                <li class="t228__list_item"><a class="t-menu__link-item" href="#rec158825574" data-menu-submenu-hook="" style="color:#ffffff;font-size:20px;font-weight:600;text-transform:uppercase;" data-menu-item-number="2">ПРО НАС</a> </li>
                                <li class="t228__list_item"><a class="t-menu__link-item" href="#rec158896830" data-menu-submenu-hook="" style="color:#ffffff;font-size:20px;font-weight:600;text-transform:uppercase;" data-menu-item-number="3">ВІДГУКИ</a> </li>
                                <li class="t228__list_item"><a class="t-menu__link-item" href="#rec158915242" data-menu-submenu-hook="" style="color:#ffffff;font-size:20px;font-weight:600;text-transform:uppercase;" data-menu-item-number="4">ДОСТАВКА</a> </li>
                                <li class="t228__list_item tel-item"><a href="tel:+380985484793"><img src="img/imgonline-com-ua-Resize-shAVIdkyLE5ZbY (1).png"></a>
                                 <div><a href="tel:+380985484793"><h3>+38 (098) 548-47-93</h3></a></div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="buttons-lang">
                       <a href style="color:#ffffff;="index.php"><h2 >UA</h2></a>
                        <a href="index_ru.php" class="lang-button current"><h3>ru</h3></a>
                    </div>

                </div>
                <div class="body-mob-menu">
                    <div class="close-button">
                        <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.833496 0.831724L7.89061 7.88883M0.833496 7.77928L7.89061 0.722168" stroke="white" stroke-width="1.5"/>
                        </svg>
                    </div>
                    <div class="t228__centerside ">
                        <div class="t228__centercontainer">
                            <ul class="t228__list t228__list_hidden">
                                <li class="t228__list_item"><a class="t-menu__link-item" href="#offer" data-menu-submenu-hook="" style="color:#ffffff;font-size:20px;font-weight:600;text-transform:uppercase;" data-menu-item-number="1">КАТАЛОГ</a> </li>
                                <li class="t228__list_item"><a class="t-menu__link-item" href="#rec158825574" data-menu-submenu-hook="" style="color:#ffffff;font-size:20px;font-weight:600;text-transform:uppercase;" data-menu-item-number="2">ПРО НАС</a> </li>
                                <li class="t228__list_item"><a class="t-menu__link-item" href="#rec158896830" data-menu-submenu-hook="" style="color:#ffffff;font-size:20px;font-weight:600;text-transform:uppercase;" data-menu-item-number="3">ВІДГУКИ</a> </li>
                                <li class="t228__list_item"><a class="t-menu__link-item" href="#rec158915242" data-menu-submenu-hook="" style="color:#ffffff;font-size:20px;font-weight:600;text-transform:uppercase;" data-menu-item-number="4">ДОСТАВКА</a> </li>
                                 <li class="t228__list_item tel-item"><a href="tel:+380985484793"><img src="img/imgonline-com-ua-Resize-shAVIdkyLE5ZbY (1).png"></a>
                                      <div><a href="tel:+380985484793"><h3>+38 (098) 548-47-93</h3></a></div>
                                </li>

                            </ul>
                        </div>
                    </div>
                   <div class="buttons-lang">
                        <a href style="color:#ffffff;="index.php"><h2 >UA</h2></a>
                        <a href="index_ru.php" class="lang-button current"><h3>ru</h3></a>
                    </div>

                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function() {
                    t228_highlight();
                    t228_checkAnchorLinks('158760584');
                });
                $(window).resize(function() {
                    t228_setWidth('158760584');
                });
              /*  $(window).load(function() {
                    if (typeof t228_setWidth !== "undefined") {
                        t228_setWidth('158760584');
                    }
                });*/
            </script>
            <style>
          
            
            
                #rec158760584 .t-menu__link-item {
                    -webkit-transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
                    transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
                    position: relative;
                }


                #rec158760584 .t-menu__link-item::after {
                    content: '';
                    position: absolute;
                    left: 0;
                    bottom: 0%;
                    opacity: 0;
                    width: 100%;
                    height: 100%;
                    border-bottom: px solid;
                    -webkit-box-shadow: inset 0px -px 0px 0px;
                    -moz-box-shadow: inset 0px -px 0px 0px;
                    box-shadow: inset 0px -px 0px 0px;
                    -webkit-transition: all 0.3s ease;
                    transition: all 0.3s ease;
                }

                #rec158760584 .t-menu__link-item.t-active {
                    color: #ed0909 !important;
                    font-weight: 700 !important

                }

                #rec158760584 .t-menu__link-item.t-active::after {
                    opacity: 1;
                    bottom: -0px;
                    border-bottom: 0px solid #0000FF;
                    -webkit-box-shadow: inset 0px -1px 0px 0px #0000FF;
                    -moz-box-shadow: inset 0px -1px 0px 0px #0000FF;
                    box-shadow: inset 0px -1px 0px 0px #0000FF;
                }

                @supports (overflow:-webkit-marquee) and (justify-content:inherit) {
                    #rec158760584 .t-menu__link-item,
                    #rec158760584 .t-menu__link-item.t-active {
                        opacity: 1 !important;
                    }
                }
            </style>
            <script type="text/javascript">
                $(document).ready(function() {
                    t228_highlight();
                    t228_checkAnchorLinks('158760584');
                });
                $(window).resize(function() {
                    t228_setWidth('158760584');
                });
               /* $(window).load(function() {
                    if (typeof t228_setWidth !== "undefined") {
                        t228_setWidth('158760584');
                    }
                });*/
            </script>
            <style>
          
            
            
                #rec158760584 .t-menu__link-item {
                    -webkit-transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
                    transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
                    position: relative;
                }


                #rec158760584 .t-menu__link-item::after {
                    content: '';
                    position: absolute;
                    left: 0;
                    bottom: 0%;
                    opacity: 0;
                    width: 100%;
                    height: 100%;
                    border-bottom: px solid;
                    -webkit-box-shadow: inset 0px -px 0px 0px;
                    -moz-box-shadow: inset 0px -px 0px 0px;
                    box-shadow: inset 0px -px 0px 0px;
                    -webkit-transition: all 0.3s ease;
                    transition: all 0.3s ease;
                }

                #rec158760584 .t-menu__link-item.t-active {
                    color: #ed0909 !important;
                    font-weight: 700 !important

                }

                #rec158760584 .t-menu__link-item.t-active::after {
                    opacity: 1;
                    bottom: -0px;
                    border-bottom: 0px solid #0000FF;
                    -webkit-box-shadow: inset 0px -1px 0px 0px #0000FF;
                    -moz-box-shadow: inset 0px -1px 0px 0px #0000FF;
                    box-shadow: inset 0px -1px 0px 0px #0000FF;
                }

                @supports (overflow:-webkit-marquee) and (justify-content:inherit) {
                    #rec158760584 .t-menu__link-item,
                    #rec158760584 .t-menu__link-item.t-active {
                        opacity: 1 !important;
                    }
                }
            </style>
            <script type="text/javascript">
                $(document).ready(function() {
                    setTimeout(function() {
                        t_menusub_init('158760584');
                    }, 500);
                });
            </script>
            <style>
                @media screen and (max-width: 980px) {
                    #rec158760584 .t-menusub__menu .t-menusub__link-item {
                        color: #ffffff !important;
                    }
                    .t228__leftside {
                        width: 100%;
                    }
                    .t228__leftcontainer {
                        width: 100%;
                    }
                    .t228__imglogo {
                        width: 320px;
                    }
                    .t228__leftcontainer a {
                        width: 100%;
                    }
                }
                @media screen and (max-width: 980px) {
                    .t228__maincontainer {
                        background: black;
                    }
                }
                @media screen and (max-width: 320px) {
                    .t228__leftside {
                        width: 100%;
                    }
                    .t228__leftcontainer {
                        width: 100%;
                    }
                    .t228__imglogo {
                        width: 280px;
                    }
                    .t228__leftcontainer a {
                        width: 100%;
                    }
                }
            </style>
            <!--[if IE 8]><style>#rec158760584 .t228 { filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#D9000000', endColorstr='#D9000000');
            }</style><![endif]-->
        </div>

        <div id="rec158824116" class="r t-rec" style=" " data-animationappear="off" data-record-type="702">
            <!-- T702 -->
            <div class="t702">
                <div class="t-popup" data-tooltip-hook="#popup:myform1">
                    <div class="t-popup__close">
                        <div class="t-popup__close-wrapper">
                            <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                    <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="t-popup__container t-width t-width_6"> <img class="t702__img t-img" src="img/__27.png" data-original="img/__27.png" imgfield="img">
                        <div class="t702__wrapper">
                            <div class="t702__text-wrapper t-align_center">
                                <div class="t702__title t-title t-title_xxs" style="">КУПИТЬ ИКРУ</div>
                            </div>
                            <form id="form158824116" name='form158824116' role="form" action='zak.php' method='POST' data-formactiontype="2" data-inputbox=".t-input-group" class="t-form t-form_inputs-total_2 " data-success-orderback="t702_onSuccess">
                                <input type="hidden" name="formservices[]" value="b73c165211b0b51bb5cc10a278103bb7" class="js-formaction-services">
                                <input type="hidden" name="tildaspec-formname" tabindex="-1" value="КУПИТЬ ИКРУ">
                                <div class="js-successbox t-form__successbox t-text t-text_md" style="display:none;"></div>
                                <div class="t-form__inputsbox">
                                    <div class="t-input-group t-input-group_nm" data-input-lid="1495810359387">
                                        <div class="t-input-block">
                                            <input id="check" name="check" type="hidden" value="">
                                            <input required type="text" name="Name" id="input_text" class="t-input js-tilda-rule " value="" placeholder="Петронко Іван" data-tilda-req="1" data-tilda-rule="name" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;">
                                            <div class="t-input-error"></div>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_ph" data-input-lid="1495810410810">
                                        <div class="t-input-block">
                                            <input required type="tel" name="Phone" id="phone" class="t-input js-tilda-rule " value="" placeholder="+38-(097)-666-21-07" data-tilda-req="1" data-tilda-rule="phone" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;">
                                            <div class="t-input-error"></div>
                                            <input type="hidden" name="comm" value="КУПИТЬ ИКРУ">
                                        </div>
                                    </div>
                                   
                                    <div class="t-form__errorbox-middle">
                                        <div class="js-errorbox-all t-form__errorbox-wrapper" style="display:none;">
                                            <div class="t-form__errorbox-text t-text t-text_md">
                                                <p class="t-form__errorbox-item js-rule-error js-rule-error-all"></p>
                                                <p class="t-form__errorbox-item js-rule-error js-rule-error-req"></p>
                                                <p class="t-form__errorbox-item js-rule-error js-rule-error-email"></p>
                                                <p class="t-form__errorbox-item js-rule-error js-rule-error-name"></p>
                                                <p class="t-form__errorbox-item js-rule-error js-rule-error-phone"></p>
                                                <p class="t-form__errorbox-item js-rule-error js-rule-error-minlength"></p>
                                                <p class="t-form__errorbox-item js-rule-error js-rule-error-string"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="t-form__submit">
                                        <button type="submit" class="t-submit" onclick="onsubm(this)" style="color:#ffffff;background-color:#ff1500;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;" onclick="document.getElementById('check').value = 'nospam';">КУПИТЬ ИКРУ</button>
                                    </div>
                                </div>
                                <div class="t-form__errorbox-bottom">
                                    <div class="js-errorbox-all t-form__errorbox-wrapper" style="display:none;">
                                        <div class="t-form__errorbox-text t-text t-text_md">
                                            <p class="t-form__errorbox-item js-rule-error js-rule-error-all"></p>
                                            <p class="t-form__errorbox-item js-rule-error js-rule-error-req"></p>
                                            <p class="t-form__errorbox-item js-rule-error js-rule-error-email"></p>
                                            <p class="t-form__errorbox-item js-rule-error js-rule-error-name"></p>
                                            <p class="t-form__errorbox-item js-rule-error js-rule-error-phone"></p>
                                            <p class="t-form__errorbox-item js-rule-error js-rule-error-minlength"></p>
                                            <p class="t-form__errorbox-item js-rule-error js-rule-error-string"></p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <style>
                                #rec158824116 input::-webkit-input-placeholder {
                                    color: #000000;
                                    opacity: 0.5;
                                }
                                
                                #rec158824116 input::-moz-placeholder {
                                    color: #000000;
                                    opacity: 0.5;
                                }
                                
                                #rec158824116 input:-moz-placeholder {
                                    color: #000000;
                                    opacity: 0.5;
                                }
                                
                                #rec158824116 input:-ms-input-placeholder {
                                    color: #000000;
                                    opacity: 0.5;
                                }
                                
                                #rec158824116 textarea::-webkit-input-placeholder {
                                    color: #000000;
                                    opacity: 0.5;
                                }
                                
                                #rec158824116 textarea::-moz-placeholder {
                                    color: #000000;
                                    opacity: 0.5;
                                }
                                
                                #rec158824116 textarea:-moz-placeholder {
                                    color: #000000;
                                    opacity: 0.5;
                                }
                                
                                #rec158824116 textarea:-ms-input-placeholder {
                                    color: #000000;
                                    opacity: 0.5;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
                $(document).ready(function() {
                    setTimeout(function() {
                        t702_initPopup('158824116');
                    }, 500); /* hack for Android */
                    var ua = navigator.userAgent.toLowerCase();
                    var isAndroid = ua.indexOf("android") > -1;
                    if (isAndroid) {
                        $('.t-body').addClass('t-body_scrollable-hack-for-android');
                        $('head').append("<style>@media screen and (max-width: 660px) {\n.t-body_scrollable-hack-for-android {\noverflow: visible !important;\n}\n}\n</style>");
                        console.log('Android css hack was inited');
                    }
                });
            </script>
            <style>
                #rec158824116 .t-btn[data-btneffects-first],
                #rec158824116 .t-btn[data-btneffects-second],
                #rec158824116 .t-submit[data-btneffects-first],
                #rec158824116 .t-submit[data-btneffects-second] {
                    position: relative;
                    overflow: hidden;
                    -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
                }
            </style>
            <script type="text/javascript">
                $(document).ready(function() {});
            </script>
        </div>
        <div id="rec158760520" class="r t-rec" style=" " data-animationappear="off" data-record-type="415">
            <!-- t415 -->
            <!-- cover -->
            
            	<style type="text/css">

				 #garland {position: absolute; top: 0; left: 0; background-image: url("img/04_1.png"); height: 36px; width: 100%; overflow: hidden; z-index: 99;} 

				#nums_1 {padding: 100px;}

				.garland_1 {background-position: 0 0;}

				.garland_2 {background-position: 0 -36px;}

				.garland_3 {background-position: 0 -72px;}

				.garland_4 {background-position: 0 -108px;}

		</style>

		

		<script>

				var div = document.createElement('div');
 
				div.innerHTML = '<div id="garland"><div id="nums_1">1</div></div>';

				document.body.insertBefore(div, document.body.firstChild);
 
			

				function garland()

				{

						nums = document.getElementById('nums_1').innerHTML;

						if(nums == 1){document.getElementById('garland').className='garland_1';document.getElementById('nums_1').innerHTML='2'};

						if(nums == 2){document.getElementById('garland').className='garland_2';document.getElementById('nums_1').innerHTML='3'};

						if(nums == 3){document.getElementById('garland').className='garland_3';document.getElementById('nums_1').innerHTML='4'};

						if(nums == 4){document.getElementById('garland').className='garland_4';document.getElementById('nums_1').innerHTML='1'};

				}

				setInterval(function(){garland()}, 600);

		</script>
            
            <style type="text/css">

				.garland_image {position: absolute; top: 0; left: 0; width: 300px; height: 229px; overflow: hidden; z-index: 99; background: url(/img/05.png);}

		</style>

		

		<script>

				var div = document.createElement('div');
 
				div.innerHTML = '<div class="garland_image"></div>';

				document.body.insertBefore(div, document.body.firstChild);
 
		</script>
            <div class="t-cover" id="recorddiv158760520" bgimgfield="img" style="height:100vh; background-image:url('img/Butterbrot_Seafoods_.jpg');">
                <div class="t-cover__carrier" id="coverCarry158760520" data-content-cover-id="158760520" data-content-cover-bg="img/Butterbrot_Seafoods_.jpg" data-content-cover-height="100vh" data-content-cover-parallax="dynamic" style="height:100vh;background-attachment:scroll; "></div>
                <div class="t-cover__filter" style="height:100vh;background-image: -moz-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.20));background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.20));background-image: -o-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.20));background-image: -ms-linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.20));background-image: linear-gradient(top, rgba(0,0,0,0.40), rgba(0,0,0,0.20));filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#99000000', endColorstr='#cc000000');"></div>
                <div class="t415">
                    <div class="t-container">
                        <div class="t-width t-width_12 t415__mainblock">
                            <div class="t-cover__wrapper t-valign_middle" style="height:100vh;">
                                <div class="t415__content" data-hook-content="covercontent">
                                    <div class="t415__textwrapper t-width t-width_12">
                                        <div class="t415__title t-title t-title_md" field="title" style="color:#ffffff; "><br>ІКРА <span style="color: rgb(255, 68, 0);">ЧЕРВОНА</span> ТА <span style="color:#ffffff;">ЧОРНА</span><br></span>ЗНИЖКИ ДО -50% !
                                            <br>
                                        </div>
                                        <div class="t415__descr t-descr t-descr_md" field="descr" style="color:#ffffff; ">
                                            <div><h2 ><strong style="color:#ffffff;">АКЦІЯ  1+1=3</strong></h2></div>
                                            <div class="ban1"><img src="img/Aktsiia-450x185-removebg-preview.png" alt="banner" class="responsive" width="300" height=""></div>
                                            <div style="font-size:30px;color:#ffffff;" data-customstyle="yes"><strong></strong><strong>При покупці 2-х баночок 500г ікри,<br> </strong><strong>баночка 500г в подарунок!</strong><span style="color: rgb(255, 24, 0);"><strong></strong></span></div>
                                        </div>
                                    </div>
                                    <div id="t415__timer158760520" class="t415__timer">
                                        <div><h2 style="color:#ffffff; " >До кінця акції залишилося:</h2></div>
                                        <div class="t415__col t415__hide"> <span class="t415__days t-title t-title_lg t415__number" style="color: #ffffff"></span>
                                                <div class="t415__text t-descr t-descr_xxs" style="color: #ffffff">Днів</div>
                                        </div>
                                        <div class="t415__col"> <span class="t415__hours t-title t-title_lg t415__number" style="color: #ffffff"></span>
                                            <div class="t415__text t-descr t-descr_xxs" style="color: #ffffff">Годин</div>
                                        </div>
                                        <div class="t415__col"> <span class="t415__minutes t-title t-title_lg t415__number" style="color: #ffffff"></span>
                                            <div class="t415__text t-descr t-descr_xxs" style="color: #ffffff">Хвилин</div>
                                        </div>
                                        <div class="t415__col"> <span class="t415__seconds t-title t-title_lg t415__number" style="color: #ffffff"></span>
                                            <div class="t415__text t-descr t-descr_xxs" style="color: #ffffff">Секунд</div>
                                        </div>
                                    </div>
                                    <div class="t415__buttons">
                                        <a href="#popup:myform2" target="" class="t415__btn t-btn " style="color:#ffffff;background-color:#ff1500;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;">
                                            <table style="width:100%; height:100%;">
                                                <tr>
                                                    <td>КУПИТИ ПО АКЦІЇ 1 + 1 = 3</td>
                                                </tr>
                                            </table>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function() {
                    function getTimeRemaining(endtime) {
                        var t = Date.parse(endtime) - Date.parse(new Date());
                        var seconds = Math.floor((t / 1000) % 60);
                        var minutes = Math.floor((t / 1000 / 60) % 60);
                        var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
                        var days = Math.floor(t / (1000 * 60 * 60 * 24));
                        return {
                            'total': t,
                            'days': days,
                            'hours': hours,
                            'minutes': minutes,
                            'seconds': seconds
                        };
                    }

                    function initializeClock(id, endtime) {
                        var clock = document.getElementById(id);
                        if (!clock) {
                            return;
                        }
                        var daysSpan = clock.querySelector('.t415__days');
                        var hoursSpan = clock.querySelector('.t415__hours');
                        var minutesSpan = clock.querySelector('.t415__minutes');
                        var secondsSpan = clock.querySelector('.t415__seconds');

                        function updateClock() {
                            var t = getTimeRemaining(endtime);
                            if (t.days >= 100) {
                                daysSpan.innerHTML = t.days;
                            } else {
                                daysSpan.innerHTML = ('0' + t.days).slice(-2);
                            }
                            hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
                            minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
                            secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
                            if (t.total <= 0) {
                                clearInterval(timeinterval);
                            }
                        }
                        updateClock();
                        var timeinterval = setInterval(updateClock, 1000);
                    }
                    // var deadline = new Date("2099-01-31T23:59+03:00");
                    var deadline = new Date(Date.parse(new Date()) + 1 * 24 * 60 * 60 * 1000);
                    initializeClock('t415__timer158760520', deadline);
                });
            </script>
            <style>
                #rec158760520 .t-btn[data-btneffects-first],
                #rec158760520 .t-btn[data-btneffects-second],
                #rec158760520 .t-submit[data-btneffects-first],
                #rec158760520 .t-submit[data-btneffects-second] {
                    position: relative;
                    overflow: hidden;
                    -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
                }
            </style>
            <script type="text/javascript">
                $(document).ready(function() {});
            </script>
        </div>
        <div id="rec159034061" class="r t-rec" style=" " data-animationappear="off" data-record-type="702">
            <!-- T702 -->
            <div class="t702">
                <div class="t-popup" data-tooltip-hook="#popup:myform2">
                    <div class="t-popup__close">
                        <div class="t-popup__close-wrapper">
                            <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                    <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="t-popup__container t-width t-width_6"> <img class="t702__img t-img" src="img/__27.png" data-original="img/__27.png" imgfield="img">
                        <div class="t702__wrapper">
                            <div class="t702__text-wrapper t-align_center">
                                <div class="t702__title t-title t-title_xxs" style="">Акція "1+1=3"
                                    <br>
                                </div>
                            </div>
                            <form id="form3" action='order.php' method='POST' class="t-form t-form_inputs-total_2 form-area">
                                <input type="text" name="Name" class="t-input name-mask" required placeholder="Ім'я - кирилиця" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                <input type="text" name="lastName" class="t-input last-name-mask" required placeholder="Прізвище - кирилиця" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                <input type="tel" name="Phone" class="t-input phone-mask" required placeholder="Ваш номер телефона - заповнюється цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                <input type="text" name="City" class="t-input city-mask" required placeholder="Город доставки - кирилиця" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                <input type="text" name="Department" class="t-input department-mask" required placeholder="Номер відділення НП - заповнюється цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                <select name="Quantity" class="quantity" style="height: 60px;background-color: transparent;border-radius: 5px;width: 91%;border: 1px solid #c9c9c9;padding: 0 20px;font-size: 16px;color: #000">
                                  <option value= " Горбуша 2 по 0,5 = 1080 грн."selected > Горбуша: 2 на 0,5 = 1080 грн. + 0.5 в подарунок!</option>
                                    <option value= " Кета 2 по 0,5 = 1160 грн. + 0.5 в подарунок!">Кета: 2 на 0,5 = 1160 грн. + 0.5 в подарунок!</option>
                                    <option value= " Веслонос 2 по 0,5 = 1800 грн. + 0.5 в подарунок!">Веслонос: 2 на 0,5 = 1800 грн. + 0.5 в подарунок!</option>
                                     <option value= " Щука 2 по 0,5 = 1000 грн. + 0.5 в подарунок!">Щука: 2 на 0,5 = 1000 грн. + 0.5 в подарунок!</option>
                                      <option value= " Форель 2 по 0,5 = 1220 грн. + 0.5 в подарунок!">Форель: 2 на 0,5 = 1220 грн. + 0.5 в подарунок!</option>
                                       <option value= " Чавича 2 по 0,5 = 1200 грн. + 0.5 в подарунок!">Чавича: 2 на 0,5 = 1200 грн. + 0.5 в подарунок!</option>
                                        <option value= " осетер 2 по 0,100 = 1850 грн. + 0.100 в подарунок!">Осетер: 2 по 0,100 = 1850 грн. + 0.100 в подарунок!</option>
                                </select>
                                <input type="hidden" name="comm" value="Акція 1+1=3в">
                                <input type="hidden" name="ip" value="31.128.76.48" />
                                    <label>
                    <input type="checkbox" checked="checked" required="">
                    <span></span>
                    Я згоден з політикою конфіденційності та користувальницькою угодою
                </label>
                                <div class="t-form__submit">
                                    <button type="submit" class="t-submit" style="color:#ffffff;background-color:#ff1500;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; font-size: 13px !important; display: flex; justify-content: center; align-items: center;">
                                        КУПИТИ ІКРУ
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function() {
                    setTimeout(function() {
                        t702_initPopup('159034061');
                    }, 500); /* hack for Android */
                    var ua = navigator.userAgent.toLowerCase();
                    var isAndroid = ua.indexOf("android") > -1;
                    if (isAndroid) {
                        $('.t-body').addClass('t-body_scrollable-hack-for-android');
                        $('head').append("<style>@media screen and (max-width: 560px) {\n.t-body_scrollable-hack-for-android {\noverflow: visible !important;\n}\n}\n</style>");
                        console.log('Android css hack was inited');
                    }
                });
            </script>
            <style>
                #rec159034061 .t-btn[data-btneffects-first],
                #rec159034061 .t-btn[data-btneffects-second],
                #rec159034061 .t-submit[data-btneffects-first],
                #rec159034061 .t-submit[data-btneffects-second] {
                    position: relative;
                    overflow: hidden;
                    -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
                }
            </style>
            <script type="text/javascript">
                $(document).ready(function() {});
            </script>
            </div>
            
                  <style>
.responsive {max-width: 100%;height: auto;}
.ban1, .ban2 {text-align: center;margin: 0 auto;}
/*@media only screen and (min-width: 600px) {
 .ban2 {display: none;}
 .ban1 {display: block;}
}
@media only screen and (max-width: 600px) {
 .ban1 {display: none;}
 .ban2 {display: block;}
}*/

</style>

            
        <div id="rec158880232" class="r t-rec t-rec_pt_75 t-rec_pb_0 night-theme-background active-color" style="padding-top:75px;padding-bottom:0px;background-color:#efefef; " data-record-type="491" data-bg-color="#efefef">
            <!-- t491 -->
            <div class="t491">
                <div class="t-section__container t-container">
                    <div class="t-col t-col_12">
                        <div class="t-section__topwrapper t-align_center">
                            <div class="t-section__title t-title t-title_xs text" field="btitle">ЧОМУ ОБИРАЮТЬ НАС</div>
                        </div>
                    </div>
                </div>
                <div class="t-container">
                    <div class="t491__col t-col t-col_4 t-item">
                        <div class="t491__content">
                            <div class="t491__wrapper">
                                <div class="img-svg-area">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 100.353 100.353" style="enable-background:new 0 0 100.353 100.353;" xml:space="preserve">
<g>
    <path d="M89.958,57.494c-1.411-1.411-3.287-2.188-5.283-2.188c-0.014,0-0.028,0-0.042,0.001c-0.07-0.003-6.328,0.087-9.306-6.909
        c-0.851-2-1.123-4.251-1.208-5.299c1.812-2.03,2.801-4.618,2.801-7.359c0-5.661-4.271-10.335-9.76-10.989V13.749
        c0-0.829-0.672-1.5-1.5-1.5H8.903c-0.829,0-1.5,0.671-1.5,1.5v73.349c0,0.828,0.671,1.5,1.5,1.5H65.66c0.828,0,1.5-0.672,1.5-1.5
        V76.122h20.984c0.828,0,1.5-0.672,1.5-1.5v-4.521h1c0.828,0,1.5-0.672,1.5-1.5v-5.825C92.146,60.781,91.369,58.906,89.958,57.494z
         M73.92,35.74c0,2.168-0.85,4.205-2.393,5.734c-0.293,0.291-0.454,0.688-0.444,1.101c0.004,0.151,0.104,3.752,1.484,6.997
        c3.701,8.699,11.539,8.732,12.121,8.733c1.189,0.004,2.308,0.469,3.148,1.31c0.844,0.844,1.309,1.966,1.308,3.159v4.326h-0.673
        c-0.105-0.023-0.214-0.038-0.327-0.038s-0.221,0.015-0.327,0.038H42.541v-4.326c0-2.45,1.982-4.447,4.427-4.47
        c0.882,0.049,8.148,0.153,11.984-8.496c1.315-2.963,1.588-7.052,1.599-7.225c0.027-0.428-0.131-0.848-0.434-1.152
        c-1.515-1.523-2.349-3.545-2.349-5.692c0-4.453,3.622-8.075,8.074-8.075C70.297,27.665,73.92,31.287,73.92,35.74z M64.16,85.598
        H10.403V15.249H64.16v9.558c-5.309,0.815-9.392,5.4-9.392,10.933c0,2.705,0.965,5.265,2.732,7.283
        c-0.121,1.164-0.464,3.707-1.291,5.569c-3.113,7.02-8.85,6.732-9.083,6.717c-0.039-0.003-0.079-0.005-0.118-0.005
        c-4.118,0-7.469,3.351-7.469,7.47v5.826c0,0.828,0.671,1.5,1.5,1.5h1.182l0.037,4.533c0.007,0.824,0.676,1.488,1.5,1.488h20.4
        V85.598z M86.645,73.122H66.028c-0.118-0.03-0.24-0.051-0.368-0.051s-0.249,0.021-0.368,0.051H45.248l-0.025-3.021h41.422V73.122z"
    />
    <path d="M35.855,27.793H16.782c-0.829,0-1.5,0.671-1.5,1.5s0.671,1.5,1.5,1.5h19.073c0.829,0,1.5-0.671,1.5-1.5
        S36.684,27.793,35.855,27.793z"/>
    <path d="M35.855,35.477H16.782c-0.829,0-1.5,0.671-1.5,1.5s0.671,1.5,1.5,1.5h19.073c0.829,0,1.5-0.671,1.5-1.5
        S36.684,35.477,35.855,35.477z"/>
    <path d="M35.855,43.435H16.782c-0.829,0-1.5,0.671-1.5,1.5s0.671,1.5,1.5,1.5h19.073c0.829,0,1.5-0.671,1.5-1.5
        S36.684,43.435,35.855,43.435z"/>
</g>
</svg>
                                </div>
                                <div class="t491__title t-name t-name_sm text" style="" field="li_title__1476976310929">ТІЛЬКИ СЕРТИФІКОВАНА ПРОДУКЦІЯ</div>
                            </div>
                            <div class="t491__descr t-descr t-descr_xs text" style="" field="li_descr__1476976310929">Ми працюємо безпосередньо з найбільшим постачальником ікри в Україні з 2015 року. Вони, а тепер і ми, заслужили свою довіру клієнтів найвищими стандартами і високою якістю продукції.</div>
                        </div>
                    </div>
                    <div class="t491__col t-col t-col_4 t-item">
                        <div class="t491__content">
                            <div class="t491__wrapper">
                                <div class="img-svg-area">
                                    <svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                        <path d="M66.5,24.13l3-13.71a1.5,1.5,0,0,0-2.26-1.6S64.13,10.71,58,10.71c-2.78,0-4.47-1.25-6.42-2.7-2.21-1.65-4.72-3.51-9-3.51-8.16,0-10.86,4.67-11,4.87a1.5,1.5,0,0,0-.15,1.05l3,13.71C30.41,29.28,3,64.94,16,81.06,26,93.5,41.19,93.49,50.2,93.5h.92c9.08,0,24-.14,33.9-12.44C98,64.94,70.59,29.28,66.5,24.13Zm16.19,55c-9,11.19-23,11.32-31.58,11.32H50.2c-8.51,0-22.76,0-31.88-11.32C12.07,71.42,17.42,57.37,23,47a154.6,154.6,0,0,1,14.26-21.5,1.5,1.5,0,0,0,.3-1.27l-3-13.75c.76-.88,3.06-2.93,8-2.93,3.28,0,5.19,1.42,7.21,2.92s4.43,3.29,8.21,3.29a26.65,26.65,0,0,0,8-1.12l-2.56,11.6a1.5,1.5,0,0,0,.3,1.27A154.42,154.42,0,0,1,78,46.92C83.57,57.35,88.94,71.41,82.69,79.18Z"/><path d="M58.5,53.5a1.5,1.5,0,0,0,3,0c0-4.53-3.92-8.27-9-8.9V42.5a1.5,1.5,0,0,0-3,0v2.1c-5.08.63-9,4.37-9,8.9s3.92,8.26,9,8.89v12c-3.42-.56-6-3-6-5.88a1.5,1.5,0,0,0-3,0c0,4.53,3.92,8.28,9,8.9v2.1a1.5,1.5,0,0,0,3,0V77.4c5.08-.63,9-4.38,9-8.9s-3.92-8.27-9-8.89v-12C55.92,48.18,58.5,50.6,58.5,53.5Zm-15,0c0-2.9,2.58-5.32,6-5.88V59.38C46.08,58.82,43.5,56.4,43.5,53.5Zm15,15c0,2.9-2.58,5.33-6,5.88V62.62C55.92,63.18,58.5,65.6,58.5,68.49Z"/><path d="M41.58,26.44A33.42,33.42,0,0,0,50.5,27.5a33.42,33.42,0,0,0,8.92-1.06,1.5,1.5,0,1,0-.84-2.88,30.84,30.84,0,0,1-8.08.94,30.84,30.84,0,0,1-8.08-.94,1.5,1.5,0,0,0-.84,2.88Z"/>
                                    </svg>
                                </div>
                                <div class="t491__title t-name t-name_sm text" style="" field="li_title__1476976315081">ОПЛАТА ПІСЛЯ ПЕРЕВІРКИ ЯКОСТІ
                                    <br>
                                </div>
                            </div>
                            <div class="t491__descr t-descr t-descr_xs text" style="" field="li_descr__1476976315081">Ми працюємо без будь-якої передоплати. Ви оплачуєте товар тільки після того, як візьмете його в руки і повністю переконаєтеся в його якості. Перевірити якість ви можете отримати товар кур'єром або на відділенні Нової Пошти.</div>
                        </div>
                    </div>
                    <div class="t491__col t-col t-col_4 t-item">
                        <div class="t491__content">
                            <div class="t491__wrapper">
                                <div class="img-svg-area">
                                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 101 101"><title>log_Artboard 2 copy 8</title><path d="M93.5,53H86V40.5A1.5,1.5,0,0,0,84.5,39H61V26.5A1.5,1.5,0,0,0,59.5,25H8.5A1.5,1.5,0,0,0,7,26.5v47A1.5,1.5,0,0,0,8.5,75H19.92a7.65,7.65,0,0,0,15.21,0H68.68a7.66,7.66,0,0,0,15.23,0H93.5A1.5,1.5,0,0,0,95,73.5v-19A1.5,1.5,0,0,0,93.5,53Zm-66,25.84a4.66,4.66,0,1,1,4.64-4.65A4.66,4.66,0,0,1,27.54,78.84Zm0-12.31A7.67,7.67,0,0,0,20.2,72H10V28H58V72H34.86A7.66,7.66,0,0,0,27.54,66.53ZM76.29,78.84a4.66,4.66,0,1,1,4.66-4.65A4.66,4.66,0,0,1,76.29,78.84ZM92,72H83.63A7.65,7.65,0,0,0,69,72H61V42H83V54.5A1.5,1.5,0,0,0,84.5,56H92Z"/><path d="M16.5,43H47l-5,5a1.5,1.5,0,1,0,2.12,2.12l6.73-6.73a1.5,1.5,0,0,0,0-2.12l-6.73-6.73A1.5,1.5,0,0,0,42,36.7l3.3,3.3H16.5a1.5,1.5,0,0,0,0,3Z"/><path d="M49,57.5A1.5,1.5,0,0,0,47.5,56H17.1L22,51.11A1.5,1.5,0,1,0,19.86,49l-6.73,6.73a1.5,1.5,0,0,0,0,2.12l6.73,6.73A1.5,1.5,0,0,0,22,62.45L18.54,59h29A1.5,1.5,0,0,0,49,57.5Z"/></svg>
                                </div>
                                <div class="t491__title t-name t-name_sm text" style="" field="li_title__1476976334035">ШВИДКА ДОСТАВКА НОВОЮ ПОШТОЮ</div>
                            </div>
                            <div class="t491__descr t-descr t-descr_xs text" style="" field="li_descr__1476976334035">Ми можемо гарантувати найшвидшу доставку по всій Україні завдяки тому, що наша компанія є офіційним партнером Нової Пошти. Наші замовлення обробляються і доставляються в найкоротші терміни.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="rec159036456" class="r t-rec" style=" " data-animationappear="off" data-record-type="702">
            <!-- T702 -->
             <!--<div class="t702">
                <div class="t-popup" data-tooltip-hook="#popup:myform3">
                    <div class="t-popup__close">
                        <div class="t-popup__close-wrapper">
                            <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                    <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="t-popup__container t-width t-width_6"> <img class="t702__img t-img" src="img/__27.png" data-original="img/__27.png" imgfield="img">
                        <div class="t702__wrapper">
                            <div class="t702__text-wrapper t-align_center">
                                <div class="t702__title t-title t-title_xxs" style="">Купить икру Кеты
                                    <br>
                                </div>
                            </div>
                            <form id="form4" action='order.php' method='POST' class="t-form t-form_inputs-total_2 form-area">
                                <input type="text" name="Name" class="t-input name-mask" required placeholder="Имя - кириллица" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                <input type="text" name="lastName" class="t-input last-name-mask" required placeholder="Фамилия - кириллица" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                <input type="tel" name="Phone" class="t-input phone-mask" required placeholder="Ваш номер телефона - заполняется цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                <input type="text" name="City" class="t-input city-mask" required placeholder="Город доставки - кириллица" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                <input type="text" name="Department" class="t-input department-mask" required placeholder="Номер отделение НП - заполняется цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                <select name="Quantity" class="quantity" style="height: 60px;background-color: transparent;border-radius: 5px;width: 91%;border: 1px solid #c9c9c9;padding: 0 20px;font-size: 16px;color: #000;">
                                    <option value="0.5 = 590." selected>0.5 = 590 грн.</option>
                                    <option value="2 по 0.5 = 1180 грн. + 0.5 в подарок!">2 по 0.5 = 1180 грн. + 0.5 в подарок!</option>
                                    <option value="3 по 0.5 = 1770 грн. + 0.5 в подарок!">3 по 0.5 = 1770 грн. + 0.5 в подарок!</option>
                                    <option value="4 по 0.5 = 2360 грн. + 2 по 0.5 в подарок!">4 по 0.5 = 2360 грн. + 2 по 0.5 в подарок!</option>
                                </select>
                                <input type="hidden" name="comm" value="Купить ИКРУ Кеты">
                                <input type="hidden" name="ip" value="31.128.76.48" />
                                <div class="t-form__submit">
                                    <button type="submit" class="t-submit" style="color:#ffffff;background-color:#ff1500;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; font-size: 13px !important; display: flex; justify-content: center; align-items: center;">
                                        КУПИТЬ ИКРУ
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function() {
                    setTimeout(function() {
                        t702_initPopup('159036456');
                    }, 500); /* hack for Android */
                    var ua = navigator.userAgent.toLowerCase();
                    var isAndroid = ua.indexOf("android") > -1;
                    if (isAndroid) {
                        $('.t-body').addClass('t-body_scrollable-hack-for-android');
                        $('head').append("<style>@media screen and (max-width: 560px) {\n.t-body_scrollable-hack-for-android {\noverflow: visible !important;\n}\n}\n</style>");
                        console.log('Android css hack was inited');
                    }
                });
            </script>
            <style>
                #rec159036456 .t-btn[data-btneffects-first],
                #rec159036456 .t-btn[data-btneffects-second],
                #rec159036456 .t-submit[data-btneffects-first],
                #rec159036456 .t-submit[data-btneffects-second] {
                    position: relative;
                    overflow: hidden;
                    -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
                }
            </style>
            <script type="text/javascript">
                $(document).ready(function() {});
            </script>
        </div>
        <div id="rec159036468" class="r t-rec" style=" " data-animationappear="off" data-record-type="702">
            <!-- T702 -->
             <!--<div class="t702">
                <div class="t-popup" data-tooltip-hook="#popup:myform4">
                    <div class="t-popup__close">
                        <div class="t-popup__close-wrapper">
                            <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                    <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="t-popup__container t-width t-width_6"> <img class="t702__img t-img" src="img/__27.png" data-original="img/__27.png" imgfield="img">
                        <div class="t702__wrapper">
                            <div class="t702__text-wrapper t-align_center">
                                <div class="t702__title t-title t-title_xxs" style="">Купить ИКРУ Горбуши
                                    <br>
                                </div>
                            </div>
                            <form id="form5" action='order.php' method='POST' class="t-form t-form_inputs-total_2 form-area">
                                <input type="text" name="Name" class="t-input name-mask" required placeholder="Имя - кириллица" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                <input type="text" name="lastName" class="t-input last-name-mask" required placeholder="Фамилия - кириллица" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                <input type="tel" name="Phone" class="t-input phone-mask" required placeholder="Ваш номер телефона - заполняется цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                <input type="text" name="City" class="t-input city-mask" required placeholder="Город доставки - кириллица" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                <input type="text" name="Department" class="t-input department-mask" required placeholder="Номер отделение НП - заполняется цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                <select name="Quantity" class="quantity" style="height: 60px;background-color: transparent;border-radius: 5px;width: 91%;border: 1px solid #c9c9c9;padding: 0 20px;font-size: 16px;color: #000;">
                                        <option value="0.5 = 550 грн" selected>0.5 = 550 грн</option>
                                        <option value="по 0.5 = 1100 грн. + 0.5 в подарок!">2 по 0.5 = 1100 грн. + 0.5 в подарок!</option>
                                        <option value="по 0.5 = 1650 грн. + 0.5 в подарок!">3 по 0.5 = 1650 грн. + 0.5 в подарок!</option>
                                        <option value="по 0.5 = 2200 грн. + 2 по 0.5 в подарок!">4 по 0.5 = 2200 грн. + 2 по 0.5 в подарок!</option>
                                    </select>
                                <input type="hidden" name="comm" value="Купить ИКРУ Горбуши">
                                <input type="hidden" name="ip" value="31.128.76.48" />
                                <div class="t-form__submit">
                                        <button type="submit" class="t-submit" style="color:#ffffff;background-color:#ff1500;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; font-size: 13px !important; display: flex; justify-content: center; align-items: center;">
                                            КУПИТЬ ИКРУ
                                        </button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function() {
                    setTimeout(function() {
                        t702_initPopup('159036468');
                    }, 500); /* hack for Android */
                    var ua = navigator.userAgent.toLowerCase();
                    var isAndroid = ua.indexOf("android") > -1;
                    if (isAndroid) {
                        $('.t-body').addClass('t-body_scrollable-hack-for-android');
                        $('head').append("<style>@media screen and (max-width: 560px) {\n.t-body_scrollable-hack-for-android {\noverflow: visible !important;\n}\n}\n</style>");
                        console.log('Android css hack was inited');
                    }
                });
            </script>
            <style>
                #rec159036468 .t-btn[data-btneffects-first],
                #rec159036468 .t-btn[data-btneffects-second],
                #rec159036468 .t-submit[data-btneffects-first],
                #rec159036468 .t-submit[data-btneffects-second] {
                    position: relative;
                    overflow: hidden;
                    -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
                }
            </style>
            <script type="text/javascript">
                $(document).ready(function() {});
            </script>
        </div>
        <div id="rec159036473" class="r t-rec" style=" " data-animationappear="off" data-record-type="702">
            <!-- T702 -->
             <!--<div class="t702">
                <div class="t-popup" data-tooltip-hook="#popup:myform5">
                    <div class="t-popup__close">
                        <div class="t-popup__close-wrapper">
                            <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                    <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="t-popup__container t-width t-width_6"> <img class="t702__img t-img" src="img/__27.png" data-original="img/__27.png" imgfield="img">
                        <div class="t702__wrapper">
                            <div class="t702__text-wrapper t-align_center">
                                <div class="t702__title t-title t-title_xxs" style="">Купить ИКРУ Веслоноса
                                    <br>
                                </div>
                            </div>
                            <form id="form6" action='order.php' method='POST' class="t-form t-form_inputs-total_2 form-area">
                                <input type="text" name="Name" class="t-input name-mask" required placeholder="Имя - кириллица" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                <input type="text" name="lastName" class="t-input last-name-mask" required placeholder="Фамилия - кириллица" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                <input type="tel" name="Phone" class="t-input phone-mask" required placeholder="Ваш номер телефона - заполняется цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                <input type="text" name="City" class="t-input city-mask" required placeholder="Город доставки - кириллица" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                <input type="text" name="Department" class="t-input department-mask" required placeholder="Номер отделение НП - заполняется цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                <select name="Quantity" class="quantity" style="height: 60px;background-color: transparent;border-radius: 5px;width: 91%;border: 1px solid #c9c9c9;padding: 0 20px;font-size: 16px;color: #000;">
                                    <option value="0.5 = 790 грн" selected>0.5 = 790 грн</option>
                                    
                                    <option value="по 0.5 = 1580 грн. + 0.5 в подарок!">2 по 0.5 = 1580 грн. + 0.5 в подарок!</option>
                                    <option value="по 0.5 = 2370 грн. + 0.5 в подарок!">3 по 0.5 = 2370 грн. + 0.5 в подарок!</option>
                                    <option value="по 0.5 = 3160 грн. + 2 по 0.5 в подарок!">4 по 0.5 = 3160 грн. + 2 по 0.5 в подарок!</option>
                                </select>
                                <input type="hidden" name="comm" value="Купить ИКРУ Веслоноса">
                                <input type="hidden" name="ip" value="31.128.76.48" />
                                <div class="t-form__submit">
                                    <button type="submit" class="t-submit" style="color:#ffffff;background-color:#ff1500;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; font-size: 13px !important; display: flex; justify-content: center; align-items: center;">
                                        КУПИТЬ ИКРУ
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function() {
                    setTimeout(function() {
                        t702_initPopup('159036473');
                    }, 500); /* hack for Android */
                    var ua = navigator.userAgent.toLowerCase();
                    var isAndroid = ua.indexOf("android") > -1;
                    if (isAndroid) {
                        $('.t-body').addClass('t-body_scrollable-hack-for-android');
                        $('head').append("<style>@media screen and (max-width: 560px) {\n.t-body_scrollable-hack-for-android {\noverflow: visible !important;\n}\n}\n</style>");
                        console.log('Android css hack was inited');
                    }
                });
            </script>
            <style>
                #rec159036473 .t-btn[data-btneffects-first],
                #rec159036473 .t-btn[data-btneffects-second],
                #rec159036473 .t-submit[data-btneffects-first],
                #rec159036473 .t-submit[data-btneffects-second] {
                    position: relative;
                    overflow: hidden;
                    -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
                }
            </style>
            <script type="text/javascript">
                $(document).ready(function() {});
            </script>
        </div>
        <div id="rec159036475" class="r t-rec" style=" " data-animationappear="off" data-record-type="702">
            <!-- T702 -->
             <!--<div class="t702">
                <div class="t-popup" data-tooltip-hook="#popup:myform6">
                    <div class="t-popup__close">
                        <div class="t-popup__close-wrapper">
                            <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                    <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="t-popup__container t-width t-width_6"> <img class="t702__img t-img" src="img/__27.png" data-original="img/__27.png" imgfield="img">
                        <div class="t702__wrapper">
                            <div class="t702__text-wrapper t-align_center">
                                <div class="t702__title t-title t-title_xxs" style="">Купить ИКРУ Осетра
                                    <br>
                                </div>
                            </div>
                            <form id="form7" action='order.php' method='POST' class="t-form t-form_inputs-total_2 form-area">
                                <input type="text" name="Name" class="t-input name-mask" required placeholder="Имя - кириллица" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                <input type="text" name="lastName" class="t-input last-name-mask" required placeholder="Фамилия - кириллица" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                <input type="tel" name="Phone" class="t-input phone-mask" required placeholder="Ваш номер телефона - заполняется цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                <input type="text" name="City" class="t-input city-mask" required placeholder="Город доставки - кириллица" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                <input type="text" name="Department" class="t-input department-mask" required placeholder="Номер отделение НП - заполняется цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                <select name="Quantity" class="quantity" style="height: 60px;background-color: transparent;border-radius: 5px;width: 91%;border: 1px solid #c9c9c9;padding: 0 20px;font-size: 16px;color: #000;">
                                    <option value="0.100 = 990." selected>0.100 = 990 грн.</option>
                                    <option value="2 по 0.100 = 1980 грн. + 0.100 в подарок!">2 по 0.100 = 1980 грн. + 0.100 в подарок!</option>
                                    <option value="3 по 0.100 = 2970 грн. + 0.100 в подарок!">3 по 0.100 = 2970 грн. + 0.100 в подарок!</option>
                                    <option value="4 по 0.100 = 3960 грн. + 2 по 0.100 в подарок!">4 по 0.100 = 3960 грн. + 2 по 0.100 в подарок!</option>
                                </select>
                                <input type="hidden" name="comm" value="Купить ИКРУ осетра">
                                <input type="hidden" name="ip" value="31.128.76.48" />
                                <div class="t-form__submit">
                                    <button type="submit" class="t-submit" style="color:#ffffff;background-color:#ff1500;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; font-size: 13px !important; display: flex; justify-content: center; align-items: center;">
                                        КУПИТЬ ИКРУ
                                    </button>
                                </div>
                            </form>
                            <style>
                                #rec159036475 input::-webkit-input-placeholder {
                                    color: #000000;
                                    opacity: 0.5;
                                }
                                
                                #rec159036475 input::-moz-placeholder {
                                    color: #000000;
                                    opacity: 0.5;
                                }
                                
                                #rec159036475 input:-moz-placeholder {
                                    color: #000000;
                                    opacity: 0.5;
                                }
                                
                                #rec159036475 input:-ms-input-placeholder {
                                    color: #000000;
                                    opacity: 0.5;
                                }
                                
                                #rec159036475 textarea::-webkit-input-placeholder {
                                    color: #000000;
                                    opacity: 0.5;
                                }
                                
                                #rec159036475 textarea::-moz-placeholder {
                                    color: #000000;
                                    opacity: 0.5;
                                }
                                
                                #rec159036475 textarea:-moz-placeholder {
                                    color: #000000;
                                    opacity: 0.5;
                                }
                                
                                #rec159036475 textarea:-ms-input-placeholder {
                                    color: #000000;
                                    opacity: 0.5;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function() {
                    setTimeout(function() {
                        t702_initPopup('159036475');
                    }, 500); /* hack for Android */
                    var ua = navigator.userAgent.toLowerCase();
                    var isAndroid = ua.indexOf("android") > -1;
                    if (isAndroid) {
                        $('.t-body').addClass('t-body_scrollable-hack-for-android');
                        $('head').append("<style>@media screen and (max-width: 560px) {\n.t-body_scrollable-hack-for-android {\noverflow: visible !important;\n}\n}\n</style>");
                        console.log('Android css hack was inited');
                    }
                });
            </script>
            <style>
                #rec159036475 .t-btn[data-btneffects-first],
                #rec159036475 .t-btn[data-btneffects-second],
                #rec159036475 .t-submit[data-btneffects-first],
                #rec159036475 .t-submit[data-btneffects-second] {
                    position: relative;
                    overflow: hidden;
                    -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
                }
            </style>
            <script type="text/javascript">
                $(document).ready(function() {});
            </script>
        </div>

        <!-- Секция товара НАЧАЛО -->
        <style>
            #offer .t-slds__bullet_active .t-slds__bullet_body {
                background-color: #222 !important;
            }
            #offer .t-slds__bullet:hover .t-slds__bullet_body {
                background-color: #222 !important;
            }

            section.offer{
                padding-top: 75px;
                padding-bottom: 135px;
                background-color: #efefef;
            }
            section.offer .offer-wrapper{
                max-width: 1200px;
                margin: auto;
                display: flex;
                justify-content: space-between;
                flex-wrap: wrap;
            }
            section.offer .offer-wrapper .item{
                max-width: 360px;
                margin: 0 20px 40px;
                width: 100%;
                display: flex;
                flex-direction: column;
                background-color: #fff;
                 background-color: #efefef
            }
            section.offer .offer-wrapper .item .img-area{
                position: relative;
                width: 100%;
                padding-bottom: 111%;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                -webkit-transition: opacity 0.1s linear;
                transition: opacity 0.1s linear;
            }
            section.offer .offer-wrapper .item .img-area .discount{
                position: absolute;
                right: 10px;
                top: 10px;
                z-index: 5;
                display: flex;
                justify-content: center;
                align-items: center;
                color: #ffffff;
                background-color: #ff4a4a;
                box-sizing: border-box;
                padding: 0 10px;
                font-weight: 400;
                font-size: 12px;
                font-family: 'Roboto',Arial,sans-serif;
                width: 50px;
                height: 50px;
                text-align: center;
                vertical-align: middle;
                border-radius: 50px;
            }
            section.offer .offer-wrapper .item .text-area{
                padding: 27px 30px 15px;
                box-sizing: border-box;
                display: flex;
                flex-direction: column;
                /*height: 100%;*/
            }
            section.offer .offer-wrapper .item .text-area .item-title{
                font-weight:700;
                font-size: 20px;
                line-height: 1.35;
                color: #000;
            }
            section.offer .offer-wrapper .item .text-area .text-wrapper{
                /*display: flex;*/
                /*flex-direction: column;*/
                margin-top: 8px;
                font-size: 14px;
                line-height: 1.55;
                font-family: 'Roboto',Arial,sans-serif;
                font-weight: 300;
                color: #000;
                padding-left: 0 !important;
                list-style: none !important;
            }
            section.offer .offer-wrapper .item .text-area .text-wrapper .strong{
                font-weight: 700;
            }
            section.offer .offer-wrapper .item .text-area .text-wrapper .check-img{
                font-weight: 700;
                color: rgb(255, 44, 0);
            }
            section.offer .offer-wrapper .item .text-area .item-price{
                color: rgb(255, 68, 0);
                font-size: 1.5em;
                font-weight: 900;
                margin: auto 0;
            }
            section.offer .offer-wrapper .item .item-button{
                color:#ffffff !important;
                background-color:#ff1500;
                border-radius:5px;
                -moz-border-radius:5px;
                -webkit-border-radius:5px;
                height: 45px;
                min-height: 45px;
                font-size: 14px;
                padding-left: 30px;
                padding-right: 30px;
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
                vertical-align: middle;
                font-weight: 700;
                background-image: none;
                cursor: pointer;
                -webkit-appearance: none;
                user-select: none;
                margin: auto auto 35px;
                width: 85%;
                box-sizing: border-box;

            }
            section.offer .offer-wrapper .item .timer-wrapper{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding: 20px 0;
                width: 90%;
                margin: auto;
                border: 1px solid black;
                margin-bottom: 20px;
            }
            section.offer .offer-wrapper .item .timer-wrapper .timer-title-wrapper {
                display: flex;
                flex-direction: column;
            }
            section.offer .offer-wrapper .item .timer-wrapper .timer-title-wrapper .timer-title{
                color:#000000;
                margin-bottom: 25px;
                text-align: center;
            }
            section.offer .offer-wrapper .item .timer-wrapper .timer-title-wrapper .timer-title span{
                color: rgb(255, 68, 0);
                margin-right: 5px;
            }
            section.offer .offer-wrapper .item .timer-wrapper .timer-title-wrapper .text{
                font-size:18px;
                color:#000000 !important;
                text-align: center;
            }
            section.offer .offer-wrapper .item .t415__number {
                color: #000;
            }
            section.offer .offer-wrapper .item .t415__text{
                color: #000;
            }
            section.offer .offer-wrapper .item .timer{
                display: flex;
                justify-content: space-around;
                width: 100%;
                color: #000000 !important;
                font-size: 30px;
                margin: 2px 0 20px;
            }
            .text-title-timer{
                text-align: center;
                margin-top: 10px;
            }
            section.offer .offer-wrapper .item .timer-button{
                color:#ffffff !important;
                background-color:#ff1500;
                -moz-border-radius:30px;
                -webkit-border-radius:30px;
                height: 56px;
                cursor: pointer;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-wrap: wrap;
                width: 94%;
                font-family: 'Roboto',Arial,sans-serif;
                font-weight: 700;
                text-align: center;
                border-radius:0 !important;
            }
            section.offer .offer-wrapper .item .item-price{
                display: flex;
                flex-direction: column;
                margin-bottom: 15px;
            }
            section.offer .offer-wrapper .item .item-price .ex-price{
                color:#ff1500 !important;
                font-size: 30px;
                font-family: 'Roboto',Arial,sans-serif;
                font-weight: 700;
                text-align: center;
                text-decoration: line-through;
            }
            section.offer .offer-wrapper .item .item-price .current-price{
                color:#000000 !important;
                font-size: 50px;
                font-family: 'Roboto',Arial,sans-serif;
                font-weight: 700;
                text-align: center;
            }
            section.offer .timer-popup.checked{
                display: block !important;
            }
            section.offer .order-popup.checked{
                display: block !important;
            }

            @media (max-width: 1200px){
                section.offer .offer-wrapper {
                    max-width: 960px;
                    padding: 0;
                }
                section.offer .offer-wrapper .item{
                    max-width: 300px;
                    margin: 0 10px 20px;
                }
                section.offer .offer-wrapper .item .text-area .item-title{
                    font-size: 18px;
                }
                section.offer .offer-wrapper .item .text-area .text-wrapper{
                    font-size: 12px;
                }
            }
            @media (max-width: 960px){
                section.offer .offer-wrapper {
                    max-width: 640px;
                }
                section.offer .offer-wrapper .item{
                    width: 48%;
                    max-width: unset;
                    margin: 0 0 4%;
                }

            }
            @media (max-width: 640px){
                section.offer .offer-wrapper {
                    width: 100%;
                    max-width: unset;
                    padding: 0 10px;
                    box-sizing: border-box;
                }
                section.offer .offer-wrapper .item{
                    width: 49%;
                    max-width: unset;
                    margin: 0 0 2%;
                }
            }
            @media (max-width: 480px){
                section.offer .offer-wrapper .item {
                    width: 100%;
                    display: block;
                    margin: 0 0 30px;
                }
            }

        </style>
         <section id="offer" class="offer night-theme-background active-color">
            <div class="offer-wrapper">
                <div class="item js-product">
                    <div class="img-area" style="background-image:url('img/K0.5.png');">
                        <div class="discount">- 50%</div>
                    </div>
                    <div class="text-area">
                        <div class="item-title"> ІКРА КЕТИ<br></div>
                        <ul class="text-wrapper">
                            <li class="item-check-text">
                                <span class="check-img">✔</span>
                                <span class="strong">Склад:</span>
                                Ікра кети, сіль (5% малосольная), рослинна олія;
                            </li>
                            <li class="item-check-text">
                                <span class="check-img">✔</span>
                                <span class="strong">Нерест 2023 року</span>
                            </li>
                            <li class="item-check-text">
                                <span class="check-img">✔</span>
                                <span class="strong">Тара:</span>
                               скляна закатана баночка;
                            </li>
                            <li class="item-check-text">
                                <span class="check-img">✔</span>
                                <span class="strong">Розмір ікринокк:</span>
                                5 мм;
                            </li>
                            <li class="item-check-text">
                                <span class="check-img">✔</span>
                                <span class="strong">Колір ікри:</span>
                                темно-оранжевий;
                            </li>
                            <li class="item-check-text">
                                <span class="check-img">✔</span>
                                <span class="strong">Консистенція:</span>
                              Суха (рідина 5%);
                            </li>
                            <li class="item-check-text">
                                <span class="check-img">✔</span>
                                <span class="strong">Термін придатності:</span>
                                3 міс. (в закритому вигляді);
                            </li>
                            <li class="item-check-text">2 тижні (у відкритому);</li>
                            <li class="item-check-text" style="font-size: 16px; font-weight: 600;">
                               Вага: 500 грам
                            </li>
                           
                        </ul>
                    </div>
                    <div class="item-price">
                        <div class="ex-price">1160 грн.</div>
                        <div class="current-price">580 грн.</div>
                    </div>
                    <div class="item-button">КУПИТИ В ОДИН КЛІК</div>
                    <!--Start TIMER-->
                    <div class="timer-wrapper">
                        <div class="timer-title-wrapper">
                            <h3 class="timer-title">
                                <span>АКЦІЯ 1+1=3</span>
                            </h3>
                            <p class="text" >При покупці 2-х баночок 500г ікри, баночка 500г в подарунок!</p>
                        </div>
                        <div class="text-title-timer">До кінця акції залишилося:</div>
                        <div class="timer">
                            <div class="timer-item" style="display: none">
                                <span class="t415__days t-title t-title_lg t415__number"></span>
                                <div class="t415__text t-descr t-descr_xxs" >Днів</div>
                            </div>
                            <div class="timer-item">
                                <span class="t415__hours t-title t415__number" ></span>
                                <div class="t415__text t-descr t-descr_xxs">Годин</div>
                            </div>
                            <div class="timer-item">
                                <span class="t415__minutes t-title t415__number"></span>
                                <div class="t415__text t-descr t-descr_xxs">Хвилин</div>
                            </div>
                            <div class="timer-item">
                                <span class="t415__seconds t-title t415__number"></span>
                                <div class="t415__text t-descr t-descr_xxs">Секунд</div>
                            </div>
                        </div>
                        <div class="timer-button">КУПИТИ КЕТУ ПО АКЦІЇ</div>
                    </div>
                    <!--END TIMER-->


                    <!--Start POPUPS-->
                    <div class="t-popup t-popup_show order-popup">
                        <div class="t-popup__close">
                            <div class="t-popup__close-wrapper">
                                <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                        <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                        <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="t-popup__container t-width t-width_6 t-popup__container-static t-popup__container-animated"> <img class="t702__img t-img loaded" src="img/__27.png" data-original="img/__27.png" imgfield="img">
                            <div class="t702__wrapper">
                                <div class="t702__text-wrapper t-align_center">
                                    <div class="t702__title t-title t-title_xxs" style="">КУПИТИ ІКРУ КЕТИ
                                        <br>
                                    </div>
                                </div>
                                <form id="form4" action="order.php" method="POST" class="t-form t-form_inputs-total_2 form-area">
                                    <input type="text" name="Name" class="t-input name-mask" required="" placeholder="Ім'я " style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="tel" name="Phone" class="t-input phone-mask" required="" placeholder="Ваш номер телефона - заповнюється цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <select name="Quantity" class="quantity" style="height: 60px;background-color: transparent;border-radius: 5px;width: 91%;border: 1px solid #c9c9c9;padding: 0 20px;font-size: 16px;color: #000;">
                                       <option value= " Кета 0,5 = 580."selected= "" >Кета 0,5 = 580 грн.</option>
                                         <option value= " Кета 2 по 0,5 = 1160 грн."selected= "" >Кета 2 по 0,5 = 1160 грн. + 0.5 в подарунок!</option>
                                        <option value= " Кета 3 по 0,5 = 1740 грн. + 0.5 в подарунок!">Кета 3 по 0,5 = 1740 грн. + 0.5 в подарунок!</option>
                                        <option value= " Кета 4 по 0,5 = 2320 грн. + 0.5 в подарунок!">Кета 4 по 0,5 = 2320 грн. + 0.5 в подарунок!</option>
                                       
                                    </select>
                                    <input type="hidden" name="comm" value="Кета в один клік">
                                     <input type="hidden" name="ip" value="31.128.76.48" />
                                        <label>
                    <input type="checkbox" checked="checked" required="">
                    <span></span>
                    Я згоден з політикою конфіденційності та користувальницькою угодою
                </label>
                                    <div class="t-form__submit">
                                        <button type="submit" class="t-submit" style="color:#ffffff;background-color:#ff1500;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; font-size: 13px !important; display: flex; justify-content: center; align-items: center;">
                                            КУПИТИ ІКРУ
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="t-popup t-popup_show timer-popup">
                        <div class="t-popup__close">
                            <div class="t-popup__close-wrapper">
                                <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                        <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                        <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="t-popup__container t-width t-width_6 t-popup__container-static t-popup__container-animated"> <img class="t702__img t-img loaded" src="img/__27.png" data-original="img/__27.png" imgfield="img">
                            <div class="t702__wrapper">
                                <div class="t702__text-wrapper t-align_center">
                                    <div class="t702__title t-title t-title_xxs" style="">Акція "1+1=3"
                                        <br>
                                    </div>
                                </div>
                                <form id="form3" action="order.php" method="POST" class="t-form t-form_inputs-total_2 form-area">
                                    <input type="text" name="Name" class="t-input name-mask" required placeholder="Ім'я - кирилиця" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                <input type="text" name="lastName" class="t-input last-name-mask" required placeholder="Прізвище - кирилиця" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                <input type="tel" name="Phone" class="t-input phone-mask" required placeholder="Ваш номер телефона - заповнюється цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                <input type="text" name="City" class="t-input city-mask" required placeholder="Город доставки - кирилиця" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                <input type="text" name="Department" class="t-input department-mask" required placeholder="Номер відділення НП - заповнюється цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                <select name="Quantity" class="quantity" style="height: 60px;background-color: transparent;border-radius: 5px;width: 91%;border: 1px solid #c9c9c9;padding: 0 20px;font-size: 16px;color: #000">
                                   <option value= " Кета 0,5 = 580."selected= "" >Кета 0,5 = 580 грн.</option>
                                         <option value= " Кета 2 по 0,5 = 1160 грн."selected= "" >Кета 2 по 0,5 = 1160 грн. + 0.5 в подарунок!</option>
                                        <option value= " Кета 3 по 0,5 = 1740 грн. + 0.5 в подарунок!">Кета 3 по 0,5 = 1740 грн. + 0.5 в подарунок!</option>
                                        <option value= " Кета 4 по 0,5 = 2320 грн. + 0.5 в подарунок!">Кета 4 по 0,5 = 2320 грн. + 0.5 в подарунок!</option>
                                    <input type="hidden" name="comm" value="Акція Кета">
                                     <input type="hidden" name="ip" value="31.128.76.48" />
                                        <label>
                    <input type="checkbox" checked="checked" required="">
                    <span></span>
                    Я згоден з політикою конфіденційності та користувальницькою угодою
                </label>
                                    <div class="t-form__submit">
                                        <button type="submit" class="t-submit" style="color:#ffffff;background-color:#ff1500;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; font-size: 13px !important; display: flex; justify-content: center; align-items: center;">
                                            КУПИТИ ІКРУ
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--End POPUPS-->
 </div>
                <div class="item js-product">
                    <div class="img-area" style="background-image:url('img/444.png');">
                        <div class="discount">- 50%</div>
                    </div>
                    <div class="text-area">
                        <div class="item-title">ІКРА ЩУКИ<br></div>
                        <ul class="text-wrapper">
                            <li class="item-check-text">
                                <span class="check-img">✔</span>
                                <span class="strong">Склад:</span>
                                 Ікра Щуки, сіль (2% малосольна), олія;
                            </li>
                            <li class="item-check-text">
                                <span class="check-img">✔</span>
                                <span class="strong">Нерест 2023 року</span>
                            </li>
                            <li class="item-check-text">
                                <span class="check-img">✔</span>
                                <span class="strong">Тара:</span>
                                скляна закочена баночка;
                            </li>
                            <li class="item-check-text">
                                <span class="check-img">✔</span>
                                <span class="strong">Розмір ікринок:</span>
                                2.2 мм;
                            </li>
                            <li class="item-check-text">
                                <span class="check-img">✔</span>
                                <span class="strong">Колір литки:</span>
                                 Світло-жовтий;
                            </li>
                            <li class="item-check-text">
                                <span class="check-img">✔</span>
                                <span class="strong">Консистенція:</span>
                                 Суха (рідина 7%);
                            </li>
                            <li class="item-check-text">
                                <span class="check-img">✔</span>
                                <span class="strong">Термін придатності:</span>
                                 3 міс. (у закритому вигляді);
                            </li>
                            <li class="item-check-text">2 тижні (у відкритому);</li>
                             <li class="item-check-text" style="font-size: 16px; font-weight: 600;">
                                 Вага: 500 грам
                            </li>
                            
                        </ul>
                    </div>
                    <div class="item-price">
                        <div class="ex-price">1000 грн.</div>
                        <div class="current-price">500 грн.</div>
                    </div>
                    <div class="item-button">КУПИТИ В ОДИН КЛІК</div>
                    <!--Start TIMER-->
                    <div class="timer-wrapper">
                        <div class="timer-title-wrapper">
                            <h3 class="timer-title">
                                <span>АКЦІЯ 1+1=3</span>
                            </h3>
                            <p class="text" >При покупці 2-х баночок 500г ікри,баночка 500г у подарунок!</p>
                        </div>
                        <div class="text-title-timer">До кінця Акції залишилось:</div>
                        <div class="timer">
                            <div class="timer-item" style="display: none">
                                <span class="t415__days t-title t-title_lg t415__number"></span>
                                <div class="t415__text t-descr t-descr_xxs" >Днів</div>
                            </div>
                            <div class="timer-item">
                                <span class="t415__hours t-title t415__number" ></span>
                                <div class="t415__text t-descr t-descr_xxs">Годин</div>
                            </div>
                            <div class="timer-item">
                                <span class="t415__minutes t-title t415__number"></span>
                                <div class="t415__text t-descr t-descr_xxs">Хвилин</div>
                            </div>
                            <div class="timer-item">
                                <span class="t415__seconds t-title t415__number"></span>
                                <div class="t415__text t-descr t-descr_xxs">Секунд</div>
                            </div>
                        </div>
                        <div class="timer-button">КУПИТИ ЩУКИ ПО АКЦІЇ</div>
                    </div>
                    <!--END TIMER-->
                    <!--Start POPUPS-->
                    <div class="t-popup t-popup_show order-popup">
                        <div class="t-popup__close">
                            <div class="t-popup__close-wrapper">
                                <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                        <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                        <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="t-popup__container t-width t-width_6 t-popup__container-static t-popup__container-animated"> <img class="t702__img t-img loaded" src="img/__27.png" data-original="img/__27.png" imgfield="img">
                            <div class="t702__wrapper">
                                <div class="t702__text-wrapper t-align_center">
                                    <div class="t702__title t-title t-title_xxs" style="">КУПИТИ ІКРУ ЩУКИ
                                        <br>
                                    </div>
                                </div>
                                <form id="form5" action="order.php" method="POST" class="t-form t-forьm_inputs-total_2 form-area">
                                    <input type="text" name="Name" class="t-input name-mask" required="" placeholder="Ім'я " style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="tel" name="Phone" class="t-input phone-mask" required="" placeholder="Ваш номер телефона - заповнюється цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <select name="Quantity" class="quantity" style="height: 60px;background-color: transparent;border-radius: 5px;width: 91%;border: 1px solid #c9c9c9;padding: 0 20px;font-size: 16px;color: #000;">
                                      <option value="Щука 0.5 = 500 грн" selected="">Щука 0.5 = 500 грн</option>
                                           <option value="Щука по 0.5 = 1000 грн. + 0.5 у подарунок!">Щука 2 по 0.5 = 1000 грн. + 0.5 у подарунок!</option>
                                         <option value="Щука по 0.5 = 1500 грн. + 0.5 у подарунок!">Щука 3 по 0.5 = 1500 грн. + 0.5 у подарунок!</option>
                                         <option value="Щука по 0.5 = 2000 грн. + 2 по 0.5 у подарунок!">Щука 4 по 0.5 = 2000 грн. + 2 по 0.5 у подарунок!</option>
                                       
                                    </select>
                                    <input type="hidden" name="comm" value="Щука в один клик">
                                     <input type="hidden" name="ip" value="31.128.76.48" />
                                        <label>
                    <input type="checkbox" checked="checked" required="">
                    <span></span>
                    Я згоден з політикою конфіденційності та користувальницькою угодою
                </label>
                                    <div class="t-form__submit">
                                        <button type="submit" class="t-submit" style="color:#ffffff;background-color:#ff1500;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; font-size: 13px !important; display: flex; justify-content: center; align-items: center;">
                                            КУПИТИ ІКРУ
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="t-popup t-popup_show timer-popup">
                        <div class="t-popup__close">
                            <div class="t-popup__close-wrapper">
                                <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                        <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                        <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="t-popup__container t-width t-width_6 t-popup__container-static t-popup__container-animated"> <img class="t702__img t-img loaded" src="img/__27.png" data-original="img/__27.png" imgfield="img">
                            <div class="t702__wrapper">
                                <div class="t702__text-wrapper t-align_center">
                                    <div class="t702__title t-title t-title_xxs" style="">Акція "1+1=3"
                                        <br>
                                    </div>
                                </div>
                                <form id="form3" action="order.php" method="POST" class="t-form t-form_inputs-total_2 form-area">
                                    <input type="text" name="Name" class="t-input name-mask" required="" placeholder="Ім'я " style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="text" name="lastName" class="t-input last-name-mask" required="" placeholder="Прізвище " style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="tel" name="Phone" class="t-input phone-mask" required="" placeholder="Ваш номер телефона - заповнюється цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="text" name="City" class="t-input city-mask" required="" placeholder="Місто доставки " style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="text" name="Department" class="t-input department-mask" required="" placeholder="Номер відділення НП-заповнюється цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <select name="Quantity" class="quantity" style="height: 60px;background-color: transparent;border-radius: 5px;width: 91%;border: 1px solid #c9c9c9;padding: 0 20px;font-size: 16px;color: #000">
                                        <option value="Щука по 0.5 = 1000 грн. + 0.5 у подарунок!">Щука 2 по 0.5 = 1000 грн. + 0.5 у подарунок!</option>
                                         <option value="Щука по 0.5 = 1500 грн. + 0.5 у подарунок!">Щука 3 по 0.5 = 1500 грн. + 0.5 у подарунок!</option>
                                         <option value="Щука по 0.5 = 2000 грн. + 2 по 0.5 у подарунок!">Щука 4 по 0.5 = 2000 грн. + 2 по 0.5 у подарунок!</option>
                                    </select>
                                    <input type="hidden" name="comm" value="Акція Щука">
                                     <input type="hidden" name="ip" value="31.128.76.48" />
                                        <label>
                    <input type="checkbox" checked="checked" required="">
                    <span></span>
                    Я згоден з політикою конфіденційності та користувальницькою угодою
                </label>
                                    <div class="t-form__submit">
                                        <button type="submit" class="t-submit" style="color:#ffffff;background-color:#ff1500;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; font-size: 13px !important; display: flex; justify-content: center; align-items: center;">
                                            КУПИТИ ІКРУ
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--End POPUPS-->
                    
                    
                </div>
                <div class="item js-product">
                    <div class="img-area" style="background-image:url('img/G0.5.png');">
                        <div class="discount">- 50%</div>
                    </div>
                    <div class="text-area">
                        <div class="item-title">ІКРА ГОРБУШІ<br></div>
                        <ul class="text-wrapper">
                            <li class="item-check-text">
                                <span class="check-img">✔</span>
                                <span class="strong">Склад:</span>
                                 Ікра Горбуші, сіль (2-2,3% малосольна), олія;
                            </li>
                            <li class="item-check-text">
                                <span class="check-img">✔</span>
                                <span class="strong">Нерест 2023 року</span>
                            </li>
                            <li class="item-check-text">
                                <span class="check-img">✔</span>
                                <span class="strong">Тара:</span>
                                 скляна закочена баночка;
                            </li>
                            <li class="item-check-text">
                                <span class="check-img">✔</span>
                                <span class="strong">Розмір ікринок:</span>
                                 4 – 5 мм;
                            </li>
                            <li class="item-check-text">
                                <span class="check-img">✔</span>
                                <span class="strong">Колір ікри:</span>
                                 яскраво-жовтогарячий;
                             </li>
                            <li class="item-check-text">
                                <span class="check-img">✔</span>
                                <span class="strong">Консистенція:</span>
                                 Суха (рідина 6%);
                            </li>
                            <li class="item-check-text">
                                <span class="check-img">✔</span>
                                <span class="strong">Термін придатності:</span>
                                 3 міс. (у закритому вигляді);
                            </li><li class="item-check-text">2 тижні (у відкритому);</li>
                             <li class="item-check-text" style="font-size: 16px; font-weight: 600;">
                                 Вага: 500 грам
                            </li>
                            
                        </ul>
                    </div>
                    <div class="item-price">
                        <div class="ex-price">1080 грн.</div>
                        <div class="current-price">540 грн.</div>
                    </div>
                    <div class="item-button">КУПИТИ В ОДИН КЛІК</div>
                    <!--Start TIMER-->
                    <div class="timer-wrapper">
                        <div class="timer-title-wrapper">
                            <h3 class="timer-title">
                                <span>АКЦІЯ 1+1=3</span>
                            </h3>
                            <p class="text" >При покупці 2-х баночок 500г ікри,баночка 500г у подарунок!</p>
                        </div>
                        <div class="text-title-timer">До конца Акции осталось:</div>
                        <div class="timer">
                            <div class="timer-item" style="display: none">
                                <span class="t415__days t-title t-title_lg t415__number"></span>
                                <div class="t415__text t-descr t-descr_xxs" >Днів</div>
                            </div>
                            <div class="timer-item">
                                <span class="t415__hours t-title t415__number" ></span>
                                <div class="t415__text t-descr t-descr_xxs">Годин</div>
                            </div>
                            <div class="timer-item">
                                <span class="t415__minutes t-title t415__number"></span>
                                <div class="t415__text t-descr t-descr_xxs">Хвилин</div>
                            </div>
                            <div class="timer-item">
                                <span class="t415__seconds t-title t415__number"></span>
                                <div class="t415__text t-descr t-descr_xxs">Секунд</div>
                            </div>
                        </div>
                        <div class="timer-button">КУПИТИ ГОРБУШУ ПО АКЦІЇ</div>
                    </div>
                    <!--END TIMER-->
                    <!--Start POPUPS-->
                    <div class="t-popup t-popup_show order-popup">
                        <div class="t-popup__close">
                            <div class="t-popup__close-wrapper">
                                <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                        <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                        <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="t-popup__container t-width t-width_6 t-popup__container-static t-popup__container-animated"> <img class="t702__img t-img loaded" src="img/__27.png" data-original="img/__27.png" imgfield="img">
                            <div class="t702__wrapper">
                                <div class="t702__text-wrapper t-align_center">
                                    <div class="t702__title t-title t-title_xxs" style="">КУПИТИ ІКРУ ГОРБУШІ
                                        <br>
                                    </div>
                                </div>
                                <form id="form5" action="order.php" method="POST" class="t-form t-form_inputs-total_2 form-area">
                                    <input type="text" name="Name" class="t-input name-mask" required="" placeholder="Ім'я " style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="tel" name="Phone" class="t-input phone-mask" required="" placeholder="Ваш номер телефона - заповнюється цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <select name="Quantity" class="quantity" style="height: 60px;background-color: transparent;border-radius: 5px;width: 91%;border: 1px solid #c9c9c9;padding: 0 20px;font-size: 16px;color: #000;">
                                      <option value="Горбуша 0.5 = 540 грн" selected="">Горбуша 0.5 = 540 грн</option>
                                           <option value="Горбуш 2 по 0.5 = 1080 грн. + 0.5 у подарунок!">Горбуш 2 по 0.5 = 1080 грн. + 0.5 у подарунок!</option>
                                         <option value="Горбуш 3 по 0.5 = 1620 грн. + 0.5 у подарунок!">Горбуш 3 по 0.5 = 1620 грн. + 0.5 у подарунок!</option>
                                         <option value="Горбуш 4 по 0.5 = 2160 грн. + 2 по 0.5 у подарунок!">Горбуш 4 по 0.5 = 2160 грн. + 2 по 0.5 у подарунок!</option>
                                       
                                    </select>
                                    <input type="hidden" name="comm" value="Горбуша в один клік">
                                     <input type="hidden" name="ip" value="31.128.76.48" />
                                        <label>
                    <input type="checkbox" checked="checked" required="">
                    <span></span>
                    Я згоден з політикою конфіденційності та користувальницькою угодою
                </label>
                                    <div class="t-form__submit">
                                        <button type="submit" class="t-submit" style="color:#ffffff;background-color:#ff1500;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; font-size: 13px !important; display: flex; justify-content: center; align-items: center;">
                                            КУПИТИ ІКРУ
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="t-popup t-popup_show timer-popup">
                        <div class="t-popup__close">
                            <div class="t-popup__close-wrapper">
                                <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                        <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                        <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="t-popup__container t-width t-width_6 t-popup__container-static t-popup__container-animated"> <img class="t702__img t-img loaded" src="img/__27.png" data-original="img/__27.png" imgfield="img">
                            <div class="t702__wrapper">
                                <div class="t702__text-wrapper t-align_center">
                                    <div class="t702__title t-title t-title_xxs" style="">Акція "1+1=3"
                                        <br>
                                    </div>
                                </div>
                                <form id="form3" action="order.php" method="POST" class="t-form t-form_inputs-total_2 form-area">
                                    <input type="text" name="Name" class="t-input name-mask" required="" placeholder="Ім'я " style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="text" name="lastName" class="t-input last-name-mask" required="" placeholder="Прізвище " style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="tel" name="Phone" class="t-input phone-mask" required="" placeholder="Ваш номер телефона -заповнюється цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="text" name="City" class="t-input city-mask" required="" placeholder="Місто доставки " style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="text" name="Department" class="t-input department-mask" required="" placeholder="Номер відділення НП – заповнюється цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <select name="Quantity" class="quantity" style="height: 60px;background-color: transparent;border-radius: 5px;width: 91%;border: 1px solid #c9c9c9;padding: 0 20px;font-size: 16px;color: #000">
                                             <option value="Горбуш 2 по 0.5 = 1080 грн. + 0.5 у подарунок!">Горбуш 2 по 0.5 = 1080 грн. + 0.5 у подарунок!</option>
                                         <option value="Горбуш 3 по 0.5 = 1620 грн. + 0.5 у подарунок!">Горбуш 3 по 0.5 = 1620 грн. + 0.5 у подарунок!</option>
                                         <option value="Горбуш 4 по 0.5 = 2160 грн. + 2 по 0.5 у подарунок!">Горбуш 4 по 0.5 = 2160 грн. + 2 по 0.5 у подарунок!</option>
                                     </select>
                                    <input type="hidden" name="comm" value="Акція Горбуша">
                                     <input type="hidden" name="ip" value="31.128.76.48" />
                                        <label>
                    <input type="checkbox" checked="checked" required="">
                    <span></span>
                    Я згоден з політикою конфіденційності та користувальницькою угодою
                </label>
                                    <div class="t-form__submit">
                                        <button type="submit" class="t-submit" style="color:#ffffff;background-color:#ff1500;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; font-size: 13px !important; display: flex; justify-content: center; align-items: center;">
                                            КУПИТИ ІКРУ
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--End POPUPS-->
                </div>
                
                  <div class="item js-product">
                    <div class="img-area" style="background-image:url('img/chavicha-transformed.png');">
                        <div class="discount">- 50%</div>
                    </div>
                    <div class="text-area">
                        <div class="item-title">ІКРА ЧАВИЧІ<br></div>
                         <ul class="text-wrapper">
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Склад:</span>
                                 Ікра Чавичі, сіль (2-2,3% малосольна), олія;
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Нерест 2023 року</span>
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Тара:</span>
                                 скляна закочена баночка;
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Розмір ікринок:</span>
                                 5 – 6 мм;
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Колір ікри:</span>
                                 темно червоний;
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Консистенція:</span>
                                 Суха (рідина 10%);
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Термін придатності:</span>
                                 3 міс. (у закритому вигляді);
                             </li>
                             <li class="item-check-text">2 тижні (у відкритому);</li>
                             <li class="item-check-text" style="font-size: 16px; font-weight: 600;">
                                 Вага: 500 грам
                            </li>
                            
                        </ul>
                    </div>
                    <div class="item-price">
                        <div class="ex-price">1200 грн.</div>
                        <div class="current-price">600 грн.</div>
                    </div>
                    <div class="item-button">КУПИТИ В ОДИН КЛІК</div>
                    <!--Start TIMER-->
                    <div class="timer-wrapper">
                        <div class="timer-title-wrapper">
                            <h3 class="timer-title">
                                <span>АКЦІЯ 1+1=3</span>
                            </h3>
                            <p class="text" >При покупці 2-х баночок 500г ікри,баночка 500г у подарунок!</p>
                        </div>
                        <div class="text-title-timer">До кінця Акції залишилось:</div>
                        <div class="timer">
                            <div class="timer-item" style="display: none">
                                <span class="t415__days t-title t-title_lg t415__number"></span>
                                <div class="t415__text t-descr t-descr_xxs" >Днів</div>
                            </div>
                            <div class="timer-item">
                                <span class="t415__hours t-title t415__number" ></span>
                                <div class="t415__text t-descr t-descr_xxs">Годин</div>
                            </div>
                            <div class="timer-item">
                                <span class="t415__minutes t-title t415__number"></span>
                                <div class="t415__text t-descr t-descr_xxs">Хвилин</div>
                            </div>
                            <div class="timer-item">
                                <span class="t415__seconds t-title t415__number"></span>
                                <div class="t415__text t-descr t-descr_xxs">Секунд</div>
                            </div>
                        </div>
                        <div class="timer-button">КУПИТи ЧАВИЧУ ПО АКЦІЇ</div>
                    </div>
                    <!--END TIMER-->
                    <!--Start POPUPS-->
                    <div class="t-popup t-popup_show order-popup">
                        <div class="t-popup__close">
                            <div class="t-popup__close-wrapper">
                                <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                        <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                        <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="t-popup__container t-width t-width_6 t-popup__container-static t-popup__container-animated"> <img class="t702__img t-img loaded" src="img/__27.png" data-original="img/__27.png" imgfield="img">
                            <div class="t702__wrapper">
                                <div class="t702__text-wrapper t-align_center">
                                    <div class="t702__title t-title t-title_xxs" style="">КУПИТИ ІКРУ ЧАВИЧІ
                                        <br>
                                    </div>
                                </div>
                                <form id="form5" action="order.php" method="POST" class="t-form t-form_inputs-total_2 form-area">
                                    <input type="text" name="Name" class="t-input name-mask" required="" placeholder="Ім'я " style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="tel" name="Phone" class="t-input phone-mask" required="" placeholder="Ваш номер телефону – заповнюється цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <select name="Quantity" class="quantity" style="height: 60px;background-color: transparent;border-radius: 5px;width: 91%;border: 1px solid #c9c9c9;padding: 0 20px;font-size: 16px;color: #000;">
                                      <option value="Чавича 0.5 = 600 грн" selected="">Чавича 0.5 = 600 грн</option>
                                           <option value="Чавича по 0.5 = 1200 грн. + 0.5 у подарунок!">Чавича 2 по 0.5 = 1200 грн. + 0.5 у подарунок!</option>
                                         <option value="Чавича по 0.5 = 1800 грн. + 0.5 у подарунок!">Чавича 3 по 0.5 = 1800 грн. + 0.5 у подарунок!</option>
                                         <option value="Чавича по 0.5 = 2400 грн. + 2 по 0.5 у подарунок!">Чавича 4 по 0.5 = 2400 грн. + 2 по 0.5 у подарунок!</option>
                                       
                                     </select>
                                     <input type="hidden" name="comm" value="Чавича в один клік">
                                     <input type="hidden" name="ip" value="31.128.76.48" />
                                        <label>
                    <input type="checkbox" checked="checked" required="">
                    <span></span>
                    Я згоден з політикою конфіденційності та користувальницькою угодою
                </label>
                                    <div class="t-form__submit">
                                        <button type="submit" class="t-submit" style="color:#ffffff;background-color:#ff1500;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; font-size: 13px !important; display: flex; justify-content: center; align-items: center;">
                                            КУПИТИ ІКРУ
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="t-popup t-popup_show timer-popup">
                        <div class="t-popup__close">
                            <div class="t-popup__close-wrapper">
                                <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                        <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                        <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="t-popup__container t-width t-width_6 t-popup__container-static t-popup__container-animated"> <img class="t702__img t-img loaded" src="img/__27.png" data-original="img/__27.png" imgfield="img">
                            <div class="t702__wrapper">
                                <div class="t702__text-wrapper t-align_center">
                                    <div class="t702__title t-title t-title_xxs" style="">Акція "1+1=3"
                                        <br>
                                    </div>
                                </div>
                                <form id="form3" action="order.php" method="POST" class="t-form t-form_inputs-total_2 form-area">
                                    <input type="text" name="Name" class="t-input name-mask" required="" placeholder="Ім'я " style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="text" name="lastName" class="t-input last-name-mask" required="" placeholder="Прізвище " style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="tel" name="Phone" class="t-input phone-mask" required="" placeholder="Ваш номер телефону – заповнюється цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="text" name="City" class="t-input city-mask" required="" placeholder="Місто доставки " style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="text" name="Department" class="t-input department-mask" required="" placeholder="Номер відділення НП – заповнюється цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <select name="Quantity" class="quantity" style="height: 60px;background-color: transparent;border-radius: 5px;width: 91%;border: 1px solid #c9c9c9;padding: 0 20px;font-size: 16px;color: #000">
                                    <option value="Чавича по 0.5 = 1200 грн. + 0.5 у подарунок!">Чавича 2 по 0.5 = 1200 грн. + 0.5 у подарунок!</option>
                                         <option value="Чавича по 0.5 = 1800 грн. + 0.5 у подарунок!">Чавича 3 по 0.5 = 1800 грн. + 0.5 у подарунок!</option>
                                         <option value="Чавича по 0.5 = 2400 грн. + 2 по 0.5 у подарунок!">Чавича 4 по 0.5 = 2400 грн. + 2 по 0.5 у подарунок!</option>
                                     </select>
                                     <input type="hidden" name="comm" value="Акція Чавича">
                                     <input type="hidden" name="ip" value="31.128.76.48" />
                                        <label>
                    <input type="checkbox" checked="checked" required="">
                    <span></span>
                    Я згоден з політикою конфіденційності та користувальницькою угодою
                </label>
                                    <div class="t-form__submit">
                                        <button type="submit" class="t-submit" style="color:#ffffff;background-color:#ff1500;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; font-size: 13px !important; display: flex; justify-content: center; align-items: center;">
                                            КУПИТИ ІКРУ
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--End POPUPS-->
                </div>
                
                 <div class="offer-wrapper">
                <div class="item js-product">
                    <div class="img-area" style="background-image:url('img/100038842022b0-transformed.png');">
                        <div class="discount">- 50%</div>
                    </div>
                <div class="text-area">
                         <div class="item-title">ІКРА ФОРЕЛІ<br></div>
                         <ul class="text-wrapper">
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Склад:</span>
                                 Ікра Форелі, сіль (4% малосольна), олія;
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Нерест 2023 року</span>
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Тара:</span>
                                 скляна закочена баночка;
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Розмір ікринок:</span>
                                 4-5 мм;
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Колір ікри:</span>
                                 червоно-жовтогарячий;
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Консистенція:</span>
                                 Суха (рідина 5 - 7%);
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Термін придатності:</span>
                                 3 міс. (у закритому вигляді);
                             </li>
                             <li class="item-check-text">2 тижні (у відкритому);</li>
                             <li class="item-check-text" style="font-size: 16px; font-weight: 600;">
                                 Вага: 500 грам
                             </li>
                           
                         </ul>
                     </div>
                     <div class="item-price">
                         <div class="ex-price">1220 грн.</div>
                         <div class="current-price">610 грн.</div>
                     </div>
                     <div class="item-button">КУПИТИ В ОДИН КЛІК</div>
                    <!--Start TIMER-->
                    <div class="timer-wrapper">
                        <div class="timer-title-wrapper">
                            <h3 class="timer-title">
                         <span>АКЦІЯ 1+1=3</span>
                             </h3>
                             <p class="text" >При покупці 2-х баночок 500г ікри,баночка 500г у подарунок!</p>
                         </div>
                         <div class="text-title-timer">До кінця Акції залишилося:</div>
                        <div class="timer">
                            <div class="timer-item" style="display: none">
                                <span class="t415__days t-title t-title_lg t415__number"></span>
                                <div class="t415__text t-descr t-descr_xxs" >Днів</div>
                            </div>
                            <div class="timer-item">
                                <span class="t415__hours t-title t415__number" ></span>
                                <div class="t415__text t-descr t-descr_xxs">Годин</div>
                            </div>
                            <div class="timer-item">
                                <span class="t415__minutes t-title t415__number"></span>
                                <div class="t415__text t-descr t-descr_xxs">Хвилин</div>
                            </div>
                            <div class="timer-item">
                                <span class="t415__seconds t-title t415__number"></span>
                                <div class="t415__text t-descr t-descr_xxs">Секунд</div>
                            </div>
                        </div>
                        <div class="timer-button">КУПИТИ ФОРЕЛЬ ПО АКЦІЇ</div>
                    </div>
                    <!--END TIMER-->


                    <!--Start POPUPS-->
                    <div class="t-popup t-popup_show order-popup">
                        <div class="t-popup__close">
                            <div class="t-popup__close-wrapper">
                                <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                        <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                        <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="t-popup__container t-width t-width_6 t-popup__container-static t-popup__container-animated"> <img class="t702__img t-img loaded" src="img/__27.png" data-original="img/__27.png" imgfield="img">
                            <div class="t702__wrapper">
                                <div class="t702__text-wrapper t-align_center">
                                    <div class="t702__title t-title t-title_xxs" style="">КУПИТИ ИІРУ ФОРЕЛИ
                                        <br>
                                    </div>
                                </div>
                                <form id="form4" action="order.php" method="POST" class="t-form t-form_inputs-total_2 form-area">
                                    <input type="text" name="Name" class="t-input name-mask" required="" placeholder="Ім'я " style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="tel" name="Phone" class="t-input phone-mask" required="" placeholder="Ваш номер телефону – заповнюється цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <select name="Quantity" class="quantity" style="height: 60px;background-color: transparent;border-radius: 5px;width: 91%;border: 1px solid #c9c9c9;padding: 0 20px;font-size: 16px;color: #000;">
                                      <option value="Форель 0.5 = 610." selected="">Форель0.5 = 610 грн.</option>
                                          <option value="Форель 2 по 0.5 = 1220 грн." Форель: 2 по 0.5 = 1220 грн. + 0.5 у подарунок!</option>
                                         <option value="Форель 3 по 0.5 = 1830 грн. + 0.5 у подарунок!">Форель: 3 по 0.5 = 1830 грн. + 0.5 у подарунок!</option>
                                         <option value="Форель 4 по 0.5 = 2440 грн. + 0.5 у подарунок!">Форель: 4 по 0.5 = 2440 грн. + 0.5 у подарунок!</option>
                                       
                                     </select>
                                     <input type="hidden" name="comm" value="Форель в один клік">
                                      <input type="hidden" name="ip" value="31.128.76.48" />
                                        <label>
                    <input type="checkbox" checked="checked" required="">
                    <span></span>
                    Я згоден з політикою конфіденційності та користувальницькою угодою
                </label>
                                    <div class="t-form__submit">
                                        <button type="submit" class="t-submit" style="color:#ffffff;background-color:#ff1500;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; font-size: 13px !important; display: flex; justify-content: center; align-items: center;">
                                            КУПИТИ ІКРУ
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="t-popup t-popup_show timer-popup">
                        <div class="t-popup__close">
                            <div class="t-popup__close-wrapper">
                                <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                        <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                        <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="t-popup__container t-width t-width_6 t-popup__container-static t-popup__container-animated"> <img class="t702__img t-img loaded" src="img/__27.png" data-original="img/__27.png" imgfield="img">
                            <div class="t702__wrapper">
                                <div class="t702__text-wrapper t-align_center">
                                    <div class="t702__title t-title t-title_xxs" style="">Акція "1+1=3"
                                        <br>
                                    </div>
                                </div>
                                <form id="form3" action="order.php" method="POST" class="t-form t-form_inputs-total_2 form-area">
                                    <input type="text" name="Name" class="t-input name-mask" required="" placeholder="Имя " style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="text" name="lastName" class="t-input last-name-mask" required="" placeholder="Фамилия " style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="tel" name="Phone" class="t-input phone-mask" required="" placeholder="Ваш номер телефона - заполняется цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="text" name="City" class="t-input city-mask" required="" placeholder="Город доставки " style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="text" name="Department" class="t-input department-mask" required="" placeholder="Номер отделение НП - заполняется цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <select name="Quantity" class="quantity" style="height: 60px;background-color: transparent;border-radius: 5px;width: 91%;border: 1px solid #c9c9c9;padding: 0 20px;font-size: 16px;color: #000">
                               <option value="Форель 2 по 0.5 = 1220 грн." selected="">Форель: 2 по 0.5 = 1220 грн. + 0.5 в подарок!</option>
                                        <option value="Форель 3 по 0.5 = 1830 грн. + 0.5 в подарок!">Форель: 3 по 0.5 = 1830 грн. + 0.5 в подарок!</option>
                                        <option value="Форель 4 по 0.5 = 2440 грн. + 0.5 в подарок!">Форель: 4 по 0.5 = 2440 грн. + 0.5 в подарок!</option>
                                       
                                    </select>
                                    <input type="hidden" name="comm" value="Акция Форель">
                                     <input type="hidden" name="ip" value="31.128.76.48" />
                                        <label>
                    <input type="checkbox" checked="checked" required="">
                    <span></span>
                    Я згоден з політикою конфіденційності та користувальницькою угодою
                </label>
                                    <div class="t-form__submit">
                                        <button type="submit" class="t-submit" style="color:#ffffff;background-color:#ff1500;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; font-size: 13px !important; display: flex; justify-content: center; align-items: center;">
                                            КУПИТИ ІКРУ
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--End POPUPS-->
 </div>
                
   </div>              
                 <div class="item js-product">
                    <div class="img-area" style="background-image:url('img/V0.5.png');">
                        <div class="discount">- 50%</div>
                    </div>
                    <div class="text-area">
                    <div class="item-title">ІКРА ВЕСЛОНОСУ<br></div>
                         <ul class="text-wrapper">
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Склад:</span>
                                  Ікра Веслоноса, сіль, олія;
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Нерест 2023 року</span>
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Тара:</span>
                                скляна закочена баночка;
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Розмір ікринок:</span>
                                 2,1 мм;
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Колір ікри:</span>
                                 чорний;
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Консистенція:</span>
                                 Суха (рідина 5 - 7%);
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Термін придатності:</span>
                                 3 міс. (у закритому вигляді);
                             </li>
                             <li class="item-check-text">2 тижні (у відкритому);</li>
                             <li class="item-check-text" style="font-size: 16px; font-weight: 600;">
                                 Вага: 250 грам
                             </li>
                         </ul>
                     </div>
                     <div class="item-price">
                         <div class="ex-price">1080 грн.</div>
                         <div class="current-price">540 грн.</div>
                    </div>
                    <div class="item-button">КУПИТИ В ОДИН КЛІК</div>
                    <!--Start TIMER-->
                    <div class="timer-wrapper">
                        <div class="timer-title-wrapper">
                            <h3 class="timer-title">
                                <span>АКЦІЯ 1+1=3</span>
                            </h3>
                            <p class="text" >При покупці 2-х баночок 500г ікри, баночка 500г у подарунок!</p>
                        </div>
                        <div class="text-title-timer">До кінця Акції залишилось:</div>
                        <div class="timer">
                            <div class="timer-item" style="display: none">
                                <span class="t415__days t-title t-title_lg t415__number"></span>
                                <div class="t415__text t-descr t-descr_xxs" >Днів</div>
                            </div>
                            <div class="timer-item">
                                <span class="t415__hours t-title t415__number" ></span>
                                <div class="t415__text t-descr t-descr_xxs">Годин</div>
                            </div>
                            <div class="timer-item">
                                <span class="t415__minutes t-title t415__number"></span>
                                <div class="t415__text t-descr t-descr_xxs">Хвилин</div>
                            </div>
                            <div class="timer-item">
                                <span class="t415__seconds t-title t415__number"></span>
                                <div class="t415__text t-descr t-descr_xxs">Секунд</div>
                            </div>
                        </div>
                        <div class="timer-button">КУПИТИ ВЕСЛОНОС ПО АКЦІЇ</div>
                    </div>
                    <!--END TIMER-->

                    <!--Start POPUPS-->
                    <div class="t-popup t-popup_show order-popup">
                        <div class="t-popup__close">
                            <div class="t-popup__close-wrapper">
                                <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                        <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                        <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="t-popup__container t-width t-width_6 t-popup__container-static t-popup__container-animated"> <img class="t702__img t-img loaded" src="img/__27.png" data-original="img/__27.png" imgfield="img">
                            <div class="t702__wrapper">
                                <div class="t702__text-wrapper t-align_center">
                                    <div class="t702__title t-title t-title_xxs" style="">КУПИТИ ІКРУ ВЕСЛОНОСА
                                        <br>
                                    </div>
                                </div>
                                <form id="form7" action="order.php" method="POST" class="t-form t-form_inputs-total_2 form-area">
                                    <input type="text" name="Name" class="t-input name-mask" required="" placeholder="Ім'я " style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="tel" name="Phone" class="t-input phone-mask" required="" placeholder="Ваш номер телефона - заповнюється цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <select name="Quantity" class="quantity" style="height: 60px;background-color: transparent;border-radius: 5px;width: 91%;border: 1px solid #c9c9c9;padding: 0 20px;font-size: 16px;color: #000;">
               <option value="Веслонос 0.250 = 540." selected="">Веслонос 0.250 = 540 грн.</option>
                                          <option value="Веслонос 2 по 0.250 = 1080 грн. + 0.250 у подарунок!">Веслонос 2 по 0.250 = 1080 грн. + 0.250 у подарунок!</option>
                                          <option value="Веслонос 3 по 0.250 = 1620 грн. + 0.250 у подарунок!">Веслонос 3 по 0.250 = 1620 грн. + 0.250 у подарунок!</option>
                                          <option value="Веслонос 4 по 0.250 = 2160 грн. + 2 по 0.250 у подарунок!">Веслонос 4 по 0.250 = 2160 грн. + 2 по 0.250 у подарунок!</option>
                                       
                                    </select>
                                    <input type="hidden" name="comm" value="Веслонос в один клік 250">
                                     <input type="hidden" name="ip" value="31.128.76.48" />
                                        <label>
                    <input type="checkbox" checked="checked" required="">
                    <span></span>
                    Я згоден з політикою конфіденційності та користувальницькою угодою
                </label>
                                    <div class="t-form__submit">
                                        <button type="submit" class="t-submit" style="color:#ffffff;background-color:#ff1500;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; font-size: 13px !important; display: flex; justify-content: center; align-items: center;">
                                            КУПИТИ ІКРУ
                                        </button>
                                    </div>
                            
                                    
                                    
                                </form>
                                <style>
                                    #rec159036475 input::-webkit-input-placeholder {
                                        color: #000000;
                                        opacity: 0.5;
                                    }

                                    #rec159036475 input::-moz-placeholder {
                                        color: #000000;
                                        opacity: 0.5;
                                    }

                                    #rec159036475 input:-moz-placeholder {
                                        color: #000000;
                                        opacity: 0.5;
                                    }

                                    #rec159036475 input:-ms-input-placeholder {
                                        color: #000000;
                                        opacity: 0.5;
                                    }

                                    #rec159036475 textarea::-webkit-input-placeholder {
                                        color: #000000;
                                        opacity: 0.5;
                                    }

                                    #rec159036475 textarea::-moz-placeholder {
                                        color: #000000;
                                        opacity: 0.5;
                                    }

                                    #rec159036475 textarea:-moz-placeholder {
                                        color: #000000;
                                        opacity: 0.5;
                                    }

                                    #rec159036475 textarea:-ms-input-placeholder {
                                        color: #000000;
                                        opacity: 0.5;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div class="t-popup t-popup_show timer-popup">
                        <div class="t-popup__close">
                            <div class="t-popup__close-wrapper">
                                <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                        <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                        <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="t-popup__container t-width t-width_6 t-popup__container-static t-popup__container-animated"> <img class="t702__img t-img loaded" src="img/__27.png" data-original="img/__27.png" imgfield="img">
                            <div class="t702__wrapper">
                                <div class="t702__text-wrapper t-align_center">
                                    <div class="t702__title t-title t-title_xxs" style="">Акція "1+1=3"
                                        <br>
                                    </div>
                                </div>
                                <form id="form3" action="order.php" method="POST" class="t-form t-form_inputs-total_2 form-area">
                                    <input type="text" name="Name" class="t-input name-mask" required="" placeholder="Ім'я " style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="text" name="lastName" class="t-input last-name-mask" required="" placeholder="Прізвище " style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="tel" name="Phone" class="t-input phone-mask" required="" placeholder="Ваш номер телефона - заповнюється цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="text" name="City" class="t-input city-mask" required="" placeholder="Місто доставки " style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="text" name="Department" class="t-input department-mask" required="" placeholder="Номер відділення НП – заповнюється цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <select name="Quantity" class="quantity" style="height: 60px;background-color: transparent;border-radius: 5px;width: 91%;border: 1px solid #c9c9c9;padding: 0 20px;font-size: 16px;color: #000">
                                       <option value="Веслонос 2 по 0.250 = 1080 грн. + 0.250 у подарунок!">Веслонос 2 по 0.250 = 1080 грн. + 0.250 у подарунок!</option>
                                         <option value="Веслонос 3 по 0.250 = 1620 грн. + 0.250 у подарунок!">Веслонос 3 по 0.250 = 1620 грн. + 0.250 у подарунок!</option>
                                         <option value="Веслонос 4 по 0.250 = 2160 грн. + 2 по 0.250 у подарунок!">Веслонос 4 по 0.250 = 2160 грн. + 2 по 0.250 у подарунок!</option>
                                     </select>
                                    <input type="hidden" name="comm" value="Акція Веслонос 250">
                                     <input type="hidden" name="ip" value="31.128.76.48" />
                                        <label>
                    <input type="checkbox" checked="checked" required="">
                    <span></span>
                    Я згоден з політикою конфіденційності та користувальницькою угодою
                </label>
                                    <div class="t-form__submit">
                                        <button type="submit" class="t-submit" style="color:#ffffff;background-color:#ff1500;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; font-size: 13px !important; display: flex; justify-content: center; align-items: center;">
                                            КУПИТИ ІКРУ
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--End POPUPS-->
                </div>
                
                <div class="item js-product">
                    <div class="img-area" style="background-image:url('img/V0.5.png');">
                        <div class="discount">- 50%</div>
                    </div>
                  <div class="text-area">
                         <div class="item-title">ІКРА ВЕСЛОНОСУ<br></div>
                         <ul class="text-wrapper">
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Склад:</span>
                                 Ікра Веслоноса, сіль, олія;
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Нерест 2023 року</span>
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Тара:</span>
                                 скляна закочена баночка;
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Розмір ікринок:</span>
                                 2,2 мм;
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Колір ікри:</span>
                                 чорний;
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Консистенція:</span>
                                 Суха (рідина 5 - 7%);
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Термін придатності:</span>
                                 3 міс. (у закритому вигляді);
                             </li>
                             <li class="item-check-text">2 тижні (у відкритому);</li>
                             <li class="item-check-text" style="font-size: 16px; font-weight: 600;">
                                 Вага: 500 грам
                             </li>
                         </ul>

                    </div>
                    <div class="item-price">
                        <div class="ex-price">1800 грн.</div>
                        <div class="current-price">900 грн.</div>
                    </div>
                    <div class="item-button">КУПИТИ В ОДИН КЛІК</div>
                    <!--Start TIMER-->
                    <div class="timer-wrapper">
                        <div class="timer-title-wrapper">
                            <h3 class="timer-title">
                                <span>АКЦІЯ 1+1=3</span>
                            </h3>
                            <p class="text" >При покупці 2-х баночок 500г ікри,баночка 500г у подарунок!</p>
                        </div>
                        <div class="text-title-timer">До кінця Акції залишилось:</div>
                        <div class="timer">
                            <div class="timer-item" style="display: none">
                                <span class="t415__days t-title t-title_lg t415__number"></span>
                                <div class="t415__text t-descr t-descr_xxs" >Днів</div>
                            </div>
                            <div class="timer-item">
                                <span class="t415__hours t-title t415__number" ></span>
                                <div class="t415__text t-descr t-descr_xxs">Годин</div>
                            </div>
                            <div class="timer-item">
                                <span class="t415__minutes t-title t415__number"></span>
                                <div class="t415__text t-descr t-descr_xxs">Хвилин</div>
                            </div>
                            <div class="timer-item">
                                <span class="t415__seconds t-title t415__number"></span>
                                <div class="t415__text t-descr t-descr_xxs">Секунд</div>
                            </div>
                        </div>
                        <div class="timer-button">КУПИТИ ВЕСЛОНОС ПО АКЦІЇ</div>
                    </div>
                    <!--END TIMER-->

                    <!--Start POPUPS-->
                    <div class="t-popup t-popup_show order-popup">
                        <div class="t-popup__close">
                            <div class="t-popup__close-wrapper">
                                <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                        <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                        <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="t-popup__container t-width t-width_6 t-popup__container-static t-popup__container-animated"> <img class="t702__img t-img loaded" src="img/__27.png" data-original="img/__27.png" imgfield="img">
                            <div class="t702__wrapper">
                                <div class="t702__text-wrapper t-align_center">
                                    <div class="t702__title t-title t-title_xxs" style="">КУПИТИ ІКРУ ВЕСЛОНОСА
                                        <br>
                                    </div>
                                </div>
                                <form id="form6" action="order.php" method="POST" class="t-form t-form_inputs-total_2 form-area">
                                    <input type="text" name="Name" class="t-input name-mask" required="" placeholder="Ім'я " style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="tel" name="Phone" class="t-input phone-mask" required="" placeholder="Ваш номер телефону – заповнюється цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <select name="Quantity" class="quantity" style="height: 60px;background-color: transparent;border-radius: 5px;width: 91%;border: 1px solid #c9c9c9;padding: 0 20px;font-size: 16px;color: #000;">
                       <option value="Веслонос 0.5 = 900 грн" selected="">Веслонос 0.5 = 900 грн</option>
                                         <option value="Веслонос по 0.5 = 1800 грн. + 0.5 у подарунок!">Веслонос 2 по 0.5 = 1800 грн. + 0.5 у подарунок!</option>
                                         <option value="Веслонос по 0.5 = 2700 + 0.5 у подарунок!">Веслонос 3 по 0.5 = 2700 грн. + 0.5 у подарунок!</option>
                                         <option value="Веслонос по 0.5 = 3600 грн. + 2 по 0.5 у подарунок!">Веслонос 4 по 0.5 = 3600 грн. + 2 по 0.5 у подарунок!</option>
                                       
                                    </select>
                                    <input type="hidden" name="comm" value="Веслонос в один клік">
                                     <input type="hidden" name="ip" value="31.128.76.48" />
                                        <label>
                    <input type="checkbox" checked="checked" required="">
                    <span></span>
                    Я згоден з політикою конфіденційності та користувальницькою угодою
                </label>
                                    <div class="t-form__submit">
                                        <button type="submit" class="t-submit" style="color:#ffffff;background-color:#ff1500;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; font-size: 13px !important; display: flex; justify-content: center; align-items: center;">
                                            КУПИТИ ІКРУ
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="t-popup t-popup_show timer-popup">
                        <div class="t-popup__close">
                            <div class="t-popup__close-wrapper">
                                <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                        <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                        <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="t-popup__container t-width t-width_6 t-popup__container-static t-popup__container-animated"> <img class="t702__img t-img loaded" src="img/__27.png" data-original="img/__27.png" imgfield="img">
                            <div class="t702__wrapper">
                                <div class="t702__text-wrapper t-align_center">
                                    <div class="t702__title t-title t-title_xxs" style="">Акція "1+1=3"
                                        <br>
                                    </div>
                                </div>
                                <form id="form3" action="order.php" method="POST" class="t-form t-form_inputs-total_2 form-area">
                                    <input type="text" name="Name" class="t-input name-mask" required="" placeholder="Ім'я" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="text" name="lastName" class="t-input last-name-mask" required="" placeholder="Прізвище" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="tel" name="Phone" class="t-input phone-mask" required="" placeholder="Ваш номер телефону – заповнюється цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="text" name="City" class="t-input city-mask" required="" placeholder="Місто доставки" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="text" name="Department" class="t-input department-mask" required="" placeholder="Номер відділення НП – заповнюється цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <select name="Quantity" class="quantity" style="height: 60px;background-color: transparent;border-radius: 5px;width: 91%;border: 1px solid #c9c9c9;padding: 0 20px;font-size: 16px;color: #000">
                                       <option value="Веслонос по 0.5 = 1800 грн. + 0.5 у подарунок!">Веслонос 2 по 0.5 = 1800 грн. + 0.5 у подарунок!</option>
                                         <option value="Веслонос по 0.5 = 2700 + 0.5 у подарунок!">Веслонос 3 по 0.5 = 2700 грн. + 0.5 у подарунок!</option>
                                         <option value="Веслонос по 0.5 = 3600 грн. + 2 по 0.5 у подарунок!">Веслонос 4 по 0.5 = 3600 грн. + 2 по 0.5 у подарунок!</option>
                                    </select>
                                        <input type="hidden" name="comm" value="Акція Веслонос">
                                     <input type="hidden" name="ip" value="31.128.76.48" />
                                        <label>
                    <input type="checkbox" checked="checked" required="">
                    <span></span>
                    Я згоден з політикою конфіденційності та користувальницькою угодою
                </label>
                                    <div class="t-form__submit">
                                        <button type="submit" class="t-submit" style="color:#ffffff;background-color:#ff1500;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; font-size: 13px !important; display: flex; justify-content: center; align-items: center;">
                                            КУПИТИ ІКРУ
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--End POPUPS-->
                </div>
                <div class="item js-product">
                    <div class="img-area" style="background-image:url('img/osetr 100.png');">
                        <div class="discount">- 50%</div>
                    </div>
                    <div class="text-area">
                  <div class="item-title">ІКРА ОСЕТРУ<br></div>
                         <ul class="text-wrapper">
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Склад:</span>
                                 Ікра Оcетра, сіль, олія;
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Нерест 2023 року</span>
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Тара:</span>
                                 жерстяна банка;
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Розмір ікринок:</span>
                                 2,1 мм;
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Колір ікри:</span>
                                 чорний;
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Консистенція:</span>
                                 Суха (рідина 5 - 7%);
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Термін придатності:</span>
                                 3 міс. (у закритому вигляді);
                             </li>
                             <li class="item-check-text">2 тижні (у відкритому);</li>
                             <li class="item-check-text" style="font-size: 16px; font-weight: 600;">
                                 Вага: 100 грам
                             </li>
                        </ul>
                    </div>
                    <div class="item-price">
                        <div class="ex-price">1850 грн.</div>
                        <div class="current-price">925 грн.</div>
                    </div>
                    <div class="item-button">КУПИТИ В ОДИН КЛІК</div>
                    <!--Start TIMER-->
                    <div class="timer-wrapper">
                        <div class="timer-title-wrapper">
                            <h3 class="timer-title">
                                <span>АКЦІЯ 1+1=3</span>
                            </h3>
                            <p class="text" >При покупці 2-х баночок 500г ікри,баночка 500г у подарунок!</p>
                        </div>
                        <div class="text-title-timer">До кінця Акції залишилось:</div>
                        <div class="timer">
                            <div class="timer-item" style="display: none">
                                <span class="t415__days t-title t-title_lg t415__number"></span>
                                <div class="t415__text t-descr t-descr_xxs" >Днів</div>
                            </div>
                            <div class="timer-item">
                                <span class="t415__hours t-title t415__number" ></span>
                                <div class="t415__text t-descr t-descr_xxs">Годин</div>
                            </div>
                            <div class="timer-item">
                                <span class="t415__minutes t-title t415__number"></span>
                                <div class="t415__text t-descr t-descr_xxs">Хвилин</div>
                            </div>
                            <div class="timer-item">
                                <span class="t415__seconds t-title t415__number"></span>
                                <div class="t415__text t-descr t-descr_xxs">Секунд</div>
                            </div>
                        </div>
                        <div class="timer-button">КУПИТИ ОСЕТР ПО АКЦІЇ</div>
                    </div>
                    <!--END TIMER-->
                    <!--Start POPUPS-->
                    <div class="t-popup t-popup_show order-popup">
                        <div class="t-popup__close">
                            <div class="t-popup__close-wrapper">
                                <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                        <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                        <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="t-popup__container t-width t-width_6 t-popup__container-static t-popup__container-animated"> <img class="t702__img t-img loaded" src="img/__27.png" data-original="img/__27.png" imgfield="img">
                            <div class="t702__wrapper">
                                <div class="t702__text-wrapper t-align_center">
                                    <div class="t702__title t-title t-title_xxs" style="">КУПИТИ ІКРУ ОСЕТРА
                                        <br>
                                    </div>
                                </div>
                                <form id="form7" action="order.php" method="POST" class="t-form t-form_inputs-total_2 form-area">
                                    <input type="text" name="Name" class="t-input name-mask" required="" placeholder="Ім'я" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="tel" name="Phone" class="t-input phone-mask" required="" placeholder="Ваш номер телефону – заповнюється цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <select name="Quantity" class="quantity" style="height: 60px;background-color: transparent;border-radius: 5px;width: 91%;border: 1px solid #c9c9c9;padding: 0 20px;font-size: 16px;color: #000;">
                                       <option value="Осетр 0.100 = 925." selected="">Осетр 0.100 = 925 грн.</option>
                                         <option value="Осетр 2 по 0.100 = 1850 грн. + 0.100 у подарунок!">Осетр 2 по 0.100 = 1850 грн. + 0.100 у подарунок!</option>
                                         <option value="Осетр 3 по 0.100 = 2775 грн. + 0.100 у подарунок!">Осетр 3 по 0.100 = 2775 грн. + 0.100 у подарунок!</option>
                                         <option value="Осетр 4 по 0.100 = 3700 грн. + 2 по 0.100 у подарунок!">Осетр 4 по 0.100 = 3700 грн. + 2 по 0.100 у подарунок!</option>
                                        
                                    </select>
                                    <input type="hidden" name="comm" value="Осетр в один клік 100">
                                     <input type="hidden" name="ip" value="31.128.76.48" />
                                        <label>
                    <input type="checkbox" checked="checked" required="">
                    <span></span>
                    Я згоден з політикою конфіденційності та користувальницькою угодою
                </label>
                                    <div class="t-form__submit">
                                        <button type="submit" class="t-submit" style="color:#ffffff;background-color:#ff1500;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; font-size: 13px !important; display: flex; justify-content: center; align-items: center;">
                                            КУПИТИ ІКРУ
                                        </button>
                                    </div>
                                </form>
                                <style>
                                    #rec159036475 input::-webkit-input-placeholder {
                                        color: #000000;
                                        opacity: 0.5;
                                    }

                                    #rec159036475 input::-moz-placeholder {
                                        color: #000000;
                                        opacity: 0.5;
                                    }

                                    #rec159036475 input:-moz-placeholder {
                                        color: #000000;
                                        opacity: 0.5;
                                    }

                                    #rec159036475 input:-ms-input-placeholder {
                                        color: #000000;
                                        opacity: 0.5;
                                    }

                                    #rec159036475 textarea::-webkit-input-placeholder {
                                        color: #000000;
                                        opacity: 0.5;
                                    }

                                    #rec159036475 textarea::-moz-placeholder {
                                        color: #000000;
                                        opacity: 0.5;
                                    }

                                    #rec159036475 textarea:-moz-placeholder {
                                        color: #000000;
                                        opacity: 0.5;
                                    }

                                    #rec159036475 textarea:-ms-input-placeholder {
                                        color: #000000;
                                        opacity: 0.5;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div class="t-popup t-popup_show timer-popup">
                        <div class="t-popup__close">
                            <div class="t-popup__close-wrapper">
                                <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                        <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                        <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="t-popup__container t-width t-width_6 t-popup__container-static t-popup__container-animated"> <img class="t702__img t-img loaded" src="img/__27.png" data-original="img/__27.png" imgfield="img">
                            <div class="t702__wrapper">
                                <div class="t702__text-wrapper t-align_center">
                                    <div class="t702__title t-title t-title_xxs" style="">Акція "1+1=3"
                                        <br>
                                    </div>
                                </div>
                                <form id="form3" action="order.php" method="POST" class="t-form t-form_inputs-total_2 form-area">
                                    <input type="text" name="Name" class="t-input name-mask" required="" placeholder="Ім'я" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="text" name="lastName" class="t-input last-name-mask" required="" placeholder="Прізвище" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="tel" name="Phone" class="t-input phone-mask" required="" placeholder="Ваш номер телефону – заповнюється цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="text" name="City" class="t-input city-mask" required="" placeholder="Місто доставки" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="text" name="Department" class="t-input department-mask" required="" placeholder="Номер відділення НП – заповнюється цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <select name="Quantity" class="quantity" style="height: 60px;background-color: transparent;border-radius: 5px;width: 91%;border: 1px solid #c9c9c9;padding: 0 20px;font-size: 16px;color: #000">
                                        <option value="Осетр 2 по 0.100 = 1850 грн. + 0.100 у подарунок!">Осетр 2 по 0.100 = 1850 грн. + 0.100 у подарунок!</option>
                                         <option value="Осетр 3 по 0.100 = 2775 грн. + 0.100 у подарунок!">Осетр 3 по 0.100 = 2775 грн. + 0.100 у подарунок!</option>
                                         <option value="Осетр 4 по 0.100 = 3700 грн. + 2 по 0.100 у подарунок!">Осетр 4 по 0.100 = 3700 грн. + 2 по 0.100 у подарунок!</option>
                                    </select>
                                    <input type="hidden" name="comm" value="Акція Осетра 100">
                                     <input type="hidden" name="ip" value="31.128.76.48" />
                                        <label>
                    <input type="checkbox" checked="checked" required="">
                    <span></span>
                    Я згоден з політикою конфіденційності та користувальницькою угодою
                </label>
                                    <div class="t-form__submit">
                                        <button type="submit" class="t-submit" style="color:#ffffff;background-color:#ff1500;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; font-size: 13px !important; display: flex; justify-content: center; align-items: center;">
                                            КУПИТИ ІКРУ
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--End POPUPS-->
                    
                       </div>
                       
                <div class="item js-product">
                    <div class="img-area" style="background-image:url('img/osetr 250.png');">
                        <div class="discount">- 50%</div>
                    </div>
                    <div class="text-area">
                      <div class="item-title">ІКРА ОСЕТРУ<br></div>
                         <ul class="text-wrapper">
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Склад:</span>
                                 Ікра Оcетра, сіль, олія;
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Нерест 2023 року</span>
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Тара:</span>
                                 жерстяна банка;
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Розмір ікринок:</span>
                                 2,1 мм;
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Колір ікри:</span>
                                 чорний;
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Консистенція:</span>
                                 Суха (рідина 5 - 7%);
                             </li>
                             <li class="item-check-text">
                                 <span class="check-img">✔</span>
                                 <span class="strong">Термін придатності:</span>
                                 3 міс. (у закритому вигляді);
                             </li>
                             <li class="item-check-text">2 тижні (у відкритому);</li>
                             <li class="item-check-text" style="font-size: 16px; font-weight: 600;">
                                 Вага: 250 грам
                             </li>
                         </ul>
                       
                     </div>
                     <div class="item-price">
                         <div class="ex-price">4400 грн.</div>
                         <div class="current-price">2200 грн.</div>
                    </div>
                    <div class="item-button">КУПИТИ В ОДИН КЛІК</div>
                    <!--Start TIMER-->
                    <div class="timer-wrapper">
                        <div class="timer-title-wrapper">
                            <h3 class="timer-title">
                                <span>АКЦІЯ 1+1=3</span>
                            </h3>
                            <p class="text" >При покупці 2-х баночок 500г ікри, баночка 500г у подарунок!</p>
                        </div>
                        <div class="text-title-timer">До кінця Акції залишилось:</div>
                        <div class="timer">
                            <div class="timer-item" style="display: none">
                                <span class="t415__days t-title t-title_lg t415__number"></span>
                                <div class="t415__text t-descr t-descr_xxs" >Днів</div>
                            </div>
                            <div class="timer-item">
                                <span class="t415__hours t-title t415__number" ></span>
                                <div class="t415__text t-descr t-descr_xxs">Годин</div>
                            </div>
                            <div class="timer-item">
                                <span class="t415__minutes t-title t415__number"></span>
                                <div class="t415__text t-descr t-descr_xxs">Хвилин</div>
                            </div>
                            <div class="timer-item">
                                <span class="t415__seconds t-title t415__number"></span>
                                <div class="t415__text t-descr t-descr_xxs">Секунд</div>
                            </div>
                        </div>
                        <div class="timer-button">КУПИТИ ОСЕТР ПО АКЦІЇ</div>
                    </div>
                    <!--END TIMER-->
                    <!--Start POPUPS-->
                    <div class="t-popup t-popup_show order-popup">
                        <div class="t-popup__close">
                            <div class="t-popup__close-wrapper">
                                <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                        <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                        <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="t-popup__container t-width t-width_6 t-popup__container-static t-popup__container-animated"> <img class="t702__img t-img loaded" src="img/__27.png" data-original="img/__27.png" imgfield="img">
                            <div class="t702__wrapper">
                                <div class="t702__text-wrapper t-align_center">
                                    <div class="t702__title t-title t-title_xxs" style="">КУПИТИ ІКРУ ОСЕТРА
                                        <br>
                                    </div>
                                </div>
                                <form id="form7" action="order.php" method="POST" class="t-form t-form_inputs-total_2 form-area">
                                    <input type="text" name="Name" class="t-input name-mask" required="" placeholder="Ім'я" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="tel" name="Phone" class="t-input phone-mask" required="" placeholder="Ваш номер телефону – заповнюється цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <select name="Quantity" class="quantity" style="height: 60px;background-color: transparent;border-radius: 5px;width: 91%;border: 1px solid #c9c9c9;padding: 0 20px;font-size: 16px;color: #000;">
                                       <option value="Осетр .250 = 2200." selected="">Осетр 0.250 = 2200 грн.</option>
                                         <option value="Осетр 2 по 0.250 = 4400 грн. + 0.100 у подарунок!">Осетр 2 по 0.250 = 4400 грн. + 0.100 у подарунок!</option>
                                         <option value="Осетр 3 по 0.250 = 6600 грн. + 0.100 у подарунок!">Осетр 3 по 0.250 = 6600 грн. + 0.100 у подарунок!</option>
                                         <option value="Осетр 4 по 0.250 = 8800 грн. + 2 по 0.250 у подарунок!">Осетр 4 по 0.250 = 8800 грн. + 2 по 0.250 у подарунок!</option>
                                    </select>
                                    <input type="hidden" name="comm" value="Осетр в один клік">
                                     <input type="hidden" name="ip" value="31.128.76.48" />
                                        <label>
                    <input type="checkbox" checked="checked" required="">
                    <span></span>
                    Я згоден з політикою конфіденційності та користувальницькою угодою
                </label>
                                    <div class="t-form__submit">
                                        <button type="submit" class="t-submit" style="color:#ffffff;background-color:#ff1500;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; font-size: 13px !important; display: flex; justify-content: center; align-items: center;">
                                            КУПИТИ ІКРУ
                                        </button>
                                    </div>
                                </form>
                                <style>
                                    #rec159036475 input::-webkit-input-placeholder {
                                        color: #000000;
                                        opacity: 0.5;
                                    }

                                    #rec159036475 input::-moz-placeholder {
                                        color: #000000;
                                        opacity: 0.5;
                                    }

                                    #rec159036475 input:-moz-placeholder {
                                        color: #000000;
                                        opacity: 0.5;
                                    }

                                    #rec159036475 input:-ms-input-placeholder {
                                        color: #000000;
                                        opacity: 0.5;
                                    }

                                    #rec159036475 textarea::-webkit-input-placeholder {
                                        color: #000000;
                                        opacity: 0.5;
                                    }

                                    #rec159036475 textarea::-moz-placeholder {
                                        color: #000000;
                                        opacity: 0.5;
                                    }

                                    #rec159036475 textarea:-moz-placeholder {
                                        color: #000000;
                                        opacity: 0.5;
                                    }

                                    #rec159036475 textarea:-ms-input-placeholder {
                                        color: #000000;
                                        opacity: 0.5;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div class="t-popup t-popup_show timer-popup">
                        <div class="t-popup__close">
                            <div class="t-popup__close-wrapper">
                                <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                        <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                        <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="t-popup__container t-width t-width_6 t-popup__container-static t-popup__container-animated"> <img class="t702__img t-img loaded" src="img/__27.png" data-original="img/__27.png" imgfield="img">
                            <div class="t702__wrapper">
                                <div class="t702__text-wrapper t-align_center">
                                    <div class="t702__title t-title t-title_xxs" style="">Акція "1+1=3"
                                        <br>
                                    </div>
                                </div>
                                <form id="form3" action="order.php" method="POST" class="t-form t-form_inputs-total_2 form-area">
                                    <input type="text" name="Name" class="t-input name-mask" required="" placeholder="Ім'я" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="text" name="lastName" class="t-input last-name-mask" required="" placeholder="Прізвище" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="tel" name="Phone" class="t-input phone-mask" required="" placeholder="Ваш номер телефону – заповнюється цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="text" name="City" class="t-input city-mask" required="" placeholder="Місто доставки" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <input type="text" name="Department" class="t-input department-mask" required="" placeholder="Номер відділення НП – заповнюється цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                    <select name="Quantity" class="quantity" style="height: 60px;background-color: transparent;border-radius: 5px;width: 91%;border: 1px solid #c9c9c9;padding: 0 20px;font-size: 16px;color: #000">
                                     <option value="Осетр 2 по 0.250 = 4400 грн. + 0.100 у подарунок!">Осетр 2 по 0.250 = 4400 грн. + 0.100 у подарунок!</option>
                                         <option value="Осетр 3 по 0.250 = 6600 грн. + 0.100 у подарунок!">Осетр 3 по 0.250 = 6600 грн. + 0.100 у подарунок!</option>
                                         <option value="Осетр 4 по 0.250 = 8800 грн. + 2 по 0.250 у подарунок!">Осетр 4 по 0.250 = 8800 грн. + 2 по 0.250 у подарунок!</option>
                                    <input type="hidden" name="comm" value="Акція Осетр">
                                     <input type="hidden" name="ip" value="31.128.76.48" />
                                        <label>
                    <input type="checkbox" checked="checked" required="">
                    <span></span>
                    Я згоден з політикою конфіденційності та користувальницькою угодою
                </label>
                                    <div class="t-form__submit">
                                        <button type="submit" class="t-submit" style="color:#ffffff;background-color:#ff1500;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; font-size: 13px !important; display: flex; justify-content: center; align-items: center;">
                                            КУПИТИ ІКРУ
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--End POPUPS-->
                      </div>
            </div>
        </section>
        <script type="text/javascript">
            /*$(document).ready(function() {
                setTimeout(function() {
                    t778__init('158820531');
                }, 500);
            });*/
            $('.t778').bind('displayChanged', function() {
                t778_unifyHeights('158820531');
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".offer-wrapper .item-button").click(function(e) {
                    $(this).parent().find('.order-popup').addClass("checked");
                    $(this).parent().find('.order-popup').addClass("t-popup_show");
                });
                $(".offer-wrapper .timer-button").click(function(e) {
                    $(this).parent().parent().find('.timer-popup').addClass("checked");
                    $(this).parent().parent().find('.timer-popup').addClass("t-popup_show");
                });
                $(".offer-wrapper .order-popup").click(function(e) {
                    $(document).mouseup(function (e){
                        let div = $(this).find('.t-popup__container');
                        if (!div.is(e.target)
                            && div.has(e.target).length === 0) {
                            $(".offer-wrapper .order-popup").removeClass("checked");
                        }
                    });
                });
                $(".offer-wrapper .timer-popup").click(function(e) {
                    $(document).mouseup(function (e){
                        let div = $(this).find('.t-popup__container');
                        if (!div.is(e.target)
                            && div.has(e.target).length === 0) {
                            $(".offer-wrapper .timer-popup").removeClass("checked");
                        }
                    });
                });
                $(".offer-wrapper .t-popup__close").click(function(e) {
                    $(this).parent().removeClass("checked");
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                function getTimeRemaining(endtime) {
                    var t = Date.parse(endtime) - Date.parse(new Date());
                    var seconds = Math.floor((t / 1000) % 60);
                    var minutes = Math.floor((t / 1000 / 60) % 60);
                    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
                    var days = Math.floor(t / (1000 * 60 * 60 * 24));
                    return {
                        'total': t,
                        'days': days,
                        'hours': hours,
                        'minutes': minutes,
                        'seconds': seconds
                    };
                }

                let clocks = document.querySelectorAll('.timer');

                clocks.forEach(function(elem) {
                    function initializeClock(endtime) {
                        var clock = elem;
                        if (!clock) {
                            return;
                        }
                        var daysSpan = clock.querySelector('.t415__days');
                        var hoursSpan = clock.querySelector('.t415__hours');
                        var minutesSpan = clock.querySelector('.t415__minutes');
                        var secondsSpan = clock.querySelector('.t415__seconds');

                        function updateClock() {
                            var t = getTimeRemaining(endtime);
                            if (t.days >= 100) {
                                daysSpan.innerHTML = t.days;
                            } else {
                                daysSpan.innerHTML = ('0' + t.days).slice(-2);
                            }
                            hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
                            minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
                            secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
                            if (t.total <= 0) {
                                clearInterval(timeinterval);
                            }
                        }
                        updateClock();
                        var timeinterval = setInterval(updateClock, 1000);
                    }
                    let deadline = new Date(Date.parse(new Date()) + 1 * 24 * 60 * 60 * 1000);
                    initializeClock(deadline);
                });
            });
        </script>
        <!-- Секция товара ОКОНЧАНИЕ -->
        <div id="rec158821723" class="r t-rec t-rec_pt_0" style="padding-top:0px; " data-animationappear="off" data-record-type="698">
            <!-- t698 -->
            <!-- cover -->
            <div class="t-cover" id="recorddiv158821723" bgimgfield="img" style="height:100vh; background-image:url('img/Seafoods_Butterbrot_.jpg');">
                <div class="t-cover__carrier" id="coverCarry158821723" data-content-cover-id="158821723" data-content-cover-bg="img/Seafoods_Butterbrot_.jpg" data-content-cover-height="100vh" data-content-cover-parallax="" style="height:100vh;background-attachment:scroll; "></div>
                <div class="t-cover__filter" style="height:100vh;background-image: -moz-linear-gradient(top, rgba(41,34,28,0.40), rgba(0,0,0,0.20));background-image: -webkit-linear-gradient(top, rgba(41,34,28,0.40), rgba(0,0,0,0.20));background-image: -o-linear-gradient(top, rgba(41,34,28,0.40), rgba(0,0,0,0.20));background-image: -ms-linear-gradient(top, rgba(41,34,28,0.40), rgba(0,0,0,0.20));background-image: linear-gradient(top, rgba(41,34,28,0.40), rgba(0,0,0,0.20));filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#9929221c', endColorstr='#cc000000');"></div>
                <div class="t698">
                    <div class="t-container ">
                        <div class="t-width t-width_8 t698__mainblock">
                            <div class="t-cover__wrapper t-valign_middle" style="height:100vh;">
                                <div class="t698__mainwrapper" data-hook-content="covercontent">
                                    <div class="t698__title t-title t-title_xs" style="" field="title">
                                        <div style="color:#ffffff;" data-customstyle="yes">Акційна пропозиція 1+1=3</div>
                                     </div>
                                     <div class="t698__descr t-descr t-descr_md" style="" field="descr">
                                         <div style="font-size:24px;" data-customstyle="yes">При покупці 2-х баночек 500г икры,
                                            <br> баночка 500г в подарок!</div>
                                    </div>
                                    <div>
                                        <form id="form1" action='order.php' method='POST' class="t-form t-form_inputs-total_2 form-area">
                                            <input type="tel" name="Phone" class="t-input phone-mask" required placeholder="Ваш номер телефону – заповнюється цифрами" style="color:#000000; background-color:#ffffff; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px; margin-bottom: 20px;">
                                            <input type="text" name="Name" class="t-input name-mask" required placeholder="Ім'я - кирилиця" style="background-color:#ffffff; color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                            <input type="text" name="lastName" class="t-input last-name-mask" required placeholder="Прізвище - кирилиця" style="background-color:#ffffff; color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                            <input type="text" name="City" class="t-input city-mask" required placeholder="Місто доставки - кирилиця" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; background: #ffffff;-moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                            <input type="text" name="Department" class="t-input department-mask" required placeholder="Номер відділення НП – заповнюється цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; background: #ffffff;-moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                            <select name="Quantity" class="quantity" style="height: 60px;background-color: #ffffff;border-radius: 7px;width: 92.5%;border: 1px solid #c9c9c9;padding: 0 20px;font-size: 16px;color: #000;">
                                  <option value="Горбуш 2 по 0.5 = 1080 грн." selected>Горбуша: 2 по 0.5 = 1080 грн. + 0.5 у подарунок!</option>
                                     <option value="Кета 2 по 0.5 = 1160 грн. + 0.5 у подарунок!">Кета: 2 по 0.5 = 1160 грн. + 0.5 у подарунок!</option>
                                     <option value="Веслонос 2 по 0.5 = 1800 грн. + 0.5 у подарунок!">Веслонос: 2 по 0.5 = 1800 грн. + 0.5 у подарунок!</option>
                                      <option value="Щука 2 по 0.5 = 1000 грн. + 0.5 у подарунок!">Щука: 2 по 0.5 = 1000 грн. + 0.5 у подарунок!</option>
                                       <option value="Форель 2 по 0.5 = 1220 грн. + 0.5 у подарунок!">Форель: 2 по 0.5 = 1220 грн. + 0.5 у подарунок!</option>
                                        <option value="Чавича 2 по 0.5 = 1200 грн. + 0.5 у подарунок!">Чавича: 2 по 0.5 = 1200 грн. + 0.5 у подарунок!</option>
                                         <option value="Осетр 2 по 0.100 = 1850 грн. + 0.100 у подарунок!">Осетр: 2 по 0.100 = 1850 грн. + 0.100 у подарунок!</option>
                                                 </select>
                                            <input type="hidden" name="comm" value="Акція 1+1=3с">
                                            <input type="hidden" name="ip" value="31.128.76.48" />
                                                <label>
                    <input type="checkbox" checked="checked" required="">
                    <span></span>
                    Я згоден з політикою конфіденційності та користувальницькою угодою
                </label>
                                            <div class="t-form__submit">
                                                    <button type="submit" class="t-submit"  style="color:#ffffff;background-color:#ff1500;border-radius:7px; -moz-border-radius:7px; -webkit-border-radius:7px;">
                                                        КУПИТИ ІКРУ
                                                    </button>
                                                </div>
                                        </form>
                                    </div>
                                    <div class="t698__form-bottom-text t-text t-text_xs" field="text">Поспішайте! Пропозиція Обмежена!</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $('#rec158821723').find('.js-form-proccess').on('tildaform:aftererror', function(e) {
                    e.preventDefault();
                    t698_fixcontentheight('158821723');
                });
                $('.t698').bind('displayChanged', function() {
                    t698_fixcontentheight('158821723');
                });
            </script>
            <style>
                #rec158821723 .t-btn[data-btneffects-first],
                #rec158821723 .t-btn[data-btneffects-second],
                #rec158821723 .t-submit[data-btneffects-first],
                #rec158821723 .t-submit[data-btneffects-second] {
                    position: relative;
                    overflow: hidden;
                    -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
                }
            </style>
            <script type="text/javascript">
                $(document).ready(function() {});
            </script>
        </div>
        <div id="rec158825574" class="r t-rec t-rec_pt_75 night-theme-background active-color" style="padding-top:75px;background-color:#ffffff; " data-record-type="472" data-bg-color="#ffffff">
            <!-- T472 -->
            <div class="t472">
                <div class="t-container t-align_center">
                    <div class="t-col t-col_8 t-prefix_2">
                        <div class="t472__title t-section__title t-title t-title_md t-margin_auto text" field="title" style="">ПРО НАС
                            <br>
                        </div>
                        <div class="t472__descr t-section__descr t-descr t-descr_xxl t-margin_auto text" field="descr" style="">
                            <div style="font-size:18px;" data-customstyle="yes">Ми займаємося постачанням та видобуваємо ІКРУ для українців уже 5-й рік. За цей час ми сформували базу клієнтів, яка налічує близько 1200 клієнтів. До того ж, щотижня ми поставляємо ІКРУ до найкращих кафе та ресторанів України. Кількість постачань до місць громадського харчування налічує близько 40 різних закладів! Купуючи ІКРУ у нашому магазині, Ви робите вибір правильним, оскільки наша Ціна без накруток за приміщення та без заробітної плати працівникам. Наш маленький склад повністю обладнаний за всіма санітарно-гігієнічними вимогами. Можете бути впевнені як наш продукт, ми цінуємо своє ім'я і цінуємо кожного клієнта.</div>
                        </div>
                    </div>
                    <div class="t-row t-clear">
                        <div class="t-col t-col_4">
                            <div class="t472__blockimg t-bgimg" bgimgfield="img" data-original="img/__22.jpg" style="background: url('img/__22.jpg') center center no-repeat; background-size:cover;"></div>
                        </div>
                        <div class="t-col t-col_4">
                            <div class="t472__blockimg t-bgimg" bgimgfield="img2" data-original="img/__23.png" style="background: url('img/__23.png') center center no-repeat; background-size:cover;"></div>
                        </div>
                        <div class="t-col t-col_4">
                            <div class="t472__blockimg t-bgimg" bgimgfield="img3" data-original="img/photo5454248273238928991.jpg" style="background: url('img/photo5454248273238928991.jpg') center center no-repeat; background-size:cover;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="rec158875300" class="r t-rec t-rec_pt_75 t-rec_pb_75 night-theme-background active-color" style="padding-top:75px;padding-bottom:0;background-color:#efefef; " data-record-type="33" data-bg-color="#efefef">
            <!-- T017 -->
       
        <div id="rec158890974" class="r t-rec t-rec_pt_45 t-rec_pb_45 night-theme-background active-color" style="padding-top:45px;padding-bottom:45px;background-color:#ffffff; " data-record-type="33" data-bg-color="#ffffff">
            <!-- T017 -->
            <div class="t017">
                <div class="t-container t-align_center">
                    <div class="t-col t-col_10 t-prefix_1">
                        <div class="t017__title t-title t-title_xxs text" field="title" style="">
                            <div style="font-size:52px;" data-customstyle="yes">ПИТАННЯ, ЯКІ ЗАДАЮТЬ НАЙЧАСТІШЕ</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="rec158890906" class="r t-rec t-rec_pt_90 t-rec_pb_90 night-theme-background active-color" style="padding-top:90px;padding-bottom:90px;background-color:#ffffff; " data-animationappear="off" data-record-type="668" data-bg-color="#ffffff">
            <!-- T668-->
            <div class="t668">
                <div class="t-container">
                    <div class="t668__col t-col t-col_8 t-prefix_2" style="margin-bottom:2px;">
                        <div class="t668__accordion">
                            <div class="t668__wrapper" style="background-color: #2b2b2b;">
                                <div class="t668__header" style="">
                                    <div class="t668__title t-name t-name_xl" field="li_title__1480611044356" style="color:#ffffff;">ТЕРМІНИ ДОСТАВКИ?</div>
                                    <div class="t668__icon">
                                        <div class="t668__lines">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                                    <g transform="translate(1.000000, 1.000000)" stroke="#222222">
                                                        <path d="M0,11 L22,11"></path>
                                                        <path d="M11,0 L11,22"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="t668__circle" style="background-color: transparent;background-color:#ffffff;"></div>
                                    </div>
                                    <div class="t668__icon t668__icon-hover">
                                        <div class="t668__lines">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                                    <g transform="translate(1.000000, 1.000000)" stroke="#222222">
                                                        <path d="M0,11 L22,11"></path>
                                                        <path d="M11,0 L11,22"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="t668__circle" style="background-color: #eee;"></div>
                                    </div>
                                </div>
                                <div class="t668__content" style="">
                                    <div class="t668__textwrapper">
                                        <div class="t668__text t-descr t-descr_xs" field="li_descr__1480611044356" style="color:#ffffff;">Найчастіше доставка Новою поштою займає 1 день. Іноді у випадках доставки до селищ доставка може тривати від 1 до 2 днів..</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="t668__col t-col t-col_8 t-prefix_2" style="margin-bottom:2px;">
                        <div class="t668__accordion">
                            <div class="t668__wrapper" style="background-color: #2b2b2b;">
                                <div class="t668__header" style="">
                                    <div class="t668__title t-name t-name_xl" field="li_title__1480611048442" style="color:#ffffff;">ЯКІ СПОСОБИ ОПЛАТИ?</div>
                                    <div class="t668__icon">
                                        <div class="t668__lines">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                                    <g transform="translate(1.000000, 1.000000)" stroke="#222222">
                                                        <path d="M0,11 L22,11"></path>
                                                        <path d="M11,0 L11,22"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="t668__circle" style="background-color: transparent;background-color:#ffffff;"></div>
                                    </div>
                                    <div class="t668__icon t668__icon-hover">
                                        <div class="t668__lines">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                                    <g transform="translate(1.000000, 1.000000)" stroke="#222222">
                                                        <path d="M0,11 L22,11"></path>
                                                        <path d="M11,0 L11,22"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="t668__circle" style="background-color: #eee;"></div>
                                    </div>
                                </div>
                                <div class="t668__content" style="">
                                    <div class="t668__textwrapper">
                                        <div class="t668__text t-descr t-descr_xs" field="li_descr__1480611048442" style="color:#ffffff;">Ми працюємо з післяплатою Нова Пошта.
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="t668__col t-col t-col_8 t-prefix_2" style="margin-bottom:2px;">
                        <div class="t668__accordion">
                            <div class="t668__wrapper" style="background-color: #2b2b2b;">
                                <div class="t668__header" style="">
                                    <div class="t668__title t-name t-name_xl" field="li_title__1580470876827" style="color:#ffffff;">ЧОМУ У ВАС ТАКА НИЗЬКА ЦІНА?</div>
                                    <div class="t668__icon">
                                        <div class="t668__lines">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                                    <g transform="translate(1.000000, 1.000000)" stroke="#222222">
                                                        <path d="M0,11 L22,11"></path>
                                                        <path d="M11,0 L11,22"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="t668__circle" style="background-color: transparent;background-color: #ffffff;"></div>
                                    </div>
                                    <div class="t668__icon t668__icon-hover">
                                        <div class="t668__lines">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                                    <g transform="translate(1.000000, 1.000000)" stroke="#222222">
                                                        <path d="M0,11 L22,11"></path>
                                                        <path d="M11,0 L11,22"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="t668__circle" style="background-color: #eee;"></div>
                                    </div>
                                </div>
                                <div class="t668__content" style="">
                                    <div class="t668__textwrapper">
                                        <div class="t668__text t-descr t-descr_xs" field="li_descr__1580470876827" style="color: #ffffff;">У нас немає витрат, пов'язаних із дорогою орендою приміщень та великої кількості персоналу. Також, цілеспрямовано займаючись одним продуктом, ми маємо добрі умови у постачальників. Саме це дозволяє нам сформувати найнижчу ціну для покупців..</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="t668__col t-col t-col_8 t-prefix_2" style="margin-bottom:2px;">
                        <div class="t668__accordion">
                            <div class="t668__wrapper" style="background-color: #2b2b2b;">
                                <div class="t668__header" style="">
                                    <div class="t668__title t-name t-name_xl" field="li_title__1580470878519" style="color: #ffffff;">Є ЯКІСЬ ПІДОЗРИ З ПРИВОДУ ЯКОСТІ ІКРИ?</div>
                                    <div class="t668__icon">
                                        <div class="t668__lines">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                                    <g transform="translate(1.000000, 1.000000)" stroke="#222222">
                                                        <path d="M0,11 L22,11"></path>
                                                        <path d="M11,0 L11,22"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="t668__circle" style="background-color: transparent; background-color: #ffffff;"></div>
                                    </div>
                                    <div class="t668__icon t668__icon-hover">
                                        <div class="t668__lines">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                                    <g transform="translate(1.000000, 1.000000)" stroke="#222222">
                                                        <path d="M0,11 L22,11"></path>
                                                        <path d="M11,0 L11,22"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="t668__circle" style="background-color: #eee;"></div>
                                    </div>
                                </div>
                                <div class="t668__content" style="">
                                    <div class="t668__textwrapper">
                                        <div class="t668__text t-descr t-descr_xs" field="li_descr__1580470878519" style="color: #ffffff;">Ми не беремо з Вас передоплати. Ви можете оглянути товар на Новій Пошті та переконатися у якості нашої продукції. Якщо у Вас виникнуть сумніви, Ви маєте право не забирати посилку. Усі грошові витрати лягають на відправника. Чому ви нічим не ризикуєте? Ми робимо так, тому що впевнені у своєму продукті.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="t668__col t-col t-col_8 t-prefix_2" style="margin-bottom:2px;">
                        <div class="t668__accordion">
                            <div class="t668__wrapper" style="background-color: #2b2b2b;">
                                <div class="t668__header" style="">
                                    <div class="t668__title t-name t-name_xl" field="li_title__1489600117321" style="color: #ffffff;">ЧИ СВІЖА ІКРА? </div>
                                    <div class="t668__icon">
                                        <div class="t668__lines">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                                    <g transform="translate(1.000000, 1.000000)" stroke="#222222">
                                                        <path d="M0,11 L22,11"></path>
                                                        <path d="M11,0 L11,22"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="t668__circle" style="background-color: transparent; background-color: #ffffff;"></div>
                                    </div>
                                    <div class="t668__icon t668__icon-hover">
                                        <div class="t668__lines">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                                    <g transform="translate(1.000000, 1.000000)" stroke="#222222">
                                                        <path d="M0,11 L22,11"></path>
                                                        <path d="M11,0 L11,22"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="t668__circle" style="background-color: #eee;"></div>
                                    </div>
                                </div>
                                <div class="t668__content" style="">
                                    <div class="t668__textwrapper">
                                        <div class="t668__text t-descr t-descr_xs" field="li_descr__1489600117321" style="color: #ffffff;">Постачання йдуть безпосередньо від виробника. Середній термін постачання ікри від виробника до нас становить близько 7 днів. Саме свіжість продукту є нашою основною перевагою!</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function() {
                    t668_init('158890906');
                });
            </script>
        </div>
        <div id="rec158896830" class="r t-rec t-rec_pt_120 t-rec_pb_120 night-theme-background active-color" style="padding-top:120px;padding-bottom:120px;background-color:#efefef; " data-record-type="533" data-bg-color="#efefef">
            <!-- t533 -->
            <div class="t533">
                <div class="t-section__container t-container">
                    <div class="t-col t-col_12">
                        <div class="t-section__topwrapper t-align_center">
                            <div class="t-section__title t-title t-title_xs text" field="btitle">
                                <div style="font-size:52px;" data-customstyle="yes">ВІДГУКИ</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="t-container">
                    <div class="t533__row t533__separator" style="">
                        <div class="t533__col t-col t-col_4 t-align_left">
                            <div class="t533__content"> 
                                <div class="t533__textwrapper t-align_center" style=" border: 0px solid #000; background-color: #2b2b2b; ">
                                    <div class="t533__title t-name t-name_xs" style="color: #ffffff;" field="li_title__1478014727987">Людмила</div>
                                    <div class="t533__uptitle t-descr t-descr_xxs" style="color: #ffffff;" field="li_subtitle__1478014727987">5 +</div>
                                    <div class="t533__descr t-text t-text_xs" style="color: #ffffff;" field="li_descr__1478014727987">Очень вкусная икра! Брала икру кеты,качество отменное! Вкус и внешний вид отличные! Всем рекомендую!</div>
                                </div>
                                <div class="t533__imgwrapper">
                                    <div class="t533__img t-bgimg" data-original="img/__30.jpg" bgimgfield="li_img__1478014727987" style=" background-image: url('img/__30.jpg');"></div>
                                </div>
                            </div>
                        </div>
                        <div class="t533__col t-col t-col_4 t-align_left">
                            <div class="t533__content">
                                <div class="t533__textwrapper t-align_center" style=" border: 0px solid #000;background-color: #2b2b2b; ">
                                    <div class="t533__title t-name t-name_xs" style="color: #ffffff;" field="li_title__1580463102911">Анна</div>
                                    <div class="t533__uptitle t-descr t-descr_xxs" style="color: #ffffff;" field="li_subtitle__1580463102911">5 +</div>
                                    <div class="t533__descr t-text t-text_xs" style="color: #ffffff;" field="li_descr__1580463102911">Дуже професійний менеджер, максимально дав консультацію з усіх видів ікри, купила кету, дуже смачна, гості на весіллі були дуже задоволені.</div>
                                </div>
                                <div class="t533__imgwrapper">
                                    <div class="t533__img t-bgimg" data-original="img/__29.jpg" bgimgfield="li_img__1580463102911" style=" background-image: url('img/__29.jpg');"></div>
                                </div>
                            </div>
                        </div>
                        <div class="t533__col t-col t-col_4 t-align_left">
                            <div class="t533__content">
                                <div class="t533__textwrapper t-align_center" style=" border: 0px solid #000;background-color: #2b2b2b; ">
                                    <div class="t533__title t-name t-name_xs" style="color: #ffffff;" field="li_title__1580463106214">Игорь</div>
                                    <div class="t533__uptitle t-descr t-descr_xxs" style="color: #ffffff;" field="li_subtitle__1580463106214">5 +</div>
                                    <div class="t533__descr t-text t-text_xs" style="color: #ffffff;" field="li_descr__1580463106214"> Заказал икру Горбушы на сайте, перезвонили в течении 15 минут, качество супер мне очень понравилось, буду покупать ещё.
                                        <br> </div>
                                </div>
                                <div class="t533__imgwrapper">
                                    <div class="t533__img t-bgimg" data-original="img/__28.jpg" bgimgfield="li_img__1580463106214" style=" background-image: url('img/__28.jpg');"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="t533__row t533__separator" style="">
                        <div class="t533__col t-col t-col_4 t-align_left">
                            <div class="t533__content">
                                <div class="t533__textwrapper t-align_center" style=" border: 0px solid #000;background-color: #2b2b2b; ">
                                    <div class="t533__title t-name t-name_xs" style="color: #ffffff;" field="li_title__1580463082896">Антон</div>
                                    <div class="t533__uptitle t-descr t-descr_xxs" style="color: #ffffff;" field="li_subtitle__1580463082896">5 +</div>
                                    <div class="t533__descr t-text t-text_xs" style="color: #ffffff;" field="li_descr__1580463082896">Я в їх вже декілька разів замовляв. А замовляв тут місяць тому - то таких знижок тоді не було.Так шо всім раджу.</div>
                                </div>
                                <div class="t533__imgwrapper">
                                    <div class="t533__img t-bgimg" data-original="img/__27.jpg" bgimgfield="li_img__1580463082896" style=" background-image: url('img/__27.jpg');"></div>
                                </div>
                            </div>
                        </div>
                        <div class="t533__col t-col t-col_4 t-align_left">
                            <div class="t533__content">
                                <div class="t533__textwrapper t-align_center" style=" border: 0px solid #000;background-color: #2b2b2b; ">
                                    <div class="t533__title t-name t-name_xs" style="color: #ffffff;" field="li_title__1478014691630">Світлана</div>
                                    <div class="t533__uptitle t-descr t-descr_xxs" style="color: #ffffff;" field="li_subtitle__1478014691630">5 +</div>
                                    <div class="t533__descr t-text t-text_xs" style="color: #ffffff;" field="li_descr__1478014691630"> Раджу. Гарна компанія. відповідальна і швидка. Дякую за смачну ікру.
                                        <br>
                                    </div>
                                </div>
                                <div class="t533__imgwrapper">
                                    <div class="t533__img t-bgimg" data-original="img/__26.jpg" bgimgfield="li_img__1478014691630" style=" background-image: url('img/__26.jpg');"></div>
                                </div>
                            </div>
                        </div>
                        <div class="t533__col t-col t-col_4 t-align_left">
                            <div class="t533__content">
                                <div class="t533__textwrapper t-align_center" style=" border: 0px solid #000;background-color: #2b2b2b; ">
                                    <div class="t533__title t-name t-name_xs" style="color: #ffffff;" field="li_title__1478014761774">Виктория</div>
                                    <div class="t533__uptitle t-descr t-descr_xxs" style="color: #ffffff;" field="li_subtitle__1478014761774">5 +</div>
                                    <div class="t533__descr t-text t-text_xs" style="color: #ffffff;" field="li_descr__1478014761774">Отличное качество продукции. Компания супер. Покупаю постоянно только у них.</div>
                                </div>
                                <div class="t533__imgwrapper">
                                    <div class="t533__img t-bgimg" data-original="img/__25.jpg" bgimgfield="li_img__1478014761774" style=" background-image: url('img/__25.jpg');"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function() {
                    t533_equalHeight('158896830');
                });
               /* $(window).load(function() {
                    t533_equalHeight('158896830');
                });*/
                var t533_doResize;
                $(window).resize(function() {
                    if (t533_doResize) clearTimeout(t533_doResize);
                    t533_doResize = setTimeout(function() {
                        t533_equalHeight('158896830');
                    }, 200);
                });
            </script>
            <style>
                .t-review-social-links {
                    line-height: 0px;
                }
                
                .t-review-social-links__wrapper {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    -ms-flex-wrap: wrap;
                    flex-wrap: wrap;
                    width: auto;
                }
                
                .t-review-social-links {
                    margin-top: 15px;
                }
                
                .t-review-social-links__item {
                    padding: 0px 4px;
                }
                
                .t-review-social-links__item svg {
                    width: 20px;
                    height: 20px;
                }
                
                .t-review-social-links__wrapper_round .t-review-social-links__item svg {
                    width: 23px;
                    height: 23px;
                }
                
                .t-review-social-links__item:first-child {
                    padding-left: 0px;
                }
                
                @media screen and (max-width: 960px) {
                    .t-review-social-links__item {
                        margin-bottom: 3px;
                    }
                }
                
                @media screen and (max-width: 640px) {
                    .t-review-social-links {
                        margin-top: 13px;
                    }
                    .t-review-social-links__item {
                        padding: 0px 3px;
                    }
                    .t-review-social-links__item svg {
                        width: 17px;
                        height: 17px;
                    }
                    .t-review-social-links__wrapper_round .t-review-social-links__item svg {
                        width: 20px;
                        height: 20px;
                    }
                }
            </style>
            <script>
                function t_reviews_social_init(recid) {
                    var rec = $('#rec' + recid);
                    var social = rec.find('.t-review-social-links');
                    if (social !== 'undefined' && social.length > 0) {
                        social.each(function() {
                            var $this = $(this);
                            var socialAttr = $this.attr('data-social-links');
                            var socialWrapper = $this.find('.t-review-social-links__wrapper');
                            var links;
                            $this.removeAttr('data-social-links');
                            if (typeof socialAttr !== 'undefined') {
                                links = socialAttr.split(',');
                                links.forEach(function(item) {
                                    t_reviews_social_add_item(item, socialWrapper);
                                });
                            }
                        });
                    }
                }

                function t_reviews_social_add_item(item, socialWrapper) {
                    var fill = socialWrapper.attr('data-social-color') || '#000000';
                    var fb = '';
                    fb = '<div class="t-review-social-links__item">';
                    fb += '<a href="' + item + '" target="_blank">';
                    if (socialWrapper.hasClass('t-review-social-links__wrapper_round')) {
                        fb += '<svg class="t-review-social-links__svg" version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve" fill="' + fill + '"><desc>Facebook</desc><path d="M47.761,24c0,13.121-10.638,23.76-23.758,23.76C10.877,47.76,0.239,37.121,0.239,24c0-13.124,10.638-23.76,23.764-23.76C37.123,0.24,47.761,10.876,47.761,24 M20.033,38.85H26.2V24.01h4.163l0.539-5.242H26.2v-3.083c0-1.156,0.769-1.427,1.308-1.427h3.318V9.168L26.258,9.15c-5.072,0-6.225,3.796-6.225,6.224v3.394H17.1v5.242h2.933V38.85z"></path></svg>';
                    } else {
                        fb += '<svg class="t-review-social-links__svg" xmlns="https://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 48 48" fill="' + fill + '"><path d="M21.1 7.8C22.5 6.5 24.5 6 26.4 6h6v6.3h-3.9c-.8-.1-1.6.6-1.8 1.4v4.2h5.7c-.1 2-.4 4.1-.7 6.1h-5v18h-7.4V24h-3.6v-6h3.6v-5.9c.1-1.7.7-3.3 1.8-4.3z"/></svg>';
                    }
                    fb += '</a>';
                    fb += '</div>';
                    var twi = '';
                    twi += '<div class="t-review-social-links__item">';
                    twi += '<a href="' + item + '" target="_blank">';
                    if (socialWrapper.hasClass('t-review-social-links__wrapper_round')) {
                        twi += '<svg class="t-review-social-links__svg" xmlns="https://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48" fill="' + fill + '"><path d="M47.762 24c0 13.121-10.639 23.76-23.761 23.76S.24 37.121.24 24C.24 10.876 10.879.24 24.001.24S47.762 10.876 47.762 24m-9.731-11.625a12.148 12.148 0 0 1-3.87 1.481 6.08 6.08 0 0 0-4.455-1.926 6.095 6.095 0 0 0-6.093 6.095c0 .478.054.941.156 1.388a17.302 17.302 0 0 1-12.559-6.367 6.066 6.066 0 0 0-.825 3.064 6.088 6.088 0 0 0 2.711 5.07 6.075 6.075 0 0 1-2.761-.762v.077c0 2.951 2.1 5.414 4.889 5.975a6.079 6.079 0 0 1-2.752.106 6.104 6.104 0 0 0 5.692 4.232 12.226 12.226 0 0 1-7.567 2.607c-.492 0-.977-.027-1.453-.084a17.241 17.241 0 0 0 9.34 2.736c11.209 0 17.337-9.283 17.337-17.337 0-.263-.004-.527-.017-.789a12.358 12.358 0 0 0 3.039-3.152 12.138 12.138 0 0 1-3.498.958 6.089 6.089 0 0 0 2.686-3.372"/></svg>';
                    } else {
                        twi += '<svg class="t-review-social-links__svg" xmlns="https://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 48 48" fill="' + fill + '"><path d="M41.8 12.7c-1.3.6-2.8 1-4.2 1.1 1.5-1 2.6-2.3 3.2-4-1.5.8-2.9 1.5-4.7 1.8-1.3-1.5-3.2-2.3-5.3-2.3-4 0-7.3 3.2-7.3 7.3 0 .6 0 1.1.2 1.6-6-.3-11.3-3.2-15.1-7.6-.6 1.1-1 2.3-1 3.7 0 2.6 1.3 4.7 3.2 6-1.1 0-2.3-.3-3.2-1v.2c0 3.6 2.4 6.5 5.8 7.1-.6.2-1.3.3-1.9.3-.5 0-1 0-1.3-.2 1 2.9 3.6 5 6.8 5-2.4 1.9-5.7 3.1-9.1 3.1-.6 0-1.1 0-1.8-.2 3.2 2.1 7 3.2 11.2 3.2 13.4 0 20.7-11 20.7-20.7v-1c1.7-.7 2.8-2 3.8-3.4z"/></svg>';
                    }
                    twi += '</a>';
                    twi += '</div>';
                    var vk = '';
                    vk += '<div class="t-review-social-links__item">';
                    vk += '<a href="' + item + '" target="_blank">';
                    if (socialWrapper.hasClass('t-review-social-links__wrapper_round')) {
                        vk += '<svg class="t-review-social-links__svg" xmlns="https://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48" fill="' + fill + '"><path d="M47.761 24c0 13.121-10.639 23.76-23.76 23.76C10.878 47.76.239 37.121.239 24 .239 10.877 10.878.24 24.001.24c13.121 0 23.76 10.637 23.76 23.76m-12.502 4.999c-2.621-2.433-2.271-2.041.89-6.25 1.923-2.562 2.696-4.126 2.45-4.796-.227-.639-1.64-.469-1.64-.469l-4.71.029s-.351-.048-.609.106c-.249.151-.414.505-.414.505s-.742 1.982-1.734 3.669c-2.094 3.559-2.935 3.747-3.277 3.524-.796-.516-.597-2.068-.597-3.171 0-3.449.522-4.887-1.02-5.259-.511-.124-.887-.205-2.195-.219-1.678-.016-3.101.007-3.904.398-.536.263-.949.847-.697.88.31.041 1.016.192 1.388.699.484.656.464 2.131.464 2.131s.282 4.056-.646 4.561c-.632.347-1.503-.36-3.37-3.588-.958-1.652-1.68-3.481-1.68-3.481s-.14-.344-.392-.527c-.299-.222-.722-.298-.722-.298l-4.469.018s-.674-.003-.919.289c-.219.259-.018.752-.018.752s3.499 8.104 7.573 12.23c3.638 3.784 7.764 3.36 7.764 3.36h1.867s.566.113.854-.189c.265-.288.256-.646.256-.646s-.034-2.512 1.129-2.883c1.15-.36 2.624 2.429 4.188 3.497 1.182.812 2.079.633 2.079.633l4.181-.056s2.186-.136 1.149-1.858c-.197-.139-.715-1.269-3.219-3.591"/></svg>';
                    } else {
                        vk += '<svg class="t-review-social-links__svg" xmlns="https://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 48 48" fill="' + fill + '"><path d="M41.2 22.2c.6-.8 1.1-1.5 1.5-2 2.7-3.5 3.8-5.8 3.5-6.8l-.2-.2c-.1-.1-.3-.3-.7-.4-.4-.1-.9-.1-1.5-.1h-7.2c-.2 0-.3 0-.3.1 0 0-.1 0-.1.1v.1c-.1 0-.2.1-.3.2-.1.1-.2.2-.2.4-.7 1.9-1.5 3.6-2.5 5.2-.6 1-1.1 1.8-1.6 2.5s-.9 1.2-1.2 1.5c-.3.3-.6.6-.9.8-.2.3-.4.4-.5.4-.1 0-.3-.1-.4-.1-.2-.1-.4-.3-.5-.6-.1-.2-.2-.5-.3-.9 0-.4-.1-.7-.1-.9v-4c0-.7 0-1.2.1-1.6v-1.3c0-.4 0-.8-.1-1.1-.1-.3-.1-.5-.2-.7-.1-.2-.3-.4-.5-.6-.2-.1-.5-.2-.8-.3-.8-.2-1.9-.3-3.1-.3-2.9 0-4.7.2-5.5.6-.3.2-.6.4-.9.7-.3.3-.3.5-.1.6.9.1 1.6.5 2 1l.1.3c.1.2.2.6.3 1.1.1.5.2 1.1.2 1.7.1 1.1.1 2.1 0 2.9-.1.8-.1 1.4-.2 1.9-.1.4-.2.8-.3 1.1-.1.3-.2.4-.3.5 0 .1-.1.1-.1.1-.1-.1-.4-.1-.6-.1-.2 0-.5-.1-.8-.3-.3-.2-.6-.5-1-.9-.3-.4-.7-.9-1.1-1.6-.4-.7-.8-1.5-1.3-2.4l-.4-.7c-.2-.4-.5-1.1-.9-1.9-.4-.8-.8-1.6-1.1-2.4-.1-.3-.3-.6-.6-.7l-.1-.1c-.1-.1-.2-.1-.4-.2s-.3-.1-.5-.2H3.2c-.6 0-1.1.1-1.3.4l-.1.1c0 .1-.1.2-.1.4s0 .4.1.6c.9 2.2 1.9 4.3 3 6.3s2 3.6 2.8 4.9c.8 1.2 1.6 2.4 2.4 3.5.8 1.1 1.4 1.8 1.7 2.1.3.3.5.5.6.7l.6.6c.4.4.9.8 1.6 1.3.7.5 1.5 1 2.4 1.5.9.5 1.9.9 3 1.2 1.2.3 2.3.4 3.4.4H26c.5 0 .9-.2 1.2-.5l.1-.1c.1-.1.1-.2.2-.4s.1-.4.1-.6c0-.7 0-1.3.1-1.8s.2-.9.4-1.2c.1-.3.3-.5.5-.7.2-.2.3-.3.4-.3.1 0 .1-.1.2-.1.4-.1.8 0 1.3.4s1 .8 1.4 1.3c.4.5 1 1.1 1.6 1.8.6.7 1.2 1.2 1.6 1.5l.5.3c.3.2.7.4 1.2.5.5.2.9.2 1.3.1l5.9-.1c.6 0 1-.1 1.4-.3.3-.2.5-.4.6-.6.1-.2.1-.5 0-.8-.1-.3-.1-.5-.2-.6-.1-.1-.1-.2-.2-.3-.8-1.4-2.2-3.1-4.4-5.1-1-.9-1.6-1.6-1.9-1.9-.5-.6-.6-1.2-.3-1.9.3-.5 1-1.5 2.2-3z"/></svg>';
                    }
                    vk += '</a>';
                    vk += '</div>';
                    var ok = '';
                    ok += '<div class="t-review-social-links__item">';
                    ok += '<a href="' + item + '" target="_blank">';
                    if (socialWrapper.hasClass('t-review-social-links__wrapper_round')) {
                        ok += '<svg class="t-review-social-links__svg" xmlns="https://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="' + fill + '"><path d="M15.001 29.997C6.715 29.997 0 23.28 0 14.997 0 6.714 6.715 0 15.001 0 23.282-.001 30 6.713 30 14.998c0 8.283-6.716 14.999-14.998 14.999zM15 9.163c.986 0 1.787.803 1.787 1.787 0 .987-.801 1.788-1.787 1.788a1.788 1.788 0 0 1 0-3.574zm4.317 1.787a4.322 4.322 0 0 0-4.317-4.319 4.323 4.323 0 0 0-4.319 4.32A4.322 4.322 0 0 0 15 15.266a4.32 4.32 0 0 0 4.316-4.317zm-2.57 7.84a8.126 8.126 0 0 0 2.507-1.038 1.266 1.266 0 0 0-1.347-2.143 5.482 5.482 0 0 1-5.816 0 1.265 1.265 0 0 0-1.348 2.143c.78.49 1.628.838 2.507 1.038l-2.414 2.414a1.267 1.267 0 0 0 .894 2.16c.324 0 .649-.125.895-.37l2.371-2.373 2.373 2.373a1.265 1.265 0 0 0 1.788-1.789l-2.41-2.415z"/></svg>';
                    } else {
                        ok += '<svg class="t-review-social-links__svg" xmlns="https://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="' + fill + '"><path d="M12.498 6.2a1.932 1.932 0 0 0-1.929 1.93 1.932 1.932 0 0 0 3.861 0 1.932 1.932 0 0 0-1.932-1.93zm0 6.592a4.668 4.668 0 0 1-4.66-4.662 4.665 4.665 0 0 1 4.66-4.663 4.666 4.666 0 0 1 4.664 4.663 4.669 4.669 0 0 1-4.664 4.662zm-1.884 3.801a8.75 8.75 0 0 1-2.708-1.12 1.367 1.367 0 1 1 1.455-2.312 5.925 5.925 0 0 0 6.276 0 1.367 1.367 0 1 1 1.456 2.311c-.832.522-1.749.9-2.707 1.12l2.606 2.608a1.367 1.367 0 0 1-1.933 1.931L12.5 18.569l-2.561 2.562a1.368 1.368 0 0 1-1.934-1.934l2.609-2.604z"/></svg>';
                    }
                    ok += '</a>';
                    ok += '</div>';
                    var behance = '';
                    behance += '<div class="t-review-social-links__item">';
                    behance += '<a href="' + item + '" target="_blank">';
                    if (socialWrapper.hasClass('t-review-social-links__wrapper_round')) {
                        behance += '<svg class="t-review-social-links__svg" xmlns="https://www.w3.org/2000/svg" width="30" height="30" viewBox="-455 257 48 48" fill="' + fill + '"><path d="M-421.541 278.608c-3.095 0-3.526 3.09-3.526 3.09h6.581c0-.001.042-3.09-3.055-3.09zM-436.472 281.697h-5.834v5.356h5.165c.088 0 .219.002.374 0 .831-.02 2.406-.261 2.406-2.604-.001-2.78-2.111-2.752-2.111-2.752z"/><path d="M-430.984 257C-444.248 257-455 267.75-455 281.014c0 13.263 10.752 24.016 24.016 24.016 13.262 0 24.014-10.752 24.014-24.016-.001-13.263-10.754-24.014-24.014-24.014zm5.054 14.756h8.267v2.467h-8.267v-2.467zm-4.179 12.943c0 6.116-6.364 5.914-6.364 5.914h-10.428v-20.038h10.428c3.168 0 5.668 1.75 5.668 5.335s-3.057 3.813-3.057 3.813c4.031 0 3.753 4.976 3.753 4.976zm15.466-.328h-10.384c0 3.722 3.526 3.487 3.526 3.487 3.329 0 3.213-2.156 3.213-2.156h3.527c0 5.722-6.859 5.33-6.859 5.33-8.227 0-7.698-7.661-7.698-7.661s-.008-7.698 7.698-7.698c8.112.001 6.977 8.698 6.977 8.698z"/><path d="M-435.055 276.221c0-2.084-1.417-2.084-1.417-2.084H-442.306v4.471h5.472c.944 0 1.779-.304 1.779-2.387z"/></svg>';
                    } else {
                        behance += '<svg class="t-review-social-links__svg" xmlns="https://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="' + fill + '"><path d="M22.4 7.5h-5.6V6.1h5.6v1.4zm-9.3 5.7c.4.6.5 1.2.5 2s-.2 1.6-.6 2.2c-.3.4-.6.8-1 1.1-.4.3-1 .6-1.6.7-.6.1-1.3.2-2 .2H2.3V5.6H9c1.7 0 2.9.5 3.6 1.5.4.6.6 1.3.6 2.1s-.2 1.5-.6 2c-.2.3-.6.6-1.1.8.7.2 1.2.7 1.6 1.2zM5.5 11h2.9c.6 0 1.1-.1 1.5-.3.4-.2.6-.6.6-1.2s-.2-1.1-.7-1.3C9.3 8.1 8.7 8 8.1 8H5.5v3zm5.2 4c0-.7-.3-1.2-.9-1.5-.3-.2-.8-.2-1.4-.2h-3V17h2.9c.6 0 1.1-.1 1.4-.2.7-.3 1-.9 1-1.8zm13.8-2.2c.1.5.1 1.1.1 2h-7.2c0 1 .4 1.7 1 2.1.4.3.9.4 1.4.4.6 0 1.1-.1 1.4-.5.2-.2.4-.4.5-.7h2.6c-.1.6-.4 1.2-1 1.8-.9 1-2.1 1.4-3.7 1.4-1.3 0-2.5-.4-3.5-1.2-1-.8-1.5-2.1-1.5-4 0-1.7.5-3 1.4-4 .9-.9 2.1-1.4 3.5-1.4.9 0 1.6.2 2.3.5.7.3 1.3.8 1.7 1.5.6.6.8 1.3 1 2.1zm-2.7.2c0-.7-.3-1.2-.7-1.6-.4-.4-.9-.5-1.5-.5-.7 0-1.2.2-1.5.6-.4.4-.6.9-.7 1.5h4.4z"/></svg>';
                    }
                    behance += '</a>';
                    behance += '</div>';
                    var vimeo = '';
                    vimeo += '<div class="t-review-social-links__item">';
                    vimeo += '<a href="' + item + '" target="_blank">';
                    if (socialWrapper.hasClass('t-review-social-links__wrapper_round')) {
                        vimeo += '<svg class="t-review-social-links__svg" xmlns="https://www.w3.org/2000/svg" width="30" height="30" viewBox="-455 257 48 48" fill="' + fill + '"><path d="M-431 256.971c13.267 0 24.023 10.755 24.023 24.023s-10.755 24.023-24.023 24.023-24.023-10.755-24.023-24.023 10.756-24.023 24.023-24.023zm-12.262 19.146l.996 1.306s2.054-1.619 2.739-.81c.685.81 3.299 10.584 4.171 12.387.761 1.581 2.862 3.672 5.166 2.179 2.302-1.493 9.959-8.03 11.329-15.749 1.369-7.717-9.213-6.1-10.335.623 2.802-1.682 4.297.683 2.863 3.362-1.431 2.676-2.739 4.421-3.424 4.421-.683 0-1.209-1.791-1.992-4.92-.81-3.236-.804-9.064-4.17-8.403-3.171.623-7.343 5.604-7.343 5.604z"/></svg>';
                    } else {
                        vimeo += '<svg class="t-review-social-links__svg" xmlns="https://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 48 48" fill="' + fill + '"><path d="M2.9 16.5l1.6 2s3.2-2.5 4.3-1.3c1.1 1.3 5.2 16.5 6.5 19.3 1.2 2.5 4.5 5.7 8.1 3.4S39 27.4 41.1 15.3s-14.4-9.5-16.1 1c4.4-2.6 6.7 1.1 4.5 5.3s-4.3 6.9-5.3 6.9c-1.1 0-1.9-2.8-3.1-7.7-1.3-5.1-1.3-14.2-6.5-13.1-5.2 1-11.7 8.8-11.7 8.8z"/></svg>';
                    }
                    vimeo += '</a>';
                    vimeo += '</div>';
                    var youtube = '';
                    youtube += '<div class="t-review-social-links__item">';
                    youtube += '<a href="' + item + '" target="_blank">';
                    if (socialWrapper.hasClass('t-review-social-links__wrapper_round')) {
                        youtube += '<svg class="t-review-social-links__svg" xmlns="https://www.w3.org/2000/svg" width="30" height="30" viewBox="-455 257 48 48" fill="' + fill + '"><path d="M-431 257.013c13.248 0 23.987 10.74 23.987 23.987s-10.74 23.987-23.987 23.987-23.987-10.74-23.987-23.987 10.739-23.987 23.987-23.987zm11.815 18.08c-.25-1.337-1.363-2.335-2.642-2.458-3.054-.196-6.119-.355-9.178-.357-3.059-.002-6.113.154-9.167.347-1.284.124-2.397 1.117-2.646 2.459a40.163 40.163 0 0 0 0 11.672c.249 1.342 1.362 2.454 2.646 2.577 3.055.193 6.107.39 9.167.39 3.058 0 6.126-.172 9.178-.37 1.279-.124 2.392-1.269 2.642-2.606a39.769 39.769 0 0 0 0-11.654zm-14.591 9.342v-7.115l6.627 3.558-6.627 3.557z"/></svg>';
                    } else {
                        youtube += '<svg class="t-review-social-links__svg" xmlns="https://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 48 48" fill="' + fill + '"><path d="M43.9 15.3c-.4-3.1-2.2-5-5.3-5.3-3.6-.3-11.4-.5-15-.5-7.3 0-10.6.2-14.1.5-3.3.3-4.8 1.8-5.4 4.9-.4 2.1-.6 4.1-.6 8.9 0 4.3.2 6.9.5 9.2.4 3.1 2.5 4.8 5.7 5.1 3.6.3 10.9.5 14.4.5s11.2-.2 14.7-.6c3.1-.4 4.6-2 5.1-5.1 0 0 .5-3.3.5-9.1 0-3.3-.2-6.4-.5-8.5zM19.7 29.8V18l11.2 5.8-11.2 6z"/></svg>';
                    }
                    youtube += '</a>';
                    youtube += '</div>';
                    var instagram = '';
                    instagram += '<div class="t-review-social-links__item">';
                    instagram += ' <a href="' + item + '" target="_blank">';
                    if (socialWrapper.hasClass('t-review-social-links__wrapper_round')) {
                        instagram += '<svg class="t-review-social-links__svg" xmlns="https://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="' + fill + '"><path d="M15 11.014a3.986 3.986 0 1 0 .001 7.971A3.986 3.986 0 0 0 15 11.014zm0 6.592A2.604 2.604 0 0 1 12.393 15 2.604 2.604 0 0 1 15 12.394 2.614 2.614 0 0 1 17.607 15 2.604 2.604 0 0 1 15 17.606zM19.385 9.556a.915.915 0 0 0-.92.921c0 .512.407.919.92.919a.914.914 0 0 0 .921-.919.916.916 0 0 0-.921-.921z"/><path d="M15.002.15C6.798.15.149 6.797.149 15c0 8.201 6.649 14.85 14.853 14.85 8.199 0 14.85-6.648 14.85-14.85 0-8.203-6.651-14.85-14.85-14.85zm7.664 18.115c0 2.423-1.979 4.401-4.416 4.401h-6.5c-2.438 0-4.417-1.979-4.417-4.386v-6.546c0-2.422 1.978-4.4 4.417-4.4h6.5c2.438 0 4.416 1.978 4.416 4.4v6.531z"/></svg>';
                    } else {
                        instagram += '<svg class="t-review-social-links__svg" xmlns="https://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="' + fill + '"><path d="M16.396 3.312H8.604c-2.921 0-5.292 2.371-5.292 5.273v7.846c0 2.886 2.371 5.256 5.292 5.256h7.791c2.922 0 5.292-2.37 5.292-5.274V8.586c.001-2.903-2.37-5.274-5.291-5.274zM7.722 12.5a4.778 4.778 0 1 1 9.554 0 4.778 4.778 0 0 1-9.554 0zm10.034-4.318c-.615 0-1.104-.487-1.104-1.102s.488-1.103 1.104-1.103c.614 0 1.102.488 1.102 1.103s-.488 1.102-1.102 1.102z" /><path d="M12.5 9.376A3.12 3.12 0 0 0 9.376 12.5a3.12 3.12 0 0 0 3.124 3.124 3.12 3.12 0 0 0 3.124-3.124A3.133 3.133 0 0 0 12.5 9.376z"/></svg>';
                    }
                    instagram += '</a>';
                    instagram += '</div>';
                    var pinterest = '';
                    pinterest += '<div class="t-review-social-links__item">';
                    pinterest += '<a href="' + item + '" target="_blank">';
                    if (socialWrapper.hasClass('t-review-social-links__wrapper_round')) {
                        pinterest += '<svg class="t-review-social-links__svg" xmlns="https://www.w3.org/2000/svg" width="30" height="30" viewBox="-455 257 48 48" fill="' + fill + '"><path d="M-407 281c0 13.254-10.746 24-23.999 24-13.257 0-24.003-10.746-24.003-24 0-13.256 10.746-24 24.003-24 13.253 0 23.999 10.744 23.999 24zm-30.628 14.811c.027.205.29.254.409.1.17-.223 2.365-2.932 3.111-5.639.211-.768 1.212-4.738 1.212-4.738.599 1.145 2.349 2.148 4.21 2.148 5.539 0 9.297-5.049 9.297-11.809 0-5.111-4.329-9.873-10.909-9.873-8.186 0-12.314 5.871-12.314 10.766 0 2.963 1.122 5.6 3.527 6.582.395.162.749.006.863-.43.08-.303.268-1.065.353-1.385.114-.432.07-.582-.248-.959-.694-.818-1.138-1.879-1.138-3.381 0-4.353 3.259-8.252 8.484-8.252 4.627 0 7.169 2.828 7.169 6.603 0 4.969-2.198 9.162-5.461 9.162-1.804 0-3.153-1.49-2.722-3.32.518-2.182 1.522-4.537 1.522-6.113 0-1.41-.758-2.588-2.324-2.588-1.843 0-3.323 1.908-3.323 4.461 0 1.627.55 2.727.55 2.727l-2.217 9.391c-.657 2.787-.099 6.203-.051 6.547z"/></svg>';
                    } else {
                        pinterest += '<svg class="t-review-social-links__svg" xmlns="https://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 48 48" fill="' + fill + '"><path d="M24.9 5.5c4.2 0 7.7 1.3 10.5 3.9s4.1 5.7 4.1 9.2c0 4.6-1.2 8.4-3.5 11.3-2.3 3-5.3 4.5-8.9 4.5-1.2 0-2.3-.3-3.4-.9s-1.8-1.3-2.2-2c-.9 3.5-1.4 5.6-1.6 6.3-.7 2.4-2 4.9-4.1 7.5-.2.2-.4.2-.5-.1-.5-3.5-.5-6.4.1-8.7l2.9-12.6c-.5-.9-.7-2.1-.7-3.6 0-1.7.4-3.1 1.3-4.2s1.9-1.7 3.2-1.7c1 0 1.8.3 2.3 1 .5.6.8 1.5.8 2.4 0 .6-.1 1.4-.3 2.3-.2.9-.5 1.9-.9 3.1s-.6 2.1-.8 2.8c-.3 1.2-.1 2.2.7 3.1.7.9 1.7 1.3 3 1.3 2.1 0 3.8-1.2 5.2-3.6 1.4-2.4 2-5.3 2-8.7 0-2.6-.8-4.7-2.5-6.3-1.7-1.6-4-2.4-7-2.4-3.4 0-6.1 1.1-8.2 3.2S13 17.4 13 20.4c0 1.8.5 3.3 1.5 4.5.3.4.4.8.3 1.2 0 .1-.1.3-.2.6-.1.4-.1.6-.2.7 0 .1-.1.4-.2.6-.1.3-.3.4-.4.4h-.6c-3.1-1.3-4.7-4.2-4.7-8.7 0-3.6 1.5-6.9 4.4-9.9s7-4.3 12-4.3z"/></svg>';
                    }
                    pinterest += '</a>';
                    pinterest += '</div>';
                    var linkedin = '';
                    linkedin += '<div class="t-review-social-links__item">';
                    linkedin += '<a href="' + item + '" target="_blank">';
                    if (socialWrapper.hasClass('t-review-social-links__wrapper_round')) {
                        linkedin += '<svg class="t-review-social-links__svg" xmlns="https://www.w3.org/2000/svg" width="30" height="30" viewBox="-615 1477 48 48" fill="' + fill + '"><path d="M-566.999 1501c0 13.256-10.746 24-24 24-13.256 0-24.002-10.744-24.002-24 0-13.254 10.746-24 24.002-24 13.254 0 24 10.746 24 24zm-38.507 13.975h6.22v-20.004h-6.22v20.004zm3.11-22.739a3.606 3.606 0 0 0 0-7.211 3.603 3.603 0 0 0-3.604 3.605 3.604 3.604 0 0 0 3.604 3.606zm26.396 11.766c0-5.387-1.163-9.529-7.454-9.529-3.023 0-5.054 1.658-5.884 3.231h-.085v-2.733h-5.964v20.004h6.216v-9.896c0-2.609.493-5.137 3.729-5.137 3.186 0 3.232 2.984 3.232 5.305v9.729h6.21v-10.974z"/></svg>';
                    } else {
                        linkedin += '<svg class="t-review-social-links__svg" xmlns="https://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 48 48" fill="' + fill + '"><path d="M42.3 23.1v13.5h-7.9V24c0-3.2-1.1-5.3-4-5.3-2.2 0-3.5 1.5-4 2.9-.2.5-.3 1.2-.3 1.9v13.2h-7.9s.1-21.4 0-23.6h7.9v3.3s0 .1-.1.1h.1v-.1c1-1.6 2.9-3.9 7.1-3.9 5.2-.1 9.1 3.3 9.1 10.6zM10.1 1.6c-2.7 0-4.4 1.8-4.4 4.1S7.4 9.8 10 9.8h.1c2.7 0 4.4-1.8 4.4-4.1s-1.7-4.1-4.4-4.1zm-3.9 35H14V13H6.2v23.6z"/></svg>';
                    }
                    linkedin += '</a>';
                    linkedin += '</div>';
                    var soundcloud = '';
                    soundcloud += '<div class="t-review-social-links__item">';
                    soundcloud += '<a href="' + item + '" target="_blank">';
                    if (socialWrapper.hasClass('t-review-social-links__wrapper_round')) {
                        soundcloud += '<svg class="t-review-social-links__svg" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 48 48" fill="' + fill + '"><defs><path id="a" d="M0 0h48v48H0V0z"/></defs><g fill-rule="evenodd"><path d="M38.206 22.171c-.635 0-1.241.129-1.793.36-.369-4.177-3.871-7.453-8.144-7.453a8.28 8.28 0 0 0-2.965.553c-.35.136-.442.275-.446.546v14.709a.545.545 0 0 0 .5.531c.013.002 12.848 0 12.848 0 2.56 0 4.634-2.051 4.634-4.611a4.634 4.634 0 0 0-4.634-4.635zM24.17 16.237a.5.5 0 0 0-.582.043.517.517 0 0 0-.189.392v.053l-.21 10.388.107 1.92.103 1.869a.514.514 0 0 0 .51.505.515.515 0 0 0 .51-.509v.004l.228-3.79-.227-10.44a.517.517 0 0 0-.25-.435zm-1.364 14.72v-.001.001-.002.002zm-.215-13.813a.47.47 0 0 0-.264-.081.486.486 0 0 0-.478.477l-.001.09-.18 9.48.181 3.847.001.016a.48.48 0 0 0 .477.458c.246 0 .248-.054.335-.14a.486.486 0 0 0 .144-.336l.02-.38.181-3.463-.201-9.573a.487.487 0 0 0-.215-.395zm-1.853 1.479a.447.447 0 0 0-.446.444l-.2 8.044.2 3.87c.005.465.2.442.446.442.245 0 .44.023.446-.444v.003l.223-3.87-.223-8.046a.447.447 0 0 0-.446-.443zm-1.577-.273a.416.416 0 0 0-.414.412l-.219 8.349.219 3.895c.005.228.187.41.414.41a.416.416 0 0 0 .413-.412v.002l.246-3.895-.246-8.35a.416.416 0 0 0-.413-.411zm-1.184 12.693v-.002.002zm0-12.5a.385.385 0 0 0-.382-.38.384.384 0 0 0-.381.38l-.238 8.567.238 3.932c.006.21.173.377.381.377a.385.385 0 0 0 .382-.378l.268-3.931-.268-8.568zm-1.935-.069a.354.354 0 0 0-.35.347l-.256 8.288.257 3.957c.006.193.16.346.35.346a.354.354 0 0 0 .349-.347v.002l.29-3.958-.29-8.288a.355.355 0 0 0-.35-.347zm-1.564.691a.322.322 0 0 0-.318.315l-.275 7.65.276 3.998a.321.321 0 0 0 .317.313c.17 0 .31-.138.317-.315v.002l.312-3.999-.312-7.65a.323.323 0 0 0-.317-.314zM12.974 20.6a.29.29 0 0 0-.285.282l-.295 6.226.295 4.023a.29.29 0 0 0 .285.281.292.292 0 0 0 .285-.282v.001l.333-4.023-.333-6.226a.292.292 0 0 0-.285-.282zm-1.264 2.678a.258.258 0 0 0-.253-.248.257.257 0 0 0-.253.25l-.314 3.826.314 4.024c.008.142.117.25.253.25a.259.259 0 0 0 .253-.25l.356-4.024-.356-3.828zm0 7.851v.001zm-1.757-8.366a.226.226 0 0 0-.221.217l-.333 4.126.333 3.99c.009.124.104.217.22.217s.21-.093.221-.216l.4-3.991-.4-4.126c-.01-.123-.105-.217-.22-.217zm-1.493.142c-.1 0-.179.078-.189.185l-.351 4.015.351 3.868c.01.108.09.185.19.185.097 0 .176-.077.188-.184l.4-3.869-.4-4.015c-.012-.107-.091-.185-.189-.185zm-2.873 1.96c-.079 0-.14.06-.151.147l-.276 2.094.276 2.056c.01.086.072.147.15.147s.14-.06.152-.147l.326-2.056-.326-2.095c-.013-.086-.074-.145-.151-.145zM6.98 23.57c-.08 0-.146.064-.157.152l-.25 3.385.25 3.308c.011.088.077.152.157.152s.144-.062.156-.152l.422-3.308-.422-3.385c-.012-.09-.077-.152-.156-.152zM48 24c0 13.255-10.745 24-24 24C10.757 48 0 37.255 0 24 0 10.757 10.757 0 24 0c13.255 0 24 10.757 24 24z"/></g></svg>';
                    } else {
                        soundcloud += '<svg class="t-review-social-links__svg" xmlns="https://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 48 48" fill="' + fill + '"><path d="M1.6 24.3c-.2 0-.3.1-.3.3l-.5 6.2.5 6c0 .2.2.3.3.3.2 0 .3-.1.3-.3l.6-6-.6-6.2c0-.2-.1-.3-.3-.3zm3.3 12.6zm0-11.8c0-.2-.2-.4-.4-.4s-.4.2-.4.4l-.5 5.8.5 6.1c0 .2.2.4.4.4s.4-.2.4-.4l.5-6.1-.5-5.8zm2.7-6.2c-.3 0-.5.2-.5.5l-.4 11.5.4 6c0 .3.2.5.5.5s.5-.2.5-.5l.5-6-.5-11.6c-.1-.2-.3-.4-.5-.4zm3.8-1c0-.3-.3-.6-.6-.6s-.6.3-.6.6l-.4 13 .4 5.9c0 .3.3.6.6.6s.6-.3.6-.6l.4-5.9-.4-13zm2.7.1c-.4 0-.7.3-.7.7l-.3 12.2.3 5.9c0 .4.3.7.7.7.4 0 .7-.3.7-.7l.3-5.9-.3-12.2c0-.4-.3-.7-.7-.7zm3.7-3.6c-.1-.1-.3-.1-.4-.1-.2 0-.4.1-.5.2-.2.1-.3.4-.3.6v.1l-.3 15.7.2 2.9.2 2.8c0 .4.4.8.8.8s.8-.3.8-.8l.3-5.7-.3-15.8c-.1-.3-.3-.5-.5-.7zm22.4 9c-1 0-1.9.2-2.7.5-.6-6.3-5.9-11.3-12.3-11.3-1.6 0-3.1.3-4.5.8-.5.2-.7.4-.7.8v22.2c0 .4.3.8.8.8h19.4c3.9 0 7-3.1 7-7 0-3.7-3.1-6.8-7-6.8z"/></svg>';
                    }
                    soundcloud += '</a>';
                    soundcloud += ' </div>';
                    var telegram = '';
                    telegram += '<div class="t-review-social-links__item">';
                    telegram += '<a href="' + item + '" target="_blank">';
                    if (socialWrapper.hasClass('t-review-social-links__wrapper_round')) {
                        telegram += '<svg class="t-review-social-links__svg" xmlns="https://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 60 60" fill="' + fill + '"><path d="M30 0C13.4 0 0 13.4 0 30s13.4 30 30 30 30-13.4 30-30S46.6 0 30 0zm16.9 13.9l-6.7 31.5c-.1.6-.8.9-1.4.6l-10.3-6.9-5.5 5.2c-.5.4-1.2.2-1.4-.4L18 32.7l-9.5-3.9c-.7-.3-.7-1.5 0-1.8l37.1-14.1c.7-.2 1.4.3 1.3 1z"/><path d="M22.7 40.6l.6-5.8 16.8-16.3-20.2 13.3"/></svg>';
                    } else {
                        telegram += '<svg class="t-review-social-links__svg" xmlns="https://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 60 60" fill="' + fill + '"><path d="M52.5 9L6.1 26.9c-.9.4-.9 1.8 0 2.3L18 34.1l4.4 14.1c.3.8 1.2 1 1.8.5l6.8-6.4L43.9 51c.7.4 1.6 0 1.7-.7l8.4-40c.2-.8-.7-1.6-1.5-1.3zm-28 27.7l-.7 7.3-3.6-11.2L45.5 16l-21 20.7z"/></svg>';
                    }
                    telegram += '</a>';
                    telegram += '</div>';
                    if (item.indexOf('facebook') != -1) {
                        socialWrapper.append(fb);
                    }
                    if (item.indexOf('twitter') != -1) {
                        socialWrapper.append(twi);
                    }
                    if (item.indexOf('vk.com') != -1) {
                        socialWrapper.append(vk);
                    }
                    if (item.indexOf('ok.ru') != -1) {
                        socialWrapper.append(ok);
                    }
                    if (item.indexOf('behance') != -1) {
                        socialWrapper.append(behance);
                    }
                    if (item.indexOf('vimeo') != -1) {
                        socialWrapper.append(vimeo);
                    }
                    if (item.indexOf('youtube') != -1) {
                        socialWrapper.append(youtube);
                    }
                    if (item.indexOf('instagram') != -1) {
                        socialWrapper.append(instagram);
                    }
                    if (item.indexOf('pinterest') != -1) {
                        socialWrapper.append(pinterest);
                    }
                    if (item.indexOf('linkedin') != -1) {
                        socialWrapper.append(linkedin);
                    }
                    if (item.indexOf('soundcloud') != -1) {
                        socialWrapper.append(soundcloud);
                    }
                    if (item.indexOf('telegram') != -1) {
                        socialWrapper.append(telegram);
                    }
                }
            </script>
            <script type="text/javascript">
                $(document).ready(function() {
                    t_reviews_social_init('158896830');
                });
            </script>
            <style>
                .t533 .t-review-social-links__wrapper {
                    -webkit-box-pack: center;
                    -ms-flex-pack: center;
                    justify-content: center;
                }
            </style>
        </div>
        <div id="rec158915242" class="r t-rec t-rec_pt_60 t-rec_pb_45" style="padding-top:60px;padding-bottom:45px; " data-animationappear="off" data-record-type="859">
            <!-- t859 -->
            <div class="t859">
                <div class="t-section__container t-container">
                    <div class="t-col t-col_12">
                        <div class="t-section__topwrapper t-align_center">
                            <div class="t-section__title t-title t-title_xs text" field="btitle">
                                <div style="font-size:52px;" data-customstyle="yes">ОПЛАТА ТА ДОСТАВКА
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="t-container">
                    <div class="t859__row">
                        <div class="t859__col t-col t-col_6 t859__col_first">
                            <div class="t859__inner-col" style="background-color: #2b2b2b; border-radius:5px; box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.10);">
                                <div class="t859__wrap">
                                    <div class="t859__wrap_left">
                                        <div class="t859__imgwrapper"><img src="img/pay-per-click.webp" class="t859__img t859__img_circle t-img" imgfield="li_img__1533113804891" /></div>
                                    </div>
                                    <div class="t859__wrap_right">
                                        <div class="t-name t-name_lg t859__bottommargin" style="color: #ffffff;" field="li_title__1533113804891">ОПЛАТА ПРИ ОТРИМАННІ
                                            <br>
                                        </div>
                                        <div class="t-descr t-descr_sm" style="color: #ffffff;" field="li_descr__1533113804891">Ви можете переглянути товар і переконатися як при отриманні. Товар відправляється післяплатою.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="t859__col t-col t-col_6 ">
                            <div class="t859__inner-col" style="background-color:#2b2b2b; border-radius:5px; box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.10);">
                                <div class="t859__wrap">
                                    <div class="t859__wrap_left">
                                        <div class="t859__imgwrapper"><img src="img/truck.webp" class="t859__img t859__img_circle t-img" imgfield="li_img__1533113964390" /></div>
                                    </div>
                                    <div class="t859__wrap_right">
                                        <div class="t-name t-name_lg t859__bottommargin" style="color: #ffffff;" field="li_title__1533113964390">ШВИДКА ДОСТАВКА ПО УКРАЇНІ
                                             <br>
                                         </div>
                                         <div class="t-descr t-descr_sm" style="color: #ffffff;" field="li_descr__1533113964390">Відправляємо <strong>Новою Поштою</strong> по Україні згідно з тарифами компанії.
                                             <br>Термін доставки 1-2 дні.
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                /*$(document).ready(function() {
                    t859_init('158915242');
                });*/
            </script>
        </div>
        <div id="rec158918129" class="r t-rec t-rec_pb_75" style="padding-bottom:75px; " data-record-type="3">
            <!-- T107 -->
            <div class="t107">
                <div class="t-align_center" itemscope itemtype="https://schema.org/ImageObject">
                    <meta itemprop="image" content="img/novaposhta-15-long_3.png"> <img src="img/novaposhta-15-long_3.png" data-original="img/novaposhta-15-long_3.png" class="t107__width t-width t-width_6 t-img" imgfield="img" /> </div>
            </div>
        </div>
        <div id="rec158918984" class="r t-rec" style=" " data-animationappear="off" data-record-type="698">
            <!-- t698 -->
            <!-- cover -->
            <div class="t-cover" id="recorddiv158918984" bgimgfield="img" style="height:100vh; background-image:url('img/Seafoods_Butterbrot_.jpg');">
                <div class="t-cover__carrier" id="coverCarry158918984" data-content-cover-id="158918984" data-content-cover-bg="img/Seafoods_Butterbrot_.jpg" data-content-cover-height="100vh" data-content-cover-parallax="" style="height:100vh;background-attachment:scroll; "></div>
                <div class="t-cover__filter" style="height:100vh;background-image: -moz-linear-gradient(top, rgba(41,34,28,0.40), rgba(0,0,0,0.20));background-image: -webkit-linear-gradient(top, rgba(41,34,28,0.40), rgba(0,0,0,0.20));background-image: -o-linear-gradient(top, rgba(41,34,28,0.40), rgba(0,0,0,0.20));background-image: -ms-linear-gradient(top, rgba(41,34,28,0.40), rgba(0,0,0,0.20));background-image: linear-gradient(top, rgba(41,34,28,0.40), rgba(0,0,0,0.20));filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#9929221c', endColorstr='#cc000000');"></div>
                <div class="t698">
                    <div class="t-container ">
                        <div class="t-width t-width_8 t698__mainblock">
                            <div class="t-cover__wrapper t-valign_middle" style="height:100vh;">
                                <div class="t698__mainwrapper" data-hook-content="covercontent">
                                    <div class="t698__title t-title t-title_xs" style="" field="title">
                                        <div style="color:#ff1e00;" data-customstyle="yes">Акційна пропозиція 1 + 1 = 3</div>
                                    </div>
                                    <div class="t698__descr t-descr t-descr_md" style="" field="descr">
                                        <div style="font-size:24px;" data-customstyle="yes"> При покупці 2-х баночок 500г ікри,
                                             баночка 500г у подарунок!</div>
                                     </div>
                                    <div>
                                        <form id="form2" action='order.php' method='POST' class="t-form t-form_inputs-total_2 form-area">
                                            <input type="tel" name="Phone" class="t-input phone-mask" required placeholder="Ваш номер телефону – заповнюється цифрами" style="color:#000000; background-color:#ffffff; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px; margin-bottom: 20px;">
                                            <input type="text" name="Name" class="t-input name-mask" required placeholder="Ім'я - кирилиця" style="background-color:#ffffff; color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                            <input type="text" name="lastName" class="t-input last-name-mask" required placeholder="Прізвище - кирилиця" style="background-color:#ffffff; color:#000000; border:1px solid #c9c9c9; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                            <input type="text" name="City" class="t-input city-mask" required placeholder="Місто доставки - кирилиця" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; background: #ffffff;-moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                            <input type="text" name="Department" class="t-input department-mask" required placeholder="Номер відділення НП – заповнюється цифрами" style="color:#000000; border:1px solid #c9c9c9; border-radius: 5px; background: #ffffff;-moz-border-radius: 5px; -webkit-border-radius: 5px; margin-bottom: 20px;">
                                            <select name="Quantity" class="quantity" style="height: 60px;background-color: #ffffff;border-radius: 7px;width: 92.5%;border: 1px solid #c9c9c9;padding: 0 20px;font-size: 16px;color: #000;">
                                   <option value="Горбуш 2 по 0.5 = 1080 грн." selected>Горбуша: 2 по 0.5 = 1080 грн. + 0.5 у подарунок!</option>
                                     <option value="Кета 2 по 0.5 = 1160 грн. + 0.5 у подарунок!">Кета: 2 по 0.5 = 1160 грн. + 0.5 у подарунок!</option>
                                     <option value="Веслонос 2 по 0.5 = 1800 грн. + 0.5 у подарунок!">Веслонос: 2 по 0.5 = 1800 грн. + 0.5 у подарунок!</option>
                                      <option value="Щука 2 по 0.5 = 1000 грн. + 0.5 у подарунок!">Щука: 2 по 0.5 = 1000 грн. + 0.5 у подарунок!</option>
                                       <option value="Форель 2 по 0.5 = 1220 грн. + 0.5 у подарунок!">Форель: 2 по 0.5 = 1220 грн. + 0.5 у подарунок!</option>
                                        <option value="Чавича 2 по 0.5 = 1200 грн. + 0.5 у подарунок!">Чавича: 2 по 0.5 = 1200 грн. + 0.5 у подарунок!</option>
                                         <option value="Осетр 2 по 0.100 = 1850 грн. + 0.100 у подарунок!">Осетр: 2 по 0.100 = 1850 грн. + 0.100 у подарунок!</option>
                                            </select>
                                            <input type="hidden" name="comm" value="Акція 1+1=3н">
                                            <input type="hidden" name="ip" value="31.128.76.48" />
                                                <label>
                    <input type="checkbox" checked="checked" required="">
                    <span></span>
                    Я згоден з політикою конфіденційності та користувальницькою угодою
                </label>
                                            <div class="t-form__submit">
                                                <button type="submit" class="t-submit" style="color:#ffffff;background-color:#ff1500;border-radius:7px; -moz-border-radius:7px; -webkit-border-radius:7px;">
                                                    КУПИТИ ІКРУ
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="t698__form-bottom-text t-text t-text_xs" field="text">Поспішайте! Пропозиція Обмежена!</div>
                                 </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $('#rec158918984').find('.js-form-proccess').on('tildaform:aftererror', function(e) {
                    e.preventDefault();
                    t698_fixcontentheight('158918984');
                });
                $('.t698').bind('displayChanged', function() {
                    t698_fixcontentheight('158918984');
                });
            </script>
            <style>
                #rec158918984 .t-btn[data-btneffects-first],
                #rec158918984 .t-btn[data-btneffects-second],
                #rec158918984 .t-submit[data-btneffects-first],
                #rec158918984 .t-submit[data-btneffects-second] {
                    position: relative;
                    overflow: hidden;
                    -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
                }
            </style>
            <script type="text/javascript">
                $(document).ready(function() {});
            </script>
        </div>
        <div id="rec159029270" class="r t-rec t-rec_pt_75" style="padding-top:75px; " data-record-type="33">
            <!-- T017 -->
            <div class="t017">
                <div class="t-container t-align_center">
                    <div class="t-col t-col_10 t-prefix_1">
                        <div class="t017__title t-title t-title_xxs" field="title" style="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
            <!-- T165 -->
            <div class="t165">
                <div class="t-container">
                    <div class="t165__col-top t-col t-col_6 t165__vmiddle t165__left">
                        <div class="t165__textwrapper">
                            <div class="t165__text t-text t-text_sm" style="" field="text">

                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
<footer class="footer_section night-theme-background active-color" style="padding: 0 20px 50px">
    <div class="wrapper">
        <div style="margin: 0 auto; text-align: center;">
            <a style="color: #ff1e00; text-decoration: none;"  href="politics.html" target="_blank">Політика конфіденційностіи</a>
        </div>
        <div style="margin: 5px auto; text-align: center;">
            <a style="color: #ff1e00; text-decoration: none;" target="_blank" href="oferta.html">Договір оферти</a>
        </div>
    </div>
    <p class="night-theme-background active-color" style="text-align:center;">
         <span class="text">м. Дніпро</span> <br>
         <span class="text">вул. Богдана Хмельницького, 21</span> <br>
    </p>
    <div class="switcher night-theme-background active-color">
        <label class="switcher-item text">
            <input id="white" type="radio" name="switcher" value="white">
            Світла тема
        </label>
        <label class="switcher-item text">
            <input id="black" type="radio" name="switcher" value="black" checked>
            Темна тема
        </label>
    </div>
</footer>


<!--/allrecords-->
<script>
    //$(".phone-mask").mask("380(99) 999-99-99-99-9");
    $.mask.definitions['h'] = "[А-Яа-яёЁЇїІіЄєҐґ]";
    $(".name-mask").mask("hh?hhhhhhhhhhhhh");
    $(".last-name-mask").mask("hh?hhhhhhhhhhhhh");
    $(".city-mask").mask("hhh?hhhhhhhhhhhhhhhhhhhh");
    $(".department-mask").mask("№9?99");
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $(".t-menu__link-item").on("click", function (event) {
            event.preventDefault();
            var id  = $(this).attr('href'),
                top = $(id).offset().top;
            $('body,html').animate({scrollTop: top}, 1500);
        });
    });
</script>

<script>
    if($('#white').is(':checked')){
        $('.night-theme-background').removeClass('active-color');
    }else{
        $('.night-theme-background').addClass('active-color');
    }
    $('.switcher-item').on('click', function(){
        $(this).find("input").prop('checked', true);
        if($('#white').is(':checked')){
            $('.night-theme-background').removeClass('active-color');
        }else{
            $('.night-theme-background').addClass('active-color');
        }
    });
</script>
<script>
    var element = document.querySelector('#offer');
    var Visible = function (target) {
        var targetPosition = {
                top: window.pageYOffset + target.getBoundingClientRect().top,
                left: window.pageXOffset + target.getBoundingClientRect().left,
                right: window.pageXOffset + target.getBoundingClientRect().right,
                bottom: window.pageYOffset + target.getBoundingClientRect().bottom
            },
            windowPosition = {
                top: window.pageYOffset,
                left: window.pageXOffset,
                right: window.pageXOffset + document.documentElement.clientWidth,
                bottom: window.pageYOffset + document.documentElement.clientHeight
            };

        if (targetPosition.bottom > windowPosition.top && // Если позиция нижней части элемента больше позиции верхней чайти окна, то элемент виден сверху
            targetPosition.top < windowPosition.bottom && // Если позиция верхней части элемента меньше позиции нижней чайти окна, то элемент виден снизу
            targetPosition.right > windowPosition.left && // Если позиция правой стороны элемента больше позиции левой части окна, то элемент виден слева
            targetPosition.left < windowPosition.right) { // Если позиция левой стороны элемента меньше позиции правой чайти окна, то элемент виден справа
            // Если элемент полностью видно, то запускаем следующий код
            $("[href='#offer']").parent().addClass('t-active');
        } else {
            // Если элемент не видно, то запускаем этот код
            $("[href='#offer']").parent().removeClass('t-active');
        };
    };
    window.addEventListener('scroll', function() {
        Visible (element);
    });
    Visible (element);
</script>
<script>

    $(".burger-menu").click(function(e) {
        $(".body-mob-menu").toggleClass("active");
    });
    $(".body-mob-menu .t-menu__link-item:not('.tel-item') a").click(function(e) {
        $(".body-mob-menu").toggleClass("active");
    });
    $(".body-mob-menu").click(function(e) {
        $(".body-mob-menu").toggleClass("active");
    });
</script>

<!-- Meta Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1412726672953031');
  fbq('init', '1074760507038616');

  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=1412726672953031&ev=PageView&noscript=1"
    /></noscript>

<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=1074760507038616&ev=PageView&noscript=1"
    /></noscript>
<!-- End Meta Pixel Code -->

</body>

</html>