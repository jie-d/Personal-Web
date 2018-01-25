<!DOCTYPE html>
<?php $thisPage="portfolio"; ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700|Merriweather:400italic,400' rel='stylesheet' type='text/css'>
    <title>Portfolio</title>
    <!-- JavaScript Powered Plugin referentce from http://cdnjs.cloudflare.com -->
    <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.0/flexslider-min.css'>
    <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css'>
    <link rel="stylesheet" href="css/long-scrolly.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
   
    <!-- Navigation bar from PHP INCLUDE file -->
    <?php
	include "inc/nav.inc";
	?>

 <!-- JavaScript Powered Plugin: FlexSlider -->
<div class="flexslider">
	<ul class="slides">
        <li>
            <img src="images/lab03.png">
                <h1>Pets<a class="flexlink" href="http://urcsc170.org/jdeng/lab03/">(Check it out)</a></h1>
                <h2>-- Jie's Lab03 of CSC 174</h2>
                    <p>A pet (or companion animal) is an animal kept primarily for a person's company or protection, as opposed to working animals, sport animals, livestock, and laboratory animals, which are kept primarily for performance, agricultural value, or research. The most popular pets are noted for their attractive appearances and their loyal or playful personalities.</p>
        </li>

        <li>
            <img src="images/lab09.png">
                <h1>Go Hiking<a class="flexlink" href="http://urcsc170.org/jdeng/lab09/">(Check it out)</a></h1>
                <h2>-- Jie's Lab09 of CSC 174</h2>
                    <p>Hiking is the preferred term, in Canada and the United States, for a long, vigorous walk, usually on trails (footpaths), in the countryside, while the word walking is used for shorter, particularly urban walks. On the other hand, in the United Kingdom, and the Republic of Ireland, the word "walking" is acceptable to describe all forms of walking, whether it is a walk in the park or backpacking in the Alps.</p>
        </li>

        <li>
            <img src="images/lab11.png">
                <h1>Wordpress<a class="flexlink" href="http://urcsc174.org/jdeng/lab11/">(Check it out)</a></h1>
                <h2>-- Jie's Lab11 of CSC 174</h2>
                    <p>WordPress was born out of a desire for an elegant, well-architectured personal publishing system built on PHP and MySQL and licensed under the GPLv2 (or later). It started in 2003 with a single bit of code to enhance the typography of everyday writing and with fewer users than you can count on your fingers and toes. Since then it has grown to be the largest self-hosted blogging tool in the world, used on millions of sites and seen by tens of millions of people every day.</p>
        </li>
    </ul>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.0/jquery.flexslider-min.js'></script>
 
  <script>
 $('.flexslider').flexslider({
    animation: "slide",
    controlNav: false
});</script>

<footer>
    <p>Jie Deng's CSC 174 Project3</p>    
</footer>

</body>
</html>