<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inventory-Management-System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="text/javascript" src="./js/main.js"></script>
</head>
<body>
    
<!-- <div class="jumbotron"><h1>hello world</h1></div> -->
<?php
include_once("./templates/header.php");
?>
<!-- card -->
<p><br/></p>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">
            <img src="./images/user.png" style="width:60%;" class="card-img-top mx-auto" alt="user">
            <div class="card-body">
                <h5 class="card-title">Profile Info</h5>
                <p class="card-text">ROOT GHOST</p>
                <p class="card-text">Admin</p>
                <p class="card-text">Last Login : xxxx-xx-xx</p>
                <a href="#" class="btn btn-primary">Edit profile</a>
            </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="jumbotron" style="width:100%;height:100%;">
                <h1>Welcome Admin</h1>
                <div class=row>
                    <div class="col-sm-6">
                    <iframe src="http://free.timeanddate.com/clock/i6oxppvl/n389/szw110/szh110/hoc00f/hbw3/hfc000/cf100/hgr0/fav0/fiv0/mqc0f0/mqs2/mql4/mqw4/mqd86/mhc0f0/mhs2/mhl4/mhw4/mhd86/mmc0f0/mml2/mmd88/hhc00f/hhs3/hhl50/hhw11/hmc00f/hms3/hml80/hmw11/hsc00f/hsl90/hsw6" frameborder="0" width="150" height="150"></iframe>
                    </div>
                    <div class="col-sm-6">
                    <div class="card" style="width: 18rem;" >
                        <div class="card-body">
                            <h5 class="card-title">New Orders</h5>
                            <p class="card-text">Here you can make new invoices and new orders</p>
                            <a href="#" class="btn btn-primary">New Orders</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<p></p>
<div class="container">
<div class="row">
<div class="col-md-4">
      <div class="card" style="width:20rem;" >
        <div class="card-body">
         <h5 class="card-title">Manage Categories</h5>
         <p class="card-text">Here you can manage categories and categories</p>
         <a href="#" class="btn btn-primary">Add</a>
         <a href="#" class="btn btn-primary">Manage</a>
     </div>
    </div>
   </div>
   
  <div class="col-md-4">
  <div class="card" style="width: 20rem;" >
        <div class="card-body">
         <h5 class="card-title">Brands</h5>
         <p class="card-text">Here you can manage Brands and add Brands</p>
         <a href="#" class="btn btn-primary">Add</a>
         <a href="#" class="btn btn-primary">Manage</a>
     </div>
    </div>
  </div>
 <div class="col-md-4">
  <div class="card" style="width: 20rem;" >
        <div class="card-body">
         <h5 class="card-title">Products</h5>
         <p class="card-text">Here you can manage Products and add Products</p>
         <a href="#" class="btn btn-primary">Add</a>
         <a href="#" class="btn btn-primary">Manage</a>
     </div>
    </div>
 </div>
</div>
</div>


</body>
</html>
