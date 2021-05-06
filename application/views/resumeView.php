<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('headerView');?>
    <link rel="stylesheet" href="../css/style.css" /> <!-- change to absolute on deploy-->
  </head>
  <body>
    <!-- BORDERS Do not touch-->
    <div class="borderFrame outline" id=""></div>
    <?php $this->load->view('navView');?>
    
    <main>
      <div id="outer-max-flex"> <!--outer-max-flex start for desktop-->
      <div class="desktop-left-column"> <!--left column desktop view-->
      <a href="https://www.alanalee.me/"><h1 id="name">Alana D. Lee</h1></a>
        <!--name breaks at 293px width-->
      <div class="content-wrapper" id="personal-information">
        <h2 id="tagline">UX/UI Designer</h2>
        <div id="">
          <p id="">Building user-focused, accessible experiences in the digital space.</p>
        </div>
      </div>

      <!-- CONTACT INFO -->
      <div class="links content-wrapper extra-mt" id="contact">
        <a href="https://www.alanalee.me"><i aria-hidden="true" class="fas fa-link"></i> alanalee.me</a>
        <a href=" mailto: alana.d.lee@gmail.com"><i aria-hidden="true" class="far fa-envelope"></i> alana.d.lee@gmail.com</a>
        <a href="tel:647-206-6881"><i aria-hidden="true" class="fas fa-phone-alt"></i> 647.206.6881</a>
      </div>
      <br/>

      <br/>
      <!-- about section -->
        <div class="content-wrapper" id="about-section">
          <h2 class="section-title">ABOUT ME</h2>
          <p class="about-text">Starting in the interior design field, Alana realized that spatial experiences can extend beyond the physical realm. She always looks to elevate the common experiences in our lives by bridging the physical and digital space with her passion for accessible design and creative thinking.</p>
            
          <p class="about-text">Alana is currently in her final term at Sheridan's Interactive Media Management program, building on her knowledge of user experience. Prior to this, she has worked for an interior design firm creating construction documents for retail spaces. </p>
        </div>
        <br id="blank"/>
        <div class="content-wrapper max-flex"> <!--tablet view start-->
          <!-- competency and skills -->
            <div id="competency">
            <h2 class="section-title">COMPETENCY</h2>
                <ul class="list" id="competency-list">
                  <li>Interaction Design</li>
                  <li>Creative Direction</li>
                  <li>UX Design</li>
                  <li>UX Research</li>
                  <li>Digital Fabrication</li>
                  <li>Visual Design</li>
                  <li>Digital Fabrication</li>
                  <li>Prototyping</li>
                </ul>
            </div>
            <br/>
            <div id="skills">
            <h2 class="section-title" id="skills-title">SKILLS</h2>
            <h3 class="section-title">CODE/INTERACTION</h3>
              <p class="list">PHP, MySQL, HTML, CSS, Javascript, jQuery, Wordpress, ZIMjs, React, React Native, Node js, Express, MongoDB </p>

            <h3 class="section-title">GRAPHIC</h3>
              <p class="list">XD, Photoshop, Illustrator, InDesign, Premiere Pro, After Effects, Figma</p>

            <h3 class="section-title">3D/HARDWARE</h3>
              <p class="list" id="rm-mb">Arduino, Rhinoceros3D, SketchUp, Blender</p>
            </div>  
        </div> <!--tablet view columns end-->
    </div> <!--end of desktop left column--> 
    <br/>
  <div class="desktop-right-column"> <!--start right desktop column-->
    <div>
      <div class="content-wrapper" id="education-section">
        <!-- EDUCATION -->
        <h2 class="section-title">EDUCATION</h2>
          <h3>Sheridan College - Interactive Media Management</h3>
            <p class="date">Oakville, ON | Sept 2020 - present</p>
            <p>Graduating April 2021</p>
      
          <h3>Ryerson University - Interior Design</h3>
            <p class="date">Toronto, ON | April 2019</p>
            <p>Bachelor's of Interior Design BID</p>
      </div>
      <br/>

      <div class="content-wrapper">
        <!-- WORK -->
        <h2 class="section-title">WORK</h2>
        <div class="sm-mb">
            <h3>Interior Design Partners Inc. - Design Assistant</h3> 
              <p class="date">Mississuaga, ON | Mar 2019 - Apr 2020</p>
              <ul class="job-list">
                <li>Created construction drawing sets for multiple commercial and corporate interior projects</li>
                <li>Created new digital branding content for web storefront</li>
                <li>Wrote educational content for social media accounts to educate the general public on the practice of interior design</li>
                <li>Liason of communication between the company, clients, and other industry consultants</li>
              </ul>
        </div>
        <br class="sm-mb"/>

        <div class="sm-mb">
          <h3>Rainbow Jade - Sales Associate</h3>
            <p class="date">Mississaua, ON | Apr 2016 - Mar 2019</p>
            <ul class="job-list">
              <li> Actively approached customers, with diverse backgrounds in the busiest shopping center, Square One</li>
              <li>Built lasting client relations</li>
              <li>Consistently met company's target sales</li>
              <li>Identified customer’s needs and promoted products within customers' expectations and budget</li>
              <li> Proficient in facilitating cash, debit and credit transactions & balancing transactions at the end of each working shift</li>
              <li>Managed repairs and custom orders on strict deadlines</li>
            </ul>
        </div>
      </div>
      <br/>

      <div class=" content-wrapper extra-pb" >
        <!-- EXPERIENCE -->
        <h2 class="section-title">RELATED EXPERIENCE</h2>
          <h3>Digital Fabrication Zone - Member</h3> 
            <p class="date">Toronto, ON | Sept 2015 - Apr 2017</p>
            <ul class="job-list">
              <li> Participated in workshops and independent projects involving digital fabrication and 3D fabrication</li>
              <li>Collaborated with students and members of different faculties to complete projects and workshops</li>
              <li>Acquired new skills in 3D-digital fabrication and refined traditional hand crafting skills</li>
            </ul>
      </div>

      <br/>

        <div class="extra-mb content-wrapper" id="awards-section">
          <!-- AWARDS -->
          <h2 class="section-title">AWARDS</h2>
          <h3>Dennis Mock Leadership Award</h3> 
            <p class="date">Toronto, ON | 2017</p>
            <ul class="job-list">
              <li>Nominated in recognition for outstanding voluntary extracurricular contributuions to the school and the Interior Design program at Ryerson University.</li>
            </ul>
          <br/>  
          <h3>Kentwood Design Competition - Finalist</h3> 
            <p class="date">Toronto, ON | 2017</p>
            <ul class="job-list">
              <li>Finalist award for an original design-build installation at the Interior Design Show (IDS2017).</li>
            </ul>
        </div>
    </div> <!--end of content-->
    </div> <!--end of desktopright column-->
    </div>   <!-- end of outer-max-flex -->
    </main>
    <footer>
        <?php $this->load->view('footerView');?>
    </footer>
</body>
</html>