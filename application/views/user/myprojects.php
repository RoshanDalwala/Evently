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
                <div class="col-xl-12 margin-bottom-100  ">
                    <div class="dashboard-box margin-top-0">

                        <!-- Headline -->
                        <div class="headline">
                            <h3><i class="icon-material-outline-supervisor-account"></i> Total Projects <?= count($projects) ?> </h3>
                            
                        </div>

                        <div class="content">
                            <ul class="dashboard-box-list">
                                <?php
                                    foreach($projects as $p)
                                    {
                                ?>

                                <li>
                                    <!-- Overview -->
                                    <div class="freelancer-overview manage-candidates">
                                        <div class="freelancer-overview-inner">

                                            <!-- Avatar -->
                                            <div class="freelancer-avatar">
                                                <div class="verified-badge"></div>
                                                <a href="#"><img src="<?=base_url('resources/shared/images/'.$p->Image)?>" alt=""></a>
                                            </div>

                                            <!-- Name -->
                                            <div class="freelancer-name">
                                                <h4><a href="#"><?=$p->UserName?> <img class="flag" src="images/flags/de.svg" alt="" title="Germany" data-tippy-placement="top"></a></h4>

                                                <!-- Details -->
                                                <span class="freelancer-detail-item"><a href="#"></i> <?=$p->CategoryName?></a></span>
                                                <br>
                                                <span class="freelancer-detail-item"><a href="#"></i> <?=$p->CityName?></a></span>

                                                <!-- Rating -->
                                                <div class="freelancer-rating">
                                                    <?php
                                                        if($p->status==1)
                                                        {
                                                        ?>
                                                            <span class="btn btn-warning">Pending</span>
                                                        <?php
                                                        }
                                                        else
                                                        {
                                                        ?>
                                                            <span class="btn btn-primary">Completed</span>

                                                        <?php
                                                        }
                                                    ?>
                                                </div>

                                                <!-- Bid Details -->
                                                <ul class="dashboard-task-info bid-info">
                                                    <li><strong><?=$p->AssignedPrice?></strong><span>Project Price</span></li>
                                                </ul>

                                                
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
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