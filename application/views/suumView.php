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
                <span>January ~ April 2021</span>
            </li>
            <li>
                <h4>Roles:</h4>
                <span>User Experience , User Interface , Front-End Development</span>
            </li>
            <li>
                <h4>Tech:</h4>
                <span>Adobe XD , Illustrator , MongoDB , Express , React , Node.js</span>
            </li>
            <li>
                <h4>Team Members:</h4>
                <span>Jason Do , Shey Oke , You-You Hou</span>
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


                    <img src="http://localhost/portfolio2021/images/projects/suum/suumUserflow.png" alt="user flow for suum app"/>
                    
                    <p style="text-align:left"><span class="bold">suum</span> is a productivity app that encourages users maintain positive habits in the lives by gamifying goal and habit creation. It allows users identify specific habits they want to develop thn follow prompts & reminders to motivate motivate actions towards their goal. And by maintaining positive habits, users will seea growth in the mental health and well-being. Every time a user completes a habit, the app will respond by watering a plant on the homescreen that represents the user's progress.</p>


                <div>
                    <h2>Initial Concept</h2>
                    <div class="paragraph">
                        <p>Based on our four pillars, we wanted suum to give off a kind and encouraging tone to users. So researching into colour psychology, we decided our main colour to be green, symbolizing support, balance and harmony, and accent colour as yellow to add vibrancy and encourage motivation.</p>

                    </div>
                </div>
                
                <img src="http://localhost/portfolio2021/images/projects/suum/suumStyleTile.png" alt="suum's styletile"/>
                <p>This style tile above shows implementation of suum's brand colours and logo.</p>

                <div>
                    <h2>Design and Development</h2>
                    <div class="paragraph">
                        <p>With the user flow and style tile in hand, we created high fidelity screen designs as a guide for the upcoming development phase, for consistency throughout the app.</p>

                        <p>suum was developed using the MERN stack. With a front-end developer role specifically, it was my first time using the Reactjs framework and I knew that we would encounter many stumbles and need lots of time troubleshoot and debug our code, so we started our development stage early on in process.</p>

                        <p></p>
                    </div>
                </div>
                
                <div id="gifContainer">
                    <img src="http://localhost/portfolio2021/images/projects/suum/suumScreen1.png" alt="final hoome screen designs."/>
                    
                    <img src="http://localhost/portfolio2021/images/projects/suum/suumScreen2.png" alt="final hoome screen designs."/>
                </div>
                <div id="gifContainer">
                    <p style="margin-bottom:2rem; padding-right:0.5rem; text-align:left">The left set of screens represent a set of features offered in the "Greenspace," our home screen for the app. suum offers users a tab style component to tab through their daily habits and mindfulness tips.</p>
                    <p style="margin-bottom: 4rem; padding-left:0.5rem; text-align:left">The right set of screens showcase the nightly check in function of suum. This is the cycle where users would have their last chance to check their habits off for the day. If these habits were not finished, they can be pushed to te next day. After the check in, users can then plan their habits for the following day.</p>
                </div>

            </div>

            <div class="reflection">

                <div >
                    <h2>Struggles</h2>
                    <div class="paragraph">
                        <p>One of the main struggles I had in creating suum, was working with Reactjs to create the prototype.</p>

                        <p>It was an extremely steep learning curve. Especially building my first component, and understanding the concept of states, definitely provided new insight into how I view javascript framework libraries. Very specifically, we had the most issue creating the tab component shown in the "Greenspace." We were able to figure it out, but only after we truy understood the concept of passing states between components.</p>
                    </div>
                </div>

                <div>
                    <h2>Learned Outcomes</h2>
                    <div class="paragraph">
                        <p>Developing in react, I learned about building reusable components and the concept of React state and the setState functions. I also learned about passing state from screens to components and vice versa.</p>

                        <p>Thought there were many stumbles, I think this app was an overall vicotry for me and our group. From starting at square one, we were able to build a functioning, deployed React App. I am so proud of the leaps in development we made.</p>

                    </div>
                </div>

                <div >
                    <h2>External Links</h2>
                    <div class="paragraph">
                        <p>Check out our deployed app <a class="purple bold" id="appLink" href="https://suum.herokuapp.com/">here!</a></p>
                        <p>You can read more in depth about the idea of suum in our <a class="purple bold" href="">white paper document.</a></p>

                    </div>
                </div>
            </div>

        </div>

        <div class="projectNav">
            <a href="<?php echo base_url('greenP')?>" class=""><i class="fas fa-arrow-left"></i>Previous Project</a>
            <a href="#" class="">Next Project<i class="fas fa-arrow-right"></i></a>
        </div>
    </main>
    <footer>
        <?php $this->load->view('footerView');?>
    </footer>
</body>
</html>