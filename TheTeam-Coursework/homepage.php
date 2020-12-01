
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <title>POPFLEX Media- Movies & TV-Shows Online</title>
     <meta name="description" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="CSS/theteam.css"/> 

 <!-- favicon.ico in the root directory -->
 <link rel="icon" href="favicon.png">
 </head>
 <body>

             <img id="headerlogo"
             src="Images/popflexMedialogo.png"  alt="POPFLEXMedia"/>
<header>
        
    <nav id="main-menu">
            
            
            
            <ul id="nav">
                
                <li><a href="homepage.php"> <i class="fa fa-fw fa-home"></i> Home</a> </li>

                <li><a href="#">Movies</a>
                    
                    <ul >
                    <a class="dropdown-link" href="upcomingmovies.php">Upcoming Movies</a>
                    <a class="dropdown-link" href="trailers.php">Trailers</a>
                    <a class="dropdown-link" href="recommendations.php">Recommendations</a>

                    </ul>
                    
                </li>

                <li><a href="moviereviews.php">Reviews</a> </li>


                <li ><a href="events.php">Events</a></li>

                <li><a href="members.php">Members</a></li>
                
                <li><a href="#">Join Us</a>
                    
                    
                    <ul>
                    <a class="dropdown-link" href="testimonial.php">Testimonials</a>
                    <a class="dropdown-link" href="joinus.php">Join Now</a>
                    </ul>

                </li>

                <li><a href="contactus.php">Contact us</a></li>
                
            </ul>

            
        </nav>
     
     </header>
 

     <body>
     
         <img class="bigHomePagePhoto" src="Images/homepagemain.jpg" alt="">
        
        <H3 class="hm-title">Top Movies</H3>
        <section class="MoviesContainer">
            
            <div>
            <img class="subMovies" src="Images/Beauty%20and%20the%20Beastjpg.jpg">
            <button type="button" class="collapsible">More Information</button>
            <div class="content">
                
                <p>Watch:</p>

                <button class="play-buttons" onclick="window.location.href='https://www.youtube.com/watch?v=nRf4ZgzHoVw'"><p>Play </p> </button>

               
            </div>
            </div>

            <div>
            <img class="subMovies" src="Images/1917.jpg">
            <button type="button" class="collapsible">More Information</button>
            <div class="content">
            <p>Watch:</p>

                <button class="play-buttons" onclick="window.location.href='https://www.youtube.com/watch?v=nRf4ZgzHoVw'"><p>Play </p> </button>
            </div>
            </div>

            <div>
            <img class="subMovies" src="Images/Borat.jpg">
            <button type="button" class="collapsible">More Information</button>
            <div class="content">
            <p>Watch:</p>

                <button class="play-buttons" onclick="window.location.href='https://www.youtube.com/watch?v=nRf4ZgzHoVw'"><p>Play </p> </button>
            </div>
            </div>

            <div>
            <img class="subMovies" src="Images/Deadpool.jpg">
            <button type="button" class="collapsible">More Information</button>
            <div class="content">
            <p>Watch:</p>

                <button class="play-buttons" onclick="window.location.href='https://www.youtube.com/watch?v=nRf4ZgzHoVw'"><p>Play </p> </button>
            </div>
            </div>


        </section>

        <H3 class="hm-title">Top TV shows</H3>
        <section class="TVContainer">
            
            <div>
            <img class="subShows" src="Images/thewitcher.jpg">
                <button type="button" class="collapsible">More Information</button>
                    <div class="content">
                    <p>Watch:</p>

                <button class="play-buttons" onclick="window.location.href='https://www.youtube.com/watch?v=nRf4ZgzHoVw'"><p>Play </p> </button>
                    </div>
            </div>

            <div>
            <img class="subShows" src="Images/theoffice.jpg">
            <button type="button" class="collapsible">More Information</button>
                    <div class="content">
                    <p>Watch:</p>

                <button class="play-buttons" onclick="window.location.href='https://www.youtube.com/watch?v=nRf4ZgzHoVw'"><p>Play </p> </button>
                    </div>
            </div>
    
            <div>
            <img class="subShows" src="Images/southpark.jpg">
            <button type="button" class="collapsible">More Information</button>
                    <div class="content">
                    <p>Watch:</p>

                <button class="play-buttons" onclick="window.location.href='https://www.youtube.com/watch?v=nRf4ZgzHoVw'"><p>Play </p> </button>
                    </div>
            </div>
            
    
            <div>
            <img class=subShows src="Images/gameofthrones.jpg">
            <button type="button" class="collapsible">More Information</button>
                    <div class="content">
                    <p>Watch:</p>

                <button class="play-buttons" onclick="window.location.href='https://www.youtube.com/watch?v=nRf4ZgzHoVw'"><p>Play </p> </button>
                    </div>
            </div>


        </section>

        <script>
            var coll = document.getElementsByClassName("collapsible");
            var i;
            
            for (i = 0; i < coll.length; i++) {
              coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                  content.style.display = "none";
                } else {
                  content.style.display = "block";
                }
              });
            }
            </script>
     
     
     </body>

 </html>

    
    
