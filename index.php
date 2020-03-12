<?php
function amzn($url, $imgsrc, $title, $description) {
    echo '<a href="https://amzn.to/'.$url.'" target="_blank" onclick="handleOutboundLinkClicks('."'https://amzn.to/".$url."');\">\n";
    echo "<div class=\"product\">\n";
    echo "<img src=\"".$imgsrc."\"/>\n";
    echo "<div class=\"title\">".$title."</div>\n";
    echo $description;
    echo "</div>\n";
    echo "</a>\n";
}

function share($url, $text, $hashtags) {
    echo "<div class=\"sharemenu\">\n";
    echo "<a href=\"http://twitter.com/share?text=".$text."&url=http://www.dailyimpact.earth/".$url."/&hashtags=".$hashtags."\">\n";
    echo "<i class=\"fab fa-twitter\"></i></a>\n";
    echo "<a href=\"https://www.linkedin.com/shareArticle?mini=true&url=http://www.dailyimpact.earth/".$url."/&title=".$text."\">\n";
    echo "<i class=\"fab fa-linkedin\"></i></a>\n";
    echo "<a href=\"whatsapp://send?text=".$text." --> https://www.dailyimpact.earth/".$url."/\" data-action=\"share/whatsapp/share\" title=\"Share on whatsapp\">\n";
    echo "<i class=\"fab fa-whatsapp-square\"></i></a>\n";
    echo "<a href=\"https://www.facebook.com/sharer/sharer.php?u=https://www.dailyimpact.earth/".$url."/&quote=".$text."\">\n";
    echo "<i class=\"fab fa-facebook-square\"></i></a></div>\n";
}

echo "<!DOCTYPE html>\n"
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>daily impact</title>
    <link rel="icon" type="image/png" href="/images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/viewScroller.css">
    <link rel="stylesheet" type="text/css" href="css/arrow.css">
    <link rel="stylesheet" type="text/css" href="css/impact.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111111698-4"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-111111698-4');
    </script>
    <script src="https://kit.fontawesome.com/fdc6d52257.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<body>
