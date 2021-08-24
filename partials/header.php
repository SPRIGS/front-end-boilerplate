<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Front End Boilerplate</title>
    <meta name="description" content="">
    <link rel="shortcut icon" href="/favicon.ico">
    <link href="./public/assets/web/dist/css/app.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>

<body>
    <main>
        <header>
            <div class="header__container">
                <div class="logo">
                    <a href="#">
                        <img src="./public/assets/img/logo.svg" alt="">
                    </a>
                </div>
                <a href="javascript:void(0);" id="js-menu-toggle" class="navigation-toggler">
                    <span></span>
                </a>
            </div>

            <nav class="nav">
                <ul>
                    <li class="menu-item current-menu-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="#">Dropdown menu</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="#">Dropdown item</a></li>
                            <li class="menu-item"><a href="#">Another one</a></li>
                            <li class="menu-item"><a href="#">Yet another one</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="#">About us</a></li>
                    <li class="menu-item"><a href="#">Contact</a></li>
                    
                </ul>
            </nav>
        </header>