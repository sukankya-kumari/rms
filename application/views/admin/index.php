<?php 
$ci = &get_instance();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('upload/css/style.css');?>"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<body style="">
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#2c3e50;">
    <a href="" class="navbar-brand font-weight-bold ml-5"><h3>Restaurant</h3></a>
    <ul class="navbar-nav mx-auto">
       
    </ul>
    <ul class="navbar-nav ml-auto">
       <li class="nav-item">
           <a href="<?= base_url('admin/index');?>" class="nav-link text-white">Home</a>
       </li>
       <li class="nav-item">
           <a href="<?= base_url('admin/login');?>" class="nav-link text-white">login</a>
       </li>
    </ul>
</nav>
<div class="container-fluid bg-white mt-3">
    <div class="row">
        <div class="col-lg-3 ml-4">
            <div class="list-group list-group-flash ml-5">
                <a href="" class="list-group-item list-group-item-action text-white" style="background-color:#2c3e50;"><h5>Dashboard</h5></a>
               <a href="" class="list-group-item list-group-item-action text-white" style="background-color:#2c3e50;">Add Food Items</a>
               <a href="" class="list-group-item list-group-item-action text-white" style="background-color:#2c3e50;">Show Food Item</a>
               <a href="" class="list-group-item list-group-item-action text-white" style="background-color:#2c3e50;">About</a>
               <a href="" class="list-group-item list-group-item-action text-white" style="background-color:#2c3e50;">Setting</a>
               <a href="" class="list-group-item list-group-item-action text-white" style="background-color:#2c3e50;">Help</a>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row ml-5 mt-3">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body py-5 shadow" style="background-color:#2bcbba; border: 2px solid #2bcbba;">
                            <p class="h4 text-center font-weight-bold text-white mt-1">Total Item</p>
                            <p class="h3 text-center text-white"><?= $ci->total_food();?></p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body py-5 shadow" style="background-color:#eb5281; border: 2px solid #eb5281;">
                            <p class="h4 text-center font-weight-bold text-white mt-1">Total orders</p>
                            <p class="h3 text-center text-white">0</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body py-5 shadow" style="background-color:#a657f5; border: 2px solid #a657f5;">
                            <p class="h4 text-center font-weight-bold text-white mt-1">Cancel Item</p>
                            <p class="h3 text-center text-white">0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</head>
</html>