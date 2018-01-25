<!DOCTYPE html>
<?php $thisPage="home"; ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700|Merriweather:400italic,400' rel='stylesheet' type='text/css'>
    <title>Homepage</title>
    <link rel="stylesheet" href="css/long-scrolly.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <!-- Navigation bar from PHP INCLUDE file -->
    <?php
	include "inc/nav.inc";
	?>

   <!-- Z-pattern -->
    <section id="first">
        <div class="container">
                <img src="images/jie.png" id = "selfie" alt="beautiful me">

        <div class="indroduction">
                <h1 id="title">Jie Deng</h1>
                <p><p/>
                <p id="follow">A programmer and a choreographer who likes creating and converting ideas into realities</p>
                </div>

                <div class="z-pattern">
                <a href="contact-form.php">Contact Now!</a>
            </div>
              
        </div><!-- .container -->
    </section><!-- The Z-pattern page -->


    <!--  F-pattern -->
    <section id="second">
        <div class="container">
            <h1 id ="accomp">My Accomplishments</h1>

            <div class="content">
            <table id="table">
                <tr>
                    <td><img src="images/urlogo.png" alt="uofr" class="accomplishments"></td>
                    <td><h3>University of Rochester Student</h3>The University of Rochester (commonly referred to as U of R or UR) is a private, nonsectarian, research university in Rochester, New York. The university grants undergraduate and graduate degrees, including doctoral and professional degrees. The university has six schools and various interdisciplinary programs.</td> 

                  <tr class="blank_row">
                    <td colspan="3"></td>
                  </tr>
                    
                  <tr>
                    <td><img src="images/indulgence.png" alt="indulgence" class="accomplishments"></td>
                    <td><h3>Indulgence Dance Crew Captain</h3>Indulgence dance crew is a daughter group to the University of Rochester's Black Students' Union that was formed in 2001 by two students with a passion for hip hop dance. They incorporate hip hop, jazz, funk, breaking, and modern interpretive styles into much of thir choreography in hopes to create hype and hip routines for the audiences to "indulge" themselves in.</td> 
                </tr>

            </table>
            </div><!-- .content -->
      </div><!-- .container -->
    </section><!-- The F-pattern page -->


<!-- Use the following JavaScript code to do the smooth-scroll thing on the internal links -->
<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>
// From:    Smooth Scrolling by CHRIS COYIER, updated JANUARY 31, 2016
//          https://css-tricks.com/snippets/jquery/smooth-scrolling
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 250);
        return false;
      }
    }
  });
});
</script>

<footer>
    <p>Jie Deng's CSC 174 Project3</p>    
</footer>

</body>
</html>