<html>
    <head>
    <title> Events </title>
    <link href="CSS/theteam.css" rel="stylesheet" type="text/css" >
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    
    </head>
    <a name ="top"> </a>
    <header> 
        
    <?php include 'menu.php';?>

        

    </header>
    
    <body>
    <div id="announcement">
        
        <p> Due to COVID-19 on-campus events have been cancelled. Please check frequently for updates. </p>
        </div>
        
        <div class="page-headtext">
        <div class="page-header"> 
        </div>
        
     <h3>Events</h3>
        
        <div class="page-header2">
        </div>
    </div>
        
    <section id= "events-calender"> 
        
            <h3 class="section-header">Events Calender</h3>
        
        <table id="event-calender">
        <tr>
            <th> <h3> November </h3></th> 
        </tr>
        <tr>
            <th>Sun</th> <th>Mon</th> <th>Tue</th> <th>Wed</th> <th>Thur</th> <th>Fri</th> <th>Sat</th>
        </tr>
        <tr>  
            <td> <p>1</p> <td> <p>2</p></td> <td> <p>3</p></td> <td> <p>4</p></td> <td> <p>5</p><div class="popup"> 
                <h5>Bonfire</h5>
                
                <div class="popup-content">
                    <a href=#1> Bonfire's Outdoor Cinema </a>
                
                </div>
                
            </div> </td> <td> <p>6</p></td> <td> <p>7</p></td>  
        </tr>
            
        <tr> 
            <td> <p>8</p> </td> <td> <p> 9</p></td> <td> <p> 10</p></td> <td> <p> 11</p></td> <td> <p> 12</p></td> <td> <p> 13</p></td> <td> <p> 14</p></td>
        </tr>
            
        <tr> 
            <td> <p>15</p></td> <td> <p>16</p></td> <td> <p>17</p></td> <td> <p>18</p></td> <td> <p>19</p></td> <td> <p>20</p></td> <td> <p>21</p></td>
        </tr>
            
        <tr> 
            <td> <p>22</p></td> <td> <p>23</p></td> <td> <p>24</p></td> <td> <p>25</p></td> <td> <p>26</p> <div class="popup"> 
                <h5>Dinner</h5>
                
                <div class="popup-content">
                    <a href=#1> Thanksgiving Dinner </a>
                
                </div>
                
            </div> </td> <td> <p>27</p></td> <td> <p>28</p></td>
        </tr>
            
        <tr> 
            <td> <p>29</p></td> <td> <p>30</p></td> <td> </td> <td> </td> <td> </td> <td> </td> <td> </td>
        </tr>
        
        </table>
        
    </section>
        
    <section class="events">
        
        

        <div> <h2> What's On </h2></div>
        
        <nav id="eventnavbar">
           
            
           <ul>
                <li> 
                    <form class="eventnavitem" action = '' method='POST'>
                        <input type='hidden' name='current' value='showcurrent' >
                       <input class="pastevents upcomingevents" type="submit" value="&#xf073;  Upcoming Events " >
                   </form>
               
               </li>
               
               <li> 
                    <form class="eventnavitem" action = '' method='POST'>
                        <input type='hidden' name='past' value='showpast' >
                       <input class="pastevents" type="submit" value="&#xf073; Past Events " >
                        
                   </form>
               
               </li>

            
            </ul>
            
            
        
        </nav>
        
        <div class="left-side">
        
            
<aside id="events-aside">
        

<div class="filter-container">
    
    <h3> Search By:</h3>
            
    <p> Name</p>
    
   <form class="searchbar" action = '' method='POST'>
    <input type="search" name="usersearch"  value=""> 
       <input  name="search" type="hidden" value="searchbar" >
       <input  type='submit' name='submit'  value='Search' >
       
   </form>

    
            
    <p> Month</p>
            
    <form action="" method="POST">
        <select name="month" id="months">
            <option value="01">January</option>
            <option value="02">Feburary</option>
            <option value="03">March</option>
            <option value="04">April</option>
            <option value="05">May</option>
            <option value="06">June</option>
            <option value="07">July</option>
            <option value="08">August</option>
            <option value="09">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
        </select>
      
        <input type='hidden' name='search' value='dropdown' >
    <input type='submit' name='submit'  value='Search' >
    </form>

<h3>Filter results by:</h3>


<p>Event Type</p>
   <form id="options" action = '' method='POST'>

    <input type="checkbox" id="slct1"  name='checked[]' value="campus" >
    <label for="slct1">On Campus</label> <br>
    <input type="checkbox" id="slct2"  name='checked[]' value="online">
    <label for="slct2">Online</label> <br>
    <input type="checkbox" id="slct3"  name='checked[]' value="resturant">
    <label for="slct3">Resturant</label> <br>
    <input type="checkbox" id="slct4"  name='checked[]' value="cinema">
    <label for="slct4">Cinema</label> <br>
    <input type='hidden' name='search' value='checkbox' >
       <br>
    <input type='submit' name='submit'  value='Search' >

   </form>
        
        
        </div>
        
        
    </aside>

        
        </div >
        
        
        <div class="right-side">
        
        <?php
    
    include 'filterevents.php';
    
    ?> 
        
        </div>
 

        
    </section>
        
    </body>


    <?php
    
    include 'footer.php';
    
    ?> 
            

</html>