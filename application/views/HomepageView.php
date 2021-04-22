<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view('headerView.php');?>
  <link rel="stylesheet" href="./css/main.css" />
  <link rel="stylesheet" href="../css/main.css" />
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
              <li><a href="<?php echo base_url();?>" class="logo sunflora"><img src="../images/logo.svg"/></a></li>
                <li><a href="<?php echo base_url();?>" class="navActive">Home</a></li>
                <li><a href='<?php echo base_url();?>about'>About</a></li>
                <li><a href='<?php echo base_url();?>resume'>Resume</a></li>
                <li><a href='<?php echo base_url();?>contact'>Contact</a></li>
              </ul>
    </nav>

    <main>
        <div class="introduction">
            <h1 class="sunflora">Hi, <span class="desktopHide"><br/></span>I'm <span class="purple">Alana!</span></h1>
            <p>I'm a UX / UI designer based just outside of Toronto, Canada with a passion for accessibility on the web!</p>
            <p>Here is a selection of my work below! <span>&#x1F447;</span></p>
        </div>

        <div class="worksTitle">
            <h4>Work</h4>
        </div>    
        <div class="workContainer">
            <?php 
                //fetchWorks here & repeat for each in db
                foreach($wrk as $key=>$project){?>
                    <div  class='projectDiv'>
                      <a href="<?php echo $project['url']?>"class="">
                        <img class="projectThumbnail" src="http://localhost/portfolio2021/images/projects/thumbnails/<?php echo $project['thumbnail']?>" alt="project thumbnail"/>
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
    <br/>
  <footer class="bg-yellow auto-margin">
    <span>© Alana D. Lee - All Rights Reserved</span>
    <div class="footer-links">
      <a href="https://www.linkedin.com/in/alanadlee"><i aria-label="Go to LinkedIn Profile" class="fab fa-linkedin"></i></a>
      <a href=" mailto: alana.d.lee@gmail.com"><i aria-label="Open email using mailto" class="far fa-envelope"></i></a>
      <a href="https://twitter.com/alanadlee"><i class="fab fa-twitter-square"></i></a>
    </div>
  </footer>
  <script src="../js/jquery-3.6.0.min.js"></script>
  <script src="../js/navToggle.js"></script>
</body>

</html>