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
        <div style="justify-content:space-between; background-color:#ecebec" class="projectBanner mockup">
            <img src="http://localhost/portfolio2021/images/projects/greenP/greenP2.png" alt="greenP project banner showing watch face"/>

            <img src="http://localhost/portfolio2021/images/projects/greenP/greenP.png" alt="greenP project banner showing watch face"/>
            <h1>Green P Smart Watch App</h1>
        </div>
        <div class="projectSpecs"> 
          <ul>
            <li>
                <h4>Date:</h4>
                <span>March 2021</span>
            </li>
            <li>
                <h4>Roles:</h4>
                <span>User Experience, User Interface , User Research</span>
            </li>
            <li>
                <h4>Tech:</h4>
                <span>Adobe XD , Illustrator</span>
            </li>
          </ul> 
        </div>

        <div class="projectDetails">
            <div class="summary">
                <div>
                    <h2>Background</h2>

                    <div class="paragraph">
                        <p>Wearable tech has been gaining more popularity since it’s debut in the tech industry. From wireless earbuds, wristbands, and watches, wearable tech has been marketed with the promise to enhance your experience with currently owned devices and mobile applications.</p>

                        <p>Focusing on my own rececnt experiences with public parking and the Green P mobile application, I looked for pain points in the experience and found that extending your time on the meter had a fair share of issues.</p> 

                        <span class="bold"><p>Which lead to the question:</p></span>

                    </div>
                </div>
                    <h4><em>"How can a smart watch app improve the public parking experience?"</em></h4>
            </div>

            <div class="solution">
                <div>
                    <h2>Solution</h2>
                        <div class="paragraph">
                            <p>One of the main pain points I found in the Green P smart watch app was that it only offered a short look alert when there was only a few minutes left on the meter. <span class="bold"> There was no option to extend my time directly from the smart watch.</span></p> 
                            
                            <p>To tackle this issue, I started by designing a user flow with a voice interaction that responded to the user with an option to extend their time on the meter directly from the smart watch.</p>
                        </div>
                        
                    </div>
                    <img src="http://localhost/portfolio2021/images/projects/greenP/greenPUserflow.png" alt="user flow of the proposed smart watch app"/>
                    <p>Working off the pain point, I created a user flow where the user could check their time left on the meter and extend their time directly in the smartwatch app.</p>


                    <div>
                    <h2>Design Philosophy</h2>
                    <div class="paragraph">
                        <p>There were two frameworks of thought that drove the process in the production design; designing for glanceability and simplicity.</p>

                        <p>The glanceability factor was a huge influence on the final screen design. Thinking about the urgency of the use case, only the necessary information was distilled down to its most critical parts, with the goal to reduce user-app consumption down to a few seconds.</p>

                        
                        <p>The UI was reduced to the most basic visual components, and minimizing user options to streamline the interaction with the smartwatch app. Each screen was designed to show one thing and offer one action in a minimalist design aesthetic, only using color to display critical information.</p>
                    </div>
                </div>
                
                
                <img src="http://localhost/portfolio2021/images/projects/greenP/greenPFinalScreens.png" alt="final screen designs."/>
                <p>The final screen designs shown here display the application of the design philosophy discussed above.</p>
                
                
                <div id="gifContainer">
                    <img src="http://localhost/portfolio2021/images/projects/greenP/greenPVoice.gif" alt="animated gif showing the voice command"/>

                    <img src="http://localhost/portfolio2021/images/projects/greenP/greenPSuccess.gif" alt="animated gifs showing application of glanceability"/>
                </div>
                <p>Left: Voice command implementation. Right: Designed with glanceability in mind.</p>


            </div>

            <div class="reflection">
                <div >
                    <h2>Feedback</h2>
                    <div class="paragraph">
                        <p>After presenting this prototype to a few testers, there was unanimous feedback for a voice command to automatically extend the time on the meter without having to really look at the watch face.</p>

                        <p>If I were to pursue the project further, I would work off the feedback I recieved by implementing another utterance/voice command to automatically move the user from the notification screen directly to the payment details.</p>
                    </div>
                </div>

                <div >
                    <h2>Struggles</h2>
                    <div class="paragraph">
                        <p>Some struggles I faced during the design process was designing with the concept of glanceability.</p>

                        <p>This frame of thought had me analyze what information was critical and the most necessary to deliver to the user.. and had me repeatedly ask myself: <span class="bold">"can it be distilled further?"</span></p>
                    </div>
                </div>

                <div>
                    <h2>Learned Outcomes</h2>
                    <div class="paragraph">
                        <p>Through this project learned to analyze user flows at a much deeper level. This process also sparked an interest in researching how wearable technologies are addressing accessibility.</p>

                        <p>This project has definitely opened my eyes to the usefulness of smart watch applications!</p>

                    </div>
                </div>
            </div>

        </div>

        <div class="projectNav">
            <a href="#" class=""><i class="fas fa-arrow-left"></i>Previous Project</a>
            <a href="<?php echo base_url('suum');?>" class="">Next Project<i class="fas fa-arrow-right"></i></a>
        </div>
    </main>
    <footer>
        <?php $this->load->view('footerView');?>
    </footer>
</body>
</html>