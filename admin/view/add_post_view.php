<?php

$CategoryName = $obj->display_category();

if(isset($_POST['add_post'])){
    $msg = $obj->add_post($_POST);
}

?>

<h2 class="mt-4">Add Post</h2>
<span class="text-success"><?php if(isset($msg))echo $msg; ?></span>
<form action="" Method="POST" enctype="multipart/form-data">

    <div class="form-group">
        <label class="mb-1" for="post_tittle">Post Tittle</label>
        <input name="post_tittle" class="form-control py-2" id="post_tittle" type="text" />
    </div>

    <div class="form-group">
        <label class="mb-1" for="post_content">Post Content</label>
        <textarea class="form-control" name="post_content" id="post_content" type="text" cols="40" rows="5"></textarea>
    </div>

    <div class="form-group">
        <label class="mb-1" for="post_img">Upload Thumbnail</label><br>
        <input name="post_img" class="py-2" id="post_img" type="file" />
    </div>

    <div class="form-group">
        <label class="mb-1" for="post_category">Select Post Category</label>
        <select class="form-control" name="post_category" id="post_category">
            <?php while($category = mysqli_fetch_assoc($CategoryName)){?>
            <option value="<?php echo $category['cat_id']; ?>"><?php echo $category['cat_name']; ?></option>
            <?php } ?>
        </select>
    </div>

    <div class="form-group">
        <label class="mb-1" for="post_summery">Post Summery</label>
        <input name="post_summery" class="form-control py-2" id="post_summery" type="text" />
    </div>

    <div class="form-group">
        <label class="mb-1" for="post_tag">Post Tag</label>
        <input name="post_tag" class="form-control py-2" id="post_tag" type="text" />
    </div>

    <div class="form-group">
        <label class="mb-1" for="post_status">Post Status</label>
        <select class="form-control" name="post_status" id="post_status">
                <option value="1">Publish</option>
                <option value="2">Unpublish</option>
        </select>
    </div>

    <input class="form-control btn btn-primary" type="submit" value="Add Post" name="add_post">

</form>