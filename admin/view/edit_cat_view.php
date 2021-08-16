<?php 

    if(isset($_GET['status'])){
        if($_GET['status']='edit_cat'){
            $id= $_GET['id']; 
            $cat_data = $obj->display_category_by_id($id);
        }
    }

    if(isset($_POST['update_btn'])){
        $update_msg = $obj->update_category($_POST);
    }

?>

<div class="shadow m-5 p-5">
    <form class="form" action="" method="POST">
    <span class="text-success"><?php if(isset($update_msg)){echo $update_msg;} ?></span> </br>
    <input name="cat_id" type="hidden" value="<?php echo $cat_data['cat_id'];?>"/>
        <div class="form-group">
            <label class="mb-1" for="u_cat_name">Category Name</label></br>
            <input value="<?php echo $cat_data['cat_name'];?>" name="u_cat_name" class="py-2 form-control" id="u_cat_name" type="text" />
        </div>
        <div class="form-group">
            <label class="mb-1" for="u_cat_des">Category Description</label>
            <textarea class="form-control" name="u_cat_des" id="u_cat_des" cols="30" rows="5"><?php echo $cat_data['cat_des'];?></textarea>
        </div>

        <input class="form-control btn btn-primary" type="submit" value="Update Category" name="update_btn">

    </form>
</div>