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
                 <button type="button" data-toggle="dropdown" class="nav-link border-0 dropdown-toggle" style="background-color:#ff7675;"><?= $_SESSION['admin'];?></button>
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
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
   
    <div class="carousel-item active">
      <img src="<?= base_url('assets/WBC_7095.jpg');?>" class="w-100  d-block " style="object-fit:cover;height:350px;opacity:0.85;"  alt="...">
       <div class="carousel-caption">
        <h3>Testy Food</h3>
        <p style="margin-bottom:100px">We delever Quality. Try us and then buy us!</p>
      </div>
        
    </div>
    <div class="carousel-item">
     
      <img src="<?= base_url('assets/wordpress-images-1.png');?>" class="w-100 d-block" style="object-fit:cover;height:350px;opacity:0.85; background-corlo:black;"  alt="...">
      <div class="carousel-caption">
        <h3 class=" h2 font-weight-bold mb-3" style="color:#ff7675;">Find Food</h3>
         <form action="<?= base_url('home/search');?>" class="form-inline" method="get" style="margin-bottom:140px; margin-left:280px">
         
        <input type="search" name="search" class="form-control border-0 rounded-0" size="40" placeholder="Search food">
        <button type="submit" name="find" class="btn rounded-0 px-3 text-white" style="background-color:#ff7675;">Search</button>
    </form>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/better-food-672x372.jpg');?>" class="w-100 d-block" style="object-fit:cover;height:350px;opacity:0.85;"  alt="...">
      
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</body>
</head>
</html>
