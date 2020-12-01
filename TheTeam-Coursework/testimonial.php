<html>
    <head>
        <meta charset="utf-8">
        <title>Testimonials</title>

        <!-- Stylesheet Import -->
        <link rel="stylesheet" href="CSS/theteam.css">
        
        
        

    </head>

     <header> 
        
    <?php include 'menu.php';?>

        

    </header>

<body>
    


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="Images/pexels-cottonbro-3945317.jpg" style="width:100%">
    <h3> Testimonials</h3>
  <div class="text"><p>“Wow. This is the best film society i've ever joined. Everyone is so friendsly and there are always plenty of activities to get involed in. You guys truly kick ass. Thanks for being so awesome. High fives!”</p></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="Images/pexels-cottonbro-3945317.jpg" style="width:100%">
    <h3> Testimonials</h3>
  <div class="text"><p>"Pretty good club. We got free cookies the last time we were there. Would definitely recommend. Who doesn't like free food."</p></div>
</div>

<div class="mySlides fade">
    
  <div class="numbertext">3 / 3</div>
    
  <img src="Images/pexels-cottonbro-3945317.jpg" style="width:100%">
    <h3> Testimonials</h3>
    
  <div class="text"><p>"Everyone's really friendly. Im pretty new but I feel at home and already enjoy it. One of my favourite clubs so far.  Overall 10/10!! " </p></div>
    
    
    
</div>

<div id="indicator" style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
    
</div>


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}
</script>
    <br>
 
    
    
    
    <main>
    
    

       <h3> Recent reviews </h3>     

        
        <?php include 'topreviews.php'; ?>

    
        
    <section id="feedback">
        
  
        
        <div class="header-title">
        <h3> Your thoughts</h3>
        </div>


        <div id="feedback-message"> 
        
            <p> We are glad  you have chosen to leave us some feedback. Please fill in the form below. <b>Real names are not required.</b> </p>
        
        
        </div>


            <form id="review-form" action='addreview.php' method = 'POST'>

              
            <h5> Rating</h5><br>

                <label for="username" title="text">Username</label> <p>*</p> <br>
                <input id="username" type="text" name="firstname" required />
    
    
                <label for="rate" title="text">Rating</label> <p>*</p><br>

                <div class="rate" id="rating" >
                
                <input type="radio" id="star5" name="rate" value="5" />
                <label for="star5" title="text">5 stars</label>
                <input type="radio" id="star4" name="rate" value="4" />
                <label for="star4" title="text">4 stars</label>
                <input type="radio" id="star3" name="rate" value="3" />
                <label for="star3" title="text">3 stars</label>
                <input type="radio" id="star2" name="rate" value="2" />
                <label for="star2" title="text">2 stars</label>
                <input type="radio" id="star1" name="rate" value="1" />
                <label for="star1" title="text">1 star</label>
               
                    
                </div>
                    
        
                
                <h5> Review</h5> <br>
                
                <label for="title" title="text">Title</label> <p>*</p><br>
                <input id="title" type="text" name="title" required /> 
                
                <label for="comment" title="text">Feedback</label> <p>*</p><br>
                <textarea id="comment" name="review" rows="5" cols="53" required>
                </textarea> <br>
                <input type="submit" name="Submit" value="Submit"/> <br><br>
                    

                 <p>* - required fields</p>

            </form>
        
            
        
    </section>
        
            
  
    <section class="tweets">
        <h3 class="header-title">Latest news </h3>
            <blockquote class="twitter-tweet" data-theme="light"><p lang="en" dir="ltr">WE ARE IN FRONT OF SAUDER!!! Come check out our booth and ask us questions!! <a href="http://t.co/jxCKjoJSHQ">pic.twitter.com/jxCKjoJSHQ</a></p>&mdash; UBC Film Society (@ubcfilmsociety) <a href="https://twitter.com/ubcfilmsociety/status/641340967434346496?ref_src=twsrc%5Etfw">September 8, 2015</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        
        <div class="link-buttons">
        <p>Quick links:</p>
        
        <button onclick="window.location.href='joinus.php'"><p>Join us now </p> <i class='fas fa-angle-right'></i></button>
            
        <button onclick="window.location.href='contactus.php'"><p>Contact us</p> <i class='fas fa-angle-right'></i></button>
        
        
        </div>
        
        </section>
        
    
   </main>
    
    </body>
    
     <?php include 'footer.php';
?>
        
    
</html>

