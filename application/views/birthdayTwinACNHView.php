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
    <!-- BORDERS & nav Do not touch-->
    <div class="borderFrame outline" id=""></div>
    <?php $this->load->view('navView');?>

    <main class="projectFull">
        <!-- banner here should be made to fit -->
        <div class="projectBanner outline">
            <img src="http://localhost/portfolio2021/images/projects/greenP/greenPBanner.png" alt="greenP project banner showing watch face"/>
            <h1>Green P Smart Watch App</h1>
        </div>
        <div class="projectSpecs">
          <ul>
            <li class="outline">
                <h4>Date:</h4>
                <span>March 2021</span>
            </li>
            <li class="outline">
                <h4>Roles:</h4>
                <span>User Experience, User Interface , User Research</span>
            </li>
            <li class="outline">
                <h4>Tech:</h4>
                <span>Adobe XD , Illustrator</span>
            </li>
          </ul> 
        </div>

        <div class="projectDetails">
            <div class="summary">
                <div>
                    <h2>Summary</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias culpa eos ipsa ducimus provident. Porro explicabo reiciendis repellendus deserunt nemo nobis enim exercitationem dolor, inventore quae. Beatae voluptates quo perspiciatis!</p>
                </div>

                <img class="outline" src="" alt="image1"/>
            </div>

            <div class="problem & solution">
                <div>
                    <h2>Problem</h2>
                    <p>Lorem ipsum dolor, sit amet c</p>
                </div>

                <img class="outline" src="" alt="problem1"/>

                <div>
                    <h2>Solution</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore commodi cumque odio, fugiat provident blanditiis ratione similique, mollitia qui facere quia. Asperiores eveniet voluptas omnis iusto earum molestias nisi rem?</p>
                </div>


                <div>
                    <p>Lorem ipsum dolor, sit amet c</p>
                    
                    <img class="outline" src="" alt="solution1"/>
                </div>
                
                <div>
                    <p>Lorem ipsum dolor, sit amet c</p>
                    
                    <img class="outline" src="" alt="solution2"/>
                </div>

            </div>

            <div class="reflection">
                <div>
                    <h2>Reflection</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis beatae voluptatem facere sequi nisi omnis dignissimos eveniet nobis, itaque amet illum, iure saepe! Mollitia ex impedit omnis facilis aliquid itaque?</p>
                </div>

                <img class="outline" src="" alt="image1"/>
            </div>

        </div>

        <div class="projectNav">
            <a href="#" class=""><i class="fas fa-arrow-left"></i>Previous Project</a>
            <a href="#" class="">Next Project<i class="fas fa-arrow-right"></i></a>
        </div>
    </main>
    <footer>
        <?php $this->load->view('footerView');?>
    </footer>
</body>
</html>