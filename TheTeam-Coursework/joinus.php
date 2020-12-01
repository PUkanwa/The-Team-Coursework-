<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>POPFLEX Media- Movies & TV-Shows Online</title>

        <!-- Stylesheet Import -->
        <link rel="stylesheet" href="CSS/theteam.css">
        <!-- favicon.ico in the root directory -->
         <link rel="icon" href="favicon.png">

  <link rel="manifest" href="site.webmanifest">


    </head>

    <header> 
        
        <!-- navbar -->

      <?php include 'menu.php';?>

    </header>

 
  <body class='grey-bg'>
         
     
        
       
 <!---sign-up-form-->

  

 <div class="sign-up-form">
     <img id='logo-img' src="Images/popflexMedialogo.png">
     <h1>Become a member</h1>
     <form>
         <input type="text"class="input-box"placeholder="Name" required>
         <input type="email"class="input-box"placeholder="School email" required>
         <input type="text" class="input-box"placeholder="Student ID" required>
         <input type="text"class="input-box"placeholder="Course" required><br><br>
         
         <input type="checkbox" id=tandc required> 
           <label for="tandc"> Agree to the Union's terms & conditions</label><br>
         <button id='joinus-button' type="submit"class="joinus-btn">Sign me up</button>
         <br>
         <p class="or">OR</p>
         
         <p>Any queries? <a href="contactus.php">Contact Us</a></p>
     </form>

  </div>
    
    
    </body>
    
    
    
</html>