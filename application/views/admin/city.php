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
                                    <h5>City</h5>
                                    <span>All Cities</span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="page-header-breadcrumb">
                                 <ul class=" breadcrumb breadcrumb-title">
                                    <li class="breadcrumb-item">
                                       <a href="#!">City</a>
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
                                                <h5>City Information Here</h5>
                                             </div>
                                             
                                          </div>
                                          <div class="card-block">
                                             <p>All City Information</p>
                                             <div>
                                                <a href="<?=site_url('CityC/loadAddCity')?>">Add City</a>
                                             </div>
                                             <div class="panel-body">
                                                <table class="table table-striped">
                                                   <thead style="font-style: revert;">
                                                      <tr>
                                                         <td>City Id</td>
                                                         <td>City Name</td>
                                                         <td>State Name</td>
                                                         <td> Delete</td>

                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      <?php
                                                         foreach($cityData as $s)
                                                         {
                                                      ?>
                                                         <tr>
                                                            <td><?=$s->CityID?></td>           
                                                            <td><?=$s->CityName?></td>
                                                            <td><?=$s->StateName?></td>
                                                            <td>
                                                               <a href="<?=site_url('CityC/removeCity/'.$s->CityID)?>">Delete</a>
                                                            </td>
                                                         </tr>
                                                      <?php
                                                         }
                                                      ?>
                                                   </tbody>
                                                   <tfoot>
                                                      <tr>
                                                         <td>City Id</td>
                                                         <td>City Name</td>
                                                         <td>State Name</td>
                                                         <td>Delete</td>

                                                      </tr>
                                                   </tfoot>
                                                </table>
                                             </div>  
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