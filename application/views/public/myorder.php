<div class="container mt-5">
   <div class="row">
   <div class="col-lg-12">
   <h1> my order</h1>
</div>
       <div class="col-lg-9">
           <?php
           $total = 0;
           $price = 0;
           if(!empty($order)):
           if($order[0]->coupon != null){
               $total-= $order[0]->amount;
           }
           foreach($order_item as $oi):?>
           <div class="card mb-2">
               <div class="row">
                   <div class="col-lg-2">
                       <img src="<?= base_url('assets/'.$oi->image);?>" alt="" class="card-img-top">
                   </div>
                   <div class="col">
                       <div class="card-body">
                           <?= $oi->title;?>
                           
                           <div class="col">
                               <a href="<?= base_url('user/reamovecart/'.$oi->id);?>" class="btn btn-danger">-</a>
                               <span><?= $oi->qty;?></span>
                               <a href="<?= base_url('user/addToCart/'.$oi->id);?>" class="btn btn-success">+</a>
                           </div>
                       </div>
                   </div>
                   <div class="col">
                       <a href="<?= base_url('user/remove_tem/'.$oi->id);?>" class="text-muted text-decoration-none my-auto small">Remove</a>
                   </div>
                   <div class="col">
                       <h2 class="font-weight-bold">₹ <?= $amount = ($oi->price - $oi->discount_price )* $oi->qty; $total+=$amount;?></h2>
                       <h6 class="small text-muted"><del>₹<?= $p = $oi->price *$oi->qty; $price+= $p?>/- </del></h6>
                   </div>
               </div>
           </div>
           <?php endforeach;else: echo "no more orders"; endif;?>
       </div>
    </div>
</div>