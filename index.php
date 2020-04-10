<?php
function amzn($url, $imgsrc, $title, $description) {
    echo '<a href="https://amzn.to/'.$url.'" target="_blank" onclick="handleOutboundLinkClicks('."'https://amzn.to/".$url."');\">\n";
    echo "<div class=\"product\">\n";
    echo "<img src=\"".$imgsrc."\"/>\n";
    echo "<div class=\"title\">".$title."</div>\n";
    echo "<div class=\"description\">".$description."</div>\n";
    echo "</div>\n";
    echo "</a>\n";
}

function share($url, $text, $hashtags) {
    echo "<div class=\"sharemenu\"><div class=\"share-text\">Teile es mit</div>\n";
    echo "<a href=\"https://www.facebook.com/sharer/sharer.php?u=https://www.dailyimpact.earth/".$url."/&quote=".$text."\">\n";
    echo "<i class=\"fab fa-facebook-square\"></i></a>\n";
    echo "<a href=\"whatsapp://send?text=".$text." --> https://www.dailyimpact.earth/".$url."/\" data-action=\"share/whatsapp/share\" title=\"Share on whatsapp\">\n";
    echo "<i class=\"fab fa-whatsapp-square\"></i></a>\n";
    echo "<a href=\"https://www.linkedin.com/shareArticle?mini=true&url=http://www.dailyimpact.earth/".$url."/&title=".$text."\">\n";
    echo "<i class=\"fab fa-linkedin\"></i></a>\n";
    echo "<a href=\"http://twitter.com/share?text=".$text."&url=http://www.dailyimpact.earth/".$url."/&hashtags=".$hashtags."\">\n";
    echo "<i class=\"fab fa-twitter-square\"></i></a>\n";

    
    
    echo "</div>\n";
}

echo "<!DOCTYPE html>\n"
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:locale" content="de_DE" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Interessante Fakten rund um Nachhaltigkeit und Klimaschutz" />
    <meta property="og:site_name" content="daily impact" />
    <meta property="og:image" content="https://dailyimpact.earth/img/preview-dailyimpact.jpg">  
    <meta name="twitter:image:src" content="https://dailyimpact.earth/img/preview-dailyimpact.jpg">  
    <link rel="image_src" href="https://dailyimpact.earth/img/preview-dailyimpact.jpg">
    <title>daily impact - Interessante Fakten rund um Nachhaltigkeit und Klimaschutz</title>
    <link rel="icon" type="image/png" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.6/jquery.fullPage.min.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/arrow.css">
    <link rel="stylesheet" type="text/css" href="css/impact.css">
    <noscript>Sorry, your browser does not support JavaScript!</noscript>
    <script
        src="js/modernizr-custom.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111111698-4"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-111111698-4');
    </script>
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <!-- <script type="text/JavaScript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  -->
    <script type="text/JavaScript" src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.6/jquery.fullPage.min.js"></script>
    <script
            src="js/owl.carousel.min.js"></script>
    <script src="https://kit.fontawesome.com/fdc6d52257.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<body>
<div id="loadscreen" style="position: fixed; height: 100%; width: 100%; top: 0px; left: 0px; bottom: 0px; right: 0px; background: rgb(25, 112, 55); z-index: 10001;">
    <div style="margin: 50px auto; width: 400px;">
        <div class="logo">
            <svg fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" x="0px" y="0px"><defs><style>.cls-1{fill:none;}</style></defs><title>Moon</title><g><path class="cls-1" d="M21,10a1,1,0,0,1,1-1h2.48A11,11,0,0,0,16,5,10.86,10.86,0,0,0,9.7,7H13a1,1,0,0,1,0,2H7.52a11,11,0,0,0,0,14H13a1,1,0,0,1,0,2H9.7A10.86,10.86,0,0,0,16,27a11,11,0,0,0,7.53-3H21a1,1,0,0,1,0-2h4.21a10.94,10.94,0,0,0,.58-11H22A1,1,0,0,1,21,10Zm-9,9H11a1,1,0,0,1,0-2h1a1,1,0,0,1,0,2ZM17,9h1a1,1,0,0,1,0,2H17a1,1,0,0,1,0-2Zm4,10H16a1,1,0,0,1,0-2h5a1,1,0,0,1,0,2Z"></path><path d="M31,10a1,1,0,0,0-1-1H26.94A13,13,0,0,0,6.64,7H2A1,1,0,0,0,2,9H5.06a12.92,12.92,0,0,0,0,14H2a1,1,0,0,0,0,2H6.64a13,13,0,0,0,19.59-1H30a1,1,0,0,0,0-2H27.52A12.95,12.95,0,0,0,28,11h2A1,1,0,0,0,31,10Zm-4,6a10.94,10.94,0,0,1-1.79,6H21a1,1,0,0,0,0,2h2.53A11,11,0,0,1,16,27a10.86,10.86,0,0,1-6.3-2H13a1,1,0,0,0,0-2H7.52a11,11,0,0,1,0-14H13a1,1,0,0,0,0-2H9.7A10.86,10.86,0,0,1,16,5a11,11,0,0,1,8.48,4H22a1,1,0,0,0,0,2h3.79A10.92,10.92,0,0,1,27,16Z"></path><path d="M17,11h1a1,1,0,0,0,0-2H17a1,1,0,0,0,0,2Z"></path><path d="M21,17H16a1,1,0,0,0,0,2h5a1,1,0,0,0,0-2Z"></path><path d="M12,17H11a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Z"></path></g></svg>
            <span>daily impact</span>
        </div>
        <span>
            Diese Seite wird geladen... 
        </span>
    </div>
