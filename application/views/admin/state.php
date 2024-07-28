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
                                    <h5>State</h5>
                                    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="page-header-breadcrumb">
                                 <ul class=" breadcrumb breadcrumb-title">
                                    <li class="breadcrumb-item">
                                       <a href="#!">State</a>
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
                                                <h5>State Here</h5>
                                             </div>
                                             
                                          </div>
                                          <div class="card-block">
                                             <p>All State Information</p>
                                             <div>
                                                <a href="<?=site_url('CityC/loadAddState')?>">Add State</a>
                                             </div>
                                             <div class="panel-body">
                                                <table class="table table-striped">
                                                   <thead style="font-style: revert;">
                                                      <tr>
                                                         <th>State Id</th>
                                                         <th>State Name</th>
                                                         <th>Delete</th>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      <?php
                                                         foreach($stateData as $s)
                                                         {
                                                      ?> 
                                                         <tr>
                                                            <td><?=$s->StateID?></td>           
                                                            <td><?=$s->StateName?></td>
                                                            <td>
                                                               <a href="<?=site_url('CityC/removeState/'.$s->StateID)?>">Delete</a>
                                                            </td>
                                                         </tr>
                                                      <?php
                                                         }
                                                      ?>   
                                                   </tbody>
                                                   <tfoot>
                                                      <tr>
                                                         <td>State Id</td>
                                                         <td>State Name</td>
                                                         <th>Delete</th>
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