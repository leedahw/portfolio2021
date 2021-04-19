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
    <link rel="stylesheet" href="./css/main.css" /> <!-- change to absolute on deploy-->
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
                <li><a href="<?php echo base_url();?>" class="active">Home</a></li>
                <li><a href='aboutController'>About</a></li>
                <li><a href='resumeController'>Resume</a></li>
                <li><a href='<?php echo base_url();?>contactController'>Contact</a></li>
              </ul>
    </nav>

    <main>
        <div class="introduction">
            <h1 class="sunflora">Hi, <span class="desktopHide"><br/></span>I'm <span class="purple">Alana!</span></h1>
            <p>I'm a UX / UI designer based just outside of Toronto, Canada with a passion for accessibility on the web!</p>
            <p>Here is a selection of my work below! <span>&#x1F447;</span></p>
        </div>

        <div class="workContainer">
            <div class="worksTitle">
                <h4>Work</h4>
            </div>    
            <?php 
                //fetchWorks here & repeat for each in db
                foreach($wrk as $key=>$project){?>
                    <div  class='projectDiv outline'>
                      <a href="#"class="">
                        <img class="projectThumbnail" src="http://localhost/portfolio2021/images/projects/<?php echo $project['thumbnail']?>" alt="project thumbnail"/>
                        <div>
                            <h3 class="projectTitle"><?php echo $project['name']?></h3>
                            <p class="roles"><?php echo $project['roles']?></p>
                        </div>
                     </a>
                    </div>
                <?php
                }
            ?>

        


        </div>
    </main>
    <footer>

    </footer>
</body>

</html>