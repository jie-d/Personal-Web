<!DOCTYPE html>
<?php $thisPage="contact-form"; ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700|Merriweather:400italic,400' rel='stylesheet' type='text/css'>
    <title>Contact</title>
    <link rel="stylesheet" href="css/long-scrolly.css">
    <link rel="stylesheet" href="css/styles.css">

      
  <script type="text/javascript">
   
      function validate()
      {
      
         if( document.myForm.Name.value == "" )
         {
            alert( "Please provide your name!" );
            document.myForm.Name.focus() ;
            return false;
         }
         
         if( document.myForm.email.value == "" )
         {
            alert( "Please provide your email address!" );
            document.myForm.email.focus() ;
            return false;
         }
         
         if( document.myForm.phone.value == "" )
         {
            alert( "Please provide your phone number!" );
            document.myForm.phone.focus() ;
            return false;
         }
        
         return( true );
         }
         
         function validateEmail()
        {
         var emailID = document.myForm.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            alert("Please provide a correct email address!")
            document.myForm.email.focus() ;
            return false;
         }
         return( true );
      }

  </script>
</head>

<body>
    <!-- Navigation bar from PHP INCLUDE file -->
    <?php
	include "inc/nav.inc";
	?>

    <div class="container">
      <div class="contact">
      
      <h1>Contact Form</h1>

      <form method="post" action="database-write.php" name="myForm" onsubmit="return(validate());">

      <div class="box">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name">
      </div>

      <div class="box">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email">
      </div>
  
      <div class="box">
      <label for="phone">Phone:</label>
      <input type="tel" name="phone" id="phone">
      </div>

      <div class="box">
      <br>
      <label for="message">Message:</label>
      <br>
      <textarea name="message" id="message"></textarea>
      </div>

      <div>
      <br>
      <input type="submit" value="Send">
      </div>

      </form> 
      </div>
    </div>


<footer>
    <p>Jie Deng's CSC 174 Project3</p>    
</footer>

</body>
</html>