<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Front End Boilerplate</title>
    <meta name="description" content="">
    <link rel="shortcut icon" href="/favicon.ico">
    <link href="./public/assets/web/dist/css/app.css?v=1" rel="stylesheet">
</head>

<body>
    <main>
        <header class="p-4">
            <div class="container mx-auto">
                <div class="flex justify-between items-center">
                    <div class="w-40 z-20">
                        <a href="/index.php">
                            <img class="w-full" src="./public/assets/img/logo.svg" alt="">
                        </a>
                    </div>

                    <nav class="apply:main-nav">
                        <ul class="flex flex-nowrap items-center flex-col md:flex-row">
                            <li class="">
                                <a class="p-2 block" href="#">Menu item</a>
                            </li>
                            <li class="">
                                <a class="p-2 block" href="#">Menu item</a>
                            </li>
                            <li class="dropdown relative text-center">
                                <a class="p-2 block dropdown-toggle" href="javascript:void(0);">
                                    Dropdown 
                                </a>
                                <div class="dropdown-menu apply:dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="p-2 block" href="#">Sub Menu item 1</a>
                                    <a class="p-2 block" href="#">Sub Menu item 2</a>
                                    <a class="p-2 block" href="#">Sub Menu item 3</a>
                                </div>
                            </li>
                            <li class="">
                                <a class="p-2 block" href="#">Sub Menu item</a>
                            </li>
                        </ul>
                    </nav>

                    <a href="javascript:void(0);" id="js-navigation-toggle" class="navigation-toggle md:hidden z-20">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div>

        </header>