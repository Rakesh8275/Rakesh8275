
<!DOCTYPE html>
<html lang="en" class="scroll">
  <head>
    <meta charset="UTF-8" />
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">--> <!--w3c issue-->
    <title>Houston Radar Tetryon Server </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="content" />
    <meta name="keywords" content="" />
    <meta name="author" content="content" />
    <meta name="robots" content="noindex, nofollow" />
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <!-- Web Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,400,300' rel='stylesheet' type='text/css'>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- CSS -->
    <link rel="stylesheet" href="http://18.188.105.113/www-hrserver-release/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="http://18.188.105.113/www-hrserver-release/assets/css/custom.min.css" />
          <link rel="stylesheet" href="http://18.188.105.113/www-hrserver-release/assets/css/tables/dataTables.bootstrap.css" />
        <!-- Theme CSS -->
    <link rel="stylesheet" href="http://18.188.105.113/www-hrserver-release/assets/css/theme.css" />
    <link rel="stylesheet" href="http://18.188.105.113/www-hrserver-release/assets/css/style.css?v=2.123" />
    <link rel="stylesheet" href="http://18.188.105.113/www-hrserver-release/assets/css/admin-style.css?v=2.123" />


    <!-- Head Libs -->
    <script src="http://18.188.105.113/www-hrserver-release/assets/js/modernizr.js"></script>
    <!--[if IE]>
<script src="http://18.188.105.113/www-hrserver-release/http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <script type="text/javascript">
      function setNotice(sttime,endtime)
      {
        var startdate,enddate,startdateInLocale,enddateInLocale;
        
        startdate = new Date(sttime);
        enddate = new Date(endtime);

        startdateInLocale = startdate.toLocaleString(navigator.language,{location:Intl.DateTimeFormat().resolvedOptions().timeZone,year:'numeric',month:'2-digit',day:'2-digit', hour: '2-digit', minute:'2-digit'});//toString();
        enddateInLocale = enddate.toLocaleString(navigator.language,{location:Intl.DateTimeFormat().resolvedOptions().timeZone,year:'numeric',month:'2-digit',day:'2-digit', hour: '2-digit', minute:'2-digit'});//toString();

        document.getElementById("st_time").innerText= startdateInLocale.replace(',','');
        document.getElementById("finish_time").innerText= enddateInLocale.replace(',','');
      }
    </script>
  </head>
  <body>
    <section class="body" id="admin">
      <!-- start: header -->
      <header class="header clearfix">
        <div class="logo-container">
          <h1 title="Houston Radar Tetryon Server"><span class="site-name">Houston Radar Tetryon Server</span><a href="http://18.188.105.113/www-hrserver-release/HoustonDev-TA/admin" class="logo"></a></h1>
          <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
          </div>
        </div>
        <!-- end: search & user box -->
        <div class="header-right">
                    <div id="userbox" class="userbox">
              <a href="http://18.188.105.113/www-hrserver-release/HoustonDev-TA/" target="_blank"><i class="fa fa-external-link"></i> Website</a>
              <a href="#" data-toggle="dropdown">
                <div class="profile-info" data-lock-name="HoustonDev-TA" data-lock-email="dipin.va@teamta.in" data-user-customer="1" data-user-role="admin" >

                  <span class="name">HoustonDev-TA</span>
                  <span class="role">admin</span>
                </div>
                <i class="fa custom-caret"></i>
              </a>
              <div class="dropdown-menu">
                <ul class="list-unstyled">
                  <li>
                    <a href="http://18.188.105.113/www-hrserver-release/user/passwordChange" class="lnk-change-password"><i class="fa fa-user-secret"></i> Change password</a>
                  </li>
                  <li>
                    <a class="user-logout" tabindex="-1" href=""><i class="fa fa-power-off"></i> Logout</a>
                  </li>
                </ul>
              </div>
            </div>
                    </div>
        <!-- end: user box -->
        <span style="width:100%; margin: 0 auto;">
          <span class="loading fa-spin hidden"><i class="fa fa-spinner"></i></span>
        </span>
        <script>
        //if user/customer are logged in -> unclock editing frontend pages
        var logged_in = "1";
        </script>
      </header>
      <!-- end: header -->
      <!--xxx sidebar-->
      <div id="well-custom" class="well-custom" style="display: none;">
          <p style="margin: 0px !important">
            <i class="glyphicon glyphicon-warning-sign"></i>
            Server maintenance scheduled from 
            <span id="st_time"></span> to <span id="finish_time"></span>. Site access will be limited/intermittent during this time. 
          </p>
        </div>
        
        <div id="inner-wrap" class="inner-wrapper">

        <script type="text/javascript">
          setInterval(function(){ 
            getConfig();
          }, 180000);
        </script>
        <!-- start: sidebar -->
<aside id="sidebar-left" class="sidebar-left">

<div class="sidebar-header">
  <div class="sidebar-title">
    Navigation
  </div>
  <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
      <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
  </div>
</div>

<div class="nano has-scrollbar">
  <div class="nano-content">
    <nav id="menu" class="nav-main" role="navigation">
      <ul class="nav nav-main">
        <li class="separated ">
            <a href="dashboard" data-name="Dashboard" data-id="0"><i class="fa fa-home" aria-hidden="true"></i>
              <span>Dashboard</span>
            </a>
        </li>

        <li class="separated ">
            <a href="settings" data-name="Settings" data-id="0"><i class="fa fa-asterisk" aria-hidden="true"></i>
              <span>Settings</span>
            </a>
        </li>
        <!-- Both admin and Superadmin can access -->
                <li class="separated ">
            <a href="customers" data-name="Customers" data-id="0"><i class="fa fa-user-plus" aria-hidden="true"></i>
              <span>Customers</span>
            </a>
        </li>
        
        <li class="separated ">
            <a href="users" data-name="Users" data-id="0"><i class="fa fa-users" aria-hidden="true"></i>
              <span>Users</span>
            </a>
        </li>

        <li class="separated ">
            <a href="locations" data-name="Locations" data-id="0"><i class="fa fa-location-arrow" aria-hidden="true"></i>
              <span>Locations</span>
            </a>
        </li>

        <li class="separated ">
            <a href="tokens" data-name="Tokens" data-id="0"><i class="fa fa-key" aria-hidden="true"></i>
              <span>Manage Tokens</span>
            </a>
        </li>
        <li class="separated ">
            <a href="tags" data-name="Tags" data-id="0"><i class="fa fa-tag" aria-hidden="true"></i>
              <span>Manage Tags</span>
            </a>
        </li>
        
       
        <li class="separated ">
            <div class="col-md-12">
              <hr />
              <a href="permissions">
                <i class="fa fa-gear"></i>
                <span>Permission levels</span>
              </a>
            </div>
        </li>
        <li class="separated ">
            <div class="col-md-12">
              <a href="roadIcons">
                <i class="fa fa-file-image-o"></i>
                <span>Manage Road Icons</span>
              </a>
            </div>
        </li>

      </ul>
    </nav>
  </div>
</div>

</aside>
<!-- end: sidebar -->
<style>

.SumoSelect
{
    outline: 0 !important;
    position: relative !important;
    float: initial !important;
    margin-right: 5px !important;
    min-width: 68px !important;
    display: inline-block !important;
    width: auto !important;
    vertical-align: middle !important;
}

