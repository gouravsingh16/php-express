<?php
     
 include('conection.php');
 session_start();
 if(isset($_SESSION['userName'])){

}
else{
  header("location:../../../login.php");
}




if(isset($_POST['submit2'])){
    $email = $_POST['email'];
    $oldpass=$_POST['oldpass'];
    $newpass=$_POST['newpass'];
    $cnfpass=$_POST['cnfpass'];
    // print_r($_POST);exit;
if( $newpass <> $cnfpass)

{
    echo "newpass and confirmpass is not mached";
   
}
else{
    $sql="SELECT  * from `users` WHERE `password`='".$oldpass."' ";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        $sql="UPDATE `users` set `password`='".$newpass."'WHERE `email`='".$email."' ";
        mysqli_query($conn,$sql);
        header("location:../../../login.php");
    }
    else{
        echo "old password does not match";
    }
}

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Account Settings | Looper - Bootstrap 4 Admin Theme </title>
    <meta property="og:title" content="Account Settings">
    <meta name="author" content="Beni Arisandi">
    <meta property="og:locale" content="en_US">
    <meta name="description" content="Responsive admin theme build on top of Bootstrap 4">
    <meta property="og:description" content="Responsive admin theme build on top of Bootstrap 4">
    <link rel="canonical" href="//uselooper.com">
    <meta property="og:url" content="//uselooper.com">
    <meta property="og:site_name" content="Looper - Bootstrap 4 Admin Theme">
    <script type="application/ld+json">
      



    </script>
    <!-- End SEO tag -->
    <!-- FAVICONS -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="uselooper-dashboard-template-masterassets/apple-touch-icon.png">
    <link rel="shortcut icon" href="uselooper-dashboard-template-masterassets/favicon.ico">
    <meta name="theme-color" content="#3063A0">
    <!-- End FAVICONS -->
    <script src="uselooper-dashboard-template-masterassets/vendor/pace/pace.min.js"></script>
    <!-- BEGIN BASE STYLES -->
    <link rel="stylesheet" href="uselooper-dashboard-template-master/assets/vendor/pace/pace.min.css">
    <link rel="stylesheet" href="uselooper-dashboard-template-master/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="uselooper-dashboard-template-master/assets/vendor/open-iconic/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="uselooper-dashboard-template-master/assets/vendor/font-awesome/css/fontawesome-all.min.css">
    <!-- END BASE STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="uselooper-dashboard-template-master/assets/stylesheets/main.min.css">
    <link rel="stylesheet" href="uselooper-dashboard-template-master/assets/stylesheets/custom.css">
    <!-- END THEME STYLES -->
  </head>
  <body>
    <!-- .app -->
    <div class="app">
      <!-- .app-header -->
      <header class="app-header">
        <!-- .top-bar -->
        <div class="top-bar">
          <!-- .top-bar-brand -->
          <div class="top-bar-brand">
            <a href="index.html">
              <img src="uselooper-dashboard-template-masterassets/images/brand-inverse.png" height="32" alt="">
            </a>
          </div>
          <!-- /.top-bar-brand -->
          <!-- .top-bar-list -->
          <div class="top-bar-list">
            <!-- .top-bar-item -->
            <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
              <!-- toggle menu -->
              <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="Menu" aria-controls="navigation">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
              <!-- /toggle menu -->
            </div>
            <button>
            <a class="nav-link" href="lopgout.php"
             class="btn btn-lg btn-primary btn-block" type="button"name =""   value ="">log out</button>
