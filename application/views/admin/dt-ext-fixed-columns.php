<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/dt-ext-fixed-columns.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Feb 2023 13:38:37 GMT -->
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

<link rel="stylesheet" type="text/css" href="<?=base_url('resources/admin/')?>/bower_components/datatables.net/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url('resources/admin/')?>/assets/pages/data-table/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url('resources/admin/')?>/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">

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
<li class="active">
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
<li class=" ">
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
 <h5>Fixed Columns</h5>
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
<li class="breadcrumb-item"><a href="#!">Fixed Columns</a>
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
<div class="col-lg-6">
<div class="card">
<div class="card-header">
<h5>Left And Right Fixed Columns</h5>
<span>When displaying a table which scrolls along the x-axis, it can sometimes be useful to the end user for the left most column to be fixed in place, if it shows grouping, index or similar information. This is basically the same idea as 'freeze columns' in Excel. This can be achieved with the FixedColumns plug-in for DataTables, as shown below.</span>
</div>
<div class="card-block">
<table id="left-right-fix" class="table stripe row-border order-column">
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="473369292e3f282907232633263326252b223469292233">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3b5c154c52554f5e49487b5f5a4f5a4f5a59575e4815555e4f">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3b5a155854437b5f5a4f5a4f5a59575e4815555e4f">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ceade0a5aba2a2b78eaaafbaafbaafaca2abbde0a0abba">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="63024d1002170c1623070217021702010f06104d0d0617">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bcde92cbd5d0d0d5ddd1cfd3d2fcd8ddc8ddc8ddded0d9cf92d2d9c8">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0d65236e656c636961687f4d696c796c796c6f61687e23636879">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="22500c4643544b46514d4c62464356435643404e47510c4c4756">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4724692f3235343307232633263326252b223469292233">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="97e4b9f1e5f8e4e3d7f3f6e3f6e3f6f5fbf2e4b9f9f2e3">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0e6420696f67606b7d4e6a6f7a6f7a6f6c626b7d20606b7a">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="671649010b1e090927030613061306050b021449090213">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f794d99a9685849f969b9bb7939683968396959b9284d9999283">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e189cf8a848f8f848598a1858095809580838d8492cf8f8495">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e692c8808f929c968792948f858da6828792879287848a8395c8888392">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e38ecd908a8f9582a3878297829782818f8690cd8d8697">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b3c39dd1cac1d7f3d7d2c7d2c7d2d1dfd6c09dddd6c7">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c6a1e8aaafb2b2aaa386a2a7b2a7b2a7a4aaa3b5e8a8a3b2">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="40226e273225253200242134213421222c25336e2e2534">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c1a5efb3a8aeb281a5a0b5a0b5a0a3ada4b2efafa4b5">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e18bcf82808d8596848d8da1858095809580838d8492cf8f8495">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="86ffa8e4e3f4f4ffc6e2e7f2e7f2e7e4eae3f5a8e8e3f2">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5f3c71293e313c3a1f3b3e2b3e2b3e3d333a2c71313a2b">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9df9b3eaf4f1f9f8efddf9fce9fce9fcfff1f8eeb3f3f8e9">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="89e8a7fbe8e4e6fac9ede8fde8fde8ebe5ecfaa7e7ecfd">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f493da9e9b8d9791b490958095809596989187da9a9180">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0c66226f646d626b4c686d786d786d6e60697f22626978">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="afcd81d8cec8c1caddefcbcedbcedbcecdc3cadc81c1cadb">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="02642c657067676c42666376637663606e67712c6c6776">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8cffa2e5f8e3f9cce8edf8edf8edeee0e9ffa2e2e9f8">[email&#160;protected]</a></td>
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
 <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b0dd9ed8dfc5c3d5f0d4d1c4d1c4d1d2dcd5c39eded5c4">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="493a672b3c3b223a092d283d283d282b252c3a67272c3d">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c7b7e9a5a6b5b3aba2b3b387a3a6b3a6b3a6a5aba2b4e9a9a2b3">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="eb8cc58884999f8e91ab8f8a9f8a9f8a89878e98c5858e9f">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="187536757b7b6a7961587c796c796c797a747d6b36767d6c">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2a5f04485f5e464f586a4e4b5e4b5e4b48464f5904444f5e">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a7cf89cfc6d3c1cec2cbc3e7c3c6d3c6d3c6c5cbc2d489c9c2d3">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="254d0b4350404b51405665414451445144474940560b4b4051">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4c3a62242d3e3e2920200c282d382d382d2e20293f62222938">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ef9bc1828080818a96af8b8e9b8e9b8e8d838a9cc1818a9b">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bdd793dfcfdcd9ced5dccafdd9dcc9dcc9dcdfd1d8ce93d3d8c9">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5a357436333b343d1a3e3b2e3b2e3b38363f2974343f2e">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5634783837253e16323722372237343a332578383322">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b4c79acdd5d9d5d9dbc0dbf4d0d5c0d5c0d5d6d8d1c79adad1c0">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3c48124b5d504853527c585d485d485d5e50594f12525948">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3d5b135e5c505c5e55527d595c495c495c5f51584e13535849">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="97e4b9f5f6fbf3e0fef9d7f3f6e3f6e3f6f5fbf2e4b9f9f2e3">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ef95c1899d8e8184af8b8e9b8e9b8e8d838a9cc1818a9b">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="03792d70667171626d6c43676277627762616f66702d6d6677">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d8b2f6b9bbb7abacb998bcb9acb9acb9bab4bdabf6b6bdac">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b0d39ec3c4d5c6d5dec3f0d4d1c4d1c4d1d2dcd5c39eded5c4">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e58dcb879091898097a581849184918487898096cb8b8091">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5e3270392c3b3b2c1e3a3f2a3f2a3f3c323b2d70303b2a">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="107a3e717c7568717e74756250747164716471727c75633e7e7564">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="82f1ace6e7e1e9e7f0c2e6e3f6e3f6e3e0eee7f1acece7f6">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e885c68a9a9d8b8da88c899c899c898a848d9bc6868d9c">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="04602a776a6d60617644606570657065666861772a6a6170">[email&#160;protected]</a></td>
</tr>
</tbody>
 </table>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="card">
<div class="card-header">
<h5>Right Fixed Column</h5>
<span>FixedColumns has the ability to freeze columns on both the left and right hand sides of the table. By default it will fix the first column on the left, but using the initialisation parameters leftColumns and rightColumns you can alter this to fix the columns on the right as well. This example shows a single column fixed in place, in this case the right most column.</span>
</div>
<div class="card-block">
<table id="right-fix" class="table stripe row-border order-column">
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8efaa0e0e7f6e1e0ceeaeffaeffaefece2ebfda0e0ebfa">[email&#160;protected]</a></td>
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
<td>g.winte<a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="97e5e4d7f3f6e3f6e3f6f5fbf2e4b9f9f2e3">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="06672865697e46626772677267646a637528686372">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1a7934717f7676635a7e7b6e7b6e7b78767f6934747f6e">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="472669342633283207232633263326252b223469292233">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="50327e27393c3c39313d233f3e10343124312431323c35237e3e3524">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e28acc818a838c868e8790a2868396839683808e8791cc8c8796">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="32401c5653445b56415d5c72565346534653505e57411c5c5746">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="680b46001d1a1b1c280c091c091c090a040d1b46060d1c">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0c7f226a7e637f784c686d786d786d6e60697f22626978">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8dfca3ebe1f4e3e3cde9ecf9ecf9ecefe1e8fea3e3e8f9">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="593a7734382b2a31383535193d382d382d383b353c2a77373c2d">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c8a0e6a3ada6a6adacb188aca9bca9bca9aaa4adbbe6a6adbc">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4a3e642c233e303a2b3e382329210a2e2b3e2b3e2b28262f3964242f3e">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b3de9dc0dadfc5d2f3d7d2c7d2c7d2d1dfd6c09dddd6c7">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1f6f317d666d7b5f7b7e6b7e6b7e7d737a6c31717a6b">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ff98d193968b8b939abf9b9e8b9e8b9e9d939a8cd1919a8b">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ef8dc1889d8a8a9daf8b8e9b8e9b8e8d838a9cc1818a9b">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5c38722e35332f1c383d283d283d3e30392f72323928">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="96fcb8f5f7faf2e1f3fafad6f2f7e2f7e2f7f4faf3e5b8f8f3e2">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dfa6f1bdbaadada69fbbbeabbeabbebdb3baacf1b1baab">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5f3c71293e313c3a1f3b3e2b3e2b3e3d333a2c71313a2b">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6e0a401907020a0b1c2e0a0f1a0f1a0f0c020b1d40000b1a">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8feea1fdeee2e0fccfebeefbeefbeeede3eafca1e1eafb">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="44236a2e2b3d272104202530253025262821376a2a2130">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cda7e3aea5aca3aa8da9acb9acb9acafa1a8bee3a3a8b9">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9ffdb1e8fef8f1faeddffbfeebfeebfefdf3faecb1f1faeb">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c6a0e8a1b4a3a3a886a2a7b2a7b2a7a4aaa3b5e8a8a3b2">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b5c69bdcc1dac0f5d1d4c1d4c1d4d7d9d0c69bdbd0c1">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a4c98acccbd1d7c1e4c0c5d0c5d0c5c6c8c1d78acac1d0">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="54277a3621263f2714303520352035363831277a3a3120">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4c3c622e2d3e38202938380c282d382d382d2e20293f62222938">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="aacd84c9c5d8decfd0eacecbdecbdecbc8c6cfd984c4cfde">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6f0241020c0c1d0e162f0b0e1b0e1b0e0d030a1c41010a1b">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="93e6bdf1e6e7fff6e1d3f7f2e7f2e7f2f1fff6e0bdfdf6e7">[email&#160;protected]</a></td>
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
 <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fa92d4929b8e9c939f969eba9e9b8e9b8e9b98969f89d4949f8e">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="51397f3724343f25342211353025302530333d34227f3f3425">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c5b3ebada4b7b7a0a9a985a1a4b1a4b1a4a7a9a0b6ebaba0b1">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="62164c0f0d0d0c071b22060316031603000e07114c0c0716">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5d37733f2f3c392e353c2a1d393c293c293c3f31382e73333829">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9ef1b0f2f7fff0f9defaffeaffeafffcf2fbedb0f0fbea">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f092de9e918398b0949184918491929c9583de9e9584">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b6c598cfd7dbd7dbd9c2d9f6d2d7c2d7c2d7d4dad3c598d8d3c2">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="67134910060b13080927030613061306050b021449090213">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3a5c14595b575b5952557a5e5b4e5b4e5b58565f4914545f4e">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6a1944080b060e1d03042a0e0b1e0b1e0b08060f1944040f1e">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="86fca8e0f4e7e8edc6e2e7f2e7f2e7e4eae3f5a8e8e3f2">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3943174a5c4b4b585756795d584d584d585b555c4a17575c4d">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="593377383a362a2d38193d382d382d383b353c2a77373c2d">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e281cc91968794878c91a2868396839683808e8791cc8c8796">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d0b8feb2a5a4bcb5a290b4b1a4b1a4b1b2bcb5a3febeb5a4">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3854165f4a5d5d4a785c594c594c595a545d4b16565d4c">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="412b6f202d2439202f25243301252035203520232d24326f2f2435">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3e4d105a5b5d555b4c7e5a5f4a5f4a5f5c525b4d10505b4a">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c8a5e6aababdabad88aca9bca9bca9aaa4adbbe6a6adbc">[email&#160;protected]</a></td>
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
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="86e2a8f5e8efe2e3f4c6e2e7f2e7f2e7e4eae3f5a8e8e3f2">[email&#160;protected]</a></td>
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
<script type="text/javascript" src="./././cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url('resources/admin/')?>/assets/pages/data-table/extensions/fixed-colums/js/dataTables.fixedColumns.min.js"></script>

<script src="<?=base_url('resources/admin/')?>/assets/pages/data-table/extensions/fixed-colums/js/fixed-column-custom.js"></script>
<script src="<?=base_url('resources/admin/')?>/assets/js/pcoded.min.js"></script>
<script src="<?=base_url('resources/admin/')?>/assets/js/vertical/vertical-layout.min.js"></script>
<script src="<?=base_url('resources/admin/')?>/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="<?=base_url('resources/admin/')?>/assets/js/script.js"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/dt-ext-fixed-columns.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Feb 2023 13:38:45 GMT -->
</html>
