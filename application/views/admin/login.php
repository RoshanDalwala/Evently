<!DOCTYPE html>
<html lang="en">
   <title>Evently</title>
   <?php include_once("topScripts.php")?>       
   </head>
   <body>
   <div>  
      <div id="pcoded" class="pcoded">
            <div class="pcoded-main-container">
               <div class="pcoded-wrapper">
                  
                  <div class="pcoded-content">   
                     <div class="pcoded-inner-content">
                        <div class="main-body">
                           <div class="page-wrapper">
                              <div class="page-body button-page">
                                 <div class="row" style="align-items: center;">
                                    <div class="col-sm-8 " style="margin-top: 25px;">
                                       <a href="./index.php">
                                          <img class="img-fluid" style="height:150px ; margin-left:325px; margin-top: 1px;" src="<?=base_url('resources/admin/')?>/assets/images/newlogo.png" alt="Theme-Logo" />
                                       </a>
                                       <h1 style="text-align: center;">Login</h1>
                                       <div class="welcome-text" style="text-align: center;">
                                          <h3>We're glad to see you again!</h3>
                                          <!-- <span>Don't have an account? <a href="pages-register.php">Sign Up!</a></span> -->
                                       </div>
                                       <div class="card">
                                          <div class="card-header">
                                             <div class="card-header-left">
                                                <h5>Login</h5>
                                             </div>
                                          </div>
                                          <div class="card-block">
                                             <div class="login-wrapper">
                                                <div class="container-center">
                                                   <div class="panel panel-bd">
                                                     
                                                      <div class="panel-body">
                                                         <form method="post" action="<?=site_url('AdminC/doLogin') ?>">
                                                            <div class="form-group">
                                                               <label class="control-label" for="username">Username</label>
                                                               <input type="text" placeholder="Username" title="Please enter you username" required="" value="" name="txtUname" id="username" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                               <label class="control-label" for="password">Password</label>
                                                               <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="txtPwd" id="password" class="form-control">
                                                            </div>
                                                            <div>
                                                               <?php
                                                                  if(isset($msg))
                                                                  echo $msg;
                                                               ?>
                                                            </div>
                                                            <div>
                                                               <button class="btn btn-primary">Login</button>
                                                            </div>
                                                         </form>
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