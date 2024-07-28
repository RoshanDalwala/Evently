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
                                    <h5>Categories Here</h5>
                                    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="page-header-breadcrumb">
                                 <ul class=" breadcrumb breadcrumb-title">
                                    
                                    <li class="breadcrumb-item">
                                       <a href="#!">Categories</a>
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
                                                <h5>All Category Informations</h5>
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
                                                             <a href="<?=site_url('CategoryC/loadAddCategory')?>">Add Category</a>
                                                            <div class="panel-body">
                                                              <table class="table table-striped">
                                                                 <thead>
                                                                     <tr>
                                                                        <th>Category ID</th>
                                                                        <th>Category Name</th>
                                                                        <th>Delete</th>
                                                                        <th>Update</th>
                                                                     </tr>
                                                                 </thead>
                                                                  <tfoot>
                                                                     <tr>
                                                                        <th>Category ID</th>
                                                                        <th>Category Name</th>
                                                                        <th> Delete</th>
                                                                        <th>Update</th>
                                                                     </tr>
                                                                 </tfoot>
                                                                 <tbody> 
                                                                  <?php
                                                                     foreach($categoryData as $s)
                                                                     {
                                                                  ?> 
                                                                    <tr>
                                                                      <td><?=$s->CategoryID?></td>
                                                                      <td><?=$s->CategoryName?></td>
                                                                     <td>
                                                                        <a href="<?=site_url('CategoryC/removeCategory/'.$s->CategoryID)?>">Delete</a>
                                                                     </td>
                                                                     <th><a href="<?=site_url('CategoryC/loadUpdateCategory/'.$s->CategoryID)?>">Update</a></th>
                                                                    </tr>
                                                                  <?php
                                                                     }
                                                                  ?>    
                                                                 </tbody>

                                                              </table>
                                                            </div>
                                                            <div class="panel-footer">
                                                               This is standard panel footer
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