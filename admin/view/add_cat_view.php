<?php
    if(isset($_POST['add_cat'])){
        $return_msg = $obj->add_category($_POST);
    }

?>

<h2 class="mt-4">Add Catagory</h2>
<span class="text-success"><?php if(isset($return_msg)){ echo $return_msg; } ?></span>
<form action="" Method="POST">

    <div class="form-group">
        <label class="mb-1" for="cat_name">Category Name</label>
        <input name="cat_name" class="form-control py-2" id="cat_name" type="text"/>
    </div>

    <div class="form-group">
        <label class="mb-1" for="cat_des">Category Description</label>
        <textarea class="form-control" name="cat_des" id="cat_des" type="text" cols="40" rows="5"></textarea>
    </div>

    <input class="form-control btn btn-primary" type="submit" value="Add Category" name="add_cat">


</form>