</div>
<div id="navi">
    <div id="navicontainer">
        <a data-menuanchor="home" class="nav-home" href="#home"><svg height='300px' width='300px'  fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"><path d="M93.689,48.219L52.673,7.185c-0.688-0.699-1.665-1.099-2.681-1.099c-1.014,0-1.992,0.397-2.686,1.091L6.12,48.393  c-1.104,1.104-1.42,2.687-0.822,4.129c0.59,1.425,1.964,2.346,3.501,2.346h9.211v35.252c0,2.092,1.703,3.795,3.795,3.795h19.51  c2.092,0,3.794-1.703,3.794-3.795V74.392h9.754v15.728c0,2.092,1.702,3.795,3.794,3.795h19.51c2.093,0,3.794-1.703,3.794-3.795  V54.867h9.234c1.65,0,2.971-0.809,3.53-2.162C95.33,51.246,94.913,49.443,93.689,48.219z M58.657,66.798H41.315  c-2.092,0-3.795,1.704-3.795,3.797v15.728H25.6V54.867h48.773v31.455H62.451V70.595C62.451,68.502,60.749,66.798,58.657,66.798z   M82.024,47.276H17.958l32.028-32.049L82.024,47.276z"></path></svg></a>
        <a data-menuanchor="purpouse" class="nav-purpouse small-nav" href="#purpouse"><img src="img/subnav.png"></a>
        <a data-menuanchor="morning" class="nav-morning" href="#morning"><svg height='300px' width='300px'  fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve"><g><path d="M92.7,63.9c-4.3,0-6.6,2.2-8.1,3.7c-1.2,1.2-1.6,1.5-2.6,1.5c-1,0-1.4-0.3-2.6-1.5c-1.2-1.2-3-2.9-5.9-3.5   c0.8-2.5,1.3-5.1,1.3-7.7c0-13.5-11.2-24.5-25-24.5c-13.8,0-25,11-25,24.5c0,2.7,0.5,5.3,1.3,7.7c-2.9,0.6-4.7,2.3-5.9,3.5   c-1.2,1.2-1.6,1.5-2.6,1.5c-1,0-1.4-0.3-2.6-1.5c-1.5-1.5-3.8-3.7-8.1-3.7c-2.2,0-4,1.8-4,4s1.8,4,4,4c1,0,1.4,0.3,2.6,1.5   c1.5,1.5,3.8,3.7,8.1,3.7c4.3,0,6.6-2.2,8.1-3.7c1.2-1.2,1.6-1.5,2.6-1.5s1.4,0.3,2.6,1.5c1,1,2.4,2.3,4.5,3.1   c0.5,0.3,1,0.4,1.6,0.4c0.6,0.1,1.3,0.2,2,0.2c4.3,0,6.6-2.2,8.1-3.7c1.2-1.2,1.6-1.5,2.6-1.5c1,0,1.4,0.3,2.6,1.5   c1.5,1.5,3.8,3.7,8.1,3.7c0.7,0,1.4-0.1,2-0.2c0.6,0,1.1-0.2,1.6-0.4c2.1-0.8,3.5-2.1,4.5-3.1c1.2-1.2,1.6-1.5,2.6-1.5   c1,0,1.4,0.3,2.6,1.5c1.5,1.5,3.9,3.7,8.1,3.7s6.6-2.2,8.1-3.7c1.2-1.2,1.6-1.5,2.6-1.5c2.2,0,4-1.8,4-4S94.9,63.9,92.7,63.9z    M49.7,63.9c-4.3,0-6.6,2.2-8.1,3.7c-1.2,1.2-1.6,1.5-2.6,1.5c-0.1,0-0.1,0-0.2,0c-3.9-3.2-6-7.7-6-12.6c0-9.1,7.6-16.5,17-16.5   c9.4,0,17,7.4,17,16.5c0,4.9-2.2,9.5-6,12.6c-0.1,0-0.1,0-0.2,0c-1,0-1.4-0.3-2.6-1.5C56.3,66.1,54,63.9,49.7,63.9z"></path><path d="M7,58.4h9.3c2.2,0,4-1.8,4-4s-1.8-4-4-4H7c-2.2,0-4,1.8-4,4S4.8,58.4,7,58.4z"></path><path d="M93.3,50.4H84c-2.2,0-4,1.8-4,4s1.8,4,4,4h9.3c2.2,0,4-1.8,4-4S95.5,50.4,93.3,50.4z"></path><path d="M45.7,12.7V22c0,2.2,1.8,4,4,4c2.2,0,4-1.8,4-4v-9.3c0-2.2-1.8-4-4-4C47.5,8.7,45.7,10.5,45.7,12.7z"></path><path d="M15.7,22.8c-1.6,1.6-1.6,4.1,0,5.7l6.6,6.6c0.8,0.8,1.8,1.2,2.8,1.2s2-0.4,2.8-1.2c1.6-1.6,1.6-4.1,0-5.7l-6.6-6.6   C19.8,21.2,17.3,21.2,15.7,22.8z"></path><path d="M78.1,22.8l-6.6,6.6c-1.6,1.6-1.6,4.1,0,5.7c0.8,0.8,1.8,1.2,2.8,1.2s2-0.4,2.8-1.2l6.6-6.6c1.6-1.6,1.6-4.1,0-5.7   C82.2,21.2,79.6,21.2,78.1,22.8z"></path><path d="M86.2,87.3c0-2.2-1.8-4-4-4c-1,0-1.4-0.3-2.6-1.5c-1.5-1.5-3.8-3.7-8.1-3.7c-4.3,0-6.6,2.2-8.1,3.7   c-1.2,1.2-1.6,1.5-2.6,1.5c-1,0-1.4-0.3-2.6-1.5c-1.5-1.5-3.8-3.7-8.1-3.7c-4.3,0-6.6,2.2-8.1,3.7c-1.2,1.2-1.6,1.5-2.6,1.5   c-1,0-1.4-0.3-2.6-1.5c-1.5-1.5-3.8-3.7-8.1-3.7s-6.6,2.2-8.1,3.7c-1.2,1.2-1.6,1.5-2.6,1.5c-2.2,0-4,1.8-4,4s1.8,4,4,4   c4.3,0,6.6-2.2,8.1-3.7c1.2-1.2,1.6-1.5,2.6-1.5s1.4,0.3,2.6,1.5c1.5,1.5,3.8,3.7,8.1,3.7s6.6-2.2,8.1-3.7c1.2-1.2,1.6-1.5,2.6-1.5   c1,0,1.4,0.3,2.6,1.5c1.5,1.5,3.8,3.7,8.1,3.7c4.3,0,6.6-2.2,8.1-3.7c1.2-1.2,1.6-1.5,2.6-1.5c1,0,1.4,0.3,2.6,1.5   c1.5,1.5,3.8,3.7,8.1,3.7C84.5,91.3,86.2,89.5,86.2,87.3z"></path></g></svg></a>
        <a data-menuanchor="morning2" class="nav-morning2 small-nav" href="#morning2"><img src="img/subnav.png"></a>
        <a data-menuanchor="gotowork" class="nav-gotowork" href="#gotowork"><svg height='300px' width='300px'  fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve"><path d="M384.4,223.1c-2.1,0-4.2,0.1-6.3,0.2L341,70c-2.2-9-10.2-15.3-19.4-15.3H250c-11,0-20,9-20,20s9,20,20,20h55.8l33.4,137.9  c-33,14.7-57.5,45-64.1,81.5h-50.3c-7.1-38.7-34.3-70.5-70.4-84.1l6.4-35.6H197c11,0,20-9,20-20s-9-20-20-20h-52.9  c-9.7,0-18,6.9-19.7,16.5l-9.3,52.1c-61,0.3-110.6,50-110.6,111.1c0,61.3,49.8,111.1,111.1,111.1c54.4,0,99.9-39.4,109.3-91.1h50.3  c9.4,51.8,54.9,91.1,109.3,91.1c61.3,0,111.1-49.8,111.1-111.1S445.7,223.1,384.4,223.1z M348.9,272.6l10.1,41.6h-42.8  C321.4,296.5,333.3,281.6,348.9,272.6z M183.8,314.2h-44.3l7.8-43.6C164.8,279.3,178.2,295.1,183.8,314.2z M115.6,405.3  c-39.2,0-71.1-31.9-71.1-71.1c0-36.6,27.8-66.8,63.4-70.7l-12,67.2c-1,5.8,0.6,11.8,4.4,16.4c3.8,4.5,9.4,7.2,15.3,7.2h68.2  C175.1,383.7,147.8,405.3,115.6,405.3z M384.4,405.3c-32.3,0-59.6-21.6-68.2-51.1h68.2c6.1,0,11.9-2.8,15.7-7.6s5.2-11.1,3.7-17.1  l-16.1-66.3c37.6,1.8,67.7,32.9,67.7,71C455.5,373.4,423.7,405.3,384.4,405.3z"></path></svg></a>
        <a data-menuanchor="gotowork2" class="nav-gotowork2 small-nav" href="#gotowork2"><img src="img/subnav.png"></a>
        <a data-menuanchor="work" class="nav-work" href="#work"><svg height='300px' width='300px'  fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve"><title>work</title><path d="M19,6h-3c0-1.7-1.3-3-3-3h-2C9.3,3,8,4.3,8,6H5C3.3,6,2,7.3,2,9v9c0,1.7,1.3,3,3,3h14c1.7,0,3-1.3,3-3V9C22,7.3,20.7,6,19,6  z M11,5h2c0.6,0,1,0.4,1,1h-4C10,5.4,10.4,5,11,5z M5,8h14c0.6,0,1,0.4,1,1c0,1.1-0.9,2-2,2H6c-1.1,0-2-0.9-2-2C4,8.4,4.4,8,5,8z   M19,19H5c-0.6,0-1-0.4-1-1v-5.6C4.6,12.8,5.3,13,6,13h12c0.7,0,1.4-0.2,2-0.6V18C20,18.6,19.6,19,19,19z"></path></svg></a>
        <a data-menuanchor="work2" class="nav-work2 small-nav" href="#work2"><img src="img/subnav.png"></a>
        <a data-menuanchor="break" class="nav-break" href="#break"><svg height='300px' width='300px'  fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 693.17242 722.49878" enable-background="new 0 0 2000 2000" xml:space="preserve"><path style="" d="M 271.26361,8.0222394e-4 C 259.05358,0.03080222 246.49458,1.3768022 233.76558,4.0568022 c -15.941,3.345 -26.601,18.3499998 -24.599,34.5089998 11.471,90.894998 67.73303,157.531998 140.03003,165.910998 4.563,0.467 9.22,0.782 13.783,0.782 7.597,0 15.1,-0.688 22.569,-1.939 13.316,-2.156 23.693,-12.626 25.756,-25.942 9.22,-58.012 -7.034,-110.303998 -44.636,-143.531998 -25.318,-22.34 -58.778,-33.95699978 -95.405,-33.84499977606 z M 277.95961,62.693802 c 14.286,0.781 32.416,4.879 47.387,18.068 15.941,14.097 24.912,35.506998 25.882,60.824998 -32.977,-6.315 -60.141,-36.226 -73.269,-78.892998 z M 182.69758,181.4338 c -16.042,0.149 -31.891,2.552 -47.208,7.352 -111.275004,34.915 -164.753004,181.323 -119.275004,326.35598 38.322,122.089 134.592004,207.357 234.176004,207.357 17.13003,0 33.97803,-2.563 50.17003,-7.627 16.316,-5.095 31.693,-12.753 45.914,-22.849 14.223,10.096 29.633,17.723 45.917,22.849 16.129,5.064 33.042,7.627 50.139,7.627 99.585,0 195.918,-85.268 234.176,-207.357 21.537,-68.61 21.972,-139.68898 1.155,-200.23398 -22.005,-63.857 -64.733,-108.649 -120.403,-126.122 -70.014,-21.942 -151.219,6.283 -210.984,70.891 -46.737,-50.549 -106.48803,-78.775 -163.77703,-78.243 z m 3.397,62.367 c 47.227,0.461 98.02703,31.353 134.87603,83.518 11.722,16.597 39.322,16.597 51.043,0 45.354,-64.11 111.838,-96.151 166.724,-78.865 36.291,11.378 64.672,42.198 80.05,86.802 16.473,47.98 15.88,105.21098 -1.718,161.16098 -29.726,94.803 -103.118,163.594 -174.539,163.568 -10.752,0 -21.321,-1.561 -31.447,-4.749 -15.503,-4.876 -29.911,-13.725 -42.79,-26.227 -6.095,-5.876 -13.907,-8.847 -21.784,-8.847 -7.878,0 -15.754,2.941 -21.881,8.911 -12.814,12.502 -27.224,21.316 -42.728,26.192 -10.127,3.157 -20.69403,4.749 -31.51003,4.749 -71.359,0 -144.812,-68.762 -174.538004,-163.566 -35.165,-112.11798 0,-223.39398 78.331004,-247.99398 10.304,-3.247 21.011,-4.76 31.911,-4.653 z" fill="#FFFFFF"></path></svg></a>
        <a data-menuanchor="break2" class="nav-break2 small-nav" href="#break2"><img src="img/subnav.png"></a>
        <a data-menuanchor="afterwork" class="nav-afterwork" href="#afterwork"><svg height='300px' width='300px'  fill="#FFFFFF" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" version="1.1" x="0px" y="0px" viewBox="0 0 100 100"><g transform="translate(0,-952.36218)"><path d="m 7.0003526,962.36216 c -1.6569,0 -2.9999996,1.34315 -2.9999996,3 0,1.65685 1.3430996,3 2.9999996,3 l 11.9688004,0 c 4.9652,12.29749 9.8559,24.61749 14.7812,36.93754 l -4.5312,10.9062 c -0.3796,0.9093 -0.2728,2.0057 0.2751,2.8246 0.548,0.8189 1.5208,1.3358 2.5061,1.3317 l 50,0 c 1.5849,0.022 3.0427,-1.4149 3.0427,-3 0,-1.5851 -1.4578,-3.0224 -3.0427,-3 l -45.5,0 2.5938,-6.1875 48.1562,-3.8438 c 1.2605,-0.099 2.4015,-1.0809 2.6875,-2.3125 l 6,-25.99999 c 0.3924,-1.75123 -1.1429,-3.6621 -2.9375,-3.65625 l -65.9688,0 -3.25,-8.125 c -0.445,-1.09982 -1.5948,-1.87497 -2.7812,-1.875 z m 22.4375004,16 18.5625,0 0,9 -14.9688,0 z m 24.5625,0 12,0 0,9 -12,0 z m 18,0 17.2188,0 -2.0626,9 -15.1562,0 z m -36.5625,15 12.5625,0 0,8.09374 -9.0312,0.7188 z m 18.5625,0 12,0 0,6.65624 -12,0.9688 z m 18,0 13.75,0 -1.1875,5.18755 -12.5625,1 z m -30,29.00004 c -5.4873,0 -10,4.5126 -10,10 0,5.4873 4.5127,10 10,10 5.4873,0 10,-4.5127 10,-10 0,-5.4873 -4.5127,-10 -10,-10 z m 30,0 c -5.4873,0 -10,4.5127 -10,10 0,5.4873 4.5127,10 10,10 5.4873,0 10,-4.5127 10,-10 0,-5.4874 -4.5127,-10 -10,-10 z m -30,6 c 2.2447,0 4,1.7553 4,4 0,2.2447 -1.7553,4 -4,4 -2.2445,0 -4,-1.7554 -4,-4 0,-2.2446 1.7555,-4 4,-4 z m 30,0 c 2.2445,0 4,1.7554 4,4 0,2.2446 -1.7555,4 -4,4 -2.2447,0 -4,-1.7553 -4,-4 0,-2.2447 1.7553,-4 4,-4 z" style="text-indent:0;text-transform:none;direction:ltr;block-progression:tb;baseline-shift:baseline;color:#000000;enable-background:accumulate;" fill="#FFFFFF" fill-opacity="1" stroke="none" marker="none" visibility="visible" display="inline" overflow="visible"></path></g></svg>
        <a data-menuanchor="afterwork2" class="nav-afterwork2 small-nav" href="#afterwork2"><img src="img/subnav.png"></a>
        <a data-menuanchor="sports" class="nav-sports" href="#sports"><svg height='300px' width='300px'  fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" x="0px" y="0px"><title>Ecommerce, business, finance, Sport</title><g data-name="Layer 16"><path d="M28.13,19.11A11,11,0,0,0,19,2.05h0a11,11,0,0,0-9.33,16.8l-8,8,3.53,3.53,8-8a11,11,0,0,0,5.8,1.66A9.14,9.14,0,0,0,20.1,24a5,5,0,1,0,8-4.88ZM12.59,6.69a8.9,8.9,0,0,1,6.35-2.64h0a9,9,0,0,1,7.39,14.14l-.1,0a3.29,3.29,0,0,0-.43-.09l-.19,0c-.21,0-.41,0-.62,0a4.94,4.94,0,0,0-.87.08l-.3.08a4.58,4.58,0,0,0-.53.14c-.11,0-.22.1-.33.15s-.3.13-.44.21-.2.14-.31.21l-.38.26c-.1.09-.18.18-.27.27l-.34.32c-.08.1-.15.21-.22.31a4.61,4.61,0,0,0-.28.38l0,.05L10.43,10.19A8.94,8.94,0,0,1,12.59,6.69ZM5.16,27.54l-.7-.7,6.37-6.38.08.08c.09.1.17.2.26.29l.09.07.28.27Zm8.53-7.18-.07-.05a10.18,10.18,0,0,1-1.93-1.93l0-.06A8.91,8.91,0,0,1,10,12.55L19.45,22A9,9,0,0,1,13.69,20.36ZM25,26a3,3,0,0,1-3-2.8v-.36a3.79,3.79,0,0,1,0-.41A3,3,0,0,1,25,20a3,3,0,0,1,0,6Z"></path></g></svg></a>
        <a data-menuanchor="sports2" class="nav-sports2 small-nav" href="#sports2"><img src="img/subnav.png"></a> 
        <a data-menuanchor="evening" class="nav-evening" href="#evening"><svg height='300px' width='300px'  fill="#FFFFFF" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" version="1.1" x="0px" y="0px" viewBox="0 0 100 100"><g transform="translate(0,-952.36218)"><path style="text-indent:0;text-transform:none;direction:ltr;block-progression:tb;baseline-shift:baseline;color:#000000;enable-background:accumulate;" d="m 49.942974,957.42282 a 2.998025,2.9962004 0 0 0 -2.966499,3.05832 l 0,11.17221 c -12.825811,1.48363 -22.8547,12.35121 -22.982561,25.52757 -1.241802,1.41021 -1.998483,3.24048 -1.998483,5.24288 0,4.3741 3.617147,7.989 7.993934,7.989 l 14.988626,0 a 2.998025,2.9962004 0 1 0 0,-5.9918 l -14.988626,0 c -1.159013,0 -1.998484,-0.8389 -1.998484,-1.9972 0,-1.1583 0.839471,-1.9973 1.998484,-1.9973 l 39.96967,0 c 1.159012,0 1.998483,0.839 1.998483,1.9973 0,1.1583 -0.839471,1.9972 -1.998483,1.9972 l -14.988626,0 a 2.998025,2.9962004 0 1 0 0,5.9918 l 14.988626,0 c 4.376787,0 7.993934,-3.6149 7.993934,-7.989 0,-2.0024 -0.756681,-3.83267 -1.998484,-5.24288 -0.127861,-13.17636 -10.156749,-24.04394 -22.98256,-25.52757 l 0,-11.17221 a 2.998025,2.9962004 0 0 0 -3.028951,-3.05832 z m 0.03123,20.03509 c 10.050297,0 18.230854,7.34683 19.672572,16.97677 l -39.345144,0 c 1.441718,-9.62994 9.622274,-16.97677 19.672572,-16.97677 z M 26.023628,1014.345 a 2.998025,2.9962004 0 0 0 -2.87282,2.0908 l -0.999242,2.9959 a 2.998025,2.9962004 0 1 0 5.683188,1.9037 l 0.999242,-2.9959 a 2.998025,2.9962004 0 0 0 -2.810368,-3.9945 z m 14.988626,0 a 2.998025,2.9962004 0 0 0 -2.87282,2.0908 l -0.999241,2.9959 a 2.998025,2.9962004 0 1 0 5.683187,1.9037 l 0.999242,-2.9959 a 2.998025,2.9962004 0 0 0 -2.810368,-3.9945 z m 8.930724,0 a 2.998025,2.9962004 0 0 0 -2.966499,3.0583 l 0,2.9959 a 2.998025,2.9962004 0 1 0 5.99545,0 l 0,-2.9959 a 2.998025,2.9962004 0 0 0 -3.028951,-3.0583 z m 8.899496,0 a 2.998025,2.9962004 0 0 0 -2.716688,3.9945 l 0.999242,2.9959 a 2.998025,2.9962004 0 1 0 5.683187,-1.9037 l -0.999242,-2.9959 a 2.998025,2.9962004 0 0 0 -2.966499,-2.0908 z m 14.988627,0 a 2.998025,2.9962004 0 0 0 -2.716689,3.9945 l 0.999242,2.9959 a 2.998025,2.9962004 0 1 0 5.683187,-1.9037 l -0.999241,-2.9959 a 2.998025,2.9962004 0 0 0 -2.966499,-2.0908 z m -50.805198,11.9836 a 2.998025,2.9962004 0 0 0 -2.87282,2.0908 l -0.999242,2.9959 a 2.998025,2.9962004 0 1 0 5.683188,1.9037 l 0.999241,-2.9959 a 2.998025,2.9962004 0 0 0 -2.810367,-3.9945 z m 14.988626,0 a 2.998025,2.9962004 0 0 0 -2.87282,2.0908 l -0.999242,2.9959 a 2.998025,2.9962004 0 1 0 5.683188,1.9037 l 0.999242,-2.9959 a 2.998025,2.9962004 0 0 0 -2.810368,-3.9945 z m 11.928449,0 a 2.998025,2.9962004 0 0 0 -2.966499,3.0583 l 0,2.9959 a 2.998025,2.9962004 0 1 0 5.99545,0 l 0,-2.9959 a 2.998025,2.9962004 0 0 0 -3.028951,-3.0583 z m 11.897222,0 a 2.998025,2.9962004 0 0 0 -2.716689,3.9945 l 0.999242,2.9959 a 2.998025,2.9962004 0 1 0 5.683187,-1.9037 l -0.999241,-2.9959 a 2.998025,2.9962004 0 0 0 -2.966499,-2.0908 z m 14.988626,0 a 2.998025,2.9962004 0 0 0 -2.716689,3.9945 l 0.999242,2.9959 a 2.998025,2.9962004 0 1 0 5.683188,-1.9037 l -0.999242,-2.9959 a 2.998025,2.9962004 0 0 0 -2.966499,-2.0908 z m -56.800648,11.9836 a 2.998025,2.9962004 0 0 0 -2.87282,2.0908 l -0.999242,2.9959 a 2.998025,2.9962004 0 1 0 5.683187,1.9037 l 0.999242,-2.9959 a 2.998025,2.9962004 0 0 0 -2.810367,-3.9945 z m 14.988626,0 a 2.998025,2.9962004 0 0 0 -2.87282,2.0908 l -0.999242,2.9959 a 2.998025,2.9962004 0 1 0 5.683188,1.9037 l 0.999241,-2.9959 a 2.998025,2.9962004 0 0 0 -2.810367,-3.9945 z m 14.926174,0 a 2.998025,2.9962004 0 0 0 -2.966499,3.0583 l 0,2.9959 a 2.998025,2.9962004 0 1 0 5.99545,0 l 0,-2.9959 a 2.998025,2.9962004 0 0 0 -3.028951,-3.0583 z m 14.894947,0 a 2.998025,2.9962004 0 0 0 -2.716689,3.9945 l 0.999242,2.9959 a 2.998025,2.9962004 0 1 0 5.683188,-1.9037 l -0.999242,-2.9959 a 2.998025,2.9962004 0 0 0 -2.966499,-2.0908 z m 14.988626,0 a 2.998025,2.9962004 0 0 0 -2.716688,3.9945 l 0.999241,2.9959 a 2.998025,2.9962004 0 1 0 5.683188,-1.9037 l -0.999242,-2.9959 a 2.998025,2.9962004 0 0 0 -2.966499,-2.0908 z" fill="#FFFFFF" fill-opacity="1" stroke="none" marker="none" visibility="visible" display="inline" overflow="visible"></path></g></svg></a>
        <a data-menuanchor="evening2" class="nav-evening2 small-nav" href="#evening2"><img src="img/subnav.png"></a> 
        <a data-menuanchor="end" class="nav-end" href="#end"><svg height='300px' width='300px'  fill="#FFFFFF" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" version="1.1" x="0px" y="0px" viewBox="0 0 100 100"><g transform="translate(0,-952.36218)"><path style="font-size:medium;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;text-indent:0;text-align:start;text-decoration:none;line-height:normal;letter-spacing:normal;word-spacing:normal;text-transform:none;direction:ltr;block-progression:tb;writing-mode:lr-tb;text-anchor:start;baseline-shift:baseline;opacity:1;color:#000000;fill:#FFFFFF;fill-opacity:1;stroke:none;stroke-width:10.71726990000000000;marker:none;visibility:visible;display:inline;overflow:visible;enable-background:accumulate;font-family:Sans;-inkscape-font-specification:Sans" d="M 50 5 C 25.182722 5 5 25.18269 5 50 A 3.0004144 3.0004144 0 0 0 11 50 C 11 28.42533 28.425362 11 50 11 C 71.574644 11 89 28.42533 89 50 C 89 71.5746 71.574644 89 50 89 C 32.008823 89 16.901384 76.85785 12.375 60.34375 A 3.0028744 3.0028744 0 1 0 6.59375 61.9375 C 11.822302 81.0135 29.304776 95 50 95 C 74.817284 95 95 74.8173 95 50 C 95 25.18269 74.817284 5 50 5 z M 49 24 C 46.238579 24 44 26.238579 44 29 C 44 31.761421 46.238579 34 49 34 C 51.761421 34 54 31.761421 54 29 C 54 26.238579 51.761421 24 49 24 z M 42.6875 38 A 3.0040663 3.0040663 0 1 0 43 44 L 47 44 L 47 70 L 43 70 A 3.0003 3.0003 0 0 0 42.6875 70 A 3.0040663 3.0040663 0 1 0 43 76 L 57 76 A 3.0003 3.0003 0 1 0 57 70 L 53 70 L 53 41 A 3.0003 3.0003 0 0 0 50 38 L 43 38 A 3.0003 3.0003 0 0 0 42.6875 38 z " transform="translate(0,952.36218)"></path></g></svg></a>
    </div>
