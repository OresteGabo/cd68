<!DOCTYPE html>
<!--=== Coding by OresteGbao | www.gabo.io === -->
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <!--<link rel="stylesheet" href="resources/css/style.css">-->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">-->

    <link rel="stylesheet" href="/styles/sidenav.css">
    <!--<link rel="stylesheet" href="styles/form.css">-->

    <link rel="stylesheet" href="/styles/style.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


    <!----===== Search for Iconscout icons CSS link
    https://iconscout.com/unicons/explore/line
  ===== -->

    <!--<title>Admin Dashboard Panel</title>-->
    <?php

    use App\custom_php\Nav;


    ?>

</head>
<body>
<nav class="sidenav">
    <div class="logo-name">
        <div class="logo-image">
            <!--<img src="images/logo.png" alt="">-->
            <img src="/images/logo.png" alt="logo cdafal">
        </div>

        <span class="logo_name">CDAFAL 68</span>
    </div>

    <!--<div class="menu-items">-->
    <!--<div class="float-left">-->

    <div class="flex menu-items">

        <?php
        $activeIndex = 1;
        $nav = new Nav($activeIndex);
        ?>
        <ul>
            @foreach ($nav->getNav1() as $mainNavItem)
                @include(
                        'layouts.mainnav.link_li',['url'=>'/'.$mainNavItem['url'],
                        'icon'=>$mainNavItem['icon'],
                        'label'=>$mainNavItem['label'],
                        'active'=>request()->path()==$mainNavItem['url'] ? 'active':'']
                )
            @endforeach
        </ul>

        <ul class="logout-mode">
            @foreach ($nav->getNav2() as $mainNavItem)
                @include(
                        'layouts.mainnav.link_li',['url'=>'/'.$mainNavItem['url'],
                        'icon'=>$mainNavItem['icon'],
                        'label'=>$mainNavItem['label'],
                        'active'=>request()->path()==$mainNavItem['url'] ? 'active':'']
                )
            @endforeach

        </ul>
    </div>
</nav>

<section class="maincontent">
    <div class="top">
        <i class="uil uil-angle-left-b sidebar-toggle"></i>

        <!--<div class="search-box">
            <i class="uil uil-search"></i>
            <input type="text" placeholder="Search here...">
        </div>-->

        <!--<img src="images/profile.jpg" alt="">-->
    </div>

    <div class="dash-content">
        @yield('quick_links')
        @yield('content')
    </div>
</section>
<script type="text/javascript" src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>


