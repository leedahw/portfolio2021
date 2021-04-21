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
        <div style="justify-content:flex-end; background-color:#fafafa" class="projectBanner mockup">
            <img src="http://localhost/portfolio2021/images/projects/suum/suum1.png" alt="suum project banner showin screen mockup"/>

            <h1>suum</h1>
        </div>
        <div class="projectSpecs"> 
          <ul>
            <li>
                <h4>Date:</h4>
                <span>March 2021</span>
            </li>
            <li>
                <h4>Roles:</h4>
                <span>User Experience , User Interface , Front-End Development</span>
            </li>
            <li>
                <h4>Tech:</h4>
                <span>Adobe XD , Illustrator , MongoDB , Express , React , Node.js</span>
            </li>
          </ul> 
        </div>

        <div class="projectDetails">
            <div class="summary">
                <div>
                    <h2>Background</h2>

                    <div class="paragraph">
                        <p>Since the start of the COVID-19 pandmic, mental health has been on a downward slope for many Canadians. A poll conducted by Mental Health Commission of Canada stated that 50% of Canadians reported worsening mental health since the pandemic began and 81% of Canadians agreed that the pandemic is negativelyy impacting their mental health both at home and in the workplace.</p>

                        <p>Knowing that Canadians are dealing with worsening health, it is now an imortant time to offer a resources and tools to help Canadians deal and cope with their stress.</p> 

                        <span class="bold"><p>So the question arises:</p></span>

                    </div>
                </div>
                    <h4><em>"How can we develop an application help Canadians set short-term and long-term personal goals that support and encourage positive mental health?"</em></h4>
            </div>

            <div class="solution">
                <div>
                    <h2>Solution</h2>
                        <div class="paragraph">
                            <p>Our solution approach calls for <span class="bold">four main pillars of mental health:</span></p>
                            <span><span class="bold">1.</span> Motivation and Encouragement</span> 
                            <span><span class="bold">2.</span> Personal Goals and Habits</span> 
                            <span><span class="bold">3.</span> Self-Achievement and Personal Victories</span> 
                            <span><span class="bold">4.</span> Support and Wellness</span> 
                            
                            <p>With the solution approach in mind, the team started to map and plan out how our application will match the solution approach, which we call <span class="bold">suum!</span></p>
                        </div>
                        
                    </div>


                    <img src="http://localhost/portfolio2021/images/projects/suum/suumUserflow.png" alt="user flow of the proposed smart watch app"/>
                    
                    <p style="text-align:left"><span class="bold">suum</span> is a productivity app that encourages users maintain positive habits in the lives by gamifying goal and habit creation. It allows users identify specific habits they want to develop thn follow prompts & reminders to motivate motivate actions towards their goal. And by maintaining positive habits, users will seea growth in the mental health and well-being.</p>



                    <div>
                    <h2>Design</h2>
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

                        <p>This frame of thought had me analyze what information was critical and the most necessary to deliver to the user.. and repeatedly ask myself, <br/> <span class="bold">"can it be distilled further?"</span></p>
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
            <a href="#" class="">Next Project<i class="fas fa-arrow-right"></i></a>
        </div>
    </main>
    <footer>
        <?php $this->load->view('footerView');?>
    </footer>
</body>
</html>