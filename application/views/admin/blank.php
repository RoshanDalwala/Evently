<!DOCTYPE html>
<html lang="en">
   <title>Evently</title>
   <?php include_once("topScripts.php")?>       
   </head>
   <body>
      <div class="loader-bg">
         <div class="loader-bar"></div>
      </div>
      <div id="pcoded" class="pcoded">
         <div class="pcoded-overlay-box"></div>
         <div class="pcoded-container navbar-wrapper">
           <?php include_once("nav.php")?>
            
            <div class="pcoded-main-container">
               <div class="pcoded-wrapper">
                  <?php include_once("side.php")?>

                  <div class="pcoded-content">
                     <div class="page-header card">
                        <div class="row align-items-end">
                           <div class="col-lg-8">
                              <div class="page-header-title">
                                 <i class="feather icon-box bg-c-blue"></i>
                                 <div class="d-inline">
                                    <h5>Buttons</h5>
                                    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="page-header-breadcrumb">
                                 <ul class=" breadcrumb breadcrumb-title">
                                    <li class="breadcrumb-item">
                                       <a href="#!">Buttons</a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="pcoded-inner-content">
                        <div class="main-body">
                           <div class="page-wrapper">
                              <div class="page-body button-page">
                                 <div class="row">
                                    <div class="col-sm-12">
                                       <div class="card">
                                          <div class="card-header">
                                             <div class="card-header-left">
                                                <h5>Main Containt</h5>
                                             </div>
                                             <div class="card-header-right">
                                                <ul class="list-unstyled card-option">
                                                   <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                                   <li><i class="feather icon-maximize full-card"></i></li>
                                                   <li><i class="feather icon-minus minimize-card"></i></li>
                                                   <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                                   <li><i class="feather icon-trash close-card"></i></li>
                                                   <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <div class="card-block">
                                             <p>Page Heading Here</p>
                                            
                                          </div>
                                       </div>
                                    </div>
                                   
                                 </div>
                                
                              </div>
                           </div>
                        </div>
                        <div id="styleSelector"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
     
      <?php include_once("bottomScripts.php")?>
   </body>
</html>