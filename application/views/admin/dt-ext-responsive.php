<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/dt-ext-responsive.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Feb 2023 13:38:47 GMT -->
<head>
<title>Admindek | Admin Template</title>


<!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
<meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
<meta name="author" content="colorlib" />

<link rel="icon" href="<?=base_url('resources/admin/')?>/assets/images/favicon.ico" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?=base_url('resources/admin/')?>/bower_components/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="<?=base_url('resources/admin/')?>/assets/pages/waves/css/waves.min.css" type="text/css" media="all">

<link rel="stylesheet" type="text/css" href="<?=base_url('resources/admin/')?>/assets/icon/feather/css/feather.css">

<link rel="stylesheet" type="text/css" href="<?=base_url('resources/admin/')?>/assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="<?=base_url('resources/admin/')?>/assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="<?=base_url('resources/admin/')?>/assets/icon/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="<?=base_url('resources/admin/')?>/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url('resources/admin/')?>/assets/pages/data-table/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url('resources/admin/')?>/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url('resources/admin/')?>/assets/pages/data-table/extensions/responsive/css/responsive.dataTables.css">

<link rel="stylesheet" type="text/css" href="<?=base_url('resources/admin/')?>/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="<?=base_url('resources/admin/')?>/assets/css/pages.css">
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
<li class="header-search">
<div class="main-search morphsearch-search">
<div class="input-group">
<span class="input-group-prepend search-close">
<i class="feather icon-x input-group-text"></i>
</span>
<input type="text" class="form-control" placeholder="Enter Keyword">
<span class="input-group-append search-btn">
<i class="feather icon-search input-group-text"></i>
</span>
</div>
</div>
</li>
<li>
<a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
<i class="full-screen feather icon-maximize"></i>
</a>
</li>
</ul>
<ul class="nav-right">
<li class="header-notification">
<div class="dropdown-primary dropdown">
<div class="dropdown-toggle" data-toggle="dropdown">
<i class="feather icon-bell"></i>
<span class="badge bg-c-red">5</span>
</div>
<ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<li>
<h6>Notifications</h6>
<label class="label label-danger">New</label>
</li>
<li>
<div class="media">
<img class="img-radius" src="<?=base_url('resources/admin/')?>/assets/images/avatar-4.jpg" alt="Generic placeholder image">
<div class="media-body">
<h5 class="notification-user">John Doe</h5>
<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
<span class="notification-time">30 minutes ago</span>
</div>
</div>
</li>
<li>
<div class="media">
<img class="img-radius" src="<?=base_url('resources/admin/')?>/assets/images/avatar-3.jpg" alt="Generic placeholder image">
<div class="media-body">
<h5 class="notification-user">Joseph William</h5>
<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
<span class="notification-time">30 minutes ago</span>
</div>
</div>
</li>
<li>
<div class="media">
<img class="img-radius" src="<?=base_url('resources/admin/')?>/assets/images/avatar-4.jpg" alt="Generic placeholder image">
<div class="media-body">
<h5 class="notification-user">Sara Soudein</h5>
<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
<span class="notification-time">30 minutes ago</span>
</div>
</div>
</li>
</ul>
</div>
</li>
<li class="header-notification">
<div class="dropdown-primary dropdown">
<div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
<i class="feather icon-message-square"></i>
<span class="badge bg-c-green">3</span>
</div>
</div>
</li>
<li class="user-profile header-notification">
<div class="dropdown-primary dropdown">
<div class="dropdown-toggle" data-toggle="dropdown">
<img src="<?=base_url('resources/admin/')?>/assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
<span>John Doe</span>
<i class="feather icon-chevron-down"></i>
</div>
<ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<li>
<a href="#!">
<i class="feather icon-settings"></i> Settings
</a>
</li>
<li>
<a href="#">
<i class="feather icon-user"></i> Profile
</a>
</li>
<li>
<a href="email-inbox.html">
<i class="feather icon-mail"></i> My Messages
</a>
</li>
<li>
<a href="auth-lock-screen.html">
<i class="feather icon-lock"></i> Lock Screen
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
<span class="pcoded-mtext">Dashboard</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="./index.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Default</span>
</a>
</li>
<li class="">
<a href="dashboard-crm.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">CRM</span>
</a>
</li>
<li class="">
<a href="dashboard-analytics.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Analytics</span>
<span class="pcoded-badge label label-info ">NEW</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
<span class="pcoded-mtext">Page layouts</span>
<span class="pcoded-badge label label-warning">NEW</span>
</a>
<ul class="pcoded-submenu">
<li class=" pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Vertical</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="menu-static.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Static Layout</span>
</a>
</li>
<li class="">
<a href="menu-header-fixed.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Header Fixed</span>
</a>
</li>
<li class="">
<a href="menu-compact.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Compact</span>
 </a>
</li>
<li class="">
<a href="menu-sidebar.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Sidebar Fixed</span>
</a>
</li>
</ul>
</li>
<li class=" pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Horizontal</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="menu-horizontal-static.html" target="_blank" class="waves-effect waves-dark">
<span class="pcoded-mtext">Static Layout</span>
</a>
</li>
<li class="">
<a href="menu-horizontal-fixed.html" target="_blank" class="waves-effect waves-dark">
<span class="pcoded-mtext">Fixed layout</span>
</a>
</li>
<li class="">
<a href="menu-horizontal-icon.html" target="_blank" class="waves-effect waves-dark">
<span class="pcoded-mtext">Static With Icon</span>
</a>
</li>
<li class="">
<a href="menu-horizontal-icon-fixed.html" target="_blank" class="waves-effect waves-dark">
<span class="pcoded-mtext">Fixed With Icon</span>
</a>
</li>
</ul>
</li>
<li class="">
<a href="menu-bottom.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Bottom Menu</span>
</a>
</li>
</ul>
</li>
<li class="">
<a href="navbar-light.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-menu"></i>
</span>
<span class="pcoded-mtext">Navigation</span>
</a>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-layers"></i>
</span>
<span class="pcoded-mtext">Widget</span>
<span class="pcoded-badge label label-danger">100+</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="widget-statistic.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Statistic</span>
</a>
</li>
<li class="">
<a href="widget-data.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Data</span>
</a>
</li>
<li class="">
<a href="widget-chart.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Chart Widget</span>
</a>
</li>
</ul>
</li>
</ul>
<div class="pcoded-navigation-label">UI Element</div>
<ul class="pcoded-item pcoded-left-item">
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-box"></i>
</span>
<span class="pcoded-mtext">Basic</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="alert.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Alert</span>
</a>
</li>
<li class="">
<a href="breadcrumb.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Breadcrumbs</span>
</a>
</li>
<li class="">
<a href="button.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Button</span>
</a>
</li>
<li class="">
<a href="box-shadow.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Box-Shadow</span>
</a>
</li>
<li class="">
<a href="accordion.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Accordion</span>
</a>
</li>
<li class="">
<a href="generic-class.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Generic Class</span>
</a>
</li>
<li class=" ">
<a href="tabs.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Tabs</span>
</a>
</li>
<li class=" ">
<a href="color.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Color</span>
</a>
</li>
<li class=" ">
<a href="label-badge.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Label Badge</span>
</a>
</li>
<li class=" ">
<a href="progress-bar.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Progress Bar</span>
</a>
</li>
<li class=" ">
<a href="list.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">List</span>
</a>
</li>
<li class=" ">
<a href="tooltip.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Tooltip And Popover</span>
</a>
</li>
<li class=" ">
<a href="typography.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Typography</span>
</a>
</li>
<li class=" ">
<a href="other.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Other</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-gitlab"></i>
</span>
<span class="pcoded-mtext">Advance</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="draggable.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Draggable</span>
</a>
</li>
</li>
<li class=" ">
<a href="modal.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Modal</span>
</a>
</li>
<li class=" ">
<a href="notification.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Notifications</span>
</a>
</li>
<li class=" ">
<a href="rating.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Rating</span>
</a>
</li>
<li class=" ">
<a href="range-slider.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Range Slider</span>
</a>
</li>
<li class=" ">
<a href="slider.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Slider</span>
</a>
</li>
<li class=" ">
<a href="syntax-highlighter.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Syntax Highlighter</span>
</a>
</li>
<li class=" ">
<a href="tour.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Tour</span>
</a>
</li>
<li class=" ">
<a href="treeview.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Tree View</span>
</a>
</li>
<li class=" ">
<a href="nestable.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Nestable</span>
</a>
</li>
<li class=" ">
<a href="toolbar.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Toolbar</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-package"></i>
</span>
<span class="pcoded-mtext">Extra</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="session-timeout.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Session Timeout</span>
</a>
</li>
<li class=" ">
<a href="session-idle-timeout.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Session Idle Timeout</span>
</a>
</li>
<li class=" ">
<a href="offline.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Offline</span>
</a>
</li>
</ul>
</li>
<li class=" ">
<a href="animation.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-aperture rotate-refresh"></i>
</span>
<span class="pcoded-mtext">Animations</span>
</a>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-command"></i>
</span>
<span class="pcoded-mtext">Icons</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="icon-font-awesome.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Font Awesome</span>
</a>
</li>
<li class=" ">
<a href="icon-themify.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Themify</span>
</a>
</li>
<li class=" ">
<a href="icon-simple-line.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Simple Line Icon</span>
</a>
</li>
</ul>
</li>
</ul>
<div class="pcoded-navigation-label">Forms</div>
<ul class="pcoded-item pcoded-left-item">
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
<span class="pcoded-mtext">Form</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="form-elements-component.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Components</span>
</a>
</li>
<li class=" ">
<a href="form-elements-add-on.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Add-On</span>
</a>
</li>
<li class=" ">
<a href="form-elements-advance.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Advance</span>
</a>
</li>
<li class=" ">
<a href="form-validation.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Validation</span>
</a>
</li>
</ul>
</li>
<li class=" ">
<a href="form-picker.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-edit-1"></i>
</span>
<span class="pcoded-mtext">Form Picker</span>
<span class="pcoded-badge label label-warning">NEW</span>
</a>
</li>
<li class=" ">
<a href="form-select.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-feather"></i>
</span>
<span class="pcoded-mtext">Form Select</span>
</a>
</li>
<li class=" ">
<a href="form-masking.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-shield"></i>
</span>
<span class="pcoded-mtext">Form Masking</span>
</a>
</li>
<li class=" ">
<a href="form-wizard.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-tv"></i>
</span>
<span class="pcoded-mtext">Form Wizard</span>
</a>
</li>
</ul>
<div class="pcoded-navigation-label">Tables</div>
<ul class="pcoded-item pcoded-left-item">
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-credit-card"></i>
</span>
<span class="pcoded-mtext">Bootstrap Table</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="bs-basic-table.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Basic Table</span>
</a>
</li>
<li class=" ">
<a href="bs-table-sizing.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Sizing Table</span>
</a>
</li>
<li class=" ">
<a href="bs-table-border.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Border Table</span>
</a>
</li>
<li class=" ">
<a href="bs-table-styling.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Styling Table</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-inbox"></i>
</span>
<span class="pcoded-mtext">Data Table</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="dt-basic.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Basic Initialization</span>
</a>
</li>
<li class=" ">
<a href="dt-advance.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Advance Initialization</span>
</a>
</li>
<li class=" ">
<a href="dt-styling.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Styling</span>
</a>
</li>
<li class=" ">
<a href="dt-api.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">API</span>
</a>
</li>
<li class=" ">
<a href="dt-ajax.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Ajax</span>
</a>
</li>
<li class=" ">
<a href="dt-server-side.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Server Side</span>
</a>
</li>
<li class=" ">
<a href="dt-plugin.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Plug-In</span>
</a>
</li>
<li class=" ">
<a href="dt-data-sources.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Data Sources</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu active pcoded-trigger">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-server"></i>
</span>
<span class="pcoded-mtext">DT Extensions</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="dt-ext-autofill.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">AutoFill</span>
</a>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Button</span>
 </a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="dt-ext-basic-buttons.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Basic Button</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-buttons-html-5-data-export.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Data Export</span>
