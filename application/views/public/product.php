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

<body>
<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color:#ff7675;">
    <a href="" class="navbar-brand font-weight-bold ml-5"><h3>Restaurant</h3></a>
    <ul class="navbar-nav mx-auto">
       
    </ul>
    <ul class="navbar-nav ml-auto">
       <li class="nav-item">
           <a href="" class="nav-link text-white">Home</a>
       </li>
       <li class="nav-item">
           <a href="" class="nav-link text-white">About Us</a>
       </li>
       <li class="nav-item">
           <a href="" class="nav-link text-white">Foods</a>
       </li>
        <li class="nav-item">
           <a href="" class="nav-link text-white">Contact</a>
       </li>
         <?php if($this->session->userdata('admin')):?>
         <li>
           <a class="nav-link active" href="<?= base_url('user/cart');?>" tabindex="-1" aria-disabled="true">Carts <sup><span class="badge badge-danger badge-pill"><?= $ci->count_cart();?></span></sup></a>
       
         </li>
          <li class="nav-item ml-2">
             <div class="dropdown">
                 <button type="button" data-toggle="dropdown" class="nav-link border-0 bg-theme dropdown-toggle"><?= $_SESSION['admin'];?></button>
                 <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?= base_url('auth/signup');?>">My Profile</a>  
                    <a class="dropdown-item" href="<?= base_url('user/myorder');?>">My Orders</a> 
                    <a class="dropdown-item" href="<?= base_url('auth/signup');?>">My return</a> 
                    <a class="dropdown-item" href="<?= base_url('auth/logout');?>">logout</a> 
                 </div>
              </div>
             
              </li>
              <?php else:?>
       
       <div class="dropdown mr-4">
  <button class="btn text-white border-0 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:#ff7675; margin-top:2px;">
    Account
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="<?= base_url('auth/login');?>">Login</a>
    <a class="dropdown-item" href="<?= base_url('auth/signup');?>">Signup</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Help</a>
    
  </div>
</div>
       <?php endif;?>
        
    </ul>
</nav>

<div class="container-fluid p-0">
    <div class="row no-gutters">
        <div class="col-lg-2" style="position:fixed;height:95vh;overflow-y:scroll">
            <?php include_once(APPPATH."views/public/side.php");?>
        </div>
        <div class="col-lg-10 p-4" style="position: absolute;right:0;">
           <div class="row">
               <div class="col-lg-12">
                  <div class="row">
                  <div class="col-lg-5">
                     <img src="<?= base_url('assets/'.$product->image);?>" class="w-100 border border-muted" height="300" alt=""> 
                  </div>
                  <div class="col-lg-6 mx-auto">
                       <div class="card border-0">
                      
                       <div class="card-body">
                          <h2 class="h4 mb-1 text-capitalize font-weight-blod text-truncate">Food name:  <?= $product->food_name;?></h2>
                          <h2 class="h4 mb-1 text-capitalize font-weight-blod text-truncate">made by: <?= $product->made_by;?></h2>
                          <h2 class="h4 mb-1 font-weight-blod">contact: <?= $product->contact;?></h2>
                          <h2 class="small"><?= $product->category;?></h2>
                          
                          <p class="text-capitalize "><?= $product->description;?></p>
                          <p class="text-capitalize "><?= $product->open_time;?>am</p>
                          <p class="text-capitalize "><?= $product->close_time;?>pm</p>
                          
                         <h2>₹<?= $product->price - $product->discount;?><small><del>₹<?= $product->price;?>/-  </del></small></h2>
                         <h5 class="text-muted">you save ₹<?= $product->discount;?></h5>
                         <a href="<?= base_url('user/payment');?>" class="btn btn-lg text-white px-5" style="background-color:#f84f4e;"> Order Now </a>
                         <a href="<?= base_url('user/addToCart/'.$product->p_id);?>" class="btn btn-lg text-white btn-success ml-2 px-5"> Add to Cart</a>
                        </div>
                   </div>
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