<div id="navi">
    <div id="navicontainer">
        <a class="nav-home" href="#home"><svg height='300px' width='300px'  fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"><path d="M93.689,48.219L52.673,7.185c-0.688-0.699-1.665-1.099-2.681-1.099c-1.014,0-1.992,0.397-2.686,1.091L6.12,48.393  c-1.104,1.104-1.42,2.687-0.822,4.129c0.59,1.425,1.964,2.346,3.501,2.346h9.211v35.252c0,2.092,1.703,3.795,3.795,3.795h19.51  c2.092,0,3.794-1.703,3.794-3.795V74.392h9.754v15.728c0,2.092,1.702,3.795,3.794,3.795h19.51c2.093,0,3.794-1.703,3.794-3.795  V54.867h9.234c1.65,0,2.971-0.809,3.53-2.162C95.33,51.246,94.913,49.443,93.689,48.219z M58.657,66.798H41.315  c-2.092,0-3.795,1.704-3.795,3.797v15.728H25.6V54.867h48.773v31.455H62.451V70.595C62.451,68.502,60.749,66.798,58.657,66.798z   M82.024,47.276H17.958l32.028-32.049L82.024,47.276z"></path></svg></a>
        <a class="nav-morning" href="#morning"><svg height='300px' width='300px'  fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve"><g><path d="M92.7,63.9c-4.3,0-6.6,2.2-8.1,3.7c-1.2,1.2-1.6,1.5-2.6,1.5c-1,0-1.4-0.3-2.6-1.5c-1.2-1.2-3-2.9-5.9-3.5   c0.8-2.5,1.3-5.1,1.3-7.7c0-13.5-11.2-24.5-25-24.5c-13.8,0-25,11-25,24.5c0,2.7,0.5,5.3,1.3,7.7c-2.9,0.6-4.7,2.3-5.9,3.5   c-1.2,1.2-1.6,1.5-2.6,1.5c-1,0-1.4-0.3-2.6-1.5c-1.5-1.5-3.8-3.7-8.1-3.7c-2.2,0-4,1.8-4,4s1.8,4,4,4c1,0,1.4,0.3,2.6,1.5   c1.5,1.5,3.8,3.7,8.1,3.7c4.3,0,6.6-2.2,8.1-3.7c1.2-1.2,1.6-1.5,2.6-1.5s1.4,0.3,2.6,1.5c1,1,2.4,2.3,4.5,3.1   c0.5,0.3,1,0.4,1.6,0.4c0.6,0.1,1.3,0.2,2,0.2c4.3,0,6.6-2.2,8.1-3.7c1.2-1.2,1.6-1.5,2.6-1.5c1,0,1.4,0.3,2.6,1.5   c1.5,1.5,3.8,3.7,8.1,3.7c0.7,0,1.4-0.1,2-0.2c0.6,0,1.1-0.2,1.6-0.4c2.1-0.8,3.5-2.1,4.5-3.1c1.2-1.2,1.6-1.5,2.6-1.5   c1,0,1.4,0.3,2.6,1.5c1.5,1.5,3.9,3.7,8.1,3.7s6.6-2.2,8.1-3.7c1.2-1.2,1.6-1.5,2.6-1.5c2.2,0,4-1.8,4-4S94.9,63.9,92.7,63.9z    M49.7,63.9c-4.3,0-6.6,2.2-8.1,3.7c-1.2,1.2-1.6,1.5-2.6,1.5c-0.1,0-0.1,0-0.2,0c-3.9-3.2-6-7.7-6-12.6c0-9.1,7.6-16.5,17-16.5   c9.4,0,17,7.4,17,16.5c0,4.9-2.2,9.5-6,12.6c-0.1,0-0.1,0-0.2,0c-1,0-1.4-0.3-2.6-1.5C56.3,66.1,54,63.9,49.7,63.9z"></path><path d="M7,58.4h9.3c2.2,0,4-1.8,4-4s-1.8-4-4-4H7c-2.2,0-4,1.8-4,4S4.8,58.4,7,58.4z"></path><path d="M93.3,50.4H84c-2.2,0-4,1.8-4,4s1.8,4,4,4h9.3c2.2,0,4-1.8,4-4S95.5,50.4,93.3,50.4z"></path><path d="M45.7,12.7V22c0,2.2,1.8,4,4,4c2.2,0,4-1.8,4-4v-9.3c0-2.2-1.8-4-4-4C47.5,8.7,45.7,10.5,45.7,12.7z"></path><path d="M15.7,22.8c-1.6,1.6-1.6,4.1,0,5.7l6.6,6.6c0.8,0.8,1.8,1.2,2.8,1.2s2-0.4,2.8-1.2c1.6-1.6,1.6-4.1,0-5.7l-6.6-6.6   C19.8,21.2,17.3,21.2,15.7,22.8z"></path><path d="M78.1,22.8l-6.6,6.6c-1.6,1.6-1.6,4.1,0,5.7c0.8,0.8,1.8,1.2,2.8,1.2s2-0.4,2.8-1.2l6.6-6.6c1.6-1.6,1.6-4.1,0-5.7   C82.2,21.2,79.6,21.2,78.1,22.8z"></path><path d="M86.2,87.3c0-2.2-1.8-4-4-4c-1,0-1.4-0.3-2.6-1.5c-1.5-1.5-3.8-3.7-8.1-3.7c-4.3,0-6.6,2.2-8.1,3.7   c-1.2,1.2-1.6,1.5-2.6,1.5c-1,0-1.4-0.3-2.6-1.5c-1.5-1.5-3.8-3.7-8.1-3.7c-4.3,0-6.6,2.2-8.1,3.7c-1.2,1.2-1.6,1.5-2.6,1.5   c-1,0-1.4-0.3-2.6-1.5c-1.5-1.5-3.8-3.7-8.1-3.7s-6.6,2.2-8.1,3.7c-1.2,1.2-1.6,1.5-2.6,1.5c-2.2,0-4,1.8-4,4s1.8,4,4,4   c4.3,0,6.6-2.2,8.1-3.7c1.2-1.2,1.6-1.5,2.6-1.5s1.4,0.3,2.6,1.5c1.5,1.5,3.8,3.7,8.1,3.7s6.6-2.2,8.1-3.7c1.2-1.2,1.6-1.5,2.6-1.5   c1,0,1.4,0.3,2.6,1.5c1.5,1.5,3.8,3.7,8.1,3.7c4.3,0,6.6-2.2,8.1-3.7c1.2-1.2,1.6-1.5,2.6-1.5c1,0,1.4,0.3,2.6,1.5   c1.5,1.5,3.8,3.7,8.1,3.7C84.5,91.3,86.2,89.5,86.2,87.3z"></path></g></svg></a>
        <a class="nav-morning2 small-nav" href="#morning2"><img src="img/subnav.png"></a>
        <a class="nav-gotowork" href="#gotowork"><svg height='300px' width='300px'  fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve"><path d="M384.4,223.1c-2.1,0-4.2,0.1-6.3,0.2L341,70c-2.2-9-10.2-15.3-19.4-15.3H250c-11,0-20,9-20,20s9,20,20,20h55.8l33.4,137.9  c-33,14.7-57.5,45-64.1,81.5h-50.3c-7.1-38.7-34.3-70.5-70.4-84.1l6.4-35.6H197c11,0,20-9,20-20s-9-20-20-20h-52.9  c-9.7,0-18,6.9-19.7,16.5l-9.3,52.1c-61,0.3-110.6,50-110.6,111.1c0,61.3,49.8,111.1,111.1,111.1c54.4,0,99.9-39.4,109.3-91.1h50.3  c9.4,51.8,54.9,91.1,109.3,91.1c61.3,0,111.1-49.8,111.1-111.1S445.7,223.1,384.4,223.1z M348.9,272.6l10.1,41.6h-42.8  C321.4,296.5,333.3,281.6,348.9,272.6z M183.8,314.2h-44.3l7.8-43.6C164.8,279.3,178.2,295.1,183.8,314.2z M115.6,405.3  c-39.2,0-71.1-31.9-71.1-71.1c0-36.6,27.8-66.8,63.4-70.7l-12,67.2c-1,5.8,0.6,11.8,4.4,16.4c3.8,4.5,9.4,7.2,15.3,7.2h68.2  C175.1,383.7,147.8,405.3,115.6,405.3z M384.4,405.3c-32.3,0-59.6-21.6-68.2-51.1h68.2c6.1,0,11.9-2.8,15.7-7.6s5.2-11.1,3.7-17.1  l-16.1-66.3c37.6,1.8,67.7,32.9,67.7,71C455.5,373.4,423.7,405.3,384.4,405.3z"></path></svg></a>
        <a class="nav-gotowork2 small-nav" href="#gotowork2"><img src="img/subnav.png"></a>
        <a class="nav-work" href="#work"><svg height='300px' width='300px'  fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve"><title>work</title><path d="M19,6h-3c0-1.7-1.3-3-3-3h-2C9.3,3,8,4.3,8,6H5C3.3,6,2,7.3,2,9v9c0,1.7,1.3,3,3,3h14c1.7,0,3-1.3,3-3V9C22,7.3,20.7,6,19,6  z M11,5h2c0.6,0,1,0.4,1,1h-4C10,5.4,10.4,5,11,5z M5,8h14c0.6,0,1,0.4,1,1c0,1.1-0.9,2-2,2H6c-1.1,0-2-0.9-2-2C4,8.4,4.4,8,5,8z   M19,19H5c-0.6,0-1-0.4-1-1v-5.6C4.6,12.8,5.3,13,6,13h12c0.7,0,1.4-0.2,2-0.6V18C20,18.6,19.6,19,19,19z"></path></svg></a>
        <a class="nav-work2 small-nav" href="#work2"><img src="img/subnav.png"></a>
        <a class="nav-break" href="#break"><svg height='300px' width='300px'  fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 693.17242 722.49878" enable-background="new 0 0 2000 2000" xml:space="preserve"><path style="" d="M 271.26361,8.0222394e-4 C 259.05358,0.03080222 246.49458,1.3768022 233.76558,4.0568022 c -15.941,3.345 -26.601,18.3499998 -24.599,34.5089998 11.471,90.894998 67.73303,157.531998 140.03003,165.910998 4.563,0.467 9.22,0.782 13.783,0.782 7.597,0 15.1,-0.688 22.569,-1.939 13.316,-2.156 23.693,-12.626 25.756,-25.942 9.22,-58.012 -7.034,-110.303998 -44.636,-143.531998 -25.318,-22.34 -58.778,-33.95699978 -95.405,-33.84499977606 z M 277.95961,62.693802 c 14.286,0.781 32.416,4.879 47.387,18.068 15.941,14.097 24.912,35.506998 25.882,60.824998 -32.977,-6.315 -60.141,-36.226 -73.269,-78.892998 z M 182.69758,181.4338 c -16.042,0.149 -31.891,2.552 -47.208,7.352 -111.275004,34.915 -164.753004,181.323 -119.275004,326.35598 38.322,122.089 134.592004,207.357 234.176004,207.357 17.13003,0 33.97803,-2.563 50.17003,-7.627 16.316,-5.095 31.693,-12.753 45.914,-22.849 14.223,10.096 29.633,17.723 45.917,22.849 16.129,5.064 33.042,7.627 50.139,7.627 99.585,0 195.918,-85.268 234.176,-207.357 21.537,-68.61 21.972,-139.68898 1.155,-200.23398 -22.005,-63.857 -64.733,-108.649 -120.403,-126.122 -70.014,-21.942 -151.219,6.283 -210.984,70.891 -46.737,-50.549 -106.48803,-78.775 -163.77703,-78.243 z m 3.397,62.367 c 47.227,0.461 98.02703,31.353 134.87603,83.518 11.722,16.597 39.322,16.597 51.043,0 45.354,-64.11 111.838,-96.151 166.724,-78.865 36.291,11.378 64.672,42.198 80.05,86.802 16.473,47.98 15.88,105.21098 -1.718,161.16098 -29.726,94.803 -103.118,163.594 -174.539,163.568 -10.752,0 -21.321,-1.561 -31.447,-4.749 -15.503,-4.876 -29.911,-13.725 -42.79,-26.227 -6.095,-5.876 -13.907,-8.847 -21.784,-8.847 -7.878,0 -15.754,2.941 -21.881,8.911 -12.814,12.502 -27.224,21.316 -42.728,26.192 -10.127,3.157 -20.69403,4.749 -31.51003,4.749 -71.359,0 -144.812,-68.762 -174.538004,-163.566 -35.165,-112.11798 0,-223.39398 78.331004,-247.99398 10.304,-3.247 21.011,-4.76 31.911,-4.653 z" fill="#FFFFFF"></path></svg></a>
        <a class="nav-break2 small-nav" href="#break2"><img src="img/subnav.png"></a>
        <a class="nav-afterwork" href="#afterwork"><svg height='300px' width='300px'  fill="#FFFFFF" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" version="1.1" x="0px" y="0px" viewBox="0 0 100 100"><g transform="translate(0,-952.36218)"><path d="m 7.0003526,962.36216 c -1.6569,0 -2.9999996,1.34315 -2.9999996,3 0,1.65685 1.3430996,3 2.9999996,3 l 11.9688004,0 c 4.9652,12.29749 9.8559,24.61749 14.7812,36.93754 l -4.5312,10.9062 c -0.3796,0.9093 -0.2728,2.0057 0.2751,2.8246 0.548,0.8189 1.5208,1.3358 2.5061,1.3317 l 50,0 c 1.5849,0.022 3.0427,-1.4149 3.0427,-3 0,-1.5851 -1.4578,-3.0224 -3.0427,-3 l -45.5,0 2.5938,-6.1875 48.1562,-3.8438 c 1.2605,-0.099 2.4015,-1.0809 2.6875,-2.3125 l 6,-25.99999 c 0.3924,-1.75123 -1.1429,-3.6621 -2.9375,-3.65625 l -65.9688,0 -3.25,-8.125 c -0.445,-1.09982 -1.5948,-1.87497 -2.7812,-1.875 z m 22.4375004,16 18.5625,0 0,9 -14.9688,0 z m 24.5625,0 12,0 0,9 -12,0 z m 18,0 17.2188,0 -2.0626,9 -15.1562,0 z m -36.5625,15 12.5625,0 0,8.09374 -9.0312,0.7188 z m 18.5625,0 12,0 0,6.65624 -12,0.9688 z m 18,0 13.75,0 -1.1875,5.18755 -12.5625,1 z m -30,29.00004 c -5.4873,0 -10,4.5126 -10,10 0,5.4873 4.5127,10 10,10 5.4873,0 10,-4.5127 10,-10 0,-5.4873 -4.5127,-10 -10,-10 z m 30,0 c -5.4873,0 -10,4.5127 -10,10 0,5.4873 4.5127,10 10,10 5.4873,0 10,-4.5127 10,-10 0,-5.4874 -4.5127,-10 -10,-10 z m -30,6 c 2.2447,0 4,1.7553 4,4 0,2.2447 -1.7553,4 -4,4 -2.2445,0 -4,-1.7554 -4,-4 0,-2.2446 1.7555,-4 4,-4 z m 30,0 c 2.2445,0 4,1.7554 4,4 0,2.2446 -1.7555,4 -4,4 -2.2447,0 -4,-1.7553 -4,-4 0,-2.2447 1.7553,-4 4,-4 z" style="text-indent:0;text-transform:none;direction:ltr;block-progression:tb;baseline-shift:baseline;color:#000000;enable-background:accumulate;" fill="#FFFFFF" fill-opacity="1" stroke="none" marker="none" visibility="visible" display="inline" overflow="visible"></path></g></svg>
        <a class="nav-afterwork2 small-nav" href="#afterwork2"><img src="img/subnav.png"></a>
        <a class="nav-sports" href="#sports"><svg height='300px' width='300px'  fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" x="0px" y="0px"><title>Ecommerce, business, finance, Sport</title><g data-name="Layer 16"><path d="M28.13,19.11A11,11,0,0,0,19,2.05h0a11,11,0,0,0-9.33,16.8l-8,8,3.53,3.53,8-8a11,11,0,0,0,5.8,1.66A9.14,9.14,0,0,0,20.1,24a5,5,0,1,0,8-4.88ZM12.59,6.69a8.9,8.9,0,0,1,6.35-2.64h0a9,9,0,0,1,7.39,14.14l-.1,0a3.29,3.29,0,0,0-.43-.09l-.19,0c-.21,0-.41,0-.62,0a4.94,4.94,0,0,0-.87.08l-.3.08a4.58,4.58,0,0,0-.53.14c-.11,0-.22.1-.33.15s-.3.13-.44.21-.2.14-.31.21l-.38.26c-.1.09-.18.18-.27.27l-.34.32c-.08.1-.15.21-.22.31a4.61,4.61,0,0,0-.28.38l0,.05L10.43,10.19A8.94,8.94,0,0,1,12.59,6.69ZM5.16,27.54l-.7-.7,6.37-6.38.08.08c.09.1.17.2.26.29l.09.07.28.27Zm8.53-7.18-.07-.05a10.18,10.18,0,0,1-1.93-1.93l0-.06A8.91,8.91,0,0,1,10,12.55L19.45,22A9,9,0,0,1,13.69,20.36ZM25,26a3,3,0,0,1-3-2.8v-.36a3.79,3.79,0,0,1,0-.41A3,3,0,0,1,25,20a3,3,0,0,1,0,6Z"></path></g></svg></a>
        <a class="nav-sports2 small-nav" href="#sports2"><img src="img/subnav.png"></a> 
        <a class="nav-evening" href="#evening"><svg height='300px' width='300px'  fill="#FFFFFF" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" version="1.1" x="0px" y="0px" viewBox="0 0 100 100"><g transform="translate(0,-952.36218)"><path style="text-indent:0;text-transform:none;direction:ltr;block-progression:tb;baseline-shift:baseline;color:#000000;enable-background:accumulate;" d="m 49.942974,957.42282 a 2.998025,2.9962004 0 0 0 -2.966499,3.05832 l 0,11.17221 c -12.825811,1.48363 -22.8547,12.35121 -22.982561,25.52757 -1.241802,1.41021 -1.998483,3.24048 -1.998483,5.24288 0,4.3741 3.617147,7.989 7.993934,7.989 l 14.988626,0 a 2.998025,2.9962004 0 1 0 0,-5.9918 l -14.988626,0 c -1.159013,0 -1.998484,-0.8389 -1.998484,-1.9972 0,-1.1583 0.839471,-1.9973 1.998484,-1.9973 l 39.96967,0 c 1.159012,0 1.998483,0.839 1.998483,1.9973 0,1.1583 -0.839471,1.9972 -1.998483,1.9972 l -14.988626,0 a 2.998025,2.9962004 0 1 0 0,5.9918 l 14.988626,0 c 4.376787,0 7.993934,-3.6149 7.993934,-7.989 0,-2.0024 -0.756681,-3.83267 -1.998484,-5.24288 -0.127861,-13.17636 -10.156749,-24.04394 -22.98256,-25.52757 l 0,-11.17221 a 2.998025,2.9962004 0 0 0 -3.028951,-3.05832 z m 0.03123,20.03509 c 10.050297,0 18.230854,7.34683 19.672572,16.97677 l -39.345144,0 c 1.441718,-9.62994 9.622274,-16.97677 19.672572,-16.97677 z M 26.023628,1014.345 a 2.998025,2.9962004 0 0 0 -2.87282,2.0908 l -0.999242,2.9959 a 2.998025,2.9962004 0 1 0 5.683188,1.9037 l 0.999242,-2.9959 a 2.998025,2.9962004 0 0 0 -2.810368,-3.9945 z m 14.988626,0 a 2.998025,2.9962004 0 0 0 -2.87282,2.0908 l -0.999241,2.9959 a 2.998025,2.9962004 0 1 0 5.683187,1.9037 l 0.999242,-2.9959 a 2.998025,2.9962004 0 0 0 -2.810368,-3.9945 z m 8.930724,0 a 2.998025,2.9962004 0 0 0 -2.966499,3.0583 l 0,2.9959 a 2.998025,2.9962004 0 1 0 5.99545,0 l 0,-2.9959 a 2.998025,2.9962004 0 0 0 -3.028951,-3.0583 z m 8.899496,0 a 2.998025,2.9962004 0 0 0 -2.716688,3.9945 l 0.999242,2.9959 a 2.998025,2.9962004 0 1 0 5.683187,-1.9037 l -0.999242,-2.9959 a 2.998025,2.9962004 0 0 0 -2.966499,-2.0908 z m 14.988627,0 a 2.998025,2.9962004 0 0 0 -2.716689,3.9945 l 0.999242,2.9959 a 2.998025,2.9962004 0 1 0 5.683187,-1.9037 l -0.999241,-2.9959 a 2.998025,2.9962004 0 0 0 -2.966499,-2.0908 z m -50.805198,11.9836 a 2.998025,2.9962004 0 0 0 -2.87282,2.0908 l -0.999242,2.9959 a 2.998025,2.9962004 0 1 0 5.683188,1.9037 l 0.999241,-2.9959 a 2.998025,2.9962004 0 0 0 -2.810367,-3.9945 z m 14.988626,0 a 2.998025,2.9962004 0 0 0 -2.87282,2.0908 l -0.999242,2.9959 a 2.998025,2.9962004 0 1 0 5.683188,1.9037 l 0.999242,-2.9959 a 2.998025,2.9962004 0 0 0 -2.810368,-3.9945 z m 11.928449,0 a 2.998025,2.9962004 0 0 0 -2.966499,3.0583 l 0,2.9959 a 2.998025,2.9962004 0 1 0 5.99545,0 l 0,-2.9959 a 2.998025,2.9962004 0 0 0 -3.028951,-3.0583 z m 11.897222,0 a 2.998025,2.9962004 0 0 0 -2.716689,3.9945 l 0.999242,2.9959 a 2.998025,2.9962004 0 1 0 5.683187,-1.9037 l -0.999241,-2.9959 a 2.998025,2.9962004 0 0 0 -2.966499,-2.0908 z m 14.988626,0 a 2.998025,2.9962004 0 0 0 -2.716689,3.9945 l 0.999242,2.9959 a 2.998025,2.9962004 0 1 0 5.683188,-1.9037 l -0.999242,-2.9959 a 2.998025,2.9962004 0 0 0 -2.966499,-2.0908 z m -56.800648,11.9836 a 2.998025,2.9962004 0 0 0 -2.87282,2.0908 l -0.999242,2.9959 a 2.998025,2.9962004 0 1 0 5.683187,1.9037 l 0.999242,-2.9959 a 2.998025,2.9962004 0 0 0 -2.810367,-3.9945 z m 14.988626,0 a 2.998025,2.9962004 0 0 0 -2.87282,2.0908 l -0.999242,2.9959 a 2.998025,2.9962004 0 1 0 5.683188,1.9037 l 0.999241,-2.9959 a 2.998025,2.9962004 0 0 0 -2.810367,-3.9945 z m 14.926174,0 a 2.998025,2.9962004 0 0 0 -2.966499,3.0583 l 0,2.9959 a 2.998025,2.9962004 0 1 0 5.99545,0 l 0,-2.9959 a 2.998025,2.9962004 0 0 0 -3.028951,-3.0583 z m 14.894947,0 a 2.998025,2.9962004 0 0 0 -2.716689,3.9945 l 0.999242,2.9959 a 2.998025,2.9962004 0 1 0 5.683188,-1.9037 l -0.999242,-2.9959 a 2.998025,2.9962004 0 0 0 -2.966499,-2.0908 z m 14.988626,0 a 2.998025,2.9962004 0 0 0 -2.716688,3.9945 l 0.999241,2.9959 a 2.998025,2.9962004 0 1 0 5.683188,-1.9037 l -0.999242,-2.9959 a 2.998025,2.9962004 0 0 0 -2.966499,-2.0908 z" fill="#FFFFFF" fill-opacity="1" stroke="none" marker="none" visibility="visible" display="inline" overflow="visible"></path></g></svg></a>
        <a class="nav-evening2 small-nav" href="#evening2"><img src="img/subnav.png"></a> 
    </div>
