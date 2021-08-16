<?php 
    if(isset($_GET['status'])){
        if($_GET['status']=='edit_img'){
            $id = $_GET['id'];
        }
    }

    if(isset($_POST['change_img_btn'])){
        $msg = $obj->edit_img($_POST);
    }

?>

<div class="shadow m-5 p-5">
    <form class="form" action="" method="POST" enctype="multipart/form-data">
        <input name="edit_img_id" type="hidden" value="<?php echo $id ?>">
        <div class="form-group">
        <span class="text-success"><?php if(isset($msg)){echo $msg;} ?></span> </br>
            <label class="mb-1" for="post_img">Change Thumbnail</label></br>
            <input name="change_img" class="py-2" id="change_img" type="file" />
        </div>

        <input class="form-control btn btn-primary" type="submit" value="Change Thumbail" name="change_img_btn">

    </form>
</div>