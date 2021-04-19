<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <!--make or break content-->
    <link rel="shortcut icon" href="https://www.alanalee.me/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../css/main.css" /> <!-- change to absolute on deploy-->
    
    <!-- for Google -->
    <meta name="description" content="UX|UI Designer with a passion for accessibility on the web." />
    <meta name="keywords" content="ux designer, ux, ui, user experience designer, creative technologist, Toronto, designer" />    
    <meta name="author" content="Alana Dahwoon Lee" />
    <link rel="author" href="google plus url here">
    <meta name="copyright" content="alanadlee" />
    
    
    <!-- for Facebook -- Replace with your content -- IMPORTANT! -->          
    <meta property="og:title" content="Alana Dahwoon Lee | UX/UI Designer"/>
    <meta property="og:site_name" content="Alana Lee dot me" />
    <meta property="og:description" content="UX|UI Designer with a passion for accessibility on the web."/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.alanalee.me/"/>
    <meta property="og:image" content="http://www.alanalee.me/images/alanadlee-coming-soon.png"/> 
    <meta property="og:image:alt" content="a preview of the coming soon page."/> 
    
    <!-- Facebook recommended: 1200 x 630 - ideal: 1200 x 1200 square image --> 
    <!-- paths need to be absolute -->
    
    
    <!-- for Twitter -- Replace with your content -- IMPORTANT! -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@alanadlee" />
    <meta name="twitter:creator" content="@alanadlee" />
    <meta property="og:url" content="https://alanalee.me/" />
    <meta property="og:title" content="Alana Dahwoon Lee | UX/UI Designer" />
    <meta property="og:description" content="UX|UI Designer with a passion for accessibility on the web." />
    <meta property="og:image" content="http://www.alanalee.me/images/alanadlee-coming-soon.png" />
    
    <!--  Images for the Twitter Card should be at least 280px in width, and at least 150px in height. Image must be less than 1MB in size. Ideal is 1,024 x 512 -->
    <!-- paths need to be absolute -->

    <!-- Bootstrap & FontAwesome -->
    <script src="https://kit.fontawesome.com/3848e966ef.js" crossorigin="anonymous"></script>

    <title>Alana D. Lee | UX/UI Designer</title>
</head>
<body>
    <!-- BORDERS Do not touch-->
    <div class="borderFrame outline" id=""></div>
    <nav class="navbar">
        <input type="checkbox" class="navCheckbox" id="navCheckbox">
            <label for="navCheckbox" class="navToggle">
                <i class="fas fa-bars" id="menu"></i>
                <i class="fas fa-times" id="close"></i>
            </label>
              <ul class="navbar-links">
                <li><a href="#" class="logo sunflora">ADL</a></li>
                <li><a href='HomepageController' class="active">Home</a></li>
                <li><a href='aboutController'>About</a></li>
                <li><a href='resumeController'>Resume</a></li>
                <li><a href='contactController'>Contact</a></li>
              </ul>
    </nav>

    <main class="contacts">
        <div class="leftColumn">
            <div class="header">
                <h1 class="sunflora">Hi there, <span class="desktopHide"><br/></span>come say <span class="purple">Hello!</span></h1>
                <p>Do you have a project in mind? <span class="desktopHide"><br/></span>Or just want to say hi? Drop me a line!</p>
            </div>

            <div class="formContainer">
                <!-- <form id="#contact-form" method="post" action=""> -->
                <?php echo form_open(base_url('/contactController/submit'), array('class'=> 'contactForm'));?>
                    <input type="text" name="name" id="name" placeholder="Name" />
                    <input type="email" name="emailAddress" id="emailAddress" placeholder="Email address" />
                    <input type="text" name="message" id="message" placeholder="Drop me a line!" />
                    
                    <span id="error_message"></span>
                    <button type="submit">Send</button>
                <?php echo form_close(); ?>
                <!-- </form>   -->
            </div>
        </div>


        <div class="messagesContainer">
            <h3>Messages</h3>
        <?php 
        //fetchWorks here & repeat for each in db
            foreach($contact as $key=>$cont){?>
            <div>
                <p><?php echo $cont['name']?></p> 
                <span><?php echo $cont['message']?></span>
            </div>

            <?php
            }
        ?>
        </div>
    
    </main>

    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
//call jQUERY for ajax
</script>
<script>
// ajax call 

$(document).ready(()=>{
    $('.contactForm').on('submit', (e)=>{
        e.preventDefault();

        let contactForm = $(this);
        $.ajax({
            url:'http://localhost/portfolio2021/index.php/contactController/submit',
            type:'post',
            data: contactForm.serialize(),
        }).done((response)=>{
            console.log(response);
            if(response.status =='success') {
                $('#error_message').html(data);
            }
        });
    });
});

</script>
</body>
</html>