</div>
<div id="site">
    <main class="mainbag">
        <div id="hero" vs-anchor="home" class="mainview">
            <div class="darkbg">
                <div class="contentcontainer">
                    <div class="logo">
                        <svg fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" x="0px" y="0px"><defs><style>.cls-1{fill:none;}</style></defs><title>Moon</title><g><path class="cls-1" d="M21,10a1,1,0,0,1,1-1h2.48A11,11,0,0,0,16,5,10.86,10.86,0,0,0,9.7,7H13a1,1,0,0,1,0,2H7.52a11,11,0,0,0,0,14H13a1,1,0,0,1,0,2H9.7A10.86,10.86,0,0,0,16,27a11,11,0,0,0,7.53-3H21a1,1,0,0,1,0-2h4.21a10.94,10.94,0,0,0,.58-11H22A1,1,0,0,1,21,10Zm-9,9H11a1,1,0,0,1,0-2h1a1,1,0,0,1,0,2ZM17,9h1a1,1,0,0,1,0,2H17a1,1,0,0,1,0-2Zm4,10H16a1,1,0,0,1,0-2h5a1,1,0,0,1,0,2Z"></path><path d="M31,10a1,1,0,0,0-1-1H26.94A13,13,0,0,0,6.64,7H2A1,1,0,0,0,2,9H5.06a12.92,12.92,0,0,0,0,14H2a1,1,0,0,0,0,2H6.64a13,13,0,0,0,19.59-1H30a1,1,0,0,0,0-2H27.52A12.95,12.95,0,0,0,28,11h2A1,1,0,0,0,31,10Zm-4,6a10.94,10.94,0,0,1-1.79,6H21a1,1,0,0,0,0,2h2.53A11,11,0,0,1,16,27a10.86,10.86,0,0,1-6.3-2H13a1,1,0,0,0,0-2H7.52a11,11,0,0,1,0-14H13a1,1,0,0,0,0-2H9.7A10.86,10.86,0,0,1,16,5a11,11,0,0,1,8.48,4H22a1,1,0,0,0,0,2h3.79A10.92,10.92,0,0,1,27,16Z"></path><path d="M17,11h1a1,1,0,0,0,0-2H17a1,1,0,0,0,0,2Z"></path><path d="M21,17H16a1,1,0,0,0,0,2h5a1,1,0,0,0,0-2Z"></path><path d="M12,17H11a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Z"></path></g></svg>
                        <span>daily impact</span>
                    </div>
                    <h1>Wusstest du, dass jeder Mensch pro Woche Plastik in der Menge von einer Kreditkarte isst?</h1>
                    <span class="start-day">Sieh dir deinen täglichen<br>ökologischen Fußabdruck an</span>
                    <div class="sharemenu">
                        <a href="http://twitter.com/share?text=Wusstest du, dass jeder Mensch pro Woche Plastik in der Menge von einer Kreditkarte isst?&url=http://www.dailyimpact.earth&hashtags=createimpact,impact,noplastic">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=http://www.dailyimpact.earth&title=usstest du, dass jeder Mensch pro Woche Plastik in der Menge von einer Kreditkarte isst?">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="whatsapp://send?text=Wusstest du, dass jeder Mensch pro Woche Plastik in der Menge von einer Kreditkarte isst? --> https://www.dailyimpact.earth/" data-action="share/whatsapp/share" title="Share on whatsapp">
                            <i class="fab fa-whatsapp-square"></i>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.dailyimpact.earth&quote=Wusstest du, dass jeder Mensch pro Woche Plastik in der Menge von einer Kreditkarte isst?">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </div>
                    <section id="section04" class="demo">
                        <a href="#morning"><span></span></a>
                    </section>
                </div>
            </div>
        </div>
        <div id="x_morning" vs-anchor="morning" class="mainview">
            <div class="darkbg">
                <div class="contentcontainer">
                    <h2>Am Morgen</h2>
                    <div class="fact">
                        Eine Plastikflasche braucht bis zu 450 Jahre bis sie sich zersetzt.
                    </div>
                    <div class="cta-products">
                        Genieße deinen Morgen lieber plastikfrei mit folgenden Produkten
                    </div>
                    <div class="owl-carousel">
                        <?php
                            amzn(
                                "2uHbVMK", 
                                "img/zahnbuerste.jpg", 
                                "Bambus Zahnbürsten",
                                "Unsere Bambus Zahnbürsten sind aus Bio-Moso-Bambus hergestellt, zu 100% biologisch abbaubar und umweltfreundlich."
                            );
                            amzn(
                                "2OYddd3", 
                                "img/zahnpasta.jpg", 
                                "Kokosnuss Aktivkohle Zahnpasta",
                                "Natürliche Zahnpasta ohne Kunststoffe, tierischen oder schädlichen Inhaltsstoffen und ist vegan und aus recycelbaren Tuben."
                            );
                            amzn(
                                "38x9fQ9", 
                                "img/wattestaebchen.jpg", 
                                "Bambus Wattestäbchen",
                                "Wattestäbchen aus Bambus und Baumwolle sind zu 100% biologisch abbaubar und werden nur aus organisch angebautem Bambus gefertigt."
                            );
                            amzn(
                                "2Hv6uTE", 
                                "img/zahnseide.jpg", 
                                "Kompostierbare Zahnseide",
                                "Die ökologische und ressourcenschonende Alternative zu herkömmlicher Nylon-Zahnseide wird aus den Kokons der Seidenraupe gewonnen."
                            );
                        ?>
                    </div>
                    <?php
                        share(
                            "morning",
                            "Wusstest du, dass eine Plastikflasche bis zu 450 Jahre braucht bis sie sich zersetzt?",
                            "createimpact,impact,noplastic"
                        );
                    ?>
                </div>
            </div>
        </div>
        <div id="x_morning2" vs-anchor="morning2" class="mainview">
            <div class="darkbg">
                <div class="contentcontainer">
                    <h2>Am Morgen</h2>
                    <div class="fact">
                        Jeden Tag werden 51.000 Tonnen Bäume für die tägliche Nachfrage von Küchentüchern verarbeitet.
                    </div>
                    <div class="cta-products">
                        Jeder kann einen Unterschied machen, auch du!
                    </div>
                    <div class="owl-carousel">
                        <a href="https://amzn.to/3bJct5p" target="_blank" onclick="handleOutboundLinkClicks('https://amzn.to/3bJct5p');">
                            <div class="product">
                                <img src="img/handbrause.jpg"/>
                                <div class="title">Wassersparender Duschkopf</div>
                                3 Wege Funktion Duschkopf reinigt Wasser mit Ionenfiltern und Mineralkugeln und führt zu bis zu 30% Wasserersparnis.
                            </div>
                        </a>
                        <a href="https://amzn.to/2u6F5oa" target="_blank" onclick="handleOutboundLinkClicks('https://amzn.to/2u6F5oa');">
                            <div class="product">
                                <img src="img/haarshampoo.jpg"/>
                                <div class="title">Mikroplastikfreies Haarshampoo</div>
                                Handgemachtes, natürliches und veganes Haarshampoo ohne Mirkoplastik.
                            </div>
                        </a>
                        <a href="https://amzn.to/3bJct5p" target="_blank" onclick="handleOutboundLinkClicks('https://amzn.to/3bJct5p');">
                            <div class="product">
                                <img src="img/zahnpasta1.jpg"/>
                                <div class="title">Aktivkohlezahnpasta aus Kokos</div>
                                Es besteht zu 100% aus organischer Aktivkohle, aus der Kokosnuss, mit maximaler Schonwirkung für Zähne, Zahnfleisch und Körper.
                            </div>
                        </a>
                        <a href="https://amzn.to/37yONx0" target="_blank" onclick="handleOutboundLinkClicks('https://amzn.to/37yONx0');">
                            <div class="product">
                                <img src="img/kokosschwamm.jpg"/>
                                <div class="title">Kokosschwamm</div>
                                Kokosfasern sind umweltschonend und bilogisch abbaubar!
                            </div>
                        </a>
                        <a href=" https://amzn.to/38vkFEk" target="_blank" onclick="handleOutboundLinkClicks('https://amzn.to/38vkFEk');">
                            <div class="product">
                                <img src="img/müllbeutel.jpg"/>
                                <div class="title">Kompostierbare Müllsäcke</div>
                                100% heim kompstierbare und biologisch abbaubare Müllsäcke.
                            </div>
                        </a>
                    </div>
                    <?php
                        share(
                            "morning2",
                            "Wusstest du, dass jeden Tag werden 51.000 Tonnen Bäume für die tägliche Nachfrage von Küchentüchern verarbeitet werden?",
                            "createimpact,impact,reducingwaste"
                        );
                    ?>
                </div>
            </div>
        </div>
        <div id="commute" vs-anchor="gotowork" class="mainview">
            <div class="darkbg">
                <div class="contentcontainer">
                    <h2>Ab zur Arbeit</h2>
                    <div class="fact">
                        Auf dem durchschnittlichen Arbeitsweg verbraucht ein Pendler pro Tag 4,2kg CO<sup>2</sup>.
                    </div>
                    <img class="graph" src="verkehr.svg">
                    <?php
                        share(
                            "gotowork",
                            "Wusstest du, dass ein Pendler pro Tag 4,2kg CO2 auf dem durchschnittlichen Arbeitsweg verbraucht?",
                            "createimpact,impact,cleancommute"
                        );
                    ?>
                </div>
            </div>
        </div>
        <div id="x_gotowork2" vs-anchor="gotowork2" class="mainview">
            <div class="darkbg">
                <div class="contentcontainer">
                    <h2>Ab zur Arbeit</h2>
                    <div class="fact">
                        Neuer Fact mit Produkten.
                    </div>
                    <div class="owl-carousel">
                        <a href="https://amzn.to/3bJct5p" target="_blank">
                            <div class="product">
                                <img src="img/ebike.jpg"/>
                                <div class="title">E-Bike</div>
                                Elektro Bike mit hoher Akkulaufzeit mit Reichweite bis zu 50km bei einer Höchstgeschwindigkeit von 25 km pro Stunde.
                            </div>
                        </a>
                        <a href="https://amzn.to/336Ict3" target="_blank">
                            <div class="product">
                                <img src="img/escooter.jpg"/>
                                <div class="title">Elektro Scooter</div>
                                Der hervorragend verarbeitete und umweltfreundliche Elektroroller Elettrico 3000 Li von elektroroller-futura, bietet Ihnen maximalen Fahrspaß für 2 Personen.
                            </div>
                        </a>
                    </div>
                    <?php
                        share(
                            "gotowork2",
                            "Wusstest du, dass ein Pendler pro Tag 4,2kg CO2 auf dem durchschnittlichen Arbeitsweg verbraucht?",
                            "createimpact,impact,cleancommute"
                        );
                    ?>
                </div>
            </div>
        </div>
        <div id="x_work" vs-anchor="work" class="mainview">
            <div class="darkbg">
                <div class="contentcontainer">
                    <h2>Während der Arbeit</h2>
                    <div class="fact">
                        Du schwimmst in Arbeit, aber im Pazifik schwimmt eine Plastikinsel 4 Mal so groß wie Deutschland.
                    </div>
                    <div class="cta-products">
                        So bewältigst du den Office-Alltag nachhaltiger
                    </div>
                    <div class="owl-carousel">
                        <a href="https://amzn.to/3bJct5p" target="_blank">
                            <div class="product">
                                <img src="img/kugelschreiber.jpg"/>
                                <div class="title">Kugelschreiber Bambus</div>
                                Bambus Kugelschreiber aus nachhaltigen Materialien
                            </div>
                        </a>
                        <a href="https://amzn.to/2UXADDk" target="_blank">
                            <div class="product">
                                <img src="img/kaffee.jpg"/>
                                <div class="title">Bambus Kaffeebecher</div>
                                Bambusbecher sind langlebig, wiederverwendbar und umweltfreundlich.
                            </div>
                        </a>
                        <a href="https://amzn.to/2uPu2jw" target="_blank">
                            <div class="product">
                                <img src="img/handyhuelle.jpg"/>
                                <div class="title">BioCase Hülle für IPhone</div>
                                IPhone Schutzhülle aus biologisch abbauabren Rohstoffen hergestellt und frei von umweltschädlichen Substanzen.
                            </div>
                        </a>
                        <a href="https://amzn.to/38y0EwH" target="_blank">
                            <div class="product">
                                <img src="img/rucksack-schwarz1.jpg"/>
                                <div class="title">Nachhaltiger Rucksack</div>
                                Nachhaltiger und ökologischer Rucksack aus recycelte PET-Materialien, vegan und frei von AZO-Farbstoffen und Schwermetallen.
                            </div>
                        </a>
                        <a href="https://amzn.to/323vjzx" target="_blank">
                            <div class="product">
                                <img src="img/papierrucksack.jpg"/>
                                <div class="title">Rucksack aus Kraftpapier</div>
                                Rucksack aus pflanzlischen Materialien wie Zellstoff und Naturlatex. Biologisch abbaubar und nachwachsend.
                            </div>
                        </a>
                        <a href="https://amzn.to/2uRE17P" target="_blank">
                            <div class="product">
                                <img src="img/rucksack-schwarz2.jpg"/>
                                <div class="title">Johnny Urban aus recyceltem PET</div>
                                Stylischer Johnny Urban Rucksack aus 100% recycelten PET Flaschen.
                            </div>
                        </a>
                        <a href="https://amzn.to/2SwoFib" target="_blank">
                            <div class="product">
                                <img src="img/jacke.jpg"/>
                                <div class="title">Recycled Patagonia Wool Bomber Jacke</div>
                                Außenmaterial aus 60 % recycelter Wolle, 30 % recyceltem Polyester und 10 % recyceltem Nylon, gefüttert mit recyceltem Polyester Ripstop.
                            </div>
                        </a>
                    </div>
                    <?php
                        share(
                            "work",
                            "Wusstest du, dass im Pazifik eine Plastikinsel 4 Mal so groß wie Deutschland schwimmt?",
                            "createimpact,impact,noplastic"
                        );
                    ?>
                </div>
            </div>
        </div>
        <div id="x_work2" vs-anchor="work2" class="mainview">
            <div class="darkbg">
                <div class="contentcontainer">
                    <h2>Während der Arbeit</h2>
                    <div class="fact">
                        Neuer fact
                    </div>
                    <?php
                        share(
                            "work2",
                            "Wusstest du, dass im Pazifik eine Plastikinsel 4 Mal so groß wie Deutschland schwimmt?",
                            "createimpact,impact,noplastic"
                        );
                    ?>
                </div>
            </div>
        </div>
        <div id="x_break" vs-anchor="break" class="mainview">
            <div class="darkbg">
                <div class="contentcontainer">
                    <h2>In der Pause</h2>
                    <div class="fact">
                        Erstes
                    </div>
                    <?php
                        share(
                            "break",
                            "Wusstest du, dass im Pazifik eine Plastikinsel 4 Mal so groß wie Deutschland schwimmt?",
                            "createimpact,impact,noplastic"
                        );
                    ?>
                </div>
            </div>
        </div>
        <div id="x_break2" vs-anchor="break2" class="mainview">
            <div class="darkbg">
                <div class="contentcontainer">
                    <h2>In der Pause</h2>
                    <div class="fact">
                        Veganer erzeugen mit ihrer Ernährung 40% weniger CO<sup>2</sup> pro Jahr als Fleischesser.
                    </div>
                    <div class="cta-products">
                        Teste diese veganen Produkte und plastikfreien Alternativen
                    </div>
                    <div class="owl-carousel">
                        <a href="https://amzn.to/38wPKaJ" target="_blank">
                            <div class="product">
                                <img src="img/proteinriegel.jpg"/>
                                <div class="title">Riegel aus Grillenmehl</div>
                                Vegane und proteinreiche Snacks aus Grillenmehl.
                            </div>
                        </a>
                        <a href="https://amzn.to/3bHtblG" target="_blank">
                            <div class="product">
                                <img src="img/brotdose.jpg"/>
                                <div class="title">Plastikfreie Lunchboxmit aus Bambusholzdeckel</div>
                                Umweltfreundliche edelstahl Brotdose ohne Plastik, BPA, ohne chemische Stoffe und Toxizität.
                            </div>
                        </a>
                        <a href="https://amzn.to/39ImkGN" target="_blank">
                            <div class="product">
                                <img src="img/besteck.jpg"/>
                                <div class="title">Bambus Essbesteck </div>
                                Wiederverwendbares, schadstofffreies und umweltfreundliches Bambusbesteckset.
                            </div>
                        </a>
                        <a href="https://amzn.to/2SRp1ia" target="_blank">
                            <div class="product">
                                <img src="img/einkaufsnetze.jpg"/>
                                <div class="title">Wiederverwendbare Obst-  und Gemüsebeutel</div>
                                100% BPA freie Bio Baumwolle, biologisch abbaubaubar und waschbar.
                            </div>
                        </a>
                        <a href="https://amzn.to/37sWlSd" target="_blank">
                            <div class="product">
                                <img src="img/erdnuss.jpg"/>
                                <div class="title">Bio Peanut Butter </div>
                                100% Bio Erdnüsse ohne Zusätze wie Palmöl, Salz oder Zucker.
                            </div>
                        </a>
                    </div>
                    <?php
                        share(
                            "break2",
                            "Wusstest du, dass Veganer mit ihrer Ernährung 40% weniger CO2 pro Jahr erzeugen als Fleischesser?",
                            "createimpact,impact,govegan"
                        );
                    ?>
                </div>
            </div>
        </div>
        <div id="x_afterwork" vs-anchor="afterwork" class="mainview">
            <div class="darkbg">
                <div class="contentcontainer">
                    <h2>Nach der Arbeit</h2>
                    <div class="fact">
                        Die globale Massentierhaltung trägt mit 20% zur weltweiten Treibhausgasemission bei.
                    </div>
                    <img class="graph" src="tiere.svg">
                    <div class="sharemenu">
                        <a href="http://twitter.com/share?text=Wusstest du, dass die globale Massentierhaltung mit 20% zur weltweiten Treibhausgasemission beiträgt?&url=http://www.dailyimpact.earth/afterwork/&hashtags=createimpact,impact,govegan">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=http://www.dailyimpact.earth/afterwork/&title=Wusstest du, dass die globale Massentierhaltung mit 20% zur weltweiten Treibhausgasemission beiträgt?">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="whatsapp://send?text=Wusstest du, dass die globale Massentierhaltung mit 20% zur weltweiten Treibhausgasemission beiträgt? --> https://www.dailyimpact.earth/afterwork/" data-action="share/whatsapp/share" title="Share on whatsapp">
                            <i class="fab fa-whatsapp-square"></i>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.dailyimpact.earth/afterwork/&quote=Wusstest du, dass die globale Massentierhaltung mit 20% zur weltweiten Treibhausgasemission beiträgt?">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="x_afterwork2" vs-anchor="afterwork2" class="mainview">
            <div class="darkbg">
                <div class="contentcontainer">
                    <h2>Nach der Arbeit</h2>
                    <div class="fact">
                        Missing here
                    </div>
                    <div class="sharemenu">
                        <a href="http://twitter.com/share?text=Wusstest du, dass die globale Massentierhaltung mit 20% zur weltweiten Treibhausgasemission beiträgt?&url=http://www.dailyimpact.earth/afterwork2/&hashtags=createimpact,impact,govegan">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=http://www.dailyimpact.earth/afterwork2/&title=Wusstest du, dass die globale Massentierhaltung mit 20% zur weltweiten Treibhausgasemission beiträgt?">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="whatsapp://send?text=Wusstest du, dass die globale Massentierhaltung mit 20% zur weltweiten Treibhausgasemission beiträgt? --> https://www.dailyimpact.earth/afterwork2/" data-action="share/whatsapp/share" title="Share on whatsapp">
                            <i class="fab fa-whatsapp-square"></i>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.dailyimpact.earth/afterwork2/&quote=Wusstest du, dass die globale Massentierhaltung mit 20% zur weltweiten Treibhausgasemission beiträgt?">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="x_sports" vs-anchor="sports" class="mainview">
            <div class="darkbg">
                <div class="contentcontainer">
                    <h2>Beim Sport</h2>
                    <div class="fact">
                        Kommt noch!
                    </div>
                    <div class="sharemenu">
                        <a href="http://twitter.com/share?text=Wusstest du, dass die globale Massentierhaltung mit 20% zur weltweiten Treibhausgasemission beiträgt?&url=http://www.dailyimpact.earth/sports/&hashtags=createimpact,impact,govegan">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=http://www.dailyimpact.earth/sports/&title=Wusstest du, dass die globale Massentierhaltung mit 20% zur weltweiten Treibhausgasemission beiträgt?">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="whatsapp://send?text=Wusstest du, dass die globale Massentierhaltung mit 20% zur weltweiten Treibhausgasemission beiträgt? --> https://www.dailyimpact.earth/sports/" data-action="share/whatsapp/share" title="Share on whatsapp">
                            <i class="fab fa-whatsapp-square"></i>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.dailyimpact.earth/sports/&quote=Wusstest du, dass die globale Massentierhaltung mit 20% zur weltweiten Treibhausgasemission beiträgt?">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="x_sports2" vs-anchor="sports2" class="mainview">
            <div class="darkbg">
                <div class="contentcontainer">
                    <h2>Beim Sport</h2>
                    <div class="fact">
                        25% der meisten Tier- und Pflanzengruppen sind bereits vorm Aussterben bedroht.
                    </div>
                    <div class="cta-products">
                        Verdiene dir eine Medaille von Mutter Erde und nutze nachhaltige Alternativen
                    </div>
                    <div class="owl-carousel">
                        <a href="https://amzn.to/2V2o3lU" target="_blank">
                            <div class="product">
                                <img src="img/wasserflasche.jpg"/>
                                <div class="title">Nachhaltige Edelstahl Thermosflasche</div>
                                Wiederverwendbare Thermosflasche ersetzt Plastiktrinkflaschen und hilft somit der Umwelt.
                            </div>
                        </a>
                        <a href="https://amzn.to/2uQGCij" target="_blank">
                            <div class="product">
                                <img src="img/whey.jpg"/>
                                <div class="title">Bio Whey Protein</div>
                                100% Bio Molkenprotein, ausschließlich von zertifizierten Bio-Bauern aus Österreich und Bayern und ohne künstliche Zusatzstoffe.
                            </div>
                        </a>
                        <a href="https://amzn.to/2uHdNFg" target="_blank">
                            <div class="product">
                                <img src="img/bambushandtuecher.jpg"/>
                                <div class="title">Bambus Reisehandtuch</div>
                                Bambus ist ein ultraschnell nachwachsender Rohstoff der im Anbau mit sehr wenig Wasser und ganz ohne Pestizide auskommt.
                            </div>
                        </a>
                        <a href="https://amzn.to/2vCHiIp" target="_blank">
                            <div class="product">
                                <img src="img/yoga.jpg"/>
                                <div class="title">Yogamatte aus 100% Kork und Natur-Kautschuk</div>
                                Yoga Matte aus naturmaterialien Kork und Kautschuk werden ökologisch angebaut und sind gleichzeitig biologisch wieder abbaubar. 
                            </div>
                        </a>
                        <a href="https://amzn.to/31Z46On" target="_blank">
                            <div class="product">
                                <img src="img/proteinshake.jpg"/>
                                <div class="title">Veganer Nahrungsersatz</div>
                                Food Vegan Drink enthält alle Nährstoffe, die dein Körper benötigt: 26g Protein, 40g glutenfreie Kohlenhydrate, 8.4g Ballaststoffe sowie 26 Vitamine & Mineralstoffe.
                            </div>
                        </a>
                    </div>
                    <div class="sharemenu">
                        <a href="http://twitter.com/share?text=Wusstest du, dass bereits 25% der meisten Tier- und Pflanzengruppen vorm Aussterben bedroht sind?&url=http://www.dailyimpact.earth/sports2/&hashtags=createimpact,impact,savetheanimals">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=http://www.dailyimpact.earth/sports2/&title=Wusstest du, dass bereits 25% der meisten Tier- und Pflanzengruppen vorm Aussterben bedroht sind?">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="whatsapp://send?text=Wusstest du, dass bereits 25% der meisten Tier- und Pflanzengruppen vorm Aussterben bedroht sind? --> https://www.dailyimpact.earth/sports2/" data-action="share/whatsapp/share" title="Share on whatsapp">
                            <i class="fab fa-whatsapp-square"></i>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.dailyimpact.earth/sports2/&quote=Wusstest du, dass bereits 25% der meisten Tier- und Pflanzengruppen vorm Aussterben bedroht sind?">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="x_evening" vs-anchor="evening" class="mainview">
            <div class="darkbg">
                <div class="contentcontainer">
                    <h2>Am Abend</h2>
                    <div class="fact">
                        TBD
                    </div>
                    <div class="sharemenu">
                        <a href="http://twitter.com/share?text=Wusstest du, dass bereits 25% der meisten Tier- und Pflanzengruppen vorm Aussterben bedroht sind?&url=http://www.dailyimpact.earth/evening/&hashtags=createimpact,impact,savetheanimals">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=http://www.dailyimpact.earth/evening/&title=Wusstest du, dass bereits 25% der meisten Tier- und Pflanzengruppen vorm Aussterben bedroht sind?">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="whatsapp://send?text=Wusstest du, dass bereits 25% der meisten Tier- und Pflanzengruppen vorm Aussterben bedroht sind? --> https://www.dailyimpact.earth/evening/" data-action="share/whatsapp/share" title="Share on whatsapp">
                            <i class="fab fa-whatsapp-square"></i>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.dailyimpact.earth/evening/&quote=Wusstest du, dass bereits 25% der meisten Tier- und Pflanzengruppen vorm Aussterben bedroht sind?">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="x_evening2" vs-anchor="evening2" class="mainview">
            <div class="darkbg">
                <div class="contentcontainer">
                    <h2>Am Abend</h2>
                    <div class="fact">
                        Der durchschnittliche Deutsche verbraucht 127 Liter Wasser pro Kopf pro Tag.
                    </div>
                    <div class="cta-products">
                        Reinige dein Gewissen mit diesen ökologischen Alternativen
                    </div>
                    <div class="owl-carousel">
                        <a href="https://amzn.to/38AYJHG" target="_blank">
                            <div class="product">
                                <img src="img/seife.jpg"/>
                                <div class="title">Aloe Vera Naturseife</div>
                                Vegane Naturseife Aloe Vera basiert auf rein natürlichen Inhaltsstoffen und wird ohne jegliche Tierversuche hergestellt. 
                            </div>
                        </a>
                        <a href="https://amzn.to/38zWS63" target="_blank">
                            <div class="product">
                                <img src="img/zeroplastic.jpg"/>
                                <div class="title">Zero-Waste Home Set</div>
                                Wiederverwendbare Wattepads, Konjac Schwammset, Bambus Zahnbürsten, Obst und Gemüsebeutel, Bienenwachstücher.
                            </div>
                        </a>
                        <a href="https://amzn.to/2u2vjmR" target="_blank">
                            <div class="product">
                                <img src="img/bambushandtuecher.jpg"/>
                                <div class="title">Organische Baumwollhandtücher</div>
                                Handtuchset besteht aus 100% natürlicher, biologischer und umweltfreundlicher Baumwolle. 
                            </div>
                        </a>
                        <a href="https://amzn.to/2vBoSrl" target="_blank">
                            <div class="product">
                                <img src="img/dauerbackfolie.jpg"/>
                                <div class="title">Schwarze Dauerbackfolie</div>
                                Wiederverwendbares Backpapier und spülmaschinenfest.
                            </div>
                        </a>
                        <a href="https://amzn.to/2u18Ruj" target="_blank">
                            <div class="product">
                                <img src="img/deocreme.jpg"/>
                                <div class="title">Deocreme Ginkgo Limette</div>
                                Ohne Aluminium und Konservierungsstoffe, plastikfrei, vegan, ohne Palmöl.
                            </div>
                        </a>
                        <a href="https://amzn.to/2OYKtkx" target="_blank">
                            <div class="product">
                                <img src="img/strohhalme.jpg"/>
                                <div class="title">Natürlich gewachsene Gras-Strohhalme</div>
                                Stabil, nachhaltig, biologisch abbaubar, wiederverwendbar, plastikfrei.
                            </div>
                        </a>
                        <a href="https://amzn.to/2UWqOpa" target="_blank">
                            <div class="product">
                                <img src="img/rasierer.jpg"/>
                                <div class="title">Umweltfreundlicher Rasierer</div>
                                Nachhaltiger und umweltfreundlicher Rasierer verursacht keinen Plastikmüll.
                            </div>
                        </a>
                        <a href="https://amzn.to/39JUzh7" target="_blank">
                            <div class="product">
                                <img src="img/reinigungspads.jpg"/>
                                <div class="title">Waschbare Abschminkpads</div>
                                Wiederverwendbare Wattepads, Zero-Waste mit Wäschenetz.
                            </div>
                        </a>
                    </div>
                    <div class="sharemenu">
                        <a href="http://twitter.com/share?text=Wusstest du, dass der durchschnittliche Deutsche 127 Liter Wasser pro Kopf pro Tag verbraucht?&url=http://www.dailyimpact.earth/evening2/&hashtags=createimpact,impact,savewater">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=http://www.dailyimpact.earth/evening2/&title=Wusstest du, dass der durchschnittliche Deutsche 127 Liter Wasser pro Kopf pro Tag verbraucht?">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="whatsapp://send?text=Wusstest du, dass der durchschnittliche Deutsche 127 Liter Wasser pro Kopf pro Tag verbraucht? --> https://www.dailyimpact.earth/evening2/" data-action="share/whatsapp/share" title="Share on whatsapp">
                            <i class="fab fa-whatsapp-square"></i>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.dailyimpact.earth/evening2/&quote=Wusstest du, dass der durchschnittliche Deutsche 127 Liter Wasser pro Kopf pro Tag verbraucht?">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script
        src="js/jquery.mousewheel.min.js"></script>
