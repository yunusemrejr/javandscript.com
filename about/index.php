<?php

 
if(
    isset($_POST['email']) && $_POST['email'] != '' && isset($_POST['name']) && $_POST['name'] != ''
    && isset($_POST['message']) && $_POST['message'] != '' && isset($_POST['buttonsubmit'])
    ) {
    
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
        
        
         $name = $_POST['name'];
$email = $_POST['email'];
$subject ="URLATLAS.org FORM MESSAGE";
$message = $_POST['message'];

$to = "xxxxxx@xxxxx.com";
$body = "";

$body .= "From: ".$name."\r\n";
$body .= "Email: ".$email."\r\n";
$body .= "Message: ".$message."\r\n";

mail($to, $subject, $body);


$message_sent = true;

    }
    
 
}

else {
    
   $message_sent = false;


    
}




?>
<!DOCTYPE html>
<html>

<head>
    <title>About - Java & Script</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
    <meta charset="UTF-8">
  <meta name="description" content="About Java & Script website">
  <meta name="keywords" content="about, java and script">
  <meta name="author" content="Yunus Emre Vurgun">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <script src="index.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8L6CMYJ4QL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8L6CMYJ4QL');
</script>
 </head>
<body>
    
    <div id="loaderDiv" >

<center><img src="../img/favicon.png" id="favLoder"></center>

</div>

<div id="bdy" style="visibility:hidden">
<img id="mainLogo" src="../img/logo-with-gradient-bg.png"><br>
<div id="navbar">
 <center> 
 
 
 <a href="https://javandscript.com/" class="navbarButton"><img class="iconsOfNav" src="https://img.icons8.com/fluency/48/undefined/home.png"/><span class="textOfNavBtn">Home</span></a> 

 
  <a href="https://javandscript.com/about/" class="navbarButton"><img class="iconsOfNav" src="https://img.icons8.com/avantgarde/100/undefined/experimental-about-avantgarde.png"/><span class="textOfNavBtn">About</span></a> 
  
  
 
   <a href="https://javandscript.com/blog/" class="navbarButton"><img class="iconsOfNav" src="https://img.icons8.com/fluency/48/undefined/blog.png"/><span class="textOfNavBtn">Blog</span></a> 
   
 <a href="https://javandscript.com/tutorials/java/" class="navbarButton"><img class="iconsOfNav" src="https://img.icons8.com/color/48/undefined/java-coffee-cup-logo--v1.png"/><span class="textOfNavBtn">Java</span></a> 
 
 
 
 <a href="https://javandscript.com/tutorials/php/" class="navbarButton"><img class="iconsOfNav" src="https://img.icons8.com/stickers/100/undefined/elephant.png"/><span class="textOfNavBtn">PHP</span></a> 
 
 
 
 <a href="https://javandscript.com/tutorials/javascript/" class="navbarButton"><img class="iconsOfNav" src="https://img.icons8.com/color/48/undefined/javascript--v1.png"/><span class="textOfNavBtn">JavaScript</span></a> 
</center>

</div><br><br>



<div id="afterNavbar"><center>
        <h1 id="aboutTitle">About this website</h1>
        <p>Java & Script is a website started in June 2022 for publishing computer programming tutorails on Java, PHP and JavaScript. Created by <a href="https://github.com/yunusemrejr" >Yunus Emre Vurgun</a> as a share-as-you-learn project. The main goal is to create helpful content as I learn new things in these three programming languages and their related technologies. There may be incorrect information as I am not a professional, which means you are always welcome to correct them by letting me know via below contact form: <br><br>
          
          <form   action="index.php" method="POST" class="formClass">
          <center> <br>
          <label for="name">Your Name:</label>
          <input type="text" id="name" name="name">
          <br><br><br>
           <label for="email">Your E-mail:</label>
          <input type="email" id="email" name="email">
                    <br><br><br>

           <label id="messagelabel" for="message">Your Message:</label><br><br>
          <textarea  id="message" name="message" rows="5" cols="49"></textarea><br><br>
          <input id="submitBtn" name="buttonsubmit" type="submit">
          </center>
          <br>
 
          
          
      </form>
 <?php
        
        if($message_sent){header("Location:https://www.javandscript.com/about/contact-form-success.php");}
        if($message_sent==false  && isset($_POST['buttonsubmit'])) {echo "error sending your message please try again later.";}
            
            ?>
</center></div>
       <br>
       <div id="horizontalAd2"><a href="https://go.fiverr.com/visit/?bta=237457&nci=16896" Target="_Top"><img border="0" src="https://fiverr.ck-cdn.com/tn/serve/?cid=18385811"  width="970" height="250"></a></div>

       <br>

<div id="footer">
   <p style='text-align:center;'><b>Copyright 2022 Javandscript.com | Java & Script | created by <a id='footerYEVLink' href="https://github.com/yunusemrejr">Yunus E. Vurgun</a></b></p>
 
</div>




</div>
</body>
</html>
