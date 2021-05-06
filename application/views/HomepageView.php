<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view('headerView.php');?>
  <link rel="stylesheet" href="https://alanalee.me/css/main.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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
              <li><a href="<?php echo base_url();?>" class="logo sunflora"><img src="<?php echo base_url();?>images/logo.svg"/></a></li>
                <li><a href="<?php echo base_url();?>" class="navActive">Home</a></li>
                <li><a href='<?php echo base_url();?>index.php/About'>About</a></li>
                <li><a href='<?php echo base_url();?>index.php/Resume'>Resume</a></li>
                <li><a href='<?php echo base_url();?>index.php/Contact'>Contact</a></li>
              </ul>
    </nav>

    <main>
        <div class="introduction">
            <h1 class="sunflora" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">Hi, <span class="desktopHide"><br/></span>I'm <span class="purple">Alana!</span></h1>
            <p data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">I'm a UX / UI designer based just outside of Toronto, Canada with a passion for accessibility on the web!</p>
            <p data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">Here is a selection of my work below! <span>&#x1F447;</span></p>
        </div>

        <div class="worksTitle">
            <h4>Work</h4>
        </div>    
        <div class="workContainer">
            <?php 
                //fetchWorks here & repeat for each in db
                foreach($wrk as $key=>$project){?>
                    <div  class='projectDiv' data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                      <a href="<?php echo base_url('index.php/'. $project['url'])?>"class="">
                        <img class="projectThumbnail" src="<?php echo base_url();?>images/projects/thumbnails/<?php echo $project['thumbnail']?>" alt="project thumbnail"/>
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
    <?php $this->load->view('footerView');?>
  </footer>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="../js/jquery-3.6.0.min.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>