</div>
<div id="site">
    <main class="mainbag">
        <div id="hero" data-anchor="home" class="mainview">
            <div class="darkbg">
                <div class="contentcontainer">
                    <div class="logo">
                        <svg fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" x="0px" y="0px"><defs><style>.cls-1{fill:none;}</style></defs><title>Moon</title><g><path class="cls-1" d="M21,10a1,1,0,0,1,1-1h2.48A11,11,0,0,0,16,5,10.86,10.86,0,0,0,9.7,7H13a1,1,0,0,1,0,2H7.52a11,11,0,0,0,0,14H13a1,1,0,0,1,0,2H9.7A10.86,10.86,0,0,0,16,27a11,11,0,0,0,7.53-3H21a1,1,0,0,1,0-2h4.21a10.94,10.94,0,0,0,.58-11H22A1,1,0,0,1,21,10Zm-9,9H11a1,1,0,0,1,0-2h1a1,1,0,0,1,0,2ZM17,9h1a1,1,0,0,1,0,2H17a1,1,0,0,1,0-2Zm4,10H16a1,1,0,0,1,0-2h5a1,1,0,0,1,0,2Z"></path><path d="M31,10a1,1,0,0,0-1-1H26.94A13,13,0,0,0,6.64,7H2A1,1,0,0,0,2,9H5.06a12.92,12.92,0,0,0,0,14H2a1,1,0,0,0,0,2H6.64a13,13,0,0,0,19.59-1H30a1,1,0,0,0,0-2H27.52A12.95,12.95,0,0,0,28,11h2A1,1,0,0,0,31,10Zm-4,6a10.94,10.94,0,0,1-1.79,6H21a1,1,0,0,0,0,2h2.53A11,11,0,0,1,16,27a10.86,10.86,0,0,1-6.3-2H13a1,1,0,0,0,0-2H7.52a11,11,0,0,1,0-14H13a1,1,0,0,0,0-2H9.7A10.86,10.86,0,0,1,16,5a11,11,0,0,1,8.48,4H22a1,1,0,0,0,0,2h3.79A10.92,10.92,0,0,1,27,16Z"></path><path d="M17,11h1a1,1,0,0,0,0-2H17a1,1,0,0,0,0,2Z"></path><path d="M21,17H16a1,1,0,0,0,0,2h5a1,1,0,0,0,0-2Z"></path><path d="M12,17H11a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Z"></path></g></svg>
                        <span>daily impact</span>
                    </div>
                    <h1>Wusstest du, dass jeder Mensch pro Woche Plastik in der Menge einer Kreditkarte zu sich nimmt?</h1>
                    <!--<div class="subtext">Mikroplastikteilchen sind kleiner als fünf Millimeter und verstecken sich in Essen, Trinkwasser und sogar der Luft. Der Mensch nimmt wöchentlich fünf Gramm, also etwa das Gewicht einer Kreditkarte, davon auf. Mehr zum Thema kannst du in <a href="https://www.umsicht.fraunhofer.de/content/dam/umsicht/de/dokumente/publikationen/2018/kunststoffe-id-umwelt-konsortialstudie-mikroplastik.pdf" target="_blank" >diesem Report lesen</a>.</div>-->
                    <?php
                        share(
                            "home",
                            "Wusstest du, dass jeder Mensch pro Woche Plastik in der Menge von einer Kreditkarte zu sich nimmt?",
                            "createimpact,impact,noplastic"
                        );
                    ?>
                    <div class="subtext">Auf dieser Website findet du noch mehr dieser interessanten Fakten. Sie sollen die tägliche Umweltbelastung die wir Menschen verursachen verdeutlichen!</div>
                    <section class="demo section04">
                        <a href="#purpouse"><span></span></a>
                    </section>
                </div>
            </div>
        </div>
        <div id="x_purpouse" data-anchor="purpouse" class="mainview">
            <div class="darkbg">
                <div class="contentcontainer">
                    <!--<svg fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" x="0px" y="0px"><defs><style>.cls-1{fill:none;}</style></defs><title>Moon</title><g><path class="cls-1" d="M21,10a1,1,0,0,1,1-1h2.48A11,11,0,0,0,16,5,10.86,10.86,0,0,0,9.7,7H13a1,1,0,0,1,0,2H7.52a11,11,0,0,0,0,14H13a1,1,0,0,1,0,2H9.7A10.86,10.86,0,0,0,16,27a11,11,0,0,0,7.53-3H21a1,1,0,0,1,0-2h4.21a10.94,10.94,0,0,0,.58-11H22A1,1,0,0,1,21,10Zm-9,9H11a1,1,0,0,1,0-2h1a1,1,0,0,1,0,2ZM17,9h1a1,1,0,0,1,0,2H17a1,1,0,0,1,0-2Zm4,10H16a1,1,0,0,1,0-2h5a1,1,0,0,1,0,2Z"></path><path d="M31,10a1,1,0,0,0-1-1H26.94A13,13,0,0,0,6.64,7H2A1,1,0,0,0,2,9H5.06a12.92,12.92,0,0,0,0,14H2a1,1,0,0,0,0,2H6.64a13,13,0,0,0,19.59-1H30a1,1,0,0,0,0-2H27.52A12.95,12.95,0,0,0,28,11h2A1,1,0,0,0,31,10Zm-4,6a10.94,10.94,0,0,1-1.79,6H21a1,1,0,0,0,0,2h2.53A11,11,0,0,1,16,27a10.86,10.86,0,0,1-6.3-2H13a1,1,0,0,0,0-2H7.52a11,11,0,0,1,0-14H13a1,1,0,0,0,0-2H9.7A10.86,10.86,0,0,1,16,5a11,11,0,0,1,8.48,4H22a1,1,0,0,0,0,2h3.79A10.92,10.92,0,0,1,27,16Z"></path><path d="M17,11h1a1,1,0,0,0,0-2H17a1,1,0,0,0,0,2Z"></path><path d="M21,17H16a1,1,0,0,0,0,2h5a1,1,0,0,0,0-2Z"></path><path d="M12,17H11a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Z"></path></g></svg>-->
                    <div id="menu-descr">
                        <div class="spacing-top"></div>
                        <div class="menu-item">
                            Am Morgen
                        </div>
                        <div class="spacing-small"></div>
                        <div class="menu-item">
                            Ab zur Arbeit
                        </div>
                        <div class="spacing-small"></div>
                        <div class="menu-item">
                            Während der Arbeit
                        </div>
                        <div class="spacing-small"></div>
                        <div class="menu-item">
                            In der Pause
                        </div>
                        <div class="spacing-small"></div>
                        <div class="menu-item">
                            Nach der Arbeit
                        </div>
                        <div class="spacing-small"></div>
                        <div class="menu-item">
                            Beim Sport
                        </div>
                        <div class="spacing-small"></div>
                        <div class="menu-item">
                            Am Abend
                        </div>
                        <div class="spacing-small"></div>
                        <div class="spacing"></div>
                    </div>
                    <!--<div class="purpouse">
                        Hier folgen Fakten zum Thema Nachhaltigkeit und Umwelt, angelehnt an einen gewöhnlichen Tagesablauf
                    </div>-->
                    <h2>
                        Der Tagesablauf
                    </h2>
                    <section class="demo section04">
                        <a href="#morning"><span></span></a>
                    </section>
                </div>
            </div>
        </div>
        <!-- /*
            Der Content für die einzelnen Screens befindet sich jetzt in separaten PHP-Dateien.
         */ -->
        <?php 
        require("morning.php");
        require("morning2.php");
        require("gotowork.php");
        require("gotowork2.php");
        require("work.php");
        require("work2.php");
        require("ctabetween.php");
        require("break.php");
        require("break2.php");
        require("afterwork.php");
        require("afterwork2.php");
        require("sports.php");
        require("sports2.php");
        require("evening.php");
        require("evening2.php"); 
        ?>
        <div id="x_end" data-anchor="end" class="mainview lastpage">
            <div class="darkbg lastpage">
                <div class="contentcontainer lastpage">
                    <h2>Zusammen die Welt verbessern</h2>
                    <div class="fact lastpage">
                        Wir hoffen du findest diese Fakten und Infos spannend. <br>Lass uns über unseren Newsletter in Kontakt bleiben!
                    </div>
                    <a href="newsletter.html" target="_blank" class="end-button">Klar, mach ich</a>
                    <div class="calltoshare">Teile die Botschaft mit deinen Freunden!</div>
                    <?php
                    share(
                        "home",
                        "Wusstest du, dass jeder Mensch pro Woche Plastik in der Menge von einer Kreditkarte zu sich nimmt?",
                        "createimpact,impact,noplastic"
                    );
                ?>
                    <div class="imprint-link">
                        <a href="impressum.html" target="_blank">Impressum</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<script>
    function handleOutboundLinkClicks(url) {
        ga('send', 'event', {
            eventCategory: 'Amazon Link',
            eventAction: 'click',
            eventLabel: url
        });
    }
    var trackOutboundLink = function(url) {
        ga('send', 'event', 'Amazon Link', 'click', url, {'hitCallback':
            function () {
            document.location = url;
            }
        });
    }
    $(document).ready(function () {
        $('#loadscreen').hide();
        $('.mainbag').fullpage({
            anchors: ['home', 'purpouse', 'morning', 'morning2','gotowork','gotowork2','work', 'work2', 'ctabetween', 'break', 'break2', 'afterwork', 'afterwork2', 'sports', 'sports2', 'evening', 'evening2', 'end'],
            autoScrolling:true,
            menu: '#navicontainer',
            scrollHorizontally: true,
            sectionSelector: '.mainview',
            scrollingSpeed: 700,
            afterLoad: function(anchorLink, index){
                if(anchorLink == 'home'){
                    $('#navi').fadeOut(700);
                }
            },
            onLeave: function(index, nextIndex, direction){
                if(index == 1){
                    $('#navi').fadeIn(700);
                }
            }
        });
        // Methods
        // $.fn.fullpage.
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            margin:20,
            autoWidth:true,
        });
        /*
        owl.on('mousewheel', '.owl-stage', function (e) {
            if (e.deltaY>0) {
                console.log("next");
                owl.trigger('next.owl');
            } else {
                console.log("prev");
                owl.trigger('prev.owl');
            }
            e.preventDefault();
        });*/
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
    window.cookieconsent.initialise({
            "palette": {
            "popup": {
                "background": "rgba(39,99,49,0.8)"
            },
            "button": {
                "background": "#fff",
                "text": "#197037"
            }
        },
            "content": {
                "message": "Diese Webseite verwendet Cookies.",
                "dismiss": "Verstanden",
                "deny": "Nicht erlauben",
                "link": "Mehr erfahren.",
                "href": "https://support.mozilla.org/de/kb/cookies-informationen-websites-auf-ihrem-computer"
            }
        }
    );
</script>
</body>
</html>
