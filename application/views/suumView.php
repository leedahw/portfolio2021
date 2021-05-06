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
    <!-- BORDERS & nav Do not touch-->
    <div class="borderFrame outline" id=""></div>
    <?php $this->load->view('navView');?>

    <main class="projectFull">
        <!-- banner here should be made to fit -->
        <div style="justify-content:flex-end; background-color:#fafafa" class="projectBanner mockup">
            <img src="<?php echo base_url('images/projects/suum/suum1.png');?>" alt="suum project banner showin screen mockup"/>

            <h1>suum</h1>
        </div>
        <div class="projectSpecs"> 
          <ul>
            <li>
                <h4>Date:</h4>
                <span>January ~ April 2021</span>
            </li>
            <li>
                <h4>Roles:</h4>
                <span>User Experience , User Interface , Front-End Development</span>
            </li>
            <li>
                <h4>Tech:</h4>
                <span>Adobe XD , MongoDB , Express , Reactjs , Node.js</span>
            </li>
            <li>
                <h4>Team Members:</h4>
                <span>Jason Do , Shey Oke , You-You Hou</span>
            </li>
          </ul> 
        </div>

        <div class="projectDetails">
            <div>
                <div>
                    <h2>Learned Outcomes</h2>
                    <div class="paragraph">
                        <p>Developing <span class="bold">suum</span> with Reactjs, I learned about building reusable components and the concept of React state and the setState functions. I also learned about passing state from screens to components and vice versa.</p>
                        <p>Though there were many stumbles, I think <span class="bold">suum</span> was an overall vicotry for me and our group. Starting at square one and knowing nothing about developing MERN stack applications, we were able to build a functioning, deployed React App. I am incredibly proud of the leaps the team made in development.</p>
                    </div>
                </div>
            </div>

            <div class="summary">
                <div>
                    <h2>Background</h2>

                    <div class="paragraph">
                        <p>Since the start of the COVID-19 pandmic, mental health has been on a downward slope for many Canadians. A poll conducted by Mental Health Commission of Canada stated that 50% of Canadians reported worsening mental health since the pandemic began and 81% of Canadians agreed that the pandemic is negatively impacting their mental health both at home and in the workplace.</p>

                        <p>Knowing that Canadians are dealing with worsening health, it is now an imortant time to offer resources and tools to help them deal and cope with their stress.</p> 

                        <span class="bold"><p>So the question is:</p></span>

                    </div>
                </div>
                    <h4><em>"How can we develop an application help Canadians set short-term and long-term personal goals that support and encourage positive mental health?"</em></h4>
            </div>

            <div class="solution">
                <div>
                    <h2>Solution</h2>
                        <div class="paragraph">
                            <p>Our solution approach calls for <span class="bold">four main pillars:</span></p>
                            <span><span class="bold">1.</span> Motivation and Encouragement</span> <br/>
                            <span><span class="bold">2.</span> Personal Goals and Habits</span> <br/>
                            <span><span class="bold">3.</span> Self-Achievement and Personal Victories</span> <br/>
                            <span><span class="bold">4.</span> Support and Wellness</span> <br/>
                            
                            <p>With this solution approach in mind, the team started to map and plan out how our application will match the solution approach, which we call <span class="bold">suum!</span></p>
                        </div>
                        
                </div>

                <div>
                    <h2>Initial Concept</h2>
                    <div class="paragraph">
                        <p><span class="bold">suum</span> is a productivity app that encourages users maintain positive habits in the lives by gamifying goal and habit creation. It allows users identify specific habits they want to develop then follow prompts & reminders to motivate motivate actions towards their goal. And by maintaining positive habits, users will seea growth in the mental health and well-being. Every time a user completes a habit, the app will respond by watering a plant on the homescreen that represents the user's progress.</p>

                        <p>Based on our four pillars, we wanted suum to give off a kind and encouraging tone to users. After researching into colour psychology, we decided our main colour to be green, symbolizing support, balance and harmony and our accent colour as yellow to add vibrancy and encourage motivation.</p>

                    </div>
                </div>

                    <img src="<?php echo base_url('images/projects/suum/suumUserflow.png');?>" alt="user flow for suum app"/>
                    
                    <p>This user flow maps out suum's tight user path. The path starts in the evening where users input the habits they want to complete for the next day. Then, throughout the following day, they receive notifications from the app with gentle reminders.</p>


                
                <img src="<?php echo base_url('images/projects/suum/suumStyleTile.png');?>" alt="suum's styletile"/>
                <p>This style tile above shows implementation of suum's brand colours and logo.</p>

                <div>
                    <h2>Design and Development</h2>
                    <div class="paragraph">
                        <p>With the user flow and style tile in hand, we created a high fidelity prototype as a guide for consistency throughout the app in the upcoming development phase.</p>

                        <p><span class="bold">suum</span> was developed using the MERN stack. With a front-end developer role specifically, it was my first time using the Reactjs framework and I knew that we would encounter many stumbles and that our team would need lots of time troubleshoot and debug our code, so we started our development stage early in our timeline.</p>

                        <p></p>
                    </div>
                </div>
                
                <div id="gifContainer">
                    <div>
                        <img src="<?php echo base_url('images/projects/suum/suumScreen1.png');?>" alt="final home screen designs."/>
                        <p style="margin-bottom:2rem; padding-right:0.5rem; text-align:left">The set of screens above represent a set of features offered in the "Greenspace," our home screen for the app. suum offers users a tab style component for user to flip through their daily habits and mindfulness tips.</p>
                    </div>
                    <div>
                        <img src="<?php echo base_url('images/projects/suum/suumScreen2.png');?>" alt="NIhtly Check-in Screen Designs."/>
                        <p style="margin-bottom: 4rem; padding-left:0.5rem; text-align:left">This set of screens showcase the nightly check in function of suum. This is the cycle where users would have their last chance to check their habits off for the day. If these habits were not finished, they can be pushed to the next day. After the check in, users can then plan their habits for the following day.</p>
                    </div>
                </div>

            </div>

            <div class="reflection">

                <div>
                    <h2>Struggles</h2>
                    <div class="paragraph">
                        <p>One of the main struggles I had in creating suum, was working with Reactjs to create the prototype.</p>

                        <p>There was an extremely steep learning curve; especially building my first component and understanding the concept of states. It definitely provided new insight into how I view javascript framework libraries. Very specifically, we had the most issue creating the tab component shown in the "Greenspace." We were able to figure it out, but only after we truly understood the concept of passing states between components.</p>
                    </div>
                </div>

                <div >
                    <h2>External Links</h2>
                    <div class="paragraph">
                        <p>Check out our deployed app <a class="purple bold" id="appLink" href="https://suum-app.herokuapp.com/">here!</a></p>
                        <p>You can read more in depth about the idea of suum in our <a class="purple bold" href="<?php echo base_url('suum.pdf')?>" target="_blank">white paper document.</a></p>

                    </div>
                </div>
            </div>

        </div>

        <div class="projectNav">
            <a href="<?php echo base_url('index.php/GreenP')?>" class=""><i class="fas fa-arrow-left"></i>Previous Project</a>
            <a href="<?php echo base_url('index.php/ArchiWeekly')?>" class="">Next Project<i class="fas fa-arrow-right"></i></a>
        </div>
    </main>
    <footer>
        <?php $this->load->view('footerView');?>
    </footer>
</body>
</html>