<?php 

    if(isset($_GET['status'])){
        if($_GET['status']='edit_post'){
            $id = $_GET['id']; 
            $post_data = $obj->get_post_info($id);
        }
    }
    
    if(isset($_POST['update_post_btn'])){
        $msg = $obj->update_post($_POST);
    }


?>

<div class="shadow m-5 p-5">
    <form class="form" action="" method="POST">
        <input name="edit_post_id" type="hidden" value="<?php echo $id; ?>">
        <div class="form-group">
        <span class="text-success"><?php if(isset($msg)){echo $msg;} ?></span> </br>
            <label class="mb-1" for="change_tittle">Post Tittle</label></br>
            <input value="<?php echo $post_data['post_tittle']; ?>" name="change_tittle" class="py-2 form-control" id="change_tittle" type="text" />
        </div>
        <div class="form-group">
            <label class="mb-1" for="change_content">Post Content</label>
            <textarea class="form-control" name="change_content" id="change_content" cols="30" rows="5"><?php echo $post_data['post_content']; ?></textarea>
        </div>

        <input class="form-control btn btn-primary" type="submit" value="Update Post" name="update_post_btn">

    </form>
</div>