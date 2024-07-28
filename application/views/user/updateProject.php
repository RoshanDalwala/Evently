<!doctype html>
<html lang="en">
    <head>
        <!-- Basic Page Needs
         ================================================== -->
      <title>Evently</title>
      <?php include_once("top-script.php") ?>
    </head>
   <body>
      <!-- Wrapper -->
      <div id="wrapper">
        <!-- Header Container
            ================================================== -->
        <?php include_once("header.php") ?>

        <div class="clearfix"></div>
       
         <!-- Category Boxes -->
         <div class="section margin-top-65">
            <div class="container">
               <div class="row">
               <div class="col-sm-12">
                                       <div class="card">
                                          <div class="card-header">
                                             <div class="card-header-left">
                                                <h5>Enter Category Here</h5>
                                             </div>
                                             
                                          </div>
                                          <div class="card-block">
                                             <div class="content">
                                                <div class="row">
                                                   <div class="col-sm-12 col-md-12">
                                                      <div class="panel panel-bd lobidrag">
                                                         <div class="panel-heading">
                                                         </div>
                                                         <div class="panel-body">

                                                            <form method="post" class="row" action="<?=site_url('HomeC/addProject')?>">
                                                               <div class="col-md-6">  
                                                                  <div>
                                                                     <a href="<?=site_url('HomeC/loadBackProject')?>">Back</a>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label>Title</label>
                                                                     <input type="text" class="form-control" value="<?=$proInfo->Title?>" name="txtTitle" placeholder="Add Title Name">
                                                                  </div>
                                                                  <div class="form-group">
                                                                    <button type="submit" class="btn btn-primary mt-2" value="Submit">Submit</button>
                                                                  </div>
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
         <!-- Category Boxes / End -->
         
         <?php include_once("footer.php") ?>
      </div>
      <!-- Wrapper / End -->
      <?php include_once("bottom-script.php") ?>
   </body>
</html>