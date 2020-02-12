<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>Front End Boilerplate</title>
    <meta name="description" content="">

    <link href="./public/assets/web/dist/css/app.css?v=1" rel="stylesheet">
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

                <a href="javascript:void(0);" id="js-menu-toggle" class="navigation-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>

                <nav class="nav">
                    <ul class="menu">
                        <li class="menu-item active">
                            <a class="menu-link" href="#">Menu item</a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="#">Menu item</a>
                        </li>
                        <li class="menu-item dropdown">
                            <a class="menu-link dropdown-toggle" href="javascript:void(0);">
                                Menu dropdown <div class="carret"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Sub Menu item</a>
                                <a class="dropdown-item" href="#">Sub Menu item</a>
                                <a class="dropdown-item" href="#">Sub Menu item</a>
                            </div>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="#">Sub Menu item</a>
                        </li>
                    </ul>
                </nav>

        </header>

        