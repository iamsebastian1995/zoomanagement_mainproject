<?php
    session_start();
    error_reporting(0);
    include('dbconnection.php');
    $login_id =$_SESSION['sid'];

if(isset($_POST['submit'])){
  $reason = $_POST['reason'];
  
  $start_date = $_POST['start_date'];
  $last_date = $_POST['last_date'];
  
  $sql="INSERT INTO tbl_leave(`reg_id`,`reason`,`start_date`,`last_date`,`status`) 
  VALUES('$login_id','$reason','$start_date','$last_date','pending')";
  {

        
        $result=mysqli_query($conn,$sql);
        //echo $sql;
       if($result){
        echo '<script>alert("Leave Applied Sucessfully");</script>';
       }else{
        die(mysqli_error($conn));
       }
      
  }
}

      
?>

<!DOCTYPE html>
<html lang="en">

<head>
<script type="text/javascript">
        function preventBack() {
            window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Admin - Add Vaccancy</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <style>
    .errorWrap {
      padding: 10px;
      margin: 0 0 20px 0;
      background: #fff;
      border-left: 4px solid #dd3d36;
      -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
      box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    }
    .succWrap{
      padding: 10px;
      margin: 0 0 20px 0;
      background: #fff;
      border-left: 4px solid #5cb85c;
      -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
      box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    }
  </style>
</head>

<body id="page-top">
    
    
<?php   

?>
  <div id="wrapper">
    <!-- Sidebar -->
    <?php include('includes/sidebar.php');?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <?php include('includes/header.php');?>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page"></li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary"></h6>
                  
                </div>
                <div class="card-body">
                <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6 pt-5">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5 shadow">
                              
                                    <h4 class="text-center">Apply For Leave</h4>
                                <form method="POST" action="#">
                                
                                    <div class="form-group">
                                        <label >Reason :</label>
                                        <input type="text" class="form-control" value=" " name="reason" >  
                                                
                                    </div>

                                    <div class="form-group">
                                        <label >Staring Date :</label>
                                        <input type="date" class="form-control"  value=""  name="start_date" >
                                        
                                    </div>
                                    <div class="form-group">
                                        <label >Last Date :</label>
                                        <input type="date" class="form-control"  value=""  name="last_date" >
                                        
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" name="submit" value="submit" class="btn btn-primary btn-lg w-100 "  >
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
