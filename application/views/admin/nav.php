<nav class="navbar header-navbar pcoded-header">
   <div class="navbar-wrapper">
      <div class="navbar-logo"> 
         <a href="./index.html">
            <img class="img-fluid" style="width: 20%; margin-right:10px;" src="<?=base_url('resources/admin/')?>/assets/images/newlogo.png" alt="Theme-Logo" />
         </a>
         <a class="mobile-menu" id="mobile-collapse" href="#!">
         <i class="feather icon-menu icon-toggle-right"></i>
         </a>
         <a class="mobile-options waves-effect waves-light">
         <i class="feather icon-more-horizontal"></i>
         </a>
      </div>
      <div class="navbar-container container-fluid">
         <ul class="nav-right">
            
            <li class="user-profile header-notification">
               <div class="dropdown-primary dropdown">
                  <div class="dropdown-toggle" data-toggle="dropdown">
                     <img src="<?=base_url('resources/admin/')?>/assets/images/Bappa Image.jpeg" class="img-radius" alt="User-Profile-Image">
                     <span><?=$_SESSION['aname'] ?></span>
                     <i class="feather icon-chevron-down"></i>
                  </div>
                  <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                     <li>
                        <a href="#!">
                        <i class="feather icon-settings"></i> Settings
                        </a>
                     </li>
                     <li>
                        <a href="<?=site_url('Adminc/logout')?>">
                        <i class="feather icon-log-out"></i> Logout
                        </a>
                     </li>
                  </ul>
               </div>
            </li>
         </ul>
      </div>
   </div>
</nav>