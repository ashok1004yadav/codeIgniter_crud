
<br/>
<form method="post" action="<?php echo base_url('productsCreate');?>">
    <div class="row">
        <h1 style="text-align: center;">Add New Product</h1>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Title</label>
                <div class="col-md-9">
                    <input type="text" name="title" class="form-control">
                </div>
            </div>
        </div><br/><br/>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Description</label>
                <div class="col-md-9">
                    <textarea name="description" class="form-control"></textarea>
                </div>
            </div>
        </div><br/><br/><br/><br/>
        <div class="col-md-8 col-md-offset-2" style="text-align: center;">
            <input type="submit" name="Save" class="btn">
        </div>
    </div>
    
</form>