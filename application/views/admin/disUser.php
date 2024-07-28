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
                                    <h5>Users</h5>
                                    <span>Displays all users infromation</span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="page-header-breadcrumb">
                                 <ul class=" breadcrumb breadcrumb-title">
                                    
                                    <li class="breadcrumb-item">
                                       <a href="#!">Users</a>
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
                                                <h5>All User Informations</h5>
                                             </div>
                                             
                                          </div>
                                          <div class="card-block">
                                                <div class="content"> 
                                                   <div class="row">
                                                      <div class="col-sm-12 col-md-12">
                                                         <div class="panel panel-bd lobidrag">
                                                            <div class="panel-heading">
                                                               <div class="panel-title">
                                                                  
                                                               </div>
                                                            </div>
                                                             <!-- <a href="<?=site_url('CategoryC/loadAddCategory')?>">Add Category</a> -->
                                                            <div class="panel-body">
                                                              <table class="table table-striped">
                                                                 <thead>
                                                                     <tr>
                                                                        <th>User ID</th>
                                                                        <th>User Name</th>
                                                                        <th>Contact Number</th>
                                                                        <th>Email ID</th>
                                                                        <th>City</tyh>
                                                                        <!-- <th>Delete</th> -->
                                                                        <!-- <th>Update</th> -->
                                                                     </tr>
                                                                 </thead>
                                                                  <tfoot>
                                                                     <tr>
                                                                        <th>User ID</th>
                                                                        <th>User Name</th>
                                                                        <th>Contact Number</th>
                                                                        <th>Email ID</th>
                                                                        <th>City</th>
                                                                        <!-- <th> Delete</th> -->
                                                                        <!-- <th>Update</th> -->
                                                                     </tr>
                                                                 </tfoot>
                                                                 <tbody> 
                                                                  <?php
                                                                     foreach($userData as $s)
                                                                     {
                                                                  ?> 
                                                                    <tr>
                                                                      <td><?=$s->UserID?></td>
                                                                      <td><?=$s->UserName?></td>
                                                                      <td><?=$s->ContactNumber?></td>
                                                                      <td><?=$s->EmailID?></td>
                                                                     <td><?=$s->CityName?></td>
                                                                     <!-- <td>
                                                                        <a href="<?=site_url('UserC/removeUser/'.$s->UserID)?>">Delete</a>
                                                                     </td> -->
                                                                     <!-- <th><a href="<?=site_url('CategoryC/loadUpdateCategory/'.$s->CategoryID)?>">Update</a></th> -->
                                                                    </tr>
                                                                  <?php
                                                                     }
                                                                  ?>    
                                                                 </tbody>

                                                              </table>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
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