</style>
<section role="main" class="content-body">
  <header class="page-header">
    <h2>Users</h2>

    <div class="right-wrapper pull-right">
      <ol class="breadcrumbs">
        <li>
          <a href="dashboard">
            <i class="fa fa-home"></i>
          </a>
        </li>
        <li><span>Users</span></li>
      </ol>
    </div>
  </header>

  <!-- start: page -->
  <section class="panel">
    <div class="panel-body">
      <a href="" data-id="0" data-customer-id="1" data-customer-name="HoustonDev-TA" data-target="user" class="btn btn-sm btn-info pull-right new-user">Create New User</a>

              <div class="col-sm-2 text-right pull-right admin-delete-btn">
          <!-- <a href="" class="btn btn-danger btn-sm hidden confirm-delete-popup-group action-delete-group " data-action="deleteUser" data-name="selected users" data-target="delete-group"><i class="fa fa-trash"></i> Delete Users</a> -->
        </div>
        <table class="table table-bordered table-striped mb-none user-table" id="datatable-default">
          <thead>
            <tr>
              <th>UserID</th>
              <th>Username</th>
              <th>Name</th>
              <th>Email</th>
              <th>Status</th>
              <th>Role</th>
              <th>Customer</th>
              <th>Updated</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
                          <tr class="" data-id = "308">
                <td id="user-308">308</td>
                <td>hrllc</td>
                <td>Rony Thomas</td>
                <td>rony@houston-radar.com</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Supervisor</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="40486">hrllc</span>
                </td>
                <td class="createDate">08/08/2021 12:34                </td>
                <td class="actions">
                                                        
                  <a href="" data-id="308" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiMzA4IjtzOjg6InVzZXJuYW1lIjtzOjU6ImhybGxjIjtzOjQ6Im5hbWUiO3M6MTE6IlJvbnkgVGhvbWFzIjtzOjU6ImVtYWlsIjtzOjIyOiJyb255QGhvdXN0b24tcmFkYXIuY29tIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkeEV5dTY1ci5sVU8vZjRhT1VHcGtIZWFoZ3lHOC5XMFVvQll1TEdzeXU0VjROOG1BR3owNWEiO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMDgtMDggMTI6MzQ6NTciO3M6NDoic2FsdCI7czo2NDoiMWM4ZjQ1MTE2NmNjNDllZTgyMzg5ZWRiMGM2OTVhZTJlNDZhZTg5OGQ0MTBmZmNhNDg5ZGQyNGMxMWE1ZWVkOCI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjQ6InJvbGUiO3M6MToiMiI7czoxMDoiZXhwaXJ5RGF0ZSI7TjtzOjEwOiJjdXN0b21lcklkIjtzOjU6IjQwNDg2IjtzOjExOiJjdXN0b21lclNmbiI7czo1OiJocmxsYyI7czoxMzoiY3VzdG9tZXJFbWFpbCI7czoyMjoicm9ueUBob3VzdG9uLXJhZGFyLmNvbSI7czo4OiJyb2xlTmFtZSI7czoxMDoic3VwZXJ2aXNvciI7czo1OiJyb2xlcyI7YTo0OntpOjE7czo1OiJhZG1pbiI7aToyO3M6MTA6InN1cGVydmlzb3IiO2k6MztzOjQ6InVzZXIiO2k6NDtzOjU6Imd1ZXN0Ijt9fQ==" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "317">
                <td id="user-317">317</td>
                <td>Travancore</td>
                <td>Dipin_TA</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Supervisor</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="30410">Travancore</span>
                </td>
                <td class="createDate">06/28/2021 04:17                </td>
                <td class="actions">
                                                        
                  <a href="" data-id="317" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiMzE3IjtzOjg6InVzZXJuYW1lIjtzOjEwOiJUcmF2YW5jb3JlIjtzOjQ6Im5hbWUiO3M6ODoiRGlwaW5fVEEiO3M6NToiZW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJwYXNzd29yZCI7czo2MDoiJDJ5JDE0JFJQUVNiSHNFSFRJMHk1Wll3bG9xbC5MT1hCUUwzRUoxY2ZmMHQzTlVDMVVzNHIyVUVHMTVPIjtzOjEwOiJjcmVhdGVEYXRlIjtzOjE5OiIyMDIxLTA2LTI4IDA0OjE3OjEzIjtzOjQ6InNhbHQiO3M6NjQ6Ijc5NTA1NzdjOGZmM2MzNDE2OTVmNmRiY2U1NjViMWFiZDA2MDIyMGFlZjQ2OGEzMGRlMTUzYTUwMzAzZGQyODIiO3M6ODoiaXNBY3RpdmUiO3M6MToiMSI7czo0OiJyb2xlIjtzOjE6IjIiO3M6MTA6ImV4cGlyeURhdGUiO047czoxMDoiY3VzdG9tZXJJZCI7czo1OiIzMDQxMCI7czoxMToiY3VzdG9tZXJTZm4iO3M6MTA6IlRyYXZhbmNvcmUiO3M6MTM6ImN1c3RvbWVyRW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJyb2xlTmFtZSI7czoxMDoic3VwZXJ2aXNvciI7czo1OiJyb2xlcyI7YTo0OntpOjE7czo1OiJhZG1pbiI7aToyO3M6MTA6InN1cGVydmlzb3IiO2k6MztzOjQ6InVzZXIiO2k6NDtzOjU6Imd1ZXN0Ijt9fQ==" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "329">
                <td id="user-329">329</td>
                <td>vinesh_c_ta</td>
                <td>vinesh</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Supervisor</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="33661">vinesh_c_ta</span>
                </td>
                <td class="createDate">06/29/2021 02:45                </td>
                <td class="actions">
                                                        
                  <a href="" data-id="329" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiMzI5IjtzOjg6InVzZXJuYW1lIjtzOjExOiJ2aW5lc2hfY190YSI7czo0OiJuYW1lIjtzOjY6InZpbmVzaCI7czo1OiJlbWFpbCI7czoxOToidmluZXNoLmN2QHRlYW10YS5pbiI7czo4OiJwYXNzd29yZCI7czo2MDoiJDJ5JDE0JGNFdGNjdmM5N3RJQWZsaVBEU21qQ3V2ZmlvQ1diNy44OU9kbUlLMHBVN0tDY05SYS95SFFTIjtzOjEwOiJjcmVhdGVEYXRlIjtzOjE5OiIyMDIxLTA2LTI5IDAyOjQ1OjUwIjtzOjQ6InNhbHQiO3M6NjQ6IjY2YjZlZTU5MTNkOGJkMzE5ZmRiODk4ODgwYjE4Yjk5ZTNmMjFmNjAwNDhjNjQ1ZjNjYmYxMTAwZDVkZWQyZjUiO3M6ODoiaXNBY3RpdmUiO3M6MToiMSI7czo0OiJyb2xlIjtzOjE6IjIiO3M6MTA6ImV4cGlyeURhdGUiO047czoxMDoiY3VzdG9tZXJJZCI7czo1OiIzMzY2MSI7czoxMToiY3VzdG9tZXJTZm4iO3M6MTE6InZpbmVzaF9jX3RhIjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE5OiJ2aW5lc2guY3ZAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjEwOiJzdXBlcnZpc29yIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "378">
                <td id="user-378">378</td>
                <td>Dipin</td>
                <td>Dipin Ayyappan</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Supervisor</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="43206">Dipin</span>
                </td>
                <td class="createDate">08/02/2021 11:16                </td>
                <td class="actions">
                                                        
                  <a href="" data-id="378" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiMzc4IjtzOjg6InVzZXJuYW1lIjtzOjU6IkRpcGluIjtzOjQ6Im5hbWUiO3M6MTQ6IkRpcGluIEF5eWFwcGFuIjtzOjU6ImVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCRuSk41T1U2YjA0SmtGdVpuZHJTVUUuRmxmc1RxTmJKNXRUVDJBVHVWeVY0MzVlRDA3aEllNiI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0wOC0wMiAxMToxNjo0MCI7czo0OiJzYWx0IjtzOjY0OiJhNTJkMThhMjdkNmUzMjFmZGE5YzhiZTg2MzVkMjM5ZjIxNTQ5NjIyNDY1Njc2NTYwOGNhNTA0Y2QwY2Y4YTA2IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIyIjtzOjEwOiJleHBpcnlEYXRlIjtOO3M6MTA6ImN1c3RvbWVySWQiO3M6NToiNDMyMDYiO3M6MTE6ImN1c3RvbWVyU2ZuIjtzOjU6IkRpcGluIjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicm9sZU5hbWUiO3M6MTA6InN1cGVydmlzb3IiO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "383">
                <td id="user-383">383</td>
                <td>HoustonDev_Guest</td>
                <td>HoustonDev_Guest</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Admin</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="43206">Dipin</span>
                </td>
                <td class="createDate">08/04/2021 09:48                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="383" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="383" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiMzgzIjtzOjg6InVzZXJuYW1lIjtzOjE2OiJIb3VzdG9uRGV2X0d1ZXN0IjtzOjQ6Im5hbWUiO3M6MTY6IkhvdXN0b25EZXZfR3Vlc3QiO3M6NToiZW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJwYXNzd29yZCI7czo2MDoiJDJ5JDE0JExiaHcuU2xnTFV2OGRiT3FPRTBBT084TDBqazNvL3RBL1VlQ05BMGptVHlCUUZPZTNydmxtIjtzOjEwOiJjcmVhdGVEYXRlIjtzOjE5OiIyMDIxLTA4LTA0IDA5OjQ4OjI1IjtzOjQ6InNhbHQiO3M6NjQ6IjczMGY2OTIwNDkxODE5ZWUxZDJhYmNhNGExODIyMWQ1MWFlNmM0YmEzYjkxN2FlMDJlZTM2ZTdjMDM5ZjJkNzEiO3M6ODoiaXNBY3RpdmUiO3M6MToiMSI7czo0OiJyb2xlIjtzOjE6IjEiO3M6MTA6ImV4cGlyeURhdGUiO047czoxMDoiY3VzdG9tZXJJZCI7czo1OiI0MzIwNiI7czoxMToiY3VzdG9tZXJTZm4iO3M6NToiRGlwaW4iO3M6MTM6ImN1c3RvbWVyRW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJyb2xlTmFtZSI7czo1OiJhZG1pbiI7czo1OiJyb2xlcyI7YTo0OntpOjE7czo1OiJhZG1pbiI7aToyO3M6MTA6InN1cGVydmlzb3IiO2k6MztzOjQ6InVzZXIiO2k6NDtzOjU6Imd1ZXN0Ijt9fQ==" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "387">
                <td id="user-387">387</td>
                <td>Dipin_Supervisor1</td>
                <td>Dipin_Supervisor1</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Supervisor</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="43206">Dipin</span>
                </td>
                <td class="createDate">08/04/2021 23:14                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="387" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="387" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiMzg3IjtzOjg6InVzZXJuYW1lIjtzOjE3OiJEaXBpbl9TdXBlcnZpc29yMSI7czo0OiJuYW1lIjtzOjE3OiJEaXBpbl9TdXBlcnZpc29yMSI7czo1OiJlbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkNVNBU211b0V4cHNKU2RNN2ZWUy9yT1dKY3MwM04zOUZ4UXJSUkFhaElTdVY5SkdZd29wMG0iO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMDgtMDQgMjM6MTQ6MjUiO3M6NDoic2FsdCI7czo2NDoiOGE2NjNmM2E0ZTc5OTE4ZmRkMThlZGUyZDgzYjNlOTJhYTdlYmE0MmQ3ZTUxYjNlMDJhMjMyZjBhOGRiNmY3MyI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjQ6InJvbGUiO3M6MToiMiI7czoxMDoiZXhwaXJ5RGF0ZSI7TjtzOjEwOiJjdXN0b21lcklkIjtzOjU6IjQzMjA2IjtzOjExOiJjdXN0b21lclNmbiI7czo1OiJEaXBpbiI7czoxMzoiY3VzdG9tZXJFbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjEwOiJzdXBlcnZpc29yIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "388">
                <td id="user-388">388</td>
                <td>vinu_test_sv</td>
                <td>vinu_test_sv</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Supervisor</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="63733">vinu_test</span>
                </td>
                <td class="createDate">08/06/2021 01:29                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="388" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="388" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiMzg4IjtzOjg6InVzZXJuYW1lIjtzOjEyOiJ2aW51X3Rlc3Rfc3YiO3M6NDoibmFtZSI7czoxMjoidmludV90ZXN0X3N2IjtzOjU6ImVtYWlsIjtzOjE5OiJ2aW5lc2guY3ZAdGVhbXRhLmluIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkREJOek5uUHVGcVhVR2NBVXVub2Y3ZTBYLjJscmhYTk1xTVhncDRlVmV6aDFBNS91cktYZ08iO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMDgtMDYgMDE6Mjk6NTkiO3M6NDoic2FsdCI7czo2NDoiOTRlOWMxNDlmOTE5YzEwNTg4ZDJkNTg1MTQ4YzRmM2ZmOWU2NjM4Zjk2MTZhNzBhZTM4MjRmODZjNmJkMGJhZiI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjQ6InJvbGUiO3M6MToiMiI7czoxMDoiZXhwaXJ5RGF0ZSI7TjtzOjEwOiJjdXN0b21lcklkIjtzOjU6IjYzNzMzIjtzOjExOiJjdXN0b21lclNmbiI7czo5OiJ2aW51X3Rlc3QiO3M6MTM6ImN1c3RvbWVyRW1haWwiO3M6MTk6InZpbmVzaC5jdkB0ZWFtdGEuaW4iO3M6ODoicm9sZU5hbWUiO3M6MTA6InN1cGVydmlzb3IiO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "389">
                <td id="user-389">389</td>
                <td>vinu_test1</td>
                <td>vinu_test1</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Supervisor</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="58322">vinu_test1</span>
                </td>
                <td class="createDate">08/06/2021 01:35                </td>
                <td class="actions">
                                                        
                  <a href="" data-id="389" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiMzg5IjtzOjg6InVzZXJuYW1lIjtzOjEwOiJ2aW51X3Rlc3QxIjtzOjQ6Im5hbWUiO3M6MTA6InZpbnVfdGVzdDEiO3M6NToiZW1haWwiO3M6MTk6InZpbmVzaC5jdkB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCRvdDhWZGtxS0RiaGtaRHoxVkROL0Z1RzJHcENiYmhDM0ZTVUFkbExwWVdlRHNrZUhIaFJOYSI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0wOC0wNiAwMTozNTo0NiI7czo0OiJzYWx0IjtzOjY0OiI5NTBkMTE5MjFjZmIzMzhmZDU4NGYzMDY2NmYyY2U3ZjkyYTRiYmE3ZDEzNTRkODQwNjc4MWY2MjRmZTIyNmRhIjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIyIjtzOjEwOiJleHBpcnlEYXRlIjtOO3M6MTA6ImN1c3RvbWVySWQiO3M6NToiNTgzMjIiO3M6MTE6ImN1c3RvbWVyU2ZuIjtzOjEwOiJ2aW51X3Rlc3QxIjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE5OiJ2aW5lc2guY3ZAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjEwOiJzdXBlcnZpc29yIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "385">
                <td id="user-385">385</td>
                <td>HoustonDev_User</td>
                <td>HoustonDev_User</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">08/06/2021 13:04                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="385" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="385" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiMzg1IjtzOjg6InVzZXJuYW1lIjtzOjE1OiJIb3VzdG9uRGV2X1VzZXIiO3M6NDoibmFtZSI7czoxNToiSG91c3RvbkRldl9Vc2VyIjtzOjU6ImVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCRLekJ3NmlVcHgyYzlJaXdmMDdQMHhlWFJYS0dINTRZWDJDTTBhZ1o5WUVkbjB4amEuREsvTyI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0wOC0wNiAxMzowNDoxOCI7czo0OiJzYWx0IjtzOjY0OiJhYjNjZDJiMjcwNDlmNmZiMDEyMmVmYTBhZGIyZmYwZDFjMWJiMWFjN2Q0MDE1NTE4MjhjNDY4ZGZmODBlZjQxIjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIzIjtzOjEwOiJleHBpcnlEYXRlIjtOO3M6MTA6ImN1c3RvbWVySWQiO3M6MToiMSI7czoxMToiY3VzdG9tZXJTZm4iO3M6MTM6IkhvdXN0b25EZXYtVEEiO3M6MTM6ImN1c3RvbWVyRW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJyb2xlTmFtZSI7czo0OiJ1c2VyIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "386">
                <td id="user-386">386</td>
                <td>HoustonDev_Admin</td>
                <td>HoustonDev_Admin</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Admin</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">08/06/2021 13:04                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="386" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="386" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiMzg2IjtzOjg6InVzZXJuYW1lIjtzOjE2OiJIb3VzdG9uRGV2X0FkbWluIjtzOjQ6Im5hbWUiO3M6MTY6IkhvdXN0b25EZXZfQWRtaW4iO3M6NToiZW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJwYXNzd29yZCI7czo2MDoiJDJ5JDE0JG81eU85N3RkQ0syTGJSRmJsU0x6Z095c0FMSHVBLi50VmlidjRVSC90bVNsczZVTjVKTjQuIjtzOjEwOiJjcmVhdGVEYXRlIjtzOjE5OiIyMDIxLTA4LTA2IDEzOjA0OjM0IjtzOjQ6InNhbHQiO3M6NjQ6IjA2YzllMDAyNTRmZGI1NWU3M2NiYWIxNjhjZjgyNzg0NWE0YjNmMGMxMTBmMjQ3M2Q5YzViNWMwYTRmY2RiYWYiO3M6ODoiaXNBY3RpdmUiO3M6MToiMSI7czo0OiJyb2xlIjtzOjE6IjEiO3M6MTA6ImV4cGlyeURhdGUiO047czoxMDoiY3VzdG9tZXJJZCI7czoxOiIxIjtzOjExOiJjdXN0b21lclNmbiI7czoxMzoiSG91c3RvbkRldi1UQSI7czoxMzoiY3VzdG9tZXJFbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjU6ImFkbWluIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "384">
                <td id="user-384">384</td>
                <td>HoustonDev_Supervisor</td>
                <td>HoustonDev_Supervisor</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Supervisor</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">08/06/2021 13:04                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="384" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="384" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiMzg0IjtzOjg6InVzZXJuYW1lIjtzOjIxOiJIb3VzdG9uRGV2X1N1cGVydmlzb3IiO3M6NDoibmFtZSI7czoyMToiSG91c3RvbkRldl9TdXBlcnZpc29yIjtzOjU6ImVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCRnY1Z0eWZ0azI3MS5qbm5KclR6RmxPSEV0d3lad3p5N2trdnREbnF2ZGVOM2Zra2dHSkEyLiI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0wOC0wNiAxMzowNDo0NyI7czo0OiJzYWx0IjtzOjY0OiI4ZDZmZWJmNjU5ZjVmOTk3YTg5NGZkZjQ3NTEwNWY4NmY2NTgzN2IwZTczOTcyMTRmMTkzZmJhZWVlNzA2NTJmIjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIyIjtzOjEwOiJleHBpcnlEYXRlIjtOO3M6MTA6ImN1c3RvbWVySWQiO3M6MToiMSI7czoxMToiY3VzdG9tZXJTZm4iO3M6MTM6IkhvdXN0b25EZXYtVEEiO3M6MTM6ImN1c3RvbWVyRW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJyb2xlTmFtZSI7czoxMDoic3VwZXJ2aXNvciI7czo1OiJyb2xlcyI7YTo0OntpOjE7czo1OiJhZG1pbiI7aToyO3M6MTA6InN1cGVydmlzb3IiO2k6MztzOjQ6InVzZXIiO2k6NDtzOjU6Imd1ZXN0Ijt9fQ==" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "359">
                <td id="user-359">359</td>
                <td>Dipin_Supervisor</td>
                <td>Dipin_Supervisor</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Supervisor</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="43206">Dipin</span>
                </td>
                <td class="createDate">08/09/2021 22:39                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="359" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="359" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiMzU5IjtzOjg6InVzZXJuYW1lIjtzOjE2OiJEaXBpbl9TdXBlcnZpc29yIjtzOjQ6Im5hbWUiO3M6MTY6IkRpcGluX1N1cGVydmlzb3IiO3M6NToiZW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJwYXNzd29yZCI7czo2MDoiJDJ5JDE0JFFIeXltNngzQTNnTXpnbWFudUE2OC5mUS93ckh5U2cvMXhjL2hSbll6QjVuL1pLcnM4WXJXIjtzOjEwOiJjcmVhdGVEYXRlIjtzOjE5OiIyMDIxLTA4LTA5IDIyOjM5OjI0IjtzOjQ6InNhbHQiO3M6NjQ6ImY2Yzg2YzUxMWVhNDA4N2EzMmUzNmYyZjA2Yjc5NTBkODNkMTAzMDdiYjIxM2U0ODRiOWY1MjgxZGE1ZTM4YjIiO3M6ODoiaXNBY3RpdmUiO3M6MToiMSI7czo0OiJyb2xlIjtzOjE6IjIiO3M6MTA6ImV4cGlyeURhdGUiO047czoxMDoiY3VzdG9tZXJJZCI7czo1OiI0MzIwNiI7czoxMToiY3VzdG9tZXJTZm4iO3M6NToiRGlwaW4iO3M6MTM6ImN1c3RvbWVyRW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJyb2xlTmFtZSI7czoxMDoic3VwZXJ2aXNvciI7czo1OiJyb2xlcyI7YTo0OntpOjE7czo1OiJhZG1pbiI7aToyO3M6MTA6InN1cGVydmlzb3IiO2k6MztzOjQ6InVzZXIiO2k6NDtzOjU6Imd1ZXN0Ijt9fQ==" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "392">
                <td id="user-392">392</td>
                <td>testing_Dipin</td>
                <td>testing_Dipin</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="43206">Dipin</span>
                </td>
                <td class="createDate">08/06/2021 13:05                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="392" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="392" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiMzkyIjtzOjg6InVzZXJuYW1lIjtzOjEzOiJ0ZXN0aW5nX0RpcGluIjtzOjQ6Im5hbWUiO3M6MTM6InRlc3RpbmdfRGlwaW4iO3M6NToiZW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJwYXNzd29yZCI7czo2MDoiJDJ5JDE0JEdheTdJdzJYYUhrMEZNY3MudHRLd3V0YTBsc1p4QlRUQ3RIai45RWltWWNQRWY5TE9tZ1dtIjtzOjEwOiJjcmVhdGVEYXRlIjtzOjE5OiIyMDIxLTA4LTA2IDEzOjA1OjMxIjtzOjQ6InNhbHQiO3M6NjQ6IjkzZjE0NTZjZjYxMDE5M2EwMzRkNDNhOTg4ODBiNDIyMzM3MTIzNDVjOTM5YTJkZDZkMWMyNDMxMzY3MTRjM2UiO3M6ODoiaXNBY3RpdmUiO3M6MToiMSI7czo0OiJyb2xlIjtzOjE6IjMiO3M6MTA6ImV4cGlyeURhdGUiO047czoxMDoiY3VzdG9tZXJJZCI7czo1OiI0MzIwNiI7czoxMToiY3VzdG9tZXJTZm4iO3M6NToiRGlwaW4iO3M6MTM6ImN1c3RvbWVyRW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJyb2xlTmFtZSI7czo0OiJ1c2VyIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "379">
                <td id="user-379">379</td>
                <td>Dipin_Admin</td>
                <td>Dipin_Admin</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Admin</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="43206">Dipin</span>
                </td>
                <td class="createDate">08/06/2021 13:08                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="379" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="379" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiMzc5IjtzOjg6InVzZXJuYW1lIjtzOjExOiJEaXBpbl9BZG1pbiI7czo0OiJuYW1lIjtzOjExOiJEaXBpbl9BZG1pbiI7czo1OiJlbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkcXlKOWlzdE9mVmZpTFlmRHZUVFFudUpUS0p4Z3Vad2lNMmx6L05xeUMzdi5sZmU5VG83dTIiO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMDgtMDYgMTM6MDg6MDUiO3M6NDoic2FsdCI7czo2NDoiZTMwYjQ0OTdjMGNiNTNiMjZlZTY0MTA2YTM1Mzc5ZDVmYzUyMzJhYjNiODVjYTUwNWU3NDZlNTRjZjliOWZmOCI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjQ6InJvbGUiO3M6MToiMSI7czoxMDoiZXhwaXJ5RGF0ZSI7TjtzOjEwOiJjdXN0b21lcklkIjtzOjU6IjQzMjA2IjtzOjExOiJjdXN0b21lclNmbiI7czo1OiJEaXBpbiI7czoxMzoiY3VzdG9tZXJFbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjU6ImFkbWluIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "396">
                <td id="user-396">396</td>
                <td>HoustonDev_Admin1</td>
                <td>HoustonDev_Admin1</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Admin</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">08/06/2021 13:20                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="396" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="396" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiMzk2IjtzOjg6InVzZXJuYW1lIjtzOjE3OiJIb3VzdG9uRGV2X0FkbWluMSI7czo0OiJuYW1lIjtzOjE3OiJIb3VzdG9uRGV2X0FkbWluMSI7czo1OiJlbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkV2Zxa2U2WHFCbU5md3JIc1QvYmdsLmljNjZZWDBaMFNvVzJBSDEzV3oyREhpWDk4RlA2TlMiO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMDgtMDYgMTM6MjA6MDUiO3M6NDoic2FsdCI7czo2NDoiN2VmY2ZjOTg4YjQ4MTM1Njc5MzU1NDEwMDMzNzhjMjk0OWZjOWVlZjE5ZmI0NjhmYWE0Yzg5MDMyZjYwMDhlYSI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjQ6InJvbGUiO3M6MToiMSI7czoxMDoiZXhwaXJ5RGF0ZSI7TjtzOjEwOiJjdXN0b21lcklkIjtzOjE6IjEiO3M6MTE6ImN1c3RvbWVyU2ZuIjtzOjEzOiJIb3VzdG9uRGV2LVRBIjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicm9sZU5hbWUiO3M6NToiYWRtaW4iO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "1">
                <td id="user-1">1</td>
                <td>HoustonDev-TA</td>
                <td>Dipin Ayyappan</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Admin</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">08/07/2021 11:21                </td>
                <td class="actions">
                  
                  <a href="" data-id="1" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czoxMzoiSG91c3RvbkRldi1UQSI7czo0OiJuYW1lIjtzOjE0OiJEaXBpbiBBeXlhcHBhbiI7czo1OiJlbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkYXF5eVpTb3hxeGNZMG5vY0RSSmxDZXgxbXFBYnEvMjN2Zkw5LnJGUW9qUW9MLm9HM0J4RWUiO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMDgtMDcgMTE6MjE6MDUiO3M6NDoic2FsdCI7czo2NDoiZGRiOThhNmUzMzhlZmIzZjhiODhhYmU0MGY1ZTBiYTQ3MThlYjlmMGQ4ZTAzZTYxNWExNjk1NDYyYTk3N2UwNyI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjQ6InJvbGUiO3M6MToiMSI7czoxMDoiZXhwaXJ5RGF0ZSI7TjtzOjEwOiJjdXN0b21lcklkIjtzOjE6IjEiO3M6MTE6ImN1c3RvbWVyU2ZuIjtzOjEzOiJIb3VzdG9uRGV2LVRBIjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicm9sZU5hbWUiO3M6NToiYWRtaW4iO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "397">
                <td id="user-397">397</td>
                <td>hrllc_sup</td>
                <td>hrllc sup</td>
                <td>rony@houston-radar.com</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Supervisor</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="40486">hrllc</span>
                </td>
                <td class="createDate">08/08/2021 12:44                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="397" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="397" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiMzk3IjtzOjg6InVzZXJuYW1lIjtzOjk6ImhybGxjX3N1cCI7czo0OiJuYW1lIjtzOjk6ImhybGxjIHN1cCI7czo1OiJlbWFpbCI7czoyMjoicm9ueUBob3VzdG9uLXJhZGFyLmNvbSI7czo4OiJwYXNzd29yZCI7czo2MDoiJDJ5JDE0JFZPbmp0a05SSWdiRTNlZEdRSUhKck9uenhveGp3VFNrUG1qQzlFOGhWS2cwNHlFc1RjOFR1IjtzOjEwOiJjcmVhdGVEYXRlIjtzOjE5OiIyMDIxLTA4LTA4IDEyOjQ0OjQyIjtzOjQ6InNhbHQiO3M6NjQ6ImNhOTkyNzAzOWM4ZDAzMTA3MjgyYmQwZmY4OWZhYjNlYmUyNDYzMTNkODkzYzQxODM0MWJlZWJlNmQ1NzMxYjIiO3M6ODoiaXNBY3RpdmUiO3M6MToiMSI7czo0OiJyb2xlIjtzOjE6IjIiO3M6MTA6ImV4cGlyeURhdGUiO047czoxMDoiY3VzdG9tZXJJZCI7czo1OiI0MDQ4NiI7czoxMToiY3VzdG9tZXJTZm4iO3M6NToiaHJsbGMiO3M6MTM6ImN1c3RvbWVyRW1haWwiO3M6MjI6InJvbnlAaG91c3Rvbi1yYWRhci5jb20iO3M6ODoicm9sZU5hbWUiO3M6MTA6InN1cGVydmlzb3IiO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "399">
                <td id="user-399">399</td>
                <td>hrllc_guest</td>
                <td>hrrllc guest</td>
                <td>rony@houston-radar.com</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Guest</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="40486">hrllc</span>
                </td>
                <td class="createDate">08/08/2021 12:46                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="399" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="399" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiMzk5IjtzOjg6InVzZXJuYW1lIjtzOjExOiJocmxsY19ndWVzdCI7czo0OiJuYW1lIjtzOjEyOiJocnJsbGMgZ3Vlc3QiO3M6NToiZW1haWwiO3M6MjI6InJvbnlAaG91c3Rvbi1yYWRhci5jb20iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCR6dTRQZmpPSkFDbDNORjBuZ3dYZmsuTW1JZTAwQlZwSTk2UzJ4QS85R0xGalNVc1EvVzgwaSI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0wOC0wOCAxMjo0Njo1OSI7czo0OiJzYWx0IjtzOjY0OiIwMTQ0NGM2NWFlZjA5ZjMzMTE3OGUzNjI4ZTc1ZTVmODE5NWEyZjE4YTZmY2IzY2RiNjFjMmY2YWNjMTQ1ZjVkIjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiI0IjtzOjEwOiJleHBpcnlEYXRlIjtOO3M6MTA6ImN1c3RvbWVySWQiO3M6NToiNDA0ODYiO3M6MTE6ImN1c3RvbWVyU2ZuIjtzOjU6ImhybGxjIjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjIyOiJyb255QGhvdXN0b24tcmFkYXIuY29tIjtzOjg6InJvbGVOYW1lIjtzOjU6Imd1ZXN0IjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "398">
                <td id="user-398">398</td>
                <td>hrllc_user</td>
                <td>hrllcuser</td>
                <td>rony@houston-radar.com</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="40486">hrllc</span>
                </td>
                <td class="createDate">08/08/2021 12:49                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="398" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="398" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiMzk4IjtzOjg6InVzZXJuYW1lIjtzOjEwOiJocmxsY191c2VyIjtzOjQ6Im5hbWUiO3M6OToiaHJsbGN1c2VyIjtzOjU6ImVtYWlsIjtzOjIyOiJyb255QGhvdXN0b24tcmFkYXIuY29tIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkazFDWDZWSWkxRTlHZFJ4RUdYblN3LndMeGkwWURIOFJUMjdManZyRFY5Q082ZDVFYjVnZnkiO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMDgtMDggMTI6NDk6MjUiO3M6NDoic2FsdCI7czo2NDoiOGI1YmYzY2U3MWEyYjRmZTE1MTQwY2NjYjlmZmY5MzQ5NDFlYjhiMGY1ODA4Y2FkODkyNmE2NTE1YjlhOWRkMyI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjQ6InJvbGUiO3M6MToiMyI7czoxMDoiZXhwaXJ5RGF0ZSI7TjtzOjEwOiJjdXN0b21lcklkIjtzOjU6IjQwNDg2IjtzOjExOiJjdXN0b21lclNmbiI7czo1OiJocmxsYyI7czoxMzoiY3VzdG9tZXJFbWFpbCI7czoyMjoicm9ueUBob3VzdG9uLXJhZGFyLmNvbSI7czo4OiJyb2xlTmFtZSI7czo0OiJ1c2VyIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "400">
                <td id="user-400">400</td>
                <td>vinu_test_user</td>
                <td>vinu_test_user</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="63733">vinu_test</span>
                </td>
                <td class="createDate">08/08/2021 22:36                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="400" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="400" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDAwIjtzOjg6InVzZXJuYW1lIjtzOjE0OiJ2aW51X3Rlc3RfdXNlciI7czo0OiJuYW1lIjtzOjE0OiJ2aW51X3Rlc3RfdXNlciI7czo1OiJlbWFpbCI7czoxOToidmluZXNoLmN2QHRlYW10YS5pbiI7czo4OiJwYXNzd29yZCI7czo2MDoiJDJ5JDE0JC5DQ0tkMWtnTmdiRENxZmwwYnNTWHVDTlFZbjYwT3ljeGtRaEl3NEtDZXhyYWtrYnNOaE1hIjtzOjEwOiJjcmVhdGVEYXRlIjtzOjE5OiIyMDIxLTA4LTA4IDIyOjM2OjQ0IjtzOjQ6InNhbHQiO3M6NjQ6ImY0ZGYzNGYyNmQ1NDM4NDE3NWFjYTlmYzk4ZmQzY2FmMjk1NTA3NmYwNWYwMjQxYjZlZDMxZjUyZjNlNTgyOTUiO3M6ODoiaXNBY3RpdmUiO3M6MToiMSI7czo0OiJyb2xlIjtzOjE6IjMiO3M6MTA6ImV4cGlyeURhdGUiO047czoxMDoiY3VzdG9tZXJJZCI7czo1OiI2MzczMyI7czoxMToiY3VzdG9tZXJTZm4iO3M6OToidmludV90ZXN0IjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE5OiJ2aW5lc2guY3ZAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjQ6InVzZXIiO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "401">
                <td id="user-401">401</td>
                <td>vinu_test_sv1</td>
                <td>vinu_test_sv</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Supervisor</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="63733">vinu_test</span>
                </td>
                <td class="createDate">08/08/2021 22:46                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="401" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="401" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDAxIjtzOjg6InVzZXJuYW1lIjtzOjEzOiJ2aW51X3Rlc3Rfc3YxIjtzOjQ6Im5hbWUiO3M6MTI6InZpbnVfdGVzdF9zdiI7czo1OiJlbWFpbCI7czoxOToidmluZXNoLmN2QHRlYW10YS5pbiI7czo4OiJwYXNzd29yZCI7czo2MDoiJDJ5JDE0JG53bVFDOWw5eWVBSHJMVG1SNU1GZGV1QVoxeDlVZGE0Wkh6Y1lPZm1mU1JwU2FwVG8uQjVHIjtzOjEwOiJjcmVhdGVEYXRlIjtzOjE5OiIyMDIxLTA4LTA4IDIyOjQ2OjA1IjtzOjQ6InNhbHQiO3M6NjQ6Ijg0OGZlZGNjN2IxMmM5ZDAwZjU5NzMyOTBhMTE5NzA3YjJhNjdiMGU0Njk0MDUwZWIyMmE4NjZhOGMwZTM0YzIiO3M6ODoiaXNBY3RpdmUiO3M6MToiMSI7czo0OiJyb2xlIjtzOjE6IjIiO3M6MTA6ImV4cGlyeURhdGUiO047czoxMDoiY3VzdG9tZXJJZCI7czo1OiI2MzczMyI7czoxMToiY3VzdG9tZXJTZm4iO3M6OToidmludV90ZXN0IjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE5OiJ2aW5lc2guY3ZAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjEwOiJzdXBlcnZpc29yIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "402">
                <td id="user-402">402</td>
                <td>vinesh_test_new_supervisor001</td>
                <td>vinesh_test_new_supervisor001</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="63733">vinu_test</span>
                </td>
                <td class="createDate">08/08/2021 23:51                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="402" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="402" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDAyIjtzOjg6InVzZXJuYW1lIjtzOjI5OiJ2aW5lc2hfdGVzdF9uZXdfc3VwZXJ2aXNvcjAwMSI7czo0OiJuYW1lIjtzOjI5OiJ2aW5lc2hfdGVzdF9uZXdfc3VwZXJ2aXNvcjAwMSI7czo1OiJlbWFpbCI7czoxOToidmluZXNoLmN2QHRlYW10YS5pbiI7czo4OiJwYXNzd29yZCI7czo2MDoiJDJ5JDE0JG8xOFZIbkFzckxNLjdwTVVRUGkuak9QQjNRTUo1cTlmMWkxc1ZZRTR4cDlqVkF5NWdtQ3hHIjtzOjEwOiJjcmVhdGVEYXRlIjtzOjE5OiIyMDIxLTA4LTA4IDIzOjUxOjI2IjtzOjQ6InNhbHQiO3M6NjQ6ImI4NjI1NWMxNzVlNWRiY2U4Y2RiMmZlNGE0NDFjNmE1MDdiMmU2OTRmYzA2M2VmZDE4ZGMwOTZiOWFmMjJlYmUiO3M6ODoiaXNBY3RpdmUiO3M6MToiMSI7czo0OiJyb2xlIjtzOjE6IjMiO3M6MTA6ImV4cGlyeURhdGUiO047czoxMDoiY3VzdG9tZXJJZCI7czo1OiI2MzczMyI7czoxMToiY3VzdG9tZXJTZm4iO3M6OToidmludV90ZXN0IjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE5OiJ2aW5lc2guY3ZAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjQ6InVzZXIiO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "403">
                <td id="user-403">403</td>
                <td>Vinesh_c_ta_adminv</td>
                <td>Vinesh_c_ta_admin</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Admin</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="33661">vinesh_c_ta</span>
                </td>
                <td class="createDate">08/09/2021 00:18                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="403" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="403" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDAzIjtzOjg6InVzZXJuYW1lIjtzOjE4OiJWaW5lc2hfY190YV9hZG1pbnYiO3M6NDoibmFtZSI7czoxNzoiVmluZXNoX2NfdGFfYWRtaW4iO3M6NToiZW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJwYXNzd29yZCI7czo2MDoiJDJ5JDE0JENIZnExRWVUUk0uZW1YZ1ZQSmlnOE9YZVZFTlRveFRMWEt4MG1sem9aRmJkUzVBaG5NMDVTIjtzOjEwOiJjcmVhdGVEYXRlIjtzOjE5OiIyMDIxLTA4LTA5IDAwOjE4OjM3IjtzOjQ6InNhbHQiO3M6NjQ6Ijg5YmZmODc0MDI5Mzg1ZDc0YmJhNWUwN2QyNjI0ZjdiMzQ2MGU2MDZhYjMyNjgzYjFiMzYyZDQwOWQ5MmZiZTMiO3M6ODoiaXNBY3RpdmUiO3M6MToiMSI7czo0OiJyb2xlIjtzOjE6IjEiO3M6MTA6ImV4cGlyeURhdGUiO047czoxMDoiY3VzdG9tZXJJZCI7czo1OiIzMzY2MSI7czoxMToiY3VzdG9tZXJTZm4iO3M6MTE6InZpbmVzaF9jX3RhIjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE5OiJ2aW5lc2guY3ZAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjU6ImFkbWluIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "405">
                <td id="user-405">405</td>
                <td>vinesh_admin_h</td>
                <td>Vinesh admin</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Admin</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">08/09/2021 00:19                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="405" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="405" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDA1IjtzOjg6InVzZXJuYW1lIjtzOjE0OiJ2aW5lc2hfYWRtaW5faCI7czo0OiJuYW1lIjtzOjEyOiJWaW5lc2ggYWRtaW4iO3M6NToiZW1haWwiO3M6MTk6InZpbmVzaC5jdkB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCRYaEVWZG5PYnRtMEFITUVxYXowY2NPZk5uL01mVVkuLk9XNG9iUHBiSC5SYVU3UUFVWGdyeSI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0wOC0wOSAwMDoxOTowNyI7czo0OiJzYWx0IjtzOjY0OiI2YzUyN2MyNTNiMzcwYTE0OWM4MWE5MjFjM2JlNWJiOTA5N2QwNDdjM2YyMTUxZGViMDc2ZGI1NDM1YzQ3OWUzIjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIxIjtzOjEwOiJleHBpcnlEYXRlIjtOO3M6MTA6ImN1c3RvbWVySWQiO3M6MToiMSI7czoxMToiY3VzdG9tZXJTZm4iO3M6MTM6IkhvdXN0b25EZXYtVEEiO3M6MTM6ImN1c3RvbWVyRW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJyb2xlTmFtZSI7czo1OiJhZG1pbiI7czo1OiJyb2xlcyI7YTo0OntpOjE7czo1OiJhZG1pbiI7aToyO3M6MTA6InN1cGVydmlzb3IiO2k6MztzOjQ6InVzZXIiO2k6NDtzOjU6Imd1ZXN0Ijt9fQ==" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "330">
                <td id="user-330">330</td>
                <td>vinesh_c_ta_user</td>
                <td>vinesh_c_ta_user</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Supervisor</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="33661">vinesh_c_ta</span>
                </td>
                <td class="createDate">08/09/2021 05:14                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="330" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="330" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiMzMwIjtzOjg6InVzZXJuYW1lIjtzOjE2OiJ2aW5lc2hfY190YV91c2VyIjtzOjQ6Im5hbWUiO3M6MTY6InZpbmVzaF9jX3RhX3VzZXIiO3M6NToiZW1haWwiO3M6MTk6InZpbmVzaC5jdkB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCRXWGd0L3V1OVhCYllkR3BEak0zSWNPdmhJMkxibDFpWXFkL00xS1JocHRwbFVwZ2M5bEhlLiI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0wOC0wOSAwNToxNDozOCI7czo0OiJzYWx0IjtzOjY0OiIzZDU3YmY0YjVkNDg2MTVkZGIxYjVmNTFlYjliOTE0MTc2N2QxYjFjNTM3M2ZlNjA2YzllMDkzNGY4NmUxYzJlIjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIyIjtzOjEwOiJleHBpcnlEYXRlIjtOO3M6MTA6ImN1c3RvbWVySWQiO3M6NToiMzM2NjEiO3M6MTE6ImN1c3RvbWVyU2ZuIjtzOjExOiJ2aW5lc2hfY190YSI7czoxMzoiY3VzdG9tZXJFbWFpbCI7czoxOToidmluZXNoLmN2QHRlYW10YS5pbiI7czo4OiJyb2xlTmFtZSI7czoxMDoic3VwZXJ2aXNvciI7czo1OiJyb2xlcyI7YTo0OntpOjE7czo1OiJhZG1pbiI7aToyO3M6MTA6InN1cGVydmlzb3IiO2k6MztzOjQ6InVzZXIiO2k6NDtzOjU6Imd1ZXN0Ijt9fQ==" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "407">
                <td id="user-407">407</td>
                <td>hguest</td>
                <td>hguest</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Guest</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">08/12/2021 06:26                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="407" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="407" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDA3IjtzOjg6InVzZXJuYW1lIjtzOjY6ImhndWVzdCI7czo0OiJuYW1lIjtzOjY6ImhndWVzdCI7czo1OiJlbWFpbCI7czoxOToidmluZXNoLmN2QHRlYW10YS5pbiI7czo4OiJwYXNzd29yZCI7czo2MDoiJDJ5JDE0JEIyVW9uMmlsazJRU09SUFVhTXVkWC5WdXZ2UHJMeFFDNXFWN0tUalFQN2NlUVhvMWVhZlltIjtzOjEwOiJjcmVhdGVEYXRlIjtzOjE5OiIyMDIxLTA4LTEyIDA2OjI2OjMzIjtzOjQ6InNhbHQiO3M6NjQ6ImYyNTIxMDFmOTBkNGMzOGJhMTIzYWU0ODczOTRkNzE1Mzg1MGY5Y2YxNjhhNDRmZDM1MDZjZmI4NDlkMzFiNzMiO3M6ODoiaXNBY3RpdmUiO3M6MToiMSI7czo0OiJyb2xlIjtzOjE6IjQiO3M6MTA6ImV4cGlyeURhdGUiO047czoxMDoiY3VzdG9tZXJJZCI7czoxOiIxIjtzOjExOiJjdXN0b21lclNmbiI7czoxMzoiSG91c3RvbkRldi1UQSI7czoxMzoiY3VzdG9tZXJFbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjU6Imd1ZXN0IjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="highlight" data-id = "423">
                <td id="user-423">423</td>
                <td>vinesh_c_ta0</td>
                <td>vinesh_c_ta0</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-times color-red"></i></td>
                <td>Supervisor</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="16378">vinesh_c_ta0</span>
                </td>
                <td class="createDate">08/18/2021 06:15                </td>
                <td class="actions">
                                                        
                  <a href="" data-id="423" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDIzIjtzOjg6InVzZXJuYW1lIjtzOjEyOiJ2aW5lc2hfY190YTAiO3M6NDoibmFtZSI7czoxMjoidmluZXNoX2NfdGEwIjtzOjU6ImVtYWlsIjtzOjE5OiJ2aW5lc2guY3ZAdGVhbXRhLmluIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkSGRrTEQwWEJTM3VkbHYuWkRQaTBqLjVsWWJTZWhiOFM0YTVJWmtiSXIxUWY3bWxlR1AwaFciO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMDgtMTggMDY6MTU6MzkiO3M6NDoic2FsdCI7czo2NDoiZTEzMWE5ZmFmMzc2MDA5OTg3NTAxN2U3ODcwYzNlMzE5YTYzNjYzMzc0ODg2YWMwZjk5NGQ5NWUzM2I3ZGMwYiI7czo4OiJpc0FjdGl2ZSI7czoxOiIwIjtzOjQ6InJvbGUiO3M6MToiMiI7czoxMDoiZXhwaXJ5RGF0ZSI7TjtzOjEwOiJjdXN0b21lcklkIjtzOjU6IjE2Mzc4IjtzOjExOiJjdXN0b21lclNmbiI7czoxMjoidmluZXNoX2NfdGEwIjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE5OiJ2aW5lc2guY3ZAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjEwOiJzdXBlcnZpc29yIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="highlight" data-id = "424">
                <td id="user-424">424</td>
                <td>houston4</td>
                <td>Dipin Ayyappan</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-times color-red"></i></td>
                <td>Supervisor</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="34694">houston4</span>
                </td>
                <td class="createDate">08/18/2021 07:30                </td>
                <td class="actions">
                                                        
                  <a href="" data-id="424" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDI0IjtzOjg6InVzZXJuYW1lIjtzOjg6ImhvdXN0b240IjtzOjQ6Im5hbWUiO3M6MTQ6IkRpcGluIEF5eWFwcGFuIjtzOjU6ImVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCRYeENCbmI0SnFzb0Z4NzFKbURZZTRPUGZzRGE3RC5OOGpJc1NyU1AwSDlPa2xudXZWSGV4QyI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0wOC0xOCAwNzozMDo0OCI7czo0OiJzYWx0IjtzOjY0OiIzNGFlNGQ0MTgyODc3M2U0NGU3YmJkOWJiMmE5MmFjYTJmNmYwYTQ2MDNmMjg5ZjA4MTVlN2RiZmRkNjc3ODA3IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjAiO3M6NDoicm9sZSI7czoxOiIyIjtzOjEwOiJleHBpcnlEYXRlIjtOO3M6MTA6ImN1c3RvbWVySWQiO3M6NToiMzQ2OTQiO3M6MTE6ImN1c3RvbWVyU2ZuIjtzOjg6ImhvdXN0b240IjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicm9sZU5hbWUiO3M6MTA6InN1cGVydmlzb3IiO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "425">
                <td id="user-425">425</td>
                <td>houston5</td>
                <td>Dipin Ayyappan</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Supervisor</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="26261">houston5</span>
                </td>
                <td class="createDate">08/18/2021 22:43                </td>
                <td class="actions">
                                                        
                  <a href="" data-id="425" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDI1IjtzOjg6InVzZXJuYW1lIjtzOjg6ImhvdXN0b241IjtzOjQ6Im5hbWUiO3M6MTQ6IkRpcGluIEF5eWFwcGFuIjtzOjU6ImVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCRNVnJPMUR1bTh3d1B1bnNURGhYOWt1TktrL0c4OVJ0eVBaTEkzYVNUTlF6UDV0M244eUM1dSI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0wOC0xOCAyMjo0MzoxMSI7czo0OiJzYWx0IjtzOjY0OiJlMjgzMDNmNmU5MmI5MzA3ODdjZjYwOTdiMTIxMDhhODNlYmEzM2Q3MzNlYWI1YTdhMTI5NjUwNmQ3MTQ2NDhjIjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIyIjtzOjEwOiJleHBpcnlEYXRlIjtOO3M6MTA6ImN1c3RvbWVySWQiO3M6NToiMjYyNjEiO3M6MTE6ImN1c3RvbWVyU2ZuIjtzOjg6ImhvdXN0b241IjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicm9sZU5hbWUiO3M6MTA6InN1cGVydmlzb3IiO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "426">
                <td id="user-426">426</td>
                <td>vinu_cus</td>
                <td>vinu_cus</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Supervisor</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="47165">vinu_cus</span>
                </td>
                <td class="createDate">08/18/2021 22:43                </td>
                <td class="actions">
                                                        
                  <a href="" data-id="426" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDI2IjtzOjg6InVzZXJuYW1lIjtzOjg6InZpbnVfY3VzIjtzOjQ6Im5hbWUiO3M6ODoidmludV9jdXMiO3M6NToiZW1haWwiO3M6MTk6InZpbmVzaC5jdkB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCRMMkg4VVBMcG8ucTZPbkxsWXBickVlNHloQmNNeVRGNVV5NGpVZFFIMHA5cXNTaHJzZy5TaSI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0wOC0xOCAyMjo0MzoxNiI7czo0OiJzYWx0IjtzOjY0OiIzY2FjZmEwMDVmYWY3NzBhNjFmZjcxZDkzN2RiMGY5YzdjOTVkNDI4MWYxN2FjZDRhNzY1NzZmOWJlYjhkNDlmIjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIyIjtzOjEwOiJleHBpcnlEYXRlIjtOO3M6MTA6ImN1c3RvbWVySWQiO3M6NToiNDcxNjUiO3M6MTE6ImN1c3RvbWVyU2ZuIjtzOjg6InZpbnVfY3VzIjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE5OiJ2aW5lc2guY3ZAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjEwOiJzdXBlcnZpc29yIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "427">
                <td id="user-427">427</td>
                <td>vinu_cus_user</td>
                <td>vinu_cus_user</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="47165">vinu_cus</span>
                </td>
                <td class="createDate">08/18/2021 22:44                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="427" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="427" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDI3IjtzOjg6InVzZXJuYW1lIjtzOjEzOiJ2aW51X2N1c191c2VyIjtzOjQ6Im5hbWUiO3M6MTM6InZpbnVfY3VzX3VzZXIiO3M6NToiZW1haWwiO3M6MTk6InZpbmVzaC5jdkB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCR2OGZpbmNrTmpvOWRUamtaTms1MmV1eGFtU010QTVZRm1WQ0Z6Z1ZSeE4vb08welFRL3VpeSI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0wOC0xOCAyMjo0NDowMiI7czo0OiJzYWx0IjtzOjY0OiJmOTliZjcxODgwNjlmODlhOGE5MjQ5NzQ5ZWIwNTU4Zjk2NThjODA2ODI1MmQ0NDQ3YjY0NmNjNGVhOGNiNmYzIjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIzIjtzOjEwOiJleHBpcnlEYXRlIjtOO3M6MTA6ImN1c3RvbWVySWQiO3M6NToiNDcxNjUiO3M6MTE6ImN1c3RvbWVyU2ZuIjtzOjg6InZpbnVfY3VzIjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE5OiJ2aW5lc2guY3ZAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjQ6InVzZXIiO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "428">
                <td id="user-428">428</td>
                <td>houston5_admin</td>
                <td>houston5_admin</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Admin</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="26261">houston5</span>
                </td>
                <td class="createDate">08/18/2021 22:44                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="428" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="428" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDI4IjtzOjg6InVzZXJuYW1lIjtzOjE0OiJob3VzdG9uNV9hZG1pbiI7czo0OiJuYW1lIjtzOjE0OiJob3VzdG9uNV9hZG1pbiI7czo1OiJlbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkSnNjS1FudGpVYWZoc3QwY3UucHZpT0VZa0hTY1h2YnZISno1bHJrQUtZZU9xdUZvWDdNaksiO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMDgtMTggMjI6NDQ6MTAiO3M6NDoic2FsdCI7czo2NDoiOWExY2Q1NDMyYmYxMWZjNzUwOWQ2NWM2N2YzMjJhNTlhMmRlNWU0ZGI0ZjU1YWI4M2I5YjhmNjEwNGM5YWI1YyI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjQ6InJvbGUiO3M6MToiMSI7czoxMDoiZXhwaXJ5RGF0ZSI7TjtzOjEwOiJjdXN0b21lcklkIjtzOjU6IjI2MjYxIjtzOjExOiJjdXN0b21lclNmbiI7czo4OiJob3VzdG9uNSI7czoxMzoiY3VzdG9tZXJFbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjU6ImFkbWluIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "429">
                <td id="user-429">429</td>
                <td>vinu_cus_supervisor</td>
                <td>vinu_cus_supervisor</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Supervisor</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="47165">vinu_cus</span>
                </td>
                <td class="createDate">08/18/2021 22:44                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="429" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="429" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDI5IjtzOjg6InVzZXJuYW1lIjtzOjE5OiJ2aW51X2N1c19zdXBlcnZpc29yIjtzOjQ6Im5hbWUiO3M6MTk6InZpbnVfY3VzX3N1cGVydmlzb3IiO3M6NToiZW1haWwiO3M6MTk6InZpbmVzaC5jdkB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCRuSHpWS3kyOEZEdnk5ckNNSm9WbGd1M01mY2RGR1hpZ2UwaGt1UjVoNEtvZE5tdXFTWHRldSI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0wOC0xOCAyMjo0NDo1MiI7czo0OiJzYWx0IjtzOjY0OiI4ZTUxZDUxNGZmODEyZGM5MTY2MjJhZDk1MzdhNWVmYTQ3NGMzYmQ3OWE5NGQyOTU4MTJhZDI5NGViYzkzOWI1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIyIjtzOjEwOiJleHBpcnlEYXRlIjtOO3M6MTA6ImN1c3RvbWVySWQiO3M6NToiNDcxNjUiO3M6MTE6ImN1c3RvbWVyU2ZuIjtzOjg6InZpbnVfY3VzIjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE5OiJ2aW5lc2guY3ZAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjEwOiJzdXBlcnZpc29yIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "430">
                <td id="user-430">430</td>
                <td>vinu_cus_admin</td>
                <td>vinu_cus_admin</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Admin</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="47165">vinu_cus</span>
                </td>
                <td class="createDate">08/18/2021 22:49                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="430" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="430" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDMwIjtzOjg6InVzZXJuYW1lIjtzOjE0OiJ2aW51X2N1c19hZG1pbiI7czo0OiJuYW1lIjtzOjE0OiJ2aW51X2N1c19hZG1pbiI7czo1OiJlbWFpbCI7czoxOToidmluZXNoLmN2QHRlYW10YS5pbiI7czo4OiJwYXNzd29yZCI7czo2MDoiJDJ5JDE0JHVxNkZoZWhQaGQ3elp2TUJ6ZVJicS5mRHhRVHRHTllmUTY3Wk5pUFN3elNnOVJicmN3ZEZTIjtzOjEwOiJjcmVhdGVEYXRlIjtzOjE5OiIyMDIxLTA4LTE4IDIyOjQ5OjAzIjtzOjQ6InNhbHQiO3M6NjQ6ImY2MjAyODg3MDEwYTkwOGNkZWYyNDExMDMyMTQ4OWJmN2QyZTBkM2E1NjQ2N2EwOGQ5YjhkMTlhZDQ4YzMzYjQiO3M6ODoiaXNBY3RpdmUiO3M6MToiMSI7czo0OiJyb2xlIjtzOjE6IjEiO3M6MTA6ImV4cGlyeURhdGUiO047czoxMDoiY3VzdG9tZXJJZCI7czo1OiI0NzE2NSI7czoxMToiY3VzdG9tZXJTZm4iO3M6ODoidmludV9jdXMiO3M6MTM6ImN1c3RvbWVyRW1haWwiO3M6MTk6InZpbmVzaC5jdkB0ZWFtdGEuaW4iO3M6ODoicm9sZU5hbWUiO3M6NToiYWRtaW4iO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "393">
                <td id="user-393">393</td>
                <td>testing_Dipin2</td>
                <td>testing_Dipin2</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Supervisor</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="38305">houston</span>
                </td>
                <td class="createDate">08/19/2021 12:51                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="393" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="393" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiMzkzIjtzOjg6InVzZXJuYW1lIjtzOjE0OiJ0ZXN0aW5nX0RpcGluMiI7czo0OiJuYW1lIjtzOjE0OiJ0ZXN0aW5nX0RpcGluMiI7czo1OiJlbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkU095L0FKWm8vWk5TRVl1OVJ4ckxMdWpNYXVMNU9OQ01pZGFkWDlyN1BjZVozcm9MbVpwNVciO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMDgtMTkgMTI6NTE6MzAiO3M6NDoic2FsdCI7czo2NDoiODY0Mjg1MzZlOGUyOWQ3ZjgyM2QzNjQ0ZmEwYWNkNjc3ZWY0NDM2ZGE4ZDhlMmY2ZmY4Yzg5MmRjMmRiNWY2MCI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjQ6InJvbGUiO3M6MToiMiI7czoxMDoiZXhwaXJ5RGF0ZSI7TjtzOjEwOiJjdXN0b21lcklkIjtzOjU6IjM4MzA1IjtzOjExOiJjdXN0b21lclNmbiI7czo3OiJob3VzdG9uIjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicm9sZU5hbWUiO3M6MTA6InN1cGVydmlzb3IiO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "406">
                <td id="user-406">406</td>
                <td>vinu_test_admin</td>
                <td>vinu_test_admin</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Admin</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="43206">Dipin</span>
                </td>
                <td class="createDate">08/19/2021 12:52                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="406" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="406" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDA2IjtzOjg6InVzZXJuYW1lIjtzOjE1OiJ2aW51X3Rlc3RfYWRtaW4iO3M6NDoibmFtZSI7czoxNToidmludV90ZXN0X2FkbWluIjtzOjU6ImVtYWlsIjtzOjE5OiJ2aW5lc2guY3ZAdGVhbXRhLmluIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkdEEwbWsvT1B6MTlFOTRuZnE3NWJpdTV0VlhLdEhKNXRKLzBVR01jaVdOUGM5S0kua0tOdWUiO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMDgtMTkgMTI6NTI6NTEiO3M6NDoic2FsdCI7czo2NDoiZWEyOTk3OGQzZjE4MTAyYWM0ODA2Zjk1OTMzNDExMDUyZTIxOTViODU1NGNkMjE4ODMwMjI1NmI4YzNlM2RjNCI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjQ6InJvbGUiO3M6MToiMSI7czoxMDoiZXhwaXJ5RGF0ZSI7TjtzOjEwOiJjdXN0b21lcklkIjtzOjU6IjQzMjA2IjtzOjExOiJjdXN0b21lclNmbiI7czo1OiJEaXBpbiI7czoxMzoiY3VzdG9tZXJFbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjU6ImFkbWluIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "412">
                <td id="user-412">412</td>
                <td>guestofsupereadmin</td>
                <td>guestofsupereadmin</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Guest</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="38305">houston</span>
                </td>
                <td class="createDate">08/19/2021 12:53                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="412" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="412" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDEyIjtzOjg6InVzZXJuYW1lIjtzOjE4OiJndWVzdG9mc3VwZXJlYWRtaW4iO3M6NDoibmFtZSI7czoxODoiZ3Vlc3RvZnN1cGVyZWFkbWluIjtzOjU6ImVtYWlsIjtzOjE5OiJ2aW5lc2guY3ZAdGVhbXRhLmluIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkSHlCczI4QUEzNHhBQVRsdEhQdWRWT3dMRDRZdjFCcG4vcU1xUE55MlNTTmZ4YVZCd2tiYWUiO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMDgtMTkgMTI6NTM6NTYiO3M6NDoic2FsdCI7czo2NDoiZjIyYWFlNjA3YWRmNTY5NTJjZjdmYTViOTZlYWYxN2MwOTBlM2YxZTA4OTg1YmExZTJmOTNhYzViNjkzMzJmNyI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjQ6InJvbGUiO3M6MToiNCI7czoxMDoiZXhwaXJ5RGF0ZSI7TjtzOjEwOiJjdXN0b21lcklkIjtzOjU6IjM4MzA1IjtzOjExOiJjdXN0b21lclNmbiI7czo3OiJob3VzdG9uIjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicm9sZU5hbWUiO3M6NToiZ3Vlc3QiO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "420">
                <td id="user-420">420</td>
                <td>HoustonDev_Guest5</td>
                <td>HoustonDev-TA</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="38305">houston</span>
                </td>
                <td class="createDate">08/19/2021 13:02                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="420" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="420" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDIwIjtzOjg6InVzZXJuYW1lIjtzOjE3OiJIb3VzdG9uRGV2X0d1ZXN0NSI7czo0OiJuYW1lIjtzOjEzOiJIb3VzdG9uRGV2LVRBIjtzOjU6ImVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCRjeXNnb254a0NocWFJMXRxRkRsLkllNnBCdW1adC9VemdBUkUvTFhmNHlWWmVyMEJYRjBzaSI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0wOC0xOSAxMzowMjo0MSI7czo0OiJzYWx0IjtzOjY0OiJjODczZjI1ZWE4NjhjNDM5ZDcwZmY2NjUyMjUyMjlkOTdkNzU1YTc5N2MyZTE4MzExMjExMDAzYmE0OGFmNmUxIjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIzIjtzOjEwOiJleHBpcnlEYXRlIjtOO3M6MTA6ImN1c3RvbWVySWQiO3M6NToiMzgzMDUiO3M6MTE6ImN1c3RvbWVyU2ZuIjtzOjc6ImhvdXN0b24iO3M6MTM6ImN1c3RvbWVyRW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJyb2xlTmFtZSI7czo0OiJ1c2VyIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "431">
                <td id="user-431">431</td>
                <td>Dipin_User999</td>
                <td>Dipin Ayyappan</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="43206">Dipin</span>
                </td>
                <td class="createDate">10/04/2021 02:43                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="431" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="431" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDMxIjtzOjg6InVzZXJuYW1lIjtzOjEzOiJEaXBpbl9Vc2VyOTk5IjtzOjQ6Im5hbWUiO3M6MTQ6IkRpcGluIEF5eWFwcGFuIjtzOjU6ImVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCRnYVljOG9zZWMvWHhnY01oZ3pBU3plYm4vdVJ3dWNkSE5icDhoSEo0dHo0ZDMyRHQvOWZkYSI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0xMC0wNCAwMjo0MzoyNSI7czo0OiJzYWx0IjtzOjY0OiJmMDJlNWM4OTIwYzgwYzgzODlhMTlmNTZlYTU2MzNkNDVlNTNkZGJkZTYzMzRhZWFhMDUxN2MxZGRiZDY4ZThlIjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIzIjtzOjEwOiJleHBpcnlEYXRlIjtOO3M6MTA6ImN1c3RvbWVySWQiO3M6NToiNDMyMDYiO3M6MTE6ImN1c3RvbWVyU2ZuIjtzOjU6IkRpcGluIjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicm9sZU5hbWUiO3M6NDoidXNlciI7czo1OiJyb2xlcyI7YTo0OntpOjE7czo1OiJhZG1pbiI7aToyO3M6MTA6InN1cGVydmlzb3IiO2k6MztzOjQ6InVzZXIiO2k6NDtzOjU6Imd1ZXN0Ijt9fQ==" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "432">
                <td id="user-432">432</td>
                <td>anakha</td>
                <td>Anakha</td>
                <td>anakha.j@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">10/11/2021 03:00                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="432" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="432" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDMyIjtzOjg6InVzZXJuYW1lIjtzOjY6ImFuYWtoYSI7czo0OiJuYW1lIjtzOjY6IkFuYWtoYSI7czo1OiJlbWFpbCI7czoxODoiYW5ha2hhLmpAdGVhbXRhLmluIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkdlN1WTF6SGtDY1ZLeEpqaHlCazVqT0wyejNSLnVLbkFLNXRhWVNSZDVmMDZJVWQybnpxVXkiO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMTAtMTEgMDM6MDA6MTYiO3M6NDoic2FsdCI7czo2NDoiZWI0Yzc4Njc3NzhlZmJjOTFhNWMxYWU4NTY2M2I0ODI4YmYzMjI0NDg3OTUwMjc2MWJlNzdiMDY5NWNlOWI1ZiI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjQ6InJvbGUiO3M6MToiMyI7czoxMDoiZXhwaXJ5RGF0ZSI7TjtzOjEwOiJjdXN0b21lcklkIjtzOjE6IjEiO3M6MTE6ImN1c3RvbWVyU2ZuIjtzOjEzOiJIb3VzdG9uRGV2LVRBIjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicm9sZU5hbWUiO3M6NDoidXNlciI7czo1OiJyb2xlcyI7YTo0OntpOjE7czo1OiJhZG1pbiI7aToyO3M6MTA6InN1cGVydmlzb3IiO2k6MztzOjQ6InVzZXIiO2k6NDtzOjU6Imd1ZXN0Ijt9fQ==" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "433">
                <td id="user-433">433</td>
                <td>Dipin_testing_password</td>
                <td>Dipin_testing_password</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">10/13/2021 12:13                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="433" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="433" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDMzIjtzOjg6InVzZXJuYW1lIjtzOjIyOiJEaXBpbl90ZXN0aW5nX3Bhc3N3b3JkIjtzOjQ6Im5hbWUiO3M6MjI6IkRpcGluX3Rlc3RpbmdfcGFzc3dvcmQiO3M6NToiZW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJwYXNzd29yZCI7czo2MDoiJDJ5JDE0JFl3MDNXMWlzbzQvZTdyU1QzZUJDaU9sLlo5dVlIY25qcHpvV3F5Ny9JUVcyRFMzWU9yMlhTIjtzOjEwOiJjcmVhdGVEYXRlIjtzOjE5OiIyMDIxLTEwLTEzIDEyOjEzOjIwIjtzOjQ6InNhbHQiO3M6NjQ6IjQwOWNiMGFkZDZlZmJkNGE5MGM4ZmUyMzk0ZGU4YWM3OTkwODY1YjE3NzdkMjUxYWNhMGI3NzliYTcyZjM4MzMiO3M6ODoiaXNBY3RpdmUiO3M6MToiMSI7czo0OiJyb2xlIjtzOjE6IjMiO3M6MTA6ImV4cGlyeURhdGUiO3M6MTk6IjIwMjEtMTAtMjAgMTI6MTM6MjEiO3M6MTA6ImN1c3RvbWVySWQiO3M6MToiMSI7czoxMToiY3VzdG9tZXJTZm4iO3M6MTM6IkhvdXN0b25EZXYtVEEiO3M6MTM6ImN1c3RvbWVyRW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJyb2xlTmFtZSI7czo0OiJ1c2VyIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "434">
                <td id="user-434">434</td>
                <td>vinesh.cv</td>
                <td>vinesh.cv</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">10/14/2021 00:54                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="434" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="434" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDM0IjtzOjg6InVzZXJuYW1lIjtzOjk6InZpbmVzaC5jdiI7czo0OiJuYW1lIjtzOjk6InZpbmVzaC5jdiI7czo1OiJlbWFpbCI7czoxOToidmluZXNoLmN2QHRlYW10YS5pbiI7czo4OiJwYXNzd29yZCI7czo2MDoiJDJ5JDE0JGVFQWMxazJzYXczSWh6ajRRaEpmTk8xbEs3ckQxT2p5VzBSdEpmMHFSVXNXYThJNlg4RE4yIjtzOjEwOiJjcmVhdGVEYXRlIjtzOjE5OiIyMDIxLTEwLTE0IDAwOjU0OjI3IjtzOjQ6InNhbHQiO3M6NjQ6ImZkZTYzY2JjNDc3MzhiZmJhYmRlYmRjMTMxYTUyNjUyZjZmNzQ3ODE5NWI2ODIxMmFmM2I2YzU2NGI1NzZlZTgiO3M6ODoiaXNBY3RpdmUiO3M6MToiMSI7czo0OiJyb2xlIjtzOjE6IjMiO3M6MTA6ImV4cGlyeURhdGUiO047czoxMDoiY3VzdG9tZXJJZCI7czoxOiIxIjtzOjExOiJjdXN0b21lclNmbiI7czoxMzoiSG91c3RvbkRldi1UQSI7czoxMzoiY3VzdG9tZXJFbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjQ6InVzZXIiO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "435">
                <td id="user-435">435</td>
                <td>vinu.cv</td>
                <td>vinu.cv</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">10/14/2021 01:19                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="435" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="435" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDM1IjtzOjg6InVzZXJuYW1lIjtzOjc6InZpbnUuY3YiO3M6NDoibmFtZSI7czo3OiJ2aW51LmN2IjtzOjU6ImVtYWlsIjtzOjE5OiJ2aW5lc2guY3ZAdGVhbXRhLmluIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkTDF0N2h6c0VEdGFYdjBGRk1GdVhqLlNveC8zajhsRDZEY3B3aTMvcUJmVFc0d053aUxGSUciO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMTAtMTQgMDE6MTk6NDciO3M6NDoic2FsdCI7czo2NDoiMDE4NWQ0YmU2YjYzYmFkMzU3ZmVlOGIwMTE3ZTAxOWYwODg1MjM4Yjc1MTJhOTNmYjA5MGI0OGNhYzkwNDBiNCI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjQ6InJvbGUiO3M6MToiMyI7czoxMDoiZXhwaXJ5RGF0ZSI7TjtzOjEwOiJjdXN0b21lcklkIjtzOjE6IjEiO3M6MTE6ImN1c3RvbWVyU2ZuIjtzOjEzOiJIb3VzdG9uRGV2LVRBIjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicm9sZU5hbWUiO3M6NDoidXNlciI7czo1OiJyb2xlcyI7YTo0OntpOjE7czo1OiJhZG1pbiI7aToyO3M6MTA6InN1cGVydmlzb3IiO2k6MztzOjQ6InVzZXIiO2k6NDtzOjU6Imd1ZXN0Ijt9fQ==" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "436">
                <td id="user-436">436</td>
                <td>anjali</td>
                <td>anjali</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">10/14/2021 01:24                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="436" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="436" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDM2IjtzOjg6InVzZXJuYW1lIjtzOjY6ImFuamFsaSI7czo0OiJuYW1lIjtzOjY6ImFuamFsaSI7czo1OiJlbWFpbCI7czoxOToidmluZXNoLmN2QHRlYW10YS5pbiI7czo4OiJwYXNzd29yZCI7czo2MDoiJDJ5JDE0JEh3RXgwTmZ6cUpKekJVVkIxTXRSUE9SRUxHYnlrYWVkeFFkdTZhb2tTaVguQ3IvL0xxVFJTIjtzOjEwOiJjcmVhdGVEYXRlIjtzOjE5OiIyMDIxLTEwLTE0IDAxOjI0OjE5IjtzOjQ6InNhbHQiO3M6NjQ6IjlmNzI1M2ZjOGE1MjJiMTM1YWQ2MWVjMTgxNzM5ZjA3NzBjZmFkOGVhOWUzYTA1ZjYwN2I3ZmU2ZGFiYzE5OGUiO3M6ODoiaXNBY3RpdmUiO3M6MToiMSI7czo0OiJyb2xlIjtzOjE6IjMiO3M6MTA6ImV4cGlyeURhdGUiO047czoxMDoiY3VzdG9tZXJJZCI7czoxOiIxIjtzOjExOiJjdXN0b21lclNmbiI7czoxMzoiSG91c3RvbkRldi1UQSI7czoxMzoiY3VzdG9tZXJFbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjQ6InVzZXIiO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "437">
                <td id="user-437">437</td>
                <td>anakha1</td>
                <td>anakha1</td>
                <td>anakha.j@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">10/17/2021 23:13                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="437" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="437" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDM3IjtzOjg6InVzZXJuYW1lIjtzOjc6ImFuYWtoYTEiO3M6NDoibmFtZSI7czo3OiJhbmFraGExIjtzOjU6ImVtYWlsIjtzOjE4OiJhbmFraGEuakB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCR6ZmdsaGpZQkwvN0ZOQ2NDRUVWVlRlQ2RDQnlxMEMyQjVvd20zbHV4ZjlkNS5Wa3YxeXdDNiI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0xMC0xNyAyMzoxMzowNSI7czo0OiJzYWx0IjtzOjY0OiI3ZTVhZWYxMDMzNWM5M2Y1YmRkZjU0OWFjOTE1OGZmYWM1YWQzYmJmNTZiYzg0NThhMjQwYjA4YjU3YzJhMmRiIjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIzIjtzOjEwOiJleHBpcnlEYXRlIjtOO3M6MTA6ImN1c3RvbWVySWQiO3M6MToiMSI7czoxMToiY3VzdG9tZXJTZm4iO3M6MTM6IkhvdXN0b25EZXYtVEEiO3M6MTM6ImN1c3RvbWVyRW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJyb2xlTmFtZSI7czo0OiJ1c2VyIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "438">
                <td id="user-438">438</td>
                <td>anakha2</td>
                <td>anakha2</td>
                <td>anakha.j@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">10/17/2021 23:14                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="438" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="438" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDM4IjtzOjg6InVzZXJuYW1lIjtzOjc6ImFuYWtoYTIiO3M6NDoibmFtZSI7czo3OiJhbmFraGEyIjtzOjU6ImVtYWlsIjtzOjE4OiJhbmFraGEuakB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCRhcHRsUS5YOS4zMmsyaTJnSk5MMXkuNXc0NHRDb1plOUFhaW5jeWZUeHQ2eXkvVEN0TUNDNiI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0xMC0xNyAyMzoxNDoyMSI7czo0OiJzYWx0IjtzOjY0OiJmMmIyYWEzM2Q2OGEyMWM1Yjc3OTkxMjY5ZDRlZmViZTQ4OWI5OTZkZWFhYTE1MmU0ZDA1Nzc5OWNkN2FlNzY1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIzIjtzOjEwOiJleHBpcnlEYXRlIjtOO3M6MTA6ImN1c3RvbWVySWQiO3M6MToiMSI7czoxMToiY3VzdG9tZXJTZm4iO3M6MTM6IkhvdXN0b25EZXYtVEEiO3M6MTM6ImN1c3RvbWVyRW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJyb2xlTmFtZSI7czo0OiJ1c2VyIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "439">
                <td id="user-439">439</td>
                <td>manoj</td>
                <td>manoj</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">10/17/2021 23:23                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="439" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="439" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDM5IjtzOjg6InVzZXJuYW1lIjtzOjU6Im1hbm9qIjtzOjQ6Im5hbWUiO3M6NToibWFub2oiO3M6NToiZW1haWwiO3M6MTk6InZpbmVzaC5jdkB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCRxWXRwRjNGMEhaLllHcldicWM4dGxlQTJoLjNmYjlqNHhSZ1IvWkxXcFhBTFpqMXB4LkROVyI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0xMC0xNyAyMzoyMzo0MCI7czo0OiJzYWx0IjtzOjY0OiJkZDQzMTBhNThiYWE5NmVkOTE1NmUwZTRhZTEwYzgwNzYyOTU2OWNhMzdlNjM2ZDM0MTI2NTVmZjE3N2QwOWYzIjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIzIjtzOjEwOiJleHBpcnlEYXRlIjtzOjE5OiIyMDIxLTEwLTI0IDIzOjIzOjQxIjtzOjEwOiJjdXN0b21lcklkIjtzOjE6IjEiO3M6MTE6ImN1c3RvbWVyU2ZuIjtzOjEzOiJIb3VzdG9uRGV2LVRBIjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicm9sZU5hbWUiO3M6NDoidXNlciI7czo1OiJyb2xlcyI7YTo0OntpOjE7czo1OiJhZG1pbiI7aToyO3M6MTA6InN1cGVydmlzb3IiO2k6MztzOjQ6InVzZXIiO2k6NDtzOjU6Imd1ZXN0Ijt9fQ==" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "440">
                <td id="user-440">440</td>
                <td>anakha3</td>
                <td>anakha3</td>
                <td>anakha.j@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">10/18/2021 11:26                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="440" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="440" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDQwIjtzOjg6InVzZXJuYW1lIjtzOjc6ImFuYWtoYTMiO3M6NDoibmFtZSI7czo3OiJhbmFraGEzIjtzOjU6ImVtYWlsIjtzOjE4OiJhbmFraGEuakB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCRNNE1nMnliaW9NRW9Vb29uUFVuTHB1eUhzSzB2cE5jbzJndVRoMVJIUnNCMzdYOVJhMmZpMiI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0xMC0xOCAxMToyNjozOCI7czo0OiJzYWx0IjtzOjY0OiIyODc1OGI5NWRjYjM5NGU4NjAxZDM5ZTYzZTIzYzM1NTRiOGY4ZGYyYjI2NGZmNzE0MTlkZWNkMzU5NjBmZTZiIjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIzIjtzOjEwOiJleHBpcnlEYXRlIjtOO3M6MTA6ImN1c3RvbWVySWQiO3M6MToiMSI7czoxMToiY3VzdG9tZXJTZm4iO3M6MTM6IkhvdXN0b25EZXYtVEEiO3M6MTM6ImN1c3RvbWVyRW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJyb2xlTmFtZSI7czo0OiJ1c2VyIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "441">
                <td id="user-441">441</td>
                <td>anakha4</td>
                <td>anakha4</td>
                <td>anakha.j@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">10/17/2021 23:57                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="441" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="441" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDQxIjtzOjg6InVzZXJuYW1lIjtzOjc6ImFuYWtoYTQiO3M6NDoibmFtZSI7czo3OiJhbmFraGE0IjtzOjU6ImVtYWlsIjtzOjE4OiJhbmFraGEuakB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCRSMjdDeFp0SC9pMExIeHhVdTFCODdPY1diaDE1MHZhZ1JQeExOUFg3NGpBd1lIZWszVW5FbSI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0xMC0xNyAyMzo1NzozNyI7czo0OiJzYWx0IjtzOjY0OiIwZGM4NTFhZjk4YzQwOGY1ZGY3NDQ3MzkyYmUxNzdkZTM1NzUxOWJjMTU4Y2E3MDY3YTgwMzVlOTBjMGFkMmQ4IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIzIjtzOjEwOiJleHBpcnlEYXRlIjtOO3M6MTA6ImN1c3RvbWVySWQiO3M6MToiMSI7czoxMToiY3VzdG9tZXJTZm4iO3M6MTM6IkhvdXN0b25EZXYtVEEiO3M6MTM6ImN1c3RvbWVyRW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJyb2xlTmFtZSI7czo0OiJ1c2VyIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "442">
                <td id="user-442">442</td>
                <td>dipi</td>
                <td>dipi</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">10/18/2021 03:11                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="442" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="442" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDQyIjtzOjg6InVzZXJuYW1lIjtzOjQ6ImRpcGkiO3M6NDoibmFtZSI7czo0OiJkaXBpIjtzOjU6ImVtYWlsIjtzOjE5OiJ2aW5lc2guY3ZAdGVhbXRhLmluIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkTEkwY2lCUENpUHE5ZkZjY3pQSS55ZVlJTi5kbVVOQnY5dUdLeVR0VGRYSXJsU0o0eHVNZUciO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMTAtMTggMDM6MTE6MDEiO3M6NDoic2FsdCI7czo2NDoiODFjNmQzOGNjODBjNzk0MmRkOGRkODFjNTljOWFkMDBlNDg5ZmI3M2U2MjkxYTgxMjg3MGViNjU5ODg4NWM2YSI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjQ6InJvbGUiO3M6MToiMyI7czoxMDoiZXhwaXJ5RGF0ZSI7czoxOToiMjAyMS0xMC0yNiAwMzoxMTowMyI7czoxMDoiY3VzdG9tZXJJZCI7czoxOiIxIjtzOjExOiJjdXN0b21lclNmbiI7czoxMzoiSG91c3RvbkRldi1UQSI7czoxMzoiY3VzdG9tZXJFbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjQ6InVzZXIiO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "443">
                <td id="user-443">443</td>
                <td>crystal</td>
                <td>crystal</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">10/25/2021 02:40                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="443" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="443" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDQzIjtzOjg6InVzZXJuYW1lIjtzOjc6ImNyeXN0YWwiO3M6NDoibmFtZSI7czo3OiJjcnlzdGFsIjtzOjU6ImVtYWlsIjtzOjE5OiJ2aW5lc2guY3ZAdGVhbXRhLmluIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkWEN4MTNxYnpYVmJ0TllvMDNPd2RGdUNrTW5yMDNJMDU5NlFBR1lQS2NaemNVVFVSTG1lMjYiO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMTAtMjUgMDI6NDA6NDciO3M6NDoic2FsdCI7czo2NDoiZjNmYmRhZmY5N2Y1MTk5ZTEzNmRmM2I2OTViMjU0NzJlYTc0ZDQ0OGQ3MjcwNjkwNzEzYmU0ZWRiYWY5YjNjOSI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjQ6InJvbGUiO3M6MToiMyI7czoxMDoiZXhwaXJ5RGF0ZSI7czoxOToiMjAyMS0xMS0wMSAwMjo0MDo0OCI7czoxMDoiY3VzdG9tZXJJZCI7czoxOiIxIjtzOjExOiJjdXN0b21lclNmbiI7czoxMzoiSG91c3RvbkRldi1UQSI7czoxMzoiY3VzdG9tZXJFbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjQ6InVzZXIiO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "444">
                <td id="user-444">444</td>
                <td>Anakha_test</td>
                <td>Anakha_test</td>
                <td>anakha.j@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Supervisor</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="21876">Anakha_test</span>
                </td>
                <td class="createDate">10/26/2021 06:36                </td>
                <td class="actions">
                                                        
                  <a href="" data-id="444" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDQ0IjtzOjg6InVzZXJuYW1lIjtzOjExOiJBbmFraGFfdGVzdCI7czo0OiJuYW1lIjtzOjExOiJBbmFraGFfdGVzdCI7czo1OiJlbWFpbCI7czoxODoiYW5ha2hhLmpAdGVhbXRhLmluIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkT2VYLzdLdXhQTE03eXJ0L2w3dG9rdTByZno1NkZVUVNUVk1SaHRJenlyQ2FDbUhIb2Q4aFciO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMTAtMjYgMDY6MzY6NDgiO3M6NDoic2FsdCI7czo2NDoiNGE4MzA4NGJhNWMxZGIzNjM0ZDQ4MGQ2MzYxNmMwYWJlNTYyOWNjMDI2ZjQ3ZTE2MzA5NTU3N2YzZjE1NDAzMCI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjQ6InJvbGUiO3M6MToiMiI7czoxMDoiZXhwaXJ5RGF0ZSI7TjtzOjEwOiJjdXN0b21lcklkIjtzOjU6IjIxODc2IjtzOjExOiJjdXN0b21lclNmbiI7czoxMToiQW5ha2hhX3Rlc3QiO3M6MTM6ImN1c3RvbWVyRW1haWwiO3M6MTg6ImFuYWtoYS5qQHRlYW10YS5pbiI7czo4OiJyb2xlTmFtZSI7czoxMDoic3VwZXJ2aXNvciI7czo1OiJyb2xlcyI7YTo0OntpOjE7czo1OiJhZG1pbiI7aToyO3M6MTA6InN1cGVydmlzb3IiO2k6MztzOjQ6InVzZXIiO2k6NDtzOjU6Imd1ZXN0Ijt9fQ==" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "445">
                <td id="user-445">445</td>
                <td>dipin_testing_email</td>
                <td>dipin_testing_email</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/01/2021 08:58                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="445" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="445" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDQ1IjtzOjg6InVzZXJuYW1lIjtzOjE5OiJkaXBpbl90ZXN0aW5nX2VtYWlsIjtzOjQ6Im5hbWUiO3M6MTk6ImRpcGluX3Rlc3RpbmdfZW1haWwiO3M6NToiZW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJwYXNzd29yZCI7czo2MDoiJDJ5JDE0JDk3N2pDTjV6YVp4V21aOFkub0E5b3VaV0F4WDdPU2RoN3c1S2xaU2Z3MlgyQnRvQTN3TjBxIjtzOjEwOiJjcmVhdGVEYXRlIjtzOjE5OiIyMDIxLTExLTAxIDA4OjU4OjIxIjtzOjQ6InNhbHQiO3M6NjQ6IjE3MmNjZWY2NjE4YjJiZTYxZDgyZTZhZThjMWExNmNlZGY1NTVmYjVmODk4OTQwZTQyYzM5NTE4N2JjNzQ0YWMiO3M6ODoiaXNBY3RpdmUiO3M6MToiMSI7czo0OiJyb2xlIjtzOjE6IjMiO3M6MTA6ImV4cGlyeURhdGUiO047czoxMDoiY3VzdG9tZXJJZCI7czoxOiIxIjtzOjExOiJjdXN0b21lclNmbiI7czoxMzoiSG91c3RvbkRldi1UQSI7czoxMzoiY3VzdG9tZXJFbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjQ6InVzZXIiO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "447">
                <td id="user-447">447</td>
                <td>dipin_testing_email1</td>
                <td>dipin_testing_email1</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/01/2021 09:00                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="447" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="447" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDQ3IjtzOjg6InVzZXJuYW1lIjtzOjIwOiJkaXBpbl90ZXN0aW5nX2VtYWlsMSI7czo0OiJuYW1lIjtzOjIwOiJkaXBpbl90ZXN0aW5nX2VtYWlsMSI7czo1OiJlbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkb0w4bS56Zi85Ulp5TXEyY01DU1FOT1MwOHQwN25sQ3N0c2xNeDV4Lm80MzBNWnZiekNsdEMiO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMTEtMDEgMDk6MDA6MjIiO3M6NDoic2FsdCI7czo2NDoiODJhY2M5ODA1NmU4Yjk4MzE4ZjRlNGJhMThjNTkxNWY0Zjc4ZDU5MWNkN2Q5Y2IwYjFjYWFkMGM1N2VjYjlkZCI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjQ6InJvbGUiO3M6MToiMyI7czoxMDoiZXhwaXJ5RGF0ZSI7TjtzOjEwOiJjdXN0b21lcklkIjtzOjE6IjEiO3M6MTE6ImN1c3RvbWVyU2ZuIjtzOjEzOiJIb3VzdG9uRGV2LVRBIjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicm9sZU5hbWUiO3M6NDoidXNlciI7czo1OiJyb2xlcyI7YTo0OntpOjE7czo1OiJhZG1pbiI7aToyO3M6MTA6InN1cGVydmlzb3IiO2k6MztzOjQ6InVzZXIiO2k6NDtzOjU6Imd1ZXN0Ijt9fQ==" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "448">
                <td id="user-448">448</td>
                <td>dipin_testing_email11</td>
                <td>dipin_testing_email11</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/01/2021 09:02                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="448" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="448" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDQ4IjtzOjg6InVzZXJuYW1lIjtzOjIxOiJkaXBpbl90ZXN0aW5nX2VtYWlsMTEiO3M6NDoibmFtZSI7czoyMToiZGlwaW5fdGVzdGluZ19lbWFpbDExIjtzOjU6ImVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCR4NHJCc2piQlNyVkN0cUpyU1BYYmkuTmwzT2hNNDRaSFZvZVczYXhKZjFJUDNoVzNwbEgvcSI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0xMS0wMSAwOTowMjo1NSI7czo0OiJzYWx0IjtzOjY0OiI5ZGFhYmRhZmU5YzQzMGIyNGI1NzBmZjgzZjJhY2RmZGIwOTY2YTEzZDVlMjBmNjQzODY5N2I4NjQ1MzRkNjFiIjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIzIjtzOjEwOiJleHBpcnlEYXRlIjtOO3M6MTA6ImN1c3RvbWVySWQiO3M6MToiMSI7czoxMToiY3VzdG9tZXJTZm4iO3M6MTM6IkhvdXN0b25EZXYtVEEiO3M6MTM6ImN1c3RvbWVyRW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJyb2xlTmFtZSI7czo0OiJ1c2VyIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "449">
                <td id="user-449">449</td>
                <td>dipin_testing_email111</td>
                <td>dipin_testing_email111</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/01/2021 09:07                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="449" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="449" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDQ5IjtzOjg6InVzZXJuYW1lIjtzOjIyOiJkaXBpbl90ZXN0aW5nX2VtYWlsMTExIjtzOjQ6Im5hbWUiO3M6MjI6ImRpcGluX3Rlc3RpbmdfZW1haWwxMTEiO3M6NToiZW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJwYXNzd29yZCI7czo2MDoiJDJ5JDE0JDNsOC5VSmgvRnZ5OVQ4WDZzWTVWQS5VbVBlczAyR2JhZTdSUGRTMXgxUkcwTUR0VEpSRUVxIjtzOjEwOiJjcmVhdGVEYXRlIjtzOjE5OiIyMDIxLTExLTAxIDA5OjA3OjI4IjtzOjQ6InNhbHQiO3M6NjQ6ImJmZWRkMzY1MGU2MzlmYWM2YmYzZDFmNGQwY2E1ZGFkOGI2ZDFiNzZmN2Q0ZTU4ZGI4YjkyZTlmNWU0NzFjYTMiO3M6ODoiaXNBY3RpdmUiO3M6MToiMSI7czo0OiJyb2xlIjtzOjE6IjMiO3M6MTA6ImV4cGlyeURhdGUiO047czoxMDoiY3VzdG9tZXJJZCI7czoxOiIxIjtzOjExOiJjdXN0b21lclNmbiI7czoxMzoiSG91c3RvbkRldi1UQSI7czoxMzoiY3VzdG9tZXJFbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjQ6InVzZXIiO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "451">
                <td id="user-451">451</td>
                <td>dipin_testing_email1111</td>
                <td>dipin_testing_email1111</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Admin</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/01/2021 09:08                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="451" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="451" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDUxIjtzOjg6InVzZXJuYW1lIjtzOjIzOiJkaXBpbl90ZXN0aW5nX2VtYWlsMTExMSI7czo0OiJuYW1lIjtzOjIzOiJkaXBpbl90ZXN0aW5nX2VtYWlsMTExMSI7czo1OiJlbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkMnlGVUdDcVZPSXFkTFVpcGkzajk3TzJ5cnR1SVJDYm83R1RBdWkzUGc5SVJrOENVeC9pUmEiO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMTEtMDEgMDk6MDg6MDAiO3M6NDoic2FsdCI7czo2NDoiYjMzOTg1Mjg2MmFlY2ZiMTMwNWRiMzhiYzM0ZTE4NTdkNDhmZDQyZmUyOTM5OGI5ZjRjZWYzNDQ2MTY5MGQ5YiI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjQ6InJvbGUiO3M6MToiMSI7czoxMDoiZXhwaXJ5RGF0ZSI7TjtzOjEwOiJjdXN0b21lcklkIjtzOjE6IjEiO3M6MTE6ImN1c3RvbWVyU2ZuIjtzOjEzOiJIb3VzdG9uRGV2LVRBIjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicm9sZU5hbWUiO3M6NToiYWRtaW4iO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "452">
                <td id="user-452">452</td>
                <td>dipin_testing_email11111</td>
                <td>dipin_testing_email11111</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Supervisor</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/01/2021 09:08                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="452" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="452" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDUyIjtzOjg6InVzZXJuYW1lIjtzOjI0OiJkaXBpbl90ZXN0aW5nX2VtYWlsMTExMTEiO3M6NDoibmFtZSI7czoyNDoiZGlwaW5fdGVzdGluZ19lbWFpbDExMTExIjtzOjU6ImVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCRIZWFLOVEvVTVGNHc2ZFgvaXR1bG0uWU9acFouV3NRRVBJWkJQWENmQ3ZkZDZ2WDhQWC9DSyI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0xMS0wMSAwOTowODoxMyI7czo0OiJzYWx0IjtzOjY0OiIwNDE2MjhiZDgzZjYxNDhjZWZkNjgwYTM2MTJlMTYyODA2ZWQzMzE4MzBmYjE4NmYyMGMxOTQxZGQyODljZGMwIjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIyIjtzOjEwOiJleHBpcnlEYXRlIjtOO3M6MTA6ImN1c3RvbWVySWQiO3M6MToiMSI7czoxMToiY3VzdG9tZXJTZm4iO3M6MTM6IkhvdXN0b25EZXYtVEEiO3M6MTM6ImN1c3RvbWVyRW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJyb2xlTmFtZSI7czoxMDoic3VwZXJ2aXNvciI7czo1OiJyb2xlcyI7YTo0OntpOjE7czo1OiJhZG1pbiI7aToyO3M6MTA6InN1cGVydmlzb3IiO2k6MztzOjQ6InVzZXIiO2k6NDtzOjU6Imd1ZXN0Ijt9fQ==" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "453">
                <td id="user-453">453</td>
                <td>dipin_testing_email111111</td>
                <td>dipin_testing_email111111</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Supervisor</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/01/2021 09:08                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="453" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="453" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDUzIjtzOjg6InVzZXJuYW1lIjtzOjI1OiJkaXBpbl90ZXN0aW5nX2VtYWlsMTExMTExIjtzOjQ6Im5hbWUiO3M6MjU6ImRpcGluX3Rlc3RpbmdfZW1haWwxMTExMTEiO3M6NToiZW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJwYXNzd29yZCI7czo2MDoiJDJ5JDE0JEJ4YlRVVFQ4TUxXd0FaYTNOMmZCZXVXRUdabko2SWlCOEdRUkxmZk5yQkczN1NYZ2p2Qy91IjtzOjEwOiJjcmVhdGVEYXRlIjtzOjE5OiIyMDIxLTExLTAxIDA5OjA4OjQ4IjtzOjQ6InNhbHQiO3M6NjQ6ImRhMzExNTAwNTQyNjE0ZjgzNDE5ZGE5N2YzMDZhZDQ2NTVmZDJmNGYwZDBiZGYyNzJjYjRkMjQ2MjI3YTE0YjUiO3M6ODoiaXNBY3RpdmUiO3M6MToiMSI7czo0OiJyb2xlIjtzOjE6IjIiO3M6MTA6ImV4cGlyeURhdGUiO047czoxMDoiY3VzdG9tZXJJZCI7czoxOiIxIjtzOjExOiJjdXN0b21lclNmbiI7czoxMzoiSG91c3RvbkRldi1UQSI7czoxMzoiY3VzdG9tZXJFbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjEwOiJzdXBlcnZpc29yIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "454">
                <td id="user-454">454</td>
                <td>dipin_testing_email2</td>
                <td>dipin_testing_email2</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Supervisor</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/01/2021 09:09                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="454" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="454" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDU0IjtzOjg6InVzZXJuYW1lIjtzOjIwOiJkaXBpbl90ZXN0aW5nX2VtYWlsMiI7czo0OiJuYW1lIjtzOjIwOiJkaXBpbl90ZXN0aW5nX2VtYWlsMiI7czo1OiJlbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkQzYvVnFRS0hiWU0xZ2VKNWZab1ZJT1gvM1BYS3I3bXRRNThWdzBZVzBUai5CSUQuTFo4VlciO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMTEtMDEgMDk6MDk6NTciO3M6NDoic2FsdCI7czo2NDoiNTdlNjQ4YjFhMjIwZTRkZjYzZjkwMWI5YWFmMzY2N2Q1MmY4OGE3OGE2MzEyM2NhZWE1NzIzODI1ZWY2ODU5OCI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjQ6InJvbGUiO3M6MToiMiI7czoxMDoiZXhwaXJ5RGF0ZSI7TjtzOjEwOiJjdXN0b21lcklkIjtzOjE6IjEiO3M6MTE6ImN1c3RvbWVyU2ZuIjtzOjEzOiJIb3VzdG9uRGV2LVRBIjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicm9sZU5hbWUiO3M6MTA6InN1cGVydmlzb3IiO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "455">
                <td id="user-455">455</td>
                <td>dipin_testing_email21</td>
                <td>dipin_testing_email21</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Supervisor</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/01/2021 09:11                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="455" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="455" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDU1IjtzOjg6InVzZXJuYW1lIjtzOjIxOiJkaXBpbl90ZXN0aW5nX2VtYWlsMjEiO3M6NDoibmFtZSI7czoyMToiZGlwaW5fdGVzdGluZ19lbWFpbDIxIjtzOjU6ImVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCRJcEtibEVHYlF1ME1heTM2STRVejgudU5sRTJPbzVmZ01NcFBQNlhhSzV0M1FFeENNYjdzdSI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0xMS0wMSAwOToxMTo0NyI7czo0OiJzYWx0IjtzOjY0OiI4NDYzNjVmODBkMmYwNzY4MzE0ZWY3ODgwOWE4MGUyODkyYTc2YTdhZDZjNjAzMjg5MzE3NTQzZTgwOTc5MzhlIjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIyIjtzOjEwOiJleHBpcnlEYXRlIjtOO3M6MTA6ImN1c3RvbWVySWQiO3M6MToiMSI7czoxMToiY3VzdG9tZXJTZm4iO3M6MTM6IkhvdXN0b25EZXYtVEEiO3M6MTM6ImN1c3RvbWVyRW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJyb2xlTmFtZSI7czoxMDoic3VwZXJ2aXNvciI7czo1OiJyb2xlcyI7YTo0OntpOjE7czo1OiJhZG1pbiI7aToyO3M6MTA6InN1cGVydmlzb3IiO2k6MztzOjQ6InVzZXIiO2k6NDtzOjU6Imd1ZXN0Ijt9fQ==" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "456">
                <td id="user-456">456</td>
                <td>dipin_testing_email212</td>
                <td>dipin_testing_email212</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Supervisor</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/01/2021 09:20                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="456" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="456" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDU2IjtzOjg6InVzZXJuYW1lIjtzOjIyOiJkaXBpbl90ZXN0aW5nX2VtYWlsMjEyIjtzOjQ6Im5hbWUiO3M6MjI6ImRpcGluX3Rlc3RpbmdfZW1haWwyMTIiO3M6NToiZW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJwYXNzd29yZCI7czo2MDoiJDJ5JDE0JE9xUDZxVG5kNUV1bVhFRU9VQXlVZHVjMXhhdE1ER1QzSXk5eHJ0WXBJMzRIU2xkbGlvcXhXIjtzOjEwOiJjcmVhdGVEYXRlIjtzOjE5OiIyMDIxLTExLTAxIDA5OjIwOjEwIjtzOjQ6InNhbHQiO3M6NjQ6IjFmODFlOWRjMTlkYzlhMTNlMGZlZGRkZWU0YzA3M2UxMGI2NzhhOWE2YjdhMGQ3NWFiMDY2MTNkYTA5NzljODEiO3M6ODoiaXNBY3RpdmUiO3M6MToiMSI7czo0OiJyb2xlIjtzOjE6IjIiO3M6MTA6ImV4cGlyeURhdGUiO047czoxMDoiY3VzdG9tZXJJZCI7czoxOiIxIjtzOjExOiJjdXN0b21lclNmbiI7czoxMzoiSG91c3RvbkRldi1UQSI7czoxMzoiY3VzdG9tZXJFbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjEwOiJzdXBlcnZpc29yIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "457">
                <td id="user-457">457</td>
                <td>dipin_testing_222</td>
                <td>dipin_testing_222</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/01/2021 09:21                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="457" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="457" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDU3IjtzOjg6InVzZXJuYW1lIjtzOjE3OiJkaXBpbl90ZXN0aW5nXzIyMiI7czo0OiJuYW1lIjtzOjE3OiJkaXBpbl90ZXN0aW5nXzIyMiI7czo1OiJlbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkYXlHSUNUVnpyS0lmL01zeWlJZktiLnlIaGFMU0xYQ0x1LzdxOVBTdDBWcGxDRHFUTUxNMC4iO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMTEtMDEgMDk6MjE6NDEiO3M6NDoic2FsdCI7czo2NDoiYjA4M2Y4NjEyYTA1NWU5YTU5N2I2MTA0MTlmMzk2ZjllMjBjOWQyNWM0NTJlNGFjMTZjNjQ1NDBmOWJmNzU5NSI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjQ6InJvbGUiO3M6MToiMyI7czoxMDoiZXhwaXJ5RGF0ZSI7TjtzOjEwOiJjdXN0b21lcklkIjtzOjE6IjEiO3M6MTE6ImN1c3RvbWVyU2ZuIjtzOjEzOiJIb3VzdG9uRGV2LVRBIjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicm9sZU5hbWUiO3M6NDoidXNlciI7czo1OiJyb2xlcyI7YTo0OntpOjE7czo1OiJhZG1pbiI7aToyO3M6MTA6InN1cGVydmlzb3IiO2k6MztzOjQ6InVzZXIiO2k6NDtzOjU6Imd1ZXN0Ijt9fQ==" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "458">
                <td id="user-458">458</td>
                <td>dipin_testing_user_email2</td>
                <td>dipin_testing_user_email2</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/01/2021 20:27                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="458" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="458" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDU4IjtzOjg6InVzZXJuYW1lIjtzOjI1OiJkaXBpbl90ZXN0aW5nX3VzZXJfZW1haWwyIjtzOjQ6Im5hbWUiO3M6MjU6ImRpcGluX3Rlc3RpbmdfdXNlcl9lbWFpbDIiO3M6NToiZW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJwYXNzd29yZCI7czo2MDoiJDJ5JDE0JEYxbFBDWHF1VGRpLndRRjhMNDVva09IN0p6VENJbktjVXlvdGpIZDZIVzFRdUZNcy5xcU5TIjtzOjEwOiJjcmVhdGVEYXRlIjtzOjE5OiIyMDIxLTExLTAxIDIwOjI3OjMzIjtzOjQ6InNhbHQiO3M6NjQ6ImZhY2Y2YjAyM2M1M2ExYzdlYzI0YzU3ZTZkMjNmM2IyZDZhMGIzZGMxNTIyZWJlZGNmZWM0MGQ1MTQ0MmQxYjkiO3M6ODoiaXNBY3RpdmUiO3M6MToiMSI7czo0OiJyb2xlIjtzOjE6IjMiO3M6MTA6ImV4cGlyeURhdGUiO047czoxMDoiY3VzdG9tZXJJZCI7czoxOiIxIjtzOjExOiJjdXN0b21lclNmbiI7czoxMzoiSG91c3RvbkRldi1UQSI7czoxMzoiY3VzdG9tZXJFbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjQ6InVzZXIiO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "459">
                <td id="user-459">459</td>
                <td>dipin_testing_user_email21</td>
                <td>dipin_testing_user_email21</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/01/2021 21:11                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="459" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="459" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDU5IjtzOjg6InVzZXJuYW1lIjtzOjI2OiJkaXBpbl90ZXN0aW5nX3VzZXJfZW1haWwyMSI7czo0OiJuYW1lIjtzOjI2OiJkaXBpbl90ZXN0aW5nX3VzZXJfZW1haWwyMSI7czo1OiJlbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkTW9BRG4zcnJRQnhBS3RYSXNGMnBUT3BiWlhZeVhHMzBzaGV1MFlkbzNFTjhpYVZweDZkZXkiO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMTEtMDEgMjE6MTE6MDAiO3M6NDoic2FsdCI7czo2NDoiMDc4MjhkYjM5Y2RmNjQzZDRlZWJmM2ZhMTZhNzg5MTRkZTBlNjVmOTc0Y2YzYWIwZDEyMmNiYjA5NWYwYTFjYyI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjQ6InJvbGUiO3M6MToiMyI7czoxMDoiZXhwaXJ5RGF0ZSI7TjtzOjEwOiJjdXN0b21lcklkIjtzOjE6IjEiO3M6MTE6ImN1c3RvbWVyU2ZuIjtzOjEzOiJIb3VzdG9uRGV2LVRBIjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicm9sZU5hbWUiO3M6NDoidXNlciI7czo1OiJyb2xlcyI7YTo0OntpOjE7czo1OiJhZG1pbiI7aToyO3M6MTA6InN1cGVydmlzb3IiO2k6MztzOjQ6InVzZXIiO2k6NDtzOjU6Imd1ZXN0Ijt9fQ==" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "460">
                <td id="user-460">460</td>
                <td>Dipin_testing-emails123</td>
                <td>Dipin_testing-emails123</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/01/2021 21:12                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="460" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="460" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDYwIjtzOjg6InVzZXJuYW1lIjtzOjIzOiJEaXBpbl90ZXN0aW5nLWVtYWlsczEyMyI7czo0OiJuYW1lIjtzOjIzOiJEaXBpbl90ZXN0aW5nLWVtYWlsczEyMyI7czo1OiJlbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkM09udkdodXpWOU43Ti5xazVIamUvLjMuaklmNExROUN0QVlKYVI4a3p4b1AxNS9BUy5EVUciO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMTEtMDEgMjE6MTI6NDMiO3M6NDoic2FsdCI7czo2NDoiY2M3YzJjMDA5OTAxZGExMzEzMmY3ODgzZWNiMmNiYTIxMGQ5N2MwOGU1MmJhNTU4ZTViOWU5YjRhMWJlODY1ZSI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjQ6InJvbGUiO3M6MToiMyI7czoxMDoiZXhwaXJ5RGF0ZSI7TjtzOjEwOiJjdXN0b21lcklkIjtzOjE6IjEiO3M6MTE6ImN1c3RvbWVyU2ZuIjtzOjEzOiJIb3VzdG9uRGV2LVRBIjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicm9sZU5hbWUiO3M6NDoidXNlciI7czo1OiJyb2xlcyI7YTo0OntpOjE7czo1OiJhZG1pbiI7aToyO3M6MTA6InN1cGVydmlzb3IiO2k6MztzOjQ6InVzZXIiO2k6NDtzOjU6Imd1ZXN0Ijt9fQ==" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "461">
                <td id="user-461">461</td>
                <td>Dipin_testing-emails1232</td>
                <td>Dipin_testing-emails1232</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/01/2021 21:14                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="461" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="461" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDYxIjtzOjg6InVzZXJuYW1lIjtzOjI0OiJEaXBpbl90ZXN0aW5nLWVtYWlsczEyMzIiO3M6NDoibmFtZSI7czoyNDoiRGlwaW5fdGVzdGluZy1lbWFpbHMxMjMyIjtzOjU6ImVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCQ4L1ZLb1lpWnlVL3JGRHJFaGxrVXUuZ0FBL2ZZMmphQXZra1p5Qy9wZnJpRk16UU1yLnlxNiI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0xMS0wMSAyMToxNDozMSI7czo0OiJzYWx0IjtzOjY0OiI4OWRiZjYyMzUwNTUzZmI2NmI2NmZkMTUyZWIzYWZmMjQ3OTcxZjM5MDY1NzJkMzJmMDFmMzJkYzgwNTc3YmNlIjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIzIjtzOjEwOiJleHBpcnlEYXRlIjtOO3M6MTA6ImN1c3RvbWVySWQiO3M6MToiMSI7czoxMToiY3VzdG9tZXJTZm4iO3M6MTM6IkhvdXN0b25EZXYtVEEiO3M6MTM6ImN1c3RvbWVyRW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJyb2xlTmFtZSI7czo0OiJ1c2VyIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "462">
                <td id="user-462">462</td>
                <td>dipin_testing_emails1234</td>
                <td>dipin_testing_emails1234</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/01/2021 22:13                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="462" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="462" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDYyIjtzOjg6InVzZXJuYW1lIjtzOjI0OiJkaXBpbl90ZXN0aW5nX2VtYWlsczEyMzQiO3M6NDoibmFtZSI7czoyNDoiZGlwaW5fdGVzdGluZ19lbWFpbHMxMjM0IjtzOjU6ImVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCRGQnducm5aZW4zakpTNFczTU05c08ueXVrazZrc2FjSDBRRGZaNEZuaDQvYmlXQ0UzUVNhUyI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0xMS0wMSAyMjoxMzozOCI7czo0OiJzYWx0IjtzOjY0OiI5MzI2NjE0YTY4YmNlOTkzYWJlMDg5YzcxYjRlMDY5NTBlOTNkNzBkYTZjYzY5N2JkOGI2ZWVmNTQ5NzE2MTc2IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIzIjtzOjEwOiJleHBpcnlEYXRlIjtOO3M6MTA6ImN1c3RvbWVySWQiO3M6MToiMSI7czoxMToiY3VzdG9tZXJTZm4iO3M6MTM6IkhvdXN0b25EZXYtVEEiO3M6MTM6ImN1c3RvbWVyRW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJyb2xlTmFtZSI7czo0OiJ1c2VyIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "463">
                <td id="user-463">463</td>
                <td>dipin_testing_user123123</td>
                <td>dipin_testing_user123123</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/01/2021 22:06                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="463" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="463" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDYzIjtzOjg6InVzZXJuYW1lIjtzOjI0OiJkaXBpbl90ZXN0aW5nX3VzZXIxMjMxMjMiO3M6NDoibmFtZSI7czoyNDoiZGlwaW5fdGVzdGluZ191c2VyMTIzMTIzIjtzOjU6ImVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCRWcWN1amF2RW1IM0Q0bkltdjJiRWt1dElHMVVzRmVuM3k1R1N6M2ZJMWNyeTc1eWxCdkJ5UyI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0xMS0wMSAyMjowNjoyNyI7czo0OiJzYWx0IjtzOjY0OiIxMjQyZDc3NmIwNWRlNjY5ZWFkYTMwOWRjMDhlMzI0ZmU0NTYyMjk1MzVlNmQ5ODRhZWEyYTYxY2UwMTE4OTYzIjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIzIjtzOjEwOiJleHBpcnlEYXRlIjtOO3M6MTA6ImN1c3RvbWVySWQiO3M6MToiMSI7czoxMToiY3VzdG9tZXJTZm4iO3M6MTM6IkhvdXN0b25EZXYtVEEiO3M6MTM6ImN1c3RvbWVyRW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJyb2xlTmFtZSI7czo0OiJ1c2VyIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "464">
                <td id="user-464">464</td>
                <td>dipinva_testing_email123123</td>
                <td>dipinva_testing_email123123</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/01/2021 22:08                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="464" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="464" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDY0IjtzOjg6InVzZXJuYW1lIjtzOjI3OiJkaXBpbnZhX3Rlc3RpbmdfZW1haWwxMjMxMjMiO3M6NDoibmFtZSI7czoyNzoiZGlwaW52YV90ZXN0aW5nX2VtYWlsMTIzMTIzIjtzOjU6ImVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCRKR2VkS28uVUdjc21Hd2dzNllZNi9PSEovWEFsSTRWYmJyRHlvUVB6Uk5EbGRHcUFEL1hpQyI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0xMS0wMSAyMjowODo0MyI7czo0OiJzYWx0IjtzOjY0OiI5ZmVkMjIzZjBlYjVkMmVjZWU1NDFiNTExMmFhNGJhM2RlODk0ODliYWU1N2U0NDM0ZjY4Nzg5YWQyY2E4ODRkIjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIzIjtzOjEwOiJleHBpcnlEYXRlIjtOO3M6MTA6ImN1c3RvbWVySWQiO3M6MToiMSI7czoxMToiY3VzdG9tZXJTZm4iO3M6MTM6IkhvdXN0b25EZXYtVEEiO3M6MTM6ImN1c3RvbWVyRW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJyb2xlTmFtZSI7czo0OiJ1c2VyIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "465">
                <td id="user-465">465</td>
                <td>vinu_user_01</td>
                <td>vinu_user_01</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/01/2021 22:08                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="465" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="465" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDY1IjtzOjg6InVzZXJuYW1lIjtzOjEyOiJ2aW51X3VzZXJfMDEiO3M6NDoibmFtZSI7czoxMjoidmludV91c2VyXzAxIjtzOjU6ImVtYWlsIjtzOjE5OiJ2aW5lc2guY3ZAdGVhbXRhLmluIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkSjNiZjFoaXRxYm9zb2VmM3FZY296LnVjaVJNTXhsWWd1Llo5SndIR1FFaTE0bDNtMi81bXkiO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMTEtMDEgMjI6MDg6NTYiO3M6NDoic2FsdCI7czo2NDoiY2NjMjFhMzJkYjRiMzk3YTMwOGFjZjAxZTY4OWMyMDBhYzE4YmZhYjIyYWRkYWJkZjBiMTNhMGFjYjU4MTFiOCI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjQ6InJvbGUiO3M6MToiMyI7czoxMDoiZXhwaXJ5RGF0ZSI7TjtzOjEwOiJjdXN0b21lcklkIjtzOjE6IjEiO3M6MTE6ImN1c3RvbWVyU2ZuIjtzOjEzOiJIb3VzdG9uRGV2LVRBIjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicm9sZU5hbWUiO3M6NDoidXNlciI7czo1OiJyb2xlcyI7YTo0OntpOjE7czo1OiJhZG1pbiI7aToyO3M6MTA6InN1cGVydmlzb3IiO2k6MztzOjQ6InVzZXIiO2k6NDtzOjU6Imd1ZXN0Ijt9fQ==" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "466">
                <td id="user-466">466</td>
                <td>vinu001</td>
                <td>vinu001</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/01/2021 22:26                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="466" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="466" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDY2IjtzOjg6InVzZXJuYW1lIjtzOjc6InZpbnUwMDEiO3M6NDoibmFtZSI7czo3OiJ2aW51MDAxIjtzOjU6ImVtYWlsIjtzOjE5OiJ2aW5lc2guY3ZAdGVhbXRhLmluIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkVy5qNTN1d2tOUkJLTmh3emUyQTdzLmE3ZVV6ZTZ1WjVwTHdGWURKcGZXd1JyeWtET3JRNHEiO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMTEtMDEgMjI6MjY6MzIiO3M6NDoic2FsdCI7czo2NDoiNWZhYTVkYWZmMGY1NWY3NTlkMzVhYjYzZDVmMzg5NzQ4Nzk1NDQwZGVmNmZjMjBjMTYxZDU2NzFmZjA4ZThkMCI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjQ6InJvbGUiO3M6MToiMyI7czoxMDoiZXhwaXJ5RGF0ZSI7czoxOToiMjAyMS0xMS0wOCAyMjoyNjozMyI7czoxMDoiY3VzdG9tZXJJZCI7czoxOiIxIjtzOjExOiJjdXN0b21lclNmbiI7czoxMzoiSG91c3RvbkRldi1UQSI7czoxMzoiY3VzdG9tZXJFbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjQ6InVzZXIiO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "467">
                <td id="user-467">467</td>
                <td>vinu002</td>
                <td>vinu002</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/01/2021 22:28                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="467" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="467" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDY3IjtzOjg6InVzZXJuYW1lIjtzOjc6InZpbnUwMDIiO3M6NDoibmFtZSI7czo3OiJ2aW51MDAyIjtzOjU6ImVtYWlsIjtzOjE5OiJ2aW5lc2guY3ZAdGVhbXRhLmluIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkSG9DcU9HMW95Wll2aDJXekpZYjVSdXM4SXo1YlNMbExBSTh4U0h5UWFuYktPYXhlWngxbEsiO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMTEtMDEgMjI6Mjg6MDIiO3M6NDoic2FsdCI7czo2NDoiZGViN2Y5M2Y2ZjJkMDUwNjY4MzAzN2I0OGRhOWNhYzgyMjg4M2Q5M2YxNDAzMDk2OWUwYjJhMDBmYTQzMDhlZSI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjQ6InJvbGUiO3M6MToiMyI7czoxMDoiZXhwaXJ5RGF0ZSI7czoxOToiMjAyMS0xMS0wOCAyMjoyODowMyI7czoxMDoiY3VzdG9tZXJJZCI7czoxOiIxIjtzOjExOiJjdXN0b21lclNmbiI7czoxMzoiSG91c3RvbkRldi1UQSI7czoxMzoiY3VzdG9tZXJFbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjQ6InVzZXIiO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "468">
                <td id="user-468">468</td>
                <td>vinu_a_001</td>
                <td>vinu_a_001</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Admin</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/01/2021 22:28                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="468" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="468" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDY4IjtzOjg6InVzZXJuYW1lIjtzOjEwOiJ2aW51X2FfMDAxIjtzOjQ6Im5hbWUiO3M6MTA6InZpbnVfYV8wMDEiO3M6NToiZW1haWwiO3M6MTk6InZpbmVzaC5jdkB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCRybWk0c1VNWExsNFBWZHJORjZuWVZPdHFaeE5HTnlieThzUVFKL0s5Tkd6ZEs5NEVUOGJtcSI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0xMS0wMSAyMjoyODo1OSI7czo0OiJzYWx0IjtzOjY0OiI5ZDI1OTc0ZWU4MDFiOGQzOGNmMjZhNDE2ODZmNmM0NjBlZjk0N2RmOGM0NjM2MTYwZTA4ZTRiODRhYjUyNTQwIjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIxIjtzOjEwOiJleHBpcnlEYXRlIjtzOjE5OiIyMDIxLTExLTA4IDIyOjI5OjAwIjtzOjEwOiJjdXN0b21lcklkIjtzOjE6IjEiO3M6MTE6ImN1c3RvbWVyU2ZuIjtzOjEzOiJIb3VzdG9uRGV2LVRBIjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicm9sZU5hbWUiO3M6NToiYWRtaW4iO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "469">
                <td id="user-469">469</td>
                <td>Dipin_testing_chng_pwd</td>
                <td>Dipin_testing_chng_pwd</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Supervisor</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/01/2021 23:13                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="469" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="469" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDY5IjtzOjg6InVzZXJuYW1lIjtzOjIyOiJEaXBpbl90ZXN0aW5nX2NobmdfcHdkIjtzOjQ6Im5hbWUiO3M6MjI6IkRpcGluX3Rlc3RpbmdfY2huZ19wd2QiO3M6NToiZW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJwYXNzd29yZCI7czo2MDoiJDJ5JDE0JDlQd05ReVdxaUVqcnpqZzdJTHBmNnVhS2E4OFAwS2RPb3JWb1pld1NMZWI4WXRqeGlXQmJ5IjtzOjEwOiJjcmVhdGVEYXRlIjtzOjE5OiIyMDIxLTExLTAxIDIzOjEzOjM4IjtzOjQ6InNhbHQiO3M6NjQ6IjdlODNhYWE0ZmI4NjJjZDExZWMwNmUwNzNlMGM5NjQzZjhiMTJkYTM2ZDU3ZmQ0MDM5ZDQxMDFjZjU0ODQxYjAiO3M6ODoiaXNBY3RpdmUiO3M6MToiMSI7czo0OiJyb2xlIjtzOjE6IjIiO3M6MTA6ImV4cGlyeURhdGUiO047czoxMDoiY3VzdG9tZXJJZCI7czoxOiIxIjtzOjExOiJjdXN0b21lclNmbiI7czoxMzoiSG91c3RvbkRldi1UQSI7czoxMzoiY3VzdG9tZXJFbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjEwOiJzdXBlcnZpc29yIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "470">
                <td id="user-470">470</td>
                <td>dev-dev1</td>
                <td>dev-dev1</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/02/2021 01:54                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="470" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="470" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDcwIjtzOjg6InVzZXJuYW1lIjtzOjg6ImRldi1kZXYxIjtzOjQ6Im5hbWUiO3M6ODoiZGV2LWRldjEiO3M6NToiZW1haWwiO3M6MTk6InZpbmVzaC5jdkB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCRyS1d5TDVUM0lwTTdGVTBWaWdJN2xlbkt4TGVyLlV6NXF0UlBEVG9pTWtlQXMzUFNQZG1rcSI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0xMS0wMiAwMTo1NDo1OSI7czo0OiJzYWx0IjtzOjY0OiIzZGYyM2E2NmVmODhmY2I3MGU0NzVlZTg3M2ZmMjUxNGQyYzdlMTVkMWI3YjY1OGVkYTc4ZWU3NTk3NjdiOWRlIjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIzIjtzOjEwOiJleHBpcnlEYXRlIjtzOjE5OiIyMDIxLTExLTA5IDAxOjU1OjAwIjtzOjEwOiJjdXN0b21lcklkIjtzOjE6IjEiO3M6MTE6ImN1c3RvbWVyU2ZuIjtzOjEzOiJIb3VzdG9uRGV2LVRBIjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicm9sZU5hbWUiO3M6NDoidXNlciI7czo1OiJyb2xlcyI7YTo0OntpOjE7czo1OiJhZG1pbiI7aToyO3M6MTA6InN1cGVydmlzb3IiO2k6MztzOjQ6InVzZXIiO2k6NDtzOjU6Imd1ZXN0Ijt9fQ==" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "475">
                <td id="user-475">475</td>
                <td>Dipin_testingExpiry</td>
                <td>Dipin_testingExpiry</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/02/2021 12:43                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="475" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="475" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDc1IjtzOjg6InVzZXJuYW1lIjtzOjE5OiJEaXBpbl90ZXN0aW5nRXhwaXJ5IjtzOjQ6Im5hbWUiO3M6MTk6IkRpcGluX3Rlc3RpbmdFeHBpcnkiO3M6NToiZW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJwYXNzd29yZCI7czo2MDoiJDJ5JDE0JGVBV1VHUWMwRFVEUFVPSC9Ma1hUaXUzMm41c3ouYThaZ0NOdlZHcXhCbm11ZWYzNFh0VjI2IjtzOjEwOiJjcmVhdGVEYXRlIjtzOjE5OiIyMDIxLTExLTAyIDEyOjQzOjAzIjtzOjQ6InNhbHQiO3M6NjQ6IjY1MDg4NDIwYWE3ZTliYTgzOGM3NDFhOTc2OTdjZWNkZTRlYTk5ZmZkZThlOWIyMWQxY2U1ODg1NThiM2VlN2YiO3M6ODoiaXNBY3RpdmUiO3M6MToiMSI7czo0OiJyb2xlIjtzOjE6IjMiO3M6MTA6ImV4cGlyeURhdGUiO047czoxMDoiY3VzdG9tZXJJZCI7czoxOiIxIjtzOjExOiJjdXN0b21lclNmbiI7czoxMzoiSG91c3RvbkRldi1UQSI7czoxMzoiY3VzdG9tZXJFbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjQ6InVzZXIiO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "476">
                <td id="user-476">476</td>
                <td>Dipin_testingExpiry1</td>
                <td>Dipin_testingExpiry1</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Supervisor</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/02/2021 12:43                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="476" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="476" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDc2IjtzOjg6InVzZXJuYW1lIjtzOjIwOiJEaXBpbl90ZXN0aW5nRXhwaXJ5MSI7czo0OiJuYW1lIjtzOjIwOiJEaXBpbl90ZXN0aW5nRXhwaXJ5MSI7czo1OiJlbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkeVhUc3BzWERpMVEzQ3BlMi9wY0h0dTA0bzdud0NJNHhsVW5SSDNZNjNNWmF3VWpiZGYxU0ciO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMTEtMDIgMTI6NDM6MzgiO3M6NDoic2FsdCI7czo2NDoiNzk1OTkyZWUzMDk2OTdhNDBmYTI5MGVhMzE2ZTdlOGE5OWJkMjcxZDRjMDI4ZGZkZmZmNGJiNTg5NjMzNzZlZCI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjQ6InJvbGUiO3M6MToiMiI7czoxMDoiZXhwaXJ5RGF0ZSI7czoxOToiMjAyMS0xMS0wOSAxMjo0MzozOSI7czoxMDoiY3VzdG9tZXJJZCI7czoxOiIxIjtzOjExOiJjdXN0b21lclNmbiI7czoxMzoiSG91c3RvbkRldi1UQSI7czoxMzoiY3VzdG9tZXJFbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjEwOiJzdXBlcnZpc29yIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "477">
                <td id="user-477">477</td>
                <td>Dipin_testing_UTC</td>
                <td>Dipin_testing_UTC</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Supervisor</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/04/2021 05:24                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="477" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="477" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDc3IjtzOjg6InVzZXJuYW1lIjtzOjE3OiJEaXBpbl90ZXN0aW5nX1VUQyI7czo0OiJuYW1lIjtzOjE3OiJEaXBpbl90ZXN0aW5nX1VUQyI7czo1OiJlbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkZmFLMVg4aHFRS2RhTTg2OXEwME9zT3M1VE8uazl4V2RJam1aamFPVjB3Rjh2WEsxanpoVS4iO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMTEtMDQgMDU6MjQ6NTEiO3M6NDoic2FsdCI7czo2NDoiNDI3NDUyZDlhOGRlMjg3MjdjNjE0MWYyNjUyMjAyY2VlN2I2YjMzNjZjNzhkOTVjZTZmODJlMjRhOGE0NmVjZCI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjQ6InJvbGUiO3M6MToiMiI7czoxMDoiZXhwaXJ5RGF0ZSI7TjtzOjEwOiJjdXN0b21lcklkIjtzOjE6IjEiO3M6MTE6ImN1c3RvbWVyU2ZuIjtzOjEzOiJIb3VzdG9uRGV2LVRBIjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicm9sZU5hbWUiO3M6MTA6InN1cGVydmlzb3IiO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "478">
                <td id="user-478">478</td>
                <td>Dipin_testing_UTC1</td>
                <td>Dipin_testing_UTC1</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Supervisor</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/03/2021 06:53                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="478" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="478" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDc4IjtzOjg6InVzZXJuYW1lIjtzOjE4OiJEaXBpbl90ZXN0aW5nX1VUQzEiO3M6NDoibmFtZSI7czoxODoiRGlwaW5fdGVzdGluZ19VVEMxIjtzOjU6ImVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCQzY2U2WnMvVTRPM25VMkxpSjBTb0FPSzBCVmJ3bHc1aDJJQVlqeE1Gbnh3WkpTSWtVZ3ZabSI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0xMS0wMyAwNjo1MzozMCI7czo0OiJzYWx0IjtzOjY0OiJiYWIxOTYzNzliZTFmMmJmOGM2NzhlNjM1OWMyN2M2MWZmNThiYzU4ZjkwOTY3ZDhlNGZkMjg2NDU0YjlhZjBiIjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIyIjtzOjEwOiJleHBpcnlEYXRlIjtzOjE5OiIyMDIxLTExLTEwIDA2OjUzOjMyIjtzOjEwOiJjdXN0b21lcklkIjtzOjE6IjEiO3M6MTE6ImN1c3RvbWVyU2ZuIjtzOjEzOiJIb3VzdG9uRGV2LVRBIjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicm9sZU5hbWUiO3M6MTA6InN1cGVydmlzb3IiO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "479">
                <td id="user-479">479</td>
                <td>Dipin_testing_newuser_email</td>
                <td>Dipin_testing_newuser_email</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Supervisor</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/03/2021 10:46                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="479" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="479" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDc5IjtzOjg6InVzZXJuYW1lIjtzOjI3OiJEaXBpbl90ZXN0aW5nX25ld3VzZXJfZW1haWwiO3M6NDoibmFtZSI7czoyNzoiRGlwaW5fdGVzdGluZ19uZXd1c2VyX2VtYWlsIjtzOjU6ImVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCR0c21tR2NCc244bEx0MHZRTG9Db2YuT056VlZWT3F3L0tnSW5ucU1wUkZzZVFKTWRrSHVUVyI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0xMS0wMyAxMDo0NjoyOCI7czo0OiJzYWx0IjtzOjY0OiJiNjIyY2QwM2VkYjZmY2M1ZTBmNzcwMGQxNWZhMzljYmE1NjA4Y2E5N2ExN2U0ZGRlNGRjOThhNTdjZmQyMWY5IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIyIjtzOjEwOiJleHBpcnlEYXRlIjtOO3M6MTA6ImN1c3RvbWVySWQiO3M6MToiMSI7czoxMToiY3VzdG9tZXJTZm4iO3M6MTM6IkhvdXN0b25EZXYtVEEiO3M6MTM6ImN1c3RvbWVyRW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJyb2xlTmFtZSI7czoxMDoic3VwZXJ2aXNvciI7czo1OiJyb2xlcyI7YTo0OntpOjE7czo1OiJhZG1pbiI7aToyO3M6MTA6InN1cGVydmlzb3IiO2k6MztzOjQ6InVzZXIiO2k6NDtzOjU6Imd1ZXN0Ijt9fQ==" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "480">
                <td id="user-480">480</td>
                <td>pta</td>
                <td>pta</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/03/2021 10:00                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="480" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="480" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDgwIjtzOjg6InVzZXJuYW1lIjtzOjM6InB0YSI7czo0OiJuYW1lIjtzOjM6InB0YSI7czo1OiJlbWFpbCI7czoxOToidmluZXNoLmN2QHRlYW10YS5pbiI7czo4OiJwYXNzd29yZCI7czo2MDoiJDJ5JDE0JFpKQnRtWFgwZGh4Zjg4dWJZOVQ2Ny5KR2Y3ZDFuUnFVcnYxWVRJTUpzUXBDSnJlcEtlenppIjtzOjEwOiJjcmVhdGVEYXRlIjtzOjE5OiIyMDIxLTExLTAzIDEwOjAwOjM2IjtzOjQ6InNhbHQiO3M6NjQ6IjczOGU2MTUzNDUyNTgxMDVhN2I5ODk4MDQ5YjU5YmQ3MjE3MWFkNGE1YmQ5ZjIyMDBhYjdlMWIyYzVkOTRhN2MiO3M6ODoiaXNBY3RpdmUiO3M6MToiMSI7czo0OiJyb2xlIjtzOjE6IjMiO3M6MTA6ImV4cGlyeURhdGUiO047czoxMDoiY3VzdG9tZXJJZCI7czoxOiIxIjtzOjExOiJjdXN0b21lclNmbiI7czoxMzoiSG91c3RvbkRldi1UQSI7czoxMzoiY3VzdG9tZXJFbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjQ6InVzZXIiO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "481">
                <td id="user-481">481</td>
                <td>ekm</td>
                <td>ekm</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/03/2021 10:17                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="481" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="481" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDgxIjtzOjg6InVzZXJuYW1lIjtzOjM6ImVrbSI7czo0OiJuYW1lIjtzOjM6ImVrbSI7czo1OiJlbWFpbCI7czoxOToidmluZXNoLmN2QHRlYW10YS5pbiI7czo4OiJwYXNzd29yZCI7czo2MDoiJDJ5JDE0JDBqY2xXcTdKZHpsRjd1YTBlOHNBM2VUemRhLnJRRnJvZmR1ZU1YYVZqY2RRLjBBbTRvdkRHIjtzOjEwOiJjcmVhdGVEYXRlIjtzOjE5OiIyMDIxLTExLTAzIDEwOjE3OjQ2IjtzOjQ6InNhbHQiO3M6NjQ6Ijg4ODVhOTM0ZTk1MjgxMzM3NmRhYTcwYmViYWYxNzNiNTI3MzliY2EyNDhlYWQ1OTViMjdlYmZhZThiYTVlY2UiO3M6ODoiaXNBY3RpdmUiO3M6MToiMSI7czo0OiJyb2xlIjtzOjE6IjMiO3M6MTA6ImV4cGlyeURhdGUiO047czoxMDoiY3VzdG9tZXJJZCI7czoxOiIxIjtzOjExOiJjdXN0b21lclNmbiI7czoxMzoiSG91c3RvbkRldi1UQSI7czoxMzoiY3VzdG9tZXJFbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjQ6InVzZXIiO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "482">
                <td id="user-482">482</td>
                <td>eagle</td>
                <td>eagle</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/03/2021 23:18                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="482" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="482" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDgyIjtzOjg6InVzZXJuYW1lIjtzOjU6ImVhZ2xlIjtzOjQ6Im5hbWUiO3M6NToiZWFnbGUiO3M6NToiZW1haWwiO3M6MTk6InZpbmVzaC5jdkB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCRxdXJzV1hiM0hFQm1HcG1sNXF5NjUuUjVWOVdTLkNXaW5NeEZ6Y3Z3cjQwZXJtZFg1Z2tiYSI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0xMS0wMyAyMzoxODo1MSI7czo0OiJzYWx0IjtzOjY0OiI3NGQxNzM0YjEzNWE3M2NmYjY5Zjk3NDRmZmFkMDFiZDZjYWE1NmM4YmZkNzRjODM0Y2I4ZmY2NGY2MGNjNjExIjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIzIjtzOjEwOiJleHBpcnlEYXRlIjtOO3M6MTA6ImN1c3RvbWVySWQiO3M6MToiMSI7czoxMToiY3VzdG9tZXJTZm4iO3M6MTM6IkhvdXN0b25EZXYtVEEiO3M6MTM6ImN1c3RvbWVyRW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJyb2xlTmFtZSI7czo0OiJ1c2VyIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "483">
                <td id="user-483">483</td>
                <td>red</td>
                <td>red</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/04/2021 00:04                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="483" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="483" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDgzIjtzOjg6InVzZXJuYW1lIjtzOjM6InJlZCI7czo0OiJuYW1lIjtzOjM6InJlZCI7czo1OiJlbWFpbCI7czoxOToidmluZXNoLmN2QHRlYW10YS5pbiI7czo4OiJwYXNzd29yZCI7czo2MDoiJDJ5JDE0JGZHQmhLamZxNHNwN1ZFcUZWVHpyRC5ldlI2ei5XSE1VOE41c1pkS213VGdwWFgvei9HaWt1IjtzOjEwOiJjcmVhdGVEYXRlIjtzOjE5OiIyMDIxLTExLTA0IDAwOjA0OjEwIjtzOjQ6InNhbHQiO3M6NjQ6ImQ3NGFmNTc4NjVjZDdlMGZkZWMwMTk1YzM3ZmRhNGUzMmVjMjc4YmUxNzgxZTlkZTM5Y2RlOGM3MTc3NGFkOTUiO3M6ODoiaXNBY3RpdmUiO3M6MToiMSI7czo0OiJyb2xlIjtzOjE6IjMiO3M6MTA6ImV4cGlyeURhdGUiO047czoxMDoiY3VzdG9tZXJJZCI7czoxOiIxIjtzOjExOiJjdXN0b21lclNmbiI7czoxMzoiSG91c3RvbkRldi1UQSI7czoxMzoiY3VzdG9tZXJFbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InJvbGVOYW1lIjtzOjQ6InVzZXIiO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "484">
                <td id="user-484">484</td>
                <td>green</td>
                <td>green</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/04/2021 00:05                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="484" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="484" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDg0IjtzOjg6InVzZXJuYW1lIjtzOjU6ImdyZWVuIjtzOjQ6Im5hbWUiO3M6NToiZ3JlZW4iO3M6NToiZW1haWwiO3M6MTk6InZpbmVzaC5jdkB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCQ5NkRLenRhUE9tMWE2Q1JkSUhQajd1a0I5S0ZEU1FyWUk5VlVObGxFOVYucEc3c1djTjJMaSI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0xMS0wNCAwMDowNTo1NCI7czo0OiJzYWx0IjtzOjY0OiI1NzczYzEwMmNlNDUwYTc0YjlkYTdlODY2ZTQzNDM1MDY2NjJlMDliNDEyNjE5YmQ5NDBkYzg4M2ViNWI0ZmVlIjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIzIjtzOjEwOiJleHBpcnlEYXRlIjtOO3M6MTA6ImN1c3RvbWVySWQiO3M6MToiMSI7czoxMToiY3VzdG9tZXJTZm4iO3M6MTM6IkhvdXN0b25EZXYtVEEiO3M6MTM6ImN1c3RvbWVyRW1haWwiO3M6MTg6ImRpcGluLnZhQHRlYW10YS5pbiI7czo4OiJyb2xlTmFtZSI7czo0OiJ1c2VyIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "485">
                <td id="user-485">485</td>
                <td>pink</td>
                <td>pink</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/04/2021 00:06                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="485" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="485" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDg1IjtzOjg6InVzZXJuYW1lIjtzOjQ6InBpbmsiO3M6NDoibmFtZSI7czo0OiJwaW5rIjtzOjU6ImVtYWlsIjtzOjE5OiJ2aW5lc2guY3ZAdGVhbXRhLmluIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkclFIRkxlVkFMWHBteE1aT1loaS4vZVI4enY5Ynh0YjV1RFp5ZlhsRkhCTVg4ekxCQTRod1ciO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMTEtMDQgMDA6MDY6NTAiO3M6NDoic2FsdCI7czo2NDoiODc2YjA2YjQ5N2RjOGY5NzAxMTZlMmEzNjI1NjRmZTYxYmRmMmMyYTA4ZWMxNTAyMWZmZGVmOTBiMWRjZmJhZSI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjQ6InJvbGUiO3M6MToiMyI7czoxMDoiZXhwaXJ5RGF0ZSI7TjtzOjEwOiJjdXN0b21lcklkIjtzOjE6IjEiO3M6MTE6ImN1c3RvbWVyU2ZuIjtzOjEzOiJIb3VzdG9uRGV2LVRBIjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicm9sZU5hbWUiO3M6NDoidXNlciI7czo1OiJyb2xlcyI7YTo0OntpOjE7czo1OiJhZG1pbiI7aToyO3M6MTA6InN1cGVydmlzb3IiO2k6MztzOjQ6InVzZXIiO2k6NDtzOjU6Imd1ZXN0Ijt9fQ==" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "486">
                <td id="user-486">486</td>
                <td>Dipin_testing_utc122</td>
                <td>Dipin_testing_utc122</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="1">HoustonDev-TA</span>
                </td>
                <td class="createDate">11/04/2021 05:33                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="486" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="486" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDg2IjtzOjg6InVzZXJuYW1lIjtzOjIwOiJEaXBpbl90ZXN0aW5nX3V0YzEyMiI7czo0OiJuYW1lIjtzOjIwOiJEaXBpbl90ZXN0aW5nX3V0YzEyMiI7czo1OiJlbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkSk43U2pWZk1vVFdXQ0RjdHVjby4xdXFHTUlYOVUvUWZJQlR4TDlqdXlFWFh5dy5lTWRGenUiO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMTEtMDQgMDU6MzM6MTUiO3M6NDoic2FsdCI7czo2NDoiZjYxNTQ2ZWZjYzQ4OTUzZDM4YTVlMTliYWFiY2E5OWZkMDQ0MDQzNzFlMGJhMzkzNDc1NjVmMTNiZWY2NjliZCI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjQ6InJvbGUiO3M6MToiMyI7czoxMDoiZXhwaXJ5RGF0ZSI7TjtzOjEwOiJjdXN0b21lcklkIjtzOjE6IjEiO3M6MTE6ImN1c3RvbWVyU2ZuIjtzOjEzOiJIb3VzdG9uRGV2LVRBIjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjE4OiJkaXBpbi52YUB0ZWFtdGEuaW4iO3M6ODoicm9sZU5hbWUiO3M6NDoidXNlciI7czo1OiJyb2xlcyI7YTo0OntpOjE7czo1OiJhZG1pbiI7aToyO3M6MTA6InN1cGVydmlzb3IiO2k6MztzOjQ6InVzZXIiO2k6NDtzOjU6Imd1ZXN0Ijt9fQ==" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "487">
                <td id="user-487">487</td>
                <td>Rakesh</td>
                <td>Rakesh</td>
                <td>rakesh.l@travancoreanalytics.com</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Supervisor</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="32556">Rakesh</span>
                </td>
                <td class="createDate">01/03/2022 04:40                </td>
                <td class="actions">
                                                        
                  <a href="" data-id="487" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDg3IjtzOjg6InVzZXJuYW1lIjtzOjY6IlJha2VzaCI7czo0OiJuYW1lIjtzOjY6IlJha2VzaCI7czo1OiJlbWFpbCI7czozMjoicmFrZXNoLmxAdHJhdmFuY29yZWFuYWx5dGljcy5jb20iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCR0ZDduTGpQQW5WeTBDLzdsMTJrYVFPZEgxMkNaYzhhOURLeExRWjlYYmN1RzlCSG9PenNXSyI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMi0wMS0wMyAwNDo0MDowNyI7czo0OiJzYWx0IjtzOjY0OiIwYWM5MzhjYzdhMWYwYjI2MDg4NjQzMjkzOWE0MjliZmM2MDk1YzY4YWM5Zjg2NjM3MjIzOTE4YjM4MWZiYzcxIjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIyIjtzOjEwOiJleHBpcnlEYXRlIjtOO3M6MTA6ImN1c3RvbWVySWQiO3M6NToiMzI1NTYiO3M6MTE6ImN1c3RvbWVyU2ZuIjtzOjY6IlJha2VzaCI7czoxMzoiY3VzdG9tZXJFbWFpbCI7czozMjoicmFrZXNoLmxAdHJhdmFuY29yZWFuYWx5dGljcy5jb20iO3M6ODoicm9sZU5hbWUiO3M6MTA6InN1cGVydmlzb3IiO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "488">
                <td id="user-488">488</td>
                <td>Rakesh_user</td>
                <td>Rakesh_user</td>
                <td>rakesh.l@travancoreanalytics.com</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="32556">Rakesh</span>
                </td>
                <td class="createDate">01/03/2022 04:43                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="488" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="488" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDg4IjtzOjg6InVzZXJuYW1lIjtzOjExOiJSYWtlc2hfdXNlciI7czo0OiJuYW1lIjtzOjExOiJSYWtlc2hfdXNlciI7czo1OiJlbWFpbCI7czozMjoicmFrZXNoLmxAdHJhdmFuY29yZWFuYWx5dGljcy5jb20iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCRuYmZGeVU0a0lPaVV2NzdOay5mWUdPaFJ0dnBxb1BUU0VYNG04TXowNTF4NGJkbGhMUndOUyI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMi0wMS0wMyAwNDo0Mzo0OSI7czo0OiJzYWx0IjtzOjY0OiI1M2Y5OTRjYmUyOTY2NTAyMDc4NmM2M2JlNTdkZmEyNGEyY2NkN2IzZmI5MjdlNzQzN2NmYzhlMmUzYjAyMDY4IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiIzIjtzOjEwOiJleHBpcnlEYXRlIjtzOjE5OiIyMDIyLTAxLTEwIDEwOjQzOjUxIjtzOjEwOiJjdXN0b21lcklkIjtzOjU6IjMyNTU2IjtzOjExOiJjdXN0b21lclNmbiI7czo2OiJSYWtlc2giO3M6MTM6ImN1c3RvbWVyRW1haWwiO3M6MzI6InJha2VzaC5sQHRyYXZhbmNvcmVhbmFseXRpY3MuY29tIjtzOjg6InJvbGVOYW1lIjtzOjQ6InVzZXIiO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "490">
                <td id="user-490">490</td>
                <td>Rakesh_user2</td>
                <td>Rakesh_user2</td>
                <td>rakesh.l@travancoreanalytics.com</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>User</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id="32556">Rakesh</span>
                </td>
                <td class="createDate">01/03/2022 21:53                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="490" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="490" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTU6e3M6MjoiaWQiO3M6MzoiNDkwIjtzOjg6InVzZXJuYW1lIjtzOjEyOiJSYWtlc2hfdXNlcjIiO3M6NDoibmFtZSI7czoxMjoiUmFrZXNoX3VzZXIyIjtzOjU6ImVtYWlsIjtzOjMyOiJyYWtlc2gubEB0cmF2YW5jb3JlYW5hbHl0aWNzLmNvbSI7czo4OiJwYXNzd29yZCI7czo2MDoiJDJ5JDE0JHYyWGRXTEV4SFV5OWhKZlZUY0dtaWVMa0tjU1hMLnExRkMvY2FtZzBvSzhUdXZtWDNhb25DIjtzOjEwOiJjcmVhdGVEYXRlIjtzOjE5OiIyMDIyLTAxLTAzIDIxOjUzOjI5IjtzOjQ6InNhbHQiO3M6NjQ6ImQxMDMyMWI1MDNhODQ3NmVmM2M3NTgwZjE2ZTk4NDRmMDJiNzA0ZTE0NjEzZjdjMDhmY2NmYjg5ZTM1MTk4YTIiO3M6ODoiaXNBY3RpdmUiO3M6MToiMSI7czo0OiJyb2xlIjtzOjE6IjMiO3M6MTA6ImV4cGlyeURhdGUiO047czoxMDoiY3VzdG9tZXJJZCI7czo1OiIzMjU1NiI7czoxMToiY3VzdG9tZXJTZm4iO3M6NjoiUmFrZXNoIjtzOjEzOiJjdXN0b21lckVtYWlsIjtzOjMyOiJyYWtlc2gubEB0cmF2YW5jb3JlYW5hbHl0aWNzLmNvbSI7czo4OiJyb2xlTmFtZSI7czo0OiJ1c2VyIjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "414">
                <td id="user-414">414</td>
                <td>guestofvinesh</td>
                <td>guestofvinesh</td>
                <td>vinesh.cv@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Guest</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id=""></span>
                </td>
                <td class="createDate">08/13/2021 12:48                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="414" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="414" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTI6e3M6MjoiaWQiO3M6MzoiNDE0IjtzOjg6InVzZXJuYW1lIjtzOjEzOiJndWVzdG9mdmluZXNoIjtzOjQ6Im5hbWUiO3M6MTM6Imd1ZXN0b2Z2aW5lc2giO3M6NToiZW1haWwiO3M6MTk6InZpbmVzaC5jdkB0ZWFtdGEuaW4iO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxNCRxVHhMeEFnTUVYd3VtVnVEUWRUU3kuT3RhV3lIRDRWQVpualhNaTd5Tnc2Rkw0THpIQ3YuTyI7czoxMDoiY3JlYXRlRGF0ZSI7czoxOToiMjAyMS0wOC0xMyAxMjo0ODozMyI7czo0OiJzYWx0IjtzOjY0OiJjMWU3YzY3Y2YwMjZmZWNiZTYyZGViNWQ2MjgyYWQ4Mjg5NjA2ZGYxZTI1ODYyODc4YWYyMDg4ODM1OTc2YWU1IjtzOjg6ImlzQWN0aXZlIjtzOjE6IjEiO3M6NDoicm9sZSI7czoxOiI0IjtzOjEwOiJleHBpcnlEYXRlIjtOO3M6ODoicm9sZU5hbWUiO3M6NToiZ3Vlc3QiO3M6NToicm9sZXMiO2E6NDp7aToxO3M6NToiYWRtaW4iO2k6MjtzOjEwOiJzdXBlcnZpc29yIjtpOjM7czo0OiJ1c2VyIjtpOjQ7czo1OiJndWVzdCI7fX0=" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "415">
                <td id="user-415">415</td>
                <td>guestunderSA</td>
                <td>guestunderSA</td>
                <td>VINESH.CV@TEAMTA.IN</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Guest</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id=""></span>
                </td>
                <td class="createDate">08/13/2021 12:49                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="415" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="415" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTI6e3M6MjoiaWQiO3M6MzoiNDE1IjtzOjg6InVzZXJuYW1lIjtzOjEyOiJndWVzdHVuZGVyU0EiO3M6NDoibmFtZSI7czoxMjoiZ3Vlc3R1bmRlclNBIjtzOjU6ImVtYWlsIjtzOjE5OiJWSU5FU0guQ1ZAVEVBTVRBLklOIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkbEd1L1V4TW5ON2pPcVF6TFhHc2RIZVYxYk5tUVoyN04vc05qbHJ1TGtQUXZpVzI0dzJqMVciO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMDgtMTMgMTI6NDk6NTIiO3M6NDoic2FsdCI7czo2NDoiMmY0Y2Q2ZmUwOTkwMmE1MDJjYWVhMTI1ZGYzZGMxNmMzMDQ0NDgzNGFjNTgzMDk5NWVlZjBlZGY5ZDc0OGE4ZCI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjQ6InJvbGUiO3M6MToiNCI7czoxMDoiZXhwaXJ5RGF0ZSI7TjtzOjg6InJvbGVOYW1lIjtzOjU6Imd1ZXN0IjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                            <tr class="" data-id = "417">
                <td id="user-417">417</td>
                <td>HoustonDev_Guest1</td>
                <td>HoustonDev_Guest1</td>
                <td>dipin.va@teamta.in</td>
                <td class="text-center"><i class="fa fa-check color-green"></i></td>
                <td>Guest</td>
                <td class="text-left">
                  <span class="pull-left customer-email" data-customer-id=""></span>
                </td>
                <td class="createDate">08/13/2021 12:50                </td>
                <td class="actions">
                                                            <a href="" class="action-delete confirm-delete-popup" data-target="#deleteModal" data-id="417" data-action="deleteUser" data-name="user" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                      
                  <a href="" data-id="417" class="action-edit" data-target="user" data-hidden-user="Tzo4OiJzdGRDbGFzcyI6MTI6e3M6MjoiaWQiO3M6MzoiNDE3IjtzOjg6InVzZXJuYW1lIjtzOjE3OiJIb3VzdG9uRGV2X0d1ZXN0MSI7czo0OiJuYW1lIjtzOjE3OiJIb3VzdG9uRGV2X0d1ZXN0MSI7czo1OiJlbWFpbCI7czoxODoiZGlwaW4udmFAdGVhbXRhLmluIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTQkcTdlNTNuVWtyS01JVk83V0ExZVkzZUZ4TTlOLlNEbFk0RGZGMXpaT01Ud3cxNk1sNzFjRk8iO3M6MTA6ImNyZWF0ZURhdGUiO3M6MTk6IjIwMjEtMDgtMTMgMTI6NTA6NTUiO3M6NDoic2FsdCI7czo2NDoiMDhlYWZiMzU5MzJjNTkwMTFmNzFhOGFiNTFiM2NiOGEyMzFiZmI5YzlmYWVkZDkzY2NjZTliM2U4NTNiYzVjZCI7czo4OiJpc0FjdGl2ZSI7czoxOiIxIjtzOjQ6InJvbGUiO3M6MToiNCI7czoxMDoiZXhwaXJ5RGF0ZSI7TjtzOjg6InJvbGVOYW1lIjtzOjU6Imd1ZXN0IjtzOjU6InJvbGVzIjthOjQ6e2k6MTtzOjU6ImFkbWluIjtpOjI7czoxMDoic3VwZXJ2aXNvciI7aTozO3M6NDoidXNlciI7aTo0O3M6NToiZ3Vlc3QiO319" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
                          </tbody>
          </table>
                  </div>
      </section>
      <!-- end: page -->
    </section>

      </div> <!--inner-wrapper-->
    </section> <!--end section body-->

        <script src="http://18.188.105.113/www-hrserver-release/assets/js/jquery.min.js"></script>
        <script src="http://18.188.105.113/www-hrserver-release/assets/js/bootstrap.min.js"></script>
    <!--mobile-->
    <script src="http://18.188.105.113/www-hrserver-release/assets/js/jquery.browser.mobile.js"></script>

        <script>
      //site related variables
      var base_url = 'http://18.188.105.113/www-hrserver-release/';
      var site_env = 'prod';
      var page_name = 'Admin';
      var customer_name = 'HoustonDev-TA';
      var location_no = "";
      var default_customer = 'HoustonDev-TA';
      var radar_email_contact = "dipin.va@teamta.in";
    </script>
    <script src="http://18.188.105.113/www-hrserver-release/assets/js/app.admin.min.js"></script>

    <script src="http://18.188.105.113/www-hrserver-release/assets/js/validation.js?v=2.123"></script>
        <script src="http://18.188.105.113/www-hrserver-release/assets/js/init-admin.js?v=2.123"></script>
    <script src="http://18.188.105.113/www-hrserver-release/assets/js/jquery.tables-all.min.js"></script>
    <script>
      $(document).ready(function() {
        var groupColumn = 0;
        $('#datatable-tokens').dataTable({
            "scrollX": true,
            "order": [[ groupColumn, 'desc' ]],
            responsive:true
        });
        $('#datatable-default').dataTable({
            "scrollX": true,
        });
        $('#datatable-locations').dataTable({
            "scrollX": true,
            "autoWidth": true,
            "columnDefs": [
            { "width": "8%", "targets": 10 }
            ]
        });

        $('#datatable-tags').dataTable({
            "scrollX": true,
            "autoWidth": true,
            columnDefs: [{ orderable: false, targets: -1 }],
        });
    });
    </script>
    <script>
      $('#tag-name').keypress(function(event) {
          if (event.keyCode == 13) {
              event.preventDefault();
          }
      });
    </script>

  </body>
</html>
