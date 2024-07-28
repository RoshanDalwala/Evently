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
                                             <div class="content"> 
                                                   <div class="row">
                                                      <div class="col-sm-12 col-md-12">
                                                         <div class="panel panel-bd lobidrag">
                                                            <div class="panel-heading">
                                                               <div class="panel-title">
                                                                  
                                                               </div>
                                                            </div>
                                                            
                                                            <div class="panel-body">
                                                              <table class="table table-striped">
                                                                 <thead>
                                                                     <tr>
                                                                        <th>Reported By Username</th>
                                                                        <th>Evenet Manager Name</th>
                                                                        <th>Reason</th>
                                                                        <th>Reported On</th>
                                                                        <th>Operations</th>
                                                                     </tr>
                                                                 </thead>
                                                                  <tfoot>
                                                                     <tr>
                                                                        <th>Reported By Username</th>
                                                                        <th>Evenet Manager Name</th>
                                                                        <th>Reason</th>
                                                                        <th>Reported On</th>
                                                                        <th>Operations</th>
                                                                     </tr>
                                                                 </tfoot>
                                                                 <tbody> 
                                                                  <?php
                                                                     foreach($data as $s)
                                                                     {
                                                                  ?> 
                                                                    <tr>
                                                                      <td><?=$s->uname?></td>
                                                                      <td><?=$s->euname?></td>
                                                                      <td><?=$s->Reason?></td>
                                                                      <td><?=$s->CreatedDateTime?></td>
                                                                      <td>
                                                                        <?php
                                                                        if($s->Status==0)
                                                                          {
                                                                        ?>

                                                                         <a class="btn btn-danger" href="<?=site_url('Reported/blockManager/'.$s->EventManagerID."/".$s->ReportedEventManagerID)?>">Block</a>
                                                                         <a class="btn btn-warning" href="<?=site_url('Reported/cancleReport/'.$s->ReportedEventManagerID)?>">Cancle</a>
                                                                         <?php
                                                                          } 
                                                                          else
                                                                          {
                                                                        ?>
                                                                           <a class="btn btn-success">Responded</a>
                                                                        <?php
                                                                          }
                                                                          ?>
                                                                      </td>
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