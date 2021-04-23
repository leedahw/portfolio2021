<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('headerView');?>
    <link rel="stylesheet" href="<?php echo base_url('css/main.css');?>" /> <!-- change to absolute on deploy-->
</head>
<body>
    <!-- BORDERS & nav Do not touch -->
    <div class="borderFrame outline" id="borderFrame"></div>
    <?php $this->load->view('navView');?>

    <main class="projectFull">
        <!-- banner here should be made to fit -->
        <div style="justify-content:flex-end; background-color:#f6f6f6" class="projectBanner mockup">
            <img src="<?php echo base_url('images/projects/archiWeekly/bannerimage.png');?>" alt="arachiweekly project banner showing screen laayouts in different devices."/>

            <h1>Archi Weekly</h1>
        </div>
        <div class="projectSpecs"> 
          <ul>
            <li>
                <h4>Date:</h4>
                <span>February 2021</span>
            </li>
            <li>
                <h4>Roles:</h4>
                <span>User Experience, User Interface</span>
            </li>
            <li>
                <h4>Tech:</h4>
                <span>HTML5 , CSS , SASS, Bootstrap</span>
            </li>
          </ul> 
        </div>

        <div class="projectDetails">
            <div class="summary">
                <div>
                    <h2>Background</h2>

                    <div class="paragraph">
                        <p>There are many tools that can help speed up the developing process. Many open-source CSS libraries are availale to create consistent and responsive design in a less rocky process. Through Archi Weekly, I got to research and explore a variety of front-end preprocessors and CSS frameworks.</p>

                        <span class="bold"><p>This project started with the question:</p></span>

                    </div>
                </div>
                    <h4><em>"What CSS frameworks and preprocessors can I use to make responsive design simpler to approach?"</em></h4>
            </div>

            <div class="solution">
                <div>
                    <h2>Solution</h2>
                        <div class="paragraph">
                            <p>There were a few tools to create Archi Weekly; one of the biggest tools was Bootstrap. With predefined classes and code, it was easy to implement into my own project, only requiring some predefined classes.</p> 
                            
                            <p>By using Bootstrap, I also approached the project from a "mobile-first" perspective, keeping responsiveness in mind from the initial step in the process.</p>
                        </div>
                        
                    </div>
                    <img src="<?php echo base_url('images/projects/archiWeekly/archiWeeklyScreen1.png');?>" alt="final screen designs in mobile views"/>
                    <p></p>


                    <div>
                    <h2>Responsiveness</h2>
                    <div class="paragraph">
                        <p>Once the mobile view was refined, I then looked into adding breakpoints, sizing up from the smallest view, and with Bootstrap it was as simple as adding a few new classes to my containers.</p>

                        <p>This easy implementation of responsivene design was one of the biggest advantages to using Bootstrap.</p>
                    </div>
                </div>
                
                
                <img src="<?php echo base_url('images/projects/archiWeekly/archiWeeklySafarai.png');?>" alt="final screen designs."/>
                <p>This screen shows the layout change to a wider, desktop size. The writing moves to the right half of the screen.</p>
                
                
                <img src="<?php echo base_url('images/projects/archiWeekly/bannerimage.png');?>" alt="final screen designs in mobile views"/>
                    <p>This image compares the display states of Archi Weekly across a multitude of devices.</p>


            </div>

            <div class="reflection">
                <div >
                    <h2>Struggles</h2>
                    <div class="paragraph">
                        <p>I didn't have many struggles or stumbles working on Archi Weekly. It was a pleasant and small scale introduction to a mobile-first design and development process. Even when there was a bug or two, I was easily able to find the answer in the documentation. It was a fun exploration of possibilities of implementing Bootstrap into my future work.</p>

                        <p>One disadvantage of Bootstrap I found however, was that it was difficult to really customize the predefine styling, such as buttons and the final HTML output is lengthy due to the class implementation system.</p>
                    </div>
                </div>

                <div>
                    <h2>Learned Outcomes</h2>
                    <div class="paragraph">
                        <p>By creating Archi Weekly, I learned about the mobile first-approach and how using tools such as Bootstrap, can be extremely helpful in creating fast turnaround for projects.</p>

                        
                    </div>
                </div>
            </div>

        </div>

        <div class="projectNav">
            <a href="<?php echo base_url('index.php/Suum');?>" class=""><i class="fas fa-arrow-left"></i>Previous Project</a>
            <a href="<?php echo base_url();?>" class="">Go to Home<i class="fas fa-arrow-right"></i></a>
        </div>
    </main>
    <footer>
        <?php $this->load->view('footerView');?>
    </footer>
</body>
</html>