</a>
</li>
</ul>
</li>
<li class=" ">
<a href="dt-ext-col-reorder.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Col Reorder</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-fixed-columns.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Fixed Columns</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-fixed-header.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Fixed Header</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-key-table.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Key Table</span>
</a>
</li>
<li class="active">
<a href="dt-ext-responsive.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Responsive</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-row-reorder.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Row Reorder</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-scroller.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Scroller</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-select.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Select Table</span>
</a>
 </li>
</ul>
</li>
<li class=" ">
<a href="foo-table.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-hash"></i>
</span>
<span class="pcoded-mtext">FooTable</span>
</a>
</li>
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-airplay"></i>
</span>
<span class="pcoded-mtext">Handson Table</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="handson-appearance.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Appearance</span>
</a>
</li>
<li class="">
<a href="handson-data-operation.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Data Operation</span>
</a>
</li>
<li class="">
<a href="handson-rows-cols.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Rows Columns</span>
</a>
</li>
<li class="">
<a href="handson-columns-only.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Columns Only</span>
</a>
</li>
<li class="">
<a href="handson-cell-features.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Cell Features</span>
</a>
</li>
<li class="">
<a href="handson-cell-types.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Cell Types</span>
</a>
</li>
<li class="">
<a href="handson-integrations.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Integrations</span>
</a>
</li>
<li class="">
<a href="handson-rows-only.html" class="waves-effect waves-dark">
 <span class="pcoded-mtext">Rows Only</span>
</a>
</li>
<li class="">
<a href="handson-utilities.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Utilities</span>
</a>
</li>
</ul>
</li>
<li class="">
<a href="editable-table.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-edit"></i>
</span>
<span class="pcoded-mtext">Editable Table</span>
</a>
</li>
</ul>
<div class="pcoded-navigation-label">Chart And Maps</div>
<ul class="pcoded-item pcoded-left-item">
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-pie-chart"></i>
</span>
<span class="pcoded-mtext">Charts</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="chart-google.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Google Chart</span>
</a>
</li>
<li class="">
<a href="chart-chartjs.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">ChartJs</span>
</a>
</li>
<li class="">
<a href="chart-list.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">List Chart</span>
</a>
</li>
<li class="">
<a href="chart-float.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Float Chart</span>
</a>
</li>
<li class="">
<a href="chart-knob.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Knob chart</span>
</a>
</li>
<li class="">
<a href="chart-morris.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Morris Chart</span>
</a>
</li>
<li class="">
<a href="chart-nvd3.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Nvd3 Chart</span>
</a>
</li>
<li class="">
<a href="chart-peity.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Peity Chart</span>
</a>
</li>
<li class="">
<a href="chart-radial.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Radial Chart</span>
</a>
</li>
<li class="">
<a href="chart-rickshaw.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Rickshaw Chart</span>
</a>
</li>
<li class="">
<a href="chart-sparkline.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Sparkline Chart</span>
</a>
</li>
<li class="">
<a href="chart-c3.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">C3 Chart</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-map"></i>
</span>
<span class="pcoded-mtext">Maps</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="map-google.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Google Maps</span>
</a>
</li>
<li class="">
<a href="map-vector.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Vector Maps</span>
</a>
</li>
<li class="">
<a href="map-api.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Google Map Search API</span>
</a>
 </li>
<li class="">
<a href="location.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Location</span>
</a>
</li>
</ul>
</li>
</ul>
<div class="pcoded-navigation-label">Pages</div>
<ul class="pcoded-item pcoded-left-item">
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-unlock"></i>
</span>
<span class="pcoded-mtext">Authentication</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="auth-sign-in-social.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Login</span>
</a>
</li>
<li class="">
<a href="auth-sign-up-social.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Registration</span>
</a>
</li>
<li class="">
<a href="auth-reset-password.html" target="_blank" class="waves-effect waves-dark">
<span class="pcoded-mtext">Forgot Password</span>
</a>
</li>
<li class="">
<a href="auth-lock-screen.html" target="_blank" class="waves-effect waves-dark">
<span class="pcoded-mtext">Lock Screen</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-sliders"></i>
</span>
<span class="pcoded-mtext">Maintenance</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="error.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Error</span>
</a>
</li>
<li class="">
<a href="comming-soon.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Comming Soon</span>
</a>
</li>
<li class="">
<a href="offline-ui.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Offline UI</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-mail"></i>
</span>
<span class="pcoded-mtext">Email</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="email-compose.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Compose Email</span>
</a>
</li>
<li class="">
<a href="email-inbox.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Inbox</span>
</a>
</li>
<li class="">
<a href="email-read.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Read Mail</span>
</a>
</li>
</ul>
</li>
</ul>
<div class="pcoded-navigation-label">App</div>
<ul class="pcoded-item pcoded-left-item">
<a href="todo.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-bookmark"></i>
</span>
<span class="pcoded-mtext">To-Do</span>
</a>
</li>
</ul>
<div class="pcoded-navigation-label">Extension</div>
<ul class="pcoded-item pcoded-left-item">
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-file-plus"></i>
</span>
<span class="pcoded-mtext">Editor</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="ck-editor.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">CK-Editor</span>
</a>
 </li>
