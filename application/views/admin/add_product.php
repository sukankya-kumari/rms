<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body class="bg-white">
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-9 mx-auto">
        <h5 class="text-center h3 mb-3">Add Food Items</h5>
         <div class="card">
             <div class="card-body">
                 <form action="" method="post" enctype="multipart/form-data">
                     <div class="form-group">
                         <label for="title">Food Name</label>
                         <input type="text" name="food_name" class="form-control">
                          
                     </div>  
                    <div class="form-group">
                         <label for="title">Made by</label>
                         <input type="text" name="made_by" class="form-control">
                     </div> 
                    <div class="form-group">
                         <label for="title">Contact</label>
                         <input type="text" name="contact" class="form-control">
                     </div> 
                     <div class="form-group">
                         <label for="category">category</label>
                        <select name="category" class="form-control">
                            <?php foreach($category as $cat):?>
                            
                             <option value="<?= $cat->cat_id;?>"><?= $cat->title;?></option>
                             <?php endforeach;?>
                         </select>
                         <a href="#rock" data-toggle="modal">Create New Category</a>
                     </div>
                     <div class="row">
                         
                     <div class="form-group col">
                         <label for="price">price</label>
                         <input type="number" name="price" class="form-control">
                     </div>
                     <div class="form-group col">
                         <label for="discount_price">discount_price</label>
                         <input type="number" name="discount" class="form-control">
                     </div>
                     </div>
                     <div class="form-group">
                         <label for="image">image</label>
                         <input type="file" name="image" class="form-control">
                     </div>
                     <div class="form-group col">
                         <label for="price">Open Time in Am</label>
                         <a class=""><input type="time" name="open_time" class="form-inline form-control"></a>
                     </div>
                    <div class="form-group col">
                         <label for="price">Close Time in pm</label>
                         <input type="time" name="close_time" class="form-control">
                     </div>
                     <div class="form-group">
                         <label for="description">description</label>
                        <textarea type="text" name="description" rows="5" class="form-control"></textarea>
                     </div>
                     <div class="form-group">
                       <input type="submit" class="btn btn-success form-control">
                     </div>
                 </form>
                  <div class="modal fade" role="dialog" id="rock">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <form action="<?= base_url('admin/add_category');?>" method="post">
                                                                <div class="form-group">
                                                                    <label>Title</label>
                                                                    <input type="text" name="title" class="form-control">
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <label>description</label>
                                                                    <textarea name="description" class="form-control" rows="7"></textarea>
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <input type="submit" name="send" class="btn btn-danger btn-block">
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
             </div>
             </div>      
             </div>
</div>