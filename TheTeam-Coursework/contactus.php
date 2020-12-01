
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="CSS/theteam.css">
</head>
    
        <header> 
        
    <?php include 'menu.php';?>

        

    </header> 
    
    
<body>
    
<div class="infoForm">
    
        <div class="Row">
            <div class="header-title"><h3>Contact us</h3></div>
            <div class="contactName">
                <p class="Name">Ivaylo</p>
                
            </div>
            <div class="socialImage">
                                    <div class="personPic">
                                <img src="Images/ivaylo.jpg" alt="">
            </div>
            <div class="socialMedia">
                <a href="https://www.youtube.com/watch?v=iik25wqIuFo"><img src="Images/facebook.png" alt=""></a>
                <a href="https://www.youtube.com/watch?v=iik25wqIuFo"> <img class="instagram" src="Images/instagram.png" alt=""></a>
                    <a href="mailto: Ivaylo@gmail.com"> <img src="Images/email.png" alt=""></a>
            </div>
            <div class="favMovie">
                <h4>Horror expert</h4>
                <p>Ivaylo is always there when you need him. He is fan of horror movies because we all know he has inclination towards killing people. We still think he is just gathering ideas on a massive slaughter that’s going to happen soon. Whatever, he is a lovely person and adores animals. You can contact him at your risk.</p></div>

        </div>
    
    <div class="contactName">
        <p class="Name">Brandon</p>
       
    </div>
    <div class="socialImage">
                            <div class="personPic">
    <img src="Images/Brandon.jpg" alt="">
    </div>
    <a href=""></a><div class="socialMedia">
        <a href="https://www.youtube.com/watch?v=iik25wqIuFo"><img src="Images/facebook.png" alt=""></a>
        <a href="https://www.youtube.com/watch?v=iik25wqIuFo"> <img class="instagram" src="Images/instagram.png" alt=""></a>
            <a href="mailto: ggg@gmail.com"> <img src="Images/email.png" alt=""></a>
    </div>
    <div class="favMovie">
        <h4>Movie guru</h4>
        <p>Brandon is the definition of dwarf movie geek. He knows at least one great movie for every genre there is. Basically he liked the idea of reading books but because he has little attention span and forgets the previous page as soon as he turns over he dedicated his entire life on watching movies because “they are like a book but actually interesting”. His hobbies, excluding reading movie reviews, are playing COD and slapping the bass.</p></div>
</div>
<div class="contactName">
    <p class="Name">Georgi</p>
    
</div>
<div class="socialImage">
                        <div class="personPic">
<img src="Images/georgi.jpg" alt="">
</div>
<div class="socialMedia">
    <a href="https://www.youtube.com/watch?v=iik25wqIuFo"><img src="Images/facebook.png" alt=""></a>
    <a href="https://www.youtube.com/watch?v=iik25wqIuFo"> <img class="instagram" src="Images/instagram.png" alt=""></a>
        <a href="mailto: ggg@gmail.com"> <img src="Images/email.png" alt=""></a>
</div>
<div class="favMovie">
    <h4>Just Someone</h4>
    <p>Georgi is our star.  Once you hear a story about a russian spy, who plays with your nerves and stray cats, you will never want to watch Sherlock again.  Georgi joined our society automatically after accidentally clicking on a funny meme he saw online and now he is joking around and plays us all.</p></div>
</div>
<div class="contactName">
    <p class="Name">Princess</p>
   
</div>
<div class="socialImage">
                        <div class="personPic">
<img src="Images/Princess.jpg" alt="">
</div>
<div class="socialMedia">
    <a href="https://www.youtube.com/watch?v=iik25wqIuFo"><img src="Images/facebook.png" alt=""></a>
    <a href="https://www.youtube.com/watch?v=iik25wqIuFo"> <img class="instagram" src="Images/instagram.png" alt=""></a>
        <a href="mailto: ggg@gmail.com"> <img src="Images/email.png" alt=""></a>
</div>
<div class="favMovie">
    <h4>CEO</h4>
    <p>Princess is currently a student in RGU, computer science. She is the CEO of Popflex media and brings positive energy among every member. Her passion for movies started when she was little and watched one every evening with her parents. One of her memorable achievements is being a judge in music idol 2005. She is open-minded, easy-going person who has a way with the words. She is also full of ideas on how to reach more people and takes care of the looks of the website. Feel free to contact her any time!</p></div>

</div>
 <div class="contactName">
        <p class="Name">Katya</p>
       
    </div>
<div class="socialImage">
                        <div class="personPic">
<img src="Images/Katya.jpg" alt="">
</div>
<div class="socialMedia">
    <a href="https://www.youtube.com/watch?v=iik25wqIuFo"><img src="Images/facebook.png" alt=""></a>
    <a href="https://www.youtube.com/watch?v=iik25wqIuFo"> <img class="instagram" src="Images/instagram.png" alt=""></a>
        <a href="mailto: Katya@gmail.com"> <img src="Images/email.png" alt=""></a>
</div>
<div class="favMovie">
    <h4>Adult content expert</h4>
    <p>Katya is a rebel. She joined the group even though nobody wanted her. One day, randomly we were having a group meeting and she smashed through our door shouting I’m a feminist I join on my own will and the rest is history… She specializes in the adult section so if you are interested in that as well don’t hesitate to contact her!</p></div>

</div>
</div>

<div id="sticky-div">
    <div class="formMaps">
        <div class="formm">
        <h5>Ask us a question and we will get back to you!
        </h5>
            
            
    <form action="//submit.form" method="post" onsubmit="return ValidateForm(this);">
        <script type="text/javascript">
        function ValidateForm(frm) {
        if (frm.Name.value == "") { alert('Name is required.'); frm.Name.focus(); return false; }
        if (frm.FromEmailAddress.value == "") { alert('Email address is required.'); frm.FromEmailAddress.focus(); return false; }
        if (frm.FromEmailAddress.value.indexOf("@") < 1 || frm.FromEmailAddress.value.indexOf(".") < 1) { alert('Please enter a valid email address.'); frm.FromEmailAddress.focus(); return false; }
        if (frm.Comments.value == "") { alert('Please enter a question.'); frm.Comments.focus(); return false; }
        return true; }
        </script>
        
        
        <table id="form-table" cellpadding="8" cellspacing="0">
        <tr> <td>
        <label for="Name">Name*</label>
        </td> <td>
        <input name="Name" type="text" maxlength="100"  />
        </td> </tr> <tr> <td>
        <label for="PhoneNumber">Phone number</label>
        </td> <td>
        <input name="PhoneNumber" type="text" maxlength="43" />
        </td> </tr> <tr> <td>
        <label for="FromEmailAddress">Email address*</label>
        </td> <td>
        <input name="FromEmailAddress" type="text" maxlength="90"  />
        </td> </tr> <tr> <td>
        <label for="Comments">Question*</label>
        </td> <td>
        <textarea name="Comments" rows="7" cols="30" ></textarea>
        </td> </tr> <tr> <td>
        <p id="required">* - required </p>
        </td> <td>
        <input name="skip_Submit" type="submit" value="Submit" />
        </td> </tr>
        </table>
        </form>
    </div>
        <div class="map">
        <h5>You can find us at:</h5>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2166.1099234503813!2d-2.146411348350883!3d57.11808429324183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x488410483d2f0941%3A0x5d8969688e77366a!2sRobert%20Gordon%20University!5e0!3m2!1sen!2sbg!4v1606401756639!5m2!1sen!2sbg" width="100%" height="515" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        
    </div>
</div>

</div>  

       </div> 
         
    
</body>
</html>