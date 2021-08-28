

<div class="container mt-5">
<?php  if(!empty($products)): ?>
    <div class="row">
    <?php 
        foreach($products as $pro): ?>
        <div class="col-lg-5 mx-auto mb-3">
            <div class="card border-0 shadow-sm">
            <a href="<?= base_url('home/product/'.$pro->p_id);?>">
                <img src="<?= base_url("assets/".$pro->image);?>" alt="" class="w-100 border border-light" style="object-fit:cover;height:220px">
            </a>
                <div class="card-body p-2">
                    <h2 class="h6 pt-0 text-capitalize font-theme text-truncate"><?= $pro->food_name;?></h2>
                    <h2 class="h6 pt-0 text-capitalize font-theme text-truncate"><?= $pro->category;?></h2>
                    
                          <h2 class="h4 mb-1 text-capitalize font-weight-blod text-truncate">made by: <?= $pro->made_by;?></h2>
                          <h2 class="h4 mb-1 font-weight-blod">contact: <?= $pro->contact;?></h2>
                          <h2 class="small"><?= $pro->category;?></h2>
                          
                         <h2>₹<?= $pro->price - $pro->discount;?><small><del>₹<?= $pro->price;?>/-</del></small></h2>
                         <h5 class="text-muted">you save ₹<?= $pro->discount;?></h5>
                </div>
            </div> 
        </div>
    <?php endforeach; ?> 
    </div> 
        <?php  else: ?>
        
        <div class="row">
            <div class="col-3 mx-auto mt-5 pt-5 text-center">
            <h1><i class="fas fa-sad-cry"></i></h1>
                <h5 class="lead text-muted">Food Item Is Not Found</h5>  
                <p class="small text-muted">Please try with another category of  Food or Food Items</p>  
            </div>
        </div>

    <?php endif;?>
</div>