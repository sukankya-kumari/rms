<div class="container">
    <div class="row">
        <div class="col-lg-4 mx-auto mt-5">
            <div class="card">
                <div class="card-body">
                    <?= form_open("admin/login");?>
                        
                        <div class="form-group">
                            <label for="" class="m-0 p-0">username</label>
                            <input type="text" class="form-control" name="contact">
                        </div>
                        <div class="form-group">
                            <label for="" class="m-0 p-0">password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success form-control">
                        </div>
                    <?= form_close();?>
                </div>
            </div>
        </div>
    </div>
</div>