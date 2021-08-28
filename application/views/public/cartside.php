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

</body>
</head>
</html>