<script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script
        src="js/viewScroller.js"></script>
<script
        src="js/owl.carousel.min.js"></script>
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
        var urlViewName = window.location.hash.replace('#', '');
        if (urlViewName === 'home' || urlViewName === '') {
            $('#navi').css('display', 'none');
        }
        // Sets viewScroller with sample events
        $('.mainbag').viewScroller({
            useScrollbar: false,
            beforeChange: function () {
                console.log('beforeChange fired!');
                return false; // It means that views change will be terminated
            },
            afterChange: function () {
                var urlViewName = window.location.hash.replace('#', '');
                console.log(urlViewName);
                if (urlViewName === 'home' || urlViewName === '') {
                    $('#navi').fadeOut(400, function(){
                        $('#navicontainer a').removeClass('nav-highlight');
                    });
                } else {
                    if ( $('#navi').css('display') === 'none' ) {
                        $('#navi').fadeIn(700);
                    }
                    $('#navicontainer a').removeClass('nav-highlight');
                    $('.nav-' + urlViewName).addClass('nav-highlight');
                }
                console.log('afterChange fired!');
            },
            beforeResize: function () {
                console.log('beforeResize fired!');
            },
            afterResize: function () {
                console.log('afterResize fired!');
            }
        });

        /*// Sets start params for MENU
        $('.mainbag').css({
            'left': '20px'
        });
        $.fn.viewScroller.setSpaceMainBag(140); // Sets 140px space for MENU*/

        /*// Show / hide menu panel
        $('#hidePanel').on('click', function () {
            if ($('.panel').css('display') !== 'none') {
                $('#hidePanel').text('>>');
                $('.panel').hide();
                $('.mainbag').css({
                    'left': '0px'
                });
                $.fn.viewScroller.setSpaceMainBag(0); // sets mainbag's width when panel is closed
            } else {
                $('#hidePanel').text('<<');
                $('.panel').show();
                $('.mainbag').css({
                    'left': '140px'
                });
                $.fn.viewScroller.setSpaceMainBag(140); // sets mainbag's width when panel is open
            }
        });*/

        // Turnon / turnoff the scroll views when they are animate
        $('#scroll').on('click', function () {
            if ($('#scroll').prop("checked")) {
                $.fn.viewScroller.setChangeWhenAnim(true);
            } else {
                $.fn.viewScroller.setChangeWhenAnim(false);
            }
        });

        $(document).on('scroll', function () {
            var urlViewName = window.location.hash.replace('#', '');
            console.log(urlViewName);
        });


        $(".owl-carousel").owlCarousel({
            margin:20,
            autoWidth:true,
        });

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
    });
</script>

</body>
</html>