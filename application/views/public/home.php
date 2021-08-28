<div class="container-fluid mt-3">
  <div class="row">
      <div class="col-lg-2">
          <h4 class="text-center">Menu</h4>
      </div>
      <div class="col-lg-10">
          <h4 class="text-center">Food Items</h4>
      </div>
  </div>
   <div class="container-fluid p-0 m-0">
    <div class="row no-gutters">
        
        <div class="col-lg-2 mt-1 " style="height:94vh;overflow-y:scroll">
           <?php include_once(APPPATH."views/public/side.php");?>
        </div>
        <div class="col-lg-10 " style="position: absolute;right:0;padding-top:0;padding-left:26px;">
          
           <div class="row">
               <?php foreach($product as $pro):?>
               <div class="col-lg-3 m-0 p-1">
               <div class="card border-0 img-top bg-light border border-light">
                       <a href="<?= base_url('home/product/'.$pro->p_id);?>" class="stretched-link">
                      <img src="<?= base_url('assets/'.$pro->image);?>" class="border border-muted" alt="" width="100%" height="200px">
                       </a>
                       <div class="card-body">
                          <h2 class="h6 mb-1 text-capitalize font-weight-blod text-truncate"><?= $pro->food_name;?></h2>
                          <h2 class="small text-capitalize font-weight-blod text-truncate"><?= $pro->made_by;?>  (<?= $pro->contact;?>)</h2>
                          <p class="text-capitalize m-0 small ">open time: <?= $pro->open_time;?>am</p>
                          <p class="text-capitalize m-0 small ">close time: <?= $pro->close_time;?>pm</p>
                          <h2 class="h4 d-inline"><span class="font-weight-bolder">₹<?= $pro->price - $pro->discount;?>-</span></h2>
                           <small><del>₹<?= $pro->price;?>/-</del></small>
                           <small class="float-right btn btn-success btn-sm">view</small>
                       </div>
                   </div>
           </div>
           <?php endforeach;?>
           </div>
        </div>
    </div>
</div>
</div>