</a> 
            <!-- /.top-bar-item -->
            <!-- .top-bar-item -->
            <div class="top-bar-item top-bar-item-full" >
              <!-- .top-bar-search -->
              <div class="top-bar-search">
                <div class="input-group input-group-search">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <span class="oi oi-magnifying-glass"></span>
                    </span>
                  </div>
                  <input type="text" class="form-control" aria-label="Search" placeholder="Search"> </div>
              </div>
              <!-- /.top-bar-search -->
            </div>
            <!-- /.top-bar-item -->
            <!-- .top-bar-item -->
            <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
              <!-- .nav -->
              <ul class="header-nav nav">
                <!-- .nav-item -->
                <li class="">
                  <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class=""></span>
                  </a>

                </li>
                <!-- /.nav-item -->
                <!-- .nav-item -->
                <li class="nav-item dropdown header-nav-dropdown">
                  <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class=""></span>
                  </a>
                  <div class=""></div>
                  <!-- .dropdown-menu -->
                  <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                    <!-- .dropdown-sheets -->
                    <div class="dropdown-sheets">
                      <!-- .dropdown-sheet-item -->
                      <div class="dropdown-sheet-item">
                        <a href="#" class="">
                          <span class="tile tile-lg bg-indigo">
                          
                      <!-- /.dropdown-sheet-item -->
                      <!-- .dropdown-sheet-item -->
                     
                      <!-- /.dropdown-sheet-item -->
                      <!-- .dropdown-sheet-item -->
                     
                      <!-- /.dropdown-sheet-item -->
                      <!-- .dropdown-sheet-item -->
                      
                      <!-- /.dropdown-sheet-item -->
                      <!-- .dropdown-sheet-item -->
                   
                        </a>
                      </div>
                      <!-- /.dropdown-sheet-item -->
                    </div>
                    <!-- .dropdown-sheets -->
                  </div>
                  <!-- .dropdown-menu -->
                </li>
                <!-- /.nav-item -->
              </ul>
              <!-- /.nav -->
              <!-- .btn-account -->
              <div class="dropdown">
                <button class="btn-account d-none d-md-flex" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="user-avatar">
                    <img src="uselooper-dashboard-template-master/assets/images/avatars/uifaces15.jpg" alt="">
                  </span>
                  <span class="account-summary pr-lg-4 d-none d-lg-block">
                    <span class="account-name"><?php  echo $_SESSION['userfName']. $_SESSION['userlName']; ?></span>
                    <span class="account-description"></span>
                  </span>
                </button>
                <div class="dropdown-arrow dropdown-arrow-left"></div>
                <!-- .dropdown-menu -->
                <div class="dropdown-menu">
                  <h6 class="dropdown-header d-none d-md-block d-lg-none"> <?php  echo $_SESSION['userfName']. $_SESSION['userlName']; ?> </h6>
                  <a class="dropdown-item" href="user-profile.html">
                 <a class="dropdown-item" href="auth-signin-v1.html">
                    <span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                  <div class="dropdown-divider"></div>
              >
                  
                </div>
                <!-- /.dropdown-menu -->
              </div>
              <!-- /.btn-account -->
            </div>
            <!-- /.top-bar-item -->
          </div>
          <!-- /.top-bar-list -->
        </div>
        <!-- /.top-bar -->
      </header>
      <!-- /.app-header -->
      <!-- .app-aside -->
      <aside class="app-aside">
        <!-- .aside-content -->
        <div class="aside-content">
          <!-- .aside-header -->
          <header class="aside-header d-block d-md-none">
            <!-- .btn-account -->
            <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside">
              <span class="user-avatar user-avatar-lg">
                <img src="uselooper-dashboard-template-master/assets/images/avatars/uifaces15.jpg" alt="">
              </span>
              <span class="account-icon">
                <span class="fa fa-caret-down fa-lg"> </span>
              </span>
              <span class="account-summary">
                <span class="account-name"><?php  echo $_SESSION['userfName']. $_SESSION['userlName']; ?></span>
                <span class="account-description">Marketing Manager</span>
              </span>
            </button>
            <!-- /.btn-account -->
            <!-- .dropdown-aside -->
            <div id="dropdown-aside" class="dropdown-aside collapse">
              <!-- dropdown-items -->
              <div class="pb-3">
            
                <a class="dropdown-item" href="auth-signin-v1.html">
                  <span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                <div class="dropdown-divider"></div>
         
              </div>
              <!-- /dropdown-items -->
            </div>
            <!-- /.dropdown-aside -->
          </header>
          <!-- /.aside-header -->
          <!-- .aside-menu -->
          <section class="aside-menu has-scrollable">
            <!-- .stacked-menu -->
            <nav id="stacked-menu" class="stacked-menu">
              <!-- .menu -->
              <ul class="menu">
                <!-- .menu-item -->
               






                  




                <!-- .menu-item -->
                <li class="menu-item has-active has-child">
                  <a href="#" class="menu-link">
                    <span class="menu-icon oi oi-people"></span>
                    <span class="menu-text">User</span>
                  </a>
                  <!-- child menu -->
                  <ul class="menu">
                

                      <a href="" class="menu-link">Account Settings</a>
                    </li>
                  
                    </li>
                  </ul>
                  <!-- /child menu -->
                </li>
                <!-- /.menu-item -->
                <!-- .menu-item -->
                












        <!-- /.aside-content -->
      </aside>
      <!-- /.app-aside -->
      <!-- .app-main -->
      <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-cover -->
            <header class="page-cover">
              <div class="text-center">
              
                <a href="user-profile.html" class="user-avatar user-avatar-xl">
                  <img src="uselooper-dashboard-template-master/assets/images/avatars/uifaces15.jpg" alt="User Avatar">
                </a>
                <h2 class="h4 mt-3 mb-0"> <?php  echo $_SESSION['userfName']. $_SESSION['userlName']; ?></h2>
                <div class="my-1">
               
                </div>
                
                
              </div>
              <!-- .cover-controls -->
              <div class="cover-controls cover-controls-bottom">
            
              </div>
              <!-- /.cover-controls -->
            </header>
            <!-- /.page-cover -->
            <!-- Followers Modal -->
            <!-- .modal -->
            <div class="modal fade" id="followersModal" tabindex="-1" role="dialog" aria-labelledby="followersModalLabel" aria-hidden="true">
              <!-- .modal-dialog -->
              <div class="modal-dialog modal-dialog-overflow" role="document">
                <!-- .modal-content -->
                <div class="modal-content">
                  <!-- .modal-header -->
                  <div class="modal-header">
                    <h6 class="modal-title"> Followers </h6>
                  </div>
                  <!-- /.modal-header -->
                  <!-- .modal-body -->
                  <div class="modal-body px-0">
                    <!-- .list-group -->
                    <div class="list-group list-group-flush list-group-divider border">
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="uselooper-dashboard-template-master/assets/images/avatars/uifaces2.jpg" alt="Sarah Bishop">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Sarah Bishop</a>
                          </h4>
                          <p class="list-group-item-text"> Designer </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button type="button" class="btn btn-sm btn-primary">Follow</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="uselooper-dashboard-template-master/assets/images/avatars/uifaces3.jpg" alt="Johnny Day">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Johnny Day</a>
                          </h4>
                          <p class="list-group-item-text"> Computer Hardware Engineer </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button type="button" class="btn btn-sm btn-primary">Follow</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="uselooper-dashboard-template-master/assets/images/avatars/uifaces4.jpg" alt="Jane Barnes">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Jane Barnes</a>
                          </h4>
                          <p class="list-group-item-text"> Social Worker </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button type="button" class="btn btn-sm btn-secondary">Following</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="uselooper-dashboard-template-master/assets/images/avatars/uifaces5.jpg" alt="Nicole Barnett">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Nicole Barnett</a>
                          </h4>
                          <p class="list-group-item-text"> Marketing Manager </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button type="button" class="btn btn-sm btn-primary">Follow</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="uselooper-dashboard-template-master/assets/images/avatars/uifaces6.jpg" alt="Michael Ward">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Michael Ward</a>
                          </h4>
                          <p class="list-group-item-text"> Lawyer </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button type="button" class="btn btn-sm btn-secondary">Following</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="uselooper-dashboard-template-master/assets/images/avatars/uifaces7.jpg" alt="Craig Hansen">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Craig Hansen</a>
                          </h4>
                          <p class="list-group-item-text"> Software Developer </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button type="button" class="btn btn-sm btn-primary">Follow</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="uselooper-dashboard-template-master/assets/images/avatars/uifaces8.jpg" alt="Juan Fuller">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Juan Fuller</a>
                          </h4>
                          <p class="list-group-item-text"> Budget analyst </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button type="button" class="btn btn-sm btn-secondary">Following</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="uselooper-dashboard-template-master/assets/images/avatars/uifaces9.jpg" alt="Julia Silva">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Julia Silva</a>
                          </h4>
                          <p class="list-group-item-text"> Photographer </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button type="button" class="btn btn-sm btn-primary">Follow</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="uselooper-dashboard-template-master/assets/images/avatars/uifaces10.jpg" alt="Joe Hanson">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Joe Hanson</a>
                          </h4>
                          <p class="list-group-item-text"> Logistician </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button type="button" class="btn btn-sm btn-secondary">Following</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="uselooper-dashboard-template-master/assets/images/avatars/uifaces11.jpg" alt="Brenda Griffin">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Brenda Griffin</a>
                          </h4>
                          <p class="list-group-item-text"> Medical Assistant </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button type="button" class="btn btn-sm btn-primary">Follow</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="uselooper-dashboard-template-master/assets/images/avatars/uifaces12.jpg" alt="Ryan Jimenez">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Ryan Jimenez</a>
                          </h4>
                          <p class="list-group-item-text"> Photographer </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button type="button" class="btn btn-sm btn-primary">Follow</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="uselooper-dashboard-template-master/assets/images/avatars/uifaces13.jpg" alt="Cynthia Clark">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Cynthia Clark</a>
                          </h4>
                          <p class="list-group-item-text"> Computer Systems Analyst </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button type="button" class="btn btn-sm btn-primary">Follow</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="uselooper-dashboard-template-master/assets/images/avatars/uifaces14.jpg" alt="Bryan Hayes">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Bryan Hayes</a>
                          </h4>
                          <p class="list-group-item-text"> Web Developer </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button type="button" class="btn btn-sm btn-primary">Follow</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="uselooper-dashboard-template-master/assets/images/avatars/uifaces15.jpg" alt="Martha Myers">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Martha Myers</a>
                          </h4>
                          <p class="list-group-item-text"> Writer </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button type="button" class="btn btn-sm btn-primary">Follow</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="uselooper-dashboard-template-master/assets/images/avatars/uifaces16.jpg" alt="Tammy Beck">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Tammy Beck</a>
                          </h4>
                          <p class="list-group-item-text"> Designer </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button type="button" class="btn btn-sm btn-primary">Follow</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="uselooper-dashboard-template-master/assets/images/avatars/uifaces17.jpg" alt="Susan Kelley">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Susan Kelley</a>
                          </h4>
                          <p class="list-group-item-text"> Web Developer </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button type="button" class="btn btn-sm btn-secondary">Following</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="uselooper-dashboard-template-master/assets/images/avatars/uifaces18.jpg" alt="Albert Newman">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Albert Newman</a>
                          </h4>
                          <p class="list-group-item-text"> Web Developer </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button type="button" class="btn btn-sm btn-primary">Follow</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="uselooper-dashboard-template-master/assets/images/avatars/uifaces19.jpg" alt="Kyle Grant">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Kyle Grant</a>
                          </h4>
                          <p class="list-group-item-text"> Designer </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button type="button" class="btn btn-sm btn-primary">Follow</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                    </div>
                    <!-- /.list-group -->
                    <!-- .loading -->
                    <div class="loading border-bottom">
                      <div class="loader loader-sm"></div>
                      <div class="sr-only"> Loading more content </div>
                    </div>
                    <!-- /.loading -->
                  </div>
                  <!-- /.modal-body -->
                  <!-- .modal-footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                  </div>
                  <!-- /.modal-footer -->
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- /Followers Modal -->
            <!-- Following Modal -->
            <!-- .modal -->
            <div class="modal fade" id="followingModal" tabindex="-1" role="dialog" aria-labelledby="followingModalLabel" aria-hidden="true">
              <!-- .modal-dialog -->
              <div class="modal-dialog modal-dialog-overflow" role="document">
                <!-- .modal-content -->
                <div class="modal-content">
                  <!-- .modal-header -->
                  <div class="modal-header">
                    <h6 class="modal-title"> Following </h6>
                  </div>
                  <!-- /.modal-header -->
                  <!-- .modal-body -->
                  <div class="modal-body px-0">
                    <!-- .list-group -->
                    <div class="list-group list-group-flush list-group-divider border">
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="assets/images/avatars/uifaces2.jpg" alt="Sarah Bishop">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Sarah Bishop</a>
                          </h4>
                          <p class="list-group-item-text"> Designer </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="uselooper-dashboard-template-master/assets/images/avatars/uifaces3.jpg" alt="Johnny Day">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Johnny Day</a>
                          </h4>
                          <p class="list-group-item-text"> Computer Hardware Engineer </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="uselooper-dashboard-template-master/assets/images/avatars/uifaces4.jpg" alt="Jane Barnes">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Jane Barnes</a>
                          </h4>
                          <p class="list-group-item-text"> Social Worker </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="uselooper-dashboard-template-master/assets/images/avatars/uifaces5.jpg" alt="Nicole Barnett">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Nicole Barnett</a>
                          </h4>
                          <p class="list-group-item-text"> Marketing Manager </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="uselooper-dashboard-template-master/assets/images/avatars/uifaces6.jpg" alt="Michael Ward">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Michael Ward</a>
                          </h4>
                          <p class="list-group-item-text"> Lawyer </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="uselooper-dashboard-template-master/assets/images/avatars/uifaces7.jpg" alt="Craig Hansen">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Craig Hansen</a>
                          </h4>
                          <p class="list-group-item-text"> Software Developer </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="uselooper-dashboard-template-master/assets/images/avatars/uifaces8.jpg" alt="Juan Fuller">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Juan Fuller</a>
                          </h4>
                          <p class="list-group-item-text"> Budget analyst </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="uselooper-dashboard-template-master/assets/images/avatars/uifaces15.jpg" alt="Julia Silva">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Julia Silva</a>
                          </h4>
                          <p class="list-group-item-text"> Photographer </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="uselooper-dashboard-template-master/assets/images/avatars/uifaces10.jpg" alt="Joe Hanson">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Joe Hanson</a>
                          </h4>
                          <p class="list-group-item-text"> Logistician </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="assets/images/avatars/uifaces11.jpg" alt="Brenda Griffin">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Brenda Griffin</a>
                          </h4>
                          <p class="list-group-item-text"> Medical Assistant </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="assets/images/avatars/uifaces12.jpg" alt="Ryan Jimenez">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Ryan Jimenez</a>
                          </h4>
                          <p class="list-group-item-text"> Photographer </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="assets/images/avatars/uifaces13.jpg" alt="Cynthia Clark">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Cynthia Clark</a>
                          </h4>
                          <p class="list-group-item-text"> Computer Systems Analyst </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="assets/images/avatars/uifaces14.jpg" alt="Bryan Hayes">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Bryan Hayes</a>
                          </h4>
                          <p class="list-group-item-text"> Web Developer </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="assets/images/avatars/uifaces15.jpg" alt="Martha Myers">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Martha Myers</a>
                          </h4>
                          <p class="list-group-item-text"> Writer </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="assets/images/avatars/uifaces16.jpg" alt="Tammy Beck">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Tammy Beck</a>
                          </h4>
                          <p class="list-group-item-text"> Designer </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button class="btn btn-sm btn-secondary">Following</button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="assets/images/avatars/uifaces17.jpg" alt="Susan Kelley">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Susan Kelley</a>
                          </h4>
                          <p class="list-group-item-text">   </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button class="btn btn-sm btn-secondary"></button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="assets/images/avatars/uifaces18.jpg" alt="Albert Newman">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Albert Newman</a>
                          </h4>
                          <p class="list-group-item-text">   </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button class="btn btn-sm btn-secondary"></button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar">
                            <img src="assets/images/avatars/uifaces19.jpg" alt="Kyle Grant">
                          </a>
                        </div>
                        <!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#"> </a>
                          </h4>
                          <p class="list-group-item-text">  </p>
                        </div>
                        <!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button class="btn btn-sm btn-secondary"></button>
                        </div>
                        <!-- /.list-group-item-figure -->
                      </div>
                      <!-- /.list-group-item -->
                    </div>
                    <!-- /.list-group -->
                    <!-- .loading -->
                    <div class="loading border-bottom">
                      <div class="loader loader-sm"></div>
                      <div class="sr-only"> Loading more content </div>
                    </div>
                    <!-- /.loading -->
                  </div>
                  <!-- /.modal-body -->
                  <!-- .modal-footer -->
                  <div class="modal-footer">
                  
                  </div>
                  <!-- /.modal-footer -->
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- /Following Modal -->
            <!-- .page-navs -->
            <nav class="page-navs">
              <!-- .nav-scroller -->
              <div class="nav-scroller">
                <!-- .nav -->
                <div class="nav nav-center nav-tabs border-0">
              
                  </a>
                
                </div>
                <!-- /.nav -->
              </div>
              <!-- /.nav-scroller -->
            </nav>
            <!-- /.page-navs -->
            <!-- .page-inner -->
            <div class="page-inner">
              <!-- .page-title-bar -->
              <header class="page-title-bar">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                     
                        <i class=""></i><?php  echo $_SESSION['userfName']. $_SESSION['userlName']; ?></a>
                    </li>
                  </ol>
                </nav>
              </header>
              <!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- grid row -->
                <div class="row">
                  <!-- grid column -->
                  <div class="col-lg-4">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <h6 class="card-header"> Your Details </h6>
                      <!-- .nav -->
                      <nav class="nav nav-tabs flex-column">
                      
                      <a href="addblog.php" class="nav-link active">ADD BLOG</a>
                        <a href="account.php" class="nav-link active">CHANGE PASWORD</a>
                        
                        <a href="profile.php" class="nav-link active">PROFILE</a>
                        
                      </nav>
                      <!-- /.nav -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /grid column -->
                  <!-- grid column -->
                  <div class="col-lg-8">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <h6 class="card-header"> Account </h6>
                      <!-- .card-body -->
                      <div class="card-body">
                        <!-- form -->
                        <form  action="" method="post">
                          <!-- form row -->
                          <div class="form-row">
                            <!-- form column -->
                            <div class="col-md-6 mb-3">
                             
                            <!-- /form column -->
                            <!-- form column -->
                            <div class="col-md-6 mb-3">
                             
                            <!-- /form column -->
                          </div>

                          <div class="form-group">
                           
                            <small class="text-muted"></small>
                          </div>
                          <!-- /form row -->
                          <!-- .form-group -->
                          <div class="form-group">
                            <label for="input03">Email</label>
                            <input type="text" class="custom-file" id="email" name="email" value="<?php  echo $_SESSION['useremail']; ?>" required=""> </div>
                          <!-- /.form-group -->
                          <!-- .form-group -->
                          <div class="form-group">
                            <label for="inputnewPassword">New Password</label>
                            <input type="text"name="newpass"id="newpass" class="custom-file" for="inputnewPassword" placeholder="NEW PASSWORD" value="" required=""> </div>
                          <!-- /.form-group -->
                          <!-- .form-group -->
                          <label for="inputcnfPassword">Confirm Password</label>
                          <input type="text"class="custom-file" id="cnfpass" name="cnfpass"  placeholder="CONFIRM PASSWORD" value="">
                          <!-- /.form-group -->  
                          <hr>
                          <!-- .form-actions -->
                          <div class="form-actions">
                            <!-- enable submit btn when user type their current password -->
                            <input type="text"name="oldpass"id="oldpass" class="custom-file" id="oldpass" placeholder="ENTER CURRENT PASSWORD" required="">
                            <button type="submit2" name ="submit2" class="btn btn-primary">UPDATE PASSWORD</button>
                          </div>
                          <!-- /.form-actions -->
                        </form>
                        <!-- /form -->
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /grid column -->
                </div>
                <!-- /grid row -->
              </div>
              <!-- /.page-section -->
            </div>
            <!-- /.page-inner -->
          </div>
          <!-- /.page -->
        </div>
        <!-- /.wrapper -->
      </main>
      <!-- /.app-main -->
    </div>
    <!-- /.app -->
    <!-- BEGIN BASE JS -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="assets/vendor/stacked-menu/stacked-menu.min.js"></script>
    <script src="assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="assets/javascript/main.min.js"></script>
    <!-- END THEME JS -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116692175-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-116692175-1');
    </script>
  </body>
</html>