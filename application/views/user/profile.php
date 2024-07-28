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
                <div class="single-page-header freelancer-header" data-background-image="images/single-freelancer.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="single-page-header-inner">
                                    <div class="left-side">
                                        <div class="header-image freelancer-avatar"><img src="<?=base_url('resources/shared/images/'.$profileInfo[0]->ProfilePic) ?>" alt=""></div>
                                        <div class="header-details">
                                            <h3><?=$profileInfo[0]->UserName ?></h3>
                                            <ul>
                                                <li><img class="flag" src="images/flags/de.svg" alt=""><?=$profileInfo[0]->CityName ?>,<?=$profileInfo[0]->StateName ?></li>
                                                <li><div class="verified-badge-with-title">Verified</div></li>
                                                <li><div class="star-rating" data-rating="5.0"></div></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Page Content
                ================================================== -->
                <div class="container">
                    <div class="row">
                        
                        <!-- Content -->
                        <div class="col-xl-8 col-lg-8 content-right-offset">
                            
                            <!-- Page Content -->
                            <div class="single-page-section">
                                <h3 class="margin-bottom-25">About Me</h3>
                                <table width="40%">
                                    <tr>
                                        <td><b>Contact </b></td>
                                        <td>
                                            <?=$profileInfo[0]->ContactNumber ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Email </b></td>
                                        <td>
                                            <?=$profileInfo[0]->EmailID ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Website </b></td>
                                        <td>
                                            <?=$profileInfo[0]->Website ?>
                                        </td>
                                    </tr>

                                </table>
                            </div>

                            <!-- Boxed List -->

                            
                            
                            <div class="boxed-list margin-bottom-60">
                                <div class="boxed-list-headline">
                                    <h3><i class="icon-material-outline-thumb-up"></i> Reviews and Feedback</h3>
                                </div>
                                <ul class="boxed-list-ul">
                                    <?php
                                        foreach($reviews as $r)
                                        {
                                    ?>

                                    <li>
                                        <div class="boxed-list-item">
                                            <!-- Content -->
                                            <div class="item-content">
                                                <h4><?=$r->UserName?> <span>Rated as Freelancer</span></h4>
                                                <div class="item-details margin-top-10">
                                                    <div class="star-rating" data-rating="<?=$r->Rating?>"></div>
                                                    <div class="detail-item"><i class="icon-material-outline-date-range"></i> <?=$r->CreatedDateTime?></div>
                                                </div>
                                                <div class="item-description">
                                                    <p><?=$r->Review?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php
                                    }
                                    if(count($reviews)==0)
                                    {
                                    ?>
                                    No Reviews
                                    <?php
                                    }
                                    ?>
                                </ul>

                                <!-- Pagination -->
                                
                                <div class="clearfix"></div>
                                <!-- Pagination / End -->

                            </div>


                            <!-- Boxed List / End -->
                            
                           

                        </div>
                        

                        <!-- Sidebar -->
                        <?php
                                if(count($myRevi)==0 and $_SESSION['utype']=='user')
                                {
                            ?>
                        <div class="col-xl-4 col-lg-4">
                            <div class="sidebar-container">
                                <form method="post" action="<?=site_url('user/userc/postreview/'.$profileInfo[0]->EventManagerID)?>">
                                    <div class="form row">
                                        <div class="form-group col-md-12">
                                            <label>Ratings</label>
                                            <select class="form-control" name="ratings" required>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group col-md-12">
                                            <label>Review</label>
                                            <textarea class="form-control" name="review" required></textarea>
                                        </div>
                                    </div>
                                    
                                    <button  type="submit" class="col-md-12" style="background-color: #4267B2;color:white;padding:10px;border-radius: 5px;">Post A Review<i class="icon-material-outline-arrow-right-alt"></i></button>

                                </form>
                                
                            </div>
                        </div>
                        <?php
                                }
                            ?>

                         <?php
                                if(count($mycomplaints)==0 and $_SESSION['utype']=='user')
                                {
                            ?>
                        <div class="col-xl-4 col-lg-4">
                            <div class="sidebar-container">
                                 <div class="boxed-list-headline">
                                    <h3>Post A Complaint</h3>
                                </div>
                                <form method="post" action="<?=site_url('user/userc/postcomplaint/'.$profileInfo[0]->EventManagerID)?>">
                                    <div class="form row">
                                        
                                        <div class="form-group col-md-12">
                                            <br><br>
                                            <label>Complaint</label>
                                            <textarea class="form-control" name="complaint" required></textarea>
                                        </div>
                                    </div>
                                    
                                    <button  type="submit" class="col-md-12" style="background-color: #4267B2;color:white;padding:10px;border-radius: 5px;">Post A Complaint<i class="icon-material-outline-arrow-right-alt"></i></button>

                                </form>
                                
                            </div>
                        </div>
                        <?php
                            }
                            else if($_SESSION['utype']=='user')
                            {
                        ?>
                            <div class="col-xl-4 col-lg-4">
                            <div class="sidebar-container">
                                 <div class="boxed-list-headline">
                                    <h3><u>Your Complaint</u></h3>
                                </div>
                                <div class="form row">
                                    
                                    <div class="form-group col-md-12">
                                        
                                        <label class="boxed-list-headline" style="color: red;">
                                            <?=$mycomplaints[0]->Reason ?>
                                        </label>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <?php
                                }
                            ?>
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