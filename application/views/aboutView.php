<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('headerView');?>
    <link rel="stylesheet" href="../css/main.css" /> <!-- change to absolute on deploy-->
</head>
<body>
    <!-- BORDERS Do not touch-->
    <div class="borderFrame outline" id=""></div>
    <?php $this->load->view('navView');?>

    <main>
        <div class="introduction">
            <h1 class="sunflora">So, <span class="desktopHide"><br/></span>who is <span class="purple">Alana?</span></h1>
             <p>She is a designer with a passion for accessibility on the web!<br/>
                 With a background in interior design, she has a strong grasp on fundamental design principles and an eye for creating well-balanced designs. She is a problem solver with the tenacity to get to the solution to every problem she is faced with.</p> 
             <p id="currently">She is currently interested in the realm of <span class="bold purple">UX writing</span> and how microcopies can enhance your digital experience!</p>

        </div>

        <div class="aboutDiv">
            <div>
                <h2>A convergent thinker</h2>
                <p>Alana is a thinker. She enjoys puzzles and likes to approach projects and problems similar to her approach for solving puzzles.She always looks at the bigger picture first, then navigates backwards to reach a solution. </p>
            </div>

            <div>
                <h2>A maker</h2>
                <p>Alana is an action-based worker. She loves taking the solutions she creates and making them into tangible experiences. With her expertise in design, she then refines them into lovely moments in her product.</p>
            </div>

            <div>
                <h2>A learner</h2>
                <p>Alana believes that learning is a continuous journey. Even on her off days, she tries to go through the pile of books she's bought and never read. She's currently working her way through Kinneret Yifrah's, <span class="purple">"Microcopy: The Complete Guide."</span> She also likes watching YouTube videos from the channel <span><a class="purple underline" href="https://www.youtube.com/c/mochamilk/featured" target="_blank">MochaMilk</a></span>.</p>
            </div>
        </div>

        



    </main>
    <footer>
        <?php $this->load->view('footerView');?>
    </footer>
</body>
</html>