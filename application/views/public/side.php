 <div class="list-group list-group-flash">
   <?php foreach($category as $cat):?>
         <a href="<?= base_url('home/category/'.$cat->cat_id);?>" class="list-group-item list-group-itemaction-small text-dark"><?= $cat->title;?></a>
<?php endforeach;?>
</div>