<li class="">
<a href="wysiwyg-editor.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">WYSIWYG Editor</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-calendar"></i>
</span>
<span class="pcoded-mtext">Event Calendar</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="event-full-calender.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Full Calendar</span>
</a>
</li>
<li class="">
<a href="event-clndr.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">CLNDER</span>
<span class="pcoded-badge label label-info">NEW</span>
</a>
</li>
</ul>
</li>
<li class="">
<a href="image-crop.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-scissors"></i>
<b>IC</b>
</span>
<span class="pcoded-mtext">Image Cropper</span>
</a>
</li>
<li class="">
<a href="file-upload.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-upload-cloud"></i>
</span>
<span class="pcoded-mtext">File Upload</span>
</a>
</li>
<li class="">
<a href="change-loges.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-briefcase"></i>
</span>
<span class="pcoded-mtext">Change Loges</span>
<span class="pcoded-badge label label-warning">1.0</span>
</a>
</li>
</ul>
<div class="pcoded-navigation-label">Other</div>
<ul class="pcoded-item pcoded-left-item">
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-list"></i>
</span>
<span class="pcoded-mtext">Menu Levels</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Menu Level 2.1</span>
</a>
</li>
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Menu Level 2.2</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Menu Level 3.1</span>
</a>
</li>
</ul>
</li>
<li class="">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Menu Level 2.3</span>
</a>
</li>
</ul>
</li>
<li class="">
<a href="javascript:void(0)" class="disabled waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-power"></i>
<b>D</b>
</span>
<span class="pcoded-mtext">Disabled Menu</span>
</a>
</li>
<li class="">
<a href="sample-page.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-watch"></i>
</span>
<span class="pcoded-mtext">Sample Page</span>
</a>
</li>
</ul>
</div>
</div>
</nav>

<div class="pcoded-content">

<div class="page-header card">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<i class="feather icon-server bg-c-blue"></i>
<div class="d-inline">
<h5>Responsive DataTable</h5>
<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class=" breadcrumb breadcrumb-title">
<li class="breadcrumb-item">
<a href="./index.html"><i class="feather icon-home"></i></a>
</li>
<li class="breadcrumb-item"><a href="#!">Data Table</a>
</li>
<li class="breadcrumb-item"><a href="#!">Responsive Initialization</a>
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

<div class="card">
<div class="card-header">
<h5>Configuration Option</h5>
<span>The Responsive extension for DataTables can be applied to a DataTable in one of two ways; with a specific class name on the table, or using the DataTables initialisation options. This method shows the latter, with the responsive option being set to the boolean value true.</span>
</div>
<div class="card-block">
<table id="res-config" class="table display">
<thead>
<tr>
<th>First name</th>
<th>Last name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
<th>Extn.</th>
<th>E-mail</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tiger</td>
<td>Nixon</td>
<td>System Architect</td>
<td>Edinburgh</td>
<td>61</td>
<td>2011/04/25</td>
 <td>$320,800</td>
<td>5421</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="14603a7a7d6c7b7a54707560756075767871673a7a7160">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Garrett</td>
<td>Winters</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>63</td>
<td>2011/07/25</td>
<td>$170,750</td>
<td>8422</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ec8bc29b858298899e9fac888d988d988d8e80899fc2828998">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Ashton</td>
<td>Cox</td>
<td>Junior Technical Author</td>
<td>San Francisco</td>
<td>66</td>
<td>2009/01/12</td>
<td>$86,000</td>
<td>1562</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5c3d723f33241c383d283d283d3e30392f72323928">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Cedric</td>
<td>Kelly</td>
<td>Senior Javascript Developer</td>
<td>Edinburgh</td>
<td>22</td>
<td>2012/03/29</td>
<td>$433,060</td>
<td>6224</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f093de9b959c9c89b0949184918491929c9583de9e9584">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Airi</td>
<td>Satou</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>33</td>
<td>2008/11/28</td>
<td>$162,700</td>
<td>5407</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d3b2fda0b2a7bca693b7b2a7b2a7b2b1bfb6a0fdbdb6a7">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Brielle</td>
<td>Williamson</td>
<td>Integration Specialist</td>
<td>New York</td>
 <td>61</td>
<td>2012/12/02</td>
<td>$372,000</td>
<td>4804</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fd9fd38a949191949c908e9293bd999c899c899c9f91988ed3939889">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Herrod</td>
<td>Chandler</td>
<td>Sales Assistant</td>
<td>San Francisco</td>
<td>59</td>
<td>2012/08/06</td>
<td>$137,500</td>
<td>9608</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ec84c28f848d828880899eac888d988d988d8e80899fc2828998">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Rhona</td>
<td>Davidson</td>
<td>Integration Specialist</td>
<td>Tokyo</td>
<td>55</td>
<td>2010/10/14</td>
<td>$327,900</td>
<td>6200</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="44366a2025322d20372b2a04202530253025262821376a2a2130">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Colleen</td>
<td>Hurst</td>
<td>Javascript Developer</td>
<td>San Francisco</td>
<td>39</td>
<td>2009/09/15</td>
<td>$205,500</td>
<td>2360</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bdde93d5c8cfcec9fdd9dcc9dcc9dcdfd1d8ce93d3d8c9">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Sonya</td>
<td>Frost</td>
<td>Software Engineer</td>
<td>Edinburgh</td>
<td>23</td>
<td>2008/12/13</td>
<td>$103,600</td>
<td>1667</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="760558100419050236121702170217141a130558181302">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jena</td>
<td>Gaines</td>
 <td>Office Manager</td>
<td>London</td>
<td>30</td>
<td>2008/12/19</td>
<td>$90,560</td>
<td>3814</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7913571e1810171c0a391d180d180d181b151c0a57171c0d">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Quinn</td>
<td>Flynn</td>
<td>Support Lead</td>
<td>Edinburgh</td>
<td>22</td>
<td>2013/03/03</td>
<td>$342,000</td>
<td>9497</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="04752a62687d6a6a44606570657065666861772a6a6170">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Charde</td>
<td>Marshall</td>
<td>Regional Director</td>
<td>San Francisco</td>
<td>36</td>
<td>2008/10/16</td>
<td>$470,600</td>
<td>6741</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="284b0645495a5b40494444684c495c495c494a444d5b06464d5c">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Haley</td>
<td>Kennedy</td>
<td>Senior Marketing Designer</td>
<td>London</td>
<td>43</td>
<td>2012/12/18</td>
<td>$313,500</td>
<td>3597</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="30581e5b555e5e55544970545144514451525c55431e5e5544">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Tatyana</td>
<td>Fitzpatrick</td>
<td>Regional Director</td>
<td>London</td>
<td>19</td>
<td>2010/03/17</td>
<td>$385,750</td>
<td>1965</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4f3b6129263b353f2e3b3d262c240f2b2e3b2e3b2e2d232a3c61212a3b">[email&#160;protected]</a></td>
</tr>
<tr>
 <td>Michael</td>
<td>Silva</td>
<td>Marketing Designer</td>
<td>London</td>
<td>66</td>
<td>2012/11/27</td>
<td>$198,500</td>
<td>1581</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9df0b3eef4f1ebfcddf9fce9fce9fcfff1f8eeb3f3f8e9">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Paul</td>
<td>Byrd</td>
<td>Chief Financial Officer (CFO)</td>
<td>New York</td>
<td>64</td>
<td>2010/06/09</td>
<td>$725,000</td>
<td>3059</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a7d789c5ded5c3e7c3c6d3c6d3c6c5cbc2d489c9c2d3">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gloria</td>
<td>Little</td>
<td>Systems Administrator</td>
<td>New York</td>
<td>59</td>
<td>2009/04/10</td>
<td>$237,500</td>
<td>1721</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="adca83c1c4d9d9c1c8edc9ccd9ccd9cccfc1c8de83c3c8d9">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Bradley</td>
<td>Greer</td>
<td>Software Engineer</td>
<td>London</td>
<td>41</td>
<td>2012/10/13</td>
<td>$132,000</td>
<td>2558</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="462468213423233406222732273227242a233568282332">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Dai</td>
<td>Rios</td>
<td>Personnel Lead</td>
<td>Edinburgh</td>
<td>35</td>
<td>2012/09/26</td>
<td>$217,500</td>
<td>2290</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="acc882dec5c3dfecc8cdd8cdd8cdcec0c9df82c2c9d8">[email&#160;protected]</a></td>
 </tr>
<tr>
<td>Jenette</td>
<td>Caldwell</td>
<td>Development Lead</td>
<td>New York</td>
<td>30</td>
<td>2011/09/03</td>
<td>$345,000</td>
<td>1937</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3953175a58555d4e5c5555795d584d584d585b555c4a17575c4d">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Yuri</td>
<td>Berry</td>
<td>Chief Marketing Officer (CMO)</td>
<td>New York</td>
<td>40</td>
<td>2009/06/25</td>
<td>$675,000</td>
<td>6154</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="10693e727562626950747164716471727c75633e7e7564">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Caesar</td>
<td>Vance</td>
<td>Pre-Sales Support</td>
<td>New York</td>
<td>21</td>
<td>2011/12/12</td>
<td>$106,450</td>
<td>8330</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="395a174f58575a5c795d584d584d585b555c4a17575c4d">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Doris</td>
<td>Wilder</td>
<td>Sales Assistant</td>
<td>Sidney</td>
<td>23</td>
<td>2010/09/20</td>
<td>$85,600</td>
<td>3023</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e185cf96888d858493a1858095809580838d8492cf8f8495">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Angelica</td>
<td>Ramos</td>
<td>Chief Executive Officer (CEO)</td>
<td>London</td>
<td>47</td>
<td>2009/10/09</td>
<td>$1,200,000</td>
 <td>5797</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5839762a3935372b183c392c392c393a343d2b76363d2c">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gavin</td>
<td>Joyce</td>
<td>Developer</td>
<td>Edinburgh</td>
<td>42</td>
<td>2010/12/22</td>
<td>$92,575</td>
<td>8822</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d6b1f8bcb9afb5b396b2b7a2b7a2b7b4bab3a5f8b8b3a2">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jennifer</td>
<td>Chang</td>
<td>Regional Director</td>
<td>Singapore</td>
<td>28</td>
<td>2010/11/14</td>
<td>$357,650</td>
<td>9239</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="650f4b060d040b0225010411041104070900164b0b0011">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Brenden</td>
<td>Wagner</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>28</td>
<td>2011/06/07</td>
<td>$206,850</td>
<td>1314</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5f3d71283e38313a2d1f3b3e2b3e2b3e3d333a2c71313a2b">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Fiona</td>
<td>Green</td>
<td>Chief Operating Officer (COO)</td>
<td>San Francisco</td>
<td>48</td>
<td>2010/03/11</td>
<td>$850,000</td>
<td>2947</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="771159100512121937131603160316151b120459191203">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Shou</td>
<td>Itou</td>
<td>Regional Marketing</td>
<td>Tokyo</td>
<td>20</td>
 <td>2011/08/14</td>
<td>$163,000</td>
<td>8899</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e093ce89948f95a0848194819481828c8593ce8e8594">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michelle</td>
<td>House</td>
<td>Integration Specialist</td>
<td>Sidney</td>
<td>37</td>
<td>2011/06/02</td>
<td>$95,400</td>
<td>2769</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cea3e0a6a1bbbdab8eaaafbaafbaafaca2abbde0a0abba">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Suki</td>
<td>Burks</td>
<td>Developer</td>
<td>London</td>
<td>53</td>
<td>2009/10/22</td>
<td>$114,500</td>
<td>6832</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8cffa2eef9fee7ffcce8edf8edf8edeee0e9ffa2e2e9f8">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Prescott</td>
<td>Bartlett</td>
<td>Technical Author</td>
<td>London</td>
<td>27</td>
<td>2011/05/07</td>
<td>$145,000</td>
<td>3606</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ccbce2aeadbeb8a0a9b8b88ca8adb8adb8adaea0a9bfe2a2a9b8">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gavin</td>
<td>Cortez</td>
<td>Team Leader</td>
<td>San Francisco</td>
<td>22</td>
<td>2008/10/26</td>
<td>$235,500</td>
<td>2860</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2a4d044945585e4f506a4e4b5e4b5e4b48464f5904444f5e">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Martena</td>
<td>Mccray</td>
<td>Post-Sales support</td>
<td>Edinburgh</td>
<td>46</td>
<td>2011/03/09</td>
<td>$324,050</td>
<td>8240</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7c1152111f1f0e1d053c181d081d081d1e10190f52121908">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Unity</td>
<td>Butler</td>
<td>Marketing Designer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/12/09</td>
<td>$85,675</td>
<td>5384</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9feab1fdeaebf3faeddffbfeebfeebfefdf3faecb1f1faeb">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Howard</td>
<td>Hatfield</td>
<td>Office Manager</td>
<td>San Francisco</td>
<td>51</td>
<td>2008/12/16</td>
<td>$164,500</td>
<td>7031</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="274f094f4653414e424b4367434653465346454b425409494253">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Hope</td>
<td>Fuentes</td>
<td>Secretary</td>
<td>San Francisco</td>
<td>41</td>
<td>2010/02/12</td>
<td>$109,850</td>
<td>6318</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6800460e1d0d061c0d1b280c091c091c090a040d1b46060d1c">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Vivian</td>
<td>Harrell</td>
<td>Financial Controller</td>
<td>San Francisco</td>
<td>62</td>
<td>2009/02/14</td>
<td>$452,500</td>
<td>9422</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e395cd8b829191868f8fa3878297829782818f8690cd8d8697">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Timothy</td>
<td>Mooney</td>
<td>Office Manager</td>
<td>London</td>
<td>37</td>
<td>2008/12/11</td>
<td>$136,200</td>
<td>7580</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e490ca898b8b8a819da480859085908586888197ca8a8190">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jackson</td>
<td>Bradshaw</td>
<td>Director</td>
<td>New York</td>
<td>65</td>
<td>2008/09/26</td>
<td>$645,750</td>
<td>1042</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="deb4f0bcacbfbaadb6bfa99ebabfaabfaabfbcb2bbadf0b0bbaa">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Olivia</td>
<td>Liang</td>
<td>Support Engineer</td>
<td>Singapore</td>
<td>64</td>
<td>2011/02/03</td>
<td>$234,500</td>
<td>2120</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5c337230353d323b1c383d283d283d3e30392f72323928">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Bruno</td>
<td>Nash</td>
<td>Software Engineer</td>
<td>London</td>
<td>38</td>
<td>2011/05/03</td>
<td>$163,500</td>
<td>6222</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e98bc787889a81a98d889d889d888b858c9ac7878c9d">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Sakura</td>
<td>Yamamoto</td>
<td>Support Engineer</td>
<td>Tokyo</td>
<td>37</td>
<td>2009/08/19</td>
<td>$139,575</td>
<td>9383</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0675287f676b676b69726946626772677267646a637528686372">[email&#160;protected]</a></td>
</tr>
<tr>
 <td>Thor</td>
<td>Walton</td>
<td>Developer</td>
<td>New York</td>
<td>61</td>
<td>2013/08/11</td>
<td>$98,540</td>
<td>8327</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8df9a3faece1f9e2e3cde9ecf9ecf9ecefe1e8fea3e3e8f9">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Finn</td>
<td>Camacho</td>
<td>Support Engineer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/07/07</td>
<td>$87,500</td>
<td>2927</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="385e165b5955595b5057785c594c594c595a545d4b16565d4c">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Serge</td>
<td>Baldwin</td>
<td>Data Coordinator</td>
<td>Singapore</td>
<td>64</td>
<td>2012/04/09</td>
<td>$138,575</td>
<td>8352</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a4d78ac6c5c8c0d3cdcae4c0c5d0c5d0c5c6c8c1d78acac1d0">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Zenaida</td>
<td>Frank</td>
<td>Software Engineer</td>
<td>New York</td>
<td>63</td>
<td>2010/01/04</td>
<td>$125,250</td>
<td>7439</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="344e1a5246555a5f74505540554055565851471a5a5140">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Zorita</td>
<td>Serrano</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>56</td>
<td>2012/06/01</td>
<td>$115,000</td>
<td>4389</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e69cc895839494878889a6828792879287848a8395c8888392">[email&#160;protected]</a></td>
 </tr>
<tr>
<td>Jennifer</td>
<td>Acosta</td>
<td>Junior Javascript Developer</td>
<td>Edinburgh</td>
<td>43</td>
<td>2013/02/01</td>
<td>$75,650</td>
<td>3431</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ea80c48b8985999e8baa8e8b9e8b9e8b88868f99c4848f9e">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Cara</td>
<td>Stevens</td>
<td>Sales Assistant</td>
<td>New York</td>
<td>46</td>
<td>2011/12/06</td>
<td>$145,600</td>
<td>3990</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e182cf92958497848f92a1858095809580838d8492cf8f8495">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Hermione</td>
<td>Butler</td>
<td>Regional Director</td>
<td>London</td>
<td>47</td>
<td>2011/03/21</td>
<td>$356,250</td>
<td>1016</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1f77317d6a6b737a6d5f7b7e6b7e6b7e7d737a6c31717a6b">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Lael</td>
<td>Greer</td>
<td>Systems Administrator</td>
<td>London</td>
<td>21</td>
<td>2009/02/27</td>
<td>$103,500</td>
<td>6733</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fa96d49d889f9f88ba9e9b8e9b8e9b98969f89d4949f8e">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jonas</td>
<td>Alexander</td>
<td>Developer</td>
<td>San Francisco</td>
<td>30</td>
<td>2010/07/14</td>
<td>$86,500</td>
 <td>8196</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1a70347b767f627b747e7f685a7e7b6e7b6e7b78767f6934747f6e">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Shad</td>
<td>Decker</td>
<td>Regional Director</td>
<td>Edinburgh</td>
<td>51</td>
<td>2008/11/13</td>
<td>$183,000</td>
<td>6373</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="53207d37363038362113373227322732313f36207d3d3627">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michael</td>
<td>Bruce</td>
<td>Javascript Developer</td>
<td>Singapore</td>
<td>29</td>
<td>2011/06/27</td>
<td>$183,000</td>
<td>5384</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f09dde9282859395b0949184918491929c9583de9e9584">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Donna</td>
<td>Snider</td>
<td>Customer Support</td>
<td>New York</td>
<td>27</td>
<td>2011/01/25</td>
<td>$112,000</td>
<td>4226</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="66024815080f02031426020712071207040a031548080312">[email&#160;protected]</a></td>
</tr>
</tbody>
</table>
</div>
</div>


<div class="card">
<div class="card-header">
<h5>`New` Constructor</h5>
<span>Responsive will automatically detect new DataTable instances being created on a page and initialize itself if it finds the responsive option or responsive class name on the table, as shown in the other examples.</span>
</div>
<div class="card-block">
<div class="dt-responsive table-responsive">
<table id="new-cons" class="table table-striped table-bordered nowrap">
<thead>
<tr>
 <th>First name</th>
<th>Last name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
<th>Extn.</th>
<th>E-mail</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tiger</td>
<td>Nixon</td>
<td>System Architect</td>
<td>Edinburgh</td>
<td>61</td>
<td>2011/04/25</td>
<td>$320,800</td>
<td>5421</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b2c69cdcdbcadddcf2d6d3c6d3c6d3d0ded7c19cdcd7c6">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Garrett</td>
<td>Winters</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>63</td>
<td>2011/07/25</td>
<td>$170,750</td>
<td>8422</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="680f461f01061c0d1a1b280c091c091c090a040d1b46060d1c">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Ashton</td>
<td>Cox</td>
<td>Junior Technical Author</td>
<td>San Francisco</td>
<td>66</td>
<td>2009/01/12</td>
<td>$86,000</td>
<td>1562</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="46276825293e06222732273227242a233568282332">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Cedric</td>
<td>Kelly</td>
<td>Senior Javascript Developer</td>
<td>Edinburgh</td>
<td>22</td>
 <td>2012/03/29</td>
<td>$433,060</td>
<td>6224</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="80e3aeebe5ececf9c0e4e1f4e1f4e1e2ece5f3aeeee5f4">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Airi</td>
<td>Satou</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>33</td>
<td>2008/11/28</td>
<td>$162,700</td>
<td>5407</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f495da8795809b81b490958095809596989187da9a9180">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Brielle</td>
<td>Williamson</td>
<td>Integration Specialist</td>
<td>New York</td>
<td>61</td>
<td>2012/12/02</td>
<td>$372,000</td>
<td>4804</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="12703c657b7e7e7b737f617d7c52767366736673707e77613c7c7766">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Herrod</td>
<td>Chandler</td>
<td>Sales Assistant</td>
<td>San Francisco</td>
<td>59</td>
<td>2012/08/06</td>
<td>$137,500</td>
<td>9608</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="aac284c9c2cbc4cec6cfd8eacecbdecbdecbc8c6cfd984c4cfde">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Rhona</td>
<td>Davidson</td>
<td>Integration Specialist</td>
<td>Tokyo</td>
<td>55</td>
<td>2010/10/14</td>
<td>$327,900</td>
<td>6200</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="70025e1411061914031f1e30141104110411121c15035e1e1504">[email&#160;protected]</a></td>
</tr>
<tr>
 <td>Colleen</td>
<td>Hurst</td>
<td>Javascript Developer</td>
<td>San Francisco</td>
<td>39</td>
<td>2009/09/15</td>
<td>$205,500</td>
<td>2360</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b1d29fd9c4c3c2c5f1d5d0c5d0c5d0d3ddd4c29fdfd4c5">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Sonya</td>
<td>Frost</td>
<td>Software Engineer</td>
<td>Edinburgh</td>
<td>23</td>
<td>2008/12/13</td>
<td>$103,600</td>
<td>1667</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d1a2ffb7a3bea2a591b5b0a5b0a5b0b3bdb4a2ffbfb4a5">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jena</td>
<td>Gaines</td>
<td>Office Manager</td>
<td>London</td>
<td>30</td>
<td>2008/12/19</td>
<td>$90,560</td>
<td>3814</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d9b3f7beb8b0b7bcaa99bdb8adb8adb8bbb5bcaaf7b7bcad">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Quinn</td>
<td>Flynn</td>
<td>Support Lead</td>
<td>Edinburgh</td>
<td>22</td>
<td>2013/03/03</td>
<td>$342,000</td>
<td>9497</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="94e5baf2f8edfafad4f0f5e0f5e0f5f6f8f1e7bafaf1e0">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Charde</td>
<td>Marshall</td>
<td>Regional Director</td>
<td>San Francisco</td>
<td>36</td>
<td>2008/10/16</td>
<td>$470,600</td>
 <td>6741</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b6d598dbd7c4c5ded7dadaf6d2d7c2d7c2d7d4dad3c598d8d3c2">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Haley</td>
<td>Kennedy</td>
<td>Senior Marketing Designer</td>
<td>London</td>
<td>43</td>
<td>2012/12/18</td>
<td>$313,500</td>
<td>3597</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b7df99dcd2d9d9d2d3cef7d3d6c3d6c3d6d5dbd2c499d9d2c3">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Tatyana</td>
<td>Fitzpatrick</td>
<td>Regional Director</td>
<td>London</td>
<td>19</td>
<td>2010/03/17</td>
<td>$385,750</td>
<td>1965</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f185df9798858b8190858398929ab1959085908590939d9482df9f9485">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michael</td>
<td>Silva</td>
<td>Marketing Designer</td>
<td>London</td>
<td>66</td>
<td>2012/11/27</td>
<td>$198,500</td>
<td>1581</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9ff2b1ecf6f3e9fedffbfeebfeebfefdf3faecb1f1faeb">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Paul</td>
<td>Byrd</td>
<td>Chief Financial Officer (CFO)</td>
<td>New York</td>
<td>64</td>
<td>2010/06/09</td>
<td>$725,000</td>
<td>3059</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bece90dcc7ccdafedadfcadfcadfdcd2dbcd90d0dbca">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gloria</td>
<td>Little</td>
 <td>Systems Administrator</td>
<td>New York</td>
<td>59</td>
<td>2009/04/10</td>
<td>$237,500</td>
<td>1721</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7e195012170a0a121b3e1a1f0a1f0a1f1c121b0d50101b0a">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Bradley</td>
<td>Greer</td>
<td>Software Engineer</td>
<td>London</td>
<td>41</td>
<td>2012/10/13</td>
<td>$132,000</td>
<td>2558</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d7b5f9b0a5b2b2a597b3b6a3b6a3b6b5bbb2a4f9b9b2a3">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Dai</td>
<td>Rios</td>
<td>Personnel Lead</td>
<td>Edinburgh</td>
<td>35</td>
<td>2012/09/26</td>
<td>$217,500</td>
<td>2290</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="62064c100b0d1122060316031603000e07114c0c0716">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jenette</td>
<td>Caldwell</td>
<td>Development Lead</td>
<td>New York</td>
<td>30</td>
<td>2011/09/03</td>
<td>$345,000</td>
<td>1937</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b2d89cd1d3ded6c5d7dedef2d6d3c6d3c6d3d0ded7c19cdcd7c6">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Yuri</td>
<td>Berry</td>
<td>Chief Marketing Officer (CMO)</td>
<td>New York</td>
<td>40</td>
<td>2009/06/25</td>
<td>$675,000</td>
<td>6154</td>
 <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bdc493dfd8cfcfc4fdd9dcc9dcc9dcdfd1d8ce93d3d8c9">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Caesar</td>
<td>Vance</td>
<td>Pre-Sales Support</td>
<td>New York</td>
<td>21</td>
<td>2011/12/12</td>
<td>$106,450</td>
<td>8330</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4c2f623a2d222f290c282d382d382d2e20293f62222938">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Doris</td>
<td>Wilder</td>
<td>Sales Assistant</td>
<td>Sidney</td>
<td>23</td>
<td>2010/09/20</td>
<td>$85,600</td>
<td>3023</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="93f7bde4fafff7f6e1d3f7f2e7f2e7f2f1fff6e0bdfdf6e7">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Angelica</td>
<td>Ramos</td>
<td>Chief Executive Officer (CEO)</td>
<td>London</td>
<td>47</td>
<td>2009/10/09</td>
<td>$1,200,000</td>
<td>5797</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dcbdf2aebdb1b3af9cb8bda8bda8bdbeb0b9aff2b2b9a8">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gavin</td>
<td>Joyce</td>
<td>Developer</td>
<td>Edinburgh</td>
<td>42</td>
<td>2010/12/22</td>
<td>$92,575</td>
<td>8822</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4720692d283e242207232633263326252b223469292233">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jennifer</td>
<td>Chang</td>
<td>Regional Director</td>
<td>Singapore</td>
 <td>28</td>
<td>2010/11/14</td>
<td>$357,650</td>
<td>9239</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="aec480cdc6cfc0c9eecacfdacfdacfccc2cbdd80c0cbda">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Brenden</td>
<td>Wagner</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>28</td>
<td>2011/06/07</td>
<td>$206,850</td>
<td>1314</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ddbff3aabcbab3b8af9db9bca9bca9bcbfb1b8aef3b3b8a9">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Fiona</td>
<td>Green</td>
<td>Chief Operating Officer (COO)</td>
<td>San Francisco</td>
<td>48</td>
<td>2010/03/11</td>
<td>$850,000</td>
<td>2947</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9afcb4fde8fffff4dafefbeefbeefbf8f6ffe9b4f4ffee">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Shou</td>
<td>Itou</td>
<td>Regional Marketing</td>
<td>Tokyo</td>
<td>20</td>
<td>2011/08/14</td>
<td>$163,000</td>
<td>8899</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9eedb0f7eaf1ebdefaffeaffeafffcf2fbedb0f0fbea">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michelle</td>
<td>House</td>
<td>Integration Specialist</td>
<td>Sidney</td>
<td>37</td>
<td>2011/06/02</td>
<td>$95,400</td>
<td>2769</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="432e6d2b2c36302603272237223722212f26306d2d2637">[email&#160;protected]</a></td>
</tr>
 <tr>
<td>Suki</td>
<td>Burks</td>
<td>Developer</td>
<td>London</td>
<td>53</td>
<td>2009/10/22</td>
<td>$114,500</td>
<td>6832</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4c3f622e393e273f0c282d382d382d2e20293f62222938">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Prescott</td>
<td>Bartlett</td>
<td>Technical Author</td>
<td>London</td>
<td>27</td>
<td>2011/05/07</td>
<td>$145,000</td>
<td>3606</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="067628646774726a63727246626772677267646a637528686372">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gavin</td>
<td>Cortez</td>
<td>Team Leader</td>
<td>San Francisco</td>
<td>22</td>
<td>2008/10/26</td>
<td>$235,500</td>
<td>2860</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="89eea7eae6fbfdecf3c9ede8fde8fde8ebe5ecfaa7e7ecfd">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Martena</td>
<td>Mccray</td>
<td>Post-Sales support</td>
<td>Edinburgh</td>
<td>46</td>
<td>2011/03/09</td>
<td>$324,050</td>
<td>8240</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cca1e2a1afafbeadb58ca8adb8adb8adaea0a9bfe2a2a9b8">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Unity</td>
<td>Butler</td>
<td>Marketing Designer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/12/09</td>
 <td>$85,675</td>
<td>5384</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fa8fd4988f8e969f88ba9e9b8e9b8e9b98969f89d4949f8e">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Howard</td>
<td>Hatfield</td>
<td>Office Manager</td>
<td>San Francisco</td>
<td>51</td>
<td>2008/12/16</td>
<td>$164,500</td>
<td>7031</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9bf3b5f3faeffdf2fef7ffdbfffaeffaeffaf9f7fee8b5f5feef">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Hope</td>
<td>Fuentes</td>
<td>Secretary</td>
<td>San Francisco</td>
<td>41</td>
<td>2010/02/12</td>
<td>$109,850</td>
<td>6318</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="761e581003131802130536121702170217141a130558181302">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Vivian</td>
<td>Harrell</td>
<td>Financial Controller</td>
<td>San Francisco</td>
<td>62</td>
<td>2009/02/14</td>
<td>$452,500</td>
<td>9422</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6b1d45030a19190e07072b0f0a1f0a1f0a09070e1845050e1f">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Timothy</td>
<td>Mooney</td>
<td>Office Manager</td>
<td>London</td>
<td>37</td>
<td>2008/12/11</td>
<td>$136,200</td>
<td>7580</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4c38622123232229350c282d382d382d2e20293f62222938">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jackson</td>
<td>Bradshaw</td>
<td>Director</td>
<td>New York</td>
<td>65</td>
<td>2008/09/26</td>
<td>$645,750</td>
<td>1042</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="472d6925352623342f263007232633263326252b223469292233">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Olivia</td>
<td>Liang</td>
<td>Support Engineer</td>
<td>Singapore</td>
<td>64</td>
<td>2011/02/03</td>
<td>$234,500</td>
<td>2120</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="442b6a282d252a2304202530253025262821376a2a2130">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Bruno</td>
<td>Nash</td>
<td>Software Engineer</td>
<td>London</td>
<td>38</td>
<td>2011/05/03</td>
<td>$163,500</td>
<td>6222</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e082ce8e819388a0848194819481828c8593ce8e8594">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Sakura</td>
<td>Yamamoto</td>
<td>Support Engineer</td>
<td>Tokyo</td>
<td>37</td>
<td>2009/08/19</td>
<td>$139,575</td>
<td>9383</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fd8ed3849c909c90928992bd999c899c899c9f91988ed3939889">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Thor</td>
<td>Walton</td>
<td>Developer</td>
<td>New York</td>
<td>61</td>
<td>2013/08/11</td>
<td>$98,540</td>
<td>8327</td>
 <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fb8fd58c9a978f9495bb9f9a8f9a8f9a99979e88d5959e8f">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Finn</td>
<td>Camacho</td>
<td>Support Engineer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/07/07</td>
<td>$87,500</td>
<td>2927</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d1b7ffb2b0bcb0b2b9be91b5b0a5b0a5b0b3bdb4a2ffbfb4a5">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Serge</td>
<td>Baldwin</td>
<td>Data Coordinator</td>
<td>Singapore</td>
<td>64</td>
<td>2012/04/09</td>
<td>$138,575</td>
<td>8352</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9cefb2fefdf0f8ebf5f2dcf8fde8fde8fdfef0f9efb2f2f9e8">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Zenaida</td>
<td>Frank</td>
<td>Software Engineer</td>
<td>New York</td>
<td>63</td>
<td>2010/01/04</td>
<td>$125,250</td>
<td>7439</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b9c397dfcbd8d7d2f9ddd8cdd8cdd8dbd5dcca97d7dccd">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Zorita</td>
<td>Serrano</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>56</td>
<td>2012/06/01</td>
<td>$115,000</td>
<td>4389</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4f35613c2a3d3d2e21200f2b2e3b2e3b2e2d232a3c61212a3b">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jennifer</td>
<td>Acosta</td>
<td>Junior Javascript Developer</td>
 <td>Edinburgh</td>
<td>43</td>
<td>2013/02/01</td>
<td>$75,650</td>
<td>3431</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="741e5a15171b07001534101500150015161811075a1a1100">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Cara</td>
<td>Stevens</td>
<td>Sales Assistant</td>
<td>New York</td>
<td>46</td>
<td>2011/12/06</td>
<td>$145,600</td>
<td>3990</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1b7835686f7e6d7e75685b7f7a6f7a6f7a79777e6835757e6f">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Hermione</td>
<td>Butler</td>
<td>Regional Director</td>
<td>London</td>
<td>47</td>
<td>2011/03/21</td>
<td>$356,250</td>
<td>1016</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="026a2c6077766e677042666376637663606e67712c6c6776">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Lael</td>
<td>Greer</td>
<td>Systems Administrator</td>
<td>London</td>
<td>21</td>
<td>2009/02/27</td>
<td>$103,500</td>
<td>6733</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="315d1f564354544371555045504550535d54421f5f5445">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jonas</td>
<td>Alexander</td>
<td>Developer</td>
<td>San Francisco</td>
<td>30</td>
<td>2010/07/14</td>
<td>$86,500</td>
<td>8196</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="68024609040d1009060c0d1a280c091c091c090a040d1b46060d1c">[email&#160;protected]</a></td>
</tr>
 <tr>
<td>Shad</td>
<td>Decker</td>
<td>Regional Director</td>
<td>Edinburgh</td>
<td>51</td>
<td>2008/11/13</td>
<td>$183,000</td>
<td>6373</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="95e6bbf1f0f6fef0e7d5f1f4e1f4e1f4f7f9f0e6bbfbf0e1">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michael</td>
<td>Bruce</td>
<td>Javascript Developer</td>
<td>Singapore</td>
<td>29</td>
<td>2011/06/27</td>
<td>$183,000</td>
<td>5384</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0e63206c7c7b6d6b4e6a6f7a6f7a6f6c626b7d20606b7a">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Donna</td>
<td>Snider</td>
<td>Customer Support</td>
<td>New York</td>
<td>27</td>
<td>2011/01/25</td>
<td>$112,000</td>
<td>4226</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="afcb81dcc1c6cbcaddefcbcedbcedbcecdc3cadc81c1cadb">[email&#160;protected]</a></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>


<div class="card">
<div class="card-header">
<h5>Immediately Show Hidden Details</h5>
<span>Responsive has the ability to display the details that it has hidden in a variety of different ways. Its default is to allow the end user to toggle the the display by clicking on a row and showing the information in a DataTables child row. At times it can be useful not to require end user interaction to display the hidden data in a responsive manner, which can be done with the childRowImmediate display type.</span>
</div>
<div class="card-block">
<div class="dt-responsive table-responsive">
<table id="show-hide-res" class="table table-striped table-bordered nowrap">
<thead>
<tr>
<th>First name</th>
<th>Last name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
<th>Extn.</th>
<th>E-mail</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tiger</td>
<td>Nixon</td>
<td>System Architect</td>
<td>Edinburgh</td>
<td>61</td>
<td>2011/04/25</td>
<td>$320,800</td>
<td>5421</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="43376d2d2a3b2c2d03272237223722212f26306d2d2637">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Garrett</td>
<td>Winters</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>63</td>
<td>2011/07/25</td>
<td>$170,750</td>
<td>8422</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="eb8cc59c82859f8e9998ab8f8a9f8a9f8a89878e98c5858e9f">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Ashton</td>
<td>Cox</td>
<td>Junior Technical Author</td>
<td>San Francisco</td>
<td>66</td>
<td>2009/01/12</td>
<td>$86,000</td>
<td>1562</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4928672a2631092d283d283d282b252c3a67272c3d">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Cedric</td>
<td>Kelly</td>
<td>Senior Javascript Developer</td>
<td>Edinburgh</td>
<td>22</td>
<td>2012/03/29</td>
<td>$433,060</td>
<td>6224</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e281cc89878e8e9ba2868396839683808e8791cc8c8796">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Airi</td>
<td>Satou</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>33</td>
<td>2008/11/28</td>
<td>$162,700</td>
<td>5407</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2e4f005d4f5a415b6e4a4f5a4f5a4f4c424b5d00404b5a">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Brielle</td>
<td>Williamson</td>
<td>Integration Specialist</td>
<td>New York</td>
<td>61</td>
<td>2012/12/02</td>
<td>$372,000</td>
<td>4804</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="95f7bbe2fcf9f9fcf4f8e6fafbd5f1f4e1f4e1f4f7f9f0e6bbfbf0e1">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Herrod</td>
<td>Chandler</td>
<td>Sales Assistant</td>
<td>San Francisco</td>
<td>59</td>
<td>2012/08/06</td>
<td>$137,500</td>
<td>9608</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e880c68b8089868c848d9aa88c899c899c898a848d9bc6868d9c">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Rhona</td>
<td>Davidson</td>
<td>Integration Specialist</td>
<td>Tokyo</td>
<td>55</td>
<td>2010/10/14</td>
<td>$327,900</td>
<td>6200</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b7c599d3d6c1ded3c4d8d9f7d3d6c3d6">[email&#160;protected]</a>tables.net</td>
</tr>
<tr>
<td>Colleen</td>
<td>Hurst</td>
<td>Javascript Developer</td>
<td>San Francisco</td>
<td>39</td>
<td>2009/09/15</td>
<td>$205,500</td>
<td>2360</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="61024f091413121521050015001500030d04124f0f0415">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Sonya</td>
<td>Frost</td>
<td>Software Engineer</td>
<td>Edinburgh</td>
<td>23</td>
<td>2008/12/13</td>
<td>$103,600</td>
<td>1667</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e390cd85918c9097a3878297829782818f8690cd8d8697">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jena</td>
<td>Gaines</td>
<td>Office Manager</td>
<td>London</td>
<td>30</td>
<td>2008/12/19</td>
<td>$90,560</td>
<td>3814</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="52387c35333b3c372112363326332633303e37217c3c3726">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Quinn</td>
<td>Flynn</td>
<td>Support Lead</td>
<td>Edinburgh</td>
<td>22</td>
<td>2013/03/03</td>
<td>$342,000</td>
<td>9497</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d7a6f9b1bbaeb9b997b3b6a3b6a3b6b5bbb2a4f9b9b2a3">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Charde</td>
<td>Marshall</td>
<td>Regional Director</td>
<td>San Francisco</td>
 <td>36</td>
<td>2008/10/16</td>
<td>$470,600</td>
<td>6741</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4e2d60232f3c3d262f22220e2a2f3a2f3a2f2c222b3d60202b3a">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Haley</td>
<td>Kennedy</td>
<td>Senior Marketing Designer</td>
<td>London</td>
<td>43</td>
<td>2012/12/18</td>
<td>$313,500</td>
<td>3597</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9ef6b0f5fbf0f0fbfae7defaffeaffeafffcf2fbedb0f0fbea">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Tatyana</td>
<td>Fitzpatrick</td>
<td>Regional Director</td>
<td>London</td>
<td>19</td>
<td>2010/03/17</td>
<td>$385,750</td>
<td>1965</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1e6a3078776a646e7f6a6c777d755e7a7f6a7f6a7f7c727b6d30707b6a">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michael</td>
<td>Silva</td>
<td>Marketing Designer</td>
<td>London</td>
<td>66</td>
<td>2012/11/27</td>
<td>$198,500</td>
<td>1581</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="92ffbce1fbfee4f3d2f6f3e6f3e6f3f0fef7e1bcfcf7e6">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Paul</td>
<td>Byrd</td>
<td>Chief Financial Officer (CFO)</td>
<td>New York</td>
<td>64</td>
<td>2010/06/09</td>
<td>$725,000</td>
<td>3059</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7e0e501c070c1a3e1a1f0a1f0a1f1c121b0d50101b0a">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gloria</td>
<td>Little</td>
<td>Systems Administrator</td>
<td>New York</td>
<td>59</td>
<td>2009/04/10</td>
<td>$237,500</td>
<td>1721</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1c7b327075686870795c787d687d687d7e70796f32727968">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Bradley</td>
<td>Greer</td>
<td>Software Engineer</td>
<td>London</td>
<td>41</td>
<td>2012/10/13</td>
<td>$132,000</td>
<td>2558</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8defa3eaffe8e8ffcde9ecf9ecf9ecefe1e8fea3e3e8f9">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Dai</td>
<td>Rios</td>
<td>Personnel Lead</td>
<td>Edinburgh</td>
<td>35</td>
<td>2012/09/26</td>
<td>$217,500</td>
<td>2290</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="50347e22393f2310343124312431323c35237e3e3524">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jenette</td>
<td>Caldwell</td>
<td>Development Lead</td>
<td>New York</td>
<td>30</td>
<td>2011/09/03</td>
<td>$345,000</td>
<td>1937</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b8d296dbd9d4dccfddd4d4f8dcd9ccd9ccd9dad4ddcb96d6ddcc">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Yuri</td>
<td>Berry</td>
<td>Chief Marketing Officer (CMO)</td>
<td>New York</td>
<td>40</td>
<td>2009/06/25</td>
 <td>$675,000</td>
<td>6154</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="473e69252235353e07232633263326252b223469292233">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Caesar</td>
<td>Vance</td>
<td>Pre-Sales Support</td>
<td>New York</td>
<td>21</td>
<td>2011/12/12</td>
<td>$106,450</td>
<td>8330</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9ffcb1e9fef1fcfadffbfeebfeebfefdf3faecb1f1faeb">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Doris</td>
<td>Wilder</td>
<td>Sales Assistant</td>
<td>Sidney</td>
<td>23</td>
<td>2010/09/20</td>
<td>$85,600</td>
<td>3023</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2c48025b454048495e6c484d584d584d4e40495f02424958">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Angelica</td>
<td>Ramos</td>
<td>Chief Executive Officer (CEO)</td>
<td>London</td>
<td>47</td>
<td>2009/10/09</td>
<td>$1,200,000</td>
<td>5797</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="62034c10030f0d1122060316031603000e07114c0c0716">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gavin</td>
<td>Joyce</td>
<td>Developer</td>
<td>Edinburgh</td>
<td>42</td>
<td>2010/12/22</td>
<td>$92,575</td>
<td>8822</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a1c68fcbced8c2c4e1c5c0d5c0d5c0c3cdc4d28fcfc4d5">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jennifer</td>
<td>Chang</td> 
<td>Regional Director</td>
<td>Singapore</td>
<td>28</td>
<td>2010/11/14</td>
<td>$357,650</td>
<td>9239</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5e34703d363f30391e3a3f2a3f2a3f3c323b2d70303b2a">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Brenden</td>
<td>Wagner</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>28</td>
<td>2011/06/07</td>
<td>$206,850</td>
<td>1314</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="caa8e4bdabada4afb88aaeabbeabbeaba8a6afb9e4a4afbe">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Fiona</td>
<td>Green</td>
<td>Chief Operating Officer (COO)</td>
<td>San Francisco</td>
<td>48</td>
<td>2010/03/11</td>
<td>$850,000</td>
<td>2947</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="375119504552525977535643564356555b524419595243">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Shou</td>
<td>Itou</td>
<td>Regional Marketing</td>
<td>Tokyo</td>
<td>20</td>
<td>2011/08/14</td>
<td>$163,000</td>
<td>8899</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6c1f42051803192c080d180d180d0e00091f42020918">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michelle</td>
<td>House</td>
<td>Integration Specialist</td>
<td>Sidney</td>
<td>37</td>
<td>2011/06/02</td>
<td>$95,400</td>
<td>2769</td>
 <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="79145711160c0a1c391d180d180d181b151c0a57171c0d">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Suki</td>
<td>Burks</td>
<td>Developer</td>
<td>London</td>
<td>53</td>
<td>2009/10/22</td>
<td>$114,500</td>
<td>6832</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7a0954180f0811093a1e1b0e1b0e1b18161f0954141f0e">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Prescott</td>
<td>Bartlett</td>
<td>Technical Author</td>
<td>London</td>
<td>27</td>
<td>2011/05/07</td>
<td>$145,000</td>
<td>3606</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="572779353625233b32232317333623362336353b322479393223">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gavin</td>
<td>Cortez</td>
<td>Team Leader</td>
<td>San Francisco</td>
<td>22</td>
<td>2008/10/26</td>
<td>$235,500</td>
<td>2860</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c2a5eca1adb0b6a7b882a6a3b6a3b6a3a0aea7b1ecaca7b6">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Martena</td>
<td>Mccray</td>
<td>Post-Sales support</td>
<td>Edinburgh</td>
<td>46</td>
<td>2011/03/09</td>
<td>$324,050</td>
<td>8240</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5c3172313f3f2e3d251c383d283d283d3e30392f72323928">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Unity</td>
<td>Butler</td>
<td>Marketing Designer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/12/09</td>
<td>$85,675</td>
<td>5384</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="85f0abe7f0f1e9e0f7c5e1e4f1e4f1e4e7e9e0f6abebe0f1">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Howard</td>
<td>Hatfield</td>
<td>Office Manager</td>
<td>San Francisco</td>
<td>51</td>
<td>2008/12/16</td>
<td>$164,500</td>
<td>7031</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="573f793f3623313e323b3317333623362336353b322479393223">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Hope</td>
<td>Fuentes</td>
<td>Secretary</td>
<td>San Francisco</td>
<td>41</td>
<td>2010/02/12</td>
<td>$109,850</td>
<td>6318</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="452d6b2330202b31203605212431243124272920366b2b2031">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Vivian</td>
<td>Harrell</td>
<td>Financial Controller</td>
<td>San Francisco</td>
<td>62</td>
<td>2009/02/14</td>
<td>$452,500</td>
<td>9422</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3c4a12545d4e4e5950507c585d485d485d5e50594f12525948">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Timothy</td>
<td>Mooney</td>
<td>Office Manager</td>
<td>London</td>
<td>37</td>
<td>2008/12/11</td>
<td>$136,200</td>
<td>7580</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b8cc96d5d7d7d6ddc1f8dcd9ccd9ccd9dad4ddcb96d6ddcc">[email&#160;protected]</a></td>
</tr>
 <tr>
<td>Jackson</td>
<td>Bradshaw</td>
<td>Director</td>
<td>New York</td>
<td>65</td>
<td>2008/09/26</td>
<td>$645,750</td>
<td>1042</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2842064a5a494c5b40495f684c495c495c494a444d5b06464d5c">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Olivia</td>
<td>Liang</td>
<td>Support Engineer</td>
<td>Singapore</td>
<td>64</td>
<td>2011/02/03</td>
<td>$234,500</td>
<td>2120</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8ee1a0e2e7efe0e9ceeaeffaeffaefece2ebfda0e0ebfa">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Bruno</td>
<td>Nash</td>
<td>Software Engineer</td>
<td>London</td>
<td>38</td>
<td>2011/05/03</td>
<td>$163,500</td>
<td>6222</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8feda1e1eefce7cfebeefbeefbeeede3eafca1e1eafb">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Sakura</td>
<td>Yamamoto</td>
<td>Support Engineer</td>
<td>Tokyo</td>
<td>37</td>
<td>2009/08/19</td>
<td>$139,575</td>
<td>9383</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7605580f171b171b19021936121702170217141a130558181302">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Thor</td>
<td>Walton</td>
<td>Developer</td>
<td>New York</td>
<td>61</td>
<td>2013/08/11</td>
<td>$98,540</td>
<td>8327</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2c58025b4d405843426c484d584d584d4e40495f02424958">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Finn</td>
<td>Camacho</td>
<td>Support Engineer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/07/07</td>
<td>$87,500</td>
<td>2927</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="aec880cdcfc3cfcdc6c1eecacfdacfdacfccc2cbdd80c0cbda">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Serge</td>
<td>Baldwin</td>
<td>Data Coordinator</td>
<td>Singapore</td>
<td>64</td>
<td>2012/04/09</td>
<td>$138,575</td>
<td>8352</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="087b266a69646c7f6166486c697c697c696a646d7b26666d7c">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Zenaida</td>
<td>Frank</td>
<td>Software Engineer</td>
<td>New York</td>
<td>63</td>
<td>2010/01/04</td>
<td>$125,250</td>
<td>7439</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="aad084ccd8cbc4c1eacecbdecbdecbc8c6cfd984c4cfde">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Zorita</td>
<td>Serrano</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>56</td>
<td>2012/06/01</td>
<td>$115,000</td>
<td>4389</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cab0e4b9afb8b8aba4a58aaeabbeabbeaba8a6afb9e4a4afbe">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jennifer</td>
 <td>Acosta</td>
<td>Junior Javascript Developer</td>
<td>Edinburgh</td>
<td>43</td>
<td>2013/02/01</td>
<td>$75,650</td>
<td>3431</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="95ffbbf4f6fae6e1f4d5f1f4e1f4e1f4f7f9f0e6bbfbf0e1">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Cara</td>
<td>Stevens</td>
<td>Sales Assistant</td>
<td>New York</td>
<td>46</td>
<td>2011/12/06</td>
<td>$145,600</td>
<td>3990</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fa99d4898e9f8c9f9489ba9e9b8e9b8e9b98969f89d4949f8e">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Hermione</td>
<td>Butler</td>
<td>Regional Director</td>
<td>London</td>
<td>47</td>
<td>2011/03/21</td>
<td>$356,250</td>
<td>1016</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="82eaace0f7f6eee7f0c2e6e3f6e3f6e3e0eee7f1acece7f6">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Lael</td>
<td>Greer</td>
<td>Systems Administrator</td>
<td>London</td>
<td>21</td>
<td>2009/02/27</td>
<td>$103,500</td>
<td>6733</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dcb0f2bbaeb9b9ae9cb8bda8bda8bdbeb0b9aff2b2b9a8">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jonas</td>
<td>Alexander</td>
<td>Developer</td>
<td>San Francisco</td>
<td>30</td>
<td>2010/07/14</td>
<td>$86,500</td>
 <td>8196</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9af0b4fbf6ffe2fbf4feffe8dafefbeefbeefbf8f6ffe9b4f4ffee">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Shad</td>
<td>Decker</td>
<td>Regional Director</td>
<td>Edinburgh</td>
<td>51</td>
<td>2008/11/13</td>
<td>$183,000</td>
<td>6373</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="afdc81cbcaccc4caddefcbcedbcedbcecdc3cadc81c1cadb">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michael</td>
<td>Bruce</td>
<td>Javascript Developer</td>
<td>Singapore</td>
<td>29</td>
<td>2011/06/27</td>
<td>$183,000</td>
<td>5384</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3f52115d4d4a5c5a7f5b5e4b5e4b5e5d535a4c11515a4b">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Donna</td>
<td>Snider</td>
<td>Customer Support</td>
<td>New York</td>
<td>27</td>
<td>2011/01/25</td>
<td>$112,000</td>
<td>4226</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3b5f154855525f5e497b5f5a4f5a4f5a59575e4815555e4f">[email&#160;protected]</a></td>
</tr>
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

<div id="styleSelector">
</div>
</div>
</div>
</div>
</div>

<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="<?=base_url('resources/admin/')?>/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="<?=base_url('resources/admin/')?>/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="<?=base_url('resources/admin/')?>/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="<?=base_url('resources/admin/')?>/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="<?=base_url('resources/admin/')?>/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<script data-cfasync="false" src="././cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="<?=base_url('resources/admin/')?>/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url('resources/admin/')?>/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?=base_url('resources/admin/')?>/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="<?=base_url('resources/admin/')?>/bower_components/bootstrap/js/bootstrap.min.js"></script>

<script src="<?=base_url('resources/admin/')?>/assets/pages/waves/js/waves.min.js"></script>

<script type="text/javascript" src="<?=base_url('resources/admin/')?>/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="text/javascript" src="<?=base_url('resources/admin/')?>/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="<?=base_url('resources/admin/')?>/bower_components/modernizr/js/css-scrollbars.js"></script>

<script src="<?=base_url('resources/admin/')?>/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url('resources/admin/')?>/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?=base_url('resources/admin/')?>/assets/pages/data-table/js/jszip.min.js"></script>
<script src="<?=base_url('resources/admin/')?>/assets/pages/data-table/js/pdfmake.min.js"></script>
<script src="<?=base_url('resources/admin/')?>/assets/pages/data-table/js/vfs_fonts.js"></script>
<script src="<?=base_url('resources/admin/')?>/assets/pages/data-table/extensions/responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url('resources/admin/')?>/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?=base_url('resources/admin/')?>/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?=base_url('resources/admin/')?>/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url('resources/admin/')?>/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url('resources/admin/')?>/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<script src="<?=base_url('resources/admin/')?>/assets/pages/data-table/extensions/responsive/js/responsive-custom.js"></script>
<script src="<?=base_url('resources/admin/')?>/assets/js/pcoded.min.js"></script>
<script src="<?=base_url('resources/admin/')?>/assets/js/vertical/vertical-layout.min.js"></script>
<script src="<?=base_url('resources/admin/')?>/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="<?=base_url('resources/admin/')?>/assets/js/script.js"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/dt-ext-responsive.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Feb 2023 13:38:49 GMT -->
</html>
