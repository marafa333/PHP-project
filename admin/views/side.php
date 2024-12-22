
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="<?= assets('assets/img/ui-sam.jpg')?>" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Marcel Newman</h5>
              	  
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?= home('index.php') ?>">Home</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;"  class="<?= beActive('trainers') ?>">
                          <i class="fa fa-th"></i>
                          <span>Trainers</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?= controllers('trainers.php?action=add') ?>">Add Trainers</a></li>
                          <li><a  href="<?= controllers('trainers.php') ?>">show Trainers</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;"  class="<?= beActive('about') ?>">
                          <i class="fa fa-th"></i>
                          <span>Why Us</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?= controllers('about.php?action=add') ?>">Add Why Us</a></li>
                          <li><a  href="<?= controllers('about.php') ?>">show Why Us</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;"  class="<?= beActive('contact') ?>">
                          <i class="fa fa-th"></i>
                          <span>Contact</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?= controllers('contact.php?action=add') ?>">Add Contact</a></li>
                          <li><a  href="<?= controllers('contact.php') ?>">show Contact</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;"  class="<?= beActive('users') ?>">
                          <i class="fa fa-th"></i>
                          <span>Users</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?= controllers('users.php?action=add') ?>">Add Users</a></li>
                          <li><a  href="<?= controllers('users.php') ?>">show Users</a></li>
                      </ul>
                  </li>
                

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">