<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Evently</title>

        <?php include_once("topScripts3.php")?>       

    </head>
    <body>    

        <div class="loader-bg">
            <div class="loader-bar"></div>
        </div>

        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
                <div class="pcoded-container navbar-wrapper">
                    <nav class="navbar header-navbar pcoded-header">
                        <div class="navbar-wrapper">
                            <div class="navbar-logo">
                                <a href="./index.html">
                                    <img class="img-fluid" src="<?=base_url('resources/admin/')?>/assets/images/logo.png" alt="Theme-Logo" />
                                </a>
                                <a class="mobile-menu" id="mobile-collapse" href="#!">
                                    <i class="feather icon-menu icon-toggle-right"></i>
                                </a>
                                <a class="mobile-options waves-effect waves-light">
                                    <i class="feather icon-more-horizontal"></i>
                                </a>
                            </div>
                            <div class="navbar-container container-fluid">
                                <ul class="nav-left">
                                </ul>
                                <ul class="nav-right">
                                    <li class="user-profile header-notification">
                                        <div class="dropdown-primary dropdown">
                                            <div class="dropdown-toggle" data-toggle="dropdown">
                                                <img src="<?=base_url('resources/admin/')?>/assets/images/IMG_9228.jpeg" class="img-radius" alt="User-Profile-Image">
                                                <span>Roshan Dalwala</span>
                                                <i class="feather icon-chevron-down"></i>
                                            </div>
                                            <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                <li>
                                                    <a href="#!">
                                                        <i class="feather icon-settings"></i> Settings
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="auth-sign-in-social.html">
                                                        <i class="feather icon-log-out"></i> Logout
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>

<div id="sidebar" class="users p-chat-user showChat">
<div class="had-container">
<div class="p-fixed users-main">
<div class="user-box">
<div class="chat-search-box">
<a class="back_friendlist">
<i class="feather icon-x"></i>
</a>
<div class="right-icon-control">
<div class="input-group input-group-button">
<input type="text" id="search-friends" name="footer-email" class="form-control" placeholder="Search Friend">
<div class="input-group-append">
<button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-search"></i></button>
</div>
</div>
</div>
</div>
<div class="main-friend-list">
<div class="media userlist-box waves-effect waves-light" data-id="1" data-status="online" data-username="Josephin Doe">
<a class="media-left" href="#!">
<img class="media-object img-radius img-radius" src="<?=base_url('resources/admin/')?>/assets/images/avatar-3.jpg" alt="Generic placeholder image ">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="chat-header">Josephin Doe</div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="2" data-status="online" data-username="Lary Doe">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="<?=base_url('resources/admin/')?>/assets/images/avatar-2.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Lary Doe</div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="3" data-status="online" data-username="Alice">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="<?=base_url('resources/admin/')?>/assets/images/avatar-4.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Alice</div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="4" data-status="offline" data-username="Alia">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="<?=base_url('resources/admin/')?>/assets/images/avatar-3.jpg" alt="Generic placeholder image">
<div class="live-status bg-default"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Alia<small class="d-block text-muted">10 min ago</small></div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="5" data-status="offline" data-username="Suzen">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="<?=base_url('resources/admin/')?>/assets/images/avatar-2.jpg" alt="Generic placeholder image">
<div class="live-status bg-default"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Suzen<small class="d-block text-muted">15 min ago</small></div>
 </div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="showChat_inner">
<div class="media chat-inner-header">
<a class="back_chatBox">
<i class="feather icon-x"></i> Josephin Doe
</a>
</div>
<div class="main-friend-chat">
<div class="media chat-messages">
<a class="media-left photo-table" href="#!">
<img class="media-object img-radius img-radius m-t-5" src="<?=base_url('resources/admin/')?>/assets/images/avatar-2.jpg" alt="Generic placeholder image">
</a>
<div class="media-body chat-menu-content">
<div class="">
<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
</div>
<p class="chat-time">8:20 a.m.</p>
</div>
</div>
<div class="media chat-messages">
<div class="media-body chat-menu-reply">
<div class="">
<p class="chat-cont">Ohh! very nice</p>
</div>
<p class="chat-time">8:22 a.m.</p>
</div>
</div>
<div class="media chat-messages">
<a class="media-left photo-table" href="#!">
<img class="media-object img-radius img-radius m-t-5" src="<?=base_url('resources/admin/')?>/assets/images/avatar-2.jpg" alt="Generic placeholder image">
</a>
<div class="media-body chat-menu-content">
<div class="">
<p class="chat-cont">can you come with me?</p>
</div>
<p class="chat-time">8:20 a.m.</p>
</div>
</div>
</div>
    <div class="chat-reply-box">
        <div class="right-icon-control">
            <div class="input-group input-group-button">
                <input type="text" class="form-control" placeholder="Write hear . . ">
                    <div class="input-group-append">
                        <button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-message-circle"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <nav class="pcoded-navbar">
                <div class="nav-list">
                    <div class="pcoded-inner-navbar main-menu">
                        <div class="pcoded-navigation-label">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                            </ul>    
                        </div>
                    </div>
                </div>
            </nav>

                <div class="pcoded-content">

                    <div class="page-header card">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <i class="icon feather icon-aperture bg-c-blue"></i>
                                    <div class="d-inline">
                                        <h5>Animation</h5>
                                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class=" breadcrumb breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="#!">Animation</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pcoded-inner-content">

                        <div class="main-body">
                            <div class="page-wrapper">

                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-sm-12">

                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Students Registration Information</h5>
                                                    <div class="card-header-right">
                                                        <ul class="list-unstyled card-option">
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                        
                                                                <div class="container">
                                                                    <div class="row ">
                                                                        <div class="col-lg-4 offset-lg-3 col-md-12">
                                                                            <table border="2" bgcolor="#5AC1EA" class="table table-striped" style="font-family: sans-serif; text-align: center;">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Students Roll Number</th>
                                                                                        <th>Students Name</th>
                                                                                        <th>Students Study</th>
                                                                                        <th>Students Subject</th>
                                                                                        <th>Students Marks</th>
                                                                                    </tr>
                                                                                </thead>

                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td><?=$roll?></td>
                                                                                        <td><?=$name?></td>
                                                                                        <td><?=$std?></td>
                                                                                        <td><?=$sub?></td>
                                                                                        <td><?=$mark?></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>                
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                                    
                                                            <div id="animationSandbox">
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

                        <div id="styleSelector">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <?php include_once("bottomScripts3.php")?>
</body>
</html>
