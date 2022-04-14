<?php

include('conectionfc.php');
$result= $conn->query("SELECT * FRom demo");
$custmers = $result->fetch_all(MYSQLI_ASSOC);

$nameErr = $emailErr = $passwordErr  = "";
      $name = $email = $password  = "";
      $validate = true;
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $result=$_POST;
        if (empty($_POST["name"])) {
          $nameErr = "Name is required";
          $validate = false;
        } else {
          $name = test_input($_POST["name"]);
          if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
            $nameErr = "only letter allowed";
            $validate = false;
          }
        }
        
        if (empty($_POST["email"])) {
          $emailErr = "Email is required";
          $validate = false;
        } else {
          $email = test_input($_POST["email"]);
          if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $emailErr="invalid email format";
            $validate = false;
          }
        }
        if (empty($_POST["password"])) {
          $passwordErr = "password is required";
          $validate = false;
        } else {
          $password = test_input($_POST["password"]);
          if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/',$password)){
            $passwordErr = " invalid password ";
            $validate = false;
        }
      }
    }

if(isset($_POST['submit'])){

   if(!empty($_GET['id'])){
    $sql = "UPDATE demo SET name='".$_POST['name']."',email='".$_POST['email']."',password='".$_POST['password']."' WHERE id=".$_GET['id'];
    $conn->query($sql)  or die ("query failed" ) ;
  }
 else{
   
  $sql = "INSERT INTO demo SET name='".$_POST['name']."',email='".$_POST['email']."',password='".$_POST['password']."'";

   $conn->query($sql)  or die ("query failed" ) ;
  }
}

if(!empty($_GET['id'])){
  $sql ="SELECT * FROM demo WHERE id=".$_GET['id'];
  $execute = $conn->query($sql) ;
  $result =  $execute->fetch_assoc();

}
 if(!empty($_GET['delete'])){
  $sql ="DELETE  FROM demo WHERE id=".$_GET['delete'];
 $conn->query($sql) ;
 
}




function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/dist/css/adminlte.min.css">

  <script src="AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>

</head> 
 
  <style>
    a{
      margin:5px;
      padding:5px;
    }
    a {
  display: inline-block;
}

 a {
  color: black;
 
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
}

.pagination a.active  {
  background-color: #4CAF50;
  color: white;
  border: 1px solid #4CAF50;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
  </style>
 
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="AdminLTE-3.2.0/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="AdminLTE-3.2.0/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
       
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="AdminLTE-3.2.0/index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
            
             
            </ul>
          </li>
      


          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              

              <li class="nav-item">
                <a href="admin.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="forms.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FORMS</p>
                </a>
              </li>
            </ul>
          </li>
         




         



      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->




<script > 
  
  function hello(){ 
   return  confirm("Are you sure you want to delete profile ?");
  }

    </script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <?php
$limit =  5;

if(isset($_GET['page'])){
  $page = $_GET['page'];
}else{
  $page = 1;
}


$offset = ($page - 1)* $limit;

?>
  

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
            
            
 
        
                <table id="main" border="0" cellspacing="0">
    <tr>
      <td id="header">
        <h1></h1>

        <div id="search-bar">
          <label>Search :</label>
          <input type="text" id="search" autocomplete="off">
        </div>
      </td>
    </tr>
    <tr>
      <td id="table-form">
        <form id="addForm">
   
        </form>
      </td>
    </tr>
    <tr>
      <td id="table-data">
      </td>
    </tr>
  </table>
    
  <table id="ajaxTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>name</th>
                    <th>email</th>
                    <th>password</th>
                    <th>edit/update</th>
                    <th>delete</th>
                  </tr>
                  </thead>
        <tbody>

<?php
 $sql = "SELECT * from demo LIMIT $offset,  $limit ";
 $result = mysqli_query($conn,$sql) or die("query failed") ;
   while ($row = mysqli_fetch_assoc( $result)){
     ?>
    <tr  >
      <td><?php echo  $row['name'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?= $row['password'] ?></td>
      <td><a href = "forms.php?id=<?php echo $row['id']?>"><button type="button" class="btn btn-info">edit/update</button></td>
      <td><a href = "admin.php?delete=<?php echo $row['id']?>"> 
      <button class="btn-danger"data-toggle="modal" data-target="#modal-default"onclick ='return hello()'>delete</button></td>
       
    
    
    
    </tr>
    <?php 

}

?>
  
    
        </tbody>
       
               </table>
               <div id="ajaxTable">

               </div>
               <?php 
$sql1="SELECT * FROM demo ";
$result1 = mysqli_query($conn, $sql1) or die("Query Failed.");


if(mysqli_num_rows($result1) > 0){

  $total_record = mysqli_num_rows($result1);


  $total_page = ceil($total_record/$limit );


}
$start = ($page - 1);
switch($start){
    case 0:
    $start = 1;
    case -1 :
    $start = 1;
    case -2 :
    $start = 1;
    case -3 :
    $start = 1;
}
$end = ($page + 1);
if($end > $page){
    $end = $page;
}
?>
 <ul>
<a href="?page=1" style="background-color: #17a2b8;">First</a>


<a href="<?php if($page <= 1){echo'#';}else{ echo "?page=".$page -1;}?>"style="background-color: #17a2b8;"><<</a>
<?php

for($i=$start; $i <= $end ; $i++){

   echo "<a href='?page=$i'style='background-color: #17a2b8;'>".$i."</a>";
}
?>
<a href="<?php if($page == $total_page ){echo'#';}else{ echo "?page=".$page +1;}?>"style="background-color: #17a2b8;">>></a>

<a href="?page=<?php echo  $total_page;?>"style="background-color: #17a2b8;">Last</a>
 
</ul>

<?php  

?>
 </select  >
   </form>
 
</nav>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid
     -->
    </section>

    
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- DataTables  & Plugins -->

<script src="AdminLTE-3.2.0/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="AdminLTE-3.2.0/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="AdminLTE-3.2.0/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="AdminLTE-3.2.0/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="AdminLTE-3.2.0/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="AdminLTE-3.2.0/plugins/jszip/jszip.min.js"></script>
<script src="AdminLTE-3.2.0/plugins/pdfmake/pdfmake.min.js"></script>
<script src="AdminLTE-3.2.0/plugins/pdfmake/vfs_fonts.js"></script>
<script src="AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="AdminLTE-3.2.0./dist/js/demo.js"></script>
<script src="AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Page specific script -->
<!-- Bootstrap 4 -->
<script src="AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="AdminLTE-3.2.0/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->

<script type="text/javascript">
 // Live Search
 $("#search").on("keyup",function(){
       var search_term = $(this).val();
       $.ajax({
         url: "ajax-live-search.php",
         type: "POST",
         data : {search:search_term },
         success: function(response) {
           $('#ajaxTable').html(response);
          console.log(response);
         }
       });
     });
</script>


</body>
</html>
