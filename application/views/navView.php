<nav class="navbar">
        <input type="checkbox" class="navCheckbox" id="navCheckbox">
            <label for="navCheckbox" class="navToggle">
                <i class="fas fa-bars" id="menu"></i>
                <i class="fas fa-times" id="close"></i>
            </label>
              <ul class="navbar-links">
              <li><a href="#" class="logo sunflora"><img src="../images/logo.svg"/></a></li>

                <li><a href="<?php echo base_url();?>" class="navLi">Home</a></li>
                <li><a href='<?php echo base_url();?>aboutController' class="navLi">About</a></li>
                <li><a href='<?php echo base_url();?>resumeController' class="navLi">Resume</a></li>
                <li><a href='<?php echo base_url();?>contactController' class="navLi">Contact</a></li>
              </ul